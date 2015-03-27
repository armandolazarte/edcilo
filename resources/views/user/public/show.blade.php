@extends('layout.layout_public')

@section('title')| {{ $user->name }}@stop

@section('content')

    @include('layout.partials.sidebar')

    <div class="col-5 w_margin">

        @include('layout/partials/messages')

        <div class="cont-flex">

            <div class="col-3 left">

                <div class="panel-o">
                    Datos y estadisticas del usuario
                </div>

            </div>

            <div class="col-2 right">

                @include('user.user.partials.widget')

            </div>

        </div>

    </div>

@stop
