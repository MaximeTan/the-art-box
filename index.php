 <?php include('oeuvres.php'); ?>
 	<!-- header -->
 	<?php include('header.php'); ?>
 	<!--  -->
 		<div id="liste-oeuvres">
 			<?php foreach ($oeuvres as $oeuvre) : ?>
 				<article class="oeuvre">
 					<a href="oeuvre.php?id=<?= $oeuvre['id'] ?>">
 						<img src="<?php echo $oeuvre['img'] ?>" alt="">
 						<h2> <?php echo $oeuvre['nom'] ?></h2>
 						<p class="description"><?php echo $oeuvre['artiste'] ?> </p>
 					</a>
 				</article>
 			<?php endforeach; ?>
 		</div>
 	<!--  -->
 	<?php include('footer.php'); ?>
 	<!--  -->