<?php
require("cek.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Language" content="en-us">
<title>.: Your MLM Website :.</title>
<meta content=Panjianom name=Author>
<meta content="your keywords, your keywords here" name=Keywords>
<meta content="your description here." name=Description>
<meta http-equiv=robots content="index, follow">
<meta http-equiv=rating content=general>
</head>

<style>
body {
    scrollbar-face-color: #006699;
    scrollbar-highlight-color: #cc3300;
    scrollbar-shadow-color: #000000;
    scrollbar-3dlight-color: #006699;
    scrollbar-arrow-color: #ffffff;
    scrollbar-track-color: #0099cc;
    scrollbar-darkshadow-color: #000000;
    scrollbar-base-color: #848ea9;
}
.lnk1:hover {
    color: #0000fa;
    text-decoration: none;
}
.lnk:link {
    color: #ffff00;
    text-decoration: none;
}
</style>

<body topmargin="0" leftmargin="0">

<div align="center">
  <center>
  <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="780" id="AutoNumber1">
    <tr>
      <td>
      <p align="center">

      <img border="0" src="images/banner.jpg" width="780" height="154"></p>
      </td>
    </tr>
    <tr>
      <td>
      <div align="center">
        <center>
        <table border="1" cellpadding="4" cellspacing="0" style="border-collapse: collapse" bordercolor="#3E6F7C" width="780" id="AutoNumber2">
          <tr>
            <td width="207" valign="top">
            <p style="margin-top: 0; margin-bottom: 0" align="center">
            <font face="Verdana" style="font-weight: 700" size="2" color="#000080">..::
            MENU UTAMA ::..</font></p>
            <p style="margin-top: 0; margin-bottom: 0" align="center">&nbsp;

            <? include "menu.php"; ?>
            </p>
            <p style="margin-top: 0; margin-bottom: 0" align="center">&nbsp;</p>
            <p style="margin-top: 0; margin-bottom: 0" align="center">&nbsp;</td>
            <td width="573" valign="top">
            <div align="center">
             <center>
             <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="549" id="AutoNumber3">
              <tr>
               <td width="549">
            <p align="right">
      <font face="Verdana" color="#000080" style="font-size: 8pt">Diperkenalkan : <b><? echo "$session_nama_sponsor" ?></b> - <b><? echo "$session_kota_sponsor" ?></b></font>
               </td>
              </tr>
              <tr>
               <td width="549">&nbsp;</td>
              </tr>
              <tr>
               <td width="549">
                  <p align="center" style="margin-top: 0; margin-bottom: 0"><b>
                  <font face="Arial" size="4" color="#990000">KONTAK KAMI</font></b></p>
                  <p style="margin-top: 0; margin-bottom: 0" align="justify">&nbsp;</p>
                  <p style="margin-top: 0; margin-bottom: 0" align="center"><b>
          <font face="Tahoma" size="2" color="#000080">Jika anda punya saran /
      pertanyaan / kritikan atau lainnya mengenai bisnis kami&nbsp; ini silahkan
      kontak kami dengan mengisi form dibawah ini</font></b></p>
                  <p style="margin-top: 0; margin-bottom: 0" align="justify">&nbsp;</p>
            <P align="justify" style="margin-top: 0; margin-bottom: 0"><!---------------------BATAS BERITA ATAS---------------------><!-- Judul kecil -->

<form action="kontak2.php" method="post">
            <div align="center">
              <table borderColor="#666666" height="294" cellSpacing="0" cellPadding="6" width="450" border="1">
                <tr>
                  <td width="100%" bgColor="#ffe377" height="83">&nbsp;
                  <div align="center">
                    <table height="1" cellSpacing="0" cellPadding="0" width="426" border="0">
                      <tr>
                        <td width="147" height="9">
                        <font face="Verdana" size="1"><b>Nama Anda:</b></font></td>
                        <td width="302" height="9"><font face="Verdana">
                        <input size="18" name="name"> </font></td>
                      </tr>
                      <tr>
                        <td width="147" height="25">
                        <font face="Verdana" size="1"><b>Email :</b></font></td>
                        <td width="302" height="25"><font face="Verdana">
                        <input size="18" name="email"> </font></td>
                      </tr>
                      <tr>
                        <td width="147" height="1">
                        <font face="Verdana" size="1"><b>Alamat :</b></font></td>
                        <td width="302" height="1"><font face="Verdana">
                        <input size="41" name="alamat">&nbsp;</font></td>
                      </tr>
                      <tr>
                        <td width="147" height="25">
                        <b><font face="Verdana" size="1">No. Telepon / HP :</font></b></td>
                        <td width="302" height="25"><font face="Verdana">
                        <input size="18" name="telepon"> </font></td>
                      </tr>
                      <tr>
                        <td width="147" height="25">
                        <b><font face="Verdana" size="1">Kontak / saran /
                        pertanyaan / kritikan anda :</font></b></td>
                        <td width="302" height="25"><font face="Verdana">
                        <textarea rows="5" name="kontak" cols="35"></textarea>&nbsp;</font></td>
                      </tr>
                      <tr>
                        <td vAlign="center" width="425" colSpan="2" height="1">
                        </td>
                      </tr>
                      <tr>
                        <td width="425" colSpan="2" height="26">
                        <blockquote>
                          <p align="center"><font face="Verdana">&nbsp;&nbsp;</font> </p>
                        </blockquote>



                        <p align="center"><font face="Verdana">
                        <input type="submit" value="KIRIM KONTAK Sekarang Juga" name="Submit">
                        </font></td>
                      </tr>
                      <tr>
                        <td width="425" colSpan="2" height="1">
                        <font face="Verdana" color="#ffffff">.</font> </td>
                      </tr>
                    </table>
                  </div>
                  </td>
                </tr>
              </table>
            </div>
            </form>


                  <p style="margin-top: 0; margin-bottom: 0" align="justify">&nbsp;</p>
                  <p style="margin-top: 0; margin-bottom: 0" align="center">&nbsp;</td>
              </tr>
             </table>
             </center>
            </div>
            <p style="margin-top: 0; margin-bottom: 0">&nbsp;<p style="margin-top: 0; margin-bottom: 0">&nbsp;</td>
          </tr>
        </table>
        </center>
      </div>
      </td>
    </tr>
    <tr>
      <td background="bg3.jpg">&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#6D93A0">
      <p align="center" style="margin-top: 0; margin-bottom: 0">
      <font face="Verdana" style="font-size: 8pt" color="#FFFFFF">Copyright (c)
      2005 Nama Bisnis Anda</font></p>
      <p align="center" style="margin-top: 0; margin-bottom: 0">
      <font face="Verdana" style="font-size: 8pt" color="#FFFFFF">Powered by
      <a target="_blank" href="http://digidzine.com/" style="text-decoration: none; font-weight: 700">
      <font color="#FFFFFF">digidzine.com</font></a></font></p>
      </td>
    </tr>
    <tr>
      <td bgcolor="#3E6F7C">&nbsp;</td>
    </tr>
  </table>
  </center>
</div>

</body>

</html>
