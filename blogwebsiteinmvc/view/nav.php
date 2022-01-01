
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a href="index.php" class="nav-link active" aria-current="page">Home</a>
        </li>
          <?php
          while($row_for_nav = mysqli_fetch_assoc($result_for_nav)){
              echo '<li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php?page=single&cat='.$row_for_nav['type'].'">'.$row_for_nav['type'].'</a>
            </li>';
          }
          ?>
      </ul>
    </div>
  </div>
</nav>