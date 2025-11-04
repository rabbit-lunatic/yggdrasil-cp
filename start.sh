#!/bin/bash

# Script para iniciar o servidor de desenvolvimento
# Funciona em qualquer ambiente

echo "🚀 Iniciando Painel Yggdrasil..."

# Verificar se o .env existe
if [ ! -f .env ]; then
    echo "❌ Arquivo .env não encontrado. Execute ./setup.sh primeiro."
    exit 1
fi

# Verificar conexão com banco de dados
echo "🔍 Verificando conexão com banco de dados..."
php artisan migrate:status &> /dev/null

if [ $? -ne 0 ]; then
    echo "⚠️  Banco de dados não configurado ou inacessível."
    echo "   Configure o .env e execute: php artisan migrate"
    echo ""
fi

# Detectar IP automaticamente para WSL2
if grep -q microsoft /proc/version; then
    echo "🐧 Ambiente WSL2 detectado"
    WSL_IP=$(hostname -I | awk '{print $1}')
    echo "🌐 IP do WSL2: $WSL_IP"
    echo "📱 Acesse de qualquer lugar: http://$WSL_IP:8000"
else
    echo "🖥️  Ambiente Linux nativo detectado"
fi

echo ""
echo "🌟 Iniciando servidor em http://0.0.0.0:8000"
echo "🔗 Acesso local: http://localhost:8000"
echo "⏹️  Pressione Ctrl+C para parar"
echo ""

# Iniciar o servidor
php artisan serve --host=0.0.0.0 --port=8000