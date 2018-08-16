USE [proyectosinaloense]
GO
/****** Object:  StoredProcedure [dbo].[spSeleccionarSubcategoria]    Script Date: 15/08/2018 06:15:39 p.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[spSeleccionarSubcategoria]
AS
BEGIN
	SELECT id_subcategoria, nombre_subcategoria, nombre_categoria FROM SubCategorias sc INNER JOIN Categorias c ON sc.categoria_subcategoria=c.id_categoria
END
