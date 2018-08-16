USE [proyectosinaloense]
GO
/****** Object:  StoredProcedure [dbo].[spSeleccionarDevolucion]    Script Date: 15/08/2018 06:14:51 p.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[spSeleccionarDevolucion]
AS
BEGIN
	SELECT folio_devolucion, fecha_devolucion, folio_salida, descripcion_refaccion, cantidad_salida, descripcion as 'almacen_devolucion', observacion_devolucion  FROM Devoluciones INNER JOIN Salidas ON Devoluciones.salida_devolucion=Salidas.folio_salida INNER JOIN Refacciones ON Salidas.refaccion_salida=Refacciones.folio_refaccion INNER JOIN Almacenes ON Devoluciones.almacen_devolucion=Almacenes.id_almacen
END
