  M.AutoInit();


  $(document).ready(function(){
    $('select').formSelect();
  });



    var slider = document.getElementById('prix-slider');
    noUiSlider.create(slider, {
     start: [20, 80],
     connect: true,
     step: 1,
     orientation: 'horizontal', // 'horizontal' or 'vertical'
     range: {
       'min': 0,
       'max': 100
     },
     format: wNumb({
       decimals: 0
     })
    });


    $(document).ready(function(){
      $('.collapsible').collapsible();
    });
