{{-- Falsificación de peticiones en sitios cruzados --}}
@csrf
@include('dashboard.structure.validation-error')
<div class="form-group">
    {{-- input:text --}}
    <input class="form-control" type="text" name="name" id="name"
    placeholder="Nombre publicación" value="{{old('name', $category -> name)}}">
</div>

<div class="form-group">
    <textarea class="form-control" name="description" id="description" cols="30" rows="10"
        placeholder="Contenido de la publicación">
        {{old('description', $category -> description)}}
    </textarea>
</div>
<button type="submit" class="btn btn-success btn-sm">Aceptar</button>
<a class="btn btn-danger btn-sm" href="{{ URL::previous() }}">Cancelar</a>
