<div class="container">
<?php
try{
while($row_for_one_page = mysqli_fetch_assoc($result_one_page_blog)){
    echo '<div class="card mt-5">
    <h5 class="card-header">'.$row_for_one_page['type'].'</h5>
    <div class="card-body">
      <h5 class="card-title">'.$row_for_one_page['title'].'</h5>
      <p class="card-text">'.$row_for_one_page['content'].'</p>
    </div>
  </div>';
}
}
catch(error $error){
    die("this website is crashed because of this error".$error);
}
?>
</div>