{!! Form::open(['route'=>['public.user.destroy', $user], 'method'=>'delete', 'class'=>'text-center']) !!}
<button type="submit" class="btn danger">
    <i class="fa fa-times"></i>
    Eliminar mi cuenta
</button>
{!! Form::close() !!}
