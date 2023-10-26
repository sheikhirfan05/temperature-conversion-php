<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tempratur Conversion in PHP</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            overflow-y: hidden;
        }
        html{
            font-size: 62.5%;
        }
        .header{
            width: 95%;
            height: 7rem;
            display: flex;
            justify-content: center;
            align-items: flex-end;
        }
        .header h1{
            font-size: 3rem;
            text-align: center;
            color: #7673F1;
            font-family: sans-serif;
        }
        .container{
            height: 100vh;
            width: 100%;
            display: flex;
        }
        .img{
            width: 50%;
            height: 100%;
            /* background: url("https://img.freepik.com/premium-vector/heat-cold-weather_118813-4587.jpg?size=626&ext=jpg&ga=GA1.1.1413502914.1696896000&semt=ais"); */
            /* background-repeat: no-repeat; */
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .form{
            width: 50%;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .form .box{
            height: 30rem;
            width: 50%;
            background: #DFE4E8;
            border-radius: 1rem;
            text-align: center;
        }
        .form .box .input{
            padding: 1rem;
            border: 1px solid #000;
            border-radius: .5rem;
            width: 60%;
            margin-bottom: 2.5rem;
            margin-top: 6rem;
        }
        .form .box label{
            font-size: 1.7rem;
            font-family: sans-serif;
            margin-bottom: 1rem;
        }
        .form .box .button{
            margin-top: 1.5rem;
            background: #7673F1;
            color: #fff;
            padding: 1rem;
            width: 8rem;
            border: none;
            outline: none;
            border-radius: .5rem;
            cursor: pointer;
            font-size: 1.4rem;
            margin-top: 1.5rem;
        }
        p{
            font-size: 1.6rem;
            margin-top: 3rem;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Temprature Conversion</h1>
    </div>
    <div class="container">
        <div class="img">
            <img src="https://img.freepik.com/premium-vector/young-beautiful-woman-giving-medicine-sick-man-plaid_179970-475.jpg?size=626&ext=jpg">
        </div>
        <div class="form">
            <div class="box">
        <form  method="POST">
            <input type="text" name="num" placeholder="Enter your number" class="input">

            <div class="section">
                <label>Celcius</label>
                <input type="radio" name="units" value="cel">

                <label>Faren</label>
                <input type="radio" name="units" value="feh">
            </div>
            
            <input type="submit" name="submit" value="Convert" class="button">
        </form>
        <div>
            <p>
                <?php
                    if(isset($_POST['submit'])){
                        $num = $_POST['num'];
                        $temp = $_POST['units'];

                        if($temp == "cel"){
                            $result = $num * 9 / 5 + 32;
                            echo "The conversion value of celcius in farenhite is: ". $result;
                        }
                        else{
                            $result = ($num - 32) * 5 / 9;
                            echo "The conversion value of farenhite in celcius is: ". $result;
                        }
                    }
                ?>
            </p>
        </div>
        </div>
        </div>
    </div>
</body>
</html>