<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* core/themes/bartik/templates/status-messages.html.twig */
class __TwigTemplate_f07d6f7f8c415a37a6e37a988c12a98d529b44e5d5254c36d22e28b3cd763690 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'messages' => [$this, 'block_messages'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("block" => 23, "if" => 24, "for" => 27, "set" => 29);
        $filters = array("escape" => 25, "without" => 34, "length" => 41, "first" => 48);
        $functions = array("attach_library" => 25);

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if', 'for', 'set'],
                ['escape', 'without', 'length', 'first'],
                ['attach_library']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "<div data-drupal-messages>
  ";
        // line 23
        $this->displayBlock('messages', $context, $blocks);
        // line 60
        echo "</div>
";
    }

    // line 23
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "    ";
        if ( !twig_test_empty(($context["message_list"] ?? null))) {
            // line 25
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("bartik/messages"), "html", null, true);
            echo "
      <div class=\"messages__wrapper layout-container\">
        ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["message_list"] ?? null));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 28
                echo "          ";
                // line 29
                $context["classes"] = [0 => "messages", 1 => ("messages--" . $this->sandbox->ensureToStringAllowed(                // line 31
$context["type"], 31, $this->source))];
                // line 34
                echo "          <div role=\"contentinfo\" aria-label=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["status_headings"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["type"]] ?? null) : null), 34, $this->source), "html", null, true);
                echo "\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 34), 34, $this->source), "role", "aria-label"), "html", null, true);
                echo ">
            ";
                // line 35
                if (($context["type"] == "error")) {
                    // line 36
                    echo "            <div role=\"alert\">
              ";
                }
                // line 38
                echo "              ";
                if ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["status_headings"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["type"]] ?? null) : null)) {
                    // line 39
                    echo "                <h2 class=\"visually-hidden\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["status_headings"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[$context["type"]] ?? null) : null), 39, $this->source), "html", null, true);
                    echo "</h2>
              ";
                }
                // line 41
                echo "              ";
                if ((twig_length_filter($this->env, $context["messages"]) > 1)) {
                    // line 42
                    echo "                <ul class=\"messages__list\">
                  ";
                    // line 43
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["messages"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                        // line 44
                        echo "                    <li class=\"messages__item\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["message"], 44, $this->source), "html", null, true);
                        echo "</li>
                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 46
                    echo "                </ul>
              ";
                } else {
                    // line 48
                    echo "                ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_first($this->env, $this->sandbox->ensureToStringAllowed($context["messages"], 48, $this->source)), "html", null, true);
                    echo "
              ";
                }
                // line 50
                echo "              ";
                if (($context["type"] == "error")) {
                    // line 51
                    echo "            </div>
            ";
                }
                // line 53
                echo "          </div>
          ";
                // line 55
                echo "          ";
                $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 55);
                // line 56
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "      </div>
    ";
        }
        // line 59
        echo "  ";
    }

    public function getTemplateName()
    {
        return "core/themes/bartik/templates/status-messages.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  169 => 59,  165 => 57,  159 => 56,  156 => 55,  153 => 53,  149 => 51,  146 => 50,  140 => 48,  136 => 46,  127 => 44,  123 => 43,  120 => 42,  117 => 41,  111 => 39,  108 => 38,  104 => 36,  102 => 35,  95 => 34,  93 => 31,  92 => 29,  90 => 28,  86 => 27,  80 => 25,  77 => 24,  73 => 23,  68 => 60,  66 => 23,  63 => 22,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/bartik/templates/status-messages.html.twig", "/Users/ben/Documents/Code/HB-Portfolio/core/themes/bartik/templates/status-messages.html.twig");
    }
}
