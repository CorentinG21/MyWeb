<div class="card-game mb-2">
    <div class="card-body-game text-center">
        <h5 class="card-title-game">{{ $name }}</h5>
        <p class="card-text-game">Temps joué : {{ $playtime }} heures</p>
    </div>
</div>

<style>
    .card-game {
        margin: 0 auto;
        width: 1000px;
    }

    .card-body-game {
        display: flex;
        justify-content: center; /* Centrer horizontalement */
        align-items: center; /* Centrer verticalement */
        justify-content: space-between;
    }

    h5 {
        font-size: 2rem;
    }
</style>