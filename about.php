<?php
/*
 * File name:   about.php
 * Author   :   Justin San
 * Desc		:	About me page
 ? -=-=-=-=-=-=-=-=-=-=-=-=
 * Created  :   19/12/2020
 * Updated  :   19/12/2020
*/
?>

<?php
include('./incs/header.inc');
include('./incs/navbar.inc');
include('./settings/functions.php');

?>
<div class="jumbotron jumbotron-fluid bg-yellowgreen">
		<div class="container">
			<h1 class="display-4">About Me</h1>
			<p class="lead">
				Hi there👋, I'm Justin the developer of this very website you've decided to visit. Yay🥳! I've been
				working
				on web development for quite sometime now <em>(Around four years to be exact. Minus two years focusing
					on
					<a href="https://www.vcaa.vic.edu.au/curriculum/vce/Pages/Index.aspx">VCE</a>. Yay
					Highschool...)</em>.
				I'm now studying Computer Science at Swinburne, majoring in Software Design and Software Development.
				Now I'm on my second year of Uni, <em>Whoop whoop only few more years until I graduate</em>🥳.
			</p>
			<p class="lead">I've successfully completed the following units</p>
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div id="accordion1">
							<div class="card">
							  <div class="card-header bg-greenyellow" id="Semester1">
								<h5 class="mb-0">
								  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									Semester 1
								  </button>
								</h5>
							  </div>
						  
							  <div id="collapseOne" class="collapse bg-yellowgreen" aria-labelledby="Semester1" data-parent="#accordion1">
								<div class="card-body">
									<ul class=" list-group list-group-flush">
										<li class="list-group-item bg-yellowgreen"><strong>-TNE10006</strong> Networks and Switching</li>
										<li class="list-group-item bg-yellowgreen"><strong>-COS10003</strong> Computer & Logic Essentials</li>
										<li class="list-group-item bg-yellowgreen"><strong>-COS10009</strong> Introduction to Programming</li>
										<li class="list-group-item bg-yellowgreen"><strong>-COS10011</strong> Creating Web Applications</li>
									</ul>
								</div>
							  </div>
							</div>
						</div>
					</div>
					<br>
					<div class="col-sm-6">
						<div id="accordion2">
							<div class="card">
							  <div class="card-header bg-greenyellow" id="Semester2">
								<h5 class="mb-0">
								  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									Semester 2
								  </button>
								</h5>
							  </div>
							  <div id="collapseTwo" class="collapse bg-yellowgreen" aria-labelledby="Semester2" data-parent="#accordion2">
								<div class="card-body">
									<ul class=" list-group list-group-flush">
										<li class="list-group-item bg-yellowgreen"><strong>-COS20001</strong> User-Centred Design</li>
										<li class="list-group-item bg-yellowgreen"><strong>-COS20007</strong> Object Oriented Programming</li>
										<li class="list-group-item bg-yellowgreen"><strong>-COS20015</strong> Fundamentals of Data Management</li>
										<li class="list-group-item bg-yellowgreen"><strong>-COS30020</strong> Web Application Development</li>
									</ul>
								</div>
							  </div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<br>
			<p class="lead">And I'm currently taking the following units to further my knowledge</p>
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div id="accordion3">
							<div class="card">
							  <div class="card-header bg-greenyellow" id="Semester3">
								<h5 class="mb-0">
								  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									Semester 3
								  </button>
								</h5>
							  </div>
							  <div id="collapseThree" class="collapse bg-yellowgreen" aria-labelledby="Semester3" data-parent="#accordion3">
								<div class="card-body">
									<ul class=" list-group list-group-flush">
										<li class="list-group-item bg-yellowgreen"><strong>-COS20019</strong> Cloud Computing Architecture</li>
										<li class="list-group-item bg-yellowgreen"><strong>-COS30008</strong> Data Structures and Patterns</li>
										<li class="list-group-item bg-yellowgreen"><strong>-COS30011</strong> IoT Programming</li>
										<li class="list-group-item bg-yellowgreen"><strong>-COS30019</strong> Introduction to Artificial Intelligence</li>
									</ul>
								</div>
							  </div>
							</div>
						</div>
					</div>
					<br>
					<div class="col-sm-6">
						<div id="accordion4">
							<div class="card">
							  <div class="card-header bg-greenyellow" id="Semester4">
								<h5 class="mb-0">
								  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
									Semester 4
								  </button>
								</h5>
							  </div>
							  <div id="collapseFour" class="collapse bg-yellowgreen" aria-labelledby="Semester4" data-parent="#accordion4">
								<div class="card-body">
									<ul class=" list-group list-group-flush">
										<li class="list-group-item bg-yellowgreen"><strong>-COS30017</strong> Software Development for Mobile Devices</li>
										<li class="list-group-item bg-yellowgreen"><strong>-SWE20001</strong> Managing Software Projects</li>
										<li class="list-group-item bg-yellowgreen"><strong>-SWE30009</strong> Software Testing and Reliability</li>
									</ul>
								</div>
							  </div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<br>
			<p class="lead">I've knowledge on the following languages and tools</p>
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div id="accordion5">
							<div class="card">
							  <div class="card-header bg-greenyellow" id="language">
								<h5 class="mb-0">
								  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
									Languages
								  </button>
								</h5>
							  </div>
							  <div id="collapseFive" class="collapse bg-yellowgreen" aria-labelledby="language" data-parent="#accordion5">
								<div class="card-body">
									<ul class=" list-group list-group-flush">
										<li class="list-group-item bg-yellowgreen"><strong>-HTML</strong></li>
										<li class="list-group-item bg-yellowgreen"><strong>-CSS</strong></li>
										<li class="list-group-item bg-yellowgreen"><strong>-Javascript</strong></li>
										<li class="list-group-item bg-yellowgreen"><strong>-PHP</strong></li>
										<li class="list-group-item bg-yellowgreen"><strong>-C#</strong></li>
										<li class="list-group-item bg-yellowgreen"><strong>-Ruby</strong></li>
										<li class="list-group-item bg-yellowgreen"><strong>-MySQL</strong></li>
									</ul>
								</div>
							  </div>
							</div>
						</div>
					</div>
					<br>
					<div class="col-sm-6">
						<div id="accordion6">
							<div class="card">
							  <div class="card-header bg-greenyellow" id="Tools">
								<h5 class="mb-0">
								  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
									Tools
								  </button>
								</h5>
							  </div>
							  <div id="collapseSix" class="collapse bg-yellowgreen" aria-labelledby="Tools" data-parent="#accordion6">
								<div class="card-body">
									<ul class=" list-group list-group-flush">
										<li class="list-group-item bg-yellowgreen"><strong>-Visual Studio Code</strong></li>
										<li class="list-group-item bg-yellowgreen"><strong>-PHP My Admin</strong></li>
										<li class="list-group-item bg-yellowgreen"><strong>-Adoble Photoshop</strong></li>
										<li class="list-group-item bg-yellowgreen"><strong>-Adobe XD</strong></li>
										<li class="list-group-item bg-yellowgreen"><strong>-Adoble Illustrator</strong></li>
									</ul>
								</div>
							  </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php include('./incs/footer.inc'); ?>