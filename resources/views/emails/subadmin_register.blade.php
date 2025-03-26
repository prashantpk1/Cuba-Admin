@php
$value = env('APP_URL', 'default_value').'/admin/login';
@endphp
<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

@php
    $url = env('APP_URL', 'default_value').'/login';
@endphp

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="format-detection" content="date=no" />
  <meta name="format-detection" content="address=no" />
  <meta name="format-detection" content="telephone=no" />
  <title></title>
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
  <style type="text/css">
    body {
      margin: 0px !important;
      padding: 0px !important;
      -webkit-text-size-adjust: 100% !important;
      -ms-text-size-adjust: 100% !important;
      -webkit-font-smoothing: antialiased !important;
    }

    html {
      width: 100%;
    }

    img {
      border: 0 !important;
      outline: none !important;
      display: block !important;
    }

    table {
      border-collapse: collapse;
      mso-table-lspace: 0px;
      mso-table-rspace: 0px;
    }

    td {
      border-collapse: collapse;
      mso-line-height-rule: exactly;
    }

    a,
    span {
      mso-line-height-rule: exactly;
    }

    a {
      text-decoration: none !important;
    }

    .ExternalClass * {
      line-height: 100%;
    }

    .video img {
      width: 100%;
      height: auto;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      line-height: 100% !important;
      -webkit-font-smoothing: antialiased;
    }

    yshortcuts,
    .yshortcuts a,
    .yshortcuts a:link,
    .yshortcuts a:visited,
    .yshortcuts a:hover,
    .yshortcuts a span {
      color: black;
      text-decoration: none !important;
      border-bottom: none !important;
      background: none !important;
    }

    code {
      white-space: 300;
      word-break: break-all;
    }

    span a {
      text-decoration: none !important;
    }

    .yshortcuts a {
      border-bottom: none !important;
    }

    *[class="gmail-fix"] {
      display: none !important;
    }

    @media only screen and (min-width:481px) and (max-width:599px) {
     table[class=templetcontainer] {
        width: 100% !important;
      }

     table[class=spark_full_width_containt] {
       width: 100% !important;
      }

      td[class=spacer] {
        padding-left: 14px !important;
        padding-right: 14px !important;
      }

      td[class=remove] {
        display: none !important;
      }

      img[class=full_img] {
        width: 100% !important;
        height: auto !important;
      }

      td[class=height_f] {
        height: 20px !important;
      }

      td[class=video] img {
        width: 100% !important;
        height: auto !important;
      }

      td[class=text_center] {
        text-align: center !important;
      }

      .hide {
        display: none !important;
      }

      td[class="mob_hide"] {
        display: none !important;
        font-size: 0 !important;
        height: 0 !important;
        line-height: 0 !important;
        min-height: 0 !important;
        width: 0 !important;
      }

      td[class="templetcontainer2"] {
        float: left !important;
        width: 100% !important;
        display: block !important;
      }

      td[class=pad_bottom] {
        padding-bottom: 10px;
      }

     td[class=pad_top] {
        padding-top: 10px;
      }
    }

    @media only screen and (max-width:480px) {
      table[class=templetcontainer] {
        width: 100% !important;
      }

      table[class=spark_full_width_containt] {
        width: 100% !important;
      }

      td[class="spacer"] {
        padding-left: 16px !important;
        padding-right: 16px !important;
      }

      td[class=remove] {
        display: none !important;
      }

      img[class=full_img] {
        width: 100% !important;
        height: auto !important;
      }

      td[class=height_f] {
        height: 20px !important;
      }

     td[class=video] img {
        width: 100% !important;
        height: auto !important;
      }

      td[class=text_center] {
        text-align: center !important;
      }

      .hide {
        display: none !important;
      }

      td[class=pad_bottom] {
        padding-bottom: 10px;
      }

      td[class=pad_top] {
        padding-top: 10px;
      }

      td[class="mob_hide"] {
        display: none !important;
        font-size: 0 !important;
        height: 0 !important;
        line-height: 0 !important;
        min-height: 0 !important;
        width: 0 !important;
      }

      td[class="templetcontainer2"] {
        float: left !important;
        width: 100% !important;
        display: block !important;
      }

      table[class="center_align"] {
       float: none !important;
        margin: 0 auto !important;
        display: block !important;
        width: 165px !important;
      }
    }

    /* Hide spacer image in applications that support media queries */
    @media only screen and (max-width: 600px) {
      *[class="gmail-fix"] {
        display: none !important;
      }
    }
  </style>
</head>

<body marginwidth="0" marginheight="0" offset="0" topmargin="0" leftmargin="0" bgcolor="#d2d2d2">
  <table width="100%" border="0" align="center" cellspacing="0" cellpadding="0" bgcolor="#d2d2d2">
    <tr class="gmail-fix">
      <td>
        <table cellpadding="0" cellspacing="0" border="0" align="center" width="600">
          <tr>
            <td cellpadding="0" cellspacing="0" border="0" height="1" ;
              style="line-height: 1px; min-width: 600px; mso-line-height-rule: exactly;"><img src="images/spacer.gif"
                width="600" height="1"
                style="display: block; max-height: 1px; min-height: 1px; min-width: 600px; width: 600px; " /></td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
      <td align="center">
        <table width="600" border="0" cellspacing="0" cellpadding="0" align="center" class="templetcontainer"
          style="table-layout:auto;">
          <tr>
            <td>
              <table width="600" border="0" cellspacing="0" cellpadding="0" align="center" class="templetcontainer">
                <tr>
                  <td class="remove">
                    <table width="600" border="0" cellspacing="0" cellpadding="0" align="center"
                      class="templetcontainer">
                      <tr>
                        <td width="20" class="remove">&nbsp;</td>
                        <td>
                          <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
                            <tr>
                              <td height="" class="height_f">&nbsp;</td>
                            </tr>
                            <tr>
                              <td>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center"
                                  class="templetcontainer">
                                 </table>
                              </td>
                            </tr>
                            <tr>
                              <td height="" class="height_f">&nbsp;</td>
                            </tr>
                          </table>
                        </td>
                        <td width="20" class="remove">&nbsp;</td>
                      </tr>
                    </table>
                  </td>
                </tr>
                <tr> </tr>
              </table>
            </td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
      <td align="center">
        <table width="600" border="0" cellspacing="0" cellpadding="0" align="center" class="templetcontainer"
          bgcolor="#ffffff" style=" background-color:#ffffff; border-bottom:solid 2px #ccc;">
          <tr>
            <td height="20" class="height_f">&nbsp;</td>
          </tr>
          <tr>
            <td align="center" valign="top">
              <table width="600" border="0" cellspacing="0" cellpadding="0" class="templetcontainer"
                style="table-layout:fixed;">
                <tr>
                  <td width="20" class="remove">&nbsp;</td>
                  <td valign="top" class="spacer">
                    <table width="560" border="0" align="center" cellpadding="0" cellspacing="0"
                      class="templetcontainer" style="table-layout:fixed;">
                      <tr>
                        <td width="170" valign="middle" class="templetcontainer2">
                          <table width="170" border="0" align="center" cellpadding="0" cellspacing="0"
                            class="templetcontainer">
                            <tr>
                              <td align="center" valign="middle"><a href="#" target="_blank"><img class=""
                                    src="{{ static_asset('admin/assets/images/logo/logo.png') }}" alt="" width="100" height="auto"
                                    style="display:block; max-width:170px;" border="0" hspace="0" vspace="0" /></a></td>
                            </tr>
                          </table>
                        </td>

                      </tr>
                    </table>
                  </td>
                  <td width="20" class="remove">&nbsp;</td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td height="20" class="height_f">&nbsp;</td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
      <td align="center">
        <table width="600" border="0" cellspacing="0" cellpadding="0" align="center" class="templetcontainer"
          bgcolor="#ffffff" style="table-layout:fixed; background-color:#ffffff;">
          <tr>
            <td width="20" class="remove">&nbsp;</td>
            <td width="" class="spacer">
              <table width="560" border="0" cellspacing="0" cellpadding="0" align="center" class="templetcontainer">
                <tr>
                  <td height="40">&nbsp;</td>
                </tr>
                <tr>
                  <td align="left" valign="top"
                    style="font-size:18px; line-height:28px; font-family:'Roboto',Arial, Helvetica, sans-serif; color:#4a4a4a; font-weight:700; text-align: left; padding: 0px 0px 10px 0;">
                    <h2>Welcome To Labbah As System SubAdmin</h2>
                    <p>Email : {{ $email }}</p>
                    <p>Password : {{ $password }}</p>
                    {{-- <p>Login URL :  {{ $value }} </p> --}}
                
                </td>
                </tr>
                <tr>
                  <td height="40">&nbsp;</td>
                </tr>
                <tr>
                  <td align="center" valign="left"
                    style="font-size:16px; line-height:24px; font-family:'Roboto',Arial, Helvetica, sans-serif; color:#212121; font-weight:normal; text-align: center; padding: 0px 0px;">
                    <a href="{{ $value }}" style="color:#000000: #afe072;border-radius: 4px;color: #ffffff;padding: 10px 25px;">Go To Admin Panel </a>
                  </td>
                </tr>
                <tr>
                  <td height="40">&nbsp;</td>
                </tr>

              </table>
            </td>
            <td width="20" class="remove">&nbsp;</td>
          </tr>
        </table>
      </td>
    </tr>



   <tr>
      <td align="center">
        <table width="600" border="0" cellspacing="0" cellpadding="0" align="center" class="templetcontainer"
          bgcolor="#002aa4" style="table-layout:fixed; background-color:#afe072;">
          <tr>
            <td width="20" class="remove">&nbsp;</td>
            <td width="" class="spacer">
              <table width="560" border="0" cellspacing="0" cellpadding="0" align="center" class="templetcontainer">
                <tr>
                  <td align="center" valign="top"
                    style="font-size:12px; line-height:22px; font-family:'Roboto', Arial, Helvetica, sans-serif; color:#000000; font-weight:300; text-align: center; padding:10px 0;">
                    © {{ date('Y')}}  Labbah. All Rights Reserved<br /></td>
                </tr>
              </table>
            </td>
            <td width="20" class="remove">&nbsp;</td>
          </tr>
        </table>
      </td>
    </tr>
   
  </table>
</body>
</html>


