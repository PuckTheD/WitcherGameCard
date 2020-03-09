#WitcherGameCard

##Witcher game card projet

You can integrate the project. All idea is good to progress.

1. Le template des personnages (class)
* Nom qui sera définit par le joueur.
* Point de vie, dépendra sûrement de l'orientation.
* Force : gère les dégats brut à l'attaque physique.
* Défence : gère la capacité de recevoir les dégats physiques.
* Esprit : gère la capacité de recevoir les dégats spéciaux (signes, magie, ?...).
* Stamina : soit en template soit propre aux sorceleurs. Quand la stamina atteint zéro (suite aux attaques et utilisation de signes) l'ennemi lance un critique.
* Expérience : quand elle monte rand(2, 6). Quand passage de niveau les stats augmentent. 10 palier de départ puis ajoute 5 par niveau (ex : lvl 1 = 10exp max, lvl 2 = 15exp max ...).

2. Les Sorceleurs (class)
* L'orientation (3 pour le moment) :
	* Epéiste : il est à l'aise avec toute les lames. Bonus de force + ?...
	* Le lettré : il s'intéresse plus aux livres qu'au maniement des armes. Bonus signe + stamina + ?...
	* L'équilibriste : stats moyennes en tout, progresse moins vite.
* Signe : gère la puissance des signes et leur consommation de stamina.
Dans le construct : tous les attributs + if des stats en fonction de l'orientation.

3. Les monstres
* Template sans le nom. Tous les autres attributs en rand().

**Work in progress ...**
