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
										<h3 id="level" class="red-text text-darken-3">Level <span id="levelid"></span></h3>
									</div>

									<div id="start" class="start-title center-align">
										<h3 id="startitle" class="red-text text-darken-3">When you feel ready press next to start the time !!</h3>
									</div>

									<div id="end" class="end-title center-align" style="display:none">
										<button id="start-button" class="btn btn-game side-padding">Go to Next Level !</button>
									</div>

									<img id="image" class="image-responsive imgartifact">
								</div>
							</div>

							<div class="namefillarea">
								<input id="text" type="text" style="display:none">
								
								<h3 id="hints" class="red-text text-darken-3" style="display:none">Hints Used: <span id="hintsused">0</span></h3>	
								
								<div align="center">
									<h3 class="red-text text-darken-3">Time: <span id="seconds">0</span></h3>
								</div>

							</div>

							<div class="navigation">
								<div class="pull-left">
									<a id="hint-button" style="display:none" class="btn btn-game side-padding">Hint !</a>
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
		<script src="js/jquery-3.2.1.js"></script>
		<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
		<script src="js/materialize.js"></script>
		<script src="js/main.js"></script>
		<script>
			startGame("/game/data/quizData.json", 1);

		</script>
	</footer>
</body>

</html>