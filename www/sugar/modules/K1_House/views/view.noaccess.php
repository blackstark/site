<?php

class real_RealityViewNoaccess extends SugarView
{
    function display()
    {
        global $mod_strings;

        echo $mod_strings['LBL_REAL_REALITY_YOU_DO_NOT_HAVE_ACCESS'];
    }
}