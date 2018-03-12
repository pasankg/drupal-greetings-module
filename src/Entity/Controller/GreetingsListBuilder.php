<?php

namespace Drupal\greetings\Entity\Controller;

use Drupal;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;

/**
 * Provides a list controller for greetings entity.
 *
 * @ingroup greetings
 */
class GreetingsListBuilder extends EntityListBuilder {

  /**
   * {@inheritdoc}
   *
   * We override ::render() so that we can add our own content above the table.
   * parent::render() is where EntityListBuilder creates the table using our
   * buildHeader() and buildRow() implementations.
   */
  public function render() {
    $build['description'] = [
      '#markup' => $this->t('Greetings Content Entity implements a Greetings model. These greetings are fieldable entities. You can manage the fields on the <a href="@adminlink">Greetings admin page</a>.', [
        '@adminlink' => Drupal::urlGenerator()
          ->generateFromRoute('entity.greetings.settings'),
      ]),
    ];

    $build += parent::render();
    return $build;
  }

  /**
   * {@inheritdoc}
   *
   * Building the header and content lines for the contact list.
   *
   * Calling the parent::buildHeader() adds a column for the possible actions
   * and inserts the 'edit' and 'delete' links as defined for the entity type.
   */
  public function buildHeader() {
    $header['id'] = $this->t('Greeting ID');
    $header['recipient'] = $this->t('Recipient');
    $header['greeting'] = $this->t('Greeting Message');
    $header['greeting_type'] = $this->t('Greeting Type');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    /* @var $entity \Drupal\greetings\Entity\Greetings */
    $row['id'] = $entity->id();
    $row['recipient'] = $entity->link();
    $row['greeting'] = $entity->greeting->value;
    $row['greeting_type'] = $entity->greeting_type->value;
    return $row + parent::buildRow($entity);
  }

}
