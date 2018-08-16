USE [proyectosinaloense]
GO
/****** Object:  StoredProcedure [dbo].[spEliminarCatalogo]    Script Date: 15/08/2018 06:06:08 p.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[spEliminarCatalogo]
	@id as int
AS
BEGIN
	BEGIN TRY
		BEGIN TRAN
			DELETE FROM Catalogos WHERE id_catalogo=@id
		COMMIT TRAN
	END TRY
	BEGIN CATCH
		ROLLBACK TRAN
	END CATCH
END
