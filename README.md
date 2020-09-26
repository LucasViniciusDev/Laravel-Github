Laravel Github
======

Descrição
------
Você poderá listar os usuários do **Github**, buscar pelo nome de usuário, e ver os repositórios dos usuários, também poderá clonar os projetos.

Projeto foi desenvolvido em **Laravel** utilizando a API do **Github**. Para a criação das views foi utilizado o **Blade Template** do Laravel, **Bootstrap** e **JQuery**.

Para as requisições HTTP são feitas no **back-end** utilizando o **CURL**. 

Foi utilizado o design pattern **Repository**.

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
Para configurar as variaveis de ambiente, abra o arquivo **.env.example** e copie todo o conteudo, crie um novo arquivo na raiz do projeto com nome **.env** e cole o conteúdo dentro deste arquivo.

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

001
![Alt text](https://github.com/LucasViniciusDev/Laravel-Github/blob/master/screenshots/001.PNG "001")

002
![Alt text](https://github.com/LucasViniciusDev/Laravel-Github/blob/master/screenshots/002.PNG "002")

003
![Alt text](https://github.com/LucasViniciusDev/Laravel-Github/blob/master/screenshots/003.PNG "003")

004
![Alt text](https://github.com/LucasViniciusDev/Laravel-Github/blob/master/screenshots/004.PNG "004")

Laravel Github2
------
Este outro projeto foi desenvolvido de forma parecida, com diferença que as chamadas HTTP foram feitas no **front-end** utilizando o **fetch** do **JavaScript**.<br>
Link do projeto: https://github.com/LucasViniciusDev/Laravel-Github2
