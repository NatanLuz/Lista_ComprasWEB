# Lista de Compras - Aplicação em PHP

Aplicação web em PHP para gerenciamento de listas de compras, com persistência em banco de dados e controle de status dos itens em tempo real.

---

## 🎯 Proposta de Valor

Fornecer uma alternativa digital simples e eficiente para listas de compras do dia a dia, permitindo acompanhamento claro dos itens pendentes e concluídos.

**Benefícios principais:**

- Redução de perda de informações comuns em listas manuais  
- Visualização clara do status dos itens  
- Interface objetiva para uso cotidiano  

---

## ⚙️ Funcionalidades

- Cadastro de itens com nome e quantidade  
- Marcação de itens como comprados ou pendentes  
- Remoção de itens da lista  
- Persistência de dados em banco relacional  
- Atualização via fluxo POST/Redirect/GET  

---

## 🏗️ Arquitetura / Estrutura

O projeto segue separação de responsabilidades para facilitar manutenção:

- **Configuração** → parâmetros e conexão com banco  
- **Repositório** → acesso a dados e regras de negócio  
- **Apresentação** → interface e resposta HTTP  

---

## 🔐 Segurança

- Uso de PDO com prepared statements (mitigação de SQL Injection)  
- Validação de entrada de dados  
- Ausência de concatenação SQL em operações críticas  

---

## 🧰 Stack Tecnológica

- PHP 8+  
- MySQL  
- PDO (camada de acesso a dados)  
- HTML5 semântico  
- CSS3  

---

## 🚀 Instalação

### Pré-requisitos

- PHP 8+  
- MySQL 8+ (ou compatível)  
- Servidor local (Apache, Nginx ou embutido)  

### Passos

1. Clonar o repositório  
2. Criar o banco de dados  
3. Importar o script SQL  
4. Configurar credenciais  
5. Iniciar o servidor e acessar no navegador  

---

## 🧪 Testes Rápidos

**Checklist funcional:**

1. Cadastrar item com nome e quantidade  
2. Validar exibição na lista  
3. Marcar item como comprado  
4. Desmarcar item  
5. Remover item  
6. Recarregar página para validar persistência  

---

## 📸 Screenshots

### Tela inicial
<img src="Screenshots/tela-inicial.PNG" width="600">

### Item adicionado
<img src="Screenshots/item-adicionado.PNG" width="600">

### Item marcado como comprado
<img src="Screenshots/item-marcado.PNG" width="600">

---

## 👤 Autor

**Natan Da Luz**  
Desenvolvedor Backend focado em PHP  
