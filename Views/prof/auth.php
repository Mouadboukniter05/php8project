<?php
include $_SERVER['DOCUMENT_ROOT']."/PFE/Views/partials/navbar.php";
?>
<br>
<center>
<h2>auth</h2>
<form method="post" action = "">
  <div class="mb-3 col-3">
    <label for="exampleInputEmail1" class="form-label"  style="margin-right : 225px">Email address</label>
    <input type="email" class="form-control" id="email" name="email" >
  </div>
  <div class="mb-3 col-3">
    <label for="" class="form-label" style="margin-right : 250px">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <input type="submit" class="btn btn-primary" value="login"><br>
  <a href="http://localhost/pfe/Controllers/prof/add.php">if you don't have an account click on me</a>
        <?php
            if(isset($msg)){
                ?>
            <div style = "color:red;text-align:center">
                <?= $msg ?>
            </div>
            <?php
            }
            ?>

</form>
</center>
 
<?php

include $_SERVER['DOCUMENT_ROOT']."/PFE/Views/partials/footer.php";
?>