console.log("HelloWorld");
// document.addEventListener('DOMContentLoaded', function() {
//     var elems = document.querySelectorAll('.sidenav');
//     var instances = M.Sidenav.init(elems, options);
//   });

  // Initialize collapsible (uncomment the lines below if you use the dropdown variation)
//   var collapsibleElem = document.querySelector('.collapsible');
//   var collapsibleInstance = M.Collapsible.init(collapsibleElem, options);

  // Or with jQuery

  $(document).ready(function(){
    $('.sidenav').sidenav();
    // edge: "left"
  });

  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.slider');
    var instances = M.Slider.init(elems, {'height' : 800, 'indicators' : false});
    });

//   $(document).ready(function(){
//     $('.slider').slider();
//     height: "100%";
//   });