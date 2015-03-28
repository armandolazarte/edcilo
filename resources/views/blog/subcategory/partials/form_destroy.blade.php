{!! Form::open(['route'=>['admin.blog.subcategory.destroy', $subcategory], 'method'=>'delete']) !!}

<button type="submit" class="btn danger" title="Eliminar a {{ $subcategory->name }}">
    <i class="fa fa-trash"></i>
    Eliminar
</button>

{!! Form::close() !!}
