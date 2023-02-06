<?php
    include __DIR__ . '/models/prodotti.php';
    include __DIR__ . '/models/cibo.php';
    include __DIR__ . '/models/giochi.php';
    include __DIR__ . '/models/altro.php';

    // CIBO
    $cibo_1 = new Cibo('https://picsum.photos/200', 'Royal Canin Mini Adult', '<i class="fa-solid fa-dog"></i> Cane', '$43,99', '545g', 'prosciutto, riso');
    $cibo_2 = new Cibo('https://picsum.photos/200', 'Almo Nature Holistic Maintenance Medium Large Tonno e Riso', '<i class="fa-solid fa-dog"></i> Cane', '$44,99', '600g', 'manzo, cereali');
    $cibo_3 = new Cibo('https://picsum.photos/200', 'Almo Nature Cat Daily Lattina', ' <i class="fa-solid fa-cat"></i>Gatto', '$34,99', '400g', 'tonno, pollo, prosciutto');
    $cibo_4 = new Cibo('https://picsum.photos/200', 'Mangime per Pesci Guppy in Fiocchi', '<i class="fa-solid fa-fish"></i> Pesce', '$2,95', '30g', 'Pesci e sottoprodotti dei pesci, Cereali, Lieviti, Alghe');

    // ALTRO
    $altro_1 = new Altro('https://picsum.photos/200', 'Voliera Wilma in Legno', '<i class="fa-solid fa-dove"></i> Uccello', '$184,99', 'M: L 83 x P 67 x H 153 cm', 'Legno');
    $altro_2 = new Altro('https://picsum.photos/200', 'Cartucce Filtranti per Filtro EasyCrystal', '<i class="fa-solid fa-fish"></i> Pesce', '$2,29', 'ND', 'Materiale Espanso');

    // GIOCHI
    $giochi_1 = new Giochi('https://picsum.photos/200', 'Kong Classic', '<i class="fa-solid fa-dog"></i> Cane', '$13,49', '8,5cm x 10cm', 'Galleggia e Rimbalza');
    $giochi_2 = new Giochi('https://picsum.photos/200', 'Topini di Peluche Trixie', '<i class="fa-solid fa-cat"></i> Gatto', '$4,99', '8,5cm x 10cm', 'Morbido con codina in corda');

    // ARRAY CIBO
    $arrayCibo = [$cibo_1, $cibo_2, $cibo_3, $cibo_4];

    // ARRAY ALTRO
    $arrayAltro = [$altro_1, $altro_2];

    // ARRAY GIOCHI
    $arrayGiochi = [$giochi_1, $giochi_2];




?>