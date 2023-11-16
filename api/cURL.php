 <?php
    $curl = curl_init("https://api.github.com/users");
    curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,false);
    curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
    $headers = [
        'User-Agent: fares-mohammed',
        'Authorization: Token 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', // Replace YOUR_ACCESS_TOKEN with your actual token
        'Content-Type: application/json', // Example header for specifying JSON content
        // Add more headers if needed
    ];
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    $data = curl_exec($curl);


    curl_close($curl);


    
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


</head>
<body class="container">

<?php if ($data != false) : ?>
    <?php $data = json_decode($data) ?>
    <table class="table table-dark">
        <?php foreach($data as $user) : ?>
            <tr class="table-dark" style="margin: 10px;">
                <td><img style="width: 150px;height: 150px;" src="<?= $user->avatar_url ?>" alt="avatar" class="img-thumbnail"></td>
                <td class="table-dark" ><h3 class="text-nowrap text-dark pd-2 bg-body-secondary border"><?= $user->login ?></h3></td>
            </tr>
        <?php endforeach  ?>
    </table>
<?php else : ?>
    <div class="alert alter-danger"><?= curl_error($curl) ?></div>
<?php endif ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>