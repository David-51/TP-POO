<?php

foreach(\App\Table\Article::getLast() as $post):

?>
<h2><a href="<?= $post->url; ?>"><?= $post->titre ?></a></h2>

<p><?= $post->getExtrait(); ?></p>
<?php
endforeach;
?>