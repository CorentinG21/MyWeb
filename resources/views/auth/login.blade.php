<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de Connexion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: rgb(21, 32, 43);">
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card text-dark" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="mb-md-2 mt-md-2 pb-5">
                                    <h2 class="fw-bold mb-2 text-uppercase">Connexion</h2>
                                    <p class="text-black-50 mb-4">Merci de remplir votre Email et votre Mot de passe</p>

                                    <div class="form-outline form-black mb-4">
                                        <input type="email" id="email" name="email" class="form-control form-control-lg" value="{{ old('email') }}" required autofocus autocomplete="username" />
                                        <label class="form-label" for="email"><strong>Email</strong></label>
                                        @error('email')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="form-outline form-black mb-4">
                                        <input type="password" id="password" name="password" class="form-control form-control-lg" required autocomplete="current-password" />
                                        <label class="form-label" for="password"><strong>Mot de Passe</strong></label>
                                        @error('password')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    @if (Route::has('password.request'))
                                        <p class="small mb-5 pb-lg-2">
                                            <a class="text-black-50" href="{{ route('password.request') }}">Mot de passe oublié?</a>
                                        </p>
                                    @endif

                                    <button class="btn btn-outline-dark btn-lg px-5" type="submit">Connecter</button>
                                </div>
                                
                                <div>
                                    <p class="mb-0">Pas de Compte? 
                                        <a href="{{ route('register') }}" class="text-black-500 fw-bold">S'inscrire</a>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>