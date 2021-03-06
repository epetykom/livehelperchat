<?php

$def = new ezcPersistentObjectDefinition();
$def->table = "lh_abstract_proactive_chat_invitation";
$def->class = "erLhAbstractModelProactiveChatInvitation";

$def->idProperty = new ezcPersistentObjectIdProperty();
$def->idProperty->columnName = 'id';
$def->idProperty->propertyName = 'id';
$def->idProperty->generator = new ezcPersistentGeneratorDefinition(  'ezcPersistentNativeGenerator' );

$def->properties['siteaccess'] = new ezcPersistentObjectProperty();
$def->properties['siteaccess']->columnName   = 'siteaccess';
$def->properties['siteaccess']->propertyName = 'siteaccess';
$def->properties['siteaccess']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_STRING;

$def->properties['time_on_site'] = new ezcPersistentObjectProperty();
$def->properties['time_on_site']->columnName   = 'time_on_site';
$def->properties['time_on_site']->propertyName = 'time_on_site';
$def->properties['time_on_site']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_STRING;

$def->properties['pageviews'] = new ezcPersistentObjectProperty();
$def->properties['pageviews']->columnName   = 'pageviews';
$def->properties['pageviews']->propertyName = 'pageviews';
$def->properties['pageviews']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_INT;

$def->properties['message'] = new ezcPersistentObjectProperty();
$def->properties['message']->columnName   = 'message';
$def->properties['message']->propertyName = 'message';
$def->properties['message']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_STRING;

$def->properties['name'] = new ezcPersistentObjectProperty();
$def->properties['name']->columnName   = 'name';
$def->properties['name']->propertyName = 'name';
$def->properties['name']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_STRING;

$def->properties['identifier'] = new ezcPersistentObjectProperty();
$def->properties['identifier']->columnName   = 'identifier';
$def->properties['identifier']->propertyName = 'identifier';
$def->properties['identifier']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_STRING;

$def->properties['executed_times'] = new ezcPersistentObjectProperty();
$def->properties['executed_times']->columnName   = 'executed_times';
$def->properties['executed_times']->propertyName = 'executed_times';
$def->properties['executed_times']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_INT;

$def->properties['position'] = new ezcPersistentObjectProperty();
$def->properties['position']->columnName   = 'position';
$def->properties['position']->propertyName = 'position';
$def->properties['position']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_INT;

$def->properties['operator_name'] = new ezcPersistentObjectProperty();
$def->properties['operator_name']->columnName   = 'operator_name';
$def->properties['operator_name']->propertyName = 'operator_name';
$def->properties['operator_name']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_STRING;

$def->properties['wait_message'] = new ezcPersistentObjectProperty();
$def->properties['wait_message']->columnName   = 'wait_message';
$def->properties['wait_message']->propertyName = 'wait_message';
$def->properties['wait_message']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_STRING;

// Timeout in seconds.
$def->properties['wait_timeout'] = new ezcPersistentObjectProperty();
$def->properties['wait_timeout']->columnName   = 'wait_timeout';
$def->properties['wait_timeout']->propertyName = 'wait_timeout';
$def->properties['wait_timeout']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_INT;

$def->properties['requires_email'] = new ezcPersistentObjectProperty();
$def->properties['requires_email']->columnName   = 'requires_email';
$def->properties['requires_email']->propertyName = 'requires_email';
$def->properties['requires_email']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_INT;

$def->properties['show_random_operator'] = new ezcPersistentObjectProperty();
$def->properties['show_random_operator']->columnName   = 'show_random_operator';
$def->properties['show_random_operator']->propertyName = 'show_random_operator';
$def->properties['show_random_operator']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_INT;

// Then timeout passes show visitor this message.
$def->properties['timeout_message'] = new ezcPersistentObjectProperty();
$def->properties['timeout_message']->columnName   = 'timeout_message';
$def->properties['timeout_message']->propertyName = 'timeout_message';
$def->properties['timeout_message']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_STRING;

return $def;

?>