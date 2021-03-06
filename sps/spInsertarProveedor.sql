USE [proyectosinaloense]
GO
/****** Object:  StoredProcedure [dbo].[spInsertarProveedor]    Script Date: 15/08/2018 06:09:32 p.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[spInsertarProveedor]
@rfc as varchar(30),
@nombre as varchar(100),
@ciudad as int,
@telefono as varchar(20),
@cp as varchar(100)
AS
BEGIN
	INSERT INTO Proveedores (rfc_proveedor,nombre_proveedor,ciudad_proveedor, telefono_proveedor, cp_proveedor) VALUES (@rfc, @nombre, @ciudad, @telefono, @cp)
END
