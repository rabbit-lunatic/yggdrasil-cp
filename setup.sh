#!/bin/bash

# Script de configuração portável para o Painel Yggdrasil
# Este script funciona em qualquer ambiente Linux/WSL/VPS

echo "🌟 Configurando Painel Yggdrasil..."
echo "📍 Diretório atual: $(pwd)"

# Verificar se estamos no diretório correto
if [ ! -f "artisan" ]; then
    echo "❌ Arquivo 'artisan' não encontrado. Certifique-se de estar no diretório raiz do projeto."
    exit 1
fi

# Verificar se o PHP está instalado
if ! command -v php &> /dev/null; then
    echo "❌ PHP não encontrado. Por favor, instale o PHP 8.1 ou superior."
    exit 1
fi

# Verificar versão do PHP
PHP_VERSION=$(php -r "echo PHP_MAJOR_VERSION.'.'.PHP_MINOR_VERSION;")
if ! php -r "exit(version_compare(PHP_VERSION, '8.1', '>=') ? 0 : 1);"; then
    echo "❌ PHP 8.1 ou superior é necessário. Versão atual: $PHP_VERSION"
    exit 1
fi

echo "✅ PHP $PHP_VERSION encontrado"

# Verificar se o Composer está instalado
if ! command -v composer &> /dev/null; then
    echo "❌ Composer não encontrado. Por favor, instale o Composer."
    exit 1
fi

echo "✅ Composer encontrado"

# Limpar qualquer cache anterior que possa ter caminhos específicos
echo "🧹 Limpando caches anteriores..."
php artisan config:clear 2>/dev/null || true
php artisan cache:clear 2>/dev/null || true
php artisan view:clear 2>/dev/null || true

# Instalar dependências do PHP
echo "📦 Instalando dependências PHP..."
composer install --no-dev --optimize-autoloader --no-interaction

# Copiar arquivo de ambiente se não existir
if [ ! -f .env ]; then
    echo "🔧 Criando arquivo de configuração..."
    cp .env.example .env
    
    # Gerar chave da aplicação
    php artisan key:generate
    
    echo ""
    echo "⚠️  IMPORTANTE: Configure o banco de dados no arquivo .env"
    echo "   - DB_HOST: endereço do servidor MySQL"
    echo "   - DB_DATABASE: nome do banco de dados"
    echo "   - DB_USERNAME: usuário do banco"
    echo "   - DB_PASSWORD: senha do banco"
    echo "   - APP_URL: URL do seu servidor (ex: https://seudominio.com)"
    echo ""
else
    echo "✅ Arquivo .env já existe"
fi

# Verificar se o Node.js está instalado
if command -v npm &> /dev/null; then
    echo "📦 Instalando dependências do Node.js..."
    npm install --silent
    
    echo "🎨 Compilando assets..."
    npm run build
else
    echo "⚠️  Node.js não encontrado. Assets não serão compilados."
    echo "   Para uma experiência completa, instale Node.js e execute:"
    echo "   npm install && npm run build"
fi

# Criar diretórios necessários
echo "📁 Criando diretórios necessários..."
mkdir -p storage/logs
mkdir -p storage/framework/cache/data
mkdir -p storage/framework/sessions
mkdir -p storage/framework/views
mkdir -p bootstrap/cache

# Definir permissões (funciona tanto para usuário normal quanto www-data)
echo "🔒 Configurando permissões..."
chmod -R 755 storage
chmod -R 755 bootstrap/cache

# Se estivermos em um servidor web, tentar configurar o proprietário correto
if id "www-data" &>/dev/null; then
    chown -R www-data:www-data storage bootstrap/cache 2>/dev/null || true
fi

# Detectar tipo de ambiente
ENVIRONMENT="desconhecido"
if grep -q microsoft /proc/version 2>/dev/null; then
    ENVIRONMENT="WSL2"
elif [ -f /.dockerenv ]; then
    ENVIRONMENT="Docker"
elif systemctl is-active --quiet apache2 || systemctl is-active --quiet nginx; then
    ENVIRONMENT="Servidor Web"
else
    ENVIRONMENT="Desenvolvimento"
fi

echo ""
echo "🎉 Configuração concluída!"
echo "🖥️  Ambiente detectado: $ENVIRONMENT"
echo ""
echo "📋 Próximos passos:"
echo "  1. Configure o arquivo .env com suas informações"
echo "  2. Execute: php artisan migrate"
echo ""
echo "🚀 Para iniciar em desenvolvimento:"
echo "  ./start.sh"
echo ""
echo "📚 Para deploy em produção:"
echo "  Consulte o arquivo DEPLOY.md"
echo ""