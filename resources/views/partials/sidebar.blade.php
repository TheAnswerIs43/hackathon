<div class="sidebar-admin overflow-y-auto">
    <div class="sidebar-menu py-3">
        @foreach(config('admin.menu_option') as $option)
            <div class="sidebar-option-container {{ (request()->is($option['path']) || str_contains(request()->path(), $option['path'])) ? 'active' : '' }}">
                @include('partials.sidebar-option', [
                    "sidebar_option_icon" => $option['icon'],
                    "sidebar_option_label" => $option['label'],
                    "url" => $option['path']
                ])
            </div>
        @endforeach
    </div>
</div>
