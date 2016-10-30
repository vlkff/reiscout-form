<?php

namespace Drupal\playground\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class HelloWorldAwesomeController.
 *
 * @package Drupal\hello_world\Controller
 */
class PlaygroundNodeSearchController extends ControllerBase {

  /**
   * Awesomemethod.
   *
   * @return string
   *   Return Hello string.
   */
  public function search($search) {

    $result = db_query_range('SELECT b.body_value as body
      FROM {node__body} b
      WHERE b.body_value LIKE :search ',
      0, 10, array(':search' => "%$search%"));

    $output = [
      '#type' => 'markup',
      '#markup' => $this->t('Searching nodes body for "@search" and show found bodies', ['@search' => $search]),
    ];
    foreach ($result as $record) {
      $output['results'][] = [
        '#markup' => $record->body . '</br>',
      ];
    }
    return $output;
  }

}
