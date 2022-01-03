<?php

use Ertuo\Route;

return $routes = Route::add('', [])
->group(function()
{

	yield 'addon' => Route::add('', ['_route' => 'addon', ])
	->group(function()
	{

		yield 'linkers' => Route::add('linker_key', ['_route' => 'addon_linkers', ])
		->rule('any', [], ['_route' => 'addon_linkers_linker_key', ])
		->group(function()
		{

			yield '' => Route::add('', [])
			->group(function()
			{

				yield 'values' => Route::add('value_id', ['_route' => 'addon_linkers_linker_key_values', ])
				->rule('any', [], ['_route' => 'addon_linkers_linker_key_values_value_id', ]);

			});

		});

	});

	yield 'hook_events' => Route::add('subject_type', ['_route' => 'hook_events', ])
	->rule('any', [], ['_route' => 'hook_events_subject_type', ]);

	yield 'pullrequests' => Route::add('selected_user', [])
	->rule('any', [], ['_route' => 'pullrequests_selected_user', ]);

	yield 'repositories' => Route::add('workspace', ['_route' => 'repositories', ])
	->rule('any', [], ['_route' => 'repositories_workspace', ])
	->group(function()
	{

		yield '' => Route::add('repo_slug', [])
		->rule('any', [], ['_route' => 'repositories_workspace_repo_slug', ])
		->group(function()
		{

			yield '' => Route::add('', [])
			->group(function()
			{

				yield 'branch-restrictions' => Route::add('id', ['_route' => 'repositories_workspace_repo_slug_branch_restrictions', ])
				->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_branch_restrictions_id', ]);

				yield 'branching-model' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_branching_model', ])
				->group(function()
				{

					yield 'settings' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_branching_model_settings', ]);

				});

				yield 'commit' => Route::add('commit', [])
				->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_commit_commit', ])
				->group(function()
				{

					yield '' => Route::add('', [])
					->group(function()
					{

						yield 'approve' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_commit_commit_approve', ]);

						yield 'comments' => Route::add('comment_id', ['_route' => 'repositories_workspace_repo_slug_commit_commit_comments', ])
						->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_commit_commit_comments_comment_id', ]);

						yield 'properties' => Route::add('app_key', [])
						->rule('any', [], [])
						->group(function()
						{

							yield '' => Route::add('property_name', [])
							->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_commit_commit_properties_app_key_property_name', ]);

						});

						yield 'pullrequests' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_commit_commit_pullrequests', ]);

						yield 'reports' => Route::add('reportId', ['_route' => 'repositories_workspace_repo_slug_commit_commit_reports', ])
						->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_commit_commit_reports_reportId', ])
						->group(function()
						{

							yield '' => Route::add('', [])
							->group(function()
							{

								yield 'annotations' => Route::add('annotationId', ['_route' => 'repositories_workspace_repo_slug_commit_commit_reports_reportId_annotations', ])
								->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_commit_commit_reports_reportId_annotations_annotationId', ]);

							});

						});

						yield 'statuses' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_commit_commit_statuses', ])
						->group(function()
						{

							yield 'build' => Route::add('key', ['_route' => 'repositories_workspace_repo_slug_commit_commit_statuses_build', ])
							->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_commit_commit_statuses_build_key', ]);

						});

					});

				});

				yield 'commits' => Route::add('revision', ['_route' => 'repositories_workspace_repo_slug_commits', ])
				->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_commits_revision', ]);

				yield 'components' => Route::add('component_id', ['_route' => 'repositories_workspace_repo_slug_components', ])
				->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_components_component_id', ]);

				yield 'default-reviewers' => Route::add('target_username', ['_route' => 'repositories_workspace_repo_slug_default_reviewers', ])
				->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_default_reviewers_target_username', ]);

				yield 'deploy-keys' => Route::add('key_id', ['_route' => 'repositories_workspace_repo_slug_deploy_keys', ])
				->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_deploy_keys_key_id', ]);

				yield 'deployments' => Route::add('deployment_uuid', ['_route' => 'repositories_workspace_repo_slug_deployments', ])
				->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_deployments_deployment_uuid', ]);

				yield 'deployments_config' => Route::add('', [])
				->group(function()
				{

					yield 'environments' => Route::add('environment_uuid', [])
					->rule('any', [], [])
					->group(function()
					{

						yield '' => Route::add('', [])
						->group(function()
						{

							yield 'variables' => Route::add('variable_uuid', ['_route' => 'repositories_workspace_repo_slug_deployments_config_environments_environment_uuid_variables', ])
							->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_deployments_config_environments_environment_uuid_variables_variable_uuid', ]);

						});

					});

				});

				yield 'diff' => Route::add('spec', [])
				->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_diff_spec', ]);

				yield 'diffstat' => Route::add('spec', [])
				->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_diffstat_spec', ]);

				yield 'downloads' => Route::add('filename', ['_route' => 'repositories_workspace_repo_slug_downloads', ])
				->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_downloads_filename', ]);

				yield 'environments' => Route::add('environment_uuid', ['_route' => 'repositories_workspace_repo_slug_environments', ])
				->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_environments_environment_uuid', ])
				->group(function()
				{

					yield '' => Route::add('', [])
					->group(function()
					{

						yield 'changes' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_environments_environment_uuid_changes', ]);

					});

				});

				yield 'filehistory' => Route::add('commit', [])
				->rule('any', [], [])
				->group(function()
				{

					yield '' => Route::add('path', [])
					->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_filehistory_commit_path', ]);

				});

				yield 'forks' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_forks', ]);

				yield 'hooks' => Route::add('uid', ['_route' => 'repositories_workspace_repo_slug_hooks', ])
				->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_hooks_uid', ]);

				yield 'issues' => Route::add('issue_id', ['_route' => 'repositories_workspace_repo_slug_issues', ])
				->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_issues_issue_id', ])
				->group(function()
				{

					yield 'export' => Route::add('repo_name}-issues-{task_id}.zip', ['_route' => 'repositories_workspace_repo_slug_issues_export', ])
					->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_issues_export_repo_name_issues_task_id_zip', ]);

					yield 'import' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_issues_import', ]);

					yield '' => Route::add('', [])
					->group(function()
					{

						yield 'attachments' => Route::add('path', ['_route' => 'repositories_workspace_repo_slug_issues_issue_id_attachments', ])
						->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_issues_issue_id_attachments_path', ]);

						yield 'changes' => Route::add('change_id', ['_route' => 'repositories_workspace_repo_slug_issues_issue_id_changes', ])
						->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_issues_issue_id_changes_change_id', ]);

						yield 'comments' => Route::add('comment_id', ['_route' => 'repositories_workspace_repo_slug_issues_issue_id_comments', ])
						->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_issues_issue_id_comments_comment_id', ]);

						yield 'vote' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_issues_issue_id_vote', ]);

						yield 'watch' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_issues_issue_id_watch', ]);

					});

				});

				yield 'merge-base' => Route::add('revspec', [])
				->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_merge_base_revspec', ]);

				yield 'milestones' => Route::add('milestone_id', ['_route' => 'repositories_workspace_repo_slug_milestones', ])
				->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_milestones_milestone_id', ]);

				yield 'patch' => Route::add('spec', [])
				->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_patch_spec', ]);

				yield 'pipelines-config' => Route::add('', [])
				->group(function()
				{

					yield 'caches' => Route::add('cache_uuid', ['_route' => 'repositories_workspace_repo_slug_pipelines_config_caches', ])
					->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_pipelines_config_caches_cache_uuid', ])
					->group(function()
					{

						yield '' => Route::add('', [])
						->group(function()
						{

							yield 'content-uri' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_pipelines_config_caches_cache_uuid_content_uri', ]);

						});

					});

				});

				yield 'pipelines' => Route::add('pipeline_uuid', ['_route' => 'repositories_workspace_repo_slug_pipelines', ])
				->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid', ])
				->group(function()
				{

					yield '' => Route::add('', [])
					->group(function()
					{

						yield 'steps' => Route::add('step_uuid', ['_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps', ])
						->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps_step_uuid', ])
						->group(function()
						{

							yield '' => Route::add('', [])
							->group(function()
							{

								yield 'log' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps_step_uuid_log', ]);

								yield 'logs' => Route::add('log_uuid', [])
								->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps_step_uuid_logs_log_uuid', ]);

								yield 'test_reports' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps_step_uuid_test_reports', ])
								->group(function()
								{

									yield 'test_cases' => Route::add('test_case_uuid', ['_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps_step_uuid_test_reports_test_cases', ])
									->rule('any', [], [])
									->group(function()
									{

										yield '' => Route::add('', [])
										->group(function()
										{

											yield 'test_case_reasons' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps_step_uuid_test_reports_test_cases_test_case_uuid_test_case_reasons', ]);

										});

									});

								});

							});

						});

						yield 'stopPipeline' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_stopPipeline', ]);

					});

				});

				yield 'pipelines_config' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_pipelines_config', ])
				->group(function()
				{

					yield 'build_number' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_pipelines_config_build_number', ]);

					yield 'schedules' => Route::add('schedule_uuid', ['_route' => 'repositories_workspace_repo_slug_pipelines_config_schedules', ])
					->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_pipelines_config_schedules_schedule_uuid', ])
					->group(function()
					{

						yield '' => Route::add('', [])
						->group(function()
						{

							yield 'executions' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_pipelines_config_schedules_schedule_uuid_executions', ]);

						});

					});

					yield 'ssh' => Route::add('', [])
					->group(function()
					{

						yield 'key_pair' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_pipelines_config_ssh_key_pair', ]);

						yield 'known_hosts' => Route::add('known_host_uuid', ['_route' => 'repositories_workspace_repo_slug_pipelines_config_ssh_known_hosts', ])
						->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_pipelines_config_ssh_known_hosts_known_host_uuid', ]);

					});

					yield 'variables' => Route::add('variable_uuid', ['_route' => 'repositories_workspace_repo_slug_pipelines_config_variables', ])
					->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_pipelines_config_variables_variable_uuid', ]);

				});

				yield 'properties' => Route::add('app_key', [])
				->rule('any', [], [])
				->group(function()
				{

					yield '' => Route::add('property_name', [])
					->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_properties_app_key_property_name', ]);

				});

				yield 'pullrequests' => Route::add('pullrequest_id', ['_route' => 'repositories_workspace_repo_slug_pullrequests', ])
				->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id', ])
				->group(function()
				{

					yield 'activity' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_pullrequests_activity', ]);

					yield '' => Route::add('', [])
					->group(function()
					{

						yield 'activity' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_activity', ]);

						yield 'approve' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_approve', ]);

						yield 'comments' => Route::add('comment_id', ['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_comments', ])
						->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_comments_comment_id', ]);

						yield 'commits' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_commits', ]);

						yield 'decline' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_decline', ]);

						yield 'diff' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_diff', ]);

						yield 'diffstat' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_diffstat', ]);

						yield 'merge' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_merge', ])
						->group(function()
						{

							yield 'task-status' => Route::add('task_id', [])
							->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_merge_task_status_task_id', ]);

						});

						yield 'patch' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_patch', ]);

						yield 'request-changes' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_request_changes', ]);

						yield 'statuses' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_statuses', ]);

						yield 'properties' => Route::add('app_key', [])
						->rule('any', [], [])
						->group(function()
						{

							yield '' => Route::add('property_name', [])
							->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_pullrequests_pullrequest_id_properties_app_key_property_name', ]);

						});

					});

				});

				yield 'refs' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_refs', ])
				->group(function()
				{

					yield 'branches' => Route::add('name', ['_route' => 'repositories_workspace_repo_slug_refs_branches', ])
					->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_refs_branches_name', ]);

					yield 'tags' => Route::add('name', ['_route' => 'repositories_workspace_repo_slug_refs_tags', ])
					->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_refs_tags_name', ]);

				});

				yield 'src' => Route::add('commit', ['_route' => 'repositories_workspace_repo_slug_src', ])
				->rule('any', [], [])
				->group(function()
				{

					yield '' => Route::add('path', [])
					->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_src_commit_path', ]);

				});

				yield 'versions' => Route::add('version_id', ['_route' => 'repositories_workspace_repo_slug_versions', ])
				->rule('any', [], ['_route' => 'repositories_workspace_repo_slug_versions_version_id', ]);

				yield 'watchers' => Route::add('', ['_route' => 'repositories_workspace_repo_slug_watchers', ]);

			});

		});

	});

	yield 'snippets' => Route::add('workspace', ['_route' => 'snippets', ])
	->rule('any', [], ['_route' => 'snippets_workspace', ])
	->group(function()
	{

		yield '' => Route::add('encoded_id', [])
		->rule('any', [], ['_route' => 'snippets_workspace_encoded_id', ])
		->group(function()
		{

			yield '' => Route::add('revision', [])
			->rule('any', [], ['_route' => 'snippets_workspace_encoded_id_node_id', ])
			->group(function()
			{

				yield 'comments' => Route::add('comment_id', ['_route' => 'snippets_workspace_encoded_id_comments', ])
				->rule('any', [], ['_route' => 'snippets_workspace_encoded_id_comments_comment_id', ]);

				yield 'commits' => Route::add('revision', ['_route' => 'snippets_workspace_encoded_id_commits', ])
				->rule('any', [], ['_route' => 'snippets_workspace_encoded_id_commits_revision', ]);

				yield 'files' => Route::add('path', [])
				->rule('any', [], ['_route' => 'snippets_workspace_encoded_id_files_path', ]);

				yield 'watch' => Route::add('', ['_route' => 'snippets_workspace_encoded_id_watch', ]);

				yield 'watchers' => Route::add('', ['_route' => 'snippets_workspace_encoded_id_watchers', ]);

				yield '' => Route::add('', [])
				->group(function()
				{

					yield 'files' => Route::add('path', [])
					->rule('any', [], ['_route' => 'snippets_workspace_encoded_id_node_id_files_path', ]);

					yield 'diff' => Route::add('', ['_route' => 'snippets_workspace_encoded_id_revision_diff', ]);

					yield 'patch' => Route::add('', ['_route' => 'snippets_workspace_encoded_id_revision_patch', ]);

				});

			});

		});

	});

	yield 'teams' => Route::add('workspace', ['_route' => 'teams', ])
	->rule('any', [], ['_route' => 'teams_username', ])
	->group(function()
	{

		yield '' => Route::add('', [])
		->group(function()
		{

			yield 'followers' => Route::add('', ['_route' => 'teams_username_followers', ]);

			yield 'following' => Route::add('', ['_route' => 'teams_username_following', ]);

			yield 'hooks' => Route::add('uid', ['_route' => 'teams_username_hooks', ])
			->rule('any', [], ['_route' => 'teams_username_hooks_uid', ]);

			yield 'members' => Route::add('', ['_route' => 'teams_username_members', ]);

			yield 'permissions' => Route::add('', ['_route' => 'teams_username_permissions', ])
			->group(function()
			{

				yield 'repositories' => Route::add('repo_slug', ['_route' => 'teams_username_permissions_repositories', ])
				->rule('any', [], ['_route' => 'teams_username_permissions_repositories_repo_slug', ]);

			});

			yield 'pipelines_config' => Route::add('', [])
			->group(function()
			{

				yield 'variables' => Route::add('variable_uuid', ['_route' => 'teams_username_pipelines_config_variables', ])
				->rule('any', [], ['_route' => 'teams_username_pipelines_config_variables_variable_uuid', ]);

			});

			yield 'projects' => Route::add('project_key', ['_route' => 'teams_username_projects', ])
			->rule('any', [], ['_route' => 'teams_username_projects_project_key', ]);

			yield 'search' => Route::add('', [])
			->group(function()
			{

				yield 'code' => Route::add('', ['_route' => 'teams_username_search_code', ]);

			});

			yield 'repositories' => Route::add('', ['_route' => 'teams_workspace_repositories', ]);

		});

	});

	yield 'user' => Route::add('', ['_route' => 'user', ])
	->group(function()
	{

		yield 'emails' => Route::add('email', ['_route' => 'user_emails', ])
		->rule('any', [], ['_route' => 'user_emails_email', ]);

		yield 'permissions' => Route::add('', [])
		->group(function()
		{

			yield 'repositories' => Route::add('', ['_route' => 'user_permissions_repositories', ]);

			yield 'teams' => Route::add('', ['_route' => 'user_permissions_teams', ]);

			yield 'workspaces' => Route::add('', ['_route' => 'user_permissions_workspaces', ]);

		});

	});

	yield 'users' => Route::add('workspace', [])
	->rule('any', [], ['_route' => 'users_selected_user', ])
	->group(function()
	{

		yield '' => Route::add('', [])
		->group(function()
		{

			yield 'hooks' => Route::add('uid', ['_route' => 'users_selected_user_hooks', ])
			->rule('any', [], ['_route' => 'users_selected_user_hooks_uid', ]);

			yield 'pipelines_config' => Route::add('', [])
			->group(function()
			{

				yield 'variables' => Route::add('variable_uuid', ['_route' => 'users_selected_user_pipelines_config_variables', ])
				->rule('any', [], ['_route' => 'users_selected_user_pipelines_config_variables_variable_uuid', ]);

			});

			yield 'properties' => Route::add('app_key', [])
			->rule('any', [], [])
			->group(function()
			{

				yield '' => Route::add('property_name', [])
				->rule('any', [], ['_route' => 'users_selected_user_properties_app_key_property_name', ]);

			});

			yield 'search' => Route::add('', [])
			->group(function()
			{

				yield 'code' => Route::add('', ['_route' => 'users_selected_user_search_code', ]);

			});

			yield 'ssh-keys' => Route::add('key_id', ['_route' => 'users_selected_user_ssh_keys', ])
			->rule('any', [], ['_route' => 'users_selected_user_ssh_keys_key_id', ]);

			yield 'members' => Route::add('', ['_route' => 'users_username_members', ]);

			yield 'repositories' => Route::add('', ['_route' => 'users_workspace_repositories', ]);

		});

	});

	yield 'workspaces' => Route::add('workspace', ['_route' => 'workspaces', ])
	->rule('any', [], ['_route' => 'workspaces_workspace', ])
	->group(function()
	{

		yield '' => Route::add('', [])
		->group(function()
		{

			yield 'hooks' => Route::add('uid', ['_route' => 'workspaces_workspace_hooks', ])
			->rule('any', [], ['_route' => 'workspaces_workspace_hooks_uid', ]);

			yield 'members' => Route::add('member', ['_route' => 'workspaces_workspace_members', ])
			->rule('any', [], ['_route' => 'workspaces_workspace_members_member', ]);

			yield 'permissions' => Route::add('', ['_route' => 'workspaces_workspace_permissions', ])
			->group(function()
			{

				yield 'repositories' => Route::add('repo_slug', ['_route' => 'workspaces_workspace_permissions_repositories', ])
				->rule('any', [], ['_route' => 'workspaces_workspace_permissions_repositories_repo_slug', ]);

			});

			yield 'pipelines-config' => Route::add('', [])
			->group(function()
			{

				yield 'identity' => Route::add('', [])
				->group(function()
				{

					yield 'oidc' => Route::add('well-known', [])
					->rule('any', [], [])
					->group(function()
					{

						yield '' => Route::add('', [])
						->group(function()
						{

							yield 'openid-configuration' => Route::add('', ['_route' => 'workspaces_workspace_pipelines_config_identity_oidc_well_known_openid_configuration', ]);

						});

						yield 'keys.json' => Route::add('', ['_route' => 'workspaces_workspace_pipelines_config_identity_oidc_keys_json', ]);

					});

				});

				yield 'variables' => Route::add('variable_uuid', ['_route' => 'workspaces_workspace_pipelines_config_variables', ])
				->rule('any', [], ['_route' => 'workspaces_workspace_pipelines_config_variables_variable_uuid', ]);

			});

			yield 'projects' => Route::add('project_key', ['_route' => 'workspaces_workspace_projects', ])
			->rule('any', [], ['_route' => 'workspaces_workspace_projects_project_key', ]);

			yield 'search' => Route::add('', [])
			->group(function()
			{

				yield 'code' => Route::add('', ['_route' => 'workspaces_workspace_search_code', ]);

			});

		});

	});

});
