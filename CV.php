<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/3abe00e260.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="CV2.css">
    <title>CV</title>
</head>
<body>


    
    <div class="container mt-5 cv">
        <div class="row align-items-center">
            <div class="col-8">
                <h1 class="ml-0 mb-0">DAVID</h1>
                <h1 class="ml-0 mb-0">EFTIMOV</h1>
                <p id="prof" class="">Front-end web developer</p>
                <p id="words">J'ai 23 ans, très motivée pour étudier et apprendre
                    mettre à niveau mes connaissances dans le domaine du web
                    programmation. Actuellement concentré sur front-end.
                    Ouvert et engagé à apprendre de nouvelles technologies.</p>
            </div>
            <div class="col-4">
                <div id="info" class="">
                <p class="d-flex justify-content-end align-items-center">davideftimov1221@gmail.com<i class="fas fa-envelope fa-lg mx-1"></i></p>
                <p class="d-flex justify-content-end align-items-center">06 64 45 36 75<i class="fas fa-phone fa-lg mx-1"></i></p>
                <p class="d-flex justify-content-end align-items-center">Montpellier, France<i class="fas fa-map-marker-alt fa-lg mx-1"></i></p>
                <p class="d-flex justify-content-end align-items-center"><a href="https://github.com/davideftimov">github.com/davideftimov</a><i class="fab fa-github fa-lg mx-1"></i></p>
                </div>
            </div>
        </div>
        <hr class="mt-1">
        <section class="mx-2">
            <h5>Compétences</h5>
            <div class="row justify-content-around">
                <div class="col-3">
                    <ul>
                        <li>HTML 5</li>
                        <li>CSS 3</li>
                        <li>Javascript</li>
                    </ul>
                </div>
                <div class="col-3">
                    <ul>
                        <li>C++</li>
                        <li>Bootstrap</li>
                        <li>JQuery</li>
                    </ul>
                </div>
                <div class="col-3">
                    <ul>
                        <li>Adobe Photoshop</li>
                        <li>VS Code & Sublime text</li>
                    </ul>
                </div>
            </div>

            <h5>Formation</h5>
            <ul>
                <li>Faculté des Sciences de Montpellier L1 Sciences et technologies</li>
            </ul>
            <h5>Intérêts</h5>
            <ul class="pb-2">
                <li>Tous les sports, films, musique, technologie.</li>
            </ul>
        </section>
    </div> 
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
            <form action="index.php">
                <input class="btn-lg btn-dark " type="submit" value="Revenir à Science du Café" />
            </form>
            </div>
        </div>
    </div>
    <?php include 'includes/scripts.php'; ?>
</body>
</html>