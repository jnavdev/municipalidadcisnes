<?php

namespace App\Http\Controllers;

use App\AttentionNeighbor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Yajra\Datatables\Facades\Datatables;

class AttentionNeighborController extends Controller
{
    public function index()
    {
        return view('admin.front.attentionneighbors.index');
    }

    public function getData()
    {
        $attentionneighbors = AttentionNeighbor::orderBy('created_at', 'DESC')->select(['id', 'reason', 'rut', 'names', 'surnames', 'address', 'email', 'phone', 'message', 'file', 'created_at']);

        return Datatables::of($attentionneighbors)
            ->addColumn('file', function ($attentionneighbor) {
                if ($attentionneighbor->file) {
                    return '<a download class="btn btn-sm btn-primary" href="' . $attentionneighbor->getFile() . '"><span class="fa fa-download"></span></a>';
                } else {
                    return 'Sin archivo';
                }
            })->addColumn('show', function ($attentionneighbor) {
                return '<a class="btn btn-sm btn-primary" href="/admin/attentionneighbors/' . $attentionneighbor->id . '"><span class="fa fa-eye"></span></a>';
            })->addColumn('destroy', function ($attentionneighbor) {
                return '<button data-id="' . $attentionneighbor->id . '" class="btn btn-sm btn-danger boton-eliminar"><span class="fa fa-trash"></span></button>';
            })->make(true);
    }

    public function show($id)
    {
        $attentionneighbor = AttentionNeighbor::findOrFail($id);
        return view('admin.front.attentionneighbors.show', compact('attentionneighbor'));
    }

    public function destroy($id)
    {
        $attentionneighbor = AttentionNeighbor::findOrFail($id);

        if ($attentionneighbor->file) {
            File::delete(public_path() . '/uploads/attention_neighbors/' . $attentionneighbor->file);
        }

        $attentionneighbor->delete();

        return redirect()->route('attentionneighbors.index')->with('message', 'Registro eliminado exitosamente!');
    }
}
