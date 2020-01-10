<?php
require_once ('functions.php');
if(!isLoggedIn()){
  header('location: index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/main.css">
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" rel="stylesheet">
</head>
<body>
<?php
  require_once('header.php');
 ?>    <div class="container p-0">
        <div class="card">
            <div class="card-body">
                <h2 class="text-center my-4">Personal Details</h2>
                <form action="functions.php" method="POST">
                    <div class="container">
                      <div class="avatar-upload">
                        <div class="avatar-edit">
                          <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                          <label for="imageUpload"></label>
                        </div>
                        <div class="avatar-preview">
                          <div id="imagePreview" style="background-image: url(http://www.nextfrontierinclusion.org/wp-content/uploads/job-manager-uploads/files/2017/12/user2-160x160.jpg);">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                        <label for="fullname" class="col-md-2 col-form-label">Full Name<sup>*</sup></label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="fullname" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fathername" class="col-md-2 col-form-label">Father's Name<sup>*</sup></label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="fathername" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="address" class="col-md-2 col-form-label">Address<sup>*</sup></label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="address" name="address" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="zipcode" class="col-md-2 col-form-label">Zip Code<sup>*</sup></label>
                        <div class="col-md-10">
                            <input type="number" class="form-control" id="zipcode" name="zipcode" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="phone" class="col-md-2 col-form-label">Phone<sup>*</sup></label>
                        <div class="col-md-5 my-1">
                            <input type="number" class="form-control"  id="phone" name="phone">
                        </div>
                        <div class="col-md-5 my-1">
                            <input type="number" class="form-control" id="phone1" name="phone1">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-md-2 col-form-label">Email<sup>*</sup></label>
                        <div class="col-md-10">
                          <input type="email" class="form-control"  id="email" name="email" required>
                        </div>
                      </div>
                    <div class="form-group row">
                        <label for="website" class="col-md-2 col-form-label">Website</label>
                        <div class="col-md-10">
                            <input type="url" class="form-control" id="website" name="website" >
                        </div>
                    </div>

                    <h2 class="text-center my-4">Professional Skills</h2>
                      <div class="pskill-main-parent">
                        <div class="repeat-me">
                          <div class="form-row" id="to-repeat">
                            <div class="form-group col-md-6">
                              <label for="skills">Skills</label>
                              <input type="text" class="form-control" name="_s[0][skills]">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="rate">Rate in %</label>
                              <input type="number" class="form-control" name="_s[0][rate]">
                            </div>
                          </div>
                        </div>
                        <div class="form-group col-md-2">
                          <div><button  name="add-more" class="btn btn-primary add-more">Add More</button></div>
                        </div>
                       </div>

                      <h2 class="text-center my-4">Education</h2>
                      <div class="edu-main-parent">
                        <div class="edu-repeat-me">
                          <div class="form-row" id ="edu-to-repeat">
                            <div class="form-group col-md-3 " >
                              <label for="degree">Degree</label>
                              <input type="text" class="form-control" name="degree[]" >
                            </div>
                            <div class="form-group col-md-3">
                              <label for="university">University</label>
                              <input type="text" class="form-control" name="university[]">
                            </div>
                            <div class="form-group col-md-3">
                              <label for="year_conduct">Year of Conduct</label>
                              <input type="text" class="form-control" name="year_conduct[]">
                            </div>
                            <div class="form-group col-md-3">
                              <label for="ed_desc">Description</label>
                              <input type="text" class="form-control" name="ed_desc[]" >
                            </div>
                          </div>
                        </div>
                        <div class="form-group col-md-2">
                          <div><button  name="add-more" class="btn btn-primary add-more">Add More</button></div>
                        </div>
                      </div>


                    <h2 class="text-center my-4">Experience</h2>
                    <div class="exp-main-parent">
                      <div class="exp-repeat-me">
                        <div class="form-row" id ="exp-to-repeat">
                          <div class="form-group col-md-3">
                            <label for="company_name">Company name</label>
                            <input type="text" class="form-control" name="company_name[]" >
                          </div>
                          <div class="form-group col-md-2">
                            <label for="designation">Designation</label>
                            <input type="text" class="form-control" name="designation[]">
                          </div>
                          <div class="form-group col-md-2">
                            <label for="year">Year</label>
                            <input type="text" class="form-control" name="year[]">
                          </div>
                          <div class="form-group col-md-3">
                            <label for="ex_desc">Description</label>
                            <input type="text" class="form-control" name="ex_desc[]" >
                          </div>
                          <div class="form-group col-md-2">
                            <label for="ex_website">Website</label>
                            <input type="url" class="form-control" name="ex_website[]">
                          </div>
                        </div>
                      </div>
                      <div class="form-group col-md-2">
                        <div><button  name="add-more" class="btn btn-primary add-more">Add More</button></div>
                      </div>
                    </div>

                    <h2 class="text-center my-4">What's on your mind</h2>
                    <div class="form-group">
                        <textarea class="form-control" id="whats_on_mind" rows="3" name="whats_on_mind"></textarea>
                    </div>
                    <br><br>
                    <button class=" btn btn-primary btn-block"type="submit" name="portfolio_submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <script >
      $(function(){
        $('.pskill-main-parent').on('click', '.add-more', (e) => {
          e.preventDefault();
          var currentDiv =  $(this).find('.repeat-me')
          var clonedRow = $(this).find('#to-repeat').clone();
          clonedRow.appendTo(currentDiv);
        });

        $('.edu-main-parent').on('click', '.add-more', (e) => {
          e.preventDefault();
          var currentDiv =  $(this).find('.edu-repeat-me')
          var clonedRow = $(this).find('#edu-to-repeat').clone();
          clonedRow.appendTo(currentDiv);
        });

        $('.exp-main-parent').on('click', '.add-more', (e) => {
          e.preventDefault();
          var currentDiv =  $(this).find('.exp-repeat-me')
          var clonedRow = $(this).find('#exp-to-repeat').clone();
          clonedRow.appendTo(currentDiv);
        });

        function readURL(input) {
          if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
              $('#imagePreview').css('background-image', 'url('+e.target.result +')');
              $('#imagePreview').hide();
              $('#imagePreview').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
          }
        }
        $("#imageUpload").change(function() {
          readURL(this);
          var file_data = $('#imageUpload').prop('files')[0];
          var form_data = new FormData();
          form_data.append('file', file_data);
          $.ajax({
            url: "upload.php",
            type: "POST",
            data: form_data,
            contentType: false,
            cache: false,
            processData:false,
            success: function(data){
              console.log(data);
            }
          });
        });
      });
    </script>

</body>
</html>
