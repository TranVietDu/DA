var loadFile = function (event) {
  var image = document.getElementById('output');
  image.src = URL.createObjectURL(event.target.files[0]);
};

$('.sua').click(function () {
  $('.sua').css({
    'background-color': 'white',
    'color': 'black',
    'font-size': '30px',
  });
});
$('.sua').blur(function () {
  $('.sua').css({
    'background-color': '#4f4e48',
    'color': 'white',
    'font-size': '30px'
  });
});

