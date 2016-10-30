<?php

namespace Drupal\hello_world\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class HelloWorldAwesomeController.
 *
 * @package Drupal\hello_world\Controller
 */
class HelloWorldAwesomeController extends ControllerBase {

  /**
   * Awesomemethod.
   *
   * @return string
   *   Return Hello string.
   */
  public function awesomeMethod() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Implement method: awesomeMethod')
    ];
  }

}
