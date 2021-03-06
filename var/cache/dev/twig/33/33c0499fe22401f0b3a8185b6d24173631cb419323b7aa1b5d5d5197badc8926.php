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
class __TwigTemplate_4102b2b7952db1059d490c490a7a136378cd20093d4da3f0f4d5917801814902 extends Template
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
        if ((array_key_exists("success", $context) && (0 === twig_compare((isset($context["success"]) || array_key_exists("success", $context) ? $context["success"] : (function () { throw new RuntimeError('Variable "success" does not exist.', 20, $this->source); })()), "1")))) {
            // line 21
            echo "
        <div id='alert' class='animate__animated animate__flipInX animate__delay-0.6s bg-success text-center p-2 m-1'><i class='far fa-check-circle fa-lg'></i> - Votre inscription a été enregistrée avec succès ! Vous pouvez désormais vous <a href='/connexion'>connecter</a>.</div>
        
    ";
        }
        // line 25
        echo "
    ";
        // line 26
        if ((array_key_exists("success", $context) && (0 === twig_compare((isset($context["success"]) || array_key_exists("success", $context) ? $context["success"] : (function () { throw new RuntimeError('Variable "success" does not exist.', 26, $this->source); })()), "2")))) {
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
        if ((array_key_exists("error", $context) && (0 === twig_compare((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 32, $this->source); })()), "1")))) {
            // line 33
            echo "
        <div id='alert' class='animate__animated animate__flipInX animate__delay-0.6s bg-warning text-center p-2 m-1'><i class='fas fa-exclamation-triangle fa-lg'></i> - Erreur: Désoler les informations fournies ou le formulaire n'est pas correctement arrivé à destination, peut-être les avait vous envoyer 2 fois.</div>

    ";
        }
        // line 37
        echo "
    ";
        // line 38
        if ((array_key_exists("error", $context) && (0 === twig_compare((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 38, $this->source); })()), "2")))) {
            // line 39
            echo "
        <div id='alert' class='animate__animated animate__flipInX animate__delay-0.6s bg-warning text-center p-2 m-1'><i class='fas fa-exclamation-triangle fa-lg'></i> - Erreur: Désoler, vous êtes déjà connecter.</div>

    ";
        }
        // line 43
        echo "
    <div id=\"intro\" class=\"text-white bg-transparent font-worksans h5 ml-4 mr-4 pt-2 border-top border-white\">Bonjour, bienvenue à tous sur mon <span class=\"ml-5 mr-5\"></span> en ligne, je suis autodidacte dans le développement web, cela fait bientôt 4 ans que je me spécialise et m'intéresse à la programmation informatique de façons professionnelles dans différents domaines.</div>

    ";
        // line 47
        echo "    <div id=\"change_text-title\" class=\"text-white bg-transparent font-worksans h5\"></div>

    <div id=\"next-intro\" class=\"text-white bg-transparent font-worksans h5 ml-4 mt-4 d-flex flex-row flex-nowrap\">
        
        <div class=\"h-75 text-justify border border-white font-stanberry p-2\">
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
        J'ai également eu la possibilité de réparer des machines informatiques, comme des ordinateurs portables et des PC fixent, put tester les nombreux systèmes d'exploitation, notamment Linux et son système de <a href=\"https://fr.wikipedia.org/wiki/Bourne-Again_shell\">Bash (Bourne again shell)</a> très pratique et puissant pour automatiser des tâches un peu longues comme l'installation d'un serveur local ou l'installation de composants à Symfony (voir <a href=\"#realisations\">mes réalisations</a> ci-dessous). 
        <br><br>
        Au cours de mon passer, j'ai pu découvrir des outils et logiciels de création 2D et 3D (<a href=\"www.gimp.org\">Gimp</a>, <a href=\"www.blender.org\">Blender</a>, <a href=\"www.pencil2d.org\">Pencil 2D</a>, <a href=\"https://www.maefloresta.com/\">TupiTube</a> ...) lors de mes voyages à travers le web, ainsi que des programmes de montage vidéo professionnel <span class=\"text-underline-dotting\">Open-Source</span> (<a href=\"https://shotcut.org/\">Shotcut</a>, <a href=\"https://kdenlive.org/fr/\">Kdenlive</a>, <a href=\"https://www.olivevideoeditor.org/\">Olive</a>) et sans oublier de puissants éditeurs de texte (<a href=\"https://www.vim.org/\">Vim</a> / <a href=\"https://www.sublimetext.com/\">Sublime-Text</a> / <a href=\"https://visualstudio.microsoft.com/fr/\">Visual Studio</a> / <a href=\"http://www.codeblocks.org/\">Code:Blocks</a> / <a href=\"https://www.eclipse.org\">Eclipse</a> ...), les gestionnaires de base de données (<a href=\"https://www.mysql.com/fr/\">Mysql</a>, <a href=\"https://mariadb.org/\">MariaDB</a> ...), des tonnes de librairies, opensource ou non, à l'aide de <a href=\"https://cdnjs.com/\">CDNJS</a> et les principes théoriques de base de <span class=\"text-underline-dotting\">la programmation orientée objet (POO)</span>, en bref, tout un tas d'outils de création web ainsi que leurs options d'intégration optimale, mais pas que!
    </div>

    <div class=\"text-white bg-transparent text-justify font-stanberry h5 ml-4 mr-4 mt-5 mb-3 pt-5 b-t-s-2-white\">
        Voilà 2 ans que je me fixe des objectifs, des idées et des fonctions d'objets pour construire et finaliser des projets web qui pourront être intéressant, attractifs, et simple d'utilisation à de nombreux utilisateurs, je sais qu'avec de bonnes idées et de la motivation on peut arriver à construire un avenir meilleur pour tous autour du web, certaines de mes réalisations ont pu être très enrichissantes dans mon apprentissage, d'autant plus que celles-ci mon permis de découvrir la programmation \"\"Classic\"\" et la programmation \"\"Framework\"\" qui sont tous deux très lier.

        <br><br><br><br>
        <img id=\"dodo_mexicain\" src=\"/img/dodo.png\" alt=\"sieste_mexicaine\">
        <img id=\"arbre_feuilles\" src=\"/img/arbre_feuilles.png\" alt=\"arbre_a_feuilles\">
        
        <div id=\"realisations\" class=\"bg-white text-black text-center p-2 pt-5 shadow-inset-f2\">

            <div class=\"float-right b-bl-s-2-black w-14 p-3\"></div>
            <div class=\"float-left b-br-s-2-black w-14 p-3\"></div>

            <u class=\"font-worksans b-t-s-2-black pt-3\">Voici mes réalisations avec dates + réalisations + fonctions + compétences acquises :</u><br>
            (Retrouvez toutes les sources dans <a href=\"#gallery\">la galerie</a>)

            <hr>

            <ul class=\"ml-4 mt-5 p-4 bg-black text-white shadow-outset-f3 font-stanberry\">

                <li class=\"mt-3 mb-2 text-justify\">
                    <u>2016/2017</u> - <b>\"Le Projet-Delta\"</b> - En fin 2016 et début 2017 né l'idée d'un projet de projets 3D (entreprise d'imprimerie 3D) avec un ami, l'idée n'aura pas vu le jour d'aujourd'hui, mais, m'aura permis d'apprendre ce qu'est la programmation \"Classic\", le <span class=\"text-underline-dotting\">HTML</span>, <span class=\"text-underline-dotting\">PHP</span>, <span class=\"text-underline-dotting\">CSS</span>, et <span class=\"text-underline-dotting\">Javascript</span> / <span class=\"text-underline-dotting\">Jquery</span>, j'y ai réalisé :

                    <ul class=\"mt-3 ml-2\">
                        <li>une page d'accueil</li>
                        <li>une page de profil utilisateur</li>
                        <li>un forum (avec notifications jquery des nouveaux messages)</li>
                        <li>une boutique</li>
                        <li>une messagerie instantanée (Jquery/<span class=\"text-underline-dotting\">Ajax</span>)</li>
                        <li>une messagerie (PHP et Jquery pour les notifications)</li>
                        <li>un panel-admin. (gestion des utilisateurs, gestion des articles en page d'accueil, gestion du forum, gestion de la boutique)</li>
                    </ul>
                    <br>(<a href=\"#delta-project\" rel=\"modal:open\">Code Source</a>)
                </li>

                <li class=\"mt-4 mb-2 text-justify\">
                    <u>2018</u> - <b>Le vaste pouvoir du web</b> - En harmonie avec la programmation web PHP, du \"Projet-Delta\" créer et (hélas) toujours en construction par manque de temps, je décide de continuer vers cette branche qu'est le développement web, je me lance donc dans un projet d'apprentissage plus pousser du Jquery en créant un \"jeu du pendu\", manque de chance, problème d'ordinateur ou faute professionnelle, en tout cas, perte de fichiers, mon pendu, c'est pendu, mais ayant beaucoup appris de lui je finis par le recréer, je redécide même de commencer différemment et de partir sur un fond de cahier de feuilles à carreaux et d'une animation 2D (gif) avec <span class=\"text-underline-dotting\">Pencil 2D</span>, cette fois-ci, pour lui donner un air plus neuf que le précédent, j'ai d'ailleurs pu remarquer que les fonctions Jquery recréer était beaucoup plus jolie, moins brouillons, commenter, et rapide à écrire la deuxième fois, incroyable! 
                    <br>(<a href=\"\">Code Source</a>)
                </li>

                <li class=\"mt-4 mb-2 text-justify\">
                    <u>2019/2020</u> - <b>360° Pole-Emploi double-Backflip to Revert</b> - Après toutes les péripéties et le temps consacraient à apprendre Jquery sur un \"jeu du pendu\" et sur un site d'entreprise \"le Projet-Delta 1.0\", je finis par découvrir toute la puissance des <span class=\"text-underline-dotting\">frameworks PHP</span> dans la programmation web, je choisis de découvrir <span class=\"text-underline-dotting\">Symfony</span>, je commence ensuite à réfléchir sur un projet web personnel qui serait intéressant pour de nombreux utilisateurs d'aujourd'hui, un projet web personnel au début, puis, professionnel une fois en production, c'est là que né l'idée de créer un \"<span class=\"text-underline-dotting\">Wiki-Tricks</span>\", passionnée par les sports techniques et les disciplines sportives artistique, je me lance ni une, ni deux, dans la création d'une application pour le moment web, puis mobile, d'une sorte de Wikipédia ancestrale de figures technique ou de style dans différents sports, l'idée serait de rendre le tout fluide et pratique à utiliser par les \"Trickseur\".
                    
                    <br><br>(Aujourd'hui j'ai pu réaliser sur le wiki-tricks:

                    <ul class=\"mt-3 ml-2\">
                        <li>page d'accueil</li>
                        <li>pages de connexion et inscription</li>
                        <li>Page de profil</li>
                        <li>Page de catégories</li>
                        <li>Page de tricks</li>
                        <li>Page de demande de catégories</li>
                        <li>Page de demande de tricks</li>
                        <li>fonctions js d'une galerie d'images</li>
                        <li>fonction pour faire une demande d'upload d'image dans la galerie</li>
                        <li>un panel-admin avec gestion des demandes diverses dans un tableau pour que les administrateurs puissent modérer le tout ...</li>
                    </ul>
                    <br>
                    Et il reste beaucoup à faire!)
                    <br>(<a href=\"\">Lien vers le projet en développement.</a>)
                </li>

                <li class=\"mt-4 mb-2 text-justify\">
                    <u>2020/202?</u> - <b>Le temps Bash</b> - Symfony c'est beau, c'est puissant, c'est bien conçu, mais, ça demande quand même beaucoup de temps pour installer tous les super-composants, tel que <span class=\"text-underline-dotting\">Webpack-Encore</span>, les <span class=\"text-underline-dotting\">Sessions PHP</span>, ... Après il faut configurer Webpack et y ajouter <span class=\"text-underline-dotting\">PostCSS</span>, <span class=\"text-underline-dotting\">Sass-Loader</span>, se dégoter des <span class=\"text-underline-dotting\">frameworks</span> HTML/CSS/JS sur <span class=\"text-underline-dotting\">CDNJS</span>, puis il faut créer la base du site et, enfin après, il faut faire le café, puis coder le site du client, c'est long, très long, mais Linux(<span class=\"text-underline-dotting\">Bash</span>), c'est magique et c'est pratique, ça prend tout son sens dans la problématique, l'idée c'est d'automatiser totalement les tâches redondantes faite dans le terminal pour en arriver au résultat actuel d'une \"<span class=\"text-underline-dotting\">template</span>\" basique d'un site web prêt à être entièrement modifié par un dev.. 
                    <br><br>
                    +++ en bonus, une option (-new) qui va permettre de dire au script Bash que vous devez peut-être installé tous le serveur local  <span class=\"text-underline-dotting\">Apache2</span>, PHP, <span class=\"text-underline-dotting\">Mysql</span>, le framework <span class=\"text-underline-dotting\">Symfony</span>, <span class=\"text-underline-dotting\">Yarn</span>, <span class=\"text-underline-dotting\">NodeJS</span> et <span class=\"text-underline-dotting\">Composer</span>, finalement, pour dire au script que vous êtes sur un OS Linux tout neuf et que vous n'avez encore jamais installer de serveur local ni même de framework sur votre machine ! Je vous présente \"<span class=\"text-underline-dotting\">Compo_Symfo.sh 1.5</span>\" qui vous enlèveras (j'en suis sûre !) 1 à 2 heures de configuration, installation et écriture du code !<br><br>

                    Pour la réalisation de ce script, j'ai commencé par créer la base même d'une <span class=\"text-underline-dotting\">template basique</span> d'un site web, puis j'ai gardé en tête chaque utilisation de la console Linux depuis une nouvelle distribution Linux neuve pour en arriver à ce résultat, c’est-à-dire chaque installation redondante du serveur et des outils ainsi que leurs configurations et composants nécessaires… Par la suite j'ai simplement dit au script de recréer certains fichiers de code qui on était créer et modifier par moi-même, pour faire la base du site, son design, ses pages (la fameuse template)... et enfin, j'ai testé le script sur différentes distribution Linux.<br>
                    (Ubuntu, Xubuntu, Lubuntu, Linux-Mint et Debian)
                    <br>(<a href=\"\">Vous pouvez laisser un commentaire ou un avis pour aider le script à s'améliorer</a>)


                    
                    <br><br><br><br>
                    <b><h4><u>Voici le déroulement du script -></u>\$ compo_symfo.sh [-new]</h4></b>

                    <div class=\"border border-white p-4 font-coolvetica\">
                        <span class=\"text-purple\">if</span>  <span class=\"text-danger\">[[</span> <span class=\"text-success\">\$1</span> <span class=\"text-danger\">=</span> <span class=\"text-yellow\">\"-new\"</span> <span class=\"text-danger\">]]</span>; <span class=\"text-purple\">then</span> <span class=\"text-info\">## Option -new au lancement dans n'importe quel dossier !</span><br><br>

                        <div class=\"ml-5 text-justify\">

                            ";
        // line 160
        echo "                            <span class=\"material-icons\">subdirectory_arrow_right</span>
                            Demande d'installation des <span class=\"text-underline-dotting\">paquets LAMP</span> avec <span class=\"text-underline-dotting\">Aptitude(apt)</span> <br>
                        
                            + Demande d'installation des outils et frameworks-> <span class=\"text-underline-dotting\">Github</span>, <span class=\"text-underline-dotting\">Symfony</span>, <span class=\"text-underline-dotting\">NodeJS</span>, <span class=\"text-underline-dotting\">Yarn</span>, <span class=\"text-underline-dotting\">Composer</span> <br>
                        
                            + Création d'un projet Symfony <br>
                        
                            + Configuration du fichier \"<span class=\"text-underline-dotting\">000-default.conf</span>\" de Apache2 pour accueillir le projet sur le \"http://localhost/\" <br>
                        
                            + <span class=\"text-underline-dotting\">Debugs du bug de la debug-toolbar-profiler de symfony avec Apache2</span> <br>
                        
                            + Configuration de Symfony et ses composants <br>
                        
                            + Écriture de la base HTML/SASS/PHP/JS + Ecriture du fichier de <span class=\"text-underline-dotting\">particles.js</span> <br>
                        
                            + Téléchargement de <span class=\"text-underline-dotting\">2 polices d'écritures</span> dans (public/fonts/) <br>
                        
                            + Build \"Assets\" Symfony avec \"<span class=\"text-underline-dotting\">yarn encore dev</span>\" <br>
                        
                            + Cafés chauds..
                        </div>
                        <span class=\"text-purple\">fi</span><br><br> ";
        // line 182
        echo "
                        <span class=\"text-info\">## Sans options dans le dossier du projet symfony créer!</span>
                        <br><br>
                        
                        ";
        // line 187
        echo "                        <span class=\"material-icons\">subdirectory_arrow_right</span>
                        Configuration du fichier \"<span class=\"text-underline-dotting\">000-default.conf</span>\" de Apache2 pour accueillir le projet sur le \"http://localhost/\" <br>
                    
                        + <span class=\"text-underline-dotting\">Debugs du bug de la debug-toolbar-profiler de symfony avec Apache2</span> <br>
                    
                        + Configuration de Symfony et ses composants <br>
                    
                        + Écriture de la base HTML/SASS/PHP/JS <br>
                    
                        + Ecriture du fichier de <span class=\"text-underline-dotting\">particles.js</span> <br>
                    
                        + Téléchargement de <span class=\"text-underline-dotting\">2 polices d'écritures</span> dans (public/fonts/) <br>
                    
                        + Build \"<span class=\"text-underline-dotting\">Assets</span>\" Symfony avec \"<span class=\"text-underline-dotting\">yarn encore dev</span>\" <br>
                        
                        + Cafés chauds..
                    </div>
                    <br><br>(désoler pour celles et ceux qui ont Windows ou Mac, j'envisage de faire un jour une version <span class=\"text-underline-dotting\">GUI</span> avec <span class=\"text-underline-dotting\">Python</span>... qui-sait !?)
                    <br>
                    (<a href=\"\">Code Source, Tuto et Téléchargement</a>)
                </li>
            </ul>

            <hr>
        </div>   

        <br>
        <img id=\"chat\" src=\"/img/chat.png\" alt=\"chat\">
        <div class=\"text-right\">
            N'hésitez pas à me soutenir dans mes projets si ceux-ci vous semblent concrétisables et solides.
            <br>
            (Vous pouvez me <a href=\"#contact\">contacter</a>, ou faire de <a href=\"#dons\">\"micro-dons\"</a> pour aider le service d'hébergement et les noms de domaines).
        </div>
        
    </div>

    <div id=\"gallery\" class=\"h5 mt-5 p-4 shadow-outset-f2-h bg-white text-black text-center\">

        <h4 class=\"mb-5 font-worksans b-tlr-s-2-black\"><b><u class=\"bg-black text-white p-3\">Ma galerie de code source</u></b></h4>

        <div class=\"d-flex flex-row flex-nowrap justify-content-around align-content-stretch\">
            
            <a class=\"d-inline ml-2 no-underline\" href=\"\">
                <i class=\"fab fa-html5 fa-3x\"></i>
                <i class=\"fab fa-sass fa-3x\"></i>
                <i class=\"fab fa-js fa-3x\"></i>
                <br>Html5 / Sass / Jquery
            </a>

            <a class=\"d-inline ml-5 no-underline\" href=\"\">
                <i class=\"fab fa-php fa-3x\"></i>
                <i class=\"fab fa-symfony fa-3x\"></i>
                <br>PHP / Symfony
            </a>

            <a class=\"d-inline ml-5 no-underline\" href=\"\">
                <i class=\"fas fa-terminal fa-3x\"></i>
                <br>Bourne again shell
            </a>
            
        </div>
    
    </div>

    <div class=\"text-white text-center font-worksans h5 ml-4 mr-4 mt-5 pt-2\">
        <h4 class=\"mb-3 font-worksans\"><b><u>Analyse du niveau de mes compétences et atouts</u></b></h4>
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
        return array (  342 => 187,  336 => 182,  313 => 160,  199 => 47,  194 => 43,  188 => 39,  186 => 38,  183 => 37,  177 => 33,  175 => 32,  172 => 31,  166 => 28,  163 => 27,  161 => 26,  158 => 25,  152 => 21,  150 => 20,  147 => 19,  144 => 17,  134 => 16,  122 => 12,  117 => 11,  107 => 10,  95 => 7,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
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

    <div id=\"intro\" class=\"text-white bg-transparent font-worksans h5 ml-4 mr-4 pt-2 border-top border-white\">Bonjour, bienvenue à tous sur mon <span class=\"ml-5 mr-5\"></span> en ligne, je suis autodidacte dans le développement web, cela fait bientôt 4 ans que je me spécialise et m'intéresse à la programmation informatique de façons professionnelles dans différents domaines.</div>

    {# Bloc javascript qui change un bout de texte toutes les 2 secondes dans le paragraphe d'après #}
    <div id=\"change_text-title\" class=\"text-white bg-transparent font-worksans h5\"></div>

    <div id=\"next-intro\" class=\"text-white bg-transparent font-worksans h5 ml-4 mt-4 d-flex flex-row flex-nowrap\">
        
        <div class=\"h-75 text-justify border border-white font-stanberry p-2\">
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
        J'ai également eu la possibilité de réparer des machines informatiques, comme des ordinateurs portables et des PC fixent, put tester les nombreux systèmes d'exploitation, notamment Linux et son système de <a href=\"https://fr.wikipedia.org/wiki/Bourne-Again_shell\">Bash (Bourne again shell)</a> très pratique et puissant pour automatiser des tâches un peu longues comme l'installation d'un serveur local ou l'installation de composants à Symfony (voir <a href=\"#realisations\">mes réalisations</a> ci-dessous). 
        <br><br>
        Au cours de mon passer, j'ai pu découvrir des outils et logiciels de création 2D et 3D (<a href=\"www.gimp.org\">Gimp</a>, <a href=\"www.blender.org\">Blender</a>, <a href=\"www.pencil2d.org\">Pencil 2D</a>, <a href=\"https://www.maefloresta.com/\">TupiTube</a> ...) lors de mes voyages à travers le web, ainsi que des programmes de montage vidéo professionnel <span class=\"text-underline-dotting\">Open-Source</span> (<a href=\"https://shotcut.org/\">Shotcut</a>, <a href=\"https://kdenlive.org/fr/\">Kdenlive</a>, <a href=\"https://www.olivevideoeditor.org/\">Olive</a>) et sans oublier de puissants éditeurs de texte (<a href=\"https://www.vim.org/\">Vim</a> / <a href=\"https://www.sublimetext.com/\">Sublime-Text</a> / <a href=\"https://visualstudio.microsoft.com/fr/\">Visual Studio</a> / <a href=\"http://www.codeblocks.org/\">Code:Blocks</a> / <a href=\"https://www.eclipse.org\">Eclipse</a> ...), les gestionnaires de base de données (<a href=\"https://www.mysql.com/fr/\">Mysql</a>, <a href=\"https://mariadb.org/\">MariaDB</a> ...), des tonnes de librairies, opensource ou non, à l'aide de <a href=\"https://cdnjs.com/\">CDNJS</a> et les principes théoriques de base de <span class=\"text-underline-dotting\">la programmation orientée objet (POO)</span>, en bref, tout un tas d'outils de création web ainsi que leurs options d'intégration optimale, mais pas que!
    </div>

    <div class=\"text-white bg-transparent text-justify font-stanberry h5 ml-4 mr-4 mt-5 mb-3 pt-5 b-t-s-2-white\">
        Voilà 2 ans que je me fixe des objectifs, des idées et des fonctions d'objets pour construire et finaliser des projets web qui pourront être intéressant, attractifs, et simple d'utilisation à de nombreux utilisateurs, je sais qu'avec de bonnes idées et de la motivation on peut arriver à construire un avenir meilleur pour tous autour du web, certaines de mes réalisations ont pu être très enrichissantes dans mon apprentissage, d'autant plus que celles-ci mon permis de découvrir la programmation \"\"Classic\"\" et la programmation \"\"Framework\"\" qui sont tous deux très lier.

        <br><br><br><br>
        <img id=\"dodo_mexicain\" src=\"/img/dodo.png\" alt=\"sieste_mexicaine\">
        <img id=\"arbre_feuilles\" src=\"/img/arbre_feuilles.png\" alt=\"arbre_a_feuilles\">
        
        <div id=\"realisations\" class=\"bg-white text-black text-center p-2 pt-5 shadow-inset-f2\">

            <div class=\"float-right b-bl-s-2-black w-14 p-3\"></div>
            <div class=\"float-left b-br-s-2-black w-14 p-3\"></div>

            <u class=\"font-worksans b-t-s-2-black pt-3\">Voici mes réalisations avec dates + réalisations + fonctions + compétences acquises :</u><br>
            (Retrouvez toutes les sources dans <a href=\"#gallery\">la galerie</a>)

            <hr>

            <ul class=\"ml-4 mt-5 p-4 bg-black text-white shadow-outset-f3 font-stanberry\">

                <li class=\"mt-3 mb-2 text-justify\">
                    <u>2016/2017</u> - <b>\"Le Projet-Delta\"</b> - En fin 2016 et début 2017 né l'idée d'un projet de projets 3D (entreprise d'imprimerie 3D) avec un ami, l'idée n'aura pas vu le jour d'aujourd'hui, mais, m'aura permis d'apprendre ce qu'est la programmation \"Classic\", le <span class=\"text-underline-dotting\">HTML</span>, <span class=\"text-underline-dotting\">PHP</span>, <span class=\"text-underline-dotting\">CSS</span>, et <span class=\"text-underline-dotting\">Javascript</span> / <span class=\"text-underline-dotting\">Jquery</span>, j'y ai réalisé :

                    <ul class=\"mt-3 ml-2\">
                        <li>une page d'accueil</li>
                        <li>une page de profil utilisateur</li>
                        <li>un forum (avec notifications jquery des nouveaux messages)</li>
                        <li>une boutique</li>
                        <li>une messagerie instantanée (Jquery/<span class=\"text-underline-dotting\">Ajax</span>)</li>
                        <li>une messagerie (PHP et Jquery pour les notifications)</li>
                        <li>un panel-admin. (gestion des utilisateurs, gestion des articles en page d'accueil, gestion du forum, gestion de la boutique)</li>
                    </ul>
                    <br>(<a href=\"#delta-project\" rel=\"modal:open\">Code Source</a>)
                </li>

                <li class=\"mt-4 mb-2 text-justify\">
                    <u>2018</u> - <b>Le vaste pouvoir du web</b> - En harmonie avec la programmation web PHP, du \"Projet-Delta\" créer et (hélas) toujours en construction par manque de temps, je décide de continuer vers cette branche qu'est le développement web, je me lance donc dans un projet d'apprentissage plus pousser du Jquery en créant un \"jeu du pendu\", manque de chance, problème d'ordinateur ou faute professionnelle, en tout cas, perte de fichiers, mon pendu, c'est pendu, mais ayant beaucoup appris de lui je finis par le recréer, je redécide même de commencer différemment et de partir sur un fond de cahier de feuilles à carreaux et d'une animation 2D (gif) avec <span class=\"text-underline-dotting\">Pencil 2D</span>, cette fois-ci, pour lui donner un air plus neuf que le précédent, j'ai d'ailleurs pu remarquer que les fonctions Jquery recréer était beaucoup plus jolie, moins brouillons, commenter, et rapide à écrire la deuxième fois, incroyable! 
                    <br>(<a href=\"\">Code Source</a>)
                </li>

                <li class=\"mt-4 mb-2 text-justify\">
                    <u>2019/2020</u> - <b>360° Pole-Emploi double-Backflip to Revert</b> - Après toutes les péripéties et le temps consacraient à apprendre Jquery sur un \"jeu du pendu\" et sur un site d'entreprise \"le Projet-Delta 1.0\", je finis par découvrir toute la puissance des <span class=\"text-underline-dotting\">frameworks PHP</span> dans la programmation web, je choisis de découvrir <span class=\"text-underline-dotting\">Symfony</span>, je commence ensuite à réfléchir sur un projet web personnel qui serait intéressant pour de nombreux utilisateurs d'aujourd'hui, un projet web personnel au début, puis, professionnel une fois en production, c'est là que né l'idée de créer un \"<span class=\"text-underline-dotting\">Wiki-Tricks</span>\", passionnée par les sports techniques et les disciplines sportives artistique, je me lance ni une, ni deux, dans la création d'une application pour le moment web, puis mobile, d'une sorte de Wikipédia ancestrale de figures technique ou de style dans différents sports, l'idée serait de rendre le tout fluide et pratique à utiliser par les \"Trickseur\".
                    
                    <br><br>(Aujourd'hui j'ai pu réaliser sur le wiki-tricks:

                    <ul class=\"mt-3 ml-2\">
                        <li>page d'accueil</li>
                        <li>pages de connexion et inscription</li>
                        <li>Page de profil</li>
                        <li>Page de catégories</li>
                        <li>Page de tricks</li>
                        <li>Page de demande de catégories</li>
                        <li>Page de demande de tricks</li>
                        <li>fonctions js d'une galerie d'images</li>
                        <li>fonction pour faire une demande d'upload d'image dans la galerie</li>
                        <li>un panel-admin avec gestion des demandes diverses dans un tableau pour que les administrateurs puissent modérer le tout ...</li>
                    </ul>
                    <br>
                    Et il reste beaucoup à faire!)
                    <br>(<a href=\"\">Lien vers le projet en développement.</a>)
                </li>

                <li class=\"mt-4 mb-2 text-justify\">
                    <u>2020/202?</u> - <b>Le temps Bash</b> - Symfony c'est beau, c'est puissant, c'est bien conçu, mais, ça demande quand même beaucoup de temps pour installer tous les super-composants, tel que <span class=\"text-underline-dotting\">Webpack-Encore</span>, les <span class=\"text-underline-dotting\">Sessions PHP</span>, ... Après il faut configurer Webpack et y ajouter <span class=\"text-underline-dotting\">PostCSS</span>, <span class=\"text-underline-dotting\">Sass-Loader</span>, se dégoter des <span class=\"text-underline-dotting\">frameworks</span> HTML/CSS/JS sur <span class=\"text-underline-dotting\">CDNJS</span>, puis il faut créer la base du site et, enfin après, il faut faire le café, puis coder le site du client, c'est long, très long, mais Linux(<span class=\"text-underline-dotting\">Bash</span>), c'est magique et c'est pratique, ça prend tout son sens dans la problématique, l'idée c'est d'automatiser totalement les tâches redondantes faite dans le terminal pour en arriver au résultat actuel d'une \"<span class=\"text-underline-dotting\">template</span>\" basique d'un site web prêt à être entièrement modifié par un dev.. 
                    <br><br>
                    +++ en bonus, une option (-new) qui va permettre de dire au script Bash que vous devez peut-être installé tous le serveur local  <span class=\"text-underline-dotting\">Apache2</span>, PHP, <span class=\"text-underline-dotting\">Mysql</span>, le framework <span class=\"text-underline-dotting\">Symfony</span>, <span class=\"text-underline-dotting\">Yarn</span>, <span class=\"text-underline-dotting\">NodeJS</span> et <span class=\"text-underline-dotting\">Composer</span>, finalement, pour dire au script que vous êtes sur un OS Linux tout neuf et que vous n'avez encore jamais installer de serveur local ni même de framework sur votre machine ! Je vous présente \"<span class=\"text-underline-dotting\">Compo_Symfo.sh 1.5</span>\" qui vous enlèveras (j'en suis sûre !) 1 à 2 heures de configuration, installation et écriture du code !<br><br>

                    Pour la réalisation de ce script, j'ai commencé par créer la base même d'une <span class=\"text-underline-dotting\">template basique</span> d'un site web, puis j'ai gardé en tête chaque utilisation de la console Linux depuis une nouvelle distribution Linux neuve pour en arriver à ce résultat, c’est-à-dire chaque installation redondante du serveur et des outils ainsi que leurs configurations et composants nécessaires… Par la suite j'ai simplement dit au script de recréer certains fichiers de code qui on était créer et modifier par moi-même, pour faire la base du site, son design, ses pages (la fameuse template)... et enfin, j'ai testé le script sur différentes distribution Linux.<br>
                    (Ubuntu, Xubuntu, Lubuntu, Linux-Mint et Debian)
                    <br>(<a href=\"\">Vous pouvez laisser un commentaire ou un avis pour aider le script à s'améliorer</a>)


                    
                    <br><br><br><br>
                    <b><h4><u>Voici le déroulement du script -></u>\$ compo_symfo.sh [-new]</h4></b>

                    <div class=\"border border-white p-4 font-coolvetica\">
                        <span class=\"text-purple\">if</span>  <span class=\"text-danger\">[[</span> <span class=\"text-success\">\$1</span> <span class=\"text-danger\">=</span> <span class=\"text-yellow\">\"-new\"</span> <span class=\"text-danger\">]]</span>; <span class=\"text-purple\">then</span> <span class=\"text-info\">## Option -new au lancement dans n'importe quel dossier !</span><br><br>

                        <div class=\"ml-5 text-justify\">

                            {# Material icons #}
                            <span class=\"material-icons\">subdirectory_arrow_right</span>
                            Demande d'installation des <span class=\"text-underline-dotting\">paquets LAMP</span> avec <span class=\"text-underline-dotting\">Aptitude(apt)</span> <br>
                        
                            + Demande d'installation des outils et frameworks-> <span class=\"text-underline-dotting\">Github</span>, <span class=\"text-underline-dotting\">Symfony</span>, <span class=\"text-underline-dotting\">NodeJS</span>, <span class=\"text-underline-dotting\">Yarn</span>, <span class=\"text-underline-dotting\">Composer</span> <br>
                        
                            + Création d'un projet Symfony <br>
                        
                            + Configuration du fichier \"<span class=\"text-underline-dotting\">000-default.conf</span>\" de Apache2 pour accueillir le projet sur le \"http://localhost/\" <br>
                        
                            + <span class=\"text-underline-dotting\">Debugs du bug de la debug-toolbar-profiler de symfony avec Apache2</span> <br>
                        
                            + Configuration de Symfony et ses composants <br>
                        
                            + Écriture de la base HTML/SASS/PHP/JS + Ecriture du fichier de <span class=\"text-underline-dotting\">particles.js</span> <br>
                        
                            + Téléchargement de <span class=\"text-underline-dotting\">2 polices d'écritures</span> dans (public/fonts/) <br>
                        
                            + Build \"Assets\" Symfony avec \"<span class=\"text-underline-dotting\">yarn encore dev</span>\" <br>
                        
                            + Cafés chauds..
                        </div>
                        <span class=\"text-purple\">fi</span><br><br> {# Fin de margin left 5 #}

                        <span class=\"text-info\">## Sans options dans le dossier du projet symfony créer!</span>
                        <br><br>
                        
                        {# Material icons #}
                        <span class=\"material-icons\">subdirectory_arrow_right</span>
                        Configuration du fichier \"<span class=\"text-underline-dotting\">000-default.conf</span>\" de Apache2 pour accueillir le projet sur le \"http://localhost/\" <br>
                    
                        + <span class=\"text-underline-dotting\">Debugs du bug de la debug-toolbar-profiler de symfony avec Apache2</span> <br>
                    
                        + Configuration de Symfony et ses composants <br>
                    
                        + Écriture de la base HTML/SASS/PHP/JS <br>
                    
                        + Ecriture du fichier de <span class=\"text-underline-dotting\">particles.js</span> <br>
                    
                        + Téléchargement de <span class=\"text-underline-dotting\">2 polices d'écritures</span> dans (public/fonts/) <br>
                    
                        + Build \"<span class=\"text-underline-dotting\">Assets</span>\" Symfony avec \"<span class=\"text-underline-dotting\">yarn encore dev</span>\" <br>
                        
                        + Cafés chauds..
                    </div>
                    <br><br>(désoler pour celles et ceux qui ont Windows ou Mac, j'envisage de faire un jour une version <span class=\"text-underline-dotting\">GUI</span> avec <span class=\"text-underline-dotting\">Python</span>... qui-sait !?)
                    <br>
                    (<a href=\"\">Code Source, Tuto et Téléchargement</a>)
                </li>
            </ul>

            <hr>
        </div>   

        <br>
        <img id=\"chat\" src=\"/img/chat.png\" alt=\"chat\">
        <div class=\"text-right\">
            N'hésitez pas à me soutenir dans mes projets si ceux-ci vous semblent concrétisables et solides.
            <br>
            (Vous pouvez me <a href=\"#contact\">contacter</a>, ou faire de <a href=\"#dons\">\"micro-dons\"</a> pour aider le service d'hébergement et les noms de domaines).
        </div>
        
    </div>

    <div id=\"gallery\" class=\"h5 mt-5 p-4 shadow-outset-f2-h bg-white text-black text-center\">

        <h4 class=\"mb-5 font-worksans b-tlr-s-2-black\"><b><u class=\"bg-black text-white p-3\">Ma galerie de code source</u></b></h4>

        <div class=\"d-flex flex-row flex-nowrap justify-content-around align-content-stretch\">
            
            <a class=\"d-inline ml-2 no-underline\" href=\"\">
                <i class=\"fab fa-html5 fa-3x\"></i>
                <i class=\"fab fa-sass fa-3x\"></i>
                <i class=\"fab fa-js fa-3x\"></i>
                <br>Html5 / Sass / Jquery
            </a>

            <a class=\"d-inline ml-5 no-underline\" href=\"\">
                <i class=\"fab fa-php fa-3x\"></i>
                <i class=\"fab fa-symfony fa-3x\"></i>
                <br>PHP / Symfony
            </a>

            <a class=\"d-inline ml-5 no-underline\" href=\"\">
                <i class=\"fas fa-terminal fa-3x\"></i>
                <br>Bourne again shell
            </a>
            
        </div>
    
    </div>

    <div class=\"text-white text-center font-worksans h5 ml-4 mr-4 mt-5 pt-2\">
        <h4 class=\"mb-3 font-worksans\"><b><u>Analyse du niveau de mes compétences et atouts</u></b></h4>
    </div>

{% endblock %}

", "home/index.html.twig", "/var/www/cv_symfo/templates/home/index.html.twig");
    }
}
