# Engenharia de Software - 2024.1 | Universidade Federal do Tocantins
## PostMe
### Descrição

O PostMe é uma plataforma inovadora que permite aos usuários expressarem-se livremente, publicando fotos e textos em um feed dinâmico e interativo. Seja você um fotógrafo amador querendo compartilhar suas últimas capturas, um escritor aspirante buscando uma audiência para seus textos, ou simplesmente alguém que deseja compartilhar pedaços do seu dia-a-dia, o PostMe é o lugar perfeito para você.
### Definindo os requisitos e seus colaboradores.
---
#### Primeiro commit
- [X] RF01 - Realizar Login do Usuário. Por [Cayke Daniel Pereira Veras](https://github.com/cayke1) Revisado por @CaioChristhian

- [X] RF02 - Realizar Cadastro do Usuário. Por [Caio Christhian Lopes Silva](https://github.com/CaioChristhian) Revisado por @cayke1

- [X] RF03 - Realizar Publicações. Por [Henrique Noronha Fernandes](https://github.com/henrique-noronha) Revisado por @CaioChristhian

- [X] RF04 - Editar Perfil. Por [Caio Christhian Lopes Silva](https://github.com/CaioChristhian) Revisado por @cayke1

- [X] RF05 - Listagem de Publicações no feed. Por [Eduardo Henrique Coelho Ramos](https://github.com/KiwiProgamador) Revisado por @CaioChristhian

---

## RF01 - Realizar Login do Usuário

### Atributos

|Item|Descrição|
| -- |    -    |
|Caso de Uso| Realizar Login do Usuário|
|Resumo| Permitir que um usuário cadastrado acesse as funcionalidades do site através de seu login e senha. O processo de login deve ser seguro e acessível para o usuário.|
|Ator principal| Usuário cadastrado no site.|
|Pré-condição|O ator principal deve estar cadastrado no sistema com um nome de usuário válido e uma senha válida.|
|Pós-condição|O ator principal deve estar autenticado no sistema.|

### Descrição sucinta 
Realizar o login do usuário na plataforma.

### Fluxo principal
1. O usuário acessa o blog do PostMe e é apresentada a tela inicial.
2. Na tela inicial, o usuário encontra um formulário de login com campos para preencher com seu nome de usuário e senha.
3. Após preencher o formulário, clica no botão "Login".
4. O sistema verifica os dados fornecidos pelo usuário.
   - Se correto, ele é redirecionado para a página inicial, autenticado no sistema.
   - Se estiver incorreto, irá retornar mensagens de erro no formulário de login.

### Campos do formulário de login:

| Campo            | Obrigatório? | Editável? | Formato      |
|------------------|--------------|-----------|--------------|
| Nome de Usuário  | Sim          | Sim       | Texto        |
| Senha            | Sim          | Sim       | Alfanumérico |

### Opções do usuário
| Opção                 | Descrição                                                      |
|-----------------------|----------------------------------------------------------------|
| Login no sistema      | Permite ao usuário acessar o sistema utilizando suas credenciais.|

### Relatório do usuário
| Campo                    | Descrição                                                                       | Formato |
|--------------------------|---------------------------------------------------------------------------------|---------|
| Autenticado com sucesso  | Assegura o usuário do resultado positivo da autenticação no sistema.            | Texto   |

### Fluxo alternativo
1. O ator não possui uma conta no sistema.
2. O ator clica no botão "Criar uma conta" e é redirecionado para tela de cadastro conforme o RF02.

---

## RF02 - Realizar Cadastro do Usuário

### Atributos

|Item|Descrição|
| -- |    -    |
|Caso de Uso| Realizar Cadastro do Usuário|
|Resumo| Permitir que um usuário interessado em acessar as funcionalidades do site possa se cadastrar no sistema, desde que não tenha um cadastro prévio. O processo de cadastro deve ser acessível e intuitivo para o usuário.|
|Ator principal| Usuário interessado em acessar as suas funcionalidades no site em que faz atividade física.|
|Pré-condição|O ator principal deve conseguir se cadastrar, bem como acessar a plataforma. O ator precisa ter colocado seu nome de usuário válido. O ator precisa ter e-mail válido para continuar. O ator precisa criar uma senha com no mínimo 8 caracteres.|
|Pós-condição|O ator principal não deve ter um cadastro no sistema.|

## Descrição sucinta 
Realizar o cadastro do usuário na plataforma.

## Fluxo principal
Aqui está o texto sem a tabela:

1. O usuário acessa o blog do PostMe e é apresentada a tela inicial.
2. Na tela inicial, o usuário encontra um botão com o título “Criar uma conta” e clica nele para ir para a tela de cadastro.
3. Exibe um formulário de cadastro com campos para o usuário preencher com seus dados.
4. Após preencher o formulário, clica no botão "Cadastrar".
5. O sistema verifica os dados fornecidos pelo usuário.
   - Se correto, ele é redirecionado para a página inicial.
   - Se estiver incorreto, irá retornar mensagens de erro no formulário.

## Campos do formulário de cadastro:

| Campo            | Obrigatório? | Editável? | Formato      |
|------------------|--------------|-----------|--------------|
| Nome de Usuário  | Sim          | Sim       | Texto        |
| Email            | Sim          | Sim       | Texto        |
| Senha            | Sim          | Sim       | Alfanumérico |

## Opções do usuário
| Opção                 | Descrição                                                      |
|-----------------------|----------------------------------------------------------------|
| Cadastro no sistema   | Permite ao usuário se cadastrar no sistema.                    |
| Verificar os dados preenchidos | Permite ao usuário revisar os dados inseridos no formulário.   |

## Relatório do usuário
| Campo                    | Descrição                                                                       | Formato |
|--------------------------|---------------------------------------------------------------------------------|---------|
| Conta criada com sucesso | Assegura o usuário do resultado positivo do registro no sistema.                | Texto   |

## Fluxo alternativo
1. O ator já possui uma conta no sistema.
2. O ator clica no botão "Já tenho uma conta. Fazer Login." e é redirecionado para tela de Login.

---

## RF03 - Realizar Publicação

### Atributos

| Item            | Descrição                                                                                     |
|-----------------|-----------------------------------------------------------------------------------------------|
| Caso de Uso     | Realizar Publicação                                                                           |
| Resumo          | Permitir que os usuários publiquem fotos e textos em um feed dinâmico e interativo na plataforma. |
| Ator principal  | Usuário interessado em compartilhar conteúdo na plataforma PostMe.                            |
| Pré-condição    | - O ator principal deve estar autenticado na plataforma.                                      |
| Pós-condição    | A publicação deve ser exibida no feed da plataforma para todos os usuários.                   |

## Descrição sucinta 
Realizar a publicação de fotos e textos na plataforma.

## Fluxo principal

1. O usuário acessa a plataforma PostMe e faz login na sua conta.
2. Na página principal, o usuário encontra o botão "Nova Publicação" e clica nele.
3. Escolhe entre fazer uma publicação de texto ou de imagem.
4. Preenche os campos obrigatórios, como título (para textos) ou descrição (para imagens) e conteúdo.
5. Adiciona hashtags relevantes para ampliar a visibilidade da publicação.
6. Seleciona a opção de privacidade desejada (pública, privada ou apenas para amigos).
7. Clica em "Publicar" para compartilhar a publicação no feed da plataforma.

## Campos do formulário de publicação:

| Campo             | Obrigatório? | Editável? | Formato             |
|-------------------|--------------|-----------|---------------------|
| Título (para texto)| Sim          | Sim       | Texto               |
| Descrição (para imagem)| Sim       | Sim       | Texto               |
| Conteúdo           | Sim          | Sim       | Texto               |
| Hashtags           | Não          | Sim       | Texto separado por vírgulas |

## Opções do usuário

| Opção                 | Descrição                                                                       |
|-----------------------|---------------------------------------------------------------------------------|
| Publicar              | Permite ao usuário compartilhar sua publicação no feed da plataforma.           |
| Cancelar              | Permite ao usuário cancelar a criação da publicação e retornar ao feed principal.|

## Relatório do usuário

| Campo                    | Descrição                                                                       | Formato |
|--------------------------|---------------------------------------------------------------------------------|---------|
| Publicação realizada com sucesso | Confirma ao usuário que sua publicação foi compartilhada no feed da plataforma. | Texto   |

## Fluxo alternativo

1. O ator decide cancelar a publicação antes de clicar em "Publicar".
2. O ator clica no botão "Cancelar" e retorna ao feed principal sem publicar nada.

---

## RF04 - Editar Perfil do Usuário

### Atributos

|Item|Descrição|
| -- |    -    |
|Caso de Uso| Editar Perfil do Usuário|
|Resumo| Permitir que um usuário cadastrado e logado possa editar as informações de seu perfil no sistema. O processo de edição deve ser simples e intuitivo.|
|Ator principal| Usuário logado desejando atualizar suas informações pessoais.|
|Pré-condição|O ator principal deve estar logado no sistema. O ator precisa ter acesso à página de edição de perfil.|
|Pós-condição|	As informações do perfil do ator principal são atualizadas no sistema.|

## Descrição sucinta 
Permitir que o usuário atualize informações de seu perfil na plataforma.

## Fluxo principal
Aqui está o texto sem a tabela:

1. O usuário logado acessa a seção de perfil no site.
2. Na seção de perfil, o usuário encontra um botão ou link intitulado “Editar Perfil” e clica nele para acessar a tela de edição.
3. Exibe um formulário de edição de perfil com os campos preenchidos com as informações atuais do usuário.
4. O usuário atualiza as informações que deseja modificar.
5. Após realizar as alterações, clica no botão "Salvar Alterações".
6. O sistema verifica os dados fornecidos pelo usuário.
   - Se correto, as informações são atualizadas, e o usuário é redirecionado para a página de perfil com uma mensagem de sucesso.
   - Se estiver incorreto, irá retornar mensagens de erro no formulário.

## Campos do formulário de edição de perfil:

| Campo            | Obrigatório? | Editável? | Formato      |
|------------------|--------------|-----------|--------------|
| Nome de Usuário  | Sim          | Sim       | Texto        |
| Email            | Sim          | Sim       | Texto        |
| Senha            | Não          | Sim       | Alfanumérico |
| Foto de Perfil   | Não          | Sim       | Arquivo      |

## Opções do usuário
| Opção                 | Descrição                                                      |
|-----------------------|----------------------------------------------------------------|
| Salvar Alterações	   | Permite ao usuário salvar as alterações feitas no perfil.      |
| Cancelar              | Permite ao usuário cancelar as alterações e voltar ao perfil sem salvar. |

## Relatório do usuário
| Campo                         | Descrição                                                                       | Formato |
|-------------------------------|---------------------------------------------------------------------------------|---------|
| Alterações salvas com sucesso | Informa o usuário que as alterações no perfil foram salvas com sucesso.         | Texto   |

## Fluxo alternativo
1. O usuário decide não alterar nenhuma informação após acessar a tela de edição de perfil.
2. O usuário clica no botão ou link "Cancelar" e é redirecionado de volta ao seu perfil sem realizar alterações.

---

## RF05 - Listagem de Publicações no Feed

### Atributos

|Item|Descrição|
| -- |    -    |
|Caso de Uso| Visualizar as Publicações |
|Resumo| Permitir que os usuários visualizem uma lista de publicações no feed principal da plataforma, apresentando conteúdo diversificado compartilhado por outros usuários.|
|Ator principal| Usuário logado na plataforma.|
|Pré-condição| O usuário deve estar autenticado no sistema.|
|Pós-condição| O usuário visualiza as publicações no feed.|

## Descrição sucinta 
Exibir uma lista de publicações no feed principal da plataforma, permitindo que os usuários vejam conteúdo compartilhado por outros usuários.
 
## Fluxo principal
Aqui está o texto sem a tabela:

1. O usuário logado acessa a página inicial ou o feed da plataforma.
2. Na página inicial ou no feed, são exibidas as publicações mais recentes dos usuários que o usuário logado segue.
3. Cada publicação é apresentada com informações como autor, data de postagem, conteúdo da publicação (texto, imagem, ou ambos) e interações possíveis (curtidas, comentários, compartilhamentos).
4. O usuário pode interagir com as publicações, como curtir, comentar ou compartilhar.
5. O feed é atualizado periodicamente para exibir novas publicações e atualizações nas publicações existentes.

## Fluxo alternativoFluxo Alternativo
1. Não há novas publicações ou o usuário não segue nenhum outro usuário.
2. O feed pode exibir publicações recomendadas com base nos interesses do usuário, tendências da plataforma ou conteúdo popular.
   
## Planejamento e Conclusões
### Concluído até 27/03/2024
1. **Documentação em Markdown:** Adicionada ao repositório por [Caio Christhian](https://github.com/CaioChristhian/ES-2024_1-PostMe).
2. **Feature RF01 - [Login do Usuário](https://github.com/CaioChristhian/ES-2024_1-PostMe/tree/feature/RF01):** Documentação adicionada por [Cayke Daniel Pereira Veras](https://github.com/cayke1) e revisada por [Caio Christhian](https://github.com/CaioChristhian/ES-2024_1-PostMe/tree/feature/RF01).
3. **Feature RF02 - [Cadastro do Usuário](https://github.com/CaioChristhian/ES-2024_1-PostMe/tree/feature/RF02):** Documentação adicionada por [Caio Christhian Lopes Silva](https://github.com/CaioChristhian) e revisada por [Cayke Daniel Pereira Veras](https://github.com/cayke1).
4. **Feature RF03 - [Publicações](https://github.com/CaioChristhian/ES-2024_1-PostMe/tree/4b1c7e693bfa59e7ef738dcaffe54e9a84a94d1b):** Documentação adicionada por [Henrique Noronha Fernandes](https://github.com/henrique-noronha) e revisada por [Caio Christhian](https://github.com/CaioChristhian/ES-2024_1-PostMe/tree/4b1c7e693bfa59e7ef738dcaffe54e9a84a94d1b).
5. **Feature RF04 - [Editar Perfil](https://github.com/CaioChristhian/ES-2024_1-PostMe/tree/feature/RF04):** Documentação adicionada por [Caio Christhian Lopes Silva](https://github.com/CaioChristhian) e revisada por [Cayke Daniel Pereira Veras](https://github.com/cayke1).
6. **Feature RF05 - [Listagem de Publicações no Feed](https://github.com/CaioChristhian/ES-2024_1-PostMe/tree/feature/RF05):** Documentação adicionada por [Eduardo Henrique Coelho Ramos](https://github.com/Kiwitheprogrammer) e revisada por [Caio Christhian](https://github.com/CaioChristhian/ES-2024_1-PostMe/tree/feature/RF05).

### Concluído até 02/04/2024
1. **Planejamento no Draw.io:** Concluído por todos os membros do grupo.
   - [Link do planejamento no Draw.io](https://drive.google.com/file/d/11TrkXos6DFXIQ8DXCn1a3aGZc7uVvkC4/view)

### Concluído até 17/04/2024
1. **Nova Feature - [Tela de Login](https://github.com/CaioChristhian/ES-2024_1-PostMe/tree/feature/login):** Desenvolvida por [Cayke Daniel Pereira Veras](https://github.com/cayke1). Revisado por [Caio Christhian](https://github.com/CaioChristhian).
2. **Nova Feature - [Listagem de Posts](https://github.com/CaioChristhian/ES-2024_1-PostMe/tree/feature/home-listagem):** Desenvolvida por [Henrique Noronha Fernandes](https://github.com/henrique-noronha). Revisado por [Caio Christhian](https://github.com/CaioChristhian).
3. **Nova Feature - [Configuração do Banco de Dados](https://github.com/CaioChristhian/ES-2024_1-PostMe/tree/feature/config-database):** Desenvolvida por [Caio Christhian](https://github.com/CaioChristhian). Revisada por [Henrique Noronha Fernandes](https://github.com/henrique-noronha).

### Concluído até 06/05/2024
1. **Alteração [Index.php](https://github.com/CaioChristhian/ES-2024_1-PostMe/blob/develop/index.php):** Redirecionamento para login.php se o usuário não estiver logado, por [Eduardo Henrique](https://github.com/Kiwitheprogrammer).  Revisado por [Caio Christhian](https://github.com/CaioChristhian).
2. **Alteração [Register.php](https://github.com/CaioChristhian/ES-2024_1-PostMe/blob/develop/register.php):** Página simplificada para cadastro com link para login, por [Eduardo Henrique](https://github.com/Kiwitheprogrammer). Revisada por [Henrique Noronha Fernandes](https://github.com/henrique-noronha).
3. **Alteração [Login.php](https://github.com/CaioChristhian/ES-2024_1-PostMe/blob/develop/login.php):** Visual alterado e link para registro adicionado, por [Eduardo Henrique](https://github.com/Kiwitheprogrammer). Revisado por [Caio Christhian](https://github.com/CaioChristhian).

### Concluído até 14/05/2024
1. **Aprimorar a Documentação do Projeto:** Concluído por [Henrique Noronha Fernandes](https://github.com/henrique-noronha). Revisado por [Caio Christhian](https://github.com/CaioChristhian).

2.  **Simplificar a Iteração do Projeto:** Concluído por [Henrique Noronha Fernandes](https://github.com/henrique-noronha). Revisado por [Caio Christhian](https://github.com/CaioChristhian).

### Concluído até 21/05/2024
1. Restruturação da Aplicação para o [Padrão MVC](https://github.com/CaioChristhian/ES-2024_1-PostMe/tree/feature/refatorando-para-o-padrao-mvc) e adição de sessions à aplicação.  Desenvolvida por [Caio Christhian](https://github.com/CaioChristhian) e Revisada por [Henrique Noronha Fernandes](https://github.com/henrique-noronha).

   ### Links Úteis
- **Trello:** [Quadro do PostMe no Trello](https://trello.com/b/MxqWN374/postme)

