<?php

/* /home/vagrant/Code/SayAsThat/themes/responsiv-clean/pages/activity/activity.htm */
class __TwigTemplate_5d0a46bee6b64db16d2c21433a4cbbd8adf93cc3832770e0280353d77abf397a extends Twig_Template
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
        echo "活动主题:<p>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["activity"] ?? null), "activity_title", array()), "html", null, true);
        echo "</p>
活动别名:<p>";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["activity"] ?? null), "activity_slug", array()), "html", null, true);
        echo "</p>
开始时间:<p>";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["activity"] ?? null), "activity_start_time", array()), "html", null, true);
        echo "</p>
结束时间:<p>";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["activity"] ?? null), "activity_stop_time", array()), "html", null, true);
        echo "</p>
活动概要:<p>";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["activity"] ?? null), "activity_excerpt", array()), "html", null, true);
        echo "</p>
活动内容:<p>";
        // line 6
        echo twig_get_attribute($this->env, $this->source, ($context["activity"] ?? null), "activity_content_html", array());
        echo "</p>
";
        // line 7
        $context["image"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["activity"] ?? null), "activity_featured_image", array()), "first", array());
        // line 8
        $context["hposter"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["activity"] ?? null), "activity_poster_horizontal", array()), "first", array());
        // line 9
        $context["vposter"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["activity"] ?? null), "activity_poster_vertical", array()), "first", array());
        // line 10
        echo "<!-- 活动横版海报:
<div class=\"activity-image\">
    <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "path", array()), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["activity"] ?? null), "activity_title", array()), "html", null, true);
        echo "\" />
</div>
活动竖版海报:
<div class=\"activity-hposter\">
    <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hposter"] ?? null), "path", array()), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["activity"] ?? null), "activity_title", array()), "html", null, true);
        echo "\" />
</div>
活动特征图片:
<div class=\"activity-vposter\">
    <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["vposter"] ?? null), "path", array()), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["activity"] ?? null), "activity_title", array()), "html", null, true);
        echo "\" />
</div> -->";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/Code/SayAsThat/themes/responsiv-clean/pages/activity/activity.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 20,  67 => 16,  58 => 12,  54 => 10,  52 => 9,  50 => 8,  48 => 7,  44 => 6,  40 => 5,  36 => 4,  32 => 3,  28 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("活动主题:<p>{{ activity.activity_title }}</p>
活动别名:<p>{{ activity.activity_slug }}</p>
开始时间:<p>{{ activity.activity_start_time }}</p>
结束时间:<p>{{ activity.activity_stop_time }}</p>
活动概要:<p>{{ activity.activity_excerpt }}</p>
活动内容:<p>{{ activity.activity_content_html|raw }}</p>
{% set image = activity.activity_featured_image.first %}
{% set hposter = activity.activity_poster_horizontal.first %}
{% set vposter = activity.activity_poster_vertical.first %}
<!-- 活动横版海报:
<div class=\"activity-image\">
    <img src=\"{{ image.path }}\" alt=\"{{ activity.activity_title }}\" />
</div>
活动竖版海报:
<div class=\"activity-hposter\">
    <img src=\"{{ hposter.path }}\" alt=\"{{ activity.activity_title }}\" />
</div>
活动特征图片:
<div class=\"activity-vposter\">
    <img src=\"{{ vposter.path }}\" alt=\"{{ activity.activity_title }}\" />
</div> -->", "/home/vagrant/Code/SayAsThat/themes/responsiv-clean/pages/activity/activity.htm", "");
    }
}
