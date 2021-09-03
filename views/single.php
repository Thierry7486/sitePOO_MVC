<h1>Single</h1>

<div class="card text-center">
	<div class="card-header">
		Détail de l'article <h2><?= $posts[0]->title ?></h2>
	</div>
	<div class="d-flex justify-content-center">

		<img src="./images/<?= $posts[0]->img ?>" class="card-img-top w-75 " alt="photo de <?= $posts[0]->title ?>">
	</div>
	<div class="card-body">
		<h5 class="card-title"><?= $posts[0]->title ?></h5>
		<p class="card-text"><?= $posts[0]->text ?></p>
		<a href="?p=home#post<?= $posts[0]->id ?>" class="btn btn-primary">Go back</a>
	</div>
	<div class="card-footer text-muted">
		<?= $posts[0]->date ?>
	</div>
</div>