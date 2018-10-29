<!DOCTYPE html>
<!-- Template by html.am -->
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Fixed Width 1 Green</title>
        <link rel="stylesheet" href="<?php echo base_url(); ?>/asserts/css/templetebase.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/asserts/css/all.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/asserts/css/bootstrap.min.css">
		<script type="text/javascript">
			/* =============================
			This script generates sample text for the body content. 
			You can remove this script and any reference to it. 
			 ============================= */
			var bodyText=["The smaller your reality, the more convinced you are that you know everything.", "If the facts don't fit the theory, change the facts.", "The past has no power over the present moment.", "This, too, will pass.", "</p><p>You will not be punished for your anger, you will be punished by your anger.", "Peace comes from within. Do not seek it without.", "<h2>Heading</h2><p>The most important moment of your life is now. The most important person in your life is the one you are with now, and the most important activity in your life is the one you are involved with now."]
			function generateText(sentenceCount){
				for (var i=0; i<sentenceCount; i++)
				document.write(bodyText[Math.floor(Math.random()*7)]+" ")
			}
		</script>
	</head>
	<body>
		<div id="page">
			<header id="header">
				<div id="header-inner">	
					<div id="logo">
						<h1><a href="<?php echo base_url(); ?>/index.php">Shuli<span>ExchangeStation</span></a></h1>
					</div>
                                                <div id="top-nav">
                                                        <ul>
                                                                <li><a href="#">About</a></li>
                                                                <li><a href="#">Contact</a></li>
                                                                <li><a href="#"><?php echo "testbutton" ?></a></li>
                                                                <?php if(!$this->session->userdata('logged_in')): ?>
                                                                    <li><a href="<?php echo base_url(); ?>index.php/management/create">Register</a></li>
                                                                    <li><a href="<?php echo base_url(); ?>index.php/management/login">Login</a></li>
                                                                <?php else: ?>
                                                                    <li><a href="<?php echo base_url(); ?>index.php/management/logout">Logout</a></li>
                                                                    <li><a href="<?php echo base_url(); ?>index.php/users/current"><?php echo $this->session->userdata('username'); ?></a></li>
                                                                <?php endif; ?>
                                                        </ul>
                                                </div>
					<div class="clr"></div>
				</div>
			</header>
			<div class="feature">
				<div class="feature-inner">
				<h1><?php echo $title; ?></h1>
				</div>
			</div>