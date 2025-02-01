<?php
include '../../../header.php'; // contains the header and call to config.php

//Load all article
$query = "ARTICLE 
            INNER JOIN THEMATIQUE ON ARTICLE.numThem = THEMATIQUE.numThem
            INNER JOIN MOTCLEARTICLE ON ARTICLE.numArt = MOTCLEARTICLE.numArt
            INNER JOIN MOTCLE ON MOTCLEARTICLE.numMotCle = MOTCLE.numMotCle";


$article = sql_select($query, "*");


?>

<!-- Bootstrap default layout to display all article in foreach -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>article</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Date</th>
                        <th>Titre</th>
                        <th>Chapeau</th>
                        <th>Accroche</th>
                        <th>Mots clés</th>
                        <th>Thématiques</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($article as $articles){ ?>
                        <tr>
                            <td><?php echo($articles['numArt']); ?></td>
                            <td><?php echo($articles['dtCreaArt']); ?></td>
                            <td><?php echo($articles['libTitrArt']); ?></td>
                            <td><?php echo($articles['libChapoArt']); ?></td>
                            <td><?php echo($articles['libAccrochArt']); ?></td>
                            <td><?php echo($articles['libMotCle']); ?></td>
                            <td><?php echo($articles['libThem']); ?></td>
                            <td>
                                <a href="edit.php?numArt=<?php echo($articles['numArt']); ?>" class="btn btn-primary">Edit</a>
                                <a href="delete.php?numArt=<?php echo($articles['numArt']); ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="create.php" class="btn btn-success">Create</a>
        </div>
    </div>
</div>
<?php
include '../../../footer.php'; // contains the footer