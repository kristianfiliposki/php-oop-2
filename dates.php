<?php 

    require_once __DIR__ . '/Models/prodotti.php';
    require_once __DIR__ . '/Models/alimenti.php';


    $prodotti = [
        $lettiera=new prodotto(
        "lettiera",
        "10€",
        "20/05/1992",
        "gatti",
    ),
    ];
    
    $cibo=[
        $croccantini=new cibo(
        "croccantini",
        "2€",
        "11/11/2001",
        "cani",
        "latte",
        "scandeza:11/12/2001"),

        $osso= new cibo(
            "osso",
            "100€",
            "17/5/1299",
            "cani",
            "osso,sale,pepe",
            "scadenza:17/5/2098",
        ),
        $gelatina= new cibo(
            "carne in scatola",
            "900€",
            "11/5/2009",
            "gatti",
            "carne tritata,sale,pepe,aceto,salsa bbq",
            "scadenza:17/5/2024",
        ),


    ];