<?php require('includes/config.php'); 

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: login.php'); } 

//define page title
$title = 'Game 1';

//include header template
require('layout/header.php');
require('layout/nav.php'); 


//style="overflow: hidden" (line for disable scroll)
?>

<div class="container">
	<div class="row">
	    <div class="col-xs-12 col-md-12">
		    <section>
	            <div class="container text-center">
					<div class="memory-item" align="center">
						<div class="image-container z-depth-3">						
							<div class="imgcont">
								<div>
									<h3 id="level" class="red-text text-darken-3" >Level 1<span id="levelid"></span></h3>
								</div>

								<div id="start" class="start-title center-align">
									<h3 id="startitle" class="red-text text-darken-3">Memorize the name of each face</h3>
								</div>

								<div id="end" class="end-title center-align" style="display:none">
									<a href="game1_play.php" id="start-button" class="btn btn-game side-padding">Start the Game !</a>
								</div>

								<img id="image" class="image-responsive imgartifact">
							</div>
						</div>

						<div class="textcont">
							<h5 id="text" class="text-area" style="display:none">My name is <span id="name"></span></h5>
						</div>

						<div class="navigation">
							<div class="pull-left">
								<a id="previous" style="display:none" class="btn btn-game side-padding">Previous</a>
							</div>
							<div class="pull-right">
								<a id="next" class="btn btn-game side-padding">Next</a>
							</div>
						</div>
	           		</div>
		            
	            </div>
		    </section>
		</div>
	</div>
</div>	

<footer>
	<div class="container footer-wrap">
		<div class="pull-right">ICT 2017</div>
	</div>
</footer>
<script src="js/jquery-3.2.1.js"></script>
<script src="js/materialize.js"></script>
<script src="js/main.js"></script>
<script>
	loadFaces("/game/data/quizData.json",level) ;
</script>
</body>
</html>