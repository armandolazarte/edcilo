@extends ( 'layout/layout_admin' )


@section('content')

    <div class="panel-o-s">

        <div class="head">
            <h1>
                <i class="fa fa-list"></i>
                Administrar paises
            </h1>
        </div>

        <div class="cont-flex">

            <div class="col-1 left">
                @include('user.country.partials.btn_create')
            </div>

            <div class="col-1 right text-right">
                @include('user.country.partials.form_search')
            </div>

        </div>

        <div class="divider"></div>

        @if( count($countries) )

            <table class="table-striped">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Abreviatura</th>
                    <th>Icono</th>
                    <th>
                        <i class="fa fa-gears"></i>
                        Opciones
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($countries as $country)
                    <tr>
                        <td>{{ $country->name }}</td>
                        <td>{{ $country->abbr }}</td>
                        <td class="text-center">{!! $country->icon !!}</td>
                        <td class="text-center">
                            @include('user.country.partials.btn_show')

                            @include('user.country.partials.btn_edit')
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            {!! $countries->appends($name)->render() !!}

        @else

            <p class="text-center text-big text-muted">No hay paises registrados.</p>

        @endif

    </div>

@stop
