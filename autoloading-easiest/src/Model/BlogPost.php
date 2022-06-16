<?php

namespace Daggerhart\AutoloadingEasiest\Model;

/**
 * Example model.
 */
class BlogPost {

  /**
   * @var string
   */
  protected $title;

  /**
   * @var string
   */
  protected $content;

  /**
   * @param string $title
   * @param string $content
   */
  public function __construct(string $title, string $content) {
    $this->title = $title;
    $this->content = $content;
  }

  /**
   * @return string
   */
  public function getTitle(): string {
    return $this->title;
  }

  /**
   * @param string $title
   *
   * @return BlogPost
   */
  public function setTitle(string $title): BlogPost {
    $this->title = $title;
    return $this;
  }

  /**
   * @return string
   */
  public function getContent(): string {
    return $this->content;
  }

  /**
   * @param string $content
   *
   * @return BlogPost
   */
  public function setContent(string $content): BlogPost {
    $this->content = $content;
    return $this;
  }

}