USE [proyectosinaloense]
GO
/****** Object:  StoredProcedure [dbo].[spModificarModelo]    Script Date: 15/08/2018 06:11:25 p.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[spModificarModelo]
	@id as int,
	@modelo as varchar(100)
AS
BEGIN
	UPDATE Modelos SET descripcion_modelo=@modelo WHERE id_modelo=@id
END