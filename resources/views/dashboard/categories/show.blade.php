@extends('dashboard.master')
@section('content')
    <div class="form-group">
        <input readonly class="form-control" type="text" name="name" id="name"
            placeholder="Categoría" value="{{ $category->name }}">
    </div>

    <div class="form-group">
        <textarea readonly class="form-control" name="description" id="description"
        cols="30" rows="10" placeholder="Descripción">
            {{ $category->description }}
        </textarea>
    </div>
    <a class="btn btn-danger btn-sm" href="{{ URL::previous() }}">Aceptar</a>
@endsection
