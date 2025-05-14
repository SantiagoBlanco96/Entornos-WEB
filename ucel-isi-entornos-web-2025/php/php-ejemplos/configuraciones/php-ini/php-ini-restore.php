<?php

echo ini_get('max_execution_time'), '<br>';

ini_set('max_execution_time', '60');

echo ini_get('max_execution_time'), '<br>';

ini_restore('max_execution_time');

echo ini_get('max_execution_time'), '<br>';
