<?PHP
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/

/**
 * THIS CLASS IS FOR DEVELOPERS TO MAKE CUSTOMIZATIONS IN
 */
require_once('modules/K1_House/K1_House_sugar.php');
class K1_House extends K1_House_sugar {
	
	function K1_House(){	
		parent::K1_House_sugar();
	}
	function create($text,$description,$checkname,$checkbox,$file)
    {
        global $sugar_config;
        $focus = new K1_House();
        $focus->name = $text;
        $focus->description = $description;
        $focus->rooms_list = $checkname;
        if($checkbox=="on")
        {
            $focus->wc = true;
        }
        $focus->save();
        if(is_uploaded_file($file["tmp_name"]))
        {
            // Если файл загружен успешно, перемещаем его
            // из временной директории в конечную
            mkdir($sugar_config['abs_path_image'].$focus->id, 0777);
            move_uploaded_file($file["tmp_name"], $sugar_config['abs_path_image'].$focus->id.'/'.$file["name"]);
            $focus->image=$file["name"];
            $focus->save();
        } else {
            echo("Ошибка загрузки файла");
        }
    }
    function viewlist($checkbox,$rooms_list)
    {
        global $db;
//        $db = DBManagerFactory::getInstance(); // получения объекта для работы с БД
        if($checkbox=="on"){$check=1;}else{$check=0;}
        if($rooms_list=="")
        {
            $result = $db->query('SELECT * FROM k1_house WHERE wc = ' . $check. ' AND deleted = false'); // выполнить SQL запрос
        }
        else {
            $result = $db->query('SELECT * FROM k1_house WHERE rooms_list = ' . $rooms_list . ' AND wc = ' . $check. ' AND deleted = false'); // выполнить SQL запрос
        }
        $list = array();
        while($row = $db->fetchByAssoc($result))
        {
            $list[] = $row;
        }

        return $list;
    }
    function change($focus,$text,$description,$rooms,$checkbox)
    {
        if(!empty($_POST)) {
            $focus->name = $text;
            $focus->description = $description;
            $focus->rooms_list = $rooms;
            if ($checkbox == "on") {
                $focus->wc = true;
            } else {
                $focus->wc = false;
            }
            $focus->save();
            SugarApplication::redirect('http://localhost/sugar/index.php?module=K1_House&action=list');
        }
    }
    function delete($record)
    {
        $focus = new k1_house();
        $focus->retrieve($record);
        $focus->deleted = true;
        $focus->save();
        SugarApplication::redirect('http://localhost/sugar/index.php?module=K1_House&action=list');
    }
}
?>