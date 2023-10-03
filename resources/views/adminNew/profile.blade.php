@extends('adminNew.templates.main')

@section('container')
    <main id="main" class="main">


        <div class="pagetitle">
            <h1>Profile</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="/dashboard">dashboard</a></li>
                    <li class="breadcrumb-item active">Profile</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        @foreach ($users as $user)
            @if ($user->email == $userr->email)
                <section class="section profile">
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="card">
                                <div
                                    class="card-body profile-card pt-4 d-flex flex-column align-items-center nav-tabs-bordered mx-3">
                                    <h2>{{ $user->nama }}</h2>
                                    <h3>{{ $user->type }}</h3>
                                    @if ($user->is_lolos == 'lolos')
                                        <div class="alert alert-success" role="alert">
                                            <div class="col-lg-12">
                                                <h3
                                                    style="font-family: unset; font-size: 30px; font-weight: 500; margin-bottom:10px;">
                                                    Selamat Anda lolos!!</h2>
                                                    <ol class="list cara-daftar">
                                                        {{-- <li style="margin-bottom:5px;">Selamat, anda lolos, Jadi harus bayar
                                                            dong wkwkwk:)</li> --}}
                                                        <li style="margin-bottom:5px;">Saat kamu lolos, kamu akan
                                                            mendapatkan
                                                            kode untuk ditambahkan saat pembayaran.<br>
                                                            Contoh kode yang kamu dapatkan adalah 021. Maka, untuk
                                                            mempermudah pelacakan data, uang pendaftaran yang harus kamu
                                                            bayarkan menjadi Rp 45.021,- </li>
                                                        <li style="margin-bottom:5px;">Lakukan pembayaran melalui transfer
                                                            ke rekening BSi - 7207000161 atas nama Irvan Prakoso
                                                        <li style="margin-bottom:5px;">Setelah melakukan pembayaran, harap
                                                            lakukan konfirmasi melalui contact person <a href="wa.me/+6289679301797">089679301797</a></li>
                                                        <li style="margin-bottom:5px;">Setelah verifikasi pembayaran maka
                                                            akan di verifikasi oleh admin dibawah ini,silahkan tunggu
                                                            maksimal 3x24 jam, jika belum silahkan hubungi admin</li>
                                                        
                                                      
                                                    </ol>
                                            </div>
                                        </div>
                                    @elseif ($user->is_lolos == 'tidak')
                                        <div class="alert alert-danger" role="alert">
                                             <div class="col-lg-12">
                                            Mohon maaf, anda tidak lolos seleksi </br> Semangaat… masih ada Galaxy tahun
                                            depan yang nunggu kamu. Jangan down, tetep up kemampuan kamu.
                                            </div>
                                        </div>
                                    @else
                                        <h6>pengumuman akan ditampilkan disini</h6>
                                    @endif

                                </div>
                                <div class="mx-3 tab-pane fade show active profile-overview" id="profile-overview">
                                    @if ($user->is_lolos == 'lolos')
                                        <h5 class="card-title">Kode Pembayaran</h5>
                                        <div class="row">
                                            <div class="col-lg-5 col-md-4 label ">kode</div>
                                            <div class="col-lg-7 col-md-8">{{ $user->kode }}</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-5 col-md-4 label ">Status pembayaran</div>
                                            @if ($user->status_pembayaran)
                                                <div class="col-lg-7 col-md-8">Sudah melakukan pembayaran,
                                                  silahkan masuk ke grub dibawah ini </br>
                                                        
                                                        @if ($user->type == 'mipa')
                                                <a class="" href="https://chat.whatsapp.com/Cf750MAUZiwBdAjwxM7Nkn"
                                                    role="button">https://chat.whatsapp.com/Cf750MAUZiwBdAjwxM7Nkn</a>
                                                      @endif
                                           @if ($user->type == 'pai')
                                                <a class="" href="https://chat.whatsapp.com/DaIQNOC171X7VL06WDm3T1"
                                                    role="button">https://chat.whatsapp.com/DaIQNOC171X7VL06WDm3T1</a>
                                                      @endif
                                            @if ($user->type == 'ips')
                                                <a class="" href="https://chat.whatsapp.com/HYcg2XwqdgZGwLm1GiNZ6R"
                                                    role="button">https://chat.whatsapp.com/HYcg2XwqdgZGwLm1GiNZ6R</a>
                                                 @endif
                                            @if ($user->type == 'inggris')
                                                <a class="" href="https://chat.whatsapp.com/IvSLOPT3UdzBXtkFBr1XAn"
                                                    role="button">https://chat.whatsapp.com/IvSLOPT3UdzBXtkFBr1XAn</a>
                                            @endif
                                        </div>
                                            @else
                                                <div class="col-lg-7 col-md-8">belum melakukan pembayaran</div>
                                            @endif
                                                
                                    </div>
                                    @endif

                                    <h5 class="card-title">Grub Whatsapp</h5>
                                    <div class="row">
                                        <div class="col-lg-5 col-md-4 label ">Link</div>
                                        <div class="col-lg-7 col-md-8">
                                            @if ($user->type == 'mipa')
                                                <a class="" href="https://chat.whatsapp.com/Drbss8wVyOYGMHHSZPmMDX"
                                                    role="button">https://chat.whatsapp.com/Drbss8wVyOYGMHHSZPmMDX</a>
                                                      @endif
                                            @if ($user->type == 'pai')
                                                <a class="" href="https://chat.whatsapp.com/GDloHzDr9d249i7aWF1eAJ"
                                                    role="button">https://chat.whatsapp.com/GDloHzDr9d249i7aWF1eAJ</a>
                                                      @endif
                                            @if ($user->type == 'ips')
                                                <a class="" href="https://chat.whatsapp.com/EI7XB8hc3rk4DJWRkADlr2"
                                                    role="button">https://chat.whatsapp.com/EI7XB8hc3rk4DJWRkADlr2</a>
                                                 @endif
                                            @if ($user->type == 'inggris')
                                                <a class="" href="https://chat.whatsapp.com/L4PfAg99MCz1iRtUWFCeCP"
                                                    role="button">https://chat.whatsapp.com/L4PfAg99MCz1iRtUWFCeCP</a>
                                            @endif
                                        </div>
                                    </div>
                                    <h5 class="card-title">Akun website E-Ujian</h5>

                                    <div class="row">
                                        <div class="col-lg-5 col-md-4 label ">Username</div>
                                        <div class="col-lg-7 col-md-8">{{ $user->username }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-5 col-md-4 label ">Nomor peserta</div>
                                        <div class="col-lg-7 col-md-8">{{ $user->nomor_peserta }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-5 col-md-4 label ">Password</div>
                                        <div class="col-lg-7 col-md-8">{{ $user->password_peserta }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-5 col-md-4 label ">Link Penysihan </div>
                                        <div class="col-lg-7 col-md-8"><a
                                                href="https://www.e-ujian.com/login">https://www.e-ujian.com/login</a></div>
                                    </div>
                                </div>
                            </div>




                        </div>

                        <div class="col-xl-8">

                            <div class="card">
                                <div class="card-body pt-3">
                                    <!-- Bordered Tabs -->
                                    <ul class="nav nav-tabs nav-tabs-bordered">

                                        <li class="nav-item">
                                            <button class="nav-link active" data-bs-toggle="tab"
                                                data-bs-target="#profile-overview">Overview</button>
                                        </li>



                                    </ul>

                                    <div class="tab-content pt-2">

                                        <div class="tab-pane fade show active profile-overview" id="profile-overview">


                                            <h5 class="card-title">Detail profil</h5>

                                            <div class="row">
                                                <div class="col-lg-3 col-md-4 label ">Nama lengkap</div>
                                                <div class="col-lg-9 col-md-8">{{ $user->nama }}</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3 col-md-4 label ">Username</div>
                                                <div class="col-lg-9 col-md-8">{{ $user->username }}</div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-3 col-md-4 label">Sekolah</div>
                                                <div class="col-lg-9 col-md-8">{{ $user->sekolah }}</div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-3 col-md-4 label">NISN</div>
                                                <div class="col-lg-9 col-md-8">{{ $user->nisn }}</div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-3 col-md-4 label">Nomor Telpon</div>
                                                <div class="col-lg-9 col-md-8">{{ $user->telp }}</div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-3 col-md-4 label">Email</div>
                                                <div class="col-lg-9 col-md-8">{{ $user->email }}</div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-3 col-md-4 label">Jenis Kelamin</div>
                                                <div class="col-lg-9 col-md-8">{{ $user->jk }}</div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-3 col-md-4 label">Jenis Lomba</div>
                                                <div class="col-lg-9 col-md-8">{{ $user->type }}</div>
                                            </div>

                                        </div>




                                    </div><!-- End Bordered Tabs -->




                                </div>


                            </div>



                        </div>
                        
                        <!-- News & Updates Traffic -->
                        <div class="col-xl-7">
                            <div class="card">
                                <div class="card-body pt-3 mx-3">
                                    <!-- Bordered Tabs -->
                                    <h1 class="card-title fs-4">Pengumuman</h1>
                                    <div class="news">
                                        <div class="post-item clearfix">
                                            <h4>Pengumuman</h4>
                                            <p>Semua informasi mengenai perubahan dan sebagainya akan diumumkan dibawah ini
                                            </p>
                                        </div>
                                    </div>
                                </div><!-- End Bordered Tabs -->
                            </div>
                        </div>
                        <!-- End News & Updates -->

                        <!-- Section: Timeline -->
                        <div class="col-xl-5">
                            <div class="card">
                                <div class="card-body pt-3 mx-5">
                                    <!-- Bordered Tabs -->
                                    <h1 class="card-title fs-4">Timeline</h1>
                                    <ul class="timeline-with-icons">
                                        <li class="timeline-item mb-5">
                                            <span class="timeline-icon">
                                                <i class="bi bi-1-circle text-primary fa-sm fa-fw"></i>
                                            </span>
                                            <h5 class="fw-bold">Pendaftaran Gelombang 1</h5>
                                            <p class="text-muted mb-2 fw-bold">1 desember 2022 - 20 desember 2022</p>
                                        </li>
                                        <li class="timeline-item mb-5">

                                            <span class="timeline-icon">
                                                <i class="bi bi-2-circle text-primary fa-sm fa-fw"></i>
                                            </span>
                                            <h5 class="fw-bold">Pendaftaran Gelombang 2</h5>
                                            <p class="text-muted mb-2 fw-bold">5 januari 2023 - 26 januari 2023</p>

                                        </li>

                                        <li class="timeline-item mb-5">

                                            <span class="timeline-icon">
                                                <i class="bi bi-window-stack text-primary fa-sm fa-fw"></i>
                                            </span>
                                            <h5 class="fw-bold">Penyisihan</h5>
                                            <p class="text-muted mb-2 fw-bold">29 januari 2023</p>
                                            <p class="text-muted">Pelaksanaan penyisihan peserta akan dilakukan secara
                                                daring.</p>

                                        </li>

                                        <li class="timeline-item mb-5">

                                            <span class="timeline-icon">
                                                <i class="bi bi-people text-primary fa-sm fa-fw"></i>
                                            </span>
                                            <h5 class="fw-bold">Quarter Final</h5>
                                            <p class="text-muted mb-2 fw-bold">22 februari 2023</p>
                                            <p class="text-muted">
                                                Pertandingan babak quarter final akan dilaksanakan secara daring. Peserta
                                                yang berhasil lolos ke babak ini akan menerima pemberitahuan melalui situs
                                                web Galaxy, dan diminta untuk melakukan pembayaran sebesar RP. 45000.
                                            </p>

                                        </li>
                                        <li class="timeline-item mb-5">

                                            <span class="timeline-icon">
                                                <i class="bi bi-building text-primary fa-sm fa-fw"></i>
                                            </span>
                                            <h5 class="fw-bold">Semifinal & Final</h5>
                                            <p class="text-muted mb-2 fw-bold">5 maret 2023</p>
                                            <p class="text-muted">
                                                Semifinal dan final akan dilakukan offline di MAU Amanatul Ummah. Jalan KH.
                                                Abdul Chalim No.01, Kembang, Kembangbelor, Kec. Pacet, Kabupaten Mojokerto,
                                                Jawa Timur 61374.
                                            </p>
                                        </li>
                                        {{-- <li class="timeline-item mb-5">

                                            <span class="timeline-icon">
                                                <i class="fas fa-money-bill-wave text-primary fa-sm fa-fw"></i>
                                            </span>
                                            <h5 class="fw-bold">Quarter Final</h5>
                                            <p class="text-muted mb-2 fw-bold">22 februari 2023</p>
                                            <p class="text-muted">
                                                Nulla ac tellus convallis, pulvinar nulla ac, fermentum diam. Sed
                                                et urna sit amet massa dapibus tristique non finibus ligula. Nam
                                                pharetra libero nibh, id feugiat tortor rhoncus vitae. Ut suscipit
                                                vulputate mattis.
                                            </p>
                                        </li> --}}
                                    </ul>
                                </div><!-- End Bordered Tabs -->
                            </div>
                        </div>
                        <!-- Section: Timeline -->




                    </div>


                </section>
            @endif
        @endforeach


    </main><!-- End #main -->
@endsection
