<!-- LEFT SIDEBAR -->
<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
        <nav>
            <ul class="nav">
                <li><a href="{{ url('/home') }}" class="active"><i class="lnr lnr-home"></i> <span>Kontrol Paneli</span></a></li>
                <li>
                    <a href="#subPages-1" data-toggle="collapse" class="collapsed"><i class="lnr lnr-store"></i> <span>Ürünler</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                    <div id="subPages-1" class="collapse ">
                        <ul class="nav">
                            <li><a href="{{ url('/products') }}" class="">Listele</a></li>
                            <li><a href="{{ url('/products/create') }}" class="">Oluştur</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#subPages-2" data-toggle="collapse" class="collapsed"><i class="lnr lnr-store"></i> <span>Kategoriler</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                    <div id="subPages-2" class="collapse ">
                        <ul class="nav">
                            <li><a href="{{ url('/categories') }}" class="">Listele</a></li>
                            <li><a href="{{ url('/categories/create') }}" class="">Oluştur</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="{{ url('/') }}" target="_blank" class=""><i class="lnr lnr-home"></i> <span>Siteye Git</span></a></li>
            </ul>
        </nav>
    </div>
</div>
<!-- END LEFT SIDEBAR -->
</div>