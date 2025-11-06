# Sistema de Doação - AbacatePay

## Configuração

### 1. Obter credenciais do AbacatePay

1. Acesse https://abacatepay.com e crie uma conta
2. Faça login no dashboard
3. Navegue até a seção de API Keys
4. Copie sua chave de API

### 2. Configurar variáveis de ambiente

Adicione as seguintes variáveis no arquivo `.env`:

```env
# AbacatePay Configuration
ABACATEPAY_API_KEY=your_api_key_here
ABACATEPAY_WEBHOOK_SECRET=your_webhook_secret_here
```

**Importante:**
- `ABACATEPAY_API_KEY`: Chave de API obtida no dashboard do AbacatePay
- `ABACATEPAY_WEBHOOK_SECRET`: String secreta que você escolher (use algo como: `abacate_ygg_webhook_2025`)

### 3. Configurar Webhook no AbacatePay

1. Acesse o dashboard do AbacatePay
2. Navegue até a seção de Webhooks
3. Clique em "Criar Webhook"
4. Preencha os dados:
   - **Nome**: Yggdrasil Donations
   - **URL**: `https://seu-dominio.com/donation/webhook?webhookSecret=your_webhook_secret_here`
   - **Secret**: O mesmo valor que você colocou em `ABACATEPAY_WEBHOOK_SECRET`

**Nota:** Durante desenvolvimento local, você pode usar ferramentas como ngrok para expor seu localhost:
```bash
ngrok http 8000
# Use a URL fornecida pelo ngrok no webhook
```

### 4. Modo de Desenvolvimento

O AbacatePay possui um modo de desenvolvimento (dev mode) que permite testar pagamentos sem movimentar dinheiro real.

- Pagamentos em dev mode aparecem com `"devMode": true` na resposta
- Webhooks de dev mode só funcionam com chaves de API de desenvolvimento
- Para testar, use as chaves de API do ambiente de desenvolvimento no dashboard

## Funcionalidades Implementadas

### Pacotes de Doação

| Pontos | Valor | Imagem |
|--------|-------|--------|
| 500    | R$ 5,00   | yp-500.png |
| 1000   | R$ 10,00  | yp-1000.png |
| 2500   | R$ 25,00  | yp-2500.png (POPULAR) |
| 5000   | R$ 50,00  | yp-5000.png |
| 10000  | R$ 100,00 | yp-10000.png |
| 25000  | R$ 250,00 | yp-25000.png |

### Fluxo de Pagamento

1. **Usuário clica em "Comprar com PIX"**
   - Sistema chama `/donation/create-payment`
   - Cria registro no banco com status `pending`
   - Chama API do AbacatePay para gerar cobrança
   - Retorna URL de pagamento

2. **Usuário paga o PIX**
   - Abre a URL do AbacatePay em nova aba
   - Escaneia o QR Code e paga
   
3. **AbacatePay confirma pagamento**
   - Envia webhook para `/donation/webhook`
   - Sistema valida o secret
   - Atualiza transação para `paid`
   - Adiciona pontos ao saldo do usuário via `VotePoint::addPoints()`

### Segurança

- ✅ Validação de webhook secret via query parameter
- ✅ Logs de todas as transações e webhooks
- ✅ Proteção contra processamento duplicado de pagamentos
- ✅ CSRF protection em todas as requisições POST

### Banco de Dados

**Tabela: transactions**
```sql
- id: bigint (PK)
- user_id: bigint (FK para users)
- billing_id: string (ID único do AbacatePay)
- amount: integer (valor em centavos)
- points: integer (pontos Ygg)
- status: string (pending, paid, cancelled)
- payment_method: string (PIX, CARD)
- payment_url: text (URL do pagamento)
- paid_at: timestamp
- created_at, updated_at
```

## Testando o Sistema

### 1. Criar um pagamento de teste

```bash
# Inicie o servidor
php artisan serve

# Acesse http://127.0.0.1:8000/account/ygg-points
# Faça login e clique em um pacote
```

### 2. Simular webhook (para testes locais)

```bash
curl -X POST http://127.0.0.1:8000/donation/webhook?webhookSecret=your_secret \
  -H "Content-Type: application/json" \
  -d '{
    "event": "billing.paid",
    "data": {
      "pixQrCode": {
        "id": "bill_test123"
      },
      "payment": {
        "method": "PIX"
      }
    }
  }'
```

## Solução de Problemas

### Erro: "Configuração de pagamento não encontrada"
- Verifique se `ABACATEPAY_API_KEY` está definida no `.env`
- Rode `php artisan config:clear` para limpar cache

### Webhook não está sendo recebido
- Verifique se a URL está correta e acessível
- Confirme que o secret está correto
- Verifique os logs em `storage/logs/laravel.log`

### Pontos não são creditados
- Verifique os logs para ver se o webhook foi recebido
- Confirme se o `billing_id` da transação corresponde ao do webhook
- Verifique se a transação não estava com status `paid` anteriormente

## Logs

Todos os eventos importantes são registrados:

```php
// Webhook recebido
Log::info('Webhook received', ['event' => $event, 'data' => $data]);

// Pagamento processado
Log::info('Payment processed successfully', [
    'transaction_id' => $transaction->id,
    'user_id' => $transaction->user_id,
    'points' => $transaction->points
]);

// Erros
Log::error('AbacatePay API Error', ['response' => $data]);
```

Visualize os logs:
```bash
tail -f storage/logs/laravel.log
```

## Produção

Antes de colocar em produção:

1. ✅ Obtenha chaves de API de produção no AbacatePay
2. ✅ Configure webhook com HTTPS (obrigatório)
3. ✅ Teste todos os pacotes de doação
4. ✅ Configure backup do banco de dados
5. ✅ Monitore os logs regularmente
