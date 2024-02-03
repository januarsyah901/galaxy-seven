<form style="display: none" action="{{ url('register') }}" method="post" enctype="multipart/form-data">
    @csrf

    <!-- Nama input -->
    <div class="form-floating">
        <input type="nama" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama "
            placeholder="Astro" autofocus required value="{{ old('nama') }}">
        <label for="nama">
            <p>Nama</p>
        </label>
        @error('nama')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <!-- Nomor hp input -->
    <div class="form-floating">
        <input type="telp" name="telp" class="form-control @error('telp') is-invalid @enderror" id="telp "
            placeholder="08..." autofocus required value="{{ old('telp') }}">
        <label for="telp">
            <p> Nomor telpon</p>
        </label>
        @error('telp')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <!-- NISN input -->
    <div class="form-floating">
        <input type="nisn" name="nisn" class="form-control @error('nisn') is-invalid @enderror" id="nisn "
            placeholder="nisn" autofocus required value="{{ old('nisn') }}" maxlength="10">
        <label for="nisn">
            <p>nisn</p>
        </label>
        @error('nisn')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <!-- Sekolah input -->
    <div class="form-floating">
        <input type="sekolah" name="sekolah" class="form-control @error('sekolah') is-invalid @enderror" id="sekolah "
            placeholder="sekolah" autofocus required value="{{ old('sekolah') }}">
        <label for="sekolah">
            <p> Asal sekolah</p>
        </label>
        @error('sekolah')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <!-- Email input -->
    <div class="form-floating">
        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email "
            placeholder="name@example.com" autofocus required value="{{ old('email') }}">
        <label for="email">Email address</label>
        @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <!-- Password input -->
    <div class="form-floating">
        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
            id="password" placeholder="Password" required>
        <label for="password">Password</label>
    </div>
    <div class="form-floating">
        <label for="password_confirmation">Konfirmasi</label>
        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
        @if ($errors->has('password'))
            <div class="alert alert-danger">{{ $errors->first('password') }}</div>
        @endif
    </div>
    <div class="form-radio">
        <p class="mb-0">pilih jenis kelamin</p>
        <label>
            <input type="radio" class="option-input radio" name="jk" value="laki-laki" checked />
            Laki-laki
        </label>
        <label>
            <input type="radio" class="option-input radio" name="jk" value="perempuan" />
            Perempuan
        </label>
    </div>
    <div class="mb-3">
        <label for="image"
            class="form-label @error('image')
                                        is-invalid
                                    @enderror">Upload
            bukti twibbon</label>
        <input class="form-control" type="file" id="image" name="image">
        @error('image')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-radio">
        <p class="mb-0">pilih jenis kompetisi</p>
        <label>
            <input type="radio" class="option-input radio" name="type" value="mipa" checked />
            Olimpiade MIPA
        </label>
        <label>
            <input type="radio" class="option-input radio" name="type" value="pai" />
            Olimpiade PAI
        </label>
        <br>
        <label class="mt-1">
            <input type="radio" class="option-input radio" name="type" value="ips" />
            Olimpiade IPS
        </label>
        <label>
            <input type="radio" class="option-input radio" name="type" value="inggris" />
            Olimpiade Bahasa Inggris
        </label>

    </div>


    <!-- Submit button -->
    <div class="text-center mt-1 form-radio">
        <button type="submit" class="btn btn-primary btn-block mb- rounded-3">
            Daftar
        </button>

    </div>

    <!-- Register buttons -->
    <div class="text-center">
        <p>Sudah punya akun? <a href="{{ url('login') }}">Login</a></p>
    </div>

</form>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Glx-7</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:wght@100;400;700&family=Montserrat:wght@400;500;600;700&family=Outfit:wght@400;500;600;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="{{ url('assets/css/style.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ url('assets/images/icon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ url('assets/images/icon.png') }}" type="image/x-icon">
</head>

<body>
    <section id="register">
        <div class="row">
            <div class="col-md-5 d-none d-md-block p-0">
                <div class="kiri text-center position-relative h-100 align-content-center d-flex overflow-hidden">
                    <img class="d-block" src="{{ url('assets/images/img/logo glx.png') }}" alt="" />
                    <img src="{{ url('assets/images/img/planet samping.png') }}" alt=""
                        class="position-absolute planet-kiri-regis" />
                    <img src="{{ url('assets/images/img/planet-atas.png') }}" alt=""
                        class="position-absolute planet-atas-regis" />
                    <img src="{{ url('assets/images/img/Rocket_illustra.png') }}" alt=""
                        class="position-absolute roket-regis" />
                </div>
            </div>
            <div class="col-md-7 kanan">
                <div class="container">
                    <div class="isian">
                        <a class="tombol-back" href="{{ url('/home') }}"><svg xmlns="http://www.w3.org/2000/svg"
                                width="22" height="22" viewBox="0 0 22 22" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M9.40167 1.22006C10.3578 0.537062 11.6423 0.537038 12.5985 1.22L19.7613 6.33608C21.0096 7.2277 21.7505 8.66731 21.7505 10.2014V18C21.7505 20.0711 20.0716 21.75 18.0005 21.75H15.1429C13.6241 21.75 12.3929 20.5188 12.3929 19V17.5C12.3929 17.0858 12.0571 16.75 11.6429 16.75H10.3572C9.943 16.75 9.60721 17.0858 9.60721 17.5V19C9.60721 20.5188 8.37599 21.75 6.85721 21.75H4.00049C1.92942 21.75 0.250488 20.0711 0.250488 18V10.2013C0.250488 8.66728 0.991293 7.22772 2.23953 6.33609L9.40167 1.22006ZM11.7266 2.44061C11.292 2.13018 10.7082 2.13019 10.2736 2.44064L3.11141 7.55667C2.25735 8.16674 1.75049 9.1517 1.75049 10.2013V18C1.75049 19.2426 2.75785 20.25 4.00049 20.25H6.85721C7.54757 20.25 8.10721 19.6903 8.10721 19V17.5C8.10721 16.2573 9.11457 15.25 10.3572 15.25H11.6429C12.8856 15.25 13.8929 16.2573 13.8929 17.5V19C13.8929 19.6903 14.4526 20.25 15.1429 20.25H18.0005C19.2431 20.25 20.2505 19.2426 20.2505 18V10.2014C20.2505 9.15175 19.7436 8.16675 18.8895 7.55669L11.7266 2.44061Z"
                                    fill="#89125D" />
                            </svg>
                            Kembali ke halaman awal
                        </a>

                        <h1>Register</h1>

                        <form class="form-regis" action="{{ url('register') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="mb-1 mb-md-3 ">
                                <label for="nama">
                                    Nama
                                </label>
                                <input type="text" name="nama"
                                    class="form-control @error('nama') is-invalid @enderror" id="nama "
                                    placeholder="Masukkan Nama" autofocus required value="{{ old('nama') }}">
                                @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>
                            <!-- Nomor hp input -->
                            <div class="mb-1 mb-md-3 ">
                                <label for="telp">
                                    Nomor telpon
                                </label>
                                <input type="text" name="telp"
                                    class="form-control @error('telp') is-invalid @enderror" id="telp "
                                    placeholder="Masukkan Nomor" autofocus required value="{{ old('telp') }}">
                                <span class="mb-1 mb-md-3 ">Nomor telepon harus diawali 62</span>
                                @error('telp')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>
                            <!-- NISN input -->
                            <div class="mb-1 mb-md-3 ">
                                <label for="nisn">
                                    nisn
                                </label>
                                <input type="text" name="nisn"
                                    class="form-control @error('nisn') is-invalid @enderror" id="nisn "
                                    placeholder="nisn" autofocus required value="{{ old('nisn') }}"
                                    maxlength="10">
                                @error('nisn')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <!-- Sekolah input -->
                            <div class="mb-1 mb-md-3 ">
                                <label for="sekolah">
                                    Asal sekolah
                                </label>
                                <input type="text" name="sekolah"
                                    class="form-control @error('sekolah') is-invalid @enderror" id="sekolah "
                                    placeholder="sekolah" autofocus required value="{{ old('sekolah') }}">
                                @error('sekolah')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <!-- Email input -->
                            <div class="mb-1 mb-md-3 ">
                                <label for="email">Email</label>
                                <input type="email" name="email"
                                    class="form-control @error('email') is-invalid @enderror" id="email "
                                    placeholder="Masukkan Email" autofocus required value="{{ old('email') }}">
                                <span class="mb-1 mb-md-3 ">Email harus berformat example@gmail.com</span>
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            <!-- Password input -->
                            <div class="mb-1 mb-md-3 ">
                                <label for="password">Password</label>
                                <input type="password" name="password"
                                    class="form-control @error('password') is-invalid @enderror" id="password"
                                    placeholder="Password" required>
                                <span class="mb-1 mb-md-3 ">Kata sandi harus mengandung minimal 8 karakter <br> yang
                                    terdiri
                                    atas
                                    kombinasi huruf besar, huruf kecil, dan angka</span>
                            </div>
                            <div class="mb-1 mb-md-3 ">
                                <label for="password_confirmation">Konfirmasi</label>
                                <input type="password" class="form-control" id="password_confirmation"
                                    name="password_confirmation" required>
                                @if ($errors->has('password'))
                                    <div class="alert alert-danger">{{ $errors->first('password') }}</div>
                                @endif
                            </div>
                            <div class="form-radio mb-3">
                                <p class="mb-0">pilih jenis kelamin</p>
                                <label>
                                    <input type="radio" class="option-input radio" name="jk"
                                        value="laki-laki" checked />
                                    Laki-laki
                                </label>
                                <label>
                                    <input type="radio" class="option-input radio" name="jk"
                                        value="perempuan" />
                                    Perempuan
                                </label>
                            </div>
                            <div class="mb-3">
                                <label for="image"
                                    class="form-label @error('image')
                                                                is-invalid
                                                            @enderror">Upload
                                    bukti twibbon</label>
                                <input class="form-control" type="file" id="image" name="image">

                                <span class="mt-4"> Link twibbon bisa diakses di web berikut ini : <a
                                        href="https://twb.nz/galaxyolimp">https://twb.nz/galaxyolimp</a></span>
                                @error('image')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-radio mb-3">
                                <p class="mb-0">pilih jenis kompetisi</p>
                                <label>
                                    <input type="radio" class="option-input radio" name="type" value="mipa"
                                        checked />
                                    Olimpiade MIPA
                                </label>
                                <label>
                                    <input type="radio" class="option-input radio" name="type"
                                        value="pai" />
                                    Olimpiade PAI
                                </label>
                                <br>
                                <label class="mt-1">
                                    <input type="radio" class="option-input radio" name="type"
                                        value="ips" />
                                    Olimpiade IPS
                                </label>
                                <label>
                                    <input type="radio" class="option-input radio" name="type"
                                        value="inggris" />
                                    Olimpiade Bahasa Inggris
                                </label>

                            </div>

                            {{-- 
                            <label class="mt-md-3" for="email ">Email</label><br />
                            <input type="email" id="email" name="email"
                                placeholder="Masukkan Email" /><br />
                            <span class="mb-1 mb-md-3 ">Email harus berformat example@gmail.com</span> <br />

                            <label class="mt-md-3" for="password">Kata Sandi</label><br />
                            <input type="password" id="password" name="password"
                                placeholder="Masukkan Kata Sandi" /><br />
                            <span class="mb-1 mb-md-3 ">Kata sandi harus mengandung minimal 8 karakter <br> yang terdiri atas
                                kombinasi huruf besar, huruf kecil, dan angka</span> <br />

                            <label class="mt-md-3" for="phone">Nomor Telepon</label><br />
                            <input type="text" id="phone" name="phone"
                                placeholder="Masukkan Nomor Telepon" /><br />
                            <span class="mb-1 mb-md-3 ">Nomor telepon harus diawali +62</span> <br /> --}}

                            <input type="submit" value="Daftar" />
                            <p class="text-center" @disabled(true) onclick="return false;">Sudah punya
                                akun? <a href="{{ url('login') }}" class="color-purple">Masuk</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <script src=" https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js"></script>
    <script src="{{ url('assets/js/script.js') }}"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
