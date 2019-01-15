{include file='common/header.tpl'}
    <div class="container">  
    {foreach $animals as $animal} 
        <div class="gallery">
            <p><img src= {$animal.picture} alt='animals'></p>
            <div class="overlay">
			    <div class="text">
                <p> {$animal.name}</p>
                <p> {$animal.breed}</p>
                <p> {$animal.age}</p>
                {if $isLoggedIn}
                
                   <input type="button" id="{$animal.pet_id}" value="Adopt Me, please!">
                {/if}
                </div>
            </div>
        </div>
    {/foreach}
    </div>
{include file='common/footer.tpl'}


  