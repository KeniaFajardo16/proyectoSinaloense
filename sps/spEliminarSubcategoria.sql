USE [proyectosinaloense]
GO
/****** Object:  StoredProcedure [dbo].[spEliminarSubcategoria]    Script Date: 15/08/2018 06:07:46 p.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[spEliminarSubcategoria]
@id as int
AS
BEGIN
	DELETE FROM SubCategorias WHERE id_subcategoria=@id
END
