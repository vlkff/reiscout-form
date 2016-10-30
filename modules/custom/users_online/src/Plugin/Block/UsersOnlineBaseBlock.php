<?php
/**
 * Created by PhpStorm.
 * User: md761
 * Date: 5/27/16
 * Time: 12:01
 */

namespace Drupal\users_online\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a base block class.
 */
class UsersOnlineBaseBlock extends BlockBase {

  protected function countOnlineUsers() {

    // Count users who make a request while Last 5 minutes
    $interval = REQUEST_TIME - 300;

    $query = db_select('sessions', 's')
      ->condition('timestamp', $interval, ">")
      ->fields('s', ['sid']);
    return $query->countQuery()->execute()->fetchField();
  }

  protected function countRegisteredUsers() {
    $query = \Drupal::entityQueryAggregate('user')
      ->aggregate('uid', 'count')
      ->condition('status', 1)
      ->condition('uid', 0, '<>');
    return $query->execute()[0]['uid_count'];
  }

  public function build() {

  }

}