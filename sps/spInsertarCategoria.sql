USE [proyectosinaloense]
GO
/****** Object:  StoredProcedure [dbo].[spInsertarCategoria]    Script Date: 15/08/2018 06:08:46 p.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[spInsertarCategoria]
	@categoria as varchar(100) = null
AS
BEGIN
	INSERT INTO Categorias (nombre_categoria) VALUES (@categoria)
END