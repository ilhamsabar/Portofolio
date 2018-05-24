<!-- Main navbar -->
<div class="navbar navbar-inverse" style="background-color: #26A69A; border-color: #26A69A">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{url('admin/cs')}}"><img src="{{url('agenmitra/assets/images/abucorp.png')}}" alt="abucorp.png"></a>

        <ul class="nav navbar-nav visible-xs-block">
            <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
            <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
        </ul>
    </div>

    <div class="navbar-collapse collapse" id="navbar-mobile">
        <ul class="nav navbar-nav">
            <li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>
        </ul>

        <p class="navbar-text"><span class="label bg-success-400">Online</span></p>
        {{--<p class="navbar-text"><span class="label bg-success-400">Entry Data Today : {{\App\Model\umh_penjualan::where('nik', auth('cs')->user()->nik)->where('created_at', 'like','%'.date('Y-m-d').'%')->count() + \App\Model\pembayaran::where('nik', auth('cs')->user()->nik)->where('created_at', 'like','%'.date('Y-m-d').'%')->count()}}</span></p>--}}

        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <i class="icon-bubbles4"></i>
                    <span class="visible-xs-inline-block position-right">Messages</span>
                    <span class="badge bg-warning-400">2</span>
                </a>

                <div class="dropdown-menu dropdown-content width-350">
                    <div class="dropdown-content-heading">
                        Messages
                        <ul class="icons-list">
                            <li><a href="#"><i class="icon-compose"></i></a></li>
                        </ul>
                    </div>

                    <ul class="nav navbar-nav">
                        <li class="dropdown dropdown-notifications">
                            <a href="#notifications-panel" class="dropdown-toggle" data-toggle="dropdown">
                                <i data-count="0" class="glyphicon glyphicon-bell notification-icon"></i>
                            </a>

                            <div class="dropdown-container">
                                <div class="dropdown-toolbar">
                                    <div class="dropdown-toolbar-actions">
                                        <a href="#">Mark all as read</a>
                                    </div>
                                    <h3 class="dropdown-toolbar-title">Notifications (<span class="notif-count">0</span>)</h3>
                                </div>
                                <ul class="dropdown-menu">
                                </ul>
                                <div class="dropdown-footer text-center">
                                    <a href="#">View All</a>
                                </div>
                            </div>
                        </li>
                        <li><a href="#">Timeline</a></li>
                        <li><a href="#">Friends</a></li>
                    </ul>

                    <div class="dropdown-content-footer">
                        <a href="#" data-popup="tooltip" title="" data-original-title="All messages"><i class="icon-menu display-block"></i></a>
                    </div>
                </div>
            </li>
            <li class="dropdown dropdown-user">
                <a class="dropdown-toggle" data-toggle="dropdown">
                    {{--@if(file_exists(url('Files/Profile/'.auth('cs')->user()->foto)))--}}
                        {{--<img src="{{url('Files/Profile/'.auth('cs')->user()->foto)}}" alt="{{auth('cs')->user()->foto}}" class="profile">--}}
                    {{--@else--}}
                        {{--<img src="{{asset('Files/Profile/default-user.png')}}" class="profile" alt="default-user.png">--}}
                    {{--@endif--}}
                    {{--<span class="profile">{{auth('cs')->user()->name}}</span>--}}
                    <i class="caret"></i>
                </a>

                <ul class="dropdown-menu dropdown-menu-right">
                    <li><a class="url" href="{{url('admin/cs/profile')}}"><i class="icon-user-plus"></i> Profilku</a></li>
                    <li class="divider"></li>
                    <li><a class="url" href="{{url('admin/cs/password-ubah')}}"><i class="icon-cog5"></i> Perbarui Password</a></li>
                    <li><a class="url" href="{{url('admin/cs/logout')}}"><i class="icon-switch2"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- /main navbar -->

<!-- Page header -->
<div class="page-header">
    <div class="breadcrumb-line breadcrumb-line-wide">
        <ul class="breadcrumb">
            <li><a href="{{url('admin/cs')}}">Assalamu'alaikum,  Selamat Datang di Dashboard Customer Service.</a></li>
        </ul>
    </div>

    <div class="page-header-content">
        <div class="page-title">

        </div>

        <div class="heading-elements">

        </div>
    </div>
</div>
<!-- /page header -->