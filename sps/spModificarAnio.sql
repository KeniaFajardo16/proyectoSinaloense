USE [proyectosinaloense]
GO
/****** Object:  StoredProcedure [dbo].[spModificarAnio]    Script Date: 15/08/2018 06:10:39 p.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[spModificarAnio]
	@id int = null,
	@anio as varchar(100) = null
AS
BEGIN
	UPDATE Anios SET descripcion_anio=@anio WHERE id_anio=@id;
END
