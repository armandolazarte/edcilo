@extends('layout.layout_public')

@section('title')| {{ $user->name }}@stop

@section('content')

    @include('layout.partials.sidebar')

    <div class="col-5 w_margin">

        @include('layout/partials/messages')

        <div class="cont-flex">

            <div class="col-3 left">

                <div class="panel-o-s">

                    <div class="head cont-flex fx-center">
                        <div class="col-1">
                            <h1>
                                <i class="fa fa-share-alt"></i>
                                Redes sociales
                            </h1>
                        </div>

                        <div class="col-1 text-right">
                            @include('user.userSocialNetwork.partials.btn_show')
                        </div>
                    </div>


                    @foreach($socials as $social)

                        @include('user.userSocialNetwork.partials.form_create')

                    @endforeach

                    @if( count($socials) AND count(Auth::user()->socials) )
                        <div class="divider"></div>
                    @endif

                    @foreach(Auth::user()->socials as $social)

                        @include('user.userSocialNetwork.partials.form_destroy')

                    @endforeach


                </div>

            </div>

            <div class="col-2 right">

                @include('user.user.partials.widget')

            </div>

        </div>

    </div>

@stop
