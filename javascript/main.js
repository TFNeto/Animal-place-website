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
    
    $.getJSON(BASE_URL + "api/users/signin.php",{username,password},function(success){
     location.reload(true)
    })
})