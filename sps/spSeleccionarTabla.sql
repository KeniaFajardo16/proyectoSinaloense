USE [proyectosinaloense]
GO
/****** Object:  StoredProcedure [dbo].[spSeleccionarTabla]    Script Date: 15/08/2018 06:15:55 p.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[spSeleccionarTabla]
	@tabla as varchar(100) = ''
AS
BEGIN
	exec('SELECT * FROM '+@tabla);
END
