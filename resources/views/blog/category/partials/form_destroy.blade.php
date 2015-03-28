{!! Form::open(['route'=>['admin.blog.category.destroy', $category], 'method'=>'delete']) !!}

<button type="submit" class="btn danger" title="Eliminar a {{ $category->name }}">
    <i class="fa fa-trash"></i>
    Eliminar
</button>

{!! Form::close() !!}
