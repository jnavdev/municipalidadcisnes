<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Ilustre Municipalidad de Puerto Varas | Atención al Vecino</title>
    <style type="text/css">
        body {margin: 0; padding: 0; min-width: 100%!important;}
        img {height: auto;}
        .content {width: 100%; max-width: 600px;}
        .header {padding: 40px 30px 20px 30px;}
        .innerpadding {padding: 30px 30px 30px 30px;}
        .borderbottom {border-bottom: 1px solid #f2eeed;}
        .subhead {font-size: 15px; color: #ffffff; font-family: sans-serif; letter-spacing: 10px;}
        .h1, .h2, .bodycopy {color: #153643; font-family: sans-serif;}
        .h1 {font-size: 33px; line-height: 38px; font-weight: bold;}
        .h2 {padding: 0 0 15px 0; font-size: 24px; line-height: 28px; font-weight: bold;}
        .bodycopy {font-size: 16px; line-height: 22px;}
        .button {text-align: center; font-size: 18px; font-family: sans-serif; font-weight: bold; padding: 0 30px 0 30px;}
        .button a {color: #ffffff; text-decoration: none;}
        .footer {padding: 20px 30px 15px 30px;}
        .footercopy {font-family: sans-serif; font-size: 14px; color: #ffffff;}
        .footercopy a {color: #ffffff; text-decoration: underline;}

        @media only screen and (max-width: 550px), screen and (max-device-width: 550px) {
            body[yahoo] .hide {display: none!important;}
            body[yahoo] .buttonwrapper {background-color: transparent!important;}
            body[yahoo] .button {padding: 0px!important;}
            body[yahoo] .button a {background-color: #e05443; padding: 15px 15px 13px!important;}
            body[yahoo] .unsubscribe {display: block; margin-top: 20px; padding: 10px 50px; background: #2f3942; border-radius: 5px; text-decoration: none!important; font-weight: bold;}
        }

        /*@media only screen and (min-device-width: 601px) {
          .content {width: 600px !important;}
          .col425 {width: 425px!important;}
          .col380 {width: 380px!important;}
          }*/

    </style>
</head>

<body yahoo bgcolor="#f6f8f1">
<table width="100%" bgcolor="#f6f8f1" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td>
            <!--[if (gte mso 9)|(IE)]>
            <table width="600" align="center" cellpadding="0" cellspacing="0" border="0">
                <tr>
                    <td>
            <![endif]-->
            <table bgcolor="#ffffff" class="content" align="center" cellpadding="0" cellspacing="0" border="0">
                <tr>
                    <td bgcolor="#fff" class="header">
                        <table width="70" align="left" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td align="center" height="70" style="padding: 0 20px 20px 0;">
                                    <img class="fix" src="http://ptovaras.cl/assets/web/images/logo/logo22.png" alt="Ilustre Municipalidad de Puerto Varas" width="350" border="0">
                                </td>
                            </tr>
                        </table>
                        <!--[if (gte mso 9)|(IE)]>
                        <table width="425" align="left" cellpadding="0" cellspacing="0" border="0">
                            <tr>
                                <td>
                        <![endif]-->

                        <!--[if (gte mso 9)|(IE)]>
                        </td>
                        </tr>
                        </table>
                        <![endif]-->
                    </td>
                </tr>
                <tr>
                    <td class="innerpadding borderbottom">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td>
                                    <p>Notificación de <strong>Atención al Vecino</strong>.</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="h2">
                                    Datos:
                                </td>
                            </tr>
                            <tr>
                                <td class="bodycopy">
                                    <p>Motivo: {{ $attentionNeighbor->reason }}</p>
                                    <p>Rut: {{ $attentionNeighbor->rut }}</p>
                                    <p>Nombre/s: {{ $attentionNeighbor->names }}</p>
                                    <p>Apellido/s: {{ $attentionNeighbor->surnames }}</p>
                                    <p>Dirección: {{ $attentionNeighbor->address }}</p>
                                    <p>Correo electrónico: {{ $attentionNeighbor->email }}</p>
                                    <p>Teléfono: {{ $attentionNeighbor->phone }}</p>
                                    <p>Mensaje: {{ $attentionNeighbor->message }}</p>
                                    @if ($attentionNeighbor->file)
                                        <p>Click <a download href="{{ $attentionNeighbor->getFile() }}">aquí</a> para descargar el archivo adjunto.</p>
                                    @endif
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td class="footer" bgcolor="#0F151A">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td align="center" class="footercopy">
                                    &copy; Ilustre Municipalidad de Puerto Varas {{ date('Y', strtotime(Carbon\Carbon::now('America/Santiago'))) }}.
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
        </td>
    </tr>
</table>
</body>
</html>