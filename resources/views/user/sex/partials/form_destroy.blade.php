{!! Form::open(['route'=>['admin.sex.destroy', $sex], 'method'=>'delete']) !!}

<button type="submit" class="btn danger" title="Eliminar a {{ $sex->name }}">
    <i class="fa fa-trash"></i>
    Eliminar
</button>

{!! Form::close() !!}
