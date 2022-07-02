<!-- Modal -->
<div class="modal fade" id="exampleModal">
    <form action="<?php echo $base_url . 'admin/AddNewFood' ?>" method="post" enctype="multipart/form-data">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        Add a new food item
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            ×
                        </span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon3">Name:</span>
                        <input type="text" class="form-control" name="foodName" id="foodName" aria-describedby="basic-addon3">
                    </div>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Category</label>
                        <select class="form-select form-control" name="categoryId" id="selecterCategory">
                            <option value=''>Choose...</option>
                            <?php
                            foreach ($data['listCategory'] as $key => $item) {
                                echo "<option value='" . $item['id'] . "'>" . $item['categoryName'] . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon3">Price:</span>
                        <input type="number" class="form-control" name="price" id="price" aria-describedby="basic-addon3">
                    </div>

                    <textarea id="foodDesc" onmouseover="handleClearTextArea()" name='description' class="form-control">Viết mô tả thực phẩm</textarea>

                    <div class="input-group mb-3 mt-3">
                        <label class="input-group-text" for="foodImage">Image</label>
                        <input type="file" class="form form-control" name="image" id="foodImage" accept="image/*" onchange="loadFile('showAddFoodImage')">
                    </div>
                    <div class="input-group mb-3 mt-3">
                        <img id="showAddFoodImage" width="150rem" height="auto" src="#" alt="food image" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" name="submit" class="btn btn-primary">
                        Save changes
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>
<div class="modal fade" id="editFoodModal">
    <form id="updateFood" method="post" enctype="multipart/form-data">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        Update food item
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            ×
                        </span>
                    </button>
                </div>
                <div id="foodUpdateForm"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" name="submit" class="btn btn-primary">
                        Save changes
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>

<!-- Category -->
<div class="modal fade" id="createCategoryModal">
    <form action="<?php echo $base_url . 'admin/AddNewCategory' ?>" method="post" enctype="multipart/form-data">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        Add a new category item
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            ×
                        </span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon3">Name:</span>
                        <input type="text" class="form-control" name="categoryName" id="foodName" aria-describedby="basic-addon3">
                    </div>

                    <div class="input-group mb-3 mt-3">
                        <label class="input-group-text" for="categoryImage">Image</label>
                        <input type="file" class="form form-control" name="image" id="categoryImage" accept="image/*" onchange="loadFile('showAddCategoryImage')">
                    </div>
                    <div class="input-group mb-3 mt-3">
                        <img id="showAddCategoryImage" width="150rem" height="auto" src="#" alt="category image" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" name="submit" class="btn btn-primary">
                        Save changes
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>
<div class="modal fade" id="updateCategoryModal">
    <form id="updateCategory" method="post" enctype="multipart/form-data">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        Update category item
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            ×
                        </span>
                    </button>
                </div>
                <div id="categoryUpdateForm"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" name="submit" class="btn btn-primary">
                        Save changes
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>