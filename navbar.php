	<?php
	$pages = array(
		'index.php' => 'Home',
		'random.php' => 'JDC aléatoire',
		'send.php' => 'Envoyer votre JDC',
		'search.php' => 'Rechercher une JDC'
	);
	?>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">Les Joies du Code</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<?php
					foreach($pages as $page_url => $page_label) {
						$active = '';
						if ($page_url == $current_page) {
							$active = ' class="active"';
						}
					?>
					<li<?= $active ?>><a href="<?= $page_url ?>"><?= $page_label ?></a></li>
					<?php } ?>
				</ul>

				<form class="navbar-form navbar-right" action="search.php" method="GET">
					<div class="input-group">
						<input name="search" type="text" class="form-control" placeholder="Rechercher une JDC...">
						<span class="input-group-btn">
							<button class="btn btn-default" type="submit">
								<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
							</button>
						</span>
					</div>
				</form>

			</div><!--/.nav-collapse -->
		</div>
	</nav>