<?php
    function email_personalizado($nombre){
        $mensaje = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
        <html dir="ltr" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">
        
        <head>
            <meta charset="UTF-8">
            <meta content="width=device-width, initial-scale=1" name="viewport">
            <meta name="x-apple-disable-message-reformatting">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta content="telephone=no" name="format-detection">
            <title></title>
            <!--[if (mso 16)]>
            <style type="text/css">
            a {text-decoration: none;}
            </style>
            <![endif]-->
            <!--[if gte mso 9]><style>sup { font-size: 100% !important; }</style><![endif]-->
            <!--[if gte mso 9]>
        <xml>
            <o:OfficeDocumentSettings>
            <o:AllowPNG></o:AllowPNG>
            <o:PixelsPerInch>96</o:PixelsPerInch>
            </o:OfficeDocumentSettings>
        </xml>
        <![endif]-->
        <style>
            /* CONFIG STYLES Please do not delete and edit CSS styles below */
        /* IMPORTANT THIS STYLES MUST BE ON FINAL EMAIL */
        #outlook a {
            padding: 0;
        }
        
        .es-button {
            mso-style-priority: 100 !important;
            text-decoration: none !important;
        }
        
        a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }
        
        .es-desk-hidden {
            display: none;
            float: left;
            overflow: hidden;
            width: 0;
            max-height: 0;
            line-height: 0;
            mso-hide: all;
        }
        
        /*
        END OF IMPORTANT
        */
        body {
            width: 100%;
            font-family: arial, \'helvetica neue\', helvetica, sans-serif;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }
        
        table {
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
            border-collapse: collapse;
            border-spacing: 0px;
        }
        
        table td,
        body,
        .es-wrapper {
            padding: 0;
            Margin: 0;
        }
        
        .es-content,
        .es-header,
        .es-footer {
            table-layout: fixed !important;
            width: 100%;
        }
        
        img {
            display: block;
            border: 0;
            outline: none;
            text-decoration: none;
            -ms-interpolation-mode: bicubic;
        }
        
        p,
        hr {
            Margin: 0;
        }
        
        h1,
        h2,
        h3,
        h4,
        h5 {
            Margin: 0;
            line-height: 120%;
            mso-line-height-rule: exactly;
            font-family: arial, \'helvetica neue\', helvetica, sans-serif;
        }
        
        p,
        ul li,
        ol li,
        a {
            -webkit-text-size-adjust: none;
            -ms-text-size-adjust: none;
            mso-line-height-rule: exactly;
        }
        
        .es-left {
            float: left;
        }
        
        .es-right {
            float: right;
        }
        
        .es-p5 {
            padding: 5px;
        }
        
        .es-p5t {
            padding-top: 5px;
        }
        
        .es-p5b {
            padding-bottom: 5px;
        }
        
        .es-p5l {
            padding-left: 5px;
        }
        
        .es-p5r {
            padding-right: 5px;
        }
        
        .es-p10 {
            padding: 10px;
        }
        
        .es-p10t {
            padding-top: 10px;
        }
        
        .es-p10b {
            padding-bottom: 10px;
        }
        
        .es-p10l {
            padding-left: 10px;
        }
        
        .es-p10r {
            padding-right: 10px;
        }
        
        .es-p15 {
            padding: 15px;
        }
        
        .es-p15t {
            padding-top: 15px;
        }
        
        .es-p15b {
            padding-bottom: 15px;
        }
        
        .es-p15l {
            padding-left: 15px;
        }
        
        .es-p15r {
            padding-right: 15px;
        }
        
        .es-p20 {
            padding: 20px;
        }
        
        .es-p20t {
            padding-top: 20px;
        }
        
        .es-p20b {
            padding-bottom: 20px;
        }
        
        .es-p20l {
            padding-left: 20px;
        }
        
        .es-p20r {
            padding-right: 20px;
        }
        
        .es-p25 {
            padding: 25px;
        }
        
        .es-p25t {
            padding-top: 25px;
        }
        
        .es-p25b {
            padding-bottom: 25px;
        }
        
        .es-p25l {
            padding-left: 25px;
        }
        
        .es-p25r {
            padding-right: 25px;
        }
        
        .es-p30 {
            padding: 30px;
        }
        
        .es-p30t {
            padding-top: 30px;
        }
        
        .es-p30b {
            padding-bottom: 30px;
        }
        
        .es-p30l {
            padding-left: 30px;
        }
        
        .es-p30r {
            padding-right: 30px;
        }
        
        .es-p35 {
            padding: 35px;
        }
        
        .es-p35t {
            padding-top: 35px;
        }
        
        .es-p35b {
            padding-bottom: 35px;
        }
        
        .es-p35l {
            padding-left: 35px;
        }
        
        .es-p35r {
            padding-right: 35px;
        }
        
        .es-p40 {
            padding: 40px;
        }
        
        .es-p40t {
            padding-top: 40px;
        }
        
        .es-p40b {
            padding-bottom: 40px;
        }
        
        .es-p40l {
            padding-left: 40px;
        }
        
        .es-p40r {
            padding-right: 40px;
        }
        
        .es-menu td {
            border: 0;
        }
        
        .es-menu td a img {
            display: inline-block !important;
            vertical-align: middle;
        }
        
        /*
        END CONFIG STYLES
        */
        s {
            text-decoration: line-through;
        }
        
        p,
        ul li,
        ol li {
            font-family: arial, \'helvetica neue\', helvetica, sans-serif;
            line-height: 150%;
        }
        
        ul li,
        ol li {
            Margin-bottom: 15px;
            margin-left: 0;
        }
        
        a {
            text-decoration: underline;
        }
        
        .es-menu td a {
            text-decoration: none;
            display: block;
            font-family: arial, \'helvetica neue\', helvetica, sans-serif;
        }
        
        .es-wrapper {
            width: 100%;
            height: 100%;
            background-repeat: repeat;
            background-position: center top;
        }
        
        .es-wrapper-color,
        .es-wrapper {
            background-color: #f6f6f6;
        }
        
        .es-header {
            background-color: transparent;
            background-repeat: repeat;
            background-position: center top;
        }
        
        .es-header-body {
            background-color: #ffffff;
        }
        
        .es-header-body p,
        .es-header-body ul li,
        .es-header-body ol li {
            color: #333333;
            font-size: 14px;
        }
        
        .es-header-body a {
            color: #2cb543;
            font-size: 14px;
        }
        
        .es-content-body {
            background-color: #ffffff;
        }
        
        .es-content-body p,
        .es-content-body ul li,
        .es-content-body ol li {
            color: #333333;
            font-size: 14px;
        }
        
        .es-content-body a {
            color: #2cb543;
            font-size: 14px;
        }
        
        .es-footer {
            background-color: transparent;
            background-repeat: repeat;
            background-position: center top;
        }
        
        .es-footer-body {
            background-color: #ffffff;
        }
        
        .es-footer-body p,
        .es-footer-body ul li,
        .es-footer-body ol li {
            color: #333333;
            font-size: 14px;
        }
        
        .es-footer-body a {
            color: #2cb543;
            font-size: 14px;
        }
        
        .es-infoblock,
        .es-infoblock p,
        .es-infoblock ul li,
        .es-infoblock ol li {
            line-height: 120%;
            font-size: 12px;
            color: #cccccc;
        }
        
        .es-infoblock a {
            font-size: 12px;
            color: #cccccc;
        }
        
        h1 {
            font-size: 30px;
            font-style: normal;
            font-weight: normal;
            color: #333333;
        }
        
        h2 {
            font-size: 24px;
            font-style: normal;
            font-weight: normal;
            color: #333333;
        }
        
        h3 {
            font-size: 20px;
            font-style: normal;
            font-weight: normal;
            color: #333333;
        }
        
        .es-header-body h1 a,
        .es-content-body h1 a,
        .es-footer-body h1 a {
            font-size: 30px;
        }
        
        .es-header-body h2 a,
        .es-content-body h2 a,
        .es-footer-body h2 a {
            font-size: 24px;
        }
        
        .es-header-body h3 a,
        .es-content-body h3 a,
        .es-footer-body h3 a {
            font-size: 20px;
        }
        
        a.es-button,
        button.es-button {
            display: inline-block;
            background: #31cb4b;
            border-radius: 30px;
            font-size: 18px;
            font-family: arial, \'helvetica neue\', helvetica, sans-serif;
            font-weight: normal;
            font-style: normal;
            line-height: 120%;
            color: #ffffff;
            text-decoration: none;
            width: auto;
            text-align: center;
            padding: 10px 20px 10px 20px;
            mso-padding-alt: 0;
            mso-border-alt: 10px solid #31cb4b;
        }
        
        .es-button-border {
            border-style: solid solid solid solid;
            border-color: #2cb543 #2cb543 #2cb543 #2cb543;
            background: #31cb4b;
            border-width: 0px 0px 2px 0px;
            display: inline-block;
            border-radius: 30px;
            width: auto;
        }
        
        .msohide {
            mso-hide: all;
        }
        
        /* RESPONSIVE STYLES Please do not delete and edit CSS styles below. If you don\'t need responsive layout, please delete this section. */
        @media only screen and (max-width: 600px) {
        
            p,
            ul li,
            ol li,
            a {
                line-height: 150% !important;
            }
        
            h1,
            h2,
            h3,
            h1 a,
            h2 a,
            h3 a {
                line-height: 120% !important;
            }
        
            h1 {
                font-size: 30px !important;
                text-align: left;
            }
        
            h2 {
                font-size: 24px !important;
                text-align: left;
            }
        
            h3 {
                font-size: 20px !important;
                text-align: left;
            }
        
            .es-header-body h1 a,
            .es-content-body h1 a,
            .es-footer-body h1 a {
                font-size: 30px !important;
                text-align: left;
            }
        
            .es-header-body h2 a,
            .es-content-body h2 a,
            .es-footer-body h2 a {
                font-size: 24px !important;
                text-align: left;
            }
        
            .es-header-body h3 a,
            .es-content-body h3 a,
            .es-footer-body h3 a {
                font-size: 20px !important;
                text-align: left;
            }
        
            .es-menu td a {
                font-size: 14px !important;
            }
        
            .es-header-body p,
            .es-header-body ul li,
            .es-header-body ol li,
            .es-header-body a {
                font-size: 14px !important;
            }
        
            .es-content-body p,
            .es-content-body ul li,
            .es-content-body ol li,
            .es-content-body a {
                font-size: 14px !important;
            }
        
            .es-footer-body p,
            .es-footer-body ul li,
            .es-footer-body ol li,
            .es-footer-body a {
                font-size: 14px !important;
            }
        
            .es-infoblock p,
            .es-infoblock ul li,
            .es-infoblock ol li,
            .es-infoblock a {
                font-size: 12px !important;
            }
        
            *[class="gmail-fix"] {
                display: none !important;
            }
        
            .es-m-txt-c,
            .es-m-txt-c h1,
            .es-m-txt-c h2,
            .es-m-txt-c h3 {
                text-align: center !important;
            }
        
            .es-m-txt-r,
            .es-m-txt-r h1,
            .es-m-txt-r h2,
            .es-m-txt-r h3 {
                text-align: right !important;
            }
        
            .es-m-txt-l,
            .es-m-txt-l h1,
            .es-m-txt-l h2,
            .es-m-txt-l h3 {
                text-align: left !important;
            }
        
            .es-m-txt-r img,
            .es-m-txt-c img,
            .es-m-txt-l img {
                display: inline !important;
            }
        
            .es-button-border {
                display: inline-block !important;
            }
        
            a.es-button,
            button.es-button {
                font-size: 18px !important;
                display: inline-block !important;
            }
        
            .es-adaptive table,
            .es-left,
            .es-right {
                width: 100% !important;
            }
        
            .es-content table,
            .es-header table,
            .es-footer table,
            .es-content,
            .es-footer,
            .es-header {
                width: 100% !important;
                max-width: 600px !important;
            }
        
            .es-adapt-td {
                display: block !important;
                width: 100% !important;
            }
        
            .adapt-img {
                width: 100% !important;
                height: auto !important;
            }
        
            .es-m-p0 {
                padding: 0px !important;
            }
        
            .es-m-p0r {
                padding-right: 0px !important;
            }
        
            .es-m-p0l {
                padding-left: 0px !important;
            }
        
            .es-m-p0t {
                padding-top: 0px !important;
            }
        
            .es-m-p0b {
                padding-bottom: 0 !important;
            }
        
            .es-m-p20b {
                padding-bottom: 20px !important;
            }
        
            .es-mobile-hidden,
            .es-hidden {
                display: none !important;
            }
        
            tr.es-desk-hidden,
            td.es-desk-hidden,
            table.es-desk-hidden {
                width: auto !important;
                overflow: visible !important;
                float: none !important;
                max-height: inherit !important;
                line-height: inherit !important;
            }
        
            tr.es-desk-hidden {
                display: table-row !important;
            }
        
            table.es-desk-hidden {
                display: table !important;
            }
        
            td.es-desk-menu-hidden {
                display: table-cell !important;
            }
        
            .es-menu td {
                width: 1% !important;
            }
        
            table.es-table-not-adapt,
            .esd-block-html table {
                width: auto !important;
            }
        
            table.es-social {
                display: inline-block !important;
            }
        
            table.es-social td {
                display: inline-block !important;
            }
        
            .es-desk-hidden {
                display: table-row !important;
                width: auto !important;
                overflow: visible !important;
                max-height: inherit !important;
            }
        }
        
        /* END RESPONSIVE STYLES */
        </style>
        </head>
        
        <body>
            <div dir="ltr" class="es-wrapper-color">
                <!--[if gte mso 9]>
                    <v:background xmlns:v="urn:schemas-microsoft-com:vml" fill="t">
                        <v:fill type="tile" color="#f6f6f6"></v:fill>
                    </v:background>
                <![endif]-->
                <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0">
                    <tbody>
                        <tr>
                            <td class="esd-email-paddings" valign="top">
                                <table class="esd-header-popover es-header" cellspacing="0" cellpadding="0" align="center">
                                    <tbody>
                                        <tr>
                                            <td class="esd-stripe" align="center">
                                                <table class="es-header-body" width="600" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center">
                                                    <tbody>
                                                        <tr>
                                                            <td class="esd-structure es-p10t es-p10b es-p20r es-p20l" align="left" bgcolor="#2b3450" style="background-color: #2b3450;">
                                                                <!--[if mso]><table width="560" cellpadding="0"
                                    cellspacing="0"><tr><td width="180" valign="top"><![endif]-->
                                                                <table class="es-left" cellspacing="0" cellpadding="0" align="left">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="es-m-p0r es-m-p20b esd-container-frame" width="180" valign="top" align="center">
                                                                                <table width="100%" cellspacing="0" cellpadding="0">
                                                                                    <tbody>
                                                                                        <tr class="es-mobile-hidden">
                                                                                            <td align="center" class="esd-block-image" style="font-size: 0px;"><a target="_blank"><img class="adapt-img" src="https://efwfeub.stripocdn.email/content/guids/CABINET_b3a4c1c9852abf64f5fc32633695b4dc95ec89d954b915ed6badd593b6fba341/images/smartfuntionaltraininglogo_A2g.png" alt="logo smart funtional training" style="display: block; font-size: 12px;" title="logo smart funtional training" height="114"></a></td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <!--[if mso]></td><td width="20"></td><td width="360" valign="top"><![endif]-->
                                                                <table class="es-right" cellspacing="0" cellpadding="0" align="right">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="esd-container-frame" width="360" align="left">
                                                                                <table width="100%" cellspacing="0" cellpadding="0">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td align="left" class="esd-block-text">
                                                                                                <p><br></p>
                                                                                                <p style="font-size: 18px; color: #ffffff;">Gracias por ponerte en contacto con nuestro equipo!</p>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <!--[if mso]></td></tr></table><![endif]-->
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="es-content" cellspacing="0" cellpadding="0" align="center">
                                    <tbody>
                                        <tr>
                                            <td class="esd-stripe" align="center">
                                                <table class="es-content-body" width="600" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="border-left:5px solid transparent;border-right:5px solid transparent;">
                                                    <tbody>
                                                        <tr>
                                                            <td class="es-p20t es-p20r es-p20l esd-structure" align="left">
                                                                <table width="100%" cellspacing="0" cellpadding="0">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="esd-container-frame" width="550" valign="top" align="center">
                                                                                <table width="100%" cellspacing="0" cellpadding="0">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td align="left" class="esd-block-text">
                                                                                                <p>Hola <span style="color: #2b3450; font-weight: 600;">'.$nombre.'</span> 👋.</p>
                                                                                                <p>Recibimos tu consulta y en breve nos estaremos poniendo en contacto para asesorarte y brindarte más información.</p>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="esd-structure es-p20t es-p20r es-p20l" align="left">
                                                                <table cellpadding="0" cellspacing="0" width="100%">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td width="550" class="esd-container-frame" align="center" valign="top">
                                                                                <table cellpadding="0" cellspacing="0" width="100%">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td align="center" class="esd-block-image" style="font-size: 0px;"><a target="_blank"><img class="adapt-img" src="https://efwfeub.stripocdn.email/content/guids/CABINET_b3a4c1c9852abf64f5fc32633695b4dc95ec89d954b915ed6badd593b6fba341/images/communication.png" alt="buzón" style="display: block; font-size: 12px;" width="162" title="buzón"></a></td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="esd-structure es-p20t es-p20r es-p20l" align="left">
                                                                <table cellpadding="0" cellspacing="0" width="100%">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td width="550" class="esd-container-frame" align="center" valign="top">
                                                                                <table cellpadding="0" cellspacing="0" width="100%">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td align="left" class="esd-block-text">
                                                                                                <p>Saludos.</p>
                                                                                                <p><em>Smart Funtional Training</em></p>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="esd-footer-popover es-footer" cellspacing="0" cellpadding="0" align="center">
                                    <tbody>
                                        <tr>
                                            <td class="esd-stripe" align="center">
                                                <table class="es-footer-body" width="600" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="border-left:5px solid transparent;border-right:5px solid transparent;">
                                                    <tbody>
                                                        <tr>
                                                            <td class="esd-structure es-p20t es-p20r es-p20l" align="left">
                                                                <!--[if mso]><table width="550" cellpadding="0" cellspacing="0"><tr><td width="184" valign="top"><![endif]-->
                                                                <table cellpadding="0" cellspacing="0" class="es-left" align="left">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td width="164" class="es-m-p0r es-m-p20b esd-container-frame" align="center">
                                                                                <table cellpadding="0" cellspacing="0" width="100%">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td align="left" class="esd-block-text">
                                                                                                <p>&nbsp;</p>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </td>
                                                                            <td class="es-hidden" width="20"></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <!--[if mso]></td><td width="173" valign="top"><![endif]-->
                                                                <table cellpadding="0" cellspacing="0" class="es-left" align="left">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td width="173" class="es-m-p20b esd-container-frame" align="center">
                                                                                <table cellpadding="0" cellspacing="0" width="100%">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td align="center" class="esd-block-social" style="font-size:0">
                                                                                                <table cellpadding="0" cellspacing="0" class="es-table-not-adapt es-social" dir="ltr">
                                                                                                    <tbody>
                                                                                                        <tr>
                                                                                                            <td align="center" valign="top" class="es-p10r"><a target="_blank" href="https://www.instagram.com/smart.training2024/"><img src="https://efwfeub.stripocdn.email/content/assets/img/social-icons/logo-black/instagram-logo-black.png" alt="Ig" title="Instagram" width="32" height="32"></a></td>
                                                                                                            <td align="center" valign="top" class="es-p10r" esd-tmp-icon-type="tiktok"><a target="_blank" href="https://www.tiktok.com/@smart.funtional.t"><img src="https://efwfeub.stripocdn.email/content/assets/img/social-icons/logo-black/tiktok-logo-black.png" alt="Tt" title="TikTok" width="32" height="32"></a></td>
                                                                                                            <td align="center" valign="top" esd-tmp-icon-type="world"><a target="_blank" href><img src="https://efwfeub.stripocdn.email/content/assets/img/other-icons/logo-black/globe-logo-black.png" alt="World" title="World" width="32" height="32"></a></td>
                                                                                                        </tr>
                                                                                                    </tbody>
                                                                                                </table>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <!--[if mso]></td><td width="20"></td><td width="173" valign="top"><![endif]-->
                                                                <table cellpadding="0" cellspacing="0" class="es-right" align="right">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td width="173" align="center" class="esd-container-frame">
                                                                                <table cellpadding="0" cellspacing="0" width="100%">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td align="left" class="esd-block-text">
                                                                                                <p>&nbsp;</p>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <!--[if mso]></td></tr></table><![endif]-->
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </body>
        
        </html>';        
        return $mensaje;
    };
?>