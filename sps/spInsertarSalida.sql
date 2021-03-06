USE [proyectosinaloense]
GO
/****** Object:  StoredProcedure [dbo].[spInsertarSalida]    Script Date: 15/08/2018 06:09:52 p.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[spInsertarSalida]
	@fecha as DATE,
	@refaccion as int,
	@cantidad as int,
	@almacen as int
AS
BEGIN
	BEGIN TRY
		BEGIN TRAN tra;
		INSERT INTO Salidas (fecha_salida,refaccion_salida,cantidad_salida,almacen_salida) VALUES (@fecha,@refaccion,@cantidad,@almacen);
		COMMIT TRAN tra;
	END TRY
	BEGIN CATCH
		ROLLBACK TRAN tra;
	END CATCH
END
