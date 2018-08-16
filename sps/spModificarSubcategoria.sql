USE [proyectosinaloense]
GO
/****** Object:  StoredProcedure [dbo].[spModificarSubcategoria]    Script Date: 15/08/2018 06:12:59 p.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[spModificarSubcategoria]
@id as int,
@subcategoria as varchar(50),
@categoria as int
AS
BEGIN
	UPDATE SubCategorias SET nombre_subcategoria=@subcategoria, categoria_subcategoria=@categoria WHERE id_subcategoria=@id
END