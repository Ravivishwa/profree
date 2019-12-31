<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <title>Form</title>
</head>
<body>
    <div class="container p-0">
        <div class="card">
            <div class="card-body">
                <h2 class="text-center my-4">Personal Details</h2>
                <form>
                    <div class="form-group row">
                        <label for="fullname" class="col-md-2 col-form-label">Full Name</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="fullname" name="fullname">
                        </div>

                    </div>
                    <div class="form-group row">
                        <label for="fathername" class="col-md-2 col-form-label">Father's Name</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="fathername" name="fathername">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="address" class="col-md-2 col-form-label">Address</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="address" name="address">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="zipcode" class="col-md-2 col-form-label">Zip Code</label>
                        <div class="col-md-10">
                            <input type="number" class="form-control" id="zipcode" name="zipcode">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="phone" class="col-md-2 col-form-label">Phone</label>
                        <div class="col-md-10">
                            <input type="number" class="form-control" id="phone" name="phone">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-md-2 col-form-label">Email</label>
                        <div class="col-md-10">
                          <input type="email" class="form-control" id="inputEmail3">
                        </div>
                      </div>
                    <div class="form-group row">
                        <label for="website" class="col-md-2 col-form-label">Website</label>
                        <div class="col-md-10">
                            <input type="url" class="form-control" id="website" name="website">
                        </div>
                    </div>
                    <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                    <h2 class="text-center my-4">Professional Skills</h2>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputEmail4">Skills</label>
                          <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="inputPassword4">Rate in %</label>
                          <input type="number" class="form-control">
                        </div>
                        <div class="form-group col-md-2">
                            <div><button  name="add-more" class="btn btn-primary">Add More</button></div>
                        </div>
                    </div>
                    <h2 class="text-center my-4">Education</h2>
                    <!-- <div id="field">
                    <div id="field0"> -->
                    <div class="form-row">
                        <div class="form-group col-md-3">
                          <label for="inputEmail4">Degree</label>
                          <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-3">
                          <label for="inputPassword4">University</label>
                          <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputPassword4">Year of Conduct</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputPassword4">Description</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-3">
                            <div><button  name="add-more" class="btn btn-primary">Add More</button></div>
                        </div>
                    </div>
                    <!-- </div>
                    </div> -->
                    <h2 class="text-center my-4">Experience</h2>
                    <div class="form-row" id="contents">
                        <div class="form-group col-md-3">
                          <label for="inputEmail4">Company name</label>
                          <input type="text" class="form-control" >
                        </div>
                        <div class="form-group col-md-2">
                          <label for="inputPassword4">Designation</label>
                          <input type="text" class="form-control" >
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputPassword4">Year</label>
                            <input type="text" class="form-control" >
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputPassword4">Description</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputPassword4">Website</label>
                            <input type="url" class="form-control">
                        </div>
                        <button  name="add-more" class="btn btn-primary" onclick="add();">Add More</button>
                    </div>

                    <h2 class="text-center my-4">What's on your mind</h2>
                    <div class="form-group">
                        <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="addrow.js"></script>
</body>
</html>
