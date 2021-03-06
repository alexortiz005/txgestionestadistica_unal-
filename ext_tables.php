<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'UNAL.GestionestadisticaUnal',
            'Previewgestion',
            'Preview Gestion Estadistica'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'UNAL.GestionestadisticaUnal',
            'Temasgestion',
            'Temas Gestion Estadistica'
        );

        if (TYPO3_MODE === 'BE') {

            $_EXTKEY='gestionestadistica_unal';
            $extensionName = \TYPO3\CMS\Core\Utility\GeneralUtility::underscoredToUpperCamelCase($_EXTKEY);

            //pi_flexform value for preview publicaciones
            $frontendpluginName = 'Previewgestion';
            $pluginSignature = strtolower($extensionName).'_'.strtolower($frontendpluginName);

            $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
            $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$pluginSignature]= 'select_key, pages, recursive';

            \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:'.$_EXTKEY.'/Configuration/FlexForms/preview_gestion.xml');  

        }


        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('gestionestadistica_unal', 'Configuration/TypoScript', 'Gestión Estadística UN');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_gestionestadisticaunal_domain_model_tema', 'EXT:gestionestadistica_unal/Resources/Private/Language/locallang_csh_tx_gestionestadisticaunal_domain_model_tema.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_gestionestadisticaunal_domain_model_tema');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_gestionestadisticaunal_domain_model_recurso', 'EXT:gestionestadistica_unal/Resources/Private/Language/locallang_csh_tx_gestionestadisticaunal_domain_model_recurso.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_gestionestadisticaunal_domain_model_recurso');

    }
);
