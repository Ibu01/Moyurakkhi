<form class="row needs-validation" novalidate>
                    <div class="col-md-12">
                        <!-- <label for="productName" class="form-label">Product Name</label> -->
                        <input type="text" class="form-control" id="productName" placeholder="Enter Product Name"
                            required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col-md-4 ms-2 me-3">
                            <div class="mb-3 ">
                                <select class="form-select" required aria-label="select example">
                                    <option value="">Select Category</option>
                                    <option value="1">Men</option>
                                    <option value="2">Women</option>
                                    <option value="3">Kids</option>
                                </select>
                                <div class="invalid-feedback">Select right one</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <select class="form-select" required aria-label="select example">
                                    <option value="">Select Sub-Category</option>
                                    <option value="1">Casual</option>
                                    <option value="2">Formal</option>
                                    <option value="3">Sandal</option>
                                    <option value="4">Sports</option>

                                </select>
                                <div class="invalid-feedback">Select right one</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <p>Select Color</p>
                        <div class="col">
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="selectColor" name="radio-stacked"
                                    required>
                                <label class="form-check-label" for="selectColor">Blue</label>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="selectColor" name="radio-stacked"
                                    required>
                                <label class="form-check-label" for="selectColor">Yellow</label>
                            </div>

                        </div>
                        <div class="col">
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="selectColor" name="radio-stacked"
                                    required>
                                <label class="form-check-label" for="selectColor">Black</label>
                            </div>

                        </div>
                        <div class="col">
                            <div class="form-check mb-3">
                                <input type="radio" class="form-check-input" id="selectColor" name="radio-stacked"
                                    required>
                                <label class="form-check-label" for="selectColor">Red</label>
                                <div class="invalid-feedback">Select color</div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-check mb-3">
                                <input type="radio" class="form-check-input" id="selectColor" name="radio-stacked"
                                    required>
                                <label class="form-check-label" for="selectColor">Green</label>
                                <div class="invalid-feedback">Select color</div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-check mb-3">
                                <input type="radio" class="form-check-input" id="selectColor" name="radio-stacked"
                                    required>
                                <label class="form-check-label" for="selectColor">Others</label>
                                <div class="invalid-feedback">Select color</div>
                            </div>
                        </div>

                    </div>
                    <div class="mb-3">
                        <!-- <label for="validationTextarea" class="form-label">Description</label> -->
                        <textarea class="form-control is-invalid" id="validationTextarea"
                            placeholder="Required product description" required></textarea>
                        <div class="invalid-feedback">
                            Please add description of the product.
                        </div>
                    </div>

                    <div class="mb-1">
                        <p>Image</p>
                        <input type="file" class="form-control" aria-label="file example" required>
                        <div class="invalid-feedback">Invalid File Format</div>
                    </div>
                    <div class="row g-3 me-1 mb-2">
                        <P>Add Slider Image</P>
                        <div class="col-4 mb-2">
                            <input type="file" class="form-control" aria-label="file example" required>
                            <div class="invalid-feedback">Invalid File Format</div>

                        </div>
                        <div class="col-4 mb-2">

                            <input type="file" class="form-control" aria-label="file example" required>
                            <div class="invalid-feedback">Invalid File Format</div>

                        </div>
                        <div class="col-4 mb-2">

                            <input type="file" class="form-control" aria-label="file example" required>
                            <div class="invalid-feedback">Invalid File Format</div>

                        </div>
                    </div>
                    <div class="col-md-5 mb-2">
                        <!-- <label for="price" class="form-label">Price</label> -->
                        <input type="text" class="form-control" id="price" placeholder="Enter Product Price" required>
                        <div class="valid-feedback">
                            Great
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-12 mb-5">
                            <button class="btn btn-success" type="submit">Submit</button>
                        </div>
                    </div>
                </form>