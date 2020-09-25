Laravel Github
======

Descrição
------
Projeto desenvolvido em **Laravel** utilizando a API do **Github**. Para a criação das views foi utilizado o Blade Template do Laravel e o **Bootstrap** e **JQuery**, você poderá listar os usuários do **Github** e buscar pelo nome de usuário, e ver os repositórios dos usuários, também poderá clonar os projetos.

Para as requisições HTTP foi utilizado o **CURL**, foi utilizado o design pattern **Repository**.

Instalação
------
Você precisará do **composer** e do **npm** para gerenciar as dependências.

Após clonar o projeto, instale as dependências do **PHP** com comando:
```bash
composer install
```

Para baixar as dependências do JavaScript **(Bootstrap, JQuery, ...)** utilize o comando:
```bash
npm install
```

E logo após utilize o comando:
```bash
npm run dev
```

Configurando as variaveis de ambiente
------
Para definir as variaveis de ambiente, abra o arquivo **.env.example** copie todo o conteudo e crie um arquivo na raiz do projeto com nome **.env** e cole o conteúdo dentro deste arquivo.

Para gerar o **APP_KEY** utilize o comando:
```bash
php artisan key:generate
```

Iniciar Servidor
------
Para utilizar o servidor local utilize o comando:
```bash
php artisan serve
```

Resultado
------

Screenshots

![Alt text](/../-/raw/master/screenshots/001.png?raw=true "001")
![Alt text](/../-/raw/master/screenshots/002.png?raw=true "002")
![Alt text](/../-/raw/master/screenshots/003.png?raw=true "003")
![Alt text](/../-/raw/master/screenshots/004.png?raw=true "004")
