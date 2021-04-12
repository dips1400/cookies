<?php
if(isset($_GET['accept-cookies'])){}
    setcookie('accept-cookies', 'true' , time() + 31556925);
    header('Location : ./');
?>

<!DOCTYPE html>
<html>
<head>
<title>A demonstration</title>
<link rel="stylesheet" href="style.css" />
</head>
<body>


<?php
if(!isset($_COOKIE['accept-cookies'])){
?>

<div class="cookie-banner">
<div class="container">
<p>We use cookies for this website. By using this we will assume you consent to <a href="/cookies">the cookies we set</a></p>
<a href="?accept-cookies" class="button">I accept cookie</a>
</div>
</div>

<?php
}
?>

<p>Hello User WELCOME TO JOOMLA! </p>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="cookiejs.js"></script>


</body>
</html>