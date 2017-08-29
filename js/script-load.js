$(document).ready(function() {
   $( "select[name='item_type']" ).change(function(e){
      $('.description').empty();
      var type = $('#item-type').val();

      bed = '<option value="1">Single</option>'+
            '<option value="2">Queen</option>'+
            '<option value="3">King</option>' +
            '<option value="4">Super King</option>';

      sofa = '<option value="1">1 Seater</option>'+
            '<option value="2">2 Seater</option>'+
            '<option value="3">3 Seater</option>' +
            '<option value="4">4 Seater</option>';

      dinning = '<option value="1">1 Seater</option>'+
               '<option value="2">2 Seater</option>'+
               '<option value="3">3 Seater</option>' +
               '<option value="4">4 Seater</option>'+
               '<option value="5">5 Seater</option>' +
               '<option value="6">6 Seater</option>'+
               '<option value="7">7 Seater</option>' +
               '<option value="8">8 Seater</option>'+
               '<option value="9">9 Seater</option>' +
               '<option value="10">10 Seater</option>'+
               '<option value="11">12 Seater</option>' +
               '<option value="12">12 Seater</option>';

      others = '<option value="1">1</option>'+
               '<option value="2">2</option>'+
               '<option value="3">3</option>' +
               '<option value="4">4</option>'+
               '<option value="5">5</option>' +
               '<option value="6">6</option>'+
               '<option value="7">7</option>' +
               '<option value="8">8</option>'+
               '<option value="9">9</option>' +
               '<option value="10">10</option>'+
               '<option value="11">12</option>' +
               '<option value="12">12</option>';

      if(type == "SOF"){
         $('.description').append(sofa);
      } else if(type == "BED"){
         $('.description').append(bed);
      } else if (type == "DINCHR") {
         $('.description').append(dinning);
      } else {
         $('.description').append(others);
      }
   });
});