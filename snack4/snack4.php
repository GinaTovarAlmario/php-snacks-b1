<!-- Dato questo array di classi con studenti:
https://pastebin.com/HksnN0aS
Snack 4A:
Stampare in pagina, senza particolare stilizzazione il nome di ogni classe e sotto ognuna, i dati di ogni
studente/studentessa presente nella relativa classe.
Bonus:
Implementare funzionalita' di filtraggio aggiuntive basate, ad esempio, su nome, cognome o anni dei relativi
studenti, o magari sul nome della nostra classe. -->

<!-- DATI -->
<?php
    $classi = [
        "Classe 1A" => [
            [
                "id" => 1,
                "nome" => "Marco",
                "cognome" => "Rossi",
                "anni" => 23,
                "voto_medio" => 8.5,
                "linguaggio_preferito" => "PHP",
                "immagine" => "https://source.unsplash.com/random/200x200?person",
            ],
            [
                "id" => 2,
                "nome" => "Luca",
                "cognome" => "Verdi",
                "anni" => 27,
                "voto_medio" => 3.5,
                "linguaggio_preferito" => "JS",
                "immagine" => "https://source.unsplash.com/random/200x200?person",
            ],
            [
                "id" => 3,
                "nome" => "Giulia",
                "cognome" => "Bianchi",
                "anni" => 23,
                "voto_medio" => 5.5,
                "linguaggio_preferito" => "CSS",
                "immagine" => "https://source.unsplash.com/random/200x200?person",
            ],
            [
                "id" => 4,
                "nome" => "Sofia",
                "cognome" => "Russo",
                "anni" => 27,
                "voto_medio" => 8.0,
                "linguaggio_preferito" => "HTML",
                "immagine" => "https://source.unsplash.com/random/200x200?person",
            ],
            [
                "id" => 5,
                "nome" => "Andrea",
                "cognome" => "Ferrari",
                "anni" => 22,
                "voto_medio" => 7.5,
                "linguaggio_preferito" => "PHP",
                "immagine" => "https://source.unsplash.com/random/200x200?person",
            ],
        ],
        "Classe 2A" => [
            [
                "id" => 27,
                "nome" => "Francesca",
                "cognome" => "Ricci",
                "anni" => 27,
                "voto_medio" => 9.0,
                "linguaggio_preferito" => "JS",
                "immagine" => "https://source.unsplash.com/random/200x200?person",
            ],
            [
                "id" => 22,
                "nome" => "Matteo",
                "cognome" => "Moretti",
                "anni" => 23,
                "voto_medio" => 4.3,
                "linguaggio_preferito" => "HTML",
                "immagine" => "https://source.unsplash.com/random/200x200?person",
            ],
            [
                "id" => 30,
                "nome" => "Alessandro",
                "cognome" => "Lombardi",
                "anni" => 27,
                "voto_medio" => 5.4,
                "linguaggio_preferito" => "CSS",
                "immagine" => "https://source.unsplash.com/random/200x200?person",
            ],
            [
                "id" => 33,
                "nome" => "Elena",
                "cognome" => "Conti",
                "anni" => 22,
                "voto_medio" => 8.4,
                "linguaggio_preferito" => "PHP",
                "immagine" => "https://source.unsplash.com/random/200x200?person",
            ],
            [
                "id" => 20,
                "nome" => "Valeria",
                "cognome" => "Gallo",
                "anni" => 27,
                "voto_medio" => 9.5,
                "linguaggio_preferito" => "JS",
                "immagine" => "https://source.unsplash.com/random/200x200?person",
            ],
        ],
        "Classe 3A" => [
            [
                "id" => 31,
                "nome" => "Simone",
                "cognome" => "Fabbri",
                "anni" => 22,
                "voto_medio" => 6.9,
                "linguaggio_preferito" => "CSS",
                "immagine" => "https://source.unsplash.com/random/200x200?person",
            ],
            [
                "id" => 32,
                "nome" => "Chiara",
                "cognome" => "Riva",
                "anni" => 27,
                "voto_medio" => 5.3,
                "linguaggio_preferito" => "HTML",
                "immagine" => "https://source.unsplash.com/random/200x200?person",
            ],
            [
                "id" => 33,
                "nome" => "Lorenzo",
                "cognome" => "Orlando",
                "anni" => 22,
                "voto_medio" => 8.2,
                "linguaggio_preferito" => "PHP",
                "immagine" => "https://source.unsplash.com/random/200x200?person",
            ],
            [
                "id" => 34,
                "nome" => "Marta",
                "cognome" => "Martini",
                "anni" => 22,
                "voto_medio" => 4.8,
                "linguaggio_preferito" => "JS",
                "immagine" => "https://source.unsplash.com/random/200x200?person",
            ],
            [
                "id" => 35,
                "nome" => "Giovanni",
                "cognome" => "Giuliani",
                "anni" => 27,
                "voto_medio" => 8.1,
                "linguaggio_preferito" => "CSS",
                "immagine" => "https://source.unsplash.com/random/200x200?person",
            ],
        ],
        "Classe 4A" => [
            [
                "id" => 46,
                "nome" => "Silvia",
                "cognome" => "De Luca",
                "anni" => 30,
                "voto_medio" => 4.2,
                "linguaggio_preferito" => "PHP",
                "immagine" => "https://source.unsplash.com/random/200x200?person",
            ],
            [
                "id" => 47,
                "nome" => "Federico",
                "cognome" => "Costa",
                "anni" => 30,
                "voto_medio" => 5.1,
                "linguaggio_preferito" => "HTML",
                "immagine" => "https://source.unsplash.com/random/200x200?person",
            ],
            [
                "id" => 48,
                "nome" => "Michele",
                "cognome" => "Cattaneo",
                "anni" => 22,
                "voto_medio" => 3.7,
                "linguaggio_preferito" => "JS",
                "immagine" => "https://source.unsplash.com/random/200x200?person",
            ],
            [
                "id" => 49,
                "nome" => "Anna",
                "cognome" => "Serra",
                "anni" => 30,
                "voto_medio" => 8.6,
                "linguaggio_preferito" => "CSS",
                "immagine" => "https://source.unsplash.com/random/200x200?person",
            ],
            [
                "id" => 50,
                "nome" => "Antonio",
                "cognome" => "Cervi",
                "anni" => 30,
                "voto_medio" => 4.0,
                "linguaggio_preferito" => "PHP",
                "immagine" => "https://source.unsplash.com/random/200x200?person",
            ],
        ],
        "Classe 5A" => [
            [
                "id" => 61,
                "nome" => "Davide",
                "cognome" => "Ferrero",
                "anni" => 33,
                "voto_medio" => 8.7,
                "linguaggio_preferito" => "JS",
                "immagine" => "https://source.unsplash.com/random/200x200?person",
            ],
            [
                "id" => 62,
                "nome" => "Sara",
                "cognome" => "Leoni",
                "anni" => 33,
                "voto_medio" => 4.1,
                "linguaggio_preferito" => "PHP",
                "immagine" => "https://source.unsplash.com/random/200x200?person",
            ],
            [
                "id" => 63,
                "nome" => "Daniele",
                "cognome" => "Bertoni",
                "anni" => 33,
                "voto_medio" => 4.4,
                "linguaggio_preferito" => "HTML",
                "immagine" => "https://source.unsplash.com/random/200x200?person",
            ],
            [
                "id" => 64,
                "nome" => "Giada",
                "cognome" => "Ragusa",
                "anni" => 30,
                "voto_medio" => 5.0,
                "linguaggio_preferito" => "CSS",
                "immagine" => "https://source.unsplash.com/random/200x200?person",
            ],
            [
                "id" => 65,
                "nome" => "Claudio",
                "cognome" => "Lanza",
                "anni" => 30,
                "voto_medio" => 6.7,
                "linguaggio_preferito" => "PHP",
                "immagine" => "https://source.unsplash.com/random/200x200?person",
            ],
        ],
    ];
// Snack 4B:
// Filtrare il nostro array e mostrare, sempre suddivisi per classe, esclusivamente gli studenti e le studentesse
// con voto medio sufficiente.

    // $filteredClassi=[];
    // // vado a filtrare in base al voto sufficiente

    // foreach($classi as $classiList => $singleClass){
    //     foreach($singleClass as $singleElement ){
    //         if( floatval($singleElement["voto_medio"]) >= 6){
    //             // devo comporre la matrioska
    //             $filteredClassi[$classiList][] = $singleElement;
    //         }
    //     }
    // }

 // Snack 4C:
 // Commentiamo il filtro del punto 4B (lasciatelo nel codice, in modo che possiamo comunque vederlo) eaggiungiamo
// un minimo di stile a piacere. Inseriamo quindi un form in cui l'utente possa inserire un input con il voto medio
// massimo, e filtriamo in base ad esso solo gli studenti che abbiano una media esclusivamente inferiore al voto 
// inserito.

    $filteredClassi;

    if(isset($_GET["voto"]) && is_numeric($_GET["voto"])){
        $userVote = floatval($_GET["voto"]);
        $filteredClassi = [];
        foreach($classi as $classiList => $singleClass){
            foreach($singleClass as $singleElement ){
                if($singleElement["voto_medio"] <= $userVote){
                    $filteredClassi[$classiList][] = $singleElement;
                }
            }
        }
    } else {
        $filteredClassi = $classi;
    }

// Aggiungiamo un input che consenta l'inserimento del linguaggio di programmazione preferito, e filtriamo in base
// Snack 4D:
// ad esso solo gli studenti che abbiano quel linguaggio come preferito.

    $extraFilteredClassi;

    if(isset($_GET["favorite_lang"]) && empty(strtoupper(trim( $_GET["favorite_lang"])))){
        $userChoiceLanguage =  strtoupper(trim( $_GET["favorite_lang"]));
        $extraFilteredClassi = [];
        foreach($filteredClassi as $classiList => $singleClass){
            foreach($singleClass as $singleElement ){
                if($singleElement["linguaggio_preferito"] === $userChoiceLanguage){
                    $extraFilteredClassi[$classiList][] = $singleElement;
                }
            }
        }
    } else {
        $extraFilteredClassi = $filteredClassi;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- added Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12">
                <form action="snack4.php" method="GET">

                    <div class="mb-4 mt-4">
                        <label for="voto" class="form-label">Inserire un voto per filtrare gli studenti</label>
                        <input class="form-control" type="text" id="voto" name="voto" placeholder="voto">
                    </div>

                    <div class="mb-4 mt-4">
                        <label for="favorite_lang" class="form-label">Inserire il Linguaggio di programmazione da filtrare</label>
                        <input class="form-control" type="text" id="favorite_lang" name="favorite_lang">
                    </div>

                    <button type="submit" class="btn btn-primary mb-4">Invia</button>
                    <button class="btn btn-warning mb-4">Reset</button>

                </form>
                <?php foreach( $extraFilteredClassi as $classiList => $singleClass){ ?>
                    <section>
                        <h2><?= $classiList; ?> </h2>
                        <ul>
                            <?php foreach( $singleClass as $singleElement) {?>
                                <li>
                                    <p><?="Id: " . $singleElement["id"]; ?></p>
                                    <p><?="Nome: " . $singleElement["nome"]; ?></p>
                                    <p><?="Cognome: " . $singleElement["cognome"]; ?></p>
                                    <p><?="Età: " . $singleElement["anni"]; ?></p>
                                    <p><?="Voto Medio: " . $singleElement["voto_medio"]; ?></p>
                                    <p><?="Linguaggio Preferito: " . $singleElement["linguaggio_preferito"]; ?></p>
                                    <img class="img-fluid" src="<?= $singleElement["immagine"]; ?>" alt="<?= $singleElement["nome"] ?>">
                                </li>
                            <?php }?>
                        </ul>
                    </section>
                <?php } ?>
            </div>
        </div>
    </main>
</body>
</html>