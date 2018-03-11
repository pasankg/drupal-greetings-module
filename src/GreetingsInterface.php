<?php

namespace Drupal\greetings;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\user\EntityOwnerInterface;
use Drupal\Core\Entity\EntityChangedInterface;

/**
 * Provides an interface defining a Greetings entity.
 *
 * @ingroup greetings
 */
interface GreetingsInterface extends ContentEntityInterface, EntityOwnerInterface, EntityChangedInterface {

}
