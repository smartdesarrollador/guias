SELECT a.nombre_comuna , b.nombre_sucursal
FROM comuna a, sucursal b
WHERE a.comuna_id=b.comuna_id