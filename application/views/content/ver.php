<section class="row w-100 mx-auto my-5 d-flex justify-content-center">
    <div class="col-12 col-md-9 col-xl-8">
        <div class="card">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="<?= $video->url ?>" allowfullscreen=""></iframe>
            </div>
            <div class="card-body">
                <h3 class="card-title"><?= $video->titulo ?></h3>
                <p class="card-text"><?= $video->descripcion ?></p>
                <p class="card-text"><small class="text-muted">Subido hace 3 días</small></p>
            </div>
        </div>
    </div>
</section>