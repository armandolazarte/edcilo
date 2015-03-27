@extends ( 'layout/layout_admin' )


@section('content')

    <div class="panel-o-s">

        <div class="head cont-flex fx-center">
            <div class="col-1">
                <h1>
                    País:
                    {!! $country->icon !!}
                    {{ $country->name }}
                </h1>
            </div>

            <div class="col-1 text-right">
                @include('user.country.partials.btn_edit')

                @include('user.country.partials.btn_index')
            </div>
        </div>


        <div class="cont-flex">

            <div class="col-1 left">
                <ul class="leaders">
                    <li>
                        <span><strong>Nombre:</strong></span>
                        <span>{{ $country->name }}</span>
                    </li>
                </ul>
            </div>

            <div class="col-1 center">
                <ul class="leaders">
                    <li>
                        <span><strong>Abreviatura:</strong></span>
                        <span>{{ $country->abbr }}</span>
                    </li>
                </ul>
            </div>

            <div class="col-1 right">
                <ul class="leaders">
                    <li>
                        <span><strong>Icono:</strong></span>
                        <span>{!! $country->icon !!}</span>
                    </li>
                </ul>
            </div>

        </div>

    </div>

    <div class="panel-o cont-flex fx-center">

        <div class="col-1 left">
            <span class="text-small-meta">
                Creado: {{ $country->created_at }}
                <i class="fa fa-angle-right"></i>
                Ultima modificación: {{ $country->updated_at }}
            </span>
        </div>

        <div class="col-1 right text-right">
            @include('user.country.partials.form_destroy')
        </div>

    </div>

@stop
