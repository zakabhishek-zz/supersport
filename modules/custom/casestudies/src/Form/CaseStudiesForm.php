<?php



namespace Drupal\casestudies\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class DefaultForm.
 *
 * @package Drupal\casestudies\Form
 */
class DefaultForm extends FormBase {


  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'CaseStudiesForm'; //form name
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {

      $form['header'] = [
        title_coloumn => this->t('Title'),
        body_coloumn => this->t('Body'),
        success_coloumn => this->t('Success'),
      ];


       $form['name'] = array(
         '#type' => 'textfield',
           '#title' => t('Name'),
       );

    $form['CaseStudiesForm'] = array(
        '#type' => 'tableselect',
        '#header' => $header,
        '#empty' => $this->t('Empty'),
    );

//public function buildForm(array $form, FormStateInterface $form_state) {
//    $form['title'] = array(
//        '#type' => 'textfield',
//        '#title' => t('Title'),
//        '#required' => TRUE,
//    );
//    $form['video'] = array(
//        '#type' => 'textfield',
//        '#title' => t('Youtube video'),
//    );
//    $form['video'] = array(
//        '#type' => 'textfield',
//        '#title' => t('Youtube video'),
//    );
//    $form['develop'] = array(
//        '#type' => 'checkbox',
//        '#title' => t('I would like to be involved in developing this material'),
//    );
//    $form['description'] = array(
//        '#type' => 'textarea',
//        '#title' => t('Description'),
//    );
//    $form['submit'] = array(
//        '#type' => 'submit',
//        '#value' => t('Submit'),
//    );
//    return $form;
//}
//
//
//
//
//public function validateForm(array &$form, FormStateInterface $form_state) {
//    // Validate video URL.
//    if (!UrlHelper::isValid($form_state->getValue('video'), TRUE)) {
//        $form_state->setErrorByName('video', $this->t("The video url '%url' is invalid.", array('%url' => $form_state->getValue('video'))));
//    }
//}
//
//
//
//
//
//public function submitForm(array &$form, FormStateInterface $form_state) {
//    // Display result.
//    foreach ($form_state->getValues() as $key => $value) {
//        drupal_set_message($key . ': ' . $value);
//
//
//

**
    * {@inheritdoc}
    */
public function submitForm(array &$form, FormStateInterface $form_state) {
  Display result.
    foreach ($form_state->getValues() as $key => $value) {
        drupal_set_message($key . ': ' . $value);
    }

  }

}




