<?php

function formatarCPF($cpf)
{

    if (is_string($cpf)) {
        echo "digite apenas números";
    }

    if (strlen($cpf) === 11) {
        $cpfFormatado = substr($cpf, 0, 3) . '.' . 
                        substr($cpf, 3, 3) . '.' . 
                        substr($cpf, 6, 3) . '-' . 
                        substr($cpf, 9, 2);
    }

    echo $cpfFormatado;
}

formatarCPF(12345678901);
