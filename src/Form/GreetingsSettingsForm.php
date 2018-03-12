<?php

namespace Drupal\greetings\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class GreetingsSettingsForm.
 *
 * @package Drupal\greetings\Form
 * @ingroup greetings
 */
class GreetingsSettingsForm extends FormBase {

  /**
   * Returns a unique string identifying the form.
   *
   * @return string
   *   The unique string identifying the form.
   */
  public function getFormId() {
    return 'greetings_settings';
  }

  /**
   * Form submission handler.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   An associative array containing the current state of the form.
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Empty implementation of the abstract submit class.
  }

  /**
   * Define the form used for Greetings settings.
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['greetings_settings']['#markup'] = 'Settings form for Greetings. Manage field settings here.';
    return $form;
  }

}
