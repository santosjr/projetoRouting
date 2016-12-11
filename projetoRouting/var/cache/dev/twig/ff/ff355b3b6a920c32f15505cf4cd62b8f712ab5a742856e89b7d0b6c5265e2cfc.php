<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_975b5de68e51716f5636197701d5f6bb1edbaf04a7ba21fe04f70ff1aee8baae extends Twig_Template
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
        $__internal_78acec467898bac29daa1ab1daed55faacb6c624ad5c4d0262940bf03f287653 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78acec467898bac29daa1ab1daed55faacb6c624ad5c4d0262940bf03f287653->enter($__internal_78acec467898bac29daa1ab1daed55faacb6c624ad5c4d0262940bf03f287653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_9f0295e9f664f3adeac5fbaf73504c5e1daffa546ff0c839fe4b28df9e263cd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f0295e9f664f3adeac5fbaf73504c5e1daffa546ff0c839fe4b28df9e263cd2->enter($__internal_9f0295e9f664f3adeac5fbaf73504c5e1daffa546ff0c839fe4b28df9e263cd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78acec467898bac29daa1ab1daed55faacb6c624ad5c4d0262940bf03f287653->leave($__internal_78acec467898bac29daa1ab1daed55faacb6c624ad5c4d0262940bf03f287653_prof);

        
        $__internal_9f0295e9f664f3adeac5fbaf73504c5e1daffa546ff0c839fe4b28df9e263cd2->leave($__internal_9f0295e9f664f3adeac5fbaf73504c5e1daffa546ff0c839fe4b28df9e263cd2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bdb80b2a5d6eadef49ec4602acdfe03c33938347451b5dfa80063fa3d2883877 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdb80b2a5d6eadef49ec4602acdfe03c33938347451b5dfa80063fa3d2883877->enter($__internal_bdb80b2a5d6eadef49ec4602acdfe03c33938347451b5dfa80063fa3d2883877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_734126b0f4efd11159f6460c83d910937c61052f72d938d0af0afba1b7064679 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_734126b0f4efd11159f6460c83d910937c61052f72d938d0af0afba1b7064679->enter($__internal_734126b0f4efd11159f6460c83d910937c61052f72d938d0af0afba1b7064679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_734126b0f4efd11159f6460c83d910937c61052f72d938d0af0afba1b7064679->leave($__internal_734126b0f4efd11159f6460c83d910937c61052f72d938d0af0afba1b7064679_prof);

        
        $__internal_bdb80b2a5d6eadef49ec4602acdfe03c33938347451b5dfa80063fa3d2883877->leave($__internal_bdb80b2a5d6eadef49ec4602acdfe03c33938347451b5dfa80063fa3d2883877_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2dc541e77505b1fb816f6ecc7cea14983f94af119083da4b49f1b0ebc1eaf3b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dc541e77505b1fb816f6ecc7cea14983f94af119083da4b49f1b0ebc1eaf3b8->enter($__internal_2dc541e77505b1fb816f6ecc7cea14983f94af119083da4b49f1b0ebc1eaf3b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8c2f49f3bcadacfe22c14292c32a65e1fd24b18f6dbe533fcb82ffc578714bd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c2f49f3bcadacfe22c14292c32a65e1fd24b18f6dbe533fcb82ffc578714bd3->enter($__internal_8c2f49f3bcadacfe22c14292c32a65e1fd24b18f6dbe533fcb82ffc578714bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8c2f49f3bcadacfe22c14292c32a65e1fd24b18f6dbe533fcb82ffc578714bd3->leave($__internal_8c2f49f3bcadacfe22c14292c32a65e1fd24b18f6dbe533fcb82ffc578714bd3_prof);

        
        $__internal_2dc541e77505b1fb816f6ecc7cea14983f94af119083da4b49f1b0ebc1eaf3b8->leave($__internal_2dc541e77505b1fb816f6ecc7cea14983f94af119083da4b49f1b0ebc1eaf3b8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d0f0ee913686f2e19cb9851fac137c5bb8b506608997f28f31e2397e9666db2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0f0ee913686f2e19cb9851fac137c5bb8b506608997f28f31e2397e9666db2b->enter($__internal_d0f0ee913686f2e19cb9851fac137c5bb8b506608997f28f31e2397e9666db2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_730571599cf21365ff71fbfee7358c2f46bc2339b3656425743701ed7c8b673e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_730571599cf21365ff71fbfee7358c2f46bc2339b3656425743701ed7c8b673e->enter($__internal_730571599cf21365ff71fbfee7358c2f46bc2339b3656425743701ed7c8b673e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_730571599cf21365ff71fbfee7358c2f46bc2339b3656425743701ed7c8b673e->leave($__internal_730571599cf21365ff71fbfee7358c2f46bc2339b3656425743701ed7c8b673e_prof);

        
        $__internal_d0f0ee913686f2e19cb9851fac137c5bb8b506608997f28f31e2397e9666db2b->leave($__internal_d0f0ee913686f2e19cb9851fac137c5bb8b506608997f28f31e2397e9666db2b_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/projetoRouting/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
