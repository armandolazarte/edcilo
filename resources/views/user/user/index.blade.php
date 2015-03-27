@extends ( 'layout/layout_admin' )


@section('content')

    <div class="panel-o-s">

        <div class="head">
            <h1>
                <i class="fa fa-list"></i>
                Administrar usuarios
            </h1>
        </div>

        <div class="cont-flex">

            <div class="col-1 left">
                @include('user.user.partials.btn_create')
            </div>

            <div class="col-1 right text-right">
                @include('user.user.partials.form_search')
            </div>

        </div>

        <div class="divider"></div>

        @if( count($users) )

            <table class="table-striped">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Correo electrónico</th>
                    <th>Tipo</th>
                    <th>
                        <i class="fa fa-gears"></i>
                        Opciones
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->type }}</td>
                        <td class="text-center">
                            @include('user.user.partials.btn_show')

                            @include('user.user.partials.btn_edit')
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            {!! $users->appends($data)->render() !!}

        @else

            <p class="text-center text-big text-muted">No hay usuarios registrados.</p>

        @endif

    </div>

@stop
