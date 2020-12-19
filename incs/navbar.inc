<nav class="navbar navbar-expand-md navbar-light bg-greenyellow" >
		<div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2" id="navBarAlt">
			<ul class="navbar-nav mr-auto">
				
				<?php 
				$currLoc = basename($_SERVER['PHP_SELF']);
				?>
				<li <?php echo ($currLoc == "projects.php")? "class = 'nav-item active'": "class = 'nav-item'"?>>
					<a <?php echo ($currLoc == "projects.php")? "class = 'nav-item nav-link active'": "class = 'nav-item nav-link'"?> href="projects.php">Projects</span></a>
				</li>
				<li <?php echo ($currLoc == "about.php")? "class = 'nav-item active'": "class = 'nav-item'"?>>
					<a <?php echo ($currLoc == "about.php")? "class = 'nav-item nav-link active'": "class = 'nav-item nav-link'"?> href="about.php">About</a>
				</li>
				<li <?php echo ($currLoc == "designs.php")? "class = 'nav-item active'": "class = 'nav-item'"?>>
					<a <?php echo ($currLoc == "designs.php")? "class = 'nav-item nav-link active'": "class = 'nav-item nav-link'"?> href="designs.php">Designs</a>
				</li>
			</ul>
		</div>
		<div class="mx-auto order-0">
			<a class="navbar-brand font-weight-bold index-font" href="index.php">San Justin </a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navBarAlt" aria-controls="navBarAlt" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		</div>

		<div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link fas fa-adjust" href="#"></a>
				</li>
			</ul>
		</div>
	</nav>