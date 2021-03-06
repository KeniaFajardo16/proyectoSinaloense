USE [proyectosinaloense]
GO
/****** Object:  StoredProcedure [dbo].[spInsertarDevolucion]    Script Date: 15/08/2018 06:08:53 p.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[spInsertarDevolucion]
	@fecha as DATE,
	@salida as int,
	@almacen as int,
	@observacion as varchar(max)
AS
BEGIN
	BEGIN TRY
		BEGIN TRAN tra;
			INSERT INTO Devoluciones(fecha_devolucion, salida_devolucion,almacen_devolucion,observacion_devolucion) VALUES (@fecha,@salida,@almacen,@observacion);
		COMMIT TRAN tra;
	END TRY
	BEGIN CATCH
		ROLLBACK TRAN tra;
	END CATCH
END
