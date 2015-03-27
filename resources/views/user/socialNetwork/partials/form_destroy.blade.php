{!! Form::open(['route'=>['admin.socialNetwork.destroy', $socialNetwork], 'method'=>'delete']) !!}

<button type="submit" class="btn danger" title="Eliminar a {{ $socialNetwork->name }}">
    <i class="fa fa-trash"></i>
    Eliminar
</button>

{!! Form::close() !!}
