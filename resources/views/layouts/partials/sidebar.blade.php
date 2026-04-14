<aside id="leftsidebar" class="sidebar">
    <div class="navbar-brand">
        <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
        <a href="{{ route('dashboard') }}"><img src="{{ asset('aero-theme/assets/images/logo.svg') }}" width="25" alt="Aero"><span class="m-l-10">Asansör 360</span></a>
    </div>
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    <a class="image" href="{{ route('profile.edit') }}"><img src="{{ asset('aero-theme/assets/images/profile_av.jpg') }}" alt="User"></a>
                    <div class="detail">
                        <h4>{{ Auth::user()->name }}</h4>
                        <small>{{ Auth::user()->email }}</small>                        
                    </div>
                </div>
            </li>
            <li class="{{ request()->routeIs('dashboard') ? 'active open' : '' }}"><a href="{{ route('dashboard') }}"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
            
            @hasrole('super_admin')
            <li class="{{ request()->routeIs('companies.*') ? 'active open' : '' }}"><a href="{{ route('companies.index') }}"><i class="zmdi zmdi-city"></i><span>Firmalar</span></a></li>
            @endhasrole

            @hasanyrole('super_admin|firma_admin|tekniker')
            <li class="{{ request()->routeIs('lifts.*') ? 'active open' : '' }}"><a href="{{ route('lifts.index') }}"><i class="zmdi zmdi-swap-vertical"></i><span>Asansörler</span></a></li>
            @endhasanyrole

            @hasanyrole('super_admin|firma_admin')
            <li class="{{ request()->routeIs('users.*') ? 'active open' : '' }}"><a href="{{ route('users.index') }}"><i class="zmdi zmdi-accounts"></i><span>Kullanıcılar</span></a></li>
            @endhasanyrole
        </ul>
    </div>
</aside>
