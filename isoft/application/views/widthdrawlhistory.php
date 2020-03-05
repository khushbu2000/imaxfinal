

<?php $this->load->view('header');?>
<?php $this->load->view('pageheader')?>
<?php $this->load->view('leftmenu')?>

        
  <div id="container" style="height:200px;width:1320px;background-color:white;margin-left:10%;">     
    <div class="row">
	<div class="col-md-12" style="height:100px;width:1320px;margin-top:5%;">
<div class="section breadcrumb-page-title padding-lg">
<div class="section-body">
<div class="col-md-6 hidden-sm hidden-xs">
<ul class="breadcrumb bg-white text-left no-margin padding-t-sm">
	<li><a href="dashboard.aspx" class="text-mg"><i class="fa fa-home fa-lg"></i></a></li>
		<li><a href="dashboard.aspx" class="text-mg">Dashboard</a></li>
		<li class="active text-dg">My Withdrawal History</li>
		</ul>
		</div>
		<div class="col-md-6 col-sm-12 col-xs-12" >
				<h5 class="text-right no-margin text-italic text-normal font-12">MadiRatnam Gold User Panel</h5>
				<h1 class="text-right no-margin"><i class="fa fa-table"></i>My Withdrawal History</h1>
				</div>
			</div>
		</div>
						</div>
					</div>
				</div>
                
					
					<div class="col-md-12 col-sm-12 col-xs-12" style="margin-left:15%;width:1260px;" >
						<div class="section">
							<div class="section-header">
								<h5>My Withdrawal History </h5>
							</div>
							<div class="section-body">
								<div class="table-responsive">
                                    
									
                                                 <table class="table table-bordered table-hover" cellspacing="0" width="100%">
                                                
                                                    <thead>
                                                        <tr style="background-color:#ED174C; color:white">
                                                            <th>Transtion No</th>
                                                            <th>MemberId</th>
                                                            <th>Member Name</th>
                                                            <th>Transaction Date</th>
                                                            <th>Description</th>                                                            
                                                            <th>Dr Amount</th>
                                                            <th>Deduction</th>
                                                            <th>Payable Amount </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        
                                                <tr>
                                                    <td>1</td>
                                                    <td>sakir786</td>
                                                    <td>mohd sakir</td>
                                                    <td>05/Jan/2020</td>
                                                    <td>Income Cash Request Processing</td>                                                    
                                                    
                                                    <td><span id="ctl00_ContentPlaceHolder1_ll_ctrl0_lblWithdrawal">1700.000</span></td>
                                                    <td><span id="ctl00_ContentPlaceHolder1_ll_ctrl0_lblDeduction">170.00</span></td>
                                                    <td><span id="ctl00_ContentPlaceHolder1_ll_ctrl0_lblPay">1530.000</span></td>
                                                </tr>
                                            
                                                <tr>
                                                    <td>2</td>
                                                    <td>sakir786</td>
                                                    <td>mohd sakir</td>
                                                    <td>15/Dec/2019</td>
                                                    <td>Income Cash Request Paid</td>                                                    
                                                    
                                                    <td><span id="ctl00_ContentPlaceHolder1_ll_ctrl1_lblWithdrawal">1500.000</span></td>
                                                    <td><span id="ctl00_ContentPlaceHolder1_ll_ctrl1_lblDeduction">150.00</span></td>
                                                    <td><span id="ctl00_ContentPlaceHolder1_ll_ctrl1_lblPay">1350.000</span></td>
                                                </tr>
                                            
                                                <tr>
                                                    <td>3</td>
                                                    <td>sakir786</td>
                                                    <td>mohd sakir</td>
                                                    <td>30/Nov/2019</td>
                                                    <td>Income Cash Request Paid</td>                                                    
                                                    
                                                    <td><span id="ctl00_ContentPlaceHolder1_ll_ctrl2_lblWithdrawal">3000.000</span></td>
                                                    <td><span id="ctl00_ContentPlaceHolder1_ll_ctrl2_lblDeduction">300.00</span></td>
                                                    <td><span id="ctl00_ContentPlaceHolder1_ll_ctrl2_lblPay">2700.000</span></td>
                                                </tr>
                                            
                                                    </tbody>
                                                     <tfoot>
                                                        <tr>
                                                            <th>Total</th>
                                                            <th></th><th></th>                                                            
                                                            <th></th><th></th>
                                                            <th><span id="ctl00_ContentPlaceHolder1_ll_lblSumDr">6200.000</span></th>
                                                            <th><span id="ctl00_ContentPlaceHolder1_ll_lblSumDed">620.00</span></th>
                <th><span id="ctl00_ContentPlaceHolder1_ll_lblSumPay">5580.000</span></th>
                  </tr>
                  </tfoot>
                   </table>
                        
				</div>
							</div>
						</div>
					</div>
			
</div>
      <?php $this->load->view('footer');?>