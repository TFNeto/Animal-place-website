{include file='common/header.tpl'}

<form method="POST" action="search.tpl">
    <input list="species" placeholder="Spicies">
        <datalist id="species">
            {foreach $species as $specie}
                <option value="{$specie.name}">
            {/foreach}
        </datalist>
    <input list="breeds" placeholder="Breeds">
        <datalist id="breeds">
             <option value="">
        </datalist>
</form>
    
{include file='common/footer.tpl'}