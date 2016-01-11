<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Dawin.' . $_EXTKEY,
	'Pi1',
	array(
		'Post' => 'list, show, last',
		'Author' => 'list, show',
		'Category' => 'list, show',
		'Tag' => 'list, show',
		'Comment' => 'create',
		
	),
	// non-cacheable actions
	array(
		'Comment' => 'create',
		
	)
);
