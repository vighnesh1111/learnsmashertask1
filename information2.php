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
    <title>Details</title>
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

<body>
    <div class="main1">
        <div class="title">Health and <br> Fitness Tracker</li>
        </div>
    </div>
    <div class="main2">
        <h1>Current details</h1> <br><br>
        <form action="https://localhost/health_and_fitness_tracker/information3.php" method="post" name="verify">
            <input type="number" class="weight" name="weight" id="weight" placeholder="Enter your weight (in kg)"
                required> <br><br>
            <input type="number" class="height" name="height" id="height" placeholder="Enter height (in cm)" required> <br><br>
            <input type="number" class="age" name="age" id="age" min="13" max="100" placeholder="Enter your age" required>
            <br><br><br>
            <button type="submit" onclick="info()">Next</button>
        </form>
    </div>
</body>
<script>

    function info() {
        const weight = document.forms["verify"]["weight"].value
        const height = document.forms["verify"]["height"].value
        const age = document.forms["verify"]["age"].value
        sessionStorage.setItem('data1', weight)
        sessionStorage.setItem('data2', height)
        sessionStorage.setItem('data3', age);

console.log(weight)
console.log(height)

        if(weight == "" && height == "" && age == ""){
            alert("Fill out all details")
        }
    }
</script>

</html>