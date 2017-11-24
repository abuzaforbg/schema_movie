<?php

namespace Drupal\schema_movie\Plugin\metatag\Group;

use \Drupal\schema_metatag\Plugin\metatag\Group\SchemaGroupBase;

/**
 * Provides a plugin for the 'Movie' meta tag group.
 *
 * @MetatagGroup(
 *   id = "schema_movie",
 *   label = @Translation("Schema.org: Movie"),
 *   description = @Translation("See Schema.org definitions for this Schema type at <a href="":url"">:url</a>.", arguments = { ":url" = "http://schema.org/Movie"}),
 *   weight = 10,
 * )
 */
class SchemaMovie extends SchemaGroupBase {
  // Nothing here yet. Just a placeholder class for a plugin.
}