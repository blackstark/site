<?php

class K1_HouseViewMy extends SugarView
{
    function K1_HouseViewMy()
    {
        parent::SugarView();
    }

    function display()
    {
        parent::display();

        if (isset($_REQUEST['rooms'])) {

            $rooms = $_REQUEST['rooms'];

            /*
             * Получение данных через методы объекта DBManagerFactory
             *
            $db = DBManagerFactory::getInstance(); // получения объекта для работы с БД. Можно через $GLOBALS['db']
            $rooms = $db->quote($_REQUEST['rooms']); // конкатенация
            $result = $db->query("SELECT * FROM K1_House WHERE rooms = $rooms"); //результат SQL запроса.
            //fetchByAssoc - извлечь результат как ассоциативный массив
            $new_arr = array();
            while ($row = $db->fetchByAssoc($result)) {
                array_push($new_arr, $row);
            }
            */

            /*
             * Получение одной записи по полю
             *
            $focus = new K1_House();
            $focus->retrieve_by_string_fields(array('name' => 'объект1' ));
            */

            /*
             * Получение одной записи по id
             *
            $focus = new K1_House();
            $focus->retrieve('cdde50f0-99a2-e6d3-b95b-54754a9cf575');

            //Можно добавить метод ->toArray() для удобной работы с данными. Получаем массив без лишней информации.
            //$focus->retrieve('cdde50f0-99a2-e6d3-b95b-54754a9cf575')->toArray();
            */

            /*
             * Получение массива записей
             *
            $focus = new K1_House();
            $reality_list = $focus->get_list("","rooms = $rooms");
            foreach($reality_list as $realitys){
                // ...
            }
            */

            /*
             * Получение данных у не связанных таблиц (не работает)
             *
            $query = "select * from users where id in ( select assigned_user_id from K1_House where name = 'объект1' )";
            $focus = new K1_House();
            $focus->retrieve_by_string_fields(array('name' => 'объект1' ));
            $focus->load_relationship('users');

            $list = array();
            foreach ($focus->users->getBeans() as $user) {
                $list[$user->id] = $user;
            }
            */

            /*
             * получение данных у связанных таблиц со связью многие-ко-многим
             *
            $focus = new Account();
            $focus->retrieve('140dc8bf-6e42-af47-f59b-5472f7e9130b');
            $focus->load_relationship('contacts');

            $list = array();
            foreach ($focus->contacts->getBeans() as $contact) {
                $list[$contact->id] = $contact;
            }
            */

            /*
             * Сохранение изменений в записи
             *
            $query = "update K1_House set repair = 'ремонт изменен' where id = '788f10e5-4781-9f5a-dea0-5475985027b5'";
            $focus = new K1_House();
            $focus->retrieve('788f10e5-4781-9f5a-dea0-5475985027b5');
            $focus->repair = 'ремонт изменен';
            $focus->save();
            */

            /*
             * Добавление связанных записей

            $query = "insert into accounts_contacts (id, contact_id, account_id, date_modified, deleted) values (...)";
            $focus = new Account();
            $focus->retrieve('1e82be63-8a71-c698-78ce-5472f7a163f3');
            $focus->load_relationship('contacts');
            $focus->contacts->add('c6880ad3-991a-8fb3-6594-5472f7423d65');
            $focus->save();
            */

            /*
             * Удаление связанных записей
             *
            $query = "delete from accounts_contacts where contact_id = 'contact_id' and account_id = 'account_id'";
            $focus = new Account();
            $focus->retrieve('1e82be63-8a71-c698-78ce-5472f7a163f3');
            $focus->load_relationship('contacts');
            $focus->contacts->delete($focus->id,'c6880ad3-991a-8fb3-6594-5472f7423d65');
            $focus->save();
            */

            /*
             * Проверка на существование записи
             *
            $focus = new Account();
            $focus->retrieve('1e82be63-8a71-c698-78ce-5472f7a163f2');
            if($focus->id == ""){
                echo 'модели нет';
            }
            */

            /*
             * Удаление записи
             *
            $focus = new K1_House();
            $focus->retrieve('788f10e5-4781-9f5a-dea0-5475985027b5');
            $focus->deleted = true;
            $focus->save();
            */

            /*
             * Удаление значения связующего поля по id (разрывает связь для конкретной записи между таблицами)
             *
            $focus = new K1_House();
            $focus->delete_linked('cdde50f0-99a2-e6d3-b95b-54754a9cf575');
            */

            /*
             * Восстановление удаленной записи
             *
            $focus = new K1_House();
            $focus->retrieve('788f10e5-4781-9f5a-dea0-5475985027b5',true,false);
            $focus->deleted = false;
            $focus->save();
            */

            /*
             * Добавление записи
             *
            $focus = new K1_House();
            $focus->name = 'объект3';
            $focus->rooms = 2;
            $focus->address = 'адрес3';
            $focus->save();
            */

            /*
             * CRUD Create
             *
            $module = 'K1_House';
            $bean = BeanFactory::newBean($module);
            $bean->name = 'Example Record';
            $bean->save();
            $record_id = $bean->id;
            */

            /*
             * CRUD create с собственным id
             *
            $module = 'K1_House';
            $bean = BeanFactory::newBean($module);
            $bean->id = '38c90c70-7788-13a2-668d-513e2b8df5e2';
            $bean->new_with_id = true;
            $bean->name = 'Example Record';
            $bean->save();
            */

            /*
             * CRUD Read
             *
            $module = 'K1_House';
            $id = 'b840ac40-4169-713d-744a-5476c861bafd';
            $bean = BeanFactory::getBean($module,$id);
            */

            /*
             * CRUD Update
             *
            $module = 'K1_House';
            $id = '38c90c70-7788-13a2-668d-513e2b8df5e1';
            $bean = BeanFactory::getBean($module, $id);
            $bean->name = 'Updated Name';
            $bean->save();
            */

            /*
             * CRUD Update без изменения даты изменения
             *
            $module = 'K1_House';
            $id = '38c90c70-7788-13a2-668d-513e2b8df5e1';
            $bean = BeanFactory::getBean($module, $id);
            $bean->update_date_modified = false;
            $bean->name = 'Updated Name2';
            $bean->save();
            */

            /*
             * CRUD Delete
             *
            $module = 'K1_House';
            $id = '38c90c70-7788-13a2-668d-513e2b8df5e1';
            $bean = BeanFactory::getBean($module, $id);
            $bean->deleted = 1;
            $bean->save();
            */

            // проверить получение данных по связям один-ко-многим

            // как найти id последней добавленной записи из любой таблицы глянуть в dataBase

            /* Глобальные объекты */
            // current_user - экземпляр класса узер
            // timedate - модуль для работы со временем и датой ->getNow(true)->get_dat_begin(); get_time_format() ->fromTimestamp()->format() ->fromString()
            // db - работа с бд
            // app_list_strings - содержит переводы и все массивы, содержит элементы перечисления
            // mod_strings - доступ к языковым файлам того модуля, в котором обращаемся
            // locale $locale->getLocaleFormattedName($bean->first_name, $bean->last_name)
            // module
            // moduleList
            // module_name
            // sugar_config
            // focus
            // current_language
            // dictionary
            // app_strings
            // login_error
            // beanList
            // ACLActions - Это действия для данного модуля. Включает в себя уровни доступа для конкретного действия и метки для этого действия.
            // Для каждого объекта категории к примеру модуль, добавляются все связанные действия с ним.
            // ACLActionAccessLevels - описание для уровней доступа, использующее метку, цвет и цвет текста
            // sugar_version
            // sugar_flavor
            // server_unique_key
            // action
            // currentModule
            // theme
            // beanFiles
            // layout_defs
            // log   ->debug() ->fatal() ->error() ->info()

            // utf8tolatin
            // webcolor
            // unicode
            // unicode_mirror
            // unicode_arlet
            // laa_array
            // diacritics;
            // spacew
            // jfrompage
            // jtopage
            // jpage

            // odd_bg
            // even_bg
            // mod_strings
            // shared_user
            // json
            // xtpl
            // sugar_flavor
            // modListHeader
            // moduleTabMap
            // disable_date_format
            // listViewDefs
            // studioDefs
            // app
            // record
            // js_version_key
            // modInvisList
            // invalid_contact_fields
            // relationships
            // image_path
            // check_notify
            // server_unique_key
            // isMerge
            // genericAssocFieldsArray
            // moduleAssocFieldsArray
            // HTTP_SERVER_VARS
            // debug
            // $sugar_web_service_order_by
            // logic_hook
            // login_error
            // error_notice
            // RAW_REQUEST
            // module_menu
            // passwordsetting
            // list_max_entries_per_subpanel
            // import_max_execution_time
            // upload_maxsize
            // upload_dir
            // upload_badext
            // translation_string_prefix
            // tmp_dir
            // timeFormats
            // site_url
            // site_URL
            // session_dir
            // RSS_CACHE_TIME
            // requireAccounts
            // nameFormats
            // log_memory_usage
            // lock_default_user_name
            // list_max_entries_per_page
            // languages
            // import_dir
            // host_name
            // history_max_viewed
            // display_inbound_email_buttons
            // display_email_template_variable_chooser
            // disable_persistent_connections
            // $admin_export_only;
            // cache_dir;
            // calculate_response_time;
            // create_default_user;
            // dateFormats;
            // dbconfig;
            // dbconfigoption;
            // default_action;
            // default_charset;
            // default_currency_name;
            // default_currency_symbol;
            // default_currency_iso4217;
            // defaultDateFormat;
            // default_language;
            // default_module;
            // default_password;
            // default_permission_mode;
            // default_theme;
            // defaultTimeFormat;
            // default_user_is_admin;
            // default_user_name;
            // disable_export;






            //$_SESSION['ACL']
            // разобраться с ListViewSmarty $GLOBALS['current_user']->isAdminForModule('Users') && !$GLOBALS['current_user']->isDeveloperForModule('Users')
            // sugar_die('No Access');

            // $bean->fetched_row ?

            // изучить установление связей, где прописываются и как
            // вставлять в экземпляр объекта сразу все данные, а не для каждого

            global $mod_strings;
            echo '<pre>';
            print_r($mod_strings);
            echo '</pre>';
            $foceus = new K1_House();
            $id = '788f10e5-4781-9f5a-dea0-5475985027b5';

            $res = $foceus->getBean($id);
            $res = $this->getBean($id);
            echo '<pre>';
            //print_r($res);
            echo '</pre>';


        } else {
            echo 2;
        }

        //echo JSON::encode(array('vas' => 'das'));
    }
} 