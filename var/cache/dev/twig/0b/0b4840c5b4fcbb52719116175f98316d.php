<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_d37d1c3621cb1b31c9f974580366ac09 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <title>AMS-Symfony</title>
    <!-- Favicon icon -->
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"images/favicon.png\">
    <!-- Pignose Calender -->
    <link href=\"./plugins/pg-calendar/css/pignose.calendar.min.css\" rel=\"stylesheet\">
    <!-- Chartist -->
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/plugins/chartist/css/chartist.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css"), "html", null, true);
        echo "\">
    <!-- Custom Stylesheet -->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id=\"preloader\">
        <div class=\"loader\">
            <svg class=\"circular\" viewBox=\"25 25 50 50\">
                <circle class=\"path\" cx=\"50\" cy=\"50\" r=\"20\" fill=\"none\" stroke-width=\"3\" stroke-miterlimit=\"10\" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id=\"main-wrapper\">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class=\"nav-header\">
            <div class=\"brand-logo\">
                <a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        echo "\">
                    <b class=\"logo-abbr\"><img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/images/logo.png"), "html", null, true);
        echo "\" alt=\"\"> </b>
                    <span class=\"logo-compact\"><img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/images/logo-compact.png"), "html", null, true);
        echo "\" alt=\"\"></span>
                    <span class=\"brand-title\">
                        <img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/images/logo-text.png"), "html", null, true);
        echo "\" alt=\"\">
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class=\"header\">    
            <div class=\"header-content clearfix\">
                
                <div class=\"nav-control\">
                    <div class=\"hamburger\">
                        <span class=\"toggle-icon\"><i class=\"icon-menu\"></i></span>
                    </div>
                </div>
                <div class=\"header-left\">
                    <div class=\"input-group icons\">
                        <div class=\"input-group-prepend\">
                            <span class=\"input-group-text bg-transparent border-0 pr-2 pr-sm-3\" id=\"basic-addon1\"><i class=\"mdi mdi-magnify\"></i></span>
                        </div>
                        <input type=\"search\" class=\"form-control\" placeholder=\"Search Dashboard\" aria-label=\"Search Dashboard\">
                        <div class=\"drop-down animated flipInX d-md-none\">
                            <form action=\"#\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                            </form>
                        </div>
                    </div>
                </div>
                <div class=\"header-right\">
                    <ul class=\"clearfix\">
                        <li class=\"icons dropdown\"><a href=\"javascript:void(0)\" data-toggle=\"dropdown\">
                                <i class=\"mdi mdi-email-outline\"></i>
                                <span class=\"badge badge-pill gradient-1\">3</span>
                            </a>
                            <div class=\"drop-down animated fadeIn dropdown-menu\">
                                <div class=\"dropdown-content-heading d-flex justify-content-between\">
                                    <span class=\"\">3 New Messages</span>  
                                    <a href=\"javascript:void()\" class=\"d-inline-block\">
                                        <span class=\"badge badge-pill gradient-1\">3</span>
                                    </a>
                                </div>
                                <div class=\"dropdown-content-body\">
                                    <ul>
                                        <li class=\"notification-unread\">
                                            <a href=\"javascript:void()\">
                                                <img class=\"float-left mr-3 avatar-img\" src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/images/avatar/1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                                <div class=\"notification-content\">
                                                    <div class=\"notification-heading\">Saiful Islam</div>
                                                    <div class=\"notification-timestamp\">08 Hours ago</div>
                                                    <div class=\"notification-text\">Hi Teddy, Just wanted to let you ...</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=\"notification-unread\">
                                            <a href=\"javascript:void()\">
                                                <img class=\"float-left mr-3 avatar-img\" src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/images/avatar/2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                                <div class=\"notification-content\">
                                                    <div class=\"notification-heading\">Adam Smith</div>
                                                    <div class=\"notification-timestamp\">08 Hours ago</div>
                                                    <div class=\"notification-text\">Can you do me a favour?</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:void()\">
                                                <img class=\"float-left mr-3 avatar-img\" src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/images/avatar/3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                                <div class=\"notification-content\">
                                                    <div class=\"notification-heading\">Barak Obama</div>
                                                    <div class=\"notification-timestamp\">08 Hours ago</div>
                                                    <div class=\"notification-text\">Hi Teddy, Just wanted to let you ...</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:void()\">
                                                <img class=\"float-left mr-3 avatar-img\" src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/images/avatar/4.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                                <div class=\"notification-content\">
                                                    <div class=\"notification-heading\">Hilari Clinton</div>
                                                    <div class=\"notification-timestamp\">08 Hours ago</div>
                                                    <div class=\"notification-text\">Hello</div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    
                                </div>
                            </div>
                        </li>
                        <li class=\"icons dropdown\"><a href=\"javascript:void(0)\" data-toggle=\"dropdown\">
                                <i class=\"mdi mdi-bell-outline\"></i>
                                <span class=\"badge badge-pill gradient-2\">3</span>
                            </a>
                            <div class=\"drop-down animated fadeIn dropdown-menu dropdown-notfication\">
                                <div class=\"dropdown-content-heading d-flex justify-content-between\">
                                    <span class=\"\">2 New Notifications</span>  
                                    <a href=\"javascript:void()\" class=\"d-inline-block\">
                                        <span class=\"badge badge-pill gradient-2\">5</span>
                                    </a>
                                </div>
                                <div class=\"dropdown-content-body\">
                                    <ul>
                                        <li>
                                            <a href=\"javascript:void()\">
                                                <span class=\"mr-3 avatar-icon bg-success-lighten-2\"><i class=\"icon-present\"></i></span>
                                                <div class=\"notification-content\">
                                                    <h6 class=\"notification-heading\">Events near you</h6>
                                                    <span class=\"notification-text\">Within next 5 days</span> 
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:void()\">
                                                <span class=\"mr-3 avatar-icon bg-danger-lighten-2\"><i class=\"icon-present\"></i></span>
                                                <div class=\"notification-content\">
                                                    <h6 class=\"notification-heading\">Event Started</h6>
                                                    <span class=\"notification-text\">One hour ago</span> 
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:void()\">
                                                <span class=\"mr-3 avatar-icon bg-success-lighten-2\"><i class=\"icon-present\"></i></span>
                                                <div class=\"notification-content\">
                                                    <h6 class=\"notification-heading\">Event Ended Successfully</h6>
                                                    <span class=\"notification-text\">One hour ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:void()\">
                                                <span class=\"mr-3 avatar-icon bg-danger-lighten-2\"><i class=\"icon-present\"></i></span>
                                                <div class=\"notification-content\">
                                                    <h6 class=\"notification-heading\">Events to Join</h6>
                                                    <span class=\"notification-text\">After two days</span> 
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    
                                </div>
                            </div>
                        </li>
                        <li class=\"icons dropdown d-none d-md-flex\">
                            <a href=\"javascript:void(0)\" class=\"log-user\"  data-toggle=\"dropdown\">
                                <span>English</span>  <i class=\"fa fa-angle-down f-s-14\" aria-hidden=\"true\"></i>
                            </a>
                            <div class=\"drop-down dropdown-language animated fadeIn  dropdown-menu\">
                                <div class=\"dropdown-content-body\">
                                    <ul>
                                        <li><a href=\"javascript:void()\">English</a></li>
                                        <li><a href=\"javascript:void()\">Dutch</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class=\"icons dropdown\">
                            <div class=\"user-img c-pointer position-relative\"   data-toggle=\"dropdown\">
                                <span class=\"activity active\"></span>
                                <img src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/images/user/1.png"), "html", null, true);
        echo "\" height=\"40\" width=\"40\" alt=\"\">
                            </div>
                            <div class=\"drop-down dropdown-profile animated fadeIn dropdown-menu\">
                                <div class=\"dropdown-content-body\">
                                    <ul>
                                        <li>
                                            <a href=\"app-profile.html\"><i class=\"icon-user\"></i> <span>Profile</span></a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:void()\">
                                                <i class=\"icon-envelope-open\"></i> <span>Inbox</span> <div class=\"badge gradient-3 badge-pill gradient-1\">3</div>
                                            </a>
                                        </li>
                                        
                                        <hr class=\"my-2\">
                                        <li>
                                            <a href=\"page-lock.html\"><i class=\"icon-lock\"></i> <span>Lock Screen</span></a>
                                        </li>
                                        <li><a href=\"";
        // line 233
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\"><i class=\"icon-key\"></i> <span>Logout</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class=\"nk-sidebar\">           
            <div class=\"nk-nav-scroll\">
                <ul class=\"metismenu\" id=\"menu\">
                    <li class=\"nav-label\">Dashboard</li>
                    <li>
                        <a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\">
                            <i class=\"icon-speedometer menu-icon\"></i><span class=\"nav-text\">Providers</span>
                        </a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"";
        // line 258
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_provider_index");
        echo "\">Liste</a></li>
                            ";
        // line 259
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 259, $this->source); })()), "user", [], "any", false, false, false, 259), "roles", [], "any", false, false, false, 259), 0, [], "array", false, false, false, 259) == "ROLE_ADMIN")) {
            // line 260
            echo "                            <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_provider_new");
            echo "\">Ajouter</a></li>
                            ";
        }
        // line 262
        echo "                        </ul>
                    </li>

                        <li>
                        <a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\">
                            <i class=\"icon-speedometer menu-icon\"></i><span class=\"nav-text\">Articles</span>
                        </a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"";
        // line 270
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_index");
        echo "\">Liste</a></li>
                            ";
        // line 271
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 271, $this->source); })()), "user", [], "any", false, false, false, 271), "roles", [], "any", false, false, false, 271), 0, [], "array", false, false, false, 271) == "ROLE_ADMIN")) {
            // line 272
            echo "                            <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_new");
            echo "\">Ajouter</a></li>
                             ";
        }
        // line 274
        echo "                        </ul>
                    </li>


                  
                    
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
       
        <div class=\"content-body\">

            <div class=\"container-fluid mt-3\">
                <div class=\"row\">
                    <div class=\"col-lg-3 col-sm-6\">
                        <div class=\"card gradient-1\">
                            <div class=\"card-body\">
                                <h3 class=\"card-title text-white\">Products Sold</h3>
                                <div class=\"d-inline-block\">
                                    <h2 class=\"text-white\">4565</h2>
                                    <p class=\"text-white mb-0\">Jan - March 2019</p>
                                </div>
                                <span class=\"float-right display-5 opacity-5\"><i class=\"fa fa-shopping-cart\"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-sm-6\">
                        <div class=\"card gradient-2\">
                            <div class=\"card-body\">
                                <h3 class=\"card-title text-white\">Net Profit</h3>
                                <div class=\"d-inline-block\">
                                    <h2 class=\"text-white\">\$ 8541</h2>
                                    <p class=\"text-white mb-0\">Jan - March 2019</p>
                                </div>
                                <span class=\"float-right display-5 opacity-5\"><i class=\"fa fa-money\"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-sm-6\">
                        <div class=\"card gradient-3\">
                            <div class=\"card-body\">
                                <h3 class=\"card-title text-white\">New Customers</h3>
                                <div class=\"d-inline-block\">
                                    <h2 class=\"text-white\">4565</h2>
                                    <p class=\"text-white mb-0\">Jan - March 2019</p>
                                </div>
                                <span class=\"float-right display-5 opacity-5\"><i class=\"fa fa-users\"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-sm-6\">
                        <div class=\"card gradient-4\">
                            <div class=\"card-body\">
                                <h3 class=\"card-title text-white\">Customer Satisfaction</h3>
                                <div class=\"d-inline-block\">
                                    <h2 class=\"text-white\">99%</h2>
                                    <p class=\"text-white mb-0\">Jan - March 2019</p>
                                </div>
                                <span class=\"float-right display-5 opacity-5\"><i class=\"fa fa-heart\"></i></span>
                            </div>
                        </div>
                    </div>
                </div>

             

                

         
                
              
        ";
        // line 352
        $this->displayBlock('body', $context, $blocks);
        // line 355
        echo "            
            <!-- #/ container -->
        </div>
      
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
        <div class=\"footer\">
            <div class=\"copyright\">
                <p>Copyright &copy; Designed & Developed by <a href=\"https://themeforest.net/user/quixlab\">AMS</a> 2023</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src=\"";
        // line 383
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/plugins/common/common.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 384
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/js/custom.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 385
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/js/settings.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 386
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/js/gleek.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 387
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/js/styleSwitcher.js"), "html", null, true);
        echo "\"></script>

    <!-- Chartjs -->
    <script src=\"";
        // line 390
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/plugins/chart.js/Chart.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Circle progress -->
    <script src=\"";
        // line 392
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/plugins/circle-progress/circle-progress.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Datamap -->
    <script src=\"";
        // line 394
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/plugins/d3v3/index.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 395
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/plugins/topojson/topojson.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 396
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/plugins/datamaps/datamaps.world.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Morrisjs -->
    <script src=\"";
        // line 398
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/plugins/raphael/raphael.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 399
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/plugins/morris/morris.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Pignose Calender -->
    <script src=\"";
        // line 401
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/plugins/moment/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 402
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/plugins/pg-calendar/js/pignose.calendar.min.js"), "html", null, true);
        echo "\"></script>
    <!-- ChartistJS -->
    <script src=\"";
        // line 404
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/plugins/chartist/js/chartist.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 405
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"), "html", null, true);
        echo "\"></script>



    <script src=\"";
        // line 409
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/js/dashboard/dashboard-1.js"), "html", null, true);
        echo "\"></script>

</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 352
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 353
        echo "              
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  587 => 353,  577 => 352,  562 => 409,  555 => 405,  551 => 404,  546 => 402,  542 => 401,  537 => 399,  533 => 398,  528 => 396,  524 => 395,  520 => 394,  515 => 392,  510 => 390,  504 => 387,  500 => 386,  496 => 385,  492 => 384,  488 => 383,  458 => 355,  456 => 352,  376 => 274,  370 => 272,  368 => 271,  364 => 270,  354 => 262,  348 => 260,  346 => 259,  342 => 258,  314 => 233,  293 => 215,  207 => 132,  194 => 122,  181 => 112,  168 => 102,  115 => 52,  110 => 50,  106 => 49,  102 => 48,  68 => 17,  63 => 15,  59 => 14,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <title>AMS-Symfony</title>
    <!-- Favicon icon -->
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"images/favicon.png\">
    <!-- Pignose Calender -->
    <link href=\"./plugins/pg-calendar/css/pignose.calendar.min.css\" rel=\"stylesheet\">
    <!-- Chartist -->
    <link rel=\"stylesheet\" href=\"{{asset('back/plugins/chartist/css/chartist.min.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('back/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css')}}\">
    <!-- Custom Stylesheet -->
    <link href=\"{{asset('back/css/style.css')}}\" rel=\"stylesheet\">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id=\"preloader\">
        <div class=\"loader\">
            <svg class=\"circular\" viewBox=\"25 25 50 50\">
                <circle class=\"path\" cx=\"50\" cy=\"50\" r=\"20\" fill=\"none\" stroke-width=\"3\" stroke-miterlimit=\"10\" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id=\"main-wrapper\">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class=\"nav-header\">
            <div class=\"brand-logo\">
                <a href=\"{{path('app_dashboard')}}\">
                    <b class=\"logo-abbr\"><img src=\"{{asset('back/images/logo.png')}}\" alt=\"\"> </b>
                    <span class=\"logo-compact\"><img src=\"{{asset('back/images/logo-compact.png')}}\" alt=\"\"></span>
                    <span class=\"brand-title\">
                        <img src=\"{{asset('back/images/logo-text.png')}}\" alt=\"\">
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class=\"header\">    
            <div class=\"header-content clearfix\">
                
                <div class=\"nav-control\">
                    <div class=\"hamburger\">
                        <span class=\"toggle-icon\"><i class=\"icon-menu\"></i></span>
                    </div>
                </div>
                <div class=\"header-left\">
                    <div class=\"input-group icons\">
                        <div class=\"input-group-prepend\">
                            <span class=\"input-group-text bg-transparent border-0 pr-2 pr-sm-3\" id=\"basic-addon1\"><i class=\"mdi mdi-magnify\"></i></span>
                        </div>
                        <input type=\"search\" class=\"form-control\" placeholder=\"Search Dashboard\" aria-label=\"Search Dashboard\">
                        <div class=\"drop-down animated flipInX d-md-none\">
                            <form action=\"#\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                            </form>
                        </div>
                    </div>
                </div>
                <div class=\"header-right\">
                    <ul class=\"clearfix\">
                        <li class=\"icons dropdown\"><a href=\"javascript:void(0)\" data-toggle=\"dropdown\">
                                <i class=\"mdi mdi-email-outline\"></i>
                                <span class=\"badge badge-pill gradient-1\">3</span>
                            </a>
                            <div class=\"drop-down animated fadeIn dropdown-menu\">
                                <div class=\"dropdown-content-heading d-flex justify-content-between\">
                                    <span class=\"\">3 New Messages</span>  
                                    <a href=\"javascript:void()\" class=\"d-inline-block\">
                                        <span class=\"badge badge-pill gradient-1\">3</span>
                                    </a>
                                </div>
                                <div class=\"dropdown-content-body\">
                                    <ul>
                                        <li class=\"notification-unread\">
                                            <a href=\"javascript:void()\">
                                                <img class=\"float-left mr-3 avatar-img\" src=\"{{asset('back/images/avatar/1.jpg')}}\" alt=\"\">
                                                <div class=\"notification-content\">
                                                    <div class=\"notification-heading\">Saiful Islam</div>
                                                    <div class=\"notification-timestamp\">08 Hours ago</div>
                                                    <div class=\"notification-text\">Hi Teddy, Just wanted to let you ...</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=\"notification-unread\">
                                            <a href=\"javascript:void()\">
                                                <img class=\"float-left mr-3 avatar-img\" src=\"{{asset('back/images/avatar/2.jpg')}}\" alt=\"\">
                                                <div class=\"notification-content\">
                                                    <div class=\"notification-heading\">Adam Smith</div>
                                                    <div class=\"notification-timestamp\">08 Hours ago</div>
                                                    <div class=\"notification-text\">Can you do me a favour?</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:void()\">
                                                <img class=\"float-left mr-3 avatar-img\" src=\"{{asset('back/images/avatar/3.jpg')}}\" alt=\"\">
                                                <div class=\"notification-content\">
                                                    <div class=\"notification-heading\">Barak Obama</div>
                                                    <div class=\"notification-timestamp\">08 Hours ago</div>
                                                    <div class=\"notification-text\">Hi Teddy, Just wanted to let you ...</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:void()\">
                                                <img class=\"float-left mr-3 avatar-img\" src=\"{{asset('back/images/avatar/4.jpg')}}\" alt=\"\">
                                                <div class=\"notification-content\">
                                                    <div class=\"notification-heading\">Hilari Clinton</div>
                                                    <div class=\"notification-timestamp\">08 Hours ago</div>
                                                    <div class=\"notification-text\">Hello</div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    
                                </div>
                            </div>
                        </li>
                        <li class=\"icons dropdown\"><a href=\"javascript:void(0)\" data-toggle=\"dropdown\">
                                <i class=\"mdi mdi-bell-outline\"></i>
                                <span class=\"badge badge-pill gradient-2\">3</span>
                            </a>
                            <div class=\"drop-down animated fadeIn dropdown-menu dropdown-notfication\">
                                <div class=\"dropdown-content-heading d-flex justify-content-between\">
                                    <span class=\"\">2 New Notifications</span>  
                                    <a href=\"javascript:void()\" class=\"d-inline-block\">
                                        <span class=\"badge badge-pill gradient-2\">5</span>
                                    </a>
                                </div>
                                <div class=\"dropdown-content-body\">
                                    <ul>
                                        <li>
                                            <a href=\"javascript:void()\">
                                                <span class=\"mr-3 avatar-icon bg-success-lighten-2\"><i class=\"icon-present\"></i></span>
                                                <div class=\"notification-content\">
                                                    <h6 class=\"notification-heading\">Events near you</h6>
                                                    <span class=\"notification-text\">Within next 5 days</span> 
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:void()\">
                                                <span class=\"mr-3 avatar-icon bg-danger-lighten-2\"><i class=\"icon-present\"></i></span>
                                                <div class=\"notification-content\">
                                                    <h6 class=\"notification-heading\">Event Started</h6>
                                                    <span class=\"notification-text\">One hour ago</span> 
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:void()\">
                                                <span class=\"mr-3 avatar-icon bg-success-lighten-2\"><i class=\"icon-present\"></i></span>
                                                <div class=\"notification-content\">
                                                    <h6 class=\"notification-heading\">Event Ended Successfully</h6>
                                                    <span class=\"notification-text\">One hour ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:void()\">
                                                <span class=\"mr-3 avatar-icon bg-danger-lighten-2\"><i class=\"icon-present\"></i></span>
                                                <div class=\"notification-content\">
                                                    <h6 class=\"notification-heading\">Events to Join</h6>
                                                    <span class=\"notification-text\">After two days</span> 
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    
                                </div>
                            </div>
                        </li>
                        <li class=\"icons dropdown d-none d-md-flex\">
                            <a href=\"javascript:void(0)\" class=\"log-user\"  data-toggle=\"dropdown\">
                                <span>English</span>  <i class=\"fa fa-angle-down f-s-14\" aria-hidden=\"true\"></i>
                            </a>
                            <div class=\"drop-down dropdown-language animated fadeIn  dropdown-menu\">
                                <div class=\"dropdown-content-body\">
                                    <ul>
                                        <li><a href=\"javascript:void()\">English</a></li>
                                        <li><a href=\"javascript:void()\">Dutch</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class=\"icons dropdown\">
                            <div class=\"user-img c-pointer position-relative\"   data-toggle=\"dropdown\">
                                <span class=\"activity active\"></span>
                                <img src=\"{{asset('back/images/user/1.png')}}\" height=\"40\" width=\"40\" alt=\"\">
                            </div>
                            <div class=\"drop-down dropdown-profile animated fadeIn dropdown-menu\">
                                <div class=\"dropdown-content-body\">
                                    <ul>
                                        <li>
                                            <a href=\"app-profile.html\"><i class=\"icon-user\"></i> <span>Profile</span></a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:void()\">
                                                <i class=\"icon-envelope-open\"></i> <span>Inbox</span> <div class=\"badge gradient-3 badge-pill gradient-1\">3</div>
                                            </a>
                                        </li>
                                        
                                        <hr class=\"my-2\">
                                        <li>
                                            <a href=\"page-lock.html\"><i class=\"icon-lock\"></i> <span>Lock Screen</span></a>
                                        </li>
                                        <li><a href=\"{{path('app_logout')}}\"><i class=\"icon-key\"></i> <span>Logout</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class=\"nk-sidebar\">           
            <div class=\"nk-nav-scroll\">
                <ul class=\"metismenu\" id=\"menu\">
                    <li class=\"nav-label\">Dashboard</li>
                    <li>
                        <a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\">
                            <i class=\"icon-speedometer menu-icon\"></i><span class=\"nav-text\">Providers</span>
                        </a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"{{path('app_provider_index')}}\">Liste</a></li>
                            {% if app.user.roles[0]== \"ROLE_ADMIN\" %}
                            <li><a href=\"{{path('app_provider_new')}}\">Ajouter</a></li>
                            {% endif %}
                        </ul>
                    </li>

                        <li>
                        <a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\">
                            <i class=\"icon-speedometer menu-icon\"></i><span class=\"nav-text\">Articles</span>
                        </a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"{{path('app_article_index')}}\">Liste</a></li>
                            {% if app.user.roles[0]== \"ROLE_ADMIN\" %}
                            <li><a href=\"{{path('app_article_new')}}\">Ajouter</a></li>
                             {% endif %}
                        </ul>
                    </li>


                  
                    
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
       
        <div class=\"content-body\">

            <div class=\"container-fluid mt-3\">
                <div class=\"row\">
                    <div class=\"col-lg-3 col-sm-6\">
                        <div class=\"card gradient-1\">
                            <div class=\"card-body\">
                                <h3 class=\"card-title text-white\">Products Sold</h3>
                                <div class=\"d-inline-block\">
                                    <h2 class=\"text-white\">4565</h2>
                                    <p class=\"text-white mb-0\">Jan - March 2019</p>
                                </div>
                                <span class=\"float-right display-5 opacity-5\"><i class=\"fa fa-shopping-cart\"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-sm-6\">
                        <div class=\"card gradient-2\">
                            <div class=\"card-body\">
                                <h3 class=\"card-title text-white\">Net Profit</h3>
                                <div class=\"d-inline-block\">
                                    <h2 class=\"text-white\">\$ 8541</h2>
                                    <p class=\"text-white mb-0\">Jan - March 2019</p>
                                </div>
                                <span class=\"float-right display-5 opacity-5\"><i class=\"fa fa-money\"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-sm-6\">
                        <div class=\"card gradient-3\">
                            <div class=\"card-body\">
                                <h3 class=\"card-title text-white\">New Customers</h3>
                                <div class=\"d-inline-block\">
                                    <h2 class=\"text-white\">4565</h2>
                                    <p class=\"text-white mb-0\">Jan - March 2019</p>
                                </div>
                                <span class=\"float-right display-5 opacity-5\"><i class=\"fa fa-users\"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-sm-6\">
                        <div class=\"card gradient-4\">
                            <div class=\"card-body\">
                                <h3 class=\"card-title text-white\">Customer Satisfaction</h3>
                                <div class=\"d-inline-block\">
                                    <h2 class=\"text-white\">99%</h2>
                                    <p class=\"text-white mb-0\">Jan - March 2019</p>
                                </div>
                                <span class=\"float-right display-5 opacity-5\"><i class=\"fa fa-heart\"></i></span>
                            </div>
                        </div>
                    </div>
                </div>

             

                

         
                
              
        {% block body %}
              
        {% endblock %}
            
            <!-- #/ container -->
        </div>
      
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
        <div class=\"footer\">
            <div class=\"copyright\">
                <p>Copyright &copy; Designed & Developed by <a href=\"https://themeforest.net/user/quixlab\">AMS</a> 2023</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src=\"{{asset('back/plugins/common/common.min.js')}}\"></script>
    <script src=\"{{asset('back/js/custom.min.js')}}\"></script>
    <script src=\"{{asset('back/js/settings.js')}}\"></script>
    <script src=\"{{asset('back/js/gleek.js')}}\"></script>
    <script src=\"{{asset('back/js/styleSwitcher.js')}}\"></script>

    <!-- Chartjs -->
    <script src=\"{{asset('back/plugins/chart.js/Chart.bundle.min.js')}}\"></script>
    <!-- Circle progress -->
    <script src=\"{{asset('back/plugins/circle-progress/circle-progress.min.js')}}\"></script>
    <!-- Datamap -->
    <script src=\"{{asset('back/plugins/d3v3/index.js')}}\"></script>
    <script src=\"{{asset('back/plugins/topojson/topojson.min.js')}}\"></script>
    <script src=\"{{asset('back/plugins/datamaps/datamaps.world.min.js')}}\"></script>
    <!-- Morrisjs -->
    <script src=\"{{asset('back/plugins/raphael/raphael.min.js')}}\"></script>
    <script src=\"{{asset('back/plugins/morris/morris.min.js')}}\"></script>
    <!-- Pignose Calender -->
    <script src=\"{{asset('back/plugins/moment/moment.min.js')}}\"></script>
    <script src=\"{{asset('back/plugins/pg-calendar/js/pignose.calendar.min.js')}}\"></script>
    <!-- ChartistJS -->
    <script src=\"{{asset('back/plugins/chartist/js/chartist.min.js')}}\"></script>
    <script src=\"{{asset('back/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js')}}\"></script>



    <script src=\"{{asset('back/js/dashboard/dashboard-1.js')}}\"></script>

</body>

</html>", "base.html.twig", "D:\\docker\\symfony_Demo_Docker-master\\templates\\base.html.twig");
    }
}
