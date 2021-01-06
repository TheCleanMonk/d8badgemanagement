<?php

namespace Drupal\user_points\Services;

use Drupal\Core\Entity\EntityTypeManagerInterface;

/**
 * Class UserPointsController.
 *
 * @package Drupal\user_points\Services
 */
class UserPointsService {
  /**
   * The entity type manager.
   *
   * @var \Drupal\Core\Entity\EntityTypeManagerInterface
   *    The Entity Type Managers
   */
  protected $entityTypeManager;

  /**
   * Class constructor.
   *
   * @param \Drupal\Core\Entity\EntityTypeManagerInterface $entityTypeManager
   *   The entity type manager.
   */
  public function __construct(
    EntityTypeManagerInterface $entityTypeManager
  ) {
    $this->entityTypeManager = $entityTypeManager;
  }

  /**
   * GetUserPoints method to get incoming points data.
   *
   * @return int
   *   The users point value.
   */
  public function getUserPoints(): int {
    $node_storage = $this->entityTypeManager->getStorage('user')->load($this->uid);
    return $node_storage->get('field_userpoints')->get(0)->getValue()['value'];
  }

}
