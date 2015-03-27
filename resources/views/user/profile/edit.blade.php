@extends('layout.layout_public')

@section('title')| {{ Auth::user()->name }}@stop

@section('content')

    @include('layout.partials.sidebar')

    <div class="col-5 w_margin">

        @include('layout/partials/messages')

        <div class="cont-flex">

            <div class="col-3 left">

                @include('layout/partials/messages')

                <div class="panel-o">

                    <div class="head cont-flex fx-center">
                        <div class="col-1">
                            <h1>
                                <i class="fa fa-pencil"></i>
                                Modificar mi perfil
                            </h1>
                        </div>

                        <div class="col-1 text-right">
                            @include('user.profile.partials.btn_show')
                        </div>
                    </div>


                    {!! Form::model($profile, ['route'=>['profile.update', $profile], 'method'=>'put', 'class'=>'form-horizontal']) !!}

                    @include('user.profile.partials.form_create')

                    <div class="row-buttons">
                        <button type="submit">
                            <i class="fa fa-save"></i>
                            Guardar cambios
                        </button>

                        <button type="reset">
                            <i class="fa fa-refresh"></i>
                            Limpiar formulario
                        </button>
                    </div>

                    {!! Form::close() !!}

                </div>

            </div>

            <div class="col-2 right">

                @include('user.user.partials.widget')

            </div>

        </div>

    </div>

@stop
