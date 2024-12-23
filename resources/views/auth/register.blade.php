<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'Inscription</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: rgb(21, 32, 43);">
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card text-dark" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="mb-md-2 mt-md-2 pb-5">
                                    <h2 class="fw-bold mb-2 text-uppercase">Inscription</h2>
                                    <p class="text-black-50 mb-5">Merci de remplir toutes les informations</p>

                                    <div class="form-outline form-black mb-4">
                                        <input type="text" id="name" name="name" class="form-control form-control-lg" value="{{ old('name') }}" required autofocus autocomplete="name" />
                                        <label class="form-label" for="name">Nom</label>
                                        @error('name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="form-outline form-black mb-4">
                                        <input type="email" id="email" name="email" class="form-control form-control-lg" value="{{ old('email') }}" required autocomplete="username" />
                                        <label class="form-label" for="email">Email</label>
                                        @error('email')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="form-outline form-black mb-4">
                                        <input type="password" id="password" name="password" class="form-control form-control-lg" required autocomplete="new-password" />
                                        <label class="form-label" for="password">Mot de Passe</label>
                                        @error('password')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="form-outline form-black mb-4">
                                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control form-control-lg" required autocomplete="new-password" />
                                        <label class="form-label" for="password_confirmation">Vérification Mot de Passe</label>
                                        @error('password_confirmation')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <button class="btn btn-outline-dark btn-lg px-5 mt-5" type="submit">Valider</button>
                                </div>
                            </form>

                            <div>
                                <p class="mb-0"><a href="{{ route('index') }}" class="text-black-50 fw-bold">Retourner au menu principal</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
