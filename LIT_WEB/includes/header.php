    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/LIT_WEB/CSS/StyleHeader.css">
    </head>

    <body>
    <div class="header">
        <button class="burger" id="burgerBtn" aria-label="Open navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <div class="header-tabs">
            <img src="/LIT_WEB/images/Tesda Logo.png" alt="" width="60">
            <a href="/LIT_WEB/Landing_Page.php">Home</a>
            <div class="dropdown">
                <a href="#" class="dropdown-toggle" id="about">About
                    <span class="arrow">&#9662;</span>
                </a>
                <div class="dropdown-content">
                    <a href="/LIT_WEB/About/history.php">LIT History</a>
                    <a href="/LIT_WEB/About/message.php">Message from School</a>
                    <a href="/LIT_WEB/About/personel.php">LIT Personel</a>
                    <a href="/LIT_WEB/About/assessment.php">Assessment Center</a>
                    <a href="/LIT_WEB/About/visionMission.php">Vision and Mission</a>
                </div>
            </div>
            <br>
            <div class="dropdown">
                <a href="#" class="dropdown-toggle">Program and Services
                    <span class="arrow">&#9662;</span>
                </a>
                <div class="dropdown-content">
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle">
                            Competency Assessment
                            <span class="arrow">&#9662;</span>
                        </a>
                        <div class="dropdown-content">
                            <a href="/LIT_WEB/ProgramAndServices/Competency.php">Competency Assessment Vision/Mision</a>
                            <a href="/LIT_WEB/ProgramAndServices/competency/listOfAssessment.php">List of Assessment Center</a>
                            <a href="/LIT_WEB/ProgramAndServices/competency/registryOfCompentency.php">Registry of Competency</a>
                        </div>
                    </div>
                    <a href="/LIT_WEB/ProgramAndServices/Programs.php">Programs</a>
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle">
                            Qualification VGMO
                            <span class="arrow">&#9662;</span>
                        </a>
                        <div class="dropdown-content">
                            <a href="/LIT_WEB/ProgramAndServices/qualifications/breadAndPastry.php">Bread and Pastry NC II</a>
                            <a href="/LIT_WEB/ProgramAndServices/qualifications/caregiving.php">Caregiving NC II</a>
                            <a href="/LIT_WEB/ProgramAndServices/qualifications/cookery.php">Cookery NC II</a>
                            <a href="/LIT_WEB/ProgramAndServices/qualifications/foodProcessing.php">Food Processing NC II</a>
                            <a href="/LIT_WEB/ProgramAndServices/qualifications/foodAndBeverage.php">Food and Beverage Services NC II</a>
                            <a href="/LIT_WEB/ProgramAndServices/qualifications/smaw.php">Smaw NC II</a>
                        </div>
                    </div>
                </div>
            </div>
            <a href="/LIT_WEB/howToEnroll.php">How to Enroll</a>
            <div class="dropdown">
                <a href="#" class="dropdown-toggle">News
                    <span class="arrow">&#9662;</span>
                </a>
                <div class="dropdown-content">
                    <a href="/LIT_WEB/News/news.php">News</a>
                    <a href="/LIT_WEB/News/calendar.php">Calendar Event</a>
                    <a href="/LIT_WEB/News/downloads.php">Downloads</a>
                    <a href="/LIT_WEB/News/gallery.php">Gallery</a>
                </div>
            </div>
            <a href="">Contact</a>
            <div class="dropdown">
                <a href="#" class="dropdown-toggle">Transparency
                    <span class="arrow">&#9662;</span>
                </a>
                <div class="dropdown-content">
                    <a href="/LIT_WEB/Transparency/transparencySeal.php">Transparency Seal</a>
                    <a href="/LIT_WEB/Transparency/citizensCharter.php">Citezen's Charter</a>
                    <a href="/LIT_WEB/Transparency/PHILGEP.php">PHILGEP's Posting</a>
                </div>
            </div>
        </div>
        <div class="header-search">
            <input type="text" placeholder="Search...">
            <a href="/LIT_WEB/login.php" id="signIn">Sign in</a>
            <a href="/LIT_WEB/register.php" id="signUp">Sign up</a>
        </div>
    </div>
    <script>
        const burgerBtn = document.getElementById('burgerBtn');
        const headerTabs = document.querySelector('.header-tabs');

        burgerBtn.addEventListener('click', function () {
            burgerBtn.classList.toggle('active');
            headerTabs.classList.toggle('open');
        });

        function closeAllDropdowns(except = null) {
            document.querySelectorAll('.dropdown-content').forEach(function (el) {
                if (el !== except) el.classList.remove('show');
            });
            document.querySelectorAll('.arrow').forEach(function (el) {
                if (!except || !except.previousElementSibling || el !== except.previousElementSibling.querySelector('.arrow')) {
                    el.classList.remove('rotate');
                }
            });
        }

        document.querySelectorAll('.dropdown-toggle').forEach(function (toggle) {
            toggle.addEventListener('click', function (e) {
                const parentDropdown = toggle.parentElement;
                const content = parentDropdown.querySelector('.dropdown-content');
                const arrow = toggle.querySelector('.arrow');

                if (content) {
                    e.preventDefault();
                }

                if (content) {
                    let parentContent = parentDropdown.parentElement;
                    if (parentContent.classList && parentContent.classList.contains('dropdown-content')) {
                        parentContent.querySelectorAll('.dropdown-content').forEach(function (el) {
                            if (el !== content) el.classList.remove('show');
                        });
                        parentContent.querySelectorAll('.arrow').forEach(function (el) {
                            if (el !== arrow) el.classList.remove('rotate');
                        });
                    } else {
                        closeAllDropdowns(content);
                    }

                    content.classList.toggle('show');
                    if (arrow) arrow.classList.toggle('rotate');
                }
            });
        });

        document.querySelectorAll('.header-tabs > .dropdown').forEach(function (dropdown) {
            const toggle = dropdown.querySelector('.dropdown-toggle');
            const content = dropdown.querySelector('.dropdown-content');
            const arrow = toggle.querySelector('.arrow');
            dropdown.addEventListener('mouseenter', function () {
                if (window.innerWidth > 768 && content) {
                    closeAllDropdowns(content);
                    content.classList.add('show');
                    if (arrow) arrow.classList.add('rotate');
                }
            });
            dropdown.addEventListener('mouseleave', function () {
                if (window.innerWidth > 768 && content) {
                    content.classList.remove('show');
                    if (arrow) arrow.classList.remove('rotate');
                }
            });
        });

        document.addEventListener('click', function (e) {
            if (!e.target.closest('.dropdown')) {
                closeAllDropdowns();
            }
        });

        window.addEventListener('resize', function () {
            closeAllDropdowns();
            burgerBtn.classList.remove('active');
            headerTabs.classList.remove('open');
        });
    </script>