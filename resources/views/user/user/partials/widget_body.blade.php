<div class="panel-body">

    <ul class="leaders">
        <li>
            <span><strong>Nombre de usuario:</strong></span>
            <span>{{ $user->name }}</span>
        </li>
        <li>
            <span><strong>Tipo de usuario:</strong></span>
            <span>{{ $user->type }}</span>
        </li>
        <li>
            <span><strong>Correo electrónico:</strong></span>
            <span>{{ $user->email }}</span>
        </li>
    </ul>

    <div class="row"></div>

    @if( !$user->profile )

        @if(Auth::check() AND Auth::user()->id == $user->id )
            @include('user.profile.partials.btn_create')
        @endif

    @else

        <ul class="leaders">
            <li>
                <span><strong>Nombre:</strong></span>
                <span>{{ $user->full_name }}</span>
            </li>

            @if( $user->profile->v_bday )
                <li>
                    <span><strong>Fecha de nacimiento:</strong></span>
                    <span>{{ $user->profile->birthday }}</span>
                </li>
            @endif

            @if( $user->profile->v_sex )
                <li>
                    <span><strong>Sexo:</strong></span>
                    <span>{{ $user->profile->sex->name }}</span>
                </li>
            @endif

            @if( $user->profile->v_country )
                <li>
                    <span><strong>País:</strong></span>
                    <span>{{ $user->profile->country->name }}</span>
                </li>
            @endif
        </ul>

        @if($user->profile->biography)

            <div class="row"></div>

            <strong>Acerca de {{ $user->name }}:</strong>
            {{ $user->profile->biography }}

        @endif

    @endif

</div>
