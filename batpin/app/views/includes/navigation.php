<nav class="navbar navbar-expand-lg navbar-light container text-light" style="font-family: 'Carrois Gothic SC', sans-serif;" >
  <a class="navbar-brand text-light" href="<?php echo URLROOT; ?>/index"><strong>BATPIN</strong></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse text-light" id="navbarNav">
    <ul class="navbar-nav text-light">
        <?php if(isset($_SESSION['user_id'])) : ?>
          <li class="nav-item">
            <a class="nav-link text-light" href="<?php echo URLROOT; ?>/pages/index">Home <span class="sr-only">(current)</span></a>
          </li>
        <?php endif; ?>
    </ul>
    <ul class="navbar-nav ml-auto">
        <?php if(isset($_SESSION['user_id'])) : ?>
          <li class="nav-item">
                <a class="nav-link disabled text-warning"><?=$_SESSION['username'] ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="<?php echo URLROOT; ?>/users/logout"><strong>Logout </strong><span class="sr-only">(current)</span></a>
            </li>
        <?php else : ?>
            <li class="nav-item">
                <a class="nav-link text-light" href="<?php echo URLROOT; ?>/users/login"><strong>Login </strong><span class="sr-only">(current)</span></a>
            </li>
        <?php endif; ?>
    </ul>
  </div>
</nav>
