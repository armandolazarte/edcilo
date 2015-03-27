{!! Form::model($user, ['route'=>['public.user.update', $user], 'method'=>'put', 'class'=>'form-horizontal']) !!}

<div class="row">
    {!! Form::label('name', trans('validation.attributes.name') . ':') !!}
    {!! Form::text('name', null, ['autocomplete'=>'off']) !!}
</div>
<div class="message">
    {!! $errors->first('name', '<span class="danger">:message</span>') !!}
</div>


<div class="row">
    {!! Form::label('email', trans('validation.attributes.email') . ':') !!}
    {!! Form::text('email', null, ['autocomplete'=>'off']) !!}
</div>
<div class="message">
    {!! $errors->first('email', '<span class="danger">:message</span>') !!}
</div>


<div class="row-buttons">

    <button type="submit">
        <i class="fa fa-save"></i>
        Guardar cambios
    </button>

    <button type="reset">
        <i class="fa fa-refresh"></i>
        Reiniciar formulario
    </button>

</div>

{!! Form::close() !!}
