<!DOCTYPE html>
<html lang="en">
<head>

<?php $page = 'quiz'; include 'includes/head.php'; ?>

</head>
<body>
    <div class="allButFooter">
    <?php include 'includes/navbar.php'; ?>
    
    <div class="container mt-5 quiz">
        <h1 class="text-center p-2 m-0">Combien de connaissances sur le café avez-vous réellement?</h1>
        <hr class="mt-1">
<form action='process.php' method='post' id='quizForm' id='1'>


	<ol>
    
   
    	<li>
        <h3>Selon une histoire d'origine éthiopienne, des grains de café auraient été découverts après quel animal soit devenu énergique après les avoir mangés.</h3>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='A' />
        <label for='answerOneA'>Chèvres</label>
        </div>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='B' />
        <label for='answerOneB'>Éléphants</label>
        </div>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='C' />
        <label for='answerOneC'>Des oiseaux</label>
        </div>
        </li>
        
     
        <li>
        <h3>What is an espresso?</h3>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='A' />
        <label for='answerTwoA'>A type of beverage made with whipped cream.</label>
        </div>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='B' />
        <label for='answerTwoB'>A brewing method where water is forced through the coffee grounds.</label>
        </div>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='C' />
        <label for='answerTwoC'>A type of coffee bean that contains high amounts of caffeine.</label>
        </div>
        </li>
        
      
        
         <li>
        <h3>What is a latte?</h3>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='A' />
        <label for='answerThreeA'>A drink made with espresso and milk foam only.</label>
        </div>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='B' />
        <label for='answerThreeB'>A drink made with espresso and whipped cream only.</label>
        </div>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='C' />
        <label for='answerThreeC'>A drink made with espresso and steamed milk.</label>
        </div>
        </li>
    </ol>
        <hr class="mb-0">
    <div class="row justify-content-center">
        <div class="col-2 m-2">
            <input class="btn-lg btn-dark justify-content-center" type='submit' value='Submit Quiz' />
        </div>
    </div>
     
    
</form>

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