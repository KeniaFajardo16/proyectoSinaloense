USE [proyectosinaloense]
GO
/****** Object:  StoredProcedure [dbo].[spEliminarDevolucion]    Script Date: 15/08/2018 06:06:29 p.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[spEliminarDevolucion]
	@folio as int
AS
BEGIN
	BEGIN TRY
		BEGIN TRAN tra;
			DELETE FROM Devoluciones WHERE folio_devolucion=@folio
		COMMIT TRAN tra;
	END TRY
	BEGIN CATCH
		ROLLBACK TRAN tra;
	END CATCH
END

