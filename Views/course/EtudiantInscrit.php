<?php
include $_SERVER['DOCUMENT_ROOT']."/PFE/Views/partials/navbarprof/navbar.php";
?>

<br>

    <h1>  les etudiant inscrit :  </h1>
<hr>
<br>
    <table id="hello" class="table">
    <thead>
        <tr>
            <th> titre course </th>
            <th> username d'etudiant</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($etudiantInscrits as $etu) {
                ?>
            <tr>
            <td><?= $etu["titreCourse"] ?></td>
            <td><?=$etu["username"] ?></td>

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



