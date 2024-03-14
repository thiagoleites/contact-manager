# CRUD com Laravel e Tailwind CSS
### Este é um projeto básico de CRUD (Create, Read, Update, Delete) usando Laravel e Tailwind CSS.

## Pré-requisitos
### Certifique-se de ter o Docker e o Docker Compose instalados em seu sistema.

## Instruções de Uso

Clone o repositório:
```bash
git clone https://github.com/thiagoleites/contact-manager.git
```
Crie um arquivo de ambiente .env a partir do .env.example:
```bash
make env
```
Instale as dependências e prepare o ambiente:

```bash
make prepare
```
Inicie a aplicação:

```bash
make up
```
Execute as migrações do banco de dados:

```bash
make migrate
```
Popule o banco de dados (opcional):

```bash
make populate
```
Agora você pode acessar a aplicação em http://localhost

Comandos Makefile
- `make env`: Copia o arquivo .env.example para .env.
- `make prepare`: Executa o script de instalação de dependências.
- `make up`: Inicia a aplicação com Docker Compose.
- `make down`: Para a aplicação.
- `make update`: Atualiza as dependências do Composer.
- `make migrate`: Executa as migrações do banco de dados.
- `make populate`: Executa as migrações e popula o banco de dados com dados de exemplo.