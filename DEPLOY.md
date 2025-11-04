# 🔧 Configuração de Deploy - Painel Yggdrasil

## ⚠️ IMPORTANTE - Leia antes de fazer deploy

Este arquivo contém instruções importantes para fazer o deploy do painel em qualquer servidor sem conflitos de ambiente.

## 📋 Checklist de Deploy

### 1. Preparação do Servidor
- [ ] PHP 8.1+ instalado
- [ ] MySQL 5.7+ configurado
- [ ] Composer instalado
- [ ] Servidor web configurado (Apache/Nginx)

### 2. Download e Configuração
```bash
# Clone o repositório
git clone <url-do-repositorio> painel-yggdrasil
cd painel-yggdrasil

# Execute o script de configuração
chmod +x setup.sh
./setup.sh

# Configure o arquivo .env com as informações do seu servidor
cp .env.example .env
nano .env  # Edite com seus dados
```

### 3. Configurações Obrigatórias no .env

```env
# Nome da aplicação
APP_NAME="Painel Yggdrasil"

# Ambiente (production para servidor)
APP_ENV=production
APP_DEBUG=false

# URL do seu servidor (MUITO IMPORTANTE)
APP_URL=https://seudominio.com

# Banco de dados (configure com seus dados)
DB_HOST=localhost
DB_DATABASE=ragnarok
DB_USERNAME=seu_usuario
DB_PASSWORD=sua_senha_segura

# Email (configure se necessário)
MAIL_FROM_ADDRESS="noreply@seudominio.com"
```

### 4. Configuração do Servidor Web

#### Apache (.htaccess)
O Laravel já inclui o arquivo `.htaccess` necessário.

#### Nginx
```nginx
server {
    listen 80;
    server_name seudominio.com;
    root /caminho/para/painel-yggdrasil/public;

    add_header X-Frame-Options "SAMEORIGIN";
    add_header X-Content-Type-Options "nosniff";

    index index.php;

    charset utf-8;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location = /favicon.ico { access_log off; log_not_found off; }
    location = /robots.txt  { access_log off; log_not_found off; }

    error_page 404 /index.php;

    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php8.1-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
    }

    location ~ /\.(?!well-known).* {
        deny all;
    }
}
```

### 5. Segurança

- [ ] Altere todas as senhas padrão
- [ ] Configure SSL/HTTPS
- [ ] Defina permissões corretas nos diretórios
- [ ] Configure firewall se necessário

### 6. Comandos de Deploy Final

```bash
# Gerar chave da aplicação
php artisan key:generate

# Executar migrações
php artisan migrate --force

# Limpar caches
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Configurar permissões
chmod -R 755 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache
```

## 🚨 Problemas Comuns

### "cumbe11" aparecendo em algum lugar
Isso indica que algum cache local não foi limpo. Execute:
```bash
php artisan config:clear
php artisan cache:clear
php artisan view:clear
```

### Erro de permissões
```bash
chmod -R 775 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache
```

### Erro de banco de dados
Verifique se:
- O MySQL está rodando
- As credenciais no .env estão corretas
- O banco de dados existe

## 📞 Suporte

Se encontrar algum problema relacionado a caminhos ou configurações específicas de ambiente, isso indica que algo não foi configurado corretamente. Todos os caminhos devem ser relativos e funcionais em qualquer servidor.