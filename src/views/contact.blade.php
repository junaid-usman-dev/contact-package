<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Contact with us</h1>

    <form action="{{ Route('contact-submit') }}" method="post" >
        @csrf

        <input type="text" name="name" placeholder="Enter Name">
        <input type="email" name="email" placeholder="Enter a valid email">
        
        <textarea name="message" cols="30" rows="10" placeholder="Enter your query"></textarea>
        
        <input type="submit" value="Submit">

    </form>
</body>
</html>