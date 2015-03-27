<div class="panel-list">

    @if( ! count($user->socials) )

        @if(Auth::check() AND Auth::user()->id == $user->id )
            <div class="row text-center">
                <a href="{{ route('user.social.create') }}" class="btn alert">
                    <i class="fa fa-share-alt"></i>
                    Comparte tus redes sociales
                </a>
            </div>
        @endif

    @else

        <ul>
            <li>
                @foreach($user->socials as $social)
                    <a class="btn {{ $social->class }}"
                       href="{{ $social->url }}{{ $social->pivot->username }}"
                       title="{{ $user->name }} en {{ $social->name }}"
                       target="_blank">
                        {!! $social->icon !!}
                    </a>
                @endforeach
            </li>
        </ul>

    @endif
</div>
