@extends ( 'layout/layout_admin' )


@section('content')

    <div class="panel-o-s">

        <div class="head cont-flex fx-center">
            <div class="col-1">
                <h1>
                    Red social:
                    {!! $socialNetwork->icon !!}
                    {{ $socialNetwork->name }}
                </h1>
            </div>

            <div class="col-1 text-right">
                @include('user.socialNetwork.partials.btn_edit')

                @include('user.socialNetwork.partials.btn_index')
            </div>
        </div>


        <div class="cont-flex">

            <div class="col-1 left">
                <ul class="leaders">
                    <li>
                        <span><strong>Nombre:</strong></span>
                        <span>{{ $socialNetwork->name }}</span>
                    </li>
                </ul>
            </div>

            <div class="col-1 center">
                <ul class="leaders">
                    <li>
                        <span><strong>URL:</strong></span>
                        <span>{{ $socialNetwork->url }}</span>
                    </li>
                </ul>
            </div>

            <div class="col-1 right">
                <ul class="leaders">
                    <li>
                        <span><strong>Icono:</strong></span>
                        <span>{!! $socialNetwork->icon !!}</span>
                    </li>
                    <li>
                        <span><strong>Clase:</strong></span>
                        <span>{{ $socialNetwork->class }}</span>
                    </li>
                </ul>
            </div>

        </div>

    </div>

    <div class="panel-o cont-flex fx-center">

        <div class="col-1 left">
            <span class="text-small-meta">
                Creado: {{ $socialNetwork->created_at }}
                <i class="fa fa-angle-right"></i>
                Ultima modificación: {{ $socialNetwork->updated_at }}
            </span>
        </div>

        <div class="col-1 right text-right">
            @include('user.socialNetwork.partials.form_destroy')
        </div>

    </div>

@stop
