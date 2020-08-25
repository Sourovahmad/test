<!DOCTYPE html>
<html>

<head>
   <title>hello jquery </title>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



   <script>
      $(document).ready(function() {
         $('#form_button').click(function() {

            var data = $('#submit_form').serialize();

            $.ajax({

               type: 'get',
               data: data,
               url: '/add_test',
               success: function() {
                  alert("success");
               },
               error: function() {

                  alert("not saved");
               },

            });
            $.get("http://127.0.0.1:8000/data", function(data, status) {
               var html = '';


               jQuery.each(data, function(row) {

                  html += '<tr>'
                  html += '<td>' + data[row].id + '</td>'
                  html += '<td>' + data[row].first_name + '</td>'
                  html += '<td>' + data[row].last_name + '</td>'
                  html += '<td>' + data[row].email + '</td>'
                  html += '<td>' + data[row].phone + '</td>'
                  html += '<td>'

                  html += '</td> </tr>';
                  ``
                  $("#mytable").html(html);
               });
            });
     });

 $("body").on("click", "#deletedata", function () {


  console.log("clicked");

  $("#mytable").html("");



  var dataid = $(this).attr('dataid');

  console.log("Clicked On " + dataid);

  $(dataid).remove();   



});


  });

 $(document).ready(function(){
     
   $('#show_data').click(function(){
      $.get("http://127.0.0.1:8000/data", function(data, status) {
               var html = '';


               jQuery.each(data, function(row) {

                  html += '<tr>'
                  html += '<td>' + data[row].id + '</td>'
                  html += '<td>' + data[row].first_name + '</td>'
                  html += '<td>' + data[row].last_name + '</td>'
                  html += '<td>' + data[row].email + '</td>'
                  html += '<td>' + data[row].phone + '</td>'
                  html += '<td>'
                          
                  html += '<button type="button" dataid=' + data[row].id + ' id="deletedata" class="btn btn-danger">delete</button>'
                  html += '</td> </tr>';
                  ``
                  $("#mytable").html(html);
               });
            });

   });

 });



   </script>
</head>

<body>







   <form id="submit_form">

      @csrf

      first name : <input type="text" id="first_name" name="first_name">
      last name : <input type="text" id="last_name" name="last_name"> </br>
      email : <input type="text" id="email" name="email"></br>
      phone : <input type="text" id="phone" name="phone"></br>
   </form>
   <button type="buton" id="form_button"> save </button>
   <button type="button" id="show_data"> show </button>


   <table>
      <thead>
         <tr>
            <th scope="col">id</th>
            <th scope="col">first_name</th>
            <th scope="col">last_name</th>
            <th scope="col">email</th>
            <th scope="col">phone</th>
            <th scope="col">action</th>


         </tr>
      </thead>
      <tbody id="mytable">
         <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            
          
         </tr>

      </tbody>
   </table>


</body>

</html>