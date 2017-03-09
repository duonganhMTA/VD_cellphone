<?= h($users->id)?><br>
<?= h($users->title) ?>
<h4><small>Created: <?= $users->created->format(DATE_RFC850) ?></small></h4>
