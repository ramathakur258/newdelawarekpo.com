<!DOCTYPE html>
<html lang="en">
<head>
    <!----------------------------------------
    meta tags
    ---------------------------------------->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if(isset($desc)) {?>
        <meta name="<?php echo $desc->meta_title; ?>" content="Delaware KPO IT, LLC is a professional team of bookkeeping and accounting service provider in the USA, Canada, UK and Australia">
    <?php }else{ ?>  
        <meta name="description" content="Delaware KPO IT, LLC is a professional team of bookkeeping and accounting service provider in the USA, Canada, UK and Australia">
    <?php } ?>  
    <?php if(isset($desc)) {?>
        <meta name="<?php echo $desc->meta_keyword; ?>" content="Delaware KPO IT, LLC is a professional team of bookkeeping and accounting service provider in the USA, Canada, UK and Australia">
    <?php }else{ ?>  
        <meta name="keyword" content="Bookkeeping services, accounting services, payroll services, annual returns, outsourcing services, USA, Australia, Canada, UK">
    <?php } ?> 
    <?php if(isset($desc)) {?>
        <meta name="<?php echo $desc->meta_keyword; ?>" content="Delaware KPO IT, LLC is a professional team of bookkeeping and accounting service provider in the USA, Canada, UK and Australia">
    <?php }else{ ?>  
        <meta name="title" content="Bookkeeping and Accounting services | Delaware KPO IT, LLC">
    <?php } ?> 
    <!----------------------------------------
    title tag
    ---------------------------------------->
    <title>Bookkeeping and Accounting Services | Delaware KPO IT, LLC</title>

    <!----------------------------------------
    stylesheets
    ---------------------------------------->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;500;600;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/css1/bootstrap.min.css');?>  ">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css1/glightbox.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css1/overlay-scrollbars.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css1/swiper-bundle.min.css'); ?>">
    
    <link rel="stylesheet" href="<?php echo base_url('assets/css1/style.css'); ?>">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

</head>
<body>
<?php // echo print_r($service);die; ?>
    <div class="main-wrapper">

    <!----------------------------------------
    preloader - start
    ---------------------------------------->
    <div class="preloader">
        <div class='sk-folding-cube'>
            <div class='sk-cube sk-cube-1'></div>
            <div class='sk-cube sk-cube-2'></div>
            <div class='sk-cube sk-cube-4'></div>
            <div class='sk-cube sk-cube-3'></div>
          </div>
    </div>
    <!----------------------------------------
    preloader - end
    ---------------------------------------->

    <!----------------------------------------
    top menu - start
    ---------------------------------------->
    <div class="top-menu">
        <div class="top-menu-wrapper">
            <div class="tagline">
                <p>Delaware KPO IT, LLC </p>
            </div>
            <div class="menu">
                <ul>
                    <li>
                        <a href="#" class="link  link-sm link-grey link-ls">
                            <i class="fab fa-whatsapp c-primary f-13"></i>
							<span class="txt-upper f-w-500 lt-1"> WhatsApp</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="link  link-sm link-grey link-ls">
                            <i class="fas fa-envelope c-primary f-13"></i>
							<span class="txt-upper f-w-500 lt-1"> Email</span>
                        </a>
                    </li>
                    <li class="phone lt-1">
                        <a href="tel:123456789" class="link link-sm">
                            <i class="fas fa-phone-alt c-primary f-13"></i>
                            <span> 123 456 789</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!----------------------------------------
    top menu - end
    ---------------------------------------->

    <!----------------------------------------
    navigation - start
    ---------------------------------------->
    <div class="navigation">
        <div class="navigation-wrapper">
            <div class="navigation-inner">
                <div class="navigation-logo">
                    <a href="<?php echo base_url();?>">
                        <img src="<?php echo base_url('assets/images1/logo.png'); ?>" alt="Delaware KPO IT, LLC-logo">
                    </a>
                </div>
                <div class="navigation-menu">
                    <div class="mobile-header">
                        <div class="logo">
                            <a href="index.html">
                                <img src="<?php echo base_url('assets/images1/logo-white.png'); ?>" alt="image">
                            </a>
                        </div>
						<ul>
                            <li class="close-button">
                                <i class="fas fa-times"></i>
                            </li>
                        </ul>
                    </div>
                    <ul class="parent">
                        <li>
                            <a href="<?php echo base_url();?>">
                                <span>Home</span>
                            </a>
                        </li>
                        <li class="has-child">
                            <a href="#">
                                <span>Services</span>
                            </a>
                            <ul class="child">
                               <!-- <?php  foreach($service as $row ) {?> 
                                <li><a href="<?php echo base_url('services/bookkeeping');?>" class="link "><span><?php echo $row->services; ?></span></a></li>
                                <?php }?>  -->
                                <li><a href="<?php echo base_url('services/bookkeeping');?>" class="link "><span>Bookkeeping</span></a></li>
								<li><a href="<?php echo base_url('services/accounting');?>" class="link "><span>Accounting</span></a></li>
								<li><a href="<?php echo base_url('services/accountPayable');?>" class="link "><span>Accounts Payable </span></a></li>
								<li><a href="<?php echo base_url('services/accountReceivable');?>" class="link"><span>Accounts Receivable </span></a></li>
								<li><a href="<?php echo base_url('services/payroll');?>" class="link "><span>Payroll</span></a></li>
								<li><a href="<?php echo base_url('services/taxreturn');?>" class="link "><span>Tax Return Preparation </span></a></li>
								<li><a href="<?php echo base_url('services/vat');?>" class="link "><span>VAT Preparation </span></a></li>
								<li><a href="<?php echo base_url('services/salestax');?>" class="link "><span>Sales Tax Returns </span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo base_url('blog');?>"><span>Blog</span></a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('contact');?>"><span>Contact Us</span></a>
                        </li>
						<li>
                            <a href="<?php echo base_url('privacy');?>"><span>Privacy</span></a>
                        </li>
						<li>
                            <a href="<?php echo base_url('terms');?>"><span>Terms</span></a>
                        </li>
                        
                    </ul>
                    <p class="tagline">Delaware KPO IT, LLC </p>
                </div>
                <div class="navigation-bar">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
    </div>
    <!----------------------------------------
    navigation - end
    ---------------------------------------->

    <!----------------------------------------
    cta - end
    ---------------------------------------->
<?php $this->load->view($content); ?>
    <!----------------------------------------
    footer - start
    ---------------------------------------->
    <footer class="footer">
        <div class="footer-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="footer-content">
                            <h6 class="txt-sm c-primary f-w-500 txt-upper">contact</h6>
                            <ul class="txt-sm-1 c-grey number-list">
                                <!-- <li>P<a href="tel:123.456.7890">123.456.7890</a></li> -->
                                <li>
                                    P
                                    <a href="tel:123.456.7890" class="link  link-md link-grey">
                                        <span>123.456.7890</span>
                                        
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer-content">
                            <h6 class="txt-sm c-primary f-w-500 txt-upper">location</h6>
                            <p class="c-grey ln-ht-3">2055 Limestone Road STE 200-C <br>in Wilmington, DE 19808</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer-content">
                            <h6 class="txt-sm c-primary f-w-500 txt-upper">Services</h6>
                            <ul class="txt-sm-1 c-grey">
                                <li><a href="<?php echo base_url('services/bookkeeping');?>" class="link  link-md link-grey"><span>Bookkeeping</span></a></li>
								<li><a href="<?php echo base_url('services/accounting');?>" class="link  link-md link-grey"><span>Accounting</span></a></li>
								<li><a href="<?php echo base_url('services/accountPayable');?>" class="link  link-md link-grey"><span>Accounts Payable </span></a></li>
								<li><a href="<?php echo base_url('services/accountReceivable');?>" class="link  link-md link-grey"><span>Accounts Receivable </span></a></li>
								<li><a href="<?php echo base_url('services/payroll');?>" class="link  link-md link-grey"><span>Payroll</span></a></li>
								<li><a href="<?php echo base_url('services/taxreturn');?>" class="link  link-md link-grey"><span>Tax Return Preparation </span></a></li>
								<li><a href="<?php echo base_url('services/vat');?>" class="link  link-md link-grey"><span>VAT Preparation </span></a></li>
								<li><a href="<?php echo base_url('services/salestax');?>" class="link  link-md link-grey"><span>Sales Tax Returns </span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer-content">
                            <h6 class="txt-sm c-primary f-w-500 txt-upper">social</h6>
                            <ul class="txt-sm-1 c-grey social-list">
                                <li><a href="#" class="link  link-md link-grey">
                                    <i class="fab fa-twitter-square c-light"></i>
                                    <span>
                                        <span>Twitter</span>
                                    </span>
                                    
                                </a></li>
                                <li><a href="#" class="link  link-md link-grey">
                                    <i class="fab fa-facebook-square c-light"></i>
                                    <span>
                                        <span>Facebook</span>
                                    </span>
                                    
                                </a></li>
                                <li><a href="#" class="link  link-md link-grey">
                                    <i class="fab fa-youtube c-light"></i>
                                    <span>
                                        <span>Youtube</span>
                                    </span>
                                    
                                </a></li>
                                <li><a href="#" class="link  link-md link-grey">
                                    <i class="fab fa-linkedin c-light"></i>
                                    <span>
                                        <span>Linkedin</span>
                                    </span>
                                    
                                </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <h6 class="copyright txt-sm c-grey">&copy; 2021 Delaware KPO IT, LLC</h6>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!----------------------------------------
    footer - end
    ---------------------------------------->


    </div>

    <!----------------------------------------
    scripts
    ---------------------------------------->

    <script src="<?php echo base_url('assets/js1/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js1/swiper-bundle.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js1/glightbox.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js1/overlay-scrollbars.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js1/main.js'); ?>"></script>
	
	<!--Start of Tawk.to Script-->
        <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/61671212f7c0440a591e0afa/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
        </script>
<!--End of Tawk.to Script-->
	
</body>
</html>