<?php
include $_SERVER['DOCUMENT_ROOT']."/PFE/Views/partials/navbar.php";
?>
<br>
            <center>
                <h2>Register</h2>
                <form action="" method="post">
                <div class="mb-3 col-3">
                    <label for="username" class="form-label" style="margin-right : 250px">Username :</label>
                    <input type="text" name="username" id ="username"required class="form-control"/>
                </div>
                    <div class="mb-3 col-3">
                            <label  class="form-label"  style="margin-right : 270px">select :</label>
                            <select name="isprof" id="isprof" class="form-select" required>
                                <option value="0">Teacher</option>
                                <option value="1">Student</option>
                            </select>
                    </div>
                <div class="mb-3 col-3">
                            <label for="tel" class="form-label"  style="margin-right : 290px">Tel :</label>
                            <input type="tel" name="tel" max="10" min="10" required class="form-control" />
                    </div>
                    
                    <div class="mb-3 col-3">
                            <label for="abbr" class="form-label"  style="margin-right : 270px">Email :</label>
                            <input type="email" name="email" required  class="form-control"/>
                    </div>
                    <div class="mb-3 col-3">
                            <label for="abbr" class="form-label"  style="margin-right : 250px">Password :</label>
                            <input type="password" name="password" required class="form-control" />
                    </div>

                    <input type="submit" class="btn btn-primary" value="registre">
                    <br>
                    <a href="http://localhost/pfe/Controllers/prof/auth.php">login</a>


                    <div style = "color:red;">
                    <?= $msg ?>
                    </div>
                </form>
            </center>
<?php
include $_SERVER['DOCUMENT_ROOT']."/PFE/Views/partials/footer.php";
?>