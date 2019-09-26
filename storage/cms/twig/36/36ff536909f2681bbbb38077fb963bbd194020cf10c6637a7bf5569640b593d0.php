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

/* E:\xampp\htdocs\october/themes/mehedi-megakit/partials/site/footer.htm */
class __TwigTemplate_c42d6af958d3ccdf21cde7b6effa950fc13d583c2a91a8b38b993de3d6b35841 extends \Twig\Template
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
        echo "<footer class=\"footer section\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"widget\">
\t\t\t\t\t<h4 class=\"text-capitalize mb-4\">Company</h4>
\t\t\t\t\t<ul class=\"list-unstyled footer-menu lh-35\">
\t\t\t\t\t\t<li><a href=\"#\">Terms & Conditions</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Privacy Policy</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Support</a></li>
\t\t\t\t\t\t<li><a href=\"#\">FAQ</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-2 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"widget\">
\t\t\t\t\t<h4 class=\"text-capitalize mb-4\">Quick Links</h4>
\t\t\t\t\t<ul class=\"list-unstyled footer-menu lh-35\">
\t\t\t\t\t\t<li><a href=\"#\">About</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Services</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Team</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Contact</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"widget\">
\t\t\t\t\t<h4 class=\"text-capitalize mb-4\">Subscribe Us</h4>
\t\t\t\t\t<p>Subscribe to get latest news article and resources  </p>
\t\t\t\t\t<form action=\"#\" class=\"sub-form\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control mb-3\" placeholder=\"Subscribe Now ...\">
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-main btn-small\">subscribe</a>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3 ml-auto col-sm-6\">
\t\t\t\t<div class=\"widget\">
\t\t\t\t\t<div class=\"logo mb-4\">
\t\t\t\t\t\t<h3>Mega<span>kit.</span></h3>
\t\t\t\t\t</div>
\t\t\t\t\t<h6><a href=\"tel:+23-345-67890\" >Support@megakit.com</a></h6>
\t\t\t\t\t<a href=\"mailto:support@gmail.com\"><span class=\"text-color h4\">+23-456-6588</span></a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"footer-btm pt-4\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"copyright\">
\t\t\t\t\t\t&copy; ";
        // line 52
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - Copyright Reserved to <span class=\"text-color\">Megakit.</span> By <a href=\"https://themefisher.com/\" rel=\"noopener\" target=\"_blank\">Themefisher</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6 text-left text-lg-right\">
\t\t\t\t\t<ul class=\"list-inline footer-socials\">
\t\t\t\t\t\t<li class=\"list-inline-item\"><a href=\"https://www.facebook.com/themefisher\"><i class=\"ti-facebook mr-2\"></i>Facebook</a></li>
\t\t\t\t\t\t<li class=\"list-inline-item\"><a href=\"https://twitter.com/themefisher\"><i class=\"ti-twitter mr-2\"></i>Twitter</a></li>
\t\t\t\t\t\t<li class=\"list-inline-item\"><a href=\"https://www.pinterest.com/themefisher/\"><i class=\"ti-linkedin mr-2 \"></i>Linkedin</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</footer>
";
    }

    public function getTemplateName()
    {
        return "E:\\xampp\\htdocs\\october/themes/mehedi-megakit/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 52,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
{# Footer Start #}
<footer class=\"footer section\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"widget\">
\t\t\t\t\t<h4 class=\"text-capitalize mb-4\">Company</h4>
\t\t\t\t\t<ul class=\"list-unstyled footer-menu lh-35\">
\t\t\t\t\t\t<li><a href=\"#\">Terms & Conditions</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Privacy Policy</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Support</a></li>
\t\t\t\t\t\t<li><a href=\"#\">FAQ</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-2 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"widget\">
\t\t\t\t\t<h4 class=\"text-capitalize mb-4\">Quick Links</h4>
\t\t\t\t\t<ul class=\"list-unstyled footer-menu lh-35\">
\t\t\t\t\t\t<li><a href=\"#\">About</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Services</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Team</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Contact</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"widget\">
\t\t\t\t\t<h4 class=\"text-capitalize mb-4\">Subscribe Us</h4>
\t\t\t\t\t<p>Subscribe to get latest news article and resources  </p>
\t\t\t\t\t<form action=\"#\" class=\"sub-form\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control mb-3\" placeholder=\"Subscribe Now ...\">
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-main btn-small\">subscribe</a>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3 ml-auto col-sm-6\">
\t\t\t\t<div class=\"widget\">
\t\t\t\t\t<div class=\"logo mb-4\">
\t\t\t\t\t\t<h3>Mega<span>kit.</span></h3>
\t\t\t\t\t</div>
\t\t\t\t\t<h6><a href=\"tel:+23-345-67890\" >Support@megakit.com</a></h6>
\t\t\t\t\t<a href=\"mailto:support@gmail.com\"><span class=\"text-color h4\">+23-456-6588</span></a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"footer-btm pt-4\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"copyright\">
\t\t\t\t\t\t&copy; {{ \"now\"|date(\"Y\") }} - Copyright Reserved to <span class=\"text-color\">Megakit.</span> By <a href=\"https://themefisher.com/\" rel=\"noopener\" target=\"_blank\">Themefisher</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6 text-left text-lg-right\">
\t\t\t\t\t<ul class=\"list-inline footer-socials\">
\t\t\t\t\t\t<li class=\"list-inline-item\"><a href=\"https://www.facebook.com/themefisher\"><i class=\"ti-facebook mr-2\"></i>Facebook</a></li>
\t\t\t\t\t\t<li class=\"list-inline-item\"><a href=\"https://twitter.com/themefisher\"><i class=\"ti-twitter mr-2\"></i>Twitter</a></li>
\t\t\t\t\t\t<li class=\"list-inline-item\"><a href=\"https://www.pinterest.com/themefisher/\"><i class=\"ti-linkedin mr-2 \"></i>Linkedin</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</footer>
{# Footer Close #}", "E:\\xampp\\htdocs\\october/themes/mehedi-megakit/partials/site/footer.htm", "");
    }
}
