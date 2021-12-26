<?php

namespace Ertuo\Lab\Benchmark_Bitbucket;

use PHPUnit\Framework\Assert;

/**
* Benchmark routing the Bitbucket API URLs
*
* @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/
*
* @Revs(400)
* @Iterations(5)
*/
abstract class Benchmark
{
	abstract function runRouting($route) : array;

	abstract function setupRouting();

	function _benchSetup()
	{
		$this->setupRouting();
	}

	/**
	* @ParamProviders("getLastRoute")
	*/
	function benchLast(array $last)
	{
		$this->runRoute( $last['route'], $last['result'] );
	}

	function getLastRoute() : array
	{
		$routes = $this->getRoutes();
		$last = array_pop($routes);

		return array($last);
	}

	/**
	* @ParamProviders("getLongestRoute")
	*/
	function benchLongest(array $longest)
	{
		$this->runRoute( $longest['route'], $longest['result'] );
	}

	function getLongestRoute() : array
	{
		$routes = $this->getRoutes();
		usort($routes, function($a, $b)
		{
			return strlen($a['route']) <=> strlen($b['route']);
		});
		$longest = array_pop($routes);

		return array($longest);
	}

	function benchTotal()
	{
		$next = $this->getNextRoute();
		$this->runRoute( $next['route'], $next['result'] );
	}

	function getNextRoute()
	{
		static $routes;
		if (!$routes)
		{
			$routes = $this->getRoutes();
		}

		$route = current($routes);
		if ($route)
		{
			next($routes);
		} else
		{
			reset($routes);
			$route = current($routes);
		}

		return $route;
	}

	function runRoute($route, array $result)
	{
		Assert::assertEquals(
			$result['_route'],
			$this->runRouting( $route )['_route']
			);
	}

	function getRoutes() : array
	{
		return array(
			['route' => '/addon', 'result' => ['_route' => 'addon']],
			['route' => '/addon/linkers', 'result' => ['_route' => 'addon_linkers']],
			['route' => '/addon/linkers/john', 'result' => ['_route' => 'addon_linkers_linker_key']],
			['route' => '/addon/linkers/paul/values', 'result' => ['_route' => 'addon_linkers_linker_key_values']],
			['route' => '/addon/linkers/george/values/ringo', 'result' => ['_route' => 'addon_linkers_linker_key_values_value_id']],
			['route' => '/hook_events', 'result' => ['_route' => 'hook_events']],
			['route' => '/hook_events/john', 'result' => ['_route' => 'hook_events_subject_type']],
			['route' => '/pullrequests/paul', 'result' => ['_route' => 'pullrequests_selected_user']],
			['route' => '/repositories', 'result' => ['_route' => 'repositories']],
			['route' => '/repositories/george', 'result' => ['_route' => 'repositories_workspace']],
			['route' => '/repositories/ringo/john', 'result' => ['_route' => 'repositories_workspace_repo_slug']],
			['route' => '/repositories/paul/george/branch-restrictions', 'result' => ['_route' => 'repositories_workspace_repo_slug_branch_restrictions']],
			['route' => '/repositories/ringo/john/branch-restrictions/paul', 'result' => ['_route' => 'repositories_workspace_repo_slug_branch_restrictions_id']],
			['route' => '/repositories/george/ringo/branching-model', 'result' => ['_route' => 'repositories_workspace_repo_slug_branching_model']],
			['route' => '/repositories/john/paul/branching-model/settings', 'result' => ['_route' => 'repositories_workspace_repo_slug_branching_model_settings']],
			['route' => '/repositories/george/ringo/commit/john', 'result' => ['_route' => 'repositories_workspace_repo_slug_commit_commit']],
			['route' => '/repositories/paul/george/commit/ringo/approve', 'result' => ['_route' => 'repositories_workspace_repo_slug_commit_commit_approve']],
			['route' => '/repositories/john/paul/commit/george/comments', 'result' => ['_route' => 'repositories_workspace_repo_slug_commit_commit_comments']],
			['route' => '/repositories/ringo/john/commit/paul/comments/george', 'result' => ['_route' => 'repositories_workspace_repo_slug_commit_commit_comments_comment_id']],
			['route' => '/repositories/ringo/john/commit/paul/properties/george/ringo', 'result' => ['_route' => 'repositories_workspace_repo_slug_commit_commit_properties_app_key_property_name']],
			['route' => '/repositories/john/paul/commit/george/pullrequests', 'result' => ['_route' => 'repositories_workspace_repo_slug_commit_commit_pullrequests']],
			['route' => '/repositories/ringo/john/commit/paul/reports', 'result' => ['_route' => 'repositories_workspace_repo_slug_commit_commit_reports']],
			['route' => '/repositories/george/ringo/commit/john/reports/paul', 'result' => ['_route' => 'repositories_workspace_repo_slug_commit_commit_reports_reportId']],
			['route' => '/repositories/george/ringo/commit/john/reports/paul/annotations', 'result' => ['_route' => 'repositories_workspace_repo_slug_commit_commit_reports_reportId_annotations']],
			['route' => '/repositories/george/ringo/commit/john/reports/paul/annotations/george', 'result' => ['_route' => 'repositories_workspace_repo_slug_commit_commit_reports_reportId_annotations_annotationId']],
			['route' => '/repositories/ringo/john/commit/paul/statuses', 'result' => ['_route' => 'repositories_workspace_repo_slug_commit_commit_statuses']],
			['route' => '/repositories/george/ringo/commit/john/statuses/build', 'result' => ['_route' => 'repositories_workspace_repo_slug_commit_commit_statuses_build']],
			['route' => '/repositories/paul/george/commit/ringo/statuses/build/john', 'result' => ['_route' => 'repositories_workspace_repo_slug_commit_commit_statuses_build_key']],
			['route' => '/repositories/paul/george/commits', 'result' => ['_route' => 'repositories_workspace_repo_slug_commits']],
			['route' => '/repositories/ringo/john/commits/paul', 'result' => ['_route' => 'repositories_workspace_repo_slug_commits_revision']],
			['route' => '/repositories/george/ringo/components', 'result' => ['_route' => 'repositories_workspace_repo_slug_components']],
			['route' => '/repositories/john/paul/components/george', 'result' => ['_route' => 'repositories_workspace_repo_slug_components_component_id']],
			['route' => '/repositories/ringo/john/default-reviewers', 'result' => ['_route' => 'repositories_workspace_repo_slug_default_reviewers']],
			['route' => '/repositories/paul/george/default-reviewers/ringo', 'result' => ['_route' => 'repositories_workspace_repo_slug_default_reviewers_target_username']],
			['route' => '/repositories/john/paul/deploy-keys', 'result' => ['_route' => 'repositories_workspace_repo_slug_deploy_keys']],
			['route' => '/repositories/george/ringo/deploy-keys/john', 'result' => ['_route' => 'repositories_workspace_repo_slug_deploy_keys_key_id']],
			['route' => '/repositories/paul/george/deployments', 'result' => ['_route' => 'repositories_workspace_repo_slug_deployments']],
			['route' => '/repositories/ringo/john/deployments/paul', 'result' => ['_route' => 'repositories_workspace_repo_slug_deployments_deployment_uuid']],
			['route' => '/repositories/george/ringo/deployments_config/environments/john/variables', 'result' => ['_route' => 'repositories_workspace_repo_slug_deployments_config_environments_environment_uuid_variables']],
			['route' => '/repositories/paul/george/deployments_config/environments/ringo/variables/john', 'result' => ['_route' => 'repositories_workspace_repo_slug_deployments_config_environments_environment_uuid_variables_variable_uuid']],
			['route' => '/repositories/paul/george/diff/ringo', 'result' => ['_route' => 'repositories_workspace_repo_slug_diff_spec']],
			['route' => '/repositories/john/paul/diffstat/george', 'result' => ['_route' => 'repositories_workspace_repo_slug_diffstat_spec']],
			['route' => '/repositories/ringo/john/downloads', 'result' => ['_route' => 'repositories_workspace_repo_slug_downloads']],
			['route' => '/repositories/paul/george/downloads/ringo', 'result' => ['_route' => 'repositories_workspace_repo_slug_downloads_filename']],
			['route' => '/repositories/john/paul/environments/', 'result' => ['_route' => 'repositories_workspace_repo_slug_environments']],
			['route' => '/repositories/george/ringo/environments/john', 'result' => ['_route' => 'repositories_workspace_repo_slug_environments_environment_uuid']],
			['route' => '/repositories/paul/george/environments/ringo/changes/', 'result' => ['_route' => 'repositories_workspace_repo_slug_environments_environment_uuid_changes']],
			['route' => '/repositories/john/paul/filehistory/george/ringo', 'result' => ['_route' => 'repositories_workspace_repo_slug_filehistory_commit_path']],
			['route' => '/repositories/john/paul/forks', 'result' => ['_route' => 'repositories_workspace_repo_slug_forks']],
			['route' => '/repositories/george/ringo/hooks', 'result' => ['_route' => 'repositories_workspace_repo_slug_hooks']],
			['route' => '/repositories/john/paul/hooks/george', 'result' => ['_route' => 'repositories_workspace_repo_slug_hooks_uid']],
			['route' => '/repositories/ringo/john/issues', 'result' => ['_route' => 'repositories_workspace_repo_slug_issues']],
			['route' => '/repositories/paul/george/issues/export', 'result' => ['_route' => 'repositories_workspace_repo_slug_issues_export']],
			['route' => '/repositories/ringo/john/issues/export/paul-issues-george.zip', 'result' => ['_route' => 'repositories_workspace_repo_slug_issues_export_repo_name_issues_task_id_zip']],
			['route' => '/repositories/ringo/john/issues/import', 'result' => ['_route' => 'repositories_workspace_repo_slug_issues_import']],
			['route' => '/repositories/paul/george/issues/ringo', 'result' => ['_route' => 'repositories_workspace_repo_slug_issues_issue_id']],
			['route' => '/repositories/john/paul/issues/george/attachments', 'result' => ['_route' => 'repositories_workspace_repo_slug_issues_issue_id_attachments']],
			['route' => '/repositories/ringo/john/issues/paul/attachments/george', 'result' => ['_route' => 'repositories_workspace_repo_slug_issues_issue_id_attachments_path']],
			['route' => '/repositories/ringo/john/issues/paul/changes', 'result' => ['_route' => 'repositories_workspace_repo_slug_issues_issue_id_changes']],
			['route' => '/repositories/george/ringo/issues/john/changes/paul', 'result' => ['_route' => 'repositories_workspace_repo_slug_issues_issue_id_changes_change_id']],
			['route' => '/repositories/george/ringo/issues/john/comments', 'result' => ['_route' => 'repositories_workspace_repo_slug_issues_issue_id_comments']],
			['route' => '/repositories/paul/george/issues/ringo/comments/john', 'result' => ['_route' => 'repositories_workspace_repo_slug_issues_issue_id_comments_comment_id']],
			['route' => '/repositories/paul/george/issues/ringo/vote', 'result' => ['_route' => 'repositories_workspace_repo_slug_issues_issue_id_vote']],
			['route' => '/repositories/john/paul/issues/george/watch', 'result' => ['_route' => 'repositories_workspace_repo_slug_issues_issue_id_watch']],
			['route' => '/repositories/ringo/john/merge-base/paul', 'result' => ['_route' => 'repositories_workspace_repo_slug_merge_base_revspec']],
			['route' => '/repositories/george/ringo/milestones', 'result' => ['_route' => 'repositories_workspace_repo_slug_milestones']],
			['route' => '/repositories/john/paul/milestones/george', 'result' => ['_route' => 'repositories_workspace_repo_slug_milestones_milestone_id']],
			['route' => '/repositories/ringo/john/patch/paul', 'result' => ['_route' => 'repositories_workspace_repo_slug_patch_spec']],
			['route' => '/repositories/george/ringo/pipelines-config/caches/', 'result' => ['_route' => 'repositories_workspace_repo_slug_pipelines_config_caches']],
			['route' => '/repositories/john/paul/pipelines-config/caches/george', 'result' => ['_route' => 'repositories_workspace_repo_slug_pipelines_config_caches_cache_uuid']],
			['route' => '/repositories/ringo/john/pipelines-config/caches/paul/content-uri', 'result' => ['_route' => 'repositories_workspace_repo_slug_pipelines_config_caches_cache_uuid_content_uri']],
			['route' => '/repositories/george/ringo/pipelines/', 'result' => ['_route' => 'repositories_workspace_repo_slug_pipelines']],
			['route' => '/repositories/john/paul/pipelines/george', 'result' => ['_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid']],
			['route' => '/repositories/ringo/john/pipelines/paul/steps/', 'result' => ['_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps']],
			['route' => '/repositories/george/ringo/pipelines/john/steps/paul', 'result' => ['_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps_step_uuid']],
			['route' => '/repositories/george/ringo/pipelines/john/steps/paul/log', 'result' => ['_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps_step_uuid_log']],
			['route' => '/repositories/george/ringo/pipelines/john/steps/paul/logs/george', 'result' => ['_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps_step_uuid_logs_log_uuid']],
			['route' => '/repositories/ringo/john/pipelines/paul/steps/george/test_reports', 'result' => ['_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps_step_uuid_test_reports']],
			['route' => '/repositories/ringo/john/pipelines/paul/steps/george/test_reports/test_cases', 'result' => ['_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps_step_uuid_test_reports_test_cases']],
			['route' => '/repositories/ringo/john/pipelines/paul/steps/george/test_reports/test_cases/ringo/test_case_reasons', 'result' => ['_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps_step_uuid_test_reports_test_cases_test_case_uuid_test_case_reasons']],
			['route' => '/repositories/john/paul/pipelines/george/stopPipeline', 'result' => ['_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_stopPipeline']],
			['route' => '/repositories/ringo/john/pipelines_config', 'result' => ['_route' => 'repositories_workspace_repo_slug_pipelines_config']],
			['route' => '/repositories/paul/george/pipelines_config/build_number', 'result' => ['_route' => 'repositories_workspace_repo_slug_pipelines_config_build_number']],
			['route' => '/repositories/ringo/john/pipelines_config/schedules/', 'result' => ['_route' => 'repositories_workspace_repo_slug_pipelines_config_schedules']],
			['route' => '/repositories/paul/george/pipelines_config/schedules/ringo', 'result' => ['_route' => 'repositories_workspace_repo_slug_pipelines_config_schedules_schedule_uuid']],
			['route' => '/repositories/john/paul/pipelines_config/schedules/george/executions/', 'result' => ['_route' => 'repositories_workspace_repo_slug_pipelines_config_schedules_schedule_uuid_executions']],
			['route' => '/repositories/ringo/john/pipelines_config/ssh/key_pair', 'result' => ['_route' => 'repositories_workspace_repo_slug_pipelines_config_ssh_key_pair']],
			['route' => '/repositories/paul/george/pipelines_config/ssh/known_hosts/', 'result' => ['_route' => 'repositories_workspace_repo_slug_pipelines_config_ssh_known_hosts']],
			['route' => '/repositories/ringo/john/pipelines_config/ssh/known_hosts/paul', 'result' => ['_route' => 'repositories_workspace_repo_slug_pipelines_config_ssh_known_hosts_known_host_uuid']],
			['route' => '/repositories/george/ringo/pipelines_config/variables/', 'result' => ['_route' => 'repositories_workspace_repo_slug_pipelines_config_variables']],
			['route' => '/repositories/john/paul/pipelines_config/variables/george', 'result' => ['_route' => 'repositories_workspace_repo_slug_pipelines_config_variables_variable_uuid']],
			['route' => '/repositories/ringo/john/properties/paul/george', 'result' => ['_route' => 'repositories_workspace_repo_slug_properties_app_key_property_name']],
			['route' => '/repositories/ringo/john/pullrequests', 'result' => ['_route' => 'repositories_workspace_repo_slug_pullrequests']],
			['route' => '/repositories/paul/george/pullrequests/activity', 'result' => ['_route' => 'repositories_workspace_repo_slug_pullrequests_activity']],
			['route' => '/repositories/ringo/john/pullrequests/paul', 'result' => ['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id']],
			['route' => '/repositories/george/ringo/pullrequests/john/activity', 'result' => ['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_activity']],
			['route' => '/repositories/paul/george/pullrequests/ringo/approve', 'result' => ['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_approve']],
			['route' => '/repositories/john/paul/pullrequests/george/comments', 'result' => ['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_comments']],
			['route' => '/repositories/ringo/john/pullrequests/paul/comments/george', 'result' => ['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_comments_comment_id']],
			['route' => '/repositories/ringo/john/pullrequests/paul/commits', 'result' => ['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_commits']],
			['route' => '/repositories/george/ringo/pullrequests/john/decline', 'result' => ['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_decline']],
			['route' => '/repositories/paul/george/pullrequests/ringo/diff', 'result' => ['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_diff']],
			['route' => '/repositories/john/paul/pullrequests/george/diffstat', 'result' => ['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_diffstat']],
			['route' => '/repositories/ringo/john/pullrequests/paul/merge', 'result' => ['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_merge']],
			['route' => '/repositories/george/ringo/pullrequests/john/merge/task-status/paul', 'result' => ['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_merge_task_status_task_id']],
			['route' => '/repositories/george/ringo/pullrequests/john/patch', 'result' => ['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_patch']],
			['route' => '/repositories/paul/george/pullrequests/ringo/request-changes', 'result' => ['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_request_changes']],
			['route' => '/repositories/john/paul/pullrequests/george/statuses', 'result' => ['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_statuses']],
			['route' => '/repositories/ringo/john/pullrequests/paul/properties/george/ringo', 'result' => ['_route' => 'repositories_workspace_repo_slug_pullrequests_pullrequest_id_properties_app_key_property_name']],
			['route' => '/repositories/john/paul/refs', 'result' => ['_route' => 'repositories_workspace_repo_slug_refs']],
			['route' => '/repositories/george/ringo/refs/branches', 'result' => ['_route' => 'repositories_workspace_repo_slug_refs_branches']],
			['route' => '/repositories/john/paul/refs/branches/george', 'result' => ['_route' => 'repositories_workspace_repo_slug_refs_branches_name']],
			['route' => '/repositories/ringo/john/refs/tags', 'result' => ['_route' => 'repositories_workspace_repo_slug_refs_tags']],
			['route' => '/repositories/paul/george/refs/tags/ringo', 'result' => ['_route' => 'repositories_workspace_repo_slug_refs_tags_name']],
			['route' => '/repositories/john/paul/src', 'result' => ['_route' => 'repositories_workspace_repo_slug_src']],
			['route' => '/repositories/george/ringo/src/john/paul', 'result' => ['_route' => 'repositories_workspace_repo_slug_src_commit_path']],
			['route' => '/repositories/george/ringo/versions', 'result' => ['_route' => 'repositories_workspace_repo_slug_versions']],
			['route' => '/repositories/john/paul/versions/george', 'result' => ['_route' => 'repositories_workspace_repo_slug_versions_version_id']],
			['route' => '/repositories/ringo/john/watchers', 'result' => ['_route' => 'repositories_workspace_repo_slug_watchers']],

			['route' => '/snippets', 'result' => ['_route' => 'snippets']],
			['route' => '/snippets/paul', 'result' => ['_route' => 'snippets_workspace']],
			['route' => '/snippets/george/ringo', 'result' => ['_route' => 'snippets_workspace_encoded_id']],
			['route' => '/snippets/john/paul/comments', 'result' => ['_route' => 'snippets_workspace_encoded_id_comments']],
			['route' => '/snippets/george/ringo/comments/john', 'result' => ['_route' => 'snippets_workspace_encoded_id_comments_comment_id']],
			['route' => '/snippets/paul/george/commits', 'result' => ['_route' => 'snippets_workspace_encoded_id_commits']],
			['route' => '/snippets/ringo/john/commits/paul', 'result' => ['_route' => 'snippets_workspace_encoded_id_commits_revision']],
			['route' => '/snippets/george/ringo/files/john', 'result' => ['_route' => 'snippets_workspace_encoded_id_files_path']],
			['route' => '/snippets/paul/george/watch', 'result' => ['_route' => 'snippets_workspace_encoded_id_watch']],
			['route' => '/snippets/ringo/john/watchers', 'result' => ['_route' => 'snippets_workspace_encoded_id_watchers']],
			['route' => '/snippets/paul/george/ringo', 'result' => ['_route' => 'snippets_workspace_encoded_id_node_id']],
			['route' => '/snippets/john/paul/george/files/ringo', 'result' => ['_route' => 'snippets_workspace_encoded_id_node_id_files_path']],
			['route' => '/snippets/john/paul/george/diff', 'result' => ['_route' => 'snippets_workspace_encoded_id_revision_diff']],
			['route' => '/snippets/ringo/john/paul/patch', 'result' => ['_route' => 'snippets_workspace_encoded_id_revision_patch']],

			['route' => '/teams', 'result' => ['_route' => 'teams']],
			['route' => '/teams/george', 'result' => ['_route' => 'teams_username']],
			['route' => '/teams/ringo/followers', 'result' => ['_route' => 'teams_username_followers']],
			['route' => '/teams/john/following', 'result' => ['_route' => 'teams_username_following']],
			['route' => '/teams/paul/hooks', 'result' => ['_route' => 'teams_username_hooks']],
			['route' => '/teams/george/hooks/ringo', 'result' => ['_route' => 'teams_username_hooks_uid']],
			['route' => '/teams/john/members', 'result' => ['_route' => 'teams_username_members']],
			['route' => '/teams/paul/permissions', 'result' => ['_route' => 'teams_username_permissions']],
			['route' => '/teams/george/permissions/repositories', 'result' => ['_route' => 'teams_username_permissions_repositories']],
			['route' => '/teams/ringo/permissions/repositories/john', 'result' => ['_route' => 'teams_username_permissions_repositories_repo_slug']],
			['route' => '/teams/paul/pipelines_config/variables/', 'result' => ['_route' => 'teams_username_pipelines_config_variables']],
			['route' => '/teams/george/pipelines_config/variables/ringo', 'result' => ['_route' => 'teams_username_pipelines_config_variables_variable_uuid']],
			['route' => '/teams/john/projects/', 'result' => ['_route' => 'teams_username_projects']],
			['route' => '/teams/paul/projects/george', 'result' => ['_route' => 'teams_username_projects_project_key']],
			['route' => '/teams/ringo/search/code', 'result' => ['_route' => 'teams_username_search_code']],
			['route' => '/teams/john/repositories', 'result' => ['_route' => 'teams_workspace_repositories']],

			['route' => '/user', 'result' => ['_route' => 'user']],
			['route' => '/user/emails', 'result' => ['_route' => 'user_emails']],
			['route' => '/user/emails/paul', 'result' => ['_route' => 'user_emails_email']],
			['route' => '/user/permissions/repositories', 'result' => ['_route' => 'user_permissions_repositories']],
			['route' => '/user/permissions/teams', 'result' => ['_route' => 'user_permissions_teams']],
			['route' => '/user/permissions/workspaces', 'result' => ['_route' => 'user_permissions_workspaces']],

			['route' => '/users/george', 'result' => ['_route' => 'users_selected_user']],
			['route' => '/users/ringo/hooks', 'result' => ['_route' => 'users_selected_user_hooks']],
			['route' => '/users/john/hooks/paul', 'result' => ['_route' => 'users_selected_user_hooks_uid']],
			['route' => '/users/george/pipelines_config/variables/', 'result' => ['_route' => 'users_selected_user_pipelines_config_variables']],
			['route' => '/users/ringo/pipelines_config/variables/john', 'result' => ['_route' => 'users_selected_user_pipelines_config_variables_variable_uuid']],
			['route' => '/users/paul/properties/george/ringo', 'result' => ['_route' => 'users_selected_user_properties_app_key_property_name']],
			['route' => '/users/john/search/code', 'result' => ['_route' => 'users_selected_user_search_code']],
			['route' => '/users/paul/ssh-keys', 'result' => ['_route' => 'users_selected_user_ssh_keys']],
			['route' => '/users/george/ssh-keys/ringo', 'result' => ['_route' => 'users_selected_user_ssh_keys_key_id']],
			['route' => '/users/john/members', 'result' => ['_route' => 'users_username_members']],
			['route' => '/users/paul/repositories', 'result' => ['_route' => 'users_workspace_repositories']],

			['route' => '/workspaces', 'result' => ['_route' => 'workspaces']],
			['route' => '/workspaces/george', 'result' => ['_route' => 'workspaces_workspace']],
			['route' => '/workspaces/ringo/hooks', 'result' => ['_route' => 'workspaces_workspace_hooks']],
			['route' => '/workspaces/john/hooks/paul', 'result' => ['_route' => 'workspaces_workspace_hooks_uid']],
			['route' => '/workspaces/george/members', 'result' => ['_route' => 'workspaces_workspace_members']],
			['route' => '/workspaces/ringo/members/john', 'result' => ['_route' => 'workspaces_workspace_members_member']],
			['route' => '/workspaces/paul/permissions', 'result' => ['_route' => 'workspaces_workspace_permissions']],
			['route' => '/workspaces/george/permissions/repositories', 'result' => ['_route' => 'workspaces_workspace_permissions_repositories']],
			['route' => '/workspaces/ringo/permissions/repositories/john', 'result' => ['_route' => 'workspaces_workspace_permissions_repositories_repo_slug']],
			['route' => '/workspaces/paul/pipelines-config/identity/oidc/.well-known/openid-configuration', 'result' => ['_route' => 'workspaces_workspace_pipelines_config_identity_oidc_well_known_openid_configuration']],
			['route' => '/workspaces/george/pipelines-config/identity/oidc/keys.json', 'result' => ['_route' => 'workspaces_workspace_pipelines_config_identity_oidc_keys_json']],
			['route' => '/workspaces/ringo/pipelines-config/variables', 'result' => ['_route' => 'workspaces_workspace_pipelines_config_variables']],
			['route' => '/workspaces/john/pipelines-config/variables/paul', 'result' => ['_route' => 'workspaces_workspace_pipelines_config_variables_variable_uuid']],
			['route' => '/workspaces/george/projects', 'result' => ['_route' => 'workspaces_workspace_projects']],
			['route' => '/workspaces/ringo/projects/john', 'result' => ['_route' => 'workspaces_workspace_projects_project_key']],
			['route' => '/workspaces/paul/search/code', 'result' => ['_route' => 'workspaces_workspace_search_code']]
		);
	}
}
