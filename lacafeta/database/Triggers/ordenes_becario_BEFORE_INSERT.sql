CREATE DEFINER=`root`@`localhost` TRIGGER `database`.`ordenes_becario_BEFORE_INSERT` BEFORE INSERT ON `ordenes_becario` FOR EACH ROW
BEGIN
	if new.fecha is null then
		set new.fecha = fecha(new.fecha);
	end if;
END