<section class="panel">

    @include('user.user.partials.widget_header')

    @if( Auth::check() AND Auth::user()->id == $user->id )
        @include('user.user.partials.widget_nav')
    @endif

    @include('user.user.partials.widget_body')

    @include('user.user.partials.widget_list')

    @include('user.user.partials.widget_footer')

</section>
