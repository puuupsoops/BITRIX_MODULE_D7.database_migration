<?php

use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Config as Conf;
use Bitrix\Main\Config\Option;
use Bitrix\Main\Loader;
use Bitrix\Main\Entity\Base;
use Bitrix\Main\Application;
use Bitrix\Main\ModuleManager;

Loc::loadMessages(__FILE__);

class hardmind_books extends CModule
{
    var $MODULE_ID = "hardmind.books";
    var $MODULE_VERSION;
    var $MODULE_VERSION_DATE;
    var $MODULE_NAME;
    var $MODULE_DESCRIPTION;
    var $PARTNER_NAME;
    var $PARTNER_URI;

    function hardmind_books(){
        
        $arModuleVersion = array();
        include(__DIR__."/version.php");

        $this->MODULE_VERSION = $arModuleVersion["VERSION"];
        $this->MODULE_VERSION_DATE = $arModuleVersion["VERSION_DATE"];
        $this->MODULE_NAME = Loc::getMessage("HARDMIND_D7_MODULE_NAME");
        $this->MODULE_DESCRIPTION = Loc::getMessage("HARDMIND_D7_MODULE_DESCRIPTION");
        $this->PARTNER_NAME = Loc::getMessage("HARDMIND_D7_PARTNER_NAME");
        $this->PARTNER_URI = Loc::getMessage("HARDMIND_D7_PARTNER_URI");
    }
    
    public function GetPath($notDocumentRoot=false){
        if($notDocumentRoot)
            return str_ireplace(Application::getDocumentRoot(),'',dirname(__DIR__));
        else
            return dirname(__DIR__);    
    }

    function DoInstall(){

        global $APPLICATION;

        if (!IsModuleInstalled($this->MODULE_ID))
        {
            $this->InstallDB();
            $this->InstallEvents();
            $this->InstallFiles();
        }
    }

    function DoUninstall(){
        
        #global $APPLICATION;

        $this->UnInstallDB();
        $this->UnInstallEvents();
        $this->UnInstallFiles();
        
       # $APPLICATION->IncludeAdminFile(Loc::getMessage("HARDMIND_D7_UNINSTALL_TITLE"),$this->GetPath()."/install/unstep.php");
    }

    function InstallDB(){

        global $APPLICATION;

        RegisterModule($this->MODULE_ID);

        Loader::includeModule($this->MODULE_ID);

        if(!Application::getConnection(\Hardmind\Books\BookTable::getConnectionName())->isTableExists(Base::getInstance('\Hardmind\Books\BookTable')->getDBTableName()))
            Base::getInstance('\Hardmind\Books\BookTable')->createDBTable();
        
        if(!Application::getConnection(\Hardmind\Books\AuthorTable::getConnectionName())->isTableExists(Base::getInstance('\Hardmind\Books\AuthorTable')->getDBTableName()))
            Base::getInstance('\Hardmind\Books\AuthorTable')->createDBTable();    

        if(!Application::getConnection(\Hardmind\Books\IssuerTable::getConnectionName())->isTableExists(Base::getInstance('\Hardmind\Books\IssuerTable')->getDBTableName()))
            Base::getInstance('\Hardmind\Books\IssuerTable')->createDBTable();

        if(!Application::getConnection(\Hardmind\Books\CoauthorshipTable::getConnectionName())->isTableExists(Base::getInstance('\Hardmind\Books\CoauthorshipTable')->getDBTableName()))
            Base::getInstance('\Hardmind\Books\CoauthorshipTable')->createDBTable();  

        include(__DIR__."/db/contentlist.php");

        return true;
    }

    function UnInstallDB(){

        global $APPLICATION;

        Loader::includeModule($this->MODULE_ID);

        Application::getConnection(\Hardmind\Books\CoauthorshipTable::getConnectionName())->
            queryExecute('drop table if exists ' . Base::getInstance('\Hardmind\Books\CoauthorshipTable')->getDBTableName());

        Application::getConnection(\Hardmind\Books\BookTable::getConnectionName())->
            queryExecute('drop table if exists ' . Base::getInstance('\Hardmind\Books\BookTable')->getDBTableName());

        Application::getConnection(\Hardmind\Books\AuthorTable::getConnectionName())->
            queryExecute('drop table if exists ' . Base::getInstance('\Hardmind\Books\AuthorTable')->getDBTableName());

        Application::getConnection(\Hardmind\Books\IssuerTable::getConnectionName())->
            queryExecute('drop table if exists ' . Base::getInstance('\Hardmind\Books\IssuerTable')->getDBTableName());

        UnRegisterModule($this->MODULE_ID);

        return true;
    }

    function InstallEvents(){

        return true;
    }
 
    function UnInstallEvents(){

        return true;
    }
 
    function InstallFiles(){

        return true;
    }
 
    function UnInstallFiles(){

        return true;
    }
}
?>