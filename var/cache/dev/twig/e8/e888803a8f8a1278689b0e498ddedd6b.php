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

/* dashboard/index.html.twig */
class __TwigTemplate_f9c2b3edfbd46a8b2ab6477faa05cf7c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello DashboardController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "  <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"active-member\">
                                    <div class=\"table-responsive\">
                                        <table class=\"table table-xs mb-0\">
                                            <thead>
                                                <tr>
                                                    <th>Customers</th>
                                                    <th>Product</th>
                                                    <th>Country</th>
                                                    <th>Status</th>
                                                    <th>Payment Method</th>
                                                    <th>Activity</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back//images/avatar/1.jpg"), "html", null, true);
        echo "\" class=\" rounded-circle mr-3\" alt=\"\">Sarah Smith</td>
                                                    <td>iPhone X</td>
                                                    <td>
                                                        <span>United States</span>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <div class=\"progress\" style=\"height: 6px\">
                                                                <div class=\"progress-bar bg-success\" style=\"width: 50%\"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><i class=\"fa fa-circle-o text-success  mr-2\"></i> Paid</td>
                                                    <td>
                                                        <span>Last Login</span>
                                                        <span class=\"m-0 pl-3\">10 sec ago</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/images/avatar/2.jpg"), "html", null, true);
        echo "\" class=\" rounded-circle mr-3\" alt=\"\">Walter R.</td>
                                                    <td>Pixel 2</td>
                                                    <td><span>Canada</span></td>
                                                    <td>
                                                        <div>
                                                            <div class=\"progress\" style=\"height: 6px\">
                                                                <div class=\"progress-bar bg-success\" style=\"width: 50%\"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><i class=\"fa fa-circle-o text-success  mr-2\"></i> Paid</td>
                                                    <td>
                                                        <span>Last Login</span>
                                                        <span class=\"m-0 pl-3\">50 sec ago</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/images/avatar/3.jpg"), "html", null, true);
        echo "\" class=\" rounded-circle mr-3\" alt=\"\">Andrew D.</td>
                                                    <td>OnePlus</td>
                                                    <td><span>Germany</span></td>
                                                    <td>
                                                        <div>
                                                            <div class=\"progress\" style=\"height: 6px\">
                                                                <div class=\"progress-bar bg-warning\" style=\"width: 50%\"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><i class=\"fa fa-circle-o text-warning  mr-2\"></i> Pending</td>
                                                    <td>
                                                        <span>Last Login</span>
                                                        <span class=\"m-0 pl-3\">10 sec ago</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><img src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/images/avatar/6.jpg"), "html", null, true);
        echo "\" class=\" rounded-circle mr-3\" alt=\"\"> Megan S.</td>
                                                    <td>Galaxy</td>
                                                    <td><span>Japan</span></td>
                                                    <td>
                                                        <div>
                                                            <div class=\"progress\" style=\"height: 6px\">
                                                                <div class=\"progress-bar bg-success\" style=\"width: 50%\"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><i class=\"fa fa-circle-o text-success  mr-2\"></i> Paid</td>
                                                    <td>
                                                        <span>Last Login</span>
                                                        <span class=\"m-0 pl-3\">10 sec ago</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><img src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/images/avatar/4.jpg"), "html", null, true);
        echo "\" class=\" rounded-circle mr-3\" alt=\"\"> Doris R.</td>
                                                    <td>Moto Z2</td>
                                                    <td><span>England</span></td>
                                                    <td>
                                                        <div>
                                                            <div class=\"progress\" style=\"height: 6px\">
                                                                <div class=\"progress-bar bg-success\" style=\"width: 50%\"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><i class=\"fa fa-circle-o text-success  mr-2\"></i> Paid</td>
                                                    <td>
                                                        <span>Last Login</span>
                                                        <span class=\"m-0 pl-3\">10 sec ago</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><img src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/images/avatar/5.jpg"), "html", null, true);
        echo "\" class=\" rounded-circle mr-3\" alt=\"\">Elizabeth W.</td>
                                                    <td>Notebook Asus</td>
                                                    <td><span>China</span></td>
                                                    <td>
                                                        <div>
                                                            <div class=\"progress\" style=\"height: 6px\">
                                                                <div class=\"progress-bar bg-warning\" style=\"width: 50%\"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><i class=\"fa fa-circle-o text-warning  mr-2\"></i> Pending</td>
                                                    <td>
                                                        <span>Last Login</span>
                                                        <span class=\"m-0 pl-3\">10 sec ago</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 112,  191 => 95,  171 => 78,  151 => 61,  131 => 44,  109 => 25,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello DashboardController!{% endblock %}

{% block body %}
  <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"active-member\">
                                    <div class=\"table-responsive\">
                                        <table class=\"table table-xs mb-0\">
                                            <thead>
                                                <tr>
                                                    <th>Customers</th>
                                                    <th>Product</th>
                                                    <th>Country</th>
                                                    <th>Status</th>
                                                    <th>Payment Method</th>
                                                    <th>Activity</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><img src=\"{{asset('back//images/avatar/1.jpg')}}\" class=\" rounded-circle mr-3\" alt=\"\">Sarah Smith</td>
                                                    <td>iPhone X</td>
                                                    <td>
                                                        <span>United States</span>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <div class=\"progress\" style=\"height: 6px\">
                                                                <div class=\"progress-bar bg-success\" style=\"width: 50%\"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><i class=\"fa fa-circle-o text-success  mr-2\"></i> Paid</td>
                                                    <td>
                                                        <span>Last Login</span>
                                                        <span class=\"m-0 pl-3\">10 sec ago</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><img src=\"{{asset('back/images/avatar/2.jpg')}}\" class=\" rounded-circle mr-3\" alt=\"\">Walter R.</td>
                                                    <td>Pixel 2</td>
                                                    <td><span>Canada</span></td>
                                                    <td>
                                                        <div>
                                                            <div class=\"progress\" style=\"height: 6px\">
                                                                <div class=\"progress-bar bg-success\" style=\"width: 50%\"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><i class=\"fa fa-circle-o text-success  mr-2\"></i> Paid</td>
                                                    <td>
                                                        <span>Last Login</span>
                                                        <span class=\"m-0 pl-3\">50 sec ago</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><img src=\"{{asset('back/images/avatar/3.jpg')}}\" class=\" rounded-circle mr-3\" alt=\"\">Andrew D.</td>
                                                    <td>OnePlus</td>
                                                    <td><span>Germany</span></td>
                                                    <td>
                                                        <div>
                                                            <div class=\"progress\" style=\"height: 6px\">
                                                                <div class=\"progress-bar bg-warning\" style=\"width: 50%\"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><i class=\"fa fa-circle-o text-warning  mr-2\"></i> Pending</td>
                                                    <td>
                                                        <span>Last Login</span>
                                                        <span class=\"m-0 pl-3\">10 sec ago</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><img src=\"{{asset('back/images/avatar/6.jpg')}}\" class=\" rounded-circle mr-3\" alt=\"\"> Megan S.</td>
                                                    <td>Galaxy</td>
                                                    <td><span>Japan</span></td>
                                                    <td>
                                                        <div>
                                                            <div class=\"progress\" style=\"height: 6px\">
                                                                <div class=\"progress-bar bg-success\" style=\"width: 50%\"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><i class=\"fa fa-circle-o text-success  mr-2\"></i> Paid</td>
                                                    <td>
                                                        <span>Last Login</span>
                                                        <span class=\"m-0 pl-3\">10 sec ago</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><img src=\"{{asset('back/images/avatar/4.jpg')}}\" class=\" rounded-circle mr-3\" alt=\"\"> Doris R.</td>
                                                    <td>Moto Z2</td>
                                                    <td><span>England</span></td>
                                                    <td>
                                                        <div>
                                                            <div class=\"progress\" style=\"height: 6px\">
                                                                <div class=\"progress-bar bg-success\" style=\"width: 50%\"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><i class=\"fa fa-circle-o text-success  mr-2\"></i> Paid</td>
                                                    <td>
                                                        <span>Last Login</span>
                                                        <span class=\"m-0 pl-3\">10 sec ago</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><img src=\"{{asset('back/images/avatar/5.jpg')}}\" class=\" rounded-circle mr-3\" alt=\"\">Elizabeth W.</td>
                                                    <td>Notebook Asus</td>
                                                    <td><span>China</span></td>
                                                    <td>
                                                        <div>
                                                            <div class=\"progress\" style=\"height: 6px\">
                                                                <div class=\"progress-bar bg-warning\" style=\"width: 50%\"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><i class=\"fa fa-circle-o text-warning  mr-2\"></i> Pending</td>
                                                    <td>
                                                        <span>Last Login</span>
                                                        <span class=\"m-0 pl-3\">10 sec ago</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>
{% endblock %}
", "dashboard/index.html.twig", "D:\\docker\\symfony_Demo_Docker-master\\templates\\dashboard\\index.html.twig");
    }
}
