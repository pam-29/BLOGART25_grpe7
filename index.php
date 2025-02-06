<?php
require_once 'header.php';
//var_dump($_SESSION);

if (empty($_SESSION)) {
    header("Location: views/backend/security/login.php");
}

$articles = sql_select('ARTICLE', "*", "1", null, "dtCreaArt DESC", "2");
?>

    <!-- banner section start -->
    <div class="container-fluid">
        <div class="banner_section layout_padding">
            <p class="txt-banner">Croquer Bordeaux à pleine dent</p>
            <h1 class="banner_taital">Bordeaux à travers la gastronomie<br>Une aventure culinaire</h1>
        </div>
    </div>
    <!-- banner section end -->
    </div

    <!-- about section start -->
    <?php foreach($articles as $article){ ?>
    <div class="about_section layout_padding">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8 col-sm-12">
                    <div class="about_img"><img src="src/uploads/<?php echo($article['urlPhotArt']); ?>"></div>
                    <div class="like_icon"><img src="src/images/like-icon.png"></div>
                    <p class="post_text"><?php echo($article['dtCreaArt']); ?></p>
                    <h2 class="most_text"><?php echo($article['libTitrArt']); ?></h2>
                    <p class="lorem_text"><?php echo($article['libChapoArt']); ?></p>
                    <a href="views/frontend/articles/article1.php" class="link">En savoir plus</a>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
    <!-- about section end -->
    <!-- blog section start 
    <div class="about_section layout_padding">
        <div class="container">
            <div class="row blog">
                <div class="col-lg-4 col-sm-12 photo2">

                    <div class="about_main">
                        <img src="src/images/plat.jpg" class="img-thumbnail" alt="...">
                        <img src="src/images/plat3.webp" class="img-thumbnail" alt="...">
                        <img src="src/images/plat4.jpg" class="img-thumbnail" alt="...">
                    </div>
                </div>

                <div class="col-lg-8 col-sm-12">
                    <div class="about_img"><img src="src/images/brasserie.jpg"></div>
                    <div class="like_icon"><img src="src/images/like-icon.png"></div>
                    <p class="post_text">Post By : 09/06/2019</p>
                    <h2 class="most_text">Most Awesome Blue Lake With Snow <br>River</h2>
                    <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
                    <a href="views/frontend/articles/article1.php" class="link">En savoir plus</a>
                </div>


            </div>
        </div>
    </div>
    blog section end -->

    <!--form start-->
    <div class="form-contact">
        <h2 class="title-form">Contactez-nous</h2>
        <form class="col-lg-4 col-md-6" id="contacter">
            <!-- Name input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <input type="text" id="form4Example1" class="form-control"/>
                <label class="form-label" for="form4Example1">Nom</label>
            </div>

            <!-- Email input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <input type="email" id="form4Example2" class="form-control"/>
                <label class="form-label" for="form4Example2">Adresse-mail</label>
            </div>

            <!-- Message input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <textarea class="form-control" id="form4Example3" rows="4"></textarea>
                <label class="form-label" for="form4Example3">Message</label>
            </div>

            <!-- Checkbox -->
            <div class=" d-flex mb-4">

                <!-- Submit button -->
                <button data-mdb-ripple-init type="button" class="btn btn-block mb-4 btn-sign">Envoyer</button>
        </form>
    </div>
    <!--Form end-->
<?php require_once 'footer.php'; ?>