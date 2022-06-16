<?php

require_once __DIR__ . '/vendor/autoload.php';

$blog_post = new \Daggerhart\AutoloadingEasiest\Model\BlogPost(
  'My Title',
  'What great content!'
);

$renderer = new \Daggerhart\AutoloadingEasiest\Service\BlogPostRenderer();

echo $renderer->render($blog_post);
