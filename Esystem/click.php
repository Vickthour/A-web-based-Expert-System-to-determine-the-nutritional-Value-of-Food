<?php 
include('conn.php');
	session_start();
	if(!$_SESSION['id']){
	header('location: login.php');	
	}
	else{
    if (isset($_POST['Test'])) {
      $name = $_SESSION['name'];
      $sex = $_POST['sex'];
      $age = $_POST['age'];
      $height = $_POST['height'];
      $weight = $_POST['weight'];
      $strength = $_POST['strength'];
      $foodclass = $_POST['foodclass'];
      $eatinterval = $_POST['eatinterval'];
      $gym = $_POST['gym'];
      $options = $_POST['options'];

      $check = $con->query("INSERT INTO test(name,sex,age,height,weight,strength,foodclass,eatinterval,gym,options) VALUE('$name','$sex','$age','$height','$weight','$strength','$foodclass','$eatinterval','$gym','$options')");
     
     if ($check){
         echo "Inserted";
     }else{
        echo "declined";
    }
  }
?>
<html>
	<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Tester | Apex page</title>
        <link href="asset/css/option.css" rel="stylesheet" type="text/css"/>
		    <link rel="stylesheet" href="asset/css/bootstrap.css"/>
        <link href="asset/css/font-awesome.css" rel="stylesheet">
        <link href="asset/css/style.css" rel="stylesheet" type="text/css" media="all" />
        <script src="asset/js/bootstrap.min.js"></script>
	</head>
	<body onload="content_load()">
        <script type="text/javascript" src="asset/js/jquery-3.5.1.min.js"></script>

      <div class="container">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#infoPanel" role="tab">First</a>
          <li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#ads" role="tab">Seconds</a>
          <li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#placementPanel" role="tab">Third</a>
          <li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#schedulePanel" role="tab">Four</a>
          <li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#reviewPanel" role="tab">Fifth</a>
          <li>
        </ul>
        
<!--First page -->
<form method="POST">
        <div class="tab-content mt-2">
          <div class="tab-pane fade active" id="infoPanel" role="tabpanel">
            <h4>Test</h4>
            <div class="form-group col-md-12" method="POST" style="margin-top: 10px">
                <div class="col-md-8" style="justify-content: center;">
                  <label for="sex" class="col-md-12">Your Sex?</label>
                  <div class="row-md-12">
                    <label class="col-md-3 click form-check-input" style="background-image: url(asset/img/img1.jpg)"> <i class="fa fa-male"> Male</i>
                      <input type="radio" name="sex" id="sex" value="Male">
                    </label>

                    <label class="col-md-3 click form-check-input" style="background-image: url(asset/img/img1.jpg)"> <i class="fa fa-female">Female</i>
                      <input type="radio" name="sex" id="sex" value="Female" >
                    </label>

                    <label class="col-md-3 click form-check-input" style="background-image: url(asset/img/img1.jpg)"> <i class="fa fa-male-female">Transgender</i>
                      <input type="radio" name="sex" id="sex" value="Transgender">
                    </label>
                  </div>
                </div>

                <div class="col-md-4">
                  <label class="col-md-12">Your Age Please? 
                    <select name="age" class="date form-select" style="padding: 10px; border-radius:6px; background-color: #f0ffff; ">
                        <option disabled>Years</option>
                        <?php for ($i=1; $i <= 100; $i++) { 
                            echo "<option class='form-control' value=".$i.">".$i.' Yrs'."</option>";
                        } ?>
                    </select>
                  </label>
             </div>
            </div>
            <a class="btn btn-secondary" id="infoContinue">Continue</a>
          </div>
      


<!--Second page -->

          <div class="tab-pane fade" id="ads" role="tabpanel">
            <h4>gggggggggggg</h4>
            <div class="form-group" method="POST" class="col-md-12" style="margin-top: 10px">
                <br/>

            <label class="col-md-4"><b for="Height" >Height</b>
                <input type="number" name="height" id="Height" maxlength="100" minlength="1" placeholder="Enter Height (e.g 5fit)" required>
              </label>
              <label class="col-md-4"><b for="Weight" >Weight</b>
                <input type="number" name="weight" id="Weight" placeholder="Enter Weight" required>
              </label>

               <label class="col-md-4"><b class="col-md-1" for="strength" >Strength</b>
                <input type="range" name="strength" maxlength="100" minlength="0"  id="strength"  ondrag="value" required>
              </label>

            </div>
            <a class="btn btn-secondary" id="adsContinue">Continue</a>
         </div>
          


<!--Third page -->
          <div class="tab-pane fade" id="placementPanel" role="tabpanel">
            <h4>Placement</h4>
            <div id="accordion" class="mb-3" role="tablist" aria-multiselectable="true">
              <div class="card">
                <div class="card-header" role="tab" id="headingOne">
                  <h5 class="mb-0">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Favourite Class Of Food
                    </a>
                  </h5>
                </div>

                <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                  <div class="card-block">
                    <div class="form-group">
                      <label for="foodclass">Select a Food class</label>
                      <select class="form-control" id="foodclass" name="foodclass" required>
                        <option selected disabled>Choose a class</option>
                        <option value="Carbonadrate">Carbonadrate</option>
                        <option value="Protein">Protein</option>
                        <option value="Fat & Oil">Fat & Oil</option>
                        <option value="Miniral Salt">Miniral Salt</option>
                        <option value="Vitamin">Vitamin</option>
                        <option value="Water">Water</option>
                        <option value="Roughages">Roughages</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="card">
                <div class="card-header" role="tab" id="headingThree">
                  <h5 class="mb-0">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Daily Deit
                    </a>
                  </h5>
                </div>
                <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                  <div class="card-block">
                    <div class="form-group" method="POST">
                      <label for="eatinterval">How many time do you eat a day?</label>
                      <select class="form-control" id="eatinterval" name="eatinterval" required>
                        <option selected disabled>Choose an Options</option>
                        <option value="1">Once</option>
                        <option value="2">Twice</option>
                        <option value="3">Thrices</option>
                        <option value="4">Quad</option>
                        <option value="4+">More</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <a class="btn btn-secondary" id="placementContinue">Continue</a>
          </div>


<!--Four page -->
          <div class="tab-pane fade" id="schedulePanel" role="tabpanel">
            <h4>Miscellenous</h4>
            <div id="scheduleAccordion" class="mb-3" role="tablist" aria-multiselectable="true">

            <h5>Do you gym?</h5>
            <div class="form-group col-md-12" method="POST" style="display: flex; flex-direction: row; justify-content: space-between;" >
              <label class="col-md-3 click" style="background-image: url(asset/img/img1.jpg)">
                <input type="radio" name="gym" value="Often">Often
              </label>

              <label class="col-md-3 click" style="background-image: url(asset/img/img2.jpg)">
                <input type="radio" name="gym" value="Regularly">Regularly
              </label>

              <label class="col-md-3 click" style="background-image: url(asset/img/s10.jpeg)">
                <input type="radio" name="gym" value="Never">Never
              </label>    
            </div>


              <div class="card">
                <div class="card-header" role="tab" id="headingTwo">
                  <h5 class="mb-0">
                    <a class="collapsed" data-toggle="collapse" data-parent="#scheduleAccordion" href="#scheduleAccordioncollapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Other Options
                    </a>
                  </h5>
                </div>
                <div id="scheduleAccordioncollapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                  <div class="card-block" method="POST" >
                    <h6>Others (check all valid options)</h6>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="options" value="Non-Alcholic">
                        Non-Alcholic Drinks
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="options" value="Alcholic">
                        Alcholic Drinks
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="options" value="Fruits">
                        Fruits
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="options" value="OnMedications">
                        On Medication
                      </label>
                    </div>

                  </div>
                </div>
              </div>
            </div>
            <a class="btn btn-secondary" id="scheduleContinue">Continue</a>
          </div>

          <div class="tab-pane fade" id="reviewPanel" role="tabpanel">
          <div method="POST">
             <h4>Review</h4>
             <button class="btn btn-primary btn-block" name="Test">Activate this Campaign!</button>
          </div>
          </div>
        </div>
        <div class="progress mt-5" style="margin-top: 3%">
          <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">Step 1 of 5</div>
        </div>

        <div class="modal-footer">
            <a class="btn btn-danger" type="button" href="services.php">Cancel</a> 
        </div>

      </div>

      
 

<!-- footer-->
        <footer class="container-fluid" style="background:#444; font-size:19px; color:#fff;">
            <p align="center" style="padding-top:5px;">Copyright &copy; 2020</p>
            <p align="center">SAM-PRESS</p>
        </footer>
    

<script type="text/javascript">
         $(function () {

              $('#infoContinue').click(function (e) {
                e.preventDefault();
                $('.progress-bar').css('width', '40%');
                $('.progress-bar').html('Step 2 of 5');
                $('#myTab a[href="#ads"]').tab('show');
              });

              $('#adsContinue').click(function (e) {
                e.preventDefault();
                $('.progress-bar').css('width', '60%');
                $('.progress-bar').html('Step 3 of 5');
                $('#myTab a[href="#placementPanel"]').tab('show');
              });

              $('#placementContinue').click(function (e) {
                e.preventDefault();
                $('.progress-bar').css('width', '80%');
                $('.progress-bar').html('Step 4 of 5');
                $('#myTab a[href="#schedulePanel"]').tab('show');
              });

              $('#scheduleContinue').click(function (e) {
                e.preventDefault();
                $('.progress-bar').css('width', '100%');
                $('.progress-bar').html('Step 5 of 5');
                $('#myTab a[href="#reviewPanel"]').tab('show');
              });
              
              $('#activate').click(function (e) {
                e.preventDefault();
                var formData = {
                  campaign_name: $('#campaignName').val(),
                  start_date: $('#start-date').val(),
                  end_date: $('#end-date').val(),
                  days: {
                    sunday: $('#sunday').prop('checked'),
                    monday: $('#monday').prop('checked'),
                    tuesday: $('#tuesday').prop('checked'),
                    wednesday: $('#wednesday').prop('checked'),
                    thurday: $('#thursday').prop('checked'),
                    friday: $('#friday').prop('checked'),
                    saturday: $('#saturday').prop('checked'),
                  },
                  start_time: $('#start-time').val(),
                  end_time: $('#end-time').val()
                }
                alert(JSON.stringify(formData));
              })
            })
</script>

<script type="text/javascript" src="asset/js/bootstrap-3.1.1.min.js"></script>
</body>
</html>
<?php } ?>