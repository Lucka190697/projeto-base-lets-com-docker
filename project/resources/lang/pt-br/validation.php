<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attribute deve ser aceito.',
    'active_url' => ':attribute não é uma URL válida.',
    'after' => ':attribute deve ser uma data depois de :date.',
    'after_or_equal' => ':attribute deve ser uma data posterior ou igual a :date.',
    'alpha' => ':attribute deve conter somente letras.',
    'alpha_dash' => ':attribute deve conter letras, números e traços.',
    'alpha_num' => ':attribute deve conter somente letras e números.',
    'array' => ':attribute deve ser um array.',
    'before' => ':attribute deve ser uma data antes de :date.',
    'before_or_equal' => ':attribute deve ser uma data anterior ou igual a :date.',
    'between' => [
        'numeric' => ':attribute deve estar entre :min e :max.',
        'file' => ':attribute deve estar entre :min e :max kilobytes.',
        'string' => ':attribute deve estar entre :min e :max caracteres.',
        'array' => ':attribute deve ter entre :min e :max itens.',
    ],
    'boolean' => ':attribute deve ser verdadeiro ou falso.',
    'confirmed' => 'A confirmação de :attribute não confere.',
    'date' => ':attribute não é uma data válida.',
    'date_format' => ':attribute não confere com o formato :format.',
    'different' => ':attribute e :other devem ser diferentes.',
    'digits' => ':attribute deve ter :digits dígitos.',
    'digits_between' => ':attribute deve ter entre :min e :max dígitos.',
    'dimensions' => ':attribute tem dimensões de imagem inválidas.',
    'distinct' => ':attribute tem um valor duplicado.',
    'email' => ':attribute deve ser um endereço de e-mail válido.',
    'exists' => ':attribute selecionado é inválido.',
    'file' => ':attribute deve ser um arquivo.',
    'filled' => ':attribute é um campo obrigatório.',
    'image' => ':attribute deve ser uma imagem.',
    'in' => ':attribute é inválido.',
    'in_array' => ':attribute não existe em :other.',
    'integer' => ':attribute deve ser um inteiro.',
    'ip' => ':attribute deve ser um endereço IP válido.',
    'ipv4' => ':attribute deve ser um endereço IPv4 válido.',
    'ipv6' => ':attribute deve ser um endereço IPv6 válido.',
    'json' => ':attribute deve ser um JSON válido.',
    'max' => [
        'numeric' => ':attribute não deve ser maior que :max.',
        'file' => ':attribute não deve ter mais que :max kilobytes.',
        'string' => ':attribute não deve ter mais que :max caracteres.',
        'array' => ':attribute não deve ter mais que :max itens.',
    ],
    'mimes' => ':attribute deve ser um arquivo do tipo: :values.',
    'mimetypes' => ':attribute deve ser um arquivo do tipo: :values.',
    'min' => [
        'numeric' => ':attribute deve ser no mínimo :min.',
        'file' => ':attribute deve ter no mínimo :min kilobytes.',
        'string' => ':attribute deve ter no mínimo :min caracteres.',
        'array' => ':attribute deve ter no mínimo :min itens.',
    ],
    'not_in' => 'O :attribute selecionado é inválido.',
    'numeric' => ':attribute deve ser um número.',
    'present' => 'O campo :attribute deve ser presente.',
    'regex' => 'O formato de :attribute é inválido.',
    'required' => 'O campo :attribute é obrigatório.',
    'required_if' => 'O campo :attribute é obrigatório quando :other é :value.',
    'required_unless' => 'O :attribute é necessário a menos que :other esteja em :values.',
    'required_with' => 'O campo :attribute é obrigatório quando :values está presente.',
    'required_with_all' => 'O campo :attribute é obrigatório quando :values estão presentes.',
    'required_without' => 'O campo :attribute é obrigatório quando :values não está presente.',
    'required_without_all' => 'O campo :attribute é obrigatório quando nenhum destes estão presentes: :values.',
    'same' => ':attribute e :other devem ser iguais.',
    'size' => [
        'numeric' => ':attribute deve ser :size.',
        'file' => ':attribute deve ter :size kilobytes.',
        'string' => ':attribute deve ter :size caracteres.',
        'array' => ':attribute deve conter :size itens.',
    ],
    'string' => ':attribute deve ser uma string',
    'timezone' => ':attribute deve ser uma timezone válida.',
    'unique' => ':attribute já está em uso.',
    'uploaded' => ':attribute falhou ao ser enviado.',
    'url' => 'O formato de :attribute é inválido.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [

        /* USER */
        'name' => [
            'required' => 'Digite o nome',
            'max' => 'O nome deve ter no máximo 255 caracteres',
            'min' => 'O nome deve ter no mínimo 5 caracrere',
        ],
        'email' => [
            'required' => 'Digite o email',
            'email' => 'Digite um email válido',
            'unique:users,email' => 'Digite um email válido',
        ],
        'password' => [
            'string' => 'Digite uma senha válida',
            'confirmed' => 'As senhas devem coincidir',
            'min' => 'A senha deve conter no mínimo 8 caracteres',
            'max' => 'A senha deve conter no máximo 255 caracteres',
        ],
        /* BOOK */
        'isbn' => [
            'required' => 'Digite o ISBN',
            'unique' => 'Este código o ISBN já existe',
            'min' => 'ISBN deve ter no mínimo 13 caracteres',
            'max' => 'ISBN deve ter no máximo 255 caracteres',
        ],
        'title' => [
            'required' => 'Preencha o título',
            'min' => 'O titulo precisa ter no mínimo 3 caracteres',
            'max' => 'O titulo precisa ter no maximo 255 caracteres',
        ],
        'author' => [
            'required' => 'Preencha o autor',
            'min' => 'O autor precisa ter no mínimo 3 caracteres',
            'max' => 'O autor precisa ter no maximo 255 caracteres',
        ],
        'giver' => [
            'required' => 'Preencha o doador',
            'min' => 'O doador precisa ter no mínimo 3 caracteres',
            'max' => 'O doador precisa ter no maximo 255 caracteres',
        ],
        'entryDate' => [
            'required' => 'Digite a data de entrada',
            'date_format' => 'Digite uma data válida, exemplo: 19/09/2020',
            'after_or_equal' => 'Selecione uma data posterior ou igual a 31/12/2050 ',
            'before_or_equal' => 'Selecione uma data anterior ou igual a hoje'
        ],

        /* LOANS */
        'loans_date' => [
            'required' => 'Selecione a data do empréstimo',
            'date_format' => 'Digite uma data válida, exemplo: 19/09/2020',
            'before_or_equal' => 'Selecione uma data anterior ou igual a de hoje',
        ],
        'return_date' => [
            'required' => 'Digite a data de devolução',
            'date_format' => 'Digite uma data válida, exemplo: 19/09/2020',
            'after_or_equal' => 'A data de devolução não pode ser antes da data do emréstimo',
        ],
        'book_id' => [
            'required' => 'Selecione o livro',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [

        //USER
        'name' => 'Campo nome',
        'email' => 'Email',
        'password' => 'A senha',

        //BOOKS
        'isbn' => 'ISBN',
        'title' => 'título',
        'author' => 'autor',
        'giver' => 'doador',
        'entryDate' => 'data de entrada',

        //LOANS
        'loans_date' => 'data do emprestimo',
        'return_date' => 'data de devolução',
        'book_id' => 'livro',
    ],
];
