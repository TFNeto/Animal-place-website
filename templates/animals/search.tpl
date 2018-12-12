{include file='common/header.tpl'}

<form id="search">
        <select id="specie" placeholder="Spicies..." required>
            <option value="" disabled selected>Select Specie...</option>
            {foreach $species as $specie}
                <option value="{$specie.id_sp}">{$specie.name}</option>
            {/foreach}
        </select>
        <select id="breeds" placeholder="Breeds" required>
         <option value="" disabled selected>Select Breed...</option>
        </select>
        <button type="submit" name="search">Search</button>
</form>

<article id="display">
    <div id="pic">
    </div>
</article>   

{include file='common/footer.tpl'}