<?php

/* /home/vagrant/Code/SayAsThat/themes/responsiv-clean/partials/site/detailImage.htm */
class __TwigTemplate_5d079adda9cbccec96e8fe8d489bd5aa4382992abecbc0989a20ee1d30180294 extends Twig_Template
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
        $context["image"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["activity"] ?? null), "activity_featured_image", array()), "first", array());
        // line 2
        echo "<!-- <div class=\"Image\">

    <img id=\"detailImage\" class=\"detailImage \" src=\"\\themes\\responsiv-clean\\assets\\images\\activity-horizontal.jpeg\"/>
    <canvas id=\"canvas\" width=\"256\" height=\"191\"></canvas>
</div> -->

<div class=\"imageBlur\">
    <!-- <img src=\"\\themes\\responsiv-clean\\assets\\images\\activity2.jpg\" id=\"noblur\" class=\"noblur\"/> -->
</div>





    <!-- <img src=\"\\themes\\responsiv-clean\\assets\\images\\activity-horizontal.jpeg\" id=\"noblur\" class=\"noblur\"/> -->



<!-- <script src=\"\\themes\\responsiv-clean\\assets\\javascript\\pages\\StackBlur.js\"></script> -->

<script type=\"text/javascript\">
    // stackBlurImage( \"blur\", \"canvas\", 180, false );
    // var screenHeight = document.body.clientHeight;
    //
    // var headerHeight = document.getElementById(\"layout-header\").offsetHeight;
    // var layoutImage = document.getElementById(\"layout-image\");
    // var canvas = document.getElementById(\"canvas\");
    // layoutImage.style.height = 'calc(80vh - '+headerHeight+'px)';
    // canvas.style.height = 'calc(80vh - '+headerHeight+'px)';







    // document.getElementById(\"canvas\").style.width = screenWidth + 'px';
    // document.getElementById(\"blur\").style.width = screenWidth + 'px';
    // document.getElementById(\"layout-image\").style.height = (screenHeight*0.8) + 'px';
    // document.getElementById(\"canvas\").style.height = (screenHeight*0.8) + 'px';
    // document.getElementById(\"blur\").style.height = (screenHeight*0.8) + 'px';

    // document.getElementById(\"canvas\").style.width = '100%';
    // document.getElementById(\"blur\").style.width = '100%';
    // document.getElementById(\"layout-image\").style.height = '10%';
    // document.getElementById(\"canvas\").style.height = '100%';
    // document.getElementById(\"blur\").style.height = '70%';
</script>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/Code/SayAsThat/themes/responsiv-clean/partials/site/detailImage.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set image = activity.activity_featured_image.first %}
<!-- <div class=\"Image\">

    <img id=\"detailImage\" class=\"detailImage \" src=\"\\themes\\responsiv-clean\\assets\\images\\activity-horizontal.jpeg\"/>
    <canvas id=\"canvas\" width=\"256\" height=\"191\"></canvas>
</div> -->

<div class=\"imageBlur\">
    <!-- <img src=\"\\themes\\responsiv-clean\\assets\\images\\activity2.jpg\" id=\"noblur\" class=\"noblur\"/> -->
</div>





    <!-- <img src=\"\\themes\\responsiv-clean\\assets\\images\\activity-horizontal.jpeg\" id=\"noblur\" class=\"noblur\"/> -->



<!-- <script src=\"\\themes\\responsiv-clean\\assets\\javascript\\pages\\StackBlur.js\"></script> -->

<script type=\"text/javascript\">
    // stackBlurImage( \"blur\", \"canvas\", 180, false );
    // var screenHeight = document.body.clientHeight;
    //
    // var headerHeight = document.getElementById(\"layout-header\").offsetHeight;
    // var layoutImage = document.getElementById(\"layout-image\");
    // var canvas = document.getElementById(\"canvas\");
    // layoutImage.style.height = 'calc(80vh - '+headerHeight+'px)';
    // canvas.style.height = 'calc(80vh - '+headerHeight+'px)';







    // document.getElementById(\"canvas\").style.width = screenWidth + 'px';
    // document.getElementById(\"blur\").style.width = screenWidth + 'px';
    // document.getElementById(\"layout-image\").style.height = (screenHeight*0.8) + 'px';
    // document.getElementById(\"canvas\").style.height = (screenHeight*0.8) + 'px';
    // document.getElementById(\"blur\").style.height = (screenHeight*0.8) + 'px';

    // document.getElementById(\"canvas\").style.width = '100%';
    // document.getElementById(\"blur\").style.width = '100%';
    // document.getElementById(\"layout-image\").style.height = '10%';
    // document.getElementById(\"canvas\").style.height = '100%';
    // document.getElementById(\"blur\").style.height = '70%';
</script>", "/home/vagrant/Code/SayAsThat/themes/responsiv-clean/partials/site/detailImage.htm", "");
    }
}
