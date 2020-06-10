<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
    <style>
        body {
            font-size: 16px;
        }

        input, textarea {
            display: block;
            box-sizing: border-box;
            width: 100%;
            padding: 1rem;
            font-size: 1rem;
            margin: 0.2rem;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        @csrf

        <input type='text' name="name" id="name" placeholder="naam">
        <input type='email' name="email" id="email" placeholder="E-mail">
        <input type='text' name="onderwerp" id="onderwerp" placeholder="onderwerp">
        <textarea name="message" id="content" cols="30" rows="10" placeholder='message goes brrrr'></textarea>
        <button type='submit'>verzend</button>
    </form>

</body>
</html>
