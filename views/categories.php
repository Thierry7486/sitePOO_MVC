<div class="row">
	<div class="col-12">
		<h1 class="text-center">Categories</h1>
	</div>
	<?php foreach ($categories as $categorie) : ?>
		<div class="col-12 col-sm-6  my-3">
			<div class="card" >
				
				<div class="card-body">
					<h5 class="card-title"><?= $categorie->name ?></h5>
					<p class="card-text"><?= $categorie->description ?></p>
					<p class="card-text"><small><?= $categorie->date ?></small></p>
					<a href="<?= $categorie->url ?>" class="btn btn-primary">View <?= $categorie->name ?></a>
				</div>
			</div>
		</div>
	<?php endforeach ?>
</div>
