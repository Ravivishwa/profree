<?php
require_once ('functions.php');
if(!isLoggedIn()){
  header('location: index.php');
}
?>
<body>
<?php
  require_once('header.php');
 ?>    <div class="container p-0 crumbs">
          <div class="breadcrumb flat">
            <a href="#pd" class="active pd">Personal Details</a>
            <a href="#ps" class="ps">Professional Skills</a>
            <a href="#edu" class="edu">Education</a>
            <a href="#exp" class="exp">Experience</a>
            <a href="#woym" class="woym">On your Mind?</a>
            <a href="#portfolio" class="portfolio">Portfolio</a>
        </div>

        <div class="card">
            <div class="card-body">
              <form action="functions.php" method="POST" enctype="multipart/form-data">
                <div class="alert alert-danger d-none myalert" role="alert">
                  Please fill all required details
                </div>
                <div id="pd">
                  <h2 class="text-center my-4 " >Personal Details</h2>
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
                </div>

                  <div class="d-none" id="ps">
                    <h2 class="text-center my-4">Professional Skills</h2>
                      <div class="pskill-main-parent">
                        <div class="repeat-me">
                          <div class="form-row" id="to-repeat">
                            <div class="form-group col-md-6">
                              <label for="skills">Skills</label>
                              <input type="text" class="form-control" name="skill[]">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="rate">Rate in %</label>
                              <input type="number" class="form-control" name="rate[]">
                            </div>
                          </div>
                        </div>
                        <div class="form-group col-md-2">
                          <div><button  name="add-more" class="btn btn-primary add-more">Add More</button></div>
                        </div>
                       </div>
                  </div>

                  <div class="d-none" id="edu">
                      <h2 class="text-center my-4" >Education</h2>
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
                  </div>

                  <div class="d-none" id="exp">
                    <h2 class="text-center my-4" >Experience</h2>
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
                  </div>

                    <div class="d-none" id="woym">
                      <h2 class="text-center my-4" >What's on your mind</h2>
                      <div class="form-group">
                          <textarea class="form-control" id="whats_on_mind" rows="3" name="whats_on_mind"></textarea>
                      </div>
                    </div>

                     <div class="d-none" id="portfolio">
                      <h2 class="text-center my-4" >Portfolio Upload</h2>
<!--
-->
                      <div class="form-group">
                           <label id="content-description">Title:</label>
                             <input class="form-control input-lg" id="inputlg" name="title"  type="text">
                        </div>
                        <div class="form-group">
                           <label id="content-description">Portfolio description:</label>
                             <textarea class="form-control" rows="10" maxlength="1000" name="description"  id="comment"></textarea>
                        </div>
                        <div class="form-group">
                           <label id="upload-input">Upload file:</label>
                            <input type="file" class="btn btn-outline-dark btn-lg btn-block" name="port">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <div class="btn btn-primary btn-lg back"><i class="fas fa-arrow-circle-left"></i></div>
                            <div class="btn btn-primary btn-lg forward"><i class="fas fa-arrow-circle-right"></i></div>
                            <button class="btn btn-primary btn-md d-none po-submit" name="po-submit">Submit</button>
                         </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
