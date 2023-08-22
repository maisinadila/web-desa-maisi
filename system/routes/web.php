<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrisinalitasController;

use App\Http\Controllers\WebsiteController;

use App\Http\Controllers\Datadesa\PendudukController;
use App\Http\Controllers\Datadesa\PendidikanController;
use App\Http\Controllers\Datadesa\PekerjaanController;
use App\Http\Controllers\Datadesa\LaporanRealisasiAnggaranController;

use App\Http\Controllers\Profildesa\ProfilDesaController;
use App\Http\Controllers\ProfilController;

use App\Http\Controllers\ManajemenPersuratan\TemplateSuratController;
use App\Http\Controllers\ManajemenPersuratan\RegistrasiSuratController;
use App\Http\Controllers\ManajemenPersuratan\PengaturanSuratController;
use App\Http\Controllers\ManajemenPersuratan\SuratmasukController;
use App\Http\Controllers\ManajemenPersuratan\SuratkeluarController;


use App\Http\Controllers\ManajemenWebsite\PublikasiController;
use App\Http\Controllers\ManajemenWebsite\BannerController;
use App\Http\Controllers\ManajemenWebsite\PengunjungController;
use App\Http\Controllers\ManajemenWebsite\KomentarController;
use App\Http\Controllers\ManajemenWebsite\GaleriController;
use App\Http\Controllers\ManajemenWebsite\BeritaController;
use App\Http\Controllers\ManajemenWebsite\InformasiController;
use App\Http\Controllers\ManajemenWebsite\LayananController;
use App\Http\Controllers\ManajemenWebsite\PengaturanController;
use App\Http\Controllers\Statistik\StatistikController;


Route::controller(OrisinalitasController::class)->group(function () {
    Route::get('orisinalitas/surat-keterangan-domisili/{id:kode_token}', 'skDomisili');
    Route::get('orisinalitas/surat-keterangan-tidak-mampu/{id:kode_token}', 'skTidakMampu');
    Route::get('orisinalitas/surat-pengantar-nikah/{id:kode_token}', 'spNikah');
    Route::get('orisinalitas/surat-pengantar-kk/{id:kode_token}', 'spKK');
    Route::get('orisinalitas/surat-pengantar-skck/{id:kode_token}', 'spSkck');
    Route::get('orisinalitas/surat-pengantar-nikah/{id:kode_token}', 'spNikah');
    Route::get('orisinalitas/surat-pengantar-akta-kelahiran/{id:kode_token}', 'spAkta');
    Route::get('orisinalitas/surat-keterangan-kehilangan/{id:kode_token}', 'skKehilangan');
    Route::get('orisinalitas/surat-keterangan-usaha/{id:kode_token}', 'skUsaha');
    Route::get('orisinalitas/surat-keterangan-beda-nama/{id:kode_token}', 'skBedanama');
    Route::get('orisinalitas/surat-keterangan-ahli-waris/{id:kode_token}', 'skAhliWaris');
});
Route::controller(WebsiteController::class)->group(function () {
    Route::get('/', 'beranda');

    Route::get('profil-wilayah-desa','profilWilayahDesa');
    Route::get('visi-misi-desa', 'visiMisiDesa');
    Route::get('kepala-desa-dan-sambutan', 'sambutanKepala');
    Route::get('perangkat-desa', 'PerangkatDesa');
    Route::get('struktur-organisasi-desa', 'organisasiDesa');

    Route::get('layanan-desa', 'layananDesa');
    Route::get('program-desa', 'programDesa');
    Route::get('peraturan-desa', 'peraturanDesa');

    Route::get('data-penduduk', 'dataPenduduk');
    Route::get('data-pendidikan', 'dataPendidikan');
    Route::get('data-pekerjaan', 'dataPekerjaan');
    Route::get('data-agama', 'dataAgama');
    Route::get('data-dusun', 'dataDusun');

    Route::get('realisasi-anggaran', 'realisasiAnggaran');


    Route::get('berita-desa', 'berita');
    Route::get('berita-desa/{berita}', 'bacaBerita');
    Route::get('galeri-desa', 'galeri');
    Route::get('informasi-desa', 'informasi');
    Route::get('informasi-desa/{informasi}', 'bacaInformasi');
});




Route::controller(AuthController::class)->group(function () {
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginProcess');
    Route::get('logout', 'logout');
});


Route::controller(AdminController::class)->group(function () {
    Route::get('beranda', 'beranda');
});


Route::prefix('admin')->middleware('auth')->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('beranda', 'beranda');
    });

    Route::controller(ProfilController::class)->group(function () {
        Route::get('profil-akun', 'index');
        Route::put('profil-akun/update', 'update');
    });


    // DATA DESA ===================================
    Route::prefix('data-desa')->group(function () {
        Route::controller(PendudukController::class)->group(function () {
            Route::get('penduduk', 'index');
            Route::get('penduduk/create', 'create');
            Route::get('penduduk/{kk}/detail', 'show');
            Route::get('penduduk/{penduduk}/edit', 'edit');
            Route::get('penduduk/{kk:no_kk}/tambah', 'tambah');
            Route::post('penduduk/{kk:no_kk}/tambah', 'postTambah');
            Route::put('penduduk/{penduduk}/update', 'update');
            Route::get('penduduk/{penduduk}/hapus', 'destroy');
            Route::get('penduduk/{kk:no_kk}/delete', 'hapusKk');
            Route::post('penduduk/create', 'store');
        });

        Route::controller(PendidikanController::class)->group(function () {
            Route::get('pendidikan', 'index');
            Route::post('pendidikan/create', 'store');
            Route::put('pendidikan/{pendidikan}/update', 'store');
            Route::get('pendidikan/{pendidikan}/delete', 'destroy');
        });

        Route::controller(PekerjaanController::class)->group(function () {
            Route::get('pekerjaan', 'index');
            Route::post('pekerjaan/create', 'store');
            Route::put('pekerjaan/{pekerjaan}/update', 'update');
            Route::get('pekerjaan/{pekerjaan}/delete', 'destroy');
        });

        Route::controller(LaporanRealisasiAnggaranController::class)->group(function () {
            Route::get('laporan-realisasi-anggaran', 'index');
            Route::post('laporan-realisasi-anggaran/create', 'store');
            Route::delete('laporan-realisasi-anggaran/delete/{laporan}', 'destroy');
        });
    });
     // END DATA DESA ===================================

    // PROFIL DESA=======================================
    Route::prefix('profil-desa')->group(function () {
        Route::controller(ProfilDesaController::class)->group(function () {
           Route::get('profil-wilayah-desa', 'wilayahDesa');
           Route::get('profil-wilayah-desa/edit/{profil}', 'wilayahDesaEdit');
           Route::put('profil-wilayah-desa/update/{profil}', 'wilayahDesaUpdate');


           Route::get('kepala-desa-dan-sambutan', 'kepalaDesa');
           Route::get('kepala-desa-dan-sambutan/edit/{profil}', 'kepalaDesaEdit');
           Route::put('kepala-desa-dan-sambutan/update/{profil}', 'kepalaDesaUpdate');

           Route::get('visi-misi-desa', 'visiMisi');
           Route::get('visi-misi-desa/edit/{profil}', 'visiMisiEdit');
           Route::put('visi-misi-desa/update/{profil}', 'visiMisiUpdate');

           Route::get('perangkat-desa', 'perangkatDesa');
           Route::get('perangkat-desa/create', 'perangkatDesaCreate');
           Route::post('perangkat-desa/create', 'perangkatDesaStore');
           Route::get('perangkat-desa/edit/{perangkat}', 'perangkatDesaEdit');
           Route::put('perangkat-desa/{perangkat}/update', 'perangkatDesaUpdate');
           Route::get('perangkat-desa/{perangkat}/hapus', 'perangkatDestroy');

           Route::get('struktur-organisasi', 'strukturDesa');
           Route::get('struktur-organisasi/edit/{profil}', 'strukturDesaEdit');
           Route::put('struktur-organisasi/update/{profil}', 'strukturDesaUpdate');

           Route::get('program-desa', 'programDesa');
           Route::get('program-desa/create', 'programDesaCreate');
           Route::get('program-desa/show/{program}', 'programDesaShow');
           Route::post('program-desa/create', 'programDesaStore');
           Route::get('program-desa/edit/{program}', 'programDesaEdit');
           Route::put('program-desa/update/{program}', 'programDesaUpdate');
           Route::get('program-desa/delete/{program}', 'programDesaDestroy');

           Route::get('peraturan-desa', 'peraturanDesa');
           Route::get('peraturan-desa/edit/{profil}', 'peraturanDesaEdit');
           Route::put('peraturan-desa/update/{profil}', 'peraturanDesaUpdate');

       });
    });


    Route::prefix('statistik')->group(function () {
        Route::controller(StatistikController::class)->group(function () {
           Route::get('umur', 'umur');
           Route::get('agama', 'agama');
           Route::get('pendidikan', 'pendidikan');
           Route::get('pekerjaan', 'pekerjaan');
           Route::get('status-perkawinan', 'statusPerkawinan');

       });
    });


    // Manajemen Persuratan =======================================
    Route::prefix('manajemen-persuratan')->group(function () {
        Route::controller(TemplateSuratController::class)->group(function () {

            Route::get('template-surat', 'index');
            Route::get('template-surat/edit/{template}', 'create');
            Route::post('template-surat/create', 'store');
            Route::get('template-surat/{template}/edit', 'edit');
            Route::put('template-surat/{template}/update', 'update');
            Route::delete('template-surat/delete/{template}', 'destroy');

        });

        Route::controller(RegistrasiSuratController::class)->group(function () {


            Route::get('registrasi-surat', 'index');
            Route::post('cari-penduduk', 'cariPenduduk');
            

            // =======Note==============
            Route::get('registrasi-surat/{template:nama_file}', 'indexSurat'); // index dari masing2 jenis surat
            Route::get('registrasi-surat/{template:nama_file}/create', 'formSurat');
           
            // Route ini berfungsi untuk menentukan surat akan diarahkan ke halaman create yang mana secara otomatis, jadi bagian ini yang ditamabah/dibuat ulang lagi
            // =======NOTE===============


            Route::post('registrasi-surat/surat-keterangan-domisili/create', 'storeSkDomisili');
            Route::get('registrasi-surat/surat-keterangan-domisili/{id}/show', 'showSkDomisili');
            Route::get('registrasi-surat/surat-keterangan-domisili/{id}/cetak', 'cetakSkDomisili');
            Route::get('registrasi-surat/surat-keterangan-domisili/{id:kode_token}/ttd', 'ttdSkDomisili');

            Route::post('registrasi-surat/surat-keterangan-tidak-mampu/create', 'storeSkTidakMampu');
            Route::get('registrasi-surat/surat-keterangan-tidak-mampu/{id}/show', 'showSkTidakMampu');
            Route::get('registrasi-surat/surat-keterangan-tidak-mampu/{id}/cetak', 'cetakSkTidakMampu');
            Route::get('registrasi-surat/surat-keterangan-tidak-mampu/{id:kode_token}/ttd', 'ttdSkTidakMampu');



            Route::post('registrasi-surat/surat-pengantar-nikah/create', 'storeSpNikah');
            Route::get('registrasi-surat/surat-pengantar-nikah/{id}/show', 'showSpNikah');
             Route::get('registrasi-surat/surat-pengantar-nikah/createtambahan/{id}', 'createTambahanNikah');
            Route::post('registrasi-surat/surat-pengantar-nikah/createtambahan/{id}', 'storeTambahanNikah');
            Route::get('registrasi-surat/surat-pengantar-nikah/{id}/cetak', 'cetakSpNikah');
            Route::delete('registrasi-surat/surat-pengantar-nikah/{id}/delete', 'hapusSpNikah');
            Route::get('registrasi-surat/surat-pengantar-nikah/{id:kode_token}/ttd', 'ttdSpNikah');

            Route::get('registrasi-surat/surat-pengantar-nikah/{id}/cetak-n1-istri', 'cetakSpNikahN1Istri');
            Route::get('registrasi-surat/surat-pengantar-nikah/{id}/cetak-n2-istri', 'cetakSpNikahN2Istri');
            Route::get('registrasi-surat/surat-pengantar-nikah/{id}/cetak-n3', 'cetakSpNikahN3');
            Route::get('registrasi-surat/surat-pengantar-nikah/{id}/cetak-n4-istri', 'cetakSpNikahN4Istri');

            Route::get('registrasi-surat/surat-pengantar-nikah/{id}/cetak-n1-suami', 'cetakSpNikahN1Suami');
            Route::get('registrasi-surat/surat-pengantar-nikah/{id}/cetak-n2-suami', 'cetakSpNikahN2Suami');
            Route::get('registrasi-surat/surat-pengantar-nikah/{id}/cetak-n4-suami', 'cetakSpNikahN4Suami');



            Route::post('registrasi-surat/surat-keterangan-kehilangan/create', 'storeSkKehilangan');
            Route::get('registrasi-surat/surat-keterangan-kehilangan/createtambahan/{id}', 'createTambahan');
            Route::put('registrasi-surat/surat-keterangan-kehilangan/createtambahan/{id}', 'storeTambahan');
            Route::get('registrasi-surat/surat-keterangan-kehilangan/{id}/show', 'showSkKehilangan');
            Route::get('registrasi-surat/surat-keterangan-kehilangan/{id}/cetak', 'cetakSkKehilangan');
            Route::delete('registrasi-surat/surat-keterangan-kehilangan/{id}/delete', 'hapusSkKehilangan');
            Route::get('registrasi-surat/surat-keterangan-kehilangan/{id:kode_token}/ttd', 'ttdSkKehilangan');

            

            Route::post('registrasi-surat/surat-keterangan-penghasilan/create', 'storeSkPenghasilan');
            Route::get('registrasi-surat/surat-keterangan-penghasilan/createtambahan/{id}', 'createTambahanPenghasilan');
            Route::put('registrasi-surat/surat-keterangan-penghasilan/createtambahan/{id}', 'storeTambahanPenghasilan');
            Route::get('registrasi-surat/surat-keterangan-penghasilan/{id}/show', 'showSkPenghasilan');
            Route::get('registrasi-surat/surat-keterangan-penghasilan/{id}/cetak', 'cetakSkPenghasilan');
            Route::delete('registrasi-surat/surat-keterangan-penghasilan/{id}/delete', 'hapusSkPenghasilan');
            Route::get('registrasi-surat/surat-keterangan-penghasilan/{id:kode_token}/ttd', 'ttdSkPenghasilan');

            Route::post('registrasi-surat/surat-keterangan-usaha/create', 'storeSkUsaha');
            Route::get('registrasi-surat/surat-keterangan-usaha/{id}/show', 'showSkUsaha');
            Route::get('registrasi-surat/surat-keterangan-usaha/{id}/cetak', 'cetakSkUsaha');
            Route::delete('registrasi-surat/surat-keterangan-usaha/{id}/delete', 'hapusSkUsaha');
            Route::get('registrasi-surat/surat-keterangan-usaha/{id:kode_token}/ttd', 'ttdSkUsaha');


            Route::post('registrasi-surat/surat-keterangan-beda-nama/create', 'storeSkBedaNama');
            Route::get('registrasi-surat/surat-keterangan-beda-nama/createtambahan/{id}', 'createTambahanBedanama');
            Route::put('registrasi-surat/surat-keterangan-beda-nama/createtambahan/{id}', 'storeTambahanBedanama');
            Route::get('registrasi-surat/surat-keterangan-beda-nama/{id}/show', 'showSkBedaNama');
            Route::get('registrasi-surat/surat-keterangan-beda-nama/{id}/cetak', 'cetakSkBedaNama');
            Route::delete('registrasi-surat/surat-keterangan-beda-nama/{id}/delete', 'hapusSkBedaNama');
             Route::get('registrasi-surat/surat-keterangan-beda-nama/{id:kode_token}/ttd', 'ttdSkBedaNama');



            Route::post('registrasi-surat/surat-keterangan-ahli-waris/create', 'storeSkAhliWaris');
            Route::get('registrasi-surat/surat-keterangan-ahli-waris/createtambahan/{id}', 'createTambahanAhliWaris');
            Route::post('registrasi-surat/surat-keterangan-ahli-waris/createtambahan/{id}', 'storeTambahanAhliWaris');
            Route::get('registrasi-surat/surat-keterangan-ahli-waris/{id}/show', 'showSkAhliWaris');
            Route::get('registrasi-surat/surat-keterangan-ahli-waris/{id}/cetak', 'cetakSkAhliWaris');
            Route::delete('registrasi-surat/surat-keterangan-ahli-waris/{id}/delete', 'hapusSkAhliWaris');
             Route::get('registrasi-surat/surat-keterangan-ahli-waris/{id:kode_token}/ttd', 'ttdSkAhliWaris');;


            Route::post('registrasi-surat/surat-pengantar-kk/create', 'storeSpKK');
            Route::get('registrasi-surat/surat-pengantar-kk/{id}/show', 'showSpKK');
            Route::get('registrasi-surat/surat-pengantar-kk/{id}/cetak', 'cetakSpKK');
            Route::get('registrasi-surat/surat-pengantar-kk/{id:kode_token}/ttd', 'ttdSpKK');
             Route::get('registrasi-surat/surat-pengantar-kk/{id:kode_token}/ttd', 'ttdSpKK');



            Route::post('registrasi-surat/surat-pengantar-akta-kelahiran/create', 'storeSpAktaKelahiran');
            Route::get('registrasi-surat/surat-pengantar-akta-kelahiran/{id}/show', 'showSpAktaKelahiran');
            Route::get('registrasi-surat/surat-pengantar-akta-kelahiran/{id}/cetak', 'cetakSpAktaKelahiran');
            Route::delete('registrasi-surat/surat-pengantar-akta-kelahiran/{id}/delete', 'hapusSpAktaKelahiran');
             Route::get('registrasi-surat/surat-pengantar-akta-kelahiran/{id:kode_token}/ttd', 'ttdSpAktaKelahiran');


            Route::post('registrasi-surat/surat-pengantar-skck/create', 'storeSpSkck');
            Route::get('registrasi-surat/surat-pengantar-skck/{id}/show', 'showSpSkck');
            Route::get('registrasi-surat/surat-pengantar-skck/{id}/cetak', 'cetakSpSkck');
            Route::delete('registrasi-surat/surat-pengantar-skck/{id}/delete', 'hapusSpSkck');
             Route::get('registrasi-surat/surat-pengantar-skck/{id:kode_token}/ttd', 'ttdSpSkck');


            // tidak kepakai ///////////////////////////////////////////////////////////////////////////         
            Route::get('registrasi-surat/pilih-penduduk/{template}', 'pilihPenduduk');
            
            // proses post surat sk_domisili
            Route::get('registrasi-surat/sk-domisili/{template}/{sk}/cetak', 'cetakSkDomisili');
            Route::post('sk-domisili/create', 'storeSkDomisili');
            Route::get('sk-domisili/{sk}/detail', 'skDomisiliShow');

            // proses post surat sp_nikah
            Route::get('registrasi-surat/sp-nikah/{id_template}/{id_surat}/cetak', 'cetakSpNikah');
            Route::post('sp-nikah', 'spNikah');

            // proses post surat sk_kehilangan
            Route::get('registrasi-surat/sk-kehilangan/{id_template}/{id_surat}/cetak', 'cetakSkKehilangan');
            Route::post('sk-kehilangan', 'skKehilangan');

            // proses post surat sk_usaha
            Route::get('registrasi-surat/sk-usaha/{id_template}/{id_surat}/cetak', 'cetakSkUsaha');
            Route::post('sk-usaha', 'skUsaha');

            // proses post surat sk penghasilan
            Route::get('registrasi-surat/sk-penghasilan/{id_template}/{id_surat}/cetak', 'cetakSkPenghasilan');
            Route::post('sk-penghasilan', 'skPenghasilan');

            // proses post surat sk bedanama
            Route::get('registrasi-surat/sk-bedanama/{id_template}/{id_surat}/cetak', 'cetakSkBedanama');
            Route::post('sk-bedanama', 'skBedanama');


        });

Route::controller(PengaturanSuratController::class)->group(function () {

    Route::get('pengaturan-surat', 'index');
    Route::get('pengaturan-surat/edit/{surat}', 'create');
    Route::put('pengaturan-surat/update/{surat}', 'update');

});

Route::controller(SuratmasukController::class)->group(function () {
    Route::prefix('s-masuk')->group(function () {
        Route::get('/', 'index');
        Route::post('store', 'store');
        Route::get('detail/{id}', 'detail');
        Route::get('delete/{id}', 'delete');
    });
});

Route::controller(SuratkeluarController::class)->group(function () {
    Route::prefix('s-keluar')->group(function () {
        Route::get('/', 'index');
        Route::post('store', 'store');
        Route::get('detail/{id}', 'detail');
        Route::get('delete/{id}', 'delete');
    });
});
});
    // Manajemen Persuratan =======================================


    // MANAJEMEN WEBSITE ===================================
Route::prefix('web-galeri')->group(function () {
    Route::controller(GaleriController::class)->group(function () {
        Route::get('index', 'index');
        Route::post('store', 'store');
        Route::delete('delete/{id}', 'delete');
    });
});

Route::prefix('web-banner')->group(function () {
    Route::controller(BannerController::class)->group(function () {
        Route::get('index', 'index');
        Route::post('store', 'store');
        Route::delete('delete/{id}', 'delete');
    });
});

Route::prefix('web-publikasi')->group(function () {
    Route::controller(PublikasiController::class)->group(function () {
        Route::get('index', 'index');
        Route::get('create', 'create');
        Route::get('edit/{id}', 'edit');
        Route::get('detail/{id}', 'detail');
        Route::put('update/{id}', 'update');
        Route::post('store', 'store');
        Route::delete('delete/{id}', 'delete');
    });
});

Route::prefix('web-berita')->group(function () {
    Route::controller(BeritaController::class)->group(function () {
        Route::get('index', 'index');
        Route::get('create', 'create');
        Route::get('edit/{id}', 'edit');
        Route::get('detail/{id}', 'detail');
        Route::put('update/{id}', 'update');
        Route::post('store', 'store');
        Route::delete('delete/{id}', 'delete');
    });
});

Route::prefix('web-informasi')->group(function () {
    Route::controller(InformasiController::class)->group(function () {
        Route::get('index', 'index');
        Route::get('create', 'create');
        Route::get('edit/{id}', 'edit');
        Route::get('detail/{id}', 'detail');
        Route::put('update/{id}', 'update');
        Route::post('store', 'store');
        Route::delete('delete/{id}', 'delete');
    });
});

Route::prefix('web-pengunjung')->group(function () {
    Route::controller(PengunjungController::class)->group(function () {
        Route::get('index', 'index');
        Route::get('create', 'create');
        Route::get('edit/{id}', 'edit');
        Route::get('detail/{id}', 'detail');
        Route::put('update/{id}', 'update');
        Route::post('store', 'store');
        Route::delete('delete/{id}', 'delete');
    });
});

Route::prefix('web-komentar')->group(function () {
    Route::controller(KomentarController::class)->group(function () {
        Route::get('index', 'index');
        Route::get('create', 'create');
        Route::get('edit/{id}', 'edit');
        Route::get('detail/{id}', 'detail');
        Route::put('update/{id}', 'update');
        Route::post('store', 'store');
        Route::delete('delete/{id}', 'delete');
    });
});

Route::prefix('web-layanan')->group(function () {
    Route::controller(LayananController::class)->group(function () {
        Route::get('index', 'index');
        Route::get('create', 'create');
        Route::get('detail/{id}', 'detail');
        Route::get('edit/{id}', 'edit');
        Route::put('update/{id}', 'update');
        Route::post('store', 'store');
        Route::delete('delete/{id}', 'delete');
    });
});

Route::prefix('web-pengaturan')->group(function () {
    Route::controller(PengaturanController::class)->group(function () {
        Route::get('index', 'index');
        Route::post('storelogo', 'storelogo');
        Route::post('storemap', 'storemap');
    });
});
     // END MANAJEMEN WEBSITE ===================================


});


