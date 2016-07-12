<div class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-md-8 page-content">
                    <div class="inner-box category-content">
                        <h2 class="title-2"><i class="icon-user-add"></i> Create your account, Its free </h2>

                        <div class="row">
                            <div class="col-sm-12">
                                <form class="form-horizontal" method="POST" action="<?php echo site_url()."/user/register"?>">
                                    <fieldset>
                                      <!-- Text input-->
                                        <div class="form-group required">
                                            <label class="col-md-4 control-label">Name <sup>*</sup></label>

                                            <div class="col-md-6">
                                                <input  placeholder="Name" class="form-control input-md"
                                                       required="" type="text" name="txt_name" >
                                            </div>
                                        </div>


                                        <!-- Text input-->
                                        <div class="form-group required">
                                            <label class="col-md-4 control-label">Phone Number 1</label>

                                            <div class="col-md-6">
                                                <input placeholder="Phone Number"
                                                       class="form-control input-md" type="text" name="txt_phone1">

<!--                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="">
                                                        <small> Hide the phone number on the published ads.</small>
                                                    </label>
                                                </div>-->
                                            </div>
                                        </div>
                                        
                                        <!-- Text input-->
                                        <div class="form-group required">
                                            <label class="col-md-4 control-label">Phone Number 2</label>

                                            <div class="col-md-6">
                                                <input placeholder="Phone Number"
                                                       class="form-control input-md" type="text" name="txt_phone2">
                                            </div>
                                        </div>
                                        
                                        <!-- Text input-->
                                        <div class="form-group required">
                                            <label class="col-md-4 control-label">Permanent Address</label>

                                            <div class="col-md-6">
                                                <input placeholder="Permanent Address"
                                                       class="form-control input-md" type="text" name="txt_address1">
                                            </div>
                                        </div>
                                        <!-- Text input-->
                                        <div class="form-group required">
                                            <label class="col-md-4 control-label">City</label>

                                            <div class="col-md-6">
                                                <input placeholder="City"
                                                       class="form-control input-md" type="text" name="txt_city1">
                                            </div>
                                        </div>
                                        <!-- Text input-->
                                        <div class="form-group required">
                                            <label class="col-md-4 control-label">State</label>

                                            <div class="col-md-6">
                                                <input placeholder="State"
                                                       class="form-control input-md" type="text" name="txt_state1">
                                            </div>
                                        </div>
                                        <!-- Text input-->
                                        <div class="form-group required">
                                            <label class="col-md-4 control-label">Country</label>

                                            <div class="col-md-6">
                                                <input placeholder="Country"
                                                       class="form-control input-md" type="text" name="txt_country1">
                                            </div>
                                        </div>
                                        <!-- Text input-->
                                        <div class="form-group required">
                                            <label class="col-md-4 control-label">Pincode</label>

                                            <div class="col-md-6">
                                                <input placeholder="Pincode"
                                                       class="form-control input-md" type="text" name="txt_pincode1">
                                            </div>
                                        </div>
                                        
                                      
                                        
                                        <!-- Text input-->
                                        <div class="form-group required">
                                            <label class="col-md-4 control-label">Current Address</label>

                                            <div class="col-md-6">
                                                <input placeholder="Current Address"
                                                       class="form-control input-md" type="text" name="txt_address2">
                                            </div>
                                        </div>
                                        <!-- Text input-->
                                        <div class="form-group required">
                                            <label class="col-md-4 control-label">City</label>

                                            <div class="col-md-6">
                                                <input placeholder="City"
                                                       class="form-control input-md" type="text" name="txt_city2">
                                            </div>
                                        </div>
                                        <!-- Text input-->
                                        <div class="form-group required">
                                            <label class="col-md-4 control-label">State</label>

                                            <div class="col-md-6">
                                                <input placeholder="State"
                                                       class="form-control input-md" type="text" name="txt_state2">
                                            </div>
                                        </div>
                                        <!-- Text input-->
                                        <div class="form-group required">
                                            <label class="col-md-4 control-label">Country</label>

                                            <div class="col-md-6">
                                                <input placeholder="Country"
                                                       class="form-control input-md" type="text" name="txt_country2">
                                            </div>
                                        </div>
                                        <!-- Text input-->
                                        <div class="form-group required">
                                            <label class="col-md-4 control-label">Pincode</label>

                                            <div class="col-md-6">
                                                <input placeholder="Pincode"
                                                       class="form-control input-md" type="text" name="txt_pincode2">
                                            </div>
                                        </div>
                                        
                                        
                                        
                                        
                                        <!-- Multiple Radios -->
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Gender</label>

                                            <div class="col-md-6">
                                                <div class="radio">
                                                    <label for="Gender-0">
                                                        <input name="int_gender" id="Gender-0" value="1" checked="checked"
                                                               type="radio">
                                                        Male </label>
                                                </div>
                                                <div class="radio">
                                                    <label for="Gender-1">
                                                        <input name="int_gender" id="Gender-1" value="2" type="radio">
                                                        Female </label>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Textarea -->
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="textarea">About Yourself</label>

                                            <div class="col-md-6">
                                                <textarea class="form-control" id="textarea" name="txt_description"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group required">
                                            <label for="inputEmail3" class="col-md-4 control-label">Email
                                                <sup>*</sup></label>

                                            <div class="col-md-6">
                                                <input type="text" name="txt_email" class="form-control" id="inputEmail3"
                                                       placeholder="Email" required="">
                                            </div>
                                        </div>
                                        <div class="form-group required">
                                            <label for="inputPassword3" class="col-md-4 control-label">Password </label>

                                            <div class="col-md-6">
                                                <input type="password" name="txt_password" class="form-control" id="inputPassword3"
                                                       placeholder="Password" required="">

                                                <p class="help-block">At least 5 characters
                                                    <!--Example block-level help text here.--></p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label"></label>

                                            <div class="col-md-8">
                                                <div class="termbox mb10">
                                                    <label class="checkbox-inline" for="checkboxes-1">
                                                        <input name="checkboxes" id="checkboxes-1" value="1"
                                                               type="checkbox" required="">
                                                        I have read and agree to the <a href="terms-conditions.html">Terms
                                                        & Conditions</a> </label>
                                                </div>
                                                <div style="clear:both"></div>
                                                <input type="submit" name="btn_submit" value="Register" class="btn btn-primary"></div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.page-content -->

                <div class="col-md-4 reg-sidebar">
                    <div class="reg-sidebar-inner text-center">
                        <div class="promo-text-box"><i class=" icon-picture fa fa-4x icon-color-1"></i>

                            <h3><strong>Post a Free Classified</strong></h3>

                            <p> Post your free online classified ads with us. Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. </p>
                        </div>
                        <div class="promo-text-box"><i class=" icon-pencil-circled fa fa-4x icon-color-2"></i>

                            <h3><strong>Create and Manage Items</strong></h3>

                            <p> Nam sit amet dui vel orci venenatis ullamcorper eget in lacus.
                                Praesent tristique elit pharetra magna efficitur laoreet.</p>
                        </div>
                        <div class="promo-text-box"><i class="  icon-heart-2 fa fa-4x icon-color-3"></i>

                            <h3><strong>Create your Favorite ads list.</strong></h3>

                            <p> PostNullam quis orci ut ipsum mollis malesuada varius eget metus.
                                Nulla aliquet dui sed quam iaculis, ut finibus massa tincidunt.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.main-container -->