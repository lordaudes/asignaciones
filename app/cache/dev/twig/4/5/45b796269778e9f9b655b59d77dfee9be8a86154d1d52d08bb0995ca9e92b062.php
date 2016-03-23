<?php

/* base.html.twig */
class __TwigTemplate_45b796269778e9f9b655b59d77dfee9be8a86154d1d52d08bb0995ca9e92b062 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b47febe2de924bbc202ab54368115fa1ccccc87252e82199604de8c6f22306c = $this->env->getExtension("native_profiler");
        $__internal_8b47febe2de924bbc202ab54368115fa1ccccc87252e82199604de8c6f22306c->enter($__internal_8b47febe2de924bbc202ab54368115fa1ccccc87252e82199604de8c6f22306c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_8b47febe2de924bbc202ab54368115fa1ccccc87252e82199604de8c6f22306c->leave($__internal_8b47febe2de924bbc202ab54368115fa1ccccc87252e82199604de8c6f22306c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_93c73181cc37e4440a2d6d536b2ddd5cabd146f3e803f74b93ebc54a4dfe97b4 = $this->env->getExtension("native_profiler");
        $__internal_93c73181cc37e4440a2d6d536b2ddd5cabd146f3e803f74b93ebc54a4dfe97b4->enter($__internal_93c73181cc37e4440a2d6d536b2ddd5cabd146f3e803f74b93ebc54a4dfe97b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_93c73181cc37e4440a2d6d536b2ddd5cabd146f3e803f74b93ebc54a4dfe97b4->leave($__internal_93c73181cc37e4440a2d6d536b2ddd5cabd146f3e803f74b93ebc54a4dfe97b4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8b421d2747399030c15893daaeee5bcad837ec6200125a554fadbda75f5bab95 = $this->env->getExtension("native_profiler");
        $__internal_8b421d2747399030c15893daaeee5bcad837ec6200125a554fadbda75f5bab95->enter($__internal_8b421d2747399030c15893daaeee5bcad837ec6200125a554fadbda75f5bab95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8b421d2747399030c15893daaeee5bcad837ec6200125a554fadbda75f5bab95->leave($__internal_8b421d2747399030c15893daaeee5bcad837ec6200125a554fadbda75f5bab95_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_30cc324442152e0ca29532584547da369339fe0d3737f89e50e757d3add0df02 = $this->env->getExtension("native_profiler");
        $__internal_30cc324442152e0ca29532584547da369339fe0d3737f89e50e757d3add0df02->enter($__internal_30cc324442152e0ca29532584547da369339fe0d3737f89e50e757d3add0df02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_30cc324442152e0ca29532584547da369339fe0d3737f89e50e757d3add0df02->leave($__internal_30cc324442152e0ca29532584547da369339fe0d3737f89e50e757d3add0df02_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_451557b7dc9377a04ebf5af0954cab60e1d7e145e9b29a7cdabdd0194a069606 = $this->env->getExtension("native_profiler");
        $__internal_451557b7dc9377a04ebf5af0954cab60e1d7e145e9b29a7cdabdd0194a069606->enter($__internal_451557b7dc9377a04ebf5af0954cab60e1d7e145e9b29a7cdabdd0194a069606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_451557b7dc9377a04ebf5af0954cab60e1d7e145e9b29a7cdabdd0194a069606->leave($__internal_451557b7dc9377a04ebf5af0954cab60e1d7e145e9b29a7cdabdd0194a069606_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
