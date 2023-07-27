<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setting goal</title>
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        .main1 {
            background-color: #45b1e8;
            width: 100%;
            height: 80px;
            color: white;
        }

        .title {
            /* background-color: red; */
            float: left;
            width: 50%;
            font-size: xx-large;
            text-align: center;
        }

        .main2 {
            text-align: center;
            padding-top: 10%;
        }

        input {
            text-align: center;
            width: 25%;
            height: 30px;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .main2 button {
            background-color: #45b1e8;
            border-style: hidden;
            margin-top: 50px;
            width: 200px;
            height: 30px;
            border-radius: 50px;
            color: white;
            font-size: 20px;
        }
    </style>
</head>

<body>
    <div class="main1">
        <div class="title">Health and <br> Fitness Tracker</li>
        </div>
    </div>
    <div class="main2">
        <h1>Create a goal</h1> <br><br>
        <form method="post" name="verify" action="https://localhost/health_and_fitness_tracker/change.php">
            <input type="number" name="goal" id="goal" placeholder="Enter your goal weight" required> <br><br>
            <button type="submit" onclick="check()">Submit</button>
        </form>
    </div>
</body>
<script>
    function check(){
        const op = document.forms["verify"]["goal"].value
        console.log(op)
        sessionStorage.setItem('op', op)
    }
    document.addEventListener('DOMContentLoaded', function () {
        const data = sessionStorage.getItem('data');
        console.log(data)
        if (data == 1) {
            const imp = 2000;
            sessionStorage.setItem('imp', imp)

        } else if (data == 2) {
            const imp = 3000;
            sessionStorage.setItem('imp', imp)

        } else {
            const imp = 2500;
            sessionStorage.setItem('imp', imp)

        }
    });
</script>

</html>