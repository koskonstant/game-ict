<?php require('includes/config.php'); 

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: login.php'); } 

//define page title
$title = 'Home';

//include header template
require('layout/header.php');
require('layout/nav.php'); 
?>

<div class="container">

	<div class="row">

	    <div class="col-xs-12 col-md-12">
			<section>
		        <div class="overlay">
		            <div class="container text-center">
		                <div class="editContent">
		                    <h2>Memory Fun</h2>		                    
		                </div>
		                <div class="editContent">
		                    <h1>From start to finish, step by step</h1>
		                </div>
		                <div class="grid">
							<figure class="effect-oscar">
								<img src="images/11.jpg" alt="img09"/>
								<figcaption>
									<h2>Memory Game 1</h2>
									<p>Oscar is a decent man. He used to clean porches with pleasure.</p>
									<a href="game1-intro.php">Lets' Play</a>
								</figcaption>			
							</figure>
							<figure class="effect-oscar">
								<img src="images/10.jpg" alt="img10"/>
								<figcaption>
									<h2>Memory Game 2</h2>
									<p>Flip the tiles and try to match them up in pairs.</p>
									<a href="game2.php">Lets' Play</a>
								</figcaption>			
							</figure>
						</div>		                
		            </div>
		        </div>
		    </section>
		</div>
	</div>
</div>

<?php 
//include header template
require('layout/footer.php'); 
?>
