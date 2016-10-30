<?php
/**
 * Created by PhpStorm.
 * User: md761
 * Date: 5/27/16
 * Time: 12:01
 */

namespace Drupal\users_online\Plugin\Block;

/**
 * Provides a 'UsersOnlineBlock' block.
 *
 * @Block(
 *  id = "users_online_online_block",
 *  admin_label = @Translation("Show number of users online"),
 * )
 */
class UsersOnlineBlock extends UsersOnlineBaseBlock {

  public function build() {
    return array(
      '#markup' => $this->t('Users Online :online / :registered', [
        ':online' => $this->countOnlineUsers(),
        ':registered' => $this->countRegisteredUsers(),
      ]),
    );
  }
}