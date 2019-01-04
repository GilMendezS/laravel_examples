<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Add user</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('user.addUser')}}" method="POST">
        @csrf
        <label for="">Name</label>
        <input type="text" name="name">
        <br>
        <label for="">Email</label>
        <input type="email" name="email">
        <br>
        <label for="">Password</label>
        <input type="password" name="password">
        <br>
        <button type="submit">Send</button>
    </form>
</body>
</html>