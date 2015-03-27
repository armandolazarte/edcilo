{!! Form::open(['route'=>['user.social.destroy', $social], 'method'=>'delete', 'class'=>'']) !!}

<div class="cont-flex">

    <div class="row col-1 left text-right">

        <a class="btn-i-{{ $social->class }}" href="{{ $social->url }}{{ $social->pivot->username }}" target="_blank">
            {!! $social->icon !!} {{ $social->pivot->username }}
        </a>

    </div>

    <div class="row col-1 right">

        <button type="submit" title="Eliminar perfil en {{ $social->name }}" class="btn danger">
            <i class="fa fa-times"></i>

            {!! $social->icon !!}
            Eliminar perfil en
            {{ $social->name }}
        </button>

    </div>

</div>

<div class="message">
    {!! $errors->first('username', '<span class="danger">:message</span>') !!}
    {!! $errors->first('user_social_network_id', '<span class="danger">:message</span>') !!}
</div>

{!! form::close() !!}
