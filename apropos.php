<!DOCTYPE html>
<html lang="en">
<head>

<?php $page = 'apropos'; include 'includes/head.php'; ?>
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

    <div class="parallax mt-5" data-parallax="scroll" data-image-src="imgs/head4.jpg"></div>
    
    <div class="container mt-5">
        <h3 class="">Notre histoire</h3>
        <p>En juillet 2010, le Coffee Science a ouvert ses portes au 1369 Cambridge Street, à Inman Square, à Cambridge.</p>
        <p>Dès le début, nous avons envisagé la science du café comme étant plus qu’un simple lieu de café. Nous offrons les 
            meilleurs cafés disponibles. Nous nous efforçons de créer une atmosphère confortable et accueillante et de faire 
            partie intégrante de la communauté. De nombreuses amitiés, y compris plusieurs mariages, ont été nouées à 1369. 
            Plusieurs livres et thèses ont été écrits à nos tables. Nous sommes fiers d’être un bon voisin et un lieu de 
            rassemblement local. Nous nous engageons à maintenir ce sentiment.</p>
        <p>Nous avons eu la chance d'être récipiendaire de nombreux prix et distinctions. Nous continuons à poursuivre nos 
            objectifs dans le but d'atteindre l'excellence dans tout ce que nous faisons. Nous poursuivrons notre engagement 
            envers notre quartier et notre communauté.</p>
        <p class="text-center">Merci de nous avoir fait #1!</p>
        <h3>Notre café</h3>
        <p>Au 1369 Coffee House, nous proposons jusqu'à deux douzaines de variétés de café du monde entier, torréfiées fraîchement 
            par des torréfacteurs locaux. Nos rôtis vont d'un rôti d'acajou léger de la ville à un rôti italien foncé. Différents 
            rôtis mettent en évidence les caractéristiques distinctives de chaque variété. Nous avons sélectionné plusieurs torréfacteurs 
            haut de gamme dans le Nord-Est, réputés pour leurs pratiques d'achat de qualité et socialement responsables.</p>
        <p>Une fois torréfié, le café a une durée de vie limitée, environ 2 à 4 semaines s'il est stocké correctement. 1369 ne 
            vendra pas de café 10 jours après sa date de torréfaction. Nous insistons sur le café frais pour nous et pour nos clients. 
            Nous brassons uniquement avec de l'eau douce filtrée. Nous vous invitons à essayer tous nos cafés à la maison ou dans nos 
            cafés. Chacun présente son propre monde de saveurs. </p>
    </div>
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