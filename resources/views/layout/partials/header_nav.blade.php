<nav class="nav-0 nav-smartphone text-center">
    <ul>
        <li class="active">
            <a href="{{ url('') }}">
                {{ trans('messages.home') }}
            </a>
        </li>
        <li>
            <a href="#" class="trigger-dropdown">Link 1</a>
            <ul class="dropdown-menu">
                <li>
                    <a tabindex="-1" href="#">Action</a>
                </li>
                <li>
                    <a tabindex="-1" href="#">Another action</a>
                </li>
                <li>
                    <a tabindex="-1" href="#">Something else here</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a tabindex="-1" href="#">Separated link</a>
                </li>
            </ul>
        </li>
        <li><a href="#">Link 2</a></li>
        <li><a href="#">Link 3</a></li>
        <li><a href="#">Link 4</a></li>
        <li><a href="#">Link 5</a></li>
        <li class="disabled"><span>Configurar</span></li>
    </ul>
</nav>
