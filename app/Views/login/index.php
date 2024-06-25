<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="container p-2" style="max-width: 568px">
	<?= form_open() ?>

	<section class="hero is-halfheight">
		<div class="hero-body">
			<div class="has-text-centered">
				<h1 class="subtitle">Dígite seu nome como entrar</h1>
				<div class="field has-addons">
					<div class="control has-icons-left">
						<input class="input" type="text" placeholder="Nome" name="name" value="<?= set_value('name') ?>" autofocus/>
						<span class="icon is-small is-left">
							<i class="bi bi-person-square"></i>
						</span>
					</div>
					<div class="control">
						<button class="button" type="submit">
							<i class="bi bi-chevron-right"></i>
						</button>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?= form_close() ?>
</div>

<?= $this->endSection() ?>