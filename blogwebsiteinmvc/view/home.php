<div class="container">
<?php
try{
while($row_for_home = mysqli_fetch_assoc($result_for_home)){
    echo '
    <div class="card mt-5">
  <h5 class="card-header">Latest</h5>
  <div class="card-body">
    <h5 class="card-title">'.substr($row_for_home['title'], 0, 400).'</h5>
    <p class="card-text">'.substr($row_for_home['content'], 0, 400).'......</p>
    <a href="index.php?page=forsingleblogonepage&title='.$row_for_home['title'].'" class="btn btn-primary">Read more</a>
  </div>
</div>';
}
}
catch(error $error){
    die($error);
}
?>
</div>