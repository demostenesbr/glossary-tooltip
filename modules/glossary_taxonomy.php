function my_glossary_node_view($node, $view_mode, $langcode) {
  if ($node->type == 'glossary') {
    $query = new EntityFieldQuery();
    $query->entityCondition('entity_type', 'taxonomy_term')
      ->propertyCondition('vid', 'glossary')
      ->propertyOrderBy('name', 'ASC');
    $result = $query->execute();
    $terms = $result['taxonomy_term'];

    foreach ($terms as $term) {
      $name = $term->name;
      $description =
