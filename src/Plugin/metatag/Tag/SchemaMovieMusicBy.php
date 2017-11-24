<?php

namespace Drupal\schema_movie\Plugin\metatag\Tag;

use \Drupal\schema_metatag\Plugin\metatag\Tag\SchemaPersonOrgBase;

/**
 * Provides a plugin for the 'musicBy' meta tag.
 *
 * - 'id' should be a globally unique id.
 * - 'name' should match the Schema.org element name.
 * - 'group' should match the id of the group that defines the Schema.org type.
 *
 * @MetatagTag(
 *   id = "schema_movie_music_by",
 *   label = @Translation("musicBy"),
 *   description = @Translation("Name of the musicBy"),
 *   name = "musicBy",
 *   group = "schema_movie",
 *   weight = -7,
 *   type = "string",
 *   secure = FALSE,
 *   multiple = TRUE
 * )
 */
class SchemaMovieMusicBy extends SchemaPersonOrgBase {

  /**
   * Generate a form element for this meta tag.
   *
   * We need multiple values, so create a tree of values and
   * stored the serialized value as a string.
   */
  public function form(array $element = []) {
    $form = parent::form($element);
    $form['name']['#attribute']['placeholder'] = 'movieDirectorName';
    $form['url']['#attributes']['placeholder'] = 'DirectorProfilePage';
    return $form;
  }

}