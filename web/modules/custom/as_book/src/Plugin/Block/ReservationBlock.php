<?php

namespace Drupal\as_book\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'ReservationBlock' block.
 *
 * @Block(
 *  id = "reservation_block",
 *  admin_label = @Translation("Réserver ce livre"),
 * )
 */
class ReservationBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $form = \Drupal::formBuilder()->getForm('Drupal\as_book\Form\ReservationForm');
    //Récuperation de l'url dans la formr '/node/[NID]'
    $current_path = \Drupal::request()->getRequestUri();
    //Suppression de la chaine de caractèe '/node' pour ne garder que l'ID
    //du node
    $form['book_id']['#value'] = str_replace('/node/', NULL, $current_path);

    $build = [];
    $build['reservation_block'] = $form;

    return $build;
  }

}
