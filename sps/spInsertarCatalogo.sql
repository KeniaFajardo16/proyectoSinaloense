USE [proyectosinaloense]
GO
/****** Object:  StoredProcedure [dbo].[spInsertarCatalogo]    Script Date: 15/08/2018 06:08:37 p.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[spInsertarCatalogo]
	@vehiculo as int,
	@subcategoria as int
AS
BEGIN
	BEGIN TRY
		BEGIN TRAN tra;
		INSERT INTO Catalogos (vehiculo_catalogo,subcategoria_catalogo) VALUES (@vehiculo,@subcategoria);
		COMMIT TRAN tra;
	END TRY
	BEGIN CATCH
		ROLLBACK TRAN tra;
	END CATCH
END
