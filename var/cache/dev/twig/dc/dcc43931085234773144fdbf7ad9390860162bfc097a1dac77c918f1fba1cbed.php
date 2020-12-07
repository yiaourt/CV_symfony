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

/* home/index.html.twig */
class __TwigTemplate_790ece8f1ef5aaa24d10bb36f768b44e83df824e58e7c0d7869d80ba7707095f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 7
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("home");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 11
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 12
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("home");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "
    ";
        // line 19
        echo "
    ";
        // line 20
        if (((isset($context["success"]) || array_key_exists("success", $context)) && (0 === twig_compare((isset($context["success"]) || array_key_exists("success", $context) ? $context["success"] : (function () { throw new RuntimeError('Variable "success" does not exist.', 20, $this->source); })()), "1")))) {
            // line 21
            echo "
        <div id='alert' class='animate__animated animate__flipInX animate__delay-0.6s bg-success text-center p-2 m-1'><i class='far fa-check-circle fa-lg'></i> - Votre inscription a été enregistrée avec succès ! Vous pouvez désormais vous <a href='/connexion'>connecter</a>.</div>
        
    ";
        }
        // line 25
        echo "
    ";
        // line 26
        if (((isset($context["success"]) || array_key_exists("success", $context)) && (0 === twig_compare((isset($context["success"]) || array_key_exists("success", $context) ? $context["success"] : (function () { throw new RuntimeError('Variable "success" does not exist.', 26, $this->source); })()), "2")))) {
            // line 27
            echo "
        <div id='alert' class='animate__animated animate__flipInX animate__delay-0.6s bg-success text-center p-2 m-1'>- Salut ";
            // line 28
            echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 28, $this->source); })()), "html", null, true);
            echo " ! <i class='far fa-smile-wink fa-lg'></i> </div>

    ";
        }
        // line 31
        echo "
    ";
        // line 32
        if (((isset($context["error"]) || array_key_exists("error", $context)) && (0 === twig_compare((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 32, $this->source); })()), "1")))) {
            // line 33
            echo "
        <div id='alert' class='animate__animated animate__flipInX animate__delay-0.6s bg-warning text-center p-2 m-1'><i class='fas fa-exclamation-triangle fa-lg'></i> - Erreur: Désoler les informations fournies ou le formulaire n'est pas correctement arrivé à destination, peut-être les avait vous envoyer 2 fois.</div>

    ";
        }
        // line 37
        echo "
    ";
        // line 38
        if (((isset($context["error"]) || array_key_exists("error", $context)) && (0 === twig_compare((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 38, $this->source); })()), "2")))) {
            // line 39
            echo "
        <div id='alert' class='animate__animated animate__flipInX animate__delay-0.6s bg-warning text-center p-2 m-1'><i class='fas fa-exclamation-triangle fa-lg'></i> - Erreur: Désoler, vous êtes déjà connecter.</div>

    ";
        }
        // line 43
        echo "
    <div class=\"text-white bg-transparent font-stanberry h5 ml-4 pt-2 border-top border-white\">Bonjour, bienvenue à tous sur mon CV en ligne, je suis autodidacte dans le développement web, cela fait bientôt 4 ans que je me spécialise et m'intéresse à la programmation informatique de façons professionnelles et dans différents domaines informatiques.</div>

    <div class=\"text-white bg-transparent font-stanberry h5 ml-4 mt-4 d-flex flex-row flex-nowrap\">
        
        <div class=\"h-75 text-justify border border-white p-2\">
            Au cours de ces 4 années de programmation individuelle du web, j'ai pu découvrir de nombreuses façons de coder, de nombreuses technologies et librairies intéressantes et Open Source, pour en cité les plus importantes, j'ai pu également acquérir une connaissance de base des fonctions d'un développeur web et de la façon de faire de beau design en Frontend client et de puissant calcul Backend serveur. 
            <br><br>
            <div class=\"text-center font-italic\"><u>(ou comment créer une application web/web-mobile d' A à Z \"<a href=\"https://fr.wikipedia.org/wiki/Site_web_r%C3%A9actif\">responsive</a>\")</u></div>
        </div>

        <i class=\"material-icons md-48 align-middle mr-5 mt-4\">arrow_right_alt</i>
        
        <ul class=\"font-stanberry mr-5 mt-4 p-4 text-white border border-white\">

            <li>HTML</li>
            <li>Sass/Scss</li>
            <li>PHP</li>
            <li>Symfony</li>
            <li>VanillaJS/Jquery</li>
            <li>Webpack Encore</li>
            <li><a href=\"#stats\">(...)</a></li>

        </ul>

    </div>

    <div class=\"text-white bg-transparent text-justify font-stanberry h5 ml-4 mr-4 mt-5 pt-2\">
        J'ai également eu la possibilité de réparer des machines informatiques, comme des ordinateurs portables et des PC fixent, put tester les nombreux systèmes d'exploitation, notamment Linux et son système de <a href=\"https://fr.wikipedia.org/wiki/Bourne-Again_shell\">Bash (Bourne again shell)</a> très pratique et puissant pour automatiser des tâches un peu longues comme l'installation d'un serveur local ou l'installation de composants à Symfony (voir <a href=\"#gallery\">la galerie ci-dessous</a>). 
        <br><br>
        Au cours de mon passer, j'ai pu découvrir des logiciels de création 2D et 3D (<a href=\"www.gimp.org\">Gimp</a>, <a href=\"www.blender.org\">Blender</a>, <a href=\"www.pencil2d.org\">Pencil 2D</a>, <a href=\"https://www.maefloresta.com/\">TupiTube</a> ...) lors de mes voyages à travers le web, ainsi que des programmes de montage vidéo linéaire professionnel (<a href=\"https://kdenlive.org/fr/\">Kdenlive</a>, <a href=\"https://www.olivevideoeditor.org/\">Olive</a>) et sans oublier de puissants éditeurs de texte (<a href=\"https://www.vim.org/\">Vim</a> / <a href=\"https://www.sublimetext.com/\">sublime-text</a> / <a href=\"https://visualstudio.microsoft.com/fr/\">Visual Studio</a> / <a href=\"http://www.codeblocks.org/\">Code:Blocks</a> / <a href=\"https://www.eclipse.org\">Eclipse</a> ...), les gestionnaires de base de données (<a href=\"https://www.mysql.com/fr/\">Mysql</a>, <a href=\"https://mariadb.org/\">MariaDB</a> ...), des tonnes de librairies, opensource ou non, à l'aide de <a href=\"https://cdnjs.com/\">CDNJS</a> et les principes théoriques de base de la programmation orienté objet en PHP et Symfony, bref, tout un tas de petits outils de création web ainsi que leurs options d'intégration optimale, mais pas que!
    </div>

     <div class=\"text-white bg-transparent text-justify font-stanberry h5 ml-4 mr-4 mt-5 pt-2\">
        Voilà 2 ans que je me fixe des objectifs, des idées et des fonctions d'objets pour construire et finaliser des projets web qui pourront être intéressant, attractifs, et simple d'utilisation à de nombreux utilisateurs, je sais qu'avec de bonnes idées et de la motivation on peut arriver à construire un avenir meilleur pour tous autour du web, certaines de mes réalisations ont pu être très enrichissantes dans mon apprentissage, d'autant plus que celles-ci mon permis de découvrir la programmation \"\"Classic\"\" et la programmation \"\"Framework\"\".
        <br><br><br><br>

        <u>Voici mes réalisations avec dates + compétences acquises :</u><br>
        (Retrouvez toutes les sources dans <a href=\"#gallery\">la galerie</a>)

        <ul class=\"ml-4 mt-3\">
            
            <li class=\"mt-2\"><u>2016/2017</u> - <b>\"Le projet Delta\"</b> - En fin 2016 et début 2017 né l'idée d'un projet de projets 3D (imprimante) avec un ami, l'idée n'aura pas vu le jour, mais, m'aura permis d'apprendre ce qu'est la programmation \"Classic\", le HTML, PHP, CSS, et Javascript / Jquery, j'y ai réalisé, une page d'accueil, une page de profil utilisateur, un forum (avec notifications jquery des nouveaux messages), une boutique, une messagerie instantanée (Jquery), une messagerie (PHP et Jquery pour les notifications), un panel-admin (gestion des utilisateurs, gestion des messages en page d'accueil, gestion du forum, gestion de la boutique) (<a href=\"\">Code Source</a>)</li>

            <li class=\"mt-4\"><u>2018</u> - <b>Le vaste pouvoir du web</b> - En harmonie avec la programmation web PHP, du projet Delta créer et (hélas) toujours en construction par manque de temps, je décide de continuer vers cette branche qu'est le développement web, je me lance donc dans un projet d'apprentissage plus pousser du Jquery en créant un <b><u>\"jeu du pendu\"</u></b> sans utiliser un seul framework JS à l'exception de Bootstrap et Jquery, manque de chance, problème d'ordinateur ou faute professionnelle, en tout cas, perte de fichiers, mon pendu, c'est pendu, mais ayant beaucoup appris de lui je finis par le recréer, je redécide même de commencer différemment et de partir sur un fond de cahier de feuilles à carreaux et d'une animation 2D (gif) avec <a href=\"www.pencil2d.org\">Pencil 2D</a>, cette fois-ci, pour lui donner un air plus neuf que le précédent, j'ai d'ailleurs pu remarquer que les fonctions jquery recréer était beaucoup plus jolie et moins brouillons, incroyable! (<a href=\"\">Code Source</a>)</li>
        </ul>

        <br><br>

        <div class=\"text-right\">
            N'hésitez pas à me soutenir dans mes projets si ceux-ci vous semblent concrétisables.
            <br>
            (Vous pouvez me <a href=\"#contact\">contacter</a>, ou faire de <a href=\"#dons\">\"micro-dons\"</a>).
        </div>
        
    </div>

    <div id=\"gallery\" class=\"h5 mt-5 p-4 shadow-inset-f3 bg-white text-black text-center\">

        <h4 class=\"mb-3 font-stanberry\"><b><u>Mes réalisations en programmations informatiques diverses</u></b></h4>

        <div class=\"d-flex flex-row flex-nowrap justify-content-around align-content-stretch\">
            
            <a class=\"d-inline ml-2\" href=\"\">
                <i class=\"fab fa-html5 fa-3x\"></i>
                <i class=\"fab fa-sass fa-3x\"></i>
                <i class=\"fab fa-js fa-3x\"></i>
                <br>Html5 / Sass / Jquery
            </a>

            <a class=\"d-inline ml-5\" href=\"\">
                <i class=\"fab fa-php fa-3x\"></i>
                <i class=\"fab fa-symfony fa-3x\"></i>
                <br>PHP / Symfony
            </a>

            <a class=\"d-inline ml-5\" href=\"\">
                <i class=\"fas fa-terminal fa-3x\"></i>
                <br>Bourne again shell
            </a>
            
        </div>
    
    </div>

    <div class=\"text-white text-center font-stanberry h5 ml-4 mr-4 mt-5 pt-2\">
        <h4 class=\"mb-3 font-stanberry\"><b><u>Analyse du niveau de mes compétences et atouts</u></b></h4>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 43,  188 => 39,  186 => 38,  183 => 37,  177 => 33,  175 => 32,  172 => 31,  166 => 28,  163 => 27,  161 => 26,  158 => 25,  152 => 21,  150 => 20,  147 => 19,  144 => 17,  134 => 16,  122 => 12,  117 => 11,  107 => 10,  95 => 7,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    {{ encore_entry_link_tags('home') }}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    {{ encore_entry_script_tags('home') }}
{% endblock %}


{% block body %}

    {# On créer les avertissements (alertes etc...) Bootstrap + animate.css + fontawesome ! #}

    {% if success is defined and success == '1' %}

        <div id='alert' class='animate__animated animate__flipInX animate__delay-0.6s bg-success text-center p-2 m-1'><i class='far fa-check-circle fa-lg'></i> - Votre inscription a été enregistrée avec succès ! Vous pouvez désormais vous <a href='/connexion'>connecter</a>.</div>
        
    {% endif %}

    {% if success is defined and success == '2' %}

        <div id='alert' class='animate__animated animate__flipInX animate__delay-0.6s bg-success text-center p-2 m-1'>- Salut {{ username }} ! <i class='far fa-smile-wink fa-lg'></i> </div>

    {% endif %}

    {% if error is defined and error == '1' %}

        <div id='alert' class='animate__animated animate__flipInX animate__delay-0.6s bg-warning text-center p-2 m-1'><i class='fas fa-exclamation-triangle fa-lg'></i> - Erreur: Désoler les informations fournies ou le formulaire n'est pas correctement arrivé à destination, peut-être les avait vous envoyer 2 fois.</div>

    {% endif %}

    {% if error is defined and error == '2' %}

        <div id='alert' class='animate__animated animate__flipInX animate__delay-0.6s bg-warning text-center p-2 m-1'><i class='fas fa-exclamation-triangle fa-lg'></i> - Erreur: Désoler, vous êtes déjà connecter.</div>

    {% endif %}

    <div class=\"text-white bg-transparent font-stanberry h5 ml-4 pt-2 border-top border-white\">Bonjour, bienvenue à tous sur mon CV en ligne, je suis autodidacte dans le développement web, cela fait bientôt 4 ans que je me spécialise et m'intéresse à la programmation informatique de façons professionnelles et dans différents domaines informatiques.</div>

    <div class=\"text-white bg-transparent font-stanberry h5 ml-4 mt-4 d-flex flex-row flex-nowrap\">
        
        <div class=\"h-75 text-justify border border-white p-2\">
            Au cours de ces 4 années de programmation individuelle du web, j'ai pu découvrir de nombreuses façons de coder, de nombreuses technologies et librairies intéressantes et Open Source, pour en cité les plus importantes, j'ai pu également acquérir une connaissance de base des fonctions d'un développeur web et de la façon de faire de beau design en Frontend client et de puissant calcul Backend serveur. 
            <br><br>
            <div class=\"text-center font-italic\"><u>(ou comment créer une application web/web-mobile d' A à Z \"<a href=\"https://fr.wikipedia.org/wiki/Site_web_r%C3%A9actif\">responsive</a>\")</u></div>
        </div>

        <i class=\"material-icons md-48 align-middle mr-5 mt-4\">arrow_right_alt</i>
        
        <ul class=\"font-stanberry mr-5 mt-4 p-4 text-white border border-white\">

            <li>HTML</li>
            <li>Sass/Scss</li>
            <li>PHP</li>
            <li>Symfony</li>
            <li>VanillaJS/Jquery</li>
            <li>Webpack Encore</li>
            <li><a href=\"#stats\">(...)</a></li>

        </ul>

    </div>

    <div class=\"text-white bg-transparent text-justify font-stanberry h5 ml-4 mr-4 mt-5 pt-2\">
        J'ai également eu la possibilité de réparer des machines informatiques, comme des ordinateurs portables et des PC fixent, put tester les nombreux systèmes d'exploitation, notamment Linux et son système de <a href=\"https://fr.wikipedia.org/wiki/Bourne-Again_shell\">Bash (Bourne again shell)</a> très pratique et puissant pour automatiser des tâches un peu longues comme l'installation d'un serveur local ou l'installation de composants à Symfony (voir <a href=\"#gallery\">la galerie ci-dessous</a>). 
        <br><br>
        Au cours de mon passer, j'ai pu découvrir des logiciels de création 2D et 3D (<a href=\"www.gimp.org\">Gimp</a>, <a href=\"www.blender.org\">Blender</a>, <a href=\"www.pencil2d.org\">Pencil 2D</a>, <a href=\"https://www.maefloresta.com/\">TupiTube</a> ...) lors de mes voyages à travers le web, ainsi que des programmes de montage vidéo linéaire professionnel (<a href=\"https://kdenlive.org/fr/\">Kdenlive</a>, <a href=\"https://www.olivevideoeditor.org/\">Olive</a>) et sans oublier de puissants éditeurs de texte (<a href=\"https://www.vim.org/\">Vim</a> / <a href=\"https://www.sublimetext.com/\">sublime-text</a> / <a href=\"https://visualstudio.microsoft.com/fr/\">Visual Studio</a> / <a href=\"http://www.codeblocks.org/\">Code:Blocks</a> / <a href=\"https://www.eclipse.org\">Eclipse</a> ...), les gestionnaires de base de données (<a href=\"https://www.mysql.com/fr/\">Mysql</a>, <a href=\"https://mariadb.org/\">MariaDB</a> ...), des tonnes de librairies, opensource ou non, à l'aide de <a href=\"https://cdnjs.com/\">CDNJS</a> et les principes théoriques de base de la programmation orienté objet en PHP et Symfony, bref, tout un tas de petits outils de création web ainsi que leurs options d'intégration optimale, mais pas que!
    </div>

     <div class=\"text-white bg-transparent text-justify font-stanberry h5 ml-4 mr-4 mt-5 pt-2\">
        Voilà 2 ans que je me fixe des objectifs, des idées et des fonctions d'objets pour construire et finaliser des projets web qui pourront être intéressant, attractifs, et simple d'utilisation à de nombreux utilisateurs, je sais qu'avec de bonnes idées et de la motivation on peut arriver à construire un avenir meilleur pour tous autour du web, certaines de mes réalisations ont pu être très enrichissantes dans mon apprentissage, d'autant plus que celles-ci mon permis de découvrir la programmation \"\"Classic\"\" et la programmation \"\"Framework\"\".
        <br><br><br><br>

        <u>Voici mes réalisations avec dates + compétences acquises :</u><br>
        (Retrouvez toutes les sources dans <a href=\"#gallery\">la galerie</a>)

        <ul class=\"ml-4 mt-3\">
            
            <li class=\"mt-2\"><u>2016/2017</u> - <b>\"Le projet Delta\"</b> - En fin 2016 et début 2017 né l'idée d'un projet de projets 3D (imprimante) avec un ami, l'idée n'aura pas vu le jour, mais, m'aura permis d'apprendre ce qu'est la programmation \"Classic\", le HTML, PHP, CSS, et Javascript / Jquery, j'y ai réalisé, une page d'accueil, une page de profil utilisateur, un forum (avec notifications jquery des nouveaux messages), une boutique, une messagerie instantanée (Jquery), une messagerie (PHP et Jquery pour les notifications), un panel-admin (gestion des utilisateurs, gestion des messages en page d'accueil, gestion du forum, gestion de la boutique) (<a href=\"\">Code Source</a>)</li>

            <li class=\"mt-4\"><u>2018</u> - <b>Le vaste pouvoir du web</b> - En harmonie avec la programmation web PHP, du projet Delta créer et (hélas) toujours en construction par manque de temps, je décide de continuer vers cette branche qu'est le développement web, je me lance donc dans un projet d'apprentissage plus pousser du Jquery en créant un <b><u>\"jeu du pendu\"</u></b> sans utiliser un seul framework JS à l'exception de Bootstrap et Jquery, manque de chance, problème d'ordinateur ou faute professionnelle, en tout cas, perte de fichiers, mon pendu, c'est pendu, mais ayant beaucoup appris de lui je finis par le recréer, je redécide même de commencer différemment et de partir sur un fond de cahier de feuilles à carreaux et d'une animation 2D (gif) avec <a href=\"www.pencil2d.org\">Pencil 2D</a>, cette fois-ci, pour lui donner un air plus neuf que le précédent, j'ai d'ailleurs pu remarquer que les fonctions jquery recréer était beaucoup plus jolie et moins brouillons, incroyable! (<a href=\"\">Code Source</a>)</li>
        </ul>

        <br><br>

        <div class=\"text-right\">
            N'hésitez pas à me soutenir dans mes projets si ceux-ci vous semblent concrétisables.
            <br>
            (Vous pouvez me <a href=\"#contact\">contacter</a>, ou faire de <a href=\"#dons\">\"micro-dons\"</a>).
        </div>
        
    </div>

    <div id=\"gallery\" class=\"h5 mt-5 p-4 shadow-inset-f3 bg-white text-black text-center\">

        <h4 class=\"mb-3 font-stanberry\"><b><u>Mes réalisations en programmations informatiques diverses</u></b></h4>

        <div class=\"d-flex flex-row flex-nowrap justify-content-around align-content-stretch\">
            
            <a class=\"d-inline ml-2\" href=\"\">
                <i class=\"fab fa-html5 fa-3x\"></i>
                <i class=\"fab fa-sass fa-3x\"></i>
                <i class=\"fab fa-js fa-3x\"></i>
                <br>Html5 / Sass / Jquery
            </a>

            <a class=\"d-inline ml-5\" href=\"\">
                <i class=\"fab fa-php fa-3x\"></i>
                <i class=\"fab fa-symfony fa-3x\"></i>
                <br>PHP / Symfony
            </a>

            <a class=\"d-inline ml-5\" href=\"\">
                <i class=\"fas fa-terminal fa-3x\"></i>
                <br>Bourne again shell
            </a>
            
        </div>
    
    </div>

    <div class=\"text-white text-center font-stanberry h5 ml-4 mr-4 mt-5 pt-2\">
        <h4 class=\"mb-3 font-stanberry\"><b><u>Analyse du niveau de mes compétences et atouts</u></b></h4>
    </div>

{% endblock %}

", "home/index.html.twig", "/var/www/cv_symfo/templates/home/index.html.twig");
    }
}
