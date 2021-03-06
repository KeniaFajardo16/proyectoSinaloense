USE [proyectosinaloense]
GO
/****** Object:  StoredProcedure [dbo].[spModificarSalida]    Script Date: 15/08/2018 06:12:45 p.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[spModificarSalida]
@folio as int,
@fecha as date,
@refaccion as int,
@cantidad as int,
@almacen as int
AS
BEGIN
	BEGIN TRY
		BEGIN TRAN
			UPDATE Salidas SET fecha_salida=@fecha, refaccion_salida=@refaccion, cantidad_salida=@cantidad, almacen_salida=@almacen WHERE folio_salida=@folio
		COMMIT TRAN
	END TRY
	BEGIN CATCH
		ROLLBACK TRAN
	END CATCH
END
