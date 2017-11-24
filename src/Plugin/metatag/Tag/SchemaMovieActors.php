<?php

namespace Drupal\schema_movie\Plugin\metatag\Tag;

use \Drupal\schema_metatag\Plugin\metatag\Tag\SchemaPersonOrgBase;

/**
 * Provides a plugin for the 'actor' meta tag.
 *
 * - 'id' should be a globally unique id.
 * - 'name' should match the Schema.org element name.
 * - 'group' should match the id of the group that defines the Schema.org type.
 *
 * @MetatagTag(
 *   id = "schema_movie_actors",
 *   label = @Translation("actors"),
 *   description = @Translation("The actors on the movie."),
 *   name = "actors",
 *   group = "schema_movie",
 *   weight = -5,
 *   type = "string",
 *   secure = FALSE,
 *   multiple = TRUE
 * )
 */
class SchemaMovieActors extends SchemaPersonOrgBase {
  /**
   * Generate a form element for this meta tag.
   */
  public function form(array $element = []) {
    $form = parent::form($element);
    $form['name']['#description'] = $this->t('The name of the actor');
    $form['url']['#description'] = $this->t('The URL of the actor\'s website.');
    return $form;
  }
}