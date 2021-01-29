<?php
 
namespace Hardmind\Books;
 
use Hardmind\Books\BookTable;
use Hardmind\Books\CoauthorshipTable;
use Hardmind\Books\IssuerTable;
use Hardmind\Books\AuthorTable;
use Bitrix\Main\Entity;

class Test  {
    public function foo($bookTitle = 'Гиганты индустрии'){

            $result = \Hardmind\Books\CoauthorshipTable::getList(array(
                'select' => array(
                    'AUTHOR_LAST_NAME' => 'AUTHOR.LAST_NAME', 
                    'BOOK_TITLE' => 'BOOK.TITLE', 
                    'ISSUER_TITLE' => 'BOOK.ISSUER.TITLE', 
                    'BOOK_COPIES_CNT' => 'BOOK.COPIES_CNT',
                    'AUTHOR_COUNT'
                ),
                'filter' => array('%=BOOK_TITLE' => $bookTitle.'%'),
                'runtime' => array(
                    new Entity\ExpressionField('AUTHOR_COUNT', 'COUNT(*)')
                )
            ))->fetchAll();
        

        echo '<pre>';     
        var_dump($result);
        echo '</pre>';
       
    }

    public function getAuthorBookCountByIssuer($authorLastName = 'Трунина' ,$issuer = 'Издательство Грант Идеал'){

        $parameters = array(
            'select' => array(
                'CNT',
                'AUTHOR_LAST_NAME' => 'AUTHOR.LAST_NAME', 
                'BOOK_TITLE' => 'BOOK.TITLE',
                'ISSUER_TITLE' => 'BOOK.ISSUER.TITLE'
            ),
            'filter' => array(
                'LOGIC' => 'AND',
                array('%=AUTHOR_LAST_NAME' => $authorLastName.'%'),
                array('%=ISSUER_TITLE' => $issuer.'%') 
            ),
            'runtime' => array(
                new Entity\ExpressionField('CNT', 'COUNT(*)')
            )
        );

        $result = \Hardmind\Books\CoauthorshipTable::getList($parameters)->fetchAll();

        echo '<p>';
        echo 'Количество книг автора [ <b>' . $authorLastName . '] </b> напечатанных в издательстве : <b>' . $issuer . '</b> = <b>' .  count($result) . '</b>' ;
        echo '</p>';        

        echo '<pre>';     
        var_dump($result);
        echo '</pre>'; 

        echo '</ hr>';
    }

}

?>