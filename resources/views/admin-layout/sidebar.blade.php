<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('admin') }}">
                <img alt="image" src="{{ url('img') }}/logolala.png" class="header-logo" />
                {{-- <span class="logo-name">Koromi Resto</span> --}}
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown active">
                <a href="{{ route('admin') }}" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <li>
                <a href="{{ route('banner.list') }}" class="nav-link"><i
                        data-feather="monitor"></i><span>Banner</span></a>
            </li>
            <li>
                <a href="{{ route('about.list') }}" class="nav-link"><i data-feather="info"></i><span>About
                        Us</span></a>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="list"></i><span>Master
                        Data</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('index.jenis') }}">Jenis Menu</a></li>
                    <li><a class="nav-link" href="{{ route('index.menu') }}">Menu</a></li>
                    <li><a class="nav-link" href="{{ route('index.booklet') }}">Booklet Menu</a></li>
                    <li><a class="nav-link" href="{{ route('index.gallery') }}">Gallery</a></li>
                </ul>
            </li>
            <li>
                <a href="{{ route('index.reserv') }}" class="nav-link"><i
                        data-feather="layout"></i><span>Reservasi</span></a>
            </li>
            <li>
                <a href="{{ route('kontak.list') }}" class="nav-link"><i data-feather="message-square"></i><span>Pesan
                        Masuk</span></a>
            </li>
        </ul>
    </aside>
</div>
