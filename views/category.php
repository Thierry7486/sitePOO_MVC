<div class="row text-center">
	<h1><?= $category[0]->name ?></h1>
	<div class="col-12">
		<p class="card-text"><?= $category[0]->description ?></p>
	</div>
	<div class="col-12 mt-4">
		<a href="?p=categories" class="btn btn-primary">Go back</a>
	</div>
</div>
<div class="row">

	<?php foreach ($posts as $post) : ?>
		<div class="col-12 col-sm-6 col-md-4 my-3">
			<div class="card" id="post<?= $post->id ?>">
				<img src="<?= "./images/" . $post->img ?>" alt="Images">
				<div class="card-body">
					<h5 class="card-title"><?= $post->title ?> - <?= $post->category ?></h5>
					<p class="card-text"><?= $post->excerpt ?></p>
					<p class="card-text"><?= $post->date ?></p>
					<a href="<?= $post->url ?>" class="btn btn-primary">Read More</a>
				</div>
			</div>
		</div>
	<?php endforeach ?>
</div>