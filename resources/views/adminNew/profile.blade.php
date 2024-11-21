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
                                                            bayarkan menjadi Rp 50.021,- </li>
                                                        <li style="margin-bottom:5px;">Lakukan pembayaran melalui transfer
                                                            ke 7070000363 BSI A/N (MA EXCELLENT PACET LAIN LAIN)
                                                        <li style="margin-bottom:5px;">Setelah melakukan pembayaran, harap
                                                            lakukan konfirmasi melalui contact person <a
                                                                href="https://wa.me/+6287857327310">087857327310</a></li>
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

                                                    @if ($user->type == 'ipa')
                                                        <a class=""
                                                            href="https://chat.whatsapp.com/ICIJbqmDpYm8BGLoVpdqvn"
                                                            role="button">https://chat.whatsapp.com/ICIJbqmDpYm8BGLoVpdqvn</a>
                                                    @endif
                                                    @if ($user->type == 'mtk')
                                                        <a class=""
                                                            href="https://chat.whatsapp.com/ICIJbqmDpYm8BGLoVpdqvn"
                                                            role="button">https://chat.whatsapp.com/ICIJbqmDpYm8BGLoVpdqvn</a>
                                                    @endif
                                                    @if ($user->type == 'pai')
                                                        <a class=""
                                                            href="https://chat.whatsapp.com/F3G8GjDPffKJFn6QscTqBX"
                                                            role="button">https://chat.whatsapp.com/F3G8GjDPffKJFn6QscTqBX</a>
                                                    @endif
                                                    @if ($user->type == 'ips')
                                                        <a class=""
                                                            href="https://chat.whatsapp.com/EOAXJwXvIEhLWnJAJb8oSK"
                                                            role="button">https://chat.whatsapp.com/EOAXJwXvIEhLWnJAJb8oSK</a>
                                                    @endif
                                                    @if ($user->type == 'inggris')
                                                        <a class=""
                                                            href="https://chat.whatsapp.com/H98O77PPdJ9GB5OmVTA1q0"
                                                            role="button">https://chat.whatsapp.com/H98O77PPdJ9GB5OmVTA1q0</a>
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
                                            @if ($user->type == 'ipa')
                                                <a class="" href="https://chat.whatsapp.com/ICIJbqmDpYm8BGLoVpdqvn"
                                                    role="button">https://chat.whatsapp.com/ICIJbqmDpYm8BGLoVpdqvn</a>
                                            @endif
                                            @if ($user->type == 'mtk')
                                                <a class="" href="https://chat.whatsapp.com/ICIJbqmDpYm8BGLoVpdqvn"
                                                    role="button">https://chat.whatsapp.com/ICIJbqmDpYm8BGLoVpdqvn</a>
                                            @endif
                                            @if ($user->type == 'pai')
                                                <a class="" href="https://chat.whatsapp.com/F3G8GjDPffKJFn6QscTqBX"
                                                    role="button">https://chat.whatsapp.com/F3G8GjDPffKJFn6QscTqBX</a>
                                            @endif
                                            @if ($user->type == 'ips')
                                                <a class="" href="https://chat.whatsapp.com/EOAXJwXvIEhLWnJAJb8oSK"
                                                    role="button">https://chat.whatsapp.com/EOAXJwXvIEhLWnJAJb8oSK</a>
                                            @endif
                                            @if ($user->type == 'inggris')
                                                <a class="" href="https://chat.whatsapp.com/H98O77PPdJ9GB5OmVTA1q0"
                                                    role="button">https://chat.whatsapp.com/H98O77PPdJ9GB5OmVTA1q0</a>
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
                                            <h5 class="fw-bold">Pendaftaran </h5>
                                            <p class="text-muted mb-2 fw-bold">23 November 2023- 15 Januari 2025</p>
                                        </li>

                                        <li class="timeline-item mb-5">

                                            <span class="timeline-icon">
                                                <i class="bi bi-window-stack text-primary fa-sm fa-fw"></i>
                                            </span>
                                            <h5 class="fw-bold">Penyisihan</h5>
                                            <p class="text-muted mb-2 fw-bold">19 Januari 2024 penyisihan</p>
                                            <p class="text-muted">Pelaksanaan penyisihan peserta akan dilakukan secara
                                                daring.</p>

                                        </li>

                                        <li class="timeline-item mb-5">

                                            <span class="timeline-icon">
                                                <i class="bi bi-people text-primary fa-sm fa-fw"></i>
                                            </span>
                                            <h5 class="fw-bold">Quarter Final</h5>
                                            <p class="text-muted mb-2 fw-bold">2 Februari 2025</p>
                                            <p class="text-muted">
                                                Pertandingan babak quarter final akan dilaksanakan secara daring. Peserta
                                                yang berhasil lolos ke babak ini akan menerima pemberitahuan melalui situs
                                                web Galaxy, dan diminta untuk melakukan pembayaran sebesar RP. 50.000.
                                            </p>

                                        </li>
                                        <li class="timeline-item mb-5">

                                            <span class="timeline-icon">
                                                <i class="bi bi-building text-primary fa-sm fa-fw"></i>
                                            </span>
                                            <h5 class="fw-bold">Semifinal & Final</h5>
                                            <p class="text-muted mb-2 fw-bold">9 Februari 2025</p>
                                            <p class="text-muted">
                                                Semifinal dan final akan dilakukan offline di MAU Amanatul Ummah. Jalan KH.
                                                Abdul Chalim No.01, Kembang, Kembangbelor, Kec. Pacet, Kabupaten Mojokerto,
                                                Jawa Timur 61374.
                                            </p>
                                        </li>

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
