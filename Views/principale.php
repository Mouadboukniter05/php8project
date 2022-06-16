<?php
if(!isset($_SESSION["user"])){
  include $_SERVER['DOCUMENT_ROOT']."/PFE/Views/partials/navbar.php";
}else if($_SESSION["user"]["isProf"] == 1){
  include $_SERVER['DOCUMENT_ROOT']."/PFE/Views/partials/navbaretu/navbar.php";
}else{
  include $_SERVER['DOCUMENT_ROOT']."/PFE/Views/partials/navbarprof/navbar.php";
}
include $_SERVER['DOCUMENT_ROOT']."/PFE/Views/partials/body1.php";
?>



<br>

<div class="row">
  <?php
  foreach ($courses as $course) {
  ?>

<div class=" col-lg-4 col-12" id="card_<?= $course['idCourse']?>">
                                      <div class="card" >

                                    
                                        <img src=<?= $course['image']?> class="card-img-top img_card "  alt="...">
                                        <div class="card-body">
                                            <h4 class="card-title me-4 color-red" id="title1"><?= $course['titreCourse'] ?> </h4>
                                             <h6 class="card-title me-6 color-red" id="title2"><?= $course['description']?> </h6>
                                             <div class="footer_card">
                                              
                                              <div class="footer_card_item icon_card">
                                                <img src=<?= $course['imagee']?> class="card-img-top icon_image ms-6" style="width:2rem;" alt="...">
                                                <h6 class="card-title me-6 color-red" id="title2"><?= $course['username']?> </h6>
                                              </div>
                                              <div class="footer_card_item"> <span class="prix">$<?= $course['prix']?> </span></div>
                                              </div>  
                                             
                                        </div>
                                      </div>
                                   
                                     
                                    </div>
  <?php
   }
  ?>
</div>



<?php
include $_SERVER['DOCUMENT_ROOT']."/PFE/Views/partials/body2.php";
include $_SERVER['DOCUMENT_ROOT']."/PFE/Views/partials/footer.php";
?>