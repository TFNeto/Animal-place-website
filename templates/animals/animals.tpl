{include file='common/header.tpl'}

<h2>Animals</h2>
<div class="container">   
    
    {foreach $animals as $animal} 
        <div class="gallery">
            <p><img src= {$animal.picture} alt='animals'></p>
            <div class="overlay">
			    <div class="text">
                
                </div>
            </div>
        </div>
    {/foreach}
    
</div>
{include file='common/footer.tpl'}


  