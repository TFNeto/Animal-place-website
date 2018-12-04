{include file='common/header.tpl'}
    
<section id="animals">
    <h2>Animals</h2>
    
    {foreach $animals as $animal} 
   
    <article class="animal">
        <p><img src= {$animal.picture} alt='animals'></p>
    </article>
    {/foreach}

</section>
    
{include file='common/footer.tpl'}