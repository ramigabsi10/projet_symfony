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

/* security/login.html.twig */
class __TwigTemplate_6926915dbbff15cee27bb5d4ff48374f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

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
    <!-- <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.5.0/css/all.css\" integrity=\"sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU\" crossorigin=\"anonymous\"> -->

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
                            <a class=\"text-center\" href=\"\"> <h4>Connexion</h4></a>

                            <form class=\"mt-5 mb-5 login-input\" method=\"post\">
                                ";
        // line 43
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 43, $this->source); })())) {
            // line 44
            echo "                                    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 44, $this->source); })()), "messageKey", [], "any", false, false, false, 44), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 44, $this->source); })()), "messageData", [], "any", false, false, false, 44), "security"), "html", null, true);
            echo "</div>
                                ";
        }
        // line 46
        echo "
                                <div class=\"form-group\">
                                    <input type=\"email\"  value=\"";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 48, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" placeholder=\"Email\">
                                </div>
                                <div class=\"form-group\">
                                    
                                    <input type=\"password\" name=\"password\" id=\"inputPassword\" autocomplete=\"current-password\" required class=\"form-control\" placeholder=\"Password\">
                                </div>

                                <input type=\"hidden\" name=\"_csrf_token\"
                                       value=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                                <button class=\"btn login-form__btn submit w-100\" type=\"submit\">Connexion</button>
                        
                                        <a href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        echo "\" class=\"text-primary\">Mot de passe oublié? </a>
                            </form>
                            <p class=\"mt-5 login-form__footer\">Vous n'avez pas de compte? <a href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\" class=\"text-primary\">S'inscrire </a> maintenant</p>

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
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/plugins/common/common.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/js/custom.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/js/settings.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/js/gleek.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 79
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
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 79,  153 => 78,  149 => 77,  145 => 76,  141 => 75,  124 => 61,  119 => 59,  113 => 56,  102 => 48,  98 => 46,  92 => 44,  90 => 43,  57 => 13,  43 => 1,);
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
    <!-- <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.5.0/css/all.css\" integrity=\"sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU\" crossorigin=\"anonymous\"> -->

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
                            <a class=\"text-center\" href=\"\"> <h4>Connexion</h4></a>

                            <form class=\"mt-5 mb-5 login-input\" method=\"post\">
                                {% if error %}
                                    <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                                {% endif %}

                                <div class=\"form-group\">
                                    <input type=\"email\"  value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" placeholder=\"Email\">
                                </div>
                                <div class=\"form-group\">
                                    
                                    <input type=\"password\" name=\"password\" id=\"inputPassword\" autocomplete=\"current-password\" required class=\"form-control\" placeholder=\"Password\">
                                </div>

                                <input type=\"hidden\" name=\"_csrf_token\"
                                       value=\"{{ csrf_token('authenticate') }}\">
                                <button class=\"btn login-form__btn submit w-100\" type=\"submit\">Connexion</button>
                        
                                        <a href=\"{{ path('app_forgot_password_request') }}\" class=\"text-primary\">Mot de passe oublié? </a>
                            </form>
                            <p class=\"mt-5 login-form__footer\">Vous n'avez pas de compte? <a href=\"{{path('app_register')}}\" class=\"text-primary\">S'inscrire </a> maintenant</p>

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
", "security/login.html.twig", "D:\\docker\\symfony_Demo_Docker-master\\templates\\security\\login.html.twig");
    }
}
