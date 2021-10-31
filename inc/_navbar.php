<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Panel</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Inactive</a>
        </li>
      </ul> 
      <ul class="navbar-nav">
        <?php
        if (isset($_SESSION["username"])) {
          ?>
          <li class="nav-item">
            <a class="nav-link">You are logged in as:
            <?php echo $_SESSION["username"]; ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Logout</a>
          </li>
          <?php
        }
        ?>
      </ul>
    </div>
  </div>
</nav>