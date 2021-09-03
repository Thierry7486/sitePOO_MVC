<div class="row">
	<div class="col-12">
		<h1 class="text-center">Home</h1>
	</div>
	<?php foreach ($posts as $post) : ?>
		<div class="col-12 col-sm-6 col-md-4 my-3">
			<div class="card" id="post<?= $post->id ?>">
				<img src="<?= "./images/".$post->img ?>" alt="Images">
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