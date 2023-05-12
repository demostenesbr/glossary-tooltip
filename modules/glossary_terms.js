function glossary_descriptions_form($form, $form_state) {
  $form['title'] = [    '#type' = 'textfield',    '#title' = t('Title'),    '#required' = TRUE,  ];
  $form['description'] = [    '#type' = 'textarea',    '#title' = t('Description'),    '#required' = TRUE,  ];
  $form['submit'] = [    '#type' = 'submit',    '#value' = t('Save'),  ];
  return $form, $form_state;
}
