USE [proyectosinaloense]
GO
/****** Object:  StoredProcedure [dbo].[spEliminarUsuario]    Script Date: 15/08/2018 06:07:54 p.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[spEliminarUsuario]
	@id as int = 0
AS
BEGIN
	DELETE FROM Usuarios WHERE id_usuario = @id
END
