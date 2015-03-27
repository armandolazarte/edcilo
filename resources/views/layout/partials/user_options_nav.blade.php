<aside>
    @if( Auth::guest() )

        <div class="cont-flex">

            <div class="col-1">
                <a href="{{ url('/auth/register') }}" class="btn success">
                    {{ trans('messages.register') }}
                </a>
            </div>

            <div class="col-1">
                <a href="{{ url('/auth/login') }}" class="btn info">
                    <i class="fa fa-sign-in"></i>
                    {{ trans('messages.login') }}
                </a>
            </div>

        </div>

    @else

        <a class="username" href="{{ route('public.user.show', [Auth::user()->slug, Auth::user()]) }}">
            {{ Auth::user()->full_name }}
        </a>

        <div class="menu-user">
            <button class="btn-s info trigger-dropdown" type="button"></button>
            <ul class="dropdown-menu">
                <li>
                    <a tabindex="-1" href="{{ route('public.user.show', [Auth::user()->slug, Auth::user()]) }}">
                        <i class="fa fa-user"></i>
                        Perfil
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="{{ url('/auth/logout') }}" tabindex="-1">
                        <i class="fa fa-sign-out"></i>
                        {{ trans('messages.logout') }}
                    </a>
                </li>
            </ul>
        </div>

        <div class="notifications">
            <button class="trigger-dropdown" type="button">
                <span class="badge">
                    <span>12</span>
                </span>
            </button>
            <ul class="dropdown-menu globe">
                <li>
                    <a tabindex="-1" href="#">Action</a>
                </li>
                <li>
                    <a tabindex="-1" href="#">Another action</a>
                </li>
                <li>
                    <a tabindex="-1" href="#">Something else here</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a tabindex="-1" href="#">Separated link</a>
                </li>
            </ul>
        </div>

        <div>
            <img src="{{ asset( Auth::user()->cover->photo ) }}" alt="user"/>
        </div>

    @endif
</aside>
