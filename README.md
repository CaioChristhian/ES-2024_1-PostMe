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
