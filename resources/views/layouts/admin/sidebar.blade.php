<div class="quixnav">
    <div class="quixnav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label first">Main Menu</li>
                    <li><a href="{{route('home')}}" aria-expanded="false">
                        <i class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
                    </li>

          <li class="nav-label">Table</li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-layout-25"></i><span class="nav-text">Table</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('supplier.index') }}">Supplier</a></li>
                    <li><a href="{{ route('kategori.index') }}">Kategori</a></li>
                    <li><a href="{{ route('produk.index') }}">Produk</a></li>
                    <li><a href="{{ route('kasir.index') }}">Kasir</a></li>
                    <li><a href="{{ route('transaksi.index') }}">Transaksi</a></li>
                </ul>
            </li>

            {{-- <li class="nav-label">Extra</li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-single-copy-06"></i><span class="nav-text">Pages</span></a>
                <ul aria-expanded="false">
                    <li><a href="./page-register.html">Register</a></li>
                    <li><a href="./page-login.html">Login</a></li>

                </ul>
            </li> --}}
        </ul>
    </div>
</div>
