<?php

namespace Drupal\compara_tu_negocio\Controller;

use Drupal\Core\Controller\ControllerBase;

class ComparaTuNegocioController extends ControllerBase {

  public function index() {
    $message = 'Hello World';

    $query = \Drupal::database()->select('compara_tu_negocio', 'ctn');
    $query->addField('ctn','naics_code');
    $query->addField('ctn','code_description');

    $query->addField('ctn','num_establishments_2002');
    $query->addField('ctn','value_x1000_2002');
    $query->addField('ctn','payroll_x1000_2002');
    $query->addField('ctn','num_employees_2002');

    $query->addField('ctn','num_establishments_2007');
    $query->addField('ctn','value_x1000_2007');
    $query->addField('ctn','payroll_x1000_2007');
    $query->addField('ctn','num_employees_2007');

    $query->addField('ctn','num_establishments_2012');
    $query->addField('ctn','value_x1000_2012');
    $query->addField('ctn','payroll_x1000_2012');
    $query->addField('ctn','num_employees_2012');

    $query->addField('ctn','num_establishments_2017');
    $query->addField('ctn','value_x1000_2017');
    $query->addField('ctn','payroll_x1000_2017');
    $query->addField('ctn','num_employees_2017');
    $results = $query->execute()->fetchAll();
    //kint($results[1]);
    //kint($results);
    return array(
    	'#theme' => 'compara_tu_negocio',
    	'#ctn_data' => $results,
    	);
  }
}
