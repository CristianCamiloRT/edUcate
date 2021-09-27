<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="./">edUcate</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <?php foreach($areas as $area) {?>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?= $area->nombre; ?> 
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <?php 
                $this->load->model('areas_model');
                foreach($CI->areas_model->get_materias($area->id) as $materia) {
              ?>
                <a class="dropdown-item" href="./videos?materia=<?= $materia->id; ?>"><?= $materia->nombre; ?></a>
              <?php } ?>
            </div>
        </li>
      <?php } ?>
    </ul>
  </div>
</nav>