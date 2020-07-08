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
_Quarta-feira, 01 de Julho 10am (GMT-3, Brasília)._

{% youtube NcUT0gNRz_o %}

Materiais de Apoio:

- [Tutorial do Laravel no Docker Compose](https://www.digitalocean.com/community/tutorials/how-to-install-and-set-up-laravel-with-docker-compose-on-ubuntu-20-04)
- [Código episódio 1](https://github.com/erikaheidi/sponsorshub/tree/episodio-01)

### Episódio 2: Trabalhando com Templates Blade e Criando Layout Básico com Bulma CSS
_Quarta-feira, 08 de Julho 10am (GMT-3, Brasília)._

{% youtube m8gvyHNGCvs %}

Materiais de Apoio:

- [Bulma CSS](https://bulma.io)
- [Código episódio 2](https://github.com/erikaheidi/sponsorshub/tree/episodio-02)


### Episódio 3: Autenticação com OAuth via Github

Ao vivo: Quarta-feira, 15 de Julho a partir das 10am (GMT-3, Brasília) na [twitch.tv/erikaheidi](twitch.tv/erikaheidi)