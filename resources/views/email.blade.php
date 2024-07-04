<!doctype html>
<html lang="pl">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Odpowiedź na formularz kontaktowy</title>
</head>
<body style="font-family: Helvetica, sans-serif; -webkit-font-smoothing: antialiased; font-size: 16px; line-height: 1.3; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; background-color: #F6F7FD; margin: 0; padding: 0;">
<table role="presentation" style="border-collapse: separate; width: 100%;" class="body">
    <tr>
        <td>&nbsp;</td>
        <td style="margin: 0 auto !important; max-width: 600px; padding: 24px 0 0;width: 600px;" class="container">
            <div style="box-sizing: border-box; display: block; margin: 0 auto; max-width: 600px; padding: 0;" class="content">
                <h2 style="margin: 0; text-align: center;">Odpowiedź z formularza kontaktowego</h2>
                <table role="presentation" style="color: #000000; width: 100%;" class="main">
                    <tr>
                        <td style="box-sizing: border-box; padding: 24px;" class="wrapper">
                            <div style="text-align: right;">
                                <h3>Twoja wiadomość</h3>
                                <div style="background: #ffffff; border-radius: 16px; width: 100%; padding: 4px 12px 4px 4px;">
                                    <p>{!! $details['messageDescription'] !!}</p>
                                </div>
                            </div>
                            <h3 style="padding-top: 8px">Odpowiedź</h3>
                            <div style="background: #ffffff; border-radius: 16px; width: 100%; padding: 4px 4px 4px 12px;">
                                {!! $details['response'] !!}
                            </div>
                        </td>
                    </tr>
                </table>
                <div style="clear: both; padding-top: 24px; padding-bottom: 24px; text-align: left; width: 100%;" class="footer">
                    <table role="presentation" style="margin: 0; text-align: left; width: 100%;">
                        <tr>
                            <td style="font-size: 16px; text-align: left;" class="content-block">
                                <div style="display: flex; align-items: center;">
                                    <img src="https://www.blumilk.pl/logo.png" class="logo" style="height: 80px; margin: auto 8px auto 16px;" alt="Blumilk Logo">
                                    <div>
                                        <span>Blumilk sp. z o.o.</span><br>
                                        <span style="color: #000000; text-decoration: none;">office@blumilk.pl</span><br>
                                        <span>+48 780 142 367</span><br>
                                        <span>ul. Najświętszej Marii Panny 5F/5 59-220 Legnica</span><br>
                                        <span>
                                            <a href="https://clutch.co/profile/blumilk-0" style="color: #000000; text-decoration: underline;">Clutch</a> |
                                            <a href="https://github.com/blumilksoftware" style="color: #000000; text-decoration: underline;">Github</a> |
                                            <a href="https://linkedin.com/company/blumilksoftware" style="color: #000000; text-decoration: underline;">LinkedIn</a> |
                                            <a href="https://www.facebook.com/blumilksoftware/" style="color: #000000; text-decoration: underline;">Facebook</a> |
                                            <a href="https://www.youtube.com/@blumilksoftware" style="color: #000000; text-decoration: underline;">YouTube</a>
                                        </span>
                                    </div>
                                </div>
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
