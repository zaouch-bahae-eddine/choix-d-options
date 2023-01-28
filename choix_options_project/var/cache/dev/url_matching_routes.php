<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/etudiant/choix_options' => [[['_route' => 'etudiant_home', '_controller' => 'App\\Controller\\EtudiantController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/etudiant/choix_options/save' => [[['_route' => 'save_choice', '_controller' => 'App\\Controller\\EtudiantController::addChoice'], null, ['POST' => 0], null, false, false, null]],
        '/etudiant/choix_options/save-old' => [[['_route' => 'save_choice_old', '_controller' => 'App\\Controller\\EtudiantController::add'], null, ['POST' => 0], null, false, false, null]],
        '/admin/parcour' => [[['_route' => 'app_parcour_index', '_controller' => 'App\\Controller\\ParcourController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/admin/parcour/new' => [[['_route' => 'app_parcour_new', '_controller' => 'App\\Controller\\ParcourController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/promotion' => [[['_route' => 'app_promotion_index', '_controller' => 'App\\Controller\\PromotionController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/admin/promotions' => [[['_route' => 'admin_home', '_controller' => 'App\\Controller\\PromotionTestController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/responsible' => [[['_route' => 'app_responsible_index', '_controller' => 'App\\Controller\\ResponsibleUserController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/admin/responsible/send' => [[['_route' => 'app_responsible_send', '_controller' => 'App\\Controller\\ResponsibleUserController::sendEmail'], null, ['POST' => 0], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/admin/bloc//new' => [[['_route' => 'app_ue_new', '_controller' => 'App\\Controller\\UeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|p(?'
                        .'|arcour/([^/]++)(?'
                            .'|/(?'
                                .'|bloc(?'
                                    .'|(*:212)'
                                    .'|(?:/([^/]++))?(*:234)'
                                    .'|/([^/]++)/(?'
                                        .'|optionBloc/(?'
                                            .'|new(*:272)'
                                            .'|([^/]++)/(?'
                                                .'|ue/(?'
                                                    .'|add(*:301)'
                                                    .'|([^/]++)/delete(*:324)'
                                                .')'
                                                .'|edit(*:337)'
                                                .'|delete(*:351)'
                                            .')'
                                        .')'
                                        .'|ue/(?'
                                            .'|selected(*:375)'
                                            .'|new(*:386)'
                                            .'|([^/]++)/(?'
                                                .'|edit(*:410)'
                                                .'|delete(*:424)'
                                            .')'
                                        .')'
                                        .'|edit(*:438)'
                                        .'|delete(*:452)'
                                    .')'
                                .')'
                                .'|ue/([^/]++)(?'
                                    .'|(*:476)'
                                    .'|/(?'
                                        .'|random(*:494)'
                                        .'|student/([^/]++)/set_group(*:528)'
                                    .')'
                                .')'
                                .'|edit(*:542)'
                            .')'
                            .'|(*:551)'
                        .')'
                        .'|romotion/([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:588)'
                                .'|asdsdsd(*:603)'
                            .')'
                            .'|(*:612)'
                        .')'
                    .')'
                    .'|responsible/([^/]++)/(?'
                        .'|edit(*:650)'
                        .'|delete(*:664)'
                    .')'
                    .'|year/([^/]++)/student(?'
                        .'|(*:697)'
                        .'|/(?'
                            .'|([^/]++)/(?'
                                .'|edit(*:725)'
                                .'|update/parcours(*:748)'
                            .')'
                            .'|upload(*:763)'
                            .'|([^/]++)/delete(*:786)'
                            .'|send(*:798)'
                            .'|([^/]++)/choice(?'
                                .'|(*:824)'
                                .'|/save(*:837)'
                            .')'
                        .')'
                    .')'
                    .'|bloc//([^/]++)(?'
                        .'|/(?'
                            .'|bloc/ues(*:877)'
                            .'|edit(*:889)'
                        .')'
                        .'|(*:898)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        212 => [[['_route' => 'app_bloc_index', '_controller' => 'App\\Controller\\BlocController::index'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        234 => [[['_route' => 'app_bloc_selected_index', 'selectedBloc' => 0, '_controller' => 'App\\Controller\\BlocController::index'], ['id', 'selectedBloc'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        272 => [[['_route' => 'app_bloc_new_option', '_controller' => 'App\\Controller\\BlocController::addOptionBloc'], ['id', 'skillBloc'], ['POST' => 0], null, false, false, null]],
        301 => [[['_route' => 'app_bloc_new_ue_to_option', '_controller' => 'App\\Controller\\BlocController::addUeToOptionBloc'], ['id', 'skillBloc', 'optionBloc'], ['POST' => 0], null, false, false, null]],
        324 => [[['_route' => 'app_option_bloc_ue_delete', '_controller' => 'App\\Controller\\BlocController::deleteUeFromOpionBloc'], ['id', 'skillBloc', 'optionBloc', 'ue'], ['POST' => 0], null, false, false, null]],
        337 => [[['_route' => 'app_option_bloc_edit', '_controller' => 'App\\Controller\\BlocController::editOptionBloc'], ['id', 'skillBloc', 'optionBloc'], ['POST' => 0], null, false, false, null]],
        351 => [[['_route' => 'app_option_bloc_delete', '_controller' => 'App\\Controller\\BlocController::deleteOptionBloc'], ['id', 'skillBloc', 'optionBloc'], ['POST' => 0], null, false, false, null]],
        375 => [[['_route' => 'app_bloc_new_selected', '_controller' => 'App\\Controller\\BlocController::addSelectedUeToSkillBloc'], ['id', 'skillBloc'], ['POST' => 0], null, false, false, null]],
        386 => [[['_route' => 'app_bloc_new', '_controller' => 'App\\Controller\\BlocController::newUE'], ['id', 'skillBloc'], ['POST' => 0], null, false, false, null]],
        410 => [[['_route' => 'app_bloc_ue_edit', '_controller' => 'App\\Controller\\BlocController::editUe'], ['id', 'skillBloc', 'ue'], ['POST' => 0], null, false, false, null]],
        424 => [[['_route' => 'app_skill_bloc_ue_delete', '_controller' => 'App\\Controller\\BlocController::deleteUe'], ['id', 'skillBloc', 'ue'], ['POST' => 0], null, false, false, null]],
        438 => [[['_route' => 'app_bloc_edit', '_controller' => 'App\\Controller\\BlocController::edit'], ['id', 'bloc'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        452 => [[['_route' => 'app_bloc_delete', '_controller' => 'App\\Controller\\BlocController::delete'], ['id', 'bloc'], ['POST' => 0], null, false, false, null]],
        476 => [[['_route' => 'app_students_choices_by_ue', '_controller' => 'App\\Controller\\BlocController::StudentsChoicesByUe'], ['parcour', 'ue'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        494 => [[['_route' => 'app_students_random_distribution', '_controller' => 'App\\Controller\\BlocController::randomDistributionOfStudentIntoGroups'], ['parcour', 'ue'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        528 => [[['_route' => 'set_student_group', '_controller' => 'App\\Controller\\BlocController::setStudentGroup'], ['parcour', 'ue', 'student'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        542 => [[['_route' => 'app_parcour_edit', '_controller' => 'App\\Controller\\ParcourController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        551 => [[['_route' => 'app_parcour_delete', '_controller' => 'App\\Controller\\ParcourController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        588 => [[['_route' => 'app_promotion_edit', '_controller' => 'App\\Controller\\PromotionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        603 => [[['_route' => 'export_data_excel_format', '_controller' => 'App\\Controller\\PromotionController::exportExcel'], ['promotion'], null, null, false, false, null]],
        612 => [[['_route' => 'app_promotion_delete', '_controller' => 'App\\Controller\\PromotionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        650 => [[['_route' => 'app_responsible_edit', '_controller' => 'App\\Controller\\ResponsibleUserController::edit'], ['user'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        664 => [[['_route' => 'app_responsible_delete', '_controller' => 'App\\Controller\\ResponsibleUserController::delete'], ['user'], ['POST' => 0], null, false, false, null]],
        697 => [[['_route' => 'app_student_index', '_controller' => 'App\\Controller\\StudentController::index'], ['year'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        725 => [[['_route' => 'app_student_edit', '_controller' => 'App\\Controller\\StudentController::edit'], ['year', 'user'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        748 => [[['_route' => 'update_student_parcours', '_controller' => 'App\\Controller\\StudentController::updateStudentParcour'], ['year', 'student'], ['POST' => 0], null, false, false, null]],
        763 => [[['_route' => 'app_student_upload', '_controller' => 'App\\Controller\\StudentController::upload'], ['year'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        786 => [[['_route' => 'app_student_delete', '_controller' => 'App\\Controller\\StudentController::delete'], ['year', 'user'], ['POST' => 0], null, false, false, null]],
        798 => [[['_route' => 'app_student_send', '_controller' => 'App\\Controller\\StudentController::sendEmail'], ['year'], ['POST' => 0], null, false, false, null]],
        824 => [[['_route' => 'admin_app_student_choice', '_controller' => 'App\\Controller\\StudentController::choiceMade'], ['promotion', 'student'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        837 => [[['_route' => 'admin_app_student_choice_save', '_controller' => 'App\\Controller\\StudentController::choiceSave'], ['promotion', 'student'], ['POST' => 0], null, false, false, null]],
        877 => [[['_route' => 'app_ue_index', '_controller' => 'App\\Controller\\UeController::index'], ['bloc'], ['GET' => 0], null, false, false, null]],
        889 => [[['_route' => 'app_ue_edit', '_controller' => 'App\\Controller\\UeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        898 => [
            [['_route' => 'app_ue_delete', '_controller' => 'App\\Controller\\UeController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
