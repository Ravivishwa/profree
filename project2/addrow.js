function add() {
    var d = document.getElementById("contents");

    d.innerHTML+= '<div class="form-group col-md-3"><label for="inputEmail4">Company name</label><input type="text" class="form-control"></div><div class="form-group col-md-2"><label for="inputPassword4">Designation</label><input type="text" class="form-control"></div><div class="form-group col-md-2"><label for="inputPassword4">Year</label><input type="text" class="form-control"></div><div class="form-group col-md-3"><label for="inputPassword4">Description</label><input type="text" class="form-control"></div><div class="form-group col-md-2"><label for="inputPassword4">Website</label><input type="url" class="form-control"></div>';
}