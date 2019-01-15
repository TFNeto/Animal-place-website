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
    
    $.getJSON(BASE_URL + "api/users/get_adoptionstatus.php",function(status){    
        $('#myadoption').html('')
        $('#myadoption').append('<table><thead><tr><th>Pet name</th><th>Status</th></tr></thead><tbody>')
        $.each(status, function(_, stat) {
            $('#myadoption').append('<tr><td>'+stat.nome+'</td><td>'+stat.estado+'</td></tr>')
        })
        $('#myadoption').append('</tbody></table>')
    })
    
})

$('#adoptlist').click(function (a){
    a.preventDefault()
    
    $.getJSON(BASE_URL + "api/users/get_adoptionlist.php",function(lista){     
        $('#myadoption').html('')
        $('#myadoption').append('<table><tr><th>Pet id</th><th>Pet</th> <th colspan="2">Adopt</th></tr>')
        $.each(lista, function(_, list) {
            $('#myadoption').append('<tr><td>'+list.pet_id+'</td><td>'+list.pet_id+'</td><td><button name="confirm" value='+list.pet_id+'>Confirm</button> </td><td><button name="cancel" value='+list.pet_id+'>Cancel</button> </td></tr>')
        })
        $('#myadoption').append('</table>')
    })
    
})
