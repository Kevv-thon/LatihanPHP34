<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi suhu</title>
</head>
<style>
    fieldset {
        background-color: #eeeeee;
    }
    legend {
        border-radius: 25px;
        background-color: grey;
        padding: 5px;
    }
</style>
<body>
    <fieldset>
        <legend><h4>Konveri suhu celcius ke yang lain</h4></legend>
        <form action="konversi.php" method="post">
        Suhu <input type="text"  name="suhu" size="10"><br><br>
        Konversi: <br>
       <input type="radio" name="konversi" value="reamur" >Reamur<br>
       <input type="radio" name="konversi" value="fahrenhait" >Fahrenhait<br>
       <input type="radio" name="konversi" value="kelvin" >Kelvin<br>
       <input type="submit" name="submit" value="Konversi" >
    </form>
    </fieldset>
</body>
</html>