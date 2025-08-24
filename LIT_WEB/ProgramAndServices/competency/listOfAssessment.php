<?php include_once('../../includes/header.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Assessment Center</title>

    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            width: 100%;
            background: #f1f1f1ff;
            height: auto;
            margin: 70px 0 0 0;
        }

        .list-container {
            height: auto;
            width: 100%;
            display: flex;
            flex-direction: column;
        }

        .list-header {
            border: none;
            min-height: 670px;
            width: inherit;
            display: flex;
            align-items: center;
            justify-content: center;
            background-image: url('../../images/weldinglogo2.png');
            background-position: center;
            background-repeat: no-repeat;
        }

        .list-header h1 {
            padding: 20px 40px;
            font-size: 45px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-weight: normal;
            letter-spacing: 1px;
            color: #e8e8e8ff;
            text-align: center;
            text-shadow: 0 0 10px #000000f2;
        }

        .list-context {
            height: inherit;
            width: 100%;
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            flex-direction: row;
            justify-items: stretch;
            justify-content: space-between;
        }

        .card {
            height: auto;
            width: auto;
            padding: 10px;
            display: flex;
            flex-grow: 1;
            flex-basis: 400px;
            flex-direction: column;
            align-items: center;
        }

        table {
            border: 1px solid black;
            border-collapse: collapse;
        }

        table th,
        td {
            border: 1px solid black;
            text-align: start;
            padding: 10px 25px;
            font-size: 18px;
            font-family: Arial, Helvetica, sans-serif;
            letter-spacing: .5px;
        }

        table th {
            font-size: 21px;
            color: #163791;
            text-align: center;
        }

        table td {
            line-height: 30px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>
    <div class="list-container">
        <div class="list-header">
            <h1>LASAM INSTITUTE OF TECHNOLOGY: <br> LIST OF ASSESSMENT CENTER</h1>
        </div>
        <div class="list-context">
            <div class="card">
                <table>
                    <tr>
                        <th>Sector</th>
                        <th>Qualification</th>
                        <th>Accreditation#</th>
                    </tr>
                    <tr>
                        <td>Agriculture, Forestry and Fishery</td>
                        <td>Agricultural Crops Production NC I</td>
                        <td>AC-ACP0102151820131</td>
                    </tr>
                    <tr>
                        <td>Agriculture, Forestry and Fishery</td>
                        <td>Agricultural Crops Production NC II</td>
                        <td>AC-ACP0202151921129</td>
                    </tr>
                    <tr>
                        <td>Automotive and Land Transportation</td>
                        <td>Automotive Servicing NC I</td>
                        <td>AC-ATS0102152022126</td>
                    </tr>
                    <tr>
                        <td>Automotive and Land Transportation</td>
                        <td>Automotive Servicing NC II</td>
                        <td>AC-ATS0202152022127</td>
                    </tr>
                    <tr>
                        <td>Tourism (Hotel and Restaurant)</td>
                        <td>Bread and Pastry Production NC II</td>
                        <td>AC-BPP0202151820132</td>
                    </tr>
                    <tr>
                        <td>Human Health / Health Care</td>
                        <td>Caregiving NC II</td>
                        <td>AC-CGV0202151820133</td>
                    </tr>
                    <tr>
                        <td>Tourism (Hotel and Restaurant)</td>
                        <td>Cookery NC II</td>
                        <td>AC-COK0202151921132</td>
                    </tr>
                    <tr>
                        <td>Garments</td>
                        <td>Dressmaking NC II</td>
                        <td>AC-DRM0202151820134</td>
                    </tr>
                    <tr>
                        <td>Automotive and Land Transportation</td>
                        <td>Driving NC II</td>
                        <td>AC-DRV0202152022128</td>
                    </tr>
                    <tr>
                        <td>Social, Community Development and Other Services</td>
                        <td>Domestic Work NC II</td>
                        <td>AC-DOW0202152022133</td>
                    </tr>
                    <tr>
                        <td>Tourism (Hotel and Restaurant)</td>
                        <td>Food and Beverage Services NC II</td>
                        <td>AC-FBS0202151820135</td>
                    </tr>
                    <tr>
                        <td>Processed Food & Beverages</td>
                        <td>Food Processing NC II</td>
                        <td>AC-FOP0202151820136</td>
                    </tr>
                    <tr>
                        <td>Tourism (Hotel and Restaurant)</td>
                        <td>Housekeeping NC II</td>
                        <td>AC-HSK0202152022129</td>
                    </tr>
                    <tr>
                        <td>Agriculture, Forestry and Fishery</td>
                        <td>Organic Agriculture Production NC II</td>
                        <td>AC-OAP0202152022134</td>
                    </tr>
                    <tr>
                        <td>Metals and Engineering</td>
                        <td>Shielded Metal Arc Welding (SMAW) NC II</td>
                        <td>AC-EAW0202151820137</td>
                    </tr>
                    <tr>
                        <td>TVET</td>
                        <td>Trainers Methodology Level NC I</td>
                        <td>AC-TRM0102151820138</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
<?php include_once('../../includes/footer.php'); ?>