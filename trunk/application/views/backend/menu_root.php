<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <base href = "<?= base_url();?>">

    <title>####</title>

    <script src="js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">

</head>


<div class="row affix-row">
    <div class="col-sm-3 col-md-2 affix-sidebar">
        <div class="sidebar-nav">
            <div class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <span class="visible-xs navbar-brand">Sidebar menu</span>
                </div>
                <div class="navbar-collapse collapse sidebar-navbar-collapse">
                    <ul class="nav navbar-nav" id="sidenav01">
                        <li class="active">
                            <a href="#" data-toggle="collapse" data-target="#toggleDemo0" data-parent="#sidenav01" class="collapsed">
                                <h4>
                                    Control Panel
                                    <br>
                                    <small>IOSDSV <span class="caret"></span></small>
                                </h4>
                            </a>
                            <div class="collapse" id="toggleDemo0" style="height: 0px;">
                                <ul class="nav nav-list">
                                    <li><a href="#">ProfileSubMenu1</a></li>
                                    <li><a href="#">ProfileSubMenu2</a></li>
                                    <li><a href="#">ProfileSubMenu3</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#" data-toggle="collapse" data-target="#toggleDemo" data-parent="#sidenav01" class="collapsed">
                                <span class="glyphicon glyphicon-cloud"></span> Submenu 1 <span class="caret pull-right"></span>
                            </a>
                            <div class="collapse" id="toggleDemo" style="height: 0px;">
                                <ul class="nav nav-list">
                                    <li><a href="#">Submenu1.1</a></li>
                                    <li><a href="#">Submenu1.2</a></li>
                                    <li><a href="#">Submenu1.3</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="active">
                            <a href="#" data-toggle="collapse" data-target="#toggleDemo2" data-parent="#sidenav01" class="collapsed">
                                <span class="glyphicon glyphicon-inbox"></span> Submenu 2 <span class="caret pull-right"></span>
                            </a>
                            <div class="collapse" id="toggleDemo2" style="height: 0px;">
                                <ul class="nav nav-list">
                                    <li><a href="#">Submenu2.1</a></li>
                                    <li><a href="#">Submenu2.2</a></li>
                                    <li><a href="#">Submenu2.3</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="#"><span class="glyphicon glyphicon-lock"></span> Normalmenu</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-calendar"></span> WithBadges <span class="badge pull-right">42</span></a></li>
                        <li><a href=""><span class="glyphicon glyphicon-cog"></span> PreferencesMenu</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </div>
    <div class="col-sm-9 col-md-10 affix-content">
        <div class="container">
