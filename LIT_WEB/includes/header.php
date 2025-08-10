<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="images/">
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .header {
            position: fixed;
            top: 0;
            height: 70px;
            border: none;
            width: 100%;
            display: flex;
            align-items: center;
            background: linear-gradient(to right, #073fdaff 40%, #163791 100%);
            box-sizing: border-box;
        }

        .header a {
            font-family: "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            color: #f3f3f3ff;
            text-decoration: none;
        }

        .header .header-tabs {
            display: flex;
            align-items: center;
            width: 100%;
        }

        .header .header-tabs a {
            border: none;
            font-family: "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            text-decoration: none;
            color: #f3f3f3ff;
            padding: 20px 15px;
            text-shadow: 0 0 5px rgba(36, 36, 36, 1);
            white-space: nowrap;
            flex-shrink: 0;
            transition: background 0.2s;
        }

        .header .header-tabs a:hover {
            border-radius: 5px;
            outline: 0;
            color: #ffffffff;
            text-shadow: 0 0 10px rgba(0, 0, 0, 0.64);
            background: #1b277cff;
        }

        .header .header-tabs a:focus {
            border-radius: 5px;
            outline: 0;
            color: #ffffffff;
            text-shadow: 0 0 10px rgba(0, 0, 0, 0.64);
            background: #1b277cff;
        }

        .header .header-tabs img {
            padding-right: 10px;
            padding-left: 10px;
            filter: drop-shadow(0 0 5px rgba(255, 255, 255, 0.5)) drop-shadow(0 0 10px rgba(230, 230, 230, 0.72));
        }

        .header-search {
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            width: 45%;
        }

        .header-search input {
            height: 35px;
            line-height: 35px;
            width: 250px;
            border: 1px solid white;
            border-radius: 5px;
            background: linear-gradient(to right, #5a5d648a, #45474d8a);
            padding-left: 10px;
            padding-right: 5px;
            color: #ffffffff;
            font-family: "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
        }

        .header-search input:focus {
            outline: 0;
            border: 3px solid dodgerblue;
            background: linear-gradient(to right, #5a5d6464, #45474d55);
            letter-spacing: 1px;
            font-size: 15px;
        }

        .header-search input::placeholder {
            color: rgba(233, 233, 233, 0.79);
            font-size: 15px;
            letter-spacing: .5px;
        }

        #signUp {
            border: 1px solid white;
            line-height: 30px;
            padding: 5px 15px;
            border-radius: 5px;
            white-space: nowrap;
            flex-shrink: 0;
        }

        #signIn {
            padding: 5px 15px;
            line-height: 30px;
            white-space: nowrap;
            flex-shrink: 0;
        }

        #signUp:hover {
            border: 1px solid #c8c8c8ff;
            color: #c8c8c8ff;
        }

        #signIn:hover {
            color: #c8c8c8ff;
        }

        #signIn:focus {
            border-radius: 5px;
            outline: 0;
            border: 1px solid #c8c8c8ff;
            color: #c8c8c8ff;
        }

        #signUp:focus {
            outline: 0;
            border: 1px solid #c8c8c8ff;
            color: #c8c8c8ff;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            top: 40px;
            background-color: #ffffffff;
            padding: 5px 20px;
            min-width: 200px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
            border-radius: 4px;
            border: .5px solid rgba(38, 38, 38, 0.64);
        }

        .header .dropdown-content a {
            padding: 10px 16px;
            text-decoration: none;
            display: block;
            color: #0c0c0cff;
            text-shadow: none;
            font-size: 15px;
        }

        .header .dropdown-content a:hover {
            text-shadow: none;
            color: #043acfff;
            background: #cacacaea;
        }

        .header .dropdown-content a:focus {
            text-shadow: none;
            color: #043acfff;
            background: #cacacaea;
        }

        /* Remove hover for dropdown, JS will handle click */
        /*.dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .arrow {
            transform: rotate(180deg);
            transition: transform 0.3s ease;
        }*/

        /* Show dropdown if it has .show */
        .dropdown-content.show {
            display: block;
        }
        .arrow {
            display: inline-block;
            margin-left: 2px;
            transition: transform 0.3s ease;
        }
        .arrow.rotate {
            transform: rotate(180deg);
        }
    </style>
</head>

<body>
    <div class="header">
        <div class="header-tabs">
            <img src="Tesda Logo.png" alt="" width="45">
            <a href="../Landing_Page.php">Home</a>
            <div class="dropdown">
                <a href="javascript:void(0);" class="dropdown-toggle">About
                    <span class="arrow">&#9662;</span>
                </a>
                <div class="dropdown-content">
                    <a href="">LIT History</a>
                    <hr>
                    <a href="">Message from School</a>
                    <hr>
                    <a href="">LIT Personel</a>
                    <hr>
                    <a href="">Assessment Center</a>
                    <hr>
                    <a href="">Vision and Mission</a>
                </div>
            </div>
            <div class="dropdown">
                <a href="javascript:void(0);" class="dropdown-toggle">Program and Services
                    <span class="arrow">&#9662;</span>
                </a>
                <div class="dropdown-content">
                    <a href="">Competency Assessment</a>
                    <hr>
                    <a href="">Programs</a>
                    <hr>
                    <a href="">Qualification VGMO</a>
                </div>
            </div>
            <a href="">How to Enroll</a>
            <div class="dropdown">
                <a href="javascript:void(0);" class="dropdown-toggle">News
                    <span class="arrow">&#9662;</span>
                </a>
                <div class="dropdown-content">
                    <a href="">Calendar Event</a>
                    <hr>
                    <a href="">Downloads</a>
                    <hr>
                    <a href="">Gallery</a>
                </div>
            </div>
            <a href="">Contact</a>
            <div class="dropdown">
                <a href="javascript:void(0);" class="dropdown-toggle">Transparency
                    <span class="arrow">&#9662;</span>
                </a>
                <div class="dropdown-content">
                    <a href="">Transparency Seal</a>
                    <hr>
                    <a href="">Citezen's Charter</a>
                    <hr>
                    <a href="">PHILGEP's Posting</a>
                </div>
            </div>
        </div>
        <div class="header-search">
            <input type="text" placeholder="Search...">
            <a href="" id="signIn">Sign in</a>
            <a href="" id="signUp">Sign up</a>
        </div>
    </div>
    <script>
        // Allow dropdown toggle on both click and hover, but close on outside click
        document.querySelectorAll('.dropdown').forEach(function (dropdown) {
            var toggle = dropdown.querySelector('.dropdown-toggle');
            var content = dropdown.querySelector('.dropdown-content');
            var arrow = dropdown.querySelector('.arrow');

            // Toggle open/close on click
            toggle.addEventListener('click', function (e) {
                e.preventDefault();
                // Close all other dropdowns
                document.querySelectorAll('.dropdown-content').forEach(function (el) {
                    if (el !== content) el.classList.remove('show');
                });
                document.querySelectorAll('.arrow').forEach(function (el) {
                    if (el !== arrow) el.classList.remove('rotate');
                });

                content.classList.toggle('show');
                arrow.classList.toggle('rotate');
            });

            // Optionally: keep opening on hover as well
            dropdown.addEventListener('mouseenter', function () {
                content.classList.add('show');
                arrow.classList.add('rotate');
            });
            dropdown.addEventListener('mouseleave', function () {
                content.classList.remove('show');
                arrow.classList.remove('rotate');
            });
        });

        // Close dropdown if clicking outside
        document.addEventListener('click', function (e) {
            if (!e.target.closest('.dropdown')) {
                document.querySelectorAll('.dropdown-content').forEach(function (el) {
                    el.classList.remove('show');
                });
                document.querySelectorAll('.arrow').forEach(function (el) {
                    el.classList.remove('rotate');
                });
            }
        });
    </script>
</body>
</html>