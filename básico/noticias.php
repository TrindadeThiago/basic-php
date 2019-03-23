<?php
    $noticias = array();

    $noticias[1]['titulo'] = 'Título da notícia 1';
    $noticias[1]['conteudo'] = 'Todo o conteúdo da notícia 1';

    $noticias[2]['titulo'] = 'Título da notícia 2';
    $noticias[2]['conteudo'] = 'Todo o conteúdo da notícia 2';

    $noticias[3]['titulo'] = 'Título da notícia 3';
    $noticias[3]['conteudo'] = 'Todo o conteúdo da notícia 3';

    $noticias[4]['titulo'] = 'Título da notícia 4';
    $noticias[4]['conteudo'] = 'Todo o conteúdo da notícia 4';

    for($idx = 1; $idx <=3; $idx++){
        echo $noticias[$idx]['titulo'];
        echo '<br/>';
        echo $noticias[$idx]['conteudo'];
        echo '<br/>';
    }
?>