<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        table,tr,td,th{
            border: 1px solid black;
        }
    </style>
    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>city</th>
        </tr>
@foreach($test as $t)
        <tr>
            <td>{{$t->id}}</td>
            <td>{{$t->name}}</td>
            <td>{{$t->city}}</td>
            <td>
                <form method="post" action="{{url('test/'.$t->id)}}">
                    @csrf
                    @method('delete')
                <button type="submit">delete</button>
                </form>
            </td>
            <td>
                <a href="{{url('test/'.$t->id.'/edit')}}">edit</a>
            </td>

        </tr>
        @endforeach
    </table>
</body>
</html>