<?php

namespace Drupal\schema_movie\Plugin\metatag\Tag;

use \Drupal\schema_movie\Plugin\metatag\Tag\SchemaVideoBase;

/**
 * Provides a plugin for the 'image' meta tag.
 *
 * - 'id' should be a globally unique id.
 * - 'name' should match the Schema.org element name.
 * - 'group' should match the id of the group that defines the Schema.org type.
 *
 * @MetatagTag(
 *   id = "schema_movie_trailer",
 *   label = @Translation("Trailer"),
 *   description = @Translation("The trailer of the movie"),
 *   name = "trailer",
 *   group = "schema_movie",
 *   weight = -3,
 *   type = "image",
 *   secure = FALSE,
 *   multiple = FALSE
 * )
 */
class SchemaMovieTrailer extends SchemaVideoBase {

  /**
   * Generate a form element for this meta tag.
   */
  public function form(array $element = []) {
    $form = parent::form($element);
    $form['#attributes']['placeholder'] = '[node:field_event_image:url]';
    return $form;
  }

}