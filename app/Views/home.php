<h3><?= $title?></h3>
<?= anchor('home/create','Add new message')?>
<?php foreach ($messages as $message): ?>
<p><?= $message['content'] ?></p>
<?php endforeach;?>