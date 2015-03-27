@extends('layout.layout_public')

@section('title')| {{ $user->name }}@stop

@section('content')

    @include('layout.partials.sidebar')

    <div class="col-5 w_margin">

        @include('layout/partials/messages')

        <div class="cont-flex">

            <div class="col-3 left">

                <div class="panel-o-s">

                    <div class="head cont-flex fx-center">
                        <div class="col-1">
                            <h1>
                                <i class="fa fa-camera"></i>
                                Modificar mis imagenes de perfil
                            </h1>
                        </div>

                        <div class="col-1 text-right">
                            @include('user.cover.partials.btn_show')
                        </div>
                    </div>


                    {!! Form::model($cover, ['route'=>['cover.update', $cover], 'method'=>'put', 'files'=>true, 'class'=>'form-horizontal']) !!}

                    @include('user.cover.partials.form_create')

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


                @include('user.cover.partials.form_destroy')

            </div>

            <div class="col-2 right">

                @include('user.user.partials.widget')

            </div>

        </div>

    </div>

@stop
