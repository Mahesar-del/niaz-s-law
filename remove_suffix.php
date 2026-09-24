<?php
$caps = \App\Models\Capability::all();
foreach($caps as $c) {
    if ($c->page_title) {
        $c->page_title = str_replace(' - Comprehensive Legal Guidance', '', $c->page_title);
        $c->save();
    }
}
echo 'Removed suffix';
