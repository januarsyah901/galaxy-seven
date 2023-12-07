@extends('templates.main')

@section('container')
    <div class="atasabout"></div>

    <section id="tentang" class="position-relative mb-5 aboutus">
        <!-- <img src="img/circle-blue.png" alt="" class="circle-blue position-absolute" /> -->
        <div class="container mt-5">
            <div class="tentang-header text-center">
                <h2>Show your skill to the world</h2>
                <h1>Tentang Galaxy</h1>
                <p class="w-75 mx-auto">
                    GALAXY merupakan sebuah event tahunan yang diselenggarakan oleh MA
                    istimewa Amanatul Ummah layanan sks.kegiatan galaxy ini sangat penting
                    untuk dikembangkan upaya untuk meningkatkan kualitas generasi muda
                    untuk menghadapi era milenial mengingat bangsa Indonesia saat ini
                    semakin tertinggal karena tidak memiliki SDM yang mumpuni. Galaxy
                    diharapkan menjadi wadah yang pas untuk menampung bakat dan
                    kemampuan pelajar serta konstribusidalam menghadapi globalisasi yang
                    semakin berkembang pesat.
                </p>

                <div class="my-5">
                    {{-- <div class="tentang-selengkapnya d-inline mt-5">Selengkapnya</div> --}}
                </div>
            </div>
        </div>
    </section>

    <section class="previous-event mb-5">
        <div class="container mb-5">
            <div class="mx-5">
                <div class="d-flex mx-auto row justify-content-center">
                    <div class="col-md-3 text-md-end text-center flex">
                        <img style="" class="mt-lg-5 mt-0" src="{{ url('assets/images/img/logo.png') }}"
                            alt="" />
                    </div>

                    <div class="px-3 pt-3 pt-md-0 col-md-9 tentang-header">
                        <h1>Our Previous Event</h1>
                        <p class="text-start">
                            Greatest Academic in the Large Andromeda X-tion of Creativity atau biasa
                            dikenal dengan sebutan GALAXY adalah acara yang diadakan setahun sekali
                            oleh MA Istimewa Amanatul Ummah Pacet, Mojokerto. GALAXY terdiri dari
                            berbagai acara yang meliputi perlombaan, seminar, pameran karya santri,
                            dan malam puncak yang spektakuler. Salah satu acara terbesarnya yaitu
                            olimpiade MIPA,IPS,PAI dan Bahasa inggris tingkat SMP/MTs sederajat. Galaxy
                            sendiri telah berjalan selama 6 periode, pada periode ke-6 kemarin Galaxy
                            diadakan 3 hari loh yang diakhiri oleh pentas Malam Puncak.
                            event ini berlangsung dengan sangat baik dan pasti santri-santri serta para
                            peserta yang mengikuti event ini baik pesantren maupun non pesantren akan
                            kagum akan event ini. Bahkan event ini dapat bersandingkan dengan event-
                            event besar lainnya. Event GALAXY sendiri sudah berlangsung selama 6 tahun.
                            Dan kali ini kita akan membahas event GALAXY ditahun keenam atau GALAXY
                            7.0 yang tenutnya akan membawakan suasana yang berbeda dari tahun-
                            tahun sebelumnya. Udah kebayang gak sih keseruannya? Yuk, simak
                            penjelasan dibawah ini!
                            Ditahun yang kelima ini GALAXY membawakan beberapa tahap acara yakni
                            seminar, dan yang terakhir Malam puncak. Pada acara selanjutnya yaitu
                            Seminar. Acara tersebut menghadirkan seorang ternama yakni Hendy
                            setiono. Beliau sedikit banyaknya menuturkan kesan dan pesan beliau
                            menghadiri acara tersebut dengan rasa bahagia apalagi dalam kesempatan
                            sebagai bintang tamu pada acara Seminar dalam event GALAXY 6.0.bangga
                            banget gak sih rasanya?
                            Dan pada acara terakhir ialah yang paling ditunggu-tunggu santri Amanatul
                            Ummah. Ialah malam puncak, Acara GALAXY 6.0 ditutup dengan Malam
                            Puncak yang mempersembahkan penampilan dari Afthersine. Pada saat
                            penampilannya para penonton benar-benar pecah. lagu-lagu yang
                            dibawakan dan suaranya yang merdu membuat semua penonton terpesona
                            dan ikut bernyanyi bersama. penampilan penutup tersebut benar benar telah
                            menjadikan acara GALAXY 6.0 benar-benar fantastis dan akan selalu diingat
                            oleh semua orang.
                            Tahun 2023 ini galaxy telah memasuki periode ke-7 yang akan dilaksanakan
                            jauh berbeda dengan periode sebelumnya dengan jumlah acara yang lebih
                            banyak dan lebih spektakuler. Untuk rangkaian acaranya masih berupa
                            misteri bagi para peserta GALAXY 7.0. Yang jelas tidak akan kalah menarik dari
                            tahun-tahun sebelumnya. Kami tunggu kehadiran para peserta di acara
                            GALAXY 7.0.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="dokum container mt-5">
        <div class="row mt-5">
            <div class="col-md-6">
                <div class="py-lg-3 py-2">
                    <img class="paskib" src="{{ url('assets/images/galeri/paskib.JPG') }}" alt="" />
                </div>
                <div class="py-lg-3 py-2">
                    <img class="abah" src="{{ url('assets/images/galeri/abah.JPG') }}" alt="" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="py-lg-3 py-2">
                    <img class="malpun" class="" src="{{ url('assets/images/galeri/malpun.JPG') }}" alt=""
                        class="" />
                </div>
                <div class="py-lg-3 py-2">
                    <img class="seminar" src="{{ url('assets/images/galeri/seminar.JPG') }}" alt="" />
                </div>
            </div>

            <div class="col-md-8">
                <div class="py-lg-3 py-2">
                    <img class="aftershine" src="{{ url('assets/images/galeri/aftershine.JPG') }}" alt="" />
                </div>
            </div>
            <div class="col-md-4">
                <div class="py-lg-3 py-2">
                    <img class="end" src="{{ url('assets/images/galeri/end.JPG') }}" alt="" />
                </div>
            </div>
        </div>
    </section>
@endsection
