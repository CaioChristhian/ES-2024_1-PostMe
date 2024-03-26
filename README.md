# Engenharia de Software - 2024.1 | Universidade Federal do Tocantins
## PostMe
### Descrição

O PostMe é uma plataforma inovadora que permite aos usuários expressarem-se livremente, publicando fotos e textos em um feed dinâmico e interativo. Seja você um fotógrafo amador querendo compartilhar suas últimas capturas, um escritor aspirante buscando uma audiência para seus textos, ou simplesmente alguém que deseja compartilhar pedaços do seu dia-a-dia, o PostMe é o lugar perfeito para você.
### Definindo os requisitos e seus colaboradores.
---
#### Primeiro commit
- RF01 - Realizar Login do Usuário. Por [Cayke Daniel Pereira Veras](https://github.com/cayke1)

- RF02 - Realizar Cadastro do Usuário. Por [Caio Christhian Lopes Silva](https://github.com/CaioChristhian)

- RF03 - Realizar Publicações. Por [Henrique Noronha Fernandes](https://github.com/henrique-noronha)

- RF04 - Editar Perfil. Por [Ykaro Silva](https://github.com/ykarosilva)

- RF05 - Listagem de Publicações no feed. Por [Eduardo Henrique Coelho Ramos](https://github.com/KiwiProgamador)

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
