<?php

namespace Ertuo\Lab;

use Ertuo\RouteGroup as Route;
use Ertuo\Lab\Benchmark_Bitbucket\Benchmark_Ertuo;

class Benchmark_Bitbucket_Ertuo_Array extends Benchmark_Ertuo
{
    function loadRoutes() : Route 
    {
        $routes = Route::add()
        ->group(function()
        {
            return array(
                'addon' => Route::add('', ['_route' => 'addon'])
                ->group(function()
                {
                    return array(
                        'linkers' => Route::add('', ['_route' => 'addon_linkers'])
                        ->rule('any', [], ['_route' => 'addon_linkers_linker_key'])
                        ->group(function()
                        {
                            return array(
                                 '' => Route::add()                                
                                ->group(function()
                                {
                                    return array(
                                        'values' => Route::add('', ['_route' => 'addon_linkers_linker_key_values'])
                                        ->rule('any', [], ['_route' => 'addon_linkers_linker_key_values_value_id']),

                                    );
                                }),
                            );
                        }),

                    );
                }),

                'hook_events' => Route::add('', ['_route' => 'hook_events'])
                ->rule('any', [], ['_route' => 'hook_events_subject_type']),

                'pullrequests' => Route::add('', ['_route' => 'pullrequests'])
                ->rule('any', [], ['_route' => 'pullrequests_selected_user']),

                'repositories' => Route::add('', ['_route' => 'repositories'])
                ->rule('any', [], ['_route' => 'repositories_workspace'])
                ->group(function()
                {
                    return array(
                         '' => Route::add()                        
                        ->rule('any', [], ['_route' => 'repositories_workspace_repo_slug'])
                        ->group(function()
                        {
                            return array(
                                 '' => Route::add()                                
                                ->group(function()
                                {
                                    return array(
                                        'branch-restrictions' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_branch_restrictions'])
                                        ->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_branch_restrictions_id']),

                                        'branching-model' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_branching_model'])
                                        ->group(function()
                                        {
                                            return array(
                                                'settings' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_branching_model_settings']),

                                            );
                                        }),

                                        'commit' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_commit'])
                                        ->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_commit_commit'])
                                        ->group(function()
                                        {
                                            return array(
                                                 '' => Route::add()                                                
                                                ->group(function()
                                                {
                                                    return array(
                                                        'approve' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_commit_commit_approve']),

                                                        'comments' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_commit_commit_comments'])
                                                        ->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_commit_commit_comments_comment_id']),

                                                        'properties' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_commit_commit_properties'])
                                                        ->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_commit_commit_properties_app_key'])
                                                        ->group(function()
                                                        {
                                                            return array(
                                                                 '' => Route::add()                                                                
                                                                ->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_commit_commit_properties_app_key_property_name']),
                                                            );
                                                        }),

                                                        'pullrequests' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_commit_commit_pullrequests']),

                                                        'reports' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_commit_commit_reports'])
                                                        ->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_commit_commit_reports_reportId'])
                                                        ->group(function()
                                                        {
                                                            return array(
                                                                 '' => Route::add()                                                                
                                                                ->group(function()
                                                                {
                                                                    return array(
                                                                        'annotations' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_commit_commit_reports_reportId_annotations'])
                                                                        ->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_commit_commit_reports_reportId_annotations_annotationId']),

                                                                    );
                                                                }),
                                                            );
                                                        }),

                                                        'statuses' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_commit_commit_statuses'])
                                                        ->group(function()
                                                        {
                                                            return array(
                                                                'build' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_commit_commit_statuses_build'])
                                                                ->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_commit_commit_statuses_build_key']),

                                                            );
                                                        }),

                                                    );
                                                }),
                                            );
                                        }),

                                        'commits' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_commits'])
                                        ->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_commits_revision']),

                                        'components' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_components'])
                                        ->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_components_component_id']),

                                        'default-reviewers' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_default_reviewers'])
                                        ->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_default_reviewers_target_username']),

                                        'deploy-keys' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_deploy_keys'])
                                        ->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_deploy_keys_key_id']),

                                        'deployments' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_deployments'])
                                        ->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_deployments_deployment_uuid']),

                                        'deployments_config' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_deployments_config'])
                                        ->group(function()
                                        {
                                            return array(
                                                'environments' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_deployments_config_environments'])
                                                ->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_deployments_config_environments_environment_uuid'])
                                                ->group(function()
                                                {
                                                    return array(
                                                         '' => Route::add()                                                        
                                                        ->group(function()
                                                        {
                                                            return array(
                                                                'variables' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_deployments_config_environments_environment_uuid_variables'])
                                                                ->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_deployments_config_environments_environment_uuid_variables_variable_uuid']),

                                                            );
                                                        }),
                                                    );
                                                }),

                                            );
                                        }),

                                        'diff' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_diff'])
                                        ->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_diff_spec']),

                                        'diffstat' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_diffstat'])
                                        ->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_diffstat_spec']),

                                        'downloads' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_downloads'])
                                        ->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_downloads_filename']),

                                        'environments' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_environments'])
                                        ->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_environments_environment_uuid'])
                                        ->group(function()
                                        {
                                            return array(
                                                 '' => Route::add()                                                
                                                ->group(function()
                                                {
                                                    return array(
                                                        'changes' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_environments_environment_uuid_changes']),

                                                    );
                                                }),
                                            );
                                        }),

                                        'filehistory' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_filehistory'])
                                        ->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_filehistory_commit'])
                                        ->group(function()
                                        {
                                            return array(
                                                 '' => Route::add()                                                
                                                ->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_filehistory_commit_path']),
                                            );
                                        }),

                                        'forks' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_forks']),

                                        'hooks' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_hooks'])
                                        ->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_hooks_uid']),

                                        'issues' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_issues'])
                                        ->group(function()
                                        {
                                            return array(
                                                'export' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_issues_export'])
                                                ->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_issues_export_repo_name_issues_task_id_zip']),

                                                'import' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_issues_import']),

                                            );
                                        })
                                        ->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_issues_issue_id'])
                                        ->group(function()
                                        {
                                            return array(
                                                 '' => Route::add()                                                
                                                ->group(function()
                                                {
                                                    return array(
                                                        'attachments' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_issues_issue_id_attachments'])
                                                        ->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_issues_issue_id_attachments_path']),

                                                        'changes' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_issues_issue_id_changes'])
                                                        ->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_issues_issue_id_changes_change_id']),

                                                        'comments' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_issues_issue_id_comments'])
                                                        ->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_issues_issue_id_comments_comment_id']),

                                                        'vote' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_issues_issue_id_vote']),

                                                        'watch' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_issues_issue_id_watch']),

                                                    );
                                                }),
                                            );
                                        }),

                                        'merge-base' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_merge_base'])
                                        ->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_merge_base_revspec']),

                                        'milestones' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_milestones'])
                                        ->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_milestones_milestone_id']),

                                        'patch' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_patch'])
                                        ->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_patch_spec']),

                                        'pipelines-config' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_pipelines_config'])
                                        ->group(function()
                                        {
                                            return array(
                                                'caches' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_pipelines_config_caches'])
                                                ->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_pipelines_config_caches_cache_uuid'])
                                                ->group(function()
                                                {
                                                    return array(
                                                         '' => Route::add()                                                        
                                                        ->group(function()
                                                        {
                                                            return array(
                                                                'content-uri' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_pipelines_config_caches_cache_uuid_content_uri']),

                                                            );
                                                        }),
                                                    );
                                                }),

                                            );
                                        }),

                                        'pipelines' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_pipelines'])
                                        ->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid'])
                                        ->group(function()
                                        {
                                            return array(
                                                 '' => Route::add()                                                
                                                ->group(function()
                                                {
                                                    return array(
                                                        'steps' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps'])
                                                        ->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps_step_uuid'])
                                                        ->group(function()
                                                        {
                                                            return array(
                                                                 '' => Route::add()                                                                
                                                                ->group(function()
                                                                {
                                                                    return array(
                                                                        'log' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps_step_uuid_log']),

                                                                        'logs' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps_step_uuid_logs'])
                                                                        ->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps_step_uuid_logs_log_uuid']),

                                                                        'test_reports' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps_step_uuid_test_reports'])
                                                                        ->group(function()
                                                                        {
                                                                            return array(
                                                                                'test_cases' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps_step_uuid_test_reports_test_cases'])
                                                                                ->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps_step_uuid_test_reports_test_cases_test_case_uuid'])
                                                                                ->group(function()
                                                                                {
                                                                                    return array(
                                                                                         '' => Route::add()                                                                                        
                                                                                        ->group(function()
                                                                                        {
                                                                                            return array(
                                                                                                'test_case_reasons' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps_step_uuid_test_reports_test_cases_test_case_uuid_test_case_reasons']),

                                                                                            );
                                                                                        }),
                                                                                    );
                                                                                }),

                                                                            );
                                                                        }),

                                                                    );
                                                                }),
                                                            );
                                                        }),

                                                        'stopPipeline' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_stopPipeline']),

                                                    );
                                                }),
                                            );
                                        }),

                                        'pipelines_config' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_pipelines_config'])
                                        ->group(function()
                                        {
                                            return array(
                                                'build_number' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_pipelines_config_build_number']),

                                                'schedules' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_pipelines_config_schedules'])
                                                ->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_pipelines_config_schedules_schedule_uuid'])
                                                ->group(function()
                                                {
                                                    return array(
                                                         '' => Route::add()                                                        
                                                        ->group(function()
                                                        {
                                                            return array(
                                                                'executions' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_pipelines_config_schedules_schedule_uuid_executions']),

                                                            );
                                                        }),
                                                    );
                                                }),

                                                'ssh' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_pipelines_config_ssh'])
                                                ->group(function()
                                                {
                                                    return array(
                                                        'key_pair' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_pipelines_config_ssh_key_pair']),

                                                        'known_hosts' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_pipelines_config_ssh_known_hosts'])
                                                        ->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_pipelines_config_ssh_known_hosts_known_host_uuid']),

                                                    );
                                                }),

                                                'variables' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_pipelines_config_variables'])
                                                ->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_pipelines_config_variables_variable_uuid']),

                                            );
                                        }),

                                        'properties' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_properties'])
                                        ->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_properties_app_key'])
                                        ->group(function()
                                        {
                                            return array(
                                                 '' => Route::add()                                                
                                                ->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_properties_app_key_property_name']),
                                            );
                                        }),

                                        'pullrequests' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_pullrequests'])
                                        ->group(function()
                                        {
                                            return array(
                                                'activity' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_pullrequests_activity']),

                                            );
                                        })
                                        ->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id'])
                                        ->group(function()
                                        {
                                            return array(
                                                 '' => Route::add()                                                
                                                ->group(function()
                                                {
                                                    return array(
                                                        'activity' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_activity']),

                                                        'approve' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_approve']),

                                                        'comments' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_comments'])
                                                        ->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_comments_comment_id']),

                                                        'commits' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_commits']),

                                                        'decline' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_decline']),

                                                        'diff' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_diff']),

                                                        'diffstat' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_diffstat']),

                                                        'merge' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_merge'])
                                                        ->group(function()
                                                        {
                                                            return array(
                                                                'task-status' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_merge_task_status'])
                                                                ->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_merge_task_status_task_id']),

                                                            );
                                                        }),

                                                        'patch' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_patch']),

                                                        'request-changes' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_request_changes']),

                                                        'statuses' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_statuses']),

                                                    );
                                                })                                                
                                                ->group(function()
                                                {
                                                    return array(
                                                        'properties' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_pullrequests_pullrequest_id_properties'])
                                                        ->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_pullrequests_pullrequest_id_properties_app_key'])
                                                        ->group(function()
                                                        {
                                                            return array(
                                                                 '' => Route::add()                                                                
                                                                ->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_pullrequests_pullrequest_id_properties_app_key_property_name']),
                                                            );
                                                        }),

                                                    );
                                                }),
                                            );
                                        }),

                                        'refs' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_refs'])
                                        ->group(function()
                                        {
                                            return array(
                                                'branches' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_refs_branches'])
                                                ->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_refs_branches_name']),

                                                'tags' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_refs_tags'])
                                                ->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_refs_tags_name']),

                                            );
                                        }),

                                        'src' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_src'])
                                        ->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_src_commit'])
                                        ->group(function()
                                        {
                                            return array(
                                                 '' => Route::add()                                                
                                                ->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_src_commit_path']),
                                            );
                                        }),

                                        'versions' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_versions'])
                                        ->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_versions_version_id']),

                                        'watchers' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_watchers']),

                                    );
                                }),
                            );
                        }),
                    );
                }),

                'snippets' => Route::add('', ['_route' => 'snippets'])
                ->rule('any', [], ['_route' => 'snippets_workspace'])
                ->group(function()
                {
                    return array(
                         '' => Route::add()                        
                        ->rule('any', [], ['_route' => 'snippets_workspace_encoded_id'])
                        ->group(function()
                        {
                            return array(
                                 '' => Route::add()                                
                                ->group(function()
                                {
                                    return array(
                                        'comments' => Route::add('', ['_route' => 'snippets_workspace_encoded_id_comments'])
                                        ->rule('any', [], ['_route' => 'snippets_workspace_encoded_id_comments_comment_id']),

                                        'commits' => Route::add('', ['_route' => 'snippets_workspace_encoded_id_commits'])
                                        ->rule('any', [], ['_route' => 'snippets_workspace_encoded_id_commits_revision']),

                                        'files' => Route::add('', ['_route' => 'snippets_workspace_encoded_id_files'])
                                        ->rule('any', [], ['_route' => 'snippets_workspace_encoded_id_files_path']),

                                        'watch' => Route::add('', ['_route' => 'snippets_workspace_encoded_id_watch']),

                                        'watchers' => Route::add('', ['_route' => 'snippets_workspace_encoded_id_watchers']),

                                    );
                                })
                                ->rule('any', [], ['_route' => 'snippets_workspace_encoded_id_node_id'])
                                ->group(function()
                                {
                                    return array(
                                         '' => Route::add()                                        
                                        ->group(function()
                                        {
                                            return array(
                                                'files' => Route::add('', ['_route' => 'snippets_workspace_encoded_id_node_id_files'])
                                                ->rule('any', [], ['_route' => 'snippets_workspace_encoded_id_node_id_files_path']),

                                            );
                                        })                                        
                                        ->group(function()
                                        {
                                            return array(
                                                'diff' => Route::add('', ['_route' => 'snippets_workspace_encoded_id_revision_diff']),

                                                'patch' => Route::add('', ['_route' => 'snippets_workspace_encoded_id_revision_patch']),

                                            );
                                        }),
                                    );
                                }),
                            );
                        }),
                    );
                }),

                'teams' => Route::add('', ['_route' => 'teams'])
                ->rule('any', [], ['_route' => 'teams_username'])
                ->group(function()
                {
                    return array(
                         '' => Route::add()                        
                        ->group(function()
                        {
                            return array(
                                'followers' => Route::add('', ['_route' => 'teams_username_followers']),

                                'following' => Route::add('', ['_route' => 'teams_username_following']),

                                'hooks' => Route::add('', ['_route' => 'teams_username_hooks'])
                                ->rule('any', [], ['_route' => 'teams_username_hooks_uid']),

                                'members' => Route::add('', ['_route' => 'teams_username_members']),

                                'permissions' => Route::add('', ['_route' => 'teams_username_permissions'])
                                ->group(function()
                                {
                                    return array(
                                        'repositories' => Route::add('', ['_route' => 'teams_username_permissions_repositories'])
                                        ->rule('any', [], ['_route' => 'teams_username_permissions_repositories_repo_slug']),

                                    );
                                }),

                                'pipelines_config' => Route::add('', ['_route' => 'teams_username_pipelines_config'])
                                ->group(function()
                                {
                                    return array(
                                        'variables' => Route::add('', ['_route' => 'teams_username_pipelines_config_variables'])
                                        ->rule('any', [], ['_route' => 'teams_username_pipelines_config_variables_variable_uuid']),

                                    );
                                }),

                                'projects' => Route::add('', ['_route' => 'teams_username_projects'])
                                ->rule('any', [], ['_route' => 'teams_username_projects_project_key']),

                                'search' => Route::add('', ['_route' => 'teams_username_search'])
                                ->group(function()
                                {
                                    return array(
                                        'code' => Route::add('', ['_route' => 'teams_username_search_code']),

                                    );
                                }),

                            );
                        })                        
                        ->group(function()
                        {
                            return array(
                                'repositories' => Route::add('', ['_route' => 'teams_workspace_repositories']),

                            );
                        }),
                    );
                }),

                'user' => Route::add('', ['_route' => 'user'])
                ->group(function()
                {
                    return array(
                        'emails' => Route::add('', ['_route' => 'user_emails'])
                        ->rule('any', [], ['_route' => 'user_emails_email']),

                        'permissions' => Route::add('', ['_route' => 'user_permissions'])
                        ->group(function()
                        {
                            return array(
                                'repositories' => Route::add('', ['_route' => 'user_permissions_repositories']),

                                'teams' => Route::add('', ['_route' => 'user_permissions_teams']),

                                'workspaces' => Route::add('', ['_route' => 'user_permissions_workspaces']),

                            );
                        }),

                    );
                }),

                'users' => Route::add('', ['_route' => 'users'])
                ->rule('any', [], ['_route' => 'users_selected_user'])
                ->group(function()
                {
                    return array(
                         '' => Route::add()                        
                        ->group(function()
                        {
                            return array(
                                'hooks' => Route::add('', ['_route' => 'users_selected_user_hooks'])
                                ->rule('any', [], ['_route' => 'users_selected_user_hooks_uid']),

                                'pipelines_config' => Route::add('', ['_route' => 'users_selected_user_pipelines_config'])
                                ->group(function()
                                {
                                    return array(
                                        'variables' => Route::add('', ['_route' => 'users_selected_user_pipelines_config_variables'])
                                        ->rule('any', [], ['_route' => 'users_selected_user_pipelines_config_variables_variable_uuid']),

                                    );
                                }),

                                'properties' => Route::add('', ['_route' => 'users_selected_user_properties'])
                                ->rule('any', [], ['_route' => 'users_selected_user_properties_app_key'])
                                ->group(function()
                                {
                                    return array(
                                         '' => Route::add()                                        
                                        ->rule('any', [], ['_route' => 'users_selected_user_properties_app_key_property_name']),
                                    );
                                }),

                                'search' => Route::add('', ['_route' => 'users_selected_user_search'])
                                ->group(function()
                                {
                                    return array(
                                        'code' => Route::add('', ['_route' => 'users_selected_user_search_code']),

                                    );
                                }),

                                'ssh-keys' => Route::add('', ['_route' => 'users_selected_user_ssh_keys'])
                                ->rule('any', [], ['_route' => 'users_selected_user_ssh_keys_key_id']),

                            );
                        })                        
                        ->group(function()
                        {
                            return array(
                                'members' => Route::add('', ['_route' => 'users_username_members']),

                            );
                        })                        
                        ->group(function()
                        {
                            return array(
                                'repositories' => Route::add('', ['_route' => 'users_workspace_repositories']),

                            );
                        }),
                    );
                }),

                'workspaces' => Route::add('', ['_route' => 'workspaces'])
                ->rule('any', [], ['_route' => 'workspaces_workspace'])
                ->group(function()
                {
                    return array(
                         '' => Route::add()                        
                        ->group(function()
                        {
                            return array(
                                'hooks' => Route::add('', ['_route' => 'workspaces_workspace_hooks'])
                                ->rule('any', [], ['_route' => 'workspaces_workspace_hooks_uid']),

                                'members' => Route::add('', ['_route' => 'workspaces_workspace_members'])
                                ->rule('any', [], ['_route' => 'workspaces_workspace_members_member']),

                                'permissions' => Route::add('', ['_route' => 'workspaces_workspace_permissions'])
                                ->group(function()
                                {
                                    return array(
                                        'repositories' => Route::add('', ['_route' => 'workspaces_workspace_permissions_repositories'])
                                        ->rule('any', [], ['_route' => 'workspaces_workspace_permissions_repositories_repo_slug']),

                                    );
                                }),

                                'pipelines-config' => Route::add('', ['_route' => 'workspaces_workspace_pipelines_config'])
                                ->group(function()
                                {
                                    return array(
                                        'identity' => Route::add('', ['_route' => 'workspaces_workspace_pipelines_config_identity'])
                                        ->group(function()
                                        {
                                            return array(
                                                'oidc' => Route::add('', ['_route' => 'workspaces_workspace_pipelines_config_identity_oidc'])
                                                ->group(function()
                                                {
                                                    return array(
                                                        'keys.json' => Route::add('', ['_route' => 'workspaces_workspace_pipelines_config_identity_oidc_keys_json']),

                                                    );
                                                })
                                                ->rule('any', [], ['_route' => 'workspaces_workspace_pipelines_config_identity_oidc_well_known'])
                                                ->group(function()
                                                {
                                                    return array(
                                                         '' => Route::add()                                                        
                                                        ->group(function()
                                                        {
                                                            return array(
                                                                'openid-configuration' => Route::add('', ['_route' => 'workspaces_workspace_pipelines_config_identity_oidc_well_known_openid_configuration']),

                                                            );
                                                        }),
                                                    );
                                                }),

                                            );
                                        }),

                                        'variables' => Route::add('', ['_route' => 'workspaces_workspace_pipelines_config_variables'])
                                        ->rule('any', [], ['_route' => 'workspaces_workspace_pipelines_config_variables_variable_uuid']),

                                    );
                                }),

                                'projects' => Route::add('', ['_route' => 'workspaces_workspace_projects'])
                                ->rule('any', [], ['_route' => 'workspaces_workspace_projects_project_key']),

                                'search' => Route::add('', ['_route' => 'workspaces_workspace_search'])
                                ->group(function()
                                {
                                    return array(
                                        'code' => Route::add('', ['_route' => 'workspaces_workspace_search_code']),

                                    );
                                }),

                            );
                        }),
                    );
                }),

            );
        });

        return $routes;
    }
}
