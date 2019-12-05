    <nav id="mainNavbar" class="navbar navbar-dark navbar-expand-md py-0 fixed-top">
        <a href="index.php" class="navbar-brand <?php if($page=='cafe'){echo 'colorb';}?>">CAFÉ</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navLinks" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navLinks">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="apropos.php" class="nav-link <?php if($page=='apropos'){echo 'color';}?>">À PROPOS</a>
                </li>
                <li class="nav-item">
                    <a href="noscafes.php" class="nav-link <?php if($page=='noscafes'){echo 'color';}?>">NOS CAFÉS</a>
                </li>
                <li class="nav-item">
                    <a href="quiz.php" class="nav-link <?php if($page=='quiz'){echo 'color';}?>">QUIZ</a>
                </li>
                <li class="nav-item">
                    <a href="emplacement.php" class="nav-link <?php if($page=='emplacement'){echo 'color';}?>">EMPLACEMENT</a>
                </li>
            </ul>
        </div>

    </nav>