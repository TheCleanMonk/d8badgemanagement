<?php

namespace Drupal\user_points\Services;

/**
 * Manages user badges.
 *
 * @package Drupal\user_points\Services
 */
class UserBadgeService {

  /**
   * Get the full list of badges in the system indexed by badge ID.
   *
   * @return array
   *   Badge metadata indexed by ID.
   */
  public function getAllBadges(): array {
    return [
      3 => [
        'badge_name' => "Active Contributor",
        'badge_class' => "active-contributor",
        'location' => 'avatar',
        'type' => 'points',
        'rank' => 6,
      ],
      13 => [
        'badge_name' => 'Administrator',
        'badge_class' => "administrator",
        'location' => 'other',
        'type' => 'admin',
        'rank' => 6,
      ],
      23 => [
        'badge_name' => 'Red Hat',
        'badge_class' => "red-hat",
        'location' => 'avatar',
        'type' => 'internal',
        'rank' => 6,
      ],
      33 => [
        'badge_name' => "Community Member",
        'badge_class' => "community-member",
        'location' => 'avatar',
        'type' => 'points',
        'rank' => 6,
      ],
      53 => [
        'badge_name' => "Expert",
        'badge_class' => "expert",
        'location' => 'avatar',
        'type' => 'points',
        'rank' => 6,
      ],
      63 => [
        'badge_name' => "Guru",
        'badge_class' => "guru",
        'location' => 'avatar',
        'type' => 'points',
        'rank' => 6,
      ],
      83 => [
        'badge_name' => "Newbie",
        'badge_class' => "newbie",
        'location' => 'avatar',
        'type' => 'points',
        'rank' => 6,
      ],
      93 => [
        'badge_name' => "Pro",
        'badge_class' => "pro",
        'location' => 'avatar',
        'type' => 'points',
        'rank' => 6,
      ],
      101 => [
        'badge_name' => 'RHCSA',
        'badge_class' => "rhcsa",
        'location' => 'avatar',
        'type' => 'cert',
        'rank' => 10,
      ],
      111 => [
        'badge_name' => 'RHCSA-RHOS',
        'badge_class' => "rhcsa-rhos",
        'location' => 'avatar',
        'type' => 'cert',
        'rank' => 11,
      ],
      121 => [
        'badge_name' => 'RHCJA',
        'badge_class' => "rhc-ja",
        'location' => 'avatar',
        'type' => 'cert',
        'rank' => 12,
      ],
      131 => [
        'badge_name' => 'RHCJD',
        'badge_class' => "rhc-jd",
        'location' => 'avatar',
        'type' => 'cert',
        'rank' => 13,
      ],
      141 => [
        'badge_name' => 'RHCVA',
        'badge_class' => "rhc-va",
        'location' => 'avatar',
        'type' => 'cert',
        'rank' => 14,
      ],
      151 => [
        'badge_name' => 'RHCE',
        'badge_class' => "rhce",
        'location' => 'avatar',
        'type' => 'cert',
        'rank' => 15,
      ],
      161 => [
        'badge_name' => 'RHCE-RHOS',
        'badge_class' => "rhce-rhos",
        'location' => 'avatar',
        'type' => 'cert',
        'rank' => 16,
      ],
      171 => [
        'badge_name' => 'RHCA',
        'badge_class' => "rhca",
        'location' => 'avatar',
        'type' => 'cert',
        'rank' => 17,
      ],
      181 => [
        'badge_name' => 'RHCOE',
        'badge_class' => "rhcoe",
        'location' => 'avatar',
        'type' => 'cert',
        'rank' => 18,
      ],
    ];
  }

  /**
   * Get community badge metadata from a given point value.
   *
   * @param int $points
   *   The number of points to evaluate.
   *
   * @return int
   *   Returns the badge ID of interest.
   */
  public function getCommunityBadgeIdFromPoints(int $points): int {

    if ($points >= 1300) {
      $badge_id = 63;
    }
    elseif ($points >= 800) {
      $badge_id = 53;
    }
    elseif ($points >= 400) {
      $badge_id = 93;
    }
    elseif ($points >= 100) {
      $badge_id = 3;
    }
    elseif ($points >= 20) {
      $badge_id = 33;
    }
    else {
      $badge_id = 83;
    }

    return $badge_id;
  }

}
