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

/* E:\xampp\htdocs\october/themes/mehedi-megakit/pages/portfolio.htm */
class __TwigTemplate_20c797ca5e396216a7d1cb260ba595cd2b48da97a0fda2f428037881b0d8e5f8 extends \Twig\Template
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
        echo "<!-- Section Page Ingro Start -->
<section class=\"page-title bg-1\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"block text-center\">
          <span class=\"text-white\">Latest works</span>
          <h1 class=\"text-capitalize mb-4 text-lg\">Portfolio</h1>
          <ul class=\"list-inline\">
            <li class=\"list-inline-item\"><a href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\" class=\"text-white\">Home</a></li>
            <li class=\"list-inline-item\"><span class=\"text-white\">/</span></li>
            <li class=\"list-inline-item\"><a href=\"#\" class=\"text-white-50\">Latest works</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section Page Intro End -->
<!-- Section Portfolio Start -->
<section class=\"section portfolio pb-0\">
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-lg-7 text-center\">
\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t<span class=\"h6 text-color\">Our works</span>
\t\t\t\t\t<h2 class=\"mt-3 content-title \">We have done lots of works, lets check some</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"container-fluid\">
\t\t<div class=\"row portfolio-gallery\">
\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t<div class=\"portflio-item position-relative mb-4\">
\t\t\t\t\t<a href=\"https://placehold.it/600x466\" class=\"popup-gallery\">
\t\t\t\t\t\t<img src=\"https://placehold.it/500x389\" alt=\"\" class=\"img-fluid w-100\">

\t\t\t\t\t\t<i class=\"ti-plus overlay-item\"></i>
\t\t\t\t\t\t<div class=\"portfolio-item-content\">
\t\t\t\t\t\t\t<h3 class=\"mb-0 text-white\">Project california</h3>
\t\t\t\t\t\t\t<p class=\"text-white-50\">Web Development</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t<div class=\"portflio-item position-relative mb-4\">
\t\t\t\t\t<a href=\"https://placehold.it/600x466\" class=\"popup-gallery\">
\t\t\t\t\t\t<img src=\"https://placehold.it/500x389\" alt=\"\" class=\"img-fluid w-100\">

\t\t\t\t\t\t<i class=\"ti-plus overlay-item\"></i>
\t\t\t\t\t\t<div class=\"portfolio-item-content\">
\t\t\t\t\t\t\t<h3 class=\"mb-0 text-white\">Project california</h3>
\t\t\t\t\t\t\t<p class=\"text-white-50\">Web Development</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t<div class=\"portflio-item position-relative mb-4\">
\t\t\t\t\t<a href=\"https://placehold.it/600x466\" class=\"popup-gallery\">
\t\t\t\t\t\t<img src=\"https://placehold.it/500x389\" alt=\"\" class=\"img-fluid w-100\">

\t\t\t\t\t\t<i class=\"ti-plus overlay-item\"></i>
\t\t\t\t\t\t<div class=\"portfolio-item-content\">
\t\t\t\t\t\t\t<h3 class=\"mb-0 text-white\">Project california</h3>
\t\t\t\t\t\t\t<p class=\"text-white-50\">Web Development</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t<div class=\"portflio-item position-relative mb-4\">
\t\t\t\t\t<a href=\"https://placehold.it/600x466\" class=\"popup-gallery\">
\t\t\t\t\t\t<img src=\"https://placehold.it/500x389\" alt=\"\" class=\"img-fluid w-100\">

\t\t\t\t\t\t<i class=\"ti-plus overlay-item\"></i>
\t\t\t\t\t\t<div class=\"portfolio-item-content\">
\t\t\t\t\t\t\t<h3 class=\"mb-0 text-white\">Project california</h3>
\t\t\t\t\t\t\t<p class=\"text-white-50\">Web Development</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t<div class=\"portflio-item position-relative  mb-4\">
\t\t\t\t\t<a href=\"https://placehold.it/600x466\" class=\"popup-gallery\">
\t\t\t\t\t\t<img src=\"https://placehold.it/500x389\" alt=\"\" class=\"img-fluid w-100\">

\t\t\t\t\t\t<i class=\"ti-plus overlay-item\"></i>
\t\t\t\t\t\t<div class=\"portfolio-item-content\">
\t\t\t\t\t\t\t<h3 class=\"mb-0 text-white\">Project california</h3>
\t\t\t\t\t\t\t<p class=\"text-white-50\">Web Development</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t<div class=\"portflio-item position-relative mb-4\">
\t\t\t\t\t<a href=\"https://placehold.it/600x466\" class=\"popup-gallery\">
\t\t\t\t\t\t<img src=\"https://placehold.it/500x389\" alt=\"\" class=\"img-fluid w-100\">
\t\t\t\t\t\t
\t\t\t\t\t\t<i class=\"ti-plus overlay-item\"></i>
\t\t\t\t\t\t<div class=\"portfolio-item-content\">
\t\t\t\t\t\t\t<h3 class=\"mb-0 text-white\">Project california</h3>
\t\t\t\t\t\t\t<p class=\"text-white-50\">Web Development</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!-- Section Portfolio End -->";
    }

    public function getTemplateName()
    {
        return "E:\\xampp\\htdocs\\october/themes/mehedi-megakit/pages/portfolio.htm";
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
        return new Source("<!-- Section Page Ingro Start -->
<section class=\"page-title bg-1\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"block text-center\">
          <span class=\"text-white\">Latest works</span>
          <h1 class=\"text-capitalize mb-4 text-lg\">Portfolio</h1>
          <ul class=\"list-inline\">
            <li class=\"list-inline-item\"><a href=\"{{ 'home'|page }}\" class=\"text-white\">Home</a></li>
            <li class=\"list-inline-item\"><span class=\"text-white\">/</span></li>
            <li class=\"list-inline-item\"><a href=\"#\" class=\"text-white-50\">Latest works</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section Page Intro End -->
<!-- Section Portfolio Start -->
<section class=\"section portfolio pb-0\">
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-lg-7 text-center\">
\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t<span class=\"h6 text-color\">Our works</span>
\t\t\t\t\t<h2 class=\"mt-3 content-title \">We have done lots of works, lets check some</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"container-fluid\">
\t\t<div class=\"row portfolio-gallery\">
\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t<div class=\"portflio-item position-relative mb-4\">
\t\t\t\t\t<a href=\"https://placehold.it/600x466\" class=\"popup-gallery\">
\t\t\t\t\t\t<img src=\"https://placehold.it/500x389\" alt=\"\" class=\"img-fluid w-100\">

\t\t\t\t\t\t<i class=\"ti-plus overlay-item\"></i>
\t\t\t\t\t\t<div class=\"portfolio-item-content\">
\t\t\t\t\t\t\t<h3 class=\"mb-0 text-white\">Project california</h3>
\t\t\t\t\t\t\t<p class=\"text-white-50\">Web Development</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t<div class=\"portflio-item position-relative mb-4\">
\t\t\t\t\t<a href=\"https://placehold.it/600x466\" class=\"popup-gallery\">
\t\t\t\t\t\t<img src=\"https://placehold.it/500x389\" alt=\"\" class=\"img-fluid w-100\">

\t\t\t\t\t\t<i class=\"ti-plus overlay-item\"></i>
\t\t\t\t\t\t<div class=\"portfolio-item-content\">
\t\t\t\t\t\t\t<h3 class=\"mb-0 text-white\">Project california</h3>
\t\t\t\t\t\t\t<p class=\"text-white-50\">Web Development</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t<div class=\"portflio-item position-relative mb-4\">
\t\t\t\t\t<a href=\"https://placehold.it/600x466\" class=\"popup-gallery\">
\t\t\t\t\t\t<img src=\"https://placehold.it/500x389\" alt=\"\" class=\"img-fluid w-100\">

\t\t\t\t\t\t<i class=\"ti-plus overlay-item\"></i>
\t\t\t\t\t\t<div class=\"portfolio-item-content\">
\t\t\t\t\t\t\t<h3 class=\"mb-0 text-white\">Project california</h3>
\t\t\t\t\t\t\t<p class=\"text-white-50\">Web Development</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t<div class=\"portflio-item position-relative mb-4\">
\t\t\t\t\t<a href=\"https://placehold.it/600x466\" class=\"popup-gallery\">
\t\t\t\t\t\t<img src=\"https://placehold.it/500x389\" alt=\"\" class=\"img-fluid w-100\">

\t\t\t\t\t\t<i class=\"ti-plus overlay-item\"></i>
\t\t\t\t\t\t<div class=\"portfolio-item-content\">
\t\t\t\t\t\t\t<h3 class=\"mb-0 text-white\">Project california</h3>
\t\t\t\t\t\t\t<p class=\"text-white-50\">Web Development</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t<div class=\"portflio-item position-relative  mb-4\">
\t\t\t\t\t<a href=\"https://placehold.it/600x466\" class=\"popup-gallery\">
\t\t\t\t\t\t<img src=\"https://placehold.it/500x389\" alt=\"\" class=\"img-fluid w-100\">

\t\t\t\t\t\t<i class=\"ti-plus overlay-item\"></i>
\t\t\t\t\t\t<div class=\"portfolio-item-content\">
\t\t\t\t\t\t\t<h3 class=\"mb-0 text-white\">Project california</h3>
\t\t\t\t\t\t\t<p class=\"text-white-50\">Web Development</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t<div class=\"portflio-item position-relative mb-4\">
\t\t\t\t\t<a href=\"https://placehold.it/600x466\" class=\"popup-gallery\">
\t\t\t\t\t\t<img src=\"https://placehold.it/500x389\" alt=\"\" class=\"img-fluid w-100\">
\t\t\t\t\t\t
\t\t\t\t\t\t<i class=\"ti-plus overlay-item\"></i>
\t\t\t\t\t\t<div class=\"portfolio-item-content\">
\t\t\t\t\t\t\t<h3 class=\"mb-0 text-white\">Project california</h3>
\t\t\t\t\t\t\t<p class=\"text-white-50\">Web Development</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!-- Section Portfolio End -->", "E:\\xampp\\htdocs\\october/themes/mehedi-megakit/pages/portfolio.htm", "");
    }
}
