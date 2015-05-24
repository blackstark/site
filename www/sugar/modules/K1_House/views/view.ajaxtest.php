<?php
//ViewAjax
//class real_RealityViewAjaxtest extends SugarView {
class real_RealityViewAjaxtest extends ViewAjax {

    function real_RealityViewAjaxtest(){

        /*
        $this->options['show_title'] = false;
        $this->options['show_header'] = false;
        $this->options['show_footer'] = false;
        $this->options['show_javascript'] = false;
        $this->options['show_subpanels'] = false;
        $this->options['show_search'] = false;

        parent::SugarView();
        */

        parent::ViewAjax();
    }
    function display(){

        //echo JSON::encode(array('var1'=>123));

        $real = new real_Reality();
        $id = '788f10e5-4781-9f5a-dea0-5475985027b5';

        echo JSON::encode($real->retrieve($id)->toArray());

    }
} 