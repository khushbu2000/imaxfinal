 <div class="sidebar sidebar-v1">
            
            <div id="ctl00_User_Panel">
	
                <ul class="list-unstyled sidebar-menu">
                    <li>
                        <a href="<?php echo base_url();?>index.php" class="list-link active">
                            <i class="fa fa-dashboard menu-icon" aria-hidden="true"></i>Dashboard						
                            <i class="fa fa-angle-right pull-right arrow"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="list-link">
                            <i class="fa fa-laptop menu-icon" aria-hidden="true"></i>Profile						
                            <i class="fa fa-angle-right pull-right arrow"></i>
                        </a>
                        <ul class="sub-menu">
                            <li class="sub-list"><a href="<?php echo base_url();?>index.php/welcome/editprofile"><i class="fa fa-circle-o list-icon"></i><span>Edit Profile</span></a></li>
                            <li class="sub-list"><a href="<?php echo base_url();?>index.php/welcome/changeloginpassword"><i class="fa fa-circle-o list-icon"></i><span>Change Login Password</span></a></li>
                            <li class="sub-list"><a href="<?php echo base_url();?>index.php/welcome/changetrpassword<?php $this->load->view("header");?>
<?php $this->load->view("pageheader");?>

<div id="container">

  <div id="ctl00_ContentPlaceHolder1_UpdatePanel1">
	
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section">
                        <div class="section-header">
                            <h5>Profile Details</h5>
                        </div>
                        <div class="section-body">
                            <div id="ctl00_ContentPlaceHolder1_tbl">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">User Name ::</label>
                                            <div class="col-sm-10">
                                                <div class="form-group has-success has-feedback">
                                                    <input name="ctl00$ContentPlaceHolder1$txtMemberId" type="text" value="sakir786" id="ctl00_ContentPlaceHolder1_txtMemberId" disabled="disabled" class="form-control" />
                                                    <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                                                    <span id="inputSuccess2Status" class="sr-only">(success)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" align="center">
                                    <div class="col-lg-2 col-md-12 col-sm-2 col-xs-12">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Introducer User Id ::</label>
                                        <div class="col-sm-10">
                                            <div class="form-group has-success has-feedback">
                                                <input name="ctl00$ContentPlaceHolder1$txtIntroducerId" type="text" value="SHANU786" onchange="javascript:setTimeout(&#39;__doPostBack(\&#39;ctl00$ContentPlaceHolder1$txtIntroducerId\&#39;,\&#39;\&#39;)&#39;, 0)" onkeypress="if (WebForm_TextBoxKeyHandler(event) == false) return false;" id="ctl00_ContentPlaceHolder1_txtIntroducerId" disabled="disabled" class="form-control" />
                                                <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                                                <span id="Span1" class="sr-only">(success)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="display:none">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Introducer Name ::</label>
                                        <div class="col-sm-10">
                                            <div class="form-group has-success has-feedback">
                                                <input name="ctl00$ContentPlaceHolder1$txtIntroName" type="text" value="mohd shakir" maxlength="100" id="ctl00_ContentPlaceHolder1_txtIntroName" disabled="disabled" class="form-control" />
                                                <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                                                <span id="Span2" class="sr-only">(success)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Member Name ::</label>
                                        <div class="col-sm-10">
                                            <div class="form-group has-success has-feedback">
                                                <input name="ctl00$ContentPlaceHolder1$txtMemberName" type="text" value="mohd sakir" id="ctl00_ContentPlaceHolder1_txtMemberName" disabled="disabled" class="form-control" OnKeyPress="return containsAlphabets(event)" />
                                                <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                                                <span id="Span3" class="sr-only">(success)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Mobile No. ::</label>
                                        <div class="col-sm-10">
                                            <div class="form-group has-success has-feedback">
                                                <input name="ctl00$ContentPlaceHolder1$txtMobileNumber" type="text" value="9838620786" maxlength="10" id="ctl00_ContentPlaceHolder1_txtMobileNumber" disabled="disabled" onchange="CheckNumericValue(e)" class="form-control" OnKeyPress="return CheckNumericValue(event)" />
                                                <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                                                <span id="Span7" class="sr-only">(success)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">E-mail Id ::</label>
                                        <div class="col-sm-10">
                                            <div class="form-group has-success has-feedback">
                                                <input name="ctl00$ContentPlaceHolder1$txtEmail" type="text" value="mshan085@gmail.com" id="ctl00_ContentPlaceHolder1_txtEmail" class="form-control" />
                                                <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                                                <span id="Span4" class="sr-only">(success)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Country ::</label>
                                        <div class="col-sm-10">
                                            <div class="form-group has-success has-feedback">
                                                <select name="ctl00$ContentPlaceHolder1$ddlCountry" onchange="javascript:setTimeout(&#39;__doPostBack(\&#39;ctl00$ContentPlaceHolder1$ddlCountry\&#39;,\&#39;\&#39;)&#39;, 0)" id="ctl00_ContentPlaceHolder1_ddlCountry" class="form-control">
		<option value="Select Country ...">Select Country ...</option>
	

	</select>
                                                <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                                                <span id="Span5" class="sr-only">(success)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Acc. no. ::</label>
                                        <div class="col-sm-10">
                                            <div class="form-group has-success has-feedback">
                                                <input name="ctl00$ContentPlaceHolder1$txtMemberAccountNumber" type="text" value="916010063341539" onchange="javascript:setTimeout(&#39;__doPostBack(\&#39;ctl00$ContentPlaceHolder1$txtMemberAccountNumber\&#39;,\&#39;\&#39;)&#39;, 0)" onkeypress="if (WebForm_TextBoxKeyHandler(event) == false) return false;" id="ctl00_ContentPlaceHolder1_txtMemberAccountNumber" class="form-control" />
                                                <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                                                <span id="Span6" class="sr-only">(success)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Bank Name ::</label>
                                        <div class="col-sm-10">
                                            <div class="form-group has-success has-feedback">
                                                <select name="ctl00$ContentPlaceHolder1$ddlBank" id="ctl00_ContentPlaceHolder1_ddlBank" class="form-control">
		<option selected="selected" value="ALLAHABAD BANK">ALLAHABAD BANK</option>
		

	</select>
                                                <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                                                <span id="Span8" class="sr-only">(success)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">IFSC Code ::</label>
                                        <div class="col-sm-10">
                                            <div class="form-group has-success has-feedback">
                                                <input name="ctl00$ContentPlaceHolder1$txtIFSCode" type="text" maxlength="50" id="ctl00_ContentPlaceHolder1_txtIFSCode" class="form-control" />
                                                <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                                                <span id="Span9" class="sr-only">(success)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Bank Branch ::</label>
                                        <div class="col-sm-10">
                                            <div class="form-group has-success has-feedback">
                                                <input name="ctl00$ContentPlaceHolder1$txtMemberBankBranch" type="text" id="ctl00_ContentPlaceHolder1_txtMemberBankBranch" class="form-control" />
                                                <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                                                <span id="Span10" class="sr-only">(success)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Pan Number ::</label>
                                        <div class="col-sm-10">
                                            <div class="form-group has-success has-feedback">
                                                <input name="ctl00$ContentPlaceHolder1$txtMemberPANNumber" type="text" value="BJYPS1237H" maxlength="15" onchange="javascript:setTimeout(&#39;__doPostBack(\&#39;ctl00$ContentPlaceHolder1$txtMemberPANNumber\&#39;,\&#39;\&#39;)&#39;, 0)" onkeypress="if (WebForm_TextBoxKeyHandler(event) == false) return false;" id="ctl00_ContentPlaceHolder1_txtMemberPANNumber" disabled="disabled" class="form-control" />
                                                <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                                                <span id="Span11" class="sr-only">(success)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">State ::</label>
                                        <div class="col-sm-10">
                                            <div class="form-group has-success has-feedback">
                                                <select name="ctl00$ContentPlaceHolder1$ddlState" id="ctl00_ContentPlaceHolder1_ddlState" class="form-control">
		<option value="Select State ...">Select State ...</option>
		<option value="11">ANDHRA PRADESH</option>
		<option value="32">ANDOMAN NIKOBAR</option>
		<option value="27">ARUNACHAL PRADESH</option>
		<option value="28">ASSAM</option>
		<option value="6">BIHAR</option>
		<option value="30">CHANDIGARH</option>
		<option value="18">CHHATTISGARH</option>
		<option value="36">Dadra and Nagar Haveli </option>
		<option value="33">Daman and Diu</option>
		<option value="34">Goa</option>
		<option value="20">GUJARAT</option>
		<option value="7">HARYANA</option>
		<option value="17">HIMANCHAL PRADESH</option>
		<option value="13">J &amp; K</option>
		<option value="12">JHAR KHAND</option>
		<option value="14">KARNATAKA</option>
		<option value="15">KERALA</option>
		<option value="31">LAKSHADWEEP</option>
		<option value="3">Madhyapradesh</option>
		<option value="9">MAHARASHTRA</option>
		<option value="26">MANIPUR</option>
		<option value="22">MEGHALAYA</option>
		<option value="23">MIJORAM</option>
		<option value="24">NAGALAND</option>
		<option value="5">NEW DELHI</option>
		<option value="10">ORISSA</option>
		<option value="2">PUNJAB</option>
		<option value="8">RAJASTHAN</option>
		<option value="21">SIKKIM</option>
		<option value="16">TAMIL NADU</option>
		<option value="35">Telangana</option>
		<option value="25">TRIPURA</option>
		<option selected="selected" value="1">UTTAR PRADESH</option>
		<option value="4">UTTRAKHAND</option>
		<option value="19">WEST BENGAL</option>

	</select>                                                
                                                <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                                                <span id="Span12" class="sr-only">(success)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Address ::</label>
                                        <div class="col-sm-10">
                                            <div class="form-group has-success has-feedback">
                                                <textarea name="ctl00$ContentPlaceHolder1$txtAdd" rows="2" cols="20" id="ctl00_ContentPlaceHolder1_txtAdd" disabled="disabled" class="form-control" style="height:50px;">
Plot.no.13.arazi no.1035 shivpuri kakadew.kanpur</textarea>
                                                <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                                                <span id="Span13" class="sr-only">(success)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Pin Code ::</label>
                                        <div class="col-sm-10">
                                            <div class="form-group has-success has-feedback">
                                                <input name="ctl00$ContentPlaceHolder1$txtPincode" type="text" value="0" maxlength="6" id="ctl00_ContentPlaceHolder1_txtPincode" class="form-control" onchange="CheckNumericValue(e)" OnKeyPress="return CheckNumericValue(event)" />
                                                <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                                                <span id="Span14" class="sr-only">(success)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr />
                            <div class="row" align="center">
                                <div class="col-lg-2 col-md-12 col-sm-2 col-xs-12">
                                    <input type="submit" name="ctl00$ContentPlaceHolder1$btnUpdate" value="Update" onclick="return Validate();" id="ctl00_ContentPlaceHolder1_btnUpdate" class="btn btn-primary btn-rounded margin-b-xs col-md-12" style="background-color:Green;" />
                                    
                                </div>
                                <div class="col-lg-2 col-md-12 col-sm-2 col-xs-12">
                                    <input type="submit" name="ctl00$ContentPlaceHolder1$btnClose" value="Close" id="ctl00_ContentPlaceHolder1_btnClose" class="btn btn-theme btn-rounded margin-b-xs col-md-12" />
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<i class="fa fa-circle-o list-icon"></i><span>Change Tr. Password</span></a></li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="javascript:;" class="list-link">
                            <i class="fa fa-flask menu-icon" aria-hidden="true"></i>My Partner Report
						
                            <i class="fa fa-angle-right pull-right arrow"></i>
                        </a>
                        <ul class="sub-menu">
                            <li class="sub-list"><a href="<?php echo base_url();?>assets/DirectMemberDownline.aspx"><i class="fa fa-circle-o list-icon"></i><span>Direct Reffral</span></a></li>
                            <li class="sub-list"><a href="<?php echo base_url();?>assets/Downline.aspx"><i class="fa fa-circle-o list-icon"></i><span>My Level Downline</span></a></li>
                            <li class="sub-list"><a href="<?php echo base_url();?>assets/TotalDownline.aspx"><i class="fa fa-circle-o list-icon"></i><span>My Total Downline</span></a></li>
                        </ul>
                    </li>

                    
                    <li>
                        <a href="javascript:;" class="list-link">
                            <i class="fa fa-edit menu-icon" aria-hidden="true"></i>My Investments <span class="pull-right">
                                <!--<span class="label label-theme pull-left">5+</span>-->
                                <i class="fa fa-angle-right arrow margin-l-sm"></i></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="sub-list"><a href="<?php echo base_url();?>assets/MyInvetment.aspx"><i class="fa fa-circle-o list-icon"></i><span>My Investments</span></a></li>
                            <li class="sub-list"><a href="<?php echo base_url();?>assets/RechargeDetail.aspx"><i class="fa fa-circle-o list-icon"></i><span>TopUp Details </span></a></li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="javascript:;" class="list-link">
                            <i class="fa fa-clone menu-icon" aria-hidden="true"></i>Income Reports
						
                            <i class="fa fa-angle-right pull-right arrow"></i>
                        </a>
                        <ul class="sub-menu">
                            <li class="sub-list"><a href="<?php echo base_url();?>assets/ROIReport.aspx"><i class="fa fa-circle-o list-icon"></i><span>CashBack Income</span></a></li>
                            
                            <li class="sub-list"><a href="<?php echo base_url();?>assets/LevelIncome.aspx"><i class="fa fa-circle-o list-icon"></i><span>Level Income</span></a></li>
                            
                            <li class="sub-list"><a href="<?php echo base_url();?>assets/TranstionHistory.aspx"><i class="fa fa-circle-o list-icon"></i><span>Transtion History</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="list-link">
                            <i class="fa fa-files-o menu-icon" aria-hidden="true"></i>Withdrawal Request
						
                            <i class="fa fa-angle-right pull-right arrow"></i>
                        </a>
                        <ul class="sub-menu">
                            <li class="sub-list"><a href="<?php echo base_url();?>assets/WithdrawalRequest.aspx"><i class="fa fa-circle-o list-icon"></i><span>Working Wallet</span></a></li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="list-link">
                            <i class="fa fa-files-o menu-icon" aria-hidden="true"></i>Ticket Area
						
                            <i class="fa fa-angle-right pull-right arrow"></i>
                        </a>
                        <ul class="sub-menu">
                            <li class="sub-list"><a href="<?php echo base_url();?>assetscompose.aspx"><i class="fa fa-circle-o list-icon"></i><span>Compose</span></a></li>
                            <li class="sub-list"><a href="<?php echo base_url();?>assetsInbox.aspx"><i class="fa fa-circle-o list-icon"></i><span>Inbox</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="list-link">
                            <i class="fa fa-files-o menu-icon" aria-hidden="true"></i>My Withdrawals History
						
                            <i class="fa fa-angle-right pull-right arrow"></i>
                        </a>
                        <ul class="sub-menu">
                            <li class="sub-list"><a href="<?php echo base_url();?>assetsWithdrawalHistory.aspx"><i class="fa fa-circle-o list-icon"></i><span>Withdrawals History</span></a></li>
                            
                        </ul>
                    </li>
                    <li><a href="<?php echo base_url();?>assetsUserRDList.aspx" class="list-link"><i class="fa fa-picture-o menu-icon" aria-hidden="true"></i>My Gold RD</a></li>

                    <li><a href="<?php echo base_url();?>assetsmadiratnamppt.pdf" target="_blank" class="list-link"><i class="fa fa-picture-o menu-icon" aria-hidden="true"></i>presentation</a></li>
                    <li><a href="Logout.aspx" class="list-link"><i class="fa fa-picture-o menu-icon" aria-hidden="true"></i>Logout</a></li>


                </ul>
            
</div>
        </div>