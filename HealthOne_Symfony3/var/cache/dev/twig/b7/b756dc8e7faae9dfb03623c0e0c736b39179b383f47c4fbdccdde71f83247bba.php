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
                                <a href=\"#\" onclick=\"on()\" class=\"login\">Log In</a>
                                <a class=\"btn btn-light action-button\" role=\"button\" href=\"signup.html\">Sign Up</a>
                            </p>
                            <div id=\"overlay\">
                                <div id=\"text\">
                                    <div class=\"text-center\">
                                        <i class=\"material-icons md-128\">
                                            account_circle
                                        </i>
                                    </div>
                                    ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["LoginForm"] ?? $this->getContext($context, "LoginForm")), 'form_start');
        echo "
                                    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["LoginForm"] ?? $this->getContext($context, "LoginForm")), 'widget');
        echo "
                                    ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["LoginForm"] ?? $this->getContext($context, "LoginForm")), 'form_end');
        echo "
                                    <form action=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" method=\"get\">
                                        <div class=\"form-group\">
                                            <label for=\"exampleSelect1\">Gebruiker</label>
                                            <select name=\"choice\" class=\"form-control\" id=\"exampleSelect1\">
                                                <option value=\"1\">Verzekeringsmedewerker</option>
                                                <option value=\"2\">Arts</option>
                                                <option value=\"3\">Apotheker</option>
                                            </select>
                                        </div>
                                        <button name=\"submit\" type=\"submit\" class=\"btn btn-success btn-sm float-left\">
                                            <span class=\"material-icons md-18\">done</span>
                                        </button>
                                        <button type=\"button\" onclick=\"off()\" class=\"btn btn-danger btn-sm float-right\">
                                            <span class=\"material-icons md-18\">clear</span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <?php
                                function Redirect(\$url, \$permanent = false)
                                {
                                    if (headers_sent() === false)
                                    {
                                        header('Location: ' . \$url, true, (\$permanent === true) ? 301 : 302);
                                    }

                                    exit();
                                }

                                if(isset(\$_GET['submit'])) {
                                    \$choice = \$_GET['choice'];
                                    switch (\$choice) {
                                        case 1: Redirect('";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("patients");
        echo "', false); break;
                                        case 2: Redirect('artsen.php', false); break;
                                        case 3: Redirect('patients.php', false); break;
                                    }
                                }
                            ?>
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
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/apotheker.jpg"), "html", null, true);
        echo ");\"></div>
                            <div class=\"swiper-slide\" style=\"background-image:url(";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/lab.jpg"), "html", null, true);
        echo ");\"></div>
                            <div class=\"swiper-slide\" style=\"background-image:url(";
        // line 89
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
    <script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/login.js"), "html", null, true);
        echo "\"></script>
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
        return array (  234 => 136,  184 => 89,  180 => 88,  176 => 87,  148 => 62,  113 => 30,  109 => 29,  105 => 28,  101 => 27,  85 => 14,  81 => 13,  74 => 9,  68 => 5,  59 => 4,  41 => 3,  11 => 1,);
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
                                <a href=\"#\" onclick=\"on()\" class=\"login\">Log In</a>
                                <a class=\"btn btn-light action-button\" role=\"button\" href=\"signup.html\">Sign Up</a>
                            </p>
                            <div id=\"overlay\">
                                <div id=\"text\">
                                    <div class=\"text-center\">
                                        <i class=\"material-icons md-128\">
                                            account_circle
                                        </i>
                                    </div>
                                    {{ form_start(LoginForm) }}
                                    {{ form_widget(LoginForm) }}
                                    {{ form_end(LoginForm) }}
                                    <form action=\"{{ path('homepage') }}\" method=\"get\">
                                        <div class=\"form-group\">
                                            <label for=\"exampleSelect1\">Gebruiker</label>
                                            <select name=\"choice\" class=\"form-control\" id=\"exampleSelect1\">
                                                <option value=\"1\">Verzekeringsmedewerker</option>
                                                <option value=\"2\">Arts</option>
                                                <option value=\"3\">Apotheker</option>
                                            </select>
                                        </div>
                                        <button name=\"submit\" type=\"submit\" class=\"btn btn-success btn-sm float-left\">
                                            <span class=\"material-icons md-18\">done</span>
                                        </button>
                                        <button type=\"button\" onclick=\"off()\" class=\"btn btn-danger btn-sm float-right\">
                                            <span class=\"material-icons md-18\">clear</span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <?php
                                function Redirect(\$url, \$permanent = false)
                                {
                                    if (headers_sent() === false)
                                    {
                                        header('Location: ' . \$url, true, (\$permanent === true) ? 301 : 302);
                                    }

                                    exit();
                                }

                                if(isset(\$_GET['submit'])) {
                                    \$choice = \$_GET['choice'];
                                    switch (\$choice) {
                                        case 1: Redirect('{{ path('patients') }}', false); break;
                                        case 2: Redirect('artsen.php', false); break;
                                        case 3: Redirect('patients.php', false); break;
                                    }
                                }
                            ?>
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
    <script src=\"{{ asset('js/login.js') }}\"></script>
{% endblock %}", "default/home.html.twig", "C:\\Users\\Sem\\Documents\\Health One\\HealthOne_Symfony3\\app\\Resources\\views\\default\\home.html.twig");
    }
}
