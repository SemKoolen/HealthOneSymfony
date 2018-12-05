<?php

/* default/contact.html.twig */
class __TwigTemplate_5ba26768e16f8b055a6f4ca227d45bf7cbd5e8a14087ef0c1c58048b64e60b4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/contact.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contact";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
    <div class=\"container\" style=\"padding:0px;background-color:rgba(255,255,255,0.53);\">
        <nav class=\"navbar navbar-light navbar-expand-md navbar-fixed-top navigation-clean-button\" style=\"background-color:#424242;\">
            <div class=\"container\"><a class=\"navbar-brand\" href=\"#\"><span><img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\"></span> </a><button class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#navcol-1\"><span class=\"sr-only\">Toggle navigation</span><span class=\"navbar-toggler-icon\"></span></button>
                <div
                    class=\"collapse navbar-collapse\" id=\"navcol-1\">
                    <ul class=\"nav navbar-nav nav-right\">
                        <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">home </a></li>
                        <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link active\" href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contactpage");
        echo "\">contact </a></li>
                    </ul>
                    <p class=\"ml-auto navbar-text actions\">
                        <a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" class=\"login\">Log In</a>
                        <a class=\"btn btn-light action-button\" role=\"button\" href=\"signup.html\">Sign Up</a>
                    </p>
            </div>
    </div>
    </nav>
    <section id=\"contact\" style=\"padding:40px;padding-right:5px;padding-left:4px;\">
        <div class=\"container\">
            <form action=\"javascript:void();\" method=\"post\" id=\"contactForm\" style=\"padding:15px;\">
                <div class=\"form-row\" style=\"margin-left:0px;margin-right:0px;padding:10px;\">
                    <div class=\"col-md-6\" style=\"padding-left:20px;padding-right:20px;\">
                        <fieldset></fieldset>
                        <legend><i class=\"fa fa-info\"></i>&nbsp;Bedrijfsinformatie</legend>
                        <p></p>
                        <div class=\"table-responsive\">
                            <table class=\"table\">
                                <tbody>
                                    <tr>
                                        <td><i class=\"fa fa-building\"></i></td>
                                        <td>KvK: 58314687, BTW:&nbsp;NL223674965B01</td>
                                    </tr>
                                    <tr>
                                        <td><i class=\"fa fa-map-marker\"></i></td>
                                        <td>Prins Bernhardweg 27, 7241 DH Lochem</td>
                                    </tr>
                                    <tr>
                                        <td><i class=\"fa fa-phone\"></i></td>
                                        <td>085 - 301 90 77 </td>
                                    </tr>
                                    <tr>
                                        <td><i class=\"fa fa-envelope\"></i></td>
                                        <td>info@stackip.nl</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class=\"col-12 col-md-6\" id=\"message\" style=\"padding-right:20px;padding-left:20px;\">
                        <fieldset>
                            <legend><i class=\"fa fa-envelope\"></i>&nbsp;Contactformulier</legend>
                        </fieldset>
                        <div class=\"form-group has-feedback\"><label for=\"from_name\">Volledige naam</label><input class=\"form-control\" type=\"text\" name=\"from_name\" required=\"\" placeholder=\"Voornaam en Achternaam\" id=\"from_name\" tabindex=\"-1\"></div>
                        <div class=\"form-group has-feedback\"><label for=\"from_email\">Email</label><input class=\"form-control\" type=\"email\" name=\"from_email\" required=\"\" placeholder=\"Uw email adres\" id=\"from_email\"></div>
                        <div class=\"form-row\">
                            <div class=\"col-sm-6\">
                                <div class=\"form-group has-feedback\"><label for=\"from_phone\">Titel van bericht</label><input class=\"form-control\" type=\"text\" name=\"subject\" placeholder=\"Titel van bericht\" id=\"from_phone\"></div>
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\"><label for=\"calltime\">Afdeling</label>
                                     <select class=\"form-control\" id=\"calltime\">
                                        <option>Zorgverzekeraar</option>
                                        <option>Web-developer</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group\"><label for=\"comments\">Bericht</label><textarea class=\"form-control\" rows=\"5\" name=\"Comments\" placeholder=\"Type uw bericht hier..\" id=\"comments\"></textarea></div>
                        <div class=\"form-group\"><button class=\"btn btn-primary active btn-block\" type=\"submit\" style=\"background-color:#303641;\">Send <i class=\"fa fa-chevron-circle-right\"></i></button></div>
                        <hr>
                    </div>
                </div>
            </form>
        </div>
    </section>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 16,  84 => 13,  80 => 12,  73 => 8,  68 => 5,  59 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Contact{% endblock %}
{% block body %}

    <div class=\"container\" style=\"padding:0px;background-color:rgba(255,255,255,0.53);\">
        <nav class=\"navbar navbar-light navbar-expand-md navbar-fixed-top navigation-clean-button\" style=\"background-color:#424242;\">
            <div class=\"container\"><a class=\"navbar-brand\" href=\"#\"><span><img src=\"{{ asset('img/logo.png') }}\"></span> </a><button class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#navcol-1\"><span class=\"sr-only\">Toggle navigation</span><span class=\"navbar-toggler-icon\"></span></button>
                <div
                    class=\"collapse navbar-collapse\" id=\"navcol-1\">
                    <ul class=\"nav navbar-nav nav-right\">
                        <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=\"{{ path('homepage') }}\">home </a></li>
                        <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link active\" href=\"{{ path('contactpage') }}\">contact </a></li>
                    </ul>
                    <p class=\"ml-auto navbar-text actions\">
                        <a href=\"{{ path('login') }}\" class=\"login\">Log In</a>
                        <a class=\"btn btn-light action-button\" role=\"button\" href=\"signup.html\">Sign Up</a>
                    </p>
            </div>
    </div>
    </nav>
    <section id=\"contact\" style=\"padding:40px;padding-right:5px;padding-left:4px;\">
        <div class=\"container\">
            <form action=\"javascript:void();\" method=\"post\" id=\"contactForm\" style=\"padding:15px;\">
                <div class=\"form-row\" style=\"margin-left:0px;margin-right:0px;padding:10px;\">
                    <div class=\"col-md-6\" style=\"padding-left:20px;padding-right:20px;\">
                        <fieldset></fieldset>
                        <legend><i class=\"fa fa-info\"></i>&nbsp;Bedrijfsinformatie</legend>
                        <p></p>
                        <div class=\"table-responsive\">
                            <table class=\"table\">
                                <tbody>
                                    <tr>
                                        <td><i class=\"fa fa-building\"></i></td>
                                        <td>KvK: 58314687, BTW:&nbsp;NL223674965B01</td>
                                    </tr>
                                    <tr>
                                        <td><i class=\"fa fa-map-marker\"></i></td>
                                        <td>Prins Bernhardweg 27, 7241 DH Lochem</td>
                                    </tr>
                                    <tr>
                                        <td><i class=\"fa fa-phone\"></i></td>
                                        <td>085 - 301 90 77 </td>
                                    </tr>
                                    <tr>
                                        <td><i class=\"fa fa-envelope\"></i></td>
                                        <td>info@stackip.nl</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class=\"col-12 col-md-6\" id=\"message\" style=\"padding-right:20px;padding-left:20px;\">
                        <fieldset>
                            <legend><i class=\"fa fa-envelope\"></i>&nbsp;Contactformulier</legend>
                        </fieldset>
                        <div class=\"form-group has-feedback\"><label for=\"from_name\">Volledige naam</label><input class=\"form-control\" type=\"text\" name=\"from_name\" required=\"\" placeholder=\"Voornaam en Achternaam\" id=\"from_name\" tabindex=\"-1\"></div>
                        <div class=\"form-group has-feedback\"><label for=\"from_email\">Email</label><input class=\"form-control\" type=\"email\" name=\"from_email\" required=\"\" placeholder=\"Uw email adres\" id=\"from_email\"></div>
                        <div class=\"form-row\">
                            <div class=\"col-sm-6\">
                                <div class=\"form-group has-feedback\"><label for=\"from_phone\">Titel van bericht</label><input class=\"form-control\" type=\"text\" name=\"subject\" placeholder=\"Titel van bericht\" id=\"from_phone\"></div>
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\"><label for=\"calltime\">Afdeling</label>
                                     <select class=\"form-control\" id=\"calltime\">
                                        <option>Zorgverzekeraar</option>
                                        <option>Web-developer</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group\"><label for=\"comments\">Bericht</label><textarea class=\"form-control\" rows=\"5\" name=\"Comments\" placeholder=\"Type uw bericht hier..\" id=\"comments\"></textarea></div>
                        <div class=\"form-group\"><button class=\"btn btn-primary active btn-block\" type=\"submit\" style=\"background-color:#303641;\">Send <i class=\"fa fa-chevron-circle-right\"></i></button></div>
                        <hr>
                    </div>
                </div>
            </form>
        </div>
    </section>
    </div>
{% endblock %}", "default/contact.html.twig", "C:\\Users\\Sem\\Documents\\GitHub\\HealthOneSymfony\\HealthOne_Symfony3\\app\\Resources\\views\\default\\contact.html.twig");
    }
}
