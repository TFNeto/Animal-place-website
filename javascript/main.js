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