<?php include_once('../includes/header.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programs</title>
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

        .program-container {
            height: auto;
            width: 100%;
            display: flex;
            flex-direction: column;
        }

        .program-header {
            border: none;
            height: 670px;
            width: inherit;
            display: flex;
            align-items: center;
            justify-content: center;
            background-image: url('../images/weldinglogo2.png');
            background-position: center;
            background-repeat: no-repeat;
        }

        .program-header h1 {
            padding: 20px 40px;
            font-size: 65px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-weight: normal;
            letter-spacing: 1px;
            color: #e8e8e8ff;
            text-align: center;
            text-shadow: 0 0 10px #000000f2;
        }
    </style>
</head>

<body>
    <div class="program-container">
        <div class="program-header">
            <h1>LASAM INSTITUTE <br>OF TECHNOLOGY HISTORY: PROGRAMS</h1>
        </div>
        <div class="program-context"></div>
    </div>
</body>

</html>
<?php include_once('../includes/footer.php'); ?>