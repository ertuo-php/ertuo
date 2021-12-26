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
        'regex' => '~^(?|/addon/linkers/([^/]+)(*MARK:a)|/addon/linkers/([^/]+)/values(*MARK:b)|/addon/linkers/([^/]+)/values/([^/]+)(*MARK:c)|/hook_events/([^/]+)(*MARK:d)|/pullrequests/([^/]+)(*MARK:e)|/repositories/([^/]+)(*MARK:f)|/repositories/([^/]+)/([^/]+)(*MARK:g)|/repositories/([^/]+)/([^/]+)/branch\\-restrictions(*MARK:h)|/repositories/([^/]+)/([^/]+)/branch\\-restrictions/([^/]+)(*MARK:i)|/repositories/([^/]+)/([^/]+)/branching\\-model(*MARK:j)|/repositories/([^/]+)/([^/]+)/branching\\-model/settings(*MARK:k)|/repositories/([^/]+)/([^/]+)/commit/([^/]+)(*MARK:l)|/repositories/([^/]+)/([^/]+)/commit/([^/]+)/approve(*MARK:m)|/repositories/([^/]+)/([^/]+)/commit/([^/]+)/comments(*MARK:n)|/repositories/([^/]+)/([^/]+)/commit/([^/]+)/comments/([^/]+)(*MARK:o)|/repositories/([^/]+)/([^/]+)/commit/([^/]+)/properties/([^/]+)/([^/]+)(*MARK:p)|/repositories/([^/]+)/([^/]+)/commit/([^/]+)/pullrequests(*MARK:q)|/repositories/([^/]+)/([^/]+)/commit/([^/]+)/reports(*MARK:r)|/repositories/([^/]+)/([^/]+)/commit/([^/]+)/reports/([^/]+)(*MARK:s)|/repositories/([^/]+)/([^/]+)/commit/([^/]+)/reports/([^/]+)/annotations(*MARK:t)|/repositories/([^/]+)/([^/]+)/commit/([^/]+)/reports/([^/]+)/annotations/([^/]+)(*MARK:u)|/repositories/([^/]+)/([^/]+)/commit/([^/]+)/statuses(*MARK:v)|/repositories/([^/]+)/([^/]+)/commit/([^/]+)/statuses/build(*MARK:w)|/repositories/([^/]+)/([^/]+)/commit/([^/]+)/statuses/build/([^/]+)(*MARK:x)|/repositories/([^/]+)/([^/]+)/commits(*MARK:y)|/repositories/([^/]+)/([^/]+)/commits/([^/]+)(*MARK:z)|/repositories/([^/]+)/([^/]+)/components(*MARK:aa)|/repositories/([^/]+)/([^/]+)/components/([^/]+)(*MARK:ab)|/repositories/([^/]+)/([^/]+)/default\\-reviewers(*MARK:ac))$~',
        'routeMap' => 
        array (
          'a' => 
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
          'b' => 
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
          'c' => 
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
          'd' => 
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
          'e' => 
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
          'f' => 
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
          'g' => 
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
          'h' => 
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
          'i' => 
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
          'j' => 
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
          'k' => 
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
          'l' => 
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
          'm' => 
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
          'n' => 
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
          'o' => 
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
          'p' => 
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
          'q' => 
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
          'r' => 
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
          's' => 
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
          't' => 
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
          'u' => 
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
          'v' => 
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
          'w' => 
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
          'x' => 
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
          'y' => 
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
          'z' => 
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
          'aa' => 
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
          'ab' => 
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
          'ac' => 
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
        'regex' => '~^(?|/repositories/([^/]+)/([^/]+)/default\\-reviewers/([^/]+)(*MARK:a)|/repositories/([^/]+)/([^/]+)/deploy\\-keys(*MARK:b)|/repositories/([^/]+)/([^/]+)/deploy\\-keys/([^/]+)(*MARK:c)|/repositories/([^/]+)/([^/]+)/deployments(*MARK:d)|/repositories/([^/]+)/([^/]+)/deployments/([^/]+)(*MARK:e)|/repositories/([^/]+)/([^/]+)/deployments_config/environments/([^/]+)/variables(*MARK:f)|/repositories/([^/]+)/([^/]+)/deployments_config/environments/([^/]+)/variables/([^/]+)(*MARK:g)|/repositories/([^/]+)/([^/]+)/diff/([^/]+)(*MARK:h)|/repositories/([^/]+)/([^/]+)/diffstat/([^/]+)(*MARK:i)|/repositories/([^/]+)/([^/]+)/downloads(*MARK:j)|/repositories/([^/]+)/([^/]+)/downloads/([^/]+)(*MARK:k)|/repositories/([^/]+)/([^/]+)/environments/(*MARK:l)|/repositories/([^/]+)/([^/]+)/environments/([^/]+)(*MARK:m)|/repositories/([^/]+)/([^/]+)/environments/([^/]+)/changes/(*MARK:n)|/repositories/([^/]+)/([^/]+)/filehistory/([^/]+)/([^/]+)(*MARK:o)|/repositories/([^/]+)/([^/]+)/forks(*MARK:p)|/repositories/([^/]+)/([^/]+)/hooks(*MARK:q)|/repositories/([^/]+)/([^/]+)/hooks/([^/]+)(*MARK:r)|/repositories/([^/]+)/([^/]+)/issues(*MARK:s)|/repositories/([^/]+)/([^/]+)/issues/export(*MARK:t)|/repositories/([^/]+)/([^/]+)/issues/export/([^/]+)\\-issues\\-([^/]+)\\.zip(*MARK:u)|/repositories/([^/]+)/([^/]+)/issues/import(*MARK:v)|/repositories/([^/]+)/([^/]+)/issues/([^/]+)(*MARK:w)|/repositories/([^/]+)/([^/]+)/issues/([^/]+)/attachments(*MARK:x)|/repositories/([^/]+)/([^/]+)/issues/([^/]+)/attachments/([^/]+)(*MARK:y)|/repositories/([^/]+)/([^/]+)/issues/([^/]+)/changes(*MARK:z)|/repositories/([^/]+)/([^/]+)/issues/([^/]+)/changes/([^/]+)(*MARK:aa)|/repositories/([^/]+)/([^/]+)/issues/([^/]+)/comments(*MARK:ab)|/repositories/([^/]+)/([^/]+)/issues/([^/]+)/comments/([^/]+)(*MARK:ac))$~',
        'routeMap' => 
        array (
          'a' => 
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
          'b' => 
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
          'c' => 
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
          'd' => 
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
          'e' => 
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
          'f' => 
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
          'g' => 
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
          'h' => 
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
          'i' => 
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
          'j' => 
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
          'k' => 
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
          'l' => 
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
          'm' => 
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
          'n' => 
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
          'o' => 
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
          'p' => 
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
          'q' => 
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
          'r' => 
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
          's' => 
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
          't' => 
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
          'u' => 
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
          'v' => 
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
          'w' => 
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
          'x' => 
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
          'y' => 
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
          'z' => 
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
          'aa' => 
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
          'ab' => 
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
          'ac' => 
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
        'regex' => '~^(?|/repositories/([^/]+)/([^/]+)/issues/([^/]+)/vote(*MARK:a)|/repositories/([^/]+)/([^/]+)/issues/([^/]+)/watch(*MARK:b)|/repositories/([^/]+)/([^/]+)/merge\\-base/([^/]+)(*MARK:c)|/repositories/([^/]+)/([^/]+)/milestones(*MARK:d)|/repositories/([^/]+)/([^/]+)/milestones/([^/]+)(*MARK:e)|/repositories/([^/]+)/([^/]+)/patch/([^/]+)(*MARK:f)|/repositories/([^/]+)/([^/]+)/pipelines\\-config/caches/(*MARK:g)|/repositories/([^/]+)/([^/]+)/pipelines\\-config/caches/([^/]+)(*MARK:h)|/repositories/([^/]+)/([^/]+)/pipelines\\-config/caches/([^/]+)/content\\-uri(*MARK:i)|/repositories/([^/]+)/([^/]+)/pipelines/(*MARK:j)|/repositories/([^/]+)/([^/]+)/pipelines/([^/]+)(*MARK:k)|/repositories/([^/]+)/([^/]+)/pipelines/([^/]+)/steps/(*MARK:l)|/repositories/([^/]+)/([^/]+)/pipelines/([^/]+)/steps/([^/]+)(*MARK:m)|/repositories/([^/]+)/([^/]+)/pipelines/([^/]+)/steps/([^/]+)/log(*MARK:n)|/repositories/([^/]+)/([^/]+)/pipelines/([^/]+)/steps/([^/]+)/logs/([^/]+)(*MARK:o)|/repositories/([^/]+)/([^/]+)/pipelines/([^/]+)/steps/([^/]+)/test_reports(*MARK:p)|/repositories/([^/]+)/([^/]+)/pipelines/([^/]+)/steps/([^/]+)/test_reports/test_cases(*MARK:q)|/repositories/([^/]+)/([^/]+)/pipelines/([^/]+)/steps/([^/]+)/test_reports/test_cases/([^/]+)/test_case_reasons(*MARK:r)|/repositories/([^/]+)/([^/]+)/pipelines/([^/]+)/stopPipeline(*MARK:s)|/repositories/([^/]+)/([^/]+)/pipelines_config(*MARK:t)|/repositories/([^/]+)/([^/]+)/pipelines_config/build_number(*MARK:u)|/repositories/([^/]+)/([^/]+)/pipelines_config/schedules/(*MARK:v)|/repositories/([^/]+)/([^/]+)/pipelines_config/schedules/([^/]+)(*MARK:w)|/repositories/([^/]+)/([^/]+)/pipelines_config/schedules/([^/]+)/executions/(*MARK:x)|/repositories/([^/]+)/([^/]+)/pipelines_config/ssh/key_pair(*MARK:y)|/repositories/([^/]+)/([^/]+)/pipelines_config/ssh/known_hosts/(*MARK:z)|/repositories/([^/]+)/([^/]+)/pipelines_config/ssh/known_hosts/([^/]+)(*MARK:aa)|/repositories/([^/]+)/([^/]+)/pipelines_config/variables/(*MARK:ab)|/repositories/([^/]+)/([^/]+)/pipelines_config/variables/([^/]+)(*MARK:ac))$~',
        'routeMap' => 
        array (
          'a' => 
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
          'b' => 
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
          'c' => 
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
          'd' => 
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
          'e' => 
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
          'f' => 
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
          'g' => 
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
          'h' => 
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
          'i' => 
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
          'j' => 
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
          'k' => 
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
          'l' => 
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
          'm' => 
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
          'n' => 
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
          'o' => 
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
          'p' => 
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
          'q' => 
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
          'r' => 
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
          's' => 
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
          't' => 
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
          'u' => 
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
          'v' => 
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
          'w' => 
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
          'x' => 
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
          'y' => 
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
          'z' => 
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
          'aa' => 
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
          'ab' => 
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
          'ac' => 
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
        'regex' => '~^(?|/repositories/([^/]+)/([^/]+)/properties/([^/]+)/([^/]+)(*MARK:a)|/repositories/([^/]+)/([^/]+)/pullrequests(*MARK:b)|/repositories/([^/]+)/([^/]+)/pullrequests/activity(*MARK:c)|/repositories/([^/]+)/([^/]+)/pullrequests/([^/]+)(*MARK:d)|/repositories/([^/]+)/([^/]+)/pullrequests/([^/]+)/activity(*MARK:e)|/repositories/([^/]+)/([^/]+)/pullrequests/([^/]+)/approve(*MARK:f)|/repositories/([^/]+)/([^/]+)/pullrequests/([^/]+)/comments(*MARK:g)|/repositories/([^/]+)/([^/]+)/pullrequests/([^/]+)/comments/([^/]+)(*MARK:h)|/repositories/([^/]+)/([^/]+)/pullrequests/([^/]+)/commits(*MARK:i)|/repositories/([^/]+)/([^/]+)/pullrequests/([^/]+)/decline(*MARK:j)|/repositories/([^/]+)/([^/]+)/pullrequests/([^/]+)/diff(*MARK:k)|/repositories/([^/]+)/([^/]+)/pullrequests/([^/]+)/diffstat(*MARK:l)|/repositories/([^/]+)/([^/]+)/pullrequests/([^/]+)/merge(*MARK:m)|/repositories/([^/]+)/([^/]+)/pullrequests/([^/]+)/merge/task\\-status/([^/]+)(*MARK:n)|/repositories/([^/]+)/([^/]+)/pullrequests/([^/]+)/patch(*MARK:o)|/repositories/([^/]+)/([^/]+)/pullrequests/([^/]+)/request\\-changes(*MARK:p)|/repositories/([^/]+)/([^/]+)/pullrequests/([^/]+)/statuses(*MARK:q)|/repositories/([^/]+)/([^/]+)/pullrequests/([^/]+)/properties/([^/]+)/([^/]+)(*MARK:r)|/repositories/([^/]+)/([^/]+)/refs(*MARK:s)|/repositories/([^/]+)/([^/]+)/refs/branches(*MARK:t)|/repositories/([^/]+)/([^/]+)/refs/branches/([^/]+)(*MARK:u)|/repositories/([^/]+)/([^/]+)/refs/tags(*MARK:v)|/repositories/([^/]+)/([^/]+)/refs/tags/([^/]+)(*MARK:w)|/repositories/([^/]+)/([^/]+)/src(*MARK:x)|/repositories/([^/]+)/([^/]+)/src/([^/]+)/([^/]+)(*MARK:y)|/repositories/([^/]+)/([^/]+)/versions(*MARK:z)|/repositories/([^/]+)/([^/]+)/versions/([^/]+)(*MARK:aa)|/repositories/([^/]+)/([^/]+)/watchers(*MARK:ab)|/snippets/([^/]+)(*MARK:ac))$~',
        'routeMap' => 
        array (
          'a' => 
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
          'b' => 
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
          'c' => 
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
          'd' => 
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
          'e' => 
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
          'f' => 
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
          'g' => 
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
          'h' => 
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
          'i' => 
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
          'j' => 
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
          'k' => 
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
          'l' => 
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
          'm' => 
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
          'n' => 
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
          'o' => 
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
          'p' => 
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
          'q' => 
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
          'r' => 
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
          's' => 
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
          't' => 
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
          'u' => 
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
          'v' => 
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
          'w' => 
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
          'x' => 
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
          'y' => 
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
          'z' => 
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
          'aa' => 
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
          'ab' => 
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
          'ac' => 
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
        'regex' => '~^(?|/snippets/([^/]+)/([^/]+)(*MARK:a)|/snippets/([^/]+)/([^/]+)/comments(*MARK:b)|/snippets/([^/]+)/([^/]+)/comments/([^/]+)(*MARK:c)|/snippets/([^/]+)/([^/]+)/commits(*MARK:d)|/snippets/([^/]+)/([^/]+)/commits/([^/]+)(*MARK:e)|/snippets/([^/]+)/([^/]+)/files/([^/]+)(*MARK:f)|/snippets/([^/]+)/([^/]+)/watch(*MARK:g)|/snippets/([^/]+)/([^/]+)/watchers(*MARK:h)|/snippets/([^/]+)/([^/]+)/([^/]+)(*MARK:i)|/snippets/([^/]+)/([^/]+)/([^/]+)/files/([^/]+)(*MARK:j)|/snippets/([^/]+)/([^/]+)/([^/]+)/diff(*MARK:k)|/snippets/([^/]+)/([^/]+)/([^/]+)/patch(*MARK:l)|/teams/([^/]+)(*MARK:m)|/teams/([^/]+)/followers(*MARK:n)|/teams/([^/]+)/following(*MARK:o)|/teams/([^/]+)/hooks(*MARK:p)|/teams/([^/]+)/hooks/([^/]+)(*MARK:q)|/teams/([^/]+)/members(*MARK:r)|/teams/([^/]+)/permissions(*MARK:s)|/teams/([^/]+)/permissions/repositories(*MARK:t)|/teams/([^/]+)/permissions/repositories/([^/]+)(*MARK:u)|/teams/([^/]+)/pipelines_config/variables/(*MARK:v)|/teams/([^/]+)/pipelines_config/variables/([^/]+)(*MARK:w)|/teams/([^/]+)/projects/(*MARK:x)|/teams/([^/]+)/projects/([^/]+)(*MARK:y)|/teams/([^/]+)/search/code(*MARK:z)|/teams/([^/]+)/repositories(*MARK:aa)|/user/emails/([^/]+)(*MARK:ab)|/users/([^/]+)(*MARK:ac))$~',
        'routeMap' => 
        array (
          'a' => 
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
          'b' => 
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
          'c' => 
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
          'd' => 
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
          'e' => 
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
          'f' => 
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
          'g' => 
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
          'h' => 
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
          'i' => 
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
          'j' => 
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
          'k' => 
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
          'l' => 
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
          'm' => 
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
          'n' => 
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
          'o' => 
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
          'p' => 
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
          'q' => 
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
          'r' => 
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
          's' => 
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
          't' => 
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
          'u' => 
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
          'v' => 
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
          'w' => 
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
          'x' => 
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
          'y' => 
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
          'z' => 
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
          'aa' => 
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
          'ab' => 
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
          'ac' => 
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
        'regex' => '~^(?|/users/([^/]+)/hooks(*MARK:a)|/users/([^/]+)/hooks/([^/]+)(*MARK:b)|/users/([^/]+)/pipelines_config/variables/(*MARK:c)|/users/([^/]+)/pipelines_config/variables/([^/]+)(*MARK:d)|/users/([^/]+)/properties/([^/]+)/([^/]+)(*MARK:e)|/users/([^/]+)/search/code(*MARK:f)|/users/([^/]+)/ssh\\-keys(*MARK:g)|/users/([^/]+)/ssh\\-keys/([^/]+)(*MARK:h)|/users/([^/]+)/members(*MARK:i)|/users/([^/]+)/repositories(*MARK:j)|/workspaces/([^/]+)(*MARK:k)|/workspaces/([^/]+)/hooks(*MARK:l)|/workspaces/([^/]+)/hooks/([^/]+)(*MARK:m)|/workspaces/([^/]+)/members(*MARK:n)|/workspaces/([^/]+)/members/([^/]+)(*MARK:o)|/workspaces/([^/]+)/permissions(*MARK:p)|/workspaces/([^/]+)/permissions/repositories(*MARK:q)|/workspaces/([^/]+)/permissions/repositories/([^/]+)(*MARK:r)|/workspaces/([^/]+)/pipelines\\-config/identity/oidc/\\.well\\-known/openid\\-configuration(*MARK:s)|/workspaces/([^/]+)/pipelines\\-config/identity/oidc/keys\\.json(*MARK:t)|/workspaces/([^/]+)/pipelines\\-config/variables(*MARK:u)|/workspaces/([^/]+)/pipelines\\-config/variables/([^/]+)(*MARK:v)|/workspaces/([^/]+)/projects(*MARK:w)|/workspaces/([^/]+)/projects/([^/]+)(*MARK:x)|/workspaces/([^/]+)/search/code(*MARK:y))$~',
        'routeMap' => 
        array (
          'a' => 
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
          'b' => 
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
          'c' => 
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
          'd' => 
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
          'e' => 
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
          'f' => 
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
          'g' => 
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
          'h' => 
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
          'i' => 
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
          'j' => 
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
          'k' => 
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
          'l' => 
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
          'm' => 
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
          'n' => 
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
          'o' => 
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
          'p' => 
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
          'q' => 
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
          'r' => 
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
          's' => 
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
          't' => 
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
          'u' => 
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
          'v' => 
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
          'w' => 
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
          'x' => 
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
          'y' => 
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