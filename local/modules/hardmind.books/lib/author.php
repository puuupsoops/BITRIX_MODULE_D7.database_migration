<?php
namespace Hardmind\Books;
 
use Bitrix\Main\Entity;
use Bitrix\Main\Type;
use Bitrix\Main\Localization\Loc;
use Bitrix\Main\ORM\Fields\Relations;

class AuthorTable extends Entity\DataManager {

    public static function getTableName()
   {
      return 'authors_table';
   }

   public static function getMap()
   {
      return array(

         //ID - Уникальный ID записи
         new Entity\IntegerField('ID', array(
            'primary' => true,
            'autocomplete' => true
         )),

         //FIRST_NAME - Имя
         new Entity\StringField('FIRST_NAME', array(
            'required' => true,
            'column_name' => "NAME"
         )),

         //LAST_NAME - Фамилия
         new Entity\StringField('LAST_NAME', array(
            'required' => true
         )),

         //SECOND_NAME - Отчество
         new Entity\StringField('SECOND_NAME'),

         //CITY - Город проживания
         new Entity\StringField('CITY', array(
            'required' => true
         )),

         //2.Организовать связи (доработать структуру)
         // 2.1.У одного автора может быть написано несколько книг (связь n.m) 
         #(new Relations\ManyToMany('BOOKS', \Hardmind\Books\BookTable::class))
         #   ->configureTableName('coauthorship_table')
         #   ->configureLocalPrimary('ID', 'AUTHOR_ID')
         #   ->configureLocalReference('AUTHOR')
         #   ->configureRemotePrimary('ID', 'BOOK_ID')
         #   ->configureRemoteReference('BOOK')
      );       
   } 

}

?>