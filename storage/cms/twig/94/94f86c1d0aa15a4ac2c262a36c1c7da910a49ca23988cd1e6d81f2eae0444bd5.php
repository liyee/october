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

/* E:\xampp\htdocs\october/themes/mehedi-megakit/partials/site/header.htm */
class __TwigTemplate_c612e1d8b96ebaef62888202b4b50a7a463b77f04def2b6ccba47d927aaa1688 extends \Twig\Template
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
        // line 3
        echo "<header class=\"navigation\">
\t<div class=\"header-top \">
\t\t<div class=\"container\">
\t\t\t<div class=\"row justify-content-between align-items-center\">
\t\t\t\t<div class=\"col-lg-2 col-md-4\">
\t\t\t\t\t<div class=\"header-top-socials text-center text-lg-left text-md-left\">
\t\t\t\t\t\t<a href=\"https://www.facebook.com/themefisher\" target=\"_blank\"><i class=\"ti-facebook\"></i></a>
\t\t\t\t\t\t<a href=\"https://twitter.com/themefisher\" target=\"_blank\"><i class=\"ti-twitter\"></i></a>
\t\t\t\t\t\t<a href=\"https://github.com/themefisher/\" target=\"_blank\"><i class=\"ti-github\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-10 col-md-8 text-center text-lg-right text-md-right\">
\t\t\t\t\t<div class=\"header-top-info\">
\t\t\t\t\t\t<a href=\"tel:+23-345-67890\">Call Us : <span>+23-345-67890</span></a>
\t\t\t\t\t\t<a href=\"mailto:support@gmail.com\" ><i class=\"fa fa-envelope mr-2\"></i><span>support@gmail.com</span></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<nav class=\"navbar navbar-expand-lg  py-4\" id=\"navbar\">
\t\t<div class=\"container\">
\t\t  <a class=\"navbar-brand\" href=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">
\t\t  \tMega<span>kit.</span>
\t\t  </a>

\t\t  <button class=\"navbar-toggler collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExample09\" aria-controls=\"navbarsExample09\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"fa fa-bars\"></span>
\t\t  </button>
\t  
\t\t  <div class=\"collapse navbar-collapse text-center\" id=\"navbarsExample09\">
\t\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t  <li class=\"nav-item active\">
\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Home <span class=\"sr-only\">(current)</span></a>
\t\t\t  </li>
\t\t\t  <li class=\"nav-item dropdown\">
\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"dropdown03\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">About</a>
\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"dropdown03\">
\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"";
        // line 41
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about");
        echo "\">Our company</a></li>
\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"";
        // line 42
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("pricing");
        echo "\">Pricing</a></li>
\t\t\t\t\t</ul>
\t\t\t  </li>
\t\t\t   <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 45
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("services");
        echo "\">Services</a></li>
\t\t\t   <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 46
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("portfolio");
        echo "\">Portfolio</a></li>
\t\t\t\t <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 47
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog");
        echo "\">Blog</a></li>
\t\t\t   <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 48
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact-us");
        echo "\">Contact</a></li>
\t\t\t</ul>

\t\t\t<form class=\"form-lg-inline my-2 my-md-0 ml-lg-4 text-center\">
\t\t\t  <a href=\"";
        // line 52
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact-us");
        echo "\" class=\"btn btn-solid-border btn-round-full\">Get a Quote</a>
\t\t\t</form>
\t\t  </div>
\t\t</div>
\t</nav>
</header>
";
    }

    public function getTemplateName()
    {
        return "E:\\xampp\\htdocs\\october/themes/mehedi-megakit/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 52,  105 => 48,  101 => 47,  97 => 46,  93 => 45,  87 => 42,  83 => 41,  75 => 36,  61 => 25,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
{# Header Start #}
<header class=\"navigation\">
\t<div class=\"header-top \">
\t\t<div class=\"container\">
\t\t\t<div class=\"row justify-content-between align-items-center\">
\t\t\t\t<div class=\"col-lg-2 col-md-4\">
\t\t\t\t\t<div class=\"header-top-socials text-center text-lg-left text-md-left\">
\t\t\t\t\t\t<a href=\"https://www.facebook.com/themefisher\" target=\"_blank\"><i class=\"ti-facebook\"></i></a>
\t\t\t\t\t\t<a href=\"https://twitter.com/themefisher\" target=\"_blank\"><i class=\"ti-twitter\"></i></a>
\t\t\t\t\t\t<a href=\"https://github.com/themefisher/\" target=\"_blank\"><i class=\"ti-github\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-10 col-md-8 text-center text-lg-right text-md-right\">
\t\t\t\t\t<div class=\"header-top-info\">
\t\t\t\t\t\t<a href=\"tel:+23-345-67890\">Call Us : <span>+23-345-67890</span></a>
\t\t\t\t\t\t<a href=\"mailto:support@gmail.com\" ><i class=\"fa fa-envelope mr-2\"></i><span>support@gmail.com</span></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<nav class=\"navbar navbar-expand-lg  py-4\" id=\"navbar\">
\t\t<div class=\"container\">
\t\t  <a class=\"navbar-brand\" href=\"{{ 'home'|page }}\">
\t\t  \tMega<span>kit.</span>
\t\t  </a>

\t\t  <button class=\"navbar-toggler collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExample09\" aria-controls=\"navbarsExample09\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"fa fa-bars\"></span>
\t\t  </button>
\t  
\t\t  <div class=\"collapse navbar-collapse text-center\" id=\"navbarsExample09\">
\t\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t  <li class=\"nav-item active\">
\t\t\t\t<a class=\"nav-link\" href=\"{{ 'home'|page }}\">Home <span class=\"sr-only\">(current)</span></a>
\t\t\t  </li>
\t\t\t  <li class=\"nav-item dropdown\">
\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"dropdown03\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">About</a>
\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"dropdown03\">
\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"{{ 'about'|page }}\">Our company</a></li>
\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"{{ 'pricing'|page }}\">Pricing</a></li>
\t\t\t\t\t</ul>
\t\t\t  </li>
\t\t\t   <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ 'services'|page }}\">Services</a></li>
\t\t\t   <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ 'portfolio'|page }}\">Portfolio</a></li>
\t\t\t\t <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ 'blog'|page }}\">Blog</a></li>
\t\t\t   <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ 'contact-us'|page }}\">Contact</a></li>
\t\t\t</ul>

\t\t\t<form class=\"form-lg-inline my-2 my-md-0 ml-lg-4 text-center\">
\t\t\t  <a href=\"{{ 'contact-us'|page }}\" class=\"btn btn-solid-border btn-round-full\">Get a Quote</a>
\t\t\t</form>
\t\t  </div>
\t\t</div>
\t</nav>
</header>
{# Header Close #}", "E:\\xampp\\htdocs\\october/themes/mehedi-megakit/partials/site/header.htm", "");
    }
}
