<?php


// The number of lines in front of config file determine the // hierarchy of files. 
require_once(dirname(dirname(dirname(__FILE__))) . '/config.php');

require_login();
//Global
$nombrenav = "AsistenciaUAI"; // nombre que aparece en la pestaña del navegador
$nombre = "AsistenciaUAI"; // nombre del sitio

$PAGE->set_context(get_system_context());
$PAGE->set_pagelayout('admin');
$PAGE->set_title($nombrenav);
$PAGE->set_heading($nombre);
$PAGE->set_url($CFG->wwwroot.'/local/gim/helloworld2.php');
$PAGE->navbar->add($nombre);

//$strmymoodle = get_string('helloworld');



echo $OUTPUT->header();


// Actual content goes here

echo "&#191Qu&eacute vas a hacer?";
echo "<br>";
echo "<img src='/local/minor/php/qr_img.php?d=Asistencia'";
?>
<html>
<body>
<form action="marcarasistencia.php" method="GET">
	<button type="submit" name='asistencia' value='mostrarqr'>Marcar Asistencia</button>
</form>
</body>
</html>


		

<?php
// Show the page footer
echo $OUTPUT->footer();

?>