<?php

namespace Drupal\first\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class FirstForm extends FormBase {

  
  public function getFormId() {
    return 'second_form';
  }

  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['phone_number'] = array(
      '#type' => 'tel',
      '#title' => $this->t('Your phone number'),
    );
	$form['example_select'] = [
  '#type' => 'select',
  '#title' => $this->t('Select element'),
  '#options' => [
    '1' => $this->t('One'),
    '2' => [
      '2.1' => $this->t('Two point one'),
      '2.2' => $this->t('Two point two'),
    ],
    '3' => $this->t('Three'),
  ],
];
    $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Save'),
      '#button_type' => 'primary',
    );
    return $form;
  }
  
  
  
  
  
  

 
  public function validateForm(array &$form, FormStateInterface $form_state) {
    if (strlen($form_state->getValue('phone_number')) < 3) {
      $form_state->setErrorByName('phone_number', $this->t('The phone number is too short. Please enter a full phone number.'));
    }
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {
    drupal_set_message($this->t('Your phone number is @number', array('@number' => $form_state->getValue('phone_number'))));
  }

}
