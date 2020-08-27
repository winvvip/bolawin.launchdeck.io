<!doctype html>
<?php 
	include 'lib/hub.html';
	$fkw = $fkw4;
	$ufkw = $ufkw4;
	$title = $title4;
	$desc = $desc4;
	$key = $key4;
?>
<html ⚡ lang="id-ID">
<head>
	<?php include 'lib/hub.html';?>
	<?php include 'lib/head.html';?>
	<style amp-custom=""><?php include 'css/main.css';?><?php include 'css/custom.css';?></style>
</head>
<body>
	<?php include 'lib/sidenav.html';?>
	<main id="content" role="main">
	<figure class="ampstart-image-fullpage-hero m0 relative mb4">
		<amp-img width="404" height="720" alt="<?=$fkw?>" layout="responsive" src="/images/<?=$site?>-<?=$ufkw?>.jpg"></amp-img>
	</figure>
    <article class="<?=$site?>">		
        <h1><?=$title?></h1>
		<?php include 'content/4.html';?>		
	</article>
	</main>
	<?php include 'lib/footer.html';?>
</body>
</html>