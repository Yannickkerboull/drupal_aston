<?php

namespace Drupal\as_book\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'reservation' block.
 *
 * @Block(
 *  id = "reservationBlock",
 *  admin_label = @Translation("reservationBlock"),
 * )
 */
class reservation extends BlockBase {

  /**
   * {@inheritdoc}
   */

  public function build() {
    $build = [];
    $build['reservationBlock']['#markup'] = 'Réserve, Ou pas !';

    return $build;
  }
/*
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
*/

}
