@extends ( 'layout/layout_admin' )


@section('content')

    <div class="panel-o-s">

        <div class="head">
            <h1>
                <i class="fa fa-list"></i>
                Administrar subcategorías del blog
            </h1>
        </div>

        <div class="cont-flex">

            <div class="col-1 left">
                @include('blog.subcategory.partials.btn_create')
            </div>

            <div class="col-1 right text-right">
                @include('blog.subcategory.partials.form_search')
            </div>

        </div>

        <div class="divider"></div>

        @if( count($subcategories) )

            <table class="table-striped">
                <thead>
                <tr>
                    <th>Categoría</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Posición</th>
                    <th>
                        <i class="fa fa-gears"></i>
                        Opciones
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($subcategories as $subcategory)
                    <tr>
                        <td>
                            <a href="{{ route('admin.blog.category.show', $subcategory->category) }}">
                                {{ $subcategory->category->name }}
                            </a>
                        </td>
                        <td>{{ $subcategory->name }}</td>
                        <td>{{ $subcategory->short_description }}</td>
                        <td>{{ $subcategory->position }}</td>
                        <td class="text-center">
                            @include('blog.subcategory.partials.btn_show')

                            @include('blog.subcategory.partials.btn_edit')
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            {!! $subcategories->appends($name)->render() !!}

        @else

            <p class="text-center text-big text-muted">No hay subcategorías registradas.</p>

        @endif

    </div>

@stop
