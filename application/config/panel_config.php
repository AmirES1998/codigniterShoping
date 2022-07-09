<?php


$config['scope'] = "panel";
$config['ViewPath'] = $config['scope']."views/";
$config['TemplatePath'] = $config['scope']."templates/";
$config['TemplatName'] = "metis";
$config['MeansURL'] = 'means'.$config['scope'];
$config['ScriptsURL'] = $config['MeansURL']."scripts/";
$config['TemplatesMeansURL'] = $config['MeansURL']."templates/";
$config['TemplateMeansURL'] = $config['TemplatesMeansURL'].$config['TemplatName']."/";
$config['TemplateMeansCSS'] = $config['TemplatesMeansURL']."styles/";
$config['TemplateMeansJS'] = $config['TemplatesMeansURL']."scripts/";
$config['TemplateMeansImages'] = $config['TemplatesMeansURL']."img/";
$config['TemplateMeansFonts'] = $config['TemplatesMeansURL']."fonts/";
