<head>
	<title><?= $title;?></title>
    <link href="<?= base_url()?>assets/css/login.css" rel="stylesheet">
</head><!--/head-->

<body>
	<section id="loginBox">
			<a class="navbar-brand" href="<?= base_url()?>home">
                <h1 class="logo"><img src="<?= base_url()?>assets/images/kart.jpg" alt="logo">SIGN UP</h1>
            </a>
            <div id="signup">
	            <label for="signup">
					Already have one?
					<a href="<?= base_url()?>usr/login"><button class="btn btn-lg btn-common">LOGIN</button></a>
				</label>
            </div>
		<div class="container">
        <?php if($this->session->flashdata('msg')): ?>
        	<div class="alert alert-success" role="alert" align="center">
               <?=$this->session->flashdata('msg')?>
            </div>
        <?php endif; ?>
			<form action="<?= base_url()?>usr/register" method="post" class="minimal">
				<label for="nim">
					NIM:
					<input type="text" name="nim" id="nimsignup" placeholder="NIM (8 angka)" maxlength="8" pattern="\d{8}" required="required" title="8 Digit Angka NIM" />
				<p id="warning_nim"></p>
				</label>
				<label for="username">
					Username:
					<input type="text" name="username" id="username" maxlength="20" placeholder="Username (9 - 20 karakter)" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{8,20}$" required="required" title="Info: MIN 9 Characters, NUMBERS can't be up-front, and not allowed for NUMBERS only" />
				</label>
				<label for="password">
					Password:
					<input type="password" name="password" id="password" maxlength="255" placeholder="Password (1 UPPERCASE, lowercase and number)" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" />
				</label>
				<button type="submit" class="btn btn-lg btn-block btn-common">REGISTER</button>
			</form>
		</div>
	</section>
</body>
