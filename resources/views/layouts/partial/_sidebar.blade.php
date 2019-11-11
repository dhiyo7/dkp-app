<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
        <nav>
            <ul class="nav">
                <li><a href="{{route('home')}}" class=""><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
                <li>
                    <a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Master Data</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                    <div id="subPages" class="collapse ">
                        <ul class="nav">
                            <li><a href="{{route('kolam')}}" class="">Data Kolam</a></li>
                            <li><a href="{{route('tambak')}}" class="">Data Tambak</a></li>
                            <li><a href="{{route('pengolahan')}}" class="">Data Produksi Pengolahan</a></li>
                            {{-- <li><a href="{{route('benih')}}" class="">Data Produksi Benih</a></li> --}}
                            <li><a href="{{route('upr')}}" class="">Data UPR</a></li>
                            <li><a href="{{route('lahan')}}" class="">Data Luas Lahan RTP</a></li>
                            <li><a href="{{route('pendataan')}}" class="">Pendataan Pelaku Usaha</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="{{route('penyuluh')}}" class=""><i class="lnr lnr-dice"></i> <span>Penyuluh</span></a></li>
                <li><a href="{{route('olahan')}}" class=""><i class="lnr lnr-dice"></i> <span>Jenis Olahan</span></a></li>
                </ul>
        </nav>
    </div>
</div>
