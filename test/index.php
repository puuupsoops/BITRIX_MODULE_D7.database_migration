<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("test");
?>

<?php
echo '<h4> Количество книг автора F в издательстве P </h4>';

if (CModule::IncludeModule("hardmind.books")){
    Hardmind\Books\Test::getAuthorBookCountByIssuer(); #[params: $authorLastName , $issuer]
}

echo '<h4> Доход соавторов </h4>';

if (CModule::IncludeModule("hardmind.books")){
    Hardmind\Books\Test::foo(); #[params: $bookTitle]
}

?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>