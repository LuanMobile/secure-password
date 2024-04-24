# Validação de Senha

O desafio consiste em um serviço que valida se uma senha é considerada segura com base em critérios pré-definidos.

## Exemplo

Seu serviço recebe uma chamada para validar uma senha. Use o Postman ou a ferramenta de teste de sua preferência para testar a API.

**[POST]** `{{host}}/validate-password`

```json
{
    "password": "vYQIYxO&p$yfI^r"
}
```

Se a senha atender a todos os critérios de segurança, então, seu serviço deve retornar uma resposta de sucesso <code>HTTP/1.1 204 NoContent</code>.

Caso contrário, retorne uma mensagem com o status <code>HTTP/1.1 400 Bad Request</code> informando quais critérios não foram atendidos. Você pode escolher como será sua
estrutura para as mensagens de erro.

```json
{
    ...
}
```

## Requisitos

- Verificar se a senha possui pelo menos 08 caracteres.
- Verificar se a senha contém pelo menos uma letra maiúscula.
- Verificar se a senha contém pelo menos uma letra minúscula.
- Verificar se a senha contém pelo menos um dígito numérico.
- Verificar se a senha contém pelo menos um caractere especial (e.g, !@#$%).

Repositório do desafio: <https://github.com/backend-br/desafios/blob/master/secure-password/PROBLEM.md>
