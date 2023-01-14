# API REST para Gerenciamento de Alunos

Este é um projeto de API REST desenvolvido em Laravel, destinado a gerenciar alunos de uma escola. Ele permite que você cadastre, edite, visualize e exclua informações de alunos.

## Requisitos
- PHP 7.4 ou superior
- MySQL
- Composer

## Instalação
1. Faça o clone do repositório para sua máquina local

```git clone https://github.com/SEUUSERNAME/seuprojeto.git```

2. Acesse o diretório do projeto e instale as dependências

```cd seuprojeto; composer install```

3. Copie o arquivo .env.example para .env e configure as informações de banco de dados
4. Execute as migrações para criar as tabelas no banco de dados

```php artisan migrate```

## Uso

A API possui rotas para gerenciamento de alunos, incluindo:
- Listar todos os alunos (GET /api/alunos)
- Cadastro de alunos (POST /api/alunos)
- Visualização de informações de alunos (GET /api/alunos/{id})
- Edição de informações de alunos (PUT /api/alunos/{id})
- Exclusão de alunos (DELETE /api/alunos/{id})

## Documentação da API
A documentação da API pode ser acessada a partir da rota /api/documentation.

## Contribuições
Este é um projeto open-source e contribuições são sempre bem-vindas.

Lembre-se de substituir "SEUUSERNAME" pelo seu usuário no GitHub no clone do repositório.
