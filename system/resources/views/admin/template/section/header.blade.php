<div class="container-fluid">
    <div class="navbar-brand">
        <button type="button" class="btn-toggle-offcanvas"><i class="fa fa-bars"></i></button>
        <button type="button" class="btn-toggle-fullwidth"><i class="fa fa-bars"></i></button>
        <a href="{{url('/')}}" class="ml-3">Desa {{ucwords(App\Models\Pengaturan::first()->nama_desa)}} </a>                
    </div>
    
    <div class="navbar-right">
       <!--  <form id="navbar-search" class="navbar-form search-form">
            <input value="" class="form-control" placeholder="Search here..." type="text">
            <button type="button" class="btn btn-default"><i class="fa fa-search"></i></button>
        </form>    -->             
      
        <div id="navbar-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    @if(Auth::user()->level == 2)
                    <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                        <i class="fa fa-bell"></i>
                        <span class="notification-dot"></span>
                    </a>
                    @endif
                    <ul class="dropdown-menu notifications">
                        @foreach(App\Models\Ttd::where('status',0)->get() as $s)
                        <li>
                            <a href="{{url($s->url)}}">
                                <div class="media">
                                    <div class="media-left">
                                        <i class="icon-info text-warning"></i>
                                    </div>
                                    <div class="media-body">
                                        <p class="text">{{ucwords($s->jenis_surat)}}</p>
                                        <span class="timestamp">{{$s->created_at}}</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        @endforeach
                        <li class="footer"><a href="javascript:void(0);" class="more">See all notifications</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{url('logout')}}" onclick="return confirm('Yakin untuk keluar?')" class="icon-menu"><i class="fa fa-power-off"></i></a>
                </li>
            </ul>
        </div>
    </div>
</div>