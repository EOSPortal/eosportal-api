# eosportal-api

You can test this API here: http://api.eosportal.io/

This application provides the following endpoints:

### chains
`GET api.eosportal.io/chains`

This will list all chains being tracked.

### blocks
`GET api.eosportal.io/chains/{chain_id}/blocks`

This will list all blocks of a specific chain.

`GET api.eosportal.io/blocks/{block_id}`

This will list information about a specific block.

### infos
`GET api.eosportal.io/chains/{chain_id}/infos`

This will list all information of a specific chain gathered from the full node command `get info`.

### producers
`GET api.eosportal.io/chains/{chain_id}/producers`

This will list all block producers of a specific chain.

`GET api.eosportal.io/producers/{producer_id}`

This will list information about a specific block producer.

`GET api.eosportal.io/producers/{producer_id}/blocks`

This will list all blocks produced by a specific block producer.

## Run it locally:

```sh
git clone https://github.com/EOSPortal/eosportal-api.git ${datadir:-/var/www}
cd ${datadir}
cp .env.development .env
vi .env (edit the database connection variables)
composer install
php artisan migrate
php artisan db:seed

php -S localhost:8000 -t public
```

