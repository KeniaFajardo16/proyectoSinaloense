USE [proyectosinaloense]
GO
/****** Object:  StoredProcedure [dbo].[spSeleccionarUsuario]    Script Date: 15/08/2018 06:16:04 p.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[spSeleccionarUsuario]
AS
BEGIN
	SELECT * FROM Usuarios
END
