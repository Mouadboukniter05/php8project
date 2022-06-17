<?php
include $_SERVER['DOCUMENT_ROOT']."/PFE/Views/partials/navbar.php";
?>
<br>
       

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
          <h3>Sing up and start learning</h3>
          <p class="text-black-50">
            Take advantage of your free time to learn from <br />
            the best universities and companies
          </p>
        </div>
        <div class="form-group mt-4 ms-4">
          <label for="" class="text-uppercase mb-3">Username</label>
          <input type="text" class="form-control" name="username" />
        </div>
        <div class="form-group mt-4 ms-4">
          <label for="" class="text-uppercase mb-3">select</label>
          <select name="isprof" id="isprof" class="form-select" required>
                                <option value="0">Teacher</option>
                                <option value="1">Student</option>
            </select>
        </div>

        <div class="form-group mt-4 ms-4">
          <label for="" class="text-uppercase mb-2">Phone</label>
          <input type="tel" class="form-control" name="tel" maxlength="10" minlength="10" required/>
        </div>
        <div class="form-group mt-4 ms-4">
          <label for="" class="text-uppercase mb-2">Email Adress</label>
          <input type="email" class="form-control" name="email" required/>
        </div>
        <div class="form-group mt-4 ms-4">
          <label for="" class="text-uppercase mb-2">Password</label>
          <input type="password" class="form-control" name="password" minlength="8" maxlength="72" required />
          <small class="text-black-50">Entre 8 et 72 caracters</small>
        </div>
        <button class="btn w-100 mt-5 p-2" type="submit">Sing Up</button>
        <h6 class="d-flex justify-content-center mt-3">
          By singin up, you agree to our terms of services <br />
          and privacy policy
        </h6>
        <hr style="height: 2px" />
      </form>
    </div>

<?php
include $_SERVER['DOCUMENT_ROOT']."/PFE/Views/partials/footer.php";
?>