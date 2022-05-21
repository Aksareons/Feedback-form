<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>massage</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>created_at</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <tr>
                            <td>{{ $user->getKey() }}</td>
                            <td>{{ $feedback->title}}</td>
                            <td>{{ $feedback->message}}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $feedback->created_at }}</td>
                   </tbody>
                </table>
</body>
</html>