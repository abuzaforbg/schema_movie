<?php

namespace Drupal\schema_movie\Plugin\metatag\Tag;

use \Drupal\schema_metatag\Plugin\metatag\Tag\SchemaPersonOrgBase;

/**
 * Provides a plugin for the 'productionCompany' meta tag.
 *
 * - 'id' should be a globally unique id.
 * - 'name' should match the Schema.org element name.
 * - 'group' should match the id of the group that defines the Schema.org type.
 *
 * @MetatagTag(
 *   id = "schema_movie_production_company",
 *   label = @Translation("produstionCompany"),
 *   description = @Translation("Production Company of the movie."),
 *   name = "productionCompany",
 *   group = "schema_movie",
 *   weight = -6,
 *   type = "string",
 *   secure = FALSE,
 *   multiple = TRUE
 * )
 */
class SchemaMovieProductionCompany extends SchemaPersonOrgBase {

  /**
   * Generate a form element for this meta tag.
   *
   * We need multiple values, so create a tree of values and
   * stored the serialized value as a string.
   */
  public function form(array $element = []) {
    $form = parent::form($element);
    $form['name']['#attribute']['placeholder'] = 'productionCompany';
    $form['url']['#attributes']['placeholder'] = 'productionCompanyUrl';
    return $form;
  }

}