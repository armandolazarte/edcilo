{!! Form::model($data, ['route'=>'admin.user.index', 'method'=>'get', 'class'=>'form']) !!}

{!! Form::select('type', ['' => 'Tipo...', 'user'=>'user', 'admin'=>'admin', 'root'=>'root']) !!}

{!! Form::text('name', null, ['placeholder'=>'Buscar por nombre']) !!}

<button type="submit" class="btn info">
    <i class="fa fa-search"></i>
</button>

{!! Form::close() !!}
