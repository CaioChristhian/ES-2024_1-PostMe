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
