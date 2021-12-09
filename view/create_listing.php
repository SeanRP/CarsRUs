<?php 
include($_SERVER['DOCUMENT_ROOT'].'/carsRUS/view/header.php');
require($_SERVER['DOCUMENT_ROOT'].'/carsRUS/model/listing.php');

?> 

<div class="container">
    <main id="content">
        <h2 class="text-center">Create Listing</h2>
        <div class="container">
            <form id="create-listing" class="form" action="" method="post">
                <div class="form-row">
                    <div class="input-group mb-3 col-md-3">
                        <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Brand</label>
                        </div>
                        <select class="custom-select" id="brand">
                            <option selected>Choose...</option>
                            <option>Honda</option>
                            <option>Toyota</option>
                            <option>Ford</option>
                        </select>
                    </div>
                    <div class="input-group mb-3 col-sm-3">
                        <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Model</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01">
                            <option selected>Choose...</option>
                            <option>Civic</option>
                            <option>F150</option>
                            <option>Corolla</option>
                        </select>
                    </div>
                    <div class="input-group mb-3 col-sm">
                        <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Year</label>
                        <input class="form-control" type="number" min="1980" max="2021" value= readonly>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="input-group mb-3 col-md-3">
                        <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Transmission</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01">
                            <option selected>Auto</option>
                            <option>Manual</option>
                        </select>
                    </div>
                    <div class="input-group mb-3 col-md-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                        </div>
                        <input type="text" class="form-control">
                    </div>
                    <div class="input-group mb-3 col-md-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Milleage</span>
                        </div>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-row">
                    <div class="input-group mb-3 col-md-3">
                        <input class="form-control" type="text" value='<?php echo $_SESSION['address'];?>' readonly>
                    </div>
                    <div class="input-group mb-3 col-md-3">
                        <input class="form-control" type="text" value='<?php echo $_SESSION['postalCode'];?>'  readonly>
                    </div>
                    <div class="input-group mb-3 col-md-3">
                        <input class="form-control" type="text" value='<?php echo $_SESSION['city'];?>' readonly>
                    </div>
                </div>
                <button type="submit" name="submit" value="submit" class="btn btn-primary">Create Listing</button>
            </form>
        </div>
    </main>
</div>



<?php include($_SERVER['DOCUMENT_ROOT'].'/carsRUS/view/footer.php')?>