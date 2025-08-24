<?php include_once('../../includes/header.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bread And Pastry</title>

    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            display: flex;
            background: #f1f1f1ff;
            height: auto;
            padding: 70px 0 0 0;
        }

        .breadAndPastry-container {
            height: auto;
            width: 100%;
            display: flex;
            flex-direction: column;
        }

        .breadAndPastry-header {
            border: none;
            min-height: 300px;
            width: inherit;
            display: flex;
            align-items: center;
            justify-content: center;
            background-image: url('../../images/weldinglogo2.png');
            background-position: center;
            background-repeat: no-repeat;
        }

        .breadAndPastry-header h1 {
            padding: 20px 40px;
            font-size: 55px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-weight: normal;
            letter-spacing: 1px;
            color: #e8e8e8ff;
            text-align: center;
            text-shadow: 0 0 10px #000000f2;
        }

        .breadAndPastry-context {
            height: inherit;
            width: 100%;
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            flex-direction: column;
            justify-items: stretch;
            justify-content: space-between;
        }

        .breadAndPastry-context .card {
            max-height: 100px;
            width: 100%;
            padding: 10px;
            display: flex;
            flex-grow: 1;
            flex-basis: 400px;
            flex-direction: column;
            align-items: center;
            justify-content: space-evenly;
        }

        .breadAndPastry-context h3 {
            text-align: center;
            font-size: 28px;
            color: #163791;
            font-family: Arial, Helvetica, sans-serif;
        }

    </style>
</head>

<body>
    <div class="breadAndPastry-container">
        <div class="breadAndPastry-header">
            <h1>LASAM INSTITUTE OF TECHNOLOGY</h1>
        </div>
        <div class="breadAndPastry-context">
            <h3>Bread and Pastry NC II</h3>
            <div class="card">
                <h3>Mission</h3>
                <p>To produce pastry chefs/professionals through hands-on experience and development <br> of competency-based knowledge, skills and attitude while emphasizing management and creativity.</p>
            </div>
            <div class="card">
                <h3>Vision</h3>
                <p>To produce successful pastry professionals in the province of Cagayan.</p>
            </div>
            <div class="card">
                <h3>GOAL</h3>
                <p>To bring satisfaction and to make special occasion truly exceptional bakery products.</p>
            </div>
            <div class="card">
                <h3>OBJECTIVES</h3>
                <p>To update trainees with the current trends in baking industry <br>
                    To enhance creativity in designing while providing the best quality of products</p>
            </div>
        </div>
    </div>
</body>

</html>
<?php include_once('../../includes/footer.php'); ?>