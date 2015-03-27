@extends ( 'layout/layout_admin' )


@section('content')

    <div class="panel-o-s">

        <div class="head">
            <h1>
                <i class="fa fa-list"></i>
                Administrar redes sociales
            </h1>
        </div>

        <div class="cont-flex">

            <div class="col-1 left">
                @include('user.socialNetwork.partials.btn_create')
            </div>

            <div class="col-1 right text-right">
                @include('user.socialNetwork.partials.form_search')
            </div>

        </div>

        <div class="divider"></div>

        @if( count($socialNetworks) )

            <table class="table-striped">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Url</th>
                    <th>Icono</th>
                    <th>Clase</th>
                    <th>
                        <i class="fa fa-gears"></i>
                        Opciones
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($socialNetworks as $socialNetwork)
                    <tr>
                        <td>{{ $socialNetwork->name }}</td>
                        <td>{{ $socialNetwork->url }}</td>
                        <td class="text-center">{!! $socialNetwork->icon !!}</td>
                        <td>{{ $socialNetwork->class }}</td>
                        <td class="text-center">
                            @include('user.socialNetwork.partials.btn_show')

                            @include('user.socialNetwork.partials.btn_edit')
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            {!! $socialNetworks->appends($name)->render() !!}

        @else

            <p class="text-center text-big text-muted">No hay redes sociales registradas.</p>

        @endif

    </div>

@stop
