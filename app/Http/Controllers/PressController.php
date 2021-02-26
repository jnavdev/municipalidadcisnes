<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\PressRepository;
use Yajra\DataTables\DataTables;
use App\Models\Press;

class PressController extends Controller
{
    private $pressRepository;

    public function __construct(PressRepository $pressRepository)
    {
        $this->pressRepository = $pressRepository;
    }

    public function index()
    {
        return view('admin.front.presses.index');
    }

    public function getData()
    {
        $presses = $this->pressRepository->paginatePresses();

        return Datatables::of($presses)
            ->addColumn('date', function ($press) {
                return date('d-m-Y', strtotime($press->date));
            })->addColumn('edit', function ($press) {
                return '<a class="btn btn-sm btn-primary" href="/admin/presses/' . $press->id . '/edit"><span class="fa fa-pencil"></span></a>';
            })->addColumn('destroy', function ($press) {
                return '<button data-id="' . $press->id . '" class="btn btn-sm btn-danger boton-eliminar"><span class="fa fa-trash"></span></button>';
            })->make(true);
    }

    public function create()
    {
        return view('admin.front.presses.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|mimes:jpg,jpeg,png',
            'date' => 'required|date_format:"Y-m-d"'
        ]);

        $this->pressRepository->storePress(
            new Press,
            $request->input('date'),
            $request->file('image')
        );

        return redirect()->route('presses.index')->with('message', 'Registro guardado exitosamente!');
    }

    public function edit($id)
    {
        $press = $this->pressRepository->find($id);
        return view('admin.front.presses.edit', compact('press'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'image' => 'mimes:jpg,jpeg,png',
            'date' => 'required|date_format:"Y-m-d"'
        ]);

        $press = $this->pressRepository->find($id);

        $this->pressRepository->updatePress(
            $press,
            $request->input('date'),
            $request->file('image')
        );

        return redirect()->route('presses.index')->with('message', 'Registro actualizado exitosamente!');
    }

    public function destroy($id)
    {
        $this->pressRepository->destroyPress($id);
        return redirect()->route('presses.index')->with('message', 'Registro eliminado exitosamente!');
    }
}
