@extends ( 'layout/layout_admin' )


@section('content')

<div class="panel-o-s">

    <div class="head cont-flex fx-center">
        <div class="col-1">
            <h1>
                Sexo:
                {!! $sex->icon !!}
                {{ $sex->name }}
            </h1>
        </div>

        <div class="col-1 text-right">
            @include('user.sex.partials.btn_edit')

            @include('user.sex.partials.btn_index')
        </div>
    </div>


    <div class="cont-flex">

        <div class="col-1 left">
            <ul class="leaders">
                <li>
                    <span><strong>Nombre:</strong></span>
                    <span>{{ $sex->name }}</span>
                </li>
            </ul>
        </div>

        <div class="col-1 center">
            <ul class="leaders">
                <li>
                    <span><strong>Abreviatura:</strong></span>
                    <span>{{ $sex->abbr }}</span>
                </li>
            </ul>
        </div>

        <div class="col-1 right">
            <ul class="leaders">
                <li>
                    <span><strong>Icono:</strong></span>
                    <span>{!! $sex->icon !!}</span>
                </li>
            </ul>
        </div>

    </div>

</div>

    <div class="panel-o cont-flex fx-center">

        <div class="col-1 left">
            <span class="text-small-meta">
                Creado: {{ $sex->created_at }}
                <i class="fa fa-angle-right"></i>
                Ultima modificación: {{ $sex->updated_at }}
            </span>
        </div>

        <div class="col-1 right text-right">
            @include('user.sex.partials.form_destroy')
        </div>

    </div>

@stop
