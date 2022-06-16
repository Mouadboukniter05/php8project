<?php
include $_SERVER['DOCUMENT_ROOT']."/PFE/Views/partials/navbarprof/navbar.php";

?>

<br>


    <br>
    <br>
    <center>
      <h2> add new course </h2>
      <br>
      <form action="" method="post">
       <div class="mb-3 col-3">
          <label >Catgories</label>
                <select name="idCategorie" id="idCategorie" class="form-select"  required>
                      <?php
                      foreach ($categories as $categorie) {
                          ?>
                          <option value="<?= $categorie["idCategorie"] ?>"><?= $categorie["nameCategorie"] ?></option>
                      <?php
                      }
                      ?>
                </select> 
       </div>
       <div class="mb-3 col-3">
        <label for="">titre  :</label>
                <input type="text" name="titreCourse" required class="form-control" />
       </div>
       
       <div class="mb-3 col-3">
        <label for="">prix :</label>
        <input type="number" name="prix" required class="form-control"  />
       </div>
        
       <div class="mb-3 col-3">            
        <label for="">description :</label> <br>
            <textarea name="description" id="" cols="30" rows="10" class="form-control" ></textarea>
          </div>

          <div class="mb-3 col-3">
            <label for="">date ajoute :</label>
            <input type="date" name="dateAjout" required class="form-control" />
          </div>
          <div class="mb-3 col-3">
        <label for="">video :</label>
        <input type="text" name="video" required class="form-control" />
            </div>

            <div class="mb-3 col-3">
        <label for="">image :</label>
        <input type="text" name="image" required class="form-control" />
            </div>
        <input type="submit" class="btn btn-success" value="ajouter">
    </form>
  </center>
    
<?php
include $_SERVER['DOCUMENT_ROOT']."/PFE/Views/partials/footer.php";

?>