<?php require_once('../config.php'); ?>
<?php require_once('header_admin.php'); ?>

<section id="page_container">
	<section id="head">
		<section id="head-left"><h1>Logga in</h1></section>
		<section id="head-right"></section>
	</section>	
	<section id="center_column">
		<form action="signin.php"  method="post" >
			<a>Användarnamn:<input type="text" name="username" value=""></a></br>
			<a>Lösenord:<input type="password" name="password" value=""></a></br>
			<input type="submit" class="btn" value="Logga in"> 
		</form>
		<p><a href="/index.php">&laquo; Tillbaka</a></p>
	</section>
	<?php require_once('footer_admin.php'); ?>
</section>