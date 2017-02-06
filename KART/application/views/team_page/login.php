<head>
	<title><?= $title;?></title>
    <link href="<?= base_url()?>assets/css/login.css" rel="stylesheet">
</head><!--/head-->

<body>
	<section id="loginBox">
			<a class="navbar-brand" href="<?= base_url()?>home">
                <h1 class="logo"><img src="<?= base_url()?>assets/images/kart.jpg" alt="logo">LOGIN</h1>
            </a>
            <div id="signup">
	            <label for="signup">
					No account? SIGN UP now!
				</label>
					<a href="<?= base_url()?>usr/signup"><button class="btn btn-lg btn-common">SIGN UP</button></a>
            </div>
		<div class="container">
		<?php
        switch( $status ){
            case 1:
	            echo "<div class='alert alert-danger' role='alert'>
	            <span class='fa fa-exclamation-triangle fa-2x' aria-hidden='true'></span>
	           Login Gagal:<hr>
	            Username tidak dikenali atau salah tulis
	            </div>";
            break;
            case 2:
	            echo "<div class='alert alert-danger' role='alert'>
	            <span class='fa fa-exclamation-triangle fa-2x' aria-hidden='true'></span>
	           Login Gagal:<hr>
	            Password tidak sesuai
	            </div>";
            break;
        }
        ?>
			<form action="<?= base_url()?>usr/dologin" method="post" class="minimal">
				<label for="username">
					Username:
					<input type="text" name="username" id="username" maxlength="20" placeholder="Username (9 - 20 karakter)" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{8,20}$" required="required" title="Info: MIN 9 Characters, NUMBERS can't be up-front, and not allowed for NUMBERS only" />
				</label>
				<label for="password">
					Password:
					<input type="password" name="password" id="password" maxlength="255" placeholder="Password (1 UPPERCASE, lowercase and number)" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" />
				</label>
				<button type="submit" class="btn btn-lg btn-block btn-common">LOGIN</button>
			</form>
		</div>
	</section>
</body>
