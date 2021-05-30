<?php
$GLOBALS['TCA']['tx_news_domain_model_news']['columns']['categories']['config']['foreign_table_where'] = ' AND (sys_category.sys_language_uid = 0 OR sys_category.l10n_parent = 0) ORDER BY sys_category.sorting';
