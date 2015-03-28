{!! Form::model($name, ['route'=>'admin.blog.subcategory.index', 'method'=>'get', 'class'=>'form']) !!}

{!! Form::text('name', null, ['placeholder'=>'Buscar por nombre']) !!}

<button type="submit" class="btn info">
    <i class="fa fa-search"></i>
</button>

{!! Form::close() !!}
