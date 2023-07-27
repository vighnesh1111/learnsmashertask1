<script>
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
    <title>Personal information</title>
</head>
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

    .main2 {
        text-align: center;
        padding-top: 10%;
    }

    .main2 button {
        font-size: larger;
        background-color: #45b1e8;
        border-style: hidden;
        width: 40%;
        height: 40px;
        color: white;
        font-size: 20px;
    }
</style>

<body>
    <div class="main1">
        <div class="title">Health and <br> Fitness Tracker</li>
        </div>
    </div>
    <div class="main2">
        <h1>What is your goal?</h1> <br><br><br>
        <button onclick="imp(1)" name="loss">Weight&nbsp;Loss</button> <br><br>
        <button onclick="imp(2)" name="gain">Weight&nbsp;Gain</button> <br><br>
        <button onclick="imp(3)" name="maintain">Weight&nbsp;Maintain</button> <br><br>
    </div>
</body>
<script>
    function imp(val) {
        sessionStorage.setItem('data', val);
        console.log(val)
        window.location.href='https://localhost/health_and_fitness_tracker/information2.php';
    }
</script>

</html>