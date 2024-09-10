<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://matcha.mizu.sh/matcha.css">
</head>
<body>
    <h1>
        All Countries
    </h1>
    <ul>
        <li>Bangladesh</li>
        <li>India</li>
        <li>USA</li>
        <li>UK</li>
        <li>Canada</li>
    </ul>

    <form method="POST">
        @csrf
        <input type="text" name="country" placeholder="Enter Country">
        <button type="submit">Add Country</button>
    </form>
</body>
</html>