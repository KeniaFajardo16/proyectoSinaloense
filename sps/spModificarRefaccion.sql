USE [proyectosinaloense]
GO
/****** Object:  StoredProcedure [dbo].[spModificarRefaccion]    Script Date: 15/08/2018 06:12:37 p.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[spModificarRefaccion]
@descripcion as varchar(350),
@existencias as int,
@catalogo as int,
@proveedor as int,
@id as int
AS
BEGIN
	UPDATE Refacciones SET descripcion_refaccion=@descripcion,existencias_refaccion=@existencias,catalogo_refaccion=@catalogo,proveedor_refaccion=@proveedor WHERE folio_refaccion=@id; 
END
