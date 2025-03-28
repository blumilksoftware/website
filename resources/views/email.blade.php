<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>{{ __('email.subject') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: Sora, sans-serif;
            -webkit-font-smoothing: antialiased;
            font-size: 16px;
            line-height: 1.3;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
            background-color: #F4F8FD;
            margin: 0;
            padding: 0;
        }

        .container {
            margin: 0 !important;
            max-width: 600px;
            padding: 0;
            width: 100%;
        }

        .content {
            box-sizing: border-box;
            color: #5E5E5E;
            display: block;
            margin: 0 auto;
            max-width: 600px;
            padding: 24px;
        }

        h1 {
            margin: 85px 0 0 0;
            text-align: center;
            color: #000000;
        }

        .wrapper {
            box-sizing: border-box;
            padding: 24px 16px 150px;
        }

        .message {
            text-align: right;
        }
        .message-box{
            margin: 0 0 0 24px;
        }
        .response-box{
            margin: 0 24px 0 0;
        }
        .message-box, .response-box {
            background: #ffffff;
            border-radius: 24px;
            width: 100%;
            box-sizing: border-box;
            padding: 8px 12px;
        }
        h3 {
            margin: 16px;
        }

        .footer {
            padding-top: 24px;
            text-align: left;
            width: 100%;
            background-color: #ffffff;
            box-sizing: border-box;
        }

        .footer-top {
            margin: 0 16px;
            padding: 2.5rem 2rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-top: 2px solid #F5F5F5;
        }

        .footer-logo img {
            width: 6rem;
            max-width: 8rem;
            margin: 0 auto;
        }

        .footer-bottom {
            padding: 1rem 2rem;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            background-color: #F7FAFC;
            color: #6B6E70;
            text-align: center;
        }

        .footer-bottom p {
            margin: 0.5rem 0;
            font-size: 0.875rem;
            line-height: 1.25rem;
        }

        .footer-bottom a {
            font-weight: normal;
            white-space: normal;
            color: inherit;
            text-decoration: none;
        }

        .footer-bottom a:hover {
            text-decoration: underline;
        }

        .social-link {
            height: 22px;
            width: 22px;
        }

        /* Media Queries */
        @media (max-width: 600px) {
            .container {
                padding: 16px;
            }

            .wrapper {
                padding: 16px;
            }

            .footer-top {
                flex-direction: column;
                gap: 1rem;
            }

            .footer-logo img {
                width: 5rem;
            }

            .footer-bottom {
                flex-direction: column;
                justify-content: space-between;
                padding: 1rem 16px;
            }

            .footer-copy {
                margin-right: 4px;
            }
        }
    </style>
</head>
<body>
<table role="presentation" style="border-collapse: separate; width: 100%;" class="body">
    <tr>
        <td class="container">
            <div class="content">
                <h1>{{ __('email.header') }}</h1>
                <table role="presentation" style="width: 100%;" class="main">
                    <tr>
                        <td class="wrapper">
                            <div class="message">
                                <h3>{{ __('email.your_message') }}</h3>
                                <div class="message-box">
                                    <p>{!! $details->messageDescription !!}</p>
                                </div>
                            </div>
                            <h3>{{ __('email.response') }}</h3>
                            <div class="response-box">
                                {!! $details->response !!}
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="footer">
                <footer>
                    <div class="footer-top">
                        <div class="footer-logo">
                            <a href="{{ config('app.url') }}" class="social-link" target="_blank">
                                <img src="{{ asset('identification/logo.png') }}" alt="Blumilk logo"/>
                            </a>
                        </div>
                    </div>
                    <div class="footer-bottom">
                        <div class="footer-copy">Copyright &copy; {{ date('Y') }} | Blumilk</div>
                        <div>
                            <a href="{{ route('privacy-policy') }}" target="_blank">{{ __('footer.policy') }}</a> |
                            <a href="{{ route('data') }}">{{ __('footer.data') }}</a>
                        </div>
                    </div>
                </footer>
            </div>
        </td>
    </tr>
</table>
</body>
</html>
