<?php

namespace Alura\Solid\Service;

use Alura\Solid\Interface\Pontuavel;

class Assistidor
{
    public function assistir(Pontuavel $conteudo)
    {
        $conteudo->assistir();
    }
}
