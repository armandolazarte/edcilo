<dl class="accordion">
    <dt>Administrar Blog</dt>
    <dd class="panel" style="display: none;">

        <div class="panel-list">
            <ul>
                <li>
                    <a href="{{ route('admin.blog.category.index') }}">
                        <i class="fa fa-list"></i>
                        Adm. categorías
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.blog.subcategory.index') }}">
                        <i class="fa fa-list"></i>
                        Adm. Subcategorías
                    </a>
                </li>
            </ul>
        </div>

    </dd>

    <dt>Administrar Usuarios</dt>
    <dd class="panel" style="display: none;">

        <div class="panel-list">
            <ul>
                <li>
                    <a href="{{ route('admin.lang.index') }}">
                        <span>
                            <i class="fa fa-list"></i>
                            Adm. idiomas
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.country.index') }}">
                        <span>
                            <i class="fa fa-list"></i>
                            Adm. paises
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.socialNetwork.index') }}">
                        <span>
                            <i class="fa fa-list"></i>
                            Adm. redes sociales
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.sex.index') }}">
                        <span>
                            <i class="fa fa-list"></i>
                            Adm. sexo
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.user.index') }}">
                        <span>
                            <i class="fa fa-list"></i>
                            Adm. usuarios
                        </span>
                    </a>
                </li>
            </ul>
        </div>

    </dd>

</dl>
