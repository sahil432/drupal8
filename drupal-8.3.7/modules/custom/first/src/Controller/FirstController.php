<?php
namespace Drupal\first\Controller;

use Drupal\Core\Controller\ControllerBase;

class FirstController extends ControllerBase {

  /**
   * Display the markup.
   *
   * @return array
   */
  public function content() {
    return array(
      '#type' => 'markup',
      '#markup' => $this->t('Hello, World!'),
    );
  }

}

?>