<?php
/**
 * @var \TAO\Fields\Model $row
 * @var \TAO\Fields\Model\User $user
 * @var string $title
 * @var array $fields
 * @var int $count
 * @var int $per_page
 * @var int $numPages
 * @var \TAO\Fields\Model[] $rows
 * @var bool $can_add
 * @var bool $can_edit
 * @var bool $can_delete
 * @var bool $can_copy
 * @var string $add_text
 * @var array $filter
 * @var bool $with_filter
 * @var bool $with_filter
 * @var string $filter_url
 * @var string $reset_filter_url
 * @var bool $sidebar_visible
 * @var bool $filter_empty
 * @var bool $with_row_actions
 * @var array $pager_callback
 * @var int $page
 */
?>
@if ($with_row_actions)
    <td class="actions">
    
        @if ($can_view && $row->accessView($user))
            <a class="action-button button-view" href="{{ url($controller->actionUrl('view', ['id' => $row->getKey() ])) }}">@include('themedna.button.view')</a>
        @endif
    
        @if ($can_edit && $row->accessEdit($user))
            <a class="action-button button-edit" href="{{ url($controller->actionUrl('edit', ['id' => $row->getKey() ])) }}">@include('themedna.button.edit')</a>
        @endif
        
        @if ($can_delete && $row->accessDelete($user))
            <a onClick="return confirm('Вы уверены?')" class="action-button button-delete" href="{{ url($controller->actionUrl('delete', ['id' => $row->getKey() ])) }}">@include('themedna.button.delete')</a>
        @endif
    </td>
@endif
