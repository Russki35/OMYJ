<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>

    @foreach($tasks as $task)

        <li>{{$task->body}}</li>

    @endforeach

</body>
</html>