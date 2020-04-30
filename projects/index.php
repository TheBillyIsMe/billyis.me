<?php
$pageName = 'Projects';
include('../includes/header.php');
?>
<div class="projects-header">
	<img class="uk-border-circle" width="10%" height="10%" src="../assets/img/logo.png">
	<div>
		<h1 class="uk-heading-small">Projects</h1>
		<hr>
		<p>Projects I work on currently or in the past.</p>
	</div>
</div>
<div class="projects">
	<div class="uk-card uk-card-default uk-grid-collapse uk-margin-none" uk-grid>
		<div>
			<div class="uk-card-body">
				<div class="uk-card-badge uk-label">Founder & CEO</div>
				<h3 class="uk-card-title">Thiradus</h3>
				<p>Founded in 2015 by Billy, Thiradus is a United States Entertainment Company dedicated to providing best-in-class gaming services.</p>
			</div>
			<div class="uk-card-media-bottom">
				<a href="https://thiradus.com/" target="_blank">
					<img src="../assets/img/projects/thiradus.png" alt="Thiradus">
				</a>
			</div>
		</div>
	</div>
	<div class="uk-card uk-card-default uk-grid-collapse uk-margin-none" uk-grid>
		<div>
			<div class="uk-card-body">
				<div class="uk-card-badge uk-label">Company Director</div>
				<h3 class="uk-card-title">Prime Studios</h3>
				<p>Prime Studios is a freelance development group providing high quality Web Development, Web Design, and System Administration services.</p>
			</div>
			<div class="uk-card-media-bottom">
				<a href="https://primestudios.co/" target="_blank">
					<img src="../assets/img/projects/primestudios.png" alt="Prime Studios">
				</a>
			</div>
		</div>
	</div>
	<div class="uk-card uk-card-default uk-grid-collapse uk-margin-none" uk-grid>
		<div>
			<div class="uk-card-body">
				<div class="uk-card-badge uk-label">Community Manager</div>
				<h3 class="uk-card-title">Ryno Bot</h3>
				<p> Ryno is an all-purpose discord bot for games, moderating, music, and more!</p>
			</div>
			<div class="uk-card-media-bottom">
				<a href="https://rynobot.net/" target="_blank">
					<img src="../assets/img/projects/rynobot.png" alt="Ryno Bot">
				</a>
			</div>
		</div>
	</div>
</div>
<div class="projects-footer">
	<div class="bim-buttons uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-bottom">
		<a class="bim-projects uk-button uk-button-default" href="/">Home</a>
		<a class="bim-contact uk-button uk-button-default" href="/contact">Contact</a>
	</div>
</div>
<?php include('../includes/footer.php'); ?>
