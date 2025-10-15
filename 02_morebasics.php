<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>more basics of php</title>
</head>
<style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
    }
.container{
    background-color:grey;
    max-width:80%;
    margin:auto;
    padding:20px;
}
</style>
<body>
    <div class="container">
    <h1>Lets Learn About PHP</h1>
    <p>your adult status</p>
        <?php
        $age =34;
        if($age>18){
            echo "you are adult";
        }else{
            echo "you are underage";
        }
        ?>
    </div>
</body>
</html>