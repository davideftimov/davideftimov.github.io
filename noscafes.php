<!DOCTYPE html>
<html lang="en">
<head>

<?php $page = 'noscafes'; include 'includes/head.php'; ?>
<style type="text/css">
		.parallax {
    		min-height: 450px;
    		background: transparent;
		}
	</style>

</head>
<body>
    <div class="allButFooter">
    <?php include 'includes/navbar.php'; ?>

    <div class="parallax mt-5" data-parallax="scroll" data-image-src="imgs/beans4.jpg"></div>

    <!-- <div class="container mt-5">
        <section id="header" class="jumbotron text-center">
            <h1>CAFÉ</h1>
            <p>Enjoy one of our light, medium, dark, decaffeinated, or flavored brews of the day, brewed from only the top 1% of Arabica beans in the world.</p>
        </section>
    </div> -->
    <div class="container mt-5">
    <p>Enjoy one of our light, medium, dark, decaffeinated, or flavored brews of the day, brewed from only the top 1% of Arabica beans in the world.</p>

    </div>

    <section id="gallery">
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-4 mb-3">
                        <div class="card">
                                <img src="imgs/cappucino.jpg" alt="" class="card-img-top">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Capuccino</h5>
                                </div>
                            </div>
                </div>
                <div class="col-lg-4 mb-3">
                        <div class="card">
                                <img src="imgs/espresso.jpg" alt="" class="card-img-top">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Espresso</h5>
                                </div>
                            </div>
                </div>
                <div class="col-lg-4 mb-3">
                        <div class="card">
                                <img src="imgs/latte1.jpg" alt="" class="card-img-top">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Latte</h5>
                                </div>
                            </div>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-4 mb-3">
                        <div class="card">
                                <img src="imgs/black.jpg" alt="" class="card-img-top">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Café noir</h5>
                                </div>
                            </div>
                </div>
                <div class="col-lg-4 mb-3">
                        <div class="card">
                                <img src="imgs/ice.jpg" alt="" class="card-img-top">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Café glacé</h5>
                                </div>
                            </div>
                </div>
                <div class="col-lg-4 mb-3">
                        <div class="card">
                                <img src="imgs/specialty.jpg" alt="" class="card-img-top">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Café de spécialité</h5>
                                </div>
                            </div>
                </div>
            </div>
        </div>
    </section>


    </div>
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