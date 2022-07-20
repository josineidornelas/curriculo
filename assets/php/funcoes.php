<?php 

function calculaIdade() {
    $dataNascimento = '1989-09-21';
    $data = new DateTime($dataNascimento);
    $resultado = $data->diff( new DateTime( date('Y-m-d') ) );
    return $resultado->format( '%Y' );
}