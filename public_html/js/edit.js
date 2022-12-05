(function(){
  var opened = false;
  var select = $('classe');
  select.click(function(e){
    opened = !opened
    if(opened){
      select.attr('size', 10);
    } else {
      select.attr('size', 1);
    }
  })  
  
})()
