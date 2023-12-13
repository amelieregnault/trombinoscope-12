<?php

// Récupérer ou calculer ou déclarer les données
include 'database.php';
$page_title = 'Trombinoscope';
$css = 'style1.css';

// Construire la vue et l'injecter dans la variable $content
ob_start();
include 'app/view/trombi.view.php';
$content = ob_get_clean();

// Génération du code HTML de la page à partir du layout
include 'app/view/common/layout.php';