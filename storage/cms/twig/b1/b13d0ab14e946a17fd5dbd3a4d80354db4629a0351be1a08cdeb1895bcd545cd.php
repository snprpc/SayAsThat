<?php

/* /home/vagrant/Code/SayAsThat/themes/responsiv-clean/partials/site/activity.htm */
class __TwigTemplate_78cda8c33e5ce7a36fe70ee14f7f8457a7062a091d744c9f29cf8b0170c4829b extends Twig_Template
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
        echo "<div class=\"activity\">
    <div id=\"activity-image-horizontal\" class=\"activity-image-horizontal col-lg col-md visible-lg visible-md\">
        <img src=\"\\themes\\responsiv-clean\\assets\\images\\activity-horizontal.jpeg\"/>
    </div>
    <div id=\"activity-image-vertical\" class=\"activity-image-vertical col-sm col-xs visible-sm visible-xs\">
        <img src=\"\\themes\\responsiv-clean\\assets\\images\\activity-vertical.jpg\"/>
    </div>
    <div class=\"activity-summary\">
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/Code/SayAsThat/themes/responsiv-clean/partials/site/activity.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"activity\">
    <div id=\"activity-image-horizontal\" class=\"activity-image-horizontal col-lg col-md visible-lg visible-md\">
        <img src=\"\\themes\\responsiv-clean\\assets\\images\\activity-horizontal.jpeg\"/>
    </div>
    <div id=\"activity-image-vertical\" class=\"activity-image-vertical col-sm col-xs visible-sm visible-xs\">
        <img src=\"\\themes\\responsiv-clean\\assets\\images\\activity-vertical.jpg\"/>
    </div>
    <div class=\"activity-summary\">
    </div>
</div>", "/home/vagrant/Code/SayAsThat/themes/responsiv-clean/partials/site/activity.htm", "");
    }
}
