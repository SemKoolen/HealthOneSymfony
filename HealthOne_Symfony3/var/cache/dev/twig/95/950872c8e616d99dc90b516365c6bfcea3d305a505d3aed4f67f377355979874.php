<?php

/* admin/patients.html.twig */
class __TwigTemplate_7bf4b8e288af0476e1859793023bcb8212f10ba1f5322ac91967d961f5f66947 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/patients.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/patients.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/patients.html.twig"));

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

        echo "Patients";
        
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
        echo "    <div class=\"container\">
        <nav class=\"navbar navbar-expand-sm navbar-light bg-light\">
            <a class=\"navbar-brand\" href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">HealthOne</a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>

            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"#\">Klanten <span class=\"sr-only\">(current)</span></a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"artsen.php\">Artsen</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"medicijnen.php\">Medicijnen</a>
                    </li>
                </ul>
                <a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
        echo "\" class=\"btn btn-outline-danger my-2 my-sm-0\">Log Uit</a>
            </div>
        </nav>
        <div class=\"table-wrapper\">
            <div class=\"table-title\">
                <div class=\"row\">
                    <div class=\"col-sm-6\">
                        <h2>Klanten<b> beheren</b></h2>
                    </div>
                    <div class=\"col-sm-6\">
                        <a href=\"#addEmployeeModal\" class=\"btn btn-success float-right\" data-toggle=\"modal\"><i class=\"material-icons\">&#xE147;</i> <span>Klant toevoegen</span></a>
                    </div>
                </div>
            </div>
            <table class=\"table table-striped table-hover\">
                <thead>
                <tr>
                    <th></th>
                    <th>Klantnummer</th>
                    <th>Naam</th>
                    <th>Adres</th>
                    <th>Plaats</th>
                    <th>Telefoon</th>
                    <th>Email</th>
                    <th>Acties</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["patients"] ?? $this->getContext($context, "patients")));
        foreach ($context['_seq'] as $context["_key"] => $context["patient"]) {
            // line 53
            echo "                    <tr id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "id", array()), "html", null, true);
            echo "\">
                        <td>
                            <span class=\\\"custom-checkbox\\\">
                                <input type=\"checkbox\" id=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "id", array()), "html", null, true);
            echo "\" name=\"options[]\" value=\"1\">
                                <label for=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "id", array()), "html", null, true);
            echo "\"></label>
                            </span>
                        </td>
                        <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "klantnummer", array()), "html", null, true);
            echo "</td>
                        <td>
                            ";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "voornaam", array()), "html", null, true);
            echo "
                            ";
            // line 63
            if ($this->getAttribute($context["patient"], "tussenvoegsel", array())) {
                // line 64
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "tussenvoegsel", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "achternaam", array()), "html", null, true);
                echo "
                            ";
            } else {
                // line 66
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "achternaam", array()), "html", null, true);
                echo "
                            ";
            }
            // line 68
            echo "                        </td>
                        <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "straatnaam", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "huisnummer", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "plaats", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "telefoonnummer", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "email", array()), "html", null, true);
            echo "</td>
                        <td>
                            <a href=\"#editEmployeeModal\" class=\"edit\" data-toggle=\"modal\"><i class=\"material-icons\" data-toggle=\"tooltip\" title=\"Edit\">&#xE254;</i></a>
                            <a href=\"#deleteEmployeeModal\" class=\"delete\" data-toggle=\"modal\"><i class=\"material-icons\" data-toggle=\"tooltip\" title=\"Delete\">&#xE872;</i></a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['patient'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "                </tbody>
            </table>
            <div class=\"clearfix\">
                <div class=\"hint-text\">Showing <b>";
        // line 82
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["patients"] ?? $this->getContext($context, "patients"))), "html", null, true);
        echo "</b> out of <b>";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["patients"] ?? $this->getContext($context, "patients"))), "html", null, true);
        echo "</b> entries</div>
            </div>
        </div>
    </div>
    <!-- Edit Modal HTML -->
    <div id=\"addEmployeeModal\" class=\"modal fade\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <form>
                    <div class=\"modal-header\">
                        <h4 class=\"modal-title\">Klant toevoegen</h4>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <label>Voornaam</label>
                            <input type=\"text\" class=\"form-control\" required>
                        </div>
                        <div class=\"form-group\">
                            <label>Tussenvoegsel</label>
                            <input type=\"text\" class=\"form-control\">
                        </div>
                        <div class=\"form-group\">
                            <label>Achternaam</label>
                            <input type=\"text\" class=\"form-control\" required>
                        </div>
                        <div class=\"form-group\">
                            <label>Straatnaam</label>
                            <input type=\"text\" class=\"form-control\" required>
                        </div>
                        <div class=\"form-group\">
                            <label>Huisnummer</label>
                            <input type=\"text\" class=\"form-control\" required>
                        </div>
                        <div class=\"form-group\">
                            <label>Postcode</label>
                            <input type=\"text\" class=\"form-control\" required>
                        </div>
                        <div class=\"form-group\">
                            <label>Plaats</label>
                            <input type=\"text\" class=\"form-control\" required>
                        </div>
                        <div class=\"form-group\">
                            <label>Telefoon Nummer</label>
                            <input type=\"text\" class=\"form-control\" required>
                        </div>
                        <div class=\"form-group\">
                            <label>Email</label>
                            <input type=\"text\" class=\"form-control\" required>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <input type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\" value=\"Cancel\">
                        <input type=\"submit\" class=\"btn btn-success\" value=\"submit\">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Edit Modal HTML -->
    <div id=\"editEmployeeModal\" class=\"modal fade\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <form>
                    <div class=\"modal-header\">
                        <h4 class=\"modal-title\">Klant aanpassen</h4>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <label>Voornaam</label>
                            <input type=\"text\" class=\"form-control\" required>
                        </div>
                        <div class=\"form-group\">
                            <label>Tussenvoegsel</label>
                            <input type=\"text\" class=\"form-control\">
                        </div>
                        <div class=\"form-group\">
                            <label>Achternaam</label>
                            <input type=\"text\" class=\"form-control\" required>
                        </div>
                        <div class=\"form-group\">
                            <label>Straatnaam</label>
                            <input type=\"text\" class=\"form-control\" required>
                        </div>
                        <div class=\"form-group\">
                            <label>Huisnummer</label>
                            <input type=\"text\" class=\"form-control\" required>
                        </div>
                        <div class=\"form-group\">
                            <label>Postcode</label>
                            <input type=\"text\" class=\"form-control\" required>
                        </div>
                        <div class=\"form-group\">
                            <label>Plaats</label>
                            <input type=\"text\" class=\"form-control\" required>
                        </div>
                        <div class=\"form-group\">
                            <label>Telefoon Nummer</label>
                            <input type=\"text\" class=\"form-control\" required>
                        </div>
                        <div class=\"form-group\">
                            <label>Email</label>
                            <input type=\"text\" class=\"form-control\" required>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <input type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\" value=\"Cancel\">
                        <input type=\"submit\" class=\"btn btn-info\" value=\"Save\">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Delete Modal HTML -->
    <div id=\"deleteEmployeeModal\" class=\"modal fade\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <form>
                    <div class=\"modal-header\">
                        <h4 class=\"modal-title\">Delete Employee</h4>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    </div>
                    <div class=\"modal-body\">
                        <p>Are you sure you want to delete these Records?</p>
                        <p class=\"text-warning\"><small>This action cannot be undone.</small></p>
                    </div>
                    <div class=\"modal-footer\">
                        <input type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\" value=\"Cancel\">
                        <input type=\"submit\" class=\"btn btn-danger\" value=\"Delete\">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/checkboxes.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/patients.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 217,  204 => 82,  199 => 79,  186 => 72,  182 => 71,  178 => 70,  172 => 69,  169 => 68,  163 => 66,  155 => 64,  153 => 63,  149 => 62,  144 => 60,  138 => 57,  134 => 56,  127 => 53,  123 => 52,  92 => 24,  72 => 7,  68 => 5,  59 => 4,  41 => 3,  11 => 1,);
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

{% block title %}Patients{% endblock %}
{% block body %}
    <div class=\"container\">
        <nav class=\"navbar navbar-expand-sm navbar-light bg-light\">
            <a class=\"navbar-brand\" href=\"{{ path('homepage') }}\">HealthOne</a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>

            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"#\">Klanten <span class=\"sr-only\">(current)</span></a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"artsen.php\">Artsen</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"medicijnen.php\">Medicijnen</a>
                    </li>
                </ul>
                <a href=\"{{ path('logout') }}\" class=\"btn btn-outline-danger my-2 my-sm-0\">Log Uit</a>
            </div>
        </nav>
        <div class=\"table-wrapper\">
            <div class=\"table-title\">
                <div class=\"row\">
                    <div class=\"col-sm-6\">
                        <h2>Klanten<b> beheren</b></h2>
                    </div>
                    <div class=\"col-sm-6\">
                        <a href=\"#addEmployeeModal\" class=\"btn btn-success float-right\" data-toggle=\"modal\"><i class=\"material-icons\">&#xE147;</i> <span>Klant toevoegen</span></a>
                    </div>
                </div>
            </div>
            <table class=\"table table-striped table-hover\">
                <thead>
                <tr>
                    <th></th>
                    <th>Klantnummer</th>
                    <th>Naam</th>
                    <th>Adres</th>
                    <th>Plaats</th>
                    <th>Telefoon</th>
                    <th>Email</th>
                    <th>Acties</th>
                </tr>
                </thead>
                <tbody>
                {%  for patient in patients %}
                    <tr id=\"{{ patient.id }}\">
                        <td>
                            <span class=\\\"custom-checkbox\\\">
                                <input type=\"checkbox\" id=\"{{ patient.id }}\" name=\"options[]\" value=\"1\">
                                <label for=\"{{ patient.id }}\"></label>
                            </span>
                        </td>
                        <td>{{ patient.klantnummer }}</td>
                        <td>
                            {{ patient.voornaam }}
                            {% if patient.tussenvoegsel %}
                                {{ patient.tussenvoegsel }} {{ patient.achternaam }}
                            {% else %}
                                {{ patient.achternaam }}
                            {% endif %}
                        </td>
                        <td>{{ patient.straatnaam }} {{ patient.huisnummer }}</td>
                        <td>{{ patient.plaats }}</td>
                        <td>{{ patient.telefoonnummer }}</td>
                        <td>{{ patient.email }}</td>
                        <td>
                            <a href=\"#editEmployeeModal\" class=\"edit\" data-toggle=\"modal\"><i class=\"material-icons\" data-toggle=\"tooltip\" title=\"Edit\">&#xE254;</i></a>
                            <a href=\"#deleteEmployeeModal\" class=\"delete\" data-toggle=\"modal\"><i class=\"material-icons\" data-toggle=\"tooltip\" title=\"Delete\">&#xE872;</i></a>
                        </td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
            <div class=\"clearfix\">
                <div class=\"hint-text\">Showing <b>{{ patients|length }}</b> out of <b>{{ patients|length }}</b> entries</div>
            </div>
        </div>
    </div>
    <!-- Edit Modal HTML -->
    <div id=\"addEmployeeModal\" class=\"modal fade\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <form>
                    <div class=\"modal-header\">
                        <h4 class=\"modal-title\">Klant toevoegen</h4>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <label>Voornaam</label>
                            <input type=\"text\" class=\"form-control\" required>
                        </div>
                        <div class=\"form-group\">
                            <label>Tussenvoegsel</label>
                            <input type=\"text\" class=\"form-control\">
                        </div>
                        <div class=\"form-group\">
                            <label>Achternaam</label>
                            <input type=\"text\" class=\"form-control\" required>
                        </div>
                        <div class=\"form-group\">
                            <label>Straatnaam</label>
                            <input type=\"text\" class=\"form-control\" required>
                        </div>
                        <div class=\"form-group\">
                            <label>Huisnummer</label>
                            <input type=\"text\" class=\"form-control\" required>
                        </div>
                        <div class=\"form-group\">
                            <label>Postcode</label>
                            <input type=\"text\" class=\"form-control\" required>
                        </div>
                        <div class=\"form-group\">
                            <label>Plaats</label>
                            <input type=\"text\" class=\"form-control\" required>
                        </div>
                        <div class=\"form-group\">
                            <label>Telefoon Nummer</label>
                            <input type=\"text\" class=\"form-control\" required>
                        </div>
                        <div class=\"form-group\">
                            <label>Email</label>
                            <input type=\"text\" class=\"form-control\" required>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <input type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\" value=\"Cancel\">
                        <input type=\"submit\" class=\"btn btn-success\" value=\"submit\">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Edit Modal HTML -->
    <div id=\"editEmployeeModal\" class=\"modal fade\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <form>
                    <div class=\"modal-header\">
                        <h4 class=\"modal-title\">Klant aanpassen</h4>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <label>Voornaam</label>
                            <input type=\"text\" class=\"form-control\" required>
                        </div>
                        <div class=\"form-group\">
                            <label>Tussenvoegsel</label>
                            <input type=\"text\" class=\"form-control\">
                        </div>
                        <div class=\"form-group\">
                            <label>Achternaam</label>
                            <input type=\"text\" class=\"form-control\" required>
                        </div>
                        <div class=\"form-group\">
                            <label>Straatnaam</label>
                            <input type=\"text\" class=\"form-control\" required>
                        </div>
                        <div class=\"form-group\">
                            <label>Huisnummer</label>
                            <input type=\"text\" class=\"form-control\" required>
                        </div>
                        <div class=\"form-group\">
                            <label>Postcode</label>
                            <input type=\"text\" class=\"form-control\" required>
                        </div>
                        <div class=\"form-group\">
                            <label>Plaats</label>
                            <input type=\"text\" class=\"form-control\" required>
                        </div>
                        <div class=\"form-group\">
                            <label>Telefoon Nummer</label>
                            <input type=\"text\" class=\"form-control\" required>
                        </div>
                        <div class=\"form-group\">
                            <label>Email</label>
                            <input type=\"text\" class=\"form-control\" required>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <input type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\" value=\"Cancel\">
                        <input type=\"submit\" class=\"btn btn-info\" value=\"Save\">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Delete Modal HTML -->
    <div id=\"deleteEmployeeModal\" class=\"modal fade\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <form>
                    <div class=\"modal-header\">
                        <h4 class=\"modal-title\">Delete Employee</h4>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    </div>
                    <div class=\"modal-body\">
                        <p>Are you sure you want to delete these Records?</p>
                        <p class=\"text-warning\"><small>This action cannot be undone.</small></p>
                    </div>
                    <div class=\"modal-footer\">
                        <input type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\" value=\"Cancel\">
                        <input type=\"submit\" class=\"btn btn-danger\" value=\"Delete\">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src=\"{{ asset('js/checkboxes.js') }}\"></script>
{% endblock %}", "admin/patients.html.twig", "C:\\Users\\Sem\\Documents\\GitHub\\HealthOneSymfony\\HealthOne_Symfony3\\app\\Resources\\views\\admin\\patients.html.twig");
    }
}
