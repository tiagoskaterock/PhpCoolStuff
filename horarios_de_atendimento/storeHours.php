<?php

	// mude as horas de funcionamento diretamente aqui
	$segunda_a_sexta = '09:00 - 19:00';
	$sabado = '08:00 - 20:00';
	$domingo = 'Fechado';
	$aberto_ou_fechado;
	$is_feriado = false;

	// REQUIRED
	// Set your default time zone (listed here: http://php.net/manual/en/timezones.php)
	date_default_timezone_set('America/Sao_Paulo');
	// Include the store hours class
	require __DIR__ . '/StoreHours.class.php';

	// REQUIRED
	// Define daily open hours
	// Must be in 24-hour format, separated by dash
	// If closed for the day, leave blank (ex. sunday)
	// If open multiple times in one day, enter time ranges separated by a comma
	$hours = array(
	    'mon' => array($segunda_a_sexta),
	    'tue' => array($segunda_a_sexta, /*'18:00-20:30'*/),
	    'wed' => array($segunda_a_sexta, /*'18:00-20:30'*/),
	    'thu' => array($segunda_a_sexta), // Open late
	    'fri' => array($segunda_a_sexta),
	    'sat' => array($sabado)
	    /*'sun' => array('11:00-20:00')*/
	);

	// OPTIONAL
	// Add exceptions (great for holidays etc.)
	// MUST be in a format month/day[/year] or [year-]month-day
	// Do not include the year if the exception repeats annually
	$exceptions = array(
	    '2/24'  => array('11:00-18:00'),
	    '10/18' => array('11:00-16:00', '18:00-20:30')
	);

	$config = array(
	    'separator'      => ' - ',
	    'join'           => ' and ',
	    'format'         => 'g:ia',
	    'overview_weekdays'  => array('Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun')
	);

	// Instantiate class
	$store_hours = new StoreHours($hours, $exceptions, $config);

	// Display open / closed message
	if ($is_feriado) {
		$aberto_ou_fechado = "<strong style='color: red'>Fechado devido ao feriado</strong>";
	}
	else if($store_hours->is_open()) {
	    $aberto_ou_fechado = "<strong style='color: green'>Em horário de atendimento </strong>";
	} else {
	    $aberto_ou_fechado = "<strong style='color: red'>Fechado </strong>";
	}

	// Display full list of open hours (for a week without exceptions)
	/*
	echo '<table>';
	foreach ($store_hours->hours_this_week() as $days => $hours) {
	    echo '<tr>';
	    echo '<td>' . $days . '</td>';
	    echo '<td>' . $hours . '</td>';
	    echo '</tr>';
	}
	echo '</table>';
	*/

	// Same list, but group days with identical hours
	/*
	echo '<table>';
	foreach ($store_hours->hours_this_week(true) as $days => $hours) {
	    echo '<tr>';
	    echo '<td>' . $days . '</td>';
	    echo '<td>' . $hours . '</td>';
	    echo '</tr>';
	}
	echo '</table>';
	*/

?>