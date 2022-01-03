<?php return array (
  'key' => '',
  'attributes' => 
  array (
  ),
  'rule' => 
  array (
    0 => '',
    1 => 
    array (
    ),
    2 => 
    array (
    ),
  ),
  'default' => 
  array (
    0 => '',
    1 => 
    array (
    ),
  ),
  'routes' => 
  array (
    'addon' => 
    array (
      'key' => '',
      'attributes' => 
      array (
        '_route' => 'addon',
      ),
      'rule' => 
      array (
        0 => '',
        1 => 
        array (
        ),
        2 => 
        array (
        ),
      ),
      'default' => 
      array (
        0 => '',
        1 => 
        array (
        ),
      ),
      'routes' => 
      array (
        'linkers' => 
        array (
          'key' => '',
          'attributes' => 
          array (
            '_route' => 'addon_linkers',
          ),
          'rule' => 
          array (
            0 => 'any',
            1 => 
            array (
            ),
            2 => 
            array (
              '_route' => 'addon_linkers_linker_key',
            ),
          ),
          'default' => 
          array (
            0 => '',
            1 => 
            array (
            ),
          ),
          'routes' => 
          array (
            '' => 
            array (
              'key' => '',
              'attributes' => 
              array (
              ),
              'rule' => 
              array (
                0 => '',
                1 => 
                array (
                ),
                2 => 
                array (
                ),
              ),
              'default' => 
              array (
                0 => '',
                1 => 
                array (
                ),
              ),
              'routes' => 
              array (
                'values' => 
                array (
                  'key' => '',
                  'attributes' => 
                  array (
                    '_route' => 'addon_linkers_linker_key_values',
                  ),
                  'rule' => 
                  array (
                    0 => 'any',
                    1 => 
                    array (
                    ),
                    2 => 
                    array (
                      '_route' => 'addon_linkers_linker_key_values_value_id',
                    ),
                  ),
                  'default' => 
                  array (
                    0 => '',
                    1 => 
                    array (
                    ),
                  ),
                  'routes' => 
                  array (
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
    ),
    'hook_events' => 
    array (
      'key' => '',
      'attributes' => 
      array (
        '_route' => 'hook_events',
      ),
      'rule' => 
      array (
        0 => 'any',
        1 => 
        array (
        ),
        2 => 
        array (
          '_route' => 'hook_events_subject_type',
        ),
      ),
      'default' => 
      array (
        0 => '',
        1 => 
        array (
        ),
      ),
      'routes' => 
      array (
      ),
    ),
    'pullrequests' => 
    array (
      'key' => '',
      'attributes' => 
      array (
        '_route' => 'pullrequests',
      ),
      'rule' => 
      array (
        0 => 'any',
        1 => 
        array (
        ),
        2 => 
        array (
          '_route' => 'pullrequests_selected_user',
        ),
      ),
      'default' => 
      array (
        0 => '',
        1 => 
        array (
        ),
      ),
      'routes' => 
      array (
      ),
    ),
    'repositories' => 
    array (
      'key' => '',
      'attributes' => 
      array (
        '_route' => 'repositories',
      ),
      'rule' => 
      array (
        0 => 'any',
        1 => 
        array (
        ),
        2 => 
        array (
          '_route' => 'repositories_workspace',
        ),
      ),
      'default' => 
      array (
        0 => '',
        1 => 
        array (
        ),
      ),
      'routes' => 
      array (
        '' => 
        array (
          'key' => '',
          'attributes' => 
          array (
          ),
          'rule' => 
          array (
            0 => 'any',
            1 => 
            array (
            ),
            2 => 
            array (
              '_route' => 'repositories_workspace_repo_slug',
            ),
          ),
          'default' => 
          array (
            0 => '',
            1 => 
            array (
            ),
          ),
          'routes' => 
          array (
            '' => 
            array (
              'key' => '',
              'attributes' => 
              array (
              ),
              'rule' => 
              array (
                0 => '',
                1 => 
                array (
                ),
                2 => 
                array (
                ),
              ),
              'default' => 
              array (
                0 => '',
                1 => 
                array (
                ),
              ),
              'routes' => 
              array (
                'branch-restrictions' => 
                array (
                  'key' => '',
                  'attributes' => 
                  array (
                    '_route' => 'repositories_workspace_repo_slug_branch_restrictions',
                  ),
                  'rule' => 
                  array (
                    0 => 'any',
                    1 => 
                    array (
                    ),
                    2 => 
                    array (
                      '_route' => 'repositories_workspace_repo_slug_branch_restrictions_id',
                    ),
                  ),
                  'default' => 
                  array (
                    0 => '',
                    1 => 
                    array (
                    ),
                  ),
                  'routes' => 
                  array (
                  ),
                ),
                'branching-model' => 
                array (
                  'key' => '',
                  'attributes' => 
                  array (
                    '_route' => 'repositories_workspace_repo_slug_branching_model',
                  ),
                  'rule' => 
                  array (
                    0 => '',
                    1 => 
                    array (
                    ),
                    2 => 
                    array (
                    ),
                  ),
                  'default' => 
                  array (
                    0 => '',
                    1 => 
                    array (
                    ),
                  ),
                  'routes' => 
                  array (
                    'settings' => 
                    array (
                      'key' => '',
                      'attributes' => 
                      array (
                        '_route' => 'repositories_workspace_repo_slug_branching_model_settings',
                      ),
                      'rule' => 
                      array (
                        0 => '',
                        1 => 
                        array (
                        ),
                        2 => 
                        array (
                        ),
                      ),
                      'default' => 
                      array (
                        0 => '',
                        1 => 
                        array (
                        ),
                      ),
                      'routes' => 
                      array (
                      ),
                    ),
                  ),
                ),
                'commit' => 
                array (
                  'key' => '',
                  'attributes' => 
                  array (
                    '_route' => 'repositories_workspace_repo_slug_commit',
                  ),
                  'rule' => 
                  array (
                    0 => 'any',
                    1 => 
                    array (
                    ),
                    2 => 
                    array (
                      '_route' => 'repositories_workspace_repo_slug_commit_commit',
                    ),
                  ),
                  'default' => 
                  array (
                    0 => '',
                    1 => 
                    array (
                    ),
                  ),
                  'routes' => 
                  array (
                    '' => 
                    array (
                      'key' => '',
                      'attributes' => 
                      array (
                      ),
                      'rule' => 
                      array (
                        0 => '',
                        1 => 
                        array (
                        ),
                        2 => 
                        array (
                        ),
                      ),
                      'default' => 
                      array (
                        0 => '',
                        1 => 
                        array (
                        ),
                      ),
                      'routes' => 
                      array (
                        'approve' => 
                        array (
                          'key' => '',
                          'attributes' => 
                          array (
                            '_route' => 'repositories_workspace_repo_slug_commit_commit_approve',
                          ),
                          'rule' => 
                          array (
                            0 => '',
                            1 => 
                            array (
                            ),
                            2 => 
                            array (
                            ),
                          ),
                          'default' => 
                          array (
                            0 => '',
                            1 => 
                            array (
                            ),
                          ),
                          'routes' => 
                          array (
                          ),
                        ),
                        'comments' => 
                        array (
                          'key' => '',
                          'attributes' => 
                          array (
                            '_route' => 'repositories_workspace_repo_slug_commit_commit_comments',
                          ),
                          'rule' => 
                          array (
                            0 => 'any',
                            1 => 
                            array (
                            ),
                            2 => 
                            array (
                              '_route' => 'repositories_workspace_repo_slug_commit_commit_comments_comment_id',
                            ),
                          ),
                          'default' => 
                          array (
                            0 => '',
                            1 => 
                            array (
                            ),
                          ),
                          'routes' => 
                          array (
                          ),
                        ),
                        'properties' => 
                        array (
                          'key' => '',
                          'attributes' => 
                          array (
                            '_route' => 'repositories_workspace_repo_slug_commit_commit_properties',
                          ),
                          'rule' => 
                          array (
                            0 => 'any',
                            1 => 
                            array (
                            ),
                            2 => 
                            array (
                              '_route' => 'repositories_workspace_repo_slug_commit_commit_properties_app_key',
                            ),
                          ),
                          'default' => 
                          array (
                            0 => '',
                            1 => 
                            array (
                            ),
                          ),
                          'routes' => 
                          array (
                            '' => 
                            array (
                              'key' => '',
                              'attributes' => 
                              array (
                              ),
                              'rule' => 
                              array (
                                0 => 'any',
                                1 => 
                                array (
                                ),
                                2 => 
                                array (
                                  '_route' => 'repositories_workspace_repo_slug_commit_commit_properties_app_key_property_name',
                                ),
                              ),
                              'default' => 
                              array (
                                0 => '',
                                1 => 
                                array (
                                ),
                              ),
                              'routes' => 
                              array (
                              ),
                            ),
                          ),
                        ),
                        'pullrequests' => 
                        array (
                          'key' => '',
                          'attributes' => 
                          array (
                            '_route' => 'repositories_workspace_repo_slug_commit_commit_pullrequests',
                          ),
                          'rule' => 
                          array (
                            0 => '',
                            1 => 
                            array (
                            ),
                            2 => 
                            array (
                            ),
                          ),
                          'default' => 
                          array (
                            0 => '',
                            1 => 
                            array (
                            ),
                          ),
                          'routes' => 
                          array (
                          ),
                        ),
                        'reports' => 
                        array (
                          'key' => '',
                          'attributes' => 
                          array (
                            '_route' => 'repositories_workspace_repo_slug_commit_commit_reports',
                          ),
                          'rule' => 
                          array (
                            0 => 'any',
                            1 => 
                            array (
                            ),
                            2 => 
                            array (
                              '_route' => 'repositories_workspace_repo_slug_commit_commit_reports_reportId',
                            ),
                          ),
                          'default' => 
                          array (
                            0 => '',
                            1 => 
                            array (
                            ),
                          ),
                          'routes' => 
                          array (
                            '' => 
                            array (
                              'key' => '',
                              'attributes' => 
                              array (
                              ),
                              'rule' => 
                              array (
                                0 => '',
                                1 => 
                                array (
                                ),
                                2 => 
                                array (
                                ),
                              ),
                              'default' => 
                              array (
                                0 => '',
                                1 => 
                                array (
                                ),
                              ),
                              'routes' => 
                              array (
                                'annotations' => 
                                array (
                                  'key' => '',
                                  'attributes' => 
                                  array (
                                    '_route' => 'repositories_workspace_repo_slug_commit_commit_reports_reportId_annotations',
                                  ),
                                  'rule' => 
                                  array (
                                    0 => 'any',
                                    1 => 
                                    array (
                                    ),
                                    2 => 
                                    array (
                                      '_route' => 'repositories_workspace_repo_slug_commit_commit_reports_reportId_annotations_annotationId',
                                    ),
                                  ),
                                  'default' => 
                                  array (
                                    0 => '',
                                    1 => 
                                    array (
                                    ),
                                  ),
                                  'routes' => 
                                  array (
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'statuses' => 
                        array (
                          'key' => '',
                          'attributes' => 
                          array (
                            '_route' => 'repositories_workspace_repo_slug_commit_commit_statuses',
                          ),
                          'rule' => 
                          array (
                            0 => '',
                            1 => 
                            array (
                            ),
                            2 => 
                            array (
                            ),
                          ),
                          'default' => 
                          array (
                            0 => '',
                            1 => 
                            array (
                            ),
                          ),
                          'routes' => 
                          array (
                            'build' => 
                            array (
                              'key' => '',
                              'attributes' => 
                              array (
                                '_route' => 'repositories_workspace_repo_slug_commit_commit_statuses_build',
                              ),
                              'rule' => 
                              array (
                                0 => 'any',
                                1 => 
                                array (
                                ),
                                2 => 
                                array (
                                  '_route' => 'repositories_workspace_repo_slug_commit_commit_statuses_build_key',
                                ),
                              ),
                              'default' => 
                              array (
                                0 => '',
                                1 => 
                                array (
                                ),
                              ),
                              'routes' => 
                              array (
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
                'commits' => 
                array (
                  'key' => '',
                  'attributes' => 
                  array (
                    '_route' => 'repositories_workspace_repo_slug_commits',
                  ),
                  'rule' => 
                  array (
                    0 => 'any',
                    1 => 
                    array (
                    ),
                    2 => 
                    array (
                      '_route' => 'repositories_workspace_repo_slug_commits_revision',
                    ),
                  ),
                  'default' => 
                  array (
                    0 => '',
                    1 => 
                    array (
                    ),
                  ),
                  'routes' => 
                  array (
                  ),
                ),
                'components' => 
                array (
                  'key' => '',
                  'attributes' => 
                  array (
                    '_route' => 'repositories_workspace_repo_slug_components',
                  ),
                  'rule' => 
                  array (
                    0 => 'any',
                    1 => 
                    array (
                    ),
                    2 => 
                    array (
                      '_route' => 'repositories_workspace_repo_slug_components_component_id',
                    ),
                  ),
                  'default' => 
                  array (
                    0 => '',
                    1 => 
                    array (
                    ),
                  ),
                  'routes' => 
                  array (
                  ),
                ),
                'default-reviewers' => 
                array (
                  'key' => '',
                  'attributes' => 
                  array (
                    '_route' => 'repositories_workspace_repo_slug_default_reviewers',
                  ),
                  'rule' => 
                  array (
                    0 => 'any',
                    1 => 
                    array (
                    ),
                    2 => 
                    array (
                      '_route' => 'repositories_workspace_repo_slug_default_reviewers_target_username',
                    ),
                  ),
                  'default' => 
                  array (
                    0 => '',
                    1 => 
                    array (
                    ),
                  ),
                  'routes' => 
                  array (
                  ),
                ),
                'deploy-keys' => 
                array (
                  'key' => '',
                  'attributes' => 
                  array (
                    '_route' => 'repositories_workspace_repo_slug_deploy_keys',
                  ),
                  'rule' => 
                  array (
                    0 => 'any',
                    1 => 
                    array (
                    ),
                    2 => 
                    array (
                      '_route' => 'repositories_workspace_repo_slug_deploy_keys_key_id',
                    ),
                  ),
                  'default' => 
                  array (
                    0 => '',
                    1 => 
                    array (
                    ),
                  ),
                  'routes' => 
                  array (
                  ),
                ),
                'deployments' => 
                array (
                  'key' => '',
                  'attributes' => 
                  array (
                    '_route' => 'repositories_workspace_repo_slug_deployments',
                  ),
                  'rule' => 
                  array (
                    0 => 'any',
                    1 => 
                    array (
                    ),
                    2 => 
                    array (
                      '_route' => 'repositories_workspace_repo_slug_deployments_deployment_uuid',
                    ),
                  ),
                  'default' => 
                  array (
                    0 => '',
                    1 => 
                    array (
                    ),
                  ),
                  'routes' => 
                  array (
                  ),
                ),
                'deployments_config' => 
                array (
                  'key' => '',
                  'attributes' => 
                  array (
                    '_route' => 'repositories_workspace_repo_slug_deployments_config',
                  ),
                  'rule' => 
                  array (
                    0 => '',
                    1 => 
                    array (
                    ),
                    2 => 
                    array (
                    ),
                  ),
                  'default' => 
                  array (
                    0 => '',
                    1 => 
                    array (
                    ),
                  ),
                  'routes' => 
                  array (
                    'environments' => 
                    array (
                      'key' => '',
                      'attributes' => 
                      array (
                        '_route' => 'repositories_workspace_repo_slug_deployments_config_environments',
                      ),
                      'rule' => 
                      array (
                        0 => 'any',
                        1 => 
                        array (
                        ),
                        2 => 
                        array (
                          '_route' => 'repositories_workspace_repo_slug_deployments_config_environments_environment_uuid',
                        ),
                      ),
                      'default' => 
                      array (
                        0 => '',
                        1 => 
                        array (
                        ),
                      ),
                      'routes' => 
                      array (
                        '' => 
                        array (
                          'key' => '',
                          'attributes' => 
                          array (
                          ),
                          'rule' => 
                          array (
                            0 => '',
                            1 => 
                            array (
                            ),
                            2 => 
                            array (
                            ),
                          ),
                          'default' => 
                          array (
                            0 => '',
                            1 => 
                            array (
                            ),
                          ),
                          'routes' => 
                          array (
                            'variables' => 
                            array (
                              'key' => '',
                              'attributes' => 
                              array (
                                '_route' => 'repositories_workspace_repo_slug_deployments_config_environments_environment_uuid_variables',
                              ),
                              'rule' => 
                              array (
                                0 => 'any',
                                1 => 
                                array (
                                ),
                                2 => 
                                array (
                                  '_route' => 'repositories_workspace_repo_slug_deployments_config_environments_environment_uuid_variables_variable_uuid',
                                ),
                              ),
                              'default' => 
                              array (
                                0 => '',
                                1 => 
                                array (
                                ),
                              ),
                              'routes' => 
                              array (
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
                'diff' => 
                array (
                  'key' => '',
                  'attributes' => 
                  array (
                    '_route' => 'repositories_workspace_repo_slug_diff',
                  ),
                  'rule' => 
                  array (
                    0 => 'any',
                    1 => 
                    array (
                    ),
                    2 => 
                    array (
                      '_route' => 'repositories_workspace_repo_slug_diff_spec',
                    ),
                  ),
                  'default' => 
                  array (
                    0 => '',
                    1 => 
                    array (
                    ),
                  ),
                  'routes' => 
                  array (
                  ),
                ),
                'diffstat' => 
                array (
                  'key' => '',
                  'attributes' => 
                  array (
                    '_route' => 'repositories_workspace_repo_slug_diffstat',
                  ),
                  'rule' => 
                  array (
                    0 => 'any',
                    1 => 
                    array (
                    ),
                    2 => 
                    array (
                      '_route' => 'repositories_workspace_repo_slug_diffstat_spec',
                    ),
                  ),
                  'default' => 
                  array (
                    0 => '',
                    1 => 
                    array (
                    ),
                  ),
                  'routes' => 
                  array (
                  ),
                ),
                'downloads' => 
                array (
                  'key' => '',
                  'attributes' => 
                  array (
                    '_route' => 'repositories_workspace_repo_slug_downloads',
                  ),
                  'rule' => 
                  array (
                    0 => 'any',
                    1 => 
                    array (
                    ),
                    2 => 
                    array (
                      '_route' => 'repositories_workspace_repo_slug_downloads_filename',
                    ),
                  ),
                  'default' => 
                  array (
                    0 => '',
                    1 => 
                    array (
                    ),
                  ),
                  'routes' => 
                  array (
                  ),
                ),
                'environments' => 
                array (
                  'key' => '',
                  'attributes' => 
                  array (
                    '_route' => 'repositories_workspace_repo_slug_environments',
                  ),
                  'rule' => 
                  array (
                    0 => 'any',
                    1 => 
                    array (
                    ),
                    2 => 
                    array (
                      '_route' => 'repositories_workspace_repo_slug_environments_environment_uuid',
                    ),
                  ),
                  'default' => 
                  array (
                    0 => '',
                    1 => 
                    array (
                    ),
                  ),
                  'routes' => 
                  array (
                    '' => 
                    array (
                      'key' => '',
                      'attributes' => 
                      array (
                      ),
                      'rule' => 
                      array (
                        0 => '',
                        1 => 
                        array (
                        ),
                        2 => 
                        array (
                        ),
                      ),
                      'default' => 
                      array (
                        0 => '',
                        1 => 
                        array (
                        ),
                      ),
                      'routes' => 
                      array (
                        'changes' => 
                        array (
                          'key' => '',
                          'attributes' => 
                          array (
                            '_route' => 'repositories_workspace_repo_slug_environments_environment_uuid_changes',
                          ),
                          'rule' => 
                          array (
                            0 => '',
                            1 => 
                            array (
                            ),
                            2 => 
                            array (
                            ),
                          ),
                          'default' => 
                          array (
                            0 => '',
                            1 => 
                            array (
                            ),
                          ),
                          'routes' => 
                          array (
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
                'filehistory' => 
                array (
                  'key' => '',
                  'attributes' => 
                  array (
                    '_route' => 'repositories_workspace_repo_slug_filehistory',
                  ),
                  'rule' => 
                  array (
                    0 => 'any',
                    1 => 
                    array (
                    ),
                    2 => 
                    array (
                      '_route' => 'repositories_workspace_repo_slug_filehistory_commit',
                    ),
                  ),
                  'default' => 
                  array (
                    0 => '',
                    1 => 
                    array (
                    ),
                  ),
                  'routes' => 
                  array (
                    '' => 
                    array (
                      'key' => '',
                      'attributes' => 
                      array (
                      ),
                      'rule' => 
                      array (
                        0 => 'any',
                        1 => 
                        array (
                        ),
                        2 => 
                        array (
                          '_route' => 'repositories_workspace_repo_slug_filehistory_commit_path',
                        ),
                      ),
                      'default' => 
                      array (
                        0 => '',
                        1 => 
                        array (
                        ),
                      ),
                      'routes' => 
                      array (
                      ),
                    ),
                  ),
                ),
                'forks' => 
                array (
                  'key' => '',
                  'attributes' => 
                  array (
                    '_route' => 'repositories_workspace_repo_slug_forks',
                  ),
                  'rule' => 
                  array (
                    0 => '',
                    1 => 
                    array (
                    ),
                    2 => 
                    array (
                    ),
                  ),
                  'default' => 
                  array (
                    0 => '',
                    1 => 
                    array (
                    ),
                  ),
                  'routes' => 
                  array (
                  ),
                ),
                'hooks' => 
                array (
                  'key' => '',
                  'attributes' => 
                  array (
                    '_route' => 'repositories_workspace_repo_slug_hooks',
                  ),
                  'rule' => 
                  array (
                    0 => 'any',
                    1 => 
                    array (
                    ),
                    2 => 
                    array (
                      '_route' => 'repositories_workspace_repo_slug_hooks_uid',
                    ),
                  ),
                  'default' => 
                  array (
                    0 => '',
                    1 => 
                    array (
                    ),
                  ),
                  'routes' => 
                  array (
                  ),
                ),
                'issues' => 
                array (
                  'key' => '',
                  'attributes' => 
                  array (
                    '_route' => 'repositories_workspace_repo_slug_issues',
                  ),
                  'rule' => 
                  array (
                    0 => 'any',
                    1 => 
                    array (
                    ),
                    2 => 
                    array (
                      '_route' => 'repositories_workspace_repo_slug_issues_issue_id',
                    ),
                  ),
                  'default' => 
                  array (
                    0 => '',
                    1 => 
                    array (
                    ),
                  ),
                  'routes' => 
                  array (
                    'export' => 
                    array (
                      'key' => '',
                      'attributes' => 
                      array (
                        '_route' => 'repositories_workspace_repo_slug_issues_export',
                      ),
                      'rule' => 
                      array (
                        0 => 'any',
                        1 => 
                        array (
                        ),
                        2 => 
                        array (
                          '_route' => 'repositories_workspace_repo_slug_issues_export_repo_name_issues_task_id_zip',
                        ),
                      ),
                      'default' => 
                      array (
                        0 => '',
                        1 => 
                        array (
                        ),
                      ),
                      'routes' => 
                      array (
                      ),
                    ),
                    'import' => 
                    array (
                      'key' => '',
                      'attributes' => 
                      array (
                        '_route' => 'repositories_workspace_repo_slug_issues_import',
                      ),
                      'rule' => 
                      array (
                        0 => '',
                        1 => 
                        array (
                        ),
                        2 => 
                        array (
                        ),
                      ),
                      'default' => 
                      array (
                        0 => '',
                        1 => 
                        array (
                        ),
                      ),
                      'routes' => 
                      array (
                      ),
                    ),
                    '' => 
                    array (
                      'key' => '',
                      'attributes' => 
                      array (
                      ),
                      'rule' => 
                      array (
                        0 => '',
                        1 => 
                        array (
                        ),
                        2 => 
                        array (
                        ),
                      ),
                      'default' => 
                      array (
                        0 => '',
                        1 => 
                        array (
                        ),
                      ),
                      'routes' => 
                      array (
                        'attachments' => 
                        array (
                          'key' => '',
                          'attributes' => 
                          array (
                            '_route' => 'repositories_workspace_repo_slug_issues_issue_id_attachments',
                          ),
                          'rule' => 
                          array (
                            0 => 'any',
                            1 => 
                            array (
                            ),
                            2 => 
                            array (
                              '_route' => 'repositories_workspace_repo_slug_issues_issue_id_attachments_path',
                            ),
                          ),
                          'default' => 
                          array (
                            0 => '',
                            1 => 
                            array (
                            ),
                          ),
                          'routes' => 
                          array (
                          ),
                        ),
                        'changes' => 
                        array (
                          'key' => '',
                          'attributes' => 
                          array (
                            '_route' => 'repositories_workspace_repo_slug_issues_issue_id_changes',
                          ),
                          'rule' => 
                          array (
                            0 => 'any',
                            1 => 
                            array (
                            ),
                            2 => 
                            array (
                              '_route' => 'repositories_workspace_repo_slug_issues_issue_id_changes_change_id',
                            ),
                          ),
                          'default' => 
                          array (
                            0 => '',
                            1 => 
                            array (
                            ),
                          ),
                          'routes' => 
                          array (
                          ),
                        ),
                        'comments' => 
                        array (
                          'key' => '',
                          'attributes' => 
                          array (
                            '_route' => 'repositories_workspace_repo_slug_issues_issue_id_comments',
                          ),
                          'rule' => 
                          array (
                            0 => 'any',
                            1 => 
                            array (
                            ),
                            2 => 
                            array (
                              '_route' => 'repositories_workspace_repo_slug_issues_issue_id_comments_comment_id',
                            ),
                          ),
                          'default' => 
                          array (
                            0 => '',
                            1 => 
                            array (
                            ),
                          ),
                          'routes' => 
                          array (
                          ),
                        ),
                        'vote' => 
                        array (
                          'key' => '',
                          'attributes' => 
                          array (
                            '_route' => 'repositories_workspace_repo_slug_issues_issue_id_vote',
                          ),
                          'rule' => 
                          array (
                            0 => '',
                            1 => 
                            array (
                            ),
                            2 => 
                            array (
                            ),
                          ),
                          'default' => 
                          array (
                            0 => '',
                            1 => 
                            array (
                            ),
                          ),
                          'routes' => 
                          array (
                          ),
                        ),
                        'watch' => 
                        array (
                          'key' => '',
                          'attributes' => 
                          array (
                            '_route' => 'repositories_workspace_repo_slug_issues_issue_id_watch',
                          ),
                          'rule' => 
                          array (
                            0 => '',
                            1 => 
                            array (
                            ),
                            2 => 
                            array (
                            ),
                          ),
                          'default' => 
                          array (
                            0 => '',
                            1 => 
                            array (
                            ),
                          ),
                          'routes' => 
                          array (
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
                'merge-base' => 
                array (
                  'key' => '',
                  'attributes' => 
                  array (
                    '_route' => 'repositories_workspace_repo_slug_merge_base',
                  ),
                  'rule' => 
                  array (
                    0 => 'any',
                    1 => 
                    array (
                    ),
                    2 => 
                    array (
                      '_route' => 'repositories_workspace_repo_slug_merge_base_revspec',
                    ),
                  ),
                  'default' => 
                  array (
                    0 => '',
                    1 => 
                    array (
                    ),
                  ),
                  'routes' => 
                  array (
                  ),
                ),
                'milestones' => 
                array (
                  'key' => '',
                  'attributes' => 
                  array (
                    '_route' => 'repositories_workspace_repo_slug_milestones',
                  ),
                  'rule' => 
                  array (
                    0 => 'any',
                    1 => 
                    array (
                    ),
                    2 => 
                    array (
                      '_route' => 'repositories_workspace_repo_slug_milestones_milestone_id',
                    ),
                  ),
                  'default' => 
                  array (
                    0 => '',
                    1 => 
                    array (
                    ),
                  ),
                  'routes' => 
                  array (
                  ),
                ),
                'patch' => 
                array (
                  'key' => '',
                  'attributes' => 
                  array (
                    '_route' => 'repositories_workspace_repo_slug_patch',
                  ),
                  'rule' => 
                  array (
                    0 => 'any',
                    1 => 
                    array (
                    ),
                    2 => 
                    array (
                      '_route' => 'repositories_workspace_repo_slug_patch_spec',
                    ),
                  ),
                  'default' => 
                  array (
                    0 => '',
                    1 => 
                    array (
                    ),
                  ),
                  'routes' => 
                  array (
                  ),
                ),
                'pipelines-config' => 
                array (
                  'key' => '',
                  'attributes' => 
                  array (
                    '_route' => 'repositories_workspace_repo_slug_pipelines_config',
                  ),
                  'rule' => 
                  array (
                    0 => '',
                    1 => 
                    array (
                    ),
                    2 => 
                    array (
                    ),
                  ),
                  'default' => 
                  array (
                    0 => '',
                    1 => 
                    array (
                    ),
                  ),
                  'routes' => 
                  array (
                    'caches' => 
                    array (
                      'key' => '',
                      'attributes' => 
                      array (
                        '_route' => 'repositories_workspace_repo_slug_pipelines_config_caches',
                      ),
                      'rule' => 
                      array (
                        0 => 'any',
                        1 => 
                        array (
                        ),
                        2 => 
                        array (
                          '_route' => 'repositories_workspace_repo_slug_pipelines_config_caches_cache_uuid',
                        ),
                      ),
                      'default' => 
                      array (
                        0 => '',
                        1 => 
                        array (
                        ),
                      ),
                      'routes' => 
                      array (
                        '' => 
                        array (
                          'key' => '',
                          'attributes' => 
                          array (
                          ),
                          'rule' => 
                          array (
                            0 => '',
                            1 => 
                            array (
                            ),
                            2 => 
                            array (
                            ),
                          ),
                          'default' => 
                          array (
                            0 => '',
                            1 => 
                            array (
                            ),
                          ),
                          'routes' => 
                          array (
                            'content-uri' => 
                            array (
                              'key' => '',
                              'attributes' => 
                              array (
                                '_route' => 'repositories_workspace_repo_slug_pipelines_config_caches_cache_uuid_content_uri',
                              ),
                              'rule' => 
                              array (
                                0 => '',
                                1 => 
                                array (
                                ),
                                2 => 
                                array (
                                ),
                              ),
                              'default' => 
                              array (
                                0 => '',
                                1 => 
                                array (
                                ),
                              ),
                              'routes' => 
                              array (
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
                'pipelines' => 
                array (
                  'key' => '',
                  'attributes' => 
                  array (
                    '_route' => 'repositories_workspace_repo_slug_pipelines',
                  ),
                  'rule' => 
                  array (
                    0 => 'any',
                    1 => 
                    array (
                    ),
                    2 => 
                    array (
                      '_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid',
                    ),
                  ),
                  'default' => 
                  array (
                    0 => '',
                    1 => 
                    array (
                    ),
                  ),
                  'routes' => 
                  array (
                    '' => 
                    array (
                      'key' => '',
                      'attributes' => 
                      array (
                      ),
                      'rule' => 
                      array (
                        0 => '',
                        1 => 
                        array (
                        ),
                        2 => 
                        array (
                        ),
                      ),
                      'default' => 
                      array (
                        0 => '',
                        1 => 
                        array (
                        ),
                      ),
                      'routes' => 
                      array (
                        'steps' => 
                        array (
                          'key' => '',
                          'attributes' => 
                          array (
                            '_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps',
                          ),
                          'rule' => 
                          array (
                            0 => 'any',
                            1 => 
                            array (
                            ),
                            2 => 
                            array (
                              '_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps_step_uuid',
                            ),
                          ),
                          'default' => 
                          array (
                            0 => '',
                            1 => 
                            array (
                            ),
                          ),
                          'routes' => 
                          array (
                            '' => 
                            array (
                              'key' => '',
                              'attributes' => 
                              array (
                              ),
                              'rule' => 
                              array (
                                0 => '',
                                1 => 
                                array (
                                ),
                                2 => 
                                array (
                                ),
                              ),
                              'default' => 
                              array (
                                0 => '',
                                1 => 
                                array (
                                ),
                              ),
                              'routes' => 
                              array (
                                'log' => 
                                array (
                                  'key' => '',
                                  'attributes' => 
                                  array (
                                    '_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps_step_uuid_log',
                                  ),
                                  'rule' => 
                                  array (
                                    0 => '',
                                    1 => 
                                    array (
                                    ),
                                    2 => 
                                    array (
                                    ),
                                  ),
                                  'default' => 
                                  array (
                                    0 => '',
                                    1 => 
                                    array (
                                    ),
                                  ),
                                  'routes' => 
                                  array (
                                  ),
                                ),
                                'logs' => 
                                array (
                                  'key' => '',
                                  'attributes' => 
                                  array (
                                    '_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps_step_uuid_logs',
                                  ),
                                  'rule' => 
                                  array (
                                    0 => 'any',
                                    1 => 
                                    array (
                                    ),
                                    2 => 
                                    array (
                                      '_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps_step_uuid_logs_log_uuid',
                                    ),
                                  ),
                                  'default' => 
                                  array (
                                    0 => '',
                                    1 => 
                                    array (
                                    ),
                                  ),
                                  'routes' => 
                                  array (
                                  ),
                                ),
                                'test_reports' => 
                                array (
                                  'key' => '',
                                  'attributes' => 
                                  array (
                                    '_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps_step_uuid_test_reports',
                                  ),
                                  'rule' => 
                                  array (
                                    0 => '',
                                    1 => 
                                    array (
                                    ),
                                    2 => 
                                    array (
                                    ),
                                  ),
                                  'default' => 
                                  array (
                                    0 => '',
                                    1 => 
                                    array (
                                    ),
                                  ),
                                  'routes' => 
                                  array (
                                    'test_cases' => 
                                    array (
                                      'key' => '',
                                      'attributes' => 
                                      array (
                                        '_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps_step_uuid_test_reports_test_cases',
                                      ),
                                      'rule' => 
                                      array (
                                        0 => 'any',
                                        1 => 
                                        array (
                                        ),
                                        2 => 
                                        array (
                                          '_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps_step_uuid_test_reports_test_cases_test_case_uuid',
                                        ),
                                      ),
                                      'default' => 
                                      array (
                                        0 => '',
                                        1 => 
                                        array (
                                        ),
                                      ),
                                      'routes' => 
                                      array (
                                        '' => 
                                        array (
                                          'key' => '',
                                          'attributes' => 
                                          array (
                                          ),
                                          'rule' => 
                                          array (
                                            0 => '',
                                            1 => 
                                            array (
                                            ),
                                            2 => 
                                            array (
                                            ),
                                          ),
                                          'default' => 
                                          array (
                                            0 => '',
                                            1 => 
                                            array (
                                            ),
                                          ),
                                          'routes' => 
                                          array (
                                            'test_case_reasons' => 
                                            array (
                                              'key' => '',
                                              'attributes' => 
                                              array (
                                                '_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_steps_step_uuid_test_reports_test_cases_test_case_uuid_test_case_reasons',
                                              ),
                                              'rule' => 
                                              array (
                                                0 => '',
                                                1 => 
                                                array (
                                                ),
                                                2 => 
                                                array (
                                                ),
                                              ),
                                              'default' => 
                                              array (
                                                0 => '',
                                                1 => 
                                                array (
                                                ),
                                              ),
                                              'routes' => 
                                              array (
                                              ),
                                            ),
                                          ),
                                        ),
                                      ),
                                    ),
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'stopPipeline' => 
                        array (
                          'key' => '',
                          'attributes' => 
                          array (
                            '_route' => 'repositories_workspace_repo_slug_pipelines_pipeline_uuid_stopPipeline',
                          ),
                          'rule' => 
                          array (
                            0 => '',
                            1 => 
                            array (
                            ),
                            2 => 
                            array (
                            ),
                          ),
                          'default' => 
                          array (
                            0 => '',
                            1 => 
                            array (
                            ),
                          ),
                          'routes' => 
                          array (
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
                'pipelines_config' => 
                array (
                  'key' => '',
                  'attributes' => 
                  array (
                    '_route' => 'repositories_workspace_repo_slug_pipelines_config',
                  ),
                  'rule' => 
                  array (
                    0 => '',
                    1 => 
                    array (
                    ),
                    2 => 
                    array (
                    ),
                  ),
                  'default' => 
                  array (
                    0 => '',
                    1 => 
                    array (
                    ),
                  ),
                  'routes' => 
                  array (
                    'build_number' => 
                    array (
                      'key' => '',
                      'attributes' => 
                      array (
                        '_route' => 'repositories_workspace_repo_slug_pipelines_config_build_number',
                      ),
                      'rule' => 
                      array (
                        0 => '',
                        1 => 
                        array (
                        ),
                        2 => 
                        array (
                        ),
                      ),
                      'default' => 
                      array (
                        0 => '',
                        1 => 
                        array (
                        ),
                      ),
                      'routes' => 
                      array (
                      ),
                    ),
                    'schedules' => 
                    array (
                      'key' => '',
                      'attributes' => 
                      array (
                        '_route' => 'repositories_workspace_repo_slug_pipelines_config_schedules',
                      ),
                      'rule' => 
                      array (
                        0 => 'any',
                        1 => 
                        array (
                        ),
                        2 => 
                        array (
                          '_route' => 'repositories_workspace_repo_slug_pipelines_config_schedules_schedule_uuid',
                        ),
                      ),
                      'default' => 
                      array (
                        0 => '',
                        1 => 
                        array (
                        ),
                      ),
                      'routes' => 
                      array (
                        '' => 
                        array (
                          'key' => '',
                          'attributes' => 
                          array (
                          ),
                          'rule' => 
                          array (
                            0 => '',
                            1 => 
                            array (
                            ),
                            2 => 
                            array (
                            ),
                          ),
                          'default' => 
                          array (
                            0 => '',
                            1 => 
                            array (
                            ),
                          ),
                          'routes' => 
                          array (
                            'executions' => 
                            array (
                              'key' => '',
                              'attributes' => 
                              array (
                                '_route' => 'repositories_workspace_repo_slug_pipelines_config_schedules_schedule_uuid_executions',
                              ),
                              'rule' => 
                              array (
                                0 => '',
                                1 => 
                                array (
                                ),
                                2 => 
                                array (
                                ),
                              ),
                              'default' => 
                              array (
                                0 => '',
                                1 => 
                                array (
                                ),
                              ),
                              'routes' => 
                              array (
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                    'ssh' => 
                    array (
                      'key' => '',
                      'attributes' => 
                      array (
                        '_route' => 'repositories_workspace_repo_slug_pipelines_config_ssh',
                      ),
                      'rule' => 
                      array (
                        0 => '',
                        1 => 
                        array (
                        ),
                        2 => 
                        array (
                        ),
                      ),
                      'default' => 
                      array (
                        0 => '',
                        1 => 
                        array (
                        ),
                      ),
                      'routes' => 
                      array (
                        'key_pair' => 
                        array (
                          'key' => '',
                          'attributes' => 
                          array (
                            '_route' => 'repositories_workspace_repo_slug_pipelines_config_ssh_key_pair',
                          ),
                          'rule' => 
                          array (
                            0 => '',
                            1 => 
                            array (
                            ),
                            2 => 
                            array (
                            ),
                          ),
                          'default' => 
                          array (
                            0 => '',
                            1 => 
                            array (
                            ),
                          ),
                          'routes' => 
                          array (
                          ),
                        ),
                        'known_hosts' => 
                        array (
                          'key' => '',
                          'attributes' => 
                          array (
                            '_route' => 'repositories_workspace_repo_slug_pipelines_config_ssh_known_hosts',
                          ),
                          'rule' => 
                          array (
                            0 => 'any',
                            1 => 
                            array (
                            ),
                            2 => 
                            array (
                              '_route' => 'repositories_workspace_repo_slug_pipelines_config_ssh_known_hosts_known_host_uuid',
                            ),
                          ),
                          'default' => 
                          array (
                            0 => '',
                            1 => 
                            array (
                            ),
                          ),
                          'routes' => 
                          array (
                          ),
                        ),
                      ),
                    ),
                    'variables' => 
                    array (
                      'key' => '',
                      'attributes' => 
                      array (
                        '_route' => 'repositories_workspace_repo_slug_pipelines_config_variables',
                      ),
                      'rule' => 
                      array (
                        0 => 'any',
                        1 => 
                        array (
                        ),
                        2 => 
                        array (
                          '_route' => 'repositories_workspace_repo_slug_pipelines_config_variables_variable_uuid',
                        ),
                      ),
                      'default' => 
                      array (
                        0 => '',
                        1 => 
                        array (
                        ),
                      ),
                      'routes' => 
                      array (
                      ),
                    ),
                  ),
                ),
                'properties' => 
                array (
                  'key' => '',
                  'attributes' => 
                  array (
                    '_route' => 'repositories_workspace_repo_slug_properties',
                  ),
                  'rule' => 
                  array (
                    0 => 'any',
                    1 => 
                    array (
                    ),
                    2 => 
                    array (
                      '_route' => 'repositories_workspace_repo_slug_properties_app_key',
                    ),
                  ),
                  'default' => 
                  array (
                    0 => '',
                    1 => 
                    array (
                    ),
                  ),
                  'routes' => 
                  array (
                    '' => 
                    array (
                      'key' => '',
                      'attributes' => 
                      array (
                      ),
                      'rule' => 
                      array (
                        0 => 'any',
                        1 => 
                        array (
                        ),
                        2 => 
                        array (
                          '_route' => 'repositories_workspace_repo_slug_properties_app_key_property_name',
                        ),
                      ),
                      'default' => 
                      array (
                        0 => '',
                        1 => 
                        array (
                        ),
                      ),
                      'routes' => 
                      array (
                      ),
                    ),
                  ),
                ),
                'pullrequests' => 
                array (
                  'key' => '',
                  'attributes' => 
                  array (
                    '_route' => 'repositories_workspace_repo_slug_pullrequests',
                  ),
                  'rule' => 
                  array (
                    0 => 'any',
                    1 => 
                    array (
                    ),
                    2 => 
                    array (
                      '_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id',
                    ),
                  ),
                  'default' => 
                  array (
                    0 => '',
                    1 => 
                    array (
                    ),
                  ),
                  'routes' => 
                  array (
                    'activity' => 
                    array (
                      'key' => '',
                      'attributes' => 
                      array (
                        '_route' => 'repositories_workspace_repo_slug_pullrequests_activity',
                      ),
                      'rule' => 
                      array (
                        0 => '',
                        1 => 
                        array (
                        ),
                        2 => 
                        array (
                        ),
                      ),
                      'default' => 
                      array (
                        0 => '',
                        1 => 
                        array (
                        ),
                      ),
                      'routes' => 
                      array (
                      ),
                    ),
                    '' => 
                    array (
                      'key' => '',
                      'attributes' => 
                      array (
                      ),
                      'rule' => 
                      array (
                        0 => '',
                        1 => 
                        array (
                        ),
                        2 => 
                        array (
                        ),
                      ),
                      'default' => 
                      array (
                        0 => '',
                        1 => 
                        array (
                        ),
                      ),
                      'routes' => 
                      array (
                        'activity' => 
                        array (
                          'key' => '',
                          'attributes' => 
                          array (
                            '_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_activity',
                          ),
                          'rule' => 
                          array (
                            0 => '',
                            1 => 
                            array (
                            ),
                            2 => 
                            array (
                            ),
                          ),
                          'default' => 
                          array (
                            0 => '',
                            1 => 
                            array (
                            ),
                          ),
                          'routes' => 
                          array (
                          ),
                        ),
                        'approve' => 
                        array (
                          'key' => '',
                          'attributes' => 
                          array (
                            '_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_approve',
                          ),
                          'rule' => 
                          array (
                            0 => '',
                            1 => 
                            array (
                            ),
                            2 => 
                            array (
                            ),
                          ),
                          'default' => 
                          array (
                            0 => '',
                            1 => 
                            array (
                            ),
                          ),
                          'routes' => 
                          array (
                          ),
                        ),
                        'comments' => 
                        array (
                          'key' => '',
                          'attributes' => 
                          array (
                            '_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_comments',
                          ),
                          'rule' => 
                          array (
                            0 => 'any',
                            1 => 
                            array (
                            ),
                            2 => 
                            array (
                              '_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_comments_comment_id',
                            ),
                          ),
                          'default' => 
                          array (
                            0 => '',
                            1 => 
                            array (
                            ),
                          ),
                          'routes' => 
                          array (
                          ),
                        ),
                        'commits' => 
                        array (
                          'key' => '',
                          'attributes' => 
                          array (
                            '_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_commits',
                          ),
                          'rule' => 
                          array (
                            0 => '',
                            1 => 
                            array (
                            ),
                            2 => 
                            array (
                            ),
                          ),
                          'default' => 
                          array (
                            0 => '',
                            1 => 
                            array (
                            ),
                          ),
                          'routes' => 
                          array (
                          ),
                        ),
                        'decline' => 
                        array (
                          'key' => '',
                          'attributes' => 
                          array (
                            '_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_decline',
                          ),
                          'rule' => 
                          array (
                            0 => '',
                            1 => 
                            array (
                            ),
                            2 => 
                            array (
                            ),
                          ),
                          'default' => 
                          array (
                            0 => '',
                            1 => 
                            array (
                            ),
                          ),
                          'routes' => 
                          array (
                          ),
                        ),
                        'diff' => 
                        array (
                          'key' => '',
                          'attributes' => 
                          array (
                            '_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_diff',
                          ),
                          'rule' => 
                          array (
                            0 => '',
                            1 => 
                            array (
                            ),
                            2 => 
                            array (
                            ),
                          ),
                          'default' => 
                          array (
                            0 => '',
                            1 => 
                            array (
                            ),
                          ),
                          'routes' => 
                          array (
                          ),
                        ),
                        'diffstat' => 
                        array (
                          'key' => '',
                          'attributes' => 
                          array (
                            '_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_diffstat',
                          ),
                          'rule' => 
                          array (
                            0 => '',
                            1 => 
                            array (
                            ),
                            2 => 
                            array (
                            ),
                          ),
                          'default' => 
                          array (
                            0 => '',
                            1 => 
                            array (
                            ),
                          ),
                          'routes' => 
                          array (
                          ),
                        ),
                        'merge' => 
                        array (
                          'key' => '',
                          'attributes' => 
                          array (
                            '_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_merge',
                          ),
                          'rule' => 
                          array (
                            0 => '',
                            1 => 
                            array (
                            ),
                            2 => 
                            array (
                            ),
                          ),
                          'default' => 
                          array (
                            0 => '',
                            1 => 
                            array (
                            ),
                          ),
                          'routes' => 
                          array (
                            'task-status' => 
                            array (
                              'key' => '',
                              'attributes' => 
                              array (
                                '_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_merge_task_status',
                              ),
                              'rule' => 
                              array (
                                0 => 'any',
                                1 => 
                                array (
                                ),
                                2 => 
                                array (
                                  '_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_merge_task_status_task_id',
                                ),
                              ),
                              'default' => 
                              array (
                                0 => '',
                                1 => 
                                array (
                                ),
                              ),
                              'routes' => 
                              array (
                              ),
                            ),
                          ),
                        ),
                        'patch' => 
                        array (
                          'key' => '',
                          'attributes' => 
                          array (
                            '_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_patch',
                          ),
                          'rule' => 
                          array (
                            0 => '',
                            1 => 
                            array (
                            ),
                            2 => 
                            array (
                            ),
                          ),
                          'default' => 
                          array (
                            0 => '',
                            1 => 
                            array (
                            ),
                          ),
                          'routes' => 
                          array (
                          ),
                        ),
                        'request-changes' => 
                        array (
                          'key' => '',
                          'attributes' => 
                          array (
                            '_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_request_changes',
                          ),
                          'rule' => 
                          array (
                            0 => '',
                            1 => 
                            array (
                            ),
                            2 => 
                            array (
                            ),
                          ),
                          'default' => 
                          array (
                            0 => '',
                            1 => 
                            array (
                            ),
                          ),
                          'routes' => 
                          array (
                          ),
                        ),
                        'statuses' => 
                        array (
                          'key' => '',
                          'attributes' => 
                          array (
                            '_route' => 'repositories_workspace_repo_slug_pullrequests_pull_request_id_statuses',
                          ),
                          'rule' => 
                          array (
                            0 => '',
                            1 => 
                            array (
                            ),
                            2 => 
                            array (
                            ),
                          ),
                          'default' => 
                          array (
                            0 => '',
                            1 => 
                            array (
                            ),
                          ),
                          'routes' => 
                          array (
                          ),
                        ),
                        'properties' => 
                        array (
                          'key' => '',
                          'attributes' => 
                          array (
                            '_route' => 'repositories_workspace_repo_slug_pullrequests_pullrequest_id_properties',
                          ),
                          'rule' => 
                          array (
                            0 => 'any',
                            1 => 
                            array (
                            ),
                            2 => 
                            array (
                              '_route' => 'repositories_workspace_repo_slug_pullrequests_pullrequest_id_properties_app_key',
                            ),
                          ),
                          'default' => 
                          array (
                            0 => '',
                            1 => 
                            array (
                            ),
                          ),
                          'routes' => 
                          array (
                            '' => 
                            array (
                              'key' => '',
                              'attributes' => 
                              array (
                              ),
                              'rule' => 
                              array (
                                0 => 'any',
                                1 => 
                                array (
                                ),
                                2 => 
                                array (
                                  '_route' => 'repositories_workspace_repo_slug_pullrequests_pullrequest_id_properties_app_key_property_name',
                                ),
                              ),
                              'default' => 
                              array (
                                0 => '',
                                1 => 
                                array (
                                ),
                              ),
                              'routes' => 
                              array (
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
                'refs' => 
                array (
                  'key' => '',
                  'attributes' => 
                  array (
                    '_route' => 'repositories_workspace_repo_slug_refs',
                  ),
                  'rule' => 
                  array (
                    0 => '',
                    1 => 
                    array (
                    ),
                    2 => 
                    array (
                    ),
                  ),
                  'default' => 
                  array (
                    0 => '',
                    1 => 
                    array (
                    ),
                  ),
                  'routes' => 
                  array (
                    'branches' => 
                    array (
                      'key' => '',
                      'attributes' => 
                      array (
                        '_route' => 'repositories_workspace_repo_slug_refs_branches',
                      ),
                      'rule' => 
                      array (
                        0 => 'any',
                        1 => 
                        array (
                        ),
                        2 => 
                        array (
                          '_route' => 'repositories_workspace_repo_slug_refs_branches_name',
                        ),
                      ),
                      'default' => 
                      array (
                        0 => '',
                        1 => 
                        array (
                        ),
                      ),
                      'routes' => 
                      array (
                      ),
                    ),
                    'tags' => 
                    array (
                      'key' => '',
                      'attributes' => 
                      array (
                        '_route' => 'repositories_workspace_repo_slug_refs_tags',
                      ),
                      'rule' => 
                      array (
                        0 => 'any',
                        1 => 
                        array (
                        ),
                        2 => 
                        array (
                          '_route' => 'repositories_workspace_repo_slug_refs_tags_name',
                        ),
                      ),
                      'default' => 
                      array (
                        0 => '',
                        1 => 
                        array (
                        ),
                      ),
                      'routes' => 
                      array (
                      ),
                    ),
                  ),
                ),
                'src' => 
                array (
                  'key' => '',
                  'attributes' => 
                  array (
                    '_route' => 'repositories_workspace_repo_slug_src',
                  ),
                  'rule' => 
                  array (
                    0 => 'any',
                    1 => 
                    array (
                    ),
                    2 => 
                    array (
                      '_route' => 'repositories_workspace_repo_slug_src_commit',
                    ),
                  ),
                  'default' => 
                  array (
                    0 => '',
                    1 => 
                    array (
                    ),
                  ),
                  'routes' => 
                  array (
                    '' => 
                    array (
                      'key' => '',
                      'attributes' => 
                      array (
                      ),
                      'rule' => 
                      array (
                        0 => 'any',
                        1 => 
                        array (
                        ),
                        2 => 
                        array (
                          '_route' => 'repositories_workspace_repo_slug_src_commit_path',
                        ),
                      ),
                      'default' => 
                      array (
                        0 => '',
                        1 => 
                        array (
                        ),
                      ),
                      'routes' => 
                      array (
                      ),
                    ),
                  ),
                ),
                'versions' => 
                array (
                  'key' => '',
                  'attributes' => 
                  array (
                    '_route' => 'repositories_workspace_repo_slug_versions',
                  ),
                  'rule' => 
                  array (
                    0 => 'any',
                    1 => 
                    array (
                    ),
                    2 => 
                    array (
                      '_route' => 'repositories_workspace_repo_slug_versions_version_id',
                    ),
                  ),
                  'default' => 
                  array (
                    0 => '',
                    1 => 
                    array (
                    ),
                  ),
                  'routes' => 
                  array (
                  ),
                ),
                'watchers' => 
                array (
                  'key' => '',
                  'attributes' => 
                  array (
                    '_route' => 'repositories_workspace_repo_slug_watchers',
                  ),
                  'rule' => 
                  array (
                    0 => '',
                    1 => 
                    array (
                    ),
                    2 => 
                    array (
                    ),
                  ),
                  'default' => 
                  array (
                    0 => '',
                    1 => 
                    array (
                    ),
                  ),
                  'routes' => 
                  array (
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
    ),
    'snippets' => 
    array (
      'key' => '',
      'attributes' => 
      array (
        '_route' => 'snippets',
      ),
      'rule' => 
      array (
        0 => 'any',
        1 => 
        array (
        ),
        2 => 
        array (
          '_route' => 'snippets_workspace',
        ),
      ),
      'default' => 
      array (
        0 => '',
        1 => 
        array (
        ),
      ),
      'routes' => 
      array (
        '' => 
        array (
          'key' => '',
          'attributes' => 
          array (
          ),
          'rule' => 
          array (
            0 => 'any',
            1 => 
            array (
            ),
            2 => 
            array (
              '_route' => 'snippets_workspace_encoded_id',
            ),
          ),
          'default' => 
          array (
            0 => '',
            1 => 
            array (
            ),
          ),
          'routes' => 
          array (
            '' => 
            array (
              'key' => '',
              'attributes' => 
              array (
              ),
              'rule' => 
              array (
                0 => 'any',
                1 => 
                array (
                ),
                2 => 
                array (
                  '_route' => 'snippets_workspace_encoded_id_node_id',
                ),
              ),
              'default' => 
              array (
                0 => '',
                1 => 
                array (
                ),
              ),
              'routes' => 
              array (
                'comments' => 
                array (
                  'key' => '',
                  'attributes' => 
                  array (
                    '_route' => 'snippets_workspace_encoded_id_comments',
                  ),
                  'rule' => 
                  array (
                    0 => 'any',
                    1 => 
                    array (
                    ),
                    2 => 
                    array (
                      '_route' => 'snippets_workspace_encoded_id_comments_comment_id',
                    ),
                  ),
                  'default' => 
                  array (
                    0 => '',
                    1 => 
                    array (
                    ),
                  ),
                  'routes' => 
                  array (
                  ),
                ),
                'commits' => 
                array (
                  'key' => '',
                  'attributes' => 
                  array (
                    '_route' => 'snippets_workspace_encoded_id_commits',
                  ),
                  'rule' => 
                  array (
                    0 => 'any',
                    1 => 
                    array (
                    ),
                    2 => 
                    array (
                      '_route' => 'snippets_workspace_encoded_id_commits_revision',
                    ),
                  ),
                  'default' => 
                  array (
                    0 => '',
                    1 => 
                    array (
                    ),
                  ),
                  'routes' => 
                  array (
                  ),
                ),
                'files' => 
                array (
                  'key' => '',
                  'attributes' => 
                  array (
                    '_route' => 'snippets_workspace_encoded_id_files',
                  ),
                  'rule' => 
                  array (
                    0 => 'any',
                    1 => 
                    array (
                    ),
                    2 => 
                    array (
                      '_route' => 'snippets_workspace_encoded_id_files_path',
                    ),
                  ),
                  'default' => 
                  array (
                    0 => '',
                    1 => 
                    array (
                    ),
                  ),
                  'routes' => 
                  array (
                  ),
                ),
                'watch' => 
                array (
                  'key' => '',
                  'attributes' => 
                  array (
                    '_route' => 'snippets_workspace_encoded_id_watch',
                  ),
                  'rule' => 
                  array (
                    0 => '',
                    1 => 
                    array (
                    ),
                    2 => 
                    array (
                    ),
                  ),
                  'default' => 
                  array (
                    0 => '',
                    1 => 
                    array (
                    ),
                  ),
                  'routes' => 
                  array (
                  ),
                ),
                'watchers' => 
                array (
                  'key' => '',
                  'attributes' => 
                  array (
                    '_route' => 'snippets_workspace_encoded_id_watchers',
                  ),
                  'rule' => 
                  array (
                    0 => '',
                    1 => 
                    array (
                    ),
                    2 => 
                    array (
                    ),
                  ),
                  'default' => 
                  array (
                    0 => '',
                    1 => 
                    array (
                    ),
                  ),
                  'routes' => 
                  array (
                  ),
                ),
                '' => 
                array (
                  'key' => '',
                  'attributes' => 
                  array (
                  ),
                  'rule' => 
                  array (
                    0 => '',
                    1 => 
                    array (
                    ),
                    2 => 
                    array (
                    ),
                  ),
                  'default' => 
                  array (
                    0 => '',
                    1 => 
                    array (
                    ),
                  ),
                  'routes' => 
                  array (
                    'files' => 
                    array (
                      'key' => '',
                      'attributes' => 
                      array (
                        '_route' => 'snippets_workspace_encoded_id_node_id_files',
                      ),
                      'rule' => 
                      array (
                        0 => 'any',
                        1 => 
                        array (
                        ),
                        2 => 
                        array (
                          '_route' => 'snippets_workspace_encoded_id_node_id_files_path',
                        ),
                      ),
                      'default' => 
                      array (
                        0 => '',
                        1 => 
                        array (
                        ),
                      ),
                      'routes' => 
                      array (
                      ),
                    ),
                    'diff' => 
                    array (
                      'key' => '',
                      'attributes' => 
                      array (
                        '_route' => 'snippets_workspace_encoded_id_revision_diff',
                      ),
                      'rule' => 
                      array (
                        0 => '',
                        1 => 
                        array (
                        ),
                        2 => 
                        array (
                        ),
                      ),
                      'default' => 
                      array (
                        0 => '',
                        1 => 
                        array (
                        ),
                      ),
                      'routes' => 
                      array (
                      ),
                    ),
                    'patch' => 
                    array (
                      'key' => '',
                      'attributes' => 
                      array (
                        '_route' => 'snippets_workspace_encoded_id_revision_patch',
                      ),
                      'rule' => 
                      array (
                        0 => '',
                        1 => 
                        array (
                        ),
                        2 => 
                        array (
                        ),
                      ),
                      'default' => 
                      array (
                        0 => '',
                        1 => 
                        array (
                        ),
                      ),
                      'routes' => 
                      array (
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
    ),
    'teams' => 
    array (
      'key' => '',
      'attributes' => 
      array (
        '_route' => 'teams',
      ),
      'rule' => 
      array (
        0 => 'any',
        1 => 
        array (
        ),
        2 => 
        array (
          '_route' => 'teams_username',
        ),
      ),
      'default' => 
      array (
        0 => '',
        1 => 
        array (
        ),
      ),
      'routes' => 
      array (
        '' => 
        array (
          'key' => '',
          'attributes' => 
          array (
          ),
          'rule' => 
          array (
            0 => '',
            1 => 
            array (
            ),
            2 => 
            array (
            ),
          ),
          'default' => 
          array (
            0 => '',
            1 => 
            array (
            ),
          ),
          'routes' => 
          array (
            'followers' => 
            array (
              'key' => '',
              'attributes' => 
              array (
                '_route' => 'teams_username_followers',
              ),
              'rule' => 
              array (
                0 => '',
                1 => 
                array (
                ),
                2 => 
                array (
                ),
              ),
              'default' => 
              array (
                0 => '',
                1 => 
                array (
                ),
              ),
              'routes' => 
              array (
              ),
            ),
            'following' => 
            array (
              'key' => '',
              'attributes' => 
              array (
                '_route' => 'teams_username_following',
              ),
              'rule' => 
              array (
                0 => '',
                1 => 
                array (
                ),
                2 => 
                array (
                ),
              ),
              'default' => 
              array (
                0 => '',
                1 => 
                array (
                ),
              ),
              'routes' => 
              array (
              ),
            ),
            'hooks' => 
            array (
              'key' => '',
              'attributes' => 
              array (
                '_route' => 'teams_username_hooks',
              ),
              'rule' => 
              array (
                0 => 'any',
                1 => 
                array (
                ),
                2 => 
                array (
                  '_route' => 'teams_username_hooks_uid',
                ),
              ),
              'default' => 
              array (
                0 => '',
                1 => 
                array (
                ),
              ),
              'routes' => 
              array (
              ),
            ),
            'members' => 
            array (
              'key' => '',
              'attributes' => 
              array (
                '_route' => 'teams_username_members',
              ),
              'rule' => 
              array (
                0 => '',
                1 => 
                array (
                ),
                2 => 
                array (
                ),
              ),
              'default' => 
              array (
                0 => '',
                1 => 
                array (
                ),
              ),
              'routes' => 
              array (
              ),
            ),
            'permissions' => 
            array (
              'key' => '',
              'attributes' => 
              array (
                '_route' => 'teams_username_permissions',
              ),
              'rule' => 
              array (
                0 => '',
                1 => 
                array (
                ),
                2 => 
                array (
                ),
              ),
              'default' => 
              array (
                0 => '',
                1 => 
                array (
                ),
              ),
              'routes' => 
              array (
                'repositories' => 
                array (
                  'key' => '',
                  'attributes' => 
                  array (
                    '_route' => 'teams_username_permissions_repositories',
                  ),
                  'rule' => 
                  array (
                    0 => 'any',
                    1 => 
                    array (
                    ),
                    2 => 
                    array (
                      '_route' => 'teams_username_permissions_repositories_repo_slug',
                    ),
                  ),
                  'default' => 
                  array (
                    0 => '',
                    1 => 
                    array (
                    ),
                  ),
                  'routes' => 
                  array (
                  ),
                ),
              ),
            ),
            'pipelines_config' => 
            array (
              'key' => '',
              'attributes' => 
              array (
                '_route' => 'teams_username_pipelines_config',
              ),
              'rule' => 
              array (
                0 => '',
                1 => 
                array (
                ),
                2 => 
                array (
                ),
              ),
              'default' => 
              array (
                0 => '',
                1 => 
                array (
                ),
              ),
              'routes' => 
              array (
                'variables' => 
                array (
                  'key' => '',
                  'attributes' => 
                  array (
                    '_route' => 'teams_username_pipelines_config_variables',
                  ),
                  'rule' => 
                  array (
                    0 => 'any',
                    1 => 
                    array (
                    ),
                    2 => 
                    array (
                      '_route' => 'teams_username_pipelines_config_variables_variable_uuid',
                    ),
                  ),
                  'default' => 
                  array (
                    0 => '',
                    1 => 
                    array (
                    ),
                  ),
                  'routes' => 
                  array (
                  ),
                ),
              ),
            ),
            'projects' => 
            array (
              'key' => '',
              'attributes' => 
              array (
                '_route' => 'teams_username_projects',
              ),
              'rule' => 
              array (
                0 => 'any',
                1 => 
                array (
                ),
                2 => 
                array (
                  '_route' => 'teams_username_projects_project_key',
                ),
              ),
              'default' => 
              array (
                0 => '',
                1 => 
                array (
                ),
              ),
              'routes' => 
              array (
              ),
            ),
            'search' => 
            array (
              'key' => '',
              'attributes' => 
              array (
                '_route' => 'teams_username_search',
              ),
              'rule' => 
              array (
                0 => '',
                1 => 
                array (
                ),
                2 => 
                array (
                ),
              ),
              'default' => 
              array (
                0 => '',
                1 => 
                array (
                ),
              ),
              'routes' => 
              array (
                'code' => 
                array (
                  'key' => '',
                  'attributes' => 
                  array (
                    '_route' => 'teams_username_search_code',
                  ),
                  'rule' => 
                  array (
                    0 => '',
                    1 => 
                    array (
                    ),
                    2 => 
                    array (
                    ),
                  ),
                  'default' => 
                  array (
                    0 => '',
                    1 => 
                    array (
                    ),
                  ),
                  'routes' => 
                  array (
                  ),
                ),
              ),
            ),
            'repositories' => 
            array (
              'key' => '',
              'attributes' => 
              array (
                '_route' => 'teams_workspace_repositories',
              ),
              'rule' => 
              array (
                0 => '',
                1 => 
                array (
                ),
                2 => 
                array (
                ),
              ),
              'default' => 
              array (
                0 => '',
                1 => 
                array (
                ),
              ),
              'routes' => 
              array (
              ),
            ),
          ),
        ),
      ),
    ),
    'user' => 
    array (
      'key' => '',
      'attributes' => 
      array (
        '_route' => 'user',
      ),
      'rule' => 
      array (
        0 => '',
        1 => 
        array (
        ),
        2 => 
        array (
        ),
      ),
      'default' => 
      array (
        0 => '',
        1 => 
        array (
        ),
      ),
      'routes' => 
      array (
        'emails' => 
        array (
          'key' => '',
          'attributes' => 
          array (
            '_route' => 'user_emails',
          ),
          'rule' => 
          array (
            0 => 'any',
            1 => 
            array (
            ),
            2 => 
            array (
              '_route' => 'user_emails_email',
            ),
          ),
          'default' => 
          array (
            0 => '',
            1 => 
            array (
            ),
          ),
          'routes' => 
          array (
          ),
        ),
        'permissions' => 
        array (
          'key' => '',
          'attributes' => 
          array (
            '_route' => 'user_permissions',
          ),
          'rule' => 
          array (
            0 => '',
            1 => 
            array (
            ),
            2 => 
            array (
            ),
          ),
          'default' => 
          array (
            0 => '',
            1 => 
            array (
            ),
          ),
          'routes' => 
          array (
            'repositories' => 
            array (
              'key' => '',
              'attributes' => 
              array (
                '_route' => 'user_permissions_repositories',
              ),
              'rule' => 
              array (
                0 => '',
                1 => 
                array (
                ),
                2 => 
                array (
                ),
              ),
              'default' => 
              array (
                0 => '',
                1 => 
                array (
                ),
              ),
              'routes' => 
              array (
              ),
            ),
            'teams' => 
            array (
              'key' => '',
              'attributes' => 
              array (
                '_route' => 'user_permissions_teams',
              ),
              'rule' => 
              array (
                0 => '',
                1 => 
                array (
                ),
                2 => 
                array (
                ),
              ),
              'default' => 
              array (
                0 => '',
                1 => 
                array (
                ),
              ),
              'routes' => 
              array (
              ),
            ),
            'workspaces' => 
            array (
              'key' => '',
              'attributes' => 
              array (
                '_route' => 'user_permissions_workspaces',
              ),
              'rule' => 
              array (
                0 => '',
                1 => 
                array (
                ),
                2 => 
                array (
                ),
              ),
              'default' => 
              array (
                0 => '',
                1 => 
                array (
                ),
              ),
              'routes' => 
              array (
              ),
            ),
          ),
        ),
      ),
    ),
    'users' => 
    array (
      'key' => '',
      'attributes' => 
      array (
        '_route' => 'users',
      ),
      'rule' => 
      array (
        0 => 'any',
        1 => 
        array (
        ),
        2 => 
        array (
          '_route' => 'users_selected_user',
        ),
      ),
      'default' => 
      array (
        0 => '',
        1 => 
        array (
        ),
      ),
      'routes' => 
      array (
        '' => 
        array (
          'key' => '',
          'attributes' => 
          array (
          ),
          'rule' => 
          array (
            0 => '',
            1 => 
            array (
            ),
            2 => 
            array (
            ),
          ),
          'default' => 
          array (
            0 => '',
            1 => 
            array (
            ),
          ),
          'routes' => 
          array (
            'hooks' => 
            array (
              'key' => '',
              'attributes' => 
              array (
                '_route' => 'users_selected_user_hooks',
              ),
              'rule' => 
              array (
                0 => 'any',
                1 => 
                array (
                ),
                2 => 
                array (
                  '_route' => 'users_selected_user_hooks_uid',
                ),
              ),
              'default' => 
              array (
                0 => '',
                1 => 
                array (
                ),
              ),
              'routes' => 
              array (
              ),
            ),
            'pipelines_config' => 
            array (
              'key' => '',
              'attributes' => 
              array (
                '_route' => 'users_selected_user_pipelines_config',
              ),
              'rule' => 
              array (
                0 => '',
                1 => 
                array (
                ),
                2 => 
                array (
                ),
              ),
              'default' => 
              array (
                0 => '',
                1 => 
                array (
                ),
              ),
              'routes' => 
              array (
                'variables' => 
                array (
                  'key' => '',
                  'attributes' => 
                  array (
                    '_route' => 'users_selected_user_pipelines_config_variables',
                  ),
                  'rule' => 
                  array (
                    0 => 'any',
                    1 => 
                    array (
                    ),
                    2 => 
                    array (
                      '_route' => 'users_selected_user_pipelines_config_variables_variable_uuid',
                    ),
                  ),
                  'default' => 
                  array (
                    0 => '',
                    1 => 
                    array (
                    ),
                  ),
                  'routes' => 
                  array (
                  ),
                ),
              ),
            ),
            'properties' => 
            array (
              'key' => '',
              'attributes' => 
              array (
                '_route' => 'users_selected_user_properties',
              ),
              'rule' => 
              array (
                0 => 'any',
                1 => 
                array (
                ),
                2 => 
                array (
                  '_route' => 'users_selected_user_properties_app_key',
                ),
              ),
              'default' => 
              array (
                0 => '',
                1 => 
                array (
                ),
              ),
              'routes' => 
              array (
                '' => 
                array (
                  'key' => '',
                  'attributes' => 
                  array (
                  ),
                  'rule' => 
                  array (
                    0 => 'any',
                    1 => 
                    array (
                    ),
                    2 => 
                    array (
                      '_route' => 'users_selected_user_properties_app_key_property_name',
                    ),
                  ),
                  'default' => 
                  array (
                    0 => '',
                    1 => 
                    array (
                    ),
                  ),
                  'routes' => 
                  array (
                  ),
                ),
              ),
            ),
            'search' => 
            array (
              'key' => '',
              'attributes' => 
              array (
                '_route' => 'users_selected_user_search',
              ),
              'rule' => 
              array (
                0 => '',
                1 => 
                array (
                ),
                2 => 
                array (
                ),
              ),
              'default' => 
              array (
                0 => '',
                1 => 
                array (
                ),
              ),
              'routes' => 
              array (
                'code' => 
                array (
                  'key' => '',
                  'attributes' => 
                  array (
                    '_route' => 'users_selected_user_search_code',
                  ),
                  'rule' => 
                  array (
                    0 => '',
                    1 => 
                    array (
                    ),
                    2 => 
                    array (
                    ),
                  ),
                  'default' => 
                  array (
                    0 => '',
                    1 => 
                    array (
                    ),
                  ),
                  'routes' => 
                  array (
                  ),
                ),
              ),
            ),
            'ssh-keys' => 
            array (
              'key' => '',
              'attributes' => 
              array (
                '_route' => 'users_selected_user_ssh_keys',
              ),
              'rule' => 
              array (
                0 => 'any',
                1 => 
                array (
                ),
                2 => 
                array (
                  '_route' => 'users_selected_user_ssh_keys_key_id',
                ),
              ),
              'default' => 
              array (
                0 => '',
                1 => 
                array (
                ),
              ),
              'routes' => 
              array (
              ),
            ),
            'members' => 
            array (
              'key' => '',
              'attributes' => 
              array (
                '_route' => 'users_username_members',
              ),
              'rule' => 
              array (
                0 => '',
                1 => 
                array (
                ),
                2 => 
                array (
                ),
              ),
              'default' => 
              array (
                0 => '',
                1 => 
                array (
                ),
              ),
              'routes' => 
              array (
              ),
            ),
            'repositories' => 
            array (
              'key' => '',
              'attributes' => 
              array (
                '_route' => 'users_workspace_repositories',
              ),
              'rule' => 
              array (
                0 => '',
                1 => 
                array (
                ),
                2 => 
                array (
                ),
              ),
              'default' => 
              array (
                0 => '',
                1 => 
                array (
                ),
              ),
              'routes' => 
              array (
              ),
            ),
          ),
        ),
      ),
    ),
    'workspaces' => 
    array (
      'key' => '',
      'attributes' => 
      array (
        '_route' => 'workspaces',
      ),
      'rule' => 
      array (
        0 => 'any',
        1 => 
        array (
        ),
        2 => 
        array (
          '_route' => 'workspaces_workspace',
        ),
      ),
      'default' => 
      array (
        0 => '',
        1 => 
        array (
        ),
      ),
      'routes' => 
      array (
        '' => 
        array (
          'key' => '',
          'attributes' => 
          array (
          ),
          'rule' => 
          array (
            0 => '',
            1 => 
            array (
            ),
            2 => 
            array (
            ),
          ),
          'default' => 
          array (
            0 => '',
            1 => 
            array (
            ),
          ),
          'routes' => 
          array (
            'hooks' => 
            array (
              'key' => '',
              'attributes' => 
              array (
                '_route' => 'workspaces_workspace_hooks',
              ),
              'rule' => 
              array (
                0 => 'any',
                1 => 
                array (
                ),
                2 => 
                array (
                  '_route' => 'workspaces_workspace_hooks_uid',
                ),
              ),
              'default' => 
              array (
                0 => '',
                1 => 
                array (
                ),
              ),
              'routes' => 
              array (
              ),
            ),
            'members' => 
            array (
              'key' => '',
              'attributes' => 
              array (
                '_route' => 'workspaces_workspace_members',
              ),
              'rule' => 
              array (
                0 => 'any',
                1 => 
                array (
                ),
                2 => 
                array (
                  '_route' => 'workspaces_workspace_members_member',
                ),
              ),
              'default' => 
              array (
                0 => '',
                1 => 
                array (
                ),
              ),
              'routes' => 
              array (
              ),
            ),
            'permissions' => 
            array (
              'key' => '',
              'attributes' => 
              array (
                '_route' => 'workspaces_workspace_permissions',
              ),
              'rule' => 
              array (
                0 => '',
                1 => 
                array (
                ),
                2 => 
                array (
                ),
              ),
              'default' => 
              array (
                0 => '',
                1 => 
                array (
                ),
              ),
              'routes' => 
              array (
                'repositories' => 
                array (
                  'key' => '',
                  'attributes' => 
                  array (
                    '_route' => 'workspaces_workspace_permissions_repositories',
                  ),
                  'rule' => 
                  array (
                    0 => 'any',
                    1 => 
                    array (
                    ),
                    2 => 
                    array (
                      '_route' => 'workspaces_workspace_permissions_repositories_repo_slug',
                    ),
                  ),
                  'default' => 
                  array (
                    0 => '',
                    1 => 
                    array (
                    ),
                  ),
                  'routes' => 
                  array (
                  ),
                ),
              ),
            ),
            'pipelines-config' => 
            array (
              'key' => '',
              'attributes' => 
              array (
                '_route' => 'workspaces_workspace_pipelines_config',
              ),
              'rule' => 
              array (
                0 => '',
                1 => 
                array (
                ),
                2 => 
                array (
                ),
              ),
              'default' => 
              array (
                0 => '',
                1 => 
                array (
                ),
              ),
              'routes' => 
              array (
                'identity' => 
                array (
                  'key' => '',
                  'attributes' => 
                  array (
                    '_route' => 'workspaces_workspace_pipelines_config_identity',
                  ),
                  'rule' => 
                  array (
                    0 => '',
                    1 => 
                    array (
                    ),
                    2 => 
                    array (
                    ),
                  ),
                  'default' => 
                  array (
                    0 => '',
                    1 => 
                    array (
                    ),
                  ),
                  'routes' => 
                  array (
                    'oidc' => 
                    array (
                      'key' => '',
                      'attributes' => 
                      array (
                        '_route' => 'workspaces_workspace_pipelines_config_identity_oidc',
                      ),
                      'rule' => 
                      array (
                        0 => 'any',
                        1 => 
                        array (
                        ),
                        2 => 
                        array (
                          '_route' => 'workspaces_workspace_pipelines_config_identity_oidc_well_known',
                        ),
                      ),
                      'default' => 
                      array (
                        0 => '',
                        1 => 
                        array (
                        ),
                      ),
                      'routes' => 
                      array (
                        'keys.json' => 
                        array (
                          'key' => '',
                          'attributes' => 
                          array (
                            '_route' => 'workspaces_workspace_pipelines_config_identity_oidc_keys_json',
                          ),
                          'rule' => 
                          array (
                            0 => '',
                            1 => 
                            array (
                            ),
                            2 => 
                            array (
                            ),
                          ),
                          'default' => 
                          array (
                            0 => '',
                            1 => 
                            array (
                            ),
                          ),
                          'routes' => 
                          array (
                          ),
                        ),
                        '' => 
                        array (
                          'key' => '',
                          'attributes' => 
                          array (
                          ),
                          'rule' => 
                          array (
                            0 => '',
                            1 => 
                            array (
                            ),
                            2 => 
                            array (
                            ),
                          ),
                          'default' => 
                          array (
                            0 => '',
                            1 => 
                            array (
                            ),
                          ),
                          'routes' => 
                          array (
                            'openid-configuration' => 
                            array (
                              'key' => '',
                              'attributes' => 
                              array (
                                '_route' => 'workspaces_workspace_pipelines_config_identity_oidc_well_known_openid_configuration',
                              ),
                              'rule' => 
                              array (
                                0 => '',
                                1 => 
                                array (
                                ),
                                2 => 
                                array (
                                ),
                              ),
                              'default' => 
                              array (
                                0 => '',
                                1 => 
                                array (
                                ),
                              ),
                              'routes' => 
                              array (
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
                'variables' => 
                array (
                  'key' => '',
                  'attributes' => 
                  array (
                    '_route' => 'workspaces_workspace_pipelines_config_variables',
                  ),
                  'rule' => 
                  array (
                    0 => 'any',
                    1 => 
                    array (
                    ),
                    2 => 
                    array (
                      '_route' => 'workspaces_workspace_pipelines_config_variables_variable_uuid',
                    ),
                  ),
                  'default' => 
                  array (
                    0 => '',
                    1 => 
                    array (
                    ),
                  ),
                  'routes' => 
                  array (
                  ),
                ),
              ),
            ),
            'projects' => 
            array (
              'key' => '',
              'attributes' => 
              array (
                '_route' => 'workspaces_workspace_projects',
              ),
              'rule' => 
              array (
                0 => 'any',
                1 => 
                array (
                ),
                2 => 
                array (
                  '_route' => 'workspaces_workspace_projects_project_key',
                ),
              ),
              'default' => 
              array (
                0 => '',
                1 => 
                array (
                ),
              ),
              'routes' => 
              array (
              ),
            ),
            'search' => 
            array (
              'key' => '',
              'attributes' => 
              array (
                '_route' => 'workspaces_workspace_search',
              ),
              'rule' => 
              array (
                0 => '',
                1 => 
                array (
                ),
                2 => 
                array (
                ),
              ),
              'default' => 
              array (
                0 => '',
                1 => 
                array (
                ),
              ),
              'routes' => 
              array (
                'code' => 
                array (
                  'key' => '',
                  'attributes' => 
                  array (
                    '_route' => 'workspaces_workspace_search_code',
                  ),
                  'rule' => 
                  array (
                    0 => '',
                    1 => 
                    array (
                    ),
                    2 => 
                    array (
                    ),
                  ),
                  'default' => 
                  array (
                    0 => '',
                    1 => 
                    array (
                    ),
                  ),
                  'routes' => 
                  array (
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);