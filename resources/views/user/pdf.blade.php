<!DOCTYPE html>
<html>
<head>
    <title>Trans-Global </title>

    <style>
        table, table th, table td{
            border-style: dotted;
            border-color: #a7a7a7
        }
        div.label{
            font-size: 11px;
            text-transform: uppercase;
            color: #000;
        }
        th .label{
            font-size: 11px
        }
        div.label, th div.label{
            font-family: 'sans-serif';
        }

        .text-center{
            text-align: center
        }


        /* margin */
        .mt-10{
            margin-top: 10px;
        }
        .mt-20{
            margin-top: 20px;
        }


        /* header */
        .header h1{
            color: #165db1;
            font-family: 'sans-serif';
        }


        /* table */
        .weight_col, .unit_col{
            width: 100px;
        }
    </style>
</head>
<body>

    <div class="header">
        <h1>Trans-Global Shipping Lines PTE LTD</h1>
    </div>
    <table width="100%" border="1" cellpadding="5" cellspacing="0" style="table-layout:fixed">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Contact</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td  rowspan="2" colspan="2">
                    <div class="label">Shipper/Exporter (Name & Address)</div>   
                </td>
                <td>
                    <div class="label">Booking No</div>
                </td>
                <td>
                    <div class="label">Bill of Lading No</div>
                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <div class="label">Export References</div>
                </td>
            </tr>

            <tr>
                <td   rowspan="2" colspan="2">
                    <div class="label">Consignee (Name & Address)</div>
                </td>
                <td colspan="2">
                    <div class="label">Forwarding Agent F.M.C No</div>
                </td>
            </tr> 
            <tr>
                <td colspan="2">
                    <div class="label">Point and Country of Origin (For Merchan's Reference Only)</div>
                </td>
            </tr>

            <tr>
                <td  colspan="2">
                    <div class="label">Notify (Name & Address)</div>
                </td>
                <td  rowspan="3" colspan="2">
                    <div class="label">Remarks/Export PR other Instructions</div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="label">Initial Carriage By(Model)</div>
                </td>
                <td>
                    <div class="label">Place of Receipt Of Goods (If Contracted For)</div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="label">Loading Vessel </div>
                </td>
                <td>
                    <div class="label">Port of Loading</div>
                </td>
            </tr>

            <tr>
                <td>
                    <div class="label">Port of Destination</div>
                </td>
                <td>
                    <div class="label">Final Destination (if contracted for)</div>
                </td>
                <td colspan="2">
                    <div class="label">Further Routing (At Merchant's Expense Risk Responsibility)</div>
                </td>
            </tr>
        </tbody>
    </table>

    <table width="100%" border="1" cellpadding="5" cellspacing="0" class="mt-20">
        <!-- particualars shipped -->
        <thead>
            <tr>
                <th colspan="5" class="text-center">
                    <div class="label">Particulers As Furnished By Shipper</div>
                </th>
            </tr>
            <tr>
                <th>
                    <div class="label">MKS & NOS / CONT.Nos</div>
                </th>
                <th colspan="2">
                    <div class="label">Description of goods</div>
                </th>
                <th class="weight_col"> 
                    <div class="label">Weight</div>
                </th>
                <th class="unit_col">
                    <div class="label">Measurement</div>
                </th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>
                    1
                </td>
                <td colspan="2">Decription 1 googd</td>
                <td>2 KGS</td>
                <td>Kg</td>
            </tr>
        </tbody>
    </table>
</body>
</html>