<div class="col-12">
        <div class="row">
                <div class="col-sm-12"><h3>Length calculator</h3></div>
        </div>
        
        <DIV id='controll'>
            
            <div class="row form-group">
                <div class="col-sm-4"><h5 class="text-primary">1. Choose master roll length.</h5></div>
                <div class="col-sm-4">
                    <button class="btn btn-primary" id="resetValues" type="button" onclick='resetValues();' aria-expanded="false">Reset Values</button>
                </div>
                <div class="col-sm-4"><Div id="testId"></Div></div>
            </div>
        
            <div class="row form-group">   
                    <label for="masterSize" class="col-sm-4 control-label">Master roll length:</label>
                    <div class="col-sm-offset-2 col-sm-4">
                        <select id='masterLenValue' class="form-control">
                                    <option>50</option>
                                    <option>25</option>
                                    <option>20</option>
                                    <option>15</option>
                                    <option>10</option>
                                    <option>5</option>
                        </select>
                    </div>
             </div>
            
            <div class="row">
                <div class="col-sm-12"><h5 class="text-warning">2. Type measured length in meters (m)</h5></div>
            </div> 
              
            <div class="row form-group">  
                    <label for="measuredLength" class="col-sm-offset-2 col-sm-4 control-label">Length :</label>
                    <div class="col-sm-4">
                        <input type='text' id='measuredLength' class = "form-control inputValue" value="0"/>
                    </div>
            </div>
          <!--  
             <div class="row">
                <div class="col-sm-12"><h5 class="text-success">3. Calculate.</h5></div>
            </div>           
            
            <div class="row form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <input type='button' class="btn btn-secondary" onclick='calculateLen();' value='Calculate'/>
                  </div>
            </div>
            
            <div class="row form-group">
                  <div class="col-sm-offset-2 col-sm-10" id= "calcLenghtResult">
                    
                  </div>
            </div>
            -->
        </DIV>
    </div>

        <script>
     
      $(document).ready(function() {
           $('.inputValue').focus(function(){
                if($(this).val() === '0'){
                    $(this).val('');
                }
                if($(this).val() != '0'){
                    $(this).select();
                }
            });
            
            $('.inputValue').focusout(function(){
                if($(this).val().length === 0){
                    $(this).val(0);
                }
            });
           
           $('.inputValue').on('keyup', function(){
            console.log("d");
               calculateLen();
           });
           
      });
        </script>