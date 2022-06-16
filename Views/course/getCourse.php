<?php
include $_SERVER['DOCUMENT_ROOT']."/PFE/Views/partials/navbaretu/navbar.php";
?>

  <br>
    <h1>  titre courses : <?= $course["titreCourse"] ?>  </h1>
    <hr>
    <br>
    

    <div class="accordion" id="accordionPanelsStayOpenExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
        Description course
      </button>
    </h2>
    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
      <div class="accordion-body">
       
        <div class="text-center" >
                <img src="<?= $detailsCours["image"] ?>" class="rounded" alt="prix <?= $detailsCours["25"]?>"style = "width:400px;hieght:400px;">
        </div>
        <br>
        <hr>
        <br>
        <p>
            <?= $detailsCours["description"] ?> (in <?= $detailsCours["duree"] ?>)
        </p>      
    </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
        watch video
      </button>
    </h2>
    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
      <div class="accordion-body">
      <div class="text-center" >
      <iframe width="420" height="315"
        src="<?= $course["video"] ?>">
    </iframe>
</div>
    </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
        author is : <?= $profcr["username"] ?>
      </button>
    </h2>
    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
      <div class="accordion-body">
       <br>
      <div class="text-center" >
            <img src="<?= $profcr["imagee"] ?>" class="rounded" alt="<?= $profcr["username"]?>"style = "width:300px;hieght:300px;">
        </div> 
        <br>
        <hr>
        <br>
      <p>
      <?=$profcr["description_prof"] ?>
      </p>      
    </div>
    </div>
  </div>
</div>

<?php
include $_SERVER['DOCUMENT_ROOT']."/PFE/Views/partials/footer.php";
?>



