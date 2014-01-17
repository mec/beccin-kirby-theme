<nav class="primary-nav">
  <ul>
    <?php foreach($pages->visible() AS $page): ?>
    <li><a<?php echo ($page->isOpen()) ? ' class="active"' : '' ?> href="<?php echo $page->url() ?>">&ndash;<br><?php echo html($page->title()) ?></a></li>
    <?php endforeach ?>
  </ul>
</nav>