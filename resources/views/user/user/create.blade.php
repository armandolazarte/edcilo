@extends ( 'layout/layout_admin' )


@section('content')

    <div class="panel-o-s">

        <div class="head cont-flex fx-center">
            <div class="col-1">
                <h1>
                    <i class="fa fa-sign-in"></i>
                    Registrar nuevo usuario
                </h1>
            </div>

            <div class="col-1 text-right">
                @include('user.user.partials.btn_index')
            </div>
        </div>

        {!! Form::open(['route'=>'admin.user.store', 'class'=>'form-horizontal']) !!}

        @include('user.user.partials.form_create')

        <div class="row-buttons">
            <button type="submit">
                <i class="fa fa-save"></i>
                Guardar
            </button>

            <button type="reset">
                <i class="fa fa-refresh"></i>
                Limpiar formulario
            </button>
        </div>

        {!! Form::close() !!}

    </div>

@stop

