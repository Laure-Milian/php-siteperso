<?php $user = getUserData(); ?>
<h2>BIO</h2>
<h3><?= $user->name ?></h3>
<?php foreach ($user->experiences as $experience):?>
	<ul>
		<li><?= $experience->year ?></li>
		<li><?= $experience->company ?></li>
	</ul>
<?php endforeach ?>