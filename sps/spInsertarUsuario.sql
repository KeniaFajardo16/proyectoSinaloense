USE [proyectosinaloense]
GO
/****** Object:  StoredProcedure [dbo].[spInsertarUsuario]    Script Date: 15/08/2018 06:10:11 p.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[spInsertarUsuario]
	@nombreUsuario as varchar(100) = null,
	@tipoUsuario as int = null,
	@usuario as varchar(30),
	@pass as varchar(50)
AS
BEGIN
	INSERT INTO Usuarios (nombre_usuario, tipo_usuario, usuario, pass) values (@nombreUsuario,@tipoUsuario,@usuario,@pass); 
END
