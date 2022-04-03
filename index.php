<?php 
    // snack 1

    $partite = [
        [
        'casa' => 'Basket Milano',
        'opsite' => 'Basket Roma',
        'punti_casa' => 45,
        'punti_opsite' => 21,
        ],
    ]
?>
<h1>
    <?php echo $partite['casa']; ?>
    - 
    <?php echo $partite['ospite']; ?>
    | 
    <?php echo $partite['punti_casa']; ?>
    - 
    <?php echo $partite['punti_ospite']; ?>
</h1>

<?php
    // snack 2

    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];

    if(( strlen($name) > 3) &&
        (str_contains($mail, '@')) &&
        (str_contains($mail, '.')) &&
        is_numeric($age)) {
            ?>
            <h1>
                <?php echo 'Accesso Riuscito'; ?>
            </h1>
            <?php 
        } else {
            ?>
            <h1>
                <?php echo 'Accesso Negato'; ?>
            </h1>
            <?php
        }
    ?>

<?php
    // snack 3

    $posts = [

        '10/01/2019' => [
            [
                'title' => 'Post 1',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 1'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 2'
            ],
        ],
        '10/02/2019' => [
            [
                'title' => 'Post 3',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 3'
            ]
        ],
        '15/05/2019' => [
            [
                'title' => 'Post 4',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 4'
            ],
            [
                'title' => 'Post 5',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 5'
            ],
            [
                'title' => 'Post 6',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 6'
            ]
        ],
    ];
?>

<h1>
    <?php
        foreach($posts as $key => $value) {
            echo $key, $value;
        }
    ?>
</h1>

<?php
    // snack 4

    $rand_num = [];
    $i = 0;

    while (count($rand_num) < 15) {
        $x = rand();
        
        if(in_array($x, $rand_num)) {
            array_push($rand_num, $x);
        }

        $i++;
    }

    var_dump($rand_num);
?>

<?php
    // snack 5

    $paragraph = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga explicabo laboriosam ab distinctio aut iure, saepe ipsam vero quis deleniti eum, eius eveniet quas ducimus dolorem incidunt quae fugit excepturi harum, commodi autem nobis eos minima assumenda. Ducimus, vel aliquid.';
    

    $para_sub_array = explode('. ', $paragraph);

    var_dump($para_sub_array);
?>

<?php
    // snack 6

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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div class="rettangolo grigio">
        <?php
            foreach($db['teachers'] as $value) {
                echo $value;
            }
        ?>
    </div>

    <div class="rettangolo verde">
        <?php
            foreach($db['pm'] as $value) {
                echo $value;
            }
        ?>
    </div>

    <style>
        .rettangolo {
            height: 30px;
            width: 90px;
            padding: 10px;
        }

        .grigio {
            background-color: grey;
        }

        .verde {
            background-color: green;
        }
    </style>

</body>
</html>

<?php
    // snacks 7

    $students = [
        'alunno1' => [
            'nome' => 'Luca',
            'cognome' => 'Rossi',
            'voti' => [8, 9, 10]
        ],
        'alunno2' => [
            'nome' => 'Rudy',
            'cognome' => 'Zerby',
            'voti' => [7, 8, 9]
        ],
        'alunno3' => [
            'nome' => 'Nicola',
            'cognome' => 'Di Bari',
            'voti' => [6, 7, 8]
        ]
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>
        <?php
            foreach($students as $value) {
                $alunno = $value;

                foreach($alunno as $value) {
                    if(is_string($value)) {
                        echo $value;
                    } else {
                        $voti = $value;

                        foreach($voti as $value) {
                            $somma_voti += $value;

                            $media_voti = $somma_voti / count($voti);
                        }

                        echo $media_voti;
                    }
                }
            }
        ?>
    </h1>

</body>
</html>