<?php
	require('./tfPdf/tfpdf.php');

	class PDF extends tFPDF {

		function Table($request, $link, $header) {
			$countCol = 7;

			for ($i = 0; $i < $countCol; $i++) {
				$this->Cell(35, 6, $header[$i], 1);
			}
			$this->Ln();

			$row = mysqli_fetch_row($request);
		    for ($i = 0; $i < mysqli_num_rows($request); $i++) {
		    	for ($j = 0; $j < $countCol; $j++) {
		    		$this->Cell(35, 6, $row[$j], 1);
		    	}
		    	$row = mysqli_fetch_row($request);
		    	$this->Ln();
			}

		}
	}

	$link = mysqli_connect('localhost', 'sabirova', 'd7L390nNHD12ASqe') or die ("Невозможно подключиться к серверу");
	mysqli_query($link, 'SET NAMES utf8');
	mysqli_select_db($link, 'sabirova') or die("Нет такой таблицы!");

	$pdf = new PDF();

	$pdf->AddFont('DejaVu', '', 'DejaVuSansCondensed.ttf', true);
    $pdf->SetFont('DejaVu', '', 6);

    $pdf->AddPage('L');

	$request = mysqli_query($link, "SELECT app.app_id, app.app_name, app.app_vers, dev.dev_name, dev.dev_city, yp.yp_type_exec, yp.yp_type FROM application app LEFT JOIN developer dev ON dev.dev_id=app.app_dev_id LEFT JOIN yazprogr yp ON yp.yp_id=app.app_yp_id");

	$header = array('ID приложения', 'Название приложения', 'Текущая версия', 'Название разработчика', 'Город', 'Тип выполнения', 'Тип');
    
    $pdf->Table($request, $link, $header);
    $pdf->Output('Application.pdf', 'D');
?>