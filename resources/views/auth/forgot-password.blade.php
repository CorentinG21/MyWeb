<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réinitialisation de Mot de Passe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: rgb(21, 32, 43);">
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card text-dark" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <div class="mb-md-2 mt-md-2 pb-0">
                                    <h2 class="fw-bold mb-2 text-uppercase">Mot de Passe Oublié</h2>
                                    <p class="text-black-50 mb-4">
                                        Pas de problème. Indiquez-nous votre adresse email et nous vous enverrons un lien pour réinitialiser votre mot de passe.
                                    </p>

                                    <div class="form-outline form-black mb-4">
                                        <input type="email" id="email" name="email" class="form-control form-control-lg" value="{{ old('email') }}" required autofocus />
                                        <label class="form-label" for="email"><strong>Email</strong></label>
                                        @error('email')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <button class="btn btn-outline-dark btn-lg px-5" type="submit">Envoyer le Lien</button>

                                    <div class="mt-5">
                                        <p><a href="{{ route('index') }}" class="text-black-50 fw-bold">Retourner au menu principal</a></p>
                                    </div>
                                </div>

                                @if (session('status'))
                                    <div class="alert alert-success mt-3" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
