USE [proyectosinaloense]
GO
/****** Object:  StoredProcedure [dbo].[spEliminarEntrada]    Script Date: 15/08/2018 06:06:40 p.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[spEliminarEntrada]
@folio as int
AS
BEGIN
	DELETE FROM Entradas WHERE folio_entrada=@folio
END
