<?php
//Промежуточная таблица для хранения значений 

namespace Hardmind\Books;
 
use Bitrix\Main\Entity;
use Bitrix\Main\Type;
use Bitrix\Main\Localization\Loc;

class CoauthorshipTable extends Entity\DataManager {

    public static function getTableName()
   {
      return 'coauthorship_table';
   }

   public static function getMap()
   {
      return array(
        
         //2.Организовать связи (доработать структуру)
         // 2.1.У одного автора может быть написано несколько книг (связь n.m) 
         // 2.2.У одной книги может быть несколько соавторов (связь n.m)  
         //ID - Уникальный ID записи
         new Entity\IntegerField('ID', array(
            'primary' => true,
            'autocomplete' => true
         )),

         //Книга
         new Entity\IntegerField('BOOK_ID'),

         new Entity\ReferenceField(
            'BOOK',
            '\Hardmind\Books\BookTable',
            array('=this.BOOK_ID'=>'ref.ID')   
         ),

         //Соавтор
         new Entity\IntegerField('AUTHOR_ID'),

         new Entity\ReferenceField(
            'AUTHOR',
            '\Hardmind\Books\AuthorTable',
            array('=this.AUTHOR_ID'=>'ref.ID')   
         )
      );       
   } 

}

?>