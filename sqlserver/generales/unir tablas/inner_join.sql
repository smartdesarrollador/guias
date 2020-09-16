SELECT a.nombre_comuna, b.nombre_sucursal
FROM comuna a INNER JOIN sucursal b
ON a.comuna_id=b.comuna_id