@extends ( 'layout/layout_admin' )


@section('content')

    <div class="panel-o-s">

        <div class="head cont-flex fx-center">
            <div class="col-1">
                <h1>
                    Subcategoría:
                    {{ $subcategory->name }}
                </h1>
            </div>

            <div class="col-1 text-right">
                @include('blog.subcategory.partials.btn_edit')

                @include('blog.subcategory.partials.btn_index')
            </div>
        </div>


        <div class="cont-flex">

            <div class="col-1 left">
                <ul class="leaders">
                    <li>
                        <span><strong>Nombre:</strong></span>
                        <span>{{ $subcategory->name }}</span>
                    </li>
                </ul>
            </div>

            <div class="col-1 center">
                <ul class="leaders">
                    <li>
                        <span><strong>Pertenece a:</strong></span>
                        <span>
                            <a href="{{ route('admin.blog.category.show', $subcategory->category) }}">
                                {{ $subcategory->category->name }}
                            </a>
                        </span>
                    </li>
                </ul>
            </div>

            <div class="col-1 right">
                <ul class="leaders">
                    <li>
                        <span><strong>Posición:</strong></span>
                        <span>{{ $subcategory->position }}</span>
                    </li>
                </ul>
            </div>

        </div>

        <div class="row"></div>

        <strong>Descripción:</strong> {{ $subcategory->description }}

    </div>

    <div class="panel-o cont-flex fx-center">

        <div class="col-1 left">
            <span class="text-small-meta">
                Creado: {{ $subcategory->created_at }}
                <i class="fa fa-angle-right"></i>
                Ultima modificación: {{ $subcategory->updated_at }}
            </span>
        </div>

        <div class="col-1 right text-right">
            @include('blog.subcategory.partials.form_destroy')
        </div>

    </div>

@stop
