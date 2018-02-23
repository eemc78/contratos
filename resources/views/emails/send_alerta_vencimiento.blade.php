<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta charset="utf-8"> <!-- utf-8 works for most cases -->
    <meta name="viewport" content="width=device-width"> <!-- Forcing initial-scale shouldn't be necessary -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Use the latest (edge) version of IE rendering engine -->
    <meta name="x-apple-disable-message-reformatting">  <!-- Disable auto-scale in iOS 10 Mail entirely -->
    <title>Vencimiento de Contratos</title> <!-- The title tag shows in email notifications, like Android 4.4. -->

    <!-- CSS Reset : BEGIN -->
    <style>

        /* What it does: Remove spaces around the email design added by some email clients. */
        /* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */
        html,
        body {
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
        }

        /* What it does: Stops email clients resizing small text. */
        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        /* What it does: Centers email on Android 4.4 */
        div[style*="margin: 16px 0"] {
            margin: 0 !important;
        }

        /* What it does: Stops Outlook from adding extra spacing to tables. */
        table,
        td {
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
        }

        /* What it does: Fixes webkit padding issue. Fix for Yahoo mail table alignment bug. Applies table-layout to the first 2 tables then removes for anything nested deeper. */
        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            margin: 0 auto !important;
        }
        table table table {
            table-layout: auto;
        }

        /* What it does: Uses a better rendering method when resizing images in IE. */
        img {
            -ms-interpolation-mode:bicubic;
        }

        /* What it does: A work-around for email clients meddling in triggered links. */
        *[x-apple-data-detectors],  /* iOS */
        .x-gmail-data-detectors,    /* Gmail */
        .x-gmail-data-detectors *,
        .aBn {
            border-bottom: 0 !important;
            cursor: default !important;
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        /* What it does: Prevents Gmail from displaying an download button on large, non-linked images. */
        .a6S {
            display: none !important;
            opacity: 0.01 !important;
        }
        /* If the above doesn't work, add a .g-img class to any image in question. */
        img.g-img + div {
            display: none !important;
        }

        /* What it does: Prevents underlining the button text in Windows 10 */
        .button-link {
            text-decoration: none !important;
        }

        /* What it does: Removes right gutter in Gmail iOS app: https://github.com/TedGoas/Cerberus/issues/89  */
        /* Create one of these media queries for each additional viewport size you'd like to fix */

        /* iPhone 4, 4S, 5, 5S, 5C, and 5SE */
        @media only screen and (min-device-width: 320px) and (max-device-width: 374px) {
            .email-container {
                min-width: 320px !important;
            }
        }
        /* iPhone 6, 6S, 7, 8, and X */
        @media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
            .email-container {
                min-width: 375px !important;
            }
        }
        /* iPhone 6+, 7+, and 8+ */
        @media only screen and (min-device-width: 414px) {
            .email-container {
                min-width: 414px !important;
            }
        }

    </style>
    <!-- CSS Reset : END -->

    <!-- Progressive Enhancements : BEGIN -->
    <style>

    /* What it does: Hover styles for buttons */
    .button-td,
    .button-a {
        transition: all 100ms ease-in;
    }
    .button-td:hover,
    .button-a:hover {
        background: #555555 !important;
        border-color: #555555 !important;
    }

    /* Media Queries */
    @media screen and (max-width: 480px) {

        /* What it does: Forces elements to resize to the full width of their container. Useful for resizing images beyond their max-width. */
        .fluid {
            width: 100% !important;
            max-width: 100% !important;
            height: auto !important;
            margin-left: auto !important;
            margin-right: auto !important;
        }

        /* What it does: Forces table cells into full-width rows. */
        .stack-column,
        .stack-column-center {
            display: block !important;
            width: 100% !important;
            max-width: 100% !important;
            direction: ltr !important;
        }
        /* And center justify these ones. */
        .stack-column-center {
            text-align: center !important;
        }

        /* What it does: Generic utility class for centering. Useful for images, buttons, and nested tables. */
        .center-on-narrow {
            text-align: center !important;
            display: block !important;
            margin-left: auto !important;
            margin-right: auto !important;
            float: none !important;
        }
        table.center-on-narrow {
            display: inline-block !important;
        }

        /* What it does: Adjust typography on small screens to improve readability */
        .email-container p {
            font-size: 17px !important;
        }
    }

    </style>
    <!-- Progressive Enhancements : END -->

    <!-- What it does: Makes background images in 72ppi Outlook render at correct size. -->
    <!--[if gte mso 9]>
    <xml>
        <o:OfficeDocumentSettings>
            <o:AllowPNG/>
            <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
    </xml>
    <![endif]-->

</head>

<body width="100%" style="margin: 0; mso-line-height-rule: exactly;">
    <center style="width: 100%; background: #222222; text-align: left;">
    <!--[if mso | IE]>
    <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#222222">
    <tr>
    <td>
    <![endif]-->

        <!-- Visually Hidden Preheader Text : BEGIN -->
        <div style="display: none; font-size: 1px; line-height: 1px; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;">
            <!-- (Optional) This text will appear in the inbox preview, but not the email body. It can be used to supplement the email subject line or even summarize the email's contents. Extended text preheaders (~490 characters) seems like a better UX for anyone using a screenreader or voice-command apps like Siri to dictate the contents of an email. If this text is not included, email clients will automatically populate it using the text (including image alt text) at the start of the email's body. -->
            Hay {{ count($contratos) }} contratos por vencer en {{ $MesVence['meses']=1?'el proximo mes':'los proximos '.$MesVence['meses'].' meses' }} 

        </div>
        <!-- Visually Hidden Preheader Text : END -->

 		<div style="max-width: 680px; margin: auto;" class="email-container">
            <!--[if mso]>
            <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="680" align="center">
            <tr>
            <td>
            <![endif]-->

            <!-- Email Header : BEGIN -->
            <table role="presentation" cellspacing="0" cellpadding="10" border="0" align="center" width="100%" style="max-width: 680px;">
                <tr>
                    <td style="padding: auto; text-align: right; font-size: 24px; " width="30%">
                        <img src="http://placehold.it/200x50" width="200" height="50" alt="alt_text" border="0" style="height: auto; background: #dddddd; font-family: sans-serif; font-size: 15px;  color: #555555; text-align: center; ">
                    </td>
                    <td style="padding: auto; text-align: right; font-size: 24px; color: Cyan" width="70%">
                        Clinica Integral de Emergencias Laura Daniela S.A.
                    </td>
                </tr>
            </table>
            <!-- Email Header : END -->

            <!-- Email Body : BEGIN -->
            <table role="presentation" cellspacing="0" cellpadding="5" border="0" align="center" width="100%" style="max-width: 680px;" class="email-container">

                <!-- Hero Image, Flush : BEGIN -->
                <tr>
                    <td bgcolor="#ffffff">
                    	<h1 style="margin: 0; padding-top: 20; font-family: sans-serif; font-size: 14px; line-height: 125%; color: #333333; font-weight: normal;">
                    		Estimado Usuario {{ $user->name }},<br><br>
                    		los siguientes son los contratos a vencer antes de {{ $MesVence['meses'] }}  mes{{ $MesVence['meses']>1?'es':'' }} 
						</h1>
                    </td>
                </tr>
                <!-- Hero Image, Flush : END -->

                <tr>
                	<td bgcolor="#ffffff" align="center">
						<table role="presentation" cellspacing="0" cellpadding="0" border="1" align="center" width="90%" style="max-width: 680px;" class="email-container">
							<th>
								<td width="20px" >idcontrato</td>
								<td bgcolor="Lightblue" >fechafin</td> 
								<td bgcolor="Lightblue" >descripcion</td>
								<td bgcolor="Lightblue" >contacto</td>
								<td bgcolor="Lightblue" >tercero</td>
							</th>
								@foreach(  $contratos  as $contrato )
								<tr>
									<td width="1px"  ></td><!-- por correcion del formato -->
									<td width="20px" >{{ $contrato->idcontrato }}	</td>
									<td>{{ $contrato->fechafin }}	</td>
									<td>{{ $contrato->descripcion }}	</td>
									<td>{{ $contrato->contacto }}	</td>
									<td>{{ $contrato->razonsocial }}	</td>

								</tr>
								@endforeach
						</table>
					</td>
				</tr>

				<tr>
                	<td bgcolor="#ffffff" align="center">
						<a href="http://192.168.7.6/laravel/contratos/public" style="background: #222222; border: 15px solid #222222; font-family: sans-serif; font-size: 13px; line-height: 110%; text-align: center; text-decoration: none; display: block; border-radius: 3px; font-weight: bold;" class="button-a">
				            <span style="color:#ffffff;" class="button-link">&nbsp;&nbsp;&nbsp;&nbsp;Ver contratos&nbsp;&nbsp;&nbsp;&nbsp;</span>.<br><br>
				        </a>
				    </td>
				</tr>

				<tr>
                    <td bgcolor="#ffffff" >
                    	<h1 style="margin: 0; font-family: sans-serif; font-size: 14px; line-height: 125%; color: #333333; font-weight: normal;">
                    		los siguientes contratos proximos a vencer :<br><br>
						</h1>
					</td>
				</tr>

				<tr>
                    <td bgcolor="#ffffff" align="center">
						<table role="presentation" cellspacing="0" cellpadding="0" border="1" align="center" width="90%" style="max-width: 680px;" class="email-container">
							<th>
								<td width="20px" bgcolor="Lightblue">idcontrato</td>
								<td bgcolor="Lightblue">fechafin</td> 
								<td bgcolor="Lightblue">descripcion</td>
								<td bgcolor="Lightblue">contacto</td>
								<td bgcolor="Lightblue">tercero</td>
							</th>
								@foreach(  $contprox  as $contp )
								<tr>
									<td width="1px"  ></td> <!-- por correcion del formato -->
									<td width="20px" >{{ $contp->idcontrato }}	</td>
									<td>{{ $contp->fechafin }}	</td>
									<td>{{ $contp->descripcion }}	</td>
									<td>{{ $contp->contacto }}	</td>
									<td>{{ $contp->razonsocial }}	</td>
								</tr>
								@endforeach
						</table>
					</td>
				</tr>
				<tr>
                    <td bgcolor="#ffffff" align="center" >
                    	<h1 style="margin: 0; font-family: sans-serif; font-size: 14px; line-height: 125%; color: #333333; font-weight: normal;">
                    		<div class="container">
							    <p> Esperamos sea grata su experiencia con nuestros productos.
							    </p>
							</div>
						</h1>
					</td>
				</tr>
				<tr>
                    <td bgcolor="#ffffff" align="center" >
                    	<h1 style="margin: 0; font-family: sans-serif; font-size: 14px; line-height: 125%; color: #333333; font-weight: normal;">
                    		<div class="container">
							    <p>
							    	<strong>Copyright &copy; 2018  -  <a href="https://edgardomartinez.com"><b>eemc78@hotmail.com</b></a>
							    </p>
							</div>
						</h1>
					</td>
				</tr>

        	</table>
        <!-- Full Bleed Background Section : END -->
	
    	</div>
    <!--[if mso | IE]>
    </td>
    </tr>
    </table>
    <![endif]-->
    </center>

</body>
</html>


		




