<?php

/**
 * Don't give direct access to the template
 */ 
if(!class_exists("RGForms")){
   return;
}
 
 global $gfpdf;

 $config_data = $gfpdf->get_default_config_data($form_id);

/**
 * Load the form data to pass to our PDF generating function 
 */
$form = RGFormsModel::get_form_meta($form_id);

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Small Business Demo Policy Declaration</title>
</head>

<body>
<table width="612" border="0">
  <tbody>
    <tr>
      <th height="33" colspan="2" align="left" bgcolor="#FFFFFF" scope="col"><a href="http://dev.futurebroker.ca/wp-content/uploads/2015/11/future-broker.png" rel="attachment wp-att-738"><img class="alignnone size-medium wp-image-738" src="http://dev.futurebroker.ca/wp-content/uploads/2015/11/future-broker-300x42.png" alt="future-broker" /></a></th>
      <th bgcolor="#FFFFFF" scope="col"><a href="http://dev.futurebroker.ca/wp-content/uploads/2015/11/future-broker.png" style="text-align: right" rel="attachment wp-att-738"><img src="http://www.goremutual.ca/en/images/logo_goremutual_3.jpg" alt="future-broker" width="264" height="61" class="alignnone size-medium wp-image-738" /></a></th>
    </tr>
    <tr>
      <th height="33" colspan="2" align="left" bgcolor="#E0E0E0" style="text-align: center; font-size: large;" scope="col"><span style="text-align: center"><strong></strong></span><strong>Small Business Policy Declaration</strong></th>
      <td bgcolor="#E0E0E0">Policy Number: {Policy Number:69}</td>
    </tr>
    <tr>
      <td width="172" bgcolor="#E0E0E0">&nbsp;</td>
      <td width="135" bgcolor="#E0E0E0">&nbsp;</td>
      <td bgcolor="#E0E0E0">New Business</td>
    </tr>
    <tr>
      <td bgcolor="#E0E0E0">&nbsp;</td>
      <td bgcolor="#E0E0E0">&nbsp;</td>
      <td bgcolor="#E0E0E0" style="font-size: 10px">Policy Period From:{Coverage Start Date:70}   To: {Coverage End Date:72}</td>
    </tr>
    <tr>
      <td height="20">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="30" bgcolor="#1265CE" style="color: #FFFFFF">Name Insured(s)</td>
      <td bgcolor="#1265CE" style="color: #FFFFFF">&nbsp;</td>
      <td bgcolor="#1265CE" style="color: #FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <td height="30" colspan="2" bgcolor="#E0E0E0">{Name (First):45.3} {Name (Last):45.6}</td>
      <td bgcolor="#E0E0E0" style="font-size: 14px">&nbsp;</td>
    </tr>
    <tr>
      <td height="30" bgcolor="#1265CE" style="color: #FFFFFF">Policy Mailing Address</td>
      <td bgcolor="#1265CE" style="color: #000000">&nbsp;</td>
      <td bgcolor="#1265CE" style="color: #000000">&nbsp;</td>
    </tr>
    <tr>
      <td height="80" colspan="2" bgcolor="#E0E0E0" style="font-size: 12px">{Billing Address (Street Address):43.1}<br>
        {Billing Address (Address Line 2):43.2}<br>
      {Billing Address (City):43.3}, {Billing Address (State / Province):43.4},{Billing Address (ZIP / Postal Code):43.5}</td>
      <td bgcolor="#E0E0E0" style="font-size: 12px">&nbsp;</td>
    </tr>
    <tr>
      <td height="30" bgcolor="#C0C0C0">Total Policy Premium</td>
      <td bgcolor="#C0C0C0">{Total Payment:48}</td>
      <td bgcolor="#C0C0C0">&nbsp;</td>
    </tr>
    <tr>
      <td height="20">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="20">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="30" bgcolor="#1265CE" style="color: #FFFFFF">Broker Name and Address</td>
      <td bgcolor="#1265CE" style="color: #FFFFFF">&nbsp;</td>
      <td bgcolor="#1265CE" style="text-align: right; color: #FFFFFF;">Broker #0000</td>
    </tr>
    <tr style="font-size: 12px">
      <td height="60" rowspan="3" valign="middle" bgcolor="#E0E0E0"><p>The Best Insurance Brokers Ltd. 250 University Ave. Toronto, ON M1M1M1</p></td>
      <td rowspan="3" bgcolor="#E0E0E0">&nbsp;</td>
      <td bgcolor="#E0E0E0" style="text-align: right"><p>(800) 717-1999</p></td>
    </tr>
    <tr style="font-size: 12px">
      <td bgcolor="#E0E0E0" style="text-align: right">brokername@bestbroker.com</td>
    </tr>
    <tr style="font-size: 12px">
      <td bgcolor="#E0E0E0" style="text-align: right">www.bestbrokers.com</td>
    </tr>
    <tr>
      <td height="20">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="60" colspan="3" style="font-size: 14px"><p>By acceptance of this policy, the insured acknowledges the cancellation, from the effective date of the Policy, of any previous Policy (or the renewal thereof) which is stated in the Declarations as replaced. </p>
      <p>In Witness whereof, the GORE MUTUAL INSURANCE COMPANY has caused this Policy to be signed by its authorized representative. This Policy is only valid if it is signed by an authorized preresentative of the insurer. </p></td>
    </tr>
    <tr>
      <td height="20" style="font-size: 14px">&nbsp;</td>
      <td style="font-size: 14px">&nbsp;</td>
      <td style="font-size: 14px">&nbsp;</td>
    </tr>
    <tr>
      <td height="60" colspan="2"><p>&nbsp;</p>
        <p>_______________________________</p>
      <p>President and Chief Executive Officer</p></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="20">&nbsp;</td>
      <td height="20">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="60" colspan="3" style="font-size: 10px">NOTICE CONCERNING PERSONAL INFORMATION:"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum."</td>
    </tr>
    <tr>
      <td height="20">&nbsp;</td>
      <td height="20">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr style="text-align: center; color: #1265CE;">
      <td height="60" colspan="3" bgcolor="#E0E0E0"><p><strong>This policy contains a clause(s) that may limit the amount payable</strong></p></td>
    </tr>
  </tbody>
</table>
</body>
</html>