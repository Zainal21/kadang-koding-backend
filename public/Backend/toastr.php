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
                        <h3 class="breadcrumb-header">Notifications</h3>
                    </div>
                    <div id="main-wrapper">
                    <div class="row">
                        
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">ToastTr</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="control-group">
                                                <div class="controls">
                                                    <label class="control-label">Title</label>
                                                    <input id="title" type="text" class="input-large form-control m-b-sm" placeholder="Enter a title ..." />
                                                    <label class="control-label">Message</label>
                                                    <textarea class="input-large form-control" id="message" rows="3" placeholder="Enter a message ..."></textarea>
                                                </div>
                                            </div>
                                            <div class="control-group m-t-lg">
                                                <div class="controls">
                                                    <label for="closeButton">
                                                        <input id="closeButton" type="checkbox" value="checked" class="input-mini" /> Close Button
                                                    </label>
                                                </div>
                                                <div class="controls">
                                                    <label for="addBehaviorOnToastClick">
                                                        <input id="addBehaviorOnToastClick" type="checkbox" value="checked" class="input-mini" /> Add behavior on toast click
                                                    </label>
                                                </div>
                                                <div class="controls">
                                                    <label for="debugInfo">
                                                        <input id="debugInfo" type="checkbox" value="checked" class="input-mini" /> Debug
                                                    </label>
                                                </div>
                                                <div class="controls">
                                                    <label for="progressBar">
                                                        <input id="progressBar" type="checkbox" value="checked" class="input-mini" /> Progress Bar
                                                    </label>
                                                </div>
                                                <div class="controls">
                                                    <label for="preventDuplicates">
                                                        <input id="preventDuplicates" type="checkbox" value="checked" class="input-mini" /> Prevent Duplicates
                                                    </label>
                                                </div>
                                                <div class="controls">
                                                    <label for="addClear">
                                                        <input id="addClear" type="checkbox" value="checked" class="input-mini" /> Add button to force clearing a toast, ignoring focus
                                                    </label>
                                                </div>
                                                <div class="controls">
                                                    <label for="newestOnTop">
                                                        <input id="newestOnTop" type="checkbox" value="checked" class="input-mini" /> Newest on top
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="control-group m-b-sm" id="toastTypeGroup">
                                                <div class="controls">
                                                    <label>Toast Type</label><br>
                                                    <label>
                                                        <input type="radio" name="toasts" value="success" checked /> Success
                                                    </label><br>
                                                    <label>
                                                        <input type="radio" name="toasts" value="info" /> Info
                                                    </label><br>
                                                    <label>
                                                        <input type="radio" name="toasts" value="warning" /> Warning
                                                    </label><br>
                                                    <label>
                                                        <input type="radio" name="toasts" value="error" /> Error
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="control-group" id="positionGroup">
                                                <div class="controls">
                                                    <label>Position</label><br>
                                                    <label>
                                                        <input type="radio" name="positions" value="toast-top-right" checked /> Top Right
                                                    </label><br>
                                                    <label>
                                                        <input type="radio" name="positions" value="toast-bottom-right" /> Bottom Right
                                                    </label><br>
                                                    <label>
                                                        <input type="radio" name="positions" value="toast-bottom-left" /> Bottom Left
                                                    </label><br>
                                                    <label>
                                                        <input type="radio" name="positions" value="toast-top-left" /> Top Left
                                                    </label><br>
                                                    <label>
                                                        <input type="radio" name="positions" value="toast-top-full-width" /> Top Full Width
                                                    </label><br>
                                                    <label>
                                                        <input type="radio" name="positions" value="toast-bottom-full-width" /> Bottom Full Width
                                                    </label><br>
                                                    <label>
                                                        <input type="radio" name="positions" value="toast-top-center" /> Top Center
                                                    </label><br>
                                                    <label>
                                                        <input type="radio" name="positions" value="toast-bottom-center" /> Bottom Center
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="control-group">
                                                <div class="controls">
                                                    <label for="showEasing">Show Easing</label>
                                                    <input id="showEasing" type="text" placeholder="swing, linear" class="input-mini form-control m-b-sm" value="swing" />

                                                    <label for="hideEasing">Hide Easing</label>
                                                    <input id="hideEasing" type="text" placeholder="swing, linear" class="input-mini form-control m-b-sm" value="linear" />

                                                    <label for="showMethod">Show Method</label>
                                                    <input id="showMethod" type="text" placeholder="show, fadeIn, slideDown" class="input-mini form-control m-b-sm" value="fadeIn" />
                        
                                                    <label for="hideMethod">Hide Method</label>
                                                    <input id="hideMethod" type="text" placeholder="hide, fadeOut, slideUp" class="input-mini form-control" value="fadeOut" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="control-group">
                                                <div class="controls">
                                                    <label for="showDuration">Show Duration</label>
                                                    <input id="showDuration" type="text" placeholder="ms" class="input-mini form-control m-b-sm" value="300" />

                                                    <label for="hideDuration">Hide Duration</label>
                                                    <input id="hideDuration" type="text" placeholder="ms" class="input-mini form-control m-b-sm" value="1000" />

                                                    <label for="timeOut">Time out</label>
                                                    <input id="timeOut" type="text" placeholder="ms" class="input-mini form-control m-b-sm" value="5000" />

                                                    <label for="extendedTimeOut">Extended time out</label>
                                                    <input id="extendedTimeOut" type="text" placeholder="ms" class="input-mini form-control" value="1000" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row m-t-lg">
                                        <div class="col-md-12">
                                            <button type="button" class="btn btn-primary" id="showtoast">Show Toast</button>
                                            <button type="button" class="btn btn-info" id="cleartoasts">Clear Toasts</button>
                                            <button type="button" class="btn btn-info" id="clearlasttoast">Clear Last Toast</button>
                                        </div>
                                    </div>

                                    <div class="row m-t-lg">
                                        <div class="col-md-12">
                                            <pre id='toastrOptions'></pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div><!-- Row -->
                        
                        
                    </div><!-- Main Wrapper -->
                    <div class="page-footer">
                        <p>Made with <i class="fa fa-heart"></i> by Muhamad Zainal Arifin</p>
                    </div>
                </div><!-- /Page Inner -->
            </div><!-- /Page Content -->
        </div><!-- /Page Container -->
 <?php include("templates/footer_dashboard.php") ?>