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

/* E:\xampp\htdocs\october/themes/mehedi-megakit/pages/contact-us.htm */
class __TwigTemplate_c8ab50f9f172302cbc623c659e3099b6af966cd327764157046b98f5be904d0c extends \Twig\Template
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
                    <span class=\"text-white\">Contact Us</span>
                    <h1 class=\"text-capitalize mb-4 text-lg\">Get in Touch</h1>
                    <ul class=\"list-inline\">
                        <li class=\"list-inline-item\"><a href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\" class=\"text-white\">Home</a></li>
                        <li class=\"list-inline-item\"><span class=\"text-white\">/</span></li>
                        <li class=\"list-inline-item\"><a href=\"#\" class=\"text-white-50\">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section Page Intro End -->
<!-- Contact Form Start -->
<section class=\"contact-form-wrap section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6 col-md-12 col-sm-12\">
                 ";
        // line 25
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("genericForm"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 26
        echo "            </div>

            <div class=\"col-lg-5 col-sm-12\">
                <div class=\"contact-content pl-lg-5 mt-5 mt-lg-0\">
                    <span class=\"text-muted\">We are Professionals</span>
                    <h2 class=\"mb-5 mt-2\">Don’t Hesitate to contact with us for any kind of information</h2>

                    <ul class=\"address-block list-unstyled\">
                        <li>
                            <i class=\"ti-direction mr-3\"></i>North Main Street,Brooklyn Australia
                        </li>
                        <li>
                            <i class=\"ti-email mr-3\"></i>Email: contact@mail.com
                        </li>
                        <li>
                            <i class=\"ti-mobile mr-3\"></i>Phone:+88 01672 506 744
                        </li>
                    </ul>

                    <ul class=\"social-icons list-inline mt-5\">
                        <li class=\"list-inline-item\">
                            <a href=\"http://www.themefisher.com\"><i class=\"fab fa-facebook-f\"></i></a>
                        </li>
                        <li class=\"list-inline-item\">
                            <a href=\"http://www.themefisher.com\"><i class=\"fab fa-twitter\"></i></a>
                        </li>
                        <li class=\"list-inline-item\">
                            <a href=\"http://www.themefisher.com\"><i class=\"fab fa-linkedin-in\"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Form End -->
<!-- Google Map Start -->
<div class=\"google-map\">
    <div id=\"map\"></div>
</div>
<!-- Google Map End -->";
    }

    public function getTemplateName()
    {
        return "E:\\xampp\\htdocs\\october/themes/mehedi-megakit/pages/contact-us.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 26,  66 => 25,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Section Page Intro Start -->
<section class=\"page-title bg-1\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"block text-center\">
                    <span class=\"text-white\">Contact Us</span>
                    <h1 class=\"text-capitalize mb-4 text-lg\">Get in Touch</h1>
                    <ul class=\"list-inline\">
                        <li class=\"list-inline-item\"><a href=\"{{ 'home'|page }}\" class=\"text-white\">Home</a></li>
                        <li class=\"list-inline-item\"><span class=\"text-white\">/</span></li>
                        <li class=\"list-inline-item\"><a href=\"#\" class=\"text-white-50\">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section Page Intro End -->
<!-- Contact Form Start -->
<section class=\"contact-form-wrap section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6 col-md-12 col-sm-12\">
                 {% component 'genericForm' %}
            </div>

            <div class=\"col-lg-5 col-sm-12\">
                <div class=\"contact-content pl-lg-5 mt-5 mt-lg-0\">
                    <span class=\"text-muted\">We are Professionals</span>
                    <h2 class=\"mb-5 mt-2\">Don’t Hesitate to contact with us for any kind of information</h2>

                    <ul class=\"address-block list-unstyled\">
                        <li>
                            <i class=\"ti-direction mr-3\"></i>North Main Street,Brooklyn Australia
                        </li>
                        <li>
                            <i class=\"ti-email mr-3\"></i>Email: contact@mail.com
                        </li>
                        <li>
                            <i class=\"ti-mobile mr-3\"></i>Phone:+88 01672 506 744
                        </li>
                    </ul>

                    <ul class=\"social-icons list-inline mt-5\">
                        <li class=\"list-inline-item\">
                            <a href=\"http://www.themefisher.com\"><i class=\"fab fa-facebook-f\"></i></a>
                        </li>
                        <li class=\"list-inline-item\">
                            <a href=\"http://www.themefisher.com\"><i class=\"fab fa-twitter\"></i></a>
                        </li>
                        <li class=\"list-inline-item\">
                            <a href=\"http://www.themefisher.com\"><i class=\"fab fa-linkedin-in\"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Form End -->
<!-- Google Map Start -->
<div class=\"google-map\">
    <div id=\"map\"></div>
</div>
<!-- Google Map End -->", "E:\\xampp\\htdocs\\october/themes/mehedi-megakit/pages/contact-us.htm", "");
    }
}
