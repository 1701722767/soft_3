@extends('dashboard.master')
@section('content')
    <div class="form-group">
        {{-- input:text --}}
        <input readonly class="form-control" type="text" name="title" id="title"
            placeholder="Nombre publicación" value="{{ $post->title }}">
    </div>
    <div class="form-group">
        <select disabled class="form-control" name="status" id="status">
            <option value="" {{ ($post->status == 'Publicado')? 'selected' : '' }}>Publicado</option>
            <option value="" {{ ($post->status == 'No publicado')? 'selected' : '' }}>No publicado</option>
            <option value=""{{ ($post->status == 'En revisión')? 'selected' : '' }} >En revisión</option>
        </select>
    </div>
    <div class="form-group">
        <textarea readonly class="form-control" name="content" id="content"
        cols="30" rows="10"
            placeholder="Contenido de la publicación">
            {{ $post->content }}
        </textarea>
    </div>
    <a class="btn btn-danger btn-sm" href="{{ URL::previous() }}">Aceptar</a>
@endsection
