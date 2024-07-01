<!DOCTYPE html>
<html>
<head>
    <title>Новая заявка</title>
</head>
<body>
    <h1>Новая заявка</h1>
    <p><strong>Имя:</strong> {{ $data['name'] }}</p>
    <p><strong>Номер:</strong> {{ $data['number'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Текст:</strong> {{ $data['text'] }}</p>
    <p><strong>Регион:</strong> {{ $data['region'] }}</p>
</body>
</html>
