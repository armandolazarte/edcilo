<div class="panel-header" style="background-image: url('{{ asset( $user->cover->cover ) }}')">

    <figure class="image">
        <img src="{{ asset( $user->cover->photo ) }}" alt="{{ $user->name }}">
    </figure>

    <div class="title">
        <a href="{{ route('public.user.show', [$user->slug, $user->id]) }}">
            <h4>{{ $user->full_name }}</h4>
        </a>
        <span>{{ $user->email }}</span>
    </div>

</div>
