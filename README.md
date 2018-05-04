# eosportal-api

This application provides the following endpoints:

### chains
GET eosportal.io/api/chains
This will list all chains being tracked.

## Chain specific

### blocks
GET chainName.eosportal.io/api/blocks
This will list all blocks of the chain named "chainName".

GET chainName.eosportal.io/api/blocks/id
This will list information about a specific block (from chain "chainName") identified by (int) "id".

### infos
GET chainName.eosportal.io/api/infos/
This will list all information of the chain named "chainName" gathered from the full node command `get info`.

### producers
GET chainName.eosportal.io/api/producers
This will list all block producers of the chain named "chainName".

GET chainName.eosportal.io/api/producers/id
This will list information about a specific block producer (from chain "chainName") identified by (int) "id".

