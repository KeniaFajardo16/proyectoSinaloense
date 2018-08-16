USE [proyectosinaloense]
GO
/****** Object:  StoredProcedure [dbo].[spLogin]    Script Date: 15/08/2018 06:10:28 p.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[spLogin]
@usuario as varchar(30),
@pass as varchar(50)
AS
BEGIN
	IF EXISTS(SELECT * FROM Usuarios WHERE usuario=@usuario AND pass=@pass)
	BEGIN
		SELECT 1 AS COINCINDECIA;
	END
	ELSE
	BEGIN
		SELECT 0 AS COINCINDECIA;
	END
END
