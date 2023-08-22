<div class="tab-content padding-0">
    <div class="tab-pane active" id="menu">
        <nav id="left-sidebar-nav" class="sidebar-nav">
            <ul id="main-menu" class="metismenu li_animation_delay">
                <li class="">
                    <a href="{{url('admin/beranda')}}" ><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
                    
                </li>


                <!-- KEPALA DESA ============================ -->
                @if(Auth::user()->level == 2)
                <li class="{{ request()->is('admin/manajemen-persuratan/*') ? 'active':'' }}">
                    <a href="#uiElements" class="has-arrow"><i class="fa fa-diamond"></i><span>Manajemen Persuratan</span></a>
                    <ul>
                        <li class="{{ request()->is('admin/manajemen-persuratan/registrasi-surat/*') ? 'active':'' }}">
                            <a href="{{url('admin/manajemen-persuratan/registrasi-surat')}}">Registrasi Surat</a>
                        </li>
                        <li class="{{checkRouteActive('admin/manajemen-persuratan/s-masuk')}}{{ request()->is('admin/manajemen-persuratan/s-masuk/*') ? 'active':'' }}">
                            <a href="{{url('admin/manajemen-persuratan/s-masuk')}}">Surat Masuk</a>
                        </li>
                        <li class="{{checkRouteActive('admin/manajemen-persuratan/s-keluar')}}{{ request()->is('admin/manajemen-persuratan/s-keluar/*') ? 'active':'' }}">
                            <a href="{{url('admin/manajemen-persuratan/s-keluar')}}">Surat Keluar</a>
                        </li>
                        <li class="{{ request()->is('admin/manajemen-persuratan/template-surat') ? 'active':'' }}">
                            <a href="{{url('admin/manajemen-persuratan/template-surat')}}">Template Surat</a> 
                        </li>
                    </ul>
                </li>

                <li class="">
                    <a href="{{url('admin/profil-akun')}}" ><i class="fa fa-user"></i><span>Profil Akun</span></a>

                </li>
                <!-- END KEPALA DESA ================== -->

                @else
                <li class="{{ request()->is('admin/profil-desa/*') ? 'active':'' }}">
                    <a href="#App" class="has-arrow"><i class="fa fa-th-large"></i><span>Profil Desa</span></a>
                    <ul>
                        <li class="{{ request()->is('admin/profil-desa/profil-wilayah-desa') ? 'active':'' }}">
                            <a href="{{url('admin/profil-desa/profil-wilayah-desa')}}">Profil Wilayah Desa</a>
                        </li>
                        <li class="{{ request()->is('admin/profil-desa/kepala-desa-dan-sambutan') ? 'active':'' }}">
                            <a href="{{url('admin/profil-desa/kepala-desa-dan-sambutan')}}">Kepala Desa & Sambutan</a>
                        </li>
                        <li class="{{ request()->is('admin/profil-desa/visi-misi-desa') ? 'active':'' }}">
                            <a href="{{url('admin/profil-desa/visi-misi-desa')}}">Visi Misi Desa</a>
                        </li>
                        <li class="{{ request()->is('admin/profil-desa/perangkat-desa') ? 'active':'' }}">
                            <a href="{{url('admin/profil-desa/perangkat-desa')}}">Perangkat Desa</a>
                        </li>

                        <li class="{{ request()->is('admin/profil-desa/struktur-organisasi') ? 'active':'' }}">
                            <a href="{{url('admin/profil-desa/struktur-organisasi')}}">Struktur Organisasi</a>
                        </li>
                        <li class="{{ request()->is('admin/profil-desa/program-desa') ? 'active':'' }}">
                            <a href="{{url('admin/profil-desa/program-desa')}}">Program Desa</a>
                        </li>
                        <li class="{{ request()->is('admin/profil-desa/peraturan-desa') ? 'active':'' }}">
                            <a href="{{url('admin/profil-desa/peraturan-desa')}}">Peraturan Desa</a>
                        </li>


                    </ul>
                </li>
                <li class="{{ request()->is('admin/data-desa/*') ? 'active':'' }}
                    {{ request()->is('admin/data-desa/penduduk/*') ? 'active':'' }}
                    ">
                    <a href="#Widgets" class="has-arrow"><i class="fa fa-puzzle-piece"></i><span>Data Desa</span></a>
                    <ul>
                        <li class="{{ request()->is('admin/data-desa/penduduk/*') ? 'active':'' }}"><a href="{{url('admin/data-desa/penduduk')}}">Data Penduduk</a></li>
                        <li><a href="{{url('admin/data-desa/pendidikan')}}">Data Pendidikan</a></li>
                        <li><a href="{{url('admin/data-desa/pekerjaan')}}">Data Pekerjaan</a></li>
                        <!-- <li><a href="{{url('admin/data-desa/dusun')}}">Data Dusun</a></li> -->
                        <li><a href="{{url('admin/data-desa/laporan-realisasi-anggaran')}}">Laporan Realisasi Anggaran</a></li>
                    </ul>
                </li>

                <li class="{{ request()->is('admin/manajemen-persuratan/*') ? 'active':'' }}">
                    <a href="#uiElements" class="has-arrow"><i class="fa fa-diamond"></i><span>Manajemen Persuratan</span></a>
                    <ul>
                        <li class="{{ request()->is('admin/manajemen-persuratan/registrasi-surat/*') ? 'active':'' }}">
                            <a href="{{url('admin/manajemen-persuratan/registrasi-surat')}}">Registrasi Surat</a>
                        </li>
                        <li class="{{checkRouteActive('admin/manajemen-persuratan/s-masuk')}}{{ request()->is('admin/manajemen-persuratan/s-masuk/*') ? 'active':'' }}">
                            <a href="{{url('admin/manajemen-persuratan/s-masuk')}}">Surat Masuk</a>
                        </li>
                        <li class="{{checkRouteActive('admin/manajemen-persuratan/s-keluar')}}{{ request()->is('admin/manajemen-persuratan/s-keluar/*') ? 'active':'' }}">
                            <a href="{{url('admin/manajemen-persuratan/s-keluar')}}">Surat Keluar</a>
                        </li>
                        <li class="{{ request()->is('admin/manajemen-persuratan/template-surat') ? 'active':'' }}">
                            <a href="{{url('admin/manajemen-persuratan/template-surat')}}">Template Surat</a> 
                        </li>
                           <!--  <li class="{{ request()->is('admin/manajemen-persuratan/pengaturan-surat') ? 'active':'' }}">
                                <a href="{{url('admin/manajemen-persuratan/pengaturan-surat')}}">pengaturan</a> 
                            </li> -->
                        </ul>
                    </li>
                    <li class="
                    {{ request()->is('admin/statistik/*') ? 'active':'' }}">
                    <a href="#charts" class="has-arrow"><i class="fa fa-area-chart"></i><span>Statistik Kependudukan </span></a>
                    <ul>
                        <li class="{{ request()->is('admin/statistik/umur') ? 'active':'' }}"><a href="{{url('admin/statistik/umur')}}">Umur</a></li>
                        <li class="{{ request()->is('admin/statistik/pendidikan') ? 'active':'' }}"><a href="{{url('admin/statistik/pendidikan')}}">Pendidikan</a></li>
                        <li class="{{ request()->is('admin/statistik/status-perkawinan') ? 'active':'' }}"><a href="{{url('admin/statistik/status-perkawinan')}}">Status Perkawinan</a></li>
                        <li class="{{ request()->is('admin/statistik/pekerjaan') ? 'active':'' }}"><a href="{{url('admin/statistik/pekerjaan')}}">Pekerjaan</a> </li>
                        <li class="{{ request()->is('admin/statistik/agama') ? 'active':'' }}"><a href="{{url('admin/statistik/agama')}}">Agama</a> </li>
                    </ul>
                </li>
                    <!-- <li>
                        <a href="#forms" class="has-arrow"><i class="fa fa-pencil"></i><span>Registrasi Kartu</span></a>
                        <ul>
                            <li><a href="forms-validation.html">Form Validation</a></li>
                            <li><a href="forms-advanced.html">Advanced Elements</a></li>
                            <li><a href="forms-basic.html">Basic Elements</a></li>
                            <li><a href="forms-wizard.html">Form Wizard</a></li>
                            <li><a href="forms-dragdropupload.html">Drag &amp; Drop Upload</a></li>
                            <li><a href="forms-cropping.html">Image Cropping</a></li>
                            <li><a href="forms-summernote.html">Summernote</a></li>
                            <li><a href="forms-editors.html">CKEditor</a></li>
                            <li><a href="forms-markdown.html">Markdown</a></li>
                        </ul>
                    </li> -->
                    <li class="
                    {{ request()->is('admin/web-galeri/*') ? 'active':'' }}
                    {{ request()->is('admin/web-banner/*') ? 'active':'' }}
                    {{ request()->is('admin/web-publikasi/*') ? 'active':'' }}
                    {{ request()->is('admin/web-informasi/*') ? 'active':'' }}
                    {{ request()->is('admin/web-pengunjung/*') ? 'active':'' }}
                    {{ request()->is('admin/web-komentar/*') ? 'active':'' }}
                    {{ request()->is('admin/web-berita/*') ? 'active':'' }}
                    {{ request()->is('admin/web-layanan/*') ? 'active':'' }}
                    {{ request()->is('admin/web-pengaturan/*') ? 'active':'' }}
                    ">
                    <a href="#Tables" class="has-arrow"><i class="fa fa-table"></i><span>Manajemen Website</span></a>
                    <ul>
                        <li class="{{ request()->is('admin/web-layanan/*') ? 'active':'' }}">
                            <a href="{{url('admin/web-layanan/index')}}">Layanan</a> 
                        </li>
                        <li class="{{ request()->is('admin/web-galeri/*') ? 'active':'' }}">
                            <a href="{{url('admin/web-galeri/index')}}">Galeri</a> 
                        </li>
                        <li class="{{ request()->is('admin/web-banner/*') ? 'active':'' }}">
                            <a href="{{url('admin/web-banner/index')}}">Banner</a> 
                        </li>
                       <!--  <li class="{{ request()->is('admin/web-publikasi/*') ? 'active':'' }}">
                            <a href="{{url('admin/web-publikasi/index')}}">Publikasi</a> 
                        </li> -->
                        <li class="{{ request()->is('admin/web-berita/*') ? 'active':'' }}">
                            <a href="{{url('admin/web-berita/index')}}">Berita</a> 
                        </li>
                        <li class="{{ request()->is('admin/web-informasi/*') ? 'active':'' }}">
                            <a href="{{url('admin/web-informasi/index')}}">Informasi</a> 
                        </li>
                       <!--  <li class="{{ request()->is('admin/web-pengunjung/*') ? 'active':'' }}">
                            <a href="{{url('admin/web-pengunjung/index')}}">Pengunjung</a> 
                        </li>
                        <li class="{{ request()->is('admin/web-komentar/*') ? 'active':'' }}">
                            <a href="{{url('admin/web-komentar/index')}}">Komentar</a> 
                        </li> -->
                        <li class="{{ request()->is('admin/web-pengaturan/*') ? 'active':'' }}">
                            <a href="{{url('admin/web-pengaturan/index')}}">Pengaturan</a> 
                        </li>
                    </ul>
                </li>

                <li class="">
                    <a href="{{url('admin/profil-akun')}}" ><i class="fa fa-user"></i><span>Profil Akun</span></a>
                </li>



            </ul>
        </nav>
    </div>

    <div class="tab-pane" id="setting">
        <h6>Choose Skin</h6>
        <ul class="choose-skin list-unstyled">
            <li data-theme="purple"><div class="purple"></div></li>
            <li data-theme="blue"><div class="blue"></div></li>
            <li data-theme="cyan" class="active"><div class="cyan"></div></li>
            <li data-theme="green"><div class="green"></div></li>
            <li data-theme="orange"><div class="orange"></div></li>
            <li data-theme="blush"><div class="blush"></div></li>
            <li data-theme="red"><div class="red"></div></li>
        </ul>

        <ul class="list-unstyled font_setting mt-3">
            <li>
                <label class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" name="font" value="font-nunito" checked="">
                    <span class="custom-control-label">Nunito Google Font</span>
                </label>
            </li>
            <li>
                <label class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" name="font" value="font-ubuntu">
                    <span class="custom-control-label">Ubuntu Font</span>
                </label>
            </li>
            <li>
                <label class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" name="font" value="font-raleway">
                    <span class="custom-control-label">Raleway Google Font</span>
                </label>
            </li>
            <li>
                <label class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" name="font" value="font-IBMplex">
                    <span class="custom-control-label">IBM Plex Google Font</span>
                </label>
            </li>
        </ul>

        <ul class="list-unstyled mt-3">
            <li class="d-flex align-items-center mb-2">
                <label class="toggle-switch theme-switch">
                    <input type="checkbox">
                    <span class="toggle-switch-slider"></span>
                </label>
                <span class="ml-3">Enable Dark Mode!</span>
            </li>
            <li class="d-flex align-items-center mb-2">
                <label class="toggle-switch theme-rtl">
                    <input type="checkbox">
                    <span class="toggle-switch-slider"></span>
                </label>
                <span class="ml-3">Enable RTL Mode!</span>
            </li>
            <li class="d-flex align-items-center mb-2">
                <label class="toggle-switch theme-high-contrast">
                    <input type="checkbox">
                    <span class="toggle-switch-slider"></span>
                </label>
                <span class="ml-3">Enable High Contrast Mode!</span>
            </li>
          


        </ul>                    

  @endif
       <!--  <hr>
        <h6>General Settings</h6>
        <ul class="setting-list list-unstyled">
            <li>
                <label class="fancy-checkbox">
                    <input type="checkbox" name="checkbox" checked>
                    <span>Allowed Notifications</span>
                </label>                      
            </li>
            <li>
                <label class="fancy-checkbox">
                    <input type="checkbox" name="checkbox">
                    <span>Offline</span>
                </label>
            </li>
            <li>
                <label class="fancy-checkbox">
                    <input type="checkbox" name="checkbox">
                    <span>Location Permission</span>
                </label>
            </li>
        </ul>

        <a href="#" target="_blank" class="btn btn-block btn-primary">Buy this item</a> -->
        <!-- <a href="https://themeforest.net/user/wrraptheme/portfolio" target="_blank" class="btn btn-block btn-secondary">View portfolio</a>  -->
    </div>

</div>


