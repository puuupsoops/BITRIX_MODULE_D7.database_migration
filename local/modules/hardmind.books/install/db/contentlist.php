<?php

use \Hardmind\Books\IssuerTable;
use \Hardmind\Books\AuthorTable;
use \Hardmind\Books\BookTable;
use \Hardmind\Books\CoauthorshipTable;

#Список Издательств
IssuerTable::add(array(
    'TITLE' => 'Издательство Woo-Commerce',
    'CITY'=> 'Москва',
    'AUTHOR_PROFIT' => 250
));

IssuerTable::add(array(
    'TITLE' => 'Издательство Тройка',
    'CITY'=> 'Краснодар',
    'AUTHOR_PROFIT' => 350
));

IssuerTable::add(array(
    'TITLE' => 'Издательство ПТР',
    'CITY'=> 'Москва',
    'AUTHOR_PROFIT' => 190
));

IssuerTable::add(array(
    'TITLE' => 'Издательство Грант Идеал',
    'CITY'=> 'Сочи',
    'AUTHOR_PROFIT' => 340
));

IssuerTable::add(array(
    'TITLE' => 'Издательство Первая Книга',
    'CITY'=> 'Таганрог',
    'AUTHOR_PROFIT' => 150
));

#Список Авторов
AuthorTable::add(array(
    'FIRST_NAME' => 'Юлия',
    'LAST_NAME' => 'Никитина',
    'SECOND_NAME' => 'Олеговна',
    'CITY' => 'Москва'
));

AuthorTable::add(array(
    'FIRST_NAME' => 'Всевлод',
    'LAST_NAME' => 'Николаев',
    'SECOND_NAME' => 'Васильевич',
    'CITY' => 'Таганрог'
));

AuthorTable::add(array(
    'FIRST_NAME' => 'Мария',
    'LAST_NAME' => 'Трунина',
    'SECOND_NAME' => 'Вадимовна',
    'CITY' => 'Краснодар'
));

AuthorTable::add(array(
    'FIRST_NAME' => 'Вадим',
    'LAST_NAME' => 'Клейман',
    'SECOND_NAME' => 'Иванович',
    'CITY' => 'Москва'
));

AuthorTable::add(array(
    'FIRST_NAME' => 'Олеся',
    'LAST_NAME' => 'Бирюза',
    'SECOND_NAME' => 'Викторовна',
    'CITY' => 'Сочи'
));

AuthorTable::add(array(
    'FIRST_NAME' => 'Константин',
    'LAST_NAME' => 'Шпак',
    'SECOND_NAME' => 'Григорьевич',
    'CITY' => 'Нижние Хны'
));

AuthorTable::add(array(
    'FIRST_NAME' => 'Алексей',
    'LAST_NAME' => 'Ким',
    'SECOND_NAME' => 'Алексеевич',
    'CITY' => 'Подольск'
));

#Список Книг

##################### 1
BookTable::add(array(
    'TITLE' => 'Загадочные приключения Хэнчетта и Листуона.',
    'YEAR'=> 2007,
    'COPIES_CNT' => 1200,
    'ISSUER_ID' => 4
));

CoauthorshipTable::add(array(
    'BOOK_ID' => 1,
    'AUTHOR_ID' => 2
));

CoauthorshipTable::add(array(
    'BOOK_ID' => 1,
    'AUTHOR_ID' => 3
));

##################### 2
BookTable::add(array(
    'TITLE' => 'Всё о коровах и быках.',
    'YEAR'=> 2010,
    'COPIES_CNT' => 600,
    'ISSUER_ID' => 1
));

CoauthorshipTable::add(array(
    'BOOK_ID' => 2,
    'AUTHOR_ID' => 3
));

##################### 3
BookTable::add(array(
    'TITLE' => 'Мемуары Алексея Кима',
    'YEAR'=> 1997,
    'COPIES_CNT' => 100,
    'ISSUER_ID' => 4
));

CoauthorshipTable::add(array(
    'BOOK_ID' => 3,
    'AUTHOR_ID' => 7
));

##################### 4
BookTable::add(array(
    'TITLE' => 'Безназвания 1',
    'YEAR'=> 2005,
    'COPIES_CNT' => 30,
    'ISSUER_ID' => 2
));

CoauthorshipTable::add(array(
    'BOOK_ID' => 4,
    'AUTHOR_ID' => 5
));

CoauthorshipTable::add(array(
    'BOOK_ID' => 4,
    'AUTHOR_ID' => 4
));

CoauthorshipTable::add(array(
    'BOOK_ID' => 4,
    'AUTHOR_ID' => 2
));

##################### 5
BookTable::add(array(
    'TITLE' => 'Белые лебеди.',
    'YEAR'=> 2010,
    'COPIES_CNT' => 700,
    'ISSUER_ID' => 3
));

CoauthorshipTable::add(array(
    'BOOK_ID' => 5,
    'AUTHOR_ID' => 1
));

CoauthorshipTable::add(array(
    'BOOK_ID' => 5,
    'AUTHOR_ID' => 3
));

##################### 6
BookTable::add(array(
    'TITLE' => 'Гиганты индустрии',
    'YEAR'=> 2017,
    'COPIES_CNT' => 3000,
    'ISSUER_ID' => 5
));

CoauthorshipTable::add(array(
    'BOOK_ID' => 6,
    'AUTHOR_ID' => 1
));

CoauthorshipTable::add(array(
    'BOOK_ID' => 6,
    'AUTHOR_ID' => 3
));

CoauthorshipTable::add(array(
    'BOOK_ID' => 6,
    'AUTHOR_ID' => 6
));

CoauthorshipTable::add(array(
    'BOOK_ID' => 6,
    'AUTHOR_ID' => 7
));

##################### 7
BookTable::add(array(
    'TITLE' => 'Мифы и Легенды: Титаник.',
    'YEAR'=> 2020,
    'COPIES_CNT' => 1000,
    'ISSUER_ID' => 4
));

CoauthorshipTable::add(array(
    'BOOK_ID' => 7,
    'AUTHOR_ID' => 3
));

CoauthorshipTable::add(array(
    'BOOK_ID' => 7,
    'AUTHOR_ID' => 4
));

##################### 8
BookTable::add(array(
    'TITLE' => 'Зотак.',
    'YEAR'=> 2012,
    'COPIES_CNT' => 560,
    'ISSUER_ID' => 4
));

CoauthorshipTable::add(array(
    'BOOK_ID' => 8,
    'AUTHOR_ID' => 3
));

CoauthorshipTable::add(array(
    'BOOK_ID' => 8,
    'AUTHOR_ID' => 4
));

?>