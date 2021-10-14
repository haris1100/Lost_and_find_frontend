@php
if(isset($_GET['type'])){
    if($_GET['type']=='lost' || $_GET['type']=='found'){

    }
    else
        die();
}else
die();
@endphp
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Report {{isset($_GET['type'])?$_GET['type']:''}}</title>
    <link rel="apple-touch-icon" href="newTemp/app-assets/images/favicon/apple-touch-icon-152x152.png">
    <link rel="shortcut icon" type="image/x-icon" href="newTemp/app-assets/images/favicon/favicon-32x32.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="newTemp/app-assets/vendors/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="newTemp/app-assets/vendors/flag-icon/css/flag-icon.min.css">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="newTemp/app-assets/css/themes/vertical-dark-menu-template/materialize.css">
    <link rel="stylesheet" type="text/css" href="newTemp/app-assets/css/themes/vertical-dark-menu-template/style.css">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="newTemp/app-assets/css/custom/custom.css">
    <!-- END: Custom CSS-->
</head>
<!-- END: Head-->

<body class="vertical-layout page-header-light vertical-menu-collapsible vertical-dark-menu preload-transitions 2-columns   " data-open="click" data-menu="vertical-dark-menu" data-col="2-columns">

    <!-- BEGIN: Header-->
    @include('header')
    <!-- END: Header-->
    <ul class="display-none" id="default-search-main">
        <li class="auto-suggestion-title"><a class="collection-item" href="#">
                <h6 class="search-title">FILES</h6>
            </a></li>
        <li class="auto-suggestion"><a class="collection-item" href="#">
                <div class="display-flex">
                    <div class="display-flex align-item-center flex-grow-1">
                        <div class="avatar"><img src="newTemp/app-assets/images/icon/pdf-image.png" width="24" height="30" alt="sample image"></div>
                        <div class="member-info display-flex flex-column"><span class="black-text">Two new item submitted</span><small class="grey-text">Marketing Manager</small></div>
                    </div>
                    <div class="status"><small class="grey-text">17kb</small></div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="collection-item" href="#">
                <div class="display-flex">
                    <div class="display-flex align-item-center flex-grow-1">
                        <div class="avatar"><img src="newTemp/app-assets/images/icon/doc-image.png" width="24" height="30" alt="sample image"></div>
                        <div class="member-info display-flex flex-column"><span class="black-text">52 Doc file Generator</span><small class="grey-text">FontEnd Developer</small></div>
                    </div>
                    <div class="status"><small class="grey-text">550kb</small></div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="collection-item" href="#">
                <div class="display-flex">
                    <div class="display-flex align-item-center flex-grow-1">
                        <div class="avatar"><img src="newTemp/app-assets/images/icon/xls-image.png" width="24" height="30" alt="sample image"></div>
                        <div class="member-info display-flex flex-column"><span class="black-text">25 Xls File Uploaded</span><small class="grey-text">Digital Marketing Manager</small></div>
                    </div>
                    <div class="status"><small class="grey-text">20kb</small></div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="collection-item" href="#">
                <div class="display-flex">
                    <div class="display-flex align-item-center flex-grow-1">
                        <div class="avatar"><img src="newTemp/app-assets/images/icon/jpg-image.png" width="24" height="30" alt="sample image"></div>
                        <div class="member-info display-flex flex-column"><span class="black-text">Anna Strong</span><small class="grey-text">Web Designer</small></div>
                    </div>
                    <div class="status"><small class="grey-text">37kb</small></div>
                </div>
            </a></li>
        <li class="auto-suggestion-title"><a class="collection-item" href="#">
                <h6 class="search-title">MEMBERS</h6>
            </a></li>
        <li class="auto-suggestion"><a class="collection-item" href="#">
                <div class="display-flex">
                    <div class="display-flex align-item-center flex-grow-1">
                        <div class="avatar"><img class="circle" src="newTemp/app-assets/images/avatar/avatar-7.png" width="30" alt="sample image"></div>
                        <div class="member-info display-flex flex-column"><span class="black-text">John Doe</span><small class="grey-text">UI designer</small></div>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="collection-item" href="#">
                <div class="display-flex">
                    <div class="display-flex align-item-center flex-grow-1">
                        <div class="avatar"><img class="circle" src="newTemp/app-assets/images/avatar/avatar-8.png" width="30" alt="sample image"></div>
                        <div class="member-info display-flex flex-column"><span class="black-text">Michal Clark</span><small class="grey-text">FontEnd Developer</small></div>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="collection-item" href="#">
                <div class="display-flex">
                    <div class="display-flex align-item-center flex-grow-1">
                        <div class="avatar"><img class="circle" src="newTemp/app-assets/images/avatar/avatar-10.png" width="30" alt="sample image"></div>
                        <div class="member-info display-flex flex-column"><span class="black-text">Milena Gibson</span><small class="grey-text">Digital Marketing</small></div>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="collection-item" href="#">
                <div class="display-flex">
                    <div class="display-flex align-item-center flex-grow-1">
                        <div class="avatar"><img class="circle" src="newTemp/app-assets/images/avatar/avatar-12.png" width="30" alt="sample image"></div>
                        <div class="member-info display-flex flex-column"><span class="black-text">Anna Strong</span><small class="grey-text">Web Designer</small></div>
                    </div>
                </div>
            </a></li>
    </ul>
    <ul class="display-none" id="page-search-title">
        <li class="auto-suggestion-title"><a class="collection-item" href="#">
                <h6 class="search-title">PAGES</h6>
            </a></li>
    </ul>
    <ul class="display-none" id="search-not-found">
        <li class="auto-suggestion"><a class="collection-item display-flex align-items-center" href="#"><span class="material-icons">error_outline</span><span class="member-info">No results found.</span></a></li>
    </ul>



    <!-- BEGIN: SideNav-->
    @include('sidebar')
    <!-- END: SideNav-->

    <!-- BEGIN: Page Main-->
    <div id="main">
        <div class="row">
            <div id="breadcrumbs-wrapper" data-image="newTemp/app-assets/images/gallery/breadcrumb-bg.jpg">
                <!-- Search for small screen-->
                <div class="container">
                    <div class="row">
                        <div class="col s12 m6 l6">
                            <h5 class="breadcrumbs-title mt-0 mb-0"><span>Report {{isset($_GET['type'])?$_GET['type']:''}}</span></h5>
                        </div>
                        <div class="col s12 m6 l6 right-align-md">
                            <ol class="breadcrumbs mb-0">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Form</a>
                                </li>
                                <li class="breadcrumb-item active">Form Layouts
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12">
                <div class="container">
                    <div class="seaction">
                        <div class="row">


                            <!-- Form Advance -->
                            <div class="col s12 m12 l12">
                                <div id="Form-advance" class="card card card-default scrollspy">
                                    <div class="card-content">

                                        <form action="{{url('postReport')}}" method="post" enctype="multipart/form-data">
                                            <input type="text" value="{{isset($_GET['type'])?$_GET['type']:''}}" hidden name="type">
                                            <div class="row">
                                                <div class="input-field col m6 s12">
                                                    <select id="categories" name="categories" required>
                                                        <option selected disabled>Select Category</option>
                                                        <option >Mobiles</option>
                                                        <option >Pets</option>
                                                        <option >Automobiles</option>
                                                        <option>Bags</option>
                                                        <option>Documents</option>
                                                        <option >Laptops</option>
                                                        <option>jewelry</option>
                                                        <option >Keys</option>
                                                        <option >Watches</option>
                                                        <option >Wallets</option>

                                                        <option >Peoples</option>
                                                        <option >Others</option>
                                                    </select>
{{--                                                    <label>Select Category</label>--}}
                                                </div>

                                                <div class="input-field col m6 s12">
                                                    <input id="color" type="text" name="color">
                                                    <label for="color">Colour</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input id="location" type="text" name="location">
                                                    <label for="location">Location</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input id="description" type="text" name="description">
                                                    <label for="description" id="descriptionCategory">Short description (e.g. providing contact info )</label>
                                                </div>
                                            </div>
                                            <div class="row">

                                                    <div class="input-field col m6 s12  ">
                                                        <input id="name" type="text" name="name">
                                                        <label for="name">Name (if any) / sub category / type</label>
                                                    </div>

                                                <div class="input-field col m6 s12">
                                                    <input type="text" class="datepicker" id="dob" name="date">
                                                    <label for="dob">Date of {{isset($_GET['type'])?$_GET['type']:''}}</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col m4 s12 file-field input-field">
                                                    <div class="btn float-right btn-small">
                                                        <span><i class="material-icons">file_upload</i></span>
                                                        <input type="file" name="image1"  required>
                                                    </div>
                                                    <div class="file-path-wrapper">
                                                        <input class="file-path validate" type="text" placeholder="Upload Images 1 ">
                                                    </div>
                                                </div>
                                                <div class="col m4 s12 file-field input-field">
                                                    <div class="btn float-right btn-small">
                                                        <span><i class="material-icons">file_upload</i></span>
                                                        <input type="file" name="image2"  >
                                                    </div>
                                                    <div class="file-path-wrapper">
                                                        <input class="file-path validate" type="text" placeholder="Upload Images 2 (if any)">
                                                    </div>
                                                </div>
                                                <div class="col m4 s12 file-field input-field">
                                                    <div class="btn float-right btn-small">
                                                        <span><i class="material-icons">file_upload</i></span>
                                                        <input type="file" name="image3"  >
                                                    </div>
                                                    <div class="file-path-wrapper">
                                                        <input class="file-path validate" type="text" placeholder="Upload Images 3 (if any)">
                                                    </div>
                                                </div>
{{--                                                <div class="input-field col m6 s12">--}}
{{--                                                    <span>Range</span>--}}
{{--                                                    <p class="range-field">--}}
{{--                                                        <input type="range" id="test5" min="0" max="100" />--}}
{{--                                                    </p>--}}
{{--                                                </div>--}}
                                            </div>
                                            <div class="row">
                                                <div class="row"  id="mobileCateHider">
                                                    <div class="input-field col m4 s12 not model">
                                                        <input id="model" type="text" name="model">
                                                        <label for="model">Model</label>
                                                    </div>
                                                    <div class="input-field col m4 s12 not imei">
                                                        <input id="imei" type="text" name="imei">
                                                        <label for="imei">IMEI number</label>
                                                    </div>
                                                    <div class="input-field col m4 s12 not serial">
                                                        <input id="serial" type="text" name="serial">
                                                        <label for="serial">Serial number</label>
                                                    </div>
                                                </div>
                                                <div class="row" id="petCateHider">
                                                    <div class="input-field col m6 s12 not sex">
                                                        <select id="sex" name="sex">
                                                            <option selected disabled>Select Gender</option>
                                                            <option  >Male</option>
                                                            <option  >Female</option>

                                                        </select>
                                                    </div>
                                                    <div class="input-field col m6 s12 not age">
                                                        <input id="age" type="number" name="age">
                                                        <label for="age">Age</label>
                                                    </div>

                                                </div>
                                                <div class="row" id="automobileCataHider" >
                                                    <div class="input-field col m6 s12 not registration">
                                                        <input id="registration" type="text" name="registration">
                                                        <label for="Registration">Registration Number</label>
                                                    </div>
                                                    <div class="input-field col m6 s12 not company">
                                                        <input id="company" type="text" name="company">
                                                        <label for="company">Company</label>
                                                    </div>
                                                </div>

                                                <div class="row" id="peopleCataHider" >
                                                    <div class="input-field col m6 s12 not height" >
                                                        <input id="height" type="number" name="height">
                                                        <label for="height">Height</label>
                                                    </div>
                                                    <div class="input-field col m4 s12 not brand" >
                                                        <input id="brand" type="text" name="brand">
                                                        <label for="brand">Brand</label>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
                                                            <i class="material-icons right">send</i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- START RIGHT SIDEBAR NAV -->
{{--                 --}}
                    <!-- END RIGHT SIDEBAR NAV -->
                    <div style="bottom: 50px; right: 19px;" class="fixed-action-btn direction-top"><a class="btn-floating btn-large gradient-45deg-light-blue-cyan gradient-shadow"><i class="material-icons">add</i></a>
                        <ul>
                            <li><a href="css-helpers.html" class="btn-floating blue"><i class="material-icons">help_outline</i></a></li>
                            <li><a href="cards-extended.html" class="btn-floating green"><i class="material-icons">widgets</i></a></li>
                            <li><a href="app-calendar.html" class="btn-floating amber"><i class="material-icons">today</i></a></li>
                            <li><a href="app-email.html" class="btn-floating red"><i class="material-icons">mail_outline</i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="content-overlay"></div>
            </div>
        </div>
    </div>
    <!-- END: Page Main-->

    <!-- BEGIN: Footer-->

    <footer class="page-footer footer footer-static footer-light navbar-border navbar-shadow">
        <div class="footer-copyright">
            <div class="container"><span>&copy; 2020 <a href="http://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank">PIXINVENT</a> All rights reserved.</span><span class="right hide-on-small-only">Design and Developed by <a href="https://pixinvent.com/">PIXINVENT</a></span></div>
        </div>
    </footer>

    <!-- END: Footer-->
    <!-- BEGIN VENDOR JS-->
    <script src="newTemp/app-assets/js/vendors.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="newTemp/app-assets/js/plugins.js"></script>
    <script src="newTemp/app-assets/js/search.js"></script>
    <script src="newTemp/app-assets/js/custom/custom-script.js"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
    <script>
        // $.ajax({
        //     url:'http://localhost/LF_backend/api/categories',
        //     method:'GET',
        //     success:function(response){
        //        for(var i=0;i<response.length-1;i++){
        //          $('#categories').append('<option>sdfsd</option>');
        //          console.log(response[i]);
        //        }
        //     }
        // });
        hideEveryDiv();
    $('#categories').on('change',function () {
           // alert($('#categories').val());
        customizedCategories( $('#categories').val());
        $('#descriptionCategory').text('Short description about '+$('#categories').val());
    });
    function customizedCategories(name) {
        hideEveryDiv();
            switch(name){
                case 'Mobiles' :
                    $('.model').show();
                    $('.serial').show();
                    $('.imei').show();
                    ;break;
                    case 'Pets' :
                    $('.sex').show();
                    $('.age').show();

                    ;break;
                    case 'Automobiles' :
                    $('.registration').show();
                    $('.company').show();

                    ;break;
                    case 'Laptops' :
                        $('.brand').show();
                        $('.serial').show();
                        $('.model').show();
                        ;break;
                        case 'Watches' :

                        $('.model').show();
                        ;break;

                        case 'Peoples' :

                        $('.sex').show();
                        $('.age').show();
                        $('.height').show();
                        ;break;
                        default :hideEveryDiv();
            }
    }
    function hideEveryDiv() {
            $('.not').hide();
    }

    </script>
</body>

</html>
