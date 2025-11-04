# ✅ CHECKLIST DE PORTABILIDADE

Este checklist garante que o Painel Yggdrasil funcione em qualquer ambiente sem referências específicas.

## 🔍 Verificações Realizadas

- [x] **.env.example** configurado com valores genéricos
- [x] **config/database.php** usando MySQL como padrão
- [x] **package.json** com nome genérico do projeto
- [x] **Scripts de setup** portáveis criados
- [x] **README.md** atualizado com instruções genéricas
- [x] **DEPLOY.md** criado com instruções de produção
- [x] **clean.sh** criado para limpeza antes do deploy

## 🚫 Coisas Removidas/Evitadas

- [x] Caminhos absolutos (como `/home/cumbe11/`)
- [x] Referências a usuários específicos
- [x] Configurações hardcoded
- [x] SQLite como padrão (alterado para MySQL)
- [x] Configurações de desenvolvimento no .env.example

## 📋 Para Deploy em Nova VPS

1. **Clone o projeto:**
   ```bash
   git clone <url> painel-yggdrasil
   cd painel-yggdrasil
   ```

2. **Execute a configuração:**
   ```bash
   chmod +x setup.sh
   ./setup.sh
   ```

3. **Configure o .env:**
   - Edite com dados do seu servidor
   - Configure banco de dados
   - Defina APP_URL correto

4. **Execute migrações:**
   ```bash
   php artisan migrate
   ```

5. **Configure servidor web** (Apache/Nginx)

## 🔧 Scripts Disponíveis

- **`setup.sh`** - Configuração inicial automática
- **`start.sh`** - Inicia servidor de desenvolvimento
- **`clean.sh`** - Limpa configurações antes do deploy

## ⚠️ IMPORTANTE

Se você encontrar QUALQUER referência a:
- `cumbe11`
- `/home/cumbe11/`
- `laravel-site` (exceto no package.json que foi corrigido)
- Caminhos absolutos específicos

Isso indica um problema que precisa ser corrigido. Execute `./clean.sh` e depois `./setup.sh` novamente.

## 🎯 Objetivo Alcançado

O painel agora é **100% portável** e pode ser usado em:
- ✅ Qualquer servidor Linux
- ✅ Qualquer VPS
- ✅ WSL2
- ✅ macOS
- ✅ Ambientes Docker
- ✅ Hosting compartilhado (com PHP 8.1+)

**Nenhuma referência a ambiente específico** deve aparecer em uma nova instalação!