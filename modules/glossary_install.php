function my_glossary_install() {
  $vocabulary = array(
    'name' => 'Glossary',
    'machine_name' => 'glossary',
    'description' => 'A glossary of terms used on this site.',
    'hierarchy' => 0,
    'limit_characters' => 100,
    'relations' => 0,
    'multiple' => 0,
    'required' => 0,
    'tags' => 0,
    'module' => 'taxonomy',
  );
  taxonomy_vocabulary_save($vocabulary);
}
