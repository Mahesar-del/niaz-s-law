@props(['name'])
<svg {{ $attributes->merge(['class' => 'admin-ui-icon']) }} viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
    @if ($name === 'home')<path d="m3 11 9-8 9 8v10H3z"/><path d="M9 21v-6h6v6"/>
    @elseif ($name === 'user')<circle cx="12" cy="8" r="4"/><path d="M4 21c.8-4 3.4-6 8-6s7.2 2 8 6"/>
    @elseif ($name === 'users')<circle cx="9" cy="8" r="3"/><circle cx="17" cy="9" r="2.5"/><path d="M3 20c.6-3.5 2.8-5.5 6-5.5s5.4 2 6 5.5"/><path d="M15 14.5c3.1.2 5.1 2.1 5.6 5"/>
    @elseif ($name === 'chart')<path d="M4 20V10"/><path d="M10 20V4"/><path d="M16 20v-7"/><path d="M22 20H2"/>
    @elseif ($name === 'mail')<rect x="3" y="5" width="18" height="14" rx="2"/><path d="m3 7 9 6 9-6"/>
    @elseif ($name === 'file')<path d="M6 3h8l4 4v14H6z"/><path d="M14 3v5h5"/><path d="M9 13h6M9 17h6"/>
    @elseif ($name === 'edit')<path d="m4 20 4.5-1 10-10a2.5 2.5 0 0 0-3.5-3.5l-10 10z"/><path d="m13.5 6.5 4 4"/>
    @elseif ($name === 'bulb')<path d="M9 18h6"/><path d="M10 22h4"/><path d="M8.6 15.5C7 14.3 6 12.3 6 10a6 6 0 1 1 12 0c0 2.3-1 4.3-2.6 5.5-.7.5-1.1 1.2-1.1 2H9.7c0-.8-.4-1.5-1.1-2Z"/>
    @elseif ($name === 'search')<circle cx="11" cy="11" r="6"/><path d="m20 20-4.2-4.2"/>
    @elseif ($name === 'bell')<path d="M18 9a6 6 0 0 0-12 0c0 7-3 7-3 9h18c0-2-3-2-3-9"/><path d="M10 22h4"/>
    @elseif ($name === 'external')<path d="M14 4h6v6"/><path d="m20 4-9 9"/><path d="M19 14v5H5V5h5"/>
    @elseif ($name === 'logout')<path d="M10 17l5-5-5-5"/><path d="M15 12H3"/><path d="M21 19V5a2 2 0 0 0-2-2h-5"/>
    @endif
</svg>
