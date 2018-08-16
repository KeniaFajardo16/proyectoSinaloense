USE [proyectosinaloense]
GO
/****** Object:  StoredProcedure [dbo].[spInsertarRefaccion]    Script Date: 15/08/2018 06:09:39 p.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[spInsertarRefaccion]
@descripcion as varchar(350),
@existencias as int,
@catalogo int,
@proveedor int
AS
BEGIN
	INSERT INTO Refacciones (descripcion_refaccion,existencias_refaccion,catalogo_refaccion,proveedor_refaccion) VALUES (@descripcion,@existencias,@catalogo,@proveedor);
END