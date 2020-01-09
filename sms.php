<?php
$codapi = @$_POST['codeapi'];
$remitente = @$_POST['remitente']; //nombre o numero de quien envia el SMS
$mensaje = @$_POST['mensaje'];//mensaje a enviar
$destinatario = @$_POST['destinatario'];; //numeros de celular separados por (,)
$idgrupo = @$_POST['idgrupo']; //id del grupo al que se le enviará el SMS
$fecha_envio = @$_POST['fecha']; //fecha de programación
$idlote = @$_POST['idlote']; //identificador para agrupar varios envíos (alfanumérico)
$url = "http://api.publicidadpersonal.com/sms/";
$url = str_replace(" ",'%20',$url);

$ch=curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,30);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1) ;
curl_setopt($ch, CURLOPT_POSTFIELDS, "codapi=".$codapi."&remitente=".$remitente."&mensaje=".$mensaje."&destinatario=".$destinatario.
"&idgrupo=".$idgrupo."&fecha_envio=".$fecha_envio."&idlote=".$idlote."");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_VERBOSE, 1);
$result = curl_exec($ch);
curl_close($ch);

//Para escribir la respuesta, descomenta la siguiente linea
echo json_encode($result);