USE [proyectosinaloense]
GO
/****** Object:  StoredProcedure [dbo].[spInsertarEntrada]    Script Date: 15/08/2018 06:09:02 p.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[spInsertarEntrada]
	@fecha as DATE,
	@refaccion as int,
	@cantidad as int,
	@almacen as int
AS
BEGIN
	BEGIN TRY
		BEGIN TRAN tra;
		INSERT INTO Entradas (fecha_entrada,refaccion_entrada,cantidad_entrada,almacen_entrada) VALUES (@fecha,@refaccion,@cantidad,@almacen);
		COMMIT TRAN tra;
	END TRY
	BEGIN CATCH
		ROLLBACK TRAN tra;
	END CATCH
END
