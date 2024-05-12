<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://www.x3dom.org/download/x3dom.js"></script>
    <link rel="stylesheet" href="https://www.x3dom.org/download/x3dom.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
    <script src="https://kit.fontawesome.com/c9a8848277.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    

    <!-- custom css file link  -->
    <link rel="stylesheet" href="//users.sussex.ac.uk/~yz644/3dapp/assignment/css/main.css">



</head>
<body>
<!-- header section starts  -->

<header class="header">

    <div class="logo">
        <a class="navbar-brand" href="#">
            <h3>C</h3>
            <h3>o</h3>
            <h3>c</h3>
            <h3>a</h3>
            <h3>C</h3>
            <h3>o</h3>
            <h3>l</h3>
            <h3>a</h3>
            </a>
        </div>

    <nav class="navbar">
        <a href="#" onclick="showPage('HomePage')">Home</a>
        <a href="#" onclick="showPage('MuseumPage')">Museum</a>
        <a href="#" onclick="showPage('ModelsPage')">Models</a>
        <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="modal" data-target="#contactModal">Contact</a>
        </li>
    </nav>
    <!-- Madal-->
    <div id="contactModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">3D App Contact Details</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Yongtao Zhang, Computing Digital Meida, Email: yz644@sussex.ac.uk</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    </nav>
    

    <div class="icons">
        <div id="menu-btn" class="fas fa-bars"></div>
        <div id="search-btn" class="fas fa-search"></div>
        <div id="cart-btn" class="fas fa-shopping-cart"></div>
        <div id="login-btn" class="fas fa-user"></div>
    </div>

    <form action="" class="search-form">
        <input type="search" placeholder="search here..." id="search-box">
        <label for="search-box" class="fas fa-search"></label>
    </form>

    <div class="shopping-cart">
        <div class="box">
            <i class="fas fa-times" aria-hidden="true"></i>
            <img src="//users.sussex.ac.uk/~yz644/3dapp/assignment/image/coke.png" alt="">
            <div class="content">
                <h3>Coke</h3>
                <span class="quantity">1</span>
                <span class="multiply">x</span>
                <span class="price">$1.99</span>
            </div>
        </div>
        <div class="box">
            <i class="fas fa-times" aria-hidden="true"></i>
            <img src="//users.sussex.ac.uk/~yz644/3dapp/assignment/image/sprite_home.png" alt="">
            <div class="content">
                <h3>Sprite</h3>
                <span class="quantity">2</span>
                <span class="multiply">x</span>
                <span class="price">$1.99</span>
            </div>
        </div>
        <div class="box">
            <i class="fas fa-times" aria-hidden="true"></i>
            <img src="//users.sussex.ac.uk/~yz644/3dapp/assignment/image/pepper_home.png" alt="">
            <div class="content">
                <h3>Dr.Pepper</h3>
                <span class="quantity">4</span>
                <span class="multiply">x</span>
                <span class="price">$4.5</span>
            </div>
        </div>
        <h3 class="total"> total : <span>$23.97</span> </h3>
        <a href="#" class="btn">checkout cart</a>
    </div>

    <form action="" class="login-form">
        <h3>login form</h3>
        <input type="email" placeholder="enter your email" class="box">
        <input type="password" placeholder="enter your password" class="box">
        <div class="remember">
            <input type="checkbox" name="" id="remember-me">
            <label for="remember-me">remember me</label>
        </div>
        <input type="submit" value="login now" class="btn">
        <p>forget password? <a href="#">click here</a></p>
        <p>don't have an account? <a href="#">create one</a></p>
    </form>

</header>

<!-- header section ends -->
<div id="HomePage" class="page">
<section class="home">

    <div class="slides-container">

        <div class="slide active">
            <div class="image">
                <img src="//users.sussex.ac.uk/~yz644/3dapp/assignment/image/header_coke.png" alt="">
            </div>
            <div class="content">
                <span>Best summer ever with</span>
                <h3>Coca Cola</h3>
                <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn">shop now</a>
            </div>
        </div>

        <div class="slide">
            <div class="image">
                <img src="//users.sussex.ac.uk/~yz644/3dapp/assignment/image/header_sprite.png" alt="">
            </div>
            <div class="content">
                <span>Best summer ever with</span>
                <h3>Coca Cola</h3>
                <a href="http://www.coca-cola.co.uk/drinks/coca-cola/sprite" class="btn">Find more...</a>
            </div>
        </div>

        <div class="slide">
            <div class="image">
                <img src="//users.sussex.ac.uk/~yz644/3dapp/assignment/image/header_pepper.png" alt="">
            </div>
            <div class="content">
                <span>Best summer ever with</span>
                <h3>Coca Cola</h3>
                <a href="http://www.coca-cola.co.uk/drinks/dr-pepper/dr-pepper" class="btn">Find more...</a>
            </div>
        </div>

    </div>

    <div id="next-slide" class="fas fa-angle-right" onclick="next()"></div>
    <div id="prev-slide" class="fas fa-angle-left" onclick="next()"></div>

</section>

<section class="banner-container">

    <div class="banner">
        <div class="touch-circle">Touch me</div>
        <img src="//users.sussex.ac.uk/~yz644/3dapp/assignment/image/home_coke.png" alt="">
        <div class="content">
            <h3 id="title_coke"></h3>
            <p id="description_coke"></p>
                <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn">Find more...</a>
        </div>
    </div>

    <div class="banner">
        <div class="touch-circle">Touch me</div>
        <img src="//users.sussex.ac.uk/~yz644/3dapp/assignment/image/sprite_home.png" alt="">
        <div class="content">
            <h3 id="title_sprite"></h3>
            <p id="description_sprite"></p>
                <a href="http://www.coca-cola.co.uk/drinks/coca-cola/sprite" class="btn">Find more...</a>
        </div>
    </div>

    <div class="banner">
        <div class="touch-circle">Touch me</div>
        <img src="//users.sussex.ac.uk/~yz644/3dapp/assignment/image/pepper_home.png" alt="">
        <div class="content">
            <h3 id="title_pepper"></h3>
            <p id="description_pepper"></p>
            <a href="http://www.coca-cola.co.uk/drinks/dr-pepper/dr-pepper" class="btn">Find more...</a>
        </div>
    </div>
</section>

</div>

<div id="ModelsPage" class="page" style="display: none;">
    <section class="about" id="about">
        <div class="content" id="cocaColaSection">
            <h3 id="x3dModelTitle_coke"></h3>
            <p id="x3dCreationMethod_coke"></p>
        </div>
    
        <div id="model3DContainer" class="d-flex align-items-center justify-content-center" style="width: 65%;">
            <div class="changeModel">
            <button class="model-button" onclick="changeModel('coke')" style="background-image: url('//users.sussex.ac.uk/~yz644/3dapp/assignment/image/icon_coke.png');"></button>
                <button class="model-button" onclick="changeModel('sprite')" style="background-image: url('//users.sussex.ac.uk/~yz644/3dapp/assignment/image/icon_sprite.png');"></button>
                <button class="model-button" onclick="changeModel('pepper')" style="background-image: url('//users.sussex.ac.uk/~yz644/3dapp/assignment/image/icon_pepper.png');"></button>
            </div>

            <div id="model3D">
                <X3D width="100%" height="400px">
                    <Scene>
                        <Transform DEF="modelTransform" translation="0 0 0">
                        <Inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="https://users.sussex.ac.uk/~yz644/3dapp/assignment/assets/x3d/coke-2.x3d"></Inline>
                        </Transform>
                        <Viewpoint id="FrontView" description="Front View" orientation="0 1 0 0" position="0 100 1800"></Viewpoint>
                                <Viewpoint id="BackView" description="Back View" orientation="0 1 0 3.14159" position="0 100 -1800"></Viewpoint>
                                <Viewpoint id="LeftView" description="Left View" orientation="0.9071 0.7071 0 -0.7854" position="-1000 1000 1000"></Viewpoint>
                                <Viewpoint id="RightView" description="Right View" orientation="0.9071 0.7071 0 0.7854" position="800 -950 1050"></Viewpoint>
                                <Viewpoint id="TopView" description="Top View" orientation="1 0 0 -1.5708" position="0 1200 0"></Viewpoint>
                                <Viewpoint id="OffView" description="Off View" orientation="1 0 0 1.5708" position="0 -1200 0"></Viewpoint>
        
                                <TimeSensor id="RotationTimerX" DEF="RotationTimerX" cycleInterval="5" enabled="false" loop="true"></TimeSensor>
                                <OrientationInterpolator id="RotatorX" DEF="RotatorX" key="0 0.5 1" keyValue="0 1 0 0, 0 1 0 3.14159, 0 1 0 6.28318"></OrientationInterpolator>
                                <ROUTE fromNode="RotationTimerX" fromField="fraction_changed" toNode="RotatorX" toField="set_fraction"></ROUTE>
                                <ROUTE fromNode="RotatorX" fromField="value_changed" toNode="modelTransform" toField="rotation"></ROUTE>
                                <!-- Y轴旋转控制 -->
                                <TimeSensor id="RotationTimerY" DEF="RotationTimerY" cycleInterval="5" enabled="false" loop="true"></TimeSensor>
                                <OrientationInterpolator id="RotatorY" DEF="RotatorY" key="0 0.5 1" keyValue="1 0 0 0, 1 0 0 3.14159, 1 0 0 6.28318"></OrientationInterpolator>
                                <ROUTE fromNode="RotationTimerY" fromField="fraction_changed" toNode="RotatorY" toField="set_fraction"></ROUTE>
                                <ROUTE fromNode="RotatorY" fromField="value_changed" toNode="modelTransform" toField="rotation"></ROUTE>
                                <!-- Z轴旋转控制 -->
                                <TimeSensor id="RotationTimerZ" DEF="RotationTimerZ" cycleInterval="5" enabled="false" loop="true"></TimeSensor>
                                <OrientationInterpolator id="RotatorZ" DEF="RotatorZ" key="0 0.5 1" keyValue="0 0 1 0, 0 0 1 3.14159, 0 0 1 6.28318"></OrientationInterpolator>
                                <ROUTE fromNode="RotationTimerZ" fromField="fraction_changed" toNode="RotatorZ" toField="set_fraction"></ROUTE>
                                <ROUTE fromNode="RotatorZ" fromField="value_changed" toNode="modelTransform" toField="rotation"></ROUTE>
        
                                <DirectionalLight id="Top_light" DEF="Top_light" direction="0 -1 0" intensity="1" on="false"></DirectionalLight>
                                <DirectionalLight id="Left_light" DEF="Left_light" direction="-1 0 0" intensity="0.8" on="false"></DirectionalLight>
                                <DirectionalLight id="Headlight" DEF="Headlight" direction="0 0 -1" intensity="0.8" on="false"></DirectionalLight>
                                
                    </Scene>
                </X3D>
            </div>
    
            <div class="changebgcolor ml-3">
                <label>Red: <input type="range" id="red" class="slider red-slider" min="0" max="255" value="255" oninput="adjustBackgroundColor()"></label><br>
                <label>Green: <input type="range" id="green" class="slider green-slider" min="0" max="255" value="215" oninput="adjustBackgroundColor()"></label><br>
                <label>Blue: <input type="range" id="blue" class="slider blue-slider" min="0" max="255" value="0" oninput="adjustBackgroundColor()"></label><br>
                <button onclick="clearBackgroundColor()">Clear Color</button>
            </div>
        </div>
    </section>
    <div id="interaction" class="row">
            <!-- Column for the camera view controls -->
            <div class="container mt-3">
                <!-- Camera Views Control -->
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-header">
                                <!-- 使用a标签作为触发器，设置正确的data-toggle和aria属性 -->
                                <a class="btn dropdown-toggle" href="#" id="navbardrop" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Camera Controls
                                </a>
                                <!-- 下拉菜单内容 -->
                                <div class="dropdown-menu" aria-labelledby="navbardrop">
                                    <a class="dropdown-item" href="#" onclick="switchView('FrontView')">Front</a>
                                    <a class="dropdown-item" href="#" onclick="switchView('BackView')">Back</a>
                                    <a class="dropdown-item" href="#" onclick="switchView('LeftView')">Left</a>
                                    <a class="dropdown-item" href="#" onclick="switchView('RightView')">Right</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#" onclick="switchView('TopView')">Top</a>
                                    <a class="dropdown-item" href="#" onclick="switchView('OffView')">Bottom</a>
                                </div>
                            </div>                
                            <div class="card-body">
                                 
                                <button class="btn" onclick="switchView('FrontView')">Front</button>
                                <button class="btn" onclick="switchView('BackView')">Back</button>
                                <button class="btn" onclick="switchView('LeftView')">Left</button>
                                <button class="btn" onclick="switchView('RightView')">Right</button>
                            </div>
                        </div>
                    </div>
            
                    <!-- Spin Controls -->
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-header">
                                Spin Controls
                            </div>
                            <div class="card-body">
                                <button class="btn" onclick="toggleRotation('X');">Spin X</button>
                                <button class="btn" onclick="toggleRotation('Y');">Spin Y</button>
                                <button class="btn" onclick="toggleRotation('Z');">Spin Z</button>
                                <button class="btn" onclick="stopAllRotations();">Stop All Rotations</button>
                            </div>
                        </div>
                    </div>
            
                    <!-- Lighting Controls -->
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-header">
                                Lighting Controls
                            </div>
                            <div class="card-body">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" onclick="lightSwitch('Top_light');" id="topLight">
                                    <label class="form-check-label" for="topLight">- Top Light</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" onclick="lightSwitch('Left_light');" id="leftLight">
                                    <label class="form-check-label" for="leftLight">- Left Light</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" onclick="lightSwitch('Headlight');" id="headLight">
                                    <label class="form-check-label" for="headLight">- Headlight</label>
                                </div>
                            </div>
                        </div>
                    </div>
            
                    <!-- Wireframe Mode Control -->
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-header">
                                Wireframe Mode
                            </div>
                            <div class="card-body">
                                <button class="btn" onclick="toggleWireframe();">Toggle Wireframe</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
    </div>
    <section class="gallery">
    
        <h1 class="title"> our <span>gallery</span> <a href="#" onclick="showPage('MuseumPage')">view all &gt;&gt;</a> </h1>
    
        <div class="box-container">
    
            <div class="box">
                <img src="//users.sussex.ac.uk/~yz644/3dapp/assignment/image/coke_render1.png" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-eye" aria-hidden="true"></a>
                    <a href="#" class="fas fa-heart" aria-hidden="true"></a>
                    <a href="#" class="fas fa-share-alt" aria-hidden="true"></a>
                </div>
            </div>
    
            <div class="box">
                <img src="//users.sussex.ac.uk/~yz644/3dapp/assignment/image/sprite_render1.png" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-eye" aria-hidden="true"></a>
                    <a href="#" class="fas fa-heart" aria-hidden="true"></a>
                    <a href="#" class="fas fa-share-alt" aria-hidden="true"></a>
                </div>
            </div>
    
            
            <div class="box">
                <img src="//users.sussex.ac.uk/~yz644/3dapp/assignment/image/pepper_render1.png" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-eye" aria-hidden="true"></a>
                    <a href="#" class="fas fa-heart" aria-hidden="true"></a>
                    <a href="#" class="fas fa-share-alt" aria-hidden="true"></a>
                </div>
            </div><div class="box">
                <img src="//users.sussex.ac.uk/~yz644/3dapp/assignment/image/coke_render2.png" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-eye" aria-hidden="true"></a>
                    <a href="#" class="fas fa-heart" aria-hidden="true"></a>
                    <a href="#" class="fas fa-share-alt" aria-hidden="true"></a>
                </div>
            </div>
    
            <div class="box">
                <img src="//users.sussex.ac.uk/~yz644/3dapp/assignment/image/sprite_render2.png" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-eye" aria-hidden="true"></a>
                    <a href="#" class="fas fa-heart" aria-hidden="true"></a>
                    <a href="#" class="fas fa-share-alt" aria-hidden="true"></a>
                </div>
            </div>
        <div class="box">
                <img src="//users.sussex.ac.uk/~yz644/3dapp/assignment/image/pepper_render2" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-eye" aria-hidden="true"></a>
                    <a href="#" class="fas fa-heart" aria-hidden="true"></a>
                    <a href="#" class="fas fa-share-alt" aria-hidden="true"></a>
                </div>
            </div>
        </div>
    </section></div>

<div id="MuseumPage" class="page" style="display:none;">
    <!-- Museum 页面内容 -->
    <section class="category">

        <div class="box-container">
    
            <a href="#" class="box">
                <img src="//users.sussex.ac.uk/~yz644/3dapp/assignment/image/cat-1.png" alt="">
                <h3>Sprite</h3>
            </a>
    
            <a href="#" class="box">
                <img src="//users.sussex.ac.uk/~yz644/3dapp/assignment/image/cat-3.png" alt="">
                <h3>Coca Cola</h3>
            </a>
    
            <a href="#" class="box">
                <img src="//users.sussex.ac.uk/~yz644/3dapp/assignment/image/cat-4.png" alt="">
                <h3>Dr.Pepper</h3>
            </a>
    
        </div>
    
    </section>
    <div class="video-container">
        <video id="mainVideo" controls>
                <source src="//users.sussex.ac.uk/~yz644/3dapp/assignment/assets/videos/coke_animation.mp4" type="video/mp4">
    </video>
</div>
<div class="video-controls">
    <button onclick="changeVideo('https://users.sussex.ac.uk/~yz644/3dapp/assignment/assets/videos/coke_animation.mp4')">Coke Video</button>
    <button onclick="changeVideo('https://users.sussex.ac.uk/~yz644/3dapp/assignment/assets/videos/sprite_animation.mp4')">Sprite Video</button>
    <button onclick="changeVideo('https://users.sussex.ac.uk/~yz644/3dapp/assignment/assets/videos/pepper_animation.mp4')">Pepper Video</button>
</div>
<section class="products">
    
    <h1 class="title"> our <span>products</span>  </h1>

    <div class="box-container">

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart" aria-hidden="true"></a>
                <a href="#" class="fas fa-heart" aria-hidden="true"></a>
                <a href="#" class="fas fa-eye" aria-hidden="true"></a>
            </div>
            <div class="image">
                <img src="//users.sussex.ac.uk/~yz644/3dapp/assignment/image/coke_render1.png" alt="">
            </div>
            <div class="content">
                <h3>Coca Cola</h3>
                
                
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart" aria-hidden="true"></a>
                <a href="#" class="fas fa-heart" aria-hidden="true"></a>
                <a href="#" class="fas fa-eye" aria-hidden="true"></a>
            </div>
            <div class="image">
                <img src="//users.sussex.ac.uk/~yz644/3dapp/assignment/image/coke_render2.png" alt="">
            </div>
            <div class="content">
                <h3>CoCa Cola</h3>
                
                
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart" aria-hidden="true"></a>
                <a href="#" class="fas fa-heart" aria-hidden="true"></a>
                <a href="#" class="fas fa-eye" aria-hidden="true"></a>
            </div>
            <div class="image">
                <img src="//users.sussex.ac.uk/~yz644/3dapp/assignment/image/sprite_render1.png" alt="">
            </div>
            <div class="content">
                <h3>Sprite</h3>
                
                
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart" aria-hidden="true"></a>
                <a href="#" class="fas fa-heart" aria-hidden="true"></a>
                <a href="#" class="fas fa-eye" aria-hidden="true"></a>
            </div>
            <div class="image">
                <img src="//users.sussex.ac.uk/~yz644/3dapp/assignment/image/sprite_render2.png" alt="">
            </div>
            <div class="content">
                <h3>Sprite</h3>
                
                
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart" aria-hidden="true"></a>
                <a href="#" class="fas fa-heart" aria-hidden="true"></a>
                <a href="#" class="fas fa-eye" aria-hidden="true"></a>
            </div>
            <div class="image">
                <img src="//users.sussex.ac.uk/~yz644/3dapp/assignment/image/pepper_render1.png" alt="">
            </div>
            <div class="content">
                <h3>Dr.Pepper</h3>
                
                
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart" aria-hidden="true"></a>
                <a href="#" class="fas fa-heart" aria-hidden="true"></a>
                <a href="#" class="fas fa-eye" aria-hidden="true"></a>
            </div>
            <div class="image">
                <img src="//users.sussex.ac.uk/~yz644/3dapp/assignment/image/pepper_render2.png" alt="">
            </div>
            <div class="content">
                <h3>Dr.Pepper</h3>
                
                
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart" aria-hidden="true"></a>
                <a href="#" class="fas fa-heart" aria-hidden="true"></a>
                <a href="#" class="fas fa-eye" aria-hidden="true"></a>
            </div>
            <div class="image">
                <img src="//users.sussex.ac.uk/~yz644/3dapp/assignment/image/coke_top_tn.png" alt="">
            </div>
            <div class="content">
                <h3>Coke lid</h3>
                
                
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart" aria-hidden="true"></a>
                <a href="#" class="fas fa-heart" aria-hidden="true"></a>
                <a href="#" class="fas fa-eye" aria-hidden="true"></a>
            </div>
            <div class="image">
                <img src="//users.sussex.ac.uk/~yz644/3dapp/assignment/image/sprite_top_tn.png" alt="">
            </div>
            <div class="content">
                <h3>Sprite lid</h3>
                
                
            </div>
        </div>
    </div>
</section>
</div>

</div>





<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="home.html"> <i class="fas fa-arrow-right"></i> home</a>
            <a href="Museum.html"> <i class="fas fa-arrow-right"></i> Museum</a>
            <a href="coke.html"> <i class="fas fa-arrow-right"></i> Models</a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> my order </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> my favorite </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> my wishlist </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> my account </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> terms or use </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
        </div>

        <div class="box">
            <h3>newsletter</h3>
            <p>subscribe for latest updates</p>
            <form action="">
                <input type="email" placeholder="enter your email">
                <input type="submit" value="subscribe" class="btn">
            </form>
            <img src="//users.sussex.ac.uk/~yz644/3dapp/assignment/image/payment.png" class="payment" alt="">
        </div>

    </div>

</section>

<section class="credit"></section>

<!-- footer section ends -->


<script src="//users.sussex.ac.uk/~yz644/3dapp/assignment/js/all.js"></script>


</body>
</html>