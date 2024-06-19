
<html lang="en">


<head>
        
        <meta charset="utf-8" />
        <title>Dashboard | Tocly - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <base href="<?= base_url() ?>">
        <?php $this->load->view('links'); ?>
    </head>
    <?php $this->load->view('header'); ?>

            <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid">
                        <!-- this is sucess msg show -->
<?php if($this->session->flashdata('successmag')){ ?>
<div class="alert alert-success">
<?= $this->session->flashdata('successmag')?>
</div>

    <?php } ?>
    <!-- this is err msg show -->
    <?php if($this->session->flashdata('Errmsg')){ ?>
<div class="alert alert-danger">
<?= $this->session->flashdata('Errmsg')?>
</div>

    <?php } ?>
                                    <div class="col-xl-12">
                                        <div class="card">
                                            <div class="card-header border-0 align-items-center d-flex pb-0">
                                                <h4 class="card-title mb-0 flex-grow-1">Product</h4><a href="<?= base_url(); ?>Product_ctr/Product_table_view" class="btn btn-primary waves-effect waves-light btn-sm">View More <i class="mdi mdi-arrow-right ms-1"></i></a>
                                                
                                            </div>
                                            <div class="card-body">
                                      
                                        <p class="card-title-desc">Add a product from here.</p>

                                        <?= form_open_multipart()?>                                           
                                            <div class="row">
                                            <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="number"readonly value="<?=set_value('pro_id',$pro_id)?>" class="form-control" name="pro_id" placeholder="Enter Category Name">
                                                        <label for="floatingFirstnameInput">Product ID</label>
                                                    </div>
                                                    <?=form_error('pro_id')?>
                                                </div>
                                            <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <select class="form-select" name="category" onchange="get_categories(this.value)" id="floatingSelectGrid" name="category">
                                                            <option value="" selected>Select</option>
                                                            <?php foreach($catogeries as $cate){?>
                                                                <option value="<?=$cate->cate_id?>" ><?=$cate->cate_name?></option>
                                                                <?php }?>
                                                        </select>
                                                        <label for="floatingSelectGrid">category</label>
                                                    </div>
                                                    <?=form_error('category')?>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <select class="form-select subcate" id="floatingSelectGrid" name="sub_category">
                                                            <option value="" selected>Select</option>
                                                           
                                                        </select>
                                                        <label for="floatingSelectGrid">Sub Category</label>
                                                    </div>
                                                    
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" name="pro_name" >
                                                        <label for="floatingFirstnameInput">Product Name</label>
                                                    </div>
                                                    <?=form_error('pro_name')?>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" name="brand" >
                                                        <label for="floatingFirstnameInput">Product Brand Name</label>
                                                    </div>
                                                    <?=form_error('brand')?>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <select class="form-select" id="floatingSelectGrid" name="featured">
                                                            <option value="" selected>Select</option>
                                                            <option value="1">Deal of the Month</option>
                                                            <option value="2">New Arrival</option>                                              
                                                        </select>
                                                        <label for="floatingSelectGrid">Featured</label>
                                                    </div>
                                                    <?= form_error('featured')?>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                    <textarea class="form-select" name="highlights" >
                            
                                                    </textarea>
                                                        <label for="floatingSelectGrid">Highlights</label>
                                                    </div>
                                                    <?= form_error('highlights')?>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                    <textarea class="form-select" name="discription" >
                            
                                                    </textarea>
                                                        <label for="floatingSelectGrid">Discription</label>
                                                    </div>
                                                    <?= form_error('discription')?>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" name="meta_tittle" >
                                                        <label for="floatingFirstnameInput">Meta Title</label>
                                                    </div>
                                                    <?=form_error('meta_tittle')?>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" name="meta_keywords" >
                                                        <label for="floatingFirstnameInput">Meta Keywords</label>
                                                    </div>
                                                    <?=form_error('meta_keywords')?>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" name="meta_desc" >
                                                        <label for="floatingFirstnameInput">Meta Discription</label>
                                                    </div>
                                                    <?=form_error('meta_desc')?>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="file" class="form-control" name="pro_main_image" placeholder="Enter Category Name">
                                                        <label for="floatingFirstnameInput">Product main Image</label>
                                                    </div>
                                                    <?=form_error('pro_main_image')?>
                                                </div>
                                              
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="number" class="form-control" name="stock" placeholder="Enter Category Name">
                                                        <label for="floatingFirstnameInput">Product Stock</label>
                                                    </div>
                                                    <?=form_error('stock')?>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="number" class="form-control" name="mrp" placeholder="Enter Category Name">
                                                        <label for="floatingFirstnameInput">Product MRP</label>
                                                    </div>
                                                    <?=form_error('mrp')?>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="number" class="form-control" name="selling_pricce" placeholder="Enter Category Name">
                                                        <label for="floatingFirstnameInput">Product Selling Price</label>
                                                    </div>
                                                    <?=form_error('selling_pricce')?>
                                                </div>
                                                <!-- <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <select class="form-select" id="floatingSelectGrid" name="status">
                                                            <option value="" selected>Select</option>
                                                            <?php foreach ($catogeries as $value){
                                                               ?>  <option value="<?=$value->cate_id?>" selected><?=$value->cate_name?></option>
                                                           <?php }?>                                             
                                                        </select>
                                                        <label for="floatingSelectGrid">Category</label>
                                                    </div>
                                                    <?= form_error('status')?>
                                                </div> -->
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <select class="form-select" id="floatingSelectGrid" name="status">
                                                            <option value="" selected>Select</option>
                                                            <option value="0">Deactive</option>
                                                            <option value="1">Active</option>                                              
                                                        </select>
                                                        <label for="floatingSelectGrid">Status</label>
                                                    </div>
                                                    <?= form_error('status')?>
                                                </div>
                                            </div>
                                            
                                            <div>
                                                <button type="submit" class="btn btn-primary w-md">Submit</button>
                                            </div>
                                       <?= form_close()?>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </div>
                <?php $this->load->view('footer'); ?>