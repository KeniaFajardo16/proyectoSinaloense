USE [proyectosinaloense]
GO
/****** Object:  StoredProcedure [dbo].[spEliminarSalida]    Script Date: 15/08/2018 06:07:37 p.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[spEliminarSalida]
@folio as int
AS
BEGIN
	BEGIN TRY
		BEGIN TRAN
			DELETE FROM Salidas WHERE folio_salida=@folio
		COMMIT TRAN
	END TRY
	BEGIN CATCH
		ROLLBACK TRAN
	END CATCH
END
