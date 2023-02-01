<!DOCTYPE html>
<html>
<head>
    <title>Contact</title>
</head>
<body>
    @foreach ($registeredUserDataToAdmin as $key => $data)
    <p>{{ $key }}: <b>{{ $data }}</b></p>
    @endforeach
    <br>
</body>
</html>
