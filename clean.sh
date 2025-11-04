#!/bin/bash

# Script de limpeza para garantir portabilidade total
# Execute este script antes de fazer deploy ou compartilhar o projeto

echo "🧹 Limpando configurações específicas do ambiente..."

# Limpar todos os caches do Laravel
echo "📁 Limpando caches do Laravel..."
php artisan config:clear 2>/dev/null || true
php artisan cache:clear 2>/dev/null || true
php artisan view:clear 2>/dev/null || true
php artisan route:clear 2>/dev/null || true

# Remover arquivos de cache compilados
echo "🗑️  Removendo arquivos de cache..."
rm -rf storage/framework/cache/data/*
rm -rf storage/framework/sessions/*
rm -rf storage/framework/views/*
rm -rf bootstrap/cache/*.php

# Limpar logs
echo "📝 Limpando logs..."
rm -rf storage/logs/*.log

# Remover node_modules se existir (será reinstalado no próximo setup)
if [ -d "node_modules" ]; then
    echo "📦 Removendo node_modules..."
    rm -rf node_modules
fi

# Remover vendor se necessário (para limpeza completa)
read -p "🤔 Deseja remover também o diretório vendor? (s/N): " -n 1 -r
echo
if [[ $REPLY =~ ^[Ss]$ ]]; then
    echo "📦 Removendo vendor..."
    rm -rf vendor
fi

# Verificar se há referências a caminhos específicos
echo "🔍 Verificando possíveis referências a caminhos específicos..."

FOUND_ISSUES=0

# Verificar em arquivos de configuração compilados
if find storage/framework bootstrap/cache -name "*.php" -exec grep -l "/home/" {} \; 2>/dev/null | head -1; then
    echo "⚠️  Encontradas referências a caminhos absolutos em caches"
    FOUND_ISSUES=1
fi

# Verificar no arquivo .env
if [ -f ".env" ] && grep -q "/home/" .env; then
    echo "⚠️  Encontradas referências a caminhos absolutos no .env"
    FOUND_ISSUES=1
fi

if [ $FOUND_ISSUES -eq 0 ]; then
    echo "✅ Nenhuma referência a caminhos específicos encontrada"
else
    echo "⚠️  Foram encontradas algumas referências. Execute o setup.sh novamente."
fi

echo ""
echo "🎉 Limpeza concluída!"
echo ""
echo "📋 O projeto agora está limpo e pronto para:"
echo "  - Deploy em qualquer servidor"
echo "  - Compartilhamento via Git"
echo "  - Uso em diferentes ambientes"
echo ""
echo "🚀 Próximos passos:"
echo "  1. Execute ./setup.sh no servidor de destino"
echo "  2. Configure o arquivo .env conforme necessário"
echo "  3. Execute php artisan migrate"
echo ""