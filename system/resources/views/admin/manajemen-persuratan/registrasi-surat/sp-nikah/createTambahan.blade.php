@extends('admin.template.base')
@push('stylecustom')
<link rel="stylesheet" href="{{url('public')}}/assets-admin/css/blog.css">


@endpush
@section('content')

<!-- breadcrumb -->
<div class="block-header ">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">
      <h2>Manajemen Surat</h2>
      <ul class="breadcrumb">
        <li class="breadcrumb-item align-items-center"><i class="fa fa-dashboard"></i></li>                            
        <li class="breadcrumb-item align-items-center"><a href="{{url('admin/manajemen-persuratan/registrasi-surat')}}">Kumpulan Surat</a></li>                            
        <li class="breadcrumb-item active">Tambah {{ucwords($template->nama_surat)}}</li>
      </ul>
    </div>
  </div>
</div>
<!-- akhir breadcrumb -->



<form action="{{url('admin/manajemen-persuratan/registrasi-surat/surat-pengantar-nikah/createtambahan',$detail->surat_id)}}" method="post">
  @csrf
  <div class="row clearfix">

    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <center>
            <h3>MODEL N1</h3>
          </center>
        </div>
      </div>
    </div>


    <div class="col-4">
      <div class="card">
        <div class="card-body">
          <div class="list-group" id="list-tab" role="tablist">
            <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">1. Data Calon Suami</a>
            <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">2. Data Calon Istri</a>
            <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">3. Data Orang Tua Suami</a>
            <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">4. Data Orang Tua Istri</a>

            <a class="list-group-item list-group-item-action" id="list-selesai-list" data-toggle="list" href="#list-selesai" role="tab" aria-controls="selesai">5. Selesai</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-8">
      <div class="tab-content" id="nav-tabContent">
        <!-- 1. Data Calon Suami -->
        <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                  <center>
                    <h3>Data Calon Suami</h3> <hr>
                  </center>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <span>Nama Calon Suami</span>
                    <input type="text" class="form-control" required name="nama_suami"> 
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <span>NIK Calon Suami</span>
                    <input type="text" class="form-control" required name="nik_suami">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <span>Tgl. Lahir Calon Suami</span>
                    <input type="date" class="form-control" name="tgl_lahir_suami" required>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <span>Tempat Lahir</span>
                    <input type="text" class="form-control" name="tempat_lahir_suami" required>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <span>Jenis Kelamin</span>
                    <select name="jk_suami" id="" class="form-control" readonly>
                      <option value="Laki-laki" selected >Laki-laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <span>Warganegara</span>
                    <select name="kewarganegaraan_suami" id="" class="form-control">
                      <option value="WNI" >WNI</option>
                      <option value="WNA">WNA</option>
                    </select>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <span>Agama</span>
                    <select name="agama_suami" id="" class="form-control">
                      <option value="Islam" >Islam</option>
                      <option value="Kristen">Kristen</option>
                      <option value="Hindu">Hindu</option>
                      <option value="Budha">Budha</option>
                      <option value="Konghuchu">Konghuchu</option>
                    </select>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <span>Pekerjaan</span>
                    <select name="pekerjaan_suami" id="" class="form-control" required>
                      <option value="" hidden>-- Pilih Pekerjaan --</option>
                      @foreach($list_pekerjaan as $p)
                      <option value="{{$p->nama_pekerjaan}}">{{$p->nama_pekerjaan}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <span>Alamat</span>
                    <input type="text" name="alamat_suami" required class="form-control">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <span>Bin/Binti</span>
                    <input type="text" name="bin_suami" required class="form-control">
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>

        <!-- 2. Data Calon Istri -->
        <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
          <div class="card">
            <div class="card-body">
             <div class="row">
              <div class="col-md-12">
                <center>
                  <h3>Data Calon Istri</h3> <hr>
                </center>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <span>Nama Calon Istri</span>
                  <input type="text" name="nama_istri" required class="form-control">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <span>NIK Calon Istri</span>
                  <input type="text" name="nik_istri" required class="form-control">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <span>Tgl. Lahir Calon Istri</span>
                  <input type="date" name="tgl_lahir_istri" required class="form-control">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <span>Tempat Lahir</span>
                  <input type="text" class="form-control" name="tempat_lahir_istri" required>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <span>Jenis Kelamin</span>
                  <select name="jk_istri" id="" class="form-control" readonly>
                    <option value="Laki-laki" >Laki-laki</option>
                    <option value="Perempuan" selected>Perempuan</option>
                  </select>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <span>Warganegara</span>
                  <select name="kewarganegaraan_istri" id="" class="form-control">
                    <option value="WNI" >WNI</option>
                    <option value="WNA">WNA</option>
                  </select>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <span>Agama</span>
                  <select name="agama_istri" id="" class="form-control">
                    <option value="Islam" >Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Konghuchu">Konghuchu</option>
                  </select>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <span>Pekerjaan</span>
                  <select name="pekerjaan_istri" id="" class="form-control">
                    <option value="" hidden>-- Pilih Pekerjaan --</option>
                    @foreach($list_pekerjaan as $p)
                    <option value="{{$p->nama_pekerjaan}}">{{$p->nama_pekerjaan}}</option>
                    @endforeach
                  </select>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <span>Alamat</span>
                  <input type="text" name="alamat_istri" required class="form-control">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <span>Bin/Binti</span>
                  <input type="text" name="bin_istri" required class="form-control">
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
      <!-- 3. Data Orang Tua Istri -->
      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
        <div class="card">
          <div class="card-body">
           <div class="row">
            <div class="col-md-12">
              <center>
                <h3>Data Orang Tua Calon Suami</h3> <hr>
              </center>
            </div>

            <div class="col-md-12">
              <div class="card-header border-0 mt-3 mb-3">
                <h3>Data Ayah</h3>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <span>Nama Ayah Suami</span>
                <input type="text" required name="nama_ayah_suami" class="form-control">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <span>Tgl. Lahir Ayah Suami</span>
                <input type="date" name="tgl_lahir_ayah_suami" required class="form-control">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <span>Tempat Lahir Ayah Suami</span>
                <input type="text" name="tempat_lahir_ayah_suami" class="form-control">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <span>Jenis Kelamin Ayah Suami</span>
                <select name="jk_ayah_suami" id="" class="form-control" readonly>
                  <option value="Laki-laki" selected >Laki-laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <span>Warganegara Ayah Suami</span>
                <select name="kewarganegaraan_ayah_suami" id="" class="form-control">
                  <option value="WNI" >WNI</option>
                  <option value="WNA">WNA</option>
                </select>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <span>Agama Ayah Suami</span>
                <select name="agama_ayah_suami" id="" class="form-control">
                  <option value="Islam" >Islam</option>
                  <option value="Kristen">Kristen</option>
                  <option value="Hindu">Hindu</option>
                  <option value="Budha">Budha</option>
                  <option value="Konghuchu">Konghuchu</option>
                </select>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <span>Pekerjaan Ayah Suami</span>
                <select name="pekerjaan_ayah_suami" id="" class="form-control" required>
                  <option value="" hidden>-- Pilih Pekerjaan --</option>
                  @foreach($list_pekerjaan as $p)
                  <option value="{{$p->nama_pekerjaan}}">{{$p->nama_pekerjaan}}</option>
                  @endforeach
                </select>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <span>Alamat Ayah Suami</span>
                <input type="text" name="alamat_ayah_suami" required class="form-control">
              </div>
            </div>


            <!-- IBU SUAMI -->

            <div class="col-md-12">
              <div class="card-header border-0 mt-3 mb-3">
                <h3>Data Ibu</h3>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <span>Nama Ibu Suami</span>
                <input type="text" name="nama_ibu_suami" class="form-control">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <span>Tgl. Lahir Ibu Suami</span>
                <input type="date" name="tgl_lahir_ibu_suami" class="form-control">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <span>Tempat Lahir Ibu Suami</span>
                <input type="text" name="tempat_lahir_ibu_suami" class="form-control">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <span>Jenis Kelamin Ibu Suami</span>
                <select name="jk_ibu_suami" id="" class="form-control" readonly>
                  <option value="Laki-laki"  >Laki-laki</option>
                  <option value="Perempuan" selected>Perempuan</option>
                </select>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <span>Warganegara Ibu Suami</span>
                <select name="kewarganegaraan_ibu_suami" id="" class="form-control">
                  <option value="WNI" >WNI</option>
                  <option value="WNA">WNA</option>
                </select>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <span>Agama Ibu Suami</span>
                <select name="agama_ibu_suami" id="" class="form-control">
                  <option value="Islam" >Islam</option>
                  <option value="Kristen">Kristen</option>
                  <option value="Hindu">Hindu</option>
                  <option value="Budha">Budha</option>
                  <option value="Konghuchu">Konghuchu</option>
                </select>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <span>Pekerjaan Ibu Suami</span>
                <select name="pekerjaan_ibu_suami" id="" class="form-control" required>
                  <option value="" hidden>-- Pilih Pekerjaan --</option>
                  @foreach($list_pekerjaan as $p)
                  <option value="{{$p->nama_pekerjaan}}">{{$p->nama_pekerjaan}}</option>
                  @endforeach
                </select>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <span>Alamat Ibu Suami</span>
                <input type="text" name="alamat_ibu_suami" required class="form-control">
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

    <!-- 4. Data Orang Tua Suami -->
    <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
      <div class="card">
        <div class="card-body">
         <div class="row">
          <div class="col-md-12">
            <center>
              <h3>Data Orang Tua Calon Istri</h3> <hr>
            </center>
          </div>

          <div class="col-md-12">
            <div class="card-header border-0 mt-3 mb-3">
              <h3>Data Ayah</h3>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <span>Nama Ayah Istri</span>
              <input type="text" required name="nama_ayah_istri" class="form-control">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <span>Tgl. Lahir Ayah Istri</span>
              <input type="date" name="tgl_lahir_ayah_istri" required class="form-control">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <span>Tempat Lahir Ayah Istri</span>
              <input type="text" name="tempat_lahir_ayah_istri" class="form-control">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <span>Jenis Kelamin Ayah Istri</span>
              <select name="jk_ayah_istri" id="" class="form-control" readonly>
                <option value="Laki-laki" selected >Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <span>Warganegara Ayah Istri</span>
              <select name="kewarganegaraan_ayah_istri" id="" class="form-control">
                <option value="WNI" >WNI</option>
                <option value="WNA">WNA</option>
              </select>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <span>Agama Ayah Istri</span>
              <select name="agama_ayah_istri" id="" class="form-control">
                <option value="Islam" >Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Hindu">Hindu</option>
                <option value="Budha">Budha</option>
                <option value="Konghuchu">Konghuchu</option>
              </select>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <span>Pekerjaan Ayah Istri</span>
              <select name="pekerjaan_ayah_istri" id="" class="form-control" required>
                <option value="" hidden>-- Pilih Pekerjaan --</option>
                @foreach($list_pekerjaan as $p)
                <option value="{{$p->nama_pekerjaan}}">{{$p->nama_pekerjaan}}</option>
                @endforeach
              </select>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <span>Alamat Ayah Istri</span>
              <input type="text" name="alamat_ayah_istri" required class="form-control">
            </div>
          </div>


          <!-- IBU istri -->

          <div class="col-md-12">
            <div class="card-header border-0 mt-3 mb-3">
              <h3>Data Ibu</h3>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <span>Nama Ibu Istri</span>
              <input type="text" name="nama_ibu_istri" class="form-control">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <span>Tgl. Lahir Ibu Istri</span>
              <input type="date" name="tgl_lahir_ibu_istri" class="form-control">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <span>Tempat Lahir Ibu Istri</span>
              <input type="text" name="tempat_lahir_ibu_istri" class="form-control">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <span>Jenis Kelamin Ibu Istri</span>
              <select name="jk_ibu_istri" id="" class="form-control" readonly>
                <option value="Laki-laki"  >Laki-laki</option>
                <option value="Perempuan" selected>Perempuan</option>
              </select>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <span>Warganegara Ibu Istri</span>
              <select name="kewarganegaraan_ibu_istri" id="" class="form-control">
                <option value="WNI" >WNI</option>
                <option value="WNA">WNA</option>
              </select>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <span>Agama Ibu Istri</span>
              <select name="agama_ibu_istri" id="" class="form-control">
                <option value="Islam" >Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Hindu">Hindu</option>
                <option value="Budha">Budha</option>
                <option value="Konghuchu">Konghuchu</option>
              </select>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <span>Pekerjaan Ibu Istri</span>
              <select name="pekerjaan_ibu_istri" id="" class="form-control" required>
                <option value="" hidden>-- Pilih Pekerjaan --</option>
                @foreach($list_pekerjaan as $p)
                <option value="{{$p->nama_pekerjaan}}">{{$p->nama_pekerjaan}}</option>
                @endforeach
              </select>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <span>Alamat Ibu Istri</span>
              <input type="text" name="alamat_ibu_istri" required class="form-control">
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>


  <div class="tab-pane fade" id="list-selesai" role="tabpanel" aria-labelledby="list-selesai-list">
    <div class="card">
      <div class="card-body">
        <div class="card-header bg-success text-white mt-3 mb-3 border-0">
          <h3>Selesai</h3>
        </div>
        <div class="row">
          <div class="col-md-12">
           <b>Nama Pengaju : {{ucwords($detail->penduduk->nama_lengkap)}} <br>
            NIK Pengaju : {{$detail->penduduk->nik}}<br>
          </b>
          <span class="mb-3">Cek data terlebih dahulu, Pastikan data telah benar</span>
        </div>
        <div class="col-md-6 mt-3">
          <span>Nomor Surat Model N1 Istri</span>
          <input type="text" class="form-control" required name="n1_istri">
        </div>

         <div class="col-md-6 mt-3">
          <span>Nomor Surat Model N1 Suami</span>
          <input type="text" class="form-control" required name="n1_suami">
        </div>
        <div class="col-md-6 mt-3">
          <span>Nomor Surat Model N2 Istri</span>
          <input type="text" class="form-control" required name="n2_istri">
        </div>
        <div class="col-md-6 mt-3">
          <span>Nomor Surat Model N2 Suami</span>
          <input type="text" class="form-control" required name="n2_suami">
        </div>
        <div class="col-md-6">
          <span>Nomor Surat Model N3</span>
          <input type="text" class="form-control" required name="n3">
        </div>


        <div class="col-md-6">
          <span>Nomor Surat Model N4 Istri</span>
          <input type="text" class="form-control" required name="n4_istri">
        </div>

        <div class="col-md-6">
          <span>Nomor Surat Model N4 Suami</span>
          <input type="text" class="form-control" required name="n4_suami">
        </div>

        <div class="col-md-12">
          <button class="btn btn-primary mt-3 mb-3 btn-block" type="submit"><i class="fa fa-check"></i> AJUKAN SURAT PENGANTAR NIKAH</button>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

</form>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

@endsection