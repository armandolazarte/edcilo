<a href="{{ route('public.user.show', [Auth::user()->slug, Auth::user()]) }}"
   class="btn info"
   title="Ver a {{ Auth::user()->name }}">
    <i class="fa fa-eye"></i>
</a>
