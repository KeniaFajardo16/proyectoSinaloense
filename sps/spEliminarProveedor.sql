USE [proyectosinaloense]
GO
/****** Object:  StoredProcedure [dbo].[spEliminarProveedor]    Script Date: 15/08/2018 06:07:14 p.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[spEliminarProveedor]
@id as int
AS
BEGIN
	DELETE FROM Proveedores WHERE id_proveedor=@id
END
