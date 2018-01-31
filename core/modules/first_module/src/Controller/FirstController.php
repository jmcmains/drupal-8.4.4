<?php
/**
 * Created by PhpStorm.
 * User: j
 * Date: 1/30/2018
 * Time: 9:15 PM
 */

namespace Drupal\first_module\Controller;

use Drupal\Core\Controller\ControllerBase;

class FirstController extends ControllerBase {
    public function content() {
        return array(
            '#type' => 'markup',
            '#markup' => t('Hello world'),
        );
    }
}