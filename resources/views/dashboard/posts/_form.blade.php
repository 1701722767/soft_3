{{-- Falsificación de peticiones en sitios cruzados --}}
@csrf
@include('dashboard.structure.validation-error')
<div class="form-group">
    {{-- input:text --}}
    <input class="form-control" type="text" name="title" id="title" placeholder="Nombre publicación"
        value="{{ old('title', $post->title) }}">
</div>
<div class="form-group">
    <select class="custom-select" name="category_id" id="category_id" aria-label="Default">
        <option selected disabled>Selecciona una opción</option>
        @foreach ($categories as $name => $id)
            <option {{ $post ->category_id == $id ? 'selected':''}} value="{{ $id }}">
                {{ $name }}
            </option>
        @endforeach
    </select>
</div>
{{-- Lista desplegable estática ("Hardcode") de estado de la publicación --}}
<div class="form-group">
    <select class="custom-select" name="status" id="status">
       @include('dashboard.components.state_options',['val'=> $post->status])
    </select>
</div>

{{-- Lista desplegable dinámica de categorías --}}
<div class="form-group">
    <textarea class="form-control" name="content" id="content" cols="30" rows="10"
        placeholder="Contenido de la publicación">
        {{ old('content', $post->content) }}
    </textarea>
</div>

<button type="submit" class="btn btn-success btn-sm">Aceptar</button>
<a class="btn btn-danger btn-sm" href="{{ URL::previous() }}">Cancelar</a>
