    <div class="col-12">
        <div class="row">
                <div class="col-sm-12"><h3>Weight calculator</h3></div>
        </div>
        
        <DIV id='controll'>
            
            <div class="row">
                <div class="col-sm-12"><h5 class="text-primary">1. Choose master bag size.</h5></div>
            </div>
        
            <div class="row form-group">   
                    <label for="masterSize" class="col-sm-4 control-label">Master bag weight:</label>
                    <div class="col-sm-offset-2 col-sm-4">
                        <select id='masterSize' class="form-control">
                                    <option>25</option>
                                    <option>20</option>
                                    <option>15</option>
                                    <option>12.5</option>
                        </select>
                    </div>
             </div>
            
            <div class="row">
                <div class="col-sm-12"><h5 class="text-warning">2. Fill bags qty.</h5></div>
            </div>
              
            <div class="row form-group">  
                    <label for="masterValue" class="col-sm-offset-2 col-sm-4 control-label">Master bag qty:</label>
                    <div class="col-sm-4">
                        <input type='text' id='masterValue' class = "form-control" value="0"/>
                    </div>
            </div>
            <div class="row form-group">
                    <label for="fiveKgValue" class="col-sm-offset-2 col-sm-4 control-label">5kg pre-bagged qty:</label>
                    <div class="col-sm-4">
                        <input type='text' id='fiveKgValue' class = "form-control" value="0"/>
                    </div>
            </div>
            <div class="row form-group">
                    <label for="twoAndHaflKgValue" class="col-sm-offset-2 col-sm-4 control-label">2.5kg pre-bagged qty:</label>
                    <div class="col-sm-4">
                        <input type='text' id='twoAndHaflKgValue' class = "form-control" value="0"/>
                    </div>
            </div>

            <div class="row form-group">
                    <label for="oneHalfKgValue" class="col-sm-offset-2 col-sm-4 control-label">1.5kg pre-bagged qty:</label>
                    <div class="col-sm-4">
                        <input type='text' id='oneHalfKgValue' class = "form-control" value="0"/>
                    </div>
            </div>

            <div class="row form-group">
                    <label for="oneKgValue" class="col-sm-offset-2 col-sm-4 control-label">1kg pre-bagged qty:</label>
                    <div class="col-sm-4">
                        <input type='text' id='oneKgValue' class = "form-control" value="0"/>
                    </div>
            </div>

            <div class="row form-group">
                    <label for="halfKgValue" class="col-sm-offset-2 col-sm-4 control-label">500g pre-bagged qty:</label>
                    <div class="col-sm-4">
                        <input type='text' id='halfKgValue' class = "form-control" value="0"/>
                    </div>
            </div>

            <div class="row form-group">
                    <label for="quaterSize" class="col-sm-offset-2 col-sm-4 control-label">250g pre-bagged qty:</label>
                    <div class="col-sm-4">
                        <input type='text' id='quaterSize' class = "form-control" value="0"/>
                    </div>
            </div>
            
             <div class="row">
                <div class="col-sm-12"><h5 class="text-success">3. Calculate.</h5></div>
            </div>           
            
            <div class="row form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <input type='button' class="btn btn-secondary" onclick='calculateWeight();' value='Calculate'/>
                  </div>
            </div>
            
            <div class="row form-group">
                  <div class="col-sm-offset-2 col-sm-10" id= "calcWeightResult">
                    
                  </div>
            </div>
        </DIV>
    </div>