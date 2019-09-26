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

/* E:\xampp\htdocs\october/themes/mehedi-megakit/partials/site/blogintroheader.htm */
class __TwigTemplate_bc7b2a409a8773f148ceceb22efa8180209ab6d422ae4d5560f4335ee9b99c7e extends \Twig\Template
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
        // line 2
        echo "<section class=\"page-title bg-1\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"block text-center\">
                    <span class=\"text-white\">Our blog</span>
                    <h1 class=\"text-capitalize mb-4 text-lg\">";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 8), "title", [], "any", false, false, false, 8), "html", null, true);
        echo "</h1>
                </div>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "E:\\xampp\\htdocs\\october/themes/mehedi-megakit/partials/site/blogintroheader.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
<section class=\"page-title bg-1\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"block text-center\">
                    <span class=\"text-white\">Our blog</span>
                    <h1 class=\"text-capitalize mb-4 text-lg\">{{ this.page.title }}</h1>
                </div>
            </div>
        </div>
    </div>
</section>", "E:\\xampp\\htdocs\\october/themes/mehedi-megakit/partials/site/blogintroheader.htm", "");
    }
}
