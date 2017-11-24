<?php

namespace Drupal\schema_movie\Plugin\metatag\Tag;

use Drupal\schema_metatag\SchemaMetatagManager;
use Drupal\schema_metatag\Plugin\metatag\Tag\SchemaNameBase;

/**
 * Schema.org video items should extend this class.
 */
abstract class SchemaVideoBase extends SchemaNameBase {

  /**
   * Traits provide re-usable form elements.
   */
  use SchemaVideoTrait;

  /**
   * Generate a form element for this meta tag.
   *
   * We need multiple values, so create a tree of values and
   * stored the serialized value as a string.
   */
  public function form(array $element = []) {

    $value = SchemaMetatagManager::unserialize($this->value());

    $input_values = [
      'title' => $this->label(),
      'description' => $this->description(),
      'value' => SchemaMetatagManager::unserialize($this->value()),
      '#required' => isset($element['#required']) ? $element['#required'] : FALSE,
      'visibility_selector' => $this->visibilitySelector() . '[@type]',
    ];

    $form = $this->video_form($input_values);

    return $form;
  }

}