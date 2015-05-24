<?php

class real_RealityViewTpl extends SugarView {
    function display(){
        $ss = new Sugar_Smarty();
        $ss->assign('var1',123);
        $ss->assign('var2',array('vasia','petro'));
        $ss->assign('cust_options', array(
                1000 => 'Joe Schmoe',
                1001 => 'Jack Smith',
                1002 => 'Jane Johnson',
                1003 => 'Charlie Brown')
        );
        $ss->assign('customer_id', 1001);
        $pathTpl = file_exists('custom/modules/real_Reality/tpls/test.tpl') ? 'custom/modules/real_Reality/tpls/test.tpl' : 'modules/real_Reality/tpls/test.tpl';
        $ss->display($pathTpl);
    }
} 