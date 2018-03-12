<?php


function default_editor_content( $content, $post ) {

    switch( $post->post_type ) {
        case 'quartos':
            $content = '&nbsp; &nbsp; &nbsp;';
            $content .= '<p class="dc-alert" style="color: #9a9a9a;">';
            $content .= 'Atenção, não altere daqui para baixo a menos que queira apagar os ícones exibidos no quarto. Caso apague por acidente, delete este arquivo e comece novamente que esse conteúdo aparecerá por padrão.
                        Este texto não será exibido</p>';

            $content .= '<div class="row row--dc auto gutters">';
                $content .= '<div class="col"';
                $content .= '<p class="m0 text-center"><span class="material-icons">wifi</span><br>WiFi</p>';
                $content .= '</div>';

                $content .= '<div class="col"';
                $content .= '<p class="m0 text-center"><span class="material-icons">directions_car</span><br>Estacionamento Gratuito</p>';
                $content .= '</div>';

                $content .= '<div class="col"';
                $content .= '<p class="m0 text-center"><span class="material-icons">panorama_vertical</span><br>Toalhas de Banho</p>';
                $content .= '</div>';

                $content .= '<div class="col"';
                $content .= '<p class="m0 text-center"><span class="material-icons">pool</span><br> Piscina</p>';
                $content .= '</div>';
            $content .= '</div>';
           
        break;
        
    }

    return $content;
}

add_filter( 'default_content', 'default_editor_content', 10, 2 );