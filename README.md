## API REST para Gerenciamento de Alunos

Este é um projeto de API REST desenvolvido em Laravel, destinado a gerenciar alunos de uma escola. Ele permite que você cadastre, edite, visualize e exclua informações de alunos.

## Requisitos
PHP 7.4 ou superior
MySQL
Composer
Instalação
Faça o clone do repositório para sua máquina local
Copy code
git clone https://github.com/SEUUSERNAME/seuprojeto.git
Acesse o diretório do projeto e instale as dependências
Copy code
cd seuprojeto
composer install
Copie o arquivo .env.example para .env e configure as informações de banco de dados
Gere uma chave para sua aplicação
Copy code
php artisan key:generate
Execute as migrações para criar as tabelas no banco de dados
Copy code
php artisan migrate
Uso
A API possui rotas para gerenciamento de alunos, incluindo:

Cadastro de alunos (POST /api/alunos)
Visualização de informações de alunos (GET /api/alunos/{id})
Edição de informações de alunos (PUT/PATCH /api/alunos/{id})
Exclusão de alunos (DELETE /api/alunos/{id})
Documentação da API
A documentação da API pode ser acessada a partir da rota /api/documentation.

Contribuições
Este é um projeto open-source e contribuições são sempre bem-vindas. Por favor, siga as diretrizes de contribuição no arquivo CONTRIBUTING.md antes de enviar uma pull request.
