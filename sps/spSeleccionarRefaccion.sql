USE [proyectosinaloense]
GO
/****** Object:  StoredProcedure [dbo].[spSeleccionarRefaccion]    Script Date: 15/08/2018 06:15:22 p.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[spSeleccionarRefaccion]
AS
BEGIN
	SELECT folio_refaccion, descripcion_refaccion, existencias_refaccion, descripcion_modelo, anio_vehiculo, nombre_subcategoria, nombre_proveedor FROM Catalogos c INNER JOIN Vehiculos v on c.vehiculo_catalogo=v.id_vehiculo INNER JOIN Modelos m on m.id_modelo=v.modelo_vehiculo INNER JOIN SubCategorias sc on sc.id_subcategoria=c.subcategoria_catalogo INNER JOIN Refacciones r on r.catalogo_refaccion=c.id_catalogo INNER JOIN Proveedores p on p.id_proveedor=r.proveedor_refaccion
END
