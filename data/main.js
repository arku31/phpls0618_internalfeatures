$('#submit').on('click', function() {
  var superperemennaya = $('#id').val();

  $.ajax({
    url: '/ajax.php',
    data: {
      id: superperemennaya
    },
    dataType: 'json'
  }).done(function(resultat) {
    $('#result').html(resultat.name + ' ' + resultat.email)
  })

});