<!DOCTYPE html>
<html>
    <head>
        <title>Zotra | Admin</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="icon" type="image/png" href="<?php echo site_url(); ?>assets/images/logo1.png" />
          <link rel="stylesheet" type="text/css" href="<?php echo site_url();?>assets/css/vendor.css">
        <link rel="stylesheet" type="text/css" href="<?php echo site_url();?>assets/css/flat-admin.css">

        <!-- Theme -->
        <link rel="stylesheet" type="text/css" href="<?php echo site_url();?>assets/flat/css/theme/blue-sky.css">
        <link rel="stylesheet" type="text/css" href="<?php echo site_url();?>assets/flat/css/theme/blue.css">
        <link rel="stylesheet" type="text/css" href="<?php echo site_url();?>assets/flat/css/theme/red.css">
        <link rel="stylesheet" type="text/css" href="<?php echo site_url();?>assets/flat/css/theme/yellow.css">
        <script src="<?php echo site_url(); ?>assets/js/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo site_url(); ?>assets/js/parsley.min.js" type="text/javascript"></script>
        <script src="<?php echo site_url(); ?>assets/js/parsFR.js" type="text/javascript"></script>
        <style type="text/css">
            .parsley-errors-list li.parsley-required
            {
            color: #FF0000 ;
            }
        </style>
    </head>
    <body>
        <div class="app app-default">

            <div class="app-container app-login1">
                <div class="flex-center">
                    <div class="app-header"></div>
                    <div class="app-body">
                        <div class="loader-container text-center">
                            <div class="icon">
                                <div class="sk-folding-cube">
                                    <div class="sk-cube1 sk-cube"></div>
                                    <div class="sk-cube2 sk-cube"></div>
                                    <div class="sk-cube4 sk-cube"></div>
                                    <div class="sk-cube3 sk-cube"></div>
                                </div>
                            </div>
                            <div class="title">Logging in...</div>
                        </div>
                        <div class="app-block">
                            <div class="app-form">
                                <div class="form-header">
                                    <div class="app-brand"><span class="highlight">Zotra</span> Admin</div>
                                </div><hr>
                                 <div class="form-header">
                                  
                                    <div style="color:grey;font-size:17px;"><label>Connexion</label></div>
                                </div>
                                <form action="<?php echo base_url() ?>admin/connexion" method="GET" class="demo-form" data-parsley-validate="" >  
                                    <?php if($error_message!=null){?>
                                         <div class="alert alert-danger">
                                          <label><?php echo $error_message?></label>
                                        </div>
                                    <?php } ?>                                
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1">
                                            <i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" placeholder="Votre email" name="email" aria-describedby="basic-addon1" id="email" data-parsley-required="true">
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon2">
                                            <i class="fa fa-key" aria-hidden="true"></i></span>
                                        <input type="password" class="form-control" placeholder="Votre mot de passe" name="motdepasse" aria-describedby="basic-addon2" id="mdp" data-parsley-required="true">
                                    </div>
                                    <div class="text-center">
                                        <input type="submit" class="btn btn-success btn-submit" value="Se connecter" id="sub">
                                    </div>
                                </form>
                                 <div class="form-line">
                                  <div class="title" style="width: 216px;">Si vous n'êtes pas encore membre</div>
                                </div>
                                <div class="form-footer">

                                      <a class="btn btn-info btn-submit" href="<?php echo base_url() ?>admin/inscription">Inscrivez-vous ici</a>
                                    
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="app-footer">
                    </div>
                </div>
            </div>

        </div>
         
        <script type="text/javascript" src="<?php echo site_url();?>assets/js/vendor.js"></script>
        <script type="text/javascript" src="<?php echo site_url();?>assets/js/app.js"></script>        
        <script type="text/javascript" src="<?php echo site_url();?>assets/js/bootstrap.min.js"></script>        

    </body>
    
</html>