<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/addon' => [[['_route' => 'addon'], null, null, null, false, false, null]],
        '/addon/linkers' => [[['_route' => 'addon_linkers'], null, null, null, false, false, null]],
        '/hook_events' => [[['_route' => 'hook_events'], null, null, null, false, false, null]],
        '/repositories' => [[['_route' => 'repositories'], null, null, null, false, false, null]],
        '/snippets' => [[['_route' => 'snippets'], null, null, null, false, false, null]],
        '/teams' => [[['_route' => 'teams'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'user'], null, null, null, false, false, null]],
        '/user/emails' => [[['_route' => 'user_emails'], null, null, null, false, false, null]],
        '/user/permissions/repositories' => [[['_route' => 'user_permissions_repositories'], null, null, null, false, false, null]],
        '/user/permissions/teams' => [[['_route' => 'user_permissions_teams'], null, null, null, false, false, null]],
        '/user/permissions/workspaces' => [[['_route' => 'user_permissions_workspaces'], null, null, null, false, false, null]],
        '/workspaces' => [[['_route' => 'workspaces'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/addon/linkers/([^/]++)(?'
                    .'|(*:33)'
                    .'|/values(?'
                        .'|(*:50)'
                        .'|/([^/]++)(*:66)'
                    .')'
                .')'
                .'|/hook_events/([^/]++)(*:96)'
                .'|/pullrequests/([^/]++)(*:125)'
                .'|/repositories/([^/]++)(?'
                    .'|(*:158)'
                    .'|/([^/]++)(?'
                        .'|(*:178)'
                        .'|/(?'
                            .'|branch(?'
                                .'|\\-restrictions(?'
                                    .'|(*:216)'
                                    .'|/([^/]++)(*:233)'
                                .')'
                                .'|ing\\-model(?'
                                    .'|(*:255)'
                                    .'|/settings(*:272)'
                                .')'
                            .')'
                            .'|com(?'
                                .'|mit(?'
                                    .'|/([^/]++)(?'
                                        .'|(*:306)'
                                        .'|/(?'
                                            .'|approve(*:325)'
                                            .'|comments(?'
                                                .'|(*:344)'
                                                .'|/([^/]++)(*:361)'
                                            .')'
                                            .'|p(?'
                                                .'|roperties/([^/]++)/([^/]++)(*:401)'
                                                .'|ullrequests(*:420)'
                                            .')'
                                            .'|reports(?'
                                                .'|(*:439)'
                                                .'|/([^/]++)(?'
                                                    .'|(*:459)'
                                                    .'|/annotations(?'
                                                        .'|(*:482)'
                                                        .'|/([^/]++)(*:499)'
                                                    .')'
                                                .')'
                                            .')'
                                            .'|statuses(?'
                                                .'|(*:521)'
                                                .'|/build(?'
                                                    .'|(*:538)'
                                                    .'|/([^/]++)(*:555)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                    .'|s(?'
                                        .'|(*:571)'
                                        .'|/([^/]++)(*:588)'
                                    .')'
                                .')'
                                .'|ponents(?'
                                    .'|(*:608)'
                                    .'|/([^/]++)(*:625)'
                                .')'
                            .')'
                            .'|d(?'
                                .'|e(?'
                                    .'|fault\\-reviewers(?'
                                        .'|(*:662)'
                                        .'|/([^/]++)(*:679)'
                                    .')'
                                    .'|ploy(?'
                                        .'|\\-keys(?'
                                            .'|(*:704)'
                                            .'|/([^/]++)(*:721)'
                                        .')'
                                        .'|ments(?'
                                            .'|(*:738)'
                                            .'|/([^/]++)(*:755)'
                                            .'|_config/environments/([^/]++)/variables(?'
                                                .'|(*:805)'
                                                .'|/([^/]++)(*:822)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                                .'|iff(?'
                                    .'|/([^/]++)(*:849)'
                                    .'|stat/([^/]++)(*:870)'
                                .')'
                                .'|ownloads(?'
                                    .'|(*:890)'
                                    .'|/([^/]++)(*:907)'
                                .')'
                            .')'
                            .'|environments(?'
                                .'|(*:932)'
                                .'|/([^/]++)(?'
                                    .'|(*:952)'
                                    .'|/changes(*:968)'
                                .')'
                            .')'
                            .'|f(?'
                                .'|ilehistory/([^/]++)/([^/]++)(*:1010)'
                                .'|orks(*:1023)'
                            .')'
                            .'|hooks(?'
                                .'|(*:1041)'
                                .'|/([^/]++)(*:1059)'
                            .')'
                            .'|issues(?'
                                .'|(*:1078)'
                                .'|/(?'
                                    .'|export(?'
                                        .'|(*:1100)'
                                        .'|/([^/\\-]++)\\-issues\\-([^/\\.]++)\\.zip(*:1145)'
                                    .')'
                                    .'|import(*:1161)'
                                    .'|([^/]++)(?'
                                        .'|(*:1181)'
                                        .'|/(?'
                                            .'|attachments(?'
                                                .'|(*:1208)'
                                                .'|/([^/]++)(*:1226)'
                                            .')'
                                            .'|c(?'
                                                .'|hanges(?'
                                                    .'|(*:1249)'
                                                    .'|/([^/]++)(*:1267)'
                                                .')'
                                                .'|omments(?'
                                                    .'|(*:1287)'
                                                    .'|/([^/]++)(*:1305)'
                                                .')'
                                            .')'
                                            .'|vote(*:1320)'
                                            .'|watch(*:1334)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|m(?'
                                .'|erge\\-base/([^/]++)(*:1370)'
                                .'|ilestones(?'
                                    .'|(*:1391)'
                                    .'|/([^/]++)(*:1409)'
                                .')'
                            .')'
                            .'|p(?'
                                .'|atch/([^/]++)(*:1437)'
                                .'|ipelines(?'
                                    .'|\\-config/caches(?'
                                        .'|(*:1475)'
                                        .'|/([^/]++)(?'
                                            .'|(*:1496)'
                                            .'|/content\\-uri(*:1518)'
                                        .')'
                                    .')'
                                    .'|(*:1529)'
                                    .'|/([^/]++)(?'
                                        .'|(*:1550)'
                                        .'|/st(?'
                                            .'|eps(?'
                                                .'|(*:1571)'
                                                .'|/([^/]++)(?'
                                                    .'|(*:1592)'
                                                    .'|/(?'
                                                        .'|log(?'
                                                            .'|(*:1611)'
                                                            .'|s/([^/]++)(*:1630)'
                                                        .')'
                                                        .'|test_reports(?'
                                                            .'|(*:1655)'
                                                            .'|/test_cases(?'
                                                                .'|(*:1678)'
                                                                .'|/([^/]++)/test_case_reasons(*:1714)'
                                                            .')'
                                                        .')'
                                                    .')'
                                                .')'
                                            .')'
                                            .'|opPipeline(*:1738)'
                                        .')'
                                    .')'
                                    .'|_config(?'
                                        .'|(*:1759)'
                                        .'|/(?'
                                            .'|build_number(*:1784)'
                                            .'|s(?'
                                                .'|chedules(?'
                                                    .'|(*:1808)'
                                                    .'|/([^/]++)(?'
                                                        .'|(*:1829)'
                                                        .'|/executions(*:1849)'
                                                    .')'
                                                .')'
                                                .'|sh/k(?'
                                                    .'|ey_pair(*:1874)'
                                                    .'|nown_hosts(?'
                                                        .'|(*:1896)'
                                                        .'|/([^/]++)(*:1914)'
                                                    .')'
                                                .')'
                                            .')'
                                            .'|variables(?'
                                                .'|(*:1938)'
                                                .'|/([^/]++)(*:1956)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                                .'|roperties/([^/]++)/([^/]++)(*:1996)'
                                .'|ullrequests(?'
                                    .'|(*:2019)'
                                    .'|/(?'
                                        .'|activity(*:2040)'
                                        .'|([^/]++)(?'
                                            .'|(*:2060)'
                                            .'|/(?'
                                                .'|a(?'
                                                    .'|ctivity(*:2084)'
                                                    .'|pprove(*:2099)'
                                                .')'
                                                .'|comm(?'
                                                    .'|ents(?'
                                                        .'|(*:2123)'
                                                        .'|/([^/]++)(*:2141)'
                                                    .')'
                                                    .'|its(*:2154)'
                                                .')'
                                                .'|d(?'
                                                    .'|ecline(*:2174)'
                                                    .'|iff(?'
                                                        .'|(*:2189)'
                                                        .'|stat(*:2202)'
                                                    .')'
                                                .')'
                                                .'|merge(?'
                                                    .'|(*:2221)'
                                                    .'|/task\\-status/([^/]++)(*:2252)'
                                                .')'
                                                .'|p(?'
                                                    .'|atch(*:2270)'
                                                    .'|roperties/([^/]++)/([^/]++)(*:2306)'
                                                .')'
                                                .'|request\\-changes(*:2332)'
                                                .'|statuses(*:2349)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|refs(?'
                                .'|(*:2370)'
                                .'|/(?'
                                    .'|branches(?'
                                        .'|(*:2394)'
                                        .'|/([^/]++)(*:2412)'
                                    .')'
                                    .'|tags(?'
                                        .'|(*:2429)'
                                        .'|/([^/]++)(*:2447)'
                                    .')'
                                .')'
                            .')'
                            .'|src(?'
                                .'|(*:2465)'
                                .'|/([^/]++)/([^/]++)(*:2492)'
                            .')'
                            .'|versions(?'
                                .'|(*:2513)'
                                .'|/([^/]++)(*:2531)'
                            .')'
                            .'|watchers(*:2549)'
                        .')'
                    .')'
                .')'
                .'|/snippets/([^/]++)(?'
                    .'|(*:2582)'
                    .'|/([^/]++)(?'
                        .'|(*:2603)'
                        .'|/(?'
                            .'|comm(?'
                                .'|ents(?'
                                    .'|(*:2630)'
                                    .'|/([^/]++)(*:2648)'
                                .')'
                                .'|its(?'
                                    .'|(*:2664)'
                                    .'|/([^/]++)(*:2682)'
                                .')'
                            .')'
                            .'|files/([^/]++)(*:2707)'
                            .'|watch(?'
                                .'|(*:2724)'
                                .'|ers(*:2736)'
                            .')'
                            .'|([^/]++)(?'
                                .'|(*:2757)'
                                .'|/(?'
                                    .'|files/([^/]++)(*:2784)'
                                    .'|diff(*:2797)'
                                    .'|patch(*:2811)'
                                .')'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/teams/([^/]++)(?'
                    .'|(*:2843)'
                    .'|/(?'
                        .'|follow(?'
                            .'|ers(*:2868)'
                            .'|ing(*:2880)'
                        .')'
                        .'|hooks(?'
                            .'|(*:2898)'
                            .'|/([^/]++)(*:2916)'
                        .')'
                        .'|members(*:2933)'
                        .'|p(?'
                            .'|ermissions(?'
                                .'|(*:2959)'
                                .'|/repositories(?'
                                    .'|(*:2984)'
                                    .'|/([^/]++)(*:3002)'
                                .')'
                            .')'
                            .'|ipelines_config/variables(?'
                                .'|(*:3041)'
                                .'|/([^/]++)(*:3059)'
                            .')'
                            .'|rojects(?'
                                .'|(*:3079)'
                                .'|/([^/]++)(*:3097)'
                            .')'
                        .')'
                        .'|search/code(*:3119)'
                        .'|repositories(*:3140)'
                    .')'
                .')'
                .'|/user(?'
                    .'|/emails/([^/]++)(*:3175)'
                    .'|s/([^/]++)(?'
                        .'|(*:3197)'
                        .'|/(?'
                            .'|hooks(?'
                                .'|(*:3218)'
                                .'|/([^/]++)(*:3236)'
                            .')'
                            .'|p(?'
                                .'|ipelines_config/variables(?'
                                    .'|(*:3278)'
                                    .'|/([^/]++)(*:3296)'
                                .')'
                                .'|roperties/([^/]++)/([^/]++)(*:3333)'
                            .')'
                            .'|s(?'
                                .'|earch/code(*:3357)'
                                .'|sh\\-keys(?'
                                    .'|(*:3377)'
                                    .'|/([^/]++)(*:3395)'
                                .')'
                            .')'
                            .'|members(*:3413)'
                            .'|repositories(*:3434)'
                        .')'
                    .')'
                .')'
                .'|/workspaces/([^/]++)(?'
                    .'|(*:3469)'
                    .'|/(?'
                        .'|hooks(?'
                            .'|(*:3490)'
                            .'|/([^/]++)(*:3508)'
                        .')'
                        .'|members(?'
                            .'|(*:3528)'
                            .'|/([^/]++)(*:3546)'
                        .')'
                        .'|p(?'
                            .'|ermissions(?'
                                .'|(*:3573)'
                                .'|/repositories(?'
                                    .'|(*:3598)'
                                    .'|/([^/]++)(*:3616)'
                                .')'
                            .')'
                            .'|ipelines\\-config/(?'
                                .'|identity/oidc/(?'
                                    .'|\\.well\\-known/openid\\-configuration(*:3699)'
                                    .'|keys\\.json(*:3718)'
                                .')'
                                .'|variables(?'
                                    .'|(*:3740)'
                                    .'|/([^/]++)(*:3758)'
                                .')'
                            .')'
                            .'|rojects(?'
                                .'|(*:3779)'
                                .'|/([^/]++)(*:3797)'
                            .')'
                        .')'
                        .'|search/code(*:3819)'
                    .')'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        33 => [[['_route' => 'addon_linkers_linker_key'], ['linker_key'], null, null, false, true, null]],
        50 => [[['_route' => 'addon_linkers_linker_key_values'], ['linker_key'], null, null, false, false, null]],
        66 => [[['_route' => 'addon_linkers_linker_key_values_value_id'], ['linker_key', 'value_id'], null, null, false, true, null]],
        96 => [[['_route' => 'hook_events_subject_type'], ['subject_type'], null, null, false, true, null]],
        125 => [[['_route' => 'pullrequests_selected_user'], ['selected_user'], null, null, false, true, null]],
        158 => [[['_route' => 'repositories_workspace'], ['workspace'], null, null, false, true, null]],
        178 => [[['_route' => 'repositories_workspace_repo_slug'], ['workspace', 'repo_slug'], null, null, false, true, null]],
        216 => [[['_route' => 'repositories_workspace_repo_slug_branch_restrictions'], ['workspace', 'repo_slug'], null, null, false, false, null]],
        233 => [[['_route' => 'repositories_workspace_repo_slug_branch_restrictions_id'], ['workspace', 'repo_slug', 'id'], null, null, false, true, null]],
        255 => [[['_route' => 'repositories_workspace_repo_slug_branching_model'], ['workspace', 'repo_slug'], null, null, false, false, null]],
        272 => [[['_route' => 'repositories_workspace_repo_slug_branching_model_settings'], ['workspace', 'repo_slug'], null, null, false, false, null]],
        306 => [[['_route' => 'repositories_workspace_repo_slug_commit_commit'], ['workspace', 'repo_slug', 'commit'], null, null, false, true, null]],
        325 => [[['_route' => 'repositories_workspace_repo_slug_commit_commit_approve'], ['workspace', 'repo_slug', 'commit'], null, null, false, false, null]],
        344 => [[['_route' => 'repositories_workspace_repo_slug_commit_commit_comments'], ['workspace', 'repo_slug', 'commit'], null, null, false, false, null]],
        361 => [[['_route' => 'repositories_workspace_repo_slug_commit_commit_comments_comment_id'], ['workspace', 'repo_slug', 'commit', 'comment_id'], null, null, false, true, null]],
        401 => [[['_route' => 'repositories_workspace_repo_slug_commit_commit_properties_app_key_property_name'], ['workspace', 'repo_slug', 'commit', 'app_key', 'property_name'], null, null, false, true, null]],
        420 => [[['_route' => 'repositories_workspace_repo_slug_commit_commit_pullrequests'], ['workspace', 'repo_slug', 'commit'], null, null, false, false, null]],
        439 => [[['_route' => 'repositories_workspace_repo_slug_commit_commit_reports'], ['workspace', 'repo_slug', 'commit'], null, null, false, false, null]],
        459 => [[['_route' => 'repositories_workspace_repo_slug_commit_commit_reports_reportId'], ['workspace', 'repo_slug', 'commit', 'reportId'], null, null, false, true, null]],
        482 => [[['_route' => 'repositories_workspace_repo_slug_commit_commit_reports_reportId_annotations'], ['workspace', 'repo_slug', 'commit', 'reportId'], null, null, false, false, null]],
        499 => [[['_route' => 'repositories_workspace_repo_slug_commit_commit_reports_reportId_annotations_annotationId'], ['workspace', 'repo_slug', 'commit', 'reportId', 'annotationId'], null, null, false, true, null]],
        521 => [[['_route' => 'repositories_workspace_repo_slug_commit_commit_statuses'], ['workspace', 'repo_slug', 'commit'], null, null, false, false, null]],
        538 => [[['_route' => 'repositories_workspace_repo_slug_commit_commit_statuses_build'], ['workspace', 'repo_slug', 'commit'], null, null, false, false, null]],
        555 => [[['_route' => 'repositories_workspace_repo_slug_commit_commit_statuses_build_key'], ['workspace', 'repo_slug', 'commit', 'key'], null, null, false, true, null]],
        571 => [[['_route' => 'repositories_workspace_repo_slug_commits'], ['workspace', 'repo_slug'], null, null, false, false, null]],
        588 => [[['_route' => 'repositories_workspace_repo_slug_commits_revision'], ['workspace', 'repo_slug', 'revision'], null, null, false, true, null]],
        608 => [[['_route' => 'repositories_workspace_repo_slug_components'], ['workspace', 'repo_slug'], null, null, false, false, null]],
        625 => [[['_route' => 'repositories_workspace_repo_slug_components_component_id'], ['workspace', 'repo_slug', 'component_id'], null, null, false, true, null]],
        662 => [[['_route' => 'repositories_workspace_repo_slug_default_reviewers'], ['workspace', 'repo_slug'], null, null, false, false, null]],
        679 => [[['_route' => 'repositories_workspace_repo_slug_default_reviewers_target_username'], ['workspace', 'repo_slug', 'target_username'], null, null, false, true, null]],
        704 => [[['_route' => 'repositories_workspace_repo_slug_deploy_keys'], ['workspace', 'repo_slug'], null, null, false, false, null]],
        721 => [[['_route' => 'repositories_workspace_repo_slug_deploy_keys_key_id'], ['workspace', 'repo_slug', 'key_id'], null, null, false, true, null]],
        738 => [[['_route' => 'repositories_workspace_repo_slug_deployments'], ['workspace', 'repo_slug'], null, null, true, false, null]],
        755 => [[['_route' => 'repositories_workspace_repo_slug_deployments_deployment_uuid'], ['workspace', 'repo_slug', 'deployment_uuid'], null, null, false, true, null]],
        805 => [[['_route' => 'repositories_workspace_repo_slug_deployments_config_environments_environment_uuid_variables'], ['workspace', 'repo_slug', 'environment_uuid'], null, null, false, false, null]],
        822 => [[['_route' => 'repositories_workspace_repo_slug_deployments_config_environments_environment_uuid_variables_variable_uuid'], ['workspace', 'repo_slug', 'environment_uuid', 'variable_uuid'], null, null, false, true, null]],
        849 => [[['_route' => 'repositories_workspace_repo_slug_diff_spec'], ['workspace', 'repo_slug', 'spec'], null, null, false, true, null]],
        870 => [[['_route' => 'repositories_workspace_repo_slug_diffstat_spec'], ['workspace', 'repo_slug', 'spec'], null, null, false, true, null]],
        890 => [[['_route' => 'repositories_workspace_repo_slug_downloads'], ['workspace', 'repo_slug'], null, null, false, false, null]],
        907 => [[['_route' => 'repositories_workspace_repo_slug_downloads_filename'], ['workspace', 'repo_slug', 'filename'], null, null, false, true, null]],
        932 => [[['_route' => 'repositories_workspace_repo_slug_environments'], ['workspace', 'repo_slug'], null, null, true, false, null]],
        952 => [[['_route' => 'repositories_workspace_repo_slug_environments_environment_uuid'], ['workspace', 'repo_slug', 'environment_uuid'], null, null, false, true, null]],
        968 => [[['_route' => 'repositories_workspace_repo_slug_environments_environment_uuid_changes'], ['workspace', 'repo_slug', 'environment_uuid'], null, null, true, false, null]],
        1010 => [[['_route' => 'repositories_workspace_repo_slug_filehistory_commit_path'], ['workspace', 'repo_slug', 'commit', 'path'], null, null, false, true, null]],
        1023 => [[['_route' => 'repositories_workspace_repo_slug_forks'], ['workspace', 'repo_slug'], null, null, false, false, null]],
        1041 => [[['_route' => 'repositories_workspace_repo_slug_hooks'], ['workspace', 'repo_slug'], null, null, false, false, null]],
        1059 => [[['_route' => 'repositories_workspace_repo_slug_hooks_uid'], ['workspace', 'repo_slug', 'uid'], null, null, false, true, null]],
        1078 => [[['_route' => 'repositories_workspace_repo_slug_issues'], ['workspace', 'repo_slug'], null, null, false, false, null]],
        1100 => [[['_route' => 'repositories_workspace_repo_slug_issues_export'], ['workspace', 'repo_slug'], null, null, false, false, null]],
        1145 => [[['_route' => 'repositories_workspace_repo_slug_issues_export_repo_name_issues_task_id_zip'], ['workspace', 'repo_slug', 'repo_name', 'task_id'], null, null, false, false, null]],
        1161 => [[['_route' => 'repositories_workspace_repo_slug_issues_import'], ['workspace', 'repo_slug'], null, null, false, false, null]],
        1181 => [[['_route' => 'repositories_workspace_repo_slug_issues_issue_id'], ['workspace', 'repo_slug', 'issue_id'], null, null, false, true, null]],
        1208 => [[['_route' => 'repositories_workspace_repo_slug_issues_issue_id_attachments'], ['workspace', 'repo_slug', 'issue_id'], null, null, false, false, null]],
        1226 => [[['_route' => 'repositories_workspace_repo_slug_issues_issue_id_attachments_path'], ['workspace', 'repo_slug', 'issue_id', 'path'], null, null, false, true, null]],
        1249 => [[['_route' => 'repositories_workspace_repo_slug_issues_issue_id_changes'], ['workspace', 'repo_slug', 'issue_id'], null, null, false, false, null]],
        1267 => [[['_route' => 'repositories_workspace_repo_slug_issues_issue_id_changes_change_id'], ['workspace', 'repo_slug', 'issue_id', 'change_id'], null, null, false, true, null]],
        1287 => [[['_route' => 'repositories_workspace_repo_slug_issues_issue_id_comments'], ['workspace', 'repo_slug', 'issue_id'], null, null, false, false, null]],
        1305 => [[['_route' => 'repositories_workspace_repo_slug_issues_issue_id_comments_comment_id'], ['workspace', 'repo_slug', 'issue_id', 'comment_id'], null, null, false, true, null]],
        1320 => [[['_route' => 'repositories_workspace_repo_slug_issues_issue_id_vote'], ['workspace', 'repo_slug', 'issue_id'], null, null, false, false, null]],
        1334 => [[['_route' => 'repositories_workspace_repo_slug_issues_issue_id_watch'], ['workspace', 'repo_slug', 'issue_id'], null, null, false, false, null]],
        1370 => [[['_route' => 'repositories_workspace_repo_slug_merge_base_revspec'], ['workspace', 'repo_slug', 'revspec'], null, null, false, true, null]],
        1391 => [[['_route' => 'repositories_workspace_repo_slug_milestones'], ['workspace', 'repo_slug'], null, null, false, false, null]],
        1409 => [[['_route' => 'repositories_workspace_repo_slug_milestones_milestone_id'], ['workspace', 'repo_slug', 'milestone_id'], null, null, false, true, null]],
        1437 => [[['_route' => 'repositories_workspace_repo_slug_patch_spec'], ['workspace', 'repo_slug', 'spec'], null, null, false, true, null]],
        1475 => [[['_route' => 'repositories_workspace_repo_slug_pipelines_config_caches'], ['workspace', 'repo_slug'], null, null, true, false, null]],
        1496 => [[['_route' => 'repositories_workspace_repo_slug_pipelines_config_caches_cache_uuid'], ['workspace', 'repo_slug', 'cache_uuid'], null, null, false, true, null]],
        1518 => [[['_route' => 'repositories_workspace_repo_slug_pipelines_config_caches_cache_uuid_content_uri'], ['workspace', 'repo_slug', 'cache_uuid'], null, null, false, false, null]],
        1529 => [[['_route' => 'repositories_workspace_repo_slug_pipelines'], ['workspace', 'repo_slug'], null, null, true, false, null]],
        1550 => [[['_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid'], ['workspace', 'repo_slug', 'pipeline_uuid'], null, null, false, true, null]],
        1571 => [[['_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps'], ['workspace', 'repo_slug', 'pipeline_uuid'], null, null, true, false, null]],
        1592 => [[['_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps_step_uuid'], ['workspace', 'repo_slug', 'pipeline_uuid', 'step_uuid'], null, null, false, true, null]],
        1611 => [[['_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps_step_uuid_log'], ['workspace', 'repo_slug', 'pipeline_uuid', 'step_uuid'], null, null, false, false, null]],
        1630 => [[['_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps_step_uuid_logs_log_uuid'], ['workspace', 'repo_slug', 'pipeline_uuid', 'step_uuid', 'log_uuid'], null, null, false, true, null]],
        1655 => [[['_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps_step_uuid_test_reports'], ['workspace', 'repo_slug', 'pipeline_uuid', 'step_uuid'], null, null, false, false, null]],
        1678 => [[['_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps_step_uuid_test_reports_test_cases'], ['workspace', 'repo_slug', 'pipeline_uuid', 'step_uuid'], null, null, false, false, null]],
        1714 => [[['_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps_step_uuid_test_reports_test_cases_test_case_uuid_test_case_reasons'], ['workspace', 'repo_slug', 'pipeline_uuid', 'step_uuid', 'test_case_uuid'], null, null, false, false, null]],
        1738 => [[['_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_stopPipeline'], ['workspace', 'repo_slug', 'pipeline_uuid'], null, null, false, false, null]],
        1759 => [[['_route' => 'repositories_workspace_repo_slug_pipelines_config'], ['workspace', 'repo_slug'], null, null, false, false, null]],
        1784 => [[['_route' => 'repositories_workspace_repo_slug_pipelines_config_build_number'], ['workspace', 'repo_slug'], null, null, false, false, null]],
        1808 => [[['_route' => 'repositories_workspace_repo_slug_pipelines_config_schedules'], ['workspace', 'repo_slug'], null, null, true, false, null]],
        1829 => [[['_route' => 'repositories_workspace_repo_slug_pipelines_config_schedules_schedule_uuid'], ['workspace', 'repo_slug', 'schedule_uuid'], null, null, false, true, null]],
        1849 => [[['_route' => 'repositories_workspace_repo_slug_pipelines_config_schedules_schedule_uuid_executions'], ['workspace', 'repo_slug', 'schedule_uuid'], null, null, true, false, null]],
        1874 => [[['_route' => 'repositories_workspace_repo_slug_pipelines_config_ssh_key_pair'], ['workspace', 'repo_slug'], null, null, false, false, null]],
        1896 => [[['_route' => 'repositories_workspace_repo_slug_pipelines_config_ssh_known_hosts'], ['workspace', 'repo_slug'], null, null, true, false, null]],
        1914 => [[['_route' => 'repositories_workspace_repo_slug_pipelines_config_ssh_known_hosts_known_host_uuid'], ['workspace', 'repo_slug', 'known_host_uuid'], null, null, false, true, null]],
        1938 => [[['_route' => 'repositories_workspace_repo_slug_pipelines_config_variables'], ['workspace', 'repo_slug'], null, null, true, false, null]],
        1956 => [[['_route' => 'repositories_workspace_repo_slug_pipelines_config_variables_variable_uuid'], ['workspace', 'repo_slug', 'variable_uuid'], null, null, false, true, null]],
        1996 => [[['_route' => 'repositories_workspace_repo_slug_properties_app_key_property_name'], ['workspace', 'repo_slug', 'app_key', 'property_name'], null, null, false, true, null]],
        2019 => [[['_route' => 'repositories_workspace_repo_slug_pullrequests'], ['workspace', 'repo_slug'], null, null, false, false, null]],
        2040 => [[['_route' => 'repositories_workspace_repo_slug_pullrequests_activity'], ['workspace', 'repo_slug'], null, null, false, false, null]],
        2060 => [[['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id'], ['workspace', 'repo_slug', 'pull_request_id'], null, null, false, true, null]],
        2084 => [[['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_activity'], ['workspace', 'repo_slug', 'pull_request_id'], null, null, false, false, null]],
        2099 => [[['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_approve'], ['workspace', 'repo_slug', 'pull_request_id'], null, null, false, false, null]],
        2123 => [[['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_comments'], ['workspace', 'repo_slug', 'pull_request_id'], null, null, false, false, null]],
        2141 => [[['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_comments_comment_id'], ['workspace', 'repo_slug', 'pull_request_id', 'comment_id'], null, null, false, true, null]],
        2154 => [[['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_commits'], ['workspace', 'repo_slug', 'pull_request_id'], null, null, false, false, null]],
        2174 => [[['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_decline'], ['workspace', 'repo_slug', 'pull_request_id'], null, null, false, false, null]],
        2189 => [[['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_diff'], ['workspace', 'repo_slug', 'pull_request_id'], null, null, false, false, null]],
        2202 => [[['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_diffstat'], ['workspace', 'repo_slug', 'pull_request_id'], null, null, false, false, null]],
        2221 => [[['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_merge'], ['workspace', 'repo_slug', 'pull_request_id'], null, null, false, false, null]],
        2252 => [[['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_merge_task_status_task_id'], ['workspace', 'repo_slug', 'pull_request_id', 'task_id'], null, null, false, true, null]],
        2270 => [[['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_patch'], ['workspace', 'repo_slug', 'pull_request_id'], null, null, false, false, null]],
        2306 => [[['_route' => 'repositories_workspace_repo_slug_pullrequests_pullrequest_id_properties_app_key_property_name'], ['workspace', 'repo_slug', 'pullrequest_id', 'app_key', 'property_name'], null, null, false, true, null]],
        2332 => [[['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_request_changes'], ['workspace', 'repo_slug', 'pull_request_id'], null, null, false, false, null]],
        2349 => [[['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_statuses'], ['workspace', 'repo_slug', 'pull_request_id'], null, null, false, false, null]],
        2370 => [[['_route' => 'repositories_workspace_repo_slug_refs'], ['workspace', 'repo_slug'], null, null, false, false, null]],
        2394 => [[['_route' => 'repositories_workspace_repo_slug_refs_branches'], ['workspace', 'repo_slug'], null, null, false, false, null]],
        2412 => [[['_route' => 'repositories_workspace_repo_slug_refs_branches_name'], ['workspace', 'repo_slug', 'name'], null, null, false, true, null]],
        2429 => [[['_route' => 'repositories_workspace_repo_slug_refs_tags'], ['workspace', 'repo_slug'], null, null, false, false, null]],
        2447 => [[['_route' => 'repositories_workspace_repo_slug_refs_tags_name'], ['workspace', 'repo_slug', 'name'], null, null, false, true, null]],
        2465 => [[['_route' => 'repositories_workspace_repo_slug_src'], ['workspace', 'repo_slug'], null, null, false, false, null]],
        2492 => [[['_route' => 'repositories_workspace_repo_slug_src_commit_path'], ['workspace', 'repo_slug', 'commit', 'path'], null, null, false, true, null]],
        2513 => [[['_route' => 'repositories_workspace_repo_slug_versions'], ['workspace', 'repo_slug'], null, null, false, false, null]],
        2531 => [[['_route' => 'repositories_workspace_repo_slug_versions_version_id'], ['workspace', 'repo_slug', 'version_id'], null, null, false, true, null]],
        2549 => [[['_route' => 'repositories_workspace_repo_slug_watchers'], ['workspace', 'repo_slug'], null, null, false, false, null]],
        2582 => [[['_route' => 'snippets_workspace'], ['workspace'], null, null, false, true, null]],
        2603 => [[['_route' => 'snippets_workspace_encoded_id'], ['workspace', 'encoded_id'], null, null, false, true, null]],
        2630 => [[['_route' => 'snippets_workspace_encoded_id_comments'], ['workspace', 'encoded_id'], null, null, false, false, null]],
        2648 => [[['_route' => 'snippets_workspace_encoded_id_comments_comment_id'], ['workspace', 'encoded_id', 'comment_id'], null, null, false, true, null]],
        2664 => [[['_route' => 'snippets_workspace_encoded_id_commits'], ['workspace', 'encoded_id'], null, null, false, false, null]],
        2682 => [[['_route' => 'snippets_workspace_encoded_id_commits_revision'], ['workspace', 'encoded_id', 'revision'], null, null, false, true, null]],
        2707 => [[['_route' => 'snippets_workspace_encoded_id_files_path'], ['workspace', 'encoded_id', 'path'], null, null, false, true, null]],
        2724 => [[['_route' => 'snippets_workspace_encoded_id_watch'], ['workspace', 'encoded_id'], null, null, false, false, null]],
        2736 => [[['_route' => 'snippets_workspace_encoded_id_watchers'], ['workspace', 'encoded_id'], null, null, false, false, null]],
        2757 => [[['_route' => 'snippets_workspace_encoded_id_node_id'], ['workspace', 'encoded_id', 'node_id'], null, null, false, true, null]],
        2784 => [[['_route' => 'snippets_workspace_encoded_id_node_id_files_path'], ['workspace', 'encoded_id', 'node_id', 'path'], null, null, false, true, null]],
        2797 => [[['_route' => 'snippets_workspace_encoded_id_revision_diff'], ['workspace', 'encoded_id', 'revision'], null, null, false, false, null]],
        2811 => [[['_route' => 'snippets_workspace_encoded_id_revision_patch'], ['workspace', 'encoded_id', 'revision'], null, null, false, false, null]],
        2843 => [[['_route' => 'teams_username'], ['username'], null, null, false, true, null]],
        2868 => [[['_route' => 'teams_username_followers'], ['username'], null, null, false, false, null]],
        2880 => [[['_route' => 'teams_username_following'], ['username'], null, null, false, false, null]],
        2898 => [[['_route' => 'teams_username_hooks'], ['username'], null, null, false, false, null]],
        2916 => [[['_route' => 'teams_username_hooks_uid'], ['username', 'uid'], null, null, false, true, null]],
        2933 => [[['_route' => 'teams_username_members'], ['username'], null, null, false, false, null]],
        2959 => [[['_route' => 'teams_username_permissions'], ['username'], null, null, false, false, null]],
        2984 => [[['_route' => 'teams_username_permissions_repositories'], ['username'], null, null, false, false, null]],
        3002 => [[['_route' => 'teams_username_permissions_repositories_repo_slug'], ['username', 'repo_slug'], null, null, false, true, null]],
        3041 => [[['_route' => 'teams_username_pipelines_config_variables'], ['username'], null, null, true, false, null]],
        3059 => [[['_route' => 'teams_username_pipelines_config_variables_variable_uuid'], ['username', 'variable_uuid'], null, null, false, true, null]],
        3079 => [[['_route' => 'teams_username_projects'], ['username'], null, null, true, false, null]],
        3097 => [[['_route' => 'teams_username_projects_project_key'], ['username', 'project_key'], null, null, false, true, null]],
        3119 => [[['_route' => 'teams_username_search_code'], ['username'], null, null, false, false, null]],
        3140 => [[['_route' => 'teams_workspace_repositories'], ['workspace'], null, null, false, false, null]],
        3175 => [[['_route' => 'user_emails_email'], ['email'], null, null, false, true, null]],
        3197 => [[['_route' => 'users_selected_user'], ['selected_user'], null, null, false, true, null]],
        3218 => [[['_route' => 'users_selected_user_hooks'], ['selected_user'], null, null, false, false, null]],
        3236 => [[['_route' => 'users_selected_user_hooks_uid'], ['selected_user', 'uid'], null, null, false, true, null]],
        3278 => [[['_route' => 'users_selected_user_pipelines_config_variables'], ['selected_user'], null, null, true, false, null]],
        3296 => [[['_route' => 'users_selected_user_pipelines_config_variables_variable_uuid'], ['selected_user', 'variable_uuid'], null, null, false, true, null]],
        3333 => [[['_route' => 'users_selected_user_properties_app_key_property_name'], ['selected_user', 'app_key', 'property_name'], null, null, false, true, null]],
        3357 => [[['_route' => 'users_selected_user_search_code'], ['selected_user'], null, null, false, false, null]],
        3377 => [[['_route' => 'users_selected_user_ssh_keys'], ['selected_user'], null, null, false, false, null]],
        3395 => [[['_route' => 'users_selected_user_ssh_keys_key_id'], ['selected_user', 'key_id'], null, null, false, true, null]],
        3413 => [[['_route' => 'users_username_members'], ['username'], null, null, false, false, null]],
        3434 => [[['_route' => 'users_workspace_repositories'], ['workspace'], null, null, false, false, null]],
        3469 => [[['_route' => 'workspaces_workspace'], ['workspace'], null, null, false, true, null]],
        3490 => [[['_route' => 'workspaces_workspace_hooks'], ['workspace'], null, null, false, false, null]],
        3508 => [[['_route' => 'workspaces_workspace_hooks_uid'], ['workspace', 'uid'], null, null, false, true, null]],
        3528 => [[['_route' => 'workspaces_workspace_members'], ['workspace'], null, null, false, false, null]],
        3546 => [[['_route' => 'workspaces_workspace_members_member'], ['workspace', 'member'], null, null, false, true, null]],
        3573 => [[['_route' => 'workspaces_workspace_permissions'], ['workspace'], null, null, false, false, null]],
        3598 => [[['_route' => 'workspaces_workspace_permissions_repositories'], ['workspace'], null, null, false, false, null]],
        3616 => [[['_route' => 'workspaces_workspace_permissions_repositories_repo_slug'], ['workspace', 'repo_slug'], null, null, false, true, null]],
        3699 => [[['_route' => 'workspaces_workspace_pipelines_config_identity_oidc_well_known_openid_configuration'], ['workspace'], null, null, false, false, null]],
        3718 => [[['_route' => 'workspaces_workspace_pipelines_config_identity_oidc_keys_json'], ['workspace'], null, null, false, false, null]],
        3740 => [[['_route' => 'workspaces_workspace_pipelines_config_variables'], ['workspace'], null, null, false, false, null]],
        3758 => [[['_route' => 'workspaces_workspace_pipelines_config_variables_variable_uuid'], ['workspace', 'variable_uuid'], null, null, false, true, null]],
        3779 => [[['_route' => 'workspaces_workspace_projects'], ['workspace'], null, null, false, false, null]],
        3797 => [[['_route' => 'workspaces_workspace_projects_project_key'], ['workspace', 'project_key'], null, null, false, true, null]],
        3819 => [
            [['_route' => 'workspaces_workspace_search_code'], ['workspace'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
