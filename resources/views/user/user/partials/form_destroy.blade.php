{!! Form::open(['route'=>['admin.user.destroy', $user], 'method'=>'delete']) !!}

<button type="submit" class="btn danger" title="Eliminar a {{ $user->name }}">
    <i class="fa fa-trash"></i>
    Eliminar
</button>

{!! Form::close() !!}
