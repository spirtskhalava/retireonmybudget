<!DOCTYPE html>
<html>
<head>
    <title>Contact</title>
</head>
<body>
    <p>Name: <b>{{ $data['name'] }}</b></p>
    <p>Email: <b>{{ $data['email'] }}</b></p>
    <br>
    <p><b>{{ $data['subject'] }}</b></p>
    <p>{{ $data['message'] }}</p>
</body>
</html>