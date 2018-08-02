<!DOCTYPE html>
<html lang="en">
	<!-- Header content-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CIMA @ Achievers</title>
 <?php include_once("head.php")?>
   
  </head>
  <body>
    <?php include_once("navbar.php") ?>
<!--Navbar finishes -->
	  <div id="main-head" class="container">
<div id="change-sidebar" class="row">
		  
	<div class="col-md-9 push"><br>
		<p class="text-justify">
CIMA is the world's largest professional body of management accountants offering the most relevant finance qualification for business.
		</p>
		
<div  class="textColourBlock theme_white">
		
 <link rel="stylesheet" type="text/css" href="css/cima.css" />
<script type="text/javascript">// <![CDATA[
        var tool = {
            init: function () {


                $(".syllabus-pillar-holder").click(function (e) {

					var parentRow = $(this).parent(".syllabus-pillar-holder-row");
					
					parentRow.find(".syllabus-pillar-expander-holder:visible").insertAfter(parentRow);
					
                    var open = $(this).find(".syllabus-icon-open").hasClass("open");
                    var pillar = $(this);
                    var index = pillar.index();

                    pillar.parents(".syllabus-pillar-holder-row").find(".syllabus-pillar").removeClass("open").find(".syllabus-icon-open").removeClass("open");
                    pillar.parent(".syllabus-pillar-holder-row").next(".syllabus-pillar-expander-holder").find(".syllabus-pillar-expander").hide();
                    pillar.parents(".syllabus-pillar-holder-row").find(".syllabus-pillar-expander-holder").find(".syllabus-pillar-expander").hide();
                    pillar.parents(".syllabus-tool-col-row").removeClass("open");

                    if (!open) {
                        $(this).find(".syllabus-icon-open").addClass("open");
						$(document).find(".syllabus-icon-open").html("<i class='fa fa-plus' aria-hidden='true'></i>");
						$(this).find(".syllabus-icon-open").html("<i class='fa fa-minus' aria-hidden='true'></i>");
						
                        pillar.find(".syllabus-pillar").addClass("open");
                        pillar.parent(".syllabus-pillar-holder-row").next(".syllabus-pillar-expander-holder").find(".syllabus-pillar-expander").eq(index).show().siblings().hide();

                        if (pillar.parent(".syllabus-pillar-holder-row").hasClass("nib-bottom")) {
                            pillar.parents(".syllabus-tool-col-row:first").addClass("open");
                        }
						
						var openPopup = pillar.parent(".syllabus-pillar-holder-row").next(".syllabus-pillar-expander-holder");
						
						//see if we need to move the popup box to below the title bar (mobile) or back to its default spot (desktop)
						var mobileView = ($(window).width() <= 640);

						if(mobileView) 
						{
							openPopup.insertAfter(pillar);
						} 
						
                    } else {
						$(document).find(".syllabus-icon-open").html("<i class='fa fa-plus' aria-hidden='true'></i>");
					}
					
					
					
					
					

                    $(".syllabus-tool-col-row").resize();

                    e.preventDefault();
                });

                $(".syllabus-expander-close").click(function (e) {

                    $(this).parents(".syllabus-pillar-expander-holder").prev(".syllabus-pillar-holder-row").find(".syllabus-icon-open.open").click();
                    e.preventDefault();
                });
				
				$(".syllabus-tool-title-bar").click(function(e){
					
					var t = $(this);
					
					if(t.hasClass("active")){
						//Close all Open Syllabus Title Bar's.
						t.children("span").removeClass("active").text('+');
						t.next(".syllabus-tool-title-bar-content").hide();
						t.removeClass("active");
					}
					else {
						//Show the Content for the Syllabus Title Bar clicked.
						t.children("span").addClass("active");
						t.next(".syllabus-tool-title-bar-content").show();
						t.addClass("active").children("span").text('-')
					}
					
					e.preventDefault();
					
				});
				
				$(".syllabus-tool-title-bar-content").children(".syllabus-expander-close").click(function(e){
					//Close the Syllabus Title Bar

					var t = $(this);
					t.parent(".syllabus-tool-title-bar-content").hide().removeClass("active");
					t.parent(".syllabus-tool-title-bar-content").prev(".syllabus-tool-title-bar").removeClass("active").children("span").text("+");
					e.preventDefault();
					
				});
				
                
            }
        };

        $(document).ready(function () {
            tool.init();
        });
// ]]></script>
<div class="syllabus-tool-holder">
<div class="syllabus-tool">
<div class="syllabus-tool-col-row" data-matchheight=".syllabus-tool-col">
<div class="syllabus-tool-inner syllabus-tool-col">
<div class="syllabus-assessment-experience-holder">

<div class="syllabus-cgma-intro-text">
<p>AWARD / Membership of the Chartered Insitute of Management Accountants and the CGMA designation</p>
</div>
<div style="clear: both;">&nbsp;</div>
<a href="#" class="syllabus-tool-title-bar brown">Assessment of practical experience <span>+</span></a>
<div class="syllabus-tool-title-bar-content brown">
<div class="syllabus-expander-close">&nbsp;</div>
<p>In order to become a Chartered Global Management Accountant (CGMA), you need a minimum of three years' verified relevant work-based practical experience.</p>
<a href="https://www.cimaglobal.com/Studying/Becoming-a-cgma/Practical-experience-requirements/" class="btn btn-white btn-brown">Find out more</a></div>
</div>
<!-- STRATEGIC LEVEL -->
<div class="syllabus-indenter">
<div class="syllabus-tool-label-holder">
<div class="syllabus-table">
<div class="syllabus-table-cell"><span class="syllabus-tool-label">Strategic level</span></div>
<div class="syllabus-table-cell syllabus-award-cell">
<p>&nbsp;</p>
</div>
</div>
</div>
<a href="#" class="syllabus-tool-title-bar">Strategic case study exam <span>+</span></a>
<div class="syllabus-tool-title-bar-content">
<div class="syllabus-expander-close">&nbsp;</div>
<p>The focus of Strategic level is on the long term and setting the strategy for the business. In the Strategic Case Study exam, your role will be that of a Senior Finance Manager.</p>
</div>
</div>
<div class="syllabus-tool-col-row">
<div class="syllabus-pillar-holder-row" data-matchheight=".syllabus-pillar">
<div class="syllabus-pillar-holder">
<div class="syllabus-pillar plum nib">
<div class="syllabus-pillar-title"><a href="#" class="syllabus-icon-open"><i class='fa fa-plus' aria-hidden='true'></i></a>
<p><strong>E3 </strong><br />Strategic Management</p>
</div>
</div>
</div>
<div class="syllabus-pillar-holder">
<div class="syllabus-pillar pink nib ">
<div class="syllabus-pillar-title"><a href="#" class="syllabus-icon-open"><i class='fa fa-plus' aria-hidden='true'></i></a>
<p><strong>P3 </strong><br />Risk Management
</div>
</div>
</div>
<div class="syllabus-pillar-holder">
<div class="syllabus-pillar green nib">
<div class="syllabus-pillar-title"><a href="#" class="syllabus-icon-open"><i class='fa fa-plus' aria-hidden='true'></i></a>
<p><strong>F3 </strong><br />Financial Strategy</p>
</div>
</div>
</div>
</div>
<div class="syllabus-pillar-expander-holder syllabus-indenter">
<div class="syllabus-pillar-expander plum">
<div class="syllabus-expander-close">&nbsp;</div>
<h3>Covers:</h3>
<ul class="alpha">
<li><span>Interacting with the organisation's environment</span><span class="percentage">20%</span></li>
<li><span>Evaluating strategic position and strategic options</span><span class="percentage">30%</span></li>
<li><span>Leading change</span><span class="percentage">20%</span></li>
<li><span>Implementing strategy</span><span class="percentage">15%</span></li>
<li><span>The role of information systems in organisational strategy</span><span class="percentage">15%</span></li>
</ul>
</div>
<div class="syllabus-pillar-expander pink">
<div class="syllabus-expander-close">&nbsp;</div>
<h3>Covers:</h3>
<ul class="alpha">
<li><span>Identification, classification and evaluation of risk</span><span class="percentage">20%</span></li>
<li><span>Responses to strategic risk</span><span class="percentage">20%</span></li>
<li><span>Internal controls to manage risk</span><span class="percentage">20%</span></li>
<li><span>Managing risks associated with cash flows</span><span class="percentage">20%</span></li>
<li><span>Managing risks associated with capital investment decisions</span><span class="percentage">20%</span></li>
</ul>
</div>
<div class="syllabus-pillar-expander green">
<div class="syllabus-expander-close">&nbsp;</div>
<h3>Covers:</h3>
<ul class="alpha">
<li><span>Formulation of financial strategy</span><span class="percentage">25%</span></li>
<li><span>Financing and dividend decisions</span><span class="percentage">35%</span></li>
<li><span>Corporate finance</span><span class="percentage">40%</span></li>
</ul>
</div>
</div>
</div>
<div class="syllabus-section-padder">&nbsp;</div>
<!-- MANAGEMENT LEVEL -->
<div class="syllabus-indenter">
<div class="syllabus-tool-label-holder">
<div class="syllabus-table">
<div class="syllabus-table-cell"><span class="syllabus-tool-label">Management level</span></div>
<div class="syllabus-table-cell syllabus-award-cell">
<p>AWARD<br /><span class="syllabus-highlight">CIMA Advanced Diploma In Management Accounting (CIMA&nbsp;ADV&nbsp;DIP&nbsp;MA)</span></p>
</div>
</div>
</div>
<a href="#" class="syllabus-tool-title-bar">Management case study exam <span>+</span></a>
<div class="syllabus-tool-title-bar-content">
<div class="syllabus-expander-close">&nbsp;</div>
<p>The focus of Management level is on the medium term and monitoring and implementation of strategy. In the Management/Gateway Case Study exam, your role will be that of a Finance Manager.</p>
<a href="https://www.cimaglobal.com/Qualifications/Professional-Qualification/Management-level/Management-Case-Study/" class="btn btn-white">Find out more</a></div>
</div>
<div class="syllabus-tool-col-row">
<div class="syllabus-pillar-holder-row" data-matchheight=".syllabus-pillar">
<div class="syllabus-pillar-holder">
<div class="syllabus-pillar plum ">
<div class="syllabus-pillar-title"><a href="#" class="syllabus-icon-open"><i class='fa fa-plus' aria-hidden='true'></i></a>
<p><strong>E2 </strong><br />Project and Relationship Management</p>
</div>
</div>
</div>
<div class="syllabus-pillar-holder">
<div class="syllabus-pillar pink">
<div class="syllabus-pillar-title"><a href="#" class="syllabus-icon-open"><i class='fa fa-plus' aria-hidden='true'></i></a>
<p><strong>P2 </strong><br />Advanced Management Accounting</p>
</div>
</div>
</div>
<div class="syllabus-pillar-holder">
<div class="syllabus-pillar green">
<div class="syllabus-pillar-title"><a href="#" class="syllabus-icon-open"><i class='fa fa-plus' aria-hidden='true'></i></a>
<p><strong>F2 </strong><br />Advanced Financial Reporting</p>
</div>
</div>
</div>
</div>
<div class="syllabus-pillar-expander-holder syllabus-indenter">
<div class="syllabus-pillar-expander plum">
<div class="syllabus-expander-close">&nbsp;</div>
<h3>Covers:</h3>
<ul class="alpha">
<li><span>Introduction to strategic management and assessing the global environment</span><span class="percentage">30%</span></li>
<li><span>The human aspects of the organisation</span><span class="percentage">20%</span></li>
<li><span>Managing relationships</span><span class="percentage">20%</span></li>
<li><span>Managing change through projects</span><span class="percentage">30%</span></li>
</ul>
</div>
<div class="syllabus-pillar-expander pink">
<div class="syllabus-expander-close">&nbsp;</div>
<h3>Covers:</h3>
<ul class="alpha">
<li><span>Cost planning and analysis for competitive advantage</span><span class="percentage">25%</span></li>
<li><span>Control and performance management of responsibility centres</span><span class="percentage">30%</span></li>
<li><span>Long-term decision making</span><span class="percentage">30%</span></li>
<li><span>Management control and risk</span><span class="percentage">15%</span></li>
</ul>
</div>
<div class="syllabus-pillar-expander green">
<div class="syllabus-expander-close">&nbsp;</div>
<h3>Covers:</h3>
<ul class="alpha">
<li><span>Sources of long-term finance</span><span class="percentage">15%</span></li>
<li><span>Financial reporting</span><span class="percentage">60%</span></li>
<li><span>Analysis of financial performance and position</span><span class="percentage">25%</span></li>
</ul>
</div>
</div>
</div>
<div class="syllabus-section-padder">&nbsp;</div>
<!-- OPERATIONAL LEVEL -->
<div class="syllabus-indenter">
<div class="syllabus-tool-label-holder">
<div class="syllabus-table">
<div class="syllabus-table-cell"><span class="syllabus-tool-label">Operational level</span></div>
<div class="syllabus-table-cell syllabus-award-cell">
<p>AWARD<br /><span class="syllabus-highlight">CIMA Diploma In Management Accounting (CIMA&nbsp;DIP&nbsp;MA)</span></p>
</div>
</div>
</div>
<a href="#" class="syllabus-tool-title-bar">Operational case study exam <span>+</span></a>
<div class="syllabus-tool-title-bar-content">
<div class="syllabus-expander-close">&nbsp;</div>
<p>The focus of Operational level is on the short term. In the Operational Case Study exam, your role will be that of a Finance Officer.</p>
<a href="https://www.cimaglobal.com/Qualifications/Professional-Qualification/Operational-level/Operational-Case-Study/" class="btn btn-white">Find out more</a></div>
</div>
<div class="syllabus-tool-col-row">
<div class="syllabus-pillar-holder-row" data-matchheight=".syllabus-pillar">
<div class="syllabus-pillar-holder">
<div class="syllabus-pillar plum ">
<div class="syllabus-pillar-title"><a href="#" class="syllabus-icon-open"><i class='fa fa-plus' aria-hidden='true'></i></a>
<p><strong>E1 </strong><br />Organisational Management</p>
</div>
</div>
</div>
<div class="syllabus-pillar-holder">
<div class="syllabus-pillar pink ">
<div class="syllabus-pillar-title"><a href="#" class="syllabus-icon-open"><i class='fa fa-plus' aria-hidden='true'></i></a>
<p><strong>P1 </strong><br />Management Accounting</p>
</div>
</div>
</div>
<div class="syllabus-pillar-holder">
<div class="syllabus-pillar green ">
<div class="syllabus-pillar-title"><a href="#" class="syllabus-icon-open"><i class='fa fa-plus' aria-hidden='true'></i></a>
<p><strong>F1 </strong><br />Financial Reporting and Taxation</p>
</div>
</div>
</div>
</div>
<div class="syllabus-pillar-expander-holder syllabus-indenter">
<div class="syllabus-pillar-expander plum">
<div class="syllabus-expander-close">&nbsp;</div>
<h3>Covers:</h3>
<ul class="alpha">
<li><span>Introduction to organisations</span><span class="percentage">25%</span></li>
<li><span>Managing the finance function</span><span class="percentage">15%</span></li>
<li><span>Managing technology and information</span><span class="percentage">15%</span></li>
<li><span>Operations management</span><span class="percentage">15%</span></li>
<li><span>Marketing</span><span class="percentage">15%</span></li>
<li><span>Managing human resources</span><span class="percentage">15%</span></li>
</ul>
</div>
<div class="syllabus-pillar-expander pink">
<div class="syllabus-expander-close">&nbsp;</div>
<h3>Covers:</h3>
<ul class="alpha">
<li><span>Cost accounting systems</span><span class="percentage">30%</span></li>
<li><span>Budgeting</span><span class="percentage">25%</span></li>
<li><span>Short-term decision making</span><span class="percentage">30%</span></li>
<li><span>Dealing with risk and uncertainty</span><span class="percentage">15%</span></li>
</ul>
</div>
<div class="syllabus-pillar-expander green">
<div class="syllabus-expander-close">&nbsp;</div>
<h3>Covers:</h3>
<ul class="alpha">
<li><span>Regulatory environment for financial reporting and corporate governance</span><span class="percentage">10%</span></li>
<li><span>Financial accounting and reporting</span><span class="percentage">45%</span></li>
<li><span>Management of working capital, cash and sources of short-term finance</span><span class="percentage">20%</span></li>
<li><span>Fundamentals of business taxation</span><span class="percentage">25%</span></li>
</ul>
</div>
</div>
<div class="syllabus-pillar-holder">
<p class="syllabus-pillar-label plum">Enterprise <br />pillar</p>
</div>
<div class="syllabus-pillar-holder">
<p class="syllabus-pillar-label pink">Performance <br />pillar</p>
</div>
<div class="syllabus-pillar-holder">
<p class="syllabus-pillar-label green">Financial <br />pillar</p>
</div>
</div>
<div class="syllabus-section-padder">&nbsp;</div>
<!-- CERTIFICATE LEVEL -->
<div class="syllabus-indenter">
<div class="syllabus-tool-label-holder">
<div class="syllabus-table">
<div class="syllabus-table-cell"><span class="syllabus-tool-label">Certificate level</span></div>
<div class="syllabus-table-cell syllabus-award-cell">
<p>AWARD<br /><span class="syllabus-highlight">CIMA Certificate in Business Accounting (CIMA&nbsp;CERT&nbsp;BA)</span></p>
</div>
</div>
</div>
</div>
<div class="syllabus-tool-col-row syllabus-pillar-holder-row">
<div class="syllabus-pillar-holder-row nib-bottom" data-matchheight=".syllabus-pillar">
<div class="syllabus-pillar-holder">
<div class="syllabus-pillar-mask">
<div class="syllabus-pillar-nib-arrow plum">&nbsp;</div>
<div class="syllabus-pillar plum nib with-top padded-bottom">
<div class="syllabus-pillar-title"><a href="#" class="syllabus-icon-open"><i class='fa fa-plus' aria-hidden='true'></i></a>
<p><strong>BA1 </strong><br />Fundamentals <br />of Business Economics</p>
</div>
</div>
</div>
</div>
<div class="syllabus-pillar-holder">
<div class="syllabus-pillar-mask">
<div class="syllabus-pillar-nib-arrow pink">&nbsp;</div>
<div class="syllabus-pillar pink nib with-top padded-bottom">
<div class="syllabus-pillar-title"><a href="#" class="syllabus-icon-open"><i class='fa fa-plus' aria-hidden='true'></i></a>
<p><strong>BA2 </strong><br />Fundamentals <br />of Management Accounting</p>
</div>
</div>
</div>
</div>
<div class="syllabus-pillar-holder">
<div class="syllabus-pillar-mask">
<div class="syllabus-pillar-nib-arrow green">&nbsp;</div>
<div class="syllabus-pillar green nib with-top padded-bottom">
<div class="syllabus-pillar-title"><a href="#" class="syllabus-icon-open"><i class='fa fa-plus' aria-hidden='true'></i></a>
<p><strong>BA3 </strong><br />Fundamentals <br />of Financial Accounting</p>
</div>
</div>
</div>
</div>
</div>
<div class="syllabus-pillar-expander-holder syllabus-indenter">
<div class="syllabus-pillar-expander plum">
<div class="syllabus-expander-close">&nbsp;</div>
<ul class="alpha">
<li><span>Macroeconomic and Institutional Context of Business</span><span class="percentage">25%</span></li>
<li><span>Microeconomic and Organisational Context of Business</span><span class="percentage">30%</span></li>
<li><span>Informational Context of Business</span><span class="percentage">20%</span></li>
<li><span>Financial Context of Business</span><span class="percentage">25%</span></li>
</ul>
</div>
<div class="syllabus-pillar-expander pink">
<div class="syllabus-expander-close">&nbsp;</div>
<ul class="alpha">
<li><span>The Context of Management Accounting</span><span class="percentage">10%</span></li>
<li><span>Costing</span><span class="percentage">25%</span></li>
<li><span>Planning and Control</span><span class="percentage">30%</span></li>
<li><span>Decision Making</span><span class="percentage">35%</span></li>
</ul>
</div>
<div class="syllabus-pillar-expander green">
<div class="syllabus-expander-close">&nbsp;</div>
<ul class="alpha">
<li><span>Accounting Principles, Concepts and Regulations</span><span class="percentage">10%</span></li>
<li><span>Recording Accounting Transactions</span><span class="percentage">50%</span></li>
<li><span>Preparation of Accounts for Single Entities</span><span class="percentage">30%</span></li>
<li><span>Analysis of Financial Statements</span><span class="percentage">10%</span></li>
</ul>
</div>
</div>
<div class="syllabus-pillar-holder-row" data-matchheight=".syllabus-pillar">
<div class="syllabus-pillar-holder syllabus-pillar-wide">
<div class="syllabus-pillar blue nib ">
<div class="syllabus-pillar-title">
<p><strong>BA4 </strong><br />Fundamentals of Ethics, Corporate Governance and Business Law</p>
<a href="#" class="syllabus-icon-open"><i class='fa fa-plus' aria-hidden='true'></i></a></div>
</div>
</div>
</div>
<div class="syllabus-pillar-expander-holder syllabus-indenter">
<div class="syllabus-pillar-expander syllabus-pillar-wide blue">
<div class="syllabus-expander-close">&nbsp;</div>
<ul class="alpha">
<li><span>Business Ethics and Ethical Conflict</span><span class="percentage">30%</span></li>
<li><span>Corporate Governance, Controls and Corporate Social Responsability</span><span class="percentage">45%</span></li>
<li><span>General Principles of the Legal System, Contract and Employment Law</span><span class="percentage">15%</span></li>
<li><span>Company Administration</span><span class="percentage">10%</span></li>
</ul>
</div>
</div>
</div>
</div>
<!--div class="syllabus-tool-sidebar "><a href="#" class="syllabus-tool-sidebar-link"><span>PRACTICAL EXPERIENCE / LIFELONG LEARNING</span></a></div-->
</div>
</div>
</div>

	</div>
	  
            
		<!--#############################################Old content############################################################
			<div class="row">
				<div class="col-md-4"><h5>Why CIMA?</strong></h5>
									<ul>
									<li>A professional qualification in Management Accounting</li>
									<li>A globally recognized qualification awarded by CIMA UK</li>
									<li>A passport that opens many corporate doors</li>
									<li>A qualification that empowers people to work in many organizations and hold various roles</li>
									</ul>
				<p class="text-justify">
CIMA's focus on management functions makes it unique, and it is internationally recognised as offering the financial qualification for business. CIMA prides itself on the commercial relevance of its syllabus, which is continually enhanced to reflect the latest business developments.</p>
				</div>
			<div class="col-md-8"><img src="images/cima1.jpg" alt="achievement" class="img-fluid"></div>
		
	</div>	
		
	
		  <div id="accordion1" >
 
      
        <button class="btn btn-link collapsed " data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          The Entry Level - Certificate in Business Accounting 
        </button>
      
    

    <div id="collapseOne" class="collapse " aria-labelledby="headingOne" >
      <div class="card-body" id="cert">
       						
									<p>The Certificate in Business Accounting is CIMA&rsquo;s entry level accounting qualification for students with little or no accounting background. It is ideal for those who are new to the world of business qualifications because it offers a solid grounding in the basics of management accounting, financial accounting and business principles.</p>
									<p>The certificate level gives you business experience beyond just financial accounting and you will gain insight into how the different areas of accounting relate to the business world. It is also a stepping stone towards the CIMA Professional Qualification.</p>
									<p><strong>The Certificate Level is made up of four subjects:</strong></p><div class="row">
									<div class="col-md-4"><ul>
									<li>BA1 Fundamentals of Business Economics</li>
									<li>BA2 Fundamentals of Management Accounting</li>
									<li>BA3 Fundamentals of Financial Accounting</li>
									<li>BA4 Fundamentals of Ethics, Corporate Governance and Business Law</li>
									</ul></div>
<div class="col-md-8">
									<img src="images/cimacert.jpg" alt="cert" class="img-fluid"></div></div>
									<p><strong>Exam sequence and assessment</strong></p>
									<p>All certificate level exams are computer based and can be taken at any time. You can sit the four certificate subjects in any order and in any combination to suit your requirements. You can take these exams at the Achievers Computer Based Examination Centre which has been approved by CIMA. Duration of each exam is 2 hours.</p>
									<p><strong>Award</strong></p>
									<p>Once you complete the four subject assessments, you will be awarded the CIMA Certificate in Business Accounting qualification.</p>
    </div>
  </div>
    
      
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
         CIMA Professional Qualification (2015)
        </button>
      
    
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" >
      <div class="card-body">
       	<p>CIMA has introduced an updated syllabus and assessment method for its professional qualification starting from January 2015.</p>
									<p>The 2015 CIMA Professional Qualification Syllabus aims to address the &lsquo;employability&rsquo; needs of businesses and people. The updated syllabus and assessment bridges skill gaps and helps to produce competent and confident management accounting professionals who can guide and lead their organisations to sustainable success.</p>
									<p>The 2015 CIMA Professional Qualification is built on three specific learning pillars:</p>
									<ul>
									<li><strong>Enterprise</strong>: How to formulate and effectively implement strategy</li>
									<li><strong>Performance</strong>: How finance helps in formulating and effectively implementing strategy</li>
									<li><strong>Financial</strong>: How to prepare and interpret financial statements to make decisions</li>
									</ul>
									<p>The content of each pillar develops as you move up the qualification. The pillars are interlinked to provide a consistent body of knowledge. They are designed to cover a range of useful business areas in addition to finance. The syllabus is also divided into three levels of achievement:</p>
									
									<div id="accordion2">
  <div class="card">
    <div id="headingTwoOne">
      <h5>
        <button class="btn btn-link " data-toggle="collapse" data-target="#collapseTwoOne" aria-expanded="true" aria-controls="collapseOne">
          Operational Level
        </button>
      </h5>
    </div>

    <div id="collapseTwoOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordion2">
      <div class="card-body">
       		
									<p>Operational level is the first level of the professional qualification and consists of four exams.</p><div class="row">
		  <div class="col-md-4">
									<ul>
									<li>E1 Organisational Management</li>
									<li>P1 Management Accounting</li>
									<li>F1 Financial Reporting &amp; Taxation</li>
									<li>Operational Level Case Study</li>
									</ul></div><div class="col-md-8">

									<img src="images/cimaops.jpg" alt="ops" class="img-fluid"></div>
</div><div class="row"><div class="col-md-6">
									<p><strong>Organisational Management (E1)</strong></p>
									<table class="table">
									<tbody>
									<tr>
									<td>
									<strong>Summary of syllabus</strong></td><td>
									<strong>Weightage</strong>
									</td>
									</tr>
									<tr>
									<td>
									Introduction to organisations
									</td>
									<td>
									25%
									</td>
									</tr>
									<tr>
									<td>
									Managing the finance function
									</td>
									<td>
									15%
									</td>
									</tr>
									<tr>
									<td>
									Managing technology and information
									</td>
									<td>
									15%
									</td>
									</tr>
									<tr>
									<td>
									Operations management
									<td>
									<p>15%</p>
									</td>
									</tr>
									<tr>
									<td>
									<p>Marketing</p>
									</td>
									<td>
									<p>15%</p>
									</td>
									</tr>
									<tr>
									<td>
									<p>Managing human resources</p>
									</td>
									<td>
									<p>15%</p>
									</td>
									</tr>
									</tbody>
									</table></div><div class="col-md-6">
									<p><strong>Management Accounting (P1)</strong></p>
									<table class="table">
									<tbody>
									<tr>
									<td>
									<p><strong>Summary of syllabus</strong></p>
									</td>
									<td>
									<p><strong>Weightage</strong></p>
									</td>
									</tr>
									<tr>
									<td>
									<p>Cost accounting systems</p>
									</td>
									<td>
									<p>30%</p>
									</td>
									</tr>
									<tr>
									<td>
									<p>Budgeting</p>
									</td>
									<td>
									<p>25%</p>
									</td>
									</tr>
									<tr>
									<td>
									<p>Short-term decision making</p>
									</td>
									<td>
									<p>30%</p>
									</td>
									</tr>
									<tr>
									<td>
									<p>Dealing with risk and uncertainty</p>
									</td>
									<td>
									<p>15%</p>
									</td>
									</tr>
									</tbody>
		  </table></div>
		  </div>
									<p><strong>Financial Reporting &amp; Taxation (F1)</strong></p>
									<table class="table">
									<tbody>
									<tr>
									<td>
									<p><strong>Summary of syllabus</strong></p>
									</td>
									<td>
									<p><strong>Weightage</strong></p>
									</td>
									</tr>
									<tr>
									<td>
									<p>Regulatory environment for financial reporting and corporate governance</p>
									</td>
									<td>
									<p>10%</p>
									</td>
									</tr>
									<tr>
									<td>
									<p>Financial accounting and reporting</p>
									</td>
									<td>
									<p>45%</p>
									</td>
									</tr>
									<tr>
									<td>
									<p>Management of working capital&nbsp;cash, and sources of short-term finance</p>
									</td>
									<td>
									<p>20%</p>
									</td>
									</tr>
									<tr>
									<td>
									<p>Fundamentals of business taxation</p>
									</td>
									<td>
									<p>25%</p>
									</td>
									</tr>
									</tbody>
									</table>
									<p><strong>Operational Level Case Study</strong></p>
									<table width="100%">
									<tbody>
									<tr>
									<td width="40%">
									<p><strong>Covers</strong></p>
									</td>
									<td width="60%">
									<p><strong>You will learn how to:</strong></p>
									</td>
									</tr>
									<tr>
									<td width="40%">
									<p>P1,&nbsp;F1 and E1 content</p>
									</td>
									<td width="60%">
									<p>Apply the knowledge you have gained in the three subjects to reflect real-life work situations.</p>
									</td>
									</tr>
									</tbody>
									</table>
									<p><strong>Exam sequence</strong></p>
									<p>Students must pass all Certificate level subjects before attempting the Operational level.</p>
									<p><strong>Assessment</strong></p>
									
									<p><strong><em>Objective tests (OTQ)</em></strong></p>
									<p>The student has to take a 90 minutes objective test comprising of 60 questions for each subject of the Operational level. The exams are available on demand.</p>
									<p><strong><em>Integrated case study exam</em></strong></p>
									<p>The integrated case study exams are available four times a year. The duration of the exam is three hours.</p>
									<p><strong>Award</strong></p>
									<p>Students who pass all three Operational level OTQ papers and the Integrated case study exam will be awarded the CIMA Diploma in Management Accounting.</p>
													
    </div>
  </div>
	  
  <div class="card">
    <div  id="headingTwoTwo">
      <h5>
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwoTwo" aria-expanded="false" aria-controls="collapseTwo">
         Managerial Level
        </button>
      </h5>
    </div>
    <div id="collapseTwoTwo" class="collapse" aria-labelledby="headingTwoTwo" data-parent="#accordion2">
      <div class="card-body">
       									
									<p>Management level is the second level of the professional qualification and consists of four exams.</p><div class="row"><div class="col-md-4">
									<ul>
									<li>Advanced Financial Reporting (F2)</li>
									<li>Advanced Management Accounting (P2)</li>
									<li>Project and Relationship Management (E2)</li>
									<li>Management Level Case Study</li>
									</ul>
</div><div class="col-md-8">
									<img src="images/cimaman.jpg" alt="management" class="img-fluid"></div>
</div>
								<div class="row"><div class="col-md-6">
									<p><strong>Project and Relationship Management (E2)</strong>&nbsp;</p>
									<table class="table">
									<tbody>
									<tr>
									<td>
									<p><strong>Summary of syllabus</strong></p>
									</td>
									<td>
									<p><strong>Weightage</strong></p>
									</td>
									</tr>
									<tr>
									<td>
									<p>Introduction to strategic management and assessing the global environment</p>
									</td>
									<td>
									<p>30%</p>
									</td>
									</tr>
									<tr>
									<td>
									<p>The human aspects of the organization</p>
									</td>
									<td>
									<p>20%</p>
									</td>
									</tr>
									<tr>
									<td>
									<p>Managing relationships</p>
									</td>
									<td>
									<p>20%</p>
									</td>
									</tr>
									<tr>
									<td>
									<p>Managing change through projects</p>
									</td>
									<td>
									<p>30%</p>
									</td>
									</tr>
									</tbody>
									</table></div><div class="col-md-6">
									<p><strong>Advanced Management Accounting (P2)</strong></p>
									<table class="table">
									<tbody>
									<tr>
									<td>
									<p><strong>Summary of syllabus</strong></p>
									</td>
									<td>
									<p><strong>Weightage</strong></p>
									</td>
									</tr>
									<tr>
									<td>
									<p>Cost planning and analysis for competitive advantage</p>
									</td>
									<td>
									<p>25%</p>
									</td>
									</tr>
									<tr>
									<td>
									<p>Control and performance management of responsibility centres</p>
									</td>
									<td>
									<p>30%</p>
									</td>
									</tr>
									<tr>
									<td>
									<p>Long-term decision making</p>
									</td>
									<td>
									<p>30%</p>
									</td>
									</tr>
									<tr>
									<td>
									<p>Management control and risk</p>
									</td>
									<td>
									<p>15%</p>
									</td>
									</tr>
									</tbody>
									</table></div></div>
									<p><strong>Advanced Financial Reporting (F2)</strong></p>
									<table class="table">
									<tbody>
									<tr>
									<td>
									<p><strong>Summary of syllabus</strong></p>
									</td>
									<td>
									<p><strong>Weightage</strong></p>
									</td>
									</tr>
									<tr>
									<td>
									<p>Sources of long-term finance</p>
									</td>
									<td>
									<p>15%</p>
									</td>
									</tr>
									<tr>
									<td>
									<p>Financial reporting</p>
									</td>
									<td>
									<p>60%</p>
									</td>
									</tr>
									<tr>
									<td>
									<p>Analysis of financial performance and position</p>
									</td>
									<td>
									<p>25%</p>
									</td>
									</tr>
									</tbody>
									</table>
									<p><strong>Management Level Case Study</strong></p>
									<table class="table" width="100%">
									<tbody>
									<tr>
									<td width="40%">
									<p><strong>Covers</strong></p>
									</td>
									<td width="60%">
									<p><strong>You will learn how to:</strong></p>
									</td>
									</tr>
									<tr>
									<td width="40%">
									<p>P2 F2 and E2 content</p>
									</td>
									<td width="60%">
									<p>Apply the knowledge you have gained in the three subjects to reflect real-life work situations.</p>
									</td>
									</tr>
									</tbody>
									</table>
									<p><strong>Exam sequence</strong></p>
									<p>Students must pass all Operational level subjects and the integrated case study before attempting the Management level.</p>
									<p><strong>Assessment</strong></p>
									<p><strong><em>Objective tests (OTQ)</em></strong></p>
									<p>The student has to take a 90 minute objective test comprising of 60 questions for each subject of the Management level. The exams are available on demand.&nbsp;</p>
									<p><strong><em>Integrated case study exam</em></strong></p>
									<p>The integrated case study exams are available four times a year. The duration of the exam is three hours.&nbsp;</p>
									<p><strong>Award</strong></p>
									<p>Students who pass all three Management level OTQ papers and the Integrated case study exam will be awarded the CIMA Advanced Diploma in Management Accounting.</p>

      </div>
    </div>
  </div>
	  <div class="card">
    <div  id="headingTwoThree">
      <h5>
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwoThree" aria-expanded="false" aria-controls="collapseTwo">
         Strategic Level
        </button>
      </h5>
    </div>
    <div id="collapseTwoThree" class="collapse" aria-labelledby="headingTwoThree" data-parent="#accordion2">
      <div class="card-body">
		  <p>Strategic level is the third level of the professional qualification and consists of four exams.</p>
		 <div class="row"><div class="col-md-4"><ul>
									<li>Financial Strategy (F3)</li>
									<li>Risk Management (P3)</li>
									<li>Strategic Management (E3)&nbsp;</li>
									<li>Strategic Level Case Study</li>
									</ul></div> <div class="col-md-8">


			 <img src="images/cimastrat.jpg" alt="strategic-level" class="img-fluid"></div></div>
								<div class="row"><div class="col-md-6">	<p><strong>Strategic Management (E3)&nbsp;</strong></p>
									<table class="table">
									<tbody>
									<tr>
									<td>
									<p><strong>Summary of syllabus</strong></p>
									</td>
									<td>
									<p><strong>Weightage</strong></p>
									</td>
									</tr>
									<tr>
									<td>
									<p>Interacting with the organisation&rsquo;s environment</p>
									</td>
									<td>
									<p>20%</p>
									</td>
									</tr>
									<tr>
									<td>
									<p>Evaluating strategic position and strategic options</p>
									</td>
									<td>
									<p>30%</p>
									</td>
									</tr>
									<tr>
									<td>
									<p>Leading change</p>
									</td>
									<td>
									<p>20%</p>
									</td>
									</tr>
									<tr>
									<td>
									<p>Implementing strategy</p>
									</td>
									<td>
									<p>15%</p>
									</td>
									</tr>
									<tr>
									<td>
									<p>The role of information systems in organisational strategy</p>
									</td>
									<td>
									<p>15%</p>
									</td>
									</tr>
									</tbody>
									</table></div>
									<div class="col-md-6"><p><strong>Risk Management (P3)</strong></p>
									<table class="table">
									<tbody>
									<tr>
									<td>

							

									<p><strong>Summary of syllabus</strong></p>
									</td>
									<td>
									<p><strong>Weightage</strong></p>
									</td>
									</tr>
									<tr>
									<td>
									<p>Identification,&nbsp;classification and evaluation of risk</p>
									</td>
									<td>
									<p>20%</p>
									</td>
									</tr>
									<tr>
									<td>
									<p>Responses to strategic risk</p>
									</td>
									<td>
									<p>20%</p>
									</td>
									</tr>
									<tr>
									<td>
									<p>Internal controls to manage risk</p>
									</td>
									<td>
									<p>20%</p>
									</td>
									</tr>
									<tr>
									<td>
									<p>Managing risks associated with cash flows</p>
									</td>
									<td>
									<p>20%</p>
									</td>
									</tr>
									<tr>
									<td>
									<p>Managing risks associated with capital investment decisions</p>
									</td>
									<td>
									<p>20%</p>
									</td>
									</tr>
									</tbody>
									</table></div></div>
									<p><strong>Financial Strategy (F3)</strong></p>
									<table class="table">
									<tbody>
									<tr>
									<td>
									<p><strong>Summary of syllabus</strong></p>
									</td>
									<td>
									<p><strong>Weightage</strong></p>
									</td>
									</tr>
									<tr>
									<td>
									<p>Formulation of financial strategy</p>
									</td>
									<td>
									<p>25%</p>
									</td>
									</tr>
									<tr>
									<td>
									<p>Financing and dividend decisions</p>
									</td>
									<td>
									<p>35%</p>
									</td>
									</tr>
									<tr>
									<td>
									<p>Corporate finance</p>
									</td>
									<td>
									<p>40%</p>
									</td>
									</tr>
									</tbody>
									</table>
									<p><strong>Strategic Level Case Study</strong></p>
									<table class="table">
									<tbody>
									<tr>
									<td>
									<p><strong>Covers</strong></p>
									</td>
									<td>
									<p><strong>You will learn how to:</strong></p>
									</td>
									</tr>
									<tr>
									<td>
									<p>P3, F3 and E3 content</p>
									</td>
									<td>
									<p>Apply the knowledge you have gained in the three subjects to reflect real-life work situations.</p>
									</td>
									</tr>
									</tbody>
									</table>
									<p><strong>Exam sequence</strong></p>
									<p>Students must pass all Management level subjects and the integrated case study before attempting the Strategic level.</p>
									<p><strong>Assessment</strong></p>
									<p><strong><em>Objective tests (OTQ)</em></strong></p>
									<p>The student has to take a 90 minute objective test comprising of 60 questions for each subject of the Strategic level.</p>
									<p><strong>Integrated case study exam</strong></p>
									<p>The integrated case study exams are available four times a year. The duration of the exam is three hours.</p>
									<p><strong>Award</strong></p>
									<p>To obtain the Membership of CIMA and CGMA Designation students will need to complete the relevant professional level exams, culminating in the Strategic level integrated case study exam and must demonstrate three years of relevant practical experience which can be gained before, during and/or after studies.</p>
      </div>
    </div>
  </div>
 
</div>

		  </div>
									
									<p>You will progress from the Operational level, to the Management level and finally to Strategic level. The levels encourage a linear development of knowledge. This ensures you learn the relevant skills needed by today&rsquo;s businesses.</p>
									
		
		 <h3 id="gateway"> CIMA Masters Gateway Assessment</h3>
									
									<p>The Master&rsquo;s gateway route is an accelerated entry programme to CIMA for those who hold a MBA or Master's in Accounting.</p>
									<p>This route requires you to sit the single three-hour gateway exam, which is the management case study exam. It assesses your knowledge of the material covered in the management level of the CIMA Professional Qualification. Once you pass the assessment, you can then enter the CIMA Professional Qualification at the strategic level.</p>
									
									<img src="images/cimaman.jpg" alt="management-level" class="img-fluid">
									
									<p><strong>Preparing for the CIMA Gateway Assessment</strong></p>
									
									<p>You must register as a CIMA student and submit relevant documentation supporting your eligibility for the gateway route. Achievers Lanka Business School offers lectures for the CIMA Gateway Assessment.</p>						

      </div>
    </div>

 


		  </div>
		  
		
		<div id="read_more" class="collapse">	
<p  class="text-justify ">
CIMA founded in 1919, is the world’s leading and largest professional body of management accountants, with over 218,000 members and students operating in 177 countries, working at the heart of business. CIMA members and students work in industry, commerce, the public sector and not-for-profit organisations.
</p><p  class="text-justify">
CIMA works closely with employers and sponsors leading-edge research, constantly updating its qualification, professional experience requirements and continuing professional development to ensure it remains the employers’ choice when recruiting financially-trained business leaders.
</p><p  class="text-justify ">
Professionalism and ethics are at the core of CIMA’s activities with every member and student bound by robust standards so that integrity, expertise and vision are brought together.
</p><p  class="text-justify ">
CIMA has formed a joint venture with the American Institute of CPAs (AICPA) to establish the Chartered Global Management Accountant (CGMA) designation. CGMA is the global quality standard that further elevates the profession of management accounting. The designation recognises the most talented and committed management accountants with the discipline and skill to drive strong business performance.
</p>
	
	</div>	
		<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#read_more" aria-expanded="false" aria-controls="read_more">
   Read More
  </button>
		<p class="text-justify"><br>
The syllabus comprises 12 examinations, although some exemptions are available. 
<br>
The qualification is having four levels; twelve Objective Tests, and three Case Study exams. 
</p> -->
		<!--#########################################################################################################-->
	</div>
		<div class="col-md-3 pull">
	<img class="card-img-top xs-hide" src="images/Courses/cima.jpg" width="80%">
			   <div class="card xs-hide">
					  <div class="card-header"> Content</div>
                <ul class="list-group list-group-flush">
                   <li class="list-group-item"> <a href="#headingOne">Certificate Level</a></li>
					<li class="list-group-item"><a href="#headingTwoOne">Operational Level</a></li>
                   <li class="list-group-item"><a href="#headingTwoTwo">Management Level</a></li>
					<li class="list-group-item"><a href="#headingTwoThree">Strategic Level</a></li>
					<li class="list-group-item"><a href="#gateway">Masters Gateway Assesment</a></li>
					                </ul>
				 </div>
			  <div id="timetables" class="card">
				  <div class="card-header"> Timetables</div>
				  <div class="list-group list-group-flush">
					  <div class="list-group-item"> <img id="timetable1" class="img-fluid" src="images/ops.png"></div>
					 <div class="list-group-item"><img id="timetable2" class="img-fluid timetables" src="images/man.png"></div>
						  <div class="list-group-item"> <img id="timetable3" class="img-fluid timetables" src="images/strat.png"></div>
				  </div>
				 
			  </div>
			  <!-- timetable modals -->
			  <div id="timetableM" class="modal fade">
  <span class="close"> Close &times;</span>
   <img class="modal-image" id="img01">
  <div id="caption"></div>
</div>
			  <script>
// Get the modal
var modal = document.getElementById('timetableM');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img1 = document.getElementById('timetable1');
var img2 = document.getElementById('timetable2');
var img3 = document.getElementById('timetable3');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img1.onclick = function(){
    modal.style.display = "block";
	modal.classList.add("show");
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}
img2.onclick = function(){
    modal.style.display = "block";
	modal.classList.add("show");
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}
img3.onclick = function(){
    modal.style.display = "block";
	modal.classList.add("show");
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
	modal.classList.remove("show");
}	
	window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
		modal.classList.remove("show");
		
    }
}

</script>

			  
	</div>
	</div>
		  </div>
		 <!-- <div class="container">  
  <div class="row  text-center ">
	  <div class="col-md-9  text-center">
				<h3>Meet Your Lecture Panel</h3>
				<h6 class="text-muted">A panel of maestros with over 100 years of combined experience </h6>
			</div>

	 		 <div class="row">
   <div class="col-md-3">
	   <div class="card">
		   <img class="card-img-top" src="images/lecturers/faris.png" alt="Faris Ismail">
                <div class="card-body">
                  <h5 class="card-title">Faris Ismail</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Operational Case Study</h6>
                  <p class="card-text text-center">Supportive mentor with a student first approach </p>
                  
         </div>
	  </div>
	</div>
	
	 <div class="col-md-3">
	   <div class="card">
		   <img class="card-img-top" src="images/lecturers/shafraz.png" alt="Shafraz" style="border-radius: 50%; width=100px;">
                <div class="card-body">
                  <h5 class="card-title">Shafraz Saleem</h5>
                  <h6 class="card-subtitle mb-2 text-muted">E Pillar</h6>
                  <p class="card-text text-center">Renowned lecturer specializing in the E pilar with exceptional pass rates </p>
                  
         </div>
	  </div>
	</div>
				  <div class="col-md-3">
					  <div class="card">
		   <img class="card-img-top" src="images/lecturers/azad.png" alt="Azad Hye">
                <div class="card-body">
                  <h5 class="card-title">Azad Hye</h5>
                  <h6 class="card-subtitle mb-2 text-muted">F pillar</h6>
                  <p class="card-text text-center">Voted by the students as the Most Popular Lecturer at CIMA Spot Light 2016 </p>
                  
         </div>
	  </div>
	</div>
				  <div class="col-md-3">
	   <div class="card">
		   <img class="card-img-top" src="images/lecturers/shehan.png" alt="Shehan Adikari">
                <div class="card-body">
                  <h5 class="card-title">Shehan Adikari</h5>
                  <h6 class="card-subtitle mb-2 text-muted">P pillar</h6>
                  <p class="card-text text-center">A unique ability to deliver complex calculations in a student friendly manner </p>
                  
         </div>
	  </div>
	</div>
	
		</div>
  </div></div>		-->

	  
	  
	  
	  <!--Footer Starts-->
 <?php include_once("footer.php")?>
	  
</body>
</html>
