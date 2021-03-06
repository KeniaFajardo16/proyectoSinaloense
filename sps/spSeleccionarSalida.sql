USE [proyectosinaloense]
GO
/****** Object:  StoredProcedure [dbo].[spSeleccionarSalida]    Script Date: 15/08/2018 06:15:30 p.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[spSeleccionarSalida]
AS
BEGIN
	SELECT folio_salida,fecha_salida,folio_refaccion,descripcion_refaccion as 'refaccion_salida',cantidad_salida,descripcion as 'almacen_salida' FROM Salidas INNER JOIN Refacciones ON Salidas.refaccion_salida=Refacciones.folio_refaccion INNER JOIN Almacenes ON Almacenes.id_almacen=Salidas.almacen_salida ORDER BY folio_salida
END