<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign in & Sign up Form</title>
    <link rel="stylesheet" href="{{ asset('assets/login/css/style.css') }}" />
    <style>
        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 4px;
            animation: slideIn 0.5s ease-out;
        }

        .alert-danger {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
        }

        @keyframes slideIn {
            from {
                transform: translateY(-20px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>
</head>

<body>
    <main>
        <div class="box">
            <div class="inner-box">
                <div class="forms-wrap">
                    <form id="formAuthentication" class="mb-3" action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="logo">
                            <img src="{{ asset('assets/login/images/logoweb-1.png') }}" alt="easyclass" />
                            <h4>eMT-PRESENSI</h4>
                        </div>

                        <div class="heading">
                            <h2>Selamat Datang</h2>
                        </div>

                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    {{ $error }}<br>
                                @endforeach
                            </div>
                        @endif

                        <div class="actual-form">
                            <div class="input-wrap">
                                <input type="text" minlength="4" class="input-field @error('id_user') is-invalid @enderror" name="id_user"
                                    value="{{ old('id_user') }}" autocomplete="off" placeholder="Masukan Username" required />
                                {{-- @error('id_user')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror --}}
                            </div>

                            <div class="input-wrap">
                                <input type="password" minlength="4" name="password" class="input-field @error('password') is-invalid @enderror"
                                    autocomplete="off" placeholder="Masukan Password" required />
                                {{-- @error('password')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror --}}
                            </div>

                            <div class="checkbox-wrap">
                                <input type="checkbox" id="remember" name="remember" style="margin-right: 8px; width: 16px; height: 16px;">
                                <label for="remember" style="color: #FFD700; font-size: 14px; cursor: pointer; margin-left: 20px;">Ingat Saya</label>
                            </div>

                            <input type="submit" value="Sign In" class="sign-btn" />

                            <p class="text">
                                Forgotten your password or you login datails?
                                <a href="#">Get help</a> signing in
                            </p>
                        </div>
                    </form>

                </div>

                <div class="carousel">
                    <img src="{{ asset('assets/login/images/logo2.png') }}" alt="easyclass" style="width: 300px; height: auto;" />
                </div>
            </div>
        </div>
    </main>

    <!-- Javascript file -->
    <script src="{{ asset('assets/login/script/app.js') }}"></script>
</body>

</html>
