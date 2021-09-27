<div class="text-center my-5">
  <h1>A continuación encontraras videos relacionados a <?= $materia ?></h1>
</div>
<div id="accordion">
  <?php foreach($videos as $video) {?>
    <div class="card">
      <div class="card-header" id="heading<?= $video->id ?>">
        <h5 class="mb-0">
          <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse<?= $video->id ?>" aria-expanded="false" aria-controls="collapse<?= $video->id ?>">
          <?= $video->titulo ?>
          </button>
        </h5>
      </div>
      <div id="collapse<?= $video->id ?>" class="collapse" aria-labelledby="heading<?= $video->id ?>" data-parent="#accordion">
        <div class="card-body">
        <?= $video->descripcion ?>
        </div>
      </div>
    </div>
  <?php } ?>
</div>