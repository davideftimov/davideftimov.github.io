<!DOCTYPE html>
<html lang="en">
<head>

<?php $page = 'quiz'; include 'includes/head.php'; ?>

</head>
<body>
    <div class="allButFooter">
    <?php include 'includes/navbar.php'; ?>
    
    <div class="container mt-5 quiz">

<?php
	$answer1= $_POST['answerOne'];
	$answer2= $_POST['answerTwo'];
	$answer3= $_POST['answerThree'];
	$score = 0;
	
	if ($answer1 == "A"){$score++;}
	if ($answer2 == "B"){$score++;}
	if ($answer3 == "C"){$score++;}
	echo "<center><font face='Berlin Sans FB' size='8'>Your Score is <br> $score/3</font></center>";
	
?>

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