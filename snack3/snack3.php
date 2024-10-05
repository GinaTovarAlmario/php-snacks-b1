<!-- Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in
un rettangolo grigio e i PM in un rettangolo verde. -->
<?php
 
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
    <main>
        <?php foreach( $db as $dbElements => $dbList) { ?>
            <section>
                <h2><?= $dbElements ?> </h2>
                <?php foreach ($dbList as $dbListElement) { ?>
                    <div class="info">
                        <p>name: <?= $dbListElement["name"] . $dbListElement["lastname"] ?> </p>
                    </div>
                <?php }?>       
            </section>
        <?php } ?>
    </main>
</body>
</html>