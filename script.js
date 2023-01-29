"use strict";

document.addEventListener("DOMContentLoaded", event => {

    const search = document.querySelector("#search");
    const matchList = document.querySelector("#matchList");
    const matchList2 = document.querySelector("#matchList2");

    //Cherche suggestion.php et le filtre
    const searchArbres = async searchText => {
        const response = await fetch("./assets/php/suggestion.php");
        const arbres = await response.json();

        // Vérifie si le texte saisi correspond à un arbre
        let matches = arbres.filter(arbre => {
            // première proposition (le ^ désigne le premier caractère)
            const regex = new RegExp(`^${searchText}`, 'gi');
            // Le premier argument de la fonction RegExp() est le motif de l'expression régulière utilisé pour rechercher des correspondances. Le second argument représente les options de l'expression régulière (ici 'gi' pour global et ignorer la casse).
            return arbre.vernaculaire.match(regex)  
        });
        // seconde proposition
        let matches2 = arbres.filter(arbre => {
            const regex = new RegExp(`${searchText}`, 'gi');
            return arbre.vernaculaire.match(regex)  
        });
        // Si le texte saisi est vide, on ne propose rien
        if (searchText.length === 0) {
            matches = [];
            matchList.innerHTML = '';
        }
        // Génère le html pour chaque valeur
        outputHtml(matches);
        outputHtml2(matches2);

    };

    // Renvoie le html pour chaque valeur
    const outputHtml = matches => {
        // Si il y a des résultats, on les affiche
        if (matches.length > 0) {

            // Réduit le nombre de résultats
            const html = matches.slice(0, 3).map(match => `
                <li class="card card-body bg-dark mb-1">
                    <a class="text-decoration-none link-light" href="element.php?search=${match.vernaculaire}">${match.vernaculaire} ${match.latin}</a>
                </li>
            `
            ).join('');
            matchList.innerHTML = html;
            
        }
    }

    const outputHtml2 = matches => {
        if (matches.length > 0) {

            const html = matches.slice(0, 3).map(match => `
                <li class="card card-body text-white bg-secondary mb-1">
                    <a class="text-decoration-none link-light" href="recherche.php?search=${match.vernaculaire}">${match.vernaculaire} (${match.famille})</a>
                </li>
            `
            ).join('');
            matchList2.innerHTML = html;
            
        }
    }
    // Ecoute l'évènement keyup
    search.addEventListener("keyup", () => searchArbres(search.value))

});