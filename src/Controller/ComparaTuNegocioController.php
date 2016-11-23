namespace Drupal\ComparaTuNegocio\Controller;

use Drupal\Core\Controller\ControllerBase;

class ComparaTuNegocioController extends ControllerBase {

  public function index() {
    $message = $this->t('%from to %to', [
      '%from' => $from,
      '%to' => $to,
    ]);

    return ['#markup' => $message];
  }
}
