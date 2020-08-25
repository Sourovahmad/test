
<script>

$(document).ready(function(){
  $("button").click(function(){
    $.get("demo_test.asp", function(data, status){
      alert("Data: " + data + "\nStatus: " + status);
    });
  });
});



</script>


$.ajax({
    url: '/add_test',
    type: 'post',
    data: $('#submit_form').serialize(),
    success:function(data){
        console.log(data);
       
    },
    




$(document).ready(function(){



    $('#form_button').click(function(){

        $.ajax({
            url: 'add_test',
            type: 'POST',
            data: $('#submit_form').serialize(),
            success:function(data){
                console.log(data);
            } 
        })
        
      
        
        });
    
    


    $('#show_data').click(function(){
        $.get("http://127.0.0.1:8000/data"), function (data, status) {
          

            var html = '';
          
        
    jQuery.each(data, function (row) {

        html += '<tr>'
        html += '<td>' + data[row].id + '</td>'
        html += '<td>' + data[row].first_name + '</td>'
        html += '<td>' + data[row].last_name + '</td>'
        html += '<td>' + data[row].email + '</td>'
        html += '<td>' + data[row].phone + '</td>'
        html += '<td>'

        html += '</td> </tr>'; ``
        $("#mytable").html(html);

      
      });
      
      
          });
    
    });
   

});




$(document).ready(function(){

    $("#show_data").click(function(){
      $.get("http://127.0.0.1:8000/data", function(data, status){
        var html = '';
            
          
            jQuery.each(data, function (row) {
        
                html += '<tr>'
                html += '<td>' + data[row].id + '</td>'
                html += '<td>' + data[row].first_name + '</td>'
                html += '<td>' + data[row].last_name + '</td>'
                html += '<td>' + data[row].email + '</td>'
                html += '<td>' + data[row].phone + '</td>'
                html += '<td>'
        
                html += '</td> </tr>'; ``
                $("#mytable").html(html);
        
              
              });
      });
    });
  });