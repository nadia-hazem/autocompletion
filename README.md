# autocompletion
Search module with auto-completion

## Task's subject
Create an “autocompletion” database. In this database, create a table that has information on the theme of your choice (animals, celebrities,
athletes, pokemons, etc.). Add elements in this table (at least 20). Currently I used méditerranéen trees.
Your site should contain the following pages:
- A home page (index.php):
This page should look like the home page of a search engine.
- A search results page (recherche.php/?search=):
This page presents a list of elements that match search present in
GET.
- A page presenting an element (element.php/?id=):
This page presents the information contained in the database which
correspond to the id present in GET.
The header of your pages must contain a search bar. This search bar
suggests related results as the user writes, split into two
parts:
- First: the results that exactly match the search (which
start with what the user writes)
- Second: the results that contain the user's search

These two parts must be in the same list, but a small separation must
be in between.
