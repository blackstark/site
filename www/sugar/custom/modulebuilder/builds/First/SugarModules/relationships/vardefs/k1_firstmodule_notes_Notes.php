<?php
// created: 2015-05-15 14:49:57
$dictionary["Note"]["fields"]["k1_firstmodule_notes"] = array (
  'name' => 'k1_firstmodule_notes',
  'type' => 'link',
  'relationship' => 'k1_firstmodule_notes',
  'source' => 'non-db',
  'module' => 'K1_FirstModule',
  'bean_name' => false,
  'vname' => 'LBL_K1_FIRSTMODULE_NOTES_FROM_K1_FIRSTMODULE_TITLE',
  'id_name' => 'k1_firstmodule_notesk1_firstmodule_ida',
);
$dictionary["Note"]["fields"]["k1_firstmodule_notes_name"] = array (
  'name' => 'k1_firstmodule_notes_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_K1_FIRSTMODULE_NOTES_FROM_K1_FIRSTMODULE_TITLE',
  'save' => true,
  'id_name' => 'k1_firstmodule_notesk1_firstmodule_ida',
  'link' => 'k1_firstmodule_notes',
  'table' => 'k1_firstmodule',
  'module' => 'K1_FirstModule',
  'rname' => 'name',
);
$dictionary["Note"]["fields"]["k1_firstmodule_notesk1_firstmodule_ida"] = array (
  'name' => 'k1_firstmodule_notesk1_firstmodule_ida',
  'type' => 'link',
  'relationship' => 'k1_firstmodule_notes',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_K1_FIRSTMODULE_NOTES_FROM_NOTES_TITLE',
);
