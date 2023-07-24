<!DOCTYPE html>
<html>
<head>
    <title>Data</title>
</head>
<body>
    <h1>Data</h1>
    @if(count($demo) > 0)
    <table border="2">
        <tr>
            <th>ID</th>
            <th>task_name</th>
            <th>task_description</th>
            <th>completed</th>

        </tr>
        @foreach($demo as $demo2s)
            <tr>
                <td>{{ $demo2s->id }}</td>
                <td>{{ $demo2s->task_name }}</td>
                <td>{{ $demo2s->task_description }}</td>
                <td>{{ $demo2s->completed }}</td>
            </tr>
        @endforeach
    </table>
    @else
        <p>No posts found.</p>
    @endif
</body>
</html>