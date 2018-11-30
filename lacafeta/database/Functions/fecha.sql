CREATE DEFINER=`root`@`localhost` FUNCTION `Fecha`(hoy date) RETURNS int(11)
BEGIN
	declare fecha date;
    if hoy is null then
		set fecha = now();
	end if;
RETURN fecha;
END