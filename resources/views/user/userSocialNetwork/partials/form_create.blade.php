{!! Form::open(['route'=>'user.social.store', 'class'=>'form-horizontal']) !!}

{!! Form::hidden('user_social_network_id', $social->id) !!}
<div class="cont-flex">

    <div class="row col-4 left">
        <label for="username_{{ $social->id  }}">
            {!! $social->icon !!}
            Nombre de usuario en {{ $social->name }}
        </label>
        {!! Form::text('username', null, ['id'=>'username_' . $social->id]) !!}
    </div>

    <div class="row col-1 right">
        <button type="submit" title="Guardar">
            <i class="fa fa-save"></i>
        </button>
    </div>

</div>
<div class="message">
    {!! $errors->first('username', '<span class="danger">:message</span>') !!}
    {!! $errors->first('user_social_network_id', '<span class="danger">:message</span>') !!}
</div>

{!! form::close() !!}
