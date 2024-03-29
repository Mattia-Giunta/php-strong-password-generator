<?php 

// Descrizione

// Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure.

// L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.

// Milestone 1
// Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
// Scriviamo tutto (logica e layout) in un unico file index.php

// Milestone 2
// Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale

// Milestone 3 (BONUS)
// Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente.

// Milestone 4 (BONUS)
// Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli. Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme).

// Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali.

// include_once __DIR__ . '/partials/function.php';

// $letters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
// $numbers = '0123456789';
// $symbols = '!@#$%^&*()_+-={}[]<>,./';

// if(isset($_GET['lunghezza'])){

//     $lunghezzaPassword = $_GET['lunghezza'];

//     $consentiDuplicazioni = $_GET['radio'];

//     echo generaPasword($lunghezzaPassword, $letters , $numbers , $symbols );

// }

session_start();




?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Srtong Password Generator</title>

</head>

<body data-bs-theme="dark">

    <main class="container text-center ">

        <div class="my-5 ">
            <h1>Strong Password Generator</h1>
            <h2>Genera una password Sicura</h2>
        </div>
        
        <!-- inizio del form -->
        <form action="succes.php" method="get">

            <div class="container d-flex justify-content-between p-5 border border-success rounded">

                <!-- selezione della lunghezza della password -->
                <div class="row g-3 align-items-center border border-success rounded p-4 ">

                    <div class="col-auto">
                    <label for="lunghezza" class="col-form-label">Lunghezza Password</label>
                    </div>

                    <div class="col-auto">
                    <input type="number" name="lunghezza" id="lunghezza" min="1" max="20" class="form-control" >
                    </div>

                </div>

                <!-- selezione della ripetizione dei caratteri -->
                <div class="row g-3 align-items-center border border-success rounded p-4  ">

                    <div class="col-auto">
                        <span>Consenti ripetizioni di uno o più caratteri</span> 
                    </div>

                    <div class="col-auto  form-check form-check-inline">

                        <input class="form-check-input" name="radio" type="radio" name="inlineRadioOptions" id="inputRipetitionYes" value="0" checked>
                        <label class="form-check-label" for="inputRipetitionYes">SI</label>

                    </div>

                    <div class=" col-auto form-check form-check-inline">

                        <input class="form-check-input" name="radio" type="radio" name="inlineRadioOptions" id="inputRipetitionNo" value="1">
                        <label class="form-check-label" for="inputRipetitionNo">NO</label>

                    </div>

                </div>

                <!-- selezione se includere lettere - numeri - simboli -->
                <div class="row g-3 align-items-center border border-success rounded p-4">

                    <div class="col-auto">
                        <input type="checkbox" name="checkLetter" id="inputLetter" class="form-check-input" >
                        <label for="inputLetter" class="form-check-label">Lettere</label>
                    </div>

                    <div class="col-auto">
                        <input type="checkbox" name="checkNumber" id="inputNumber" class="form-check-input" >
                        <label for="inputNumber" class="form-check-label">Numeri</label>
                    </div>

                    <div class="col-auto">
                        <input type="checkbox" name="checkSimbol" id="inputSimbol" class="form-check-input" >
                        <label for="inputSimbol" class="form-check-label">Simboli</label>
                    </div>

                </div>

                

            </div>

            <!-- bottoni per inviare o annullare -->
            <button type="submit" class="btn btn-primary" >Invia</button>

            <button class="btn btn-secondary" >Annulla</button>
            
        </form>
        

        <p>
            password generata:

            <h2><?= $_SESSION['password']; ?></h2>
        </p>





    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>