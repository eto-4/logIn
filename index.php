<?php 

require_once "includes/header.php";
?>

<!-- Montserrat: CSS class for a variable style

// <weight>: Use a value from 100 to 900
// <uniquifier>: Use a unique and descriptive class name

.montserrat-<uniquifier> {
  font-family: "Montserrat", sans-serif;
  font-optical-sizing: auto;
  font-weight: <weight>;
  font-style: normal;
}
Noto Sans: CSS class for a variable style

// <weight>: Use a value from 100 to 900
// <uniquifier>: Use a unique and descriptive class name

.noto-sans-<uniquifier> {
  font-family: "Noto Sans", sans-serif;
  font-optical-sizing: auto;
  font-weight: <weight>;
  font-style: normal;
  font-variation-settings:
    "wdth" 100;
} -->

<main>

    <div>
        <h1>
            Benvingut al nostre registre d'usuaris!
        </h1>
        <div class="pContainer">
            <p>
            En aquesta pàgina hi ha un formulari de registre d'usuari amb validació al servidor.
            El sistema manté les dades introduïdes en cas d'error i mostra els missatges d'error corresponents.
            Si totes les dades són correctes, es mostrarà un resum en una pàgina de resultat.
            </p>
        </div>
    </div>

</main>

<?php require_once "includes/footer.php"?>

