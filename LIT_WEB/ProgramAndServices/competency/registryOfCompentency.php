<?php include_once('../../includes/header.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registry of Compentency</title>

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

        .registry-container {
            height: auto;
            width: 100%;
            display: flex;
            flex-direction: column;
        }

        .registry-header {
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

        .registry-header h1 {
            padding: 20px 40px;
            font-size: 45px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-weight: normal;
            letter-spacing: 1px;
            color: #e8e8e8ff;
            text-align: center;
            text-shadow: 0 0 10px #000000f2;
        }

        .registry-context {
            height: inherit;
            width: 100%;
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            flex-direction: row;
            justify-items: center;
            align-items: center;
            justify-content: center;
        }

        .registry-context .card {
            height: auto;
            width: auto;
            padding: 10px;
            display: flex;
            flex-grow: 1;
            flex-basis: 400px;
            flex-direction: column;
            align-items: center;
        }

        .registry-context .card h1 {
            padding: 5px 10px 30px 10px;
            color: #163791;
            font-size: 28px;
            font-family: Arial, Helvetica, sans-serif;
            letter-spacing: 1px;
            text-align: center;
        }

        table {
            border: 1px solid black;
            border-collapse: collapse;
        }

        table th,
        td {
            border: 1px solid black;
            text-align: start;
            padding: 10px;
            width: auto;
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
    <div class="registry-container">
        <div class="registry-header">
            <h1>LASAM INSTITUTE OF TECHNOLOGY: <br> REGISTRY OF COMPETENCY ASSESSORSS</h1>
        </div>
        <div class="registry-context">
            <div class="card">
                <h1>List of Assessors</h1>
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Qualfication</th>
                        <th>Accreditation#</th>
                        <th>Date of Accreditation</th>
                        <th>Date of Expiry</th>
                    </tr>
                    <tr>
                        <td>Dominador D. Dizon</td>
                        <td>Trainers Methodology Level NC I</td>
                        <td>CLN200201005</td>
                        <td>07/06/2020</td>
                        <td>07/06/2021</td>
                    </tr>
                    <tr>
                        <td>Jessie G. Alejo</td>
                        <td>Shielded Metal Arc Welding (SMAW) NC II <br> Driving NC II</td>
                        <td>CA-EAW0202151823035 <br>CA-DRV0202151821038</td>
                        <td>5/17/2018 <br>07/03/2018</td>
                        <td>03/06/2023 <br>8/14/2021</td>
                    </tr>
                    <tr>
                        <td>Delia M. Malana</td>
                        <td>Bread and Pastry Production NC II<br>
                            Front Office Services NC II<br>
                            Food Processing NC II <br>
                            Agricultural Crops Production NC I <br>
                            Food and Beverage Services NC II
                        </td>
                        <td>CA-BPP0202151721004<br>
                            CA-FOS0202151721005 <br>
                            CA-FOP0202151722047 <br>
                            CA-ACP0102151823017 <br>
                            CA-FBS0202152024003
                        </td>
                        <td>1/16/2017 <br>
                            1/19/2017 <br>
                            11/03/2017 <br>
                            04/04/2018 <br>
                            1/22/2020
                        </td>
                        <td>02/03/2021<br>
                            1/19/2021<br>
                            09/06/2022 <br>
                            3/18/2023 <br>
                            08/03/2024
                        </td>
                    </tr>
                    <tr>
                        <td>Dante Ferrer</td>
                        <td>Driving NC II</td>
                        <td> CA-DRV0202151924011</td>
                        <td>03/05/2019</td>
                        <td>03/04/2024</td>
                    </tr>
                    <tr>
                        <td>Carla Grace S. Roc</td>
                        <td>Bread and Pastry Production NC II</td>
                        <td>CA-BPP0202151924024</td>
                        <td>7/23/2019</td>
                        <td>3/21/2024</td>
                    </tr>
                    <tr>
                        <td>Editha B. Mansion</td>
                        <td>Dressmaking NC II</td>
                        <td>CA-DRM0202151721021</td>
                        <td>3/20/2017</td>
                        <td>6/17/2021</td>
                    </tr>
                    <tr>
                        <td>Charito Aizel N. Sagun</td>
                        <td>Food Processing NC II</td>
                        <td>CA-FOP0202152024020</td>
                        <td>03/11/2020</td>
                        <td>11/06/2024</td>
                    </tr>
                    <tr>
                        <td>Ferdinand M. Corpuz</td>
                        <td>Driving NC II</td>
                        <td>CA-DRV0202151920006</td>
                        <td>02/06/2019</td>
                        <td>12/03/2020</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
<?php include_once('../../includes/footer.php'); ?>