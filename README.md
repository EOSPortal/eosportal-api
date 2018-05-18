# eosportal-api

You can test this API here: http://prototype.eosportal.io/api/

This application provides the following endpoints:

### chains
`GET eosportal.io/api/chains`

This will list all chains being tracked.

### blocks
`GET eosportal.io/api/chains/{chain_id}/blocks`

This will list all blocks of a specific chain.

`GET eosportal.io/api/blocks/{block_id}`

This will list information about a specific block.

### infos
`GET eosportal.io/api/chains/{chain_id}/infos`

This will list all information of a specific chain gathered from the full node command `get info`.

### producers
`GET eosportal.io/api/chains/{chain_id}/producers`

This will list all block producers of a specific chain.

`GET eosportal.io/api/producers/{producer_id}`

This will list information about a specific block producer.

`GET eosportal.io/api/producers/{producer_id}/blocks`

This will list all blocks produced by a specific block producer.

