<?php include('templates/header_dashboard.php') ?>
        <!-- Page Container -->
        <div class="page-container">

<?php include('templates/sidebar_dashboard.php') ?>
            
            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Header -->
<?php include('templates/page_header_dashboard.php') ?>
                <!-- Page Inner -->
                <div class="page-inner">
                    <div class="page-title">
                        <h3 class="breadcrumb-header">Form</h3>
                    </div>
                    <div id="main-wrapper">
            
                      <div class="row">
                          
                        <div class="col-md-12">
                          <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">Form Elements</h4>
                                </div>
                                <div class="panel-body">
                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <label for="input-Default" class="col-sm-2 control-label">Default</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="input-Default">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="input-help-block" class="col-sm-2 control-label">Help Block</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="input-help-block">
                                                <p class="help-block">Example block-level help text here.</p>
                                            </div>
                                        </div>
                                
                                        <div class="form-group">
                                            <label for="input-readonly" class="col-sm-2 control-label">ReadOnly Input</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="input-readonly" placeholder="This is readonly input..." readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Static Control</label>
                                            <div class="col-sm-10">
                                                <p class="form-control-static">email@example.com</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="input-password" class="col-sm-2 control-label">Password</label>
                                            <div class="col-sm-10">
                                                <input type="password" name="password" class="password form-control" id="input-password" placeholder="Password">
                                            </div>
                                        </div>
                                        <!-- <div class="form-group has-success">
                                            <label for="input-success" class="col-sm-2 control-label">Input with success</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="input-success">
                                            </div>
                                        </div>
                                        <div class="form-group has-warning">
                                            <label for="input-warning" class="col-sm-2 control-label">Input with warning</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="input-warning">
                                            </div>
                                        </div> -->
                                        <!-- <div class="form-group has-error">
                                            <label for="input-error" class="col-sm-2 control-label">Input with error</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="input-error">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Checkboxes</label>
                                            <div class="col-sm-10">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox">Unchecked
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" checked>Checked
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" checked disabled>Checked &amp; Disabled
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" disabled>Disabled
                                                    </label>
                                                </div>
                                            </div>
                                        </div> -->
                                        
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Select</label>
                                            <div class="col-sm-10">
                                                <select style="margin-bottom:15px;" class="form-control">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                                <select multiple class="form-control">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Wysiwyg</label>
                                            <div class="col-sm-10">
                                              <textarea name="" id="" class="summernote form-control" cols="30" rows="10"></textarea>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                        </div>
                      </div><!-- Row -->

                      <!-- row form upload -->
                      <div class="row">
                        <div class="col-md-6">
                            <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">Dropzone</h4>
                                </div>
                                <div class="panel-body">
                                    <form action="/upload-target" class="dropzone"></form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">Plupload</h4>
                                </div>
                                <div class="panel-body">
                                    <div id="uploader">
                                        <p>Your browser doesn't have Flash, Silverlight or HTML5 support.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                    </div><!-- Main Wrapper -->
                 
                </div><!-- /Page Inner -->
            </div><!-- /Page Content -->
        </div><!-- /Page Container -->
 <?php include("templates/footer_dashboard.php") ?>