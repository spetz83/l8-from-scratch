<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>My Blog</title>
</head>
<body>
<article>
    <h1><?= $post->title; ?></h1>
    <div><?= $post->body; ?></div>
</article>

</body>
</html>
