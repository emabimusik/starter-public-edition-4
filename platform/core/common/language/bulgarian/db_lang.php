<?php defined('BASEPATH') OR exit('No direct script access allowed');

$lang['db_invalid_connection_str'] = 'Невъзможно е да се определят настройките за БД от "connection string"-a, който сте въвели.';
$lang['db_unable_to_connect'] = 'Не може да се свърже с вашата база данни чрез посочените данни.';
$lang['db_unable_to_select'] = 'Не може да бъде изберете определена база данни: %s';
$lang['db_unable_to_create'] = 'Не може да бъде създадена посочената база данни: %s';
$lang['db_invalid_query'] = 'Подадената заявка не е валидна.';
$lang['db_must_set_table'] = 'Трябва да зададете на таблицата за да се използва с вашата заявка.';
$lang['db_must_use_set'] = 'Трябва да използвате "set" метод за актуализиране на данните.';
$lang['db_must_use_index'] = 'Трябва да посочите съответен индекс за пакетно обновяване.';
$lang['db_batch_missing_index'] = 'Един или повече редове, представени за актуализиране на пакетното обновяване са с липсващ индекс.';
$lang['db_must_use_where'] = 'Актуализации не са позволени, освен ако не съдържат "WHERE" клауза.';
$lang['db_del_must_use_where'] = 'Изтриването не е позволено, освен ако не съдържа  "where" или "like" клауза.';
$lang['db_field_param_missing'] = 'При изтеглянето на полета се изисква името на таблицата като параметър.';
$lang['db_unsupported_function'] = 'Тази функция не е достъпна за базата данни, която използвате.';
$lang['db_transaction_failure'] = 'Грешка в транзакция: Връщане на предишното състояние.';
$lang['db_unable_to_drop'] = 'Не може да се изтрие специфичната база данни.';
$lang['db_unsupported_feature'] = 'Тази функция не се поддържа от Вашата база данни.';
$lang['db_unsupported_compression'] = 'Формата за компресиране който сте избрали, не се поддържа от вашия сървър.';
$lang['db_filepath_error'] = 'Не е възможно записването на данни в пътя на файла, който сте подали.';
$lang['db_invalid_cache_path'] = 'Пътят до кеш папката, който сте описали не е правилен или без права.';
$lang['db_table_name_required'] = 'Името на таблицата е задължително за тази операция.';
$lang['db_column_name_required'] = 'Името на колоната е задължително за тази операция.';
$lang['db_column_definition_required'] = 'Определянето на колона е задължително за тази операция.';
$lang['db_unable_to_set_charset'] = 'Не може да настрои клиента с правилен енкодинг: %s';
$lang['db_error_heading'] = 'Възникна грешка в базата данни';
