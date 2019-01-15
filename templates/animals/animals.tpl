{include file='common/header.tpl'}
   
    {foreach $animals as $animal} 
        <div class="gallery">
            <p><img src= {$animal.picture} alt='animals'></p>
            <div class="overlay">
			    <div class="text">
                <p> {$animal.name}</p>
                <p> {$animal.breed}</p>
                <p> {$animal.age}</p>
                </div>
            </div>
        </div>
    {/foreach}
    

{include file='common/footer.tpl'}


  