<?php
	if(!empty($_POST)) {
		$fecha = date("D-M-y H:i");
		$de = $_POST['correo'];
		$mymail = "a.valverde@alumno.um.edu.ar";
		$mymail2 = "correo@correo.com.ar";
		$subject = "Consulta Web...";
		$contenido = 'Se ha realizado una consulta con los siguientes datos:<br />';
		$contenido .= '<b>Nombre y Apellido:</b> '.$_POST['nombre'].'<br /><br />';
		$contenido .= '<b>telefono:</b> '.$_POST['telefono'].'<br /><br />';
		$contenido .= '<b>Correo:</b> '.$_POST['correo'].'<br /><br />';
		$contenido .= $_POST['mensaje'].'<br /><br /><br />';
		
		$header = "From:".$de;
		$header .= "\nReply-To:".$de;
		$header .= "\n";
		$header .= "X-Mailer:PHP/".phpversion()."\n";
		$header .= "Mime-Version: 1.0\n";
		$header .= "Content-Type: text/html";
		mail($mymail, $subject, utf8_decode($contenido) ,$header);
		mail($mymail2, $subject, utf8_decode($contenido) ,$header);
		
		unset($_POST['']);
		echo '<script type="text/javascript" language="javascript"> alert(\'Gracias por comunicarse con nosotros. Su consulta ha sido enviada con exito. En breve lo contactaremos.\');</script>';
		echo "<script language='javascript'>location.href='confirmacion.html';</script>";
	};
?>
