@extends ( 'layout/layout_admin' )


@section('content')

    <div class="panel-o-s">

        <div class="head">
            <h1>
                <i class="fa fa-list"></i>
                Administrar idiomas
            </h1>
        </div>

        <div class="cont-flex">

            <div class="col-1 left">
                @include('user.lang.partials.btn_create')
            </div>

            <div class="col-1 right text-right">
                @include('user.lang.partials.form_search')
            </div>

        </div>

        <div class="divider"></div>

        @if( count($langs) )

            <table class="table-striped">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Nombre nativo</th>
                    <th>Abreviatura</th>
                    <th>
                        <i class="fa fa-gears"></i>
                        Opciones
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($langs as $lang)
                    <tr>
                        <td>{{ $lang->name }}</td>
                        <td>{{ $lang->native }}</td>
                        <td class="text-center">{!! $lang->abbr !!}</td>
                        <td class="text-center">
                            @include('user.lang.partials.btn_show')

                            @include('user.lang.partials.btn_edit')
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            {!! $langs->appends($name)->render() !!}

        @else

            <p class="text-center text-big text-muted">No hay idiomas registrados.</p>

        @endif

    </div>

@stop
