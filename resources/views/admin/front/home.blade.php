@extends('admin.layouts.master')

@section('content')
    <header id="topbar">
        <div class="topbar-left">
            <ol class="breadcrumb">
                <li class="crumb-active">
                    <a href="{{ url('/admin') }}">Inicio</a>
                </li>
            </ol>
        </div>
    </header>

    <section id="content" class="animated fadeIn">
        <div class="admin-panels fade-onload">
            @foreach (Auth::user()->permissions()->get() as $section)
                @include("admin.sections.{$section->route_name}")
            @endforeach
        </div>
    </section>
@endsection