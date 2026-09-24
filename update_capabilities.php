<?php
$capabilities = \App\Models\Capability::whereNull('slug')->get(); 
foreach($capabilities as $cap) { 
    $cap->slug = \Illuminate\Support\Str::slug($cap->title); 
    $cap->page_title = $cap->title . ' Detailed Overview'; 
    $cap->page_description = 'This is the detailed page description for ' . $cap->title; 
    $cap->hero_image = 'uploads/capabilities/capability-343b0780-9e76-4d81-82a0-c3def197416f.png'; 
    $cap->overview_heading = 'Overview of ' . $cap->title; 
    $cap->overview_image_left = 'uploads/capabilities/capability-083654c9-bcae-4a5a-bafc-bcc404a2f447.png'; 
    $cap->overview_image_right = 'uploads/capabilities/capability-d05a0342-b944-40cf-b10d-c68fb166d9cc.png'; 
    $cap->overview_paragraph_one = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'; 
    $cap->overview_paragraph_two = 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.'; 
    $cap->experience = 'Business Contracts — Drafting and reviewing agreements.\nContract Negotiations — Helping businesses negotiate clear terms.'; 
    $cap->representative_matters = 'Advised businesses on negotiating and structuring complex commercial agreements.\nAssisted clients with vendor, supplier, procurement, and service agreements.'; 
    $cap->save(); 
} 
echo 'Updated successfully.';
