<?php

namespace Daggerhart\AutoloadingEasiest\Service;

use Daggerhart\AutoloadingEasiest\Model\BlogPost;

/**
 * Example service.
 */
class BlogPostRenderer {

  /**
   * Render a blog post.
   *
   * @param \Daggerhart\AutoloadingEasiest\Model\BlogPost $post
   *
   * @return string
   */
  public function render(BlogPost $post) {
    return "
        <h1>{$post->getTitle()}</h1>
        <div>{$post->getContent()}</div>
    ";
  }

}