<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div style="width: 250px; height:250px; border:1px solid black">
<img src="../images/{{$car->carImage}}" alt="">
</div>
    <div style="display:flex;flex-direction:row">

        @foreach($more as $m)
        <div>
            <img src="../multiImages/{{$m->multiImages}}" width="75px" height="75px" alt="">
        </div>
        @endforeach
    </div>
</body>
</html>