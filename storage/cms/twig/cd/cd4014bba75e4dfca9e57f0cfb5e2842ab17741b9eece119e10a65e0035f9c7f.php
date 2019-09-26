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

/* E:\xampp\htdocs\october/themes/mehedi-megakit/partials/home/about.htm */
class __TwigTemplate_b57ed18b5f9252f323d0ac8255e4eb7f1a3f9d5f951b360e9f3c8660afe48447 extends \Twig\Template
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
        echo "<section class=\"section about position-relative\">
\t<div class=\"bg-about\"></div>
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-6 offset-lg-6 offset-md-0\">
\t\t\t\t<div class=\"about-item \">
\t\t\t\t\t<span class=\"h6 text-color\">What we are</span>
\t\t\t\t\t<h2 class=\"mt-3 mb-4 position-relative content-title\">We are dynamic team of creative people</h2>
\t\t\t\t\t<div class=\"about-content\">
\t\t\t\t\t\t<h4 class=\"mb-3 position-relative\">We are Perfect Solution</h4>
\t\t\t\t\t\t<p class=\"mb-5\">We provide consulting services in the area of IFRS and management reporting, helping companies to reach their highest level. We optimize business processes, making them easier.</p>

\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-main btn-round-full\">Get started</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
";
    }

    public function getTemplateName()
    {
        return "E:\\xampp\\htdocs\\october/themes/mehedi-megakit/partials/home/about.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
{# Section About Start #}
<section class=\"section about position-relative\">
\t<div class=\"bg-about\"></div>
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-6 offset-lg-6 offset-md-0\">
\t\t\t\t<div class=\"about-item \">
\t\t\t\t\t<span class=\"h6 text-color\">What we are</span>
\t\t\t\t\t<h2 class=\"mt-3 mb-4 position-relative content-title\">We are dynamic team of creative people</h2>
\t\t\t\t\t<div class=\"about-content\">
\t\t\t\t\t\t<h4 class=\"mb-3 position-relative\">We are Perfect Solution</h4>
\t\t\t\t\t\t<p class=\"mb-5\">We provide consulting services in the area of IFRS and management reporting, helping companies to reach their highest level. We optimize business processes, making them easier.</p>

\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-main btn-round-full\">Get started</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
{# Section About End #}", "E:\\xampp\\htdocs\\october/themes/mehedi-megakit/partials/home/about.htm", "");
    }
}
