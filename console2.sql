#1Подсчитать количество книг каждого автора (наименований). Столбцы ответа: Имя автора, общее количество книг
SELECT a.NAME, count(b.NAME)
FROM book b
	     inner join author_book ab on b.ID = ab.AUTHOR_ID
	     inner join author a on a.ID = ab.AUTHOR_ID
GROUP BY name;


#2Подсчитать суммарный остаток книг каждого автора во всех магазинах. Столбцы ответа: Имя автора, Город магазина, Суммарный остаток книг
select NAME,
       CITY,
       SUM(QUANTITY)
from book_store bs
	     inner join author_book ab on bs.BOOK_ID = ab.BOOK_ID
	     inner join store s on bs.STORE_ID = s.ID
	     inner join author a on ab.AUTHOR_ID = a.ID
group by NAME, CITY;

#3Вывести среднюю стоимость книг издательства «Азбука». Столбцы ответа: Название книги, средняя стоимость.
select NAME,
       AVG(PRICE)
from book_store bs
	     inner join book b on bs.BOOK_ID = b.ID
where PUBLISHER_ID = 3
group by NAME;

#4Вывести среднюю стоимость книг издательства «Азбука» в каждом магазине. Столбцы ответа: Город, Название книги, средняя стоимость
select CITY,
       NAME,
       AVG(PRICE)
from book_store bs
	     inner join book b on bs.BOOK_ID = b.ID
	     inner join store s on bs.STORE_ID = s.ID
where PUBLISHER_ID = 3
group by CITY, NAME;

#5Вывести разницу между остатком книг в Калининграде и Черняховске. Столбцы ответа: Название книги, остаток в Калининграде, остаток в Черняховске, Разница.
select NAME,
       bs1.QUANTITY as QUANTITY_KLD,
       COALESCE(bs2.QUANTITY, 0) as QUANTITY_CHRN,
       ABS(bs1.QUANTITY - COALESCE(bs2.QUANTITY, 0)) as VARIANCE
from book
	     inner join book_store bs1 on book.ID = bs1.BOOK_ID and bs1.STORE_ID = 1
	     left join book_store bs2 on book.ID = bs2.BOOK_ID and bs2.STORE_ID = 2
order by NAME, QUANTITY_KLD, VARIANCE;