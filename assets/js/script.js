//Votre site doit contenir les pages suivantes : - Une page d’accueil (index.php) : Cette page doit ressembler à la page d’accueil d’un moteur de recherche. - Une page de résultats de recherche (recherche.php/?search=) : Cette page présente une liste des éléments qui correspondent à search présent dans GET. - Une page présentant un élément (element.php/?id=) : Cette page présente les informations contenues dans la base de données qui correspondent à l’id présent dans GET. Le header de vos pages doit contenir une barre de recherche. Cette barre de recherche suggère des résultats liés au fur et à mesure que l’utilisateur écrit, divisés en deux parties : - En premier : les résultats qui correspondent exactement à la recherche (qui commencent par ce que l’utilisateur écrit) - En second : les résultats qui contiennent la recherche de l’utilisateur Ces deux parties doivent se trouver dans la même liste, mais une petite séparation doit se trouver entre les deux.

document.addEventListener('DOMContentLoaded', function() {
    // Attach submit event listener to the form in the header
    document.getElementById('search-input-index').addEventListener('submit', searchHandler);
    document.getElementById('search-input-header').addEventListener('submit', searchHandler);

    // Define the search handler function
    function searchHandler(event) {
        event.preventDefault(); // prevent form submission
        let form = event.target; // get the submitted form
        let input = form.elements.searchInput; // get the input field
        let searchTerm = input.value; // get the search term

        // Send a GET request to the PHP script with the search term
        fetch(`recherche.php?search=${searchTerm}`)
            .then(response => response.json())
            .then(data => {
                // Do something with the search results
                console.log(data);
            })
            .catch(error => {
                console.error('Error:', error);
            });

        // Reset the input field after search
        form.reset();
    }
    // Ready function
    $(document).ready(function(){
        
        function strUcFirst(a){
            return (a+'').charAt(0).toUpperCase()+a.substr(1);
        }
        // Création de la liste des résultats de recherche
        let select = document.createElement('select');
        select.setAttribute('id', 'search-results');
        document.getElementById('result').appendChild(select);
        
        //Lorsqu'une touche est pressée dans la barre de recherche
        $("#search-input-header input[name='searchInput']").keypress(function(){
            $.post(
                //Page vers laquelle est envoyée la requête
                'recherche.php',
                {
                    //Récupération des inputs du formulaires
                    search : $("input").val(),
                },
                function(data){
                    let results = JSON.parse(data);
                    let searchTerm = ($("input").val());
                    searchTerm = strUcFirst(searchTerm);
                    let exactResults = [];
                    let partialResults = [];

                    results.forEach(result => {
                        if(result.startsWith(searchTerm) == true) {
                        exactResults.push(result);
                        } else if(result.includes(searchTerm)) {
                        partialResults.push(result);
                        }
                    });                    

                    //Affichage des résultats
                    let list = document.getElementById('search-results');

                    // On vide la liste des résultats précédents
                    list.innerHTML = "";

                    //Ajout des résultats exacts en premier
                    exactResults.forEach(function(item) {
                        let li = document.createElement('li');
                        li.innerHTML = item;
                        list.appendChild(li);
                    });

                    //Ajout d'une séparation
                    let separator = document.createElement('hr');
                    list.appendChild(separator);

                    //Ajout des résultats partiels
                    partialResults.forEach(function(item) {
                        let li = document.createElement('li');
                        li.innerHTML = item;
                        list.appendChild(li);
                    });
                }
            );
        });
    });
});