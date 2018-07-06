<?php

/* /home/vagrant/Code/SayAsThat/themes/responsiv-clean/partials/site/footer.htm */
class __TwigTemplate_46044e83a7b749c70246133f71c64cd06e7fc84a35b88bbd4a598b0f597b0eea extends Twig_Template
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
        echo "<div class=\"footer-inner text-center\">
    <p class=\"muted credit\">
        &copy; 2013 - ";
        // line 3
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "
        <br/>
        Powered by <a href=\"#\">October CMS</a>
        <br/>
        using <a href=\"https://github.com/responsiv/clean-theme\">a clean theme</a>.
    </p>
    <!-- <p class=\"muted credit\">
        Copyright 2018 歧异歧义微信公众号运营部
    </p> -->
</div>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/Code/SayAsThat/themes/responsiv-clean/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"footer-inner text-center\">
    <p class=\"muted credit\">
        &copy; 2013 - {{ \"now\"|date(\"Y\") }}
        <br/>
        Powered by <a href=\"#\">October CMS</a>
        <br/>
        using <a href=\"https://github.com/responsiv/clean-theme\">a clean theme</a>.
    </p>
    <!-- <p class=\"muted credit\">
        Copyright 2018 歧异歧义微信公众号运营部
    </p> -->
</div>", "/home/vagrant/Code/SayAsThat/themes/responsiv-clean/partials/site/footer.htm", "");
    }
}
