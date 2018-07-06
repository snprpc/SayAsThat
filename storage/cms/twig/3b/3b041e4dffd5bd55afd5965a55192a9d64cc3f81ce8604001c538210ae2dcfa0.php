<?php

/* /home/vagrant/Code/SayAsThat/themes/responsiv-clean/partials/site/sidebar.htm */
class __TwigTemplate_709b44986b6eed3b217de47dad88133c5c10f637fd6471ec0a797149fe5ec03e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"hidden-md\">
    <div class=\"sidebar-close visible-xs visible-ms\">
        <a href=\"javascript:;\" onclick=\"toggleSidebar()\" class=\"close\">&times;</a>
    </div>

    <div class=\"sidebar-segment\">
        <h2 class=\"segment-title\">活动</h2>
        <ul class=\"segment-list\">
            <li><a href=\"#\">活动一</a></li>
        </ul>
    </div>
    <div class=\"sidebar-segment\">
        <h2 class=\"segment-title\">文章</h2>
        <ul class=\"segment-list\">
            ";
        // line 15
        $context["categories"] = twig_get_attribute($this->env, $this->source, ($context["blogCategories"] ?? null), "categories", array());
        // line 16
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 17
            echo "                <li><a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", array()), "html", null, true);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "        </ul>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/Code/SayAsThat/themes/responsiv-clean/partials/site/sidebar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 19,  46 => 17,  41 => 16,  39 => 15,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"hidden-md\">
    <div class=\"sidebar-close visible-xs visible-ms\">
        <a href=\"javascript:;\" onclick=\"toggleSidebar()\" class=\"close\">&times;</a>
    </div>

    <div class=\"sidebar-segment\">
        <h2 class=\"segment-title\">活动</h2>
        <ul class=\"segment-list\">
            <li><a href=\"#\">活动一</a></li>
        </ul>
    </div>
    <div class=\"sidebar-segment\">
        <h2 class=\"segment-title\">文章</h2>
        <ul class=\"segment-list\">
            {% set categories = blogCategories.categories %}
            {% for category in categories %}
                <li><a href=\"{{ category.url }}\">{{ category.name }}</a></li>
            {% endfor %}
        </ul>
    </div>
</div>", "/home/vagrant/Code/SayAsThat/themes/responsiv-clean/partials/site/sidebar.htm", "");
    }
}
