<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\InformationRepository;
use Yajra\DataTables\DataTables;
use App\Models\Information;

class InformationController extends Controller
{
    private $informationRepository;

    public function __construct(InformationRepository $informationRepository)
    {
        $this->informationRepository = $informationRepository;
    }

    public function index()
    {
        return view('admin.front.informations.index');
    }

    public function getData()
    {
        $informations = $this->informationRepository->paginateInformations();

        return Datatables::of($informations)
            ->addColumn('url', function ($information) {
                if ($information->is_poster)
                    return $information->url;
                return 'No posee URL';
            })->addColumn('is_poster', function ($information) {
                if ($information->is_poster)
                    return '<input data-id="'.$information->id.'" checked type="checkbox" name="is_poster" value="1" id="'.$information->id.'" class="poster-click"> <label for="'.$information->id.'">Si</label>';
                return '<input data-id="'.$information->id.'" type="checkbox" name="is_poster" value="1" id="'.$information->id.'" class="poster-click"> <label for="'.$information->id.'">Si</label>';
            })->addColumn('poster_order', function ($information) {
                if ($information->is_poster) {
                    if ($information->poster_order == 1) {
                        return '<select data-id="'.$information->id.'" name="poster_order" class="form-control"><option selected value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option></select>';
                    } elseif ($information->poster_order == 2) {
                        return '<select data-id="'.$information->id.'" name="poster_order" class="form-control"><option value="1">1</option><option selected value="2">2</option><option value="3">3</option><option value="4">4</option></select>';
                    } elseif ($information->poster_order == 3) {
                        return '<select data-id="'.$information->id.'" name="poster_order" class="form-control"><option value="1">1</option><option value="2">2</option><option selected value="3">3</option><option value="4">4</option></select>';
                    } elseif ($information->poster_order == 4) {
                        return '<select data-id="'.$information->id.'" name="poster_order" class="form-control"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option selected value="4">4</option></select>';
                    } else {
                        return '<select data-id="'.$information->id.'" name="poster_order" class="form-control"><option selected>Seleccione</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option></select>';
                    }
                } else {
                    return '-';
                }
            })->addColumn('edit', function ($information) {
                return '<a class="btn btn-sm btn-primary" href="/admin/informations/' . $information->id . '/edit"><span class="fa fa-pencil"></span></a>';
            })->addColumn('destroy', function ($information) {
                return '<button data-id="' . $information->id . '" class="btn btn-sm btn-danger boton-eliminar"><span class="fa fa-trash"></span></button>';
            })->rawColumns(['is_poster', 'poster_order', 'edit', 'destroy'])->make(true);
    }

    public function create()
    {
        return view('admin.front.informations.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|mimes:jpg,jpeg,png',
            'title' => 'required',
            'url' => 'url'
        ]);

        $this->informationRepository->storeInformation(
            new Information,
            $request->file('image'),
            $request->title,
            $request->url
        );

        return redirect()->route('informations.index')->with('message', 'Información registrada exitosamente!');
    }

    public function edit($id)
    {
        $information = $this->informationRepository->find($id);
        return view('admin.front.informations.edit', compact('information'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'image' =>  'mimes:jpg,jpeg,png',
            'title' => 'required',
            'url' => 'url'
        ]);

        $information = $this->informationRepository->find($id);

        $this->informationRepository->updateInformation(
            $information,
            $request->file('image'),
            $request->title,
            $request->url
        );

        return redirect()->route('informations.index')->with('message', 'Información actualizada exitosamente!');
    }

    public function destroy($id)
    {
        $this->informationRepository->destroyInformation($id);
        return redirect()->route('informations.index')->with('message', 'Información eliminada exitosamente!');
    }

    public function isPoster(Request $request)
    {
        $id = $request->input('id_is_poster');
        $message = '';
        $information = Information::findOrFail($id);

        if ($information->is_poster) {
            $information->is_poster = false;
            $information->poster_order = null;
            $message = 'Afiche actualizado exitosamente!';
        } else {
            if (Information::where('is_poster', true)->count() < 4) {
                $information->is_poster = true;
                $message = 'Afiche actualizado exitosamente!';
            } else {
                $message = 'Sólo pueden haber 4 afiches activos!';
            }
        }

        $information->save();


        return redirect()->route('informations.index')->with('message', $message);
    }

    public function posterOrder(Request $request)
    {
        $id = $request->input('id_poster_order');

        $oldInformation = Information::where('poster_order', $request->input('input_poster_order'))->first();
        $newInformation = Information::findOrFail($id);

        if ($oldInformation) {
            $oldInformation->poster_order = $newInformation->poster_order;
        }

        $newInformation->poster_order = $request->input('input_poster_order');

        if ($oldInformation) {
            $oldInformation->save();
        }
        $newInformation->save();

        return redirect()->route('informations.index')->with('message', 'Órden actualizado exitosamente!');
    }
}
