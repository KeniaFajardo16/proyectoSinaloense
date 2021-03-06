USE [proyectosinaloense]
GO
/****** Object:  StoredProcedure [dbo].[spModificarUsuario]    Script Date: 15/08/2018 06:13:07 p.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[spModificarUsuario]
	@nombreUsuario as varchar(100) = null,
	@tipoUsuario as int = null,
	@usuario as varchar(30) = null,
	@pass as varchar(50) = null,
	@id as int = 0
AS
BEGIN
	UPDATE Usuarios SET nombre_usuario = @nombreUsuario, tipo_usuario = @tipoUsuario, usuario = @usuario, pass = @pass WHERE id_usuario = @id;
END
