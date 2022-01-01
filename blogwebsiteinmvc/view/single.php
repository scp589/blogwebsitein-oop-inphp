<div class="container pt-2">
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for question.." title="Type in a name">
</div>
<div class="container" id="myUL">
<?php
try{
while($row_for_single = mysqli_fetch_assoc($reslt_for_single)){
  echo '<div class="card mt-5">
  <h5 class="card-header">Latest</h5>
  <div class="card-body">
    <h5 class="card-title">'.$row_for_single['title'].'</h5>
    <p class="card-text">'.substr($row_for_single['content'], 0, 400).'......</p>
    <a href="index.php?page=forsingleblogonepage&title='.$row_for_single['title'].'" class="btn btn-primary">Read more</a>
  </div>
</div>';
}
}
catch(error $error){
  die("this website is crashed because of this eror".$error);
}
?>
</div>