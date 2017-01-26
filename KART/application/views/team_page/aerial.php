<title><?php echo $title;?></title>

	<body class="loading">
		<div id="wrapper">
			<div id="bg"></div>
			<div id="overlay"></div>
			<div id="main">

				<!-- Header -->
			<section id="header" class="dark"> 
				<header id="header">
						<h1>KHARISMA - ART</h1>
						<p>Creativity &nbsp;&bull;&nbsp; Imagination &nbsp;&bull;&nbsp; Colors</p>
						<nav>
							<ul>
								<li><a class="icon fa-eraser"></a></li>
								<li><a class="icon fa-image"></a></li>
								<li><a class="icon fa-star"></a></li>
								<li><a class="icon fa-envelope-o"></a></li>
							</ul>
						</nav>
					</header>
				<footer>
					<a href="<?= base_url('login/aksi_login3'); ?>" class="button scrolly">WELCOME</a>

			
              <!-- Button to open the modal login admin form -->
              <a onclick="document.getElementById('id01').style.display='block'" class="button scrolly">ADMIN</a>

              <!-- The Modal -->
              <div id="id01" class="modal">

              <!-- Modal Content -->
              <form class="modal-content animate" method="post" action="<?php echo base_url('login/aksi_login'); ?>">
                <div class="img">
                	<span class="icon fa-user-o fa-5x"></span>
                </div>
                <div class="container">
                  <div class="asd">
                  <label><b>Username</b></label>
                  <input type="text" class="form-control" placeholder="Username" name="username" required data-validation-required-message="Please enter your username.">


                  <br>
                  <label><b>Password</b></label>
                  <input type="password" class="form-control" placeholder="Password" name="password" required data-validation-required-message="Please enter your password.">
                  </div>

                <div class="container">
                  <button type="submit" class="button">Login</button>
                  <button type="button" onclick="document.getElementById('id01').style.display='none'" class="button scrolly">Cancel</button>
                  <br>
                  <span class="psw"><a href="<?php echo base_url('login/aksi_login2'); ?>"> Low Admin?</a></span>
                </div>
              </form>
            </div>




				</li>
				</footer>
			</section>

				<!-- Footer -->
					<footer id="footer">
						<span class="copyright">&copy; Untitled. Design: <a href="http://html5up.net" target="_blank">HTML5 UP</a>.</span>
					</footer>

			</div>
		</div>
		<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
		<script>
			window.onload = function() { document.body.className = ''; }
			window.ontouchmove = function() { return false; }
			window.onorientationchange = function() { document.body.scrollTop = 0; }
		</script>
		<script src="assets/js/loginform.js"></script>
	</body>
</html>
