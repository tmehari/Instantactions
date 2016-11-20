<?= $this->url->link('<i class="fa fa-pencil-square-o fa-fw"></i>', 'TaskModificationController', 'edit', array('task_id' => $task['id'], 'project_id' => $task['project_id']), false, 'popover') ?>
<?php if ($this->projectRole->canRemoveTask($task)): ?>
                <?= $this->url->link('<i class="fa fa-trash-o fa-fw"></i>', 'TaskSuppressionController', 'confirm', array('task_id' => $task['id'], 'project_id' => $task['project_id']), false, 'popover') ?>
<?php endif ?>
<?php if (isset($task['is_active']) && $this->projectRole->canChangeTaskStatusInColumn($task['project_id'], $task['column_id'])): ?>
            <?php if ($task['is_active'] == 1): ?>
                <?= $this->url->link('<i class="fa fa-times fa-fw"></i>', 'TaskStatusController', 'close', array('task_id' => $task['id'], 'project_id' => $task['project_id']), false, 'popover') ?>
            <?php else: ?>
                <?= $this->url->link('<i class="fa fa-check-square-o fa-fw"></i>', 'TaskStatusController', 'open', array('task_id' => $task['id'], 'project_id' => $task['project_id']), false, 'popover') ?>
            <?php endif ?>
<?php endif ?>
