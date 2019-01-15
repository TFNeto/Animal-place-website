let BASE_URL = 'https://gnomo.fe.up.pt/~up201402912/trabalhosSiem/PHP2/';

$('#specie').change(function() {
    const id_sp = $(this).val()
    $.getJSON(BASE_URL + "api/animals/get_breeds.php", {id_sp}, function(breeds) {
        $('#breeds').html('')
        $('#breeds').html('<option value="" disabled selected>Select Breed...</option>')
        $.each(breeds, function(_, breed) {
            $('#breeds').append('<option value="' + breed.id_bre + '"> '+ breed.name +'</option>')
        })
    })
})

$('#search').submit(function(e) {
    const id_bre = $('#breeds').val()

    e.preventDefault()

    $.getJSON(BASE_URL + "api/animals/get_search.php", {id_bre}, function(animals) {
        $('#display').html('')
        $.each(animals, function(_, animal) {
            $('#display').append('<div><img src="'+animal.picture+'"  alt="'+animal.petname+'"></div>')
        })
    })
})

$('.login').click(function(a){
    
    a.preventDefault()
    const username = $('#username').val()
    const password = $('#password').val()
    
    $.getJSON(BASE_URL + "api/users/signin.php",{username,password},function(success){     
        if(success){
           location.reload(true)
        }
        if(!success){//error append
        }
    })
    
})
$('#adoptstatus').click(function (a){
    var html=''
    $.getJSON(BASE_URL + "api/users/get_adoptionstatus.php",function(status){    
        $('#myadoption').html('')
        html+='<table><tr><th>Pet name</th><th>Status</th></tr>'
        $.each(status, function(_, stat) {
            html+='<tr><td>'+stat.nome+'</td><td>'+stat.estado+'</td></tr>'
        })
        html+='</table>'
        $('#myadoption').append(html)
    })
    
})

$('#adoptlist').click(function (a){
    a.preventDefault()
    var html=''
    $.getJSON(BASE_URL + "api/users/get_adoptionlist.php",function(lista){     
        $('#myadoption').html('')
        html+='<table><tr><th>Pet id</th><th>Pet</th> <th colspan="2">Adopt</th></tr>'
        $.each(lista, function(_, list) {
            html+='<tr><td>'+list.pet_id+'</td><td>'+list.pet_id+'</td><td><button name="confirm" value='+list.pet_id+'>Confirm</button> </td><td><button name="cancel" value='+list.pet_id+'>Cancel</button> </td></tr>'
        })
        html+='</table>'
        $('#myadoption').append(html)
    })
    
})

$('#candmanagment').click(function (a){
    a.preventDefault()
    var html=''
    
    $.getJSON(BASE_URL + "api/users/get_pendingstatus.php",function(status){     
        $('#myadmin').html('')
        html+='<table><tr><th>User</th><th>Pet</th> <th colspan="2">Adopt</th></tr>'
        $.each(status, function(_, stat) {
            html+='<tr><td>'+stat.name+'</td><td>'+stat.pet+'</td><td><form method="post" action="'+BASE_URL+'api/users/confirmadoption.php"><button name="confirm" class="managementconfirm" value='+stat.order_id+'>Confirm</button></form> </td><td><form method="post" action="'+BASE_URL+'api/users/canceladoption.php"><button name="cancel" class="managementcancel" value='+stat.order_id+'>Cancel</button> </form></td></tr>'
        })
        html+='</table>'
        $('#myadmin').append(html)
    })
    
})
$('#registeranim').click(function (a){
    $('#myadmin').html('')
    var html=''
    html+='<form class="rform" action="'+BASE_URL+'api/animals/registeranimal.php" method="post">'
    html+='<label class="lasign" for="name">Name</label>'
    html+='<input required class="insign" type="text" name="name" id="name" placeholder="Name"><br></br>'
    html+='<label class="lasign" for="age">Age</label>'
    html+='<input required class="insign" type="text" name="age" id="age" placeholder="Age (months/years)"><br></br>'
    html+='<label class="lasign" for="specie">Specie</label>'
    html+='<select id="specie" placeholder="Spicies..." required>'
    html+='<option value="" disabled selected>Select Specie...</option></select><br></br>'
    html+='<label class="lasign" for="breed">Breed</label>'
    html+='<select id="breeds" placeholder="Breeds" required>'
    html+='<option value="" disabled selected>Select Breed...</option></select>'
    html+='<br></br><label class="lasign" for="contact">Contact</label>'
    html+='<input required class="insign" type="text" name="contact" id="contact" placeholder="Contact">'
    html+='<label class="lasign" for="picture">Picture</label>'
    html+='<input required class="insign" type="text" name="picture" id="picture" placeholder="Picture"><br></br>'
    html+='<button class="signbut" type="submit" name="sign">Register Animal</button>'
    html+='</form>'
    $('#myadmin').append(html)
    $.getJSON(BASE_URL + "api/animals/get_species.php", function(species) {
        $.each(species, function(_, specie) {
            $('#specie').append('<option value="' + specie.id_sp + '"> '+ specie.name +'</option>')
        })
    })
})
