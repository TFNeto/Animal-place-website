{include file='common/header.tpl'}

<form method="POST" action="search.tpl">
    <input list="Breeds" placeholder="Breeds">
    <datalist>

        {foreach $breeds as $breed}
            <option value={$breed.name}>
        {/foreach}

    </datalist>
</form>
    
{include file='common/footer.tpl'}