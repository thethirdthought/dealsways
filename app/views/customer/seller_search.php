<div class="search-row-wrapper">
        <div class="container ">
            <form action="#" method="GET">
                <div class="col-sm-3">
                    <input class="form-control keyword" type="text" placeholder="e.g. Mobile Sale">
                </div>
                <div class="col-sm-3">
                    <select class="form-control selecter" name="category" id="search-category">
                        <option selected="selected" value="">All Categories</option>
                        <option value="Vehicles" style="background-color:#E9E9E9;font-weight:bold;" disabled="disabled">
                            - Vehicles -
                        </option>
                        <option value="Cars"> Cars</option>
                        <option value="Commercial vehicles"> Commercial vehicles</option>
                        <option value="House" style="background-color:#E9E9E9;font-weight:bold;" disabled="disabled"> -
                            House and Children -
                        </option>                        
                        <option value="Other"> Other</option>
                    </select>
                </div>
                <div class="col-sm-3">
                    <select class="form-control selecter" name="location" id="id-location">
                        <option selected="selected" value="">All Locations</option>
                        <option value="AL">Alabama</option>
                        <option value="AK">Alaska</option>
                        <option value="AZ">Arizona</option>
                        <option value="AR">Arkansas</option>
                        <option value="CA">California</option>
                        <option value="CO">Colorado</option>
                        <option value="CT">Connecticut</option>
                        <option value="DE">Delaware</option>
                        <option value="DC">District Of Columbia</option>
                        <option value="FL">Florida</option>
                        <option value="GA">Georgia</option>
                        <option value="HI">Hawaii</option>
                        <option value="ID">Idaho</option>
                        <option value="IL">Illinois</option>
                        <option value="IN">Indiana</option>
                        <option value="IA">Iowa</option>
                        <option value="KS">Kansas</option>
                        <option value="KY">Kentucky</option>
                        <option value="LA">Louisiana</option>
                        <option value="ME">Maine</option>
                        <option value="MD">Maryland</option>
                        <option value="MA">Massachusetts</option>
                        <option value="MI">Michigan</option>
                        <option value="MN">Minnesota</option>
                        <option value="MS">Mississippi</option>
                        <option value="MO">Missouri</option>
                        <option value="MT">Montana</option>
                        <option value="NE">Nebraska</option>
                        <option value="NV">Nevada</option>
                        <option value="NH">New Hampshire</option>
                        <option value="NJ">New Jersey</option>
                        <option value="NM">New Mexico</option>
                        <option value="NY">New York</option>
                        <option value="NC">North Carolina</option>
                        <option value="ND">North Dakota</option>
                        <option value="OH">Ohio</option>
                        <option value="OK">Oklahoma</option>
                        <option value="OR">Oregon</option>
                        <option value="PA">Pennsylvania</option>
                        <option value="RI">Rhode Island</option>
                        <option value="SC">South Carolina</option>
                        <option value="SD">South Dakota</option>
                        <option value="TN">Tennessee</option>
                        <option value="TX">Texas</option>
                        <option value="UT">Utah</option>
                        <option value="VT">Vermont</option>
                        <option value="VA">Virginia</option>
                        <option value="WA">Washington</option>
                        <option value="WV">West Virginia</option>
                        <option value="WI">Wisconsin</option>
                        <option value="WY">Wyoming</option>
                        <option value="Other-Locations">Other Locations</option>
                    </select>
                </div>
                <div class="col-sm-3">
                    <button class="btn btn-block btn-primary  "><i class="fa fa-search"></i></button>
                </div>
            </form>
        </div>
    </div>

<div class="main-container" ng-app="myApp" ng-controller="productsCtrl" >
        <div class="container">
            <div class="row">
                <!-- this (.mobile-filter-sidebar) part will be position fixed in mobile version -->
                <div class="col-sm-3 page-sidebar mobile-filter-sidebar">
                    <aside>
                        <div class="inner-box">
                            <div class="categories-list  list-filter">
                                <h5 class="list-title"><strong><a href="#">All Categories</a></strong></h5>
                                <ul class=" list-unstyled">
                                    <?php foreach($categories as $val){?>
                                    <li><a href="javascript:void();" class="a-category" id="category_<?php echo $val['int_category_id']?>"><span
                                            class="title"><?php echo $val['txt_name']?></span><span class="count">&nbsp;</span></a>
                                    </li>
                                    <?php }?>
                                </ul>
                            </div>
                            <!--/.categories-list-->

                            <div class="locations-list  list-filter">
                                <h5 class="list-title"><strong><a href="#">Location</a></strong></h5>
                                <ul class="browse-list list-unstyled long-list">
                                    <li><a href="sub-category-sub-location.html"> Atlanta </a></li>
                                    <li><a href="sub-category-sub-location.html"> Wichita </a></li>
                                    <li><a href="sub-category-sub-location.html"> Anchorage </a></li>
                                    <li><a href="sub-category-sub-location.html"> Dallas </a></li>
                                    <li><a href="sub-category-sub-location.html">New York </a></li>
                                    <li><a href="sub-category-sub-location.html"> Santa Ana/Anaheim </a></li>
                                    <li><a href="sub-category-sub-location.html"> Miami </a></li>
                                    <li><a href="sub-category-sub-location.html"> Virginia Beach </a></li>
                                    <li><a href="sub-category-sub-location.html"> San Diego </a></li>
                                    <li><a href="sub-category-sub-location.html"> Boston </a></li>
                                    <li><a href="sub-category-sub-location.html"> Houston </a></li>
                                    <li><a href="sub-category-sub-location.html">Salt Lake City </a></li>
                                    <li><a href="sub-category-sub-location.html"> Other Locations </a></li>
                                </ul>
                            </div>
                            <!--/.locations-list-->

                            <div class="locations-list  list-filter">
                                <h5 class="list-title"><strong><a href="#">Price range</a></strong></h5>

                                <form role="form" class="form-inline ">
                                    <div class="form-group col-sm-4 no-padding">
                                        <input type="text" placeholder="$ 2000 " id="minPrice" class="form-control">
                                    </div>
                                    <div class="form-group col-sm-1 no-padding text-center hidden-xs"> -</div>
                                    <div class="form-group col-sm-4 no-padding">
                                        <input type="text" placeholder="$ 3000 " id="maxPrice" class="form-control">
                                    </div>
                                    <div class="form-group col-sm-3 no-padding">
                                        <button class="btn btn-default pull-right btn-block-xs" type="submit">GO
                                        </button>
                                    </div>
                                </form>
                                <div style="clear:both"></div>
                            </div>
                            <!--/.list-filter-->
                            <div class="locations-list  list-filter">
                                <h5 class="list-title"><strong><a href="#">Seller</a></strong></h5>
                                <ul class="browse-list list-unstyled long-list">
                                    <li><a href="sub-category-sub-location.html"><strong>All Ads</strong> <span
                                            class="count">228,705</span></a></li>
                                    <li><a href="sub-category-sub-location.html">Business <span
                                            class="count">28,705</span></a></li>
                                    <li><a href="sub-category-sub-location.html">Personal <span
                                            class="count">18,705</span></a></li>
                                </ul>
                            </div>
                            <!--/.list-filter-->
                            <div class="locations-list  list-filter">
                                <h5 class="list-title"><strong><a href="#">Condition</a></strong></h5>
                                <ul class="browse-list list-unstyled long-list">
                                    <li><a href="sub-category-sub-location.html">New <span class="count">228,705</span></a>
                                    </li>
                                    <li><a href="sub-category-sub-location.html">Used <span class="count">28,705</span></a>
                                    </li>
                                    <li><a href="sub-category-sub-location.html">None </a></li>
                                </ul>
                            </div>
                            <!--/.list-filter-->
                            <div style="clear:both"></div>
                        </div>

                        <!--/.categories-list-->
                    </aside>
                </div>
                <!--/.page-side-bar-->
                <div class="col-sm-9 page-content col-thin-left">
                    <div class="category-list">
                        <div class="tab-box ">

                           <!-- Nav tabs -->
                            <div class="col-lg-12  box-title no-border">
                                <div class="inner">
                                    <h2><span> <?php echo $search_data['product'];?> </span>
                                        <small> <?php echo $search_data['total_seller'];?> Sellers Found</small>


                                    </h2>
                                </div>
                            </div>
                            <div class="tab-filter">
                                <select class="selectpicker" data-style="btn-select" data-width="auto">
                                    <option>Short by</option>
                                    <option>Price: Low to High</option>
                                    <option>Price: High to Low</option>
                                </select>
                            </div>
                        </div>
                        <!--/.tab-box-->

                        <div class="listing-filter">
                            <div class="pull-left col-xs-6">
                                <div class="breadcrumb-list"><a href="#" class="current"> <span>All Sellers</span></a> in
                                    New York <a href="#selectRegion" id="dropdownMenu1" data-toggle="modal"> <span
                                            class="caret"></span> </a></div>
                            </div>
                            <div class="pull-right col-xs-6 text-right listing-view-action"><span
                                    class="list-view active"><i class="  icon-th"></i></span> <span
                                    class="compact-view"><i class=" icon-th-list  "></i></span> <span
                                    class="grid-view "><i class=" icon-th-large "></i></span></div>
                            <div style="clear:both"></div>
                        </div>
                        <!--/.listing-filter-->


                        <!-- Mobile Filter bar-->
                        <div class="mobile-filter-bar col-lg-12  ">
                            <ul class="list-unstyled list-inline no-margin no-padding">
                                <li class="filter-toggle">
                                    <a class="">
                                        <i class="  icon-th-list"></i>
                                        Filters
                                    </a>
                                </li>
                                <li>


                                    <div class="dropdown">
                                        <a data-toggle="dropdown" class="dropdown-toggle"><i class="caret "></i> Short
                                            by </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="" rel="nofollow">Relevance</a></li>
                                            <li><a href="" rel="nofollow">Date</a></li>
                                            <li><a href="" rel="nofollow">Company</a></li>
                                        </ul>
                                    </div>

                                </li>
                            </ul>
                        </div>
                        <div class="menu-overly-mask"></div>
                        <!-- Mobile Filter bar End-->

                        <div class="adds-wrapper" ng-if="!sellers">
                            <div class="tab-content">
                                <div class="tab-pane active" id="allAds">
                                    <div id='loading text-center'> <br> <img class='center-block' src='../../images/loading.gif' alt='Loading' /> <br>  </div>
                                </div>
                            </div>
                        </div>
                        <!--/.adds-wrapper-->
                        <div class="adds-wrapper jobs-list" ng-init="getAll()" ng-if="sellers!=''">
                            
                                <div class="item-list job-item" ng-repeat="d in sellers">
                                    <div class="col-sm-2  col-xs-2 no-padding photobox">
                                        <div class="add-image"><a href="">         
                                            <img ng-if="d.txt_org_logo" class="thumbnail no-margin" src="<?php echo base_url();?>{{d.txt_org_logo}}" alt="company logo">
                                            <img ng-if="!d.txt_org_logo" class="thumbnail no-margin" src="<?php echo base_url();?>images/no_logo.jpg" alt="company logo">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-10  col-xs-10  add-desc-box">
                                        <div class="add-details jobs-item">
                                            <h5 class="company-title "><a href="#">{{d.txt_name}}</a></h5>
                                                <h4 class="job-title"><a href="job-details.html"> {{d.txt_organization_name}} </a></h4>
                                                <span class="info-row">  
                                                    <span class="item-location"><i class="fa fa-map-marker"></i> {{d.txt_address1}},{{d.txt_city1}} </span>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                                    <span class=" salary"><i class="fa fa-phone"> </i> {{d.txt_phone1}}</span>
                                                </span>
                                            <div class="jobs-desc">{{d.txt_description}} </div>
                                            <div>
                                                <span class="info-row"> Estd.in {{d.txt_establish_year}} &nbsp;&nbsp;&nbsp; 
                                                    <span class="info-row">{{d.int_no_of_ratings}} Ratings </span>

                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>

<!--                        <div class="tab-box  save-search-bar text-center"><a href=""> <i class=" icon-star-empty"></i>
                            Save Search </a></div>-->
                    </div>
<!--                    <div class="pagination-bar text-center">
                        <ul class="pagination">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#"> ...</a></li>
                            <li><a class="pagination-btn" href="#">Next &raquo;</a></li>
                        </ul>
                    </div>-->
                    <!--/.pagination-bar -->

                   

                </div>
                <!--/.page-content-->

            </div>
        </div>
    </div>
    <!-- /.main-container -->
    <!-- Modal Change City -->

<div class="modal fade" id="selectRegion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                        class="sr-only">Close</span></button>
                <h4 class="modal-title" id="exampleModalLabel"><i class=" icon-map"></i> Select your region </h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12">

                        <p>Popular cities in <strong>New York</strong>
                        </p>

                        <div style="clear:both"></div>
                        <div class="col-sm-6 no-padding">
                            <select class="form-control selecter  " id="region-state" name="region-state">
                                <option value="">All States/Provinces</option>
                                <option value="Alabama">Alabama</option>
                                <option value="Alaska">Alaska</option>
                                <option value="Arizona">Arizona</option>
                                <option value="Arkansas">Arkansas</option>
                                <option value="California">California</option>
                                <option value="Colorado">Colorado</option>
                                <option value="Connecticut">Connecticut</option>
                                <option value="Delaware">Delaware</option>
                                <option value="District of Columbia">District of Columbia</option>
                                <option value="Florida">Florida</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Hawaii">Hawaii</option>
                                <option value="Idaho">Idaho</option>
                                <option value="Illinois">Illinois</option>
                                <option value="Indiana">Indiana</option>
                                <option value="Iowa">Iowa</option>
                                <option value="Kansas">Kansas</option>
                                <option value="Kentucky">Kentucky</option>
                                <option value="Louisiana">Louisiana</option>
                                <option value="Maine">Maine</option>
                                <option value="Maryland">Maryland</option>
                                <option value="Massachusetts">Massachusetts</option>
                                <option value="Michigan">Michigan</option>
                                <option value="Minnesota">Minnesota</option>
                                <option value="Mississippi">Mississippi</option>
                                <option value="Missouri">Missouri</option>
                                <option value="Montana">Montana</option>
                                <option value="Nebraska">Nebraska</option>
                                <option value="Nevada">Nevada</option>
                                <option value="New Hampshire">New Hampshire</option>
                                <option value="New Jersey">New Jersey</option>
                                <option value="New Mexico">New Mexico</option>
                                <option selected value="New York">New York</option>
                                <option value="North Carolina">North Carolina</option>
                                <option value="North Dakota">North Dakota</option>
                                <option value="Ohio">Ohio</option>
                                <option value="Oklahoma">Oklahoma</option>
                                <option value="Oregon">Oregon</option>
                                <option value="Pennsylvania">Pennsylvania</option>
                                <option value="Rhode Island">Rhode Island</option>
                                <option value="South Carolina">South Carolina</option>
                                <option value="South Dakota">South Dakota</option>
                                <option value="Tennessee">Tennessee</option>
                                <option value="Texas">Texas</option>
                                <option value="Utah">Utah</option>
                                <option value="Vermont">Vermont</option>
                                <option value="Virgin Islands">Virgin Islands</option>
                                <option value="Virginia">Virginia</option>
                                <option value="Washington">Washington</option>
                                <option value="West Virginia">West Virginia</option>
                                <option value="Wisconsin">Wisconsin</option>
                                <option value="Wyoming">Wyoming</option>
                            </select>
                        </div>
                        <div style="clear:both"></div>

                        <hr class="hr-thin">
                    </div>
                    <div class="col-md-4">
                        <ul class="list-link list-unstyled">
                            <li><a href="#" title="">All Cities</a></li>
                            <li><a href="#" title="Albany">Albany</a></li>
                            <li><a href="#" title="Altamont">Altamont</a></li>
                            <li><a href="#" title="Amagansett">Amagansett</a></li>
                            <li><a href="#" title="Amawalk">Amawalk</a></li>
                            <li><a href="#" title="Bellport">Bellport</a></li>
                            <li><a href="#" title="Centereach">Centereach</a></li>
                            <li><a href="#" title="Chappaqua">Chappaqua</a></li>
                            <li><a href="#" title="East Elmhurst">East Elmhurst</a></li>
                            <li><a href="#" title="East Greenbush">East Greenbush</a></li>
                            <li><a href="#" title="East Meadow">East Meadow</a></li>

                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="list-link list-unstyled">
                            <li><a href="#" title="Elmont">Elmont</a></li>
                            <li><a href="#" title="Elmsford">Elmsford</a></li>
                            <li><a href="#" title="Farmingville">Farmingville</a></li>
                            <li><a href="#" title="Floral Park">Floral Park</a></li>
                            <li><a href="#" title="Flushing">Flushing</a></li>
                            <li><a href="#" title="Fonda">Fonda</a></li>
                            <li><a href="#" title="Freeport">Freeport</a></li>
                            <li><a href="#" title="Fresh Meadows">Fresh Meadows</a></li>
                            <li><a href="#" title="Fultonville">Fultonville</a></li>
                            <li><a href="#" title="Gansevoort">Gansevoort</a></li>
                            <li><a href="#" title="Garden City">Garden City</a></li>


                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="list-link list-unstyled">
                            <li><a href="#" title="Oceanside">Oceanside</a></li>
                            <li><a href="#" title="Orangeburg">Orangeburg</a></li>
                            <li><a href="#" title="Orient">Orient</a></li>
                            <li><a href="#" title="Ozone Park">Ozone Park</a></li>
                            <li><a href="#" title="Palatine Bridge">Palatine Bridge</a></li>
                            <li><a href="#" title="Patterson">Patterson</a></li>
                            <li><a href="#" title="Pearl River">Pearl River</a></li>
                            <li><a href="#" title="Peekskill">Peekskill</a></li>
                            <li><a href="#" title="Pelham">Pelham</a></li>
                            <li><a href="#" title="Penn Yan">Penn Yan</a></li>
                            <li><a href="#" title="Peru">Peru</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="display:none;">
    <form method="POST" action="<?php echo base_url()."/content/getSearchResult"?>">
        <input type="text" name="city" id="hidden_city">
        <input type="text" name="product" id="hidden_product">
        <input type="text" name="category" id="hidden_category">
    </form>
</div>    
<script>
    $(document).ready(function(){
                
        $(".a-category").click(function(){
            var id=this.id.split("_");
            $("#hidden_category").val(id[1]);
            
        });
    })
</script>