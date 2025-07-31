# CRUD com Laravel – Foco no Controller

Este projeto é uma aplicação CRUD completa (Create, Read, Update, Delete) desenvolvida com **Laravel 10**, utilizando os **Resource Controllers** para uma estrutura limpa, escalável e alinhada às boas práticas do framework.

O projeto foi criado com fins didáticos, com foco na organização da lógica de negócio dentro dos controllers, sem depender de scaffolding automático.

---

## 🎯 Objetivo

Praticar e demonstrar domínio sobre os seguintes aspectos do Laravel:

- Criação de CRUD completo com `Resource Controller`
- Uso de rotas RESTful com `Route::resource`
- Validação de dados com `$request->validate()`
- Integração com Eloquent ORM para manipulação de dados
- Estruturação limpa e organizada do projeto

---

## ✅ Funcionalidades

- Listagem de registros (`index`)
- Visualização individual (`show`)
- Criação de novos registros (`create` + `store`)
- Edição de registros (`edit` + `update`)
- Exclusão de registros (`destroy`)
- Validação de campos obrigatórios
- Feedback ao usuário (mensagens de sucesso e erro)

---

## 🛠️ Tecnologias Utilizadas

- **PHP 8.x**
- **Laravel 10**
- **MySQL**
- **Blade (templating)**
- **Bootstrap 5** (interface básica e responsiva)
