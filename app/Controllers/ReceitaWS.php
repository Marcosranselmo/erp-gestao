<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class ReceitaWS extends Controller
{
    public function pegaDadosDoCNPJ()
    {
        //Capturar CNPJ
        $cnpj = $this->request->getvar('cnpj');

        //Garantir que seja lido sem problemas
        header("Content-Type: text/plain");

        //Criando Comunicação cURL
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://www.receitaws.com.br/v1/cnpj/$cnpj");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $retorno = curl_exec($ch);
        curl_close($ch);

        echo $retorno;
    }
}