CREATE DEFINER=`root`@`localhost` TRIGGER `database`.`bitacora_BEFORE_INSERT` BEFORE INSERT ON `bitacora` FOR EACH ROW
BEGIN
	if new.fecha is null then
		set new.fecha = fecha(new.fecha);
	end if;
	if new.fecha = '0000-00-00 00:00:00' then
		set new.fecha = fecha(new.fecha);
	end if;
END