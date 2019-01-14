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

$('#signin').submit(function(a){
    
    const username = $('#username').val()
    const password = $('#password').val()
    const status = false;
    
    $.getJSON(BASE_URL + "api/users/signin.php",{username,password},function(success){     
    status=success;
    })
    if(status){
        location.reload(true)
    }
    if(!status){
        console.log("failed")
    }
    console.log(stauts)
})
$('#adoptstatus').click(function (){
    $.getJSON(BASE_URL + "api/users/get_adoptionstatus.php",function(lista){     
        $('#myadoption').html('')
        $('#myadoption').append('<table><tr><th>Pet name</th><th>Status</th></tr>')
        $('#myadoption').append('</table>')
    })
    
})

$('#adoptlist').click(function (){
    
    $.getJSON(BASE_URL + "api/users/get_adoptionlist.php",function(lista){     
        $('#myadoption').html('')
        $('#myadoption').append('<table><tr><th>Pet name</th><th>Status</th></tr>')
    })
    
})
