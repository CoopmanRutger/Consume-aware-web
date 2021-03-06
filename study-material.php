<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>Study Module Consumee - Consume Aware</title>

	<!-- reset -->
	<link rel="stylesheet" href="/assets/css/reset.css" />
	<link rel="stylesheet" href="/assets/css/screen.css" />

	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
</head>

<body>
	<header>
		<nav class="cyan">
			<div class="nav-wrapper px-4">
				<a href="/" class="brand-logo">
					<img src="/assets/images/Consu mee-03.png" height="60" alt="logo" />
				</a>
				<a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i>
				</a>
				<ul class="right hide-on-med-and-down">
					<li><a href="/index.html">Home</a></li>
					<li><a href="/project/">Project</a></li>
					<li><a href="/study-material.html">Study material</a></li>
					<li><a href="/conference.html">Conference</a></li>
					<li><a href="/about-us/">About us</a></li>
					<li><a href="/contact.html">Contact</a></li>
				</ul>
			</div>
		</nav>

		<ul class="sidenav" id="mobile-demo">
			<li><a href="/index.html">Home</a></li>
			<li><a href="/project/">Project</a></li>
			<li><a href="/study-material.html">Study material</a></li>
			<li><a href="/confernce.html">Confernce</a></li>
			<li><a href="/about-us/">About us</a></li>
			<li><a href="/contact.html">Contact</a></li>
		</ul>
	</header>
	<main class="container">
		<h1 class="center-align">Study material</h1>
		<div class="divider"></div>
		<br>
		<div class="section row center-align">
			<button id="teacher" class="waves-effect waves-teal cyan btn-large">Teacher</button>
			<button id="student" class="waves-effect waves-teal cyan btn-large">Student</button>
		</div>

		<div id="teacherSub" class="hide row center-align">
			<button id="instruction" class="waves-effect waves-teal btn-large">instruction</button>
			<button id="book" class="waves-effect waves-teal  btn-large">Book</button>
			<button id="app" class="waves-effect waves-teal  btn-large">App</button>

			<div id="bookSub" class="hide row center-align">
				<button id="part1" class="waves-effect waves-teal  btn-large">part1</button>
				<button id="part2" class="waves-effect waves-teal  btn-large">part2</button>
				<button id="part3" class="waves-effect waves-teal  btn-large">part3</button>

				<div id="part1Sub" class="hide row center-align">
					<button id="chapter1" class="waves-effect waves-teal  btn-large">chapter1</button>
					<button id="chapter2" class="waves-effect waves-teal  btn-large">chapter2</button>
					<button id="chapter3" class="waves-effect waves-teal  btn-large">chapter3</button>

					<div id="chapter1Sub" class="hide center-align">
						<p>1</p>
						<a href="">Presentation</a>
						<a href="">E-book</a>
						<a href="">Interactive</a>
					</div>
					<div id="chapter2Sub" class="hide center-align">
						<p>2</p>
						<a href="">Presentation</a>
						<a href="">E-book</a>
						<a href="">Interactive</a>
					</div>
					<div id="chapter3Sub" class="hide center-align">
						<p>3</p>
						<a href="">Presentation</a>
						<a href="">E-book</a>
						<a href="">Interactive</a>
					</div>
				</div>

				<div id="part2Sub" class="hide row center-align">
					<button id="chapter4" class="waves-effect waves-teal btn-large">chapter4</button>
					<button id="chapter5" class="waves-effect waves-teal btn-large">chapter5</button>
					<button id="chapter6" class="waves-effect waves-teal btn-large">chapter6</button>

					<div id="chapter4Sub" class="hide center-align">
						<p>4</p>
						<a href="">Presentation</a>
						<a href="">E-book</a>
						<a href="">Interactive</a>
					</div>
					<div id="chapter5Sub" class="hide center-align">
						<p>5</p>
						<a href="">Presentation</a>
						<a href="">E-book</a>
						<a href="">Interactive</a>
					</div>
					<div id="chapter6Sub" class="hide center-align">
						<p>6</p>
						<a href="">Presentation</a>
						<a href="">E-book</a>
						<a href="">Interactive</a>
					</div>
				</div>
				<div id="part3Sub" class="hide row center-align">
					<button id="chapter7" class="waves-effect waves-teal btn-large">chapter7</button>
					<button id="chapter8" class="waves-effect waves-teal btn-large">chapter8</button>
					<button id="chapter9" class="waves-effect waves-teal btn-large">chapter9</button>
					<button id="chapter10" class="waves-effect waves-teal btn-large">chapter10</button>
					<button id="chapter11" class="waves-effect waves-teal btn-large">chapter11</button>

					<div id="chapter7Sub" class="hide center-align">
						<p>7</p>
						<a href="">Presentation</a>
						<a href="">E-book</a>
						<a href="">Interactive</a>
					</div>
					<div id="chapter8Sub" class="hide center-align">
						<p>8</p>
						<a href="">Presentation</a>
						<a href="">E-book</a>
						<a href="">Interactive</a>
					</div>
					<div id="chapter9Sub" class="hide center-align">
						<p>9</p>
						<a href="">Presentation</a>
						<a href="">E-book</a>
						<a href="">Interactive</a>
					</div>
					<div id="chapter10Sub" class="hide center-align">
						<p>10</p>
						<a href="">Presentation</a>
						<a href="">E-book</a>
						<a href="">Interactive</a>
					</div>
					<div id="chapter11Sub" class="hide center-align">
						<p>11</p>
						<a href="">Presentation</a>
						<a href="">E-book</a>
						<a href="">Interactive</a>
					</div>
				</div>
			</div>
		</div>




		<div id="modal" class="modal">
			<div class="modal-content">
				<form action="" method="post">
					<div class="row">
						<div class="input-field col s11">
							<label for="login"><i class="material-icons">person</i> Username</label>
							<input id="login" type="text" class="validate">
						</div>
					</div>
					<div class="row">
						<div class="input-field col s11">
							<label for="password"><i class="material-icons">lock</i> Password</label>
							<input id="password" type="password" class="validate">
						</div>
					</div>
					<div class="row">
						<div class="input-field col offset-l2">
							<button class="cyan btn-flat"> <i class="material-icons right">send</i> Login</button>

						</div>
					</div>

				</form>
			</div>
			<div class="modal-footer">
				<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat"></a>
			</div>
		</div>
	</main>
	<footer class="page-footer cyan">
		<div class="container">
			<div class="row">
				<div class="col l6 s12">
					<h5 class="white-text">Footer Content</h5>
					<p class="grey-text text-lighten-4">
						You can use rows and columns here to organize your
						footer content.
					</p>
				</div>
				<div class="col l4 offset-l2 s12">
					<h5 class="white-text">Links</h5>
					<ul>
						<li>
							<a class="grey-text text-lighten-3" href="#!">Link 1</a>
						</li>
						<li>
							<a class="grey-text text-lighten-3" href="#!">Link 2</a>
						</li>
						<li>
							<a class="grey-text text-lighten-3" href="#!">Link 3</a>
						</li>
						<li>
							<a class="grey-text text-lighten-3" href="#!">Link 4</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="footer-copyright">
			<div class="container">
				Copyright © 2019 Consume Aware All
				<a class="grey-text text-lighten-4 right" href="#!">More Links</a>
			</div>
		</div>
	</footer>

	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script src="/assets/js/script.js"></script>
	<script src="/assets/js/study-material.js"></script>
</body>

</html>