<?php 
include($_SERVER['DOCUMENT_ROOT'].'/carsRUS/view/header.php');
require($_SERVER['DOCUMENT_ROOT'].'/carsRUS/model/listing.php');
?> 

<div class="container">
    <main id="content">
        <h2 class="text-center">Create Listing</h2>
        <p class="text-center font-italic">(Defaulted values for quick testing)</p>
        <div class="container">
            <form id="create-listing" class="form" action="" method="post">
                <div class="form-row">
                    <div class="input-group mb-3 col-md-3">
                        <div class="input-group-prepend">
                        <label class="input-group-text">Category</label>
                        </div>
                        <select class="custom-select" name="categoryID" >
                            <option>Choose...</option>
                            <option value=1 selected>Cars</option>
                            <option value=2>Trucks</option>
                            <option value=3>Suv</option>
                        </select>
                    </div>
                    <div class="input-group mb-3 col-md-3">
                        <div class="input-group-prepend">
                        <label class="input-group-text">Make</label>
                        </div>
                        <select class="custom-select" name="make">
                            <option>Choose...</option>
                            <option selected>Honda</option>
                            <option>Hyundai</option>
                            <option>Toyota</option>
                            <option>Ford</option>
                            <option>Dodge</option>
                            <option>Chevrolet</option>
                            <option>BMW</option>
                        </select>
                    </div>
                    <div class="input-group mb-3 col-sm-3">
                        <div class="input-group-prepend">
                        <label class="input-group-text">Model</label>
                        </div>
                        <select class="custom-select"  name="model" >
                            <option selected>Choose...</option>
                            <option selected>Civic</option>
                            <option>Elantra</option>
                            <option>F150</option>
                            <option>Corolla</option>
                            <option>Ram</option>
                            <option>Edge</option>
                            <option>Silverado</option>
                            <option>x3</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="input-group mb-3 col-md-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text">Year</label>
                            <input class="form-control"  name="years" type="number" value="2020" min="1980" max="2021">
                        </div>
                    </div>
                    <div class="input-group mb-3 col-md-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text">Transmission</label>
                        </div>
                        <select class="custom-select"  name="transmission">
                            <option selected>automatic</option>
                            <option>manual</option>
                        </select>
                    </div>
                    <div class="input-group mb-3 col-md-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Trim</span>
                        </div>
                        <input type="text" value="4dr Sdn Man L"  name="trims" class="form-control">
                    </div>
                </div>
                <div class="form-row">
                    <div class="input-group mb-3 col-md-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Colour</span>
                        </div>
                        <input type="text" value="Green" name="colour" class="form-control">
                    </div>
                    <div class="input-group mb-3 col-md-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Trunkspace</span>
                            </div>
                        <input class="form-control" value="16" name="trunkSpace" type="number" min="0" max="100">
                    </div>
                    <div class="input-group mb-3 col-md-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Mpg</span>
                        </div>
                            <input class="form-control" value="20" name="mpg" type="number" min="0" max="50">
                    </div>
                </div>
                <div class="form-row">
                    <div class="input-group mb-3 col-md-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">HorsePower</span>
                        </div>
                        <input class="form-control" value="125" name="horsePower" type="number" min="0" max="500">
                    </div>
                    <div class="input-group mb-3 col-sm-3">
                        <div class="input-group-prepend">
                        <label class="input-group-text">Drive Train</label>
                        </div>
                        <select class="custom-select"  name="driveTrain" >
                            <option>Choose...</option>
                            <option selected>Front Wheel Drive</option>
                            <option>Rear Wheel Drive</option>
                            <option>All Wheel Drive</option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <button type="submit" name="submit" value="submit" class="btn btn-primary">Create Listing</button>
                </div>
            </form>
        </div>
    </main>
</div>



<?php include($_SERVER['DOCUMENT_ROOT'].'/carsRUS/view/footer.php')?>