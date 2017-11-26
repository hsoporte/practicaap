/*
	Esta consulta CALCULA los creditos acumulados de un usuario segun los eventos que tiene marcados como
	ASISTIDO = 1
*/
SELECT SUM(CREDITOS) AS TOTAL_CREDITOS FROM EVENTO 
NATURAL JOIN EVENTO_USUARIO
NATURAL JOIN USUARIO
WHERE NOMBRE_USUARIO = 'DEGUALTEROS' AND ASISTIDO = 1;