<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'db5009052612.hosting-data.io';
$CFG->dbname    = 'dbs7646784';
$CFG->dbuser    = 'dbu1163310';
$CFG->dbpass    = 'Akka2004!';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => 3306,
  'dbsocket' => '',
  'dbcollation' => 'utf8_general_ci',
);
$CFG->slasharguments = false;
$CFG->wwwroot   = 'https://e-ndara.org';
$CFG->dataroot  = '/homepages/13/d681483704/htdocs/clickandbuilds/Moodle/moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
