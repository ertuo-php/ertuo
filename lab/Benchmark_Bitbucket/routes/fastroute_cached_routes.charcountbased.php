<?php return array (
  0 => 
  array (
    'GET' => 
    array (
      '/addon' => 
      array (
        '_route' => 'addon',
      ),
      '/addon/linkers' => 
      array (
        '_route' => 'addon_linkers',
      ),
      '/hook_events' => 
      array (
        '_route' => 'hook_events',
      ),
      '/repositories' => 
      array (
        '_route' => 'repositories',
      ),
      '/snippets' => 
      array (
        '_route' => 'snippets',
      ),
      '/teams' => 
      array (
        '_route' => 'teams',
      ),
      '/user' => 
      array (
        '_route' => 'user',
      ),
      '/user/emails' => 
      array (
        '_route' => 'user_emails',
      ),
      '/user/permissions/repositories' => 
      array (
        '_route' => 'user_permissions_repositories',
      ),
      '/user/permissions/teams' => 
      array (
        '_route' => 'user_permissions_teams',
      ),
      '/user/permissions/workspaces' => 
      array (
        '_route' => 'user_permissions_workspaces',
      ),
      '/workspaces' => 
      array (
        '_route' => 'workspaces',
      ),
    ),
  ),
  1 => 
  array (
    'GET' => 
    array (
      0 => 
      array (
        'regex' => '~^(?|(?:/addon/linkers/([^/]+)/(\\t{1})\\t{28})|(?:/addon/linkers/([^/]+)/values/(\\t{2})\\t{27})|(?:/addon/linkers/([^/]+)/values/([^/]+)/(\\t{3})\\t{26})|(?:/hook_events/([^/]+)/(\\t{4})\\t{25})|(?:/pullrequests/([^/]+)/(\\t{5})\\t{24})|(?:/repositories/([^/]+)/(\\t{6})\\t{23})|(?:/repositories/([^/]+)/([^/]+)/(\\t{7})\\t{22})|(?:/repositories/([^/]+)/([^/]+)/branch\\-restrictions/(\\t{8})\\t{21})|(?:/repositories/([^/]+)/([^/]+)/branch\\-restrictions/([^/]+)/(\\t{9})\\t{20})|(?:/repositories/([^/]+)/([^/]+)/branching\\-model/(\\t{10})\\t{19})|(?:/repositories/([^/]+)/([^/]+)/branching\\-model/settings/(\\t{11})\\t{18})|(?:/repositories/([^/]+)/([^/]+)/commit/([^/]+)/(\\t{12})\\t{17})|(?:/repositories/([^/]+)/([^/]+)/commit/([^/]+)/approve/(\\t{13})\\t{16})|(?:/repositories/([^/]+)/([^/]+)/commit/([^/]+)/comments/(\\t{14})\\t{15})|(?:/repositories/([^/]+)/([^/]+)/commit/([^/]+)/comments/([^/]+)/(\\t{15})\\t{14})|(?:/repositories/([^/]+)/([^/]+)/commit/([^/]+)/properties/([^/]+)/([^/]+)/(\\t{16})\\t{13})|(?:/repositories/([^/]+)/([^/]+)/commit/([^/]+)/pullrequests/(\\t{17})\\t{12})|(?:/repositories/([^/]+)/([^/]+)/commit/([^/]+)/reports/(\\t{18})\\t{11})|(?:/repositories/([^/]+)/([^/]+)/commit/([^/]+)/reports/([^/]+)/(\\t{19})\\t{10})|(?:/repositories/([^/]+)/([^/]+)/commit/([^/]+)/reports/([^/]+)/annotations/(\\t{20})\\t{9})|(?:/repositories/([^/]+)/([^/]+)/commit/([^/]+)/reports/([^/]+)/annotations/([^/]+)/(\\t{21})\\t{8})|(?:/repositories/([^/]+)/([^/]+)/commit/([^/]+)/statuses/(\\t{22})\\t{7})|(?:/repositories/([^/]+)/([^/]+)/commit/([^/]+)/statuses/build/(\\t{23})\\t{6})|(?:/repositories/([^/]+)/([^/]+)/commit/([^/]+)/statuses/build/([^/]+)/(\\t{24})\\t{5})|(?:/repositories/([^/]+)/([^/]+)/commits/(\\t{25})\\t{4})|(?:/repositories/([^/]+)/([^/]+)/commits/([^/]+)/(\\t{26})\\t{3})|(?:/repositories/([^/]+)/([^/]+)/components/(\\t{27})\\t{2})|(?:/repositories/([^/]+)/([^/]+)/components/([^/]+)/(\\t{28})\\t{1})|(?:/repositories/([^/]+)/([^/]+)/default\\-reviewers/(\\t{29})\\t{0}))$~',
        'suffix' => '/																													',
        'routeMap' => 
        array (
          '	' => 
          array (
            0 => 
            array (
              '_route' => 'addon_linkers_linker_key',
            ),
            1 => 
            array (
              'linker_key' => 'linker_key',
            ),
          ),
          '		' => 
          array (
            0 => 
            array (
              '_route' => 'addon_linkers_linker_key_values',
            ),
            1 => 
            array (
              'linker_key' => 'linker_key',
            ),
          ),
          '			' => 
          array (
            0 => 
            array (
              '_route' => 'addon_linkers_linker_key_values_value_id',
            ),
            1 => 
            array (
              'linker_key' => 'linker_key',
              'value_id' => 'value_id',
            ),
          ),
          '				' => 
          array (
            0 => 
            array (
              '_route' => 'hook_events_subject_type',
            ),
            1 => 
            array (
              'subject_type' => 'subject_type',
            ),
          ),
          '					' => 
          array (
            0 => 
            array (
              '_route' => 'pullrequests_selected_user',
            ),
            1 => 
            array (
              'selected_user' => 'selected_user',
            ),
          ),
          '						' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
            ),
          ),
          '							' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
            ),
          ),
          '								' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_branch_restrictions',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
            ),
          ),
          '									' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_branch_restrictions_id',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'id' => 'id',
            ),
          ),
          '										' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_branching_model',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
            ),
          ),
          '											' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_branching_model_settings',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
            ),
          ),
          '												' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_commit_commit',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'commit' => 'commit',
            ),
          ),
          '													' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_commit_commit_approve',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'commit' => 'commit',
            ),
          ),
          '														' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_commit_commit_comments',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'commit' => 'commit',
            ),
          ),
          '															' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_commit_commit_comments_comment_id',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'commit' => 'commit',
              'comment_id' => 'comment_id',
            ),
          ),
          '																' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_commit_commit_properties_app_key_property_name',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'commit' => 'commit',
              'app_key' => 'app_key',
              'property_name' => 'property_name',
            ),
          ),
          '																	' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_commit_commit_pullrequests',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'commit' => 'commit',
            ),
          ),
          '																		' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_commit_commit_reports',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'commit' => 'commit',
            ),
          ),
          '																			' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_commit_commit_reports_reportId',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'commit' => 'commit',
              'reportId' => 'reportId',
            ),
          ),
          '																				' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_commit_commit_reports_reportId_annotations',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'commit' => 'commit',
              'reportId' => 'reportId',
            ),
          ),
          '																					' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_commit_commit_reports_reportId_annotations_annotationId',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'commit' => 'commit',
              'reportId' => 'reportId',
              'annotationId' => 'annotationId',
            ),
          ),
          '																						' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_commit_commit_statuses',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'commit' => 'commit',
            ),
          ),
          '																							' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_commit_commit_statuses_build',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'commit' => 'commit',
            ),
          ),
          '																								' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_commit_commit_statuses_build_key',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'commit' => 'commit',
              'key' => 'key',
            ),
          ),
          '																									' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_commits',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
            ),
          ),
          '																										' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_commits_revision',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'revision' => 'revision',
            ),
          ),
          '																											' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_components',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
            ),
          ),
          '																												' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_components_component_id',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'component_id' => 'component_id',
            ),
          ),
          '																													' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_default_reviewers',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'regex' => '~^(?|(?:/repositories/([^/]+)/([^/]+)/default\\-reviewers/([^/]+)/(\\t{1})\\t{28})|(?:/repositories/([^/]+)/([^/]+)/deploy\\-keys/(\\t{2})\\t{27})|(?:/repositories/([^/]+)/([^/]+)/deploy\\-keys/([^/]+)/(\\t{3})\\t{26})|(?:/repositories/([^/]+)/([^/]+)/deployments/(\\t{4})\\t{25})|(?:/repositories/([^/]+)/([^/]+)/deployments/([^/]+)/(\\t{5})\\t{24})|(?:/repositories/([^/]+)/([^/]+)/deployments_config/environments/([^/]+)/variables/(\\t{6})\\t{23})|(?:/repositories/([^/]+)/([^/]+)/deployments_config/environments/([^/]+)/variables/([^/]+)/(\\t{7})\\t{22})|(?:/repositories/([^/]+)/([^/]+)/diff/([^/]+)/(\\t{8})\\t{21})|(?:/repositories/([^/]+)/([^/]+)/diffstat/([^/]+)/(\\t{9})\\t{20})|(?:/repositories/([^/]+)/([^/]+)/downloads/(\\t{10})\\t{19})|(?:/repositories/([^/]+)/([^/]+)/downloads/([^/]+)/(\\t{11})\\t{18})|(?:/repositories/([^/]+)/([^/]+)/environments//(\\t{12})\\t{17})|(?:/repositories/([^/]+)/([^/]+)/environments/([^/]+)/(\\t{13})\\t{16})|(?:/repositories/([^/]+)/([^/]+)/environments/([^/]+)/changes//(\\t{14})\\t{15})|(?:/repositories/([^/]+)/([^/]+)/filehistory/([^/]+)/([^/]+)/(\\t{15})\\t{14})|(?:/repositories/([^/]+)/([^/]+)/forks/(\\t{16})\\t{13})|(?:/repositories/([^/]+)/([^/]+)/hooks/(\\t{17})\\t{12})|(?:/repositories/([^/]+)/([^/]+)/hooks/([^/]+)/(\\t{18})\\t{11})|(?:/repositories/([^/]+)/([^/]+)/issues/(\\t{19})\\t{10})|(?:/repositories/([^/]+)/([^/]+)/issues/export/(\\t{20})\\t{9})|(?:/repositories/([^/]+)/([^/]+)/issues/export/([^/]+)\\-issues\\-([^/]+)\\.zip/(\\t{21})\\t{8})|(?:/repositories/([^/]+)/([^/]+)/issues/import/(\\t{22})\\t{7})|(?:/repositories/([^/]+)/([^/]+)/issues/([^/]+)/(\\t{23})\\t{6})|(?:/repositories/([^/]+)/([^/]+)/issues/([^/]+)/attachments/(\\t{24})\\t{5})|(?:/repositories/([^/]+)/([^/]+)/issues/([^/]+)/attachments/([^/]+)/(\\t{25})\\t{4})|(?:/repositories/([^/]+)/([^/]+)/issues/([^/]+)/changes/(\\t{26})\\t{3})|(?:/repositories/([^/]+)/([^/]+)/issues/([^/]+)/changes/([^/]+)/(\\t{27})\\t{2})|(?:/repositories/([^/]+)/([^/]+)/issues/([^/]+)/comments/(\\t{28})\\t{1})|(?:/repositories/([^/]+)/([^/]+)/issues/([^/]+)/comments/([^/]+)/(\\t{29})\\t{0}))$~',
        'suffix' => '/																													',
        'routeMap' => 
        array (
          '	' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_default_reviewers_target_username',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'target_username' => 'target_username',
            ),
          ),
          '		' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_deploy_keys',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
            ),
          ),
          '			' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_deploy_keys_key_id',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'key_id' => 'key_id',
            ),
          ),
          '				' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_deployments',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
            ),
          ),
          '					' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_deployments_deployment_uuid',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'deployment_uuid' => 'deployment_uuid',
            ),
          ),
          '						' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_deployments_config_environments_environment_uuid_variables',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'environment_uuid' => 'environment_uuid',
            ),
          ),
          '							' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_deployments_config_environments_environment_uuid_variables_variable_uuid',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'environment_uuid' => 'environment_uuid',
              'variable_uuid' => 'variable_uuid',
            ),
          ),
          '								' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_diff_spec',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'spec' => 'spec',
            ),
          ),
          '									' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_diffstat_spec',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'spec' => 'spec',
            ),
          ),
          '										' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_downloads',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
            ),
          ),
          '											' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_downloads_filename',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'filename' => 'filename',
            ),
          ),
          '												' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_environments',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
            ),
          ),
          '													' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_environments_environment_uuid',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'environment_uuid' => 'environment_uuid',
            ),
          ),
          '														' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_environments_environment_uuid_changes',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'environment_uuid' => 'environment_uuid',
            ),
          ),
          '															' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_filehistory_commit_path',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'commit' => 'commit',
              'path' => 'path',
            ),
          ),
          '																' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_forks',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
            ),
          ),
          '																	' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_hooks',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
            ),
          ),
          '																		' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_hooks_uid',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'uid' => 'uid',
            ),
          ),
          '																			' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_issues',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
            ),
          ),
          '																				' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_issues_export',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
            ),
          ),
          '																					' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_issues_export_repo_name_issues_task_id_zip',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'repo_name' => 'repo_name',
              'task_id' => 'task_id',
            ),
          ),
          '																						' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_issues_import',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
            ),
          ),
          '																							' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_issues_issue_id',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'issue_id' => 'issue_id',
            ),
          ),
          '																								' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_issues_issue_id_attachments',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'issue_id' => 'issue_id',
            ),
          ),
          '																									' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_issues_issue_id_attachments_path',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'issue_id' => 'issue_id',
              'path' => 'path',
            ),
          ),
          '																										' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_issues_issue_id_changes',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'issue_id' => 'issue_id',
            ),
          ),
          '																											' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_issues_issue_id_changes_change_id',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'issue_id' => 'issue_id',
              'change_id' => 'change_id',
            ),
          ),
          '																												' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_issues_issue_id_comments',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'issue_id' => 'issue_id',
            ),
          ),
          '																													' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_issues_issue_id_comments_comment_id',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'issue_id' => 'issue_id',
              'comment_id' => 'comment_id',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'regex' => '~^(?|(?:/repositories/([^/]+)/([^/]+)/issues/([^/]+)/vote/(\\t{1})\\t{28})|(?:/repositories/([^/]+)/([^/]+)/issues/([^/]+)/watch/(\\t{2})\\t{27})|(?:/repositories/([^/]+)/([^/]+)/merge\\-base/([^/]+)/(\\t{3})\\t{26})|(?:/repositories/([^/]+)/([^/]+)/milestones/(\\t{4})\\t{25})|(?:/repositories/([^/]+)/([^/]+)/milestones/([^/]+)/(\\t{5})\\t{24})|(?:/repositories/([^/]+)/([^/]+)/patch/([^/]+)/(\\t{6})\\t{23})|(?:/repositories/([^/]+)/([^/]+)/pipelines\\-config/caches//(\\t{7})\\t{22})|(?:/repositories/([^/]+)/([^/]+)/pipelines\\-config/caches/([^/]+)/(\\t{8})\\t{21})|(?:/repositories/([^/]+)/([^/]+)/pipelines\\-config/caches/([^/]+)/content\\-uri/(\\t{9})\\t{20})|(?:/repositories/([^/]+)/([^/]+)/pipelines//(\\t{10})\\t{19})|(?:/repositories/([^/]+)/([^/]+)/pipelines/([^/]+)/(\\t{11})\\t{18})|(?:/repositories/([^/]+)/([^/]+)/pipelines/([^/]+)/steps//(\\t{12})\\t{17})|(?:/repositories/([^/]+)/([^/]+)/pipelines/([^/]+)/steps/([^/]+)/(\\t{13})\\t{16})|(?:/repositories/([^/]+)/([^/]+)/pipelines/([^/]+)/steps/([^/]+)/log/(\\t{14})\\t{15})|(?:/repositories/([^/]+)/([^/]+)/pipelines/([^/]+)/steps/([^/]+)/logs/([^/]+)/(\\t{15})\\t{14})|(?:/repositories/([^/]+)/([^/]+)/pipelines/([^/]+)/steps/([^/]+)/test_reports/(\\t{16})\\t{13})|(?:/repositories/([^/]+)/([^/]+)/pipelines/([^/]+)/steps/([^/]+)/test_reports/test_cases/(\\t{17})\\t{12})|(?:/repositories/([^/]+)/([^/]+)/pipelines/([^/]+)/steps/([^/]+)/test_reports/test_cases/([^/]+)/test_case_reasons/(\\t{18})\\t{11})|(?:/repositories/([^/]+)/([^/]+)/pipelines/([^/]+)/stopPipeline/(\\t{19})\\t{10})|(?:/repositories/([^/]+)/([^/]+)/pipelines_config/(\\t{20})\\t{9})|(?:/repositories/([^/]+)/([^/]+)/pipelines_config/build_number/(\\t{21})\\t{8})|(?:/repositories/([^/]+)/([^/]+)/pipelines_config/schedules//(\\t{22})\\t{7})|(?:/repositories/([^/]+)/([^/]+)/pipelines_config/schedules/([^/]+)/(\\t{23})\\t{6})|(?:/repositories/([^/]+)/([^/]+)/pipelines_config/schedules/([^/]+)/executions//(\\t{24})\\t{5})|(?:/repositories/([^/]+)/([^/]+)/pipelines_config/ssh/key_pair/(\\t{25})\\t{4})|(?:/repositories/([^/]+)/([^/]+)/pipelines_config/ssh/known_hosts//(\\t{26})\\t{3})|(?:/repositories/([^/]+)/([^/]+)/pipelines_config/ssh/known_hosts/([^/]+)/(\\t{27})\\t{2})|(?:/repositories/([^/]+)/([^/]+)/pipelines_config/variables//(\\t{28})\\t{1})|(?:/repositories/([^/]+)/([^/]+)/pipelines_config/variables/([^/]+)/(\\t{29})\\t{0}))$~',
        'suffix' => '/																													',
        'routeMap' => 
        array (
          '	' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_issues_issue_id_vote',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'issue_id' => 'issue_id',
            ),
          ),
          '		' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_issues_issue_id_watch',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'issue_id' => 'issue_id',
            ),
          ),
          '			' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_merge_base_revspec',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'revspec' => 'revspec',
            ),
          ),
          '				' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_milestones',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
            ),
          ),
          '					' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_milestones_milestone_id',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'milestone_id' => 'milestone_id',
            ),
          ),
          '						' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_patch_spec',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'spec' => 'spec',
            ),
          ),
          '							' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_pipelines_config_caches',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
            ),
          ),
          '								' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_pipelines_config_caches_cache_uuid',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'cache_uuid' => 'cache_uuid',
            ),
          ),
          '									' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_pipelines_config_caches_cache_uuid_content_uri',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'cache_uuid' => 'cache_uuid',
            ),
          ),
          '										' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_pipelines',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
            ),
          ),
          '											' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'pipeline_uuid' => 'pipeline_uuid',
            ),
          ),
          '												' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'pipeline_uuid' => 'pipeline_uuid',
            ),
          ),
          '													' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps_step_uuid',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'pipeline_uuid' => 'pipeline_uuid',
              'step_uuid' => 'step_uuid',
            ),
          ),
          '														' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps_step_uuid_log',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'pipeline_uuid' => 'pipeline_uuid',
              'step_uuid' => 'step_uuid',
            ),
          ),
          '															' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps_step_uuid_logs_log_uuid',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'pipeline_uuid' => 'pipeline_uuid',
              'step_uuid' => 'step_uuid',
              'log_uuid' => 'log_uuid',
            ),
          ),
          '																' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps_step_uuid_test_reports',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'pipeline_uuid' => 'pipeline_uuid',
              'step_uuid' => 'step_uuid',
            ),
          ),
          '																	' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps_step_uuid_test_reports_test_cases',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'pipeline_uuid' => 'pipeline_uuid',
              'step_uuid' => 'step_uuid',
            ),
          ),
          '																		' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps_step_uuid_test_reports_test_cases_test_case_uuid_test_case_reasons',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'pipeline_uuid' => 'pipeline_uuid',
              'step_uuid' => 'step_uuid',
              'test_case_uuid' => 'test_case_uuid',
            ),
          ),
          '																			' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_stopPipeline',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'pipeline_uuid' => 'pipeline_uuid',
            ),
          ),
          '																				' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_pipelines_config',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
            ),
          ),
          '																					' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_pipelines_config_build_number',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
            ),
          ),
          '																						' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_pipelines_config_schedules',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
            ),
          ),
          '																							' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_pipelines_config_schedules_schedule_uuid',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'schedule_uuid' => 'schedule_uuid',
            ),
          ),
          '																								' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_pipelines_config_schedules_schedule_uuid_executions',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'schedule_uuid' => 'schedule_uuid',
            ),
          ),
          '																									' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_pipelines_config_ssh_key_pair',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
            ),
          ),
          '																										' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_pipelines_config_ssh_known_hosts',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
            ),
          ),
          '																											' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_pipelines_config_ssh_known_hosts_known_host_uuid',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'known_host_uuid' => 'known_host_uuid',
            ),
          ),
          '																												' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_pipelines_config_variables',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
            ),
          ),
          '																													' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_pipelines_config_variables_variable_uuid',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'variable_uuid' => 'variable_uuid',
            ),
          ),
        ),
      ),
      3 => 
      array (
        'regex' => '~^(?|(?:/repositories/([^/]+)/([^/]+)/properties/([^/]+)/([^/]+)/(\\t{1})\\t{28})|(?:/repositories/([^/]+)/([^/]+)/pullrequests/(\\t{2})\\t{27})|(?:/repositories/([^/]+)/([^/]+)/pullrequests/activity/(\\t{3})\\t{26})|(?:/repositories/([^/]+)/([^/]+)/pullrequests/([^/]+)/(\\t{4})\\t{25})|(?:/repositories/([^/]+)/([^/]+)/pullrequests/([^/]+)/activity/(\\t{5})\\t{24})|(?:/repositories/([^/]+)/([^/]+)/pullrequests/([^/]+)/approve/(\\t{6})\\t{23})|(?:/repositories/([^/]+)/([^/]+)/pullrequests/([^/]+)/comments/(\\t{7})\\t{22})|(?:/repositories/([^/]+)/([^/]+)/pullrequests/([^/]+)/comments/([^/]+)/(\\t{8})\\t{21})|(?:/repositories/([^/]+)/([^/]+)/pullrequests/([^/]+)/commits/(\\t{9})\\t{20})|(?:/repositories/([^/]+)/([^/]+)/pullrequests/([^/]+)/decline/(\\t{10})\\t{19})|(?:/repositories/([^/]+)/([^/]+)/pullrequests/([^/]+)/diff/(\\t{11})\\t{18})|(?:/repositories/([^/]+)/([^/]+)/pullrequests/([^/]+)/diffstat/(\\t{12})\\t{17})|(?:/repositories/([^/]+)/([^/]+)/pullrequests/([^/]+)/merge/(\\t{13})\\t{16})|(?:/repositories/([^/]+)/([^/]+)/pullrequests/([^/]+)/merge/task\\-status/([^/]+)/(\\t{14})\\t{15})|(?:/repositories/([^/]+)/([^/]+)/pullrequests/([^/]+)/patch/(\\t{15})\\t{14})|(?:/repositories/([^/]+)/([^/]+)/pullrequests/([^/]+)/request\\-changes/(\\t{16})\\t{13})|(?:/repositories/([^/]+)/([^/]+)/pullrequests/([^/]+)/statuses/(\\t{17})\\t{12})|(?:/repositories/([^/]+)/([^/]+)/pullrequests/([^/]+)/properties/([^/]+)/([^/]+)/(\\t{18})\\t{11})|(?:/repositories/([^/]+)/([^/]+)/refs/(\\t{19})\\t{10})|(?:/repositories/([^/]+)/([^/]+)/refs/branches/(\\t{20})\\t{9})|(?:/repositories/([^/]+)/([^/]+)/refs/branches/([^/]+)/(\\t{21})\\t{8})|(?:/repositories/([^/]+)/([^/]+)/refs/tags/(\\t{22})\\t{7})|(?:/repositories/([^/]+)/([^/]+)/refs/tags/([^/]+)/(\\t{23})\\t{6})|(?:/repositories/([^/]+)/([^/]+)/src/(\\t{24})\\t{5})|(?:/repositories/([^/]+)/([^/]+)/src/([^/]+)/([^/]+)/(\\t{25})\\t{4})|(?:/repositories/([^/]+)/([^/]+)/versions/(\\t{26})\\t{3})|(?:/repositories/([^/]+)/([^/]+)/versions/([^/]+)/(\\t{27})\\t{2})|(?:/repositories/([^/]+)/([^/]+)/watchers/(\\t{28})\\t{1})|(?:/snippets/([^/]+)/(\\t{29})\\t{0}))$~',
        'suffix' => '/																													',
        'routeMap' => 
        array (
          '	' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_properties_app_key_property_name',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'app_key' => 'app_key',
              'property_name' => 'property_name',
            ),
          ),
          '		' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_pullrequests',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
            ),
          ),
          '			' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_pullrequests_activity',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
            ),
          ),
          '				' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'pull_request_id' => 'pull_request_id',
            ),
          ),
          '					' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_activity',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'pull_request_id' => 'pull_request_id',
            ),
          ),
          '						' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_approve',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'pull_request_id' => 'pull_request_id',
            ),
          ),
          '							' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_comments',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'pull_request_id' => 'pull_request_id',
            ),
          ),
          '								' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_comments_comment_id',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'pull_request_id' => 'pull_request_id',
              'comment_id' => 'comment_id',
            ),
          ),
          '									' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_commits',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'pull_request_id' => 'pull_request_id',
            ),
          ),
          '										' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_decline',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'pull_request_id' => 'pull_request_id',
            ),
          ),
          '											' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_diff',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'pull_request_id' => 'pull_request_id',
            ),
          ),
          '												' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_diffstat',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'pull_request_id' => 'pull_request_id',
            ),
          ),
          '													' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_merge',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'pull_request_id' => 'pull_request_id',
            ),
          ),
          '														' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_merge_task_status_task_id',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'pull_request_id' => 'pull_request_id',
              'task_id' => 'task_id',
            ),
          ),
          '															' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_patch',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'pull_request_id' => 'pull_request_id',
            ),
          ),
          '																' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_request_changes',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'pull_request_id' => 'pull_request_id',
            ),
          ),
          '																	' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_statuses',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'pull_request_id' => 'pull_request_id',
            ),
          ),
          '																		' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_pullrequests_pullrequest_id_properties_app_key_property_name',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'pullrequest_id' => 'pullrequest_id',
              'app_key' => 'app_key',
              'property_name' => 'property_name',
            ),
          ),
          '																			' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_refs',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
            ),
          ),
          '																				' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_refs_branches',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
            ),
          ),
          '																					' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_refs_branches_name',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'name' => 'name',
            ),
          ),
          '																						' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_refs_tags',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
            ),
          ),
          '																							' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_refs_tags_name',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'name' => 'name',
            ),
          ),
          '																								' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_src',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
            ),
          ),
          '																									' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_src_commit_path',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'commit' => 'commit',
              'path' => 'path',
            ),
          ),
          '																										' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_versions',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
            ),
          ),
          '																											' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_versions_version_id',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'version_id' => 'version_id',
            ),
          ),
          '																												' => 
          array (
            0 => 
            array (
              '_route' => 'repositories_workspace_repo_slug_watchers',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
            ),
          ),
          '																													' => 
          array (
            0 => 
            array (
              '_route' => 'snippets_workspace',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
            ),
          ),
        ),
      ),
      4 => 
      array (
        'regex' => '~^(?|(?:/snippets/([^/]+)/([^/]+)/(\\t{1})\\t{28})|(?:/snippets/([^/]+)/([^/]+)/comments/(\\t{2})\\t{27})|(?:/snippets/([^/]+)/([^/]+)/comments/([^/]+)/(\\t{3})\\t{26})|(?:/snippets/([^/]+)/([^/]+)/commits/(\\t{4})\\t{25})|(?:/snippets/([^/]+)/([^/]+)/commits/([^/]+)/(\\t{5})\\t{24})|(?:/snippets/([^/]+)/([^/]+)/files/([^/]+)/(\\t{6})\\t{23})|(?:/snippets/([^/]+)/([^/]+)/watch/(\\t{7})\\t{22})|(?:/snippets/([^/]+)/([^/]+)/watchers/(\\t{8})\\t{21})|(?:/snippets/([^/]+)/([^/]+)/([^/]+)/(\\t{9})\\t{20})|(?:/snippets/([^/]+)/([^/]+)/([^/]+)/files/([^/]+)/(\\t{10})\\t{19})|(?:/snippets/([^/]+)/([^/]+)/([^/]+)/diff/(\\t{11})\\t{18})|(?:/snippets/([^/]+)/([^/]+)/([^/]+)/patch/(\\t{12})\\t{17})|(?:/teams/([^/]+)/(\\t{13})\\t{16})|(?:/teams/([^/]+)/followers/(\\t{14})\\t{15})|(?:/teams/([^/]+)/following/(\\t{15})\\t{14})|(?:/teams/([^/]+)/hooks/(\\t{16})\\t{13})|(?:/teams/([^/]+)/hooks/([^/]+)/(\\t{17})\\t{12})|(?:/teams/([^/]+)/members/(\\t{18})\\t{11})|(?:/teams/([^/]+)/permissions/(\\t{19})\\t{10})|(?:/teams/([^/]+)/permissions/repositories/(\\t{20})\\t{9})|(?:/teams/([^/]+)/permissions/repositories/([^/]+)/(\\t{21})\\t{8})|(?:/teams/([^/]+)/pipelines_config/variables//(\\t{22})\\t{7})|(?:/teams/([^/]+)/pipelines_config/variables/([^/]+)/(\\t{23})\\t{6})|(?:/teams/([^/]+)/projects//(\\t{24})\\t{5})|(?:/teams/([^/]+)/projects/([^/]+)/(\\t{25})\\t{4})|(?:/teams/([^/]+)/search/code/(\\t{26})\\t{3})|(?:/teams/([^/]+)/repositories/(\\t{27})\\t{2})|(?:/user/emails/([^/]+)/(\\t{28})\\t{1})|(?:/users/([^/]+)/(\\t{29})\\t{0}))$~',
        'suffix' => '/																													',
        'routeMap' => 
        array (
          '	' => 
          array (
            0 => 
            array (
              '_route' => 'snippets_workspace_encoded_id',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'encoded_id' => 'encoded_id',
            ),
          ),
          '		' => 
          array (
            0 => 
            array (
              '_route' => 'snippets_workspace_encoded_id_comments',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'encoded_id' => 'encoded_id',
            ),
          ),
          '			' => 
          array (
            0 => 
            array (
              '_route' => 'snippets_workspace_encoded_id_comments_comment_id',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'encoded_id' => 'encoded_id',
              'comment_id' => 'comment_id',
            ),
          ),
          '				' => 
          array (
            0 => 
            array (
              '_route' => 'snippets_workspace_encoded_id_commits',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'encoded_id' => 'encoded_id',
            ),
          ),
          '					' => 
          array (
            0 => 
            array (
              '_route' => 'snippets_workspace_encoded_id_commits_revision',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'encoded_id' => 'encoded_id',
              'revision' => 'revision',
            ),
          ),
          '						' => 
          array (
            0 => 
            array (
              '_route' => 'snippets_workspace_encoded_id_files_path',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'encoded_id' => 'encoded_id',
              'path' => 'path',
            ),
          ),
          '							' => 
          array (
            0 => 
            array (
              '_route' => 'snippets_workspace_encoded_id_watch',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'encoded_id' => 'encoded_id',
            ),
          ),
          '								' => 
          array (
            0 => 
            array (
              '_route' => 'snippets_workspace_encoded_id_watchers',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'encoded_id' => 'encoded_id',
            ),
          ),
          '									' => 
          array (
            0 => 
            array (
              '_route' => 'snippets_workspace_encoded_id_node_id',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'encoded_id' => 'encoded_id',
              'node_id' => 'node_id',
            ),
          ),
          '										' => 
          array (
            0 => 
            array (
              '_route' => 'snippets_workspace_encoded_id_node_id_files_path',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'encoded_id' => 'encoded_id',
              'node_id' => 'node_id',
              'path' => 'path',
            ),
          ),
          '											' => 
          array (
            0 => 
            array (
              '_route' => 'snippets_workspace_encoded_id_revision_diff',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'encoded_id' => 'encoded_id',
              'revision' => 'revision',
            ),
          ),
          '												' => 
          array (
            0 => 
            array (
              '_route' => 'snippets_workspace_encoded_id_revision_patch',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'encoded_id' => 'encoded_id',
              'revision' => 'revision',
            ),
          ),
          '													' => 
          array (
            0 => 
            array (
              '_route' => 'teams_username',
            ),
            1 => 
            array (
              'username' => 'username',
            ),
          ),
          '														' => 
          array (
            0 => 
            array (
              '_route' => 'teams_username_followers',
            ),
            1 => 
            array (
              'username' => 'username',
            ),
          ),
          '															' => 
          array (
            0 => 
            array (
              '_route' => 'teams_username_following',
            ),
            1 => 
            array (
              'username' => 'username',
            ),
          ),
          '																' => 
          array (
            0 => 
            array (
              '_route' => 'teams_username_hooks',
            ),
            1 => 
            array (
              'username' => 'username',
            ),
          ),
          '																	' => 
          array (
            0 => 
            array (
              '_route' => 'teams_username_hooks_uid',
            ),
            1 => 
            array (
              'username' => 'username',
              'uid' => 'uid',
            ),
          ),
          '																		' => 
          array (
            0 => 
            array (
              '_route' => 'teams_username_members',
            ),
            1 => 
            array (
              'username' => 'username',
            ),
          ),
          '																			' => 
          array (
            0 => 
            array (
              '_route' => 'teams_username_permissions',
            ),
            1 => 
            array (
              'username' => 'username',
            ),
          ),
          '																				' => 
          array (
            0 => 
            array (
              '_route' => 'teams_username_permissions_repositories',
            ),
            1 => 
            array (
              'username' => 'username',
            ),
          ),
          '																					' => 
          array (
            0 => 
            array (
              '_route' => 'teams_username_permissions_repositories_repo_slug',
            ),
            1 => 
            array (
              'username' => 'username',
              'repo_slug' => 'repo_slug',
            ),
          ),
          '																						' => 
          array (
            0 => 
            array (
              '_route' => 'teams_username_pipelines_config_variables',
            ),
            1 => 
            array (
              'username' => 'username',
            ),
          ),
          '																							' => 
          array (
            0 => 
            array (
              '_route' => 'teams_username_pipelines_config_variables_variable_uuid',
            ),
            1 => 
            array (
              'username' => 'username',
              'variable_uuid' => 'variable_uuid',
            ),
          ),
          '																								' => 
          array (
            0 => 
            array (
              '_route' => 'teams_username_projects',
            ),
            1 => 
            array (
              'username' => 'username',
            ),
          ),
          '																									' => 
          array (
            0 => 
            array (
              '_route' => 'teams_username_projects_project_key',
            ),
            1 => 
            array (
              'username' => 'username',
              'project_key' => 'project_key',
            ),
          ),
          '																										' => 
          array (
            0 => 
            array (
              '_route' => 'teams_username_search_code',
            ),
            1 => 
            array (
              'username' => 'username',
            ),
          ),
          '																											' => 
          array (
            0 => 
            array (
              '_route' => 'teams_workspace_repositories',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
            ),
          ),
          '																												' => 
          array (
            0 => 
            array (
              '_route' => 'user_emails_email',
            ),
            1 => 
            array (
              'email' => 'email',
            ),
          ),
          '																													' => 
          array (
            0 => 
            array (
              '_route' => 'users_selected_user',
            ),
            1 => 
            array (
              'selected_user' => 'selected_user',
            ),
          ),
        ),
      ),
      5 => 
      array (
        'regex' => '~^(?|(?:/users/([^/]+)/hooks/(\\t{1})\\t{24})|(?:/users/([^/]+)/hooks/([^/]+)/(\\t{2})\\t{23})|(?:/users/([^/]+)/pipelines_config/variables//(\\t{3})\\t{22})|(?:/users/([^/]+)/pipelines_config/variables/([^/]+)/(\\t{4})\\t{21})|(?:/users/([^/]+)/properties/([^/]+)/([^/]+)/(\\t{5})\\t{20})|(?:/users/([^/]+)/search/code/(\\t{6})\\t{19})|(?:/users/([^/]+)/ssh\\-keys/(\\t{7})\\t{18})|(?:/users/([^/]+)/ssh\\-keys/([^/]+)/(\\t{8})\\t{17})|(?:/users/([^/]+)/members/(\\t{9})\\t{16})|(?:/users/([^/]+)/repositories/(\\t{10})\\t{15})|(?:/workspaces/([^/]+)/(\\t{11})\\t{14})|(?:/workspaces/([^/]+)/hooks/(\\t{12})\\t{13})|(?:/workspaces/([^/]+)/hooks/([^/]+)/(\\t{13})\\t{12})|(?:/workspaces/([^/]+)/members/(\\t{14})\\t{11})|(?:/workspaces/([^/]+)/members/([^/]+)/(\\t{15})\\t{10})|(?:/workspaces/([^/]+)/permissions/(\\t{16})\\t{9})|(?:/workspaces/([^/]+)/permissions/repositories/(\\t{17})\\t{8})|(?:/workspaces/([^/]+)/permissions/repositories/([^/]+)/(\\t{18})\\t{7})|(?:/workspaces/([^/]+)/pipelines\\-config/identity/oidc/\\.well\\-known/openid\\-configuration/(\\t{19})\\t{6})|(?:/workspaces/([^/]+)/pipelines\\-config/identity/oidc/keys\\.json/(\\t{20})\\t{5})|(?:/workspaces/([^/]+)/pipelines\\-config/variables/(\\t{21})\\t{4})|(?:/workspaces/([^/]+)/pipelines\\-config/variables/([^/]+)/(\\t{22})\\t{3})|(?:/workspaces/([^/]+)/projects/(\\t{23})\\t{2})|(?:/workspaces/([^/]+)/projects/([^/]+)/(\\t{24})\\t{1})|(?:/workspaces/([^/]+)/search/code/(\\t{25})\\t{0}))$~',
        'suffix' => '/																									',
        'routeMap' => 
        array (
          '	' => 
          array (
            0 => 
            array (
              '_route' => 'users_selected_user_hooks',
            ),
            1 => 
            array (
              'selected_user' => 'selected_user',
            ),
          ),
          '		' => 
          array (
            0 => 
            array (
              '_route' => 'users_selected_user_hooks_uid',
            ),
            1 => 
            array (
              'selected_user' => 'selected_user',
              'uid' => 'uid',
            ),
          ),
          '			' => 
          array (
            0 => 
            array (
              '_route' => 'users_selected_user_pipelines_config_variables',
            ),
            1 => 
            array (
              'selected_user' => 'selected_user',
            ),
          ),
          '				' => 
          array (
            0 => 
            array (
              '_route' => 'users_selected_user_pipelines_config_variables_variable_uuid',
            ),
            1 => 
            array (
              'selected_user' => 'selected_user',
              'variable_uuid' => 'variable_uuid',
            ),
          ),
          '					' => 
          array (
            0 => 
            array (
              '_route' => 'users_selected_user_properties_app_key_property_name',
            ),
            1 => 
            array (
              'selected_user' => 'selected_user',
              'app_key' => 'app_key',
              'property_name' => 'property_name',
            ),
          ),
          '						' => 
          array (
            0 => 
            array (
              '_route' => 'users_selected_user_search_code',
            ),
            1 => 
            array (
              'selected_user' => 'selected_user',
            ),
          ),
          '							' => 
          array (
            0 => 
            array (
              '_route' => 'users_selected_user_ssh_keys',
            ),
            1 => 
            array (
              'selected_user' => 'selected_user',
            ),
          ),
          '								' => 
          array (
            0 => 
            array (
              '_route' => 'users_selected_user_ssh_keys_key_id',
            ),
            1 => 
            array (
              'selected_user' => 'selected_user',
              'key_id' => 'key_id',
            ),
          ),
          '									' => 
          array (
            0 => 
            array (
              '_route' => 'users_username_members',
            ),
            1 => 
            array (
              'username' => 'username',
            ),
          ),
          '										' => 
          array (
            0 => 
            array (
              '_route' => 'users_workspace_repositories',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
            ),
          ),
          '											' => 
          array (
            0 => 
            array (
              '_route' => 'workspaces_workspace',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
            ),
          ),
          '												' => 
          array (
            0 => 
            array (
              '_route' => 'workspaces_workspace_hooks',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
            ),
          ),
          '													' => 
          array (
            0 => 
            array (
              '_route' => 'workspaces_workspace_hooks_uid',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'uid' => 'uid',
            ),
          ),
          '														' => 
          array (
            0 => 
            array (
              '_route' => 'workspaces_workspace_members',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
            ),
          ),
          '															' => 
          array (
            0 => 
            array (
              '_route' => 'workspaces_workspace_members_member',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'member' => 'member',
            ),
          ),
          '																' => 
          array (
            0 => 
            array (
              '_route' => 'workspaces_workspace_permissions',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
            ),
          ),
          '																	' => 
          array (
            0 => 
            array (
              '_route' => 'workspaces_workspace_permissions_repositories',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
            ),
          ),
          '																		' => 
          array (
            0 => 
            array (
              '_route' => 'workspaces_workspace_permissions_repositories_repo_slug',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
            ),
          ),
          '																			' => 
          array (
            0 => 
            array (
              '_route' => 'workspaces_workspace_pipelines_config_identity_oidc_well_known_openid_configuration',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
            ),
          ),
          '																				' => 
          array (
            0 => 
            array (
              '_route' => 'workspaces_workspace_pipelines_config_identity_oidc_keys_json',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
            ),
          ),
          '																					' => 
          array (
            0 => 
            array (
              '_route' => 'workspaces_workspace_pipelines_config_variables',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
            ),
          ),
          '																						' => 
          array (
            0 => 
            array (
              '_route' => 'workspaces_workspace_pipelines_config_variables_variable_uuid',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'variable_uuid' => 'variable_uuid',
            ),
          ),
          '																							' => 
          array (
            0 => 
            array (
              '_route' => 'workspaces_workspace_projects',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
            ),
          ),
          '																								' => 
          array (
            0 => 
            array (
              '_route' => 'workspaces_workspace_projects_project_key',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
              'project_key' => 'project_key',
            ),
          ),
          '																									' => 
          array (
            0 => 
            array (
              '_route' => 'workspaces_workspace_search_code',
            ),
            1 => 
            array (
              'workspace' => 'workspace',
            ),
          ),
        ),
      ),
    ),
  ),
);