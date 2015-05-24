<?php
 // created: 2015-05-21 15:01:01
$layout_defs["K1_House"]["subpanel_setup"]['k1_house_notes'] = array (
  'order' => 100,
  'module' => 'Notes',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_K1_HOUSE_NOTES_FROM_NOTES_TITLE',
  'get_subpanel_data' => 'k1_house_notes',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
