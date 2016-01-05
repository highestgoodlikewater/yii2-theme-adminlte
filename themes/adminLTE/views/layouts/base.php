<?php

    use yii\helpers\Html;
    use backend\assets\AppAsset;
    AppAsset::register($this);
    
?>

<?php $this->beginPage(); ?>

<!DOCTYPE html>

<html lang="<?php echo \Yii::$app->language; ?>">
    
    <head>
        
        <meta http-equiv="Content-Type" content="text/html; charset=<?php echo \Yii::$app->charset; ?>" />
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <?php echo Html::csrfMetaTags(); ?>
        <title><?php echo Html::encode(!empty($this->title) ? strtoupper($this->title) . ' | ' : null); ?> BACKEND</title>
        
        <script type="text/javascript">
            var baseUrl = '<?php echo \Yii::$app->urlManager->createAbsoluteUrl(['/']); ?>';
        </script>
        
        <?php $this->head(); ?>
        
    </head>
    
    <body class="hold-transition skin-blue sidebar-mini">
        
        <div class="wrapper">
            
            <?php $this->beginBody(); ?>

                <!-- Get Header -->
                <header class="main-header">
                    <a href="/backend" class="logo">
                        <span class="logo-mini"><b>A</b>LT</span>
                        <span class="logo-lg"><b>Admin</b>LTE</span>
                    </a>
                    <nav class="navbar navbar-static-top" role="navigation">
                        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                            <span class="sr-only">Toggle navigation</span>
                        </a>
                        <div class="navbar-custom-menu">
                            <ul class="nav navbar-nav">
                                <?php if(\Yii::$app->user->isGuest): ?>
									<li>
                                        <a href="#"><span class="hidden-xs">Guest</span></a>
                                    </li>
								<?php else: ?>
                                    <li class="dropdown user user-menu">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <img src="/backend/images/user2-160x160.jpg" class="user-image" alt="User Image">
                                            <span class="hidden-xs"><?php echo ucfirst(Yii::$app->user->identity->username); ?></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="user-header">
                                                <img src="/backend/images/user2-160x160.jpg" class="img-circle" alt="User Image">
                                                <p><?php echo ucfirst(Yii::$app->user->identity->username); ?> - Administration<small>Member since Nov. 2015</small></p>
                                            </li>
                                            <li class="user-body">
                                                <div class="col-xs-4 text-center">
                                                    <a href="#">Followers</a>
                                                </div>
                                                <div class="col-xs-4 text-center">
                                                    <a href="#">Sales</a>
                                                </div>
                                                <div class="col-xs-4 text-center">
                                                    <a href="#">Friends</a>
                                                </div>
                                            </li>
                                            <li class="user-footer">
                                                <div class="pull-left">
                                                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                                                </div>
                                                <div class="pull-right">
                                                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </nav>
                </header>
                
                <!-- Get Sidebar -->
                <aside class="main-sidebar">
                    <section class="sidebar">
                        <div class="user-panel">
                            <div class="pull-left image">
                                <img src="/backend/images/user2-160x160.jpg" class="img-circle" alt="User Image">
                            </div>
                            <div class="pull-left info">
                                <?php if(\Yii::$app->user->isGuest): ?>
                                    <p>Guest</p>
                                    <a href="#"><i class="fa fa-circle text-success"></i> Offline</a>
                                <?php else: ?>
                                    <p><?php echo ucfirst(Yii::$app->user->identity->username); ?></p>
                                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <ul class="sidebar-menu">
                            <li class="header">MAIN NAVIGATION</li>
                            <li class="active treeview">
                                <a href="/backend"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                            </li>
                            <?php if(!\Yii::$app->user->isGuest): ?>
                                <li class="treeview">
                                    <a href="#">
                                        <i class="fa fa-files-o"></i>
                                        <span>Layout Options</span>
                                        <span class="label label-primary pull-right">4</span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="#"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
                                        <li><a href="#"><i class="fa fa-circle-o"></i> Boxed</a></li>
                                        <li><a href="#"><i class="fa fa-circle-o"></i> Fixed</a></li>
                                        <li><a href="#"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-th"></i> <span>Widgets</span> <small class="label pull-right bg-green">new</small>
                                    </a>
                                </li>
                                <li class="treeview">
                                    <a href="#">
                                        <i class="fa fa-pie-chart"></i><span>Charts</span><i class="fa fa-angle-left pull-right"></i>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="#"><i class="fa fa-circle-o"></i> ChartJS</a></li>
                                        <li><a href="#"><i class="fa fa-circle-o"></i> Morris</a></li>
                                        <li><a href="#"><i class="fa fa-circle-o"></i> Flot</a></li>
                                        <li><a href="#"><i class="fa fa-circle-o"></i> Inline charts</a></li>
                                    </ul>
                                </li>
                                <li class="treeview">
                                    <a href="#">
                                        <i class="fa fa-share"></i> <span>Multilevel</span>
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                                        <li>
                                            <a href="#"><i class="fa fa-circle-o"></i> Level One <i class="fa fa-angle-left pull-right"></i></a>
                                            <ul class="treeview-menu">
                                                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                                                <li>
                                                    <a href="#"><i class="fa fa-circle-o"></i> Level Two <i class="fa fa-angle-left pull-right"></i></a>
                                                    <ul class="treeview-menu">
                                                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                                    </ul>
                                </li>
                                <li><a href="#"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
                            <?php endif; ?>
                            <li class="header">LABELS</li>
                            <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
                            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
                            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
                            
                        </ul>
                    </section>
                </aside>

                <!-- Get Content -->
                <?php echo $content; ?>

                <footer class="main-footer">
                    <div class="pull-right hidden-xs"><b>Version</b> 2.3.0</div>
                    <strong>Copyright &copy; 2014-<?php echo date('Y',time()); ?> <a href="#">Almsaeed Studio</a>.</strong> All rights reserved.
                </footer>
                
            <?php $this->endBody(); ?>
                
        </div>
        
        <script>
          $.widget.bridge('uibutton', $.ui.button);
        </script>
        
    </body>
</html>

<?php $this->endPage(); ?>

<!-- end base layouts -- >