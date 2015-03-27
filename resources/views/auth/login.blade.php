@extends('layout.layout_public')

@section('content')

    <div class="col-1 left"></div>

    <div class="col-2 w_margin panel-o">

        <div class="head">
            <h1>{{ trans('messages.login') }}</h1>
        </div>

        <div class="cont-flex">

            <figure class="col-1 left">
                <img src="{{ asset('images/system/edcilo_logo_100.png') }}" alt="edcilo"/>
            </figure>

            <div class="col-2 right">

                @if (count($errors) > 0)
                    <div class="block-alert danger">
                        <strong>Whoops!</strong> There were some problems with your input.
                    </div>
                @endif

                <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="row">
                        {!! Form::email('email', null, ['autofocus', 'placeholder'=>trans('validation.attributes.email')]) !!}
                    </div>
                    <div class="message">
                        {!! $errors->first('email', '<span class="danger">:message</span>') !!}
                    </div>

                    <div class="row">
                        {!! Form::password('password', ['placeholder'=>trans('validation.attributes.password')]) !!}
                    </div>
                    <div class="message">
                        {!! $errors->first('password', '<span class="danger">:message</span>') !!}
                    </div>

                    {!! Form::checkbox('remember', 1, null, ['id'=>'remember']) !!}
                    {!! Form::label('remember', trans('messages.remember_me')) !!}

                    <div class="row"></div>

                    <div class="row-buttons">
                        <button type="submit" class="btn-block">
                            <i class="fa fa-sign-in"></i>
                            {{ trans('messages.login') }}
                        </button>
                    </div>

                    <div class="row"></div>

                    <div class="text-center">
                        <a class="" href="{{ url('/password/email') }}">{{ trans('messages.forgot_password') }}</a>
                    </div>

                </form>

            </div>

        </div>

    </div>

    <div class="col-1 right"></div>

@stop
