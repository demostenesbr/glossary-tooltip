function glossary_descriptions_install() {
  $vocabulary = [
    'vid' => 'glossary',
    'name' => 'Glossary',
    'description' => 'A vocabulary for glossary terms.',
    'read_more' => 'Read More',
    ];
  taxonomy_vocabulary_save((object) $vocabulary);
}