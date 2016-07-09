<?php

namespace Drupal\commerce_shipping\Plugin\Box;

interface BoxInterface {
  /**
   * Get the height of this box.
   *
   * @return float
   */
  public function getHeight();

  /**
   * Get the width of this box.
   *
   * @return float
   */
  public function getWidth();

  /**
   * Get the depth of this box.
   *
   * @return float
   */
  public function getDepth();

  /**
   * Get the weight of this box.
   *
   * @return float
   */
  public function getWeight();
}