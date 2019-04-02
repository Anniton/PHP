SELECT name FROM distrib 
WHERE (id_distrib = '42' OR (id_distrib <= '69' 
AND id_distrib >= '62') 
OR id_distrib = '71' 
OR (id_distrib <= '90' AND id_distrib >= '88')) 
OR LOWER(name) LIKE "%y%Y%"
LIMIT 5 OFFSET 3;