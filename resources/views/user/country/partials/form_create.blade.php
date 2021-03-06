<div class="row">
    {!! Form::label('name', trans('validation.attributes.name') . ':') !!}
    {!! Form::text('name', null, ['autofocus', 'autocomplete'=>'off']) !!}
</div>
<div class="message">
    {!! $errors->first('name', '<span class="danger">:message</span>') !!}
</div>


<div class="row">
    {!! Form::label('abbr', trans('validation.attributes.abbr') . ':') !!}
    {!! Form::text('abbr', null, ['autocomplete'=>'off']) !!}
</div>
<div class="message">
    {!! $errors->first('abbr', '<span class="danger">:message</span>') !!}
</div>


<div class="row">
    {!! Form::label('icon', trans('validation.attributes.icon') . ':') !!}
    {!! Form::text('icon', null, ['autocomplete'=>'off']) !!}
</div>
<div class="message">
    {!! $errors->first('icon', '<span class="danger">:message</span>') !!}
</div>
