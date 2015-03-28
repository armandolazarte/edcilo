<div class="row">
    {!! Form::label('name', trans('validation.attributes.name') . ':') !!}
    {!! Form::text('name', null, ['autofocus', 'autocomplete'=>'off']) !!}
</div>
<div class="message">
    {!! $errors->first('name', '<span class="danger">:message</span>') !!}
</div>


<div class="row">
    {!! Form::label('description', trans('validation.attributes.description') . ':') !!}
    {!! Form::textarea('description', null, ['autocomplete'=>'off', 'rows'=>3]) !!}
</div>
<div class="message">
    {!! $errors->first('description', '<span class="danger">:message</span>') !!}
</div>


<div class="row">
    {!! Form::label('position', trans('validation.attributes.position') . ':') !!}
    {!! Form::text('position', null, ['autocomplete'=>'off']) !!}
</div>
<div class="message">
    {!! $errors->first('position', '<span class="danger">:message</span>') !!}
</div>
