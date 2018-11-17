<!-- Main sidebar -->
<div class="sidebar sidebar-main sidebar-default">
    <div class="sidebar-content">

        <!-- Main navigation -->
        <div class="sidebar-category sidebar-category-visible">
            <div class="category-title h6">
                <span>Main Navigation</span>
                <ul class="icons-list">
                    <li><a href="#" data-action="collapse"></a></li>
                </ul>
            </div>

            <div class="category-content sidebar-user">
                <div class="media">
                    <a href="#" class="media-left">
                            <img src="{{asset('home/images/profile-pic.jpg')}}" class="img-circle img-sm profile" alt="default-user.png">
                    </a>
                    <div class="media-body">
                        <span class="media-heading text-semibold profile">M Ilham Sabar</span>
                        <div class="text-size-mini text-muted">
                            <i class="icon-pin text-size-small"></i>Admin
                        </div>
                    </div>
                </div>
            </div>

            <div class="category-content no-padding">
                <ul class="navigation navigation-main navigation-accordion">

                    <!-- Main -->
                    <li class="navigation-header"><span>Menu</span> <i class="icon-menu" title="Main pages"></i></li>
                    <li class="@yield('dashboard')"><a href="{{url('admin/cs/')}}"><i class=" icon-home"></i> <span>DASHBOARD</span></a></li>
                    <li>
                        <a><i class="icon-users4"></i> <span>PELANGGAN</span></a>
                        <ul>
                            <li class="@yield('input-pelanggan')"><a href="{{url('admin/cs/input-pelanggan')}}"><i class="icon-pencil7"></i> <span>Input Pelanggan Baru</span><span id="order"></span></a></li>
                            <li class="@yield('penukaran-point')"><a href="{{url('admin/cs/penukaran-point')}}"><i class="icon-clipboard3"></i> <span>Penukaran Poin</span><span id="order"></span></a></li>
                            <li class="@yield('penerimaan-point')"><a href="{{url('admin/cs/penerimaan-point')}}"><i class="icon-clipboard3"></i> <span>Penyerahan Reward</span><span id="order"></span></a></li>
                            <li class="@yield('data-pengajuan-point')"><a href="{{url('admin/cs/data-pengajuan-point')}}"><i class="icon-clipboard3"></i> <span>Data Pengajuan Poin</span><span id="order"></span></a></li>
                            <li class="@yield('pengajuanfee')"><a href="{{url('admin/cs/pengajuan-fee/')}}"><i class="icon-coins"></i> <span>Pengajuan Fee</span></a></li>
                            <li class="@yield('data-pengajuanfee')"><a href="{{url('admin/cs/pengajuan-fee/data')}}"><i class="icon-clipboard3"></i> <span>Data Pengajuan Fee</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a><i class="icon-cash"></i> <span>PENJUALAN</span></a>
                        <ul>
                            <li class="@yield('inputpenjualan')">
                                <a href="{{url('admin/cs/inputpenjualan')}}"><i class="icon-pencil7"></i> <span>Input Penjualan</span> <span id="orderx"></span></a>
                            </li>
                            <li class="@yield('inputtambahan')">
                                <a href="{{url('admin/cs/penjualan_tambahan/inputpenjualan')}}"><i class="icon-pencil7"></i> <span>Input Penjualan Tambahan</span> <span id="orderx"></span></a>
                            </li>
                            <li class="@yield('tiketpesawat')">
                                <a href="{{url('admin/cs/ppob/tiket-pesawat')}}"><i class="icon-paperplane"></i> <span>Tiket Pesawat</span> <span id="orderx"></span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a><i class="icon-users4"></i> <span>JAMAAH</span></a>
                        <ul>
                            <li class="@yield('cek-booking')">
                                <a href="{{url('admin/cs/cek-booking')}}"><i class="icon-barcode2"></i> <span>Cetak eBooking</span> <span id="orderx"></span></a>
                            </li>
                            <li class="@yield('formulir-jamaah')">
                                <a href="{{url('admin/cs/formulir-jamaah')}}"><i class="icon-clipboard3"></i> <span>Formulir Jamaah</span> <span id="orderx"></span></a>
                            </li>
                            <li class="@yield('etiket')">
                                <a href="{{url('admin/cs/etiket')}}"><i class="icon-barcode2"></i> <span>Cetak eTiket</span> <span id="orderx"></span></a>
                            </li>
                            {{--<li class="@yield('kamar')">--}}
                            {{--<a href="{{url('admin/cs/kamar')}}"><i class="icon-city"></i> <span>Request Kamar</span> <span id="orderx"></span></a>--}}
                            {{--</li>--}}
                            {{--<li class="@yield('buatkelompok')">--}}
                            {{--<a href="{{url('admin/cs/kelompok')}}"><i class="icon-users4"></i> <span>Request Kelompok</span> <span id="orderx"></span></a>--}}
                            {{--</li>--}}
                            <li class="@yield('berkas_jamaah')">
                                <a href="{{url('admin/cs/data-pemberkasan')}}"><i class="icon-barcode2"></i> <span>Data Berkas</span> <span id="orderx"></span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="@yield('datavoucher')"><a href="{{url('admin/cs/voucher/data')}}"><i class="icon-stack"></i> <span>CETAK VOUCHER</span></a></li>
                    <li>
                        <a><i class="icon-drawer3"></i> <span>DATA PENJUALAN</span></a>
                        <ul>
                            <li class="@yield('report_haji')">
                                <a href="{{url('admin/cs/haji/report')}}"><i class="icon-clipboard3"></i> <span>Data Penjualan Haji</span> <span id="orderx"></span></a>
                            </li>
                            <li class="@yield('lihatpenjualan')">
                                <a href="{{url('admin/cs/penjualan/view')}}"><i class="icon-clipboard3"></i> <span>Data Penjualan Umrah & Keagenan</span> <span id="orderx"></span></a>
                            </li>
                            <li class="@yield('void')">
                                <a href="{{url('admin/cs/penjualan/void')}}"><i class="icon-clipboard3"></i> <span>Data Pengajuan Void</span> <span id="orderx"></span></a>
                            </li>
                            <li class="@yield('laporan')">
                                <a href="{{url('admin/cs/laporan-penjulan/view')}}"><i class=" icon-pie5"></i> <span>Laporan Penjualan</span> <span id="orderx"></span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a><i class="icon-newspaper2"></i> <span>INFORMASI</span></a>
                        <ul>
                            <li class="@yield('data-booking')"><a href="{{url('admin/cs/data-booking')}}"><i class="icon-clipboard3"></i> <span>Data eBooking</span><span id="order"></span></a></li>
                            <li class="@yield('datajamaah')"><a href="{{url('admin/cs/datajamaah')}}"><i class="icon-clipboard3"></i> <span>Data Jamaah</span> <span id="orderx"></span></a></li>
                            <li class="@yield('data-pelanggan')"><a href="{{url('admin/cs/data-pelanggan')}}"><i class="icon-clipboard3"></i> <span>Data Pelanggan</span><span id="order"></span></a></li>
                            {{--<li class="@yield('data-priority')"><a href="{{url('admin/cs/data-priority')}}"><i class="icon-clipboard3"></i> <span>Data Agen Priority</span><span id="order"></span></a></li>--}}
                            {{--<li class="@yield('informasipriority')"><a href="{{url('admin/cs/informasi/priority/view')}}"><i class="icon-clipboard3"></i> <span>Data Pelanggan Priority</span> <span id="orderx"></span></a></li>--}}
                            {{--<li class="@yield('data-mitra')"><a href="{{url('admin/cs/data-mitra')}}"><i class="icon-clipboard3"></i> <span>Data Mitra</span><span id="order"></span></a></li>--}}
                            {{--<li class="@yield('data-agen')"><a href="{{url('admin/cs/data-agen')}}"><i class="icon-clipboard3"></i> <span>Data Agen</span><span id="order"></span></a></li>--}}
                            <li class="@yield('history')"><a href="{{url('admin/cs/voucher/history')}}"><i class="icon-clipboard3"></i> <span>Data Voucher</span></a></li>
                            <li class="@yield('datainformasi')"><a href="{{url('admin/cs/data-informasi-paket')}}"><i class="icon-clipboard3"></i> <span>Data Paket</span> <span id="orderx"></span></a></li>
                        </ul>
                    </li>
                {{--<li class="@yield('message')"><a href="{{url('admin/cs/message/view')}}"><i class=" icon-bubbles4"></i> <span>MESSAGE</span></a></li>--}}
                <!-- /page kits -->
                </ul>
            </div>
        </div>
        <!-- /main navigation -->

    </div>
</div>
<!-- /main sidebar -->