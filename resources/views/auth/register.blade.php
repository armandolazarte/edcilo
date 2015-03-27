@extends('layout.layout_public')

@section('content')

    <div class="col-1 left"></div>

    <div class="col-2 w_margin panel-o">

        <div class="head">
            <h1>{{ trans('messages.register') }}</h1>
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

                <form class="form-horizontal" role="form" method="POST" action="{{ route('public.user.store') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">


                    <div class="row">
                        {!! Form::text('name', null, ['autofocus', 'placeholder'=>trans('validation.attributes.name')]) !!}
                    </div>
                    <div class="message">
                        {!! $errors->first('name', '<span class="danger">:message</span>') !!}
                    </div>


                    <div class="row">
                        {!! Form::email('email', null, ['placeholder'=>trans('validation.attributes.email')]) !!}
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


                    <div class="row">
                        {!! Form::password('password_confirmation', ['placeholder'=>trans('messages.password_confirmation')]) !!}
                    </div>


                    <div class="row-buttons">
                        <button type="submit" class="btn-block">
                            {{ trans('messages.register') }}
                        </button>
                    </div>

                </form>

            </div>

        </div>

    </div>

    <div class="col-1 right"></div>

@stop
