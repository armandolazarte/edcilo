<div class="row">
    {!! Form::label('photo', trans('validation.attributes.photo') . ':') !!}
    {!! Form::file('photo', ['autofocus']) !!}
</div>
<div class="message">
    {!! $errors->first('photo', '<span class="danger">:message</span>') !!}
</div>


<div class="row">
    {!! Form::label('cover', trans('validation.attributes.cover') . ':') !!}
    {!! Form::file('cover') !!}
</div>
<div class="message">
    {!! $errors->first('cover', '<span class="danger">:message</span>') !!}
</div>
