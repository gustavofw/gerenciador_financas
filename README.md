# Gerenciador de Finanças Pessoais

Sistema web para controle de receitas e despesas pessoais, desenvolvido com o framework CodeIgniter 4 e banco de dados PostgreSQL. A aplicação permite cadastrar usuários, categorias e transações, além de exibir um dashboard com saldo financeiro.

---

## Funcionalidades

- Cadastro e login de usuários
- CRUD de categorias (receita ou despesa)
- CRUD de transações financeiras
- Dashboard com:
  - Total de receitas
  - Total de despesas
  - Saldo atual
- Validação de acesso por sessão
- Layout reutilizável com cabeçalho e rodapé
- Integração com banco de dados PostgreSQL

---

## Estrutura do Projeto (MVC)

- Controllers: `Login`, `Home`, `Categoria`, `Transacao`
- Models: `UsuarioModel`, `CategoriaModel`, `TransacaoModel`
- Views organizadas por pasta:
  - `Views/home`
  - `Views/categorias`
  - `Views/transacoes`
  - `Views/layout` (header.php, footer.php)

---

## Requisitos e Dependências

### Requisitos

- PHP 8.0 ou superior
- Composer
- PostgreSQL
- Extensões PHP ativadas:
  - intl
  - pgsql

### Como habilitar extensões PHP (XAMPP)

Abra o arquivo `php.ini` e remova o ponto e vírgula (`;`) das seguintes linhas:

extension=pgsql
extension=intl


Depois, reinicie o Apache no painel do XAMPP.

---

## Instalação do Projeto

### Passos

```bash
# 1. Clonar o projeto
git clone https://github.com/seu-usuario/seu-repo.git
cd gerenciador-financas

# 2. Instalar dependências com o Composer
composer install

# 3. Copiar e configurar o arquivo .env
cp env .env
# Edite o .env com os dados corretos de conexão com o banco PostgreSQL

# 4. Gerar a chave do projeto
php spark key:generate

# 5. Iniciar o servidor de desenvolvimento
php spark serve

Acesse o sistema em:

http://localhost:8080
Configuração de Banco de Dados
A configuração da conexão com o banco de dados PostgreSQL é feita no arquivo .env na raiz do projeto:

database.default.hostname = localhost
database.default.database = gerenciador
database.default.username = postgres
database.default.password = sua_senha
database.default.DBDriver = Postgre
database.default.port = 5432
database.default.charset = utf8

Autor
Desenvolvido por Gustavo Wildner e Luiz Augusto Lise – Projeto acadêmico com foco em arquitetura MVC, integração com banco de dados PostgreSQL e uso de ORM com CodeIgniter 4.