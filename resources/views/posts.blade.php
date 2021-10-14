@php 
$data=file_get_contents('http://frontend.urlat.cc/api/posts/'.$_GET['id']);
        $data=json_decode($data);   
        if(isset($data->category)){
           
           
            
        
        
            $pics=explode(' ',$data->images);
           }
        else 
        die();
@endphp
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Post</title>
    <link rel="apple-touch-icon" href="newTemp/app-assets/images/favicon/apple-touch-icon-152x152.png">
    <link rel="shortcut icon" type="image/x-icon" href="newTemp/app-assets/images/favicon/favicon-32x32.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="newTemp/app-assets/vendors/vendors.min.css">
    <link rel="stylesheet" href="newTemp/app-assets/vendors/select2/select2.min.css" type="text/css">
    <link rel="stylesheet" href="newTemp/app-assets/vendors/select2/select2-materialize.css" type="text/css">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="newTemp/app-assets/css/themes/vertical-dark-menu-template/materialize.css">
    <link rel="stylesheet" type="text/css" href="newTemp/app-assets/css/themes/vertical-dark-menu-template/style.css">
    <link rel="stylesheet" type="text/css" href="newTemp/app-assets/css/pages/form-select2.css">
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
                            <h5 class="breadcrumbs-title mt-0 mb-0"><span>Post</span></h5>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col s12">
                <div class="container ">

                <div class="row">
                <div class="row" id="product-nine">
                                                    <div class="col m6 s12">
                                                    <div class="carousel">
                                                    @foreach ($pics as $pic)
                                               
                                <a class="carousel-item" href="http://localhost/LF/{{$pic}}" target="_blank"><img src="http://localhost/LF/{{$pic}}" style="width:250px;height:250px"></a>
                                       
                                @endforeach
                                        </div>
                                      
                                                        <!-- <img src="newTemp/app-assets/images/cards/smartspeakers.png" class="responsive-img" alt=""> -->
                                                        <!-- <div class="carousel carousel-slider  "> -->
<!--                 
                @foreach ($pics as $pic)
                <img src="newTemp/app-assets/images/cards/smartspeakers.png" class="responsive-img" alt="">

                          @endforeach  -->
                                                    </div>
                                                    <div class="col m6 s12">
                                                        <p>{{$data->type}} <span class="right">
                                                            @if(\App\Http\Controllers\usersControl::validatePost($data->post_id)!='true')
                                            <a href="#sendmessage" onclick="$('#sendmessage').modal()" class="modal-trigger waves-effect waves-light btn gradient-45deg-amber-amber  z-depth-5 ">send message</a>
                                       @endif </span>
                                    </p>
                                                        <h5>{{$data->category}}</h5>
                                                        <!-- <span class="new badge left ml-0 mr-2" data-badge-caption="">4.9 Star</span> -->
                                                        <p> <span class="green-text" style="word-wrap: break-word">{{$data->name}}</span></p>
                                                        <hr class="mb-5">
                                                        <span class="vertical-align-top mr-4"><i class="material-icons mr-3">favorite_border</i></span>
                                                        <ul class="list-bullet" style="word-wrap: break-word">
                                                            {{$data->description}}asdjaskdjkksjdklasjdklasjdlasjdaklsdj
                                                            <!-- <li class="list-item-bullet">Ultra Slim & Stylish</li>
                                                            <li class="list-item-bullet">Controls smart home devices</li>
                                                            <li class="list-item-bullet">Dual speakers powered by Dolby</li>
                                                            <li class="list-item-bullet">Alexa Calling</li> -->
                                                        </ul>
                                                        <span class="red-text">Location:</span>
                                                        <h6 style="word-wrap: break-word;">{{$data->location}}</h5>
                                                        <!-- <a class="waves-effect waves-light btn gradient-45deg-deep-purple-blue mt-2 mr-2">ADD TO CART</a>
                                                        <a class="waves-effect waves-light btn gradient-45deg-purple-deep-orange mt-2">BUY NOW</a> -->
                                                        <h6><u>   other information </u>:</h6>
                                                        <ul class="list-bullet">
                                                            <li class="list-item-bullet color">color : <span class="">{{$data->color}}</span></li>
                                                            <li class="list-item-bullet date">data of {{$data->type}} : <span class="green-text">{{$data->date}}</li>
                                                            <li class="list-item-bullet model">model : <span class="green-text">{{$data->model}}</li>
                                                            <li class="list-item-bullet imei">imei number:  <span class="green-text">{{$data->imei}}</li>
                                                            <li class="list-item-bullet serial">serial number : <span class="green-text">{{$data->serial}}</li>
                                                            <li class="list-item-bullet sex">gender : <span class="green-text">{{$data->sex}}</li>
                                                            <li class="list-item-bullet age">age :  <span class="green-text">{{$data->age}}</li>
                                                            <li class="list-item-bullet registration">registration : <span class="green-text">{{$data->registration}}</li>
                                                            <li class="list-item-bullet company">company : <span class="green-text">{{$data->company}}</li>
                                                            <li class="list-item-bullet height">height : <span class="green-text">{{$data->height}}</li>
                                                            <li class="list-item-bullet brand">brand : <span class="green-text">{{$data->brand}}</li>
                                                        </ul>

                                                    </div>
                                                </div>
                
                </div>
                </div>

                 

                <!-- END RIGHT SIDEBAR NAV -->

                </div>
                <div class="content-overlay"></div>
            </div>
        </div>
    </div>
    <!-- END: Page Main-->

    <!-- BEGIN: Footer-->

    <div id="sendmessage" class="modal">
    <div class="modal-content">
      <h4>Send message </h4>
     <form action="sendMessage" method="post">
         <input type="text" hidden name="post_id" value="{{$_GET['id']}}">
         <input type="text" name="message" id="message" placeholder="you can message user e.g. your contact information or email">
         <button class="waves-effect waves-light btn gradient-45deg-amber-amber  z-depth-5 center mt-3 mb-1" type="submit">Send</button>
     </form>
    </div>
   
  </div>

    <!-- END: Footer-->
    <!-- BEGIN VENDOR JS-->
    <script src="newTemp/app-assets/js/vendors.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="newTemp/app-assets/vendors/select2/select2.full.min.js"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="newTemp/app-assets/js/plugins.js"></script>
    <script src="newTemp/app-assets/js/search.js"></script>
    <script src="newTemp/app-assets/js/custom/custom-script.js"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="newTemp/app-assets/js/scripts/form-select2.js"></script>
    <!-- END PAGE LEVEL JS-->
    <script>
        let iteration = 1;
        function show_advanceed_search(val){
            if(val===1){
              //  $('#loadLoder').show();
               // setTimeout(function(){
                    $('.advanceSearcher').show();
                    $('#advSearch').text('Close advance search');
                    $('#loadLoder').hide();
                    // $('.color').select2({
                    //     theme: "classic",
                    //     tags: true,
                    //     closeOnSelect: false
                    //
                    // });
              //  }, 2000);

                iteration=0;
            }
            else{
                $('.advanceSearcher').hide();
                $('#advSearch').text('Advance search');
                iteration=1;
            }



        }
        customizedCategories('{{$data->category}}')
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
           // $('.list-item-bullet').hide();
           $('.model').hide();
                    $('.serial').hide();
                    $('.imei').hide();
                    $('.brand').hide();
                    $('.registration').hide();
                    $('.company').hide();

                       
                        $('.sex').hide();
                        $('.age').hide();
                        $('.height').hide();

    }
        $(document).ready(function(){
    $('.carousel').carousel();
  });

    </script>
</body>

</html>
