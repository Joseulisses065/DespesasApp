 ![Thumbnail GitHub](./public/img/tumbnail.png)

![](https://img.shields.io/github/license/alura-cursos/android-com-kotlin-personalizando-ui)

# Orgs

 Um projeto de uma aplicação de cálculo de despesas de maneira descomplicada, utilizando o framework Laravel.

## 🔨 Funcionalidades do projeto

O aplicativo apresenta uma calculadora de custos simplificada, permitindo a fácil inserção de entradas e saídas financeiras. Por meio desses dados, é realizado o cálculo do gasto total, somado ao montante depositado. O aplicativo exibe de maneira clara o valor restante após a dedução das despesas. Tudo isso é apresentado por meio de um layout simples e responsivo, proporcionando uma experiência de uso intuitiva e acessível em diferentes dispositivos.

![](img/amostra.gif)

## ✔️ Técnicas e tecnologias utilizadas

As técnicas e tecnologias utilizadas pra isso são:


- `Rotas`: Configure rotas para direcionar solicitações aos métodos apropriados nos controladores.
- `Eloquent ORM`:  Permite mapear objetos do PHP aos registros do banco de dados, facilitando operações de consulta e manipulação
- `Personalização de tema`: modificação de cores para o tema do App
- `HTML`: inguagem de marcação utilizada na construção de páginas na Web
- `CSS`: (Cascading Style Sheets ou Folhas de Estilo em Cascata) é uma linguagem de estilo
- `JavaScript`:linguagem de programação interpretada estruturada

## 🎯 Desafio

Tela de detalhes do produto versão web

![orgs-desafio-detalhes](./public/img/tela_desktop.png)

Tela de detalhes do produto versão mobile

![orgs-desafio-detalhes](./public/img/tela_mobile.png)



## 📁 Acesso ao projeto

Você pode [acessar o código fonte do projeto inicial](https://github.com/Joseulisses065/DespesasApp) 

## 🛠️ Abrir e rodar o projeto

### Clone esse repositorio
```
git clone https://github.com/Joseulisses065/DespesasApp

```


### Copie o arquivo env.example e renomeie para .env
```
cp .env.example .env
```

### Instale as dependencias do PHP
```
composer install
```
### Gere uma chave
```
php artisan key:generate
```

### Instale as dependencias do Front-end
```
npm install && npm run build
```
### Execute as migrations
```
php artisan migrate
```

### Execute o servidor
```
php artisan serve
```