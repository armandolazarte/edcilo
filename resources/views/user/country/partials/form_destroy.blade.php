{!! Form::open(['route'=>['admin.country.destroy', $country], 'method'=>'delete']) !!}

<button type="submit" class="btn danger" title="Eliminar a {{ $country->name }}">
    <i class="fa fa-trash"></i>
    Eliminar
</button>

{!! Form::close() !!}
