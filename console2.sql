SELECT name, sum(quantity)
FROM book_store b
	     inner join author_book ab on b.BOOK_ID = ab.BOOK_ID
	     inner join author a on ab.AUTHOR_ID = a.ID
GROUP BY name;


select NAME,
       CITY,
       SUM(QUANTITY)
from book_store bs
	     inner join author_book ab on bs.BOOK_ID = ab.BOOK_ID
	     inner join store s on bs.STORE_ID = s.ID
	     inner join author a on ab.AUTHOR_ID = a.ID
group by NAME, CITY;


select NAME,
       AVG(PRICE)
from book_store bs
	     inner join book b on bs.BOOK_ID = b.ID
where PUBLISHER_ID = 3
group by NAME;


select CITY,
       NAME,
       AVG(PRICE)
from book_store bs
	     inner join book b on bs.BOOK_ID = b.ID
	     inner join store s on bs.STORE_ID = s.ID
where PUBLISHER_ID = 3
group by CITY, NAME;


select NAME,
       bs1.QUANTITY as QUANTITY_KLD,
       bs2.QUANTITY as QUANTITY_CHRN,
       ABS(bs1.QUANTITY - bs2.QUANTITY) as VARIANCE
from book
	     inner join book_store bs1 on book.ID = bs1.BOOK_ID and bs1.STORE_ID = 1
	     inner join book_store bs2 on book.ID = bs2.BOOK_ID and bs2.STORE_ID = 2
order by NAME, QUANTITY_KLD, QUANTITY_CHRN, VARIANCE;