@if
    <li><a href="{{ route('login') }}" login </a></li>
    <li><a href="{{ route('register') }}" login </a></li>
@else
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"{{ Auth::user()->name }} <span class="caret"></span></a>
        
        <ul class="dropdown-manu" role="menu">
            <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault();                                                     document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="post" style="display: none;">
                    {{ csrf_field()}}
                </form>
            </li>
        </ul>
    </li>
@endif