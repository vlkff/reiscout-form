<?php
/**
 * Created by PhpStorm.
 * User: md761
 * Date: 5/27/16
 * Time: 12:01
 */

namespace Drupal\users_online\Plugin\Block;

/**
 * Provides a 'UsersRegistered' block.
 *
 * @Block(
 *  id = "users_online_registered_block",
 *  admin_label = @Translation("Show number of registered users"),
 * )
 */
class UsersRegisteredBlock extends UsersOnlineBaseBlock {

  public function build () {
    return array(
      '#markup' => $this->t('Users Registered :registered', [
        ':registered' => $this->countRegisteredUsers(),
      ]),
    );
  }
}