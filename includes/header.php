<header>
    <h1>Autocompletion</h1>
    <form>
        <input type="text" id="search-input-header" name="searchInput" placeholder="Rechercher un arbre">
        <input type="submit" value="Rechercher">
        <select id="result-selector"></select>
    </form>

</header>

<script>
$(document).ready(function(){
    $("#search-input-header input[name='searchInput']").keypress(function(){
        let search = $(this).val();
        if(search != ""){
            fetch("search.php?search="+search)
            .then(response => response.text())
            .then(data => {
                $("#result").html(data);
            });
        }
        else{
            $("#result").html("");
        }
    });
});
</script>
