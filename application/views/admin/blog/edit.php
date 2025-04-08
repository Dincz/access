<!--**********************************Header & sidebar start***********************************-->
<?php
$this->load->view('admin/layout/header');
$this->load->view('admin/layout/sidebar');
?>
<!--**********************************Header & sidebar end***********************************-->

<!--**********************************Content body start****************************-->
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
      
        <div class="row">

            <!-- alert section  -->
            <div class="col-12">
                <?php
                if (!empty($this->session->flashdata('success'))) {
                ?>
                    <div class="alert alert-success solid alert-dismissible fade show w-100 mx-">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                            <polyline points="9 11 12 14 22 4"></polyline>
                            <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                        </svg>
                        <strong>Success!</strong> <?php echo $this->session->flashdata('success') ?>
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button>
                    </div>
                <?php
                }
                ?>

                <?php
                if (!empty($this->session->flashdata('error'))) {
                ?>
                    <div class="alert alert-danger solid alert-dismissible fade show">
                        <svg viewBox="0 0 24 24" width="24 " height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                            <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon>
                            <line x1="15" y1="9" x2="9" y2="15"></line>
                            <line x1="9" y1="9" x2="15" y2="15"></line>
                        </svg>
                        <strong>Error!</strong> <?php echo $this->session->flashdata('error') ?>
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button>
                    </div>
                <?php
                }

                ?>


            </div>


            <div class="col-12 mb-3">
                <a href="<?php echo base_url('admin/blog') ?>" class="btn btn-warning w-100 m-0"><i class="fa-solid fa-arrow-left-long"></i> Back</a>
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Blog</h4>
                    </div>
                    <div class="card-body">
                        <?php
                        $blog = $data['blog'];
                        ?>
                        <form method="POST" action="<?php echo base_url() ?>admin/blog/update" enctype="multipart/form-data">
                            <input name="id" type="text" value="<?php echo $blog['id'] ?>" id="blogeditModalId" hidden>
                            <div class="form-group">
                                <label class="text-black font-w500">Upload Thumbnail (2000*1093px)</label>
                                <div class="input-group">
                                    <img style="width:150px;" id="blogeditModalImage" class="my-2 border rounded" src="<?php echo base_url() . "uploads/" . $blog['blog-image'] ?>" alt="<?php echo $blog['alt-name'] ?>">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                        <input name="image" type="file" class="custom-file-input">
                                        <label class="custom-file-label selected">Choose File</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-12">
                                <label>Alt Name*</label>
                                <input name="alt_name" type="text" class="form-control editModalKeyword" placeholder="Alt Name" value="<?php echo $blog['alt-name'] ?>">
                            </div>
                            <div class="form-group col-12">
                                <label>Heading*</label>
                                <input name="blog_heading" type="text" class="form-control editModalTitle" placeholder="Enter Heading" value="<?php echo $blog['blog-heading'] ?>">
                            </div>

                            <div class="form-group col-12">
                                <label>Short Description*</label>
                                <textarea name="short_description" class="summernote editModalDescription">
                                <?php echo $blog['short-description'] ?>
                                </textarea>
                            </div>
                            <div class="form-group col-12">
                                <label>Description*</label>
                                <textarea name="description" class="summernote editModalDescription">
                                <?php echo $blog['description'] ?>
                                </textarea>
                            </div>
                            <div class="form-group col-12">
                                <label>Category*</label>
                                <select name="category" class="form-control default-select" id="sel1" required>
                                    <option value="">Select Category</option>
                                    <option value="web" <?php echo $blog['category']=='web'?'selected':'' ?>>Web Design & Development</option>
                                    <option value="seo" <?php echo $blog['category']=='seo'?'selected':'' ?>>Search Engine Optimization (SEO)</option>
                                    <option value="smm" <?php echo $blog['category']=='smm'?'selected':'' ?>>Social Media Marketing (SMM)</option>
                                    <option value="ppc" <?php echo $blog['category']=='ppc'?'selected':'' ?>>Pay Per Click (PPC)</option>
                                    <option value="video_creation" <?php echo $blog['category']=='video_creation'?'selected':'' ?>>Video Creation</option>
                                    <option value="others" <?php echo $blog['category']=='others'?'selected':'' ?>>Others</option>
                                </select>
                            </div>
                            <div class="form-group col-12">
                                <label>Seo Url*</label>
                                <input name="seo_url" type="text" class="form-control editModalKeyword" placeholder="Seo Url" value="<?php echo $blog['seo-url'] ?>">
                            </div>
                            <div class="form-group col-12">
                                <label>Meta Title*</label>
                                <input name="meta_title" type="text" class="form-control editModalKeyword" placeholder="Meta Title" value="<?php echo $blog['meta-title'] ?>">
                            </div>
                            <div class="form-group col-12">
                                <label>Meta Description*</label>
                                <input name="meta_description" type="text" class="form-control editModalKeyword" placeholder="Meta Description" value="<?php echo $blog['meta-description'] ?>">
                            </div>
                            <div class="form-group col-12">
                                <label>Meta Keyword*</label>
                                <input name="meta_keyword" type="text" class="form-control editModalKeyword" placeholder="Meta keyword" value="<?php echo $blog['meta-keywords'] ?>">
                            </div>
                            <div class="form-group col-12">
                                    <label>OG Tags*</label>
                                    <textarea class="form-control" name="og_tags" rows="3" placeholder="Enter OG Tags" required><?php echo $blog['og_tags'] ?></textarea>
                                </div>
                                <div class="form-group col-12">
                                    <label>Schema Code</label>
                                    <textarea class="form-control" name="schema_code" rows="3" placeholder="Enter Schema Code" required><?php echo $blog['schema_code'] ?></textarea>
                                </div>
                            <div class="form-group">
                                <button name="submit" type="submit" class="btn btn-primary btn-block">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--**********************************Content body End***********************************-->


<!--**********************************footer Start***********************************-->
<?php $this->load->view('admin/layout/footer'); ?>
<!--**********************************footer End***********************************-->