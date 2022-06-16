<?php

/**
 * Daggerhart\AutoloadingEasiest + \ + Folders to get to this file.
 */
namespace Daggerhart\AutoloadingEasiest\Really\Deep;

/**
 * Just how namespaces and autoloading work together.
 */
class Example {

  /**
   * @param string $string
   *
   * @return array|string|string[]
   */
  public function removeSpaces(string $string) {
    return str_replace(' ', '', $string);
  }

}