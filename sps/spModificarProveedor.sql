USE [proyectosinaloense]
GO
/****** Object:  StoredProcedure [dbo].[spModificarProveedor]    Script Date: 15/08/2018 06:12:01 p.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[spModificarProveedor]
@id as int,
@rfc as varchar(30),
@nombre as varchar(100),
@ciudad as int,
@telefono as varchar(20),
@cp as varchar(100)
AS
BEGIN
	UPDATE Proveedores SET rfc_proveedor=@rfc, nombre_proveedor=@rfc, ciudad_proveedor=@ciudad, telefono_proveedor=@telefono, cp_proveedor=@cp WHERE id_proveedor=@id
END
