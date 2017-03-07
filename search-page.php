<?php
/**
* Template Name: Search Page
*/
?>
<?php get_header(); ?>

<div id="wrapper">
	<!-- Sidebar -->
    <div id="sidebar-wrapper" class="absolute <?php if (is_user_logged_in()) { echo 'is_login_margin'; }?>">
    	<!-- <p class="text-center title-search-list">Types of Search</p> -->
        <div class="panel-group" id="accordion">
        	<div class="panel panel-default">
		    	<div class="panel-heading">
		        	<h4 class="panel-title">
		       			<a data-toggle="collapse" data-parent="#accordion" href="#collapse7">Judgment</a>
		            </h4>
		   		</div>
		    	
		    </div>

		    <div class="panel panel-default">
		    	<div class="panel-heading">
		        	<h4 class="panel-title">
		        		<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Acts</a>
		      		</h4>
		    	</div>
		    	
		    </div>

		    <div class="panel panel-default">
		    	<div class="panel-heading">
		        	<h4 class="panel-title">
		        		<a data-toggle="collapse" data-parent="#accordion" href="#Bills">Bills</a>
		      		</h4>
		    	</div>
		    	
		    </div>

		    <div class="panel panel-default">
		    	<div class="panel-heading">
		        	<h4 class="panel-title">
		        		<a data-toggle="collapse" data-parent="#accordion" href="#DraftBills">Draft Bills</a>
		      		</h4>
		    	</div>
		    	
		    </div>

		    <div class="panel panel-default">
		    	<div class="panel-heading">
		        	<h4 class="panel-title">
		        		<a data-toggle="collapse" data-parent="#accordion" href="#Ordinances">Ordinances</a>
		      		</h4>
		    	</div>
		    	
		    </div>
		    
		    <div class="panel panel-default">
		    	<div class="panel-heading">
		        	<h4 class="panel-title">
		            	<a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Rules</a>
		        	</h4>
		    	</div>
		    	
		    </div>
		    
		    <div class="panel panel-default">
		    	<div class="panel-heading">
		        	<h4 class="panel-title">
		            	<a data-toggle="collapse" data-parent="#accordion" href="#Regulations">Regulations</a>
		        	</h4>
		    	</div>
		    	
		    </div>

		    <div class="panel panel-default">
		    	<div class="panel-heading">
		        	<h4 class="panel-title">
		        		<a data-toggle="collapse" data-parent="#accordion" href="#collapse5">Circulars </a>
		      		</h4>
		    	</div>
			    
		    </div>


		    <div class="panel panel-default">
		    	<div class="panel-heading">
		        	<h4 class="panel-title">
		        		<a data-toggle="collapse" data-parent="#accordion" href="#Notification">Notifications </a>
		      		</h4>
		    	</div>
			    
		    </div>

		    <div class="panel panel-default">
		    	<div class="panel-heading">
		        	<h4 class="panel-title">
		        		<a data-toggle="collapse" data-parent="#accordion" href="#TradeNotices">Trade Notices </a>
		      		</h4>
		    	</div>
			    
		    </div>

		    <div class="panel panel-default">
		    	<div class="panel-heading">
		        	<h4 class="panel-title">
		        		<a data-toggle="collapse" data-parent="#accordion" href="#DutyTariff">Duty & Tariff </a>
		      		</h4>
		    	</div>
			    
		    </div>

		    <div class="panel panel-default">
		    	<div class="panel-heading">
		        	<h4 class="panel-title">
		        		<a data-toggle="collapse" data-parent="#accordion" href="#RatesTaxes">Rates & Taxes </a>
		      		</h4>
		    	</div>
			    
		    </div>

		    <div class="panel panel-default">
			    <div class="panel-heading">
			        <h4 class="panel-title">
			        	<a data-toggle="collapse" data-parent="#accordion" href="#collapse6">Finance Act</a>
			        </h4>
			    </div>
			    
		    </div>

		    <div class="panel panel-default">
			    <div class="panel-heading">
			        <h4 class="panel-title">
			        	<a data-toggle="collapse" data-parent="#accordion" href="#LawReports">Law Reports</a>
			        </h4>
			    </div>
			    
		    </div>

		    <div class="panel panel-default">
			    <div class="panel-heading">
			        <h4 class="panel-title">
			        	<a data-toggle="collapse" data-parent="#accordion" href="#Policy">Policy & Guidelines</a>
			        </h4>
			    </div>
			    
		    </div>

		    <div class="panel panel-default">
			    <div class="panel-heading">
			        <h4 class="panel-title">
			        	<a data-toggle="collapse" data-parent="#accordion" href="#Agreement">Agreement</a>
			        </h4>
			    </div>
			    
		    </div>

		    <div class="panel panel-default">
			    <div class="panel-heading">
			        <h4 class="panel-title">
			        	<a data-toggle="collapse" data-parent="#accordion" href="#Deeds">Deeds</a>
			        </h4>
			    </div>
			    
		    </div>

		    <div class="panel panel-default">
			    <div class="panel-heading">
			        <h4 class="panel-title">
			        	<a data-toggle="collapse" data-parent="#accordion" href="#PressRelease">Press Release</a>
			        </h4>
			    </div>
			    
		    </div>
		    
		    <div class="panel panel-default">
		    	<div class="panel-heading">
		        	<h4 class="panel-title">
		        		<a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Forms</a>
		        	</h4>
		    	</div>
		   		
		  	</div>

		    <div class="panel panel-default">
		    	<div class="panel-heading">
		        	<h4 class="panel-title">
		        		<a data-toggle="collapse" data-parent="#accordion" href="#News">News</a>
		        	</h4>
		    	</div>
		   		
		  	</div>

		    <!-- <div class="panel panel-default">
		    	<div class="panel-heading">
		        	<h4 class="panel-title">
		       			<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Case Laws</a>
		            </h4>
		   		</div>
		    	
		    </div>
		     -->
		    
		    
		</div>
    </div>
    <!-- /#sidebar-wrapper -->
	<a href="#sidebar-wrapper" class="btn absolute <?php if (is_user_logged_in()) { echo 'is_login_margin'; }?>" id="menu-toggle">
    	<i class="fa fa-bars" aria-hidden="true"></i>
    </a>
    <script>
    jQuery(document).ready(function($) {
    	
	    jQuery("#menu-toggle").click(function(e) {
	        e.preventDefault();   
	        jQuery("#wrapper").toggleClass("toggled");
	    });
	    jQuery(".button-list-check").click(function(e) {
	        jQuery(this).siblings("div.list-checkbox-panel").toggleClass("displaynone").toggleClass("displayblock");
	    });
	    jQuery(".close-list-check").click(function(e) {
	        jQuery(this).parent("div.list-checkbox-panel").toggleClass("displaynone").toggleClass("displayblock");
	    });
    	jQuery(window).scroll(function(event){

	        var y = jQuery(this).scrollTop();
	        var x = jQuery('.tempo-breadcrumbs').height()+20;
	        if (y>x) {
	          jQuery('#sidebar-wrapper').removeClass('absolute').addClass('fixed');
	          jQuery('#menu-toggle').removeClass('absolute').addClass('fixed');
	        }
	        else{
	          jQuery('#sidebar-wrapper').addClass('absolute').removeClass('fixed');
	          jQuery('#menu-toggle').addClass('absolute').removeClass('fixed');
	        }

	    });
    });
    </script>
	
	<!-- start poster -->
	<div id="blog-wrapper">
		<div class="post">
			<div id="collapse2" class="panel-collapse collapse">
	        	<div class="panel-heading">
					<h3 class="panel-title"> ACTS SEARCH </h3>
				</div>
				
		        <div class="panel-body">
	      			<div class="panel-pt col-md-12 col-sm-12 col-xs-12">	
			        	<span class="search-panel padt5px">Choose Acts/Rules :</span>
			        	<select class="multipleChosen" multiple="true" id="acts-rules">
					        <option value="0/1900">BAR COUNCIL OF INDIA RULES</option>
					        <option value="19/1929">CHILD MARRIAGE RESTRAINT ACT</option>
					        <option value="0/1937">HINDU WOMEN’S RIGHTS TO PROPERTY ACT</option>
					        <option value="0/1961">FOREIGN AWARDS (RECOGNITION AND ENFORCEMENT) ACT ACT</option>
					        <option value="0/1964">INDUSTRIAL DEVELOPMENT BANK OF INDIA ACT</option>
					        <option value="18/1891">BANKERS' BOOKS EVIDENCE ACT</option>
					        <option value="68/1986">CONSUMER PROTECTION ACT</option>
					        <option value="25/1961">ADVOCATES ACT</option>
					    </select>
						<div class="clearfix"></div>
		        	</div>
					
					<div class="panel-pt col-md-6 col-sm-6 col-xs-12">
                    	<span class="search-panel">Year :</span>
                    	<div class="input-right">
	                    	<select id="act-year">
						        <?php for ($i = 2016; $i > 1950; $i--):  ?>
						        	<option value="<?= $i; ?>"><?= $i; ?></option>
						        <?php endfor; ?>
						    </select>
					    </div>
						<div class="clearfix"></div>
                    </div>
					<div class="panel-pt col-md-6 col-sm-6 col-xs-12">
                    	<span class="search-panel">Section no :</span>
                    	<div class="input-right">
                    		<input type="text" class="form-control" id="section-no" placeholder="0">
                    	</div>
						<div class="clearfix"></div>
                    </div>
					
                    <div class="panel-pt pull-right">
                    	<button id="acts" class="btn btn-primary">GO</button>
                    </div>
	        	</div>
	    	</div>

			<div id="TradeNotices" class="panel-collapse collapse">
	        	<div class="panel-heading">
					<h3 class="panel-title"> TRADES NOTICES SEARCH </h3>
				</div>
				
		        <div class="panel-body">
	      			<div class="panel-pt col-md-6 col-sm-6 col-xs-12">

			        	<span class="search-panel padt5px">Trade Notices :</span>
			        	<div class="input-right">
				        	<select class="form-control" id="ftpTrade">
								<option value="01(RE-2007)/ 2004-2009">01(RE-2007)/ 2004-2009</option>
								<option value="02(RE-2007)/ 2004-2009">02(RE-2007)/ 2004-2009</option>
								<option value="03(RE-2007)/ 2004-2009">03(RE-2007)/ 2004-2009</option>
								<option value="04(RE-2007)/ 2004-2009">04(RE-2007)/ 2004-2009</option>
								<option value="05(RE-2006)/ 2004-2009">05(RE-2006)/ 2004-2009</option>
								<option value="06(RE-2007)/ 2004-2009">06(RE-2007)/ 2004-2009</option>
								<option value="07(RE-2007)/ 2004-2009">07(RE-2007)/ 2004-2009</option>
								<option value="08(RE-2007)/ 2004-2009">08(RE-2007)/ 2004-2009</option>
								<option value="09(RE-2007)/ 2004-2009">09(RE-2007)/ 2004-2009</option>
								<option value="10(RE-2007)/ 2004-2009">10(RE-2007)/ 2004-2009</option>
								<option value="11(RE-2007)/ 2004-2009">11(RE-2007)/ 2004-2009</option>
								<option value="12(RE-2007)/ 2004-2009">12(RE-2007)/ 2004-2009</option>
								<option value="13(RE-2007)/ 2004-2009">13(RE-2007)/ 2004-2009</option>
								<option value="14(RE-2007)/ 2004-2009">14(RE-2007)/ 2004-2009</option>
								<option value="15(RE-2007)/ 2004-2009">15(RE-2007)/ 2004-2009</option>
								<option value="16(RE-2007)/ 2004-2009">16(RE-2007)/ 2004-2009</option>
								<option value="17(RE-2007)/ 2004-2009">17(RE-2007)/ 2004-2009</option>
								<option value="18(RE-2007)/ 2004-2009">18(RE-2007)/ 2004-2009</option>
								<option value="19(RE-2007)/ 2004-2009">19(RE-2007)/ 2004-2009</option>
								<option value="20(RE-2007)/ 2004-2009">20(RE-2007)/ 2004-2009</option>
						    </select>
						</div>
						<div class="clearfix"></div>
		        	</div>
		        	<div class="panel-pt col-md-6 col-sm-6 col-xs-12">
                    	<span class="search-panel">Date :</span>
                    	<div class="input-right">
                    		<input type="text" class="form-control date" name="date" id="TradeNoticesDate" placeholder="">
                    	</div>
						<div class="clearfix"></div>
                    </div>

                    <div class="panel-pt col-md-6 col-sm-6 col-xs-12">
                    	<span class="search-panel padt5px">Subject :</span>
                    	<div class="input-right">
                    		<input type="text" id="trade-subject" class="form-control">
                    	</div>
						<div class="clearfix"></div>
                    </div>
					
                    <div class="panel-pt pull-right">
                    	<button id="trade-search" class="btn btn-primary">GO</button>
                    </div>
	        	</div>
	    	</div>

	    	<div id="collapse7" class="panel-collapse collapse">
	    		<div class="panel-heading">
					<h3 class="panel-title"> JUDGEMENT SEARCH </h3>
				</div>
		        <div class="panel-body">
		        	<div class="panel-pt col-md-12 col-sm-12 col-xs-12">
                    	<span class="search-panel padt5px">Free Text Search :</span>
                    	<div class="input-right">
                    		<input type="text" name="judge-free-search" class="form-control">
                    	</div>
						<div class="clearfix"></div>
                    </div>
		        	<div class="panel-pt col-md-12 col-sm-12 col-xs-12">	
			        	<span class="search-panel padt5px">Subject :</span>
                		<select class="multipleChosen" multiple="true" id="judge-subject">
							<option value="Accounting & Auditing">Accounting & Auditing</option>
							<option value="Administrative Law">Administrative Law</option>
							<option value="Agriculture">Agriculture</option>
							<option value="Alternative Dispute Resolution (ADR)">Alternative Dispute Resolution (ADR)</option>
							<option value="Anti-Corruption">Anti-Corruption</option>
							<option value="Art Law">Art Law</option>
							<option value="Aviation Law">Aviation Law</option>
							<option value="Banking & Finance">Banking & Finance</option>
							<option value="Bankruptcy">Bankruptcy</option>
							<option value="Business, Trade & Commerce Law">Business, Trade & Commerce Law</option>
							<option value="Capital Markets">Capital Markets</option>
							<option value="Censorship">Censorship</option>
							<option value="Charity">Charity</option>
							<option value="Citizenship & Migration">Citizenship & Migration</option>
							<option value="Civil Law">Civil Law</option>
							<option value="Commercial">Commercial</option>
							<option value="Companies">Companies</option>
							<option value="Competition Law">Competition Law</option>
							<option value="Computerisation of Law">Computerisation of Law</option>
							<option value="Conflict of Law">Conflict of Law</option>
							<option value="Constitutional Law">Constitutional Law</option>
							<option value="Construction Law">Construction Law</option>
							<option value="Consumer Credit">Consumer Credit</option>
							<option value="Consumer Protection">Consumer Protection</option>
							<option value="Contracts">Contracts</option>
							<option value="Copyright">Copyright</option>
							<option value="Corporate">Corporate</option>
							<option value="Corruption">Corruption</option>
							<option value="Criminal law">Criminal law</option>
							<option value="Customs">Customs</option>
							<option value="Cyber Laws">Cyber Laws</option>
							<option value="Cyberspace">Cyberspace</option>
							<option value="Data Protection">Data Protection</option>
							<option value="Deeds & Other Instruments">Deeds & Other Instruments</option>
							<option value="Defamation">Defamation</option>
							<option value="Education">Education</option>
							<option value="Elections">Elections</option>
							<option value="Employment Law">Employment Law</option>
							<option value="Entertainment, Arts & Sport Law">Entertainment, Arts & Sport Law</option>
							<option value="Environment">Environment</option>
							<option value="Excise    ">Excise    </option>
							<option value="Family Law">Family Law</option>
							<option value="Finance">Finance</option>
							<option value="Financial Services">Financial Services</option>
							<option value="Foreign Investment">Foreign Investment</option>
							<option value="Forest">Forest</option>
							<option value="Freedom of Information (FOI)">Freedom of Information (FOI)</option>
							<option value="Good Governance">Good Governance</option>
							<option value="GOODS AND SERVICE TAX (GST)">GOODS AND SERVICE TAX (GST)</option>
							<option value="Health & Medicine">Health & Medicine</option>
							<option value="Hindu Laws">Hindu Laws</option>
							<option value="History of Law">History of Law</option>
							<option value="Human Rights">Human Rights</option>
							<option value="Immigration">Immigration</option>
							<option value="Income Tax">Income Tax</option>
							<option value="Indigenous Law">Indigenous Law</option>
							<option value="Industrial Relations & Labor Law">Industrial Relations & Labor Law</option>
							<option value="Industry">Industry</option>
							<option value="Information Technology">Information Technology</option>
							<option value="Infrastructure">Infrastructure</option>
							<option value="Inheritance">Inheritance</option>
							<option value="Insolvency & Bankruptcy">Insolvency & Bankruptcy</option>
							<option value="Insurance">Insurance</option>
							<option value="Intellectual Property">Intellectual Property</option>
							<option value="International Agreements">International Agreements</option>
							<option value="International Law">International Law</option>
							<option value="International Trade">International Trade</option>
							<option value="Islamic Law">Islamic Law</option>
							<option value="Jurisdictional Issues">Jurisdictional Issues</option>
							<option value="Jurisprudence">Jurisprudence</option>
							<option value="Labour & Employment">Labour & Employment</option>
							<option value="Land Law">Land Law</option>
							<option value="Law and Economics">Law and Economics</option>
							<option value="Law Reform">Law Reform</option>
							<option value="Legal History">Legal History</option>
							<option value="Legal Practice">Legal Practice</option>
							<option value="Legal System">Legal System</option>
							<option value="Legal Theory">Legal Theory</option>
							<option value="Life Sciences">Life Sciences</option>
							<option value="Litigation">Litigation</option>
							<option value="Maritime Law">Maritime Law</option>
							<option value="Media & Communications">Media & Communications</option>
							<option value="Medicine">Medicine</option>
							<option value="Military Law">Military Law</option>
							<option value="Mining">Mining</option>
							<option value="Money Laundering">Money Laundering</option>
							<option value="Muslim Laws">Muslim Laws</option>
							<option value="Negligence">Negligence</option>
							<option value="Oil Gas & Energy">Oil Gas & Energy</option>
							<option value="Ombudsmen">Ombudsmen</option>
							<option value="Outer Space">Outer Space</option>
							<option value="Patent">Patent</option>
							<option value="Pensions">Pensions</option>
							<option value="Personal Injury">Personal Injury</option>
							<option value="Petroleum">Petroleum</option>
							<option value="Poverty Reduction">Poverty Reduction</option>
							<option value="Primary Industry">Primary Industry</option>
							<option value="Privacy">Privacy</option>
							<option value="Privatisation">Privatisation</option>
							<option value="Procurement">Procurement</option>
							<option value="Property">Property</option>
							<option value="Public Sector">Public Sector</option>
							<option value="Real Property">Real Property</option>
							<option value="Refugees & Asylum">Refugees & Asylum</option>
							<option value="Regulatory Law">Regulatory Law</option>
							<option value="Religion & the Law">Religion & the Law</option>
							<option value="Remedies">Remedies</option>
							<option value="Resources Law">Resources Law</option>
							<option value="Right to Information">Right to Information</option>
							<option value="Secured Transactions">Secured Transactions</option>
							<option value="Securities">Securities</option>
							<option value="Service Tax">Service Tax</option>
							<option value="Social Welfare & Services">Social Welfare & Services</option>
							<option value="Space Law">Space Law</option>
							<option value="Succession">Succession</option>
							<option value="Tax">Tax</option>
							<option value="Taxation, Revenue & Customs">Taxation, Revenue & Customs</option>
							<option value="Telecommunications">Telecommunications</option>
							<option value="Terrorism">Terrorism</option>
							<option value="Tort & Personal Injury">Tort & Personal Injury</option>
							<option value="Trade Mark">Trade Mark</option>
							<option value="Trade Practices">Trade Practices</option>
							<option value="Transport">Transport</option>
							<option value="Travel & Tourism">Travel & Tourism</option>
							<option value="Treaties">Treaties</option>
							<option value="VAT">VAT</option>
							<option value="White Collar Crime/Corporate Crime">White Collar Crime/Corporate Crime</option>
							<option value="Wills & Probate">Wills & Probate</option>
							<option value="Women & the Law">Women & the Law</option>
					    </select>
						<div class="clearfix"></div>
		        	</div>
		        	<div class="panel-pt col-md-12 col-sm-12 col-xs-12">	
			        	<span class="search-panel padt5px">Select Court/Tribunal :</span>
                		<select class="multipleChosen" multiple="true" id="court-subject">
							<option value="Allahabad High Court">Allahabad High Court</option>
							<option value="Andhra Pradesh High Court">Andhra Pradesh High Court</option>
							<option value="Bombay High Court">Bombay High Court</option>
							<option value="Calcutta High Court">Calcutta High Court</option>
							<option value="Chhattisgarh High Court">Chhattisgarh High Court</option>
							<option value="Delhi High Court">Delhi High Court</option>
							<option value="Gauhati High Court">Gauhati High Court</option>
							<option value="Gujarat High Court">Gujarat High Court</option>
							<option value="Himachal Pradesh High Court">Himachal Pradesh High Court</option>
							<option value="Jammu & Kashmir High Court">Jammu & Kashmir High Court</option>
							<option value="Jharkhand High Court">Jharkhand High Court</option>
							<option value="Karnataka High Court">Karnataka High Court</option>
							<option value="Kerala High Court">Kerala High Court</option>
							<option value="Madhya Pradesh High Court">Madhya Pradesh High Court</option>
							<option value="Madras High Court">Madras High Court</option>
							<option value="Manipur High Court">Manipur High Court</option>
							<option value="Meghalaya High Court">Meghalaya High Court</option>
							<option value="Orissa High Court">Orissa High Court</option>
							<option value="Patna High Court">Patna High Court</option>
							<option value="Punjab & Haryana High Court">Punjab & Haryana High Court</option>
							<option value="Rajasthan High Court">Rajasthan High Court</option>
							<option value="Sikkim High Court">Sikkim High Court</option>
							<option value="Tripura High Court">Tripura High Court</option>
							<option value="Uttarakhand High Court">Uttarakhand High Court</option>
							<option value="Appellate Tribunal for Electricity (ATE)">Appellate Tribunal for Electricity (ATE)</option>
							<option value="Armed Force Tribunal">Armed Force Tribunal</option>
							<option value="Authority for Advance Rulings">Authority for Advance Rulings</option>
							<option value="Central Electricity Regulatory Commission (CERC)">Central Electricity Regulatory Commission (CERC)</option>
							<option value="Central Administrative Tribunal">Central Administrative Tribunal</option>
							<option value="Company Law Board">Company Law Board</option>
							<option value="Competition Commission of India (CCI)">Competition Commission of India (CCI)</option>
							<option value="Competition Appellate Tribunal (CAT)">Competition Appellate Tribunal (CAT)</option>
							<option value="Copyright Board">Copyright Board</option>
							<option value="Customs Excise And Service Tax Appellate Tribunal">Customs Excise And Service Tax Appellate Tribunal</option>
							<option value="Cyber Appellate Tribunal">Cyber Appellate Tribunal</option>
							<option value="Employees Provident Fund Appellate Tribunal">Employees Provident Fund Appellate Tribunal</option>
							<option value="Income Tax Appellate Tribunal">Income Tax Appellate Tribunal</option>
							<option value="Insurance Regulatory and Development Authority (IRDA)">Insurance Regulatory and Development Authority (IRDA)</option>
							<option value="Intellectual Property Appellate Board">Intellectual Property Appellate Board</option>
							<option value="National Green Tribunal">National Green Tribunal</option>
							<option value="Securities and Exchange Board of India (SEBI)">Securities and Exchange Board of India (SEBI)</option>
							<option value="Telecom Disputes Settlement & Appellate Tribunal (TDSAT)">Telecom Disputes Settlement & Appellate Tribunal (TDSAT)</option>
							<option value="Telecom Regulatory Authority of India (TRAI)">Telecom Regulatory Authority of India (TRAI)</option>
					    </select>
						<div class="clearfix"></div>
		        	</div>

		        	<div class="panel-pt col-md-12 col-sm-12 col-xs-12">
                    	<span class="search-panel padt5px">Party :</span>
                    	<div class="input-right">
                    		<input type="text" name="petitioner" class="form-control">
						    <label class="radio-inline">
                    			<input type="radio" name="judge-field" value="Petitioner">Petitioner
							</label>
						    <label class="radio-inline">
						      	<input type="radio" name="judge-field" value="Respondent">Respondent
						    </label>
						    <label class="radio-inline">
						      	<input type="radio" name="judge-field" value="Not Know" checked>Not Know
						    </label>
                    	</div>
						<div class="clearfix"></div>
                    </div>

                    <div class="panel-pt col-md-6 col-sm-6 col-xs-12">
                    	<span class="search-panel padt5px">Judge :</span>
                    	<div class="input-right">
                    		<input type="text" name="judge" class="form-control">
                    	</div>
						<div class="clearfix"></div>
                    </div>

                    <div class="panel-pt col-md-6 col-sm-6 col-xs-12">
                    	<span class="search-panel padt5px">Judgment :</span>
                    	<div class="input-right">
                    		<input type="text" name="judgment" class="form-control">
                    	</div>
						<div class="clearfix"></div>
                    </div>

                    <div class="panel-pt col-md-6 col-sm-6 col-xs-12">
                    	<span class="search-panel">From :</span>
                    	<div class="input-right">
                    		<input type="text" class="form-control date" name="date" id="from" placeholder="15-05-2016">
                    	</div>
						<div class="clearfix"></div>
                    </div>
                    <div class="panel-pt col-md-6 col-sm-6 col-xs-12">
                    	<span class="search-panel">To :</span>
                    	<div class="input-right">
                    		<input type="text" class="form-control date" name="date" id="to" placeholder="15-05-2016">
                    	</div>
						<div class="clearfix"></div>
                    </div>
                    
                    <!-- <div class="panel-pt col-md-6 col-sm-6 col-xs-12">
                    	<span class="search-panel padt5px">Advocate :</span>
                    	<div class="input-right">
                    		<input type="text" name="advocate" class="form-control">
                    	</div>
						<div class="clearfix"></div>
                    </div> -->
                    <div class="pull-right">
                    	<button id="judgement" class="btn btn-primary">GO</button>
                    </div>
		        </div>
		    </div>
		    <div id="collapse3" class="panel-collapse collapse">
				<div class="panel-heading">
					<h3 class="panel-title"> RULES SEARCH </h3>
				</div>
				
		        <div class="panel-body">
	      			
					<div class="panel-pt col-md-12 col-sm-12 col-xs-12">
	                    <span class="search-panel padt5px">Rule No :</span>
			        	<select class="multipleChosen" multiple="true" id="rules-no">
					        <option value="0/1962">ARMS RULES</option>
					        <option value="2/1954">ARMS RULES 1954</option>
					        <option value="21/1950">MINIMUM WAGES (CENTRAL) RULES</option>
					    </select>
	                </div>
					
	                <div class="panel-pt pull-right">
	                	<button id="rules" class="btn btn-primary">GO</button>
	                </div>
		    	</div>
	    	</div>

	    	<div id="Regulations" class="panel-collapse collapse">
				<div class="panel-heading">
					<h3 class="panel-title"> REGULATIONS SEARCH </h3>
				</div>
				
		        <div class="panel-body">
	      			
					<div class="panel-pt col-md-6 col-sm-6 col-xs-12">
	                    <span class="search-panel padt5px">Year :</span>
			        	<select class="multipleChosen" multiple="true" id="regulation-year">
					        <?php for ($i = 1950; $i < 2010; $i++): ?>
					        	<option value="<?= $i; ?>"> <?= $i; ?></option>
					        <?php endfor; ?>
					    </select>
	                </div>
				    <div class="panel-pt col-md-6 col-sm-6 col-xs-12">
	                    <span class="search-panel padt5px">Subject:</span>
			        	<input type="text" id="regulation-subject" class="form-control select-right">
	                </div>
					
	                <div class="panel-pt pull-right">
	                	<button id="regulation-search" class="btn btn-primary">GO</button>
	                </div>
		    	</div>
	    	</div>
		    <div id="collapse4" class="panel-collapse collapse">
	        	<div class="panel-heading">
					<h3 class="panel-title"> FORMS SEARCH </h3>
				</div>
				
		        <div class="panel-body">
	      			<div class="panel-pt">
	      				<ul class="nav nav-tabs">
						    <li class="active"><a data-toggle="tab" href="#home">Income-tax Forms</a></li>
						    <li><a data-toggle="tab" href="#menu1">Other Forms</a></li>
						</ul>

						<div class="tab-content">
						    <div id="home" class="tab-pane fade in active">
						        <div class="panel-pt col-md-12 col-sm-12 col-xs-12">
				                    <span class="search-panel padt5px">Form No.:</span>
						        	<input type="text" name="form-no" class="form-control select-right">
				                </div>
				                <div class="panel-pt pull-right">
				                	<button class="form-search" class="btn btn-primary">GO</button>
				                </div>
						    </div>
						    <div id="menu1" class="tab-pane fade">
						        
						        <div class="panel-pt col-md-12 col-sm-12 col-xs-12">
				                    <span class="search-panel padt5px">Search :</span>
						        	<input type="text" name="des" class="form-control select-right">
				                </div>
				                <div class="panel-pt pull-right">
				                	<button class="form-search" class="btn btn-primary">GO</button>
				                </div>
						    </div>
						</div>
	      			</div>
	        	</div>
	    	</div>	
	    	<div id="collapse5" class="panel-collapse collapse">
		        <div class="panel-heading">
					<h3 class="panel-title"> CIRCULARS SEARCH </h3>
				</div>
				
		        <div class="panel-body">
		        	
				    <div class="panel-pt col-md-6 col-sm-6 col-xs-12">
	                    <span class="search-panel padt5px">Section No :</span>
			        	<input type="text" name="circular_section_no" class="form-control select-right">
	                </div>
				    <div class="panel-pt col-md-6 col-sm-6 col-xs-12">
	                    <span class="search-panel padt5px">Subject :</span>
			        	<input type="text" name="circular_subject" class="select-right form-control" placeholder="Search" />
	                </div>
	                <div class="panel-pt col-md-12 col-sm-12 col-xs-12">       
						<span class="search-panel padt5px">Year :</span>
                    	<select name="year_of_issue" class="multipleChosen" multiple="true">
                    		<?php 
                    			for ($i=2016; $i >=1922 ; $i--) { 
                    		?>
					        <option value="<?php echo $i;?>"><?php echo $i;?></option>
					        <?php }?>
						</select>	
						<div class="clearfix"></div>
		        	</div>
	                
		        	<div class="pull-right">
                    	<button id="circular_search" class="btn btn-primary">GO</button>
                    </div>
		        </div>
		    </div>
		    <div id="collapse6" class="panel-collapse collapse">
		    	<div class="panel-heading">
					<h3 class="panel-title"> FINANCE ACTS SEARCH </h3>
				</div>
				
		        <div class="panel-body">
		      	
		        </div>
		    </div>

		    <!-- Policy Searching -->
		    <div id="Policy" class="panel-collapse collapse">
		    	<div class="panel-heading">
					<h3 class="panel-title"> POLICIES SEARCH </h3>
				</div>
				
		        <div class="panel-body">
		      		<div class="panel-pt col-md-6 col-sm-6 col-xs-12">
	                    <span class="search-panel padt5px">Title :</span>
			        	<input type="text" name="policy" class="form-control select-right">
	                </div>
				    <div class="panel-pt col-md-6 col-sm-6 col-xs-12">
	                    <span class="search-panel padt5px">Subject :</span>
			        	<input type="text" name="policy_detail" class="select-right form-control" placeholder="Search" />
	                </div>
	                
		        	<div class="pull-right">
                    	<button id="policy_search" class="btn btn-primary">GO</button>
                    </div>
		        </div>
		    </div>
		    <div id="Notification" class="panel-collapse collapse">
		    	<div class="panel-heading">
					<h3 class="panel-title"> NOTIFICATIONS SEARCH </h3>
				</div>
				
		        <div class="panel-body">
		      		<div class="panel-pt col-md-6 col-sm-6 col-xs-12">
	                    <span class="search-panel padt5px">Noti No :</span>
			        	<input type="text" name="noti_no" class="form-control select-right">
	                </div>
				    <div class="panel-pt col-md-6 col-sm-6 col-xs-12">
	                    <span class="search-panel padt5px">Subject :</span>
			        	<input type="text" name="noti_subject" class="select-right form-control" placeholder="Search" />
	                </div>
	                <div class="panel-pt col-md-12 col-sm-12 col-xs-12">       
						<span class="search-panel padt5px">Year :</span>
                    	<select name="noti_date" class="multipleChosen" multiple="true">
                    		<?php 
                    			for ($i=2016; $i >=1922 ; $i--) { 
                    		?>
					        <option value="<?php echo $i;?>"><?php echo $i;?></option>
					        <?php }?>
						</select>	
						<div class="clearfix"></div>
		        	</div>
	                
		        	<div class="pull-right">
                    	<button id="noti_search" class="btn btn-primary">GO</button>
                    </div>
		        </div>
		    </div>
			<div class="post-info">
				
				<div id="results"></div>
			</div>
			
		</div>
	</div>
	<!-- end poster -->

</div>

<script type="text/javascript">
	jQuery(document).ready(function($) {
		jQuery(".multipleChosen").chosen({
		      placeholder_text_multiple: "Choose anything" //placeholder
			});
		jQuery(".date").datepicker("option", "dateFormat", "dd-mm-yyyy");
		jQuery('#accordion .panel-title a').on('click', function(event) {
			$(".panel-heading.active").removeClass('active');
			$(this).parent().parent().toggleClass('active');

		});
	});
</script>
<?php get_footer(); ?>