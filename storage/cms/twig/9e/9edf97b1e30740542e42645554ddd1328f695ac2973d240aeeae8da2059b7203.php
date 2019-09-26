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

/* E:\xampp\htdocs\october/themes/mehedi-megakit/partials/home/services.htm */
class __TwigTemplate_f1066b88fde218aec9f5d17fc7715bc42ef1b318a9de1f19b28b9bef72a4ccf7 extends \Twig\Template
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
        echo "<section class=\"section service border-top\">
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-lg-7 text-center\">
\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t<span class=\"h6 text-color\">Our Services</span>
\t\t\t\t\t<h2 class=\"mt-3 content-title \">We provide a wide range of creative services </h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"service-item mb-5\">
\t\t\t\t\t<i class=\"ti-desktop\"></i>
\t\t\t\t\t<h4 class=\"mb-3\">Web development.</h4>
\t\t\t\t\t<p>A digital agency isn't here to replace your internal team, we're here to partner</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"service-item mb-5\">
\t\t\t\t\t<i class=\"ti-layers\"></i>
\t\t\t\t\t<h4 class=\"mb-3\">Interface Design.</h4>
\t\t\t\t\t<p>A digital agency isn't here to replace your internal team, we're here to partner</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"service-item mb-5\">
\t\t\t\t\t<i class=\"ti-bar-chart\"></i>
\t\t\t\t\t<h4 class=\"mb-3\">Business Consulting.</h4>
\t\t\t\t\t<p>A digital agency isn't here to replace your internal team, we're here to partner</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"service-item mb-5 mb-lg-0\">
\t\t\t\t\t<i class=\"ti-vector\"></i>
\t\t\t\t\t<h4 class=\"mb-3\">Branding.</h4>
\t\t\t\t\t<p>A digital agency isn't here to replace your internal team, we're here to partner</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"service-item mb-5 mb-lg-0\">
\t\t\t\t\t<i class=\"ti-android\"></i>
\t\t\t\t\t<h4 class=\"mb-3\">App development.</h4>
\t\t\t\t\t<p>A digital agency isn't here to replace your internal team, we're here to partner</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"service-item mb-5 mb-lg-0\">
\t\t\t\t\t<i class=\"ti-pencil-alt\"></i>
\t\t\t\t\t<h4 class=\"mb-3\">Content creation.</h4>
\t\t\t\t\t<p>A digital agency isn't here to replace your internal team, we're here to partner</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
";
    }

    public function getTemplateName()
    {
        return "E:\\xampp\\htdocs\\october/themes/mehedi-megakit/partials/home/services.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
{# Section Services Start #}
<section class=\"section service border-top\">
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-lg-7 text-center\">
\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t<span class=\"h6 text-color\">Our Services</span>
\t\t\t\t\t<h2 class=\"mt-3 content-title \">We provide a wide range of creative services </h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"service-item mb-5\">
\t\t\t\t\t<i class=\"ti-desktop\"></i>
\t\t\t\t\t<h4 class=\"mb-3\">Web development.</h4>
\t\t\t\t\t<p>A digital agency isn't here to replace your internal team, we're here to partner</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"service-item mb-5\">
\t\t\t\t\t<i class=\"ti-layers\"></i>
\t\t\t\t\t<h4 class=\"mb-3\">Interface Design.</h4>
\t\t\t\t\t<p>A digital agency isn't here to replace your internal team, we're here to partner</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"service-item mb-5\">
\t\t\t\t\t<i class=\"ti-bar-chart\"></i>
\t\t\t\t\t<h4 class=\"mb-3\">Business Consulting.</h4>
\t\t\t\t\t<p>A digital agency isn't here to replace your internal team, we're here to partner</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"service-item mb-5 mb-lg-0\">
\t\t\t\t\t<i class=\"ti-vector\"></i>
\t\t\t\t\t<h4 class=\"mb-3\">Branding.</h4>
\t\t\t\t\t<p>A digital agency isn't here to replace your internal team, we're here to partner</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"service-item mb-5 mb-lg-0\">
\t\t\t\t\t<i class=\"ti-android\"></i>
\t\t\t\t\t<h4 class=\"mb-3\">App development.</h4>
\t\t\t\t\t<p>A digital agency isn't here to replace your internal team, we're here to partner</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"service-item mb-5 mb-lg-0\">
\t\t\t\t\t<i class=\"ti-pencil-alt\"></i>
\t\t\t\t\t<h4 class=\"mb-3\">Content creation.</h4>
\t\t\t\t\t<p>A digital agency isn't here to replace your internal team, we're here to partner</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
{# Section Services End #}", "E:\\xampp\\htdocs\\october/themes/mehedi-megakit/partials/home/services.htm", "");
    }
}
