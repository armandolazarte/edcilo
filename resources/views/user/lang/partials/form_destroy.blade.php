{!! Form::open(['route'=>['admin.lang.destroy', $lang], 'method'=>'delete']) !!}

<button type="submit" class="btn danger" title="Eliminar a {{ $lang->name }}">
    <i class="fa fa-trash"></i>
    Eliminar
</button>

{!! Form::close() !!}
