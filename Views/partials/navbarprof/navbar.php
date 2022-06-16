<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="http://localhost/forum/View/partials/css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
    <link rel="icon" href="icon/logo1.PNG" />
  <link rel="stylesheet" href="http://localhost/pfe/Views/assets/css/style.css">
  <link rel="stylesheet" href="http://localhost/pfe/Views/assets/css/media_queries.css">
  <link rel="stylesheet" href="http://localhost/pfe/Views/assets/css/animation.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>  
   
    <title>Educator</title>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="http://localhost/pfe/Controllers/principale.php">
    <img src="http://localhost/pfe/Views/assets/images/logo.png" alt="Dispute Bills" width="80" height="30" class="d-inline-block align-text-top">  
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://localhost/pfe/Controllers/prof/list.php">Courses</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://localhost/pfe/Controllers/course/allCourses.php">All Courses</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/pfe/Controllers/course/ProfEtudiantInscrit.php">Students joined</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/pfe/Controllers/course/addCourse.php">Add course</a>
        </li>
      </ul>
      <div class="d-flex">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
       <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person-fill" style="color:white"></i>
          <?=$_SESSION["user"]["username"]?>
          </a>
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start-30">
          
            <li><a class="dropdown-item" href="http://localhost/pfe/Controllers/prof/logout.php"><i class="bi bi-box-arrow-left"></i>Logout</a></li>
          </ul>
        </li>
        </ul>

        
      </div>

    </div>
  </div>
</nav>
<br>