<?php
namespace Hardmind\Books;
 
use Bitrix\Main\Entity;
use Bitrix\Main\Type;
use Bitrix\Main\Localization\Loc;
use Bitrix\Main\ORM\Fields\Relations;

class BookTable extends Entity\DataManager {

    public static function getTableName()
   {
      return 'books_table';
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

         //YEAR - Год издания 
         new Entity\IntegerField('YEAR', array(
            'required' => true
         )),

         //COPIES_CNT - Тираж (фр. tirage)
         new Entity\IntegerField('COPIES_CNT', array(
            'required' => true,
            'column_name' => "TIRAGE"
         )),

         //2.Организовать связи (доработать структуру)
         // 2.3.Одна книга печатается в одном издательстве (связь 1.1)
         new Entity\IntegerField('ISSUER_ID'),
         
         new Entity\ReferenceField(
            'ISSUER',
            '\Hardmind\Books\IssuerTable',
            array('=this.ISSUER_ID'=>'ref.ID')   
         ),

         //2.Организовать связи (доработать структуру)
         // 2.2.У одной книги может быть несколько соавторов (связь n.m)  
         #(new Relations\ManyToMany('AUTHORS', \Hardmind\Books\AuthorTable::class))
         #   ->configureTableName('coauthorship_table')
         #   ->configureLocalPrimary('ID', 'BOOK_ID')
         #   ->configureLocalReference('BOOK')
         #   ->configureRemotePrimary('ID', 'AUTHOR_ID')
         #   ->configureRemoteReference('AUTHOR')
      );       
   } 

}

?>