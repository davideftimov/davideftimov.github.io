<!DOCTYPE html>
<html lang="en">
<head>

<?php $page = 'cafe'; include 'includes/head.php'; ?>

<style type="text/css">
		.parallax {
    		min-height: 525px;
    		background: transparent;
		}
	</style>
</head>
<body>
    
    <?php include 'includes/navbar.php'; ?>
    <div class="parallax mt-5 mb-3" data-parallax="scroll" data-image-src="imgs/head5.jpg"></div>
    <div class="container-fluid text-center d-none d-md-inline">
        <h1>SCIENCE<span>/</span>DU<span>/</span>CAFÉ</h1>
        <p>Découvrez dans un des quartiers les plus animés du Centre Ville historique de Montpellier, entre l’église Saint-Roch et la rue Saint-Guilhem, un choix incroyable de cafés de qualité du monde entier entièrement élaborés par nos soins.</p>
    </div>

    <!-- <section class="container-fluid px-0">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div id="headingGroup" class="text-center d-none d-lg-block">
                        <h1>SCIENCE<span>/</span>DU<span>/</span>CAFÉ</h1>
                        <h1>SCIENCE<span>/</span>DU<span>/</span>CAFÉ</h1>
                        <h1>SCIENCE<span>/</span>DU<span>/</span>CAFÉ</h1>
                        <h1>SCIENCE<span>/</span>DU<span>/</span>CAFÉ</h1>
                        <h1>SCIENCE<span>/</span>DU<span>/</span>CAFÉ</h1>
                        <h1>SCIENCE<span>/</span>DU<span>/</span>CAFÉ</h1>
                        <h1>SCIENCE<span>/</span>DU<span>/</span>CAFÉ</h1>
                </div>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid" src="imgs/slika4.jpg" alt="">
            </div>
        </div>
    </section> -->

    <section class="container-fluid px-0">
        <div class="row text-center align-items-center content mt-3">
            <div class="col-md-6">
                <div class="row justify-content-center">
                    <div class="col-10 col-lg-8 blurb mb-5 mb-md-0">
                            <h2>SCIENCE DU CAFÉ</h2>
                            <img class="d-none d-lg-inline" src="imgs/coffee4.png" alt="">
                            <p class="lead">Au Science du Café, nous proposons jusqu'à deux douzaines de variétés de café du monde entier, torréfiées fraîchement par des torréfacteurs locaux. Nos rôtis vont d'un rôti d'acajou léger de la ville à un rôti italien foncé.</p>
                        </div>
                    </div>
            </div>
            <div class="col-md-6">
                    <img class="img-fluid" src="imgs/slika4.jpg" alt="">
            </div>
        </div>
        <div class="row text-center align-items-center content">
            <div class="col-md-6 order-2 order-md-1">
                <img class="img-fluid" src="imgs/slika3.jpg" alt="">
            </div>
            <div class="col-md-6 order-1 order-md-2">
                <div class="row justify-content-center">
                    <div class="col-10 col-lg-8 blurb mb-5 mb-md-0">
                            <h2>SCIENCE DU CAFÉ</h2>
                            <img class="d-none d-lg-inline" src="imgs/coffee4.png" alt="">
                            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, quas. Ratione reprehenderit distinctio reiciendis quae nesciunt unde, nobis nihil debitis dolore non delectus cum quaerat quos facere, corporis quam inventore?</p>
                            <form action="apropos.php">
                                <input class="btn" type="submit" value="Lire la suite" />
                            </form>
                        </div>
                    </div>
                </div>
        </div>
        <div class="row text-center align-items-center content mb-5">
            <div class="col-md-6">
                <div class="row justify-content-center">
                    <div class="col-10 col-lg-8 blurb mb-5 mb-md-0">
                            <h2>SCIENCE DU CAFÉ</h2>
                            <img class="d-none d-lg-inline" src="imgs/coffee2.png" alt="">
                            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, quas. Ratione reprehenderit distinctio reiciendis quae nesciunt unde, nobis nihil debitis dolore non delectus cum quaerat quos facere, corporis quam inventore?</p>
                            <form action="noscafes.php">
                                <input class="btn" type="submit" value="Nos cafés" />
                            </form>
                        </div>
                    </div>
            </div>
            <div class="col-md-6">
                    <img class="img-fluid" src="imgs/slika2.jpg" alt="">
            </div>
        </div>
        <!-- <div class="row text-center align-items-center content">
                <div class="col-md-6 order-2 order-md-1">
                    <img class="img-fluid" src="imgs/slika1.jpg" alt="">
                </div>
                <div class="col-md-6 order-1 order-md-2">
                    <div class="row justify-content-center">
                        <div class="col-10 col-lg-8 blurb mb-5 mb-md-0">
                                <h2>SCIENCE DU CAFÉ</h2>
                                <img class="d-none d-lg-inline" src="imgs/coffee2.png" alt="">
                                <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, quas. Ratione reprehenderit distinctio reiciendis quae nesciunt unde, nobis nihil debitis dolore non delectus cum quaerat quos facere, corporis quam inventore?</p>
                            </div>
                        </div>
                    </div>
            </div> -->
    </section>
    

    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/scripts.php'; ?>
    <script>
    $(function () {
        $(document).scroll(function(){
            var $nav = $("#mainNavbar");
            $nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height());
        })
    })
    </script>
</body>
</html>