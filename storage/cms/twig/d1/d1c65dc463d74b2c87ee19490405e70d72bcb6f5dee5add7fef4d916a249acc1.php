<?php

/* /home/vagrant/Code/SayAsThat/themes/responsiv-clean/layouts/default.htm */
class __TwigTemplate_5625f191c38178beb53d4217bbb0e933bcf082f337c3e5a3c61e90279c42ae62 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        ";
        // line 4
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/meta"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "    </head>
    <body>

        <div style=\" margin: 0 auto\">
            <!-- Header -->
            <header id=\"layout-header\">
                ";
        // line 11
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 12
        echo "            </header>

            <!-- 活动展板  -->
            <section id=\"layout-activity\">
                ";
        // line 16
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/activity"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 17
        echo "            </section>

            <!-- Sidebar -->
            <!-- <section id=\"layout-sidebar\" class=\"visible-xs visible-ms\">
                ";
        // line 21
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/sidebar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 22
        echo "            </section> -->

            <!-- Content -->
            <section id=\"layout-content\">
                ";
        // line 26
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 27
        echo "            </section>

            <!-- Footer -->
            <footer id=\"layout-footer\">
                ";
        // line 31
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 32
        echo "            </footer>
        </div>

        <!-- Scripts -->
        ";
        // line 36
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 37
        echo "    </body>
</html>

<script type=\"text/javascript\">
    var screenHeight = document.body.clientHeight;
    var headerHeight = document.getElementById(\"layout-header\").offsetHeight;
    var layoutActivity = document.getElementById(\"layout-activity\");
    var activityImageHorizontal = document.getElementById(\"activity-image-horizontal\");
    var activityImageVertical = document.getElementById(\"activity-image-vertical\");
    layoutActivity.style.height = 'calc(100vh - '+headerHeight+'px)';
    activityImageHorizontal.style.height = 'calc(100vh - '+headerHeight+'px)';
    activityImageVertical.style.height = 'calc(100vh - '+headerHeight+'px)';



    var canScroll = true;
    var screenHeight = \$(window).height();

    \$(document).scroll(function(){
        var before = \$(window).scrollTop();
        \$(document).scroll(function(){
            var after = \$(window).scrollTop();
            if(before<after && after>0 && after<screenHeight*0.5 && canScroll){
                canScroll = false;
                \$(\"html,body\").animate({
                    scrollTop:\$(\"#layout-content\").offset().top},300,function(){
                        before = after;
                        canScroll = true;
                    });
            }
            if (before>after && after>screenHeight*0.5 && after<screenHeight*0.9 && canScroll) {
                canScroll = false;
                \$(\"html,body\").animate({
                    scrollTop:\$(\"#layout-header\").offset().top},300,function(){
                        before = after;
                        canScroll = true;
                    });
            }
        });
    });
</script>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/Code/SayAsThat/themes/responsiv-clean/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 37,  88 => 36,  82 => 32,  78 => 31,  72 => 27,  70 => 26,  64 => 22,  60 => 21,  54 => 17,  50 => 16,  44 => 12,  40 => 11,  32 => 5,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        {% partial 'site/meta' %}
    </head>
    <body>

        <div style=\" margin: 0 auto\">
            <!-- Header -->
            <header id=\"layout-header\">
                {% partial 'site/header' %}
            </header>

            <!-- 活动展板  -->
            <section id=\"layout-activity\">
                {% partial 'site/activity' %}
            </section>

            <!-- Sidebar -->
            <!-- <section id=\"layout-sidebar\" class=\"visible-xs visible-ms\">
                {% partial 'site/sidebar' %}
            </section> -->

            <!-- Content -->
            <section id=\"layout-content\">
                {% page %}
            </section>

            <!-- Footer -->
            <footer id=\"layout-footer\">
                {% partial 'site/footer' %}
            </footer>
        </div>

        <!-- Scripts -->
        {% partial 'site/scripts' %}
    </body>
</html>

<script type=\"text/javascript\">
    var screenHeight = document.body.clientHeight;
    var headerHeight = document.getElementById(\"layout-header\").offsetHeight;
    var layoutActivity = document.getElementById(\"layout-activity\");
    var activityImageHorizontal = document.getElementById(\"activity-image-horizontal\");
    var activityImageVertical = document.getElementById(\"activity-image-vertical\");
    layoutActivity.style.height = 'calc(100vh - '+headerHeight+'px)';
    activityImageHorizontal.style.height = 'calc(100vh - '+headerHeight+'px)';
    activityImageVertical.style.height = 'calc(100vh - '+headerHeight+'px)';



    var canScroll = true;
    var screenHeight = \$(window).height();

    \$(document).scroll(function(){
        var before = \$(window).scrollTop();
        \$(document).scroll(function(){
            var after = \$(window).scrollTop();
            if(before<after && after>0 && after<screenHeight*0.5 && canScroll){
                canScroll = false;
                \$(\"html,body\").animate({
                    scrollTop:\$(\"#layout-content\").offset().top},300,function(){
                        before = after;
                        canScroll = true;
                    });
            }
            if (before>after && after>screenHeight*0.5 && after<screenHeight*0.9 && canScroll) {
                canScroll = false;
                \$(\"html,body\").animate({
                    scrollTop:\$(\"#layout-header\").offset().top},300,function(){
                        before = after;
                        canScroll = true;
                    });
            }
        });
    });
</script>", "/home/vagrant/Code/SayAsThat/themes/responsiv-clean/layouts/default.htm", "");
    }
}
