USE [proyectosinaloense]
GO
/****** Object:  StoredProcedure [dbo].[spModificarCategoria]    Script Date: 15/08/2018 06:10:59 p.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[spModificarCategoria]
	@id as int,
	@categoria as varchar(100)
AS
BEGIN
	UPDATE Categorias SET nombre_categoria=@categoria WHERE id_categoria=@id
END