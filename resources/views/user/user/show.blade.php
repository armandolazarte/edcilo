@extends ( 'layout/layout_admin' )


@section('content')

    <div class="cont-flex">

        <div class="col-2 left">
            <div class="panel-o">

                <div class="head cont-flex fx-center">
                    <div class="col-1">
                        <h1>
                            Usuario:
                            {{ $user->name }}
                        </h1>
                    </div>

                    <div class="col-1 text-right">
                        @include('user.user.partials.btn_edit')

                        @include('user.user.partials.btn_index')
                    </div>
                </div>

            </div>
        </div>

        <div class="col-1 right">
            @include('user.user.partials.widget')
        </div>

    </div>


    <div class="panel-o cont-flex fx-center">

        <div class="col-1 left">
            <span class="text-small-meta">
                Creado: {{ $user->created_at }}
                <i class="fa fa-angle-right"></i>
                Ultima modificación: {{ $user->updated_at }}
            </span>
        </div>

        <div class="col-1 right text-right">
            @include('user.user.partials.form_destroy')
        </div>

    </div>

@stop
