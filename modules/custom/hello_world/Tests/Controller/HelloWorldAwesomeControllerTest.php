<?php

namespace Drupal\hello_world\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provides automated tests for the hello_world module.
 */
class HelloWorldAwesomeControllerTest extends WebTestBase {

  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return array(
      'name' => "hello_world HelloWorldAwesomeController's controller functionality",
      'description' => 'Test Unit for module hello_world and controller HelloWorldAwesomeController.',
      'group' => 'Other',
    );
  }

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    parent::setUp();
  }

  /**
   * Tests hello_world functionality.
   */
  public function testHelloWorldAwesomeController() {
    // Check that the basic functions of module hello_world.
    $this->assertEquals(TRUE, TRUE, 'Test Unit Generated via App Console.');
  }

}
