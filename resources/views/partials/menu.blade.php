<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
        <div style="margin-left: 30%; margin-top:20px;">
            <img src="{{ asset('img/profile/') }}/{{ Auth::user()->profil }}" style="width: 50%; border-radius:20px" alt="User Image">
        </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="/user" class="nav-link {{ Request::is('user') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-edit"></i>
                    <p>
                        Hi, {{ Auth::user()->name }}
                        {{-- <span class="badge badge-info right">2</span> --}}
                    </p>
                </a>
            </li>
            <hr style="color: white">
            @if (auth()->user()->level =="user")
            <li class="nav-item">
                <a href="/" class="nav-link">
                    <i class="fas fa-chevron-circle-left"></i>
                    <p>
                        Kembali Belanja
                        {{-- <span class="badge badge-info right">2</span> --}}
                    </p>
                </a>
            </li>
            @endif
             @if (auth()->user()->level =="admin")
            <li class="nav-item">
                <a href="/product" class="nav-link {{ Request::is('product') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-store-alt"></i>
                    <p>
                        Product
                        {{-- <span class="badge badge-info right">2</span> --}}
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/category" class="nav-link {{ Request::is('category') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-tag"></i>
                    <p>
                        Category
                        {{-- <span class="badge badge-info right">2</span> --}}
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-shopping-cart"></i>
                  <p>
                    Transaksi
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="/pesanan" class="nav-link {{ Request::is('pesanan') ? 'active' : '' }}">
                      <i class="fas fa-credit-card nav-icon"></i>
                      <p>Pesanan</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/shipping" class="nav-link {{ Request::is('shipping') ? 'active' : '' }}">
                      <i class="fas fa-shipping-fast nav-icon"></i>
                      <p>Pengiriman</p>
                    </a>
                  </li>
                </ul>
              </li>
            @endif
             @if (auth()->user()->level =="user")
            <li class="nav-item">
                <a href="/pesanan" class="nav-link {{ Request::is('pesanan') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-store-alt"></i>
                    <p>
                        Pesanan
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/admin/pengiriman" class="nav-link {{ Request::is('pengiriman') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-store-alt"></i>
                    <p>
                        Pengiriman
                    </p>
                </a>
            </li> 
            @endif
            <li class="nav-item">
                <a href="/editpassword" class="nav-link {{ Request::is('editpassword') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-key"></i>
                    <p>
                        Change Password
                    </p>
                </a>
            </li> 
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    <i class="nav-icon fas fa-sign-out-alt"></i>
                    <p>Logout</p>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>