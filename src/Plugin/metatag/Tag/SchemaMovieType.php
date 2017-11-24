<?php

namespace Drupal\schema_movie\Plugin\metatag\Tag;

use \Drupal\schema_metatag\Plugin\metatag\Tag\SchemaNameBase;

/**
 * Provides a plugin for the 'type' meta tag.
 *
 * - 'id' should be a globally unique id.
 * - 'name' should match the Schema.org element name.
 * - 'group' should match the id of the group that defines the Schema.org type.
 *
 * @MetatagTag(
 *   id = "schema_movie_type",
 *   label = @Translation("@type"),
 *   description = @Translation("The type of movie (fixed by standard)."),
 *   name = "@type",
 *   group = "schema_movie",
 *   weight = -11,
 *   type = "string",
 *   secure = FALSE,
 *   multiple = FALSE
 * )
 */
class SchemaMovieType extends SchemaNameBase {

  /**
   * Generate a form element for this meta tag.
   */
  public function form(array $element = []) {
    $form = [
      '#type' => 'select',
      '#title' => $this->label(),
      '#description' => $this->description(),
      '#empty_option' => t('- None -'),
      '#empty_value' => '',
      '#options' => $this->types(),
      '#default_value' => $this->value(),
    ];
    return $form;
  }


  /**
   * Return a list of organization types.
   */
  private function types() {
    $types = [
      'Movie',
    ];
    return array_combine($types, $types);
  }
}