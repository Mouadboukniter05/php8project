<?php
include $_SERVER['DOCUMENT_ROOT']."/PFE/Views/partials/navbaretu/navbar.php";
?>

  <br>
    <h1>  My courses :  </h1>
    <hr>
    <br>
    <table id="hello" class="table">
    <thead>
        <tr>
            <th> username de prof </th>
            <th> course </th>
            <th>date d'inscription</th>
            <th>details</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($mycourses as $course) {
                ?>
            
            <tr>
            <td><?= $course["username"] ?></td>
            <td><?= $course["titreCourse"] ?></td>
            <td><?= $course["dateinscripton"] ?></td>
            <td> <a href="http://localhost/pfe/Controllers/course/getCourse.php?id=<?= $course["idCourse"] ?>">read me</a></td>
        </tr>
            <?php
            }
        ?>

        
       
    </tbody>
</table>

<script>
    $(document).ready( function () {
    $('#hello').DataTable();
} );

</script>

<?php
include $_SERVER['DOCUMENT_ROOT']."/PFE/Views/partials/footer.php";
?>