USE [proyectosinaloense]
GO
/****** Object:  StoredProcedure [dbo].[spModificarEntrada]    Script Date: 15/08/2018 06:11:07 p.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[spModificarEntrada]
@folio as int,
@fecha as datetime,
@refaccion as int,
@cantidad as int,
@almacen as int
AS
BEGIN
	UPDATE Entradas SET fecha_entrada=@fecha, refaccion_entrada=@refaccion, cantidad_entrada=@cantidad, almacen_entrada=@almacen WHERE folio_entrada=@folio
END
