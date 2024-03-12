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

/* reset_password/request.html.twig */
class __TwigTemplate_e89d6a396b283c3fddad820268918dc1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/request.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/request.html.twig"));

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
                    ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 38, $this->source); })()), 'form_start');
        echo "
                    <div class=\"card login-form mb-0\">
                        <div class=\"card-body pt-5\">
                            ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "flashes", [0 => "reset_password_error"], "method", false, false, false, 41));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_error"]) {
            // line 42
            echo "                                <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["flash_error"], "html", null, true);
            echo "</div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                            <a class=\"text-center\" href=\"\"> <h4> Mot de passe oublié</h4></a>

                            <div class=\"mt-5 mb-5 login-input\" >
                                <div>
                                    <small>
                                        Entrez votre adresse e-mail et nous vous enverrons un lien pour réinitialiser votre mot de passe.
                                    </small>
                                </div>
                                ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 52, $this->source); })()), "email", [], "any", false, false, false, 52), 'row');
        echo "
<br>
                                <button class=\"btn login-form__btn submit w-100\" type=\"submit\">Envoyer</button>
                            </div>
                            <p class=\"mt-5 login-form__footer\"> <a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" class=\"text-primary\">Se connecter </a> </p>

                        </div>
                    </div>
                    ";
        // line 60
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 60, $this->source); })()), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>
</div>

<!--**********************************
    Scripts
***********************************-->

<script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/plugins/common/common.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/js/custom.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/js/settings.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/js/gleek.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 75
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
        return "reset_password/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 75,  154 => 74,  150 => 73,  146 => 72,  142 => 71,  128 => 60,  121 => 56,  114 => 52,  104 => 44,  95 => 42,  91 => 41,  85 => 38,  57 => 13,  43 => 1,);
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
                    {{ form_start(requestForm) }}
                    <div class=\"card login-form mb-0\">
                        <div class=\"card-body pt-5\">
                            {% for flash_error in app.flashes('reset_password_error') %}
                                <div class=\"alert alert-danger\" role=\"alert\">{{ flash_error }}</div>
                            {% endfor %}
                            <a class=\"text-center\" href=\"\"> <h4> Mot de passe oublié</h4></a>

                            <div class=\"mt-5 mb-5 login-input\" >
                                <div>
                                    <small>
                                        Entrez votre adresse e-mail et nous vous enverrons un lien pour réinitialiser votre mot de passe.
                                    </small>
                                </div>
                                {{ form_row(requestForm.email) }}
<br>
                                <button class=\"btn login-form__btn submit w-100\" type=\"submit\">Envoyer</button>
                            </div>
                            <p class=\"mt-5 login-form__footer\"> <a href=\"{{ path('app_login') }}\" class=\"text-primary\">Se connecter </a> </p>

                        </div>
                    </div>
                    {{ form_end(requestForm) }}
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
", "reset_password/request.html.twig", "D:\\docker\\symfony_Demo_Docker-master\\templates\\reset_password\\request.html.twig");
    }
}
