<?php
include $_SERVER['DOCUMENT_ROOT']."/PFE/Views/partials/navbarprof/navbar.php";
?>

<br>

    <h1>  My courses :  </h1>
<hr>
<br>
    <table id="hello" class="table">
    <thead>
        <tr>
            <th> titre course </th>
            <th> categorie </th>
            <th> prix </th>
            <th> date </th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($courses as $course) {
                ?>
            
            <tr>
            <td><?= $course["titreCourse"] ?></td>
            <td><?= $categoriedb->get($course["idCategorie"])["nameCategorie"] ?></td>
            <td><?= $course["prix"] ?></td>
            <td><?= $course["dateAjout"] ?></td>
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