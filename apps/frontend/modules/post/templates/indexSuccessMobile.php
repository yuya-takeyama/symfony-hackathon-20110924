<h1>Blog posts</h1>

<ul>
<?php foreach($posts as $post): ?>
  <li><?php echo "{$post->getId()}. " . link_to($post->getTitle(), "post/edit?id={$post->getId()}") ?></li>
<?php endforeach; ?>
</ul>

<?php echo link_to('新規追加', 'post/new') ?>
<?php if ($flash = $sf_user->getFlash('info')): ?>
<?php echo $flash ?>
<?php endif ?>
