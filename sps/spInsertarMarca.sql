USE [proyectosinaloense]
GO
/****** Object:  StoredProcedure [dbo].[spInsertarMarca]    Script Date: 15/08/2018 06:09:16 p.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[spInsertarMarca]
	@nombremarca as varchar(100) = null
AS
BEGIN
	INSERT INTO Marcas (nombre_marca) values (@nombremarca);
END