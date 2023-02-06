<?php
    include __DIR__ . '/models/prodotti.php';
    include __DIR__ . '/models/cibo.php';
    include __DIR__ . '/models/giochi.php';
    include __DIR__ . '/models/altro.php';

    echo "<pre>";

    // CIBO
    $cibo_1 = new Cibo('immagine', 'Royal Canin Mini Adult', 'Cane', '$43,99', '545g', 'prosciutto, riso');
    $cibo_2 = new Cibo('immagine', 'Almo Nature Holistic Maintenance Medium Large Tonno e Riso', 'Cane', '$44,99', '600g', 'manzo, cereali');
    $cibo_3 = new Cibo('immagine', 'Almo Nature Cat Daily Lattina', 'Gatto', '$34,99', '400g', 'tonno, pollo, prosciutto');
    $cibo_4 = new Cibo('immagine', 'Mangime per Pesci Guppy in Fiocchi', 'Pesce', '$2,95', '30g', 'Pesci e sottoprodotti dei pesci, Cereali, Lieviti, Alghe');

    // ALTRO
    $altro_1 = new Altro('immagine', 'Voliera Wilma in Legno', 'Uccello', '$184,99', 'M: L 83 x P 67 x H 153 cm', 'Legno');
    $altro_2 = new Altro('immagine', '', 'Pesce', '$2,29', 'ND', 'Materiale Espanso');

    // GIOCHI
    $giochi_1 = new Giochi('immagine', 'Kong Classic', 'Cane', '$13,49', '8,5cm x 10cm', 'Galleggia e Rimbalza');
    $giochi_2 = new Giochi('immagine', 'Topini di Peluche Trixie', 'Gatto', '$4,99', '8,5cm x 10cm', 'Morbido con codina in corda');

    echo "</pre>";
?>