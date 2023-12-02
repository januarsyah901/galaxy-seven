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
                        <h1 class="m-0 mx-3">Petualangan di luar batas alam semesta</h1>
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
                    <div class="tentang-selengkapnya d-inline mt-5">Selengkapnya</div>
                </div>
            </div>
        </div>
        <!-- Set up your HTML -->
        <div class="owl-carousel owl-theme">
            <div class="item"><img src="{{ url('assets/images/img/aftershine.png') }}" alt="" /></div>
            <div class="item"><img src="{{ url('assets/images/img/aftershine.png') }}" alt="" /></div>
        </div>
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
                <div class="col-lg-4">
                    <div class="alur-block-item mx-auto my-2 p-4 rounded-3 d-flex row">
                        <div class="col-6 col-lg-12 d-flex">
                            <img src="{{ url('assets/images/img/verif.png') }}" alt="" />
                        </div>
                        <div class="col-6 col-lg-12">
                            <h1>Daftar dan login</h1>
                            <p>Sebelum kalian mengikuti perlombaan login dulu dan lengkapi data diri kalian</p>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-light" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">Detail</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="alur-block-item mx-auto my-2 bg-white p-4 bg-opacity-10 rounded-3 row">
                        <div class="col-6 col-lg-12 d-flex">
                            <img src="{{ url('assets/images/img/kalender.png') }}" alt="" />
                        </div>
                        <div class="col-6 col-lg-12">
                            <h1>Pengerjaan dan upload</h1>
                            <p>Waktunya pengerjaan lomba sesuai bidang yang kalian ikuti.</p>
                            <div class="btn btn-light">Detail</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="alur-block-item mx-auto my-2 p-4 rounded-3 row">
                        <div class="col-6 col-lg-12 d-flex">
                            <img src="{{ url('assets/images/img/piala.png') }}" alt="" />
                        </div>
                        <div class="col-6 col-lg-12">
                            <h1>Pengumuman</h1>
                            <p>
                                Pengumuman finalis <br />
                                dan pemenang
                            </p>
                            <div class="btn btn-light">Detail</div>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-header border-bottom-0">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="alur-modal">
                                    <h1>Login dan daftar</h1>
                                    <p>Khusus untuk pendaftaran, info lengkap bisa kalian cek lewat tombol dibawah.</p>
                                    <a href="" class="btn btn-light"></a>
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
                <div class="col-lg-3 col-md-4 mt-3">
                    <div class="lomba-block">
                        <img class="mx-auto d-block py-3" src="{{ url('assets/images/img/Lambang glx6 warna.png') }}"
                            alt="" />
                        <div class="mx-4 mt-3">
                            <h1>matematika</h1>
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
                                                                <img src="{{ url('assets/images/img/rectangle-94.png') }}"
                                                                    alt="" class="gambar-modal w-100" />
                                                            </div>
                                                            <div class="col-lg-6 bg-pink text-dark p-3 isi-modal">
                                                                <h1>Matematika</h1>
                                                                <h2>Deskripsi :</h2>
                                                                <p>
                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                                    sed do eiusmod tempor incididunt ut labore et dolore
                                                                    magna aliqua. Ut enim ad minim veniam, quis nostrud
                                                                    exercitation ullamco laboris nisi ut
                                                                    aliquip ex ea commodo
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
                                                                        <button
                                                                            class="btn-purple px-2 px-lg-3 py-lg-2 py-1 tombol-modal my-auto">Download</button>
                                                                    </div>
                                                                </div>

                                                                <div
                                                                    class="d-flex justify-content-between align-content-center pb-4 mb-3 border-bottom border-3 border-opacity-25 border-dark">
                                                                    <div class="">
                                                                        <h2 class="m-0 my-1">HTM</h2>
                                                                        <h1>FREE</h1>
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
                                                                    </div>

                                                                    <div class="my-auto">
                                                                        <button
                                                                            class="btn-purple px-2 px-lg-3 py-lg-2 py-1 tombol-modal my-auto">Ikuti
                                                                            Lomba</button>
                                                                    </div>
                                                                </div>
                                                                <h2>Pengerjaan :</h2>
                                                                <p>
                                                                    Lorem ipsum, dolor sit amet consectetur adipisicing
                                                                    elit. Consequuntur totam architecto placeat itaque
                                                                    ducimus fuga earum ipsam rerum repudiandae a est
                                                                    asperiores, enim quo adipisci distinctio aliquid
                                                                    commodi odio quibusdam.
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
                                                                    </div>

                                                                    <br />
                                                                    <button
                                                                        class="btn-purple px-2 px-lg-3 py-lg-2 py-1 tombol-modal my-auto">Kumpulkan</button>
                                                                    <button
                                                                        class="btn-purple px-2 px-lg-3 py-lg-2 py-1 tombol-modal my-auto">Kumpulkan</button>
                                                                </div>

                                                                <script>
                                                                    function startTimer(duration, display) {
                                                                        var timer = duration,
                                                                            days,
                                                                            hours,
                                                                            minutes,
                                                                            seconds;
                                                                        setInterval(function() {
                                                                            days = parseInt(timer / (60 * 60 * 24), 10);
                                                                            hours = parseInt((timer / (60 * 60)) % 24, 10);
                                                                            minutes = parseInt((timer / 60) % 60, 10);
                                                                            seconds = parseInt(timer % 60, 10);

                                                                            days = days < 10 ? '0' + days : days;
                                                                            hours = hours < 10 ? '0' + hours : hours;
                                                                            minutes = minutes < 10 ? '0' + minutes : minutes;
                                                                            seconds = seconds < 10 ? '0' + seconds : seconds;

                                                                            document.getElementById('days').textContent = days;
                                                                            document.getElementById('hours').textContent = hours;
                                                                            document.getElementById('minutes').textContent = minutes;
                                                                            document.getElementById('seconds').textContent = seconds;

                                                                            if (--timer < 0) {
                                                                                timer = duration;
                                                                            }
                                                                        }, 1000);
                                                                    }

                                                                    window.onload = function() {
                                                                        var fifteenDays = 120 * 24 * 60 * 60;
                                                                        startTimer(fifteenDays, document.getElementById('countdown'));
                                                                    };
                                                                </script>
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

    <section id="totalh">
        <div class="container my-5">
            <div class="bg-totalh py-5">
                <div class="row">
                    <div class="col-lg-6 justify-content-center d-flex order-2 order-lg-1 mt-3 mt-lg-0">
                        <div class="inner-totalh">
                            <h1>Total hadiah <br /></h1>
                            <h2>hingga</h2>
                            <div class="hadiah text-center mt-4">15 Juta</div>
                        </div>
                    </div>
                    <div class="col-lg-6 justify-content-center d-flex order-1 order-lg-2"><img
                            src="{{ url('assets/images/img/piala.png') }}" alt="" class="piala" /></div>
                </div>
            </div>
        </div>
    </section>

    <section id="merchandise">
        <div class="container position-relative">
            <div class="position-absolute merch-blur1"></div>
            <div class="position-absolute merch-blur2"></div>
            <div class="merchandise-judul text-center">
                <h2>Our merchandise</h2>
                <h1>Merchandise</h1>
                <p>Ini adalah merchandise dari kami, gapapa lihat lihat dulu aja</p>
            </div>
            <div class="owl-carousel owl-theme mt-5">
                <div class="item">
                    <div class="lomba-block">
                        <img class="mx-auto d-block py-3" src="/{{ url('assets/images/img/Lambang glx6 warna.png') }}"
                            alt="" />
                        <div class="mx-4 mt-3">
                            <h1>matematika</h1>
                            <div class="d-flex justify-content-between mt-5 pb-3">
                                <h2 class="my-auto">Akademik</h2>
                                <div>
                                    <a href="" class="btn btn-light">detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
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
                            <p class="m-0">Bagaimana cara mendaftar lomba GALAXY?</p>
                        </label>

                        <div class="bg-faq1 content p-3">
                            <p>
                                Jumlah jam tidur yang cukup dapat bervariasi tergantung pada usia dan kebutuhan individu.
                                Secara umum, sebagian besar orang dewasa membutuhkan 7-9 jam tidur setiap malam untuk merasa
                                segar dan bugar saat bangun pagi.
                                Namun, beberapa orang mungkin merasa baik dengan 6-7 jam tidur, sementara yang lain
                                memerlukan lebih dari 9 jam. Penting untuk mendengarkan tubuh Anda dan menyesuaikan pola
                                tidur Anda sesuai kebutuhan
                            </p>
                        </div>
                    </div>
                    <div class="tab mt-4">
                        <input id="tab-1" type="checkbox" />
                        <label class="bg-faq1 judul-table px-3 py-4" for="tab-1">
                            <p class="m-0">Bagaimana cara mendaftar lomba GALAXY?</p>
                        </label>

                        <div class="bg-faq1 content p-3">
                            <p>
                                Jumlah jam tidur yang cukup dapat bervariasi tergantung pada usia dan kebutuhan individu.
                                Secara umum, sebagian besar orang dewasa membutuhkan 7-9 jam tidur setiap malam untuk merasa
                                segar dan bugar saat bangun pagi.
                                Namun, beberapa orang mungkin merasa baik dengan 6-7 jam tidur, sementara yang lain
                                memerlukan lebih dari 9 jam. Penting untuk mendengarkan tubuh Anda dan menyesuaikan pola
                                tidur Anda sesuai kebutuhan
                            </p>
                        </div>
                    </div>
                    <div class="tab mt-4">
                        <input id="tab-1" type="checkbox" />
                        <label class="bg-faq1 judul-table px-3 py-4" for="tab-1">
                            <p class="m-0">Bagaimana cara mendaftar lomba GALAXY?</p>
                        </label>

                        <div class="bg-faq1 content p-3">
                            <p>
                                Jumlah jam tidur yang cukup dapat bervariasi tergantung pada usia dan kebutuhan individu.
                                Secara umum, sebagian besar orang dewasa membutuhkan 7-9 jam tidur setiap malam untuk merasa
                                segar dan bugar saat bangun pagi.
                                Namun, beberapa orang mungkin merasa baik dengan 6-7 jam tidur, sementara yang lain
                                memerlukan lebih dari 9 jam. Penting untuk mendengarkan tubuh Anda dan menyesuaikan pola
                                tidur Anda sesuai kebutuhan
                            </p>
                        </div>
                    </div>
                    <div class="tab mt-4">
                        <input id="tab-1" type="checkbox" />
                        <label class="bg-faq1 judul-table px-3 py-4" for="tab-1">
                            <p class="m-0">Bagaimana cara mendaftar lomba GALAXY?</p>
                        </label>

                        <div class="bg-faq1 content p-3">
                            <p>
                                Jumlah jam tidur yang cukup dapat bervariasi tergantung pada usia dan kebutuhan individu.
                                Secara umum, sebagian besar orang dewasa membutuhkan 7-9 jam tidur setiap malam untuk merasa
                                segar dan bugar saat bangun pagi.
                                Namun, beberapa orang mungkin merasa baik dengan 6-7 jam tidur, sementara yang lain
                                memerlukan lebih dari 9 jam. Penting untuk mendengarkan tubuh Anda dan menyesuaikan pola
                                tidur Anda sesuai kebutuhan
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
                            <img src="{{ url('assets/images/img/company-logo.svg') }}" alt=""
                                class="ads-gambar" />
                        </div>
                    </div>
                    <div class="col-lg-4 col-6">
                        <div class="m-5">
                            <img src="{{ url('assets/images/img/company-logo.svg') }}" alt=""
                                class="ads-gambar" />
                        </div>
                    </div>
                    <div class="col-lg-4 col-6">
                        <div class="m-5">
                            <img src="{{ url('assets/images/img/company-logo.svg') }}" alt=""
                                class="ads-gambar" />
                        </div>
                    </div>
                    <div class="col-lg-4 col-6">
                        <div class="m-5">
                            <img src="{{ url('assets/images/img/company-logo.svg') }}" alt=""
                                class="ads-gambar" />
                        </div>
                    </div>
                    <div class="col-lg-4 col-6">
                        <div class="m-5">
                            <img src="{{ url('assets/images/img/company-logo.svg') }}" alt=""
                                class="ads-gambar" />
                        </div>
                    </div>
                    <div class="col-lg-4 col-6">
                        <div class="m-5">
                            <img src="{{ url('assets/images/img/company-logo.svg') }}" alt=""
                                class="ads-gambar" />
                        </div>
                    </div>
                    <div class="col-lg-4 col-6">
                        <div class="m-5">
                            <img src="{{ url('assets/images/img/company-logo.svg') }}" alt=""
                                class="ads-gambar" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="sponsor text-center pt-4 mt-5">
                <h2 class="mb-4">Media Partner</h2>

                <div class="row">
                    <div class="col-lg-4 col-6">
                        <div class="m-5">
                            <img src="{{ url('assets/images/img/medpar-72.png') }}" alt="" class="ads-gambar" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
