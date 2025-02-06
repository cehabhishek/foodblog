<center>
    <table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%"
        style="background-color:rgb(244,244,244)">
        <tbody>
            <tr>
                <td align="center" valign="top">
                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                        <tbody>
                            <tr>
                                <td style="background-color:#f4f4f4" valign="top" align="center"
                                    class="m_5452675881486220096mceSectionBody">
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%"
                                        style="max-width:660px" role="presentation">
                                        <tbody>
                                            <tr>
                                                <td style="background-color:#ffffff" valign="top">
                                                    <table align="center" border="0" cellpadding="0" cellspacing="0"
                                                        width="100%" role="presentation">
                                                        <tbody>
                                                            <tr>
                                                                <td style="background-position:center;background-repeat:no-repeat;background-size:cover"
                                                                    valign="top">
                                                                    <table border="0" cellpadding="0" cellspacing="0"
                                                                        width="100%" role="presentation">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="padding-top:0;padding-bottom:0"
                                                                                    valign="top" colspan="12"
                                                                                    width="100%">
                                                                                    <table border="0" cellpadding="0"
                                                                                        cellspacing="0" width="100%"
                                                                                        role="presentation">
                                                                                        <tbody>
                                                                                            {{-- logo --}}
                                                                                            <tr>
                                                                                                <td style="padding-top:12px;padding-bottom:12px;padding-right:0;padding-left:0"
                                                                                                    valign="top"
                                                                                                    align="center"><a
                                                                                                        href=""
                                                                                                        style="display:block"
                                                                                                        target="_blank"><span
                                                                                                            style="border:0;border-radius:0;vertical-align:top;margin:0"><img
                                                                                                                width="659.9999999999999"
                                                                                                                height="auto"
                                                                                                                style="width:659.9999999999999px;height:auto;max-width:660px!important;border-radius:0;display:block"
                                                                                                                alt=""
                                                                                                                src="{{asset('frontend/images/logo.jpg')}}"
                                                                                                                role="presentation"
                                                                                                                CToWUd"
                                                                                                                data-bit="iit"></span></a>
                                                                                                </td>
                                                                                            </tr>

                                                                                            <tr>
                                                                                                <td style="background-color:transparent;padding-top:6px;padding-bottom:6px;padding-right:6px;padding-left:6px"
                                                                                                    valign="top">
                                                                                                    <table
                                                                                                        align="center"
                                                                                                        border="0"
                                                                                                        cellpadding="0"
                                                                                                        cellspacing="0"
                                                                                                        width="100%"
                                                                                                        style="background-color:transparent;width:100%"
                                                                                                        role="presentation">
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td style="min-width:100%;border-top-width:2px;border-top-style:solid;border-top-color:#000000;line-height:0;font-size:0"
                                                                                                                    valign="top"
                                                                                                                    class="m_5452675881486220096mceDividerBlock">
                                                                                                                    &nbsp;
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            {{-- logo end --}}
                                                                                            @foreach ($newslatters as $newslatter)

                                                                                            @if ($newslatter->type == 'Post')
                                                                                            <tr>
                                                                                                <td valign="top"
                                                                                                    style="padding: 0;">
                                                                                                    <table width="100%"
                                                                                                        style="border: 0; border-radius: 0; border-collapse: separate;">
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td
                                                                                                                    style="padding: 0 24px;">
                                                                                                                    <div class="mceText"
                                                                                                                        id="dataBlockId-18"
                                                                                                                        style="width: 100%;">
                                                                                                                        <p
                                                                                                                            style="text-align: left;">
                                                                                                                            <strong>
                                                                                                                                <span
                                                                                                                                    style="color: rgb(0,67,130); font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif;">
                                                                                                                                    {{$newslatter->getPost->title}}
                                                                                                                                </span>
                                                                                                                            </strong>
                                                                                                                        </p>
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td valign="top">
                                                                                                    <table border="0"
                                                                                                        cellpadding="0"
                                                                                                        cellspacing="0"
                                                                                                        width="100%"
                                                                                                        style="border-collapse: separate;"
                                                                                                        role="presentation">
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td style="background-position: center; background-repeat: no-repeat; background-size: cover; padding: 0;"
                                                                                                                    valign="top">
                                                                                                                    <table
                                                                                                                        border="0"
                                                                                                                        cellpadding="0"
                                                                                                                        cellspacing="24"
                                                                                                                        width="100%"
                                                                                                                        style="table-layout: fixed;"
                                                                                                                        role="presentation">
                                                                                                                        <tbody>
                                                                                                                            <tr>
                                                                                                                                <!-- Left Column (Image) -->
                                                                                                                                <td valign="top"
                                                                                                                                    colspan="6"
                                                                                                                                    width="50%"
                                                                                                                                    style="padding: 0;">
                                                                                                                                    <table
                                                                                                                                        border="0"
                                                                                                                                        cellpadding="0"
                                                                                                                                        cellspacing="0"
                                                                                                                                        width="100%"
                                                                                                                                        role="presentation">
                                                                                                                                        <tbody>
                                                                                                                                            <tr>
                                                                                                                                                <td valign="top"
                                                                                                                                                    style="padding: 12px;">
                                                                                                                                                    <a href=""
                                                                                                                                                        style="display: block;"
                                                                                                                                                        target="_blank">
                                                                                                                                                        <img width="306"
                                                                                                                                                            style="width: 306px; height: auto; max-width: 306px !important; border-radius: 0; display: block;"
                                                                                                                                                            alt=""
                                                                                                                                                            src="{{asset('uploads/post/'.$newslatter->getPost->thumbnail)}}"
                                                                                                                                                            role="presentation">
                                                                                                                                                    </a>
                                                                                                                                                </td>
                                                                                                                                            </tr>
                                                                                                                                        </tbody>
                                                                                                                                    </table>
                                                                                                                                </td>
                                                                                                                                <!-- Right Column (Description + Button) -->
                                                                                                                                <td valign="top"
                                                                                                                                    colspan="6"
                                                                                                                                    width="50%"
                                                                                                                                    style="padding: 0;">
                                                                                                                                    <table
                                                                                                                                        border="0"
                                                                                                                                        cellpadding="0"
                                                                                                                                        cellspacing="0"
                                                                                                                                        width="100%"
                                                                                                                                        role="presentation">
                                                                                                                                        <tbody>
                                                                                                                                            <tr>
                                                                                                                                                <td valign="top"
                                                                                                                                                    style="padding: 0;">
                                                                                                                                                    <table
                                                                                                                                                        width="100%"
                                                                                                                                                        style="border: 0; border-radius: 0; border-collapse: separate;">
                                                                                                                                                        <tbody>
                                                                                                                                                            <tr>
                                                                                                                                                                <td
                                                                                                                                                                    style="padding: 12px 16px;">
                                                                                                                                                                    <div class="mceText"
                                                                                                                                                                        id="dataBlockId-21"
                                                                                                                                                                        style="width: 100%;">
                                                                                                                                                                        <p
                                                                                                                                                                            style="text-align: left; font-size: 14px; font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif;">
                                                                                                                                                                            {{$newslatter->getPost->meta_description}}
                                                                                                                                                                        </p>
                                                                                                                                                                    </div>
                                                                                                                                                                    <a href=""
                                                                                                                                                                        style="background-color: #004382; border-radius: 8px; border: 2px solid #004382; color: #ffffff; display: block; font-family: 'Helvetica Neue', Helvetica, Arial, Verdana, sans-serif; font-size: 16px; font-weight: normal; padding: 12px 28px; text-decoration: none; min-width: 30px; text-align: center; direction: ltr; letter-spacing: 0px;"
                                                                                                                                                                        rel="noreferrer"
                                                                                                                                                                        target="_blank">
                                                                                                                                                                        Read
                                                                                                                                                                        more
                                                                                                                                                                    </a>
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
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td valign="top"
                                                                                                    style="background-color: transparent; padding: 0 24px 20px;">
                                                                                                    <table
                                                                                                        align="center"
                                                                                                        border="0"
                                                                                                        cellpadding="0"
                                                                                                        cellspacing="0"
                                                                                                        width="100%"
                                                                                                        style="background-color: transparent; width: 100%;"
                                                                                                        role="presentation">
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td valign="top"
                                                                                                                    class="mceDividerBlock"
                                                                                                                    style="min-width: 100%; border-top: 1px solid #000000; line-height: 0; font-size: 0;">
                                                                                                                    &nbsp;
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            @endif
                                                                                            @endforeach


                                                                                            {{-- banner --}}
                                                                                            @foreach ($newslatters as $newslatter)

                                                                                            @if ($newslatter->type == 'Banner')

                                                                                            <tr>
                                                                                                <td style="padding-top:12px;padding-bottom:12px;padding-right:0;padding-left:0"
                                                                                                    valign="top"
                                                                                                    align="center"><a
                                                                                                        href=""
                                                                                                        style="display:block"
                                                                                                        target="_blank"><span
                                                                                                            Border"
                                                                                                            style="border:0;border-radius:0;vertical-align:top;margin:0"><img
                                                                                                                width="561"
                                                                                                                height="auto"
                                                                                                                style="width:561px;height:auto;max-width:561px!important;border-radius:0;display:block"
                                                                                                                alt=""
                                                                                                                src="{{$newslatter->data_value}}"
                                                                                                                role="presentation"
                                                                                                                CToWUd"
                                                                                                                data-bit="iit"></span></a>
                                                                                                </td>
                                                                                            </tr>
                                                                                            @endif
                                                                                            @endforeach

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
                                </td>
                            </tr>
                        </tbody>
                        {{-- <tbody>
                            <tr>
                                <td style="background-color:#f4f4f4" valign="top" align="center"
                                    class="m_5452675881486220096mceSectionFooter">
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%"
                                        style="max-width:660px" role="presentation">
                                        <tbody>
                                            <tr>
                                                <td style="background-color:#ffffff" valign="top">
                                                    <table align="center" border="0" cellpadding="0" cellspacing="0"
                                                        width="100%" role="presentation">
                                                        <tbody>
                                                            <tr>
                                                                <td style="background-position:center;background-repeat:no-repeat;background-size:cover"
                                                                    valign="top">
                                                                    <table border="0" cellpadding="0" cellspacing="0"
                                                                        width="100%" role="presentation">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="padding-top:0;padding-bottom:0"
                                                                                    valign="top" colspan="12"
                                                                                    width="100%">
                                                                                    <table border="0" cellpadding="0"
                                                                                        cellspacing="0" width="100%"
                                                                                        role="presentation">
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td style="padding-top:8px;padding-bottom:8px;padding-right:8px;padding-left:8px"
                                                                                                    valign="top">
                                                                                                    <table
                                                                                                        align="center"
                                                                                                        border="0"
                                                                                                        cellpadding="0"
                                                                                                        cellspacing="0"
                                                                                                        width="100%"
                                                                                                        role="presentation"
                                                                                                        id="m_5452675881486220096section_62c1bdf54d221e8ba6ebb709275c6f63"
                                                                                                        class="m_5452675881486220096mceFooterSection">
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td style="background-position:center;background-repeat:no-repeat;background-size:cover"
                                                                                                                    valign="top">
                                                                                                                    <table
                                                                                                                        border="0"
                                                                                                                        cellpadding="0"
                                                                                                                        cellspacing="12"
                                                                                                                        width="100%"
                                                                                                                        role="presentation">
                                                                                                                        <tbody>
                                                                                                                            <tr>
                                                                                                                                <td style="padding-top:0;padding-bottom:0"
                                                                                                                                    valign="top"
                                                                                                                                    colspan="12"
                                                                                                                                    width="100%">
                                                                                                                                    <table
                                                                                                                                        border="0"
                                                                                                                                        cellpadding="0"
                                                                                                                                        cellspacing="0"
                                                                                                                                        width="100%"
                                                                                                                                        role="presentation">
                                                                                                                                        <tbody>
                                                                                                                                            <tr>
                                                                                                                                                <td style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0"
                                                                                                                                                    valign="top"
                                                                                                                                                    align="center">
                                                                                                                                                    <a href=""
                                                                                                                                                        style="display:block"
                                                                                                                                                        target="_blank"><span
                                                                                                                                                            Border"
                                                                                                                                                            style="border:0;border-radius:0;vertical-align:top;margin:0"><img
                                                                                                                                                                width="99"
                                                                                                                                                                height="auto"
                                                                                                                                                                style="width:99px;height:auto;max-width:99px!important;border-radius:0;display:block"
                                                                                                                                                                alt="Logo"
                                                                                                                                                                src=""
                                                                                                                                                                class="m_5452675881486220096mceLogo CToWUd"
                                                                                                                                                                data-bit="iit"></span></a>
                                                                                                                                                </td>
                                                                                                                                            </tr>
                                                                                                                                            <tr>
                                                                                                                                                <td style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0"
                                                                                                                                                    valign="top"
                                                                                                                                                    align="center">
                                                                                                                                                    <table
                                                                                                                                                        width="100%"
                                                                                                                                                        style="border:0;border-radius:0;border-collapse:separate">
                                                                                                                                                        <tbody>
                                                                                                                                                            <tr>
                                                                                                                                                                <td
                                                                                                                                                                    style="padding-left:16px;padding-right:16px;padding-top:0;padding-bottom:0">
                                                                                                                                                                    <div class="m_5452675881486220096mceText"
                                                                                                                                                                        id="m_5452675881486220096dataBlockId-100"
                                                                                                                                                                        style="display:inline-block;width:100%">
                                                                                                                                                                        <p><em><span
                                                                                                                                                                                    style="font-size:12px">Copyright
                                                                                                                                                                                    (C)
                                                                                                                                                                                    2025
                                                                                                                                                                                    FOODTECHBIZ
                                                                                                                                                                                    (OPC)
                                                                                                                                                                                    PRIVATE
                                                                                                                                                                                    LIMITED.
                                                                                                                                                                                    All
                                                                                                                                                                                    rights
                                                                                                                                                                                    reserved.</span></em><br><span
                                                                                                                                                                                style="font-size:12px">
                                                                                                                                                                                You
                                                                                                                                                                                are
                                                                                                                                                                                receiving
                                                                                                                                                                                this
                                                                                                                                                                                email
                                                                                                                                                                                because
                                                                                                                                                                                you
                                                                                                                                                                                opted
                                                                                                                                                                                in
                                                                                                                                                                                via
                                                                                                                                                                                our
                                                                                                                                                                                website.
                                                                                                                                                                            </span><br><br><span
                                                                                                                                                                                style="font-size:12px">Our
                                                                                                                                                                                mailing
                                                                                                                                                                                address
                                                                                                                                                                                is:</span><br><span
                                                                                                                                                                                style="font-size:12px">
                                                                                                                                                                                FOODTECHBIZ
                                                                                                                                                                                (OPC)
                                                                                                                                                                                PRIVATE
                                                                                                                                                                                LIMITED
                                                                                                                                                                                O-1003
                                                                                                                                                                                Ajnara
                                                                                                                                                                                Daffodils
                                                                                                                                                                                Sector
                                                                                                                                                                                -
                                                                                                                                                                                137
                                                                                                                                                                                Noida,
                                                                                                                                                                                Uttar
                                                                                                                                                                                Pradesh
                                                                                                                                                                                201305
                                                                                                                                                                                India
                                                                                                                                                                            </span><br><br><span
                                                                                                                                                                                style="font-size:12px">Want
                                                                                                                                                                                to
                                                                                                                                                                                change
                                                                                                                                                                                how
                                                                                                                                                                                you
                                                                                                                                                                                receive
                                                                                                                                                                                these
                                                                                                                                                                                emails?</span><br><span
                                                                                                                                                                                style="font-size:12px">You
                                                                                                                                                                                can
                                                                                                                                                                            </span><a
                                                                                                                                                                                href=""
                                                                                                                                                                                target="_blank"><span
                                                                                                                                                                                    style="font-size:12px">update
                                                                                                                                                                                    your
                                                                                                                                                                                    preferences</span></a><span
                                                                                                                                                                                style="font-size:12px">
                                                                                                                                                                                or
                                                                                                                                                                            </span><a
                                                                                                                                                                                href=""
                                                                                                                                                                                target="_blank"><span
                                                                                                                                                                                    style="font-size:12px">unsubscribe</span></a>
                                                                                                                                                                        </p>
                                                                                                                                                                    </div>
                                                                                                                                                                </td>
                                                                                                                                                            </tr>
                                                                                                                                                        </tbody>
                                                                                                                                                    </table>
                                                                                                                                                </td>
                                                                                                                                            </tr>
                                                                                                                                            <tr>
                                                                                                                                                <td valign="top"
                                                                                                                                                    align="center">
                                                                                                                                                    <table
                                                                                                                                                        align="center"
                                                                                                                                                        border="0"
                                                                                                                                                        cellpadding="0"
                                                                                                                                                        cellspacing="0"
                                                                                                                                                        width="100%"
                                                                                                                                                        role="presentation">
                                                                                                                                                        <tbody>
                                                                                                                                                            <tr>
                                                                                                                                                                <td style="background-position:center;background-repeat:no-repeat;background-size:cover;padding-top:0px;padding-bottom:0px"
                                                                                                                                                                    valign="top">
                                                                                                                                                                    <table
                                                                                                                                                                        border="0"
                                                                                                                                                                        cellpadding="0"
                                                                                                                                                                        cellspacing="24"
                                                                                                                                                                        width="100%"
                                                                                                                                                                        role="presentation">
                                                                                                                                                                        <tbody>
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
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody> --}}
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
</center>