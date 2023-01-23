<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_bloc_index' => [['id'], ['_controller' => 'App\\Controller\\BlocController::index'], [], [['text', '/bloc'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/parcour']], [], [], []],
    'app_bloc_selected_index' => [['id', 'selectedBloc'], ['selectedBloc' => 0, '_controller' => 'App\\Controller\\BlocController::index'], [], [['variable', '/', '[^/]++', 'selectedBloc', true], ['text', '/bloc'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/parcour']], [], [], []],
    'app_bloc_new_option' => [['id', 'skillBloc'], ['_controller' => 'App\\Controller\\BlocController::addOptionBloc'], [], [['text', '/optionBloc/new'], ['variable', '/', '[^/]++', 'skillBloc', true], ['text', '/bloc'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/parcour']], [], [], []],
    'app_bloc_new_selected' => [['id', 'skillBloc'], ['_controller' => 'App\\Controller\\BlocController::addSelectedUeToSkillBloc'], [], [['text', '/ue/selected'], ['variable', '/', '[^/]++', 'skillBloc', true], ['text', '/bloc'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/parcour']], [], [], []],
    'app_bloc_new' => [['id', 'skillBloc'], ['_controller' => 'App\\Controller\\BlocController::newUE'], [], [['text', '/ue/new'], ['variable', '/', '[^/]++', 'skillBloc', true], ['text', '/bloc'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/parcour']], [], [], []],
    'app_bloc_ue_edit' => [['id', 'bloc', 'ue'], ['_controller' => 'App\\Controller\\BlocController::editUe'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'ue', true], ['text', '/ue'], ['variable', '/', '[^/]++', 'bloc', true], ['text', '/bloc'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/parcour']], [], [], []],
    'app_bloc_edit' => [['id', 'bloc'], ['_controller' => 'App\\Controller\\BlocController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'bloc', true], ['text', '/bloc'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/parcour']], [], [], []],
    'app_bloc_delete' => [['id', 'bloc'], ['_controller' => 'App\\Controller\\BlocController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'bloc', true], ['text', '/bloc'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/parcour']], [], [], []],
    'app_bloc_ue_delete' => [['id', 'bloc', 'ue'], ['_controller' => 'App\\Controller\\BlocController::deleteUe'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'ue', true], ['text', '/ue'], ['variable', '/', '[^/]++', 'bloc', true], ['text', '/bloc'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/parcour']], [], [], []],
    'etudiant_home' => [[], ['_controller' => 'App\\Controller\\EtudiantController::index'], [], [['text', '/etudiant/choix_options']], [], [], []],
    'save_choice' => [[], ['_controller' => 'App\\Controller\\EtudiantController::add'], [], [['text', '/etudiant/choix_options/save']], [], [], []],
    'app_parcour_index' => [[], ['_controller' => 'App\\Controller\\ParcourController::index'], [], [['text', '/admin/parcour/']], [], [], []],
    'app_parcour_new' => [[], ['_controller' => 'App\\Controller\\ParcourController::new'], [], [['text', '/admin/parcour/new']], [], [], []],
    'app_parcour_edit' => [['id'], ['_controller' => 'App\\Controller\\ParcourController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/parcour']], [], [], []],
    'app_parcour_delete' => [['id'], ['_controller' => 'App\\Controller\\ParcourController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/parcour']], [], [], []],
    'app_promotion_index' => [[], ['_controller' => 'App\\Controller\\PromotionController::index'], [], [['text', '/admin/promotion/']], [], [], []],
    'app_promotion_edit' => [['id'], ['_controller' => 'App\\Controller\\PromotionController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/promotion']], [], [], []],
    'app_promotion_delete' => [['id'], ['_controller' => 'App\\Controller\\PromotionController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/promotion']], [], [], []],
    'export_data_excel_format' => [['promotion'], ['_controller' => 'App\\Controller\\PromotionController::exportExcel'], [], [['text', '/asdsdsd'], ['variable', '/', '[^/]++', 'promotion', true], ['text', '/admin/promotion']], [], [], []],
    'admin_home' => [[], ['_controller' => 'App\\Controller\\PromotionTestController::index'], [], [['text', '/admin/promotions']], [], [], []],
    'app_responsible_index' => [[], ['_controller' => 'App\\Controller\\ResponsibleUserController::index'], [], [['text', '/admin/responsible/']], [], [], []],
    'app_responsible_edit' => [['user'], ['_controller' => 'App\\Controller\\ResponsibleUserController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'user', true], ['text', '/admin/responsible']], [], [], []],
    'app_responsible_delete' => [['user'], ['_controller' => 'App\\Controller\\ResponsibleUserController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'user', true], ['text', '/admin/responsible']], [], [], []],
    'app_responsible_send' => [[], ['_controller' => 'App\\Controller\\ResponsibleUserController::sendEmail'], [], [['text', '/admin/responsible/send']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'app_student_index' => [['promotion'], ['_controller' => 'App\\Controller\\StudentController::index'], [], [['text', '/student'], ['variable', '/', '[^/]++', 'promotion', true], ['text', '/admin/promotion']], [], [], []],
    'app_student_edit' => [['promotion', 'student'], ['_controller' => 'App\\Controller\\StudentController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'student', true], ['text', '/student'], ['variable', '/', '[^/]++', 'promotion', true], ['text', '/admin/promotion']], [], [], []],
    'app_student_upload' => [['promotion'], ['_controller' => 'App\\Controller\\StudentController::upload'], [], [['text', '/student/upload'], ['variable', '/', '[^/]++', 'promotion', true], ['text', '/admin/promotion']], [], [], []],
    'app_student_delete' => [['promotion', 'student'], ['_controller' => 'App\\Controller\\StudentController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'student', true], ['text', '/student'], ['variable', '/', '[^/]++', 'promotion', true], ['text', '/admin/promotion']], [], [], []],
    'app_student_send' => [['promotion'], ['_controller' => 'App\\Controller\\StudentController::sendEmail'], [], [['text', '/student/send'], ['variable', '/', '[^/]++', 'promotion', true], ['text', '/admin/promotion']], [], [], []],
    'admin_app_student_choice' => [['promotion', 'student'], ['_controller' => 'App\\Controller\\StudentController::choiceMade'], [], [['text', '/choice'], ['variable', '/', '[^/]++', 'student', true], ['text', '/student'], ['variable', '/', '[^/]++', 'promotion', true], ['text', '/admin/promotion']], [], [], []],
    'admin_app_student_choice_save' => [['promotion', 'student'], ['_controller' => 'App\\Controller\\StudentController::choiceSave'], [], [['text', '/choice/save'], ['variable', '/', '[^/]++', 'student', true], ['text', '/student'], ['variable', '/', '[^/]++', 'promotion', true], ['text', '/admin/promotion']], [], [], []],
    'app_ue_index' => [['bloc'], ['_controller' => 'App\\Controller\\UeController::index'], [], [['text', '/bloc/ues'], ['variable', '/', '[^/]++', 'bloc', true], ['text', '/admin/bloc/']], [], [], []],
    'app_ue_new' => [[], ['_controller' => 'App\\Controller\\UeController::new'], [], [['text', '/admin/bloc//new']], [], [], []],
    'app_ue_edit' => [['id'], ['_controller' => 'App\\Controller\\UeController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/bloc/']], [], [], []],
    'app_ue_delete' => [['id'], ['_controller' => 'App\\Controller\\UeController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/bloc/']], [], [], []],
];
