---
title: Aprendendo Laravel na Prática - Live Series
description: Nesta série, vamos aprender Laravel na prática, desenvolvendo um aplicativo do zero.
cover_image: https://eheidi.dev/images/laravel_na_pratica.png
---

[Laravel](https://laravel.com) é um framework PHP e também um completo ecosistema composto por vários serviços tais como [Forge](https://forge.laravel.com/), [Vapor](https://vapor.laravel.com/), [Cashier](https://laravel.com/docs/7.x/billing), dentre outros.

Nessa série de live streams começando dia 01/07, vamos criar [uma aplicação Laravel](https://github.com/erikaheidi/sponsorshub) do zero, começando com a configuração de um ambiente de desenvolvimento Laravel com Docker Compose.

Esta página será atualizada com os vídeos da série e materiais auxiliares tais como links para tutoriais relacionados, documentação e código do aplicativo que vamos criar.

## Repositório e Branches

A aplicação chama-se **SponsorsHub**, é open source e está disponível no Github: [https://github.com/erikaheidi/sponsorshub](https://github.com/erikaheidi/sponsorshub). 

Importante:
- A branch **main** contém o código mais atual do projeto, de acordo com o último episódio.
- Cada episódio tem uma branch específica para quem quer acompanhar passo a passo.

Primeiro, clone o projeto com:

```bash
git clone https://github.com/erikaheidi/sponsorshub.git
```

Após clonar o projeto, você pode navegar até a branch do episódio com um `git checkout`. Por exemplo, para ver o código que fizemos no primeiro episódio (`episodio-01`):

```bash
git checkout episodio-01
```

Mais informações sobre como rodar o projeto na sua máquina podem ser encontradas no [README do projeto](https://github.com/erikaheidi/sponsorshub/blob/episodio-01/README.md).

## Como Participar

As lives acontecerão na [Twitch](https://twitch.tv/erikaheidi), toda quarta-feira às 10h (horário de Brasília). Cada sessão terá 1 hora de duração, e os vídeos serão depois disponibilizados nesta página.

### Pré Requisitos

Para reproduzir os comandos e a estrutura que vamos usar na live, você vai precisar de:

- [Docker](https://www.digitalocean.com/community/tutorials/how-to-install-and-use-docker-on-ubuntu-20-04)
- [Docker Compose](https://www.digitalocean.com/community/tutorials/how-to-install-and-use-docker-compose-on-ubuntu-20-04)

Opcional, mas recomendado:

- PHP-cli
- [Composer](https://www.digitalocean.com/community/tutorials/how-to-install-and-use-composer-on-ubuntu-20-04)

Meu setup usa uma máquina local Ubuntu 18.04 rodando Docker e Docker Compose, mas também com um ambiente básico PHP na linha de comando para rodar comandos do (PHP) Composer.

### Planejamento / Tópicos que iremos abordar
_A ordem dos tópicos pode mudar, mas essa lista dá uma idéia geral do que iremos trabalhar._

1. Configuração de ambiente de desenvolvimento usando Docker Compose [Finalizado]
2. Trabalhando com templates blade e criando um layout baseado no framework CSS [Bulma](https://bulma.io/)
3. Autenticação usando workflow OAuth e a facade `Auth` do Laravel
4. Migrações de banco de dados e seeders
5. Trabalhando com o Eloquent ORM
6. Usando a API do Github
7. Upload de arquivos


## Episódios

### Episódio 1: Bootstrap da Aplicação e Criação de Ambiente de Desenvolvimento com Docker Compose
_Quarta-feira, 01 de Julho_

{% youtube NcUT0gNRz_o %}

Materiais de Apoio:

- [Tutorial do Laravel no Docker Compose](https://www.digitalocean.com/community/tutorials/how-to-install-and-set-up-laravel-with-docker-compose-on-ubuntu-20-04)
- [Código episódio 1](https://github.com/erikaheidi/sponsorshub/tree/episodio-01)

### Episódio 2: Trabalhando com Templates Blade e Criando Layout Básico com Bulma CSS
_Quarta-feira, 08 de Julho_

{% youtube m8gvyHNGCvs %}

Materiais de Apoio:

- [Bulma CSS](https://bulma.io)
- [Código episódio 2](https://github.com/erikaheidi/sponsorshub/tree/episodio-02)


### Episódio 3: Implementando Workflow OAuth via GitHub

_Quarta-feira, 15 de Julho_

{% youtube PdAv1Mby8S8 %}

Materiais de Apoio:

- [GitHub API - Documentation](https://docs.github.com/en/developers/apps/authorizing-oauth-apps)
- [Creating Controllers in Laravel](https://laravel.com/docs/7.x/controllers)
- [Código Episódio 3](https://github.com/erikaheidi/sponsorshub/tree/episodio-03)

### Episódio 4: Finalizando Workflow OAuth GitHub e Salvando Usuário no BD

_Quarta-feira, 22 de Julho_

{% youtube dYovRGdGLdg %}

Materiais de Apoio:

- [Github API: Getting the Authenticated User](https://docs.github.com/en/rest/reference/users#get-the-authenticated-user)
- [Authenticating a User Instance in Laravel](https://laravel.com/docs/7.x/authentication#other-authentication-methods)
- [Código Episódio 4](https://github.com/erikaheidi/sponsorshub/tree/episodio-04)


### Episódio 5: Ajustando Login e Logout de Usuários Baseado nas Credenciais do Github

_Quarta-feira, 29 de Julho_

{% youtube JZJdPXF-jQE %}

Materiais de Apoio:

- [Logging Out a User in Laravel](https://laravel.com/docs/7.x/authentication#logging-out)
- [Creating and obtaining DB records with Eloquent: First or New](https://laravel.com/docs/7.x/eloquent#other-creation-methods)
- [Authenticating a User Instance in Laravel](https://laravel.com/docs/7.x/authentication#other-authentication-methods)
- [Código Episódio 5](https://github.com/erikaheidi/sponsorshub/tree/episodio-05)

### Episódio 6: Implementando Workflow OAuth via Twitch

_Quarta-feira, 5 de Agosto_

{% youtube cLDo6YJF0rU %}

Materiais de Apoio:

- [Twitch API: Authentication](https://dev.twitch.tv/docs/authentication)
- [Twitch API: OAuth Authorization Code Flow](https://dev.twitch.tv/docs/authentication/getting-tokens-oauth#oauth-authorization-code-flow)
- [Código Episódio 6](https://github.com/erikaheidi/sponsorshub/tree/episodio-06)

### Episódio 7: Finalizando Workflow OAuth via Twitch, Salvando Credenciais no BD

Ao vivo: Quarta-feira, 12 de Agosto a partir das 10am (GMT-3, Brasília) na [twitch.tv/erikaheidi](twitch.tv/erikaheidi)