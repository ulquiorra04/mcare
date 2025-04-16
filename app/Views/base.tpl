<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{base_url()}style.css">
    <title>Healthcare - Management system</title>
</head>
<body>

    <div id="sidebar">

        <div id="logo">
            <img src="{base_url()}logo.png" alt="Healthcare">
        </div>

        <div id="sidebar_menu" class="d-flex flex-column">
            <a href="#"> <i class="bi bi-trello"></i> dashboard</a>
            <a href="{base_url('patients')}"> <i class="bi bi-person"></i> Patient details </a>
            <a href="{base_url('doctors')}"> <i class="bi bi-person"></i> doctor details </a>
            <a href="#"> <i class="bi bi-credit-card-2-back"></i> payment details </a>
            <a href="#"> <i class="bi bi-easel"></i> e-channeling </a>
        </div>

    </div>

    <div id="content">
        {block name="content"}{/block}
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>