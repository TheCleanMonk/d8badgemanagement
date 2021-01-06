<?php

namespace Drupal\user_points\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\user_points\Services\UserPointsService;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Session\AccountProxy;

/**
 * Class UserPointsController points controller.
 *
 * @package Drupal\user_points\Controller
 */
class UserPointsController extends ControllerBase {
  /**
   * The UserPointsService.
   *
   * @var \Drupal\user_points\Services\UserPointsService
   */
  private $userPointsService;

  /**
   * Class constructor.
   *
   * @param \Drupal\user_points\Services\UserPointsService $userPointsService
   *   The UserPointsService.
   * @param \Drupal\Core\Session\AccountProxy $currentUser
   *   Current user manager.
   */
  public function __construct(UserPointsService $userPointsService, AccountProxy $currentUser) {
    $this->pointService = $userPointsService;
    $this->currentUser = $currentUser;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    $pointService = $container->get('user_points.userpointservice');
    return new static($pointService);
  }

  /**
   * Class constructor.
   *
   * @return array
   *   Returns an array of userPoints data;
   */
  public function userPointsContent() {
    $userPointsData = $this->UserPointsService->getUserPoints();
    return [
      '#userPointsData' => $userPointsData,
    ];
  }

}
