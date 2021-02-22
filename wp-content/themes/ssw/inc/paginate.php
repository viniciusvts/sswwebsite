<?php
/**
 * Funções relacionadas a paginação de produtos do Blog.
 *
 * @package SSW
 * @subpackage Paginate
 * @author Vinicius de Santana
 */

/**
 * Gera paginação dos posts, caso não seja passado o parametro irá pegar a variável global $wp_query.
 *
 * @param int $maxNumberPages numero de páginas da query
 * 
 * @return string|null Uma string conteno o link previo ou posterior da página
 * @author Vinicius de Santana
 * @example get_next_page_link( wp_query->max_num_pages);
 * @version 0.2.3
 */
function get_next_page_link($maxNumberPages=null) {
    global $wp_query;
    $maxNumberPages = $maxNumberPages ? $maxNumberPages : $wp_query->max_num_pages;
    $paged = isset( $_GET['sheet'] ) ? $_GET['sheet'] : null ;
    $HOST_ATUAL = "http://$_SERVER[HTTP_HOST]";
    $URI_ATUAL = "$_SERVER[REQUEST_URI]";
    
    /*variável para evitar que o numero de pagina seja confundido 
    com qualquer categoria que o usuário venha criar que contenha números*/
    $paramURL = "sheet=";
    //se o máximo de páginas for 1
    if($maxNumberPages <= 1) return null;
    //se tem pagina setada na url
    if(isset($paged)){
        //se é maior que quantidade total de páginas possiveis
        if($paged >= $maxNumberPages) return null;
        //se não
        $uri = str_replace($paramURL.$paged, $paramURL.($paged+1), $URI_ATUAL);
        return $HOST_ATUAL.$uri;
    }else{
        //verifica se tem ? na url, ou seja, se já tem parametros
        if(strpos($URI_ATUAL, "?") == false){
            return $HOST_ATUAL.$URI_ATUAL."?".$paramURL."2";
        }
        return $HOST_ATUAL.$URI_ATUAL."&".$paramURL."2";
    }
}

/**
 * Gera paginação dos posts, caso não seja passado o parametro irá pegar a variável global $wp_query.
 *
 * @param int $maxNumberPages numero de páginas da query
 * 
 * @return string|null Uma string conteno o link previo ou posterior da página
 * @author Vinicius de Santana
 * @example get_prev_page_link( wp_query->max_num_pages);
 * @version 0.2.3
 */
function get_prev_page_link($maxNumberPages=null) {
    global $wp_query;
    $maxNumberPages = $maxNumberPages ? $maxNumberPages : $wp_query->max_num_pages;
    $paged = isset( $_GET['sheet'] ) ? $_GET['sheet'] : null ;
    $HOST_ATUAL = "http://$_SERVER[HTTP_HOST]";
    $URI_ATUAL = "$_SERVER[REQUEST_URI]";
    
    /*variável para evitar que o numero de pagina seja confundido 
    com qualquer categoria que o usuário venha criar que contenha números*/
    $paramURL = "sheet=";
    //pedido de link prévio
    //se está na primeira página, nao tem pagina anterior
    if(!isset($paged) || $paged == 1) return null;
    //tome página
    $uri = str_replace($paramURL.$paged, $paramURL.($paged-1), $URI_ATUAL);
    return $HOST_ATUAL.$uri;
}