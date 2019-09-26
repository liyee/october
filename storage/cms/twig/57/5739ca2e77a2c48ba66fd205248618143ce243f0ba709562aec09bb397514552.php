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

/* E:\xampp\htdocs\october/themes/mehedi-megakit/pages/services.htm */
class __TwigTemplate_acbf6719590da9ef8eabb87144e3d75509306544dd6e0404b6ed2f037b0ab992 extends \Twig\Template
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
        // line 1
        echo "<!-- Section Page Intro Start -->
<section class=\"page-title bg-1\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"block text-center\">
                    <span class=\"text-white\">Our services</span>
                    <h1 class=\"text-capitalize mb-4 text-lg\">What We Do</h1>
                    <ul class=\"list-inline\">
                        <li class=\"list-inline-item\"><a href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\" class=\"text-white\">Home</a></li>
                        <li class=\"list-inline-item\"><span class=\"text-white\">/</span></li>
                        <li class=\"list-inline-item\"><a href=\"#\" class=\"text-white-50\">Our services</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section Page Intro End -->
<!--  Section Services Start -->
<section class=\"section service border-top\">
    <div class=\"container\">
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
\t\t\t\t<div class=\"service-item mb-5\">
\t\t\t\t\t<i class=\"ti-vector\"></i>
\t\t\t\t\t<h4 class=\"mb-3\">Branding.</h4>
\t\t\t\t\t<p>A digital agency isn't here to replace your internal team, we're here to partner</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"service-item mb-5\">
\t\t\t\t\t<i class=\"ti-android\"></i>
\t\t\t\t\t<h4 class=\"mb-3\">App development.</h4>
\t\t\t\t\t<p>A digital agency isn't here to replace your internal team, we're here to partner</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"service-item mb-5\">
\t\t\t\t\t<i class=\"ti-pencil-alt\"></i>
\t\t\t\t\t<h4 class=\"mb-3\">Content creation.</h4>
\t\t\t\t\t<p>A digital agency isn't here to replace your internal team, we're here to partner</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"service-item\">
\t\t\t\t\t<i class=\"ti-layers\"></i>
\t\t\t\t\t<h4 class=\"mb-3\">Interface Design.</h4>
\t\t\t\t\t<p>A digital agency isn't here to replace your internal team, we're here to partner</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"service-item\">
\t\t\t\t\t<i class=\"ti-bar-chart\"></i>
\t\t\t\t\t<h4 class=\"mb-3\">Business Consulting.</h4>
\t\t\t\t\t<p>A digital agency isn't here to replace your internal team, we're here to partner</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"service-item\">
\t\t\t\t\t<i class=\"ti-vector\"></i>
\t\t\t\t\t<h4 class=\"mb-3\">Branding.</h4>
\t\t\t\t\t<p>A digital agency isn't here to replace your internal team, we're here to partner</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!--  Section Services End -->
<!-- Section CTA Start -->
<section class=\"cta-2\">
\t<div class=\"container\">
\t\t<div class=\"cta-block p-5 rounded\">
\t\t\t<div class=\"row justify-content-center align-items-center \">
\t\t\t\t<div class=\"col-lg-7\">
\t\t\t\t\t<span class=\"text-color\">For Every type business</span>
\t\t\t\t\t<h2 class=\"mt-2 text-white\">Entrust Your Project to Our Best Team of Professionals</h2>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t<a href=\"contact.html\" class=\"btn btn-main btn-round-full float-right\">Contact Us</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!-- Section CTA End -->";
    }

    public function getTemplateName()
    {
        return "E:\\xampp\\htdocs\\october/themes/mehedi-megakit/pages/services.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Section Page Intro Start -->
<section class=\"page-title bg-1\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"block text-center\">
                    <span class=\"text-white\">Our services</span>
                    <h1 class=\"text-capitalize mb-4 text-lg\">What We Do</h1>
                    <ul class=\"list-inline\">
                        <li class=\"list-inline-item\"><a href=\"{{ 'home'|page }}\" class=\"text-white\">Home</a></li>
                        <li class=\"list-inline-item\"><span class=\"text-white\">/</span></li>
                        <li class=\"list-inline-item\"><a href=\"#\" class=\"text-white-50\">Our services</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section Page Intro End -->
<!--  Section Services Start -->
<section class=\"section service border-top\">
    <div class=\"container\">
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
\t\t\t\t<div class=\"service-item mb-5\">
\t\t\t\t\t<i class=\"ti-vector\"></i>
\t\t\t\t\t<h4 class=\"mb-3\">Branding.</h4>
\t\t\t\t\t<p>A digital agency isn't here to replace your internal team, we're here to partner</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"service-item mb-5\">
\t\t\t\t\t<i class=\"ti-android\"></i>
\t\t\t\t\t<h4 class=\"mb-3\">App development.</h4>
\t\t\t\t\t<p>A digital agency isn't here to replace your internal team, we're here to partner</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"service-item mb-5\">
\t\t\t\t\t<i class=\"ti-pencil-alt\"></i>
\t\t\t\t\t<h4 class=\"mb-3\">Content creation.</h4>
\t\t\t\t\t<p>A digital agency isn't here to replace your internal team, we're here to partner</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"service-item\">
\t\t\t\t\t<i class=\"ti-layers\"></i>
\t\t\t\t\t<h4 class=\"mb-3\">Interface Design.</h4>
\t\t\t\t\t<p>A digital agency isn't here to replace your internal team, we're here to partner</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"service-item\">
\t\t\t\t\t<i class=\"ti-bar-chart\"></i>
\t\t\t\t\t<h4 class=\"mb-3\">Business Consulting.</h4>
\t\t\t\t\t<p>A digital agency isn't here to replace your internal team, we're here to partner</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"service-item\">
\t\t\t\t\t<i class=\"ti-vector\"></i>
\t\t\t\t\t<h4 class=\"mb-3\">Branding.</h4>
\t\t\t\t\t<p>A digital agency isn't here to replace your internal team, we're here to partner</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!--  Section Services End -->
<!-- Section CTA Start -->
<section class=\"cta-2\">
\t<div class=\"container\">
\t\t<div class=\"cta-block p-5 rounded\">
\t\t\t<div class=\"row justify-content-center align-items-center \">
\t\t\t\t<div class=\"col-lg-7\">
\t\t\t\t\t<span class=\"text-color\">For Every type business</span>
\t\t\t\t\t<h2 class=\"mt-2 text-white\">Entrust Your Project to Our Best Team of Professionals</h2>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t<a href=\"contact.html\" class=\"btn btn-main btn-round-full float-right\">Contact Us</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!-- Section CTA End -->", "E:\\xampp\\htdocs\\october/themes/mehedi-megakit/pages/services.htm", "");
    }
}
