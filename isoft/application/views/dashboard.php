

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php $this->load->view("header");?>
<?php $this->load->view("pageheader");?>
        <!-- Left Sidebar -->
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
                            <li class="sub-list"><a href="<?php echo base_url();?>assets/ChangePassword.aspx?Pass=1"><i class="fa fa-circle-o list-icon"></i><span>Change Login Password</span></a></li>
                            <li class="sub-list"><a href="<?php echo base_url();?>assets/ChangePassword.aspx?Pass=2"><i class="fa fa-circle-o list-icon"></i><span>Change Tr. Password</span></a></li>
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
                            <li class="sub-list">
                                <a href="<?php echo base_url();?>index.php/welcome/login"><i class="fa fa-circle-o list-icon"></i><span>Compose</span></a></li>
                            <li class="sub-list">
                                <a href="<?php echo base_url();?>index.php/welcome/login"><i class="fa fa-circle-o list-icon"></i><span>Inbox</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="list-link">
                            <i class="fa fa-files-o menu-icon" aria-hidden="true"></i>My Withdrawals History
						
                            <i class="fa fa-angle-right pull-right arrow"></i>
                        </a>
                        <ul class="sub-menu">
                            <li class="sub-list"><a href="<?php echo base_url();?>index.php/welcome/widthdrawlhistory"><i class="fa fa-circle-o list-icon"></i><span>Withdrawals History</span></a></li>
                            
                        </ul>
                    </li>
                    <li><a href="<?php echo base_url();?>assetsUserRDList.aspx" class="list-link"><i class="fa fa-picture-o menu-icon" aria-hidden="true"></i>My Gold RD</a></li>

                    <li><a href="<?php echo base_url();?>assets/img/real estate-converted (1).pdf" target="_blank" class="list-link"><i class="fa fa-picture-o menu-icon" aria-hidden="true"></i>presentation</a></li>
                    <li><a href="#" class="list-link"><i class="fa fa-picture-o menu-icon" aria-hidden="true"></i>Logout</a></li>


                </ul>
            
</div>
        </div>
        <!-- Main wrapper -->
        <div class="main-wrapper bg-lg page-animated">
            <form name="aspnetForm" method="post" action="./dashboard.aspx" id="aspnetForm" autocomplete="off">
<div>
<input type="hidden" name="ctl00_ToolkitScriptManager1_HiddenField" id="ctl00_ToolkitScriptManager1_HiddenField" value="" />
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwULLTEwNDE0NjAwNTQPZBYCZg9kFgoCAw8PFgIeBFRleHQFCm1vaGQgc2FraXJkZAIFDw8WAh8ABQhzYWtpcjc4NmRkAgcPDxYCHwAFBFVzZXJkZAILDw8WAh4HVmlzaWJsZWdkZAIND2QWAgIDD2QWAgIBD2QWAmYPZBYWAgMPDxYCHwAFDDEyNjY1LjAwIOKCuWRkAgUPDxYCHwAFAjU4ZGQCBw8PFgIfAAUCMzFkZAIJDw8WAh8ABQgxMDAwMC4wMGRkAgsPDxYCHwAFBzY0NjUuMDBkZAINDw8WAh8ABQc2MjAwLjAwZGQCDw8PFgIfAAUBMGRkAhEPDxYCHwAFCDEwMDAwLjAwZGQCEw8PFgIfAAUIMTAwMDAuMDBkZAIVDw8WAh8ABQQwLjAwZGQCFw8PFgIfAAUEMC4wMGRkZOvqSprFUsaVesxtPXBglV1aGiV4pcdgTaAH/SuwlKBB" />
</div>

<script type="text/javascript">
//<![CDATA[
var theForm = document.forms['aspnetForm'];
if (!theForm) {
    theForm = document.aspnetForm;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
//]]>
</script>


<script src="<?php echo base_url();?>assets/WebResource.axd?d=Xur8kmXgRagg4_dUpWMYoLFo3IYFFqgMWoZqtFkDs_hmpJUnq1kWc4kdjGwTeAO0fXrnl5RhAA7fp-Ci9V8EbKkkocLals5z5iptMpBcy4Q1&amp;t=637100578300000000" type="text/javascript"></script>


<script src="<?php echo base_url();?>assets/ScriptResource.axd?d=YrFx4DQPFCb5gVCe29y9FXZv2_Mb7ydK08LF1FVIIkGpYbOsA_umnHAf9qXgqMVo1P1JO1LaR9Ya4zPOLHHx2RWfmTDhHKDeIpB-whYoXtNcBMOrleD2p5RBrxDfxRkyP2n3uc1M3EO9E8q3VSwQAg2&amp;t=ffffffffec54f2d7" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[
if (typeof(Sys) === 'undefined') throw new Error('ASP.NET Ajax client-side framework failed to load.');
//]]>
</script>

<script src="<?php echo base_url();?>assets/ScriptResource.axd?d=6ffgHgVkhXje36QHpv-mG1-R1Yq9l8zKVuNMonMowsQFStiZmPpfhbTTfeRsBN5baoBlaMcQtZ42Eau2e5vslOV7ikuLtZVfhcu8guCdJUciYLo7gEz8J9yQzmduea-5Q_D0N4PjGRiku1tcMngR_Q2&amp;t=ffffffffec54f2d7" type="text/javascript"></script>
<div>

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="B543B226" />
	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEdAALO/5uM7pusP2QcehmRBLgpbKDK5NUBY57AiGUWDuIbfGiN2/lqP96sd51gknBQPXbQMT+rFAOob5OQs2ZS4NFu" />
</div>
                <script type="text/javascript">
//<![CDATA[
Sys.WebForms.PageRequestManager._initialize('ctl00$ToolkitScriptManager1', 'aspnetForm', ['tctl00$ContentPlaceHolder1$UpdatePanel',''], [], [], 1000000000, 'ctl00');
//]]>
</script>

                


                
    <!--===========================Popup Box ==========================================-->
    &nbsp;<div id="ctl00_ContentPlaceHolder1_UpdatePanel">
	
            <div class="row" style="min-height: 1000px; background: url('https://media.giphy.com/media/12PKjIESkvfXri/giphy.gif'); background-size: cover">
              <?php $this->load->view("body");?>
                <div class="clearfix"></div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 dashboard-widgets-box">
                    <div class="section" style="background: none">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 dashboard-widgets-box">
                            <div class="section-body">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 dashboard-widgets-box" style="background: #1e1e1e; color: goldenrod; text-transform: uppercase; padding: 10px; border-radius: 5px;">
         <h4 class="text-uppercase text-center" style="padding: 10px; background: #03A9F4; color: #fff;">Statistics</h4>
          <div class="clearfix"></div>
                                    <br />

                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 dashboard-widgets-box">
                                        <div id="saleChart" class="height-200"></div>
                                        <h5 class="text-center">Visitors Report</h5>
                                    </div>
                                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 dashboard-widgets-box">
                                        <small>Gold Graf of Mining and Trading industry.</small>
                                        <div id="pieChart" class="col-xs-12 no-padding height-200"></div>
                                        <h5><b>Last 4 Year Turn Over</b></h5>
                                    </div>
                                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 dashboard-widgets-box">
                                        <div class="progress progress-xs margin-t-b-xs no-border-radius">
                                            <div class="progress-bar progress-bar-theme" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%"></div>
                                        </div>
                                        <div>
                                            <p class="inline-block">Total Turn Over</p>
                                            <p class="pull-right">90%</p>
                                        </div>
                                        <div class="progress progress-xs margin-t-b-xs no-border-radius">
                                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100" style="width: 82%"></div>
                                        </div>
                                        <div>
                                            <p class="inline-block">Yearly Turn Over</p>
                                            <p class="pull-right">82%</p>
                                        </div>
                                        <div class="progress progress-xs margin-t-b-xs no-border-radius">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
                                        </div>
                                        <div>
                                            <p class="inline-block">Monthly Turn Over</p>
                                            <p class="pull-right">70%</p>
                                        </div>
                                        <div class="progress progress-xs margin-t-b-xs no-border-radius">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%"></div>
                                        </div>
                                        <div>
                                            <p class="inline-block">Weekly Turn Over</p>
                                            <p class="pull-right">65%</p>
                                        </div>
                                        <div class="progress progress-xs margin-t-b-xs no-border-radius">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%"></div>
                                        </div>
                                        <div>
                                            <p class="inline-block">Today Active Visitors</p>
                                            <p class="pull-right">78%</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <style>
                    body.strawberry-theme .section .section-body {
                        padding: 0px !important;
                    }
                </style>
                <style>
                    .inner1 {
                        height: 120px;
                        width: 120px;
                        padding: 27px 6px;
                        border: 13px solid #ED174C;
                        border-radius: 50%;
                        margin: 25px 10px 20px 75px;
                      box-shadow:0px 0px 8px 1px #0000009e
                    }

                    .inner2 {
                        height: 120px;
                        width: 120px;
                        padding: 27px 6px;
                        border: 13px solid #00a65a;
                        border-radius: 50%;
                        margin: 25px 10px 20px 75px;
                        box-shadow:0px 0px 8px 1px #0000009e
                    }

                    body.strawberry-theme .main-wrapper {
                        margin-top: 30px !important;
                        padding: 0px !important;
                    }

                    body.strawberry-theme .footer {
                        margin-left: 0px !important;
                        background: #000;
                        color: #fff;
                    }

                    @Media (max-width: 995px) {
                        .inner1 {
                            height: 100px;
                            width: 100px;
                            padding: 27px 6px;
                            border: 13px solid #ED174C;
                            border-radius: 50%;
                            margin: 25px 10px 20px 10px;
                           box-shadow:0px 0px 8px 1px #0000009e
                        }

                        .inner2 {
                            height: 100px;
                            width: 100px;
                            padding: 27px 6px;
                            border: 13px solid #00a65a;
                            border-radius: 50%;
                            margin: 25px 10px 20px 10px;
                            box-shadow:0px 0px 8px 1px #0000009e
                        }
                    }
                </style>
                <br />
                <br />
        
</div>

                
            

<script type="text/javascript">
//<![CDATA[
(function() {var fn = function() {$get("ctl00_ToolkitScriptManager1_HiddenField").value = '';Sys.Application.remove_init(fn);};Sys.Application.add_init(fn);})();//]]>
</script>
</form>
        </div>

        <!-- Settings menu -->


        <!-- Footer -->
       <?php $this->load->view("footer");?>