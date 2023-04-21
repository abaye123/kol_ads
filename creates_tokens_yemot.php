<!DOCTYPE html>
<html dir="rtl">

<head>
    <meta charset="utf-8">
    <title>תן ת'טוקן!</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Rubik:wght@400;700&display=swap');

        body {
            margin: 0;
            padding: 0;
            font-family: Rubik, sans-serif;
            font-size: 56px;
            text-align: center;
            background-color: #f7f5ff;
            color: #370fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        li:hover {
            color: #53ff0f;
            font-size: 64px;
        }

        header {
            background-color: #FFFFFF;
            padding: 9px;
            box-shadow: 0 -2px 4px rgba(0, 0, 0, 0.1);
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1;
            text-align: center;
            font-size: 22px;
            color: #AAAAAA;
        }

        header:hover {
            color: #0561ff;
        }

        .moving-image {
            position: fixed;
            /* Make the image position absolute */
            bottom: 10%;
            /* Position the image at the bottom of the screen */
            right: 10%;
            /* Position the image at the right of the screen */
            animation: moveImage 5s infinite;
            /* Use the moveImage animation for 5 seconds and repeat infinitely */
        }

        /* Set up the animation */
        @keyframes moveImage {
            0% {
                transform: translate(0, 0);
            }

            25% {
                transform: translate(75%, -75%) rotate(25deg);
                animation-timing-function: ease-out;
            }

            50% {
                transform: translate(150%, -150%) rotate(-25deg);
                animation-timing-function: ease-in;
            }

            75% {
                transform: translate(420%, -75%) rotate(0deg);
                animation-timing-function: ease-out;
            }
            
            90% {
                transform: translate(0, 0) rotate(45deg);
                animation-timing-function: ease-in;
            }

            100% {
                transform: translate(0, 0) rotate(0deg);
                animation-timing-function: ease-in;
            }
        }

        /* Apply the animation to the image */
        .moving-image {
            animation: moveImage 20s infinite;
        }

        .floating-bubbles {
            position: fixed;
            left: 20px;
            top: 73%;
            transform: translateY(-50%);
        }

        .floating-bubbles a {
            display: block;
            width: 50px;
            height: 50px;
            background-color: #f7f5ff;
            border-radius: 50%;
            margin-bottom: 20px;
        }

        .floating-bubbles a:hover {
            display: block;
            border-radius: 50%;
            margin-bottom: 20px;
        }

        .floating-bubbles a img {
            width: 100%;
            height: 100%;
            border-radius: 50%;
        }

        .floating-bubbles a:hover img {
            transform: scale(1.2);
        }

        footer {
            background-color: #FFFFFF;
            padding: 3px;
            box-shadow: 0 -2px 4px rgba(0, 0, 0, 0.1);
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 1;
            text-align: center;
            font-size: 14px;
            color: #AAAAAA;
        }

        footer:hover {
            color: #0561ff;
        }
    </style>
</head>

<body>
<header>
        <p>העתק את הטקסט שבמרכז הדף והדבק אותו במקום המתאים</p>
    </header>
    
<li><div id="output"></div></li>

    <script>
        const param1 = new URLSearchParams(window.location.search).get('user');
        const param2 = new URLSearchParams(window.location.search).get('pass');

        const url = `https://www.call2all.co.il/ym/api/Login?username=${param1}&password=${param2}`;

        fetch(url)
            .then(response => response.json())
            .then(data => {
                if (data.responseStatus === 'OK') {
                    document.getElementById('output').innerHTML = data.token;
                } else {
                    document.getElementById('output').innerHTML = '😕 Error: ' + data.responseStatus + " שם המשתמש או הסיסמה שגויים";
                }
            })
            .catch(error => console.error(error));
    </script>
    <lil class="moving-image" style="font-size: 32px">🤪</lil>

    <div class="floating-bubbles">
        <a href="https://github.com/YOSSI263"><img src="/img/GitHub.png"></a>
        <a href="https://www.buymeacoffee.com/abaye"><img
                src="https://www.buymeacoffee.com/assets/img/bmc-meta-new/new/apple-icon-76x76.png"></a>
    </div>
    <footer>
        <p>Copyright &copy; 2023 My Website by abaye</p>
    </footer>
</body>

</html>