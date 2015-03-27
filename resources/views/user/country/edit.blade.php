@extends ( 'layout/layout_admin' )


@section('content')

    <div class="panel-o-s">

        <div class="head cont-flex fx-center">
            <div class="col-1">
                <h1>
                    <i class="fa fa-pencil"></i>
                    Modificar {{ $country->name }}
                </h1>
            </div>

            <div class="col-1 text-right">
                @include('user.country.partials.btn_show')

                @include('user.country.partials.btn_index')
            </div>
        </div>


        {!! Form::model($country, ['route'=>['admin.country.update', $country], 'method'=>'put', 'class'=>'form-horizontal']) !!}

        @include('user.country.partials.form_create')

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

@stop
