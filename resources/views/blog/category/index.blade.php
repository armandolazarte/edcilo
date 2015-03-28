@extends ( 'layout/layout_admin' )


@section('content')

    <div class="panel-o-s">

        <div class="head">
            <h1>
                <i class="fa fa-list"></i>
                Administrar categorias del blog
            </h1>
        </div>

        <div class="cont-flex">

            <div class="col-1 left">
                @include('blog.category.partials.btn_create')
            </div>

            <div class="col-1 right text-right">
                @include('blog.category.partials.form_search')
            </div>

        </div>

        <div class="divider"></div>

        @if( count($categories) )

            <table class="table-striped">
                <thead>
                <tr>
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
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->short_description }}</td>
                        <td>{{ $category->position }}</td>
                        <td class="text-center">
                            @include('blog.category.partials.btn_show')

                            @include('blog.category.partials.btn_edit')
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            {!! $categories->appends($name)->render() !!}

        @else

            <p class="text-center text-big text-muted">No hay categorías registradas.</p>

        @endif

    </div>

@stop
