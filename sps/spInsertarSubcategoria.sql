USE [proyectosinaloense]
GO
/****** Object:  StoredProcedure [dbo].[spInsertarSubcategoria]    Script Date: 15/08/2018 06:10:00 p.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[spInsertarSubcategoria]
@subcategoria as varchar(100),
@categoria as int
AS
BEGIN
	INSERT INTO SubCategorias (nombre_subcategoria, categoria_subcategoria) VALUES (@subcategoria,@categoria)
END
