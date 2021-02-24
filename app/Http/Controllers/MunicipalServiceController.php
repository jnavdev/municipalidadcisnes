<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\MunicipalServiceRepository;
use App\MunicipalService;
use Yajra\Datatables\Facades\Datatables;

class MunicipalServiceController extends Controller
{
    private $municipalServiceRepository;

    public function __construct(MunicipalServiceRepository $municipalServiceRepository)
    {
        $this->municipalServiceRepository = $municipalServiceRepository;
    }

    public function index()
    {
        return view('admin.front.municipalservices.index');
    }

    public function getData()
    {
        $municipalServices = $this->municipalServiceRepository->paginateMunicipalServices();

        return Datatables::of($municipalServices)
            ->addColumn('body', function ($municipalService) {
                return substr(strip_tags($municipalService->body), 0, 100) . '...';
            })->addColumn('edit', function ($municipalService) {
                return '<a class="btn btn-sm btn-primary" href="/admin/municipalservices/' . $municipalService->id . '/edit"><span class="fa fa-pencil"></span></a>';
            })->addColumn('destroy', function ($municipalService) {
                return '<button data-id="' . $municipalService->id . '" class="btn btn-sm btn-danger boton-eliminar"><span class="fa fa-trash"></span></button>';
            })->make(true);
    }

    public function create()
    {
        return view('admin.front.municipalservices.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'images' => 'required',
            'image' =>  'required|mimes:jpg,jpeg,png',
            'title' => 'required',
            'body' => 'required',
            'text' => 'required',
            'url' => 'required|url',

            'images.*' => 'required|mimes:jpg,jpeg,png'
        ]);

        $this->municipalServiceRepository->storeMunicipalService(
            new MunicipalService,
            $request->file('image'),
            $request->title,
            $request->body,
            $request->images,
            $request->input('text'),
            $request->input('url')
        );

        return redirect()->route('municipalservices.index')->with('message', 'Servicio Municipal registrado exitosamente!');
    }

    public function edit($id)
    {
        $municipalService = $this->municipalServiceRepository->find($id);
        return view('admin.front.municipalservices.edit', compact('municipalService'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'image' =>  'mimes:jpg,jpeg,png',
            'title' => 'required',
            'body' => 'required',
            'text' => 'required',
            'url' => 'required|url'
        ]);

        $municipalService = $this->municipalServiceRepository->find($id);

        $this->municipalServiceRepository->updateMunicipalService(
            $municipalService,
            $request->file('image'),
            $request->title,
            $request->body,
            $request->input('text'),
            $request->input('url')
        );

        return redirect()->route('municipalservices.index')->with('message', 'Servicio Municipal actualizado exitosamente!');
    }

    public function destroy($id)
    {
        $this->municipalServiceRepository->destroyMunicipalService($id);
        return redirect()->route('municipalservices.index')->with('message', 'Servicio Municipal eliminado exitosamente!');
    }

    public function storeImages(Request $request, $id)
    {
        $this->validate($request, [
            'images' =>  'required',
            'images.*' => 'mimes:jpg,jpeg,png'
        ]);

        $municipalService = $this->municipalServiceRepository->find($id);

        $this->municipalServiceRepository->uploadMultipleImages($municipalService, $request->images);

        return redirect()->back()->with('message', 'Imágenes agregadas exitosamente!');
    }

    public function destroyImage($id)
    {
        $message = $this->municipalServiceRepository->deleteMunicipalServiceImage($id);

        return redirect()->back()->with('message', $message);
    }
}
