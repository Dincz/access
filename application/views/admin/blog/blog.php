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
        <!-- Add Modal -->
        <div class="modal fade" id="addOrderModalside">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Blog</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="<?php echo base_url() ?>admin/blog/create" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="text-black font-w500">Upload Image (2000×1093px)</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                        <input name="image" type="file" class="custom-file-input" required>
                                        <label class="custom-file-label selected">Choose File</label>
                                    </div>
                                </div>
                                <div class="form-group col-12">
                                    <label>Alt Name*</label>
                                    <input name="alt_name" type="text" class="form-control" placeholder="Image Alt Name" required>
                                </div>
                                <div class="form-group col-12">
                                    <label>Heading*</label>
                                    <input name="blog_heading" type="text" class="form-control" placeholder="Enter Title" required>
                                </div>
                                <div class="form-group col-12">
                                    <label>Short Description*</label>
                                    <textarea name="short_description" class="summernote" required></textarea>
                                </div>
                                <div class="form-group col-12">
                                    <label>Description*</label>
                                    <textarea name="description" class="summernote" required></textarea>
                                </div>
                                <div class="form-group col-12">
                                    <label>Category*</label>
                                    <select name="category" class="form-control default-select" id="sel1" required>
                                        <option value="">Select Category</option>
                                        <option value="web">Web Design & Development</option>
                                        <option value="seo">Search Engine Optimization (SEO)</option>
                                        <option value="smm">Social Media Marketing (SMM)</option>
                                        <option value="ppc">Pay Per Click (PPC)</option>
                                        <option value="video_creation">Video Creation</option>
                                        <option value="others">Others</option>
                                    </select>
                                </div>
                                <div class="form-group col-12">
                                    <label>Seo Url*</label>
                                    <input name="seo_url" type="text" class="form-control" placeholder="Seo Url" required>
                                </div>
                                <div class="form-group col-12">
                                    <label>Meta Title*</label>
                                    <input name="meta_title" type="text" class="form-control" placeholder="Meta Title" required>
                                </div>
                                <div class="form-group col-12">
                                    <label>Meta Description*</label>
                                    <input name="meta_description" type="text" class="form-control" placeholder="Meta Description" required>
                                </div>
                                <div class="form-group col-12">
                                    <label>Meta Keyword*</label>
                                    <input name="meta_keyword" type="text" class="form-control" placeholder="Meta Keyword" required>
                                </div>
                                <div class="form-group col-12">
                                    <label>OG Tags*</label>
                                    <textarea class="form-control" name="og_tags" rows="3" placeholder="Enter OG Tags"></textarea>
                                </div>
                                <div class="form-group col-12">
                                    <label>Schema Code</label>
                                    <textarea class="form-control" name="schema_code" rows="3" placeholder="Enter Schema Code"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <button name="submit" type="submit" class="btn btn-primary btn-block">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Edit Modal -->
        <div class="modal fade" id="editOrderModalside">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Slider</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="<?php echo base_url() ?>admin/blog/edit" enctype="multipart/form-data">
                            <input name="id" type="text" value="1" id="blogeditModalId">
                            <div class="form-group">
                                <label class="text-black font-w500">Upload Image (400*200px)</label>
                                <img style="width:100%;" id="blogeditModalImage" class="my-2 border rounded" src="http://localhost/wayam/uploads/1st.jpg" alt="banner">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                        <input name="image" type="file" class="custom-file-input" required>
                                        <label class="custom-file-label selected">Choose File</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-12">
                                <label>Title*</label>
                                <input name="title" type="text" class="form-control editModalTitle" placeholder="Enter Title">
                            </div>
                            <div class="form-group col-12">
                                <label>Description*</label>
                                <textarea name="description" class="summernote editModalDescription"></textarea>
                            </div>
                            <div class="form-group col-12">
                                <label>Keyword (use comma for sepration)*</label>
                                <input name="keyword" type="text" class="form-control editModalKeyword" placeholder="trending, new blog, Study">
                            </div>
                            <div class="form-group col-12">
                                <div class="form-group">
                                    <label>Category</label>
                                    <select name="category" class="form-control default-select editModalCategory" id="sel1" value="Ghost Story">
                                        <?php
                                        // unset($data['category'][0]);
                                        foreach ($data['category'] as $category) {
                                        ?>
                                            <option value="<?php echo $category['name'] ?>"><?php echo $category['name'] ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <button name="submit" type="submit" class="btn btn-primary btn-block">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Delete Modal -->
        <div class="modal fade" id="deleteOrderModalside">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Are you sure you want to delete?</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button>
                    </div>
                    <form method="POST" action="<?php echo base_url() ?>admin/blog/delete" enctype="multipart/form-data">
                        <div class="modal-body">
                            <input name="id" type="text" value="1" id="blogdeleteModalId" hidden>

                            <div class="form-group">
                                <button name="submit" type="submit" class="btn btn-danger btn-block">Delete</button>
                                <button name="submit" type="submit" class="btn btn-outline-danger btn-block" data-dismiss="modal">No</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
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
                <a href="javascript:void(0)" class="btn btn-primary w-100 m-0" data-toggle="modal" data-target="#addOrderModalside">+ New Blog</a>
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Blog Table</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="example3_wrapper" class="dataTables_wrapper no-footer">

                                <table id="example3" class="display min-w850 dataTable no-footer" role="grid" aria-describedby="example3_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 152.594px;">Sr No</th>
                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Department: activate to sort column ascending" style="width: 182.703px;">Image</th>
                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Department: activate to sort column ascending" style="width: 182.703px;">Heading</th>
                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Department: activate to sort column ascending" style="width: 182.703px;">Short Desc</th>
                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Department: activate to sort column ascending" style="width: 182.703px;">Desc</th>
                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Department: activate to sort column ascending" style="width: 182.703px;">Category</th>
                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Department: activate to sort column ascending" style="width: 182.703px;">Seo Url</th>
                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Gender: activate to sort column ascending" style="width: 94.2344px;">Created At</th>
                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 84.9219px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        // var_dump($data['category']);
                                        $i = 1;
                                        foreach ($data['blog'] as $row) {
                                        ?>
                                            <tr role="row" class="odd">
                                                <td><?php echo $i; ?></td>
                                                <td>
                                                    <img style="width: 150px;" class="blogbanner" src="<?php echo base_url() . "uploads/" . $row['blog-image'] ?>" alt="banner">
                                                </td>

                                                <td class="blogTitle"><?php echo strlen($row['blog-heading']) > 50 ? substr($row['blog-heading'], 0, 50) . '...' : $row['blog-heading'] ?></td>
                                                <td class="blogTitle">content...</td>
                                                <td class="blogDescription">content...</td>
                                                <td class="blogKeyword"><?php echo $row['category'] ?></td>
                                                <td class="blogKeyword"><?php echo $row['seo-url'] ?></td>
                                                <td class=""><?php echo date('d/m/Y', strtotime($row['created_at'])) ?></td>

                                                <td>
                                                    <div class="d-flex">
                                                        <a href="<?php echo base_url() ?>admin/blog/edit/<?php echo $row['id'] ?>" class="btn btn-primary shadow btn-xs sharp mr-1 blogeditbtn"><i class="fa fa-pencil"></i></a>
                                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#deleteOrderModalside" data-id="<?php echo $row['id'] ?>" class="btn btn-danger shadow btn-xs sharp blogdeletebtn"><i class="fa fa-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php
                                            $i = $i + 1;
                                        }
                                        ?>


                                    </tbody>
                                </table>
                            </div>
                        </div>
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