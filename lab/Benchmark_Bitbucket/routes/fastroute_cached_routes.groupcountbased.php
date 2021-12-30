<?php return array (
  0 => 
  array (
    'GET' => 
    array (
      '/addon' => 'addon',
      '/addon/linkers' => 'addon_linkers',
      '/hook_events' => 'hook_events',
      '/repositories' => 'repositories',
      '/snippets' => 'snippets',
      '/teams' => 'teams',
      '/user' => 'user',
      '/user/emails' => 'user_emails',
      '/user/permissions/repositories' => 'user_permissions_repositories',
      '/user/permissions/teams' => 'user_permissions_teams',
      '/user/permissions/workspaces' => 'user_permissions_workspaces',
      '/workspaces' => 'workspaces',
    ),
  ),
  1 => 
  array (
    'GET' => 
    array (
      0 => 
      array (
        'regex' => '~^(?|/addon/linkers/([^/]+)|/addon/linkers/([^/]+)/values()|/addon/linkers/([^/]+)/values/([^/]+)()|/hook_events/([^/]+)()()()|/pullrequests/([^/]+)()()()()|/repositories/([^/]+)()()()()()|/repositories/([^/]+)/([^/]+)()()()()()|/repositories/([^/]+)/([^/]+)/branch\\-restrictions()()()()()()|/repositories/([^/]+)/([^/]+)/branch\\-restrictions/([^/]+)()()()()()()|/repositories/([^/]+)/([^/]+)/branching\\-model()()()()()()()())$~',
        'routeMap' => 
        array (
          2 => 
          array (
            0 => 'addon_linkers_linker_key',
            1 => 
            array (
              'linker_key' => 'linker_key',
            ),
          ),
          3 => 
          array (
            0 => 'addon_linkers_linker_key_values',
            1 => 
            array (
              'linker_key' => 'linker_key',
            ),
          ),
          4 => 
          array (
            0 => 'addon_linkers_linker_key_values_value_id',
            1 => 
            array (
              'linker_key' => 'linker_key',
              'value_id' => 'value_id',
            ),
          ),
          5 => 
          array (
            0 => 'hook_events_subject_type',
            1 => 
            array (
              'subject_type' => 'subject_type',
            ),
          ),
          6 => 
          array (
            0 => 'pullrequests_selected_user',
            1 => 
            array (
              'selected_user' => 'selected_user',
            ),
          ),
          7 => 
          array (
            0 => 'repositories_workspace',
            1 => 
            array (
              'workspace' => 'workspace',
            ),
          ),
          8 => 
          array (
            0 => 'repositories_workspace_repo_slug',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
            ),
          ),
          9 => 
          array (
            0 => 'repositories_workspace_repo_slug_branch_restrictions',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
            ),
          ),
          10 => 
          array (
            0 => 'repositories_workspace_repo_slug_branch_restrictions_id',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'id' => 'id',
            ),
          ),
          11 => 
          array (
            0 => 'repositories_workspace_repo_slug_branching_model',
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
        'regex' => '~^(?|/repositories/([^/]+)/([^/]+)/branching\\-model/settings|/repositories/([^/]+)/([^/]+)/commit/([^/]+)|/repositories/([^/]+)/([^/]+)/commit/([^/]+)/approve()|/repositories/([^/]+)/([^/]+)/commit/([^/]+)/comments()()|/repositories/([^/]+)/([^/]+)/commit/([^/]+)/comments/([^/]+)()()|/repositories/([^/]+)/([^/]+)/commit/([^/]+)/properties/([^/]+)/([^/]+)()()|/repositories/([^/]+)/([^/]+)/commit/([^/]+)/pullrequests()()()()()|/repositories/([^/]+)/([^/]+)/commit/([^/]+)/reports()()()()()()|/repositories/([^/]+)/([^/]+)/commit/([^/]+)/reports/([^/]+)()()()()()()|/repositories/([^/]+)/([^/]+)/commit/([^/]+)/reports/([^/]+)/annotations()()()()()()())$~',
        'routeMap' => 
        array (
          3 => 
          array (
            0 => 'repositories_workspace_repo_slug_branching_model_settings',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
            ),
          ),
          4 => 
          array (
            0 => 'repositories_workspace_repo_slug_commit_commit',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'commit' => 'commit',
            ),
          ),
          5 => 
          array (
            0 => 'repositories_workspace_repo_slug_commit_commit_approve',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'commit' => 'commit',
            ),
          ),
          6 => 
          array (
            0 => 'repositories_workspace_repo_slug_commit_commit_comments',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'commit' => 'commit',
            ),
          ),
          7 => 
          array (
            0 => 'repositories_workspace_repo_slug_commit_commit_comments_comment_id',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'commit' => 'commit',
              'comment_id' => 'comment_id',
            ),
          ),
          8 => 
          array (
            0 => 'repositories_workspace_repo_slug_commit_commit_properties_app_key_property_name',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'commit' => 'commit',
              'app_key' => 'app_key',
              'property_name' => 'property_name',
            ),
          ),
          9 => 
          array (
            0 => 'repositories_workspace_repo_slug_commit_commit_pullrequests',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'commit' => 'commit',
            ),
          ),
          10 => 
          array (
            0 => 'repositories_workspace_repo_slug_commit_commit_reports',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'commit' => 'commit',
            ),
          ),
          11 => 
          array (
            0 => 'repositories_workspace_repo_slug_commit_commit_reports_reportId',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'commit' => 'commit',
              'reportId' => 'reportId',
            ),
          ),
          12 => 
          array (
            0 => 'repositories_workspace_repo_slug_commit_commit_reports_reportId_annotations',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'commit' => 'commit',
              'reportId' => 'reportId',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'regex' => '~^(?|/repositories/([^/]+)/([^/]+)/commit/([^/]+)/reports/([^/]+)/annotations/([^/]+)|/repositories/([^/]+)/([^/]+)/commit/([^/]+)/statuses()()()|/repositories/([^/]+)/([^/]+)/commit/([^/]+)/statuses/build()()()()|/repositories/([^/]+)/([^/]+)/commit/([^/]+)/statuses/build/([^/]+)()()()()|/repositories/([^/]+)/([^/]+)/commits()()()()()()()|/repositories/([^/]+)/([^/]+)/commits/([^/]+)()()()()()()()|/repositories/([^/]+)/([^/]+)/components()()()()()()()()()|/repositories/([^/]+)/([^/]+)/components/([^/]+)()()()()()()()()()|/repositories/([^/]+)/([^/]+)/default\\-reviewers()()()()()()()()()()()|/repositories/([^/]+)/([^/]+)/default\\-reviewers/([^/]+)()()()()()()()()()()())$~',
        'routeMap' => 
        array (
          6 => 
          array (
            0 => 'repositories_workspace_repo_slug_commit_commit_reports_reportId_annotations_annotationId',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'commit' => 'commit',
              'reportId' => 'reportId',
              'annotationId' => 'annotationId',
            ),
          ),
          7 => 
          array (
            0 => 'repositories_workspace_repo_slug_commit_commit_statuses',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'commit' => 'commit',
            ),
          ),
          8 => 
          array (
            0 => 'repositories_workspace_repo_slug_commit_commit_statuses_build',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'commit' => 'commit',
            ),
          ),
          9 => 
          array (
            0 => 'repositories_workspace_repo_slug_commit_commit_statuses_build_key',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'commit' => 'commit',
              'key' => 'key',
            ),
          ),
          10 => 
          array (
            0 => 'repositories_workspace_repo_slug_commits',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
            ),
          ),
          11 => 
          array (
            0 => 'repositories_workspace_repo_slug_commits_revision',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'revision' => 'revision',
            ),
          ),
          12 => 
          array (
            0 => 'repositories_workspace_repo_slug_components',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
            ),
          ),
          13 => 
          array (
            0 => 'repositories_workspace_repo_slug_components_component_id',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'component_id' => 'component_id',
            ),
          ),
          14 => 
          array (
            0 => 'repositories_workspace_repo_slug_default_reviewers',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
            ),
          ),
          15 => 
          array (
            0 => 'repositories_workspace_repo_slug_default_reviewers_target_username',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'target_username' => 'target_username',
            ),
          ),
        ),
      ),
      3 => 
      array (
        'regex' => '~^(?|/repositories/([^/]+)/([^/]+)/deploy\\-keys|/repositories/([^/]+)/([^/]+)/deploy\\-keys/([^/]+)|/repositories/([^/]+)/([^/]+)/deployments()()|/repositories/([^/]+)/([^/]+)/deployments/([^/]+)()()|/repositories/([^/]+)/([^/]+)/deployments_config/environments/([^/]+)/variables()()()|/repositories/([^/]+)/([^/]+)/deployments_config/environments/([^/]+)/variables/([^/]+)()()()|/repositories/([^/]+)/([^/]+)/diff/([^/]+)()()()()()|/repositories/([^/]+)/([^/]+)/diffstat/([^/]+)()()()()()()|/repositories/([^/]+)/([^/]+)/downloads()()()()()()()()|/repositories/([^/]+)/([^/]+)/downloads/([^/]+)()()()()()()()())$~',
        'routeMap' => 
        array (
          3 => 
          array (
            0 => 'repositories_workspace_repo_slug_deploy_keys',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
            ),
          ),
          4 => 
          array (
            0 => 'repositories_workspace_repo_slug_deploy_keys_key_id',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'key_id' => 'key_id',
            ),
          ),
          5 => 
          array (
            0 => 'repositories_workspace_repo_slug_deployments',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
            ),
          ),
          6 => 
          array (
            0 => 'repositories_workspace_repo_slug_deployments_deployment_uuid',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'deployment_uuid' => 'deployment_uuid',
            ),
          ),
          7 => 
          array (
            0 => 'repositories_workspace_repo_slug_deployments_config_environments_environment_uuid_variables',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'environment_uuid' => 'environment_uuid',
            ),
          ),
          8 => 
          array (
            0 => 'repositories_workspace_repo_slug_deployments_config_environments_environment_uuid_variables_variable_uuid',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'environment_uuid' => 'environment_uuid',
              'variable_uuid' => 'variable_uuid',
            ),
          ),
          9 => 
          array (
            0 => 'repositories_workspace_repo_slug_diff_spec',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'spec' => 'spec',
            ),
          ),
          10 => 
          array (
            0 => 'repositories_workspace_repo_slug_diffstat_spec',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'spec' => 'spec',
            ),
          ),
          11 => 
          array (
            0 => 'repositories_workspace_repo_slug_downloads',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
            ),
          ),
          12 => 
          array (
            0 => 'repositories_workspace_repo_slug_downloads_filename',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'filename' => 'filename',
            ),
          ),
        ),
      ),
      4 => 
      array (
        'regex' => '~^(?|/repositories/([^/]+)/([^/]+)/environments/|/repositories/([^/]+)/([^/]+)/environments/([^/]+)|/repositories/([^/]+)/([^/]+)/environments/([^/]+)/changes/()|/repositories/([^/]+)/([^/]+)/filehistory/([^/]+)/([^/]+)()|/repositories/([^/]+)/([^/]+)/forks()()()()|/repositories/([^/]+)/([^/]+)/hooks()()()()()|/repositories/([^/]+)/([^/]+)/hooks/([^/]+)()()()()()|/repositories/([^/]+)/([^/]+)/issues()()()()()()()|/repositories/([^/]+)/([^/]+)/issues/export()()()()()()()()|/repositories/([^/]+)/([^/]+)/issues/export/([^/]+)\\-issues\\-([^/]+)\\.zip()()()()()()())$~',
        'routeMap' => 
        array (
          3 => 
          array (
            0 => 'repositories_workspace_repo_slug_environments',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
            ),
          ),
          4 => 
          array (
            0 => 'repositories_workspace_repo_slug_environments_environment_uuid',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'environment_uuid' => 'environment_uuid',
            ),
          ),
          5 => 
          array (
            0 => 'repositories_workspace_repo_slug_environments_environment_uuid_changes',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'environment_uuid' => 'environment_uuid',
            ),
          ),
          6 => 
          array (
            0 => 'repositories_workspace_repo_slug_filehistory_commit_path',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'commit' => 'commit',
              'path' => 'path',
            ),
          ),
          7 => 
          array (
            0 => 'repositories_workspace_repo_slug_forks',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
            ),
          ),
          8 => 
          array (
            0 => 'repositories_workspace_repo_slug_hooks',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
            ),
          ),
          9 => 
          array (
            0 => 'repositories_workspace_repo_slug_hooks_uid',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'uid' => 'uid',
            ),
          ),
          10 => 
          array (
            0 => 'repositories_workspace_repo_slug_issues',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
            ),
          ),
          11 => 
          array (
            0 => 'repositories_workspace_repo_slug_issues_export',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
            ),
          ),
          12 => 
          array (
            0 => 'repositories_workspace_repo_slug_issues_export_repo_name_issues_task_id_zip',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'repo_name' => 'repo_name',
              'task_id' => 'task_id',
            ),
          ),
        ),
      ),
      5 => 
      array (
        'regex' => '~^(?|/repositories/([^/]+)/([^/]+)/issues/import|/repositories/([^/]+)/([^/]+)/issues/([^/]+)|/repositories/([^/]+)/([^/]+)/issues/([^/]+)/attachments()|/repositories/([^/]+)/([^/]+)/issues/([^/]+)/attachments/([^/]+)()|/repositories/([^/]+)/([^/]+)/issues/([^/]+)/changes()()()|/repositories/([^/]+)/([^/]+)/issues/([^/]+)/changes/([^/]+)()()()|/repositories/([^/]+)/([^/]+)/issues/([^/]+)/comments()()()()()|/repositories/([^/]+)/([^/]+)/issues/([^/]+)/comments/([^/]+)()()()()()|/repositories/([^/]+)/([^/]+)/issues/([^/]+)/vote()()()()()()()|/repositories/([^/]+)/([^/]+)/issues/([^/]+)/watch()()()()()()()())$~',
        'routeMap' => 
        array (
          3 => 
          array (
            0 => 'repositories_workspace_repo_slug_issues_import',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
            ),
          ),
          4 => 
          array (
            0 => 'repositories_workspace_repo_slug_issues_issue_id',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'issue_id' => 'issue_id',
            ),
          ),
          5 => 
          array (
            0 => 'repositories_workspace_repo_slug_issues_issue_id_attachments',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'issue_id' => 'issue_id',
            ),
          ),
          6 => 
          array (
            0 => 'repositories_workspace_repo_slug_issues_issue_id_attachments_path',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'issue_id' => 'issue_id',
              'path' => 'path',
            ),
          ),
          7 => 
          array (
            0 => 'repositories_workspace_repo_slug_issues_issue_id_changes',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'issue_id' => 'issue_id',
            ),
          ),
          8 => 
          array (
            0 => 'repositories_workspace_repo_slug_issues_issue_id_changes_change_id',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'issue_id' => 'issue_id',
              'change_id' => 'change_id',
            ),
          ),
          9 => 
          array (
            0 => 'repositories_workspace_repo_slug_issues_issue_id_comments',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'issue_id' => 'issue_id',
            ),
          ),
          10 => 
          array (
            0 => 'repositories_workspace_repo_slug_issues_issue_id_comments_comment_id',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'issue_id' => 'issue_id',
              'comment_id' => 'comment_id',
            ),
          ),
          11 => 
          array (
            0 => 'repositories_workspace_repo_slug_issues_issue_id_vote',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'issue_id' => 'issue_id',
            ),
          ),
          12 => 
          array (
            0 => 'repositories_workspace_repo_slug_issues_issue_id_watch',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'issue_id' => 'issue_id',
            ),
          ),
        ),
      ),
      6 => 
      array (
        'regex' => '~^(?|/repositories/([^/]+)/([^/]+)/merge\\-base/([^/]+)|/repositories/([^/]+)/([^/]+)/milestones()()|/repositories/([^/]+)/([^/]+)/milestones/([^/]+)()()|/repositories/([^/]+)/([^/]+)/patch/([^/]+)()()()|/repositories/([^/]+)/([^/]+)/pipelines\\-config/caches/()()()()()|/repositories/([^/]+)/([^/]+)/pipelines\\-config/caches/([^/]+)()()()()()|/repositories/([^/]+)/([^/]+)/pipelines\\-config/caches/([^/]+)/content\\-uri()()()()()()|/repositories/([^/]+)/([^/]+)/pipelines/()()()()()()()()|/repositories/([^/]+)/([^/]+)/pipelines/([^/]+)()()()()()()()()|/repositories/([^/]+)/([^/]+)/pipelines/([^/]+)/steps/()()()()()()()()())$~',
        'routeMap' => 
        array (
          4 => 
          array (
            0 => 'repositories_workspace_repo_slug_merge_base_revspec',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'revspec' => 'revspec',
            ),
          ),
          5 => 
          array (
            0 => 'repositories_workspace_repo_slug_milestones',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
            ),
          ),
          6 => 
          array (
            0 => 'repositories_workspace_repo_slug_milestones_milestone_id',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'milestone_id' => 'milestone_id',
            ),
          ),
          7 => 
          array (
            0 => 'repositories_workspace_repo_slug_patch_spec',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'spec' => 'spec',
            ),
          ),
          8 => 
          array (
            0 => 'repositories_workspace_repo_slug_pipelines_config_caches',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
            ),
          ),
          9 => 
          array (
            0 => 'repositories_workspace_repo_slug_pipelines_config_caches_cache_uuid',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'cache_uuid' => 'cache_uuid',
            ),
          ),
          10 => 
          array (
            0 => 'repositories_workspace_repo_slug_pipelines_config_caches_cache_uuid_content_uri',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'cache_uuid' => 'cache_uuid',
            ),
          ),
          11 => 
          array (
            0 => 'repositories_workspace_repo_slug_pipelines',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
            ),
          ),
          12 => 
          array (
            0 => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'pipeline_uuid' => 'pipeline_uuid',
            ),
          ),
          13 => 
          array (
            0 => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'pipeline_uuid' => 'pipeline_uuid',
            ),
          ),
        ),
      ),
      7 => 
      array (
        'regex' => '~^(?|/repositories/([^/]+)/([^/]+)/pipelines/([^/]+)/steps/([^/]+)|/repositories/([^/]+)/([^/]+)/pipelines/([^/]+)/steps/([^/]+)/log()|/repositories/([^/]+)/([^/]+)/pipelines/([^/]+)/steps/([^/]+)/logs/([^/]+)()|/repositories/([^/]+)/([^/]+)/pipelines/([^/]+)/steps/([^/]+)/test_reports()()()|/repositories/([^/]+)/([^/]+)/pipelines/([^/]+)/steps/([^/]+)/test_reports/test_cases()()()()|/repositories/([^/]+)/([^/]+)/pipelines/([^/]+)/steps/([^/]+)/test_reports/test_cases/([^/]+)/test_case_reasons()()()()|/repositories/([^/]+)/([^/]+)/pipelines/([^/]+)/stopPipeline()()()()()()()|/repositories/([^/]+)/([^/]+)/pipelines_config()()()()()()()()()|/repositories/([^/]+)/([^/]+)/pipelines_config/build_number()()()()()()()()()()|/repositories/([^/]+)/([^/]+)/pipelines_config/schedules/()()()()()()()()()()())$~',
        'routeMap' => 
        array (
          5 => 
          array (
            0 => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps_step_uuid',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'pipeline_uuid' => 'pipeline_uuid',
              'step_uuid' => 'step_uuid',
            ),
          ),
          6 => 
          array (
            0 => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps_step_uuid_log',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'pipeline_uuid' => 'pipeline_uuid',
              'step_uuid' => 'step_uuid',
            ),
          ),
          7 => 
          array (
            0 => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps_step_uuid_logs_log_uuid',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'pipeline_uuid' => 'pipeline_uuid',
              'step_uuid' => 'step_uuid',
              'log_uuid' => 'log_uuid',
            ),
          ),
          8 => 
          array (
            0 => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps_step_uuid_test_reports',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'pipeline_uuid' => 'pipeline_uuid',
              'step_uuid' => 'step_uuid',
            ),
          ),
          9 => 
          array (
            0 => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps_step_uuid_test_reports_test_cases',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'pipeline_uuid' => 'pipeline_uuid',
              'step_uuid' => 'step_uuid',
            ),
          ),
          10 => 
          array (
            0 => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps_step_uuid_test_reports_test_cases_test_case_uuid_test_case_reasons',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'pipeline_uuid' => 'pipeline_uuid',
              'step_uuid' => 'step_uuid',
              'test_case_uuid' => 'test_case_uuid',
            ),
          ),
          11 => 
          array (
            0 => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_stopPipeline',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'pipeline_uuid' => 'pipeline_uuid',
            ),
          ),
          12 => 
          array (
            0 => 'repositories_workspace_repo_slug_pipelines_config',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
            ),
          ),
          13 => 
          array (
            0 => 'repositories_workspace_repo_slug_pipelines_config_build_number',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
            ),
          ),
          14 => 
          array (
            0 => 'repositories_workspace_repo_slug_pipelines_config_schedules',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
            ),
          ),
        ),
      ),
      8 => 
      array (
        'regex' => '~^(?|/repositories/([^/]+)/([^/]+)/pipelines_config/schedules/([^/]+)|/repositories/([^/]+)/([^/]+)/pipelines_config/schedules/([^/]+)/executions/()|/repositories/([^/]+)/([^/]+)/pipelines_config/ssh/key_pair()()()|/repositories/([^/]+)/([^/]+)/pipelines_config/ssh/known_hosts/()()()()|/repositories/([^/]+)/([^/]+)/pipelines_config/ssh/known_hosts/([^/]+)()()()()|/repositories/([^/]+)/([^/]+)/pipelines_config/variables/()()()()()()|/repositories/([^/]+)/([^/]+)/pipelines_config/variables/([^/]+)()()()()()()|/repositories/([^/]+)/([^/]+)/properties/([^/]+)/([^/]+)()()()()()()|/repositories/([^/]+)/([^/]+)/pullrequests()()()()()()()()()|/repositories/([^/]+)/([^/]+)/pullrequests/activity()()()()()()()()()())$~',
        'routeMap' => 
        array (
          4 => 
          array (
            0 => 'repositories_workspace_repo_slug_pipelines_config_schedules_schedule_uuid',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'schedule_uuid' => 'schedule_uuid',
            ),
          ),
          5 => 
          array (
            0 => 'repositories_workspace_repo_slug_pipelines_config_schedules_schedule_uuid_executions',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'schedule_uuid' => 'schedule_uuid',
            ),
          ),
          6 => 
          array (
            0 => 'repositories_workspace_repo_slug_pipelines_config_ssh_key_pair',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
            ),
          ),
          7 => 
          array (
            0 => 'repositories_workspace_repo_slug_pipelines_config_ssh_known_hosts',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
            ),
          ),
          8 => 
          array (
            0 => 'repositories_workspace_repo_slug_pipelines_config_ssh_known_hosts_known_host_uuid',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'known_host_uuid' => 'known_host_uuid',
            ),
          ),
          9 => 
          array (
            0 => 'repositories_workspace_repo_slug_pipelines_config_variables',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
            ),
          ),
          10 => 
          array (
            0 => 'repositories_workspace_repo_slug_pipelines_config_variables_variable_uuid',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'variable_uuid' => 'variable_uuid',
            ),
          ),
          11 => 
          array (
            0 => 'repositories_workspace_repo_slug_properties_app_key_property_name',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'app_key' => 'app_key',
              'property_name' => 'property_name',
            ),
          ),
          12 => 
          array (
            0 => 'repositories_workspace_repo_slug_pullrequests',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
            ),
          ),
          13 => 
          array (
            0 => 'repositories_workspace_repo_slug_pullrequests_activity',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
            ),
          ),
        ),
      ),
      9 => 
      array (
        'regex' => '~^(?|/repositories/([^/]+)/([^/]+)/pullrequests/([^/]+)|/repositories/([^/]+)/([^/]+)/pullrequests/([^/]+)/activity()|/repositories/([^/]+)/([^/]+)/pullrequests/([^/]+)/approve()()|/repositories/([^/]+)/([^/]+)/pullrequests/([^/]+)/comments()()()|/repositories/([^/]+)/([^/]+)/pullrequests/([^/]+)/comments/([^/]+)()()()|/repositories/([^/]+)/([^/]+)/pullrequests/([^/]+)/commits()()()()()|/repositories/([^/]+)/([^/]+)/pullrequests/([^/]+)/decline()()()()()()|/repositories/([^/]+)/([^/]+)/pullrequests/([^/]+)/diff()()()()()()()|/repositories/([^/]+)/([^/]+)/pullrequests/([^/]+)/diffstat()()()()()()()()|/repositories/([^/]+)/([^/]+)/pullrequests/([^/]+)/merge()()()()()()()()())$~',
        'routeMap' => 
        array (
          4 => 
          array (
            0 => 'repositories_workspace_repo_slug_pullrequests_pull_request_id',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'pull_request_id' => 'pull_request_id',
            ),
          ),
          5 => 
          array (
            0 => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_activity',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'pull_request_id' => 'pull_request_id',
            ),
          ),
          6 => 
          array (
            0 => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_approve',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'pull_request_id' => 'pull_request_id',
            ),
          ),
          7 => 
          array (
            0 => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_comments',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'pull_request_id' => 'pull_request_id',
            ),
          ),
          8 => 
          array (
            0 => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_comments_comment_id',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'pull_request_id' => 'pull_request_id',
              'comment_id' => 'comment_id',
            ),
          ),
          9 => 
          array (
            0 => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_commits',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'pull_request_id' => 'pull_request_id',
            ),
          ),
          10 => 
          array (
            0 => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_decline',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'pull_request_id' => 'pull_request_id',
            ),
          ),
          11 => 
          array (
            0 => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_diff',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'pull_request_id' => 'pull_request_id',
            ),
          ),
          12 => 
          array (
            0 => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_diffstat',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'pull_request_id' => 'pull_request_id',
            ),
          ),
          13 => 
          array (
            0 => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_merge',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'pull_request_id' => 'pull_request_id',
            ),
          ),
        ),
      ),
      10 => 
      array (
        'regex' => '~^(?|/repositories/([^/]+)/([^/]+)/pullrequests/([^/]+)/merge/task\\-status/([^/]+)|/repositories/([^/]+)/([^/]+)/pullrequests/([^/]+)/patch()()|/repositories/([^/]+)/([^/]+)/pullrequests/([^/]+)/request\\-changes()()()|/repositories/([^/]+)/([^/]+)/pullrequests/([^/]+)/statuses()()()()|/repositories/([^/]+)/([^/]+)/pullrequests/([^/]+)/properties/([^/]+)/([^/]+)()()()|/repositories/([^/]+)/([^/]+)/refs()()()()()()()|/repositories/([^/]+)/([^/]+)/refs/branches()()()()()()()()|/repositories/([^/]+)/([^/]+)/refs/branches/([^/]+)()()()()()()()()|/repositories/([^/]+)/([^/]+)/refs/tags()()()()()()()()()()|/repositories/([^/]+)/([^/]+)/refs/tags/([^/]+)()()()()()()()()()())$~',
        'routeMap' => 
        array (
          5 => 
          array (
            0 => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_merge_task_status_task_id',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'pull_request_id' => 'pull_request_id',
              'task_id' => 'task_id',
            ),
          ),
          6 => 
          array (
            0 => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_patch',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'pull_request_id' => 'pull_request_id',
            ),
          ),
          7 => 
          array (
            0 => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_request_changes',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'pull_request_id' => 'pull_request_id',
            ),
          ),
          8 => 
          array (
            0 => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_statuses',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'pull_request_id' => 'pull_request_id',
            ),
          ),
          9 => 
          array (
            0 => 'repositories_workspace_repo_slug_pullrequests_pullrequest_id_properties_app_key_property_name',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'pullrequest_id' => 'pullrequest_id',
              'app_key' => 'app_key',
              'property_name' => 'property_name',
            ),
          ),
          10 => 
          array (
            0 => 'repositories_workspace_repo_slug_refs',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
            ),
          ),
          11 => 
          array (
            0 => 'repositories_workspace_repo_slug_refs_branches',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
            ),
          ),
          12 => 
          array (
            0 => 'repositories_workspace_repo_slug_refs_branches_name',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'name' => 'name',
            ),
          ),
          13 => 
          array (
            0 => 'repositories_workspace_repo_slug_refs_tags',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
            ),
          ),
          14 => 
          array (
            0 => 'repositories_workspace_repo_slug_refs_tags_name',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'name' => 'name',
            ),
          ),
        ),
      ),
      11 => 
      array (
        'regex' => '~^(?|/repositories/([^/]+)/([^/]+)/src|/repositories/([^/]+)/([^/]+)/src/([^/]+)/([^/]+)|/repositories/([^/]+)/([^/]+)/versions()()()|/repositories/([^/]+)/([^/]+)/versions/([^/]+)()()()|/repositories/([^/]+)/([^/]+)/watchers()()()()()|/snippets/([^/]+)()()()()()()()|/snippets/([^/]+)/([^/]+)()()()()()()()|/snippets/([^/]+)/([^/]+)/comments()()()()()()()()|/snippets/([^/]+)/([^/]+)/comments/([^/]+)()()()()()()()()|/snippets/([^/]+)/([^/]+)/commits()()()()()()()()()())$~',
        'routeMap' => 
        array (
          3 => 
          array (
            0 => 'repositories_workspace_repo_slug_src',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
            ),
          ),
          5 => 
          array (
            0 => 'repositories_workspace_repo_slug_src_commit_path',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'commit' => 'commit',
              'path' => 'path',
            ),
          ),
          6 => 
          array (
            0 => 'repositories_workspace_repo_slug_versions',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
            ),
          ),
          7 => 
          array (
            0 => 'repositories_workspace_repo_slug_versions_version_id',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
              'version_id' => 'version_id',
            ),
          ),
          8 => 
          array (
            0 => 'repositories_workspace_repo_slug_watchers',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
            ),
          ),
          9 => 
          array (
            0 => 'snippets_workspace',
            1 => 
            array (
              'workspace' => 'workspace',
            ),
          ),
          10 => 
          array (
            0 => 'snippets_workspace_encoded_id',
            1 => 
            array (
              'workspace' => 'workspace',
              'encoded_id' => 'encoded_id',
            ),
          ),
          11 => 
          array (
            0 => 'snippets_workspace_encoded_id_comments',
            1 => 
            array (
              'workspace' => 'workspace',
              'encoded_id' => 'encoded_id',
            ),
          ),
          12 => 
          array (
            0 => 'snippets_workspace_encoded_id_comments_comment_id',
            1 => 
            array (
              'workspace' => 'workspace',
              'encoded_id' => 'encoded_id',
              'comment_id' => 'comment_id',
            ),
          ),
          13 => 
          array (
            0 => 'snippets_workspace_encoded_id_commits',
            1 => 
            array (
              'workspace' => 'workspace',
              'encoded_id' => 'encoded_id',
            ),
          ),
        ),
      ),
      12 => 
      array (
        'regex' => '~^(?|/snippets/([^/]+)/([^/]+)/commits/([^/]+)|/snippets/([^/]+)/([^/]+)/files/([^/]+)()|/snippets/([^/]+)/([^/]+)/watch()()()|/snippets/([^/]+)/([^/]+)/watchers()()()()|/snippets/([^/]+)/([^/]+)/([^/]+)()()()()|/snippets/([^/]+)/([^/]+)/([^/]+)/files/([^/]+)()()()()|/snippets/([^/]+)/([^/]+)/([^/]+)/diff()()()()()()|/snippets/([^/]+)/([^/]+)/([^/]+)/patch()()()()()()()|/teams/([^/]+)()()()()()()()()()()|/teams/([^/]+)/followers()()()()()()()()()()())$~',
        'routeMap' => 
        array (
          4 => 
          array (
            0 => 'snippets_workspace_encoded_id_commits_revision',
            1 => 
            array (
              'workspace' => 'workspace',
              'encoded_id' => 'encoded_id',
              'revision' => 'revision',
            ),
          ),
          5 => 
          array (
            0 => 'snippets_workspace_encoded_id_files_path',
            1 => 
            array (
              'workspace' => 'workspace',
              'encoded_id' => 'encoded_id',
              'path' => 'path',
            ),
          ),
          6 => 
          array (
            0 => 'snippets_workspace_encoded_id_watch',
            1 => 
            array (
              'workspace' => 'workspace',
              'encoded_id' => 'encoded_id',
            ),
          ),
          7 => 
          array (
            0 => 'snippets_workspace_encoded_id_watchers',
            1 => 
            array (
              'workspace' => 'workspace',
              'encoded_id' => 'encoded_id',
            ),
          ),
          8 => 
          array (
            0 => 'snippets_workspace_encoded_id_node_id',
            1 => 
            array (
              'workspace' => 'workspace',
              'encoded_id' => 'encoded_id',
              'node_id' => 'node_id',
            ),
          ),
          9 => 
          array (
            0 => 'snippets_workspace_encoded_id_node_id_files_path',
            1 => 
            array (
              'workspace' => 'workspace',
              'encoded_id' => 'encoded_id',
              'node_id' => 'node_id',
              'path' => 'path',
            ),
          ),
          10 => 
          array (
            0 => 'snippets_workspace_encoded_id_revision_diff',
            1 => 
            array (
              'workspace' => 'workspace',
              'encoded_id' => 'encoded_id',
              'revision' => 'revision',
            ),
          ),
          11 => 
          array (
            0 => 'snippets_workspace_encoded_id_revision_patch',
            1 => 
            array (
              'workspace' => 'workspace',
              'encoded_id' => 'encoded_id',
              'revision' => 'revision',
            ),
          ),
          12 => 
          array (
            0 => 'teams_username',
            1 => 
            array (
              'username' => 'username',
            ),
          ),
          13 => 
          array (
            0 => 'teams_username_followers',
            1 => 
            array (
              'username' => 'username',
            ),
          ),
        ),
      ),
      13 => 
      array (
        'regex' => '~^(?|/teams/([^/]+)/following|/teams/([^/]+)/hooks()|/teams/([^/]+)/hooks/([^/]+)()|/teams/([^/]+)/members()()()|/teams/([^/]+)/permissions()()()()|/teams/([^/]+)/permissions/repositories()()()()()|/teams/([^/]+)/permissions/repositories/([^/]+)()()()()()|/teams/([^/]+)/pipelines_config/variables/()()()()()()()|/teams/([^/]+)/pipelines_config/variables/([^/]+)()()()()()()()|/teams/([^/]+)/projects/()()()()()()()()())$~',
        'routeMap' => 
        array (
          2 => 
          array (
            0 => 'teams_username_following',
            1 => 
            array (
              'username' => 'username',
            ),
          ),
          3 => 
          array (
            0 => 'teams_username_hooks',
            1 => 
            array (
              'username' => 'username',
            ),
          ),
          4 => 
          array (
            0 => 'teams_username_hooks_uid',
            1 => 
            array (
              'username' => 'username',
              'uid' => 'uid',
            ),
          ),
          5 => 
          array (
            0 => 'teams_username_members',
            1 => 
            array (
              'username' => 'username',
            ),
          ),
          6 => 
          array (
            0 => 'teams_username_permissions',
            1 => 
            array (
              'username' => 'username',
            ),
          ),
          7 => 
          array (
            0 => 'teams_username_permissions_repositories',
            1 => 
            array (
              'username' => 'username',
            ),
          ),
          8 => 
          array (
            0 => 'teams_username_permissions_repositories_repo_slug',
            1 => 
            array (
              'username' => 'username',
              'repo_slug' => 'repo_slug',
            ),
          ),
          9 => 
          array (
            0 => 'teams_username_pipelines_config_variables',
            1 => 
            array (
              'username' => 'username',
            ),
          ),
          10 => 
          array (
            0 => 'teams_username_pipelines_config_variables_variable_uuid',
            1 => 
            array (
              'username' => 'username',
              'variable_uuid' => 'variable_uuid',
            ),
          ),
          11 => 
          array (
            0 => 'teams_username_projects',
            1 => 
            array (
              'username' => 'username',
            ),
          ),
        ),
      ),
      14 => 
      array (
        'regex' => '~^(?|/teams/([^/]+)/projects/([^/]+)|/teams/([^/]+)/search/code()()|/teams/([^/]+)/repositories()()()|/user/emails/([^/]+)()()()()|/users/([^/]+)()()()()()|/users/([^/]+)/hooks()()()()()()|/users/([^/]+)/hooks/([^/]+)()()()()()()|/users/([^/]+)/pipelines_config/variables/()()()()()()()()|/users/([^/]+)/pipelines_config/variables/([^/]+)()()()()()()()()|/users/([^/]+)/properties/([^/]+)/([^/]+)()()()()()()()())$~',
        'routeMap' => 
        array (
          3 => 
          array (
            0 => 'teams_username_projects_project_key',
            1 => 
            array (
              'username' => 'username',
              'project_key' => 'project_key',
            ),
          ),
          4 => 
          array (
            0 => 'teams_username_search_code',
            1 => 
            array (
              'username' => 'username',
            ),
          ),
          5 => 
          array (
            0 => 'teams_workspace_repositories',
            1 => 
            array (
              'workspace' => 'workspace',
            ),
          ),
          6 => 
          array (
            0 => 'user_emails_email',
            1 => 
            array (
              'email' => 'email',
            ),
          ),
          7 => 
          array (
            0 => 'users_selected_user',
            1 => 
            array (
              'selected_user' => 'selected_user',
            ),
          ),
          8 => 
          array (
            0 => 'users_selected_user_hooks',
            1 => 
            array (
              'selected_user' => 'selected_user',
            ),
          ),
          9 => 
          array (
            0 => 'users_selected_user_hooks_uid',
            1 => 
            array (
              'selected_user' => 'selected_user',
              'uid' => 'uid',
            ),
          ),
          10 => 
          array (
            0 => 'users_selected_user_pipelines_config_variables',
            1 => 
            array (
              'selected_user' => 'selected_user',
            ),
          ),
          11 => 
          array (
            0 => 'users_selected_user_pipelines_config_variables_variable_uuid',
            1 => 
            array (
              'selected_user' => 'selected_user',
              'variable_uuid' => 'variable_uuid',
            ),
          ),
          12 => 
          array (
            0 => 'users_selected_user_properties_app_key_property_name',
            1 => 
            array (
              'selected_user' => 'selected_user',
              'app_key' => 'app_key',
              'property_name' => 'property_name',
            ),
          ),
        ),
      ),
      15 => 
      array (
        'regex' => '~^(?|/users/([^/]+)/search/code|/users/([^/]+)/ssh\\-keys()|/users/([^/]+)/ssh\\-keys/([^/]+)()|/users/([^/]+)/members()()()|/users/([^/]+)/repositories()()()()|/workspaces/([^/]+)()()()()()|/workspaces/([^/]+)/hooks()()()()()()|/workspaces/([^/]+)/hooks/([^/]+)()()()()()()|/workspaces/([^/]+)/members()()()()()()()()|/workspaces/([^/]+)/members/([^/]+)()()()()()()()())$~',
        'routeMap' => 
        array (
          2 => 
          array (
            0 => 'users_selected_user_search_code',
            1 => 
            array (
              'selected_user' => 'selected_user',
            ),
          ),
          3 => 
          array (
            0 => 'users_selected_user_ssh_keys',
            1 => 
            array (
              'selected_user' => 'selected_user',
            ),
          ),
          4 => 
          array (
            0 => 'users_selected_user_ssh_keys_key_id',
            1 => 
            array (
              'selected_user' => 'selected_user',
              'key_id' => 'key_id',
            ),
          ),
          5 => 
          array (
            0 => 'users_username_members',
            1 => 
            array (
              'username' => 'username',
            ),
          ),
          6 => 
          array (
            0 => 'users_workspace_repositories',
            1 => 
            array (
              'workspace' => 'workspace',
            ),
          ),
          7 => 
          array (
            0 => 'workspaces_workspace',
            1 => 
            array (
              'workspace' => 'workspace',
            ),
          ),
          8 => 
          array (
            0 => 'workspaces_workspace_hooks',
            1 => 
            array (
              'workspace' => 'workspace',
            ),
          ),
          9 => 
          array (
            0 => 'workspaces_workspace_hooks_uid',
            1 => 
            array (
              'workspace' => 'workspace',
              'uid' => 'uid',
            ),
          ),
          10 => 
          array (
            0 => 'workspaces_workspace_members',
            1 => 
            array (
              'workspace' => 'workspace',
            ),
          ),
          11 => 
          array (
            0 => 'workspaces_workspace_members_member',
            1 => 
            array (
              'workspace' => 'workspace',
              'member' => 'member',
            ),
          ),
        ),
      ),
      16 => 
      array (
        'regex' => '~^(?|/workspaces/([^/]+)/permissions|/workspaces/([^/]+)/permissions/repositories()|/workspaces/([^/]+)/permissions/repositories/([^/]+)()|/workspaces/([^/]+)/pipelines\\-config/identity/oidc/\\.well\\-known/openid\\-configuration()()()|/workspaces/([^/]+)/pipelines\\-config/identity/oidc/keys\\.json()()()()|/workspaces/([^/]+)/pipelines\\-config/variables()()()()()|/workspaces/([^/]+)/pipelines\\-config/variables/([^/]+)()()()()()|/workspaces/([^/]+)/projects()()()()()()()|/workspaces/([^/]+)/projects/([^/]+)()()()()()()()|/workspaces/([^/]+)/search/code()()()()()()()()())$~',
        'routeMap' => 
        array (
          2 => 
          array (
            0 => 'workspaces_workspace_permissions',
            1 => 
            array (
              'workspace' => 'workspace',
            ),
          ),
          3 => 
          array (
            0 => 'workspaces_workspace_permissions_repositories',
            1 => 
            array (
              'workspace' => 'workspace',
            ),
          ),
          4 => 
          array (
            0 => 'workspaces_workspace_permissions_repositories_repo_slug',
            1 => 
            array (
              'workspace' => 'workspace',
              'repo_slug' => 'repo_slug',
            ),
          ),
          5 => 
          array (
            0 => 'workspaces_workspace_pipelines_config_identity_oidc_well_known_openid_configuration',
            1 => 
            array (
              'workspace' => 'workspace',
            ),
          ),
          6 => 
          array (
            0 => 'workspaces_workspace_pipelines_config_identity_oidc_keys_json',
            1 => 
            array (
              'workspace' => 'workspace',
            ),
          ),
          7 => 
          array (
            0 => 'workspaces_workspace_pipelines_config_variables',
            1 => 
            array (
              'workspace' => 'workspace',
            ),
          ),
          8 => 
          array (
            0 => 'workspaces_workspace_pipelines_config_variables_variable_uuid',
            1 => 
            array (
              'workspace' => 'workspace',
              'variable_uuid' => 'variable_uuid',
            ),
          ),
          9 => 
          array (
            0 => 'workspaces_workspace_projects',
            1 => 
            array (
              'workspace' => 'workspace',
            ),
          ),
          10 => 
          array (
            0 => 'workspaces_workspace_projects_project_key',
            1 => 
            array (
              'workspace' => 'workspace',
              'project_key' => 'project_key',
            ),
          ),
          11 => 
          array (
            0 => 'workspaces_workspace_search_code',
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