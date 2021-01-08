<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>{{$data['application_subject']}}</title>
    </head>

    <body yahoo bgcolor="#f6f8f1">
        <table width="100%" bgcolor="#f6f8f1" border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td>
                    <table style="width: 100%; max-width: 600px;" bgcolor="#ffffff" class="content" align="center" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td bgcolor="#c7d8a7" class="header" style="padding: 40px 30px 20px 30px;">
                                <table width="70" align="left" border="0" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td height="70" style="padding: 0 20px 20px 0;">
                                            <img class="fix" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/icon.gif" width="70" height="70" border="0" alt="" />
                                        </td>
                                    </tr>
                                </table>
                                <table class="col425" align="left" border="0" cellpadding="0" cellspacing="0" style="width: 100%; max-width: 425px;">
                                    <tr>
                                        <td height="70">
                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                <tr>
                                                    <td class="subhead" style="padding: 0 0 0 3px; font-size: 15px; color: #ffffff; font-family: sans-serif; letter-spacing: 3px;">
                                                        {{$data['seeker_email']}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="h1" style="padding: 5px 0 0 0; font-size: 25px; line-height: 38px; font-weight: bold;">
                                                        {{$data['seeker_name']}}
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td class="innerpadding borderbottom">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                        <td class="h2" style="">
                                            <h2 style="padding: 0 0 15px 0; font-size: 24px; line-height: 28px; font-weight: bold; margin-bottom: 8px;">{{$data['application_subject']}}</h2>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bodycopy">
                                            {{$data['application_message']}}
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td class="innerpadding borderbottom">
                                <table class="col380" align="left" border="0" cellpadding="0" cellspacing="0" style="width: 100%; max-width: 380px;">
                                    <tr>
                                        <td>
                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                <tr>
                                                    <td style="padding: 20px 0 0 0;">
                                                        <table class="buttonwrapper" bgcolor="#e05443" border="0" cellspacing="0" cellpadding="0">
                                                            <tr>
                                                                <td class="button" height="45" style="text-align: center; font-size: 18px; font-family: sans-serif; font-weight: bold; padding: 0 30px 0 30px;">
                                                                    <a href="https://work4u.com.bd/public{{$data['cv_url']}}" style="padding: 8px 15px; margin-bottom: 15px; color: #ffffff; text-decoration: none;">View CV</a>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;</td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 20px 30px 15px 30px; background: #44525f;">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                        <td align="center" class="footercopy">&reg; All Rights Reserved <a href="https://work4u.com.bd/" target="_blacnk">Work4u.com.bd</a></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>
</html>
