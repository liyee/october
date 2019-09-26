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

/* E:\xampp\htdocs\october/themes/mehedi-megakit/partials/home/counter.htm */
class __TwigTemplate_bc6c5e1420857a43fba70656bfe0367004961fb2a8a498e4d81324ed27216ed1 extends \Twig\Template
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
        echo "<section class=\"section counter\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"counter-item text-center mb-5 mb-lg-0\">
\t\t\t\t\t<h3 class=\"mb-0\"><span class=\"counter-stat font-weight-bold\">1730</span> +</h3>
\t\t\t\t\t<p class=\"text-muted\">Project Done</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"counter-item text-center mb-5 mb-lg-0\">
\t\t\t\t\t<h3 class=\"mb-0\"><span class=\"counter-stat font-weight-bold\">125 </span>M </h3>
\t\t\t\t\t<p class=\"text-muted\">User Worldwide</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"counter-item text-center mb-5 mb-lg-0\">
\t\t\t\t\t<h3 class=\"mb-0\"><span class=\"counter-stat font-weight-bold\">39</span></h3>
\t\t\t\t\t<p class=\"text-muted\">Availble Country</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"counter-item text-center\">
\t\t\t\t\t<h3 class=\"mb-0\"><span class=\"counter-stat font-weight-bold\">14</span></h3>
\t\t\t\t\t<p class=\"text-muted\">Award Winner </p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
";
    }

    public function getTemplateName()
    {
        return "E:\\xampp\\htdocs\\october/themes/mehedi-megakit/partials/home/counter.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
{# Section Counter Start #}
<section class=\"section counter\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"counter-item text-center mb-5 mb-lg-0\">
\t\t\t\t\t<h3 class=\"mb-0\"><span class=\"counter-stat font-weight-bold\">1730</span> +</h3>
\t\t\t\t\t<p class=\"text-muted\">Project Done</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"counter-item text-center mb-5 mb-lg-0\">
\t\t\t\t\t<h3 class=\"mb-0\"><span class=\"counter-stat font-weight-bold\">125 </span>M </h3>
\t\t\t\t\t<p class=\"text-muted\">User Worldwide</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"counter-item text-center mb-5 mb-lg-0\">
\t\t\t\t\t<h3 class=\"mb-0\"><span class=\"counter-stat font-weight-bold\">39</span></h3>
\t\t\t\t\t<p class=\"text-muted\">Availble Country</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"counter-item text-center\">
\t\t\t\t\t<h3 class=\"mb-0\"><span class=\"counter-stat font-weight-bold\">14</span></h3>
\t\t\t\t\t<p class=\"text-muted\">Award Winner </p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
{# Section Counter End #}", "E:\\xampp\\htdocs\\october/themes/mehedi-megakit/partials/home/counter.htm", "");
    }
}
