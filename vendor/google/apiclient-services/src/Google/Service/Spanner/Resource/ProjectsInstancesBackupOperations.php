<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

/**
 * The "backupOperations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $spannerService = new Google_Service_Spanner(...);
 *   $backupOperations = $spannerService->backupOperations;
 *  </code>
 */
class Google_Service_Spanner_Resource_ProjectsInstancesBackupOperations extends Google_Service_Resource
{
  /**
   * Lists the backup long-running operations in the given instance. A backup
   * operation has a name of the form `projects//instances//backups//operations/`.
   * The long-running operation metadata field type `metadata.type_url` describes
   * the type of the metadata. Operations returned include those that have
   * completed/failed/canceled within the last 7 days, and pending operations.
   * Operations returned are ordered by
   * `operation.metadata.value.progress.start_time` in descending order starting
   * from the most recently started operation.
   * (backupOperations.listProjectsInstancesBackupOperations)
   *
   * @param string $parent Required. The instance of the backup operations. Values
   * are of the form `projects//instances/`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken If non-empty, `page_token` should contain a
   * next_page_token from a previous ListBackupOperationsResponse to the same
   * `parent` and with the same `filter`.
   * @opt_param int pageSize Number of operations to be returned in the response.
   * If 0 or less, defaults to the server's maximum allowed page size.
   * @opt_param string filter A filter expression that filters what operations are
   * returned in the response.
   *
   * The filter expression must specify the field name of an operation, a
   * comparison operator, and the value that you want to use for filtering. The
   * value must be a string, a number, or a boolean. The comparison operator must
   * be <, >, <=, >=, !=, =, or :. Colon ‘:’ represents a HAS operator which is
   * roughly synonymous with equality. Filter rules are case insensitive.
   *
   * The long-running operation fields eligible for filtering are:   * `name` -->
   * The name of the long-running operation   * `done` --> False if the operation
   * is in progress, else true.   * `metadata.type_url` (using filter string
   * `metadata.@type`) and fields      in `metadata.value` (using filter string
   * `metadata.`,      where  is a field in metadata.value) are eligible for
   * filtering.   * `error` --> Error associated with the long-running operation.
   * * `response.type_url` (using filter string `response.@type`) and fields
   * in `response.value` (using filter string `response.`,      where  is a field
   * in response.value) are eligible for      filtering.
   *
   * To filter on multiple expressions, provide each separate expression within
   * parentheses. By default, each expression is an AND expression. However, you
   * can include AND, OR, and NOT expressions explicitly.
   *
   * Some examples of using filters are:
   *
   *   * `done:true` --> The operation is complete.   * `metadata.database:prod`
   * --> The database the backup was taken from has a name containing
   * the string "prod".   * `(metadata.@type:type.googleapis.com/google.spanner.ad
   * min.database.v1.CreateBackupMetadata)      AND (metadata.name:howl)      AND
   * (metadata.progress.start_time < \"2018-03-28T14:50:00Z\")      AND (error:*)`
   * --> Return CreateBackup operations where the created backup name
   * contains the string "howl", the progress.start_time of the
   * backup operation is before 2018-03-28T14:50:00Z, and the
   * operation returned an error.
   * @return Google_Service_Spanner_ListBackupOperationsResponse
   */
  public function listProjectsInstancesBackupOperations($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Spanner_ListBackupOperationsResponse");
  }
}
