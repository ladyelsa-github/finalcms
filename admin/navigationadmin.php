    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../index.php">Inicio</a>
            </li>
           
            <?php if(!isUserLoggedIn()) { ?>
            <li class="nav-item">
              <a class="nav-link" href="../login.php">Sign In</a>
            </li>
            <?php } else { ?>
              <li class="nav-item">
              <a class="nav-link" href="../logout.php">Logout</a>
            </li>
            <?php } ?>
            <li class="nav-item">
              <a class="nav-link" href="../register.php">Sign Up</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin.php">Administrador</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>