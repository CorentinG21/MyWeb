<div class="card mb-4">
    <div class="card-body text-center">
        <img src="{{ $avatar }}" alt="Avatar du joueur" class="rounded-circle mb-3" style="width: 100px; margin-right: 15px;">
        <h3 class="mb-0">{{ $name }}</h3>
        <a href="{{ $profileUrl }}" class="ms-3" target="_blank"><i class="bi bi-link-45deg"></i></a>
    </div>
</div>

<style>
    .card {
        margin: 0 auto;
        width: 1000px;
        background-color: rgb(252, 165, 100);
        padding: 20px;
        border-radius: 20px;
    }

    h3, a {
        font-size: 2rem;
    }

    .card-body {
        background-color: rgb(252, 165, 100);
        display: flex;
        justify-content: center; /* Centrer horizontalement */
        align-items: center; /* Centrer verticalement */
        justify-content: space-between;
    }

    .rounded-circle {
        border-radius: 50%;
    }
</style>
