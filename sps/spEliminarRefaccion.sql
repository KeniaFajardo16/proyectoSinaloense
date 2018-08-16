USE [proyectosinaloense]
GO
/****** Object:  StoredProcedure [dbo].[spEliminarRefaccion]    Script Date: 15/08/2018 06:07:24 p.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[spEliminarRefaccion]
@id as int
AS
BEGIN
	BEGIN TRY
		BEGIN TRAN TRANS
		DELETE FROM Refacciones WHERE folio_refaccion=@id
		COMMIT TRAN TRANS
	END TRY
	BEGIN CATCH
		ROLLBACK TRAN TRANS
	END CATCH
END
