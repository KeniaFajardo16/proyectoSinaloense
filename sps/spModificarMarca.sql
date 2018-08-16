USE [proyectosinaloense]
GO
/****** Object:  StoredProcedure [dbo].[spModificarMarca]    Script Date: 15/08/2018 06:11:15 p.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[spModificarMarca]
	@idmarca as int = null,
	@nombremarca as varchar(100) = null
AS
BEGIN
	UPDATE Marcas SET nombre_marca=@nombremarca WHERE id_marca=@idmarca;
END
