@extends ( 'layout/layout_admin' )


@section('content')

    <div class="panel-o-s">

        <div class="head cont-flex fx-center">
            <div class="col-1">
                <h1>
                    Categoría:
                    {{ $category->name }}
                </h1>
            </div>

            <div class="col-1 text-right">
                @include('blog.category.partials.btn_edit')

                @include('blog.category.partials.btn_index')
            </div>
        </div>


        <div class="cont-flex">

            <div class="col-1 left">
                <ul class="leaders">
                    <li>
                        <span><strong>Nombre:</strong></span>
                        <span>{{ $category->name }}</span>
                    </li>
                </ul>
            </div>

            <div class="col-1 center">
                <ul class="leaders">
                    <li>
                        <span><strong>Posición:</strong></span>
                        <span>{{ $category->position }}</span>
                    </li>
                </ul>
            </div>

            <div class="col-1 right"></div>

        </div>

        <div class="row"></div>

        <strong>Descripción:</strong> {{ $category->description }}

    </div>

    <div class="panel-o cont-flex fx-center">

        <div class="col-1 left">
            <span class="text-small-meta">
                Creado: {{ $category->created_at }}
                <i class="fa fa-angle-right"></i>
                Ultima modificación: {{ $category->updated_at }}
            </span>
        </div>

        <div class="col-1 right text-right">
            @include('blog.category.partials.form_destroy')
        </div>

    </div>

@stop
