<?php
/*
 * Использовано:
 * 1 - строгая типизация
 * 2 - abstract class
 * 3 - check_count
 * 4 - array_key_last
 * 5 - array_key_first
 * 6 - PASSWORD_ARGON2I
 * 7 - Оператор объединения с null
 */

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

$Website = new webSite\Website();
/* Variables are needed for testing methods.
 * Do not delete!!
 * #################
 */
$arr_roles = ['admin' => '1', 'user' => '2', 'manager' => '3'];
$url_comment = 'http://test.site/post-1/?get=name&comment-220';
/*
 * ################
 */
// TEST method
echo $Website->get_last_role( $arr_roles );