<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Blog</title>
    <style>
        body {
            max-width: 900px;
            margin: auto;
        }
    </style>
</head>

<body>
    <article>
        {{-- <h1><a href="/post"> My first Post</a></h1> --}}
        <?php echo $post ?>
        {{-- <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia accusantium voluptatum culpa non eligendi
            delectus enim quo, nulla consequuntur? Dolores totam ad tenetur autem eaque quidem similique neque earum
            optio dolore! Tenetur nemo, deleniti porro, eos a dolores nesciunt obcaecati perferendis quibusdam eaque
            quis quidem illo sit, magnam dolor tempora.</p> --}}
    </article>
    <a href="/">Go Back</a>

</body>

</html>
