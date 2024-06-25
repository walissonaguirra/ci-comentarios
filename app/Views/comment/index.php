<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="container p-2 mb-6" style="max-width: 568px">
	<!-- Hero -->
	<section class="hero">
		<div class="hero-body">
			<h1 class="title">CI Comentários</h1>
		</div>
	</section>

	<!-- Comentarios -->
	<article class="media">
		<figure class="media-left">
			<p class="image is-32x32">
				<img src="https://gravatar.com/avatar/<?= md5(random_bytes(1)) ?>?s=32&d=retro&r=x" />
			</p>
		</figure>
		<div class="media-content">
			<div class="content">
				<p>
					<strong>Barbara Middleton</strong>
					<br />
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis porta eros
					lacus, nec ultricies elit blandit non. Suspendisse pellentesque mauris
					sit amet dolor blandit rutrum. Nunc in tempus turpis.
					<br />
					<small><a>Curtir</a> • <a>Responder</a> • 3 hrs</small>
				</p>
			</div>

			<article class="media">
				<figure class="media-left">
					<p class="image is-32x32">
						<img src="https://gravatar.com/avatar/<?= md5(random_bytes(1)) ?>?s=32&d=retro&r=x" />
					</p>
				</figure>
				<div class="media-content">
					<div class="content">
						<p>
							<strong>Sean Brown</strong>
							<br />
							Donec sollicitudin urna eget eros malesuada sagittis. Pellentesque
							habitant morbi tristique senectus et netus et malesuada fames ac
							turpis egestas. Aliquam blandit nisl a nulla sagittis, a lobortis
							leo feugiat.
							<br />
							<small><a>Curtir</a> • <a>Responder</a> • 2 hrs</small>
						</p>
					</div>

					<article class="media">
						Vivamus quis semper metus, non tincidunt dolor. Vivamus in mi eu lorem
						cursus ullamcorper sit amet nec massa.
					</article>

					<article class="media">
						Morbi vitae diam et purus tincidunt porttitor vel vitae augue.
						Praesent malesuada metus sed pharetra euismod. Cras tellus odio,
						tincidunt iaculis diam non, porta aliquet tortor.
					</article>
				</div>
			</article>

			<article class="media">
				<figure class="media-left">
					<p class="image is-32x32">
						<img src="https://gravatar.com/avatar/<?= md5(random_bytes(1)) ?>?s=32&d=retro&r=x" />
					</p>
				</figure>
				<div class="media-content">
					<div class="content">
						<p>
							<strong>Kayli Eunice </strong>
							<br />
							Sed convallis scelerisque mauris, non pulvinar nunc mattis vel.
							Maecenas varius felis sit amet magna vestibulum euismod malesuada
							cursus libero. Vestibulum ante ipsum primis in faucibus orci luctus
							et ultrices posuere cubilia Curae; Phasellus lacinia non nisl id
							feugiat.
							<br />
							<small><a>Curtir</a> • <a>Responder</a> • 2 hrs</small>
						</p>
					</div>
				</div>
			</article>
		</div>
	</article>

	<article class="media">
		<figure class="media-left">
			<p class="image is-32x32">
				<img src="https://gravatar.com/avatar/<?= md5(random_bytes(1)) ?>?s=32&d=retro&r=x" />
			</p>
		</figure>
		<div class="media-content">
			<div class="field">
				<p class="control">
					<textarea class="textarea" placeholder="Olá internet!!!"></textarea>
				</p>
			</div>
			<div class="field">
				<p class="control">
					<button class="button">Comentar</button>
				</p>
			</div>
		</div>
	</article>
</div>

<?= $this->endSection() ?>
