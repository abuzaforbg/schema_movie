<?php

namespace Drupal\schema_movie\Plugin\metatag\Tag;

trait SchemaVideoTrait {

 public function video_form_keys() {
    return [
      '@type',
      'name',
      'description',
      'thumbnailUrl',
      'uploadDate',
        
    ];
  }

  public function video_input_values() {
    return [
      'title' => '',
      'description' => '',
      'value' => [],
      '#required' => FALSE,
      'visibility_selector' => '',
    ];
  }

  public function video_form($input_values) {

    $input_values += $this->video_input_values();
    $value = $input_values['value'];

    $form['#type'] = 'fieldset';
    $form['#title'] = $input_values['title'];
    $form['#description'] = $input_values['description'];
    $form['#tree'] = TRUE;

    $form['@type'] = [
      '#type' => 'select',
      '#title' => $this->t('@type'),
      '#default_value' => !empty($value['@type']) ? $value['@type'] : '',
      '#empty_option' => t('- None -'),
      '#empty_value' => '',
      '#options' => [
        'VideoObject' => $this->t('VideoObject'),
      ],
      '#required' => $input_values['#required'],
    ];

    $form['name'] = [
      '#type' => 'textfield',
      '#title' => $this->t('name'),
      '#default_value' => !empty($value['name']) ? $value['name'] : '',
      '#maxlength' => 100,
      '#required' => $input_values['#required'],
      '#description' => $this->t('Name or title of the Trailer.'),
    ];
    $form['description'] = [
      '#type' => 'textfield',
      '#title' => $this->t('description'),
      '#default_value' => !empty($value['description']) ? $value['description'] : '',
      '#maxlength' => 255,
      '#required' => $input_values['#required'],
    ];
    $form['thumbnailUrl'] = [
      '#type' => 'textfield',
      '#title' => $this->t('thumbnailUrl'),
      '#default_value' => !empty($value['thumbnailUrl']) ? $value['thumbnailUrl'] : '',
      '#maxlength' => 255,
      '#required' => $input_values['#required'],
    ];
    $form['uploadDate'] = [
      '#type' => 'textfield',
      '#title' => $this->t('uploadDate'),
      '#default_value' => !empty($value['uploadDate']) ? $value['uploadDate'] : '',
      '#maxlength' => 50,
      '#required' => $input_values['#required'],
    ];

    // Add #states to show/hide the fields based on the value of @type,
    // if a selector was provided.
    if (!empty($input_values['visibility_selector'])) {
      $keys = $this->video_form_keys();
      $visibility = ['visible' => [
        ':input[name="' . $input_values['visibility_selector'] . '"]' => [
								  'value' => 'VideoObject']
        ]
      ];
      foreach ($keys as $key) {
        if ($key != '@type') {
          $form[$key]['#states'] = $visibility;
        }
      }
    }

    return $form;

  }
}