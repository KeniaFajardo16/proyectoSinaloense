USE [proyectosinaloense]
GO
/****** Object:  StoredProcedure [dbo].[spEliminarModelo]    Script Date: 15/08/2018 06:07:06 p.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[spEliminarModelo]
	@id as int
AS
BEGIN
	DELETE FROM Modelos WHERE id_modelo=@id
END