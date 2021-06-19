 <?php

function maisculo($string)
{
//strtoupper = Passa todos os caracteres não acentuados para maiúsculo.
    $string = strtoupper ($string);

//str_replace = Faz substituição dos caracteres minúsculos acentuados para maiúsculos.
    $string = str_replace ("á", "Á", $string);
    $string = str_replace ("é", "É", $string);
    $string = str_replace ("í", "Í", $string);
    $string = str_replace ("ó", "Ó", $string);
    $string = str_replace ("ú", "Ú", $string);
    $string = str_replace ("â", "Â", $string);
    $string = str_replace ("ê", "Ê", $string);
    $string = str_replace ("î", "I", $string);
    $string = str_replace ("ô", "Ô", $string);
    $string = str_replace ("Î", "I", $string);
    $string = str_replace ("Û", "U", $string);
    $string = str_replace ("ã", "Ã", $string);
    $string = str_replace ("õ", "Õ", $string);
    $string = str_replace ("ç", "Ç", $string);
    $string = str_replace ("à", "À", $string);

// return = Retorna os dados da função.
return $string;
}
//$nome é onde armazenamos o valor que queremos transformar em maiúsculo.
$nome = "José Antônio";

//O retorno da função foi atribuido a $nome que agora está setado para maiúsculo.
$nomeMaiusculo = maisculo($nome);

//Imprime o resultado final (JOSÉ ANTÔNIO).
echo "Nome é $nomeMaiusculo";

?>
