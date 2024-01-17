<?php 

    require_once __DIR__ . '/Models/prodotti.php';
    require_once __DIR__ . '/Models/alimenti.php';


    $prodotti = [
        $lettiera=new prodotto(
        "lettiera",
        "https://www.zooplus.it/magazine/wp-content/uploads/2019/09/katzenstreu-vergleich-768x512.jpeg",
        "10€",
        "20/05/1992",
        "gatti",
    ),
    ];
    
    $cibo=[
        $croccantini=new cibo(
        "croccantini",
        "https://www.zooplus.it/magazine/wp-content/uploads/2019/09/katzenstreu-vergleich-768x512.jpeg",
        "2€",
        "11/11/2001",
        "cani",
        "latte",
        "scandeza:11/12/2001"),

        $osso= new cibo(
            "osso",
            "https://www.zooplus.it/magazine/wp-content/uploads/2019/09/katzenstreu-vergleich-768x512.jpeg",
            "100€",
            "17/5/1299",
            "cani",
            "osso,sale,pepe",
            "scadenza:17/5/2098",
        ),
        $gelatina= new cibo(
            "carne in scatola",
            "https://www.zooplus.it/magazine/wp-content/uploads/2019/09/katzenstreu-vergleich-768x512.jpeg",
            "900€",
            "11/5/2009",
            "gatti",
            "carne tritata,sale,pepe,aceto,salsa bbq",
            "scadenza:17/5/2024",
        ),


    ];