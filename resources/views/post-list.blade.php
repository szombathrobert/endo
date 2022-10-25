<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post List</title>
    <style>
        table{
            border-collapse: collapse;
            width: 100%;
        }

        td,th{
            padding: 5px;
            border: 1px solid;
        }
    </style>
</head>
<body>
    <a style="float:right" href="{{route('dashboard')}}">Add Post</a>
    <table>
        <tr>
            <th>ID</th>
            <th>check1</th>
            <th>check2</th>
            <th>check3</th>
            <th>check4</th>
            <th>honap</th>
            <th>megjegyzes</th>
            <th>Action</th>
        </tr>
        @foreach ($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->check1}}</td>
            <td>{{$post->check2}}</td>
            <td>{{$post->check3}}</td>
            <td>{{$post->check4}}</td>
            <td>{{$post->honap}}</td>
            <td>{{$post->megjegyzes}}</td>
            <td>
                <a href="/edit-post/{{$post->id}}">Szerkesztés</a>
                <a href="/delete-post/{{$post->id}}">Törlés</a>
            </td>
        </tr>
        @endforeach
    </table>
    <br><br>
    <button><a href="/dashboard">Vissza</a></button>
</body>
</html>
