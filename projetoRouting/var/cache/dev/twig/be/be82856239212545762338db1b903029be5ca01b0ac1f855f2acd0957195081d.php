<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_e104d7327f89e5ec84e3d24558dae068c97bd12886bec1520a5576cd3b065eb0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cec9c3f417ddc2747d9599a921489b5e4717dbd75ed2693f8b22f72c99a636eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cec9c3f417ddc2747d9599a921489b5e4717dbd75ed2693f8b22f72c99a636eb->enter($__internal_cec9c3f417ddc2747d9599a921489b5e4717dbd75ed2693f8b22f72c99a636eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_3f9251b9cf2774e413f8f423717990f99ae07bb02f6542b1c8ff79de3fc7f390 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f9251b9cf2774e413f8f423717990f99ae07bb02f6542b1c8ff79de3fc7f390->enter($__internal_3f9251b9cf2774e413f8f423717990f99ae07bb02f6542b1c8ff79de3fc7f390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cec9c3f417ddc2747d9599a921489b5e4717dbd75ed2693f8b22f72c99a636eb->leave($__internal_cec9c3f417ddc2747d9599a921489b5e4717dbd75ed2693f8b22f72c99a636eb_prof);

        
        $__internal_3f9251b9cf2774e413f8f423717990f99ae07bb02f6542b1c8ff79de3fc7f390->leave($__internal_3f9251b9cf2774e413f8f423717990f99ae07bb02f6542b1c8ff79de3fc7f390_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_676d9d8ae628f32eba9601bf133c2288b338812caf5ecf96291d085a8868bc70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_676d9d8ae628f32eba9601bf133c2288b338812caf5ecf96291d085a8868bc70->enter($__internal_676d9d8ae628f32eba9601bf133c2288b338812caf5ecf96291d085a8868bc70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_62a6c60c4f4488383ba0fc67b1a51d1134f938d132f564fbfb04bbc81ddc3a30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62a6c60c4f4488383ba0fc67b1a51d1134f938d132f564fbfb04bbc81ddc3a30->enter($__internal_62a6c60c4f4488383ba0fc67b1a51d1134f938d132f564fbfb04bbc81ddc3a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_62a6c60c4f4488383ba0fc67b1a51d1134f938d132f564fbfb04bbc81ddc3a30->leave($__internal_62a6c60c4f4488383ba0fc67b1a51d1134f938d132f564fbfb04bbc81ddc3a30_prof);

        
        $__internal_676d9d8ae628f32eba9601bf133c2288b338812caf5ecf96291d085a8868bc70->leave($__internal_676d9d8ae628f32eba9601bf133c2288b338812caf5ecf96291d085a8868bc70_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/html/projetoRouting/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
