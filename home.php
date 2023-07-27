<script>
    document.addEventListener('DOMContentLoaded', function () {
        // var username = sessionStorage.getItem('username')
        // var usernames = sessionStorage.getItem('usernames')

        var username = sessionStorage.getItem('user')
        // var usernames = sessionStorage.getItem('usernames')

        if (username == null) {
            // document.getElementById("profile").innerHTML = usernames
            document.getElementById("profile").innerHTML = username
        } else {
            document.getElementById("profile").innerHTML = username
        }
    });

    document.addEventListener('DOMContentLoaded', function () {
        const data = sessionStorage.getItem('user');
        console.log(data)
        document.cookie = "user=" + data;
        if (data) {
            console.log(data)
        }
    });

    window.onload = function () {
        if (!window.location.hash) {
            window.location = window.location + '#loaded';
            window.location.reload();
        }
    }
</script>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health and Fitness tracker</title>
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        .main1 {
            background-color: #45b1e8;
            width: 100%;
            height: 80px;
        }

        .title {
            /* background-color: red; */
            float: left;
            width: 50%;
            font-size: xx-large;
            text-align: center;
            color: white;
        }

        .profile {
            /* background-color: pink; */
            float: right;
            width: 50%;
            text-align: center;
        }

        .main1 button {
            background-color: white;
            border-style: hidden;
            margin-top: 20px;
            width: 200px;
            height: 30px;
            border-radius: 50px;
            color: #45b1e8;
        }

        .main3 {
            width: 100%;
            height: 400px;
            /* background-color: red; */
        }

        .quote-wrapper {
            height: 300px;
            width: 300px;
            margin: auto;
        }

        .text {
            background: radial-gradient(ellipse at center,
                    rgba(0, 128, 172, 1) 0%,
                    rgba(0, 128, 172, 1) 70%,
                    rgba(0, 128, 172, 0) 70.3%);
            height: 100%;
            width: 100%;
            font-size: 50px;
            margin: auto;
        }

        .cal {
            /* background-color: red; */
            width: fit-content;
            margin: auto;
            padding-top: 35%;
        }

        .main2 {
            padding-top: 100px;
            text-align: center;
        }

        .main2 h1 {
            font-size: 40px;
        }

        .main3 h1 {
            font-size: 40px;
        }

        .main4 {
            padding-top: 5%;
            font-size: xx-large;
            padding-left: 30%;
        }

        .main4 button {
            background-color: #45b1e8;
            border-style: hidden;
            margin-top: 20px;
            width: 200px;
            height: 30px;
            border-radius: 50px;
            color: white;
            margin-left: 20%;
        }

        .main5 {
            margin: auto;
            /* background-color: red; */
            text-align: left;
            width: 60%;
             padding-top: 5%;
            /*padding-left: 10%;
            padding-right: 10%;*/
            padding-bottom: 5%; 
        }

        .tracker {
            text-align: center;
            margin-top: 5%;
            /* background-color: red; */
            height: 400px;
            padding-bottom: 500px;
        }

        .first {
            background-image: url("fit1.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            height: 300px;
            width: 25%;
            /* background-color: brown; */
            float: left;
            margin-left: 10%;
            margin-right: 5%;
            color: white;
            filter: drop-shadow(8px 8px 10px black);
        }

        .first1 {
            background: rgba(0, 0, 0, .5);
            color: white;
        }

        .sec {
            background-image: url("fit2.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            height: 300px;
            /* background-color: pink; */
            width: 25%;
            margin: 0 auto;
            color: white;
            filter: drop-shadow(8px 8px 10px black);
        }

        .sec1 {
            background: rgba(0, 0, 0, .5);
            color: white;
        }

        .third {
            background-image: url("fit3.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            height: 300px;
            width: 25%;
            background-color: blue;
            float: right;
            margin-right: 10%;
            margin-left: 5%;
            filter: drop-shadow(8px 8px 10px black);
        }

        .third1 {
            background: rgba(0, 0, 0, .5);
            color: white;
        }

        .sl {
            /* margin-top: 5000px; */
            margin: auto;
            width: 50%;
        }

        * {
            box-sizing: border-box
        }

        .slideshow-container {
            max-width: 100%;
            position: relative;
            margin: auto;
        }

        .mySlides {
            display: none;
        }

        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            margin-top: -22px;
            padding: 16px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }

        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        .itext {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active,
        .dot:hover {
            background-color: #717171;
        }

        .fade {
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        .info {
            margin: auto;
            width: 60%;
            font-size: 20px;
            margin-top: 100px;
        }

        .info2{
            margin: auto;
            width: 60%;
            font-size: 20px;
            /* margin-top: 100px; */
        }

.research{
    background-image: url("research.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    width: 100%;
    height: 350px;
}

        footer {
            height: 100px;
            background-color: #45b1e8;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="main1">
        <div class="title">Health and <br> Fitness Tracker</li>
        </div>
        <div class="profile">
            <button id="profile"
                onclick="window.location.href='https://localhost/health_and_fitness_tracker/profile.php'">log
                in</button>
        </div>
    </div>
    <div class="main2">
        <h1>In order to achieve your target <br> you need to consume</h1>
    </div>
    <div class="main3">
        <div class="quote-wrapper">
            <blockquote class="text">
                <div class="cal">
                    <center>
                        <?php
                        $server = "localhost";
                        $username = "root";
                        $password = "";

                        $con = mysqli_connect($server, $username, $password);

                        if (!$con) {
                            die("connection failed" . mysqli_connect_error());
                        }

                        $user = $_COOKIE["user"];

                        $query = "select goal_calories from `haft`.`haft` where username = '$user'";
                        $result = mysqli_query($con, $query);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo $row["goal_calories"];
                            }
                        }
                        $con->close();
                        ?>
                        <br> calories
                    </center>
                </div>
            </blockquote>
            <center>
                <h1>per day</h1>
            </center>
        </div>
    </div>
    <div class="main4">
        Current Weight:
        <?php
        $server = "localhost";
        $username = "root";
        $password = "";

        $con = mysqli_connect($server, $username, $password);

        if (!$con) {
            die("connection failed" . mysqli_connect_error());
        }

        $user = $_COOKIE["user"];

        $query = "select weight from `haft`.`haft` where username = '$user'";
        $result = mysqli_query($con, $query);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row["weight"];
            }
        }
        $con->close();
        ?>
        Kg

        <button id="profile"
            onclick="window.location.href='https://localhost/health_and_fitness_tracker/informationQ.php'">Update</button>

        <br>
        Goal weight:
        <?php
        $server = "localhost";
        $username = "root";
        $password = "";

        $con = mysqli_connect($server, $username, $password);

        if (!$con) {
            die("connection failed" . mysqli_connect_error());
        }

        $user = $_COOKIE["user"];

        $query = "select goal_weight from `haft`.`haft` where username = '$user'";
        $result = mysqli_query($con, $query);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row["goal_weight"];
            }
        }
        $con->close();
        ?>
        Kg <br>
    </div>







    <div class="tracker">
        <h1>3 ways to remain physically fit</h1> <br>
        <div class="first"><br><br><br><br><br><br><br><br><br>
            <div class="first1">
                <h1>Keep
                    <br> moving!
                </h1>
            </div>
        </div>

        <div class="third"><br><br><br><br><br><br><br><br><br>
            <div class="third1">
                <h1>Stretch <br> daily</h1>
            </div>
        </div>

        <div class="sec"><br><br><br><br><br><br><br><br><br>
            <div class="sec1">
                <h1>Maintain <br> muscle&nbsp;strength</h1>
            </div>
        </div>
    </div>

    <div class="info2">
       &nbsp; &nbsp; &nbsp; Healthy living and physical fitness are closely connected. Being physically fit not only helps people live
        healthy lives, it also helps people live longer. People who make physical activity and exercise a part of their
        daily lives when they are young are more likely to keep it in their lives as they grow older and benefit from it
        throughout their lifespans. Physical activity is defined as any movement that spends energy. Exercise is a
        subset of physical activity, but it is an activity that is structured and planned. <br><br>

        &nbsp; &nbsp; &nbsp; While many children engage in physical activity, usually by playing with their friends, the amount of physical
        activity they get as they grow into adolescents usually declines. In fact, many researchers believe that
        physical inactivity is a national health problem that can increase the risk of illness and disease.
        <br><br><br><br><br>
    </div>

    <div class="sl">
        <div class="slideshow-container">
            <div class="mySlides">
                <div class="numbertext"> <br>
                    <h1
                        style="font-size: 50px; text-align: center; margin-left: 200px; margin-top: 275px; background: rgba(0,0,0,.5)">
                        Exercise&nbsp;daily
                    </h1>
                </div>
                <img src="part1.jpg" style="width:100%; height: 400px;">
                <div class="itext"></div>
            </div>
            <div class="mySlides">
                <div class="numbertext"><br>
                    <h1
                        style="font-size: 50px; text-align: center; margin-left: 200px; margin-top: 275px; background: rgba(0,0,0,.5)">

                        Track&nbsp;your&nbsp;progress

                    </h1>
                </div>
                <img src="part2.jpg" style="width:100%;  height: 400px;">
                <div class="itext"></div>
            </div>
            <div class="mySlides">
                <div class="numbertext"> <br>
                    <h1
                        style="font-size: 50px; text-align: center; margin-left: 200px; margin-top: 275px; background: rgba(0,0,0,.5)">

                        Daily&nbsp;activity

                    </h1>
                </div>
                <img src="part3.jpg" style="width:100%; height: 400px;">
                <div class="itext"></div>
            </div>
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>

    </div>





    <div class="info">
        <h1>Tips: </h1>
        1. Regular exercise is one of the best things you can do for your health. It has many benefits, including
        improving
        your overall health and fitness, and reducing your risk for many chronic diseases. There are many different
        types of exercise; it is important that you pick the right types for you. Most people benefit from a combination
        of them: <br> <br>

        &nbsp; &nbsp; &nbsp; a. Endurance, or aerobic, activities increase your breathing and heart rate. They keep your heart, lungs, and
        circulatory system healthy and improve your overall fitness. Examples include brisk walking, jogging, swimming,
        and biking.<br><br>
        &nbsp; &nbsp; &nbsp; b. Strength, or resistance training, exercises make your muscles stronger. Some examples are lifting weights and
        using a resistance band.<br><br>
        &nbsp; &nbsp; &nbsp; c. Balance exercises can make it easier to walk on uneven surfaces and help prevent falls. To improve your
        balance,
        try tai chi or exercises like standing on one leg.<br><br>
        Flexibility exercises stretch your muscles and can help your body stay limber. Yoga and doing various stretches
        can make you more flexible.<br><br>
        &nbsp; &nbsp; &nbsp; d. Fitting regular exercise into your daily schedule may seem difficult at first. But you can start slowly, and
        break your exercise time into chunks. Even doing ten minutes at a time is fine. You can work your way up to
        doing the recommended amount of exercise. How much exercise you need depends on your age and
        health.<br><br><br><br>
        <br><br><br><br>
        2. Other things that you can do to make the most of your workouts include:
        <br><br>
        &nbsp; &nbsp; &nbsp; a. Choosing activities that work all the different parts of the body, including your core (muscles around your
        back, abdomen, and pelvis). Good core strength improves balance and stability and helps to prevent lower back
        injury.<br><br>
        &nbsp; &nbsp; &nbsp; b. Choosing activities that you enjoy. It's easier to make exercise a regular part of your life if you have fun
        doing it.<br><br>
        &nbsp; &nbsp; &nbsp; c. Exercising safely, with proper equipment, to prevent injuries. Also, listen to your body and don't overdo it.
        Giving yourself goals. The goals should challenge you, but also be realistic. It's also helpful to reward
        yourself when you reach your goals. The rewards could be something big, like new workout gear, or something
        smaller, such as movie tickets.<br><br><br><br><br><br><br><br><br><br>
    </div>





<div class="research">

</div>


    <div class="main5">
        <h1>Researches</h1><br><br>
        April 12, 2023
        <h3> Exercise Is Even Better in Nature, Research Says</h3>
        — Take exercise outside to nature if you want greater benefits, including mental clarity and
        motivation, new research into “green exercise” suggests.
        <br><br><br>
        March 29, 2023
        <h3>Study Suggests the Least Exercise People Can Do for Health</h3>
        — A new study found that people who take 8,000 steps a day once or twice per week get almost all
        the cardiovascular health benefits as people who do it almost every day.
        <br><br><br>
        March 20, 2023
        <h3> People Took Fewer Steps After Pandemic Started, Study Shows</h3>
        — People took fewer daily steps after the start of the COVID-19 pandemic and haven’t gotten back
        up to their old numbers yet, according to a study published Monday in JAMA Open Network.
        <br><br><br>
        February 27, 2023
        <h3>Extra 20 Minutes of Daily Exercise Cuts Hospitalization Risk: Study</h3>
        — An extra 20 minutes of moderate-to-vigorous exercise per day helps keep middle-aged and
        older people out of the hospital for serious medical conditions, a study published in JAMA Open Network says.
        <br><br><br>
        February 22, 2023
        <h3> Midday Exercise More Beneficial Than Morning Workouts: Study</h3>
        — People who engaged in midday exercise lowered their risk of premature death more than people
        who exercised in the morning or in the evening, a new study shows.
        <br><br><br>
        February 13, 2023
        <h3> Exercise Training Reduces Liver Fat, Even Without Weight Loss</h3>
        — Exercise training can lead to a significant reduction in liver fat for patients with
        nonalcoholic fatty liver disease (NAFLD), which is a leading cause of liver disease worldwide, according to a
        new study published in the American Journal of Gastroenterology.
        <br><br><br>
        January 30, 2023
        <h3>Cardiac Arrest Risk Low for Active Seniors During Sports</h3>
        — Adults ages 65 and over who engage in regular physical activity are at low risk of
        sports-related sudden cardiac arrest, a new study suggests.
        <br><br><br>
        January 27, 2023
        <h3>Nearly Half of Americans Don’t Get Enough Physical Activity: CDC</h3>
        — Most American adults are not meeting physical activity guidelines, the CDC said this week.
        <br><br><br>
        January 26, 2023
        <h3> Climbing Back: One Woman's Triumph After Near-Fatal Injury</h3>
        — After a near-fatal accident left Melissa Strong's fingers a mangled, charred mess, the
        climber was told her days on the rock were over. Her story is a testament to determination in the face of
        grievous injury, and the importance of physical activity and mindset in any recovery.
        <br><br><br>
        January 24, 2023
        <h3> Belly Bulge Linked to Being Frail Later in Life: Study</h3>
        — Managing belly bulge earlier in life could help prevent becoming medically frail, which is a
        major health risk for the elderly, according to a new study from Norway.
        <br><br><br>
        January 6, 2023
        <h3>Little-Used Fitness Measure Could Be Key to Exercise Results</h3>
        — Crafting exercise programs around a long-ignored measure of fitness could help us more
        accurately predict health outcomes, enabling doctors to prescribe exercise as medicine.
        <br><br><br>
        January 4, 2023
        <h3>The Real Reason You’re Not Motivated to Exercise</h3>
        — The difference between an active person and a sedentary one could come down to the microbes
        that live in our gut.
    </div>

    <footer>
        <br><br>
    © 2023 Copyright: Health and Fitness <br> Tracker
    </footer>
</body>
<script>
    let slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        if (n > slides.length) { slideIndex = 1 }
        if (n < 1) { slideIndex = slides.length }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }
</script>

</html>