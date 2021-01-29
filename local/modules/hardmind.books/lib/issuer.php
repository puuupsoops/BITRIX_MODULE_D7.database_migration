<?php
namespace Hardmind\Books;
 
use Bitrix\Main\Entity;
use Bitrix\Main\Type;
use Bitrix\Main\Localization\Loc;

class IssuerTable extends Entity\DataManager {

    public static function getTableName()
   {
      return 'issuers_table';
   }

   public static function getMap()
   {
      return array(
         //ID - Уникальный ID записи
         new Entity\IntegerField('ID', array(
            'primary' => true,
            'autocomplete' => true
         )),

         //TITLE - Название
         new Entity\StringField('TITLE', array(
            'required' => true
         )),

         //CITY - Город
         new Entity\StringField('CITY', array(
            'required' => true
         )),

         //AUTHOR_PROFIT - Гонорар автора за экземпляр
         new Entity\IntegerField('AUTHOR_PROFIT', array(
            'required' => true,
            'column_name' => "REWARD"
         ))
      );       
   } 

}

?>