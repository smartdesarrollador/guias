CREATE PROCEDURE consulta @nombre nvarchar(20), @telefono int
AS
BEGIN -- Comienzo 

SELECT * 
FROM clientes
WHERE nombre = @nombre AND telefono = @telefono;

PRINT 'hecho correctamente';

END -- Final

-- Ejecutar
EXEC consulta 'eduardo',1234