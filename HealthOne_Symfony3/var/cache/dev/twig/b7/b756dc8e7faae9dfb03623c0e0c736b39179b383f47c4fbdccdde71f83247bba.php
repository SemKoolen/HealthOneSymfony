<?php

/* default/home.html.twig */
class __TwigTemplate_46451b6a97a93eb2e950ca975a829ca4016c2c47b851ee7f66580622e2ac81a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/home.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/home.html.twig"));

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

        echo "Home";
        
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
        echo "    <div class=\"container\" style=\"padding:0px;\">
        <div class=\"row\" id=\"nav\">
            <div class=\"col\">
                <nav class=\"navbar navbar-light navbar-expand-md navbar-fixed-top navigation-clean-button\" style=\"background-color:#424242;\">
                    <div class=\"container\"><a class=\"navbar-brand\" href=\"#\"><span><img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\"></span> </a><button class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#navcol-1\"><span class=\"sr-only\">Toggle navigation</span><span class=\"navbar-toggler-icon\"></span></button>
                        <div
                                class=\"collapse navbar-collapse\" id=\"navcol-1\">
                            <ul class=\"nav navbar-nav nav-right\">
                                <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link active\" href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">home </a></li>
                                <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contactpage");
        echo "\">contact </a></li>
                            </ul>
                            <p class=\"ml-auto navbar-text actions\">
                                <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" class=\"login\">Log In</a>
                                <a class=\"btn btn-light action-button\" role=\"button\" href=\"signup.html\">Sign Up</a>
                            </p>
                            <div id=\"overlay\">
                                <div id=\"text\">
                                    <div class=\"text-center\">
                                        <i class=\"material-icons md-128\">
                                            account_circle
                                        </i>
                                    </div>
                                    <div class=\"inputfields\">
                                        ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["LoginForm"] ?? $this->getContext($context, "LoginForm")), 'form_start');
        echo "
                                        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["LoginForm"] ?? $this->getContext($context, "LoginForm")), "username", array()), 'row', array("full_name" => "_username"));
        echo "
                                        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["LoginForm"] ?? $this->getContext($context, "LoginForm")), "password", array()), 'row', array("full_name" => "_password"));
        echo "
                                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["LoginForm"] ?? $this->getContext($context, "LoginForm")), 'widget', array("attr" => array("class" => "text-center inputfields", "novalidate" => "novalidate")));
        echo "
                                        ";
        // line 32
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 33
            echo "                                        <div><p class=\"ErrorMessage\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</p></div>
                                        ";
        } else {
            // line 35
            echo "                                            <br>
                                        ";
        }
        // line 37
        echo "                                            <div class=\"formbuttons text-center\">
                                                <button name=\"submit\" type=\"submit\" class=\"btn btn-success col-sm-5\">
                                                    <span class=\"material-icons md-36\">done</span>
                                                </button>
                                                <a  type=\"button\" href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" class=\"btn btn-danger col-sm-5 border-1\">
                                                    <span class=\"material-icons md-36\">clear</span>
                                                </a>
                                            </div>
                                        ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["LoginForm"] ?? $this->getContext($context, "LoginForm")), 'form_end');
        echo "
                                    </div>
                                </div>
                            </div>
                            <script>
                                function on() {
                                    document.getElementById(\"overlay\").style.display = \"block\";
                                }

                                function off() {
                                    document.getElementById(\"overlay\").style.display = \"none\";
                                }
                            </script>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"simple-slider\">
                    <div class=\"swiper-container\">
                        <div class=\"swiper-wrapper\">
                            <div class=\"swiper-slide\" style=\"background-image:url(";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/apotheker.jpg"), "html", null, true);
        echo ");\"></div>
                            <div class=\"swiper-slide\" style=\"background-image:url(";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/lab.jpg"), "html", null, true);
        echo ");\"></div>
                            <div class=\"swiper-slide\" style=\"background-image:url(";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/eyevine3.14492330_boughtWEB.jpg"), "html", null, true);
        echo ");\"></div>
                        </div>
                        <div class=\"swiper-pagination\"></div>
                        <div class=\"swiper-button-prev\"></div>
                        <div class=\"swiper-button-next\"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"features-boxed\">
                    <div class=\"intro\">
                        <h2 class=\"text-center\">Features </h2>
                        <p class=\"text-center\">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae.</p>
                    </div>
                    <div class=\"row justify-content-center features\" style=\"padding:30px 10px;\">
                        <div class=\"col-sm-6 col-md-5 col-lg-4 item\">
                            <div class=\"box\"><i class=\"fa fa-map-marker icon\"></i>
                                <h3 class=\"name\">Works everywhere</h3>
                                <p class=\"description\">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a href=\"#\" class=\"learn-more\">Learn more »</a></div>
                        </div>
                        <div class=\"col-sm-6 col-md-5 col-lg-4 item\">
                            <div class=\"box\"><i class=\"fa fa-clock-o icon\"></i>
                                <h3 class=\"name\">Always available</h3>
                                <p class=\"description\">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a href=\"#\" class=\"learn-more\">Learn more »</a></div>
                        </div>
                        <div class=\"col-sm-6 col-md-5 col-lg-4 item\">
                            <div class=\"box\"><i class=\"fa fa-list-alt icon\"></i>
                                <h3 class=\"name\">Customizable </h3>
                                <p class=\"description\">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a href=\"#\" class=\"learn-more\">Learn more »</a></div>
                        </div>
                        <div class=\"col-sm-6 col-md-5 col-lg-4 item\">
                            <div class=\"box\"><i class=\"fa fa-plane icon\"></i>
                                <h3 class=\"name\">Fast </h3>
                                <p class=\"description\">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a href=\"#\" class=\"learn-more\">Learn more »</a></div>
                        </div>
                        <div class=\"col-sm-6 col-md-5 col-lg-4 item\">
                            <div class=\"box\"><i class=\"fa fa-phone icon\"></i>
                                <h3 class=\"name\">Mobile-first</h3>
                                <p class=\"description\">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a href=\"#\" class=\"learn-more\">Learn more »</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 117
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 118
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/login.js"), "html", null, true);
        echo "\"></script>
        <script>";
        // line 119
        echo twig_escape_filter($this->env, ($context["script"] ?? $this->getContext($context, "script")), "html", null, true);
        echo "</script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 119,  249 => 118,  231 => 117,  181 => 70,  177 => 69,  173 => 68,  147 => 45,  140 => 41,  134 => 37,  130 => 35,  124 => 33,  122 => 32,  118 => 31,  114 => 30,  110 => 29,  106 => 28,  92 => 17,  86 => 14,  82 => 13,  75 => 9,  69 => 5,  60 => 4,  42 => 3,  11 => 1,);
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

{% block title %}Home{% endblock %}
{% block body %}
    <div class=\"container\" style=\"padding:0px;\">
        <div class=\"row\" id=\"nav\">
            <div class=\"col\">
                <nav class=\"navbar navbar-light navbar-expand-md navbar-fixed-top navigation-clean-button\" style=\"background-color:#424242;\">
                    <div class=\"container\"><a class=\"navbar-brand\" href=\"#\"><span><img src=\"{{ asset('img/logo.png') }}\"></span> </a><button class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#navcol-1\"><span class=\"sr-only\">Toggle navigation</span><span class=\"navbar-toggler-icon\"></span></button>
                        <div
                                class=\"collapse navbar-collapse\" id=\"navcol-1\">
                            <ul class=\"nav navbar-nav nav-right\">
                                <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link active\" href=\"{{ path('homepage') }}\">home </a></li>
                                <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link\" href=\"{{ path('contactpage') }}\">contact </a></li>
                            </ul>
                            <p class=\"ml-auto navbar-text actions\">
                                <a href=\"{{ path('login') }}\" class=\"login\">Log In</a>
                                <a class=\"btn btn-light action-button\" role=\"button\" href=\"signup.html\">Sign Up</a>
                            </p>
                            <div id=\"overlay\">
                                <div id=\"text\">
                                    <div class=\"text-center\">
                                        <i class=\"material-icons md-128\">
                                            account_circle
                                        </i>
                                    </div>
                                    <div class=\"inputfields\">
                                        {{ form_start(LoginForm) }}
                                        {{ form_row(LoginForm.username, {'full_name':'_username' }) }}
                                        {{ form_row(LoginForm.password, {'full_name':'_password'}) }}
                                        {{ form_widget(LoginForm, {'attr': { 'class': 'text-center inputfields', 'novalidate': 'novalidate'}}) }}
                                        {% if error %}
                                        <div><p class=\"ErrorMessage\"> {{ error.messageKey|trans(error.messageData, 'security') }}</p></div>
                                        {% else %}
                                            <br>
                                        {% endif %}
                                            <div class=\"formbuttons text-center\">
                                                <button name=\"submit\" type=\"submit\" class=\"btn btn-success col-sm-5\">
                                                    <span class=\"material-icons md-36\">done</span>
                                                </button>
                                                <a  type=\"button\" href=\"{{ path('homepage') }}\" class=\"btn btn-danger col-sm-5 border-1\">
                                                    <span class=\"material-icons md-36\">clear</span>
                                                </a>
                                            </div>
                                        {{ form_end(LoginForm) }}
                                    </div>
                                </div>
                            </div>
                            <script>
                                function on() {
                                    document.getElementById(\"overlay\").style.display = \"block\";
                                }

                                function off() {
                                    document.getElementById(\"overlay\").style.display = \"none\";
                                }
                            </script>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"simple-slider\">
                    <div class=\"swiper-container\">
                        <div class=\"swiper-wrapper\">
                            <div class=\"swiper-slide\" style=\"background-image:url({{ asset('img/apotheker.jpg') }});\"></div>
                            <div class=\"swiper-slide\" style=\"background-image:url({{ asset('img/lab.jpg') }});\"></div>
                            <div class=\"swiper-slide\" style=\"background-image:url({{ asset('img/eyevine3.14492330_boughtWEB.jpg') }});\"></div>
                        </div>
                        <div class=\"swiper-pagination\"></div>
                        <div class=\"swiper-button-prev\"></div>
                        <div class=\"swiper-button-next\"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"features-boxed\">
                    <div class=\"intro\">
                        <h2 class=\"text-center\">Features </h2>
                        <p class=\"text-center\">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae.</p>
                    </div>
                    <div class=\"row justify-content-center features\" style=\"padding:30px 10px;\">
                        <div class=\"col-sm-6 col-md-5 col-lg-4 item\">
                            <div class=\"box\"><i class=\"fa fa-map-marker icon\"></i>
                                <h3 class=\"name\">Works everywhere</h3>
                                <p class=\"description\">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a href=\"#\" class=\"learn-more\">Learn more »</a></div>
                        </div>
                        <div class=\"col-sm-6 col-md-5 col-lg-4 item\">
                            <div class=\"box\"><i class=\"fa fa-clock-o icon\"></i>
                                <h3 class=\"name\">Always available</h3>
                                <p class=\"description\">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a href=\"#\" class=\"learn-more\">Learn more »</a></div>
                        </div>
                        <div class=\"col-sm-6 col-md-5 col-lg-4 item\">
                            <div class=\"box\"><i class=\"fa fa-list-alt icon\"></i>
                                <h3 class=\"name\">Customizable </h3>
                                <p class=\"description\">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a href=\"#\" class=\"learn-more\">Learn more »</a></div>
                        </div>
                        <div class=\"col-sm-6 col-md-5 col-lg-4 item\">
                            <div class=\"box\"><i class=\"fa fa-plane icon\"></i>
                                <h3 class=\"name\">Fast </h3>
                                <p class=\"description\">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a href=\"#\" class=\"learn-more\">Learn more »</a></div>
                        </div>
                        <div class=\"col-sm-6 col-md-5 col-lg-4 item\">
                            <div class=\"box\"><i class=\"fa fa-phone icon\"></i>
                                <h3 class=\"name\">Mobile-first</h3>
                                <p class=\"description\">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a href=\"#\" class=\"learn-more\">Learn more »</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {% block javascripts %}
        <script src=\"{{ asset('js/login.js') }}\"></script>
        <script>{{ script }}</script>
    {% endblock %}
{% endblock %}
", "default/home.html.twig", "C:\\Users\\Sem\\Documents\\GitHub\\HealthOneSymfony\\HealthOne_Symfony3\\app\\Resources\\views\\default\\home.html.twig");
    }
}
