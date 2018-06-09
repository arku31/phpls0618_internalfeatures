
$('#submit').on('click', function() {
  var input = $('#id').val()

  $.ajax({
    url: '/data/ajax.php',
    method: 'POST',
    dataType: 'json',
    data: {
      id: input
    }
  }).done(function(data) {
    // var jsoned = JSON.parse(data);
    var html = 'email: ' + data.email + ';name: ' + data.name;
    $('#result').html(html);
  });
});

// $('#submit').on('click', function() {
//   var superperemennaya = $('#id').val();
//
//   $.ajax({
//     url: '/ajax.php',
//     data: {
//       id: superperemennaya
//     },
//     dataType: 'json'
//   }).done(function(resultat) {
//     $('#result').html(resultat.name + ' ' + resultat.email)
//   })
//
// });