<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="https://matcha.mizu.sh/matcha.css">
</head>
<body>
    <h1>
        Contact Form
    </h1>
    <p>
        Please fill out the form below to contact us.
    </p>


    <form method="POST">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="john doe" >
        <label for="email">Email</label>
        <input type="text" name="email" id="email" value="john@doe.com" >
        <label for="message">Message</label>
        <textarea name="message" id="message"  >Helloooooooo</textarea>
        <p>
            <label for="">red</label>
            <input type="checkbox" name="colors[]" value="red">

            <label for="">green</label>
            <input type="checkbox" name="colors[]" value="green">

            <label for="">blue</label>
            <input type="checkbox" name="colors[]" value="blue">
        </p>
        <button type="submit">Submit</button>

    </form>
</body>
</html>