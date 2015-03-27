<nav class="nav-4">
    <ul>
        <li>
            <a href="#" class="trigger-dropdown">
                <i class="fa fa-gears"></i>
            </a>
            <ul class="dropdown-menu">

                <li>
                    <a href="{{ route('public.user.edit', [$user->slug, $user]) }}" tabindex="-1">
                        <i class="fa fa-user"></i>
                        Modificar datos de usuario
                    </a>
                </li>

                @if( $user->profile )
                    <li>
                        <a href="{{ route('profile.edit', $user->profile) }}" tabindex="-1">
                            <i class="fa fa-pencil"></i>
                            Modificar datos de perfil
                        </a>
                    </li>
                @endif

                <li>
                    <a href="{{ route('user.social.create') }}" tabindex="-1">
                        <i class="fa fa-share-alt"></i>
                        Modificar redes sociales
                    </a>
                </li>


                <li>
                    <a href="{{ route('cover.edit', $user->cover) }}" tabindex="-1">
                        <i class="fa fa-camera"></i>
                        Modificar imagenes de perfil
                    </a>
                </li>

            </ul>
        </li>
    </ul>
</nav>
