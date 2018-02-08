<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    
    <div class="container">
     
      <div class="row">
       <div class="col-2"></div>
        <div class="col-8">
         <p>
           <button class="btn btn-primary" id="weight_btn" type="button" aria-expanded="false" aria-controls="collapseExample">
             Weight (seeds)
           </button>
           <button class="btn btn-primary" id="length_btn" type="button" aria-expanded="false" aria-controls="collapseExample">
             Length (backgrounds, airlines..)
           </button>
         </p>
        </div>
        <div class="col-2"></div>
        </div>
      
        <div class="row">
         <div class="col-12">
           <div id="collapseExample">
             <div class="card card-body">
                <div id="result">
                 <p><h6>Weight</h6> - use for all bulky bags</p>
                 <p><h6>Length</h6> - use for all measured products (Vetbeds, airlines,backgrounds etc..)</p>
                </div>
               
             </div>
           </div>
          </div>
        </div>
        
      
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
    <script>
     
      $(document).ready(function() {
         $('#weight_btn, #length_btn').click(function () {
          $('#weight_btn, #length_btn').removeClass('btn-info');
            if (this.id == 'weight_btn') {
             $('#weight_btn').addClass('btn-info');
             
             $.post( "pages/pageWeight.php", function( data ) {
                $('#result').html(data);
             });
            }
            else if (this.id == 'length_btn') {
             
             $('#length_btn').addClass('btn-info');
             
             $.post( "pages/pageLength.php", function( data ) {
                $('#result').html(data);
             });
            }
         });
       });
    </script>
    
    <script>
 function calculateWeight(){
    
    var master = $("#masterValue").val();
    var five = $("#fiveKgValue").val();
    var twoAndHalf = $("#twoAndHaflKgValue").val();
    var oneHalfKgValue = $("#oneHalfKgValue").val();
    var oneKgValue = $("#oneKgValue").val();
    var halfKgValue = $("#halfKgValue").val();
    var quaterSize = $("#quaterSize").val();
    var bagSize = $("#masterSize option:selected").text();

        
    if (master.length === 0){
        $("#masterValue").val(0);
    }
    if (five.length === 0){
        $("#fiveKgValue").val(0);
    }
    if (twoAndHalf.length === 0){
        $("#twoAndHaflKgValue").val(0);
    }
    if (oneKgValue.length === 0){
        $("#oneKgValue").val(0);
    }    

    if (oneHalfKgValue.length === 0){
        $("#oneHalfKgValue").val(0);
    }  

    if (halfKgValue.length === 0){
        $("#halfKgValue").val(0);
    }  
    if (quaterSize.length === 0){
        $("#quaterSize").val(0);
    }  
    
    
    $.post( "pages/calculations.php", { calc: "weight", bagSize: bagSize, masterValue: master, fiveKgValue: five, twoAndHaflKgValue: twoAndHalf, oneHalfKgValue: oneHalfKgValue, oneKgValue: oneKgValue, halfKgValue: halfKgValue, quaterSize: quaterSize})
  .done(function( data ) {
    $('#calcWeightResult').html( data );
  });
 }
 
 function calculateLen(){
    
    var master = $("#masterLenValue").val();
    var measuredLength = $("#measuredLength").val();
    $.post( "pages/calculations.php", { calc: "length",master:master, measuredLength: measuredLength})
     .done(function( data ) {
       $('#calcLenghtResult').html( data );
     });
    
 }
    </script>
    
  </body>
</html>