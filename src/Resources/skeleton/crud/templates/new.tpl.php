<?= $helper->getHeadPrintCode('New '.$entity_class_name) ?>

{% block body %}
    <h1>Create new <?= $entity_class_name ?></h1>

    {{ include('<?= $twig_include_route_name ?>/_form.html.twig') }}

    <a href="{{ path('<?= $route_name ?>_index') }}">back to list</a>
{% endblock %}
