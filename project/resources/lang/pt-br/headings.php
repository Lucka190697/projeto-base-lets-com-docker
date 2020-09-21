<?php
return [

    /**
     * Cabeçalhos, ítens do menu e breadcrumbs devem ficar neste arquivo.
     * Cabeçalhos com nome genérico devem começar com underline.
     */

    'Dashboard' => 'Painel',

    '_home' => 'Home',
    '_users' => 'Usuários',
    '_books' => 'Livros',
    '_loans' => 'Empréstimos',

    'Details' => 'Detalhes',
    'View books details' => 'Visualizar Livro',
    'Total Users' => 'Total de Usuários',
    'Total Collection' => 'Acervo Total',
    'Total Loans' => 'Total de Empréstimos',
    'Your loans' => 'Seus empréstimos',

    'All users who have access to the system' => 'Todos os usuários que têm acesso ao sistema',
    'All registered books' => 'Todos os livros registrados',
    'Loans from all users of the system' => 'Empréstimos de todos os usuários do sistema',
    'All loans linked to your account' => 'Todos os empréstimos atrelados á sua conta',

    'users' => [
        'index' => 'Usuários',
        'show' => 'Ver usuário',
        'edit' => 'Editar usuário',
        'create' => 'Cadastrar novo usuário',

        'name' => 'Nome',
        'email' => 'Email',
        'password' => 'Senha',
        'confirmPassword' => 'Confirmação de Senha',
    ],

    'books' => [
        'index' => 'Livros',
        'show' => 'Detalhes do Livro',
        'edit' => 'Editar Livro',
        'create' => 'Cadastrar novo livro',

        'Title' => 'Título',
        'Author' => 'Autor',
        'Owner' => 'Proprietário',
        'Giver' => 'Doador',
        'Entry Date' => 'Data da Entrada',

        'Collection' => 'Acervo',
    ],

    'loans' => [
        'index' => 'Livros',
        'show' => 'Detalhes do Livro',
        'edit' => 'Editar o empréstimo',
        'create' => 'Cadastrar um empréstimo',

        'loans_date' => 'Data do empréstimo',
        'return_date' => 'Data de devolução',
        'book' => 'Livro',
        'Entry Date' => 'Data da Entrada',
        'is loan' => 'estado',
        'User' => 'Usuário',

    ],
];
