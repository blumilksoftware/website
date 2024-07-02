<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Simple Transactional Email</title>
    <style media="all" type="text/css">
        body {
            font-family: Helvetica, sans-serif;
            -webkit-font-smoothing: antialiased;
            font-size: 16px;
            line-height: 1.3;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        table {
            border-collapse: separate;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
            width: 100%;
        }

        table td {
            font-family: Helvetica, sans-serif;
            font-size: 16px;
            vertical-align: top;
        }

        body {
            background-color: #F6F7FD;
            margin: 0;
            padding: 0;
        }

        .body {
            background-color: #F6F7FD;
            width: 100%;
        }

        .container {
            margin: 0 auto !important;
            max-width: 600px;
            padding: 0;
            padding-top: 24px;
            width: 600px;
        }

        .content {
            box-sizing: border-box;
            display: block;
            margin: 0 auto;
            max-width: 600px;
            padding: 0;
        }


        .main {
            background: #ffffff;
            border: 1px solid #eaebed;
            border-radius: 16px;
            width: 100%;
        }

        .wrapper {
            box-sizing: border-box;
            padding: 24px;
        }

        .footer {
            clear: both;
            padding-top: 24px;
            text-align: center;
            width: 100%;
        }

        .footer td,
        .footer p,
        .footer span,
        .footer a {
            color: #9a9ea6;
            font-size: 16px;
            text-align: center;
        }

        p {
            font-family: Sora, sans-serif;
            font-size: 16px;
            font-weight: normal;
            margin: 0;
            margin-bottom: 16px;
        }

        a {
            color: #000000;
            text-decoration: underline;
        }

        .powered-by a {
            text-decoration: none;
        }

        @media only screen and (max-width: 640px) {
            .main p,
            .main td,
            .main span {
                font-size: 16px !important;
            }

            .wrapper {
                padding: 8px !important;
            }

            .content {
                padding: 0 !important;
            }

            .container {
                padding: 0 !important;
                padding-top: 8px !important;
                width: 100% !important;
            }

            .main {
                border-left-width: 0 !important;
                border-radius: 0 !important;
                border-right-width: 0 !important;
            }
        }
    </style>
</head>
<body>
<table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
    <tr>
        <td>&nbsp;</td>
        <td class="container">
            <div class="content">
                <h2>Odpowiedź na formularz kontaktowy</h2>
                <table role="presentation" class="main">
                    <tr>
                        <td class="wrapper">
                            <h3>Twoja wiadomość:</h3>
                            <div class="prose">
                                {!! $details['messageTopic'] !!}
                                {!! $details['messageDescription'] !!}
                            </div>
                            <h3>Odpowiedź:</h3>
                            <div class="prose">
                                {!! $details['response'] !!}
                            </div>
                        </td>
                    </tr>
                </table>
                <div class="footer">
                    <table role="presentation">
                        <tr>
                            <td class="content-block">
                                <span class="apple-link">Blumilk sp. z o.o.</span><br>
                                <span>office@blumilk.pl</span><br>
                                <span>+48 780 142 367</span><br>
                                <span>ul. Najświętszej Marii Panny 5f/5 59-220 Legnica</span><br>
                                <span>
                                    <a href="https://clutch.co/profile/blumilk-0">Clutch</a> |
                                    <a href="https://github.com/blumilksoftware">Github</a> |
                                    <a href="https://linkedin.com/company/blumilksoftware">LinkedIn</a> |
                                    <a href="https://www.facebook.com/blumilksoftware/">Facebook</a> |
                                    <a href="https://www.youtube.com/@blumilksoftware">YouTube</a>
                                </span>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </td>
        <td>&nbsp;</td>
    </tr>
</table>
</body>
</html>
