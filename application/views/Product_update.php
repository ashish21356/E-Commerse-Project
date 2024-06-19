
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
 

                      
                                    <div class="col-xl-12">
                                        <div class="card">
                                            <div class="card-header border-0 align-items-center d-flex pb-0">
                                                <h4 class="card-title mb-0 flex-grow-1">Product</h4><a href="<?= base_url(); ?>Product_ctr/Product_table_view" class="btn btn-primary waves-effect waves-light btn-sm">View More <i class="mdi mdi-arrow-right ms-1"></i></a>
                                                
                                            </div>
                                            <div class="card-body">
                                      
                                        <p class="card-title-desc">Add a product from here.</p>
                                        
                                        <?= form_open_multipart('Product_ctr/update_product_data')?>                                           
                                            <div class="row">
                                            <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="number"readonly value="<?=$unit[0]->pro_id?>" class="form-control" name="pro_id" placeholder="Enter Category Name">
                                                        <label for="floatingFirstnameInput">Product ID</label>
                                                    </div>
                                                   
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
                                                        <input type="text" class="form-control" name="pro_name" value="<?= set_value('pro_name', (!empty($unit[0]->pro_name) ? $unit[0]->pro_name : '')) ?>" >
                                                        <label for="floatingFirstnameInput">Product Name</label>
                                                    </div>
                                                  
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" name="brand" value="<?= set_value('pro_name', (!empty($unit->pro_name) ? $unit->pro_name : '')) ?>">
                                                        <label for="floatingFirstnameInput">Product Brand Name</label>
                                                    </div>
                                                   
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <select class="form-select" id="floatingSelectGrid" name="featured">
                                                            <option value="" selected>Select</option>
                                                            <option value="1" <?=set_select('featured', '1',(!empty($unit[0]->featured) && $unit[0]->featured=='1'))?>>Deal of the Month</option>
                                                            <option value="2" <?=set_select('featured', '2',(!empty($unit[0]->featured) && $unit[0]->featured=='2'))?>>New Arrival</option>                                              
                                                        </select>
                                                        <label for="floatingSelectGrid">Featured</label>
                                                    </div>
                                                    
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                    <textarea class="form-select" name="highlights" value="<?=$unit[0]->highlights?>">
                            
                                                    </textarea>
                                                        <label for="floatingSelectGrid">Highlights</label>
                                                    </div>
                                                    
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                    <textarea class="form-select" name="discription" value="<?=$unit[0]->discription?>">
                            
                                                    </textarea>
                                                        <label for="floatingSelectGrid">Discription</label>
                                                    </div>
                                                  
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" name="meta_tittle" value="<?=$unit[0]->meta_tittle?>">
                                                        <label for="floatingFirstnameInput">Meta Title</label>
                                                    </div>
                                                    
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" name="meta_keywords" value="<?=$unit[0]->meta_keywords?>">
                                                        <label for="floatingFirstnameInput">Meta Keywords</label>
                                                    </div>
                                                   
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" name="meta_desc"  value="<?=$unit[0]->meta_desc?>">
                                                        <label for="floatingFirstnameInput">Meta Discription</label>
                                                    </div>
                                                  
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="file" class="form-control" name="pro_main_image" placeholder="Enter Category Name" >
                                                        <?php if(!empty($unit[0]->pro_id)){?><img src="<?=base_url()?>./uploads/<?=$unit[0]->pro_main_image?>" style="width:50px">
                                                            <?php } ?>
                                                        <label for="floatingFirstnameInput">Product main Image</label>
                                                    </div>
                                                    
                                                </div>
                                                
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="number" class="form-control" name="stock" placeholder="Enter Category Name" value="<?=$unit[0]->stock?>">
                                                        <label for="floatingFirstnameInput">Product Stock</label>
                                                    </div>
                                                   
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="number" class="form-control" name="mrp" placeholder="Enter Category Name"value="<?=$unit[0]->mrp?>">
                                                        <label for="floatingFirstnameInput">Product MRP</label>
                                                    </div>
                                                    
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="number" class="form-control" name="selling_pricce" placeholder="Enter Category Name" value="<?=$unit[0]->selling_pricce?>">
                                                        <label for="floatingFirstnameInput">Product Selling Price</label>
                                                    </div>
                                                    
                                                </div>
                                           
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <select class="form-select" id="floatingSelectGrid" name="status">
                                                            <option value="" selected>Select</option>
                                                            <option value="0"<?=set_select('status', '0',(!empty($unit[0]->status) && $unit[0]->status=='0'))?>>Deactive</option>
                                                            <option value="1" <?=set_select('status', '1',(!empty($unit[0]->id) && $unit[0]->status=='1'))?>>Active</option>                                              
                                                        </select>
                                                        <label for="floatingSelectGrid">Status</label>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            
                                            <div>
                                                <button type="submit" onClick="updateProductData();" class="btn btn-primary w-md">Submit</button>
                                            </div>
                                       <?= form_close()?>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                            </div>
                                        </div>
                                    </div>
                              