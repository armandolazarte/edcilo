@extends('layout.layout_public')

@section('title')| {{ $user->name }}@stop

@section('content')

    @include('layout.partials.sidebar')

    <div class="col-5 w_margin">

        @include('layout/partials/messages')

        <div class="cont-flex">

            <div class="col-3 left">

                <div class="panel-o">

                    <div class="head">
                        <i class="fa fa-pencil"></i>
                        Modificar mis datos de usuario
                    </div>


                    @include('user.public.partials.formUserEdit')


                </div>


                <div class="divider"></div>


                <div class="panel-o">

                    <div class="head">
                        <i class="fa fa-key"></i>
                        Cambiar mi contraseña
                    </div>

                    @include('user.public.partials.formPassword')

                </div>


                <div class="divider"></div>


                <div class="panel">
                    <div class="cover" style="background-image: url('{{ asset($user->cover->cover) }}')" alt="imagen"></div>
                    <div class="overlay bg-danger"></div>
                    <div class="panel-body clr-clear">

                        @include('user.public.partials.formDestroy')

                    </div>
                </div>

            </div>


            <div class="col-2 right">

                @include('user.user.partials.widget')

            </div>

        </div>

    </div>

@stop
