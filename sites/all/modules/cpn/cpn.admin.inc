<?php

/**
 * Settings form.
 */
function cpn_settings($form, &$form_state) {
  $form['cpn_syntax_highlighting'] = array(
    '#title' => t('Syntax Highlighting'),
    '#type' => 'radios',
    '#options' => array(
      0 => t('None'),
    ),
    '#default_value' => variable_get('cpn_syntax_highlighting', 0),
  );

  // Add CodeMirror as a syntax highlighting option if available.
  if (is_file('sites/all/libraries/codemirror/lib/codemirror.js')) {
    $form['cpn_syntax_highlighting']['#options']['codemirror'] = 'CodeMirror 2';
  }
  else {
    drupal_set_message(t('Syntax highlighting requires <a href="@url">CodeMirror 2</a>. Download it, rename the folder "codemirror", and place it at "sites/all/libraries". Then return to this page and enable syntax highlighting.', array('@url' => 'http://codemirror.net/')), 'warning');
  }

  return system_settings_form($form);
}
