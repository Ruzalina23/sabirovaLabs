<?php
	require_once('./PHPExcel/PHPExcel.php');
	require_once('./PHPExcel/PHPExcel/Writer/Excel5.php');

	$xls = new PHPExcel();
	$xls->setActiveSheetIndex(0);
	$sheet = $xls->getActiveSheet();

	$sheet->setTitle('Application');

	$link = mysqli_connect('localhost', 'sabirova', 'd7L390nNHD12ASqe') or die ("Невозможно подключиться к серверу");
	mysqli_query($link, 'SET NAMES utf8');
	mysqli_select_db($link, 'sabirova') or die("Нет такой таблицы!");

	$request = mysqli_query($link, "SELECT app.app_id, app.app_name, app.app_vers, dev.dev_name, dev.dev_city, yp.yp_type_exec, yp.yp_type FROM application app LEFT JOIN developer dev ON dev.dev_id=app.app_dev_id LEFT JOIN yazprogr yp ON yp.yp_id=app.app_yp_id");

	$countCol = 7;

	$header = array('ID приложения', 'Название приложения', 'Текущая версия', 'Название разработчика', 'Город', 'Тип выполнения', 'Тип');

	for ($i = 0; $i < $countCol; $i++) {
		$sheet->setCellValueByColumnAndRow($i, 1, $header[$i]);
	}

	
	for ($i = 0; $i < mysqli_num_rows($request); $i++) {
		$row = mysqli_fetch_row($request);
		for ($j = 0; $j < $countCol; $j++) {
			$sheet->setCellValueByColumnAndRow($j, 2 + $i, $row[$j]);
		}
	}

	header ( "Expires: Mon, 1 Apr 1974 05:00:00 GMT" );
	header ( "Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT" );
	header ( "Cache-Control: no-cache, must-revalidate" );
	header ( "Pragma: no-cache" );
	header ( "Content-type: application/vnd.ms-excel" );
	header ( "Content-Disposition: attachment; filename=Application.xls" );

	$objWriter = new PHPExcel_Writer_Excel5($xls);
	$objWriter->save('php://output');
?>