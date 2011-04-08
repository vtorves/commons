<?php

/**
 * Implementation of hook_context_default_contexts().
 */
function commons_wiki_context_default_contexts() {
  $export = array();
  $context = new stdClass;
  $context->disabled = FALSE; /* Edit this to true to make a default context disabled initially */
  $context->api_version = 3;
  $context->name = 'context_ui-group-group-tab-wikis';
  $context->description = 'The wiki tab on a group';
  $context->tag = 'Group';
  $context->conditions = array(
    'views' => array(
      'values' => array(
        'group_tab_wikis:page_1' => 'group_tab_wikis:page_1',
      ),
    ),
  );
  $context->reactions = array(
    'block' => array(
      'blocks' => array(
        'views-157e77ff7551b8ace96fdd6c04d716cf' => array(
          'module' => 'views',
          'delta' => '157e77ff7551b8ace96fdd6c04d716cf',
          'region' => 'sidebar_last',
          'weight' => 0,
        ),
      ),
    ),
  );
  $context->condition_mode = 0;

  // Translatables
  // Included for use with string extractors like potx.
  t('Group');
  t('The wiki tab on a group');

  $export['context_ui-group-group-tab-wikis'] = $context;
  return $export;
}