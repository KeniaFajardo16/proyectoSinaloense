USE [proyectosinaloense]
GO
/****** Object:  StoredProcedure [dbo].[spInsertarModelo]    Script Date: 15/08/2018 06:09:24 p.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

CREATE PROCEDURE [dbo].[spInsertarModelo]
	@modelo as varchar(100)
AS
BEGIN
	INSERT INTO Modelos (descripcion_modelo) VALUES (@modelo)
END