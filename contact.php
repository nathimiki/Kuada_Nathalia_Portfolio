<?php
	//var_dump($_GET);

	$fields = array(
	'first-name'=>array(
		'type'=>'text',
		'label'=>'First Name'
        ),
    'last-name'=>array(
        'type'=>'text',
        'label'=>'Last Name'
        ),
	'email'=>array(
		'type'=>'email',
		'label'=>'Email'
		),
	'subject'=>array(
		'type'=>'text',
		'label'=>'Subject'
		),
	'message'=>array(
		'type'=>'textarea',
		'label'=>'Message'
		),
	);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/glightbox.css" rel="stylesheet">
    <link href="css/foundation.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.css">
    <link href="css/main.css" rel="stylesheet">
    <title>Nathalia Miki Portfolio</title>
</head>
<body>

    <header class="header">
        <a href="index.html"><img src="images/logo.png" alt="logo" id="logo"></a> 
        <a id="menu-trigger" class="menu-trigger">
            <span class="menu-trigger-icon"></span>
        </a>
        <nav class="header-nav">
            <a class="header-nav-close" title="close"><span>Close</span></a>
            <div class="header-nav-content">
                <ul class="header-nav-items">
                    <li><a class="menu-text" href="index.html">home</a></li>
                    <li><a class="menu-text" href="about.html">about</a></li>
                    <li><a class="menu-text" href="index.html#portfolio">work</a></li>
                    <li><a class="menu-text" href="contact.php">contact</a></li>
                </ul>
            </div>
        </nav>
    </header>

<section class="row" id="formTitle">
	<div class="small-10 small-offset-1 medium-10 medium-offset-1 large-6 large-offset-2 columns" id="formT">
		<h1>Let's get in touch</h1>
	</div>
</section>

<section class="row" id ="formContainer">

	<div class="small-10 small-offset-1 medium-10 medium-offset-1 large-8 large-offset-2 columns" id="contactForm">

    <?php if(isset($_GET['status']) && $_GET['status']==='error'):?>
	<div class="alert alert-danger" role="alert">The form is missing some required fields!</div>
	<?php endif;?>

	<?php if(isset($_GET['status']) && $_GET['status']==='successful'):?>
	<div class="alert alert-success" role="alert">The form submitted succesfully!</div>
	<?php endif;?>

        <form action="/includes/sendEmail.php" method="POST">
        <?php foreach($fields as $field_name => $field_config):?>
            <?php if($field_config['type'] === 'textarea'):?>
                <label for="<?php echo $field_name;?>"><?php echo $field_config['label'];?></label>
                <textarea id="<?php echo $field_name;?>" placeholder="<?php echo $field_name;?>" name="<?php echo $field_name;?>"></textarea><br>
            <?php else:?>
                <label for="<?php echo $field_name;?>"><?php echo $field_config['label'];?></label>
                <input id="<?php echo $field_name;?>" placeholder="<?php echo $field_name;?>" type="<?php echo $field_config['type'];?>" name="<?php echo $field_name;?>"><br>
            <?php endif;?>
        <?php endforeach;?>
            <button type="submit" id="contactButton"><span>Submit</span></button>
        </form> 

	</div>

</section>

<section class="row getInTouchBox">
    <div class="small-12 medium-12 large-12 columns js-animation">
        <h1>Let’s break the limits of creativite and build something beautiful and breath taking!</h1>
        <a href="index.html"><img src="images/logo.png" alt="logo" id="logoFooter"></a>       
    </div>
</section>

<footer>
    <section class="row getInTouchBox">
    <div class="small-12 medium-12 large-12 columns footer">
        <div id="line"></div>
        <div class="logos">
            <a href="https://www.facebook.com/nathi.miki"><img src="images/face.png" alt="face" class="social"></a>
            <a href="https://github.com/nathimiki"><img src="images/git.png" alt="git" class="social"></a>
            <a href="https://www.instagram.com/nathimiki/"><img src="images/insta.png" alt="insta" class="social"></a>
        </div>
        <div class="back-top">
            <a class="smoothscroll" aria-label="Back to Top" href="#top"><span class="icon">top</span></a>
        </div>
    </div>
    </section>
    </footer>

    <script src="js/wow.min.js"></script>
    <script src="js/three.r92.min.js"></script>
    <script src="js/vanta.net.min.js"></script>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
    <script src="js/background.js"></script>  
    <script src="js/lightbox.js"></script>
    <script src="js/script.js"></script>
</body>
</html>