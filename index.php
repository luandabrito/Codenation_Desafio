
    <?php
        
        $curl = curl_init("https://api.codenation.dev/v1/challenge/dev-ps/generate-data?token=d1f306a8fe35d34a048b53aaccca351a341643d1");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $json = curl_exec($curl);
        $f_json = json_decode($json);
        $fp = fopen("answer.json", "a");
        $frase = array("numero_casas"=>$f_json->{'numero_casas'},"token"=>$f_json->{'token'},"cifrado"=>$f_json->{'cifrado'},"decifrado"=>$f_json->{'decifrado'},"resumo_criptografico"=>$f_json->{'resumo_criptografico'});
        file_put_contents('answer.json', json_encode($frase));

        //transforma todos os caracteres em minusculos.
        $a = strtolower($frase["cifrado"]);
        //conta a quantidade de caracteres.
        $cont = strlen($frase["cifrado"]);
        //transforma a string em um vetor.
        $vetor = str_split($frase["cifrado"]);
        
        // transforma os caracteres em códigos da tabela ASCII
        for ($i=0; $i<$cont; $i++){
            $vetor[$i] = ord($vetor[$i]);
            if ($vetor[$i] >= 107 && $vetor[$i] <= 122){
                $vetor[$i] = $vetor[$i] - $frase['numero_casas'];
            }elseif($vetor[$i] >= 97 && $vetor[$i] <= 106){
                switch($vetor[$i]){
                    case 97:
                        $vetor[$i] = 113;
                        break;
                    case 98:
                        $vetor[$i] = 114;
                        break;
                    case 99:
                        $vetor[$i] = 115;
                        break;
                    case 100:
                        $vetor[$i] = 116;
                        break;
                    case 101:
                        $vetor[$i] = 117;
                        break;
                    case 102:
                        $vetor[$i] = 118;
                        break;
                    case 103:
                        $vetor[$i] = 119;
                        break;
                    case 104:
                        $vetor[$i] = 120;
                        break;
                    case 105:
                        $vetor[$i] = 121;
                        break;
                    case 106:
                        $vetor[$i] = 122;
                        break;
                }
            }
        }
        // transformar tabela em caractere.
        for ($c=0; $c<$cont; $c++){
            $vetor[$c] = chr($vetor[$c]);
        } 
        //transforma o vetor em uma string.
        $texto = implode("",$vetor);
        $cod = sha1($texto);

        $frase = array("numero_casas"=>$f_json->{'numero_casas'},"token"=>$f_json->{'token'},"cifrado"=>$f_json->{'cifrado'},"decifrado"=>$texto,"resumo_criptografico"=>$cod);
        file_put_contents('answer.json', json_encode($frase));
        

    ?>
