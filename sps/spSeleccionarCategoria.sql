USE [proyectosinaloense]
GO
/****** Object:  StoredProcedure [dbo].[spSeleccionarCategoria]    Script Date: 15/08/2018 06:13:55 p.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[spSeleccionarCategoria]
AS
BEGIN
	SELECT * FROM Categorias ORDER BY nombre_categoria
END
