<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_9bbd6327abc29ffde96b225bac8d2be3263cd7dd0311ee28a24415f8d6d3b65b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_98cc53e06a1d98217dcd654988aae412b81435686333a5e45834c68092e86373 = $this->env->getExtension("native_profiler");
        $__internal_98cc53e06a1d98217dcd654988aae412b81435686333a5e45834c68092e86373->enter($__internal_98cc53e06a1d98217dcd654988aae412b81435686333a5e45834c68092e86373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98cc53e06a1d98217dcd654988aae412b81435686333a5e45834c68092e86373->leave($__internal_98cc53e06a1d98217dcd654988aae412b81435686333a5e45834c68092e86373_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_972d8000d13b3187c710c80a356d505382507abdf4eb92976ea74ac0d936c26d = $this->env->getExtension("native_profiler");
        $__internal_972d8000d13b3187c710c80a356d505382507abdf4eb92976ea74ac0d936c26d->enter($__internal_972d8000d13b3187c710c80a356d505382507abdf4eb92976ea74ac0d936c26d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_972d8000d13b3187c710c80a356d505382507abdf4eb92976ea74ac0d936c26d->leave($__internal_972d8000d13b3187c710c80a356d505382507abdf4eb92976ea74ac0d936c26d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6f5cff08e09510e4246714953564c4e7d82d42ffb0d0c6eddcd03b5e16593649 = $this->env->getExtension("native_profiler");
        $__internal_6f5cff08e09510e4246714953564c4e7d82d42ffb0d0c6eddcd03b5e16593649->enter($__internal_6f5cff08e09510e4246714953564c4e7d82d42ffb0d0c6eddcd03b5e16593649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_6f5cff08e09510e4246714953564c4e7d82d42ffb0d0c6eddcd03b5e16593649->leave($__internal_6f5cff08e09510e4246714953564c4e7d82d42ffb0d0c6eddcd03b5e16593649_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_74702b7cffbfd29bbf64b6a979aac6db55092433074dd0f5ced0582308de2a40 = $this->env->getExtension("native_profiler");
        $__internal_74702b7cffbfd29bbf64b6a979aac6db55092433074dd0f5ced0582308de2a40->enter($__internal_74702b7cffbfd29bbf64b6a979aac6db55092433074dd0f5ced0582308de2a40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_74702b7cffbfd29bbf64b6a979aac6db55092433074dd0f5ced0582308de2a40->leave($__internal_74702b7cffbfd29bbf64b6a979aac6db55092433074dd0f5ced0582308de2a40_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_6ace22a668ecd8e2c4cf782cf45eda024ea347a2e459fbce5c1ceb0032e57c73 = $this->env->getExtension("native_profiler");
        $__internal_6ace22a668ecd8e2c4cf782cf45eda024ea347a2e459fbce5c1ceb0032e57c73->enter($__internal_6ace22a668ecd8e2c4cf782cf45eda024ea347a2e459fbce5c1ceb0032e57c73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6ace22a668ecd8e2c4cf782cf45eda024ea347a2e459fbce5c1ceb0032e57c73->leave($__internal_6ace22a668ecd8e2c4cf782cf45eda024ea347a2e459fbce5c1ceb0032e57c73_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
