<?php

namespace Drupal\hello_world\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'GreetingBlock' block.
 *
 * @Block(
 *  id = "greeting_block",
 *  admin_label = @Translation("Greeting block"),
 * )
 */
class GreetingBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['greeting_block']['#markup'] = 'Implement GreetingBlock.';

    return $build;
  }

}
