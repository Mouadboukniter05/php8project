<?php
include $_SERVER['DOCUMENT_ROOT']."/PFE/Views/partials/navbaretu/navbar.php";
?>

 <br>

 <div class="container">
        <div class="row">
           
           
            <div class="col-12 mt-4">
                <div class="card p-3">
                    <p class="mb-0 fw-bold h4">Payment Methods</p>
                </div>
            </div>
                 <div class="card-body border p-0">
                        <p>
                            <a class="btn btn-primary p-2 w-100 h-100 d-flex align-items-center justify-content-between"
                                data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="true"
                                aria-controls="collapseExample">
                                <span class="fw-bold">Credit Card</span>
                                <span class="">
                                    <span class="fab fa-cc-amex"></span>
                                    <span class="fab fa-cc-mastercard"></span>
                                    <span class="fab fa-cc-discover"></span>
                                </span>
                            </a>
                        </p>
                        <div class="collapse show p-3 pt-0" id="collapseExample">
                            <div class="row">
                                <div class="col-lg-5 mb-lg-0 mb-3">
                                    <p class="h4 mb-0">Summary</p>
                                    <p class="mb-0"><span class="fw-bold">Course :</span><span class="c-green"> <?= $course["titreCourse"] ?> </span>
                                    </p>
                                    <p class="mb-0">
                                        <span class="fw-bold">Price:</span>
                                        <span class="c-green">: <?= $course["prix"] ?> MAD</span>
                                    </p>
                                    <p class="mb-0">  <?= $course["description"] ?></p>
                                </div>
                                <div class="col-lg-7">
                                    <form action="" class="form" method="post">
                                        <div class="row">
                                            <input type="hidden" name="idCourse" value="<?= $course["idCourse"] ?>">
                                            <div class="col-12">
                                                <div class="form__div">
                                                    <label for="" class="form__label">Card Number</label>
                                                    <input type="number" class="form-control" placeholder="Card Number" required>
                                                    
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="form__div"><label for="" class="form__label">MM/YY</label>
                                                    <input type="text" class="form-control" placeholder="MM/YY" maxlength="5" minlength="5" required>
                                                    
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="form__div"><label for="" class="form__label">cvv code</label>
                                                    <input type="password" class="form-control" placeholder="123" maxlength="3" minlength="3" required>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form__div"><label for="" class="form__label">name on the card</label>
                                                    <input type="text" class="form-control" placeholder="name on the card" required>
                                                </div>
                                                <br>
                                            </div>
                                        
                                          
                                                <button class="btn btn-primary w-100">make payment</button>
                                            
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

<?php
include $_SERVER['DOCUMENT_ROOT']."/PFE/Views/partials/footer.php";
?>



