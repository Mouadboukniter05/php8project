<?php
include $_SERVER['DOCUMENT_ROOT']."/PFE/Views/partials/navbar.php";
?>



<style>

input:hover,
input:active,
input:focus {
    outline: 0px !important;
    -webkit-appearance: none;
    /* box-shadow: none !important; */
}

input {
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
<br>

<div class="container d-flex justify-content-center">
      <form action="" class="w-50 mt-5" method="post">
        <div class="text-center">
          <h3>Login and start learning</h3>
          <p class="text-black-50">
            Take advantage of your free time to learn from <br />
            the best universities and companies
          </p>
        </div>
        <div class="form-group mt-4 ms-4">
          <label for="" class="text-uppercase mb-2">Email</label>
          <input type="email" class="form-control" name="email" />
        </div>
        <div class="form-group mt-4 ms-4">
          <label for="" class="text-uppercase mb-2">Password</label>
          <input type="password" class="form-control" name="password" />
        </div>
        <button class="btn w-100 mt-5 p-2" type="submit">Login</button>
      </form>
    </div>


<?php

include $_SERVER['DOCUMENT_ROOT']."/PFE/Views/partials/footer.php";
?>