<?php $this->load->helper('form'); ?>

<div class="container">    
    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
        <div class="panel panel-info" >
            <div class="panel-heading">
                <div class="panel-title"><img src="<?php echo base_url('assets/img/logo-itsb.png') ?>"/></div>
                </div>     
                
                <div style="padding-top:30px" class="panel-body" >
                
                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                <?php echo form_open('main/login');?>   
                <!--<form id="loginform" class="form-horizontal" role="form" method="post" action="main/login">-->
                
                <div style="margin-bottom: 25px" class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input id="login-username" type="text" class="form-control" name="log-username" placeholder="username">                                        
                </div>
                
                <div style="margin-bottom: 25px" class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input id="login-password" type="password" class="form-control" name="log-password" placeholder="password">
                </div>
                
                
                <div style="margin-top:10px" class="form-group">
                <!-- Button -->
                
                <div class="col-sm-12 controls">
                <input type="submit" class="btn btn-success" class="form-control"/>
                </div>
                </div>
                
                
                <div class="form-group">
                <div class="col-md-12 control">
                <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                <h8>Copyright ITSB 2014</h8> 
                </a>
                </div>
                </div>
                </div>    
                </form>
        </div>
    
    
    
    
    </div> 
</div>
