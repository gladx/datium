<?php

use Datium\Datium as Datium;
use Datium\Tools\Convert as Covnert;

try{

require_once( 'vendor/autoload.php' );
var_dump( Datium::create( 2020, 07, 11 )->to( 'shamsi' )->get() );
var_dump( Datium::create( 2020, 07, 11 )->to( 'ghamari' )->get() );
var_dump( Datium::create( Datium::now()->object() )->get() );
echo '<br>this year:<br>';
var_dump( Datium::now()->to( 'shamsi' )->get( 'l jS F Y h:i:s A' ) );
echo "<br>";
var_dump( Datium::now()->to( 'shamsi' )->sub('3 year')->get() );
echo "<br>";
var_dump( Datium::now()->to( 'shamsi' )->add('3 year')->get() );
echo "<br>";
var_dump( Datium::now()->get( 'l jS F Y h:i:s A' ) );
echo "<br>Leap year ";
var_dump( Datium::now()->leap()->get() );
echo "<br>Create new DateTime: ";
var_dump( Datium::create(2000, 1, 1, 0, 0, 0)->get() );
echo "<br>";
echo 'Is next year leap? ';
var_dump( Datium::now()->add('1 year')->leap()->get() );
echo "<br>";
echo "Day of Year in gregorian:";
echo "<br>";
var_dump( Datium::now()->dayOf()->year() );
echo "<br>";
echo "Day of Year in shamsi:";
echo "<br>";
var_dump( Datium::now()->to('shamsi')->dayOf()->year() );
echo "<br>";
echo "Day of Year in ghamari:";
echo "<br>";
var_dump( Datium::now()->to( 'ghamari' )->dayOf()->year() );
echo "<br>";
echo "Day of Week";
echo "<br>";
var_dump( Datium::now()->dayOf()->week() );
echo "<br>";
echo "Change date form gregorian to shamsi with method: ";
var_dump( Datium::create( 1989, 10, 27 )->to( 'shamsi' )->get( 'l jS F Y h:i:s A' ) );
echo "<br>";
var_dump( Datium::now()->to( 'ghamari' )->get( 'l jS F Y h:i:s A' ) );
echo "<br>";
echo "<br>";
echo "<br>is persian holiday? ";
var_dump(  Datium::between( Datium::now()->object() , Datium::now()->add( '3 month' )->object() )->events()->local( 'us' )->local( 'ir' )->get() );
echo 'return international days';
var_dump(  Datium::between( Datium::now()->object() , Datium::now()->add('4 month')->object() )->events()->international()->get() );
echo 'Convert gregorian to perisan';
var_dump( Datium::now()->to('shamsi')->get() );
echo 'Today\'s events:';
var_dump( Datium::now()->events()->local( 'ir' )->get() );
echo 'Date diff';
$diff = Datium::diff( Datium::now()->object(), Datium::now()->add('5 day')->object() );
var_dump( $diff->days );

} catch (Exception $e ) {

  var_dump( $e );

}
