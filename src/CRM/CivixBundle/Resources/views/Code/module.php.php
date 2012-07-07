<?php
echo "<?php\n";
?>

require_once '<?= $mainFile ?>.civix.php';

/**
 * Implementation of hook_civicrm_config
 */
function <?= $mainFile ?>_civicrm_config(&$config) {
  _<?= $mainFile ?>_civix_civicrm_config($config);
}

/**
 * Implementation of hook_civicrm_xmlMenu
 *
 * @param $files array(string)
 */
function <?= $mainFile ?>_civicrm_xmlMenu(&$files) {
  _<?= $mainFile ?>_civix_civicrm_xmlMenu($files);
}

/**
 * Implementation of hook_civicrm_install
 */
function <?= $mainFile ?>_civicrm_install() {
  return _<?= $mainFile ?>_civix_civicrm_install();
}

/**
 * Implementation of hook_civicrm_uninstall
 */
function <?= $mainFile ?>_civicrm_uninstall() {
  return _<?= $mainFile ?>_civix_civicrm_uninstall();
}

/**
 * Implementation of hook_civicrm_upgrade
 *
 * @param $op string, the type of operation being performed; 'check' or 'enqueue'
 * @param $queue CRM_Queue_Queue, (for 'enqueue') the modifiable list of pending up upgrade tasks
 *
 * @return mixed  based on op. for 'check', returns array(boolean) (TRUE if upgrades are pending)
 *                for 'enqueue', returns void
 */
function <?= $mainFile ?>_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _<?= $mainFile ?>_civix_civicrm_upgrade($op, $queue);
}