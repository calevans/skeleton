<?PHP
require_once __DIR__.'/../vendor/autoload.php';

use SocialStalker\Controller;

$app = require '../app/Bootstrap.php';
$geocoder = new Geocode();

/*
 * Build the routes 
 */

/*
 * Do the deed
 */
$app->run();

