CREATE DEFINER=`root`@`localhost` TRIGGER `database`.`ordenes_AFTER_INSERT` AFTER INSERT ON `ordenes` FOR EACH ROW
BEGIN
	insert into bitacora(cantidad) VALUES (new.cantidad);
END