	<?php
	include('oeuvres.php');
	if (isset($_GET['id']) && is_numeric($_GET['id'])) :
		$id = $_GET['id'];
		$oeuvre_cherchee = false;
		foreach ($oeuvres as $oeuvre) :
			if ($oeuvre['id'] == $id) :
				$oeuvre_cherchee = true;
	?>
				<!-- header -->
				<?php include('header.php'); ?>
				<article id="detail-oeuvre">
					<div id="img-oeuvre">
						<img src="<?php echo $oeuvres[$id]['img']; ?>" alt="<?php echo $oeuvres[$id]['nom'] ?>">
					</div>
					<div id="contenu-oeuvre">
						<h1><?php echo $oeuvres[$id]['nom'] ?></h1>
						<p class="description"><?php echo $oeuvres[$id]['artiste'] ?></p>
						<p class="description-complete">
							<?php echo $oeuvres[$id]['description'] ?>
						</p>
					</div>
				</article>
			<?php endif ?>
		<?php endforeach ?>
		<?php if (!$oeuvre_cherchee) : ?>
			<p>L'ID de l'oeuvre n'est pas valide</p>
		<?php endif ?>
	<?php else : ?>
		<p>Aucun ID d'oeuvre n'a été spécifié</p>
	<?php endif ?>
	<?php include('footer.php'); ?>