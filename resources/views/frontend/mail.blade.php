<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0;">
    <meta name="format-detection" content="telephone=no" />


    <style>
        /* Reset styles */
        body {
            margin: 0;
            padding: 0;
            min-width: 100%;
            width: 100% !important;
            height: 100% !important;
        }

        body,
        table,
        td,
        div,
        p,
        a {
            -webkit-font-smoothing: antialiased;
            text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
            line-height: 100%;
        }

        table,
        td {
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
            border-collapse: collapse !important;
            border-spacing: 0;
        }

        img {
            border: 0;
            line-height: 100%;
            outline: none;
            text-decoration: none;
            -ms-interpolation-mode: bicubic;
        }

        #outlook a {
            padding: 0;
        }

        .ReadMsgBody {
            width: 100%;
        }

        .ExternalClass {
            width: 100%;
        }

        .ExternalClass,
        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td,
        .ExternalClass div {
            line-height: 100%;
        }

        /* Rounded corners for advanced mail clients only */
        @media all and (min-width: 560px) {
            .container {
                border-radius: 8px;
                -webkit-border-radius: 8px;
                -moz-border-radius: 8px;
                -khtml-border-radius: 8px;
            }
        }

        /* Set color for auto links (addresses, dates, etc.) */
        a,
        a:hover {
            color: #127DB3;
        }

        .footer a,
        .footer a:hover {
            color: #999999;
        }
    </style>

    <!-- MESSAGE SUBJECT -->
    <title>{{ $mailData['title'] }}</title>

</head>

<!-- BODY -->
<!-- Set message background color (twice) and text color (twice) -->

<body topmargin="0" rightmargin="0" bottommargin="0" leftmargin="0" marginwidth="0" marginheight="0" width="100%"
    style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; width: 100%; height: 100%; -webkit-font-smoothing: antialiased; text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; line-height: 100%;
	background-color: #F0F0F0;
	color: #000000;"
    bgcolor="#F0F0F0" text="#000000">

    <!-- SECTION / BACKGROUND -->
    <!-- Set message background color one again -->
    <table width="100%" align="center" border="0" cellpadding="0" cellspacing="0"
        style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; width: 100%;" class="background">
        <tr>
            <td align="center" valign="top"
                style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0;" bgcolor="#F0F0F0">

                <!-- WRAPPER -->
                <!-- Set wrapper width (twice) -->
                <table border="0" cellpadding="0" cellspacing="0" align="center" width="560"
                    style="border-collapse: collapse; border-spacing: 0; padding: 0; width: inherit;
	max-width: 560px;"
                    class="wrapper">

                    <tr>
                        <td align="center" valign="top"
                            style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%;
			padding-top: 20px;
			padding-bottom: 20px;">

                            <!-- PREHEADER -->
                            <!-- Set text color to background color -->
                            <div style="display: none; visibility: hidden; overflow: hidden; opacity: 0; font-size: 1px; line-height: 1px; height: 0; max-height: 0; max-width: 0;
			color: #F0F0F0;"
                                class="preheader">
                                {{ $mailData['description'] }}</div>


                            <a target="_blank" style="text-decoration: none;" href="https://codingiz.com"><img
                                    border="0" vspace="0" hspace="0"
                                    src="{{ asset('frontend/images/logo.png') }}" width="100" height="30"
                                    alt="Logo" title="Logo"
                                    style="
				color: #000000;
				font-size: 10px; margin: 0; padding: 0; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; border: none; display: block;" /></a>

                        </td>
                    </tr>

                    <!-- End of WRAPPER -->
                </table>

                <!-- WRAPPER / CONTEINER -->
                <!-- Set conteiner background color -->
                <table border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#FFFFFF" width="560"
                    style="border-collapse: collapse; border-spacing: 0; padding: 0; width: inherit;
	max-width: 560px;"
                    class="container">

                    <!-- HEADER -->
                    <!-- Set text color and font family ("sans-serif" or "Georgia, serif") -->
                    <tr>
                        <td align="center" valign="top"
                            style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%; font-size: 24px; font-weight: bold; line-height: 130%;
			padding-top: 25px;
			color: #000000;
			font-family: sans-serif;"
                            class="header">
                            {{ $mailData['title'] }}
                        </td>
                    </tr>

                    <!-- SUBHEADER -->
                    <!-- Set text color and font family ("sans-serif" or "Georgia, serif") -->



                    <tr>
                        <td align="center" valign="top"
                            style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0;
			padding-top: 20px;"
                            class="hero"><a target="_blank" style="text-decoration: none;"
                                href="{{ $mailData['posturl'] }}"><img border="0" vspace="0"
                                    hspace="0"
                                    src="{{ $mailData['image'] }}"
                                    alt="Please enable images to view this content" title="Hero Image" width="560"
                                    style="
			width: 100%;
			max-width: 560px;
			color: #000000; font-size: 13px; margin: 0; padding: 0; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; border: none; display: block;" /></a>
                        </td>
                    </tr>

                    <!-- PARAGRAPH -->
                    <!-- Set text color and font family ("sans-serif" or "Georgia, serif"). Duplicate all text styles in links, including line-height -->
                    <tr>
                        <td align="center" valign="top"
                            style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%; font-size: 17px; font-weight: 400; line-height: 160%;
			padding-top: 25px;
			color: #000000;
			font-family: sans-serif;"
                            class="paragraph">
                           {{ $mailData['description'] }}
                        </td>
                    </tr>

                    <!-- BUTTON -->

                    <tr>
                        <td align="center" valign="top"
                            style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%;
			padding-top: 25px;
			padding-bottom: 5px;"
                            class="button"><a href="{{ $mailData['posturl'] }}" target="_blank"
                                style="text-decoration: underline;">
                                <table border="0" cellpadding="0" cellspacing="0" align="center"
                                    style="max-width: 240px; min-width: 120px; border-collapse: collapse; border-spacing: 0; padding: 0;">
                                    <tr>
                                        <td align="center" valign="middle"
                                            style="padding: 12px 24px; margin: 0; text-decoration: underline; border-collapse: collapse; border-spacing: 0; border-radius: 4px; -webkit-border-radius: 4px; -moz-border-radius: 4px; -khtml-border-radius: 4px;"
                                            bgcolor="#E9703E"><a target="_blank"
                                                style="text-decoration: underline;
					color: #FFFFFF; font-family: sans-serif; font-size: 17px; font-weight: 400; line-height: 120%;"
                                                href="{{ $mailData['posturl'] }}">
                                                View Post
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                            </a>
                        </td>
                    </tr>

                    <!-- LINE -->
                    <!-- Set line color -->
                    <tr>
                        <td align="center" valign="top"
                            style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%;
			padding-top: 25px;"
                            class="line">
                            <hr color="#E0E0E0" align="center" width="100%" size="1" noshade
                                style="margin: 0; padding: 0;" />
                        </td>
                    </tr>

                    <!-- LIST -->


                    <!-- LINE -->


                    <!-- PARAGRAPH -->
                    <!-- Set text color and font family ("sans-serif" or "Georgia, serif"). Duplicate all text styles in links, including line-height -->
                    <tr>
                        <td align="center" valign="top"
                            style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%; font-size: 17px; font-weight: 400; line-height: 160%;
			padding-top: 20px;
			padding-bottom: 25px;
			color: #000000;
			font-family: sans-serif;"
                            class="paragraph">
                            Have a&nbsp;question? <a href="mailto:codingiz.com@gmail.com" target="_blank"
                                style="color: #127DB3; font-family: sans-serif; font-size: 17px; font-weight: 400; line-height: 160%;">codingiz.com@gmail.com</a>
                        </td>
                    </tr>

                    <!-- End of WRAPPER -->
                </table>

                <!-- WRAPPER -->
                <!-- Set wrapper width (twice) -->
                <table border="0" cellpadding="0" cellspacing="0" align="center" width="560"
                    style="border-collapse: collapse; border-spacing: 0; padding: 0; width: inherit;
	max-width: 560px;"
                    class="wrapper">

                    <!-- SOCIAL NETWORKS -->
                    <!-- Image text color should be opposite to background color. Set your url, image src, alt and title. Alt text should fit the image size. Real image size should be x2 -->
                    <tr>
                        <td align="center" valign="top"
                            style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%;
			padding-top: 25px;"
                            class="social-icons">
                            <table width="256" border="0" cellpadding="0" cellspacing="0" align="center"
                                style="border-collapse: collapse; border-spacing: 0; padding: 0;">
                                <tr>

                                    <!-- ICON 1 -->
                                    <td align="center" valign="middle"
                                        style="margin: 0; padding: 0; padding-left: 10px; padding-right: 10px; border-collapse: collapse; border-spacing: 0;">
                                        <a target="_blank"
                                            href="https://www.facebook.com/codingIz"
                                            style="text-decoration: none;"><img border="0" vspace="0"
                                                hspace="0"
                                                style="padding: 0; margin: 0; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; border: none; display: inline-block;
					color: #000000;"
                                                alt="F" title="Facebook" width="44" height="44"
                                                src="{{ asset('frontend/images/facebook.png') }}"></a>
                                    </td>

                                    <!-- ICON 2 -->
                                    <td align="center" valign="middle"
                                        style="margin: 0; padding: 0; padding-left: 10px; padding-right: 10px; border-collapse: collapse; border-spacing: 0;">
                                        <a target="_blank"
                                            href="https://www.instagram.com/codingiz"
                                            style="text-decoration: none;"><img border="0" vspace="0"
                                                hspace="0"
                                                style="padding: 0; margin: 0; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; border: none; display: inline-block;
					color: #000000;"
                                                alt="T" title="Twitter" width="44" height="44"
                                                src="{{ asset('frontend/images/instagram.png') }}"></a>
                                    </td>

                                    <!-- ICON 3 -->
                                    <td align="center" valign="middle"
                                        style="margin: 0; padding: 0; padding-left: 10px; padding-right: 10px; border-collapse: collapse; border-spacing: 0;">
                                        <a target="_blank"
                                            href="https://www.youtube.com/@codingiz"
                                            style="text-decoration: none;"><img border="0" vspace="0"
                                                hspace="0"
                                                style="padding: 0; margin: 0; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; border: none; display: inline-block;
					color: #000000;"
                                                alt="G" title="Google Plus" width="44" height="44"
                                                src="{{ asset('frontend/images/youtube.png') }}"></a>
                                    </td>

                                    <!-- ICON 4 -->


                                </tr>
                            </table>
                        </td>
                    </tr>



                    <!-- End of WRAPPER -->
                </table>

                <!-- End of SECTION / BACKGROUND -->
            </td>
        </tr>
    </table>

</body>

</html>
