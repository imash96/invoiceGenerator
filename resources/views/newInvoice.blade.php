<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Invoice</title>
    <link rel="stylesheet" href="{{ public_path() . '/css/invoice.css' }}">
	<link rel="stylesheet" href="./css/invoice.css">
	<link rel="stylesheet" href="{{ public_path() . '/css/amazonEmberFontFamily.css' }}">
	<link rel="stylesheet" href="./css/amazonEmberFontFamily.css">
</head>

<body>
    <div class="page">
        <table class="tableStyle" style="font-size: 1em;width:100%">
            <tbody>
                <tr>
                    <td colspan="15" class="borderLeft"><img src="{{ public_path() . '/images/hywings_header.jpg' }}" class="headerImg"
                            onerror=this.src="./images/hywings_header.jpg"></td>
                </tr>
                <tr height="29" class="bottomBorder">
                    <td colspan="4" style="width: 33%"></td>
                    <td colspan="4" style="width: 33%" class="invoiceType">TAX INVOICE</td>
                    <td colspan="4" style="width: 34%" class="invoiceFor borderLeft">(ORIGINAL FOR RECIPIENT)</td>
                </tr>
                <tr height="20" class="bottomBorder">
                    <td colspan="4" class="borderLeft shipTo">Bill To</td>
                    <td colspan="4" class="borderLeft shipTo">Ship To</td>
                    <td colspan="2" class="borderLeft">Invoice No.</td>
                    <td colspan="2" class="borderLeft">HW27-IN2210-159</td>
                </tr>
                <tr height="19" class="bottomBorder">
                    <td colspan="4" rowspan="5" class="borderLeft addressAlign">HYWINGS ENTERPRISES<br> ARBAZ
                        SHAIKH<br>
                        A101,VINDESHWARI BLDG.,<br> NEAR INDIAN BANK,SION WEST<br> MUMBAI - 400022</td>
                    <td colspan="4" rowspan="5" class="borderLeft addressAlign">HYWINGS ENTERPRISES<br> ARBAZ
                        SHAIKH<br>
                        A101,VINDESHWARI BLDG.,<br> NEAR INDIAN BANK,SION WEST<br> MUMBAI - 400022</td>
                    <td colspan="2" class="borderLeft">Date</td>
                    <td colspan="2" class="borderLeft">15-10-2022</td>
                </tr>
                <tr height="19" class="bottomBorder">
                    <td colspan="2" class="borderLeft">PO no.</td>
                    <td colspan="2" class="borderLeft">HW27-PO2210-250</td>
                </tr>
                <tr height="19" class="bottomBorder">
                    <td colspan="2" class="borderLeft">Date</td>
                    <td colspan="2" class="borderLeft">15-10-2022</td>
                </tr>
                <tr height="19" class="bottomBorder">
                    <td colspan="2" class="borderLeft">Challan no.</td>
                    <td colspan="2" class="borderLeft">159</td>
                </tr>
                <tr height="19" class="bottomBorder">
                    <td colspan="2" class="borderLeft">L.R. No.</td>
                    <td colspan="2" class="borderLeft">By Mail</td>
                </tr>
                <tr height="19">
                    <td colspan="4" class="borderLeft">GSTIN: 27FRZPS5384E1ZR</td>
                    <td colspan="4" class="borderLeft">Place of Supply: 27 - Maharashtra</td>
                    <td colspan="2" class="borderLeft">e-Way Bill no.</td>
                    <td colspan="2" class="borderLeft">601467849789</td>
                </tr>
            </tbody>
        </table>
        <table class="tableStyle" style="margin-top: 0.35em;width:100%;font-size: 0.75em;">
            <thead>
                <tr height="38" class="bottomBorder" style="background:#F2F2F2;font-size: 1.1em;">
                    <th class="tableThead borderLeft" style="width: 3%">Sr. no.</th>
                    <th class="tableThead borderLeft" style="width: 34%" colspan="3">Particulars<br>(Description)
                    </th>
                    <th class="tableThead borderLeft" style="width: 8%">HSN<br>Code</th>
                    <th class="tableThead borderLeft" style="width: 3.5%">Qty.</th>
                    <th class="tableThead borderLeft" style="width: 3.5%">Unit</th>
                    <th class="tableThead borderLeft" style="width: 9%">Rate ( ₹ )</th>
                    <th class="tableThead borderLeft" style="width: 9%">Taxable<br>Value ( ₹ )</th>
                    <th class="tableThead borderLeft" style="width: 6%">CGST Rate</th>
                    <th class="tableThead borderLeft" style="width: 9%">CGST ( ₹ )</th>
                    <th class="tableThead borderLeft" style="width: 6%">SGST Rate</th>
                    <th class="tableThead borderLeft" style="width: 9%">SGST ( ₹ )</th>
                </tr>
            </thead>
            <tbody>
                <tr height="38">
                    <td class="tableTbody borderLeft" rowspan="2">01</td>
                    <td class="tableTbody borderLeft desc" rowspan="2" colspan="3">5GU3KB GEAR BOX ZD<br>Frame
                        90mm
                        GU Type Ratio 1:3 Without Flange</td>
                    <td class="tableTbody borderLeft" rowspan="2">42031010</td>
                    <td class="tableTbody borderLeft" rowspan="2">999</td>
                    <td class="tableTbody borderLeft" rowspan="2">PSC</td>
                    <td class="tableTbody borderLeft" rowspan="2">9999999.99</td>
                    <td class="tableTbody borderLeft" rowspan="2">9999999.99</td>
                    <td class="tableTbody borderLeft" rowspan="2">9.00%</td>
                    <td class="tableTbody borderLeft" rowspan="2">1800000.00</td>
                    <td class="tableTbody borderLeft" rowspan="2">9.00%</td>
                    <td class="tableTbody borderLeft" rowspan="2">1800000.00</td>
                </tr>
                <tr></tr>

                <tr height="38">
                    <td class="tableTbody borderLeft" rowspan="2">02</td>
                    <td class="tableTbody borderLeft desc" rowspan="2" colspan="3">MBDLN25BE<br>(Panasonic 400W
                        A6
                        SERIES ETHERCAT DRIVE)</td>
                    <td class="tableTbody borderLeft" rowspan="2">42031010</td>
                    <td class="tableTbody borderLeft" rowspan="2">999</td>
                    <td class="tableTbody borderLeft" rowspan="2">PSC</td>
                    <td class="tableTbody borderLeft" rowspan="2">9999999.99</td>
                    <td class="tableTbody borderLeft" rowspan="2">9999999.99</td>
                    <td class="tableTbody borderLeft" rowspan="2">9.00%</td>
                    <td class="tableTbody borderLeft" rowspan="2">1800000.00</td>
                    <td class="tableTbody borderLeft" rowspan="2">9.00%</td>
                    <td class="tableTbody borderLeft" rowspan="2">1800000.00</td>
                </tr>
                <tr></tr>

                <tr height="38">
                    <td class="tableTbody borderLeft" rowspan="2">03</td>
                    <td class="tableTbody borderLeft desc" rowspan="2" colspan="3">MHMF042L1U2M<br>(Panasonic
                        400W
                        A6 SERIES MOTOR W/O BRAKE with Battery)</td>
                    <td class="tableTbody borderLeft" rowspan="2">42031010</td>
                    <td class="tableTbody borderLeft" rowspan="2">999</td>
                    <td class="tableTbody borderLeft" rowspan="2">PSC</td>
                    <td class="tableTbody borderLeft" rowspan="2">9999999.99</td>
                    <td class="tableTbody borderLeft" rowspan="2">9999999.99</td>
                    <td class="tableTbody borderLeft" rowspan="2">9.00%</td>
                    <td class="tableTbody borderLeft" rowspan="2">1800000.00</td>
                    <td class="tableTbody borderLeft" rowspan="2">9.00%</td>
                    <td class="tableTbody borderLeft" rowspan="2">1800000.00</td>
                </tr>
                <tr></tr>

                <tr height="38">
                    <td class="tableTbody borderLeft" rowspan="2">04</td>
                    <td class="tableTbody borderLeft desc" rowspan="2" colspan="3">Cable set (Power + I/O +
                        Encoder)
                        5Mtr</td>
                    <td class="tableTbody borderLeft" rowspan="2">42031010</td>
                    <td class="tableTbody borderLeft" rowspan="2">999</td>
                    <td class="tableTbody borderLeft" rowspan="2">PSC</td>
                    <td class="tableTbody borderLeft" rowspan="2">9999999.99</td>
                    <td class="tableTbody borderLeft" rowspan="2">9999999.99</td>
                    <td class="tableTbody borderLeft" rowspan="2">9.00%</td>
                    <td class="tableTbody borderLeft" rowspan="2">1800000.00</td>
                    <td class="tableTbody borderLeft" rowspan="2">9.00%</td>
                    <td class="tableTbody borderLeft" rowspan="2">1800000.00</td>
                </tr>
                <tr></tr>

                <tr height="38">
                    <td class="tableTbody borderLeft" rowspan="2"></td>
                    <td class="tableTbody borderLeft desc" rowspan="2" colspan="3"></td>
                    <td class="tableTbody borderLeft" rowspan="2"></td>
                    <td class="tableTbody borderLeft" rowspan="2"></td>
                    <td class="tableTbody borderLeft" rowspan="2"></td>
                    <td class="tableTbody borderLeft" rowspan="2"></td>
                    <td class="tableTbody borderLeft" rowspan="2"></td>
                    <td class="tableTbody borderLeft" rowspan="2"></td>
                    <td class="tableTbody borderLeft" rowspan="2"></td>
                    <td class="tableTbody borderLeft" rowspan="2"></td>
                    <td class="tableTbody borderLeft" rowspan="2"></td>
                </tr>
                <tr></tr>

                <tr height="38">
                    <td class="tableTbody borderLeft" rowspan="2"></td>
                    <td class="tableTbody borderLeft desc" rowspan="2" colspan="3"></td>
                    <td class="tableTbody borderLeft" rowspan="2"></td>
                    <td class="tableTbody borderLeft" rowspan="2"></td>
                    <td class="tableTbody borderLeft" rowspan="2"></td>
                    <td class="tableTbody borderLeft" rowspan="2"></td>
                    <td class="tableTbody borderLeft" rowspan="2"></td>
                    <td class="tableTbody borderLeft" rowspan="2"></td>
                    <td class="tableTbody borderLeft" rowspan="2"></td>
                    <td class="tableTbody borderLeft" rowspan="2"></td>
                    <td class="tableTbody borderLeft" rowspan="2"></td>
                </tr>
                <tr></tr>

                <tr height="38">
                    <td class="tableTbody borderLeft" rowspan="2"></td>
                    <td class="tableTbody borderLeft desc" rowspan="2" colspan="3"></td>
                    <td class="tableTbody borderLeft" rowspan="2"></td>
                    <td class="tableTbody borderLeft" rowspan="2"></td>
                    <td class="tableTbody borderLeft" rowspan="2"></td>
                    <td class="tableTbody borderLeft" rowspan="2"></td>
                    <td class="tableTbody borderLeft" rowspan="2"></td>
                    <td class="tableTbody borderLeft" rowspan="2"></td>
                    <td class="tableTbody borderLeft" rowspan="2"></td>
                    <td class="tableTbody borderLeft" rowspan="2"></td>
                    <td class="tableTbody borderLeft" rowspan="2"></td>
                </tr>
                <tr></tr>

                <tr height="38">
                    <td class="tableTbody borderLeft" rowspan="2"></td>
                    <td class="tableTbody borderLeft desc" rowspan="2" colspan="3"></td>
                    <td class="tableTbody borderLeft" rowspan="2"></td>
                    <td class="tableTbody borderLeft" rowspan="2"></td>
                    <td class="tableTbody borderLeft" rowspan="2"></td>
                    <td class="tableTbody borderLeft" rowspan="2"></td>
                    <td class="tableTbody borderLeft" rowspan="2"></td>
                    <td class="tableTbody borderLeft" rowspan="2"></td>
                    <td class="tableTbody borderLeft" rowspan="2"></td>
                    <td class="tableTbody borderLeft" rowspan="2"></td>
                    <td class="tableTbody borderLeft" rowspan="2"></td>
                </tr>
                <tr></tr>

                <tr height="38">
                    <td class="tableTbody borderLeft" rowspan="2"></td>
                    <td class="tableTbody borderLeft desc" rowspan="2" colspan="3"></td>
                    <td class="tableTbody borderLeft" rowspan="2"></td>
                    <td class="tableTbody borderLeft" rowspan="2"></td>
                    <td class="tableTbody borderLeft" rowspan="2"></td>
                    <td class="tableTbody borderLeft" rowspan="2"></td>
                    <td class="tableTbody borderLeft" rowspan="2"></td>
                    <td class="tableTbody borderLeft" rowspan="2"></td>
                    <td class="tableTbody borderLeft" rowspan="2"></td>
                    <td class="tableTbody borderLeft" rowspan="2"></td>
                    <td class="tableTbody borderLeft" rowspan="2"></td>
                </tr>
                <tr></tr>

                <tr height="38" class="bottomBorder">
                    <td class="tableTbody borderLeft" rowspan="2"></td>
                    <td class="tableTbody borderLeft desc" rowspan="2" colspan="3"></td>
                    <td class="tableTbody borderLeft" rowspan="2"></td>
                    <td class="tableTbody borderLeft" rowspan="2"></td>
                    <td class="tableTbody borderLeft" rowspan="2"></td>
                    <td class="tableTbody borderLeft" rowspan="2"></td>
                    <td class="tableTbody borderLeft" rowspan="2"></td>
                    <td class="tableTbody borderLeft" rowspan="2"></td>
                    <td class="tableTbody borderLeft" rowspan="2"></td>
                    <td class="tableTbody borderLeft" rowspan="2"></td>
                    <td class="tableTbody borderLeft" rowspan="2"></td>
                </tr>
                <tr class="bottomBorder"></tr>

                <tr height="19" class="bottomBorder">
                    <td class="tableTbody borderLeft" colspan="4" rowspan="7" height="97">Scan to
                        Pay<br><img style="width: 45%" src="{{ public_path() . '/images/demoQrCode.png' }}"  onerror=this.src="./images/demoQrCode.png"></td>
                    <td class="tableTbody borderLeft charges" colspan="4">Freight</td>
                    <td class="tableTbody borderLeft amount">2000.00</td>
                    <td class="tableTbody borderLeft">9%</td>
                    <td class="tableTbody borderLeft amount">180.00</td>
                    <td class="tableTbody borderLeft">9%</td>
                    <td class="tableTbody borderLeft amount">180.00</td>
                </tr>
                <tr height="19" class="bottomBorder">
                    <td class="tableTbody borderLeft charges" colspan="4">Insurance</td>
                    <td class="tableTbody borderLeft amount">0.00</td>
                    <td class="tableTbody borderLeft">-</td>
                    <td class="tableTbody borderLeft amount">0.00</td>
                    <td class="tableTbody borderLeft">-</td>
                    <td class="tableTbody borderLeft amount">0.00</td>
                </tr>
                <tr height="19" class="bottomBorder">
                    <td class="tableTbody borderLeft charges" colspan="4">Packing & Forwding</td>
                    <td class="tableTbody borderLeft amount">0.00</td>
                    <td class="tableTbody borderLeft">-</td>
                    <td class="tableTbody borderLeft amount">0.00</td>
                    <td class="tableTbody borderLeft">-</td>
                    <td class="tableTbody borderLeft amount">0.00</td>
                </tr>
                <tr height="19" class="bottomBorder">
                    <td class="tableTbody borderLeft charges" colspan="4">Subtotal</td>
                    <td class="tableTbody borderLeft amount">99999.99</td>
                    <td class="tableTbody borderLeft amount" colspan="2">99.99</td>
                    <td class="tableTbody borderLeft amount" colspan="2">99.99</td>
                </tr>
                <tr height="19" class="bottomBorder">
                    <td class="tableTbody borderLeft charges" colspan="4">Round Off</td>
                    <td class="tableTbody borderLeft amount" colspan="5">0.00</td>
                </tr>
                <tr height="20" class="bottomBorder">
                    <td class="tableTbody borderLeft charges" colspan="4">Total Invoice Value</td>
                    <td class="tableTbody borderLeft amount" colspan="5">10000000.00</td>
                </tr>
                <tr height="20" class="bottomBorder">
                    <td class="tableTbody borderLeft charges" colspan="3">Total Invoice Value<br>(in words)</td>
                    <td class="tableTbody borderLeft" colspan="6">Ninety Nine Lakh Ninety Nine Thousand Ninety Nine
                        Hundred Ninety Nine Only</td>
                </tr>
            </tbody>
        </table>
        <table class="tableStyle" style="margin-top: 0.35em;font-size: 1em;width:100%">
            <tbody>
                <tr height="19" class="bottomBorder">
                    <td class="borderLeft bold" colspan="2" style="width: 17%">Bank details:</td>
                    <td class="borderLeft bold" style="width: 4.6%">Name:</td>
                    <td class="borderLeft" colspan="2" style="width: 22.6%">Hywings Enterprises</td>
                    <td class="borderLeft" style="width: 1.6%">&nbsp;</td>
                    <td class="borderLeft bold" style="width: 5.6%">Bank name:</td>
                    <td class="borderLeft" colspan="2" style="width: 24%">HDFC BANK LIMITED</td>
                    <td class="borderLeft" style="width: 1.6%">&nbsp;</td>
                    <td class="borderLeft bold" style="width: 5%">A/c Type:</td>
                    <td class="borderLeft" colspan="2" style="width: 18%">Current</td>
                </tr>
                <tr height="19" class="bottomBorder">
                    <td class="borderLeft" colspan="2">&nbsp;</td>
                    <td class="borderLeft bold">A/c no.</td>
                    <td class="borderLeft" colspan="2">00062320003693</td>
                    <td class="borderLeft">&nbsp;</td>
                    <td class="borderLeft bold">Bank IFSC:</td>
                    <td class="borderLeft" colspan="2">HDFC0000006</td>
                    <td class="borderLeft">&nbsp;</td>
                    <td class="borderLeft bold">Branch:</td>
                    <td class="borderLeft" colspan="2">Sion</td>
                </tr>
                <tr height="19">
                    <td colspan="7" class="borderLeft bottomBorder bold">Term and Condition<span
                            style="float: right;">E. &amp; O.E.</span></td>
                    <td class="borderLeft bottomText bottomBorder" colspan="6" rowspan="4" height="79">For
                        HYWINGS ENTERPRISES</td>
                </tr>
                <tr height="19" class="bottomBorder">
                    <td colspan="7" class="borderLeft">1. Goods sent to order will not be taken back</td>
                </tr>
                <tr height="19" class="bottomBorder">
                    <td colspan="7" class="borderLeft">2. Interest @ 18% p.a. will be charged if not paid on
                        demand.</td>
                </tr>
                <tr height="19" class="bottomBorder">
                    <td colspan="7" class="borderLeft">3. Subject to Mumbai Jurisdiction</td>
                </tr>
                <tr height="19">
                    <td colspan="7" class="borderLeft">4. Our responsibility ceases when goods leave our godown
                    </td>
                    <td colspan="6" class="borderLeft authSign">( Authorized Signatory )</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>
