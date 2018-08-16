USE [proyectosinaloense]
GO
/****** Object:  StoredProcedure [dbo].[spInsertarAnio]    Script Date: 15/08/2018 06:08:27 p.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[spInsertarAnio]
	@id as int,
	@anio as varchar(100) = null
AS
BEGIN
	INSERT INTO Anios (id_anio,descripcion_anio) values (@id,@anio);
END