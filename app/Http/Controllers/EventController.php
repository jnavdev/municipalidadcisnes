<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\EventRepository;
use Yajra\Datatables\Facades\Datatables;
use App\Event;

class EventController extends Controller
{
    private $eventRepository;

    public function __construct(EventRepository $eventRepository)
    {
        $this->eventRepository = $eventRepository;
    }

    public function index()
    {
        return view('admin.front.events.index');
    }

    public function getData()
    {
        $events = $this->eventRepository->paginateEvents();

        return Datatables::of($events)
            ->addColumn('date', function ($event) {
                return date('d-m-Y', strtotime($event->date));
            })->addColumn('edit', function ($event) {
                return '<a class="btn btn-sm btn-primary" href="/admin/events/' . $event->id . '/edit"><span class="fa fa-pencil"></span></a>';
            })->addColumn('destroy', function ($event) {
                return '<button data-id="' . $event->id . '" class="btn btn-sm btn-danger boton-eliminar"><span class="fa fa-trash"></span></button>';
            })->make(true);
    }

    public function create()
    {
        return view('admin.front.events.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|mimes:jpg,jpeg,png',
            'title' => 'required',
            'date' => 'required|date'
        ]);

        $this->eventRepository->storeEvent(
            new Event,
            $request->file('image'),
            $request->title,
            $request->date
        );

        return redirect()->route('events.index')->with('message', 'Evento registrado exitosamente!');
    }

    public function edit($id)
    {
        $event = $this->eventRepository->find($id);
        return view('admin.front.events.edit', compact('event'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'image' =>  'mimes:jpg,jpeg,png',
            'title' => 'required',
            'date' => 'required|date'
        ]);

        $event = $this->eventRepository->find($id);

        $this->eventRepository->updateEvent(
            $event,
            $request->file('image'),
            $request->title,
            $request->date
        );

        return redirect()->route('events.index')->with('message', 'Evento actualizado exitosamente!');
    }

    public function destroy($id)
    {
        $this->eventRepository->destroyEvent($id);
        return redirect()->route('events.index')->with('message', 'Evento eliminado exitosamente!');
    }
}
