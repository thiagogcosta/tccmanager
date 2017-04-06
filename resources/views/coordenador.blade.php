<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Área do Coordenador</title>

    <!-- Bootstrap -->
    <link href="/components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/components/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/components/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="/components/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="/components/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="/components/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="/components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="/" class="site_title"><i class="fa fa-graduation-cap"></i> <span>Coordenador</span></a>
                </div>
                <div class="clearfix"></div>
                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="https://media.licdn.com/mpr/mpr/shrinknp_200_200/p/1/000/062/39c/3cefc75.jpg" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Bem vindo,</span>
                        <h2>Elvis Fusco</h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->
                <br>
                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>Geral</h3>
                        <ul class="nav side-menu">
                            <li class="">
                                <a><i class="fa fa-home"></i> Início <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu" style="display: none;">
                                    <li><a href="/coordenador">Área do Coordenador</a></li>
                                    <li><a href="/coordenador/indicacao">Indicar Orientador</a></li>
                                    {{--<li><a href="index3.html">Dashboard3</a></li>--}}
                                </ul>
                            </li>
                            {{--<li>--}}
                                {{--<a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>--}}
                                {{--<ul class="nav child_menu" style="">--}}
                                    {{--<li><a href="form.html">General Form</a></li>--}}
                                    {{--<li><a href="form_advanced.html">Advanced Components</a></li>--}}
                                    {{--<li><a href="form_validation.html">Form Validation</a></li>--}}
                                    {{--<li><a href="form_wizards.html">Form Wizard</a></li>--}}
                                    {{--<li><a href="form_upload.html">Form Upload</a></li>--}}
                                    {{--<li><a href="form_buttons.html">Form Buttons</a></li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a><i class="fa fa-desktop"></i> UI Elements <span class="fa fa-chevron-down"></span></a>--}}
                                {{--<ul class="nav child_menu" style="">--}}
                                    {{--<li><a href="general_elements.html">General Elements</a></li>--}}
                                    {{--<li><a href="media_gallery.html">Media Gallery</a></li>--}}
                                    {{--<li><a href="typography.html">Typography</a></li>--}}
                                    {{--<li><a href="icons.html">Icons</a></li>--}}
                                    {{--<li><a href="glyphicons.html">Glyphicons</a></li>--}}
                                    {{--<li><a href="widgets.html">Widgets</a></li>--}}
                                    {{--<li><a href="invoice.html">Invoice</a></li>--}}
                                    {{--<li><a href="inbox.html">Inbox</a></li>--}}
                                    {{--<li><a href="calendar.html">Calendar</a></li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>--}}
                                {{--<ul class="nav child_menu" style="">--}}
                                    {{--<li><a href="tables.html">Tables</a></li>--}}
                                    {{--<li><a href="tables_dynamic.html">Table Dynamic</a></li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>--}}
                                {{--<ul class="nav child_menu" style="">--}}
                                    {{--<li><a href="chartjs.html">Chart JS</a></li>--}}
                                    {{--<li><a href="chartjs2.html">Chart JS2</a></li>--}}
                                    {{--<li><a href="morisjs.html">Moris JS</a></li>--}}
                                    {{--<li><a href="echarts.html">ECharts</a></li>--}}
                                    {{--<li><a href="other_charts.html">Other Charts</a></li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a><i class="fa fa-clone"></i>Layouts <span class="fa fa-chevron-down"></span></a>--}}
                                {{--<ul class="nav child_menu" style="">--}}
                                    {{--<li><a href="fixed_sidebar.html">Fixed Sidebar</a></li>--}}
                                    {{--<li><a href="fixed_footer.html">Fixed Footer</a></li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                    {{--<div class="menu_section">--}}
                        {{--<ul class="nav side-menu">--}}
                            {{--<li>--}}
                                {{--<ul class="nav child_menu" style="">--}}
                                    {{--<li><a href="e_commerce.html">E-commerce</a></li>--}}
                                    {{--<li><a href="projects.html">Projects</a></li>--}}
                                    {{--<li><a href="project_detail.html">Project Detail</a></li>--}}
                                    {{--<li><a href="contacts.html">Contacts</a></li>--}}
                                    {{--<li><a href="profile.html">Profile</a></li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<ul class="nav child_menu" style="">--}}
                                    {{--<li><a href="page_403.html">403 Error</a></li>--}}
                                    {{--<li><a href="page_404.html">404 Error</a></li>--}}
                                    {{--<li><a href="page_500.html">500 Error</a></li>--}}
                                    {{--<li><a href="plain_page.html">Plain Page</a></li>--}}
                                    {{--<li><a href="login.html">Login Page</a></li>--}}
                                    {{--<li><a href="pricing_tables.html">Pricing Tables</a></li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<ul class="nav child_menu" style="">--}}
                                    {{--<li><a href="#level1_1">Level One</a>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<a>Level One<span class="fa fa-chevron-down"></span></a>--}}
                                        {{--<ul class="nav child_menu" style="">--}}
                                            {{--<li class="sub_menu"><a href="level2.html">Level Two</a>--}}
                                            {{--</li>--}}
                                            {{--<li><a href="#level2_1">Level Two</a>--}}
                                            {{--</li>--}}
                                            {{--<li><a href="#level2_2">Level Two</a>--}}
                                            {{--</li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                    {{--<li><a href="#level1_2">Level One</a>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li></li>--}}
                        </ul>
                    </div>
                </div>
                <!-- /sidebar menu -->
                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="" data-original-title="FullScreen">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Lock">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="" href="login.html" data-original-title="Logout">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>
        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <img src="https://media.licdn.com/mpr/mpr/shrinknp_200_200/p/1/000/062/39c/3cefc75.jpg" alt="">Elvis Fusco
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="javascript:;"> Profile</a></li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="badge bg-red pull-right">50%</span>
                                        <span>Settings</span>
                                    </a>
                                </li>
                                <li><a href="javascript:;">Help</a></li>
                                <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                            </ul>
                        </li>
                        <li role="presentation" class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-envelope-o"></i>
                                <span class="badge bg-green">6</span>
                            </a>
                            <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                <li>
                                    <a>
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image"></span>
                                        <span>
                                        <span>John Smith</span>
                                        <span class="time">3 mins ago</span>
                                        </span>
                                        <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image"></span>
                                        <span>
                                        <span>John Smith</span>
                                        <span class="time">3 mins ago</span>
                                        </span>
                                        <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image"></span>
                                        <span>
                                        <span>John Smith</span>
                                        <span class="time">3 mins ago</span>
                                        </span>
                                        <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image"></span>
                                        <span>
                                        <span>John Smith</span>
                                        <span class="time">3 mins ago</span>
                                        </span>
                                        <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <div class="text-center">
                                        <a>
                                            <strong>See All Alerts</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->
        <!-- page content -->
        <div class="right_col" role="main" style="min-height: 513px;">
            <!-- top tiles -->
            <!-- /top tiles -->
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                </div>
            </div>
            <br>
            <div class="row">
                <div style='width: 100%;height: auto;padding: 50px;padding-top: 10px;' class="col-md-8 col-sm-8 col-xs-12">
                    <h1 style="text-align: center;">Área do Coordenador</h1>
                    <div class="btn-group btn-group-justified" role="group" aria-label="..." style="width: 300px;left: calc(50% - 150px);margin-top: 15px;">
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-primary">Área Auxílio Aluno - Coordenador</button>
                        </div>
                    </div>
                    <h2 style="text-align: center;margin-top: 50px">Selecione o Curso</h2>
                    <select class="form-control" style="    width: 300px;text-align: center;margin-left: calc(50% - 150px);border-radius: 5px 5px 0 0;">
                        <option>Curso 1</option>
                        <option>Curso 2</option>
                        <option>Curso 3</option>
                        <option>Curso 4</option>
                        <option>Curso 5</option>
                    </select>
                    <h2 style="text-align: center;margin-top: 10px">Selecione o Aluno</h2>
                    <select class="form-control" style="    width: 300px;text-align: center;margin-left: calc(50% - 150px);border-radius: 5px 5px 0 0;">
                        <option>Aluno 1</option>
                        <option>Aluno 2</option>
                        <option>Aluno 3</option>
                        <option>Aluno 4</option>
                        <option>Aluno 5</option>
                    </select>
                    <div class="btn-group btn-group-justified" role="group" aria-label="..." style="width: 100px;left: calc(50% - 150px);margin-top: 15px;display: inline-block;">
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-primary">Relatórios</button>
                        </div>
                    </div>
                    <div class="btn-group btn-group-justified" role="group" aria-label="..." style="width: 100px;left: calc(50% - 50px);margin-top: 15px;display: inline-block;">
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-primary">Gerar Nota</button>
                        </div>
                    </div>
                    <div class="panel panel-default" style="margin-top: 20px;">
                        <div class="panel-heading">Carga Horária: 40 horas</div>
                        <table class="table">
                            <thead>
                            <tr>
                                <th style="text-align: center;color: black;">Data</th>
                                <th style="text-align: center;color: black;">Presença</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td style="text-align: center;">Data 1</td>
                                <td style="text-align: center;"><i class="fa fa-check-square" aria-hidden="true"></i></td>
                            </tr>
                            <tr>
                                <td style="text-align: center;">Data 2</td>
                                <td style="text-align: center;"><i class="fa fa-check-square" aria-hidden="true"></i></td>
                            </tr>
                            <tr>
                                <td style="text-align: center;">Data 3</td>
                                <td style="text-align: center;"><i class="fa fa-check-square" aria-hidden="true"></i></td>
                            </tr>
                            <tr>
                                <td style="text-align: center;">Data 4</td>
                                <td style="text-align: center;"><i class="fa fa-check-square" aria-hidden="true"></i></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
        <!-- /page content -->
        <!-- footer content -->
        <footer>
            <div class="pull-right">
                Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>
<!-- jQuery -->
<script src="/components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="/components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="/components/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="/components/nprogress/nprogress.js"></script>
<!-- Chart.js -->
<script src="/components/Chart.js/dist/Chart.min.js"></script>
<!-- gauge.js -->
<script src="/components/gauge.js/dist/gauge.min.js"></script>
<!-- bootstrap-progressbar -->
<script src="/components/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="/components/iCheck/icheck.min.js"></script>
<!-- Skycons -->
<script src="/components/skycons/skycons.js"></script>
<!-- Flot -->
<script src="/components/Flot/jquery.flot.js"></script>
<script src="/components/Flot/jquery.flot.pie.js"></script>
<script src="/components/Flot/jquery.flot.time.js"></script>
<script src="/components/Flot/jquery.flot.stack.js"></script>
<script src="/components/Flot/jquery.flot.resize.js"></script>
<!-- Flot plugins -->
<script src="/components/flot.orderbars/js/jquery.flot.orderBars.js"></script>
<script src="/components/flot-spline/js/jquery.flot.spline.min.js"></script>
<script src="/components/flot.curvedlines/curvedLines.js"></script>
<!-- DateJS -->
<script src="/components/DateJS/build/date.js"></script>
<!-- JQVMap -->
<script src="/components/jqvmap/dist/jquery.vmap.js"></script>
<script src="/components/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="/components/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="/components/moment/min/moment.min.js"></script>
<script src="/components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- Custom Theme Scripts -->
<script src="/js/custom.min.js"></script>
<div class="jqvmap-label" style="display: none;"></div>
<div class="daterangepicker dropdown-menu ltr opensleft show-calendar" style="top: 236px; right: 34.0781px; left: auto; display: none;">
    <div class="calendar left">
        <div class="daterangepicker_input">
            <input class="input-mini form-control active" type="text" name="daterangepicker_start" value=""><i class="fa fa-calendar glyphicon glyphicon-calendar"></i>
            <div class="calendar-time" style="display: none;">
                <div></div>
                <i class="fa fa-clock-o glyphicon glyphicon-time"></i>
            </div>
        </div>
        <div class="calendar-table">
            <table class="table-condensed">
                <thead>
                <tr>
                    <th></th>
                    <th class="prev available"><i class="fa fa-chevron-left glyphicon glyphicon-chevron-left"></i></th>
                    <th colspan="5" class="month">
                        <select class="monthselect">
                            <option value="0">January</option>
                            <option value="1">February</option>
                            <option value="2">March</option>
                            <option value="3">April</option>
                            <option value="4">May</option>
                            <option value="5">June</option>
                            <option value="6">July</option>
                            <option value="7">August</option>
                            <option value="8">September</option>
                            <option value="9">October</option>
                            <option value="10" selected="selected">November</option>
                            <option value="11">December</option>
                        </select>
                        <select class="yearselect">
                            <option value="2012">2012</option>
                            <option value="2013">2013</option>
                            <option value="2014">2014</option>
                            <option value="2015" selected="selected">2015</option>
                        </select>
                    </th>
                    <th></th>
                </tr>
                <tr>
                    <th class="week">W</th>
                    <th>Mo</th>
                    <th>Tu</th>
                    <th>We</th>
                    <th>Th</th>
                    <th>Fr</th>
                    <th>Sa</th>
                    <th>Su</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="week">44</td>
                    <td class="off available" data-title="r0c0">26</td>
                    <td class="off available" data-title="r0c1">27</td>
                    <td class="off available" data-title="r0c2">28</td>
                    <td class="off available" data-title="r0c3">29</td>
                    <td class="off available" data-title="r0c4">30</td>
                    <td class="weekend off available" data-title="r0c5">31</td>
                    <td class="weekend available" data-title="r0c6">1</td>
                </tr>
                <tr>
                    <td class="week">45</td>
                    <td class="available" data-title="r1c0">2</td>
                    <td class="available" data-title="r1c1">3</td>
                    <td class="available" data-title="r1c2">4</td>
                    <td class="available" data-title="r1c3">5</td>
                    <td class="available" data-title="r1c4">6</td>
                    <td class="weekend available" data-title="r1c5">7</td>
                    <td class="weekend available" data-title="r1c6">8</td>
                </tr>
                <tr>
                    <td class="week">46</td>
                    <td class="available" data-title="r2c0">9</td>
                    <td class="available" data-title="r2c1">10</td>
                    <td class="available" data-title="r2c2">11</td>
                    <td class="available" data-title="r2c3">12</td>
                    <td class="available" data-title="r2c4">13</td>
                    <td class="weekend available" data-title="r2c5">14</td>
                    <td class="weekend available" data-title="r2c6">15</td>
                </tr>
                <tr>
                    <td class="week">47</td>
                    <td class="available" data-title="r3c0">16</td>
                    <td class="available" data-title="r3c1">17</td>
                    <td class="available" data-title="r3c2">18</td>
                    <td class="available" data-title="r3c3">19</td>
                    <td class="available" data-title="r3c4">20</td>
                    <td class="weekend available" data-title="r3c5">21</td>
                    <td class="weekend available" data-title="r3c6">22</td>
                </tr>
                <tr>
                    <td class="week">48</td>
                    <td class="available" data-title="r4c0">23</td>
                    <td class="available" data-title="r4c1">24</td>
                    <td class="available" data-title="r4c2">25</td>
                    <td class="available" data-title="r4c3">26</td>
                    <td class="available" data-title="r4c4">27</td>
                    <td class="weekend available" data-title="r4c5">28</td>
                    <td class="weekend available" data-title="r4c6">29</td>
                </tr>
                <tr>
                    <td class="week">49</td>
                    <td class="available" data-title="r5c0">30</td>
                    <td class="off available" data-title="r5c1">1</td>
                    <td class="off available" data-title="r5c2">2</td>
                    <td class="off available" data-title="r5c3">3</td>
                    <td class="off available" data-title="r5c4">4</td>
                    <td class="weekend off available" data-title="r5c5">5</td>
                    <td class="weekend off available" data-title="r5c6">6</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="calendar right">
        <div class="daterangepicker_input">
            <input class="input-mini form-control" type="text" name="daterangepicker_end" value=""><i class="fa fa-calendar glyphicon glyphicon-calendar"></i>
            <div class="calendar-time" style="display: none;">
                <div></div>
                <i class="fa fa-clock-o glyphicon glyphicon-time"></i>
            </div>
        </div>
        <div class="calendar-table">
            <table class="table-condensed">
                <thead>
                <tr>
                    <th></th>
                    <th></th>
                    <th colspan="5" class="month">
                        <select class="monthselect">
                            <option value="0">January</option>
                            <option value="1">February</option>
                            <option value="2">March</option>
                            <option value="3">April</option>
                            <option value="4">May</option>
                            <option value="5">June</option>
                            <option value="6">July</option>
                            <option value="7">August</option>
                            <option value="8">September</option>
                            <option value="9">October</option>
                            <option value="10">November</option>
                            <option value="11" selected="selected">December</option>
                        </select>
                        <select class="yearselect"></select>
                    </th>
                    <th></th>
                </tr>
                <tr>
                    <th class="week">W</th>
                    <th>Mo</th>
                    <th>Tu</th>
                    <th>We</th>
                    <th>Th</th>
                    <th>Fr</th>
                    <th>Sa</th>
                    <th>Su</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="week">49</td>
                    <td class="off available" data-title="r0c0">30</td>
                    <td class="available" data-title="r0c1">1</td>
                    <td class="available" data-title="r0c2">2</td>
                    <td class="available" data-title="r0c3">3</td>
                    <td class="available" data-title="r0c4">4</td>
                    <td class="weekend available" data-title="r0c5">5</td>
                    <td class="weekend available" data-title="r0c6">6</td>
                </tr>
                <tr>
                    <td class="week">50</td>
                    <td class="available" data-title="r1c0">7</td>
                    <td class="available" data-title="r1c1">8</td>
                    <td class="available" data-title="r1c2">9</td>
                    <td class="available" data-title="r1c3">10</td>
                    <td class="available" data-title="r1c4">11</td>
                    <td class="weekend available" data-title="r1c5">12</td>
                    <td class="weekend available" data-title="r1c6">13</td>
                </tr>
                <tr>
                    <td class="week">51</td>
                    <td class="available" data-title="r2c0">14</td>
                    <td class="available" data-title="r2c1">15</td>
                    <td class="available" data-title="r2c2">16</td>
                    <td class="available" data-title="r2c3">17</td>
                    <td class="available" data-title="r2c4">18</td>
                    <td class="weekend available" data-title="r2c5">19</td>
                    <td class="weekend available" data-title="r2c6">20</td>
                </tr>
                <tr>
                    <td class="week">52</td>
                    <td class="available" data-title="r3c0">21</td>
                    <td class="available" data-title="r3c1">22</td>
                    <td class="available" data-title="r3c2">23</td>
                    <td class="available" data-title="r3c3">24</td>
                    <td class="available" data-title="r3c4">25</td>
                    <td class="weekend available" data-title="r3c5">26</td>
                    <td class="weekend available" data-title="r3c6">27</td>
                </tr>
                <tr>
                    <td class="week">1</td>
                    <td class="available" data-title="r4c0">28</td>
                    <td class="available" data-title="r4c1">29</td>
                    <td class="available" data-title="r4c2">30</td>
                    <td class="active end-date available" data-title="r4c3">31</td>
                    <td class="off off disabled" data-title="r4c4">1</td>
                    <td class="weekend off off disabled" data-title="r4c5">2</td>
                    <td class="weekend off off disabled" data-title="r4c6">3</td>
                </tr>
                <tr>
                    <td class="week">2</td>
                    <td class="off off disabled" data-title="r5c0">4</td>
                    <td class="off off disabled" data-title="r5c1">5</td>
                    <td class="off off disabled" data-title="r5c2">6</td>
                    <td class="off off disabled" data-title="r5c3">7</td>
                    <td class="off off disabled" data-title="r5c4">8</td>
                    <td class="weekend off off disabled" data-title="r5c5">9</td>
                    <td class="weekend off off disabled" data-title="r5c6">10</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="ranges">
        <ul>
            <li data-range-key="Today">Today</li>
            <li data-range-key="Yesterday">Yesterday</li>
            <li data-range-key="Last 7 Days">Last 7 Days</li>
            <li data-range-key="Last 30 Days">Last 30 Days</li>
            <li data-range-key="This Month">This Month</li>
            <li data-range-key="Last Month">Last Month</li>
            <li data-range-key="Custom" class="active">Custom</li>
        </ul>
        <div class="range_inputs"><button class="applyBtn btn btn-default btn-small btn-primary" disabled="disabled" type="button">Submit</button> <button class="cancelBtn btn btn-default btn-small" type="button">Clear</button></div>
    </div>
</div>
</body>
</html>
