<div class="navbar-right">
    <ul class="navbar-nav">
        <li><a href="javascript:void(0);" class="js-right-sidebar" title="Setting"><i class="zmdi zmdi-settings zmdi-hc-spin"></i></a></li>
        <li>
            <form method="POST" action="{{ route('logout') }}" id="logout-form">
                @csrf
                <a href="javascript:void(0);" onclick="document.getElementById('logout-form').submit();" class="mega-menu" title="Çıkış Yap">
                    <i class="zmdi zmdi-power"></i>
                </a>
            </form>
        </li>
    </ul>
</div>
