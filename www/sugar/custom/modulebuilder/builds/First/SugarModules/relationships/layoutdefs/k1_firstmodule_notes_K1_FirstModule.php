<?php
 // created: 2015-05-15 14:49:57
$layout_defs["K1_FirstModule"]["subpanel_setup"]['k1_firstmodule_notes'] = array (
  'order' => 100,
  'module' => 'Notes',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_K1_FIRSTMODULE_NOTES_FROM_NOTES_TITLE',
  'get_subpanel_data' => 'k1_firstmodule_notes',
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
