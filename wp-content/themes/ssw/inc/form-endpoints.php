<?php
/**
 * Atende a requisição enviando um email com a informação do site
 * @author Vinicius de Santana
 */
function ssw_contato(){
  //send email
  $to = bloginfo( 'admin_email' );
  $subject = 'Formulário de contato';
  $message = criaMensagemPaginaDeContato($_POST);
  $headers = array('Content-Type: text/html; charset=UTF-8');
  $wpmail = wp_mail( $to, $subject, $message, $headers );
  // manda para a typ
  $url = bloginfo( 'url' ).'/'.'agradecimento-contato/';
  //vai para o url
  wp_redirect($url);
  exit;
}

// funções auxiliares da api
/**
 * Cria a mensagem dá página contato com os parametros passados
 * 
 * @param array $data - informações do formulário
 * @return string  - o html para enviar o email
 * @author Vinicius de Santana
*/
function criaMensagemPaginaDeContato($data){
  // inicio mensagem
  $message = '<div style="font-family: Arial, sans-serif;margin: 40px auto;width: 550px;">';
  $message .=   '<table>';
  $message .=     '<tbody><tr>';
  $message .=     '<td><img src="'.bloginfo( "url" ).'/wp-content/themes/ssw/img/sswLogo.svg" width="100" height="100"></td>';
  $message .=     '<td><h1 style="margin-left: 30px;font-weight: 800;margin-bottom: 0;">Solicitação de Contato</h1>';
  $message .=     '<h3 style="font-weight: 100;margin-left: 30px;margin-top: 0;">Site</h3></td>';
  $message .=     '</tr></tbody>';
  $message .=   '</table>';
  $message .=   '<table style="font-family: Arial, sans-serif;background-color: #eee;margin: 20px 40px 50px 40px;border-radius: 6px;min-width: 450px;">';
  $message .=     '<tbody>';
  foreach ($data as $key => $value) {
    $message .=     '<tr>';
    $message .=       '<td style="padding: 10px 20px;width: 60px">';
    $message .=         $key;
    $message .=       ':</td>';
    $message .=       '<td style="padding: 10px 20px; font-size: 18px;">';
    $message .=         $value;
    $message .=       '</td>';
    $message .=     '</tr>';
  }
  $message .=     '</tbody>';
  $message .=   '</table>';
  $message .=   '<p style="font-family: Arial, sans-serif;font-weight: 100;font-style: italic;">Enviado pelo site.</p>';
  $message .= '</div>';
  return $message;
  // fim mensagem
}

/**
 * Função registra os endpoints
 * @author Vinicius de Santana
 */
function ssw_register_form_endpoints(){
  //cntato form
  register_rest_route('ssw_theme/v1',
    '/formcontato',
    array(
      'methods' => 'POST',
      'callback' => 'ssw_contato',
      'description' => 'recebe as informações do form e envia para o email',
      'permission_callback' => '__return_true',
      'args' => array(
        'email' => array(
          'required' => true,
        ),
      )
    )
  );
}

add_action('rest_api_init', 'ssw_register_form_endpoints');