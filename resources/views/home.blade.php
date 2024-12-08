@extends('templates.main')

@section('container')
    <section id="beranda" class="position-relative mt-5">
        <div class="container mt-5">
            <img src="{{ url('assets/images/img/planet samping.png') }}" alt=""
                class="position-absolute planet-kiri" />
            <img src="{{ url('assets/images/img/planet-atas.png') }}" alt="" class="position-absolute planet-atas" />
            <img src="{{ url('assets/images/img/Rocket_illustra.png') }}" alt="" class="position-absolute roket" />
            <div class="beranda-content d-flex">
                <div class="beranda-tagline my-auto w-100 text-center">
                    <img src="{{ url('assets/images/img/logo glx.png') }}" alt="" class="tagline-img" />
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="tagline-line"></div>
                        <h1 class="m-0 mx-3">Adventure Time</h1>
                        <div class="tagline-line"></div>
                    </div>

                    <div class="circle1 mt-5 d-none d-sm-block">
                        <a href="#tentang">
                            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64"
                                fill="none" class="lingkaran1">
                                <circle cx="32.001" cy="32" r="31" stroke="white" stroke-width="2" />
                                <path d="M31.6313 40.6905L16.843 25.9021" stroke="#E0DCDC" stroke-width="2"
                                    stroke-linecap="round" />
                                <path d="M46.5322 25.7875L31.7456 40.5741" stroke="#E0DCDC" stroke-width="2"
                                    stroke-linecap="round" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="tentang" class="position-relative mb-5">
        <!-- <img src="{{ url('assets/images/img/circle-blue.png') }}" alt="" class="circle-blue position-absolute" /> -->
        <div class="container mt-5">
            <div class="tentang-header text-center">
                <h2>Show your skill to the world</h2>
                <h1>Tentang Galaxy</h1>
                <p class="w-75 mx-auto">
                    Selamat datang di "Galaxy," sebuah platform lomba yang didedikasikan untuk merayakan semangat
                    pengetahuan, kreativitas, dan eksplorasi bagi para siswa SMP. Kami adalah tim yang berkomitmen untuk
                    memupuk minat dan bakat siswa
                    dalam berbagai bidang, dari matematika hingga seni kreatif.
                </p>

                <div class="my-5">
                    <a href="{{ url('/aboutus') }}" class="tentang-selengkapnya d-inline mt-5"
                        style="text-decoration: none">Selengkapnya</a>
                </div>
            </div>
        </div>
        <!-- Set up your HTML -->
        {{-- <div class="owl-carousel owl-theme">
            <div class="item"><img src="{{ url('assets/images/img/aftershine.png') }}" alt="" /></div>
            <div class="item"><img src="{{ url('assets/images/img/aftershine.png') }}" alt="" /></div>
        </div> --}}
    </section>

    <section id="gs">
        <div class="container">
            <div class="gs-judul text-center">
                <h2>Show your skill to world</h2>
                <h1>Guess Star</h1>
                <p>Mereka akan tampil disini!</p>
            </div>
            <div class="gs-gambar my-5 text-center">
                <img src="{{ url('assets/images/img/gs.png') }}" alt="" />
            </div>
            <div class="gs-footer text-center w-75 mx-auto">
                <p>Di “Galaxy” kami juga mengundang beberapa guess star untuk memeriahkan acara di malam puncak dan untuk
                    mengisi seminar.</p>
            </div>
        </div>
    </section>

    <section id="alur">
        <div class="container">
            <div class="gs-judul text-center">
                <h2>Show your skill to world</h2>
                <h1>Begini alur skema dasar dari event ini</h1>
                <p>Baca baik-baik detailnya ya, agar tidak salah langkah</p>
            </div>

            <div class="row bg-white bg-opacity-10 alur-block my-5 mx-3 mx-lg-0">
                <div class="col-lg-4" style="padding: 0">
                    <div class="alur-block-item1 mx-auto my-2 p-4 rounded-3 d-flex row">
                        <div class="col-6 col-lg-12 d-flex">
                            <img src="{{ url('assets/images/img/verif.png') }}" alt="" />
                        </div>
                        <div class="col-6 col-lg-12">
                            <h1>Daftar dan login</h1>
                            <p>Sebelum kalian mengikuti perlombaan login dulu dan lengkapi data diri kalian</p>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-light" data-bs-toggle="modal"
                                data-bs-target="#modallogin">Daftar</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" style="padding: 0">
                    <div class="alur-block-item2 mx-auto my-2 p-4 rounded-3 d-flex row ">
                        <div class="col-6 col-lg-12 d-flex">
                            <img src="{{ url('assets/images/img/kalender.png') }}" alt="" />
                        </div>
                        <div class="col-6 col-lg-12">
                            <h1>Pengerjaan dan upload</h1>
                            <p>Waktunya pengerjaan lomba sesuai bidang yang kalian ikuti.</p>
                            <button type="button" class="btn btn-light" data-bs-toggle="modal"
                                data-bs-target="#modalwaktu">Detail</button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4" style="padding: 0">
                    <div class="alur-block-item3 mx-auto my-2 p-4 rounded-3 row">
                        <div class="col-6 col-lg-12 d-flex">
                            <img src="{{ url('assets/images/img/piala.png') }}" alt="" />
                        </div>
                        <div class="col-6 col-lg-12">
                            <h1>Pengumuman</h1>
                            <p>
                                Pengumuman finalis <br />
                                dan pemenang
                            </p>
                            <button type="button" class="btn btn-light" data-bs-toggle="modal"
                                data-bs-target="#modalpengumuman">Detail</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="modallogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header border-bottom-0">
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="alur-modal">
                                <div class="mx-2 mb-3">
                                    <h1>Login dan daftar</h1>
                                    <p>Khusus untuk pendaftaran, info lengkap bisa kalian cek lewat tombol dibawah.</p>
                                    <div class="my-lg-5 my-2">
                                        <a href="{{ url('/register') }}" class="btn-purple p-2 d-inline mt-5"
                                            style="text-decoration: none">daftar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="modalwaktu" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header border-bottom-0">
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="alur-modal">
                                <div class="mx-2 mb-3">
                                    <h1>Pengerjaan dan upload</h1>
                                    <p>Berikut adalah timeline dari acara galaxy
                                    </p> <br>
                                    <ul>
                                        <h5>
                                            Pendaftaran akademik
                                        </h5>
                                        <li>
                                            23 November 2024 – 15 Januari 2025
                                        </li>
                                        <h5>
                                            Pendaftaran non akademik
                                        </h5>
                                        <li>
                                            23 November 2024 - 31 Desember 2024
                                        </li>
                                        <h5>
                                            Pengumpulan multimedia
                                        </h5>
                                        <li>
                                            1 Januari – 12 Januari 2025
                                        </li>
                                        <h5>
                                            TM penyisihan awal
                                        </h5>
                                        <li>
                                            18 Januari 2025
                                        </li>
                                        <h5>
                                            Penyisihan awal (online)
                                        </h5>
                                        <li>
                                            19 Januari 2025
                                        </li>
                                        <h5>
                                            Pengumuman lolos penyisihan awal
                                        </h5>
                                        <li>
                                            21 Januari 2025
                                        </li>
                                        <h5>
                                            Pembayaran peserta yang lolos penyisihan awal
                                        </h5>
                                        <li>
                                            21 Januari – 31 Januari 2025
                                        </li>
                                        <h5>
                                            TM quarter final
                                        </h5>
                                        <li>
                                            1 Februari 2025
                                        </li>
                                        <h5>
                                            Pelaksanaan quarter final
                                        </h5>
                                        <li>
                                            2 Februari 2025
                                        </li>
                                        <h5>
                                            Pengumuman hasil quarter final
                                        </h5>
                                        <li>
                                            3 Februari 2025
                                        </li>
                                        <h5>
                                            TM Alur Kedatangan peserta semifinal dan final
                                        </h5>
                                        <li>
                                            4 Februari 2025
                                        </li>
                                        <h5>
                                            Khotmil Qur'an
                                        </h5>
                                        <li>
                                            7 Februari 2025
                                        </li>
                                        <h5>
                                            Penyisihan offline internal + seminar
                                        </h5>
                                        <li>
                                            8 Februari 2025
                                        </li>
                                        <h5>
                                            Semifinal dan final internal & eksternal + malam puncak
                                        </h5>
                                        <li>
                                            9 Februari 2025
                                        </li>
                                    </ul>
                                    <a href="" class="btn btn-light"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modalpengumuman" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header border-bottom-0">
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="alur-modal">
                                <div class="mx-2 mb-3">
                                    <h1>Pengumuman</h1>
                                    <p>pengumuman akan diumumkan pada hari final dan akan diumumkan melalui grup wa atau
                                        di
                                        dashboard website kami</p>
                                    <div class="my-lg-5 my-2">
                                        @auth
                                            <a href="{{ url('/dashboard/profile') }}" class="btn-purple p-2 d-inline mt-5"
                                                style="text-decoration: none">Cek Pengumuman</a>
                                        @else
                                            <a href="{{ url('/login') }}" class="btn-purple p-2 d-inline mt-5"
                                                style="text-decoration: none">Cek Pengumuman</a>
                                        @endauth
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="lomba">
        <div class="container">
            <div class="gs-judul text-center">
                <h2>What is relevant to you</h2>
                <h1 class="my-2">Pilih lomba yang relevan dengan kamu</h1>
                <p>Pilih lomba yang sesuai dengan kemampuan kamu ya.</p>
            </div>

            <div class="row mt-5 justify-content-center">
                {{-- IPA --}}
                <div class="col-lg-3 col-md-4 mt-3">
                    <div class="lomba-block">
                        <img class="mx-auto d-block py-3" src="{{ url('assets/images/lomba/mipa.png') }}"
                            alt="" />
                        <div class="mx-4 mt-3">
                            <h1>IPA</h1>
                            <div class="d-flex justify-content-between mt-5 pb-3">
                                <h2 class="my-auto">Akademik</h2>
                                <div>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-light" data-bs-toggle="modal"
                                        data-bs-target="#modalLomba1">Detail</button>

                                    <!-- Modal -->
                                    <div class="modal modal-xl fade" id="modalLomba1" tabindex="-1"
                                        aria-labelledby="modalLomba1Label" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div
                                                    class="modal-header d-flex justify-content-between align-content-center mx-3">
                                                    <nav aria-label="breadcrumb" class="d-block m-0 mt-3">
                                                        <ol class="breadcrumb">
                                                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                                                            <li class="breadcrumb-item"><a href="#">Library</a></li>
                                                            <li class="breadcrumb-item active" aria-current="page"><a
                                                                    href=""> Data</a></li>
                                                        </ol>
                                                    </nav>

                                                    <button type="button" class="btn-close d-block"
                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="container-fluid">
                                                        <div class="row">
                                                            <div class="col-lg-6 text-white p-3">
                                                                <!-- Left side content goes here -->
                                                                <img src="{{ url('assets/images/lomba/mipa.png') }}"
                                                                    alt="" class="gambar-modal w-100" />
                                                            </div>
                                                            <div class="col-lg-6 bg-pink text-dark p-3 isi-modal">
                                                                <h1>IPA</h1>
                                                                <h2>Deskripsi :</h2>
                                                                <p>
                                                                    Ilmu Pengetahuan Alam (IPA) merupakan salah satu
                                                                    komponen penting dalam kurikulum pendidikan yang
                                                                    bertujuan untuk memberikan pemahaman tentang berbagai
                                                                    fenomena alam dan prinsip-prinsip ilmiah yang
                                                                    mendasarinya. IPA mencakup berbagai aspek, seperti
                                                                    fisika, biologi, dan kimia, yang saling terintegrasi
                                                                    untuk membantu siswa memahami dunia di sekitar mereka.
                                                                    Event ini tidak hanya menjadi ajang untuk menguji
                                                                    kemampuan dan kecerdasan peserta, tetapi juga sebagai
                                                                    platform untuk menggali potensi kreativitas siswa/i.
                                                                    Oleh karena itu tujuan diselenggarakan olimpiade IPA
                                                                    yang diadakan GALAXY 8.0 untuk menjaring siswa/I SMP/MTs
                                                                    Sederajat Yang mempunyai bakat dalam bidang
                                                                </p>
                                                                <h2>Informasi :</h2>
                                                                <div
                                                                    class="d-flex justify-content-between pb-4 mb-3 border-bottom border-3 border-opacity-25 border-dark">
                                                                    <div class="d-flex align-content-center">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="45" height="45"
                                                                            viewBox="0 0 45 45" fill="none">
                                                                            <path
                                                                                d="M17.25 12H16.2003C14.7301 12 13.9945 12 13.433 12.2861C12.9391 12.5378 12.5378 12.9391 12.2861 13.433C12 13.9945 12 14.7301 12 16.2003V28.8003C12 30.2704 12 31.0051 12.2861 31.5666C12.5378 32.0605 12.9391 32.4625 13.433 32.7142C13.994 33 14.7287 33 16.1959 33H17.25M17.25 12H28.8003C30.2704 12 31.0044 12 31.566 12.2861C32.0599 12.5378 32.4625 12.9391 32.7142 13.433C33 13.994 33 14.7287 33 16.1959V28.8047C33 30.272 33 31.0056 32.7142 31.5666C32.4625 32.0605 32.0599 32.4625 31.566 32.7142C31.005 33 30.2713 33 28.8041 33H17.25M17.25 12V33M22.5 21.1875H27.75M22.5 17.25H27.75"
                                                                                stroke="#790C61" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                            <circle cx="22.5" cy="22.5" r="21.5"
                                                                                stroke="#780D60" stroke-width="2" />
                                                                        </svg>
                                                                        <h2
                                                                            class="m-0 mx-2 my-2 d-flex align-items-center">
                                                                            Guidebook</h2>
                                                                    </div>
                                                                    <div class="d-flex">
                                                                        <a style="text-decoration: none"
                                                                            href="https://intip.in/kebutuhanpesertaglx8"
                                                                            class="btn-purple px-2 px-lg-3 py-lg-2 py-1 tombol-modal my-auto">Download</a>
                                                                    </div>
                                                                </div>

                                                                <div
                                                                    class="d-flex justify-content-between align-content-center pb-4 mb-3 border-bottom border-3 border-opacity-25 border-dark">
                                                                    <div class="">
                                                                        <h2 class="m-0 my-1">HTM</h2>
                                                                        <h1>FREE</h1>
                                                                        @auth
                                                                            <h2>
                                                                                Sudah mengikuti
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="20" height="20"
                                                                                    viewBox="0 0 20 20" fill="none">
                                                                                    <path
                                                                                        d="M13 8L9 12L7 10M10 19C5.02944 19 1 14.9706 1 10C1 5.02944 5.02944 1 10 1C14.9706 1 19 5.02944 19 10C19 14.9706 14.9706 19 10 19Z"
                                                                                        stroke="#7A0D62" stroke-width="2"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                </svg>
                                                                            </h2>
                                                                        @endauth
                                                                    </div>

                                                                    <div class="my-auto">
                                                                        @auth
                                                                        @else
                                                                            <a style="text-decoration: none"
                                                                                href="{{ url('register') }}"
                                                                                class="btn-purple px-2 px-lg-3 py-lg-2 py-1 tombol-modal my-auto">Ikuti
                                                                                Lomba</a>
                                                                        @endauth
                                                                    </div>
                                                                </div>

                                                                @auth


                                                                    <h2>Pengerjaan :</h2>
                                                                    <p>
                                                                        nantinya link pengerjaan akan tampil di bawah ini
                                                                    </p>

                                                                    <style>
                                                                        .countdown {
                                                                            display: flex;
                                                                            justify-content: space-around;
                                                                            margin-top: 50px;
                                                                        }

                                                                        .countdown div {
                                                                            text-align: center;
                                                                        }
                                                                    </style>

                                                                    <div class="container mb-5">
                                                                        <div id="countdown" class="countdown">
                                                                            <div><span class="days">00</span><br />Hari</div>
                                                                            <div><span class="hours">00</span><br />Jam</div>
                                                                            <div><span class="minutes">00</span><br />Menit
                                                                            </div>
                                                                            <div><span class="seconds">00</span><br />Detik
                                                                            </div>

                                                                            <script>
                                                                                // Menentukan tanggal dan waktu target
                                                                                var targetDate = new Date("Jan 13, 2024 08:59:59").getTime();

                                                                                // Membuat fungsi yang akan dijalankan setiap detik
                                                                                var countdown = setInterval(function() {
                                                                                    // console.log("test('should first', () => { second })");
                                                                                    // Mendapatkan tanggal dan waktu saat ini
                                                                                    var currentDate = new Date().getTime();

                                                                                    // Menghitung selisih antara target dan saat ini dalam milidetik
                                                                                    var difference = targetDate - currentDate;

                                                                                    // Mengkonversi selisih dalam hari, jam, menit, dan detik
                                                                                    var days = Math.floor(difference / (1000 * 60 * 60 * 24));
                                                                                    var hours = Math.floor(
                                                                                        (difference % (1000 * 60 * 60 * 24)) /
                                                                                        (1000 * 60 * 60)
                                                                                    );
                                                                                    var minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
                                                                                    var seconds = Math.floor((difference % (1000 * 60)) / 1000);

                                                                                    document.querySelector(".days").innerHTML = days;
                                                                                    document.querySelector(".hours").innerHTML = hours;
                                                                                    document.querySelector(".minutes").innerHTML = minutes;
                                                                                    document.querySelector(".seconds").innerHTML = seconds;

                                                                                    // console.log(seconds);

                                                                                    // Menampilkan hasil dalam elemen HTML dengan id="countdown"
                                                                                    // document.querySelector("countdown").innerHTML = days + " hari " + hours + " jam " +
                                                                                    //     minutes + " menit " + seconds + " detik ";

                                                                                    // Jika selisih kurang dari atau sama dengan nol, berhenti menghitung dan tampilkan pesan
                                                                                    if (difference <= 0) {
                                                                                        clearInterval(countdown);
                                                                                        document.querySelector(".countdown").innerHTML = "Daftar";
                                                                                    }
                                                                                }, 1000);
                                                                            </script>


                                                                            <svg class="my-auto"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="49" height="49"
                                                                                viewBox="0 0 49 49" fill="none">
                                                                                <path
                                                                                    d="M24.4955 14.5V27H36.9929M47 8.42788L39.3411 2M9.6589 2L2 8.42788M24.4955 47C13.452 47 4.4995 38.0457 4.4995 27C4.4995 15.9543 13.452 7 24.4955 7C35.5389 7 44.4914 15.9543 44.4914 27C44.4914 38.0457 35.5389 47 24.4955 47Z"
                                                                                    stroke="#790C61" stroke-width="4"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </div>

                                                                        <br />
                                                                        {{-- <button
                                                                            class="btn-purple px-2 px-lg-3 py-lg-2 py-1 tombol-modal my-auto">Kumpulkan</button>
                                                                        <button
                                                                            class="btn-purple px-2 px-lg-3 py-lg-2 py-1 tombol-modal my-auto">Kumpulkan</button> --}}
                                                                    </div>
                                                                @endauth

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-3">
                    <div class="lomba-block">
                        <img class="mx-auto d-block py-3" src="{{ url('assets/images/lomba/matematika.png') }}"
                            alt="" />
                        <div class="mx-4 mt-3">
                            <h1>Matematika</h1>
                            <div class="d-flex justify-content-between mt-5 pb-3">
                                <h2 class="my-auto">Akademik</h2>
                                <div>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-light" data-bs-toggle="modal"
                                        data-bs-target="#modalLombamatematika">Detail</button>

                                    <!-- Modal -->
                                    <div class="modal modal-xl fade" id="modalLombamatematika" tabindex="-1"
                                        aria-labelledby="modalLomba1Label" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div
                                                    class="modal-header d-flex justify-content-between align-content-center mx-3">
                                                    <nav aria-label="breadcrumb" class="d-block m-0 mt-3">
                                                        <ol class="breadcrumb">
                                                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                                                            <li class="breadcrumb-item"><a href="#">Library</a></li>
                                                            <li class="breadcrumb-item active" aria-current="page"><a
                                                                    href=""> Data</a></li>
                                                        </ol>
                                                    </nav>

                                                    <button type="button" class="btn-close d-block"
                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="container-fluid">
                                                        <div class="row">
                                                            <div class="col-lg-6 text-white p-3">
                                                                <!-- Left side content goes here -->
                                                                <img src="{{ url('assets/images/lomba/matematika.png') }}"
                                                                    alt="" class="gambar-modal w-100" />
                                                            </div>
                                                            <div class="col-lg-6 bg-pink text-dark p-3 isi-modal">
                                                                <h1>Matematika</h1>
                                                                <h2>Deskripsi :</h2>
                                                                <p>
                                                                    Matematika adalah fondasi penting dalam perkembangan
                                                                    ilmu pengetahuan, perannya semakin terlihat jelas dalam
                                                                    berbagai kompetisi akademik, termasuk Olimpiade
                                                                    Matematika. Event ini tidak hanya menjadi ajang untuk
                                                                    menguji kemampuan dan kecerdasan peserta, tetapi juga
                                                                    sebagai platform untuk menggali potensi kreativitas
                                                                    siswa/i. Oleh karena itu tujuan diselenggarakan
                                                                    olimpiade Matemtika yang diadakan GALAXY 8.0 untuk
                                                                    menjaring siswa/I SMP/MTs Sederajat Yang mempunyai bakat
                                                                    dalam bidang studi Matematika yang diharapkan dapat
                                                                    membangun semangat berkompetisi dikalangan siswa smp dan
                                                                    mts
                                                                </p>
                                                                <h2>Informasi :</h2>
                                                                <div
                                                                    class="d-flex justify-content-between pb-4 mb-3 border-bottom border-3 border-opacity-25 border-dark">
                                                                    <div class="d-flex align-content-center">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="45" height="45"
                                                                            viewBox="0 0 45 45" fill="none">
                                                                            <path
                                                                                d="M17.25 12H16.2003C14.7301 12 13.9945 12 13.433 12.2861C12.9391 12.5378 12.5378 12.9391 12.2861 13.433C12 13.9945 12 14.7301 12 16.2003V28.8003C12 30.2704 12 31.0051 12.2861 31.5666C12.5378 32.0605 12.9391 32.4625 13.433 32.7142C13.994 33 14.7287 33 16.1959 33H17.25M17.25 12H28.8003C30.2704 12 31.0044 12 31.566 12.2861C32.0599 12.5378 32.4625 12.9391 32.7142 13.433C33 13.994 33 14.7287 33 16.1959V28.8047C33 30.272 33 31.0056 32.7142 31.5666C32.4625 32.0605 32.0599 32.4625 31.566 32.7142C31.005 33 30.2713 33 28.8041 33H17.25M17.25 12V33M22.5 21.1875H27.75M22.5 17.25H27.75"
                                                                                stroke="#790C61" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                            <circle cx="22.5" cy="22.5" r="21.5"
                                                                                stroke="#780D60" stroke-width="2" />
                                                                        </svg>
                                                                        <h2
                                                                            class="m-0 mx-2 my-2 d-flex align-items-center">
                                                                            Guidebook</h2>
                                                                    </div>
                                                                    <div class="d-flex">
                                                                        <a style="text-decoration: none"
                                                                            href="https://intip.in/kebutuhanpesertaglx8"
                                                                            class="btn-purple px-2 px-lg-3 py-lg-2 py-1 tombol-modal my-auto">Download</a>
                                                                    </div>
                                                                </div>

                                                                <div
                                                                    class="d-flex justify-content-between align-content-center pb-4 mb-3 border-bottom border-3 border-opacity-25 border-dark">
                                                                    <div class="">
                                                                        <h2 class="m-0 my-1">HTM</h2>
                                                                        <h1>FREE</h1>
                                                                        @auth
                                                                            <h2>
                                                                                Sudah mengikuti
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="20" height="20"
                                                                                    viewBox="0 0 20 20" fill="none">
                                                                                    <path
                                                                                        d="M13 8L9 12L7 10M10 19C5.02944 19 1 14.9706 1 10C1 5.02944 5.02944 1 10 1C14.9706 1 19 5.02944 19 10C19 14.9706 14.9706 19 10 19Z"
                                                                                        stroke="#7A0D62" stroke-width="2"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                </svg>
                                                                            </h2>
                                                                        @endauth
                                                                    </div>

                                                                    <div class="my-auto">
                                                                        @auth
                                                                        @else
                                                                            <a style="text-decoration: none"
                                                                                href="{{ url('register') }}"
                                                                                class="btn-purple px-2 px-lg-3 py-lg-2 py-1 tombol-modal my-auto">Ikuti
                                                                                Lomba</a>
                                                                        @endauth
                                                                    </div>
                                                                </div>

                                                                @auth


                                                                    <h2>Pengerjaan :</h2>
                                                                    <p>
                                                                        nantinya link pengerjaan akan tampil di bawah ini
                                                                    </p>

                                                                    <style>
                                                                        .countdown {
                                                                            display: flex;
                                                                            justify-content: space-around;
                                                                            margin-top: 50px;
                                                                        }

                                                                        .countdown div {
                                                                            text-align: center;
                                                                        }
                                                                    </style>

                                                                    <div class="container mb-5">
                                                                        <div id="countdown" class="countdown">
                                                                            <div><span class="days">00</span><br />Hari</div>
                                                                            <div><span class="hours">00</span><br />Jam</div>
                                                                            <div><span class="minutes">00</span><br />Menit
                                                                            </div>
                                                                            <div><span class="seconds">00</span><br />Detik
                                                                            </div>

                                                                            <script>
                                                                                // Menentukan tanggal dan waktu target
                                                                                var targetDate = new Date("Jan 13, 2024 08:59:59").getTime();

                                                                                // Membuat fungsi yang akan dijalankan setiap detik
                                                                                var countdown = setInterval(function() {
                                                                                    // console.log("test('should first', () => { second })");
                                                                                    // Mendapatkan tanggal dan waktu saat ini
                                                                                    var currentDate = new Date().getTime();

                                                                                    // Menghitung selisih antara target dan saat ini dalam milidetik
                                                                                    var difference = targetDate - currentDate;

                                                                                    // Mengkonversi selisih dalam hari, jam, menit, dan detik
                                                                                    var days = Math.floor(difference / (1000 * 60 * 60 * 24));
                                                                                    var hours = Math.floor(
                                                                                        (difference % (1000 * 60 * 60 * 24)) /
                                                                                        (1000 * 60 * 60)
                                                                                    );
                                                                                    var minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
                                                                                    var seconds = Math.floor((difference % (1000 * 60)) / 1000);

                                                                                    document.querySelector(".days").innerHTML = days;
                                                                                    document.querySelector(".hours").innerHTML = hours;
                                                                                    document.querySelector(".minutes").innerHTML = minutes;
                                                                                    document.querySelector(".seconds").innerHTML = seconds;

                                                                                    // console.log(seconds);

                                                                                    // Menampilkan hasil dalam elemen HTML dengan id="countdown"
                                                                                    // document.querySelector("countdown").innerHTML = days + " hari " + hours + " jam " +
                                                                                    //     minutes + " menit " + seconds + " detik ";

                                                                                    // Jika selisih kurang dari atau sama dengan nol, berhenti menghitung dan tampilkan pesan
                                                                                    if (difference <= 0) {
                                                                                        clearInterval(countdown);
                                                                                        document.querySelector(".countdown").innerHTML = "Daftar";
                                                                                    }
                                                                                }, 1000);
                                                                            </script>


                                                                            <svg class="my-auto"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="49" height="49"
                                                                                viewBox="0 0 49 49" fill="none">
                                                                                <path
                                                                                    d="M24.4955 14.5V27H36.9929M47 8.42788L39.3411 2M9.6589 2L2 8.42788M24.4955 47C13.452 47 4.4995 38.0457 4.4995 27C4.4995 15.9543 13.452 7 24.4955 7C35.5389 7 44.4914 15.9543 44.4914 27C44.4914 38.0457 35.5389 47 24.4955 47Z"
                                                                                    stroke="#790C61" stroke-width="4"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </div>

                                                                        <br />
                                                                        {{-- <button
                                                                            class="btn-purple px-2 px-lg-3 py-lg-2 py-1 tombol-modal my-auto">Kumpulkan</button>
                                                                        <button
                                                                            class="btn-purple px-2 px-lg-3 py-lg-2 py-1 tombol-modal my-auto">Kumpulkan</button> --}}
                                                                    </div>
                                                                @endauth

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- IPS --}}
                <div class="col-lg-3 col-md-4 mt-3">
                    <div class="lomba-block">
                        <img class="mx-auto d-block py-3" src="{{ url('assets/images/lomba/ips.png') }}"
                            alt="" />
                        <div class="mx-4 mt-3">
                            <h1>IPS</h1>
                            <div class="d-flex justify-content-between mt-5 pb-3">
                                <h2 class="my-auto">Akademik</h2>
                                <div>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-light" data-bs-toggle="modal"
                                        data-bs-target="#modalLomba3">Detail</button>

                                    <!-- Modal -->
                                    <div class="modal modal-xl fade" id="modalLomba3" tabindex="-1"
                                        aria-labelledby="modalLomba1Label" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div
                                                    class="modal-header d-flex justify-content-between align-content-center mx-3">
                                                    <nav aria-label="breadcrumb" class="d-block m-0 mt-3">
                                                        <ol class="breadcrumb">
                                                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                                                            <li class="breadcrumb-item"><a href="#">Library</a></li>
                                                            <li class="breadcrumb-item active" aria-current="page"><a
                                                                    href=""> Data</a></li>
                                                        </ol>
                                                    </nav>

                                                    <button type="button" class="btn-close d-block"
                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="container-fluid">
                                                        <div class="row">
                                                            <div class="col-lg-6 text-white p-3">
                                                                <!-- Left side content goes here -->
                                                                <img src="{{ url('assets/images/lomba/ips.png') }}"
                                                                    alt="" class="gambar-modal w-100" />
                                                            </div>
                                                            <div class="col-lg-6 bg-pink text-dark p-3 isi-modal">
                                                                <h1>IPS</h1>
                                                                <h2>Deskripsi :</h2>
                                                                <p>
                                                                    ilmu pengatahuan sosial (IPS) adalah bidang studi yang
                                                                    mempelajari interaksi antara manusia dan lingkungan
                                                                    sosial, budaya, serta ekonomi. Event ini tidak hanya
                                                                    menjadi ajang untuk menguji kemampuan dan kecerdasan
                                                                    peserta, tetapi juga sebagai platform untuk menggali
                                                                    potensi kreativitas siswa/i. Oleh karena itu tujuan
                                                                    diselenggarakan olimpiade Matemtika yang diadakan GALAXY
                                                                    8.0 untuk menjaring siswa/I SMP/MTs Sederajat Yang
                                                                    mempunyai bakat dalam bidang studi Matematika yang
                                                                    diharapkan dapat membangun semangat berkompetisi
                                                                    dikalangan siswa smp dan mts
                                                                </p>
                                                                <h2>Informasi :</h2>
                                                                <div
                                                                    class="d-flex justify-content-between pb-4 mb-3 border-bottom border-3 border-opacity-25 border-dark">
                                                                    <div class="d-flex align-content-center">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="45" height="45"
                                                                            viewBox="0 0 45 45" fill="none">
                                                                            <path
                                                                                d="M17.25 12H16.2003C14.7301 12 13.9945 12 13.433 12.2861C12.9391 12.5378 12.5378 12.9391 12.2861 13.433C12 13.9945 12 14.7301 12 16.2003V28.8003C12 30.2704 12 31.0051 12.2861 31.5666C12.5378 32.0605 12.9391 32.4625 13.433 32.7142C13.994 33 14.7287 33 16.1959 33H17.25M17.25 12H28.8003C30.2704 12 31.0044 12 31.566 12.2861C32.0599 12.5378 32.4625 12.9391 32.7142 13.433C33 13.994 33 14.7287 33 16.1959V28.8047C33 30.272 33 31.0056 32.7142 31.5666C32.4625 32.0605 32.0599 32.4625 31.566 32.7142C31.005 33 30.2713 33 28.8041 33H17.25M17.25 12V33M22.5 21.1875H27.75M22.5 17.25H27.75"
                                                                                stroke="#790C61" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                            <circle cx="22.5" cy="22.5" r="21.5"
                                                                                stroke="#780D60" stroke-width="2" />
                                                                        </svg>
                                                                        <h2
                                                                            class="m-0 mx-2 my-2 d-flex align-items-center">
                                                                            Guidebook</h2>
                                                                    </div>
                                                                    <div class="d-flex">
                                                                        <a style="text-decoration: none"
                                                                            href="https://intip.in/kebutuhanpesertaglx8"
                                                                            class="btn-purple px-2 px-lg-3 py-lg-2 py-1 tombol-modal my-auto">Download</a>
                                                                    </div>
                                                                </div>

                                                                <div
                                                                    class="d-flex justify-content-between align-content-center pb-4 mb-3 border-bottom border-3 border-opacity-25 border-dark">
                                                                    <div class="">
                                                                        <h2 class="m-0 my-1">HTM</h2>
                                                                        <h1>FREE</h1>
                                                                        @auth
                                                                            <h2>
                                                                                Sudah mengikuti
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="20" height="20"
                                                                                    viewBox="0 0 20 20" fill="none">
                                                                                    <path
                                                                                        d="M13 8L9 12L7 10M10 19C5.02944 19 1 14.9706 1 10C1 5.02944 5.02944 1 10 1C14.9706 1 19 5.02944 19 10C19 14.9706 14.9706 19 10 19Z"
                                                                                        stroke="#7A0D62" stroke-width="2"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                </svg>
                                                                            </h2>
                                                                        @endauth
                                                                    </div>

                                                                    <div class="my-auto">
                                                                        @auth
                                                                        @else
                                                                            <a style="text-decoration: none"
                                                                                href="{{ url('register') }}"
                                                                                class="btn-purple px-2 px-lg-3 py-lg-2 py-1 tombol-modal my-auto">Ikuti
                                                                                Lomba</a>
                                                                        @endauth
                                                                    </div>
                                                                </div>

                                                                @auth


                                                                    <h2>Pengerjaan :</h2>
                                                                    <p>
                                                                        nantinya link pengerjaan akan tampil di bawah ini
                                                                    </p>

                                                                    <style>
                                                                        .countdown {
                                                                            display: flex;
                                                                            justify-content: space-around;
                                                                            margin-top: 50px;
                                                                        }

                                                                        .countdown div {
                                                                            text-align: center;
                                                                        }
                                                                    </style>

                                                                    <div class="container mb-5">
                                                                        <div id="countdown" class="countdown">
                                                                            <div><span id="d3ays">00</span><br />Hari</div>
                                                                            <div><span id="h3ours">00</span><br />Jam</div>
                                                                            <div><span id="m3inutes">00</span><br />Menit
                                                                            </div>
                                                                            <div><span id="s3econds">00</span><br />Detik
                                                                            </div>
                                                                            <script>
                                                                                // Menentukan tanggal dan waktu target
                                                                                var targetDate = new Date("Jan 13, 2024 08:59:59").getTime();

                                                                                // Membuat fungsi yang akan dijalankan setiap detik
                                                                                var countdown = setInterval(function() {
                                                                                    // console.log("test('should first', () => { second })");
                                                                                    // Mendapatkan tanggal dan waktu saat ini
                                                                                    var currentDate = new Date().getTime();

                                                                                    // Menghitung selisih antara target dan saat ini dalam milidetik
                                                                                    var difference = targetDate - currentDate;

                                                                                    // Mengkonversi selisih dalam hari, jam, menit, dan detik
                                                                                    var days = Math.floor(difference / (1000 * 60 * 60 * 24));
                                                                                    var hours = Math.floor(
                                                                                        (difference % (1000 * 60 * 60 * 24)) /
                                                                                        (1000 * 60 * 60)
                                                                                    );
                                                                                    var minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
                                                                                    var seconds = Math.floor((difference % (1000 * 60)) / 1000);

                                                                                    document.getElementById("d3ays").innerHTML = days;
                                                                                    document.getElementById("h3ours").innerHTML = hours;
                                                                                    document.getElementById("m3inutes").innerHTML = minutes;
                                                                                    document.getElementById("s3econds").innerHTML = seconds;

                                                                                    // console.log(seconds);

                                                                                    // Menampilkan hasil dalam elemen HTML dengan id="countdown"
                                                                                    // document.getElementById("ountdown").innerHTML = days + " hari " + hours + " jam " +
                                                                                    //     minutes + " menit " + seconds + " detik ";

                                                                                    // Jika selisih kurang dari atau sama dengan nol, berhenti menghitung dan tampilkan pesan
                                                                                    if (difference <= 0) {
                                                                                        clearInterval(countdown);
                                                                                        document.getElementById("countdown").innerHTML = "Daftar";
                                                                                    }
                                                                                }, 1000);
                                                                            </script>


                                                                            <svg class="my-auto"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="49" height="49"
                                                                                viewBox="0 0 49 49" fill="none">
                                                                                <path
                                                                                    d="M24.4955 14.5V27H36.9929M47 8.42788L39.3411 2M9.6589 2L2 8.42788M24.4955 47C13.452 47 4.4995 38.0457 4.4995 27C4.4995 15.9543 13.452 7 24.4955 7C35.5389 7 44.4914 15.9543 44.4914 27C44.4914 38.0457 35.5389 47 24.4955 47Z"
                                                                                    stroke="#790C61" stroke-width="4"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </div>

                                                                        <br />
                                                                        {{-- <button
                                                                            class="btn-purple px-2 px-lg-3 py-lg-2 py-1 tombol-modal my-auto">Kumpulkan</button>
                                                                        <button
                                                                            class="btn-purple px-2 px-lg-3 py-lg-2 py-1 tombol-modal my-auto">Kumpulkan</button> --}}
                                                                    </div>
                                                                @endauth

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Bahasa Ingris --}}
                <div class="col-lg-3 col-md-4 mt-3">
                    <div class="lomba-block">
                        <img class="mx-auto d-block py-3" src="{{ url('assets/images/lomba/inggris.png') }}"
                            alt="" />
                        <div class="mx-4 mt-3">
                            <h1>Bahasa Inggris</h1>
                            <div class="d-flex justify-content-between mt-5 pb-3">
                                <h2 class="my-auto">Akademik</h2>
                                <div>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-light" data-bs-toggle="modal"
                                        data-bs-target="#modalLomba4">Detail</button>

                                    <!-- Modal -->
                                    <div class="modal modal-xl fade" id="modalLomba4" tabindex="-1"
                                        aria-labelledby="modalLomba1Label" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div
                                                    class="modal-header d-flex justify-content-between align-content-center mx-3">
                                                    <nav aria-label="breadcrumb" class="d-block m-0 mt-3">
                                                        <ol class="breadcrumb">
                                                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                                                            <li class="breadcrumb-item"><a href="#">Library</a></li>
                                                            <li class="breadcrumb-item active" aria-current="page"><a
                                                                    href=""> Data</a></li>
                                                        </ol>
                                                    </nav>

                                                    <button type="button" class="btn-close d-block"
                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="container-fluid">
                                                        <div class="row">
                                                            <div class="col-lg-6 text-white p-3">
                                                                <!-- Left side content goes here -->
                                                                <img src="{{ url('assets/images/lomba/inggris.png') }}"
                                                                    alt="" class="gambar-modal w-100" />
                                                            </div>
                                                            <div class="col-lg-6 bg-pink text-dark p-3 isi-modal">
                                                                <h1>Bahasa Inggris</h1>
                                                                <h2>Deskripsi :</h2>
                                                                <p>
                                                                    merupakan ajang yang dirancang untuk menguji dan
                                                                    mengembangkan keterampilan bahasa siswa dalam berbagai
                                                                    aspek, termasuk mendengarkan, membaca, dan menulis.
                                                                    Kegiatan ini bertujuan untuk mendorong siswa untuk
                                                                    berpikir kritis. Event ini tidak hanya menjadi ajang
                                                                    untuk menguji kemampuan dan kecerdasan peserta, tetapi
                                                                    juga sebagai platform untuk menggali potensi kreativitas
                                                                    siswa/i. Oleh karena itu tujuan diselenggarakan
                                                                    olimpiade B Inggris yang diadakan GALAXY 8.0 untuk
                                                                    menjaring siswa/I SMP/MTs Sederajat Yang mempunyai bakat
                                                                    dalam bidang studi B Inggris yang diharapkan dapat
                                                                    membangun semangat berkompetisi dikalangan siswa smp dan
                                                                    mts
                                                                </p>
                                                                <h2>Informasi :</h2>
                                                                <div
                                                                    class="d-flex justify-content-between pb-4 mb-3 border-bottom border-3 border-opacity-25 border-dark">
                                                                    <div class="d-flex align-content-center">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="45" height="45"
                                                                            viewBox="0 0 45 45" fill="none">
                                                                            <path
                                                                                d="M17.25 12H16.2003C14.7301 12 13.9945 12 13.433 12.2861C12.9391 12.5378 12.5378 12.9391 12.2861 13.433C12 13.9945 12 14.7301 12 16.2003V28.8003C12 30.2704 12 31.0051 12.2861 31.5666C12.5378 32.0605 12.9391 32.4625 13.433 32.7142C13.994 33 14.7287 33 16.1959 33H17.25M17.25 12H28.8003C30.2704 12 31.0044 12 31.566 12.2861C32.0599 12.5378 32.4625 12.9391 32.7142 13.433C33 13.994 33 14.7287 33 16.1959V28.8047C33 30.272 33 31.0056 32.7142 31.5666C32.4625 32.0605 32.0599 32.4625 31.566 32.7142C31.005 33 30.2713 33 28.8041 33H17.25M17.25 12V33M22.5 21.1875H27.75M22.5 17.25H27.75"
                                                                                stroke="#790C61" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                            <circle cx="22.5" cy="22.5" r="21.5"
                                                                                stroke="#780D60" stroke-width="2" />
                                                                        </svg>
                                                                        <h2
                                                                            class="m-0 mx-2 my-2 d-flex align-items-center">
                                                                            Guidebook</h2>
                                                                    </div>
                                                                    <div class="d-flex">
                                                                        <a style="text-decoration: none"
                                                                            href="https://intip.in/kebutuhanpesertaglx8"
                                                                            class="btn-purple px-2 px-lg-3 py-lg-2 py-1 tombol-modal my-auto">Download</a>
                                                                    </div>
                                                                </div>

                                                                <div
                                                                    class="d-flex justify-content-between align-content-center pb-4 mb-3 border-bottom border-3 border-opacity-25 border-dark">
                                                                    <div class="">
                                                                        <h2 class="m-0 my-1">HTM</h2>
                                                                        <h1>FREE</h1>
                                                                        @auth
                                                                            <h2>
                                                                                Sudah mengikuti
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="20" height="20"
                                                                                    viewBox="0 0 20 20" fill="none">
                                                                                    <path
                                                                                        d="M13 8L9 12L7 10M10 19C5.02944 19 1 14.9706 1 10C1 5.02944 5.02944 1 10 1C14.9706 1 19 5.02944 19 10C19 14.9706 14.9706 19 10 19Z"
                                                                                        stroke="#7A0D62" stroke-width="2"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                </svg>
                                                                            </h2>
                                                                        @endauth
                                                                    </div>

                                                                    <div class="my-auto">
                                                                        @auth
                                                                        @else
                                                                            <a style="text-decoration: none"
                                                                                href="{{ url('register') }}"
                                                                                class="btn-purple px-2 px-lg-3 py-lg-2 py-1 tombol-modal my-auto">Ikuti
                                                                                Lomba</a>
                                                                        @endauth
                                                                    </div>
                                                                </div>

                                                                @auth


                                                                    <h2>Pengerjaan :</h2>
                                                                    <p>
                                                                        nantinya link pengerjaan akan tampil di bawah ini
                                                                    </p>

                                                                    <style>
                                                                        .countdown {
                                                                            display: flex;
                                                                            justify-content: space-around;
                                                                            margin-top: 50px;
                                                                        }

                                                                        .countdown div {
                                                                            text-align: center;
                                                                        }
                                                                    </style>

                                                                    <div class="container mb-5">
                                                                        <div id="countdown" class="countdown">
                                                                            <div><span id="d2ays">00</span><br />Hari</div>
                                                                            <div><span id="h2ours">00</span><br />Jam</div>
                                                                            <div><span id="m2inutes">00</span><br />Menit
                                                                            </div>
                                                                            <div><span id="s2econds">00</span><br />Detik
                                                                            </div>
                                                                            <script>
                                                                                // Menentukan tanggal dan waktu target
                                                                                var targetDate = new Date("Jan 13, 2024 08:59:59").getTime();

                                                                                // Membuat fungsi yang akan dijalankan setiap detik
                                                                                var countdown = setInterval(function() {
                                                                                    // console.log("test('should first', () => { second })");
                                                                                    // Mendapatkan tanggal dan waktu saat ini
                                                                                    var currentDate = new Date().getTime();

                                                                                    // Menghitung selisih antara target dan saat ini dalam milidetik
                                                                                    var difference = targetDate - currentDate;

                                                                                    // Mengkonversi selisih dalam hari, jam, menit, dan detik
                                                                                    var days = Math.floor(difference / (1000 * 60 * 60 * 24));
                                                                                    var hours = Math.floor(
                                                                                        (difference % (1000 * 60 * 60 * 24)) /
                                                                                        (1000 * 60 * 60)
                                                                                    );
                                                                                    var minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
                                                                                    var seconds = Math.floor((difference % (1000 * 60)) / 1000);

                                                                                    document.getElementById("d2ays").innerHTML = days;
                                                                                    document.getElementById("h2ours").innerHTML = hours;
                                                                                    document.getElementById("m2inutes").innerHTML = minutes;
                                                                                    document.getElementById("s2econds").innerHTML = seconds;

                                                                                    // console.log(seconds);

                                                                                    // Menampilkan hasil dalam elemen HTML dengan id="countdown"
                                                                                    // document.getElementById("ountdown").innerHTML = days + " hari " + hours + " jam " +
                                                                                    //     minutes + " menit " + seconds + " detik ";

                                                                                    // Jika selisih kurang dari atau sama dengan nol, berhenti menghitung dan tampilkan pesan
                                                                                    if (difference <= 0) {
                                                                                        clearInterval(countdown);
                                                                                        document.getElementById("countdown").innerHTML = "Daftar";
                                                                                    }
                                                                                }, 1000);
                                                                            </script>

                                                                            <svg class="my-auto"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="49" height="49"
                                                                                viewBox="0 0 49 49" fill="none">
                                                                                <path
                                                                                    d="M24.4955 14.5V27H36.9929M47 8.42788L39.3411 2M9.6589 2L2 8.42788M24.4955 47C13.452 47 4.4995 38.0457 4.4995 27C4.4995 15.9543 13.452 7 24.4955 7C35.5389 7 44.4914 15.9543 44.4914 27C44.4914 38.0457 35.5389 47 24.4955 47Z"
                                                                                    stroke="#790C61" stroke-width="4"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </div>

                                                                        <br />
                                                                        {{-- <button
                                                                            class="btn-purple px-2 px-lg-3 py-lg-2 py-1 tombol-modal my-auto">Kumpulkan</button>
                                                                        <button
                                                                            class="btn-purple px-2 px-lg-3 py-lg-2 py-1 tombol-modal my-auto">Kumpulkan</button> --}}
                                                                    </div>
                                                                @endauth

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- PAI --}}
                <div class="col-lg-3 col-md-4 mt-3">
                    <div class="lomba-block">
                        <img class="mx-auto d-block py-3" src="{{ url('assets/images/lomba/pai.png') }}"
                            alt="" />
                        <div class="mx-4 mt-3">
                            <h1>PAI</h1>
                            <div class="d-flex justify-content-between mt-5 pb-3">
                                <h2 class="my-auto">Akademik</h2>
                                <div>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-light" data-bs-toggle="modal"
                                        data-bs-target="#modalLomba2">Detail</button>

                                    <!-- Modal -->
                                    <div class="modal modal-xl fade" id="modalLomba2" tabindex="-1"
                                        aria-labelledby="modalLomba1Label" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div
                                                    class="modal-header d-flex justify-content-between align-content-center mx-3">
                                                    <nav aria-label="breadcrumb" class="d-block m-0 mt-3">
                                                        <ol class="breadcrumb">
                                                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                                                            <li class="breadcrumb-item"><a href="#">Library</a></li>
                                                            <li class="breadcrumb-item active" aria-current="page"><a
                                                                    href=""> Data</a></li>
                                                        </ol>
                                                    </nav>

                                                    <button type="button" class="btn-close d-block"
                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="container-fluid">
                                                        <div class="row">
                                                            <div class="col-lg-6 text-white p-3">
                                                                <!-- Left side content goes here -->
                                                                <img src="{{ url('assets/images/lomba/pai.png') }}"
                                                                    alt="" class="gambar-modal w-100" />
                                                            </div>
                                                            <div class="col-lg-6 bg-pink text-dark p-3 isi-modal">
                                                                <h1>PAI</h1>
                                                                <h2>Deskripsi :</h2>
                                                                <p>
                                                                    Mata pelajaran Pendidikan Agama Islam (PAI) bertujuan
                                                                    untuk membentuk karakter dan akhlak siswa melalui
                                                                    pemahaman ajaran Islam yang komprehensif. PAI tidak
                                                                    hanya mengajarkan pengetahuan tentang agama, tetapi juga
                                                                    menanamkan nilai-nilai moral dan spiritual yang penting
                                                                    dalam kehidupan sehari-hari. Event ini tidak hanya
                                                                    menjadi ajang untuk menguji kemampuan dan kecerdasan
                                                                    peserta, tetapi juga sebagai platform untuk menggali
                                                                    potensi kreativitas siswa/i. Oleh karena itu tujuan
                                                                    diselenggarakan olimpiade PAI yang diadakan GALAXY 8.0
                                                                    untuk menjaring siswa/I SMP/MTs Sederajat Yang mempunyai
                                                                    bakat dalam bidang studi IPA yang diharapkan dapat
                                                                    membangun semangat berkompetisi dikalangan siswa smp dan
                                                                    mts
                                                                </p>
                                                                <h2>Informasi :</h2>
                                                                <div
                                                                    class="d-flex justify-content-between pb-4 mb-3 border-bottom border-3 border-opacity-25 border-dark">
                                                                    <div class="d-flex align-content-center">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="45" height="45"
                                                                            viewBox="0 0 45 45" fill="none">
                                                                            <path
                                                                                d="M17.25 12H16.2003C14.7301 12 13.9945 12 13.433 12.2861C12.9391 12.5378 12.5378 12.9391 12.2861 13.433C12 13.9945 12 14.7301 12 16.2003V28.8003C12 30.2704 12 31.0051 12.2861 31.5666C12.5378 32.0605 12.9391 32.4625 13.433 32.7142C13.994 33 14.7287 33 16.1959 33H17.25M17.25 12H28.8003C30.2704 12 31.0044 12 31.566 12.2861C32.0599 12.5378 32.4625 12.9391 32.7142 13.433C33 13.994 33 14.7287 33 16.1959V28.8047C33 30.272 33 31.0056 32.7142 31.5666C32.4625 32.0605 32.0599 32.4625 31.566 32.7142C31.005 33 30.2713 33 28.8041 33H17.25M17.25 12V33M22.5 21.1875H27.75M22.5 17.25H27.75"
                                                                                stroke="#790C61" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                            <circle cx="22.5" cy="22.5" r="21.5"
                                                                                stroke="#780D60" stroke-width="2" />
                                                                        </svg>
                                                                        <h2
                                                                            class="m-0 mx-2 my-2 d-flex align-items-center">
                                                                            Guidebook</h2>
                                                                    </div>
                                                                    <div class="d-flex">
                                                                        <a style="text-decoration: none"
                                                                            href="https://intip.in/kebutuhanpesertaglx8"
                                                                            class="btn-purple px-2 px-lg-3 py-lg-2 py-1 tombol-modal my-auto">Download</a>
                                                                    </div>
                                                                </div>

                                                                <div
                                                                    class="d-flex justify-content-between align-content-center pb-4 mb-3 border-bottom border-3 border-opacity-25 border-dark">
                                                                    <div class="">
                                                                        <h2 class="m-0 my-1">HTM</h2>
                                                                        <h1>FREE</h1>
                                                                        @auth
                                                                            <h2>
                                                                                Sudah mengikuti
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="20" height="20"
                                                                                    viewBox="0 0 20 20" fill="none">
                                                                                    <path
                                                                                        d="M13 8L9 12L7 10M10 19C5.02944 19 1 14.9706 1 10C1 5.02944 5.02944 1 10 1C14.9706 1 19 5.02944 19 10C19 14.9706 14.9706 19 10 19Z"
                                                                                        stroke="#7A0D62" stroke-width="2"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                </svg>
                                                                            </h2>
                                                                        @endauth
                                                                    </div>

                                                                    <div class="my-auto">
                                                                        @auth
                                                                        @else
                                                                            <a style="text-decoration: none"
                                                                                href="{{ url('register') }}"
                                                                                class="btn-purple px-2 px-lg-3 py-lg-2 py-1 tombol-modal my-auto">Ikuti
                                                                                Lomba</a>
                                                                        @endauth
                                                                    </div>
                                                                </div>

                                                                @auth


                                                                    <h2>Pengerjaan :</h2>
                                                                    <p>
                                                                        nantinya link pengerjaan akan tampil di bawah ini
                                                                    </p>

                                                                    <style>
                                                                        .countdown {
                                                                            display: flex;
                                                                            justify-content: space-around;
                                                                            margin-top: 50px;
                                                                        }

                                                                        .countdown div {
                                                                            text-align: center;
                                                                        }
                                                                    </style>

                                                                    <div class="container mb-5">
                                                                        <div class="countdown" class="countdown">
                                                                            <div><span class="d1ays">00</span><br />Hari</div>
                                                                            <div><span class="h1ours">00</span><br />Jam</div>
                                                                            <div><span class="m1inutes">00</span><br />Menit
                                                                            </div>
                                                                            <div><span class="s1econds">00</span><br />Detik
                                                                            </div>
                                                                            <script>
                                                                                // Menentukan tanggal dan waktu target
                                                                                var targetDate = new Date("Jan 13, 2024 08:59:59").getTime();

                                                                                // Membuat fungsi yang akan dijalankan setiap detik
                                                                                var countdown = setInterval(function() {
                                                                                    // console.log("test('should first', () => { second })");
                                                                                    // Mendapatkan tanggal dan waktu saat ini
                                                                                    var currentDate = new Date().getTime();

                                                                                    // Menghitung selisih antara target dan saat ini dalam milidetik
                                                                                    var difference = targetDate - currentDate;

                                                                                    // Mengkonversi selisih dalam hari, jam, menit, dan detik
                                                                                    var days = Math.floor(difference / (1000 * 60 * 60 * 24));
                                                                                    var hours = Math.floor(
                                                                                        (difference % (1000 * 60 * 60 * 24)) /
                                                                                        (1000 * 60 * 60)
                                                                                    );
                                                                                    var minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
                                                                                    var seconds = Math.floor((difference % (1000 * 60)) / 1000);

                                                                                    document.querySelector(".d1ays").innerHTML = days;
                                                                                    document.querySelector(".h1ours").innerHTML = hours;
                                                                                    document.querySelector(".m1inutes").innerHTML = minutes;
                                                                                    document.querySelector(".s1econds").innerHTML = seconds;

                                                                                    // console.log(seconds);

                                                                                    // Menampilkan hasil dalam elemen HTML dengan id="countdown"
                                                                                    // document.querySelector(".ountdown").innerHTML = days + " hari " + hours + " jam " +
                                                                                    //     minutes + " menit " + seconds + " detik ";

                                                                                    // Jika selisih kurang dari atau sama dengan nol, berhenti menghitung dan tampilkan pesan
                                                                                    if (difference <= 0) {
                                                                                        clearInterval(countdown);
                                                                                        document.querySelector(".countdown").innerHTML = "Daftar";
                                                                                    }
                                                                                }, 1000);
                                                                            </script>
                                                                            <svg class="my-auto"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="49" height="49"
                                                                                viewBox="0 0 49 49" fill="none">
                                                                                <path
                                                                                    d="M24.4955 14.5V27H36.9929M47 8.42788L39.3411 2M9.6589 2L2 8.42788M24.4955 47C13.452 47 4.4995 38.0457 4.4995 27C4.4995 15.9543 13.452 7 24.4955 7C35.5389 7 44.4914 15.9543 44.4914 27C44.4914 38.0457 35.5389 47 24.4955 47Z"
                                                                                    stroke="#790C61" stroke-width="4"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </div>



                                                                        <br />
                                                                        {{-- <button
                                                                            class="btn-purple px-2 px-lg-3 py-lg-2 py-1 tombol-modal my-auto">Kumpulkan</button>
                                                                        <button
                                                                            class="btn-purple px-2 px-lg-3 py-lg-2 py-1 tombol-modal my-auto">Kumpulkan</button> --}}
                                                                    </div>
                                                                @endauth

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Poster --}}
                <div class="col-lg-3 col-md-4 mt-3">
                    <div class="lomba-block">
                        <img class="mx-auto d-block py-3" src="{{ url('assets/images/lomba/poster.png') }}"
                            alt="" />
                        <div class="mx-4 mt-3">
                            <h1>Poster</h1>
                            <div class="d-flex justify-content-between mt-5 pb-3">
                                <h2 class="my-auto">Non-Akademik</h2>
                                <div>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-light" data-bs-toggle="modal"
                                        data-bs-target="#modalLomba5">Detail</button>

                                    <!-- Modal -->
                                    <div class="modal modal-xl fade" id="modalLomba5" tabindex="-1"
                                        aria-labelledby="modalLomba1Label" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div
                                                    class="modal-header d-flex justify-content-between align-content-center mx-3">
                                                    <nav aria-label="breadcrumb" class="d-block m-0 mt-3">
                                                        <ol class="breadcrumb">
                                                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                                                            <li class="breadcrumb-item"><a href="#">Library</a></li>
                                                            <li class="breadcrumb-item active" aria-current="page"><a
                                                                    href=""> Data</a></li>
                                                        </ol>
                                                    </nav>

                                                    <button type="button" class="btn-close d-block"
                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="container-fluid">
                                                        <div class="row">
                                                            <div class="col-lg-6 text-white p-3">
                                                                <!-- Left side content goes here -->
                                                                <img src="{{ url('assets/images/lomba/poster.png') }}"
                                                                    alt="" class="gambar-modal w-100" />
                                                            </div>
                                                            <div class="col-lg-6 bg-pink text-dark p-3 isi-modal">
                                                                <h1>Poster</h1>
                                                                <h2>Deskripsi :</h2>
                                                                <p>
                                                                    Poster adalah media visual yang dirancang untuk
                                                                    menyampaikan informasi, pesan, atau promosi dalam bentuk
                                                                    gambar dan teks. Biasanya, poster digunakan untuk
                                                                    menarik perhatian dan menyampaikan ide dengan cara yang
                                                                    cepat dan jelas. . Event ini tidak hanya menjadi ajang
                                                                    untuk menguji kemampuan dan kecerdasan peserta, tetapi
                                                                    juga sebagai platform untuk menggali potensi kreativitas
                                                                    siswa/i. Oleh karena itu tujuan diselenggarakan lomba
                                                                    fotografi yang diadakan GALAXY 8.0 untuk menjaring
                                                                    siswa/I SMP/MTs
                                                                </p>
                                                                <h2>Informasi :</h2>
                                                                <div
                                                                    class="d-flex justify-content-between pb-4 mb-3 border-bottom border-3 border-opacity-25 border-dark">
                                                                    <div class="d-flex align-content-center">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="45" height="45"
                                                                            viewBox="0 0 45 45" fill="none">
                                                                            <path
                                                                                d="M17.25 12H16.2003C14.7301 12 13.9945 12 13.433 12.2861C12.9391 12.5378 12.5378 12.9391 12.2861 13.433C12 13.9945 12 14.7301 12 16.2003V28.8003C12 30.2704 12 31.0051 12.2861 31.5666C12.5378 32.0605 12.9391 32.4625 13.433 32.7142C13.994 33 14.7287 33 16.1959 33H17.25M17.25 12H28.8003C30.2704 12 31.0044 12 31.566 12.2861C32.0599 12.5378 32.4625 12.9391 32.7142 13.433C33 13.994 33 14.7287 33 16.1959V28.8047C33 30.272 33 31.0056 32.7142 31.5666C32.4625 32.0605 32.0599 32.4625 31.566 32.7142C31.005 33 30.2713 33 28.8041 33H17.25M17.25 12V33M22.5 21.1875H27.75M22.5 17.25H27.75"
                                                                                stroke="#790C61" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                            <circle cx="22.5" cy="22.5" r="21.5"
                                                                                stroke="#780D60" stroke-width="2" />
                                                                        </svg>
                                                                        <h2
                                                                            class="m-0 mx-2 my-2 d-flex align-items-center">
                                                                            Guidebook</h2>
                                                                    </div>
                                                                    <div class="d-flex">
                                                                        <a style="text-decoration: none"
                                                                            href="https://intip.in/kebutuhanpesertaglx8"
                                                                            class="btn-purple px-2 px-lg-3 py-lg-2 py-1 tombol-modal my-auto">Download</a>
                                                                    </div>
                                                                </div>

                                                                <div
                                                                    class="d-flex justify-content-between align-content-center pb-4 mb-3 border-bottom border-3 border-opacity-25 border-dark">
                                                                    <div class="">
                                                                        <h2 class="m-0 my-1">HTM</h2>
                                                                        <h1>30K</h1>
                                                                        @auth
                                                                            <h2>
                                                                                Sudah mengikuti
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="20" height="20"
                                                                                    viewBox="0 0 20 20" fill="none">
                                                                                    <path
                                                                                        d="M13 8L9 12L7 10M10 19C5.02944 19 1 14.9706 1 10C1 5.02944 5.02944 1 10 1C14.9706 1 19 5.02944 19 10C19 14.9706 14.9706 19 10 19Z"
                                                                                        stroke="#7A0D62" stroke-width="2"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                </svg>
                                                                            </h2>
                                                                        @endauth
                                                                    </div>

                                                                    <div class="my-auto">
                                                                        @auth
                                                                        @else
                                                                            <a style="text-decoration: none"
                                                                                href="https://intip.in/pendaftaranmultimediaGALAXY7"
                                                                                class="btn-purple px-2 px-lg-3 py-lg-2 py-1 tombol-modal my-auto">Ikuti
                                                                                Lomba</a>
                                                                        @endauth
                                                                    </div>
                                                                </div>

                                                                @auth


                                                                    <h2>Pengerjaan :</h2>
                                                                    <p>

                                                                    </p>

                                                                    <style>
                                                                        .countdown {
                                                                            display: flex;
                                                                            justify-content: space-around;
                                                                            margin-top: 50px;
                                                                        }

                                                                        .countdown div {
                                                                            text-align: center;
                                                                        }
                                                                    </style>

                                                                    <div class="container mb-5">
                                                                        {{-- <div id="countdown" class="countdown">
                                                                            <div><span id="days">15</span><br />Hari</div>
                                                                            <div><span id="hours">15</span><br />Jam</div>
                                                                            <div><span id="minutes">15</span><br />Menit
                                                                            </div>
                                                                            <div><span id="seconds">15</span><br />Detik
                                                                            </div>
                                                                            <svg class="my-auto"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="49" height="49"
                                                                                viewBox="0 0 49 49" fill="none">
                                                                                <path
                                                                                    d="M24.4955 14.5V27H36.9929M47 8.42788L39.3411 2M9.6589 2L2 8.42788M24.4955 47C13.452 47 4.4995 38.0457 4.4995 27C4.4995 15.9543 13.452 7 24.4955 7C35.5389 7 44.4914 15.9543 44.4914 27C44.4914 38.0457 35.5389 47 24.4955 47Z"
                                                                                    stroke="#790C61" stroke-width="4"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </div> --}}

                                                                        <br />
                                                                        {{-- <button
                                                                            class="btn-purple px-2 px-lg-3 py-lg-2 py-1 tombol-modal my-auto">Kumpulkan</button> --}}
                                                                        <a href="https://intip.in/pengumpulanmultimediagalaxy8/"
                                                                            class="btn-purple px-2 px-lg-3 py-lg-2 py-1 tombol-modal my-auto">Kumpulkan</a>
                                                                    </div>

                                                                @endauth

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Fotografi --}}
                <div class="col-lg-3 col-md-4 mt-3">
                    <div class="lomba-block">
                        <img class="mx-auto d-block py-3" src="{{ url('assets/images/lomba/fotografi.png') }}"
                            alt="" />
                        <div class="mx-4 mt-3">
                            <h1>Fotografi</h1>
                            <div class="d-flex justify-content-between mt-5 pb-3">
                                <h2 class="my-auto">Non-Akademik</h2>
                                <div>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-light" data-bs-toggle="modal"
                                        data-bs-target="#modalLomba6">Detail</button>

                                    <!-- Modal -->
                                    <div class="modal modal-xl fade" id="modalLomba6" tabindex="-1"
                                        aria-labelledby="modalLomba1Label" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div
                                                    class="modal-header d-flex justify-content-between align-content-center mx-3">
                                                    <nav aria-label="breadcrumb" class="d-block m-0 mt-3">
                                                        <ol class="breadcrumb">
                                                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                                                            <li class="breadcrumb-item"><a href="#">Library</a></li>
                                                            <li class="breadcrumb-item active" aria-current="page"><a
                                                                    href=""> Data</a></li>
                                                        </ol>
                                                    </nav>

                                                    <button type="button" class="btn-close d-block"
                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="container-fluid">
                                                        <div class="row">
                                                            <div class="col-lg-6 text-white p-3">
                                                                <!-- Left side content goes here -->
                                                                <img src="{{ url('assets/images/lomba/fotografi.png') }}"
                                                                    alt="" class="gambar-modal w-100" />
                                                            </div>
                                                            <div class="col-lg-6 bg-pink text-dark p-3 isi-modal">
                                                                <h1>Fotografi</h1>
                                                                <h2>Deskripsi :</h2>
                                                                <p>
                                                                    Fotografi adalah seni dan teknik pengambilan gambar
                                                                    menggunakan kamera. Secara umum, fotografi melibatkan
                                                                    proses menangkap cahaya untuk menciptakan gambar yang
                                                                    dapat menyampaikan informasi, cerita, atau emosi. Event
                                                                    ini tidak hanya menjadi ajang untuk menguji kemampuan
                                                                    dan kecerdasan peserta, tetapi juga sebagai platform
                                                                    untuk menggali potensi kreativitas siswa/i. Oleh karena
                                                                    itu tujuan diselenggarakan lomba fotografi yang diadakan
                                                                    GALAXY 8.0 untuk menjaring siswa/I SMP/MTs
                                                                </p>
                                                                <h2>Informasi :</h2>
                                                                <div
                                                                    class="d-flex justify-content-between pb-4 mb-3 border-bottom border-3 border-opacity-25 border-dark">
                                                                    <div class="d-flex align-content-center">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="45" height="45"
                                                                            viewBox="0 0 45 45" fill="none">
                                                                            <path
                                                                                d="M17.25 12H16.2003C14.7301 12 13.9945 12 13.433 12.2861C12.9391 12.5378 12.5378 12.9391 12.2861 13.433C12 13.9945 12 14.7301 12 16.2003V28.8003C12 30.2704 12 31.0051 12.2861 31.5666C12.5378 32.0605 12.9391 32.4625 13.433 32.7142C13.994 33 14.7287 33 16.1959 33H17.25M17.25 12H28.8003C30.2704 12 31.0044 12 31.566 12.2861C32.0599 12.5378 32.4625 12.9391 32.7142 13.433C33 13.994 33 14.7287 33 16.1959V28.8047C33 30.272 33 31.0056 32.7142 31.5666C32.4625 32.0605 32.0599 32.4625 31.566 32.7142C31.005 33 30.2713 33 28.8041 33H17.25M17.25 12V33M22.5 21.1875H27.75M22.5 17.25H27.75"
                                                                                stroke="#790C61" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                            <circle cx="22.5" cy="22.5" r="21.5"
                                                                                stroke="#780D60" stroke-width="2" />
                                                                        </svg>
                                                                        <h2
                                                                            class="m-0 mx-2 my-2 d-flex align-items-center">
                                                                            Guidebook</h2>
                                                                    </div>
                                                                    <div class="d-flex">
                                                                        <a style="text-decoration: none"
                                                                            href="https://intip.in/kebutuhanpesertaglx8"
                                                                            class="btn-purple px-2 px-lg-3 py-lg-2 py-1 tombol-modal my-auto">Download</a>
                                                                    </div>
                                                                </div>

                                                                <div
                                                                    class="d-flex justify-content-between align-content-center pb-4 mb-3 border-bottom border-3 border-opacity-25 border-dark">
                                                                    <div class="">
                                                                        <h2 class="m-0 my-1">HTM</h2>
                                                                        <h1>30K</h1>
                                                                        @auth
                                                                            <h2>
                                                                                Sudah mengikuti
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="20" height="20"
                                                                                    viewBox="0 0 20 20" fill="none">
                                                                                    <path
                                                                                        d="M13 8L9 12L7 10M10 19C5.02944 19 1 14.9706 1 10C1 5.02944 5.02944 1 10 1C14.9706 1 19 5.02944 19 10C19 14.9706 14.9706 19 10 19Z"
                                                                                        stroke="#7A0D62" stroke-width="2"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                </svg>
                                                                            </h2>
                                                                        @endauth
                                                                    </div>

                                                                    <div class="my-auto">
                                                                        @auth
                                                                        @else
                                                                            <a style="text-decoration: none"
                                                                                href="https://intip.in/pendaftaranmultimediaGALAXY7"
                                                                                class="btn-purple px-2 px-lg-3 py-lg-2 py-1 tombol-modal my-auto">Ikuti
                                                                                Lomba</a>
                                                                        @endauth
                                                                    </div>
                                                                </div>

                                                                @auth


                                                                    <h2>Pengerjaan :</h2>
                                                                    <p>

                                                                    </p>

                                                                    <style>
                                                                        .countdown {
                                                                            display: flex;
                                                                            justify-content: space-around;
                                                                            margin-top: 50px;
                                                                        }

                                                                        .countdown div {
                                                                            text-align: center;
                                                                        }
                                                                    </style>

                                                                    <div class="container mb-5">
                                                                        {{-- <div id="countdown" class="countdown">
                                                                            <div><span id="days">15</span><br />Hari</div>
                                                                            <div><span id="hours">15</span><br />Jam</div>
                                                                            <div><span id="minutes">15</span><br />Menit
                                                                            </div>
                                                                            <div><span id="seconds">15</span><br />Detik
                                                                            </div>
                                                                            <svg class="my-auto"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="49" height="49"
                                                                                viewBox="0 0 49 49" fill="none">
                                                                                <path
                                                                                    d="M24.4955 14.5V27H36.9929M47 8.42788L39.3411 2M9.6589 2L2 8.42788M24.4955 47C13.452 47 4.4995 38.0457 4.4995 27C4.4995 15.9543 13.452 7 24.4955 7C35.5389 7 44.4914 15.9543 44.4914 27C44.4914 38.0457 35.5389 47 24.4955 47Z"
                                                                                    stroke="#790C61" stroke-width="4"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </div> --}}

                                                                        <br />
                                                                        {{-- <button
                                                                            class="btn-purple px-2 px-lg-3 py-lg-2 py-1 tombol-modal my-auto">Kumpulkan</button> --}}
                                                                        <a href="https://intip.in/pengumpulanmultimediagalaxy8/"
                                                                            class="btn-purple px-2 px-lg-3 py-lg-2 py-1 tombol-modal my-auto">Kumpulkan</a>
                                                                    </div>

                                                                @endauth

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Video sains --}}
                <div class="col-lg-3 col-md-4 mt-3">
                    <div class="lomba-block">
                        <img class="mx-auto d-block py-3" src="{{ url('assets/images/lomba/vidio sains.webp') }}"
                            alt="" />
                        <div class="mx-4 mt-3">
                            <h1>Video Sains</h1>
                            <div class="d-flex justify-content-between mt-5 pb-3">
                                <h2 class="my-auto">Non-Akademik</h2>
                                <div>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-light" data-bs-toggle="modal"
                                        data-bs-target="#modalLomba7">Detail</button>

                                    <!-- Modal -->
                                    <div class="modal modal-xl fade" id="modalLomba7" tabindex="-1"
                                        aria-labelledby="modalLomba1Label" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div
                                                    class="modal-header d-flex justify-content-between align-content-center mx-3">
                                                    <nav aria-label="breadcrumb" class="d-block m-0 mt-3">
                                                        <ol class="breadcrumb">
                                                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                                                            <li class="breadcrumb-item"><a href="#">Library</a></li>
                                                            <li class="breadcrumb-item active" aria-current="page"><a
                                                                    href=""> Data</a></li>
                                                        </ol>
                                                    </nav>

                                                    <button type="button" class="btn-close d-block"
                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="container-fluid">
                                                        <div class="row">
                                                            <div class="col-lg-6 text-white p-3">
                                                                <!-- Left side content goes here -->
                                                                <img src="{{ url('assets/images/lomba/pidato.png') }}"
                                                                    alt="" class="gambar-modal w-100" />
                                                            </div>
                                                            <div class="col-lg-6 bg-pink text-dark p-3 isi-modal">
                                                                <h1>Video Sains</h1>
                                                                <h2>Deskripsi :</h2>
                                                                <p>Video sains adalah konten visual yang mengedukasi
                                                                    penonton tentang konsep-konsep ilmiah. Biasanya mencakup
                                                                    eksperimen, animasi, dan penjelasan naratif yang membuat
                                                                    topik seperti fisika, kimia, atau biologi lebih mudah
                                                                    dipahami. Event ini tidak hanya menjadi ajang untuk
                                                                    menguji kemampuan dan kecerdasan peserta, tetapi juga
                                                                    sebagai platform untuk menggali potensi kreativitas
                                                                    siswa/i. Oleh karena itu tujuan diselenggarakan lomba
                                                                    fotografi yang diadakan GALAXY 8.0 untuk menjaring
                                                                    siswa/I SMP/MTs
                                                                </p>
                                                                <h2>Informasi :</h2>
                                                                <div
                                                                    class="d-flex justify-content-between pb-4 mb-3 border-bottom border-3 border-opacity-25 border-dark">
                                                                    <div class="d-flex align-content-center">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="45" height="45"
                                                                            viewBox="0 0 45 45" fill="none">
                                                                            <path
                                                                                d="M17.25 12H16.2003C14.7301 12 13.9945 12 13.433 12.2861C12.9391 12.5378 12.5378 12.9391 12.2861 13.433C12 13.9945 12 14.7301 12 16.2003V28.8003C12 30.2704 12 31.0051 12.2861 31.5666C12.5378 32.0605 12.9391 32.4625 13.433 32.7142C13.994 33 14.7287 33 16.1959 33H17.25M17.25 12H28.8003C30.2704 12 31.0044 12 31.566 12.2861C32.0599 12.5378 32.4625 12.9391 32.7142 13.433C33 13.994 33 14.7287 33 16.1959V28.8047C33 30.272 33 31.0056 32.7142 31.5666C32.4625 32.0605 32.0599 32.4625 31.566 32.7142C31.005 33 30.2713 33 28.8041 33H17.25M17.25 12V33M22.5 21.1875H27.75M22.5 17.25H27.75"
                                                                                stroke="#790C61" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                            <circle cx="22.5" cy="22.5" r="21.5"
                                                                                stroke="#780D60" stroke-width="2" />
                                                                        </svg>
                                                                        <h2
                                                                            class="m-0 mx-2 my-2 d-flex align-items-center">
                                                                            Guidebook</h2>
                                                                    </div>
                                                                    <div class="d-flex">
                                                                        <a style="text-decoration: none"
                                                                            href="https://intip.in/kebutuhanpesertaglx8"
                                                                            class="btn-purple px-2 px-lg-3 py-lg-2 py-1 tombol-modal my-auto">Download</a>
                                                                    </div>
                                                                </div>

                                                                <div
                                                                    class="d-flex justify-content-between align-content-center pb-4 mb-3 border-bottom border-3 border-opacity-25 border-dark">
                                                                    <div class="">
                                                                        <h2 class="m-0 my-1">HTM</h2>
                                                                        <h1>30K</h1>
                                                                        @auth
                                                                            <h2>
                                                                                Sudah mengikuti
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="20" height="20"
                                                                                    viewBox="0 0 20 20" fill="none">
                                                                                    <path
                                                                                        d="M13 8L9 12L7 10M10 19C5.02944 19 1 14.9706 1 10C1 5.02944 5.02944 1 10 1C14.9706 1 19 5.02944 19 10C19 14.9706 14.9706 19 10 19Z"
                                                                                        stroke="#7A0D62" stroke-width="2"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                </svg>
                                                                            </h2>
                                                                        @endauth
                                                                    </div>

                                                                    <div class="my-auto">
                                                                        @auth
                                                                        @else
                                                                            <a style="text-decoration: none"
                                                                                href="https://intip.in/pendaftaranmultimediaGALAXY7"
                                                                                class="btn-purple px-2 px-lg-3 py-lg-2 py-1 tombol-modal my-auto">Ikuti
                                                                                Lomba</a>
                                                                        @endauth
                                                                    </div>
                                                                </div>

                                                                @auth


                                                                    <h2>Pengerjaan :</h2>
                                                                    <p>

                                                                    </p>

                                                                    <style>
                                                                        .countdown {
                                                                            display: flex;
                                                                            justify-content: space-around;
                                                                            margin-top: 50px;
                                                                        }

                                                                        .countdown div {
                                                                            text-align: center;
                                                                        }
                                                                    </style>

                                                                    <div class="container mb-5">
                                                                        {{-- <div id="countdown" class="countdown">
                                                                            <div><span id="days">15</span><br />Hari</div>
                                                                            <div><span id="hours">15</span><br />Jam</div>
                                                                            <div><span id="minutes">15</span><br />Menit
                                                                            </div>
                                                                            <div><span id="seconds">15</span><br />Detik
                                                                            </div>
                                                                            <svg class="my-auto"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="49" height="49"
                                                                                viewBox="0 0 49 49" fill="none">
                                                                                <path
                                                                                    d="M24.4955 14.5V27H36.9929M47 8.42788L39.3411 2M9.6589 2L2 8.42788M24.4955 47C13.452 47 4.4995 38.0457 4.4995 27C4.4995 15.9543 13.452 7 24.4955 7C35.5389 7 44.4914 15.9543 44.4914 27C44.4914 38.0457 35.5389 47 24.4955 47Z"
                                                                                    stroke="#790C61" stroke-width="4"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </div> --}}

                                                                        <br />
                                                                        {{-- <button
                                                                            class="btn-purple px-2 px-lg-3 py-lg-2 py-1 tombol-modal my-auto">Kumpulkan</button> --}}
                                                                        <a href="https://intip.in/pengumpulanmultimediagalaxy8/"
                                                                            class="btn-purple px-2 px-lg-3 py-lg-2 py-1 tombol-modal my-auto">Kumpulkan</a>
                                                                    </div>

                                                                @endauth

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Banjari --}}
                <div class="col-lg-3 col-md-4 mt-3">
                    <div class="lomba-block">
                        <img class="mx-auto d-block py-3" src="{{ url('assets/images/lomba/banjari.png') }}"
                            alt="" />
                        <div class="mx-4 mt-3">
                            <h1>Banjari</h1>
                            <div class="d-flex justify-content-between mt-5 pb-3">
                                <h2 class="my-auto">Non-Akademik</h2>
                                <div>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-light" data-bs-toggle="modal"
                                        data-bs-target="#banjari">Detail</button>

                                    <!-- Modal -->
                                    <div class="modal modal-xl fade" id="banjari" tabindex="-1"
                                        aria-labelledby="modalLomba1Label" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div
                                                    class="modal-header d-flex justify-content-between align-content-center mx-3">
                                                    <nav aria-label="breadcrumb" class="d-block m-0 mt-3">
                                                        <ol class="breadcrumb">
                                                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                                                            <li class="breadcrumb-item"><a href="#">Library</a></li>
                                                            <li class="breadcrumb-item active" aria-current="page"><a
                                                                    href=""> Data</a></li>
                                                        </ol>
                                                    </nav>

                                                    <button type="button" class="btn-close d-block"
                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="container-fluid">
                                                        <div class="row">
                                                            <div class="col-lg-6 text-white p-3">
                                                                <!-- Left side content goes here -->
                                                                <img src="{{ url('assets/images/lomba/banjari.png') }}"
                                                                    alt="" class="gambar-modal w-100" />
                                                            </div>
                                                            <div class="col-lg-6 bg-pink text-dark p-3 isi-modal">
                                                                <h1>Banjari</h1>
                                                                <h2>Deskripsi :</h2>
                                                                <p>Banjari adalah sebuah tradisi musik yang sering ditemui
                                                                    dalam budaya Islam, khususnya di Indonesia, yang
                                                                    digunakan dalam berbagai acara keagamaan dan perayaan
                                                                    Islam. Musik banjari ini biasanya dimainkan dengan
                                                                    instrumen tradisional seperti rebana, tambur, dan
                                                                    kadang-kadang juga drum, yang menghasilkan irama khas
                                                                    yang menyatu dengan lirik lagu-lagu yang memuji Nabi
                                                                    Muhammad SAW atau berisi doa dan pujian kepada Allah.
                                                                    Selain itu, banjari Islam juga menjadi sarana untuk
                                                                    mempererat tali persaudaraan di kalangan umat Muslim,
                                                                    karena sering dimainkan dalam kebersamaan dan kekompakan
                                                                    antarjamaah. Event ini tidak hanya menjadi ajang untuk
                                                                    menguji kemampuan, tetapi juga sebagai platform untuk
                                                                    menggali potensi kreativitas siswa/i. Oleh karena itu
                                                                    tujuan diselenggarakan lomba Banjari yang diadakan
                                                                    GALAXY 8.0 untuk menjaring siswa/I SMP/MTs sedaraja
                                                                </p>
                                                                <h2>Informasi :</h2>
                                                                <div
                                                                    class="d-flex justify-content-between pb-4 mb-3 border-bottom border-3 border-opacity-25 border-dark">
                                                                    <div class="d-flex align-content-center">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="45" height="45"
                                                                            viewBox="0 0 45 45" fill="none">
                                                                            <path
                                                                                d="M17.25 12H16.2003C14.7301 12 13.9945 12 13.433 12.2861C12.9391 12.5378 12.5378 12.9391 12.2861 13.433C12 13.9945 12 14.7301 12 16.2003V28.8003C12 30.2704 12 31.0051 12.2861 31.5666C12.5378 32.0605 12.9391 32.4625 13.433 32.7142C13.994 33 14.7287 33 16.1959 33H17.25M17.25 12H28.8003C30.2704 12 31.0044 12 31.566 12.2861C32.0599 12.5378 32.4625 12.9391 32.7142 13.433C33 13.994 33 14.7287 33 16.1959V28.8047C33 30.272 33 31.0056 32.7142 31.5666C32.4625 32.0605 32.0599 32.4625 31.566 32.7142C31.005 33 30.2713 33 28.8041 33H17.25M17.25 12V33M22.5 21.1875H27.75M22.5 17.25H27.75"
                                                                                stroke="#790C61" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                            <circle cx="22.5" cy="22.5" r="21.5"
                                                                                stroke="#780D60" stroke-width="2" />
                                                                        </svg>
                                                                        <h2
                                                                            class="m-0 mx-2 my-2 d-flex align-items-center">
                                                                            Guidebook</h2>
                                                                    </div>
                                                                    <div class="d-flex">
                                                                        <a style="text-decoration: none"
                                                                            href="https://intip.in/kebutuhanpesertaglx8"
                                                                            class="btn-purple px-2 px-lg-3 py-lg-2 py-1 tombol-modal my-auto">Download</a>
                                                                    </div>
                                                                </div>

                                                                <div
                                                                    class="d-flex justify-content-between align-content-center pb-4 mb-3 border-bottom border-3 border-opacity-25 border-dark">
                                                                    <div class="">
                                                                        <h2 class="m-0 my-1">HTM</h2>
                                                                        <h1>100K</h1>
                                                                        @auth
                                                                            <h2>
                                                                                Sudah mengikuti
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="20" height="20"
                                                                                    viewBox="0 0 20 20" fill="none">
                                                                                    <path
                                                                                        d="M13 8L9 12L7 10M10 19C5.02944 19 1 14.9706 1 10C1 5.02944 5.02944 1 10 1C14.9706 1 19 5.02944 19 10C19 14.9706 14.9706 19 10 19Z"
                                                                                        stroke="#7A0D62" stroke-width="2"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                </svg>
                                                                            </h2>
                                                                        @endauth
                                                                    </div>

                                                                    <div class="my-auto">
                                                                        @auth
                                                                        @else
                                                                            <a style="text-decoration: none"
                                                                                href="https://intip.in/daftarbanjarigalaxy"
                                                                                class="btn-purple px-2 px-lg-3 py-lg-2 py-1 tombol-modal my-auto">Ikuti
                                                                                Lomba</a>
                                                                        @endauth
                                                                    </div>
                                                                </div>

                                                                @auth


                                                                    <h2>Pengerjaan :</h2>
                                                                    <p>

                                                                    </p>

                                                                    <style>
                                                                        .countdown {
                                                                            display: flex;
                                                                            justify-content: space-around;
                                                                            margin-top: 50px;
                                                                        }

                                                                        .countdown div {
                                                                            text-align: center;
                                                                        }
                                                                    </style>

                                                                    <div class="container mb-5">
                                                                        {{-- <div id="countdown" class="countdown">
                                                                            <div><span id="days">15</span><br />Hari</div>
                                                                            <div><span id="hours">15</span><br />Jam</div>
                                                                            <div><span id="minutes">15</span><br />Menit
                                                                            </div>
                                                                            <div><span id="seconds">15</span><br />Detik
                                                                            </div>
                                                                            <svg class="my-auto"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="49" height="49"
                                                                                viewBox="0 0 49 49" fill="none">
                                                                                <path
                                                                                    d="M24.4955 14.5V27H36.9929M47 8.42788L39.3411 2M9.6589 2L2 8.42788M24.4955 47C13.452 47 4.4995 38.0457 4.4995 27C4.4995 15.9543 13.452 7 24.4955 7C35.5389 7 44.4914 15.9543 44.4914 27C44.4914 38.0457 35.5389 47 24.4955 47Z"
                                                                                    stroke="#790C61" stroke-width="4"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </div> --}}

                                                                        <br />
                                                                        {{-- <button
                                                                            class="btn-purple px-2 px-lg-3 py-lg-2 py-1 tombol-modal my-auto">Kumpulkan</button> --}}
                                                                        <a href="https://intip.in/pengumpulanmultimediagalaxy8/"
                                                                            class="btn-purple px-2 px-lg-3 py-lg-2 py-1 tombol-modal my-auto">Kumpulkan</a>
                                                                    </div>

                                                                @endauth

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- MTQ --}}
                <div class="col-lg-3 col-md-4 mt-3">
                    <div class="lomba-block">
                        <img class="mx-auto d-block py-3" src="{{ url('assets/images/lomba/qiroah.png') }}"
                            alt="" />
                        <div class="mx-4 mt-3">
                            <h1>MTQ</h1>
                            <div class="d-flex justify-content-between mt-5 pb-3">
                                <h2 class="my-auto">Non-Akademik</h2>
                                <div>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-light" data-bs-toggle="modal"
                                        data-bs-target="#MTQ">Detail</button>

                                    <!-- Modal -->
                                    <div class="modal modal-xl fade" id="MTQ" tabindex="-1"
                                        aria-labelledby="modalLomba1Label" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div
                                                    class="modal-header d-flex justify-content-between align-content-center mx-3">
                                                    <nav aria-label="breadcrumb" class="d-block m-0 mt-3">
                                                        <ol class="breadcrumb">
                                                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                                                            <li class="breadcrumb-item"><a href="#">Library</a></li>
                                                            <li class="breadcrumb-item active" aria-current="page"><a
                                                                    href=""> Data</a></li>
                                                        </ol>
                                                    </nav>

                                                    <button type="button" class="btn-close d-block"
                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="container-fluid">
                                                        <div class="row">
                                                            <div class="col-lg-6 text-white p-3">
                                                                <!-- Left side content goes here -->
                                                                <img src="{{ url('assets/images/lomba/qiroah.png') }}"
                                                                    alt="" class="gambar-modal w-100" />
                                                            </div>
                                                            <div class="col-lg-6 bg-pink text-dark p-3 isi-modal">
                                                                <h1>MTQ</h1>
                                                                <h2>Deskripsi :</h2>
                                                                <p>Musabaqah Tilawatil Quran (MTQ) adalah jenis musabaqah
                                                                    membaca Al-Quran dengan bacaan mujawwad, yaitu bacaan
                                                                    Al-Quran yang mengandung nilai ilmu baca (tajwid), seni
                                                                    (lagu dan suara), dan etika (adab) membaca sesuai dengan
                                                                    pedoman yang berlaku.
                                                                </p>
                                                                <h2>Informasi :</h2>
                                                                <div
                                                                    class="d-flex justify-content-between pb-4 mb-3 border-bottom border-3 border-opacity-25 border-dark">
                                                                    <div class="d-flex align-content-center">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="45" height="45"
                                                                            viewBox="0 0 45 45" fill="none">
                                                                            <path
                                                                                d="M17.25 12H16.2003C14.7301 12 13.9945 12 13.433 12.2861C12.9391 12.5378 12.5378 12.9391 12.2861 13.433C12 13.9945 12 14.7301 12 16.2003V28.8003C12 30.2704 12 31.0051 12.2861 31.5666C12.5378 32.0605 12.9391 32.4625 13.433 32.7142C13.994 33 14.7287 33 16.1959 33H17.25M17.25 12H28.8003C30.2704 12 31.0044 12 31.566 12.2861C32.0599 12.5378 32.4625 12.9391 32.7142 13.433C33 13.994 33 14.7287 33 16.1959V28.8047C33 30.272 33 31.0056 32.7142 31.5666C32.4625 32.0605 32.0599 32.4625 31.566 32.7142C31.005 33 30.2713 33 28.8041 33H17.25M17.25 12V33M22.5 21.1875H27.75M22.5 17.25H27.75"
                                                                                stroke="#790C61" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                            <circle cx="22.5" cy="22.5"
                                                                                r="21.5" stroke="#780D60"
                                                                                stroke-width="2" />
                                                                        </svg>
                                                                        <h2
                                                                            class="m-0 mx-2 my-2 d-flex align-items-center">
                                                                            Guidebook</h2>
                                                                    </div>
                                                                    <div class="d-flex">
                                                                        <a style="text-decoration: none"
                                                                            href="https://intip.in/kebutuhanpesertaglx8"
                                                                            class="btn-purple px-2 px-lg-3 py-lg-2 py-1 tombol-modal my-auto">Download</a>
                                                                    </div>
                                                                </div>

                                                                <div
                                                                    class="d-flex justify-content-between align-content-center pb-4 mb-3 border-bottom border-3 border-opacity-25 border-dark">
                                                                    <div class="">
                                                                        <h2 class="m-0 my-1">HTM</h2>
                                                                        <h1>60K</h1>
                                                                        @auth
                                                                            <h2>
                                                                                Sudah mengikuti
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="20" height="20"
                                                                                    viewBox="0 0 20 20" fill="none">
                                                                                    <path
                                                                                        d="M13 8L9 12L7 10M10 19C5.02944 19 1 14.9706 1 10C1 5.02944 5.02944 1 10 1C14.9706 1 19 5.02944 19 10C19 14.9706 14.9706 19 10 19Z"
                                                                                        stroke="#7A0D62" stroke-width="2"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                </svg>
                                                                            </h2>
                                                                        @endauth
                                                                    </div>

                                                                    <div class="my-auto">
                                                                        @auth
                                                                        @else
                                                                            <a style="text-decoration: none"
                                                                                href="https://intip.in/daftarMTQgalaxy"
                                                                                class="btn-purple px-2 px-lg-3 py-lg-2 py-1 tombol-modal my-auto">Ikuti
                                                                                Lomba</a>
                                                                        @endauth
                                                                    </div>
                                                                </div>

                                                                @auth


                                                                    <h2>Pengerjaan :</h2>
                                                                    <p>

                                                                    </p>

                                                                    <style>
                                                                        .countdown {
                                                                            display: flex;
                                                                            justify-content: space-around;
                                                                            margin-top: 50px;
                                                                        }

                                                                        .countdown div {
                                                                            text-align: center;
                                                                        }
                                                                    </style>

                                                                    <div class="container mb-5">
                                                                        {{-- <div id="countdown" class="countdown">
                                                                            <div><span id="days">15</span><br />Hari</div>
                                                                            <div><span id="hours">15</span><br />Jam</div>
                                                                            <div><span id="minutes">15</span><br />Menit
                                                                            </div>
                                                                            <div><span id="seconds">15</span><br />Detik
                                                                            </div>
                                                                            <svg class="my-auto"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="49" height="49"
                                                                                viewBox="0 0 49 49" fill="none">
                                                                                <path
                                                                                    d="M24.4955 14.5V27H36.9929M47 8.42788L39.3411 2M9.6589 2L2 8.42788M24.4955 47C13.452 47 4.4995 38.0457 4.4995 27C4.4995 15.9543 13.452 7 24.4955 7C35.5389 7 44.4914 15.9543 44.4914 27C44.4914 38.0457 35.5389 47 24.4955 47Z"
                                                                                    stroke="#790C61" stroke-width="4"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </div> --}}

                                                                        <br />
                                                                        {{-- <button
                                                                            class="btn-purple px-2 px-lg-3 py-lg-2 py-1 tombol-modal my-auto">Kumpulkan</button> --}}
                                                                        <a href="https://intip.in/pengumpulanmultimediagalaxy8/"
                                                                            class="btn-purple px-2 px-lg-3 py-lg-2 py-1 tombol-modal my-auto">Kumpulkan</a>
                                                                    </div>

                                                                @endauth

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>

    <!-- cta -->
    <section id="totalh">
        <div class="container my-5">
            <div class="bg-totalh py-5">
                <div class="row">
                    <div class="col-lg-6 justify-content-center d-flex order-2 order-lg-1 mt-3 mt-lg-0">
                        <div class="inner-totalh">
                            <h1>Total hadiah <br /></h1>
                            <h2>hingga</h2>
                            <div class="hadiah text-center mt-4">22 Juta</div>
                        </div>
                    </div>
                    <div class="col-lg-6 justify-content-center d-flex order-1 order-lg-2"><img
                            src="{{ url('assets/images/img/piala.png') }}" alt="" class="piala" /></div>
                </div>
            </div>
        </div>
    </section>

    <section id="faq">
        <div class="container my-5">
            <div class="faq-judul text-center">
                <h2>Show your skill to the world</h2>
                <h1>Frequently Asked Question</h1>
                <p>Semoga pertanyaanmu terjawab disini ya</p>
            </div>
            <div class="row mt-4 justify-content-center d-flex">
                <div class="col-lg-11">
                    <div class="tab mt-4">
                        <input id="tab-1" type="checkbox" />
                        <label class="bg-faq1 judul-table px-3 py-4" for="tab-1">
                            <p class="m-0">BAGAIMANA CARA MENGUPLOAD HASIL KARYA?</p>
                        </label>

                        <div class="bg-faq1 content p-3">
                            <p>
                                hasil karya kamu dapat kamu upload melalui link berikut
                                ini <a
                                    href="intip.in/pengumpulanmultimediagalaxy8">intip.in/pengumpulanmultimediagalaxy8</a>
                                Pastikan kamu mengupload hasil karya pada waktu yang telah ditentukan dan pastikan juga
                                mengisi
                                formular pengumpulan dengan baik dan benar
                            </p>
                        </div>
                    </div>
                    <div class="tab mt-4">
                        <input id="tab-2" type="checkbox" />
                        <label class="bg-faq1 judul-table px-3 py-4" for="tab-2">
                            <p class="m-0">BAGAIMANA CARA KONFIRMASI BUKTI PEMBAYARAN TRANSFER</p>
                        </label>

                        <div class="bg-faq1 content p-3">
                            <p>
                                kamu bisa konfirmasi bukti pembayaran transfer melalui nomor berikut ini <a
                                    href="https://wa.me/+6287857327310">087857327310</a>
                            </p>
                        </div>
                    </div>
                    <div class="tab mt-4">
                        <input id="tab-3" type="checkbox" />
                        <label class="bg-faq1 judul-table px-3 py-4" for="tab-3">
                            <p class="m-0">BAGAIMANA CARA MENGIKUTI LOMBA GALAXY</p>
                        </label>

                        <div class="bg-faq1 content p-3">
                            <p>
                                kamu bisa mengikuti lomba galaxy akademik dnegan cara mengisi formular pada link <a
                                    href="{{ url('register') }}">Berikut</a>
                                Dan lomba galaxy Non-Akademik dengan cara mengisi formulir pada link berikut <br>
                                MTQ : <a href="https://intip.in/daftarMTQgalaxy/">https://intip.in/daftarMTQgalaxy</a>
                                <br>
                                Banjari : <a
                                    href="https://intip.in/daftarbanjarigalaxy">https://intip.in/daftarbanjarigalaxy</a>
                                <br>
                                Multimedia : <a
                                    href="https://intip.in/daftarmultimedia">https://intip.in/daftarmultimedia</a>
                            </p>
                        </div>
                    </div>
                    <div class="tab mt-4">
                        <input id="tab-4" type="checkbox" />
                        <label class="bg-faq1 judul-table px-3 py-4" for="tab-4">
                            <p class="m-0">NOMOR SIAPA YANG BISA SAYA HUBUNGI?</p>
                        </label>

                        <div class="bg-faq1 content p-3">
                            <p>
                                kamu bisa menghubungi nomor WhatsApp dibawah ini <br>
                                - <a href="wa.me/6287857327310">087857327310(admin 1)</a> <br>
                                - <a href="wa.me/6285737360535">085737360535(admin 2)</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="ads">
        <div class="container">
            <h1 class="mb-5">
                Sponsor dan media <br />
                partner
            </h1>
            <div class="sponsor text-center pt-4 mt-5">
                <h2 class="mb-4">Sponsor</h2>

                <div class="row">

                    <div class="col-lg-4 col-6">
                        <div class="m-5">
                            <img src="{{ url('assets/images/sponsor/sponsor 1.jpg') }}" alt=""
                                class="ads-gambar" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="sponsor text-center pt-4 mt-5">
                <h2 class="mb-4">Media Partner</h2>
                <div class="row">
                    @for ($i = 1; $i <= 13; $i++)
                        <div class="col-lg-4 col-6">
                            <div class="m-5">
                                <img src="{{ url('assets/images/mediapartner/MEDIA PARTNER ' . $i . '.jpg') }}"
                                    alt="" class="ads-gambar" />
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
