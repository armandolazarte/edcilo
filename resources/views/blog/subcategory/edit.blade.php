@extends ( 'layout/layout_admin' )


@section('content')

    <div class="panel-o-s">

        <div class="head cont-flex fx-center">
            <div class="col-1">
                <h1>
                    <i class="fa fa-pencil"></i>
                    Modificar subcategoría {{ $subcategory->name }} del blog
                </h1>
            </div>

            <div class="col-1 text-right">
                @include('blog.subcategory.partials.btn_show')

                @include('blog.subcategory.partials.btn_index')
            </div>
        </div>

        {!! Form::model($subcategory, ['route'=>['admin.blog.subcategory.update', $subcategory], 'method'=>'put', 'class'=>'form-horizontal']) !!}

        @include('blog.subcategory.partials.form_create')

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
