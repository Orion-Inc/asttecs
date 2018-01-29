<!--begin header_wrapper -->
<header id="header_wrapper" <?php echo $retVal = (explode('/', $_GET['url'])[0] != "home") ? 'style="position: fixed; top: 0px;"' : '' ;?>>
    
    <!--begin header -->    
    <div id="header" class="clearfix">
    
        <!--begin logo -->            
        <a href="home" id="logo"><img src="assets/images/logo-eis.png" alt="logo"></a>
        <!--end logo -->
            
        <!--begin nav -->
        <nav id="navigation" role="navigation">
            <ul id="nav">
                <li>
                    <a href="home" <?php echo $retVal = (explode('/', $_GET['url'])[0] == "home") ? 'style="color:#32dd88;"' : '' ;?>>
                        Home
                    </a>
                </li>
                <li>
                    <a href="about-us" <?php echo $retVal = (explode('/', $_GET['url'])[0] == "about-us") ? 'style="color:#32dd88;"' : '' ;?>>
                        About Us
                    </a>
                </li>
                <li>
                    <a href="products" <?php echo $retVal = (explode('/', $_GET['url'])[0] == "products") ? 'style="color:#32dd88;"' : '' ;?>>
                        Products
                    </a>
                </li>
                <li class="last">
                    <a href="contact-us" <?php echo $retVal = (explode('/', $_GET['url'])[0] == "contact-us") ? 'style="color:#32dd88;"' : '' ;?>>
                        Contact Us
                    </a>
                </li>
            </ul>
        </nav>
        <!--end nav -->
        
    </div>
    <!--end header -->
    
</header>
<!--end header_wrapper -->