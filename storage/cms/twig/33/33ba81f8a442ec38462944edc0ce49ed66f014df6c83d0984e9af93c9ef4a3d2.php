<?php

/* /home/vagrant/Code/SayAsThat/themes/responsiv-clean/partials/blog/post.htm */
class __TwigTemplate_c2343a888583f5b25713082f982907f18a83e3575c6de519da78caf4c12c0d08 extends Twig_Template
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
        $context["image"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", array()), "first", array());
        // line 2
        echo "<article>

    <header class=\"post-title\">
        <h3><a href=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "url", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", array()), "html", null, true);
        echo "</a></h3>
        <h5>
            原创</br></br>
            <span class=\"author\"><a href=\"#\">";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "author", array()), "author_pen_name", array()), "html", null, true);
        echo "</a></span>
            ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "categories", array()), "count", array())) {
            // line 10
            echo "            <span class=\"category\">
                <i> | </i>
                ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "categories", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 13
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", array()), "html", null, true);
                echo "</a>
                    ";
                // line 14
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 15
                echo "                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "            </span>
            ";
        }
        // line 18
        echo "        </h5>
    </header>
    ";
        // line 20
        if (($context["image"] ?? null)) {
            // line 21
            echo "        <div class=\"post-image\">
            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "url", array()), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "path", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", array()), "html", null, true);
            echo "\" /></a>
        </div>
    ";
        } else {
            // line 25
            echo "        <div class=\"post-content\">
            ";
            // line 26
            echo twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "summary", array());
            echo "
        </div>
    ";
        }
        // line 29
        echo "


    <footer class=\"footer-data text-right\">
        <span class=\"published\"><i class=\"fa fa-eye icon-eye-open\"></i>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["topic"] ?? null), "count_views", array()), "html", null, true);
        echo " views</span>
        <span class=\"published\"><i class=\"icon icon-calendar\"></i> ";
        // line 34
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "published_at", array()), "M d, Y"), "html", null, true);
        echo "</span>
    </footer>
</article>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/Code/SayAsThat/themes/responsiv-clean/partials/blog/post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 34,  128 => 33,  122 => 29,  116 => 26,  113 => 25,  103 => 22,  100 => 21,  98 => 20,  94 => 18,  90 => 16,  76 => 15,  72 => 14,  65 => 13,  48 => 12,  44 => 10,  42 => 9,  38 => 8,  30 => 5,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set image = post.featured_images.first %}
<article>

    <header class=\"post-title\">
        <h3><a href=\"{{ post.url }}\">{{ post.title }}</a></h3>
        <h5>
            原创</br></br>
            <span class=\"author\"><a href=\"#\">{{ post.author.author_pen_name }}</a></span>
            {% if post.categories.count %}
            <span class=\"category\">
                <i> | </i>
                {% for category in post.categories %}
                    <a href=\"{{ category.url }}\">{{ category.name }}</a>
                    {% if not loop.last %}, {% endif %}
                {% endfor %}
            </span>
            {% endif %}
        </h5>
    </header>
    {% if image %}
        <div class=\"post-image\">
            <a href=\"{{ post.url }}\"><img src=\"{{ image.path }}\" alt=\"{{ post.title }}\" /></a>
        </div>
    {% else %}
        <div class=\"post-content\">
            {{ post.summary|raw }}
        </div>
    {% endif %}



    <footer class=\"footer-data text-right\">
        <span class=\"published\"><i class=\"fa fa-eye icon-eye-open\"></i>{{ topic.count_views }} views</span>
        <span class=\"published\"><i class=\"icon icon-calendar\"></i> {{ post.published_at|date('M d, Y') }}</span>
    </footer>
</article>", "/home/vagrant/Code/SayAsThat/themes/responsiv-clean/partials/blog/post.htm", "");
    }
}
