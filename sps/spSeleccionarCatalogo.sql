USE [proyectosinaloense]
GO
/****** Object:  StoredProcedure [dbo].[spSeleccionarCatalogo]    Script Date: 15/08/2018 06:13:46 p.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[spSeleccionarCatalogo]
AS
BEGIN
	SELECT id_catalogo, id_vehiculo, id_subcategoria, descripcion_modelo, anio_vehiculo, nombre_subcategoria, ma.nombre_marca FROM Catalogos c INNER JOIN Vehiculos v on c.vehiculo_catalogo=v.id_vehiculo INNER JOIN Modelos m on m.id_modelo=v.modelo_vehiculo INNER JOIN SubCategorias sc on sc.id_subcategoria=c.subcategoria_catalogo INNER JOIN Marcas ma on v.marca_vehiculo=ma.id_marca 
END
