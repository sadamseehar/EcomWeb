<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="{{url('test/'.$test->id)}}">
        @csrf
        @method('put')
        <input value="{{$test->name}}" name ="nameIn" type="text" placeholder="name">
        <br>
        <input value="{{$test->city}}" name ="cityIn" type="text" placeholder="city">
        <br>
        <button type="submit">update</button>
    </form>
    <a href="{{url('test/create')}}"> show data</a>
</body>
</html>