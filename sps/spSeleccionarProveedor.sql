USE [proyectosinaloense]
GO
/****** Object:  StoredProcedure [dbo].[spSeleccionarProveedor]    Script Date: 15/08/2018 06:15:16 p.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[spSeleccionarProveedor]
AS
BEGIN
	SELECT id_proveedor,rfc_proveedor, nombre_proveedor, telefono_proveedor, cp_proveedor, nombre_ciudad FROM Proveedores INNER JOIN Ciudades on Proveedores.ciudad_proveedor=Ciudades.id_ciudad
END
