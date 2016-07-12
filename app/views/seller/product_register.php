<?php ?>
<style>
    .container{width: 97%}
    .steps ul
    {
        margin: 0;
        padding: 0;
        list-style: none;
        overflow: hidden;
        font-size: 13px;
        font-weight: bold;
    }
    .steps ul li 
    { 
        display: inline-block;
        color: #777;
        padding: 4px 0 10px 65px;
        background: #f1f1f1;
        position: relative;
        display: block;
        float: left;
        height: 50px;
        width: 230px;
    }
    .steps-content h4{color:#fff;}
</style>
<div class="top-content">

    <div class="inner-bg" style="background-color:#606066">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text">
                    <h1><strong>Seller</strong> Registration Form</h1>
                    <div class="description">
<!--                        <p>
                            This is a free responsive multi-step registration form made with Bootstrap. 
                            Download it on <a href="http://azmind.com"><strong>AZMIND</strong></a>, customize and use it as you like!
                        </p>-->
                    </div>
                </div>
            </div>
            <form role="form" id="seller_form" action="<?php echo site_url() ?>/user/seller_product" method="post" class="">
                <input type="hidden" name="txt_seller_type" value="1">
                <div class="row">
                    <div class="col-sm-12 form-box">
                        <div data-wizard-init>
                            <ul class="steps">
                                <li data-step="1">Personal Information</li>
                                <li data-step="2">Organization Details</li>
                                <li data-step="3">Timings</li>
                                <li data-step="4">Bank Details</li>
                                <li data-step="5">Listing Info</li>
                                <li data-step="6" style="display:none;"></li>
                                <!--<li data-step="7" style="display:none;"></li>-->
<!--                                <li data-step="7">Comments</li>
                                <li data-step="8">Images</li>-->
                            </ul>
                            <div class="steps-content">
                                <div data-step="1">
                                    			  <h4>Personal Information</h4>
                                    <fieldset>
                                        <div class="form-top">
                                            <div class="form-top-left">

                                                <p>Tell us who you are:</p>
                                            </div>
                                            <div class="form-top-right">
                                                <i class="fa fa-user"></i>
                                            </div>
                                        </div>
                                        <div class="form-bottom">
                                            <div class="row">
                                                <div class="form-group col-sm-12 col-sm-12">
                                                    <div class="col-sm-4">
                                                        <label class="" for="txt_name">Name</label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="txt_name" placeholder="Name" class="form-first-name form-control require" id="txt_name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-sm-12 col-sm-12">
                                                    <div class="col-sm-4">
                                                        <label class="" for="txt_email">Email</label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="txt_email" placeholder="Email" class="form-last-name form-control require" id="txt_email">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-sm-12 col-sm-12">
                                                    <div class="col-sm-4">
                                                        <label class="" for="txt_password">Password</label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input type="password" name="txt_password" placeholder="Password" class="form-last-name form-control require" id="txt_password">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-sm-12 col-sm-12">
                                                    <div class="col-sm-4">
                                                        <label class="" for="txt_description">Description</label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <textarea type="text" name="txt_description" placeholder="Description" class="form-last-name form-control" id="txt_description"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-sm-12 col-sm-12">
                                                    <div class="col-sm-4">
                                                        <label class="" for="txt_phone1">Phone No. 1</label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="txt_phone1" placeholder="Phone No 1" class="form-last-name form-control require" id="sup_phone">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-sm-12 col-sm-12">
                                                    <div class="col-sm-4">
                                                        <label class="" for="txt_phone2">Phone No. 1</label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="txt_phone2" placeholder="Phone No 2" class="form-last-name form-control" id="txt_phone2">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-sm-12 col-sm-12">
                                                    <div class="col-sm-4">
                                                        <label class="" for="txt_phone3">Phone No. 3</label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="txt_phone3" placeholder="Phone No 3" class="form-last-name form-control" id="txt_phone3">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-sm-12 col-sm-12">
                                                    <div class="col-sm-4">
                                                        <label class="" for="txt_phone1">Phone No. 4</label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="txt_phone4" placeholder="Phone No 4" class="form-last-name form-control" id="sup_phone">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-sm-12 col-sm-12">
                                                    <div class="col-sm-4">
                                                        <label class="" for="txt_phone1">Phone No. 5</label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="txt_phone5" placeholder="Phone No 5" class="form-last-name form-control" id="sup_phone">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-sm-12 col-sm-12">
                                                    <div class="col-sm-4">
                                                        <label class="" for="txt_phone1">Phone No. 6</label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="txt_phone6" placeholder="Phone No 6" class="form-last-name form-control" id="sup_phone">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="form-group col-sm-12">
                                                    <div class="col-sm-4">
                                                        <label class="" for="sup_organization">Organization</label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="txt_organization_name" placeholder="Organization" class="form-last-name form-control require" id="sup_organization">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-sm-12">
                                                    <div class="col-sm-4">
                                                        <label class="" for="sup_address_1">Primary Address</label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="txt_address1" placeholder="Primary Address " class="form-last-name form-control require" id="sup_address_1">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="form-group col-sm-12">
                                                    <div class="col-sm-4">
                                                        <label class="sr" for="sup_city">Primary City</label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="txt_city1" placeholder="City" class="form-last-name form-control require" id="sup_city">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-sm-12">
                                                    <div class="col-sm-4">
                                                        <label class="sr" for="sup_state">Primary State</label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="txt_state1" placeholder="State" class="form-last-name form-control require" id="sup_state">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-sm-12">
                                                    <div class="col-sm-4">
                                                        <label class="sr" for="sup_country">Primary Country</label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="txt_country1" placeholder="Country" class="form-last-name form-control require" id="sup_country">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-sm-12">
                                                    <div class="col-sm-4">
                                                        <label class="sr" for="txt_pincode1">Primary Zip</label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="txt_pincode1" placeholder="Zip" class="form-last-name form-control require" id="sup_zip">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-sm-12">
                                                    <div class="col-sm-4">
                                                        <label class="" for="sup_address_1">Secondary Address</label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="txt_address2" placeholder="Address" class="form-last-name form-control" id="sup_address_1">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="form-group col-sm-12">
                                                    <div class="col-sm-4">
                                                        <label class="sr" for="sup_city">Secondary City</label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="txt_city2" placeholder="City" class="form-last-name form-control" id="sup_city">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-sm-12">
                                                    <div class="col-sm-4">
                                                        <label class="sr" for="sup_state">Secondary State</label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="txt_state2" placeholder="State" class="form-last-name form-control" id="sup_state">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-sm-12">
                                                    <div class="col-sm-4">
                                                        <label class="sr" for="sup_country">Country</label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="txt_country2" placeholder="Country" class="form-last-name form-control" id="sup_country">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-sm-12">
                                                    <div class="col-sm-4">
                                                        <label class="sr" for="txt_pincode1">Secondary Zip</label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="txt_pincode2" placeholder="Zip" class="form-last-name form-control" id="sup_zip">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--<button type="button" class="btn btn-next">Next</button>-->
                                        </div>
                                    </fieldset>
                                </div>
                                <div data-step="2">
                                    <h4>Organization Details</h4>
                                    <fieldset>
                                        <div class="form-top">
                                            <div class="form-top-left">

                                                <p>Your Organization details:</p>
                                            </div>
                                            <div class="form-top-right">
                                                <i class="fa fa-user"></i>
                                            </div>
                                        </div>
                                        <div class="form-bottom">

                                            <div class="row">
                                                <div class="form-group col-sm-12">
                                                    <div class="col-sm-4">
                                                        <label class="sr" for="sup_sector">Sector</label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="txt_sector" placeholder="Sector" class="form-first-name form-control require" id="sup_sector">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-sm-12">
                                                    <div class="col-sm-4">
                                                        <label class="sr" for="sup_emp_count">Employee Count</label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="txt_emp_count" placeholder="Employee Count" class="form-last-name form-control" id="sup_emp_count">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-sm-12">
                                                    <div class="col-sm-4">
                                                        <label class="sr" for="sup_reg_city">Registered City</label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="txt_reg_city" placeholder="Registered City" class="form-last-name form-control require" id="sup_reg_city">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-sm-12">
                                                    <div class="col-sm-4">
                                                        <label  class="sr" for="sup_pan_no">Pan No.</label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="txt_pan_no" placeholder="Pan No." class="form-last-name form-control require" id="sup_pan_no">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-sm-12">
                                                    <div class="col-sm-4">
                                                        <label class="sr" for="sup_tin_no">TIN No.</label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="txt_tin_no" placeholder="TIN No." class="form-last-name form-control require" id="sup_tin_no">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-sm-12">
                                                    <div class="col-sm-4">
                                                        <label class="sr" for="sup_yor">Year Of Registration</label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="txt_establish_year" placeholder="Year Of Registration" class="form-last-name form-control" id="sup_yor">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="col-sm-4">
                                                        <label class="sr" for="sup_orientation">Orientation</label>
                                                    </div>
                                                    <div class="radio col-sm-2">
                                                        <label>
                                                            <input type="radio" name="txt_orientation" id="sup_orientation1" value="service" checked>
                                                            Service
                                                        </label>
                                                    </div>
                                                    <div class="radio col-sm-2">
                                                        <label>
                                                            <input type="radio" name="txt_orientation" id="sup_orientation2" value="product">
                                                            Product 
                                                        </label>
                                                    </div>
                                                    <div class="radio col-sm-2">
                                                        <label>
                                                            <input type="radio" name="txt_orientation" id="sup_orientation3" value="both">
                                                            Both 
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-sm-12">
                                                    <div class="col-sm-4">
                                                        <label class="sr" for="sup_keywords">Keywords</label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="txt_keywords" placeholder="Your serchable keywords (|) seprated" class="form-last-name form-control require" id="sup_keywords">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-sm-12">
                                                    <div class="col-sm-4">
                                                        <label class="sr" for="sup_website">Website Url</label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="txt_website_url" placeholder="Website Url" class="form-last-name form-control" id="sup_website">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-sm-12">
                                                    <div class="col-sm-4">
                                                        <label class="sr" for="sup_app">App Url</label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="txt_app_url" placeholder="App Url" class="form-last-name form-control" id="sup_app">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-sm-12">
                                                    <div class="col-sm-4">
                                                        <label class="sr" for="sup_exist_listing">Existing Listings</label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="txt_exist_listing" placeholder="Existing Listings" class="form-last-name form-control" id="sup_exist_listing">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </fieldset>
                                </div>
                                <div data-step="3">
                                    <h4>Timings</h4>
                                    <fieldset>
                                        <div class="form-top">
                                            <div class="form-top-left">

                                                <p>Tell us when you work</p>
                                            </div>
                                            <div class="form-top-right">
                                                <i class="fa fa-user"></i>
                                            </div>
                                        </div>
                                        <div class="form-bottom">

                                            <div class="row">
                                                <div class="form-group col-sm-12">
                                                    <div class="col-sm-4">
                                                        <label class="sr" for="sup_operating_hours">Operating hours</label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="txt_operating_hrs" placeholder="Operating hours" class="form-first-name form-control" id="sup_operating_hours">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-sm-12">
                                                    <div class="col-sm-4">
                                                        <label class="sr" for="sup_close_day">Closing Days</label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <select name="close_day[]" placeholder="Closing Days" class="form-last-name form-control require" id="sup_close_day" multiple>
                                                            <option value="1">Sunday</option>
                                                            <option value="2">Monday</option>
                                                            <option value="3">Tuesday</option>
                                                            <option value="4">Wednesday</option>
                                                            <option value="5">Thursday</option>
                                                            <option value="6">Friday</option>
                                                            <option value="7">Saturday</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-sm-12">
                                                    <div class="col-sm-4">
                                                        <label class="sr" for="sup_home_delivery">Home Delivery</label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <select name="int_home_delivery" placeholder="Home Delivery" class="form-last-name form-control" id="sup_home_delivery" >
                                                            <option value="1">Yes</option>
                                                            <option value="2">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-sm-12">
                                                    <div class="col-sm-4">
                                                        <label class="sr" for="sup_cusine">Cuisine</label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="txt_cusine" placeholder="Cuisine" class="form-last-name form-control" id="sup_cusine">
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </fieldset>
                                </div>
                                <div data-step="4">
                                    <h4>Bank Details</h4>
                                    <fieldset>
                                        <div class="form-top">
                                            <div class="form-top-left">

                                                <p>Tell us how to pay you :</p>
                                            </div>
                                            <div class="form-top-right">
                                                <i class="fa fa-user"></i>
                                            </div>
                                        </div>
                                        <div class="form-bottom">

                                            <div class="row">
                                                <div class="form-group col-sm-12">
                                                    <div class="col-sm-4">
                                                        <label class="sr" for="sup_acc_no">Account No.</label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="txt_account_no" placeholder="Account No." class="form-first-name form-control require" id="sup_acc_no">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-sm-12">
                                                    <div class="col-sm-4">
                                                        <label class="sr" for="sup_bank">Bank</label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="txt_bank" placeholder="Bank" class="form-last-name form-control require" id="sup_bank">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-sm-12">
                                                    <div class="col-sm-4">
                                                        <label class="sr" for="sup_branch">Branch</label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="txt_branch" placeholder="Branch" class="form-last-name form-control require" id="sup_branch">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-sm-12">
                                                    <div class="col-sm-4">
                                                        <label class="sr" for="sup_acc_holder">Account Holder Name</label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="txt_account_holder" placeholder="Account Holder Name" class="form-last-name form-control require" id="sup_acc_holder">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-sm-12">
                                                    <div class="col-sm-4">
                                                        <label class="sr" for="sup_ifsc">IFSC</label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="txt_ifsc" placeholder="IFSC" class="form-last-name form-control require" id="sup_ifsc">
                                                    </div>
                                                </div>
                                            </div>

                                            <!--<button type="button" class="btn btn-next">Next</button>-->
                                        </div>
                                    </fieldset>
                                </div>
                                <div data-step="5">
                                    <h4>Listing Details</h4>
                                    <fieldset>
                                        <div class="form-top">
                                            <div class="form-top-left">

                                                <p>Tell us what you deal in :</p>
                                            </div>
                                            <div class="form-top-right">
                                                <i class="fa fa-user"></i>
                                            </div>
                                        </div>
                                        <div class="form-bottom">

                                            <div class="row">
                                                <div class="form-group col-sm-12">
                                                    <div class="col-sm-4">
                                                        <label class="sr" for="sup_listing_type">Listing Type</label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <select name="txt_listing_type" placeholder="" class="form-last-name form-control require" id="sup_listing_type" >
                                                            <option value="free">Free</option>
                                                            <!--<option value="2">Type 2</option>-->
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-sm-12">
                                                    <div class="col-sm-4">
                                                        <label class="sr" for="sup_target_age">Target Age</label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <select name="target_age[]" placeholder="" class="form-last-name form-control multiple" id="sup_target_age" >
                                                            <option value="1">0 - 16</option>
                                                            <option value="2">17 - 30</option>
                                                            <option value="3">31 - Older</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-sm-12">
                                                    <div class="col-sm-4">
                                                        <label class="sr" for="sup_target_gender">Target Gender</label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <select name="txt_target_gender" placeholder="" class="form-last-name form-control multiple" id="sup_target_gender" >
                                                            <option value="male">Male</option>
                                                            <option value="female">Female</option>
                                                            <option value="all">Male/Female</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-sm-12">
                                                    <div class="col-sm-4">
                                                        <label class="sr" for="sup_target_crowd">Target Crowd</label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <select name="target_crowd[]" placeholder="" class="form-last-name form-control" id="sup_target_crowd" multiple>
                                                            <option value="1">Service Class</option>
                                                            <option value="2">Business Class</option>
                                                            <option value="3">House Wives</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>

