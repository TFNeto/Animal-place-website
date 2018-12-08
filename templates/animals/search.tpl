{include file='common/header.tpl'}

{literal}
   
    <script>
    $(() => {
        const foo = document.getElementById('specie');
        document.getElementById('specie').onchange = function() {
            getallbreeds()
            $('#breeds').append('<option value="foo">');
        };
    });
    </script>
{/literal}


<form method="POST" action="search.tpl">
        <select id="specie" placeholder="Spicies...">
            <option value="" disabled selected>Select Specie...</option>
            {foreach $species as $specie}
                <option value="{$specie.name}">{$specie.name}</option>
            {/foreach}
        </select>
    <input list="breeds" placeholder="Breeds">
        <datalist id="breeds">
             <option value="">
        </datalist>
</form>
    
{include file='common/footer.tpl'}