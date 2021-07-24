<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>

    @if($errors->any())
    <div>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="/sent" method="POST">
        @csrf
        <label for="name">Input your name:</label>
        <input type="text" name="name" id="name" placeholder="John">
        <br>
        <label for="email">Input your email:</label>
        <input type="email" name="email" id="email" placeholder="john@mail.com">
        <br>
        <label for="message">Input your message:</label>
        <textarea name="message" id="message" cols="30" rows="10" placeholder="Your message here"></textarea>
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>