<?php

/* /home/vagrant/Code/SayAsThat/themes/responsiv-clean/partials/site/header.htm */
class __TwigTemplate_83b9a05da27e624b31768f5d878cf526f4fefcaf1fa05f6d763d824dc263e01f extends Twig_Template
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
        echo "<nav class=\"navbar\" role=\"navigation\">
    <div class=\"navbar-header col-md-3\">
        <div class=\"row\">
            <div class=\"col-sm-9 col-xs-9\">
                <h1 class=\"site-name\">
                    <a href=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", array()), "site_name", array()), "html", null, true);
        echo "</a>
                </h1>
                <div class=\"site-motto\">
                    ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", array()), "site_motto", array()), "html", null, true);
        echo "
                </div>
            </div>
            <div class=\"col-sm-3 col-xs-3\">
                <button type=\"button\" class=\"sidebar-toggle visible-xs visible-ms\" onclick=\"toggleSidebar()\">
                    <span class=\"icon-bars\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class=\"navbar-cell col-md-3  hidden-xs hidden-ms\">
        <ul class=\"nav navbar-nav\">
            <li class=\"active\"><a href=\"#\">活动</a></li>
            <li><a href=\"#\">精选</a></li>
            <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                    文章
                    <b class=\"caret\"></b>
                </a>
                <ul class=\"dropdown-menu\">
                    ";
        // line 34
        $context["categories"] = twig_get_attribute($this->env, $this->source, ($context["blogCategories"] ?? null), "categories", array());
        // line 35
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 36
            echo "                        <li><a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", array()), "html", null, true);
            echo "</a></li>
                        <li>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "url", array()), "html", null, true);
            echo "</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                </ul>
            </li>
        </ul>
    </div>
    <div class=\"navbar-cell col-md-3  hidden-xs hidden-ms\">
        <ul class=\"nav navbar-nav\">
            <li><a href=\"#\">关于我们</a></li>
            <li><a href=\"#\">悄悄话</a></li>
            <li><a href=\"#\">作者</a></li>
        </ul>
    </div>
    <div class=\"navbar-cell col-md-offset-1 col-md-2 hidden-xs hidden-ms\">
        <button type=\"button\" class=\"btn btn-danger navbar-button\" style=\"margin-top: 15px; margin-bottom: 15px;\">微信登录</button>
    </div>

</nav>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/Code/SayAsThat/themes/responsiv-clean/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 39,  80 => 37,  73 => 36,  68 => 35,  66 => 34,  38 => 9,  30 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar\" role=\"navigation\">
    <div class=\"navbar-header col-md-3\">
        <div class=\"row\">
            <div class=\"col-sm-9 col-xs-9\">
                <h1 class=\"site-name\">
                    <a href=\"{{ 'home'|page }}\">{{ this.theme.site_name }}</a>
                </h1>
                <div class=\"site-motto\">
                    {{ this.theme.site_motto }}
                </div>
            </div>
            <div class=\"col-sm-3 col-xs-3\">
                <button type=\"button\" class=\"sidebar-toggle visible-xs visible-ms\" onclick=\"toggleSidebar()\">
                    <span class=\"icon-bars\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class=\"navbar-cell col-md-3  hidden-xs hidden-ms\">
        <ul class=\"nav navbar-nav\">
            <li class=\"active\"><a href=\"#\">活动</a></li>
            <li><a href=\"#\">精选</a></li>
            <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                    文章
                    <b class=\"caret\"></b>
                </a>
                <ul class=\"dropdown-menu\">
                    {% set categories = blogCategories.categories %}
                    {% for category in categories %}
                        <li><a href=\"{{ category.url }}\">{{ category.name }}</a></li>
                        <li>{{ category.url }}</li>
                    {% endfor %}
                </ul>
            </li>
        </ul>
    </div>
    <div class=\"navbar-cell col-md-3  hidden-xs hidden-ms\">
        <ul class=\"nav navbar-nav\">
            <li><a href=\"#\">关于我们</a></li>
            <li><a href=\"#\">悄悄话</a></li>
            <li><a href=\"#\">作者</a></li>
        </ul>
    </div>
    <div class=\"navbar-cell col-md-offset-1 col-md-2 hidden-xs hidden-ms\">
        <button type=\"button\" class=\"btn btn-danger navbar-button\" style=\"margin-top: 15px; margin-bottom: 15px;\">微信登录</button>
    </div>

</nav>", "/home/vagrant/Code/SayAsThat/themes/responsiv-clean/partials/site/header.htm", "");
    }
}
