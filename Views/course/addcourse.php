<?php
include $_SERVER['DOCUMENT_ROOT']."/PFE/Views/partials/navbarprof/navbar.php";

?>


<!-- +------------------------------------------------------------------------------+ -->
  <style>

input:hover,
input:active,
input:focus {
    outline: 0px !important;
    -webkit-appearance: none;
    /* box-shadow: none !important; */
}

input,select {
    border: none !important;
    box-shadow: 3px 3px #EEE;
    padding: 20px;
    width: 95% !important;
}

.btn {
    border-radius: 0;
    background: #ff4107;
    color: #fff;
}

</style>

            <div class="container d-flex justify-content-center">
      <form action="" class="w-50 mt-5" method="post">
        <div class="text-center">
          <h3>Add new Course</h3>
        </div>
        <div class="form-group mt-4 ms-4">
          <label for="" class="text-uppercase mb-3">Title</label>
          <input type="text" class="form-control" name="titreCourse" minlength="3" maxlength="72"  required/>
          <small class="text-black-50">Entre 3 et 72 caracters</small>
        </div>
        <div class="form-group mt-4 ms-4">
          <label for="" class="text-uppercase mb-3">Catgories</label>
          <select name="idCategorie" id="idCategorie" class="form-select" required>
          <?php
                      foreach ($categories as $categorie) {
                          ?>
                          <option value="<?= $categorie["idCategorie"] ?>"><?= $categorie["nameCategorie"] ?></option>
                      <?php
                      }
                      ?>
            </select>
        </div>

        <div class="form-group mt-4 ms-4">
          <label for="" class="text-uppercase mb-2">Price</label>
          <input type="number" class="form-control" name="prix" required/>
        </div>
        <div class="form-group mt-4 ms-4">
          <label for="" class="text-uppercase mb-2">Description</label>
          <textarea name="description" id="" cols="30" rows="10" class="form-control" required></textarea>
        </div>
        <div class="form-group mt-4 ms-4">
          <label for="" class="text-uppercase mb-2">Created at</label>
          <input type="date" class="form-control" name="dateAjout" required />
        </div>
        <div class="form-group mt-4 ms-4">
          <label for="" class="text-uppercase mb-2">video</label>
          <input type="text" class="form-control" name="video"  required />
        </div>
        <div class="form-group mt-4 ms-4">
          <label for="" class="text-uppercase mb-2">Picture</label>
          <input type="text" class="form-control" name="image"  required />
        </div>
        <button class="btn w-100 mt-5 p-2" type="submit">Add it</button>
        <hr style="height: 2px" />
      </form>
    </div>
    
<?php
include $_SERVER['DOCUMENT_ROOT']."/PFE/Views/partials/footer.php";

?>