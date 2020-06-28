---
title: [pt-BR] Rodando Liso: Ansible no Ubuntu 20.04
description: Neste episódio do Rodando Liso, vamos instalar o Ansible no Ubuntu 20.04 e criar um playbook básico para PHP.
tags: pt-BR, videos, twitch, live, ansible, devOps
thumb_image: images/thumb/liso_ansible.png
---

Neste episódio de *Rodando Liso*, vamos instalar o Ansible no Ubuntu 20.04 e criar um playbook básico para PHP.

{% youtube xBDDWVGX4YU %}

## Resumo do Episódio

Neste episódio, seguimos o tutorial do [Ansible no Ubuntu 20.04](https://www.digitalocean.com/community/tutorials/how-to-install-and-configure-ansible-on-ubuntu-20-04-pt).
Começamos com o guia de configuração inicial de servidor, e então instalamos o Ansible no nó de controle (control node). Criamos um inventório com alguns nodes e começamos a fazer testes com comandos ad-hoc.
Depois, criamos um playbook básico e vamos melhorando aos poucos, até chegarmos no resultado final que é um playbook que automatiza a instalação do Nginx+PHP-FPM no Ubuntu 20.04.

### Pré-requisitos:

- Servidor ou máquina local rodando Ubuntu 20.04 (nó de controle onde o Ansible será instalado)
- Um ou mais servidores remotos para servirem de Ansible Nodes

### Links Relevantes

- [Uma introdução ao gerenciamento de configuração com o Ansible](https://www.digitalocean.com/community/conceptual_articles/an-introduction-to-configuration-management-with-ansible-pt)
- [Como Instalar e Configurar o Ansible no Ubuntu 20.04](https://www.digitalocean.com/community/tutorials/how-to-install-and-configure-ansible-on-ubuntu-20-04-pt)
- [Guia de Configuração Inicial de Servidor Ubuntu 20.04](https://www.digitalocean.com/community/tutorials/initial-server-setup-with-ubuntu-20-04-pt)
- [Como configurar as chaves SSH no Ubuntu 20.04](https://www.digitalocean.com/community/tutorials/how-to-set-up-ssh-keys-on-ubuntu-20-04-pt)