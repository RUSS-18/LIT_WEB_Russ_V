<?php include_once('includes/header.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <base href="images/">
    <style>
        body {
            margin-top: 70px;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
        }

        /* Slide show */
        .slideshow-container {
            width: 100%;
            height: 700px;
            margin: 0 auto 0 auto;
            overflow: hidden;
            background: #555;
        }

        .slide {
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: none;
            align-items: center;
            justify-content: center;
        }

        .slide.active {
            display: flex;
            z-index: 2;
            animation: fadeIn 2s;
        }

        @keyframes fadeIn {
            from {
                opacity: .5
            }

            to {
                opacity: 1
            }
        }

        .enrol-slide {
            background-image: url('welding.jpg');
            background-size: cover;
            background-position: center;
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .enrol-slide h1 {
            font-size: 52px;
            font-family: Brush Script MT, Brush Script Std, cursive;
            color: aliceblue;
            text-shadow: 0px 0px 8px rgba(1, 1, 1, .5);
        }

        .enrol-slide h2 {
            text-align: center;
            font-size: 50px;
            font-weight: bold;
            font-family: Verdana, sans-serif;
            color: aliceblue;
            text-shadow: 0px 0px 8px rgba(1, 1, 1, .5);
        }

        .Enroll-con {
            padding: 40px;
        }

        .enrollButton {
            height: 55px;
            width: 180px;

            border: none;
            border-radius: 2px;
            box-shadow: 0px 0px 5px rgba(1, 1, 1, .7);
            background-color: #f4ca16;

            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            font-size: 17px;
            font-weight: bold;
            letter-spacing: 1px;
            text-shadow: 0px 0px 5px rgba(1, 1, 1, .3);
            color: #080808;

            transition: background 0.2s;

        }

        .enrollButton:hover {
            outline: 0;
            border: none;
            background: #0548ffff;
            text-shadow: 0px 0px 5px rgba(1, 1, 1, .8);
            color: #ecebebff;
        }

        .enrollButton:focus {
            outline: 0;
            border: 3px solid #f4ca16;
            background: #f4cb1631;
            text-shadow: 0px 0px 5px rgba(1, 1, 1, .8);
            color: #ecebebff;
        }



        .slide-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 2px;
        }

        /* Slideshow Controls - Side Arrows */
        .slideshow-arrow {
            position: absolute;
            top: 50%;
            z-index: 10;
            transform: translateY(-50%);
            background: rgba(30, 30, 51, 0.7);
            text-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
            color: #fff;
            border: none;
            border-radius: 50%;
            height: 50px;
            width: 50px;
            font-size: 2.3rem;
            cursor: pointer;
            transition: background 0.2s;
        }

        .slideshow-arrow:hover,
        .slideshow-arrow:focus {
            background: #f4ca16;
            color: #222;
            outline: none;
            box-shadow: 0 0 10px rgba(1, 1, 1, .4);
        }

        #prevBtn {
            left: 16px;
        }

        #nextBtn {
            right: 16px;
        }

        .slideshow-dots {
            position: relative;
            bottom: 24px;
            width: 100%;
            display: flex;
            justify-content: center;
            gap: 8px;
            z-index: 40;
        }

        .slideshow-dot {
            height: 12px;
            width: 12px;
            background: #000000dd;
            border-radius: 50%;
            display: inline-block;
            cursor: pointer;
            opacity: 0.5;
        }

        .slideshow-dot.active {
            background: #f4ca16;
            opacity: 1;
        }

        .card2 {
            background: linear-gradient(to right, #073fdaff 40%, #163791 100%);
            font-family: Arial, Helvetica, sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: auto;
            padding: 20px 0px 20px 0px;
        }

        .card2 h1 {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-weight: bold;
            font-size: 40px;
            letter-spacing: 1px;
            color: #f4f4f4;
            text-shadow: 0 0 5px rgba(8, 8, 8, 0.5);
            padding: 20px 0 20px 110px;
        }

        .card2 h3 {
            font-size: 28px;
            letter-spacing: 1px;
            padding: 0 0 20px 110px;
            line-height: 40px;
            color: #c4c4c4ff;
            text-shadow: 0 0 5px rgba(126, 126, 126, 0.21);

        }

        .notice {
            width: 100%;
            height: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            background: #d9d9d9ff;
        }

        .notice h2 {
            font-family: Arial, Helvetica, sans-serif;
            color: rgba(35, 35, 35, 1);
            font-size: 28px;
        }

        .notice h4 {
            font-family: Arial, Helvetica, sans-serif;
            color: rgba(32, 32, 32, 0.8);
            font-size: 20px;
        }
    </style>
</head>

<body>
    <div class="slideshow-container">
        <button class="slideshow-arrow" id="prevBtn" aria-label="Previous">&#8249;</button>
        <button class="slideshow-arrow" id="nextBtn" aria-label="Next">&#8250;</button>

        <div class="slide active">
            <div class="enrol-slide">
                <h1>Lasam Insitute of Technology</h1>
                <h2>Bringing technical education and skills training <br> closer to every Filipinos.</h2>
                <div class="Enroll-con">
                    <button class="enrollButton">ENROLL NOW</button>
                </div>
            </div>
        </div>
        <div class="slide">
            <img class="slide-img" src="img1.jpg" alt="Image 1">
        </div>
        <div class="slide">
            <img class="slide-img" src="img2.jpg" alt="Image 2">
        </div>
        <div class="slide">
            <img class="slide-img" src="img3.jpg" alt="Image 3">
        </div>
        <div class="slideshow-dots">
            <span class="slideshow-dot active" data-index="0"></span>
            <span class="slideshow-dot" data-index="1"></span>
            <span class="slideshow-dot" data-index="2"></span>
            <span class="slideshow-dot" data-index="3"></span>
        </div>
    </div>

    <div class="card2">
        <h1>MISSION</h1>
        <h3>LIT sets the way to a standard polytechnic institute, producing graduates who are globally and
            technically
            skilled, competent and self-reliant with desirable work values.</h3>
        <h1>VISION</h1>
        <h3>To become a Polytechnic Institute by 2028.</h3>
    </div>

    <div class="notice">
        <h2>DATA PRIVACY NOTICE</h2>
        <h4>(Compliance to DPA of 2012, RA 10173)</h4>
    </div>

    <script>
        // Slideshow logic
        document.addEventListener('DOMContentLoaded', function() {
            const slides = document.querySelectorAll('.slide');
            const dots = document.querySelectorAll('.slideshow-dot');
            let currentSlide = 0;
            let slideInterval = setInterval(nextSlide, 2000);

            function showSlide(index) {
                slides.forEach((slide, i) => {
                    slide.classList.toggle('active', i === index);
                    dots[i].classList.toggle('active', i === index);
                });
                currentSlide = index;
            }

            function nextSlide() {
                let next = (currentSlide + 1) % slides.length;
                showSlide(next);
            }

            function prevSlide() {
                let prev = (currentSlide - 1 + slides.length) % slides.length;
                showSlide(prev);
            }

            document.getElementById('nextBtn').addEventListener('click', () => {
                nextSlide();
                resetInterval();
            });
            document.getElementById('prevBtn').addEventListener('click', () => {
                prevSlide();
                resetInterval();
            });
            dots.forEach(dot => {
                dot.addEventListener('click', (e) => {
                    showSlide(Number(e.target.getAttribute('data-index')));
                    resetInterval();
                });
            });

            function resetInterval() {
                clearInterval(slideInterval);
                slideInterval = setInterval(nextSlide, 2000);
            }
        });
    </script>
</body>

</html>
<?php include_once('includes/footer.php'); ?>