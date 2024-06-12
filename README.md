# Matrícula de Alunos

O projeto consiste na criação de um sistema de cadastro de alunos usando o PDO do PHP. 

# Instalação

```bash
# Comando para instalar as depêndencias (lembrando o composer precisa está instalado)
composer install

# Criar o banco de dados e suas tabelas
php conexao.php

# Rodar o Dockerfile
docker build -t escola-de-aluno-php-e-pdo

# Para rodar os arquivos 
php <nome-do-arquivo-desejado>
