<?php

namespace Drupal\schema_movie\Plugin\metatag\Tag;

use \Drupal\schema_metatag\Plugin\metatag\Tag\SchemaDateBase;

/**
 * Provides a plugin for the 'duration' meta tag.
 *
 * - 'id' should be a globally unique id.
 * - 'name' should match the Schema.org element name.
 * - 'group' should match the id of the group that defines the Schema.org type.
 *
 * @MetatagTag(
 *   id = "schema_movie_duration",
 *   label = @Translation("duration"),
 *   description = @Translation("Movie Duration"),
 *   name = "duration",
 *   group = "schema_movie",
 *   weight = -1,
 *   type = "string",
 *   secure = FALSE,
 *   multiple = FALSE
 * )
 */
class SchemaMovieDuration extends SchemaDateBase {

  /**
   * Generate a form element for this meta tag.
   */
  public function form(array $element = []) {
    $form = parent::form($element);
    $form['#attributes']['placeholder'] = 'MovieDuration Ex. 12:12:12';
    return $form;
  }

}