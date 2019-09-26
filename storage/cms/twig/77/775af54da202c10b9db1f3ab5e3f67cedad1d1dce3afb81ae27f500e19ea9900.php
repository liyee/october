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

/* E:\xampp\htdocs\october/themes/mehedi-megakit/partials/blog/posts.htm */
class __TwigTemplate_426298e5b966ea4674e4f1e8db4c9ae12899936e46ad1acaf7973b0bf0cb1805 extends \Twig\Template
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
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, false, 2);
        // line 3
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 4
            echo "    <div class=\"col-lg-6 col-md-6 mb-5\">
        <div class=\"blog-item\">
            ";
            // line 6
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 6), "count", [], "any", false, false, false, 6) > 0)) {
                // line 7
                echo "            <img class=\"media-object img-fluid rounded\" src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 7), "first", [], "any", false, false, false, 7), "getThumb", [0 => 540, 1 => "auto"], "method", false, false, false, 7), "html", null, true);
                echo "\" />
            ";
            } else {
                // line 9
                echo "            <img class=\"media-object img-fluid rounded\" src=\"https://placehold.it/540x450\" />
            ";
            }
            // line 11
            echo "            <div class=\"blog-item-content bg-white p-5\">
\t\t\t\t<div class=\"blog-item-meta bg-gray py-1 px-2\">
                ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, false, 13));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 14
                echo "                    <span class=\"text-muted text-capitalize mr-3\">
                        <a href=\"";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "url", [], "any", false, false, false, 15), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 15), "html", null, true);
                echo "</a>
                    </span>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "\t\t\t\t    <span class=\"text-black text-capitalize mr-3\"><i class=\"ti-time mr-1\"></i> ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, false, 18), "M d, Y"), "html", null, true);
            echo "</span>
\t\t\t\t</div> 
                <h3 class=\"mt-3 mb-3\">
                    <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 21), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 21), "html", null, true);
            echo "</a>
                </h3>

                ";
            // line 24
            if (twig_get_attribute($this->env, $this->source, $context["post"], "excerpt", [], "any", false, false, false, 24)) {
                // line 25
                echo "                    <p class=\"excerpt\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "excerpt", [], "any", false, false, false, 25), "html", null, true);
                echo "</p>
                ";
            } else {
                // line 27
                echo "                    <div class=\"content\">";
                echo twig_get_attribute($this->env, $this->source, $context["post"], "content_html", [], "any", false, false, false, 27);
                echo "</div>
                ";
            }
            // line 29
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 29), "html", null, true);
            echo "\" class=\"btn btn-small btn-main btn-round-full\">Learn More</a>
            </div>
        </div>
    </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 34
            echo "        <div class=\"no-data\">
            <p>";
            // line 35
            echo twig_escape_filter($this->env, ($context["noPostsMessage"] ?? null), "html", null, true);
            echo "</p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "</div>
";
        // line 39
        if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, false, 39) > 1)) {
            // line 40
            echo "<div class=\"row justify-content-center mt-5\">
    <div class=\"col-lg-6 text-center\">
        <nav class=\"navigation pagination d-inline-block\">
            <div class=\"nav-links\">
                ";
            // line 44
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 44) > 1)) {
                // line 45
                echo "                <a class=\"prev page-numbers\" href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 45), "baseFileName", [], "any", false, false, false, 45), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 45) - 1)]);
                echo "\">Prev</a>
                ";
            }
            // line 47
            echo "
                ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, false, 48)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 49
                echo "                <a class=\"page-numbers\" href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 49), "baseFileName", [], "any", false, false, false, 49), [($context["pageParam"] ?? null) => $context["page"]]);
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "
                ";
            // line 52
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, false, 52) > twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 52))) {
                // line 53
                echo "                <a class=\"next page-numbers\" href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 53), "baseFileName", [], "any", false, false, false, 53), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 53) + 1)]);
                echo "\">Next</a>
                ";
            }
            // line 55
            echo "            </div>
        </nav>
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "E:\\xampp\\htdocs\\october/themes/mehedi-megakit/partials/blog/posts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 55,  177 => 53,  175 => 52,  172 => 51,  161 => 49,  157 => 48,  154 => 47,  148 => 45,  146 => 44,  140 => 40,  138 => 39,  135 => 38,  126 => 35,  123 => 34,  112 => 29,  106 => 27,  100 => 25,  98 => 24,  90 => 21,  83 => 18,  72 => 15,  69 => 14,  65 => 13,  61 => 11,  57 => 9,  51 => 7,  49 => 6,  45 => 4,  39 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
{% set posts = blogPosts.posts %}
    {% for post in posts %}
    <div class=\"col-lg-6 col-md-6 mb-5\">
        <div class=\"blog-item\">
            {% if post.featured_images.count > 0 %}
            <img class=\"media-object img-fluid rounded\" src=\"{{ post.featured_images.first.getThumb(540, 'auto') }}\" />
            {% else %}
            <img class=\"media-object img-fluid rounded\" src=\"https://placehold.it/540x450\" />
            {% endif %}
            <div class=\"blog-item-content bg-white p-5\">
\t\t\t\t<div class=\"blog-item-meta bg-gray py-1 px-2\">
                {% for category in post.categories %}
                    <span class=\"text-muted text-capitalize mr-3\">
                        <a href=\"{{ category.url }}\">{{ category.name }}</a>
                    </span>
                {% endfor %}
\t\t\t\t    <span class=\"text-black text-capitalize mr-3\"><i class=\"ti-time mr-1\"></i> {{ post.published_at|date('M d, Y') }}</span>
\t\t\t\t</div> 
                <h3 class=\"mt-3 mb-3\">
                    <a href=\"{{ post.url }}\">{{ post.title }}</a>
                </h3>

                {% if post.excerpt %}
                    <p class=\"excerpt\">{{ post.excerpt }}</p>
                {% else %}
                    <div class=\"content\">{{ post.content_html|raw }}</div>
                {% endif %}
                <a href=\"{{ post.url }}\" class=\"btn btn-small btn-main btn-round-full\">Learn More</a>
            </div>
        </div>
    </div>
    {% else %}
        <div class=\"no-data\">
            <p>{{ noPostsMessage }}</p>
        </div>
    {% endfor %}
</div>
{% if posts.lastPage > 1 %}
<div class=\"row justify-content-center mt-5\">
    <div class=\"col-lg-6 text-center\">
        <nav class=\"navigation pagination d-inline-block\">
            <div class=\"nav-links\">
                {% if posts.currentPage > 1 %}
                <a class=\"prev page-numbers\" href=\"{{ this.page.baseFileName|page({ (pageParam): (posts.currentPage-1) }) }}\">Prev</a>
                {% endif %}

                {% for page in 1..posts.lastPage %}
                <a class=\"page-numbers\" href=\"{{ this.page.baseFileName|page({ (pageParam): page }) }}\">{{ page }}</a>
                {% endfor %}

                {% if posts.lastPage > posts.currentPage %}
                <a class=\"next page-numbers\" href=\"{{ this.page.baseFileName|page({ (pageParam): (posts.currentPage+1) }) }}\">Next</a>
                {% endif %}
            </div>
        </nav>
    </div>
</div>
{% endif %}", "E:\\xampp\\htdocs\\october/themes/mehedi-megakit/partials/blog/posts.htm", "");
    }
}
