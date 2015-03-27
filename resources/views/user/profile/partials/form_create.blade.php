<div class="row">
    {!! Form::label('name', trans('validation.attributes.name') . ':') !!}
    {!! Form::text('name', null, ['autofocus', 'autocomplete'=>'off']) !!}
</div>
<div class="message">
    {!! $errors->first('name', '<span class="danger">:message</span>') !!}
</div>


<div class="row">
    {!! Form::label('last_name', trans('validation.attributes.last_name') . ':') !!}
    {!! Form::text('last_name', null, ['autocomplete'=>'off']) !!}
</div>
<div class="message">
    {!! $errors->first('last_name', '<span class="danger">:message</span>') !!}
</div>


{!! Form::checkbox('v_bday', 1, null, ['id'=>'v_bday']) !!}
{!! Form::label('v_bday', trans('validation.attributes.v_bday')) !!}
<div class="message">
    {!! $errors->first('v_bday', '<span class="danger">:message</span>') !!}
</div>


<div class="row">
    {!! Form::label('birthday', trans('validation.attributes.birthday') . ':') !!}
    {!! Form::text('birthday', null, ['autocomplete'=>'off']) !!}
</div>
<div class="message">
    {!! $errors->first('birthday', '<span class="danger">:message</span>') !!}
</div>


{!! Form::checkbox('v_sex', 1, null, ['id'=>'v_sex']) !!}
{!! Form::label('v_sex', trans('validation.attributes.v_sex')) !!}
<div class="message">
    {!! $errors->first('v_sex', '<span class="danger">:message</span>') !!}
</div>


<div class="row">
    {!! Form::label('user_sex_id', trans('validation.attributes.user_sex_id') . ':') !!}
    {!! Form::select('user_sex_id', $sex_list) !!}
</div>
<div class="message">
    {!! $errors->first('user_sex_id', '<span class="danger">:message</span>') !!}
</div>


{!! Form::checkbox('v_country', 1, null, ['id'=>'v_country']) !!}
{!! Form::label('v_country', trans('validation.attributes.v_country')) !!}
<div class="message">
    {!! $errors->first('v_country', '<span class="danger">:message</span>') !!}
</div>


<div class="row">
    {!! Form::label('user_country_id', trans('validation.attributes.user_country_id') . ':') !!}
    {!! Form::select('user_country_id', $country_list) !!}
</div>
<div class="message">
    {!! $errors->first('user_country_id', '<span class="danger">:message</span>') !!}
</div>


<div class="divider"></div>


<div class="row">
    {!! Form::label('biography', trans('validation.attributes.biography') . ':') !!}
    {!! Form::textarea('biography', null, ['rows' => '4']) !!}
</div>
<div class="message">
    {!! $errors->first('biography', '<span class="danger">:message</span>') !!}
</div>
