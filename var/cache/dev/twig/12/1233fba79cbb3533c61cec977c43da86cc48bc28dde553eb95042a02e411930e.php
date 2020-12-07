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
class __TwigTemplate_3a287759f2b93cc62e9eefaf3f52302e2b195bd05ecfbaf14ac131d7d310227c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html>
    <head> 
        <meta charset='UTF-8'>

        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 10
        echo "
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons\">

        <!-- Jquery --><script src=\"https://code.jquery.com/jquery-3.5.1.min.js\"></script>

        <!-- SweetAlert2 </!-->
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.10.4/sweetalert2.min.js\" integrity=\"sha512-EPNolNCOFmcnNzDqK7E4Wdwo9KBt/HCP/J8bmK6uSik6YsoLU1b8XGbg5hpw2BY+IilYjf1ce5t7rCuHB60mzA==\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.10.4/sweetalert2.all.min.js\" integrity=\"sha512-YzA/n4ANNJHPUJdz4q10WY5DS0yLxmtSaAK0Oc1jW3kXdBKtuUS5xlJ96Q5uHJA87ku20eTn8MKYCPHHfJfi9w==\" crossorigin=\"anonymous\"></script>
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.10.4/sweetalert2.min.css\" integrity=\"sha512-zEmgzrofH7rifnTAgSqWXGWF8rux/+gbtEQ1OJYYW57J1eEQDjppSv7oByOdvSJfo0H39LxmCyQTLOYFOa8wig==\" crossorigin=\"anonymous\" />

        <!-- Popper.js --><script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js\" integrity=\"sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN\" crossorigin=\"anonymous\"></script>

        <!-- Bootstrap </!-->
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\" integrity=\"sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z\" crossorigin=\"anonymous\">
        
        <!-- Bootstrap material </!-->
        <link rel=\"stylesheet\" href=\"https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css\" integrity=\"sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX\" crossorigin=\"anonymous\">
        <script src=\"https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js\" integrity=\"sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9\" crossorigin=\"anonymous\"></script>
        <script>\$(document).ready(function() { \$('body').bootstrapMaterialDesign(); });</script>
        
        <!-- icons Awesome (don't forget Material Icons) -->
        <script src=\"https://kit.fontawesome.com/35da9d16c3.js\" crossorigin=\"anonymous\"></script>

        <!-- animate.css --><link 
            rel=\"stylesheet\"
            href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css\"
          />
        <!-- (...) -->
        ";
        // line 39
        echo "
        ";
        // line 40
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 45
        echo "
    </head>

    <body>

        

        ";
        // line 53
        echo "        <header id=\"particles-js-0\">
            <nav id=\"navigation\" 
                class=\"navbar fixed-top navbar-light bg-light animate__animated animate__faster\">
                
                <ul class=\"navbar-nav float-right\">
                    <li class=\"nav-item\">
                        <a id=\"super_nav\" class=\"nav-link\" href=\"javascript:void(0)\"><i class=\"material-icons align-middle mr-2\">question_answer</i>
                        <span class=\"d-inline\">Me contacter</span></a>
                    </li>
                </ul>

                ";
        // line 65
        echo "                <img id=\"img_profil\" src=\"/img/profil.jpg\" alt=\"image de profil\">

            </nav>
        </header>

        ";
        // line 71
        echo "        <a id=\"title\" class=\"font-coolvetica bg-transparent top-center animate__animated animate__faster\" href=\"/\">Bois Loïc</a>

        ";
        // line 74
        echo "        <a href=\"/#api-map\" id=\"title_location\" class=\"top-center-nomg animate__animated animate__fast\">
            <i class=\"material-icons align-middle mr-2\">location_on</i>
            <span>à St Just d'Ardèche</span>
        </a>

        ";
        // line 81
        echo "        <div id=\"hover_tha_menu\"></div>

        ";
        // line 84
        echo "        <div class=\"mt-1\"></div>

        ";
        // line 87
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 88
        echo "
        ";
        // line 90
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 102
        echo "
    </body>

    <footer>
        ";
        // line 106
        $this->displayBlock('footer', $context, $blocks);
        // line 111
        echo "
        <div class=\"text-white text-center font-coolvetica h5\">Hello Footer</div>
    </footer>

</html>


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Titre de la page de base";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 40
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 41
        echo "
            ";
        // line 42
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("basic");
        echo "

        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 87
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 90
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 91
        echo "
            <div id=\"particles-js-1\"></div>

            ";
        // line 95
        echo "            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js\" integrity=\"sha512-Kef5sc7gfTacR7TZKelcrRs15ipf7+t+n7Zh6mKNJbmW+/RRdCW9nwfLn4YX0s2nO6Kv5Y2ChqgIakaC6PW09A==\" crossorigin=\"anonymous\"></script>

            ";
        // line 98
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("basic");
        echo "


        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 106
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 107
        echo "            


        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  285 => 107,  275 => 106,  260 => 98,  256 => 95,  251 => 91,  241 => 90,  223 => 87,  210 => 42,  207 => 41,  197 => 40,  178 => 7,  161 => 111,  159 => 106,  153 => 102,  150 => 90,  147 => 88,  144 => 87,  140 => 84,  136 => 81,  129 => 74,  125 => 71,  118 => 65,  105 => 53,  96 => 45,  94 => 40,  91 => 39,  61 => 10,  56 => 7,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
<html>
    <head> 
        <meta charset='UTF-8'>

        <title>{% block title %}Titre de la page de base{% endblock %}</title>

        {# Les CDN ! important ! ----------------------------------------------------- #}

        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons\">

        <!-- Jquery --><script src=\"https://code.jquery.com/jquery-3.5.1.min.js\"></script>

        <!-- SweetAlert2 </!-->
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.10.4/sweetalert2.min.js\" integrity=\"sha512-EPNolNCOFmcnNzDqK7E4Wdwo9KBt/HCP/J8bmK6uSik6YsoLU1b8XGbg5hpw2BY+IilYjf1ce5t7rCuHB60mzA==\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.10.4/sweetalert2.all.min.js\" integrity=\"sha512-YzA/n4ANNJHPUJdz4q10WY5DS0yLxmtSaAK0Oc1jW3kXdBKtuUS5xlJ96Q5uHJA87ku20eTn8MKYCPHHfJfi9w==\" crossorigin=\"anonymous\"></script>
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.10.4/sweetalert2.min.css\" integrity=\"sha512-zEmgzrofH7rifnTAgSqWXGWF8rux/+gbtEQ1OJYYW57J1eEQDjppSv7oByOdvSJfo0H39LxmCyQTLOYFOa8wig==\" crossorigin=\"anonymous\" />

        <!-- Popper.js --><script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js\" integrity=\"sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN\" crossorigin=\"anonymous\"></script>

        <!-- Bootstrap </!-->
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\" integrity=\"sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z\" crossorigin=\"anonymous\">
        
        <!-- Bootstrap material </!-->
        <link rel=\"stylesheet\" href=\"https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css\" integrity=\"sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX\" crossorigin=\"anonymous\">
        <script src=\"https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js\" integrity=\"sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9\" crossorigin=\"anonymous\"></script>
        <script>\$(document).ready(function() { \$('body').bootstrapMaterialDesign(); });</script>
        
        <!-- icons Awesome (don't forget Material Icons) -->
        <script src=\"https://kit.fontawesome.com/35da9d16c3.js\" crossorigin=\"anonymous\"></script>

        <!-- animate.css --><link 
            rel=\"stylesheet\"
            href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css\"
          />
        <!-- (...) -->
        {# --------------------------------------------------------------------------- #}

        {% block stylesheets %}

            {{ encore_entry_link_tags('basic') }}

        {% endblock %}

    </head>

    <body>

        

        {# Ci dessous, la barre de navigation Bootstrap Material ! #}
        <header id=\"particles-js-0\">
            <nav id=\"navigation\" 
                class=\"navbar fixed-top navbar-light bg-light animate__animated animate__faster\">
                
                <ul class=\"navbar-nav float-right\">
                    <li class=\"nav-item\">
                        <a id=\"super_nav\" class=\"nav-link\" href=\"javascript:void(0)\"><i class=\"material-icons align-middle mr-2\">question_answer</i>
                        <span class=\"d-inline\">Me contacter</span></a>
                    </li>
                </ul>

                {# Mon image de profil #}
                <img id=\"img_profil\" src=\"/img/profil.jpg\" alt=\"image de profil\">

            </nav>
        </header>

        {# Logo du haut après le header #}
        <a id=\"title\" class=\"font-coolvetica bg-transparent top-center animate__animated animate__faster\" href=\"/\">Bois Loïc</a>

        {# son titre de localisation #}
        <a href=\"/#api-map\" id=\"title_location\" class=\"top-center-nomg animate__animated animate__fast\">
            <i class=\"material-icons align-middle mr-2\">location_on</i>
            <span>à St Just d'Ardèche</span>
        </a>

        {# Bloc invisible gérer par le script de la souris au survol en javascript
            sert à afficher le menu lorsque la souris passe devant #}
        <div id=\"hover_tha_menu\"></div>

        {# Bloc qui sert à espacer la barre de navigation #}
        <div class=\"mt-1\"></div>

        {# Ensuite le block body de chaques rendu controller de Symfony #}
        {% block body %}{% endblock %}

        {# le javascript extend de chaques pages avec vérification du thème actuel #}
        {% block javascripts %}

            <div id=\"particles-js-1\"></div>

            {# Script de particules avec particles.js #}
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js\" integrity=\"sha512-Kef5sc7gfTacR7TZKelcrRs15ipf7+t+n7Zh6mKNJbmW+/RRdCW9nwfLn4YX0s2nO6Kv5Y2ChqgIakaC6PW09A==\" crossorigin=\"anonymous\"></script>

            {# Script WebPack Encore #}
            {{ encore_entry_script_tags('basic') }}


        {% endblock %}

    </body>

    <footer>
        {% block footer %}
            


        {% endblock %}

        <div class=\"text-white text-center font-coolvetica h5\">Hello Footer</div>
    </footer>

</html>


", "base.html.twig", "/var/www/cv_symfo/templates/base.html.twig");
    }
}
