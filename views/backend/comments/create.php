<?php
include '../../../header.php';

$query = "COMMENT 
            JOIN MEMBRE ON MEMBRE.numMemb = COMMENT.numMemb
            JOIN ARTICLE ON ARTICLE.numArt = COMMENT.numArt
            ";
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Création nouveau commentaire</h1>
        </div>
        <div class="col-md-12">
            <!-- Form to create a new statut -->
            <form action="<?php echo ROOT_URL . '/api/comments/create.php' ?>" method="post">
                <div class="form-group">
                    <label for="pseudoMemb">Pseudo</label>
                    <input id="pseudoMemb" name="pseudoMemb" class="form-control" type="text" autofocus="autofocus" >

                    <label for="prenomMemb">Prénom</label>
                    <input id="prenomMemb" name="prenomMemb" class="form-control" type="text" autofocus="autofocus" />
                    
                    <label for="nomMemb">Prénom</label>
                    <input id="nomMemb" name="nomMemb" class="form-control" type="text" autofocus="autofocus" />
                    
                    <label for="articles">Liste des articles</label>
                    <select id="articles" name="articles" class="form-control" type="text" autofocus="autofocus" >
                        <?php $articles = sql_select('ARTICLE', '*');
                        foreach ($articles as $article) : ?>
                        <option><?php echo $article['libTitrArt'] ?></option>
                        <?php endforeach; ?>
                    </select>

                    <label for="libCom">Commentaire</label>
                    <input id="libCom" name="libCom" class="form-control" type="text" autofocus="autofocus" />

                </div>
                <br />
                <div class="form-group mt-2">
                    <a href="list.php" class="btn btn-primary">List</a>
                    <button type="submit" class="btn btn-success">Confirmer create ?</button>
                </div>
            </form>
        </div>
    </div>
</div>