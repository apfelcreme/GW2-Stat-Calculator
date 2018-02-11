# Stat-API for GW2

This tool calculates a characters stats by calling the official [GW2-Api](https://api.guildwars2.com/v2) and using ones equipment pieces and traits. 

## Calls
A call is rather simple: 
```
stats.php?name=[Name]&apikey=[API-Key]&gamemode=[GameMode]&weapon=[Weapon]&get=[Features]
```

* **Name**: the name of the character 
* **API-Key**: a viable API-Keys can be retrieved from [arena.net](https://account.arena.net/applications). You'll need the "Builds", "Characters" and "Inventories" Permissions.
* **GameMode**: Either "wvw" for World-versus-World, or "pve" for everything else. PvP is not supported at this moment.
* **Weapon**: The weapon that is used for the Calculation. Either "A" for the first weapon set, or "B" for the second weapon set. 
* **Feature**: The amount of information that is returned. You can combine multiple features by joining them with a comma. 
  * "stats": the result of the stat calculation. If the parameter is not provided, only "stats" will be returned.
  * "equipment": some information on the characters equipment
  * "traitlines": some information on the selected traits
  * "debug": print some information on how the calculation was done. 

### Result
A call may look like this: 
```
stats.php?name=Almighty%20Drapo&apikey=6E772D82-7D11-E544-8990-35E18D8B108D016A9E0B-DBF6-4956-9107-3E684171E356&weapon=A&gamemode=pve&get=stats&timestamp=1518370109418
```
And it would return this result:

    {
       "stats": {
          "Power": 1000,
          "Precision": 1005,
          "Vitality": 1933,
          "Toughness": 2327,
          "CritDamage": 0,
          "ConditionDamage": 0,
          "Healing": 1347,
          "ConditionDuration": 0,
          "BoonDuration": 633,
          "AgonyResistance": 63,
          "CriticalChance": 4.238095238095238,
          "CriticalDamage": 150,
          "BnDuration": 62.2,
          "CondDuration": 0,
          "Armor": 3598,
          "Health": 20975
       }
    }

## Todo
* Elementalists are special and need extra work
* Utility Skills (Guardian Signets for example give extra Power)
* Maybe PvP at some point
