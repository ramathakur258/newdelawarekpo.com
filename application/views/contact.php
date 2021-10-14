<div class="page-header">
        <div class="page-header-wrapper" style="background-image: url('<?php echo base_url('assets/images1/intro-bg.jpg');?>');">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="page-header-content">
                            <h1 class="c-dark">Get in Touch</h1>
                            <p class="small ln-ht-auto c-dark">Got questions? <a href="<?php echo base_url('contact');?>" class="link link-inherit"><span>Talk to an Expert</span></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="contact">
        <div class="contact-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="contact-header">
                            <h2 class="ln-ht-44">Contact Us</h2>
                        </div>
                    </div>
                </div>
                <div class="row contact-detail-row d-flex justify-content-center">
                    <div class="col-lg-4 col-sm-6 col-7">
                        <div class="contact-detail-single">
                            <div class="icon-circle icon-circle-sm">
                                <img src="<?php echo base_url('assets/images1/icon-16.png');?>" alt="icon">
                            </div>
                            <div>
                                <h6 class="txt-upper c-primary">support</h6>
                                <a href="mailto:#" class="link  link-grey link-lg"><span>support@delaware.com</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-7">
                        <div class="contact-detail-single">
                            <div class="icon-circle icon-circle-sm">
                                <img src="<?php echo base_url('assets/images1/icon-17.png'); ?>" alt="icon">
                            </div>
                            <div>
                                <h6 class="txt-upper c-primary">phone</h6>
                                <a href="tel:+123 456 789" class="link  link-grey link-lg"><span>+123 456 789</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-7">
                        <div class="contact-detail-single">
                            <div class="icon-circle icon-circle-sm">
                                <img src="<?php echo base_url('assets/images1/icon-18.png');?>" alt="icon">
                            </div>
                            <div>
                                <h6 class="txt-upper c-primary">social</h6>
                                <ul class="social">
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-twitter-square"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-facebook-square"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
               
			   
            </div>
        </div>
    </div>
    <!----------------------------------------
    contact - end
    ---------------------------------------->

    <!----------------------------------------
    contact form - start
    ---------------------------------------->
    <div class="contact-form pattern-bg">
        <div class="contact-form-wrapper">
            <div class="container pattern-bg-content">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="contact-form-header">
                            <h2 class="ln-ht-44">Write Us A Message</h2>
                            <p class="large c-grey">Please contact us for any queries you may have. We are happy to help. </p>
                        </div>
                    </div>
                </div>

                <?php echo validation_errors(); 
                if(isset($msg)) echo $msg;
                
                ?>
                <div class="row">
                    <div class="col">
                        <form action="<?php echo base_url('contact'); ?>" method="post" >
                        <?php // echo $this->session->flashdata('email_sent'); ?> 
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" name="name" placeholder="First name">
                                  
                                    
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="last_name" placeholder="Last name">
                            
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="email" name="email" placeholder="Email address">
                                   
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="mobile"  placeholder="mobile">
                                   
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <textarea type="text" name="message" placeholder="Comments"></textarea>
                                   
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <button class="button button-3 txt-upper" type="submit">
                                        <div>
                                            <i class="far fa-comment"></i>
                                            <span>send message</span>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <!-- <?php 
        // echo form_close(); 
      ?> -->
                    </div> 
                </div>
            </div>
        </div>
    </div>
    <!----------------------------------------
    contact form - end
    ---------------------------------------->

    <!----------------------------------------
    cta - start
    ---------------------------------------->
    <div class="cta-section b-primary">
        <div class="cta-section-wrapper section-wrapper" style="background-image: url('<?php echo base_url('assets/images1/pattern.png');?>');">
            <div class="container">
                <div class="row">
                    <div class="cta-section-content txt-center">
                        <h2 class="c-white f-w-400 heading-40 mg-center">Frequently Asked Questions (FAQs)</h2>
                        
						
						
						<div class="accordion accordion-flush" id="faqlist">
                        <?php foreach($faq as $row){ ?>

													
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-<?php echo $row->id; ?>">
                                <?php echo $row->question; ?>
                                </button>
                            </h2>
                            <div id="faq-content-<?php echo $row->id; ?>" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                <?php echo $row->description; ?>
                                    
                                </div>
                            </div>
                        </div>


                        <?php }?>
							
							
						</div>
						
						
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----------------------------------------
    cta - end
    ---------------------------------------->


    </div>
