<?php
if(!isset($_SESSION["user"])){
  include $_SERVER['DOCUMENT_ROOT']."/PFE/Views/partials/navbar.php";
}else if($_SESSION["user"]["isProf"] == 1){
  include $_SERVER['DOCUMENT_ROOT']."/PFE/Views/partials/navbaretu/navbar.php";
}else{
  include $_SERVER['DOCUMENT_ROOT']."/PFE/Views/partials/navbarprof/navbar.php";
}

?>
<br>
<center>
  <h2>all courses</h2>
</center>
<hr>
<br>

<br>
<br>
<br>

<br>
<br>

<div class="row">
  <?php
  foreach ($courses as $course) {
  ?>

<div class=" col-lg-4 col-16" id="card_<?= $course['idCourse']?>">
    <div class="card" >                  
      <img src=<?= $course['image']?> class="card-img-top img_card "  alt="...">
            <div class="card-body">
            <h5 class="card-title"><?= $course["titreCourse"] ?></h5>
        <p class="card-text"><?= $course["description"] ?></p>
        <p class="card-text"><small class="text-muted"> <?= $course["dateAjout"] ?> </small></p>
       <?php if(isset($_SESSION["user"]) && $_SESSION["user"]["isProf"]==1) {?>
        <p class="card-text">
           <a href="http://localhost/pfe/Controllers/course/paiment.php?id=<?=$course["idCourse"]?>">
           <i class="bi bi-cart3"></i>
          </a>
        </p> 
        <?php } ?>
            </div>
     </div>                                           
</div>


  <?php
   }
  ?>
</div>



<?php
include $_SERVER['DOCUMENT_ROOT']."/PFE/Views/partials/footer.php";
?>