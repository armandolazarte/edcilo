@extends ( 'layout/layout_admin' )


@section('content')

    <div class="panel-o-s">

        <div class="head">
            <h1>
                <i class="fa fa-list"></i>
                Administrar sexos
            </h1>
        </div>

        <div class="cont-flex">

            <div class="col-1 left">
                @include('user.sex.partials.btn_create')
            </div>

            <div class="col-1 right text-right">
                @include('user.sex.partials.form_search')
            </div>

        </div>

        <div class="divider"></div>

        @if( count($sexes) )

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
                @foreach($sexes as $sex)
                    <tr>
                        <td>{{ $sex->name }}</td>
                        <td>{{ $sex->abbr }}</td>
                        <td class="text-center">{!! $sex->icon !!}</td>
                        <td class="text-center">
                            @include('user.sex.partials.btn_show')

                            @include('user.sex.partials.btn_edit')
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            {!! $sexes->appends($name)->render() !!}

        @else

            <p class="text-center text-big text-muted">No hay sexos registrados.</p>

        @endif

    </div>

@stop
