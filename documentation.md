# Terv dolog

## Broad program plan
multiple games
(but no games)

## database plan
### 0NF.
gamer[**id**, email, gamertag, name, adress, occupation, gender, timeplayedlastweek, playedalltime, achivements, level, gameid, gamename, game releasedate, genreid, genrename, ]

(i could use email as id but from a coding standpoint it looked better)

### 1NF.
gamer[**id** , email, name, adress, occupation, gender ] + timestamps

more[**gamerid**,**gameid**, gamename, releasedate, **genreid**, genrename, gamertag, timeplayedlastweek, playedalltime, achivements, level]

### 2NF.
gamer[**id**, email, name, adress, occupation, gender ] + timestamps

games[**gameid**, gamename, releasedate, genreid]

genres[**id**, name]

gamer_game[**gamerid**, gamertag, timeplayedlastweek, playedalltime, achivements, level]
	

### 3NF.
gamers[**id**, email, name, adress, occupation, gender ] + timestamps

games[**id**, name, releasedate genreid]

genres[**id**, name]

gamer_game[**gamerid**, **gameid**, gamertag, timeplayedlastweek, playedalltime, achivements, level]

put data init
