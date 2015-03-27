<div class="row">
    {!! Form::label('name', trans('validation.attributes.name') . ':') !!}
    {!! Form::text('name', null, ['autofocus', 'autocomplete'=>'off']) !!}
</div>
<div class="message">
    {!! $errors->first('name', '<span class="danger">:message</span>') !!}
</div>


<div class="row">
    {!! Form::label('url', trans('validation.attributes.url') . ':') !!}
    {!! Form::text('url', null, ['autocomplete'=>'off']) !!}
</div>
<div class="message">
    {!! $errors->first('url', '<span class="danger">:message</span>') !!}
</div>


<div class="row">
    {!! Form::label('icon', trans('validation.attributes.icon') . ':') !!}
    {!! Form::text('icon', null, ['autocomplete'=>'off']) !!}
</div>
<div class="message">
    {!! $errors->first('icon', '<span class="danger">:message</span>') !!}
</div>


<div class="row">
    {!! Form::label('class', trans('validation.attributes.class') . ':') !!}
    {!! Form::text('class', null, ['autocomplete'=>'off']) !!}
</div>
<div class="message">
    {!! $errors->first('class', '<span class="danger">:message</span>') !!}
</div>
