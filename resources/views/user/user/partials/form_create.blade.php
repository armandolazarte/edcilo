<div class="row">
    {!! Form::label('name', trans('validation.attributes.name') . ':') !!}
    {!! Form::text('name', null, ['autofocus', 'autocomplete'=>'off']) !!}
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


<div class="row">
    {!! Form::label('password', trans('validation.attributes.password') . ':') !!}
    {!! Form::password('password') !!}
</div>
<div class="message">
    {!! $errors->first('password', '<span class="danger">:message</span>') !!}
</div>


<div class="row">
    {!! Form::label('type', trans('validation.attributes.type') . ':') !!}
    {!! Form::select('type', ['root'=>'root', 'admin'=>'admin', 'user'=>'user']) !!}
</div>
<div class="message">
    {!! $errors->first('type', '<span class="danger">:message</span>') !!}
</div>
