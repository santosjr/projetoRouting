<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_1a72b726ec60874775f982d3ff7e641129cab9b1b0d4bb546682549059d1ff05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_ecb23cab96a7bc61b2bfef4895f4c18e99cf8c1825b391bddd1f0ce9e6c1f926 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecb23cab96a7bc61b2bfef4895f4c18e99cf8c1825b391bddd1f0ce9e6c1f926->enter($__internal_ecb23cab96a7bc61b2bfef4895f4c18e99cf8c1825b391bddd1f0ce9e6c1f926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_00a61e715378b63524015f23c9ee1cb143ce4c457b06c3c1f0d9db4bba6a0182 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00a61e715378b63524015f23c9ee1cb143ce4c457b06c3c1f0d9db4bba6a0182->enter($__internal_00a61e715378b63524015f23c9ee1cb143ce4c457b06c3c1f0d9db4bba6a0182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ecb23cab96a7bc61b2bfef4895f4c18e99cf8c1825b391bddd1f0ce9e6c1f926->leave($__internal_ecb23cab96a7bc61b2bfef4895f4c18e99cf8c1825b391bddd1f0ce9e6c1f926_prof);

        
        $__internal_00a61e715378b63524015f23c9ee1cb143ce4c457b06c3c1f0d9db4bba6a0182->leave($__internal_00a61e715378b63524015f23c9ee1cb143ce4c457b06c3c1f0d9db4bba6a0182_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b4fb80326171b38acdd520f0fdd97a30157e3948a94cfe975d7e8a2fcaa86fdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4fb80326171b38acdd520f0fdd97a30157e3948a94cfe975d7e8a2fcaa86fdc->enter($__internal_b4fb80326171b38acdd520f0fdd97a30157e3948a94cfe975d7e8a2fcaa86fdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_96328d1c0c0da0f51645c664c6c618cbe5b2ab4577520e0bc80bde63c1f80763 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96328d1c0c0da0f51645c664c6c618cbe5b2ab4577520e0bc80bde63c1f80763->enter($__internal_96328d1c0c0da0f51645c664c6c618cbe5b2ab4577520e0bc80bde63c1f80763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_96328d1c0c0da0f51645c664c6c618cbe5b2ab4577520e0bc80bde63c1f80763->leave($__internal_96328d1c0c0da0f51645c664c6c618cbe5b2ab4577520e0bc80bde63c1f80763_prof);

        
        $__internal_b4fb80326171b38acdd520f0fdd97a30157e3948a94cfe975d7e8a2fcaa86fdc->leave($__internal_b4fb80326171b38acdd520f0fdd97a30157e3948a94cfe975d7e8a2fcaa86fdc_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a27aa91e08a6f93bf2769c674a1bfb274acbe63424da3404dbe50f3f240030d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a27aa91e08a6f93bf2769c674a1bfb274acbe63424da3404dbe50f3f240030d5->enter($__internal_a27aa91e08a6f93bf2769c674a1bfb274acbe63424da3404dbe50f3f240030d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8a836106a9b027c3c288f575fae6d5409810931e7dea8dd2ad81ff0cae382aa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a836106a9b027c3c288f575fae6d5409810931e7dea8dd2ad81ff0cae382aa5->enter($__internal_8a836106a9b027c3c288f575fae6d5409810931e7dea8dd2ad81ff0cae382aa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_8a836106a9b027c3c288f575fae6d5409810931e7dea8dd2ad81ff0cae382aa5->leave($__internal_8a836106a9b027c3c288f575fae6d5409810931e7dea8dd2ad81ff0cae382aa5_prof);

        
        $__internal_a27aa91e08a6f93bf2769c674a1bfb274acbe63424da3404dbe50f3f240030d5->leave($__internal_a27aa91e08a6f93bf2769c674a1bfb274acbe63424da3404dbe50f3f240030d5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9b801610618a60719fa77400d8de381584740067e4e5e9f0c6693ef3a4de849c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b801610618a60719fa77400d8de381584740067e4e5e9f0c6693ef3a4de849c->enter($__internal_9b801610618a60719fa77400d8de381584740067e4e5e9f0c6693ef3a4de849c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_31b79d182fb8d3a592e36dfbeeb1e130f27fb6d0b58829517888377e5535ac63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31b79d182fb8d3a592e36dfbeeb1e130f27fb6d0b58829517888377e5535ac63->enter($__internal_31b79d182fb8d3a592e36dfbeeb1e130f27fb6d0b58829517888377e5535ac63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_31b79d182fb8d3a592e36dfbeeb1e130f27fb6d0b58829517888377e5535ac63->leave($__internal_31b79d182fb8d3a592e36dfbeeb1e130f27fb6d0b58829517888377e5535ac63_prof);

        
        $__internal_9b801610618a60719fa77400d8de381584740067e4e5e9f0c6693ef3a4de849c->leave($__internal_9b801610618a60719fa77400d8de381584740067e4e5e9f0c6693ef3a4de849c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/projetoRouting/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
