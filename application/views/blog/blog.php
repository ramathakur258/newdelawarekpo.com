
    <div class="main-wrapper">

    <!----------------------------------------
    page header - start
    ---------------------------------------->
    <div class="page-header">
        <div class="page-header-wrapper" style="background-image: url('<?php echo base_url('assets/images1/intro-bg.jpg');?>');background-position: top;">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="page-header-content">
                            <h1 class="c-dark">Blog</h1>
                            <p class="small ln-ht-auto c-dark">Got questions? <a href="<?php echo base_url('contact');?>" class="link link-inherit"><span>Talk to an Expert</span></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----------------------------------------
    page header - end
    ---------------------------------------->

    <!----------------------------------------
    sidebar page section - start
    ---------------------------------------->
    <div class="sidebar-page page-bg">
        <div class="sidebar-page-wrapper page-bg-wrapper">
            <div class="container page-bg-content">
                <div class="row gx-5">
                    <div class="col-lg-8">
                        <!----------------------------------------
                        blog list section - start
                        ---------------------------------------->
                        <div class="blog-list">
                            <div class="blog-list-wrapper">
							<?php foreach( $blog as $row ) {?>
                                <div class="blog-single">
                                    <div class="post">
                                        <a href="<?php echo base_url('blog/blogDetail');?>">
                                            <figure>
                                                <img src="<?php echo base_url('assets/images1/b-1.jpg');?>?>" alt="blog-thumbnail"> 
                                            </figure>
                                        </a>
										<div class="entry-meta regular greylinks">
											<span class="entry-date">
												<time class="entry-date" datetime="2017-03-13T08:50:40+00:00">
													<?php echo date("d M, Y", strtotime($row->created_at)) ?>
												</time>
											</span>
											<span>
												<i class="fa fa-pencil highlight" aria-hidden="true"></i>
												by
												<a href="#">Admin</a>
											</span>
											<span>
												<i class="fa fa-paperclip highlight" aria-hidden="true"></i>
												in
												<a href="#">News</a>
											</span>
										</div>
                                        <a class="title" href="<?php echo base_url('blog/blogDetail');?>"><?php echo $row->blog_title;  ?></a>
										<?php  if (strlen($row->description) > 600) {  $resulting = substr(htmlentities($row->description), 282, 600); }else{ $resulting  = $row->description;    } ?>
											<p class="excerpt"><?php echo $resulting;  ?></p>
                                        <a class="read-more link" href="<?php echo base_url('blog/blogDetail/'.$row->id);?>">
                                            <span>READ MORE</span>
                                        </a>
                                    </div>
                                </div>
								<?php }  ?>

                               
                            </div>
                        </div>
                             <?php echo $pagination ?>
                        <!----------------------------------------
                        blog list section - end
                        ---------------------------------------->
                    </div>
                    <div class="col-xxl-3 offset-xxl-1 col-lg-4">
                        <!----------------------------------------
                        sidebar section - start
                        ---------------------------------------->
                        <div class="sidebar">
                            <div class="search">
                                <form>
                                    <input type="text" placeholder="Search">
                                    <button type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </form>
                            </div>
                            <div class="category">
                                <div class="category-wrapper">
                                    <h4>categories</h4>
                                    <ul>
                                        <li><a href="<?php echo base_url('blog');?>">Business</a></li>
                                        <li><a href="<?php echo base_url('blog');?>">Company</a></li>
                                        <li><a href="<?php echo base_url('blog');?>">Consulting</a></li>
                                        <li><a href="<?php echo base_url('blog');?>">Giving</a></li>
                                        <li><a href="<?php echo base_url('blog');?>">Management</a></li>
                                        <li><a href="<?php echo base_url('blog');?>">Tax</a></li>
                                        <li><a href="<?php echo base_url('blog');?>">Technology</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!----------------------------------------
                        sidebar section - end
                        ---------------------------------------->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----------------------------------------
    sidebar page section - end
    ---------------------------------------->
    <!----------------------------------------
    cta - start
    ---------------------------------------->
    <div class="cta-section b-primary">
        <div class="cta-section-wrapper section-wrapper" style="background-image: url('<?php echo base_url('assets/images1/pattern.png'); ?>');">
            <div class="container">
                <div class="row">
                    <div class="cta-section-content txt-center">
                        <h2 class="c-white f-w-400 heading-40 mg-center">Frequently Asked Questions (FAQs)</h2>						
						<div class="accordion accordion-flush" id="faqlist">
							<div class="accordion-item">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
									What is Delaware KPO IT, LLC ?
									</button>
								</h2>
								<div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
									<div class="accordion-body">
										Delaware KPO IT, LLC is a registered firm in the state of Delaware, USA. We are a small team offering bookkeeping and accounting services to independent CPAs and CPA firms. For more information you can write us to our address mentioned below: 
										
										<h4>Delaware KPO IT, LLC</h4>
										<p>2055 Limestone Road STE 200-C in Wilmington, DE 19808</p>
										
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
									What services do you offer?
									</button>
								</h2>
								<div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
									<div class="accordion-body">
										We offer bookkeeping, accounting, accounts payable, accounts receivable, payroll, sales tax, VAT preparation and income tax returns preparation services to CPAs. We work just as if you have your own in house team working for you. You will receive detailed reporting on all finished task on daily basis. You can start sending us bookkeeping tasks initially or we can also take over all your bookkeeping, accounting, taxes, payroll and even tax preparation. You simply focus on more client acquisition. As soon as you send us the tasks, we shall start on them and finish all the assignments by the time you reach your office.
									</div>
								</div>
							</div>

							<div class="accordion-item">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
									How can Delaware KPO IT, LLC help CPA firm or accountant? 
									</button>
								</h2>
								<div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
									<div class="accordion-body">
										If you are a CPA firm, or a tax practitioner, we can handle bookkeeping, AR, AP, Payroll and accounting services staying under your hood. Our dedicated and experienced accounts manager will work under your instructions. He/she will report directly to you or your manager. Just like you have your own team member, our accounts manager will work directly under your instructions and work report shall be sent to you via email at the end of the day. We sign a non-disclosure agreement with all our partners so that mutual interest is well protected.
									</div>
								</div>
							</div>

							<div class="accordion-item">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
									I run my business & I am not a CPA, but I need help with bookkeeping and accounting services, Can you help?
									</button>
								</h2>
								<div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
									<div class="accordion-body">
										Sorry, we only offer bookkeeping and accounting services to Accountants, Tax Consultants and CPA firms only.
									</div>
								</div>
							</div>

							<div class="accordion-item">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
									Do you serve only to US based CPAs?
									</button>
								</h2>
								<div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
									<div class="accordion-body">
										We offer our services to CPA firms that are from US, UK, Canada and Australia currently. If you are a CPA firm, accountant or tax practitioner, we want to be associated on long term basis with you. Hence, if needed we do sign up a non-disclosure agreement to protect your clients data. This will protect our mutual interest and association for a long term.
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-6">
									Can I talk to my allocated executive directly?
									</button>
								</h2>
								<div id="faq-content-6" class="accordion-collapse collapse" data-bs-parent="#faqlist">
									<div class="accordion-body">
										Yes, very much you can. You can do video call, chat on Skype, WhatsApp or even a phone call would be ideal to discuss any urgent matter you may have to be discussed. We shall provide you our US phone line number for you.
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-7">
									How do I start and how much do I pay you?
									</button>
								</h2>
								<div id="faq-content-7" class="accordion-collapse collapse" data-bs-parent="#faqlist">
									<div class="accordion-body">
										You can hire dedicated individual or a team. You can also hire us for task to task / project to project basis. <br><br>
										Hiring basis – You can hire an individual for minimum 10 hours a week, 20 hours a week and even full time 40 hours a week. Our rate is $18/hour (USD).<br><br>
										Project basis – You give us the task. We review the project and give you the hours required. You agree and pay for the agreed hours / rate.  <br><br>
										Payment shall be made to our USA bank account on weekly basis or as per agreed terms. We can even stretch on weekends if needed to handle workloads during tax season. 

									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-8">
									What sort of finance and accounting software are you comfortable to work with?
									</button>
								</h2>
								<div id="faq-content-8" class="accordion-collapse collapse" data-bs-parent="#faqlist">
									<div class="accordion-body">
										We have been using various accounting software depending on the purpose, like:<Br><br>
										
										<ul class="ullist">
											 <li>Payroll Processing Software: QuickBooks (Intuit) Payroll, PayCycle, Paychex, ADP, and Accountix </li>
											 <li>Tax Return Processing: Intuit ProSeries, Intuit Lacerte, ATX, Drake</li>
											 <li>Accounts Receivable Software: QuickBooks, CheckMark, MYOB</li>
											 <li>Bookkeeping Services Software: QuickBooks (All versions), SAGE, MYOB, Quicken, Peachtree, Master Builder, Business Works</li>
										</ul>
										Just in case your organization uses any other software, we have the skills and expertise to work on the software of your preference.

									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-9">
									How would this entire process be handled at your end?
									</button>
								</h2>
								<div id="faq-content-9" class="accordion-collapse collapse" data-bs-parent="#faqlist">
									<div class="accordion-body">
										In order to outsource bookkeeping and accounting services, you will be requested to send your files to your dedicated account manager in any of the following ways:<Br><br>
										
										<b>Source documents using online accounting software</b> - You scan and upload your documents to the accounting software. We will log-in using the access details / credentials provided by you, and update your books. You then log-in and view the updated books from your end. <Br>
										
										<b>Source documents locally On your Computer / Laptop</b> - You place source documents in your own computer or laptop. We log in to your system using a secured VPN, and update your books. You can then access the updated books from your own computer. 
										<Br><br>

										Just in case your organization uses any other software, we have the skills and expertise to work on the software of your preference.

									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-10">
									Why should I choose Delaware KPO IT, LLC?
									</button>
								</h2>
								<div id="faq-content-10" class="accordion-collapse collapse" data-bs-parent="#faqlist">
									<div class="accordion-body">
										Outsourcing bookkeeping and accounting services to Delaware KPO IT, LLC offers you multiple advantages, key among those are:<Br><br>
										
										<ul class="ullist">
											 <li>Huge cost savings</li>
											 <li>You are dealing with USA registered company and paying locally to our US business bank account. </li>
											 <li>No Infrastructural or administrative hassles and noticeable increase productivity and efficiency</li>
											 <li>Less turnaround time due to time-zone advantage</li>
											 <li>Less dependency on internal resources</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-11">
									How do you accept payment?
									</button>
								</h2>
								<div id="faq-content-11" class="accordion-collapse collapse" data-bs-parent="#faqlist">
									<div class="accordion-body">
										We have our US business bank account. We accept payments through bank wire transfer within the USA. If you are a CPA firm from UK or Australia, we do accept payments through PayPal, or Credit Card.
									</div>
								</div>
							</div>
							
							
						</div>
						
						
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----------------------------------------
    cta - end
    ---------------------------------------->

    <!----------------------------------------
    footer - start
    ---------------------------------------->
    
    <!----------------------------------------
    footer - end
    ---------------------------------------->


    </div>

   