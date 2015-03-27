{!! Form::open(['route'=>['public.user.update.password', $user], 'method'=>'put', 'class'=>'form-horizontal']) !!}


<div class="row">
    {!! Form::label('old_password', trans('validation.attributes.password') . ':') !!}
    {!! Form::password('old_password') !!}
</div>
<div class="message">
    {!! $errors->first('old_password', '<span class="danger">:message</span>') !!}
</div>


<div class="divider"></div>


<div class="row">
    {!! Form::label('password', trans('validation.attributes.new_password') . ':') !!}
    {!! Form::password('password') !!}
</div>
<div class="message">
    {!! $errors->first('password', '<span class="danger">:message</span>') !!}
</div>


<div class="row">
    {!! Form::label('password_confirmation', trans('messages.password_confirmation') . ':') !!}
    {!! Form::password('password_confirmation') !!}
</div>
<div class="message">
    {!! $errors->first('password_confirmation', '<span class="danger">:message</span>') !!}
</div>


<div class="row-buttons">

    <button type="submit">
        <i class="fa fa-save"></i>
        Cambiar mi contraseña
    </button>

</div>

{!! Form::close() !!}
