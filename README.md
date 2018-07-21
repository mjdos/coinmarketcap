# Consumindo API Publica do Site Coinmarketcap.com usando PHP 7.2

Essa API exibe dados das moedas na ordem de classificação. O número máximo de resultados por chamada é 100. A paginação é possível usando os parâmetros de início e limite.

Parâmetros Opcionais:

(int) start – retorna os resultados a partir do número especificado (o padrão é 1)
(int) limite – retorna um máximo de resultados [limite] (o padrão é 100; o máximo é 100)
(string) sort – retorna os resultados classificados por [sort]. Os valores possíveis são id, rank, volume_24h e percent_change_24h (o padrão é rank).
convert – Retorna o preço convertido na moeda de sua escolha. As moedas válidas são: “AUD”, “BRL”, “CAD”, “CHF”, “CLP”, “CNY”, “CZK”, “DKK”, “EUR”, “GBP”, “HKD”, “HUF”, “IDR”, “ILS”, “INR”, “JPY”, “KRW”, “MXN”, “MYR”, “NOK”, “NZD”, “PHP”, “PKR”, “PLN”, “RUB”, “SEK”, “SGD”, “THB”, “TRY”, “TWD”, “ZAR” Valid cryptocurrency values are: “BTC”, “ETH” “XRP”, “LTC”, and “BCH”

Nota: É altamente recomendável usar o id para classificar se paginando todos os resultados disponíveis, já que id é a única opção de classificação garantida para retornar em uma ordem consistente.

# Exemplos

Exemplo: https://api.coinmarketcap.com/v2/ticker/

Exemplo: https://api.coinmarketcap.com/v2/ticker/?limit=10

Exemplo: https://api.coinmarketcap.com/v2/ticker/?limit=10&sort=id

Exemplo: https://api.coinmarketcap.com/v2/ticker/?start=101&limit=10

Exemplo: https://api.coinmarketcap.com/v2/ticker/?start=101&limit=10&sort=id

Exemplo: https://api.coinmarketcap.com/v2/ticker/?start=101&limit=10&sort=id&structure=array

Exemplo: https://api.coinmarketcap.com/v2/ticker/?convert=EUR&limit=10

Exemplo: https://api.coinmarketcap.com/v2/ticker/?convert=BTC&limit=10
