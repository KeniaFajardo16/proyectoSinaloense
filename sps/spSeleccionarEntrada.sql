USE [proyectosinaloense]
GO
/****** Object:  StoredProcedure [dbo].[spSeleccionarEntrada]    Script Date: 15/08/2018 06:14:59 p.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[spSeleccionarEntrada]
AS
BEGIN
	SELECT folio_entrada,fecha_entrada as 'fecha_entrada',descripcion_refaccion as 'refaccion_entrada',cantidad_entrada,descripcion as 'almacen_entrada' FROM Entradas INNER JOIN Refacciones ON Entradas.refaccion_entrada=Refacciones.folio_refaccion INNER JOIN Almacenes ON Almacenes.id_almacen=Entradas.almacen_entrada
END
