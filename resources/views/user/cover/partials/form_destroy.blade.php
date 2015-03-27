<div class="panel">

    <div class="cover" style="background-image: url('{{ asset($cover->cover) }}')" alt="imagen"></div>
    <div class="overlay bg-danger"></div>

    <div class="panel-body clr-clear text-center">
        {!! Form::open(['route'=>['cover.destroy', $cover], 'method'=>'delete']) !!}
        <button type="submit" class="btn danger">
            <i class="fa fa-times"></i>
            Eliminar la imagen de perfil y la imagen de portada
        </button>
        {!! Form::close() !!}
    </div>

</div>
