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

/* registration/register.html.twig */
class __TwigTemplate_935239c32f4d0edb9b281ff7c5062c75 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html class=\"h-100\" lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <title>AMS Symfony</title>
    <!-- Favicon icon -->
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"../../assets/images/favicon.png\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.5.0/css/all.css\" integrity=\"sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU\" crossorigin=\"anonymous\">

    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

</head>

<body class=\"h-100\">

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





<div class=\"login-form-bg h-100\">
    <div class=\"container h-100\">
        <div class=\"row justify-content-center h-100\">
            <div class=\"col-xl-6\">
                <div class=\"form-input-content\">
                    <div class=\"card login-form mb-0\">
                        <div class=\"card-body pt-5\">

                            <a class=\"text-center\" href=\"\"> <h4>Inscription</h4></a>

                            <div class=\"mt-5 mb-5 login-input\">
                                ";
        // line 48
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 48, $this->source); })()), 'form_start');
        echo "

                                <div class=\"form-group\">
                                    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 51, $this->source); })()), "nom", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Votre nom"]]);
        echo "
                                    <span style=\"color:red;\">";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 52, $this->source); })()), "email", [], "any", false, false, false, 52), 'errors');
        echo "</span>
                                </div>

                                <div class=\"form-group\">
                                    ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 56, $this->source); })()), "email", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Email"]]);
        echo "
                                    <span style=\"color:red;\">";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 57, $this->source); })()), "email", [], "any", false, false, false, 57), 'errors');
        echo "</span>
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 60, $this->source); })()), "plainPassword", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Mot de passe"]]);
        echo "


                                </div>


                                <button class=\"btn login-form__btn submit w-100\" type=\"submit\">S'insrire</button>

                            </div>   ";
        // line 68
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 68, $this->source); })()), 'form_end');
        echo "
                            <p class=\"mt-5 login-form__footer\">Déjà membre?<a href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" class=\"text-primary\"> Connectez-vous </a> </p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>




<!--**********************************
    Scripts
***********************************-->

<script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/plugins/common/common.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/js/custom.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/js/settings.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/js/gleek.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/js/styleSwitcher.js"), "html", null, true);
        echo "\"></script>
</body>
</html>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 91,  170 => 90,  166 => 89,  162 => 88,  158 => 87,  137 => 69,  133 => 68,  122 => 60,  116 => 57,  112 => 56,  105 => 52,  101 => 51,  95 => 48,  57 => 13,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html class=\"h-100\" lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <title>AMS Symfony</title>
    <!-- Favicon icon -->
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"../../assets/images/favicon.png\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.5.0/css/all.css\" integrity=\"sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU\" crossorigin=\"anonymous\">

    <link href=\"{{asset('back/css/style.css')}}\" rel=\"stylesheet\">

</head>

<body class=\"h-100\">

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





<div class=\"login-form-bg h-100\">
    <div class=\"container h-100\">
        <div class=\"row justify-content-center h-100\">
            <div class=\"col-xl-6\">
                <div class=\"form-input-content\">
                    <div class=\"card login-form mb-0\">
                        <div class=\"card-body pt-5\">

                            <a class=\"text-center\" href=\"\"> <h4>Inscription</h4></a>

                            <div class=\"mt-5 mb-5 login-input\">
                                {{ form_start(registrationForm) }}

                                <div class=\"form-group\">
                                    {{ form_widget(registrationForm.nom,{'attr':{'class':'form-control',placeholder:\"Votre nom\"}}) }}
                                    <span style=\"color:red;\">{{ form_errors(registrationForm.email) }}</span>
                                </div>

                                <div class=\"form-group\">
                                    {{ form_widget(registrationForm.email,{'attr':{'class':'form-control',placeholder:\"Email\"}}) }}
                                    <span style=\"color:red;\">{{ form_errors(registrationForm.email) }}</span>
                                </div>
                                <div class=\"form-group\">
                                    {{ form_widget(registrationForm.plainPassword,{'attr':{'class':'form-control',placeholder:\"Mot de passe\"}})  }}


                                </div>


                                <button class=\"btn login-form__btn submit w-100\" type=\"submit\">S'insrire</button>

                            </div>   {{ form_end(registrationForm) }}
                            <p class=\"mt-5 login-form__footer\">Déjà membre?<a href=\"{{ path('app_login') }}\" class=\"text-primary\"> Connectez-vous </a> </p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>




<!--**********************************
    Scripts
***********************************-->

<script src=\"{{asset('back/plugins/common/common.min.js')}}\"></script>
<script src=\"{{asset('back/js/custom.min.js')}}\"></script>
<script src=\"{{asset('back/js/settings.js')}}\"></script>
<script src=\"{{asset('back/js/gleek.js')}}\"></script>
<script src=\"{{asset('back/js/styleSwitcher.js')}}\"></script>
</body>
</html>

", "registration/register.html.twig", "D:\\docker\\symfony_Demo_Docker-master\\templates\\registration\\register.html.twig");
    }
}
