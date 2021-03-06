USE [proyectosinaloense]
GO
/****** Object:  StoredProcedure [dbo].[spModificarCatalogo]    Script Date: 15/08/2018 06:10:51 p.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[spModificarCatalogo]
	@id as int,
	@vehiculo as int,
	@subcategoria as int
AS
BEGIN
	BEGIN TRY
		BEGIN TRAN tra
			UPDATE Catalogos SET vehiculo_catalogo=@vehiculo, subcategoria_catalogo=@subcategoria WHERE id_catalogo=@id
		COMMIT TRAN tra
	END TRY
	BEGIN CATCH
		ROLLBACK TRAN tra
	END CATCH
END
