<?php
// created: 2015-05-15 14:49:57
$dictionary["k1_firstmodule_notes"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'k1_firstmodule_notes' => 
    array (
      'lhs_module' => 'K1_FirstModule',
      'lhs_table' => 'k1_firstmodule',
      'lhs_key' => 'id',
      'rhs_module' => 'Notes',
      'rhs_table' => 'notes',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'k1_firstmodule_notes_c',
      'join_key_lhs' => 'k1_firstmodule_notesk1_firstmodule_ida',
      'join_key_rhs' => 'k1_firstmodule_notesnotes_idb',
    ),
  ),
  'table' => 'k1_firstmodule_notes_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'k1_firstmodule_notesk1_firstmodule_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'k1_firstmodule_notesnotes_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'k1_firstmodule_notesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'k1_firstmodule_notes_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'k1_firstmodule_notesk1_firstmodule_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'k1_firstmodule_notes_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'k1_firstmodule_notesnotes_idb',
      ),
    ),
  ),
);