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
<?php if($this->session->flashdata('successmag')){ ?>
<div class="alert alert-success">
<?= $this->session->flashdata('successmag')?>
</div>

    <?php } ?>
                                    <div class="col-xl-12">
                                        <div class="card">
                                            <div class="card-header border-0 align-items-center d-flex pb-0">
                                                <h4 class="card-title mb-0 flex-grow-1">Category</h4><a href="<?= base_url(); ?>Product_ctr/Product_table_view" class="btn btn-primary waves-effect waves-light btn-sm">View More <i class="mdi mdi-arrow-right ms-1"></i></a>
                                                
                                            </div>
                                            <div class="card-body">
                                        <p class="card-title-desc">Create product category from here.</p>

                                        <?= form_open_multipart()?>                                           
                                            <div class="row">
                                            <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <select class="form-select" id="floatingSelectGrid" name="parent_id">
                                                            <option value="" selected>Select</option>
                                                            <?php foreach($catogeries as $cate){?>
                                                                <option value="<?=$cate->cate_id?>" selected><?=$cate->cate_name?></option>
                                                                <?php }?>
                                                        </select>
                                                        <label for="floatingSelectGrid">Parent Category</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" name="cate_name" placeholder="Enter Category Name">
                                                        <label for="floatingFirstnameInput">Category Name</label>
                                                    </div>
                                                    <?=form_error('cate_name')?>
                                                </div>
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
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                    <input type="file" class="form-control" name="Cat_image" placeholder="Choose Image">
                                                        <label for="floatingSelectGrid">Image</label>
                                                    </div>
                                                    <?= form_error('Cat_image')?>
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