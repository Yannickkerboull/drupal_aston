<?php

namespace Drupal\as_book\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a 'res1' block.
 *
 * @Block(
 *  id = "res1",
 *  admin_label = @Translation("res1"),
 * )
 */
class res1 extends BlockBase {


  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return [
         'reser' => $this->t(''),
        ] + parent::defaultConfiguration();

 }

  /**
   * {@inheritdoc}
   */
   public function buildForm(array $form, FormStateInterface $form_state) {
     $form['reservation'] = [
       '#type' => 'submit',
       '#title' => $this->t('Réservation'),
       '#description' => $this->t('Cliquez ici pour réserver le livre'),
       '#value' => $this->t('Réserver'),
     ];
     $form['book_id'] = [
       '#type' => 'hidden',
       '#title' => $this->t('Id livre'),
     ];

     return $form;
   }


  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    $this->configuration['reser'] = $form_state->getValue('reser');
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['res1_reser']['#markup'] = '<p>' . $this->configuration['reser'] . '</p>';

    return $build;
  }

}
