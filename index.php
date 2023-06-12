<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>
<body>
    
    <div id="app">
        <button @click="chiamata">click</button> <br>
        <?php include "api.php";
        for ($i=0; $i < count($students); $i++) { 
            echo "Nome: " . $students[$i]["name"] . "<br>";
        }
        ?>
    </div>

    <script src="./main.js"></script>

</body>
</html>