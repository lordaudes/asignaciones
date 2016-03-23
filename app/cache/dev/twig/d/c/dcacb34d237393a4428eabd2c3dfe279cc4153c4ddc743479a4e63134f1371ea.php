<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_dcacb34d237393a4428eabd2c3dfe279cc4153c4ddc743479a4e63134f1371ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_76ff4b60e4b60ee3d9a02a2dfde89ad8ca446126b2f249f60970a7653879e564 = $this->env->getExtension("native_profiler");
        $__internal_76ff4b60e4b60ee3d9a02a2dfde89ad8ca446126b2f249f60970a7653879e564->enter($__internal_76ff4b60e4b60ee3d9a02a2dfde89ad8ca446126b2f249f60970a7653879e564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76ff4b60e4b60ee3d9a02a2dfde89ad8ca446126b2f249f60970a7653879e564->leave($__internal_76ff4b60e4b60ee3d9a02a2dfde89ad8ca446126b2f249f60970a7653879e564_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_551da102092b9443c0cce4f3bfe9bb2747e66440952ab7b6da303d882e8080cd = $this->env->getExtension("native_profiler");
        $__internal_551da102092b9443c0cce4f3bfe9bb2747e66440952ab7b6da303d882e8080cd->enter($__internal_551da102092b9443c0cce4f3bfe9bb2747e66440952ab7b6da303d882e8080cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_551da102092b9443c0cce4f3bfe9bb2747e66440952ab7b6da303d882e8080cd->leave($__internal_551da102092b9443c0cce4f3bfe9bb2747e66440952ab7b6da303d882e8080cd_prof);

    }

    // line 6
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6f08390e810c14ea1b5b963e5623a310e7b9ffbe5953706fc1dc25bc21b99795 = $this->env->getExtension("native_profiler");
        $__internal_6f08390e810c14ea1b5b963e5623a310e7b9ffbe5953706fc1dc25bc21b99795->enter($__internal_6f08390e810c14ea1b5b963e5623a310e7b9ffbe5953706fc1dc25bc21b99795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 7
        echo "<span class=\"label\">
    <span class=\"icon\"><svg width=\"32\" height=\"32\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 32 32\" enable-background=\"new 0 0 32 32\" xml:space=\"preserve\"><g><path fill=\"#3F3F3F\" d=\"M15 2c-1.1 0-2 0.9-2 2v25c0 1.1 0.9 2 2 2s2-0.9 2-2V4C17 2.9 16.1 2 15 2z\"/><path fill=\"#3F3F3F\" d=\"M30.7 8.2l-2.9-2.9C27.6 5.1 27.3 5 27 5h0h0h-9v8h9c0.3 0 0.6-0.1 0.8-0.3l2.9-2.9 C31.1 9.4 31.1 8.6 30.7 8.2z\"/><path fill=\"#3F3F3F\" d=\"M5 8L5 8C4.7 8 4.4 8.1 4.2 8.3l-2.9 2.9c-0.4 0.4-0.4 1.1 0 1.6l2.9 2.9C4.4 15.9 4.7 16 5 16h7V8H5L5 8z\"/><path fill=\"#3F3F3F\" d=\"M24.8 16.2c-0.2-0.2-0.3-0.2-0.5-0.2h0h0H18v6h6.2c0.2 0 0.4-0.1 0.5-0.2l2-2.2c0.3-0.3 0.3-0.9 0-1.2 L24.8 16.2z\"/></g></svg></span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6f08390e810c14ea1b5b963e5623a310e7b9ffbe5953706fc1dc25bc21b99795->leave($__internal_6f08390e810c14ea1b5b963e5623a310e7b9ffbe5953706fc1dc25bc21b99795_prof);

    }

    // line 13
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2977f89905a2f029d56f14d653e4cfe1270a3d13a20a1ed0a59c968dc23022db = $this->env->getExtension("native_profiler");
        $__internal_2977f89905a2f029d56f14d653e4cfe1270a3d13a20a1ed0a59c968dc23022db->enter($__internal_2977f89905a2f029d56f14d653e4cfe1270a3d13a20a1ed0a59c968dc23022db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 14
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2977f89905a2f029d56f14d653e4cfe1270a3d13a20a1ed0a59c968dc23022db->leave($__internal_2977f89905a2f029d56f14d653e4cfe1270a3d13a20a1ed0a59c968dc23022db_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 14,  64 => 13,  53 => 7,  47 => 6,  36 => 3,  11 => 1,);
    }
}
