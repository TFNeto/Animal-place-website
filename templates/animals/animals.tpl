{include file='common/header.tpl'}
<<<<<<< HEAD
   
=======

<h2>Animals</h2>
<div class="container">   
    
>>>>>>> 3e76b1609cd9812fca060b8217d2509be63ca82f
    {foreach $animals as $animal} 
        <div class="gallery">
            <p><img src= {$animal.picture} alt='animals'></p>
            <div class="overlay">
			    <div class="text">
<<<<<<< HEAD
                <p> {$animal.name}</p>
                <p> {$animal.breed}</p>
                <p> {$animal.age}</p>
=======
                
>>>>>>> 3e76b1609cd9812fca060b8217d2509be63ca82f
                </div>
            </div>
        </div>
    {/foreach}
    
<<<<<<< HEAD

=======
</div>
>>>>>>> 3e76b1609cd9812fca060b8217d2509be63ca82f
{include file='common/footer.tpl'}


  