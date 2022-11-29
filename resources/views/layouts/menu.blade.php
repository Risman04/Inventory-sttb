
<li class="nav-item menu-open">
    <a href="{{url('home')}}" class="nav-link">
      <i class="nav-icon fas fa-tachometer-alt"></i>
      <p>
        Dashboard
        <i class="right fas fa-angle-left"></i>
      </p>
    </a>
    @if($user->level==1)
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('ruangan.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p >
                        Data Ruangan
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('jenis_barang.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                        Data Jenis Barang
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('barang.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                        Data Barang
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('user_group.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                        Data Pengguna
                    </p>
                </a>
            </li>
        </ul>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-chart-pie"></i>
                <p>
                    Keluar
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a class="nav-link" href=" {{ route('logout') }} "
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"
                        role="button">
                        <i class="fas fa-th-large fas fa-sign-out"></i> Logout
                    </a>
                    <form action="{{ route('logout') }}" id="logout-form" method="post">
                        @csrf
                    </form>
                </li>
            </ul>
        </li>
    @elseif($user->level==2)
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('ruangan.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p >
                        Data Ruangan
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('jenis_barang.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                        Data Jenis Barang
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('barang.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                        Data Barang
                    </p>
                </a>
            </li>
        </ul>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-chart-pie"></i>
                <p>
                    Keluar
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a class="nav-link" href=" {{ route('logout') }} "
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"
                        role="button">
                        <i class="fas fa-th-large fas fa-sign-out"></i> Logout
                    </a>
                    <form action="{{ route('logout') }}" id="logout-form" method="post">
                        @csrf
                    </form>
                </li>
            </ul>
        </li>
    @endif
</li>
