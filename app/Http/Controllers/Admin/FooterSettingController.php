<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\FooterSetting;
use App\Models\Capability;
use App\Models\StaticPage;
use Illuminate\Http\Request;

class FooterSettingController extends Controller
{
    public function edit()
    {
        return view('admin.footer-settings', [
            'settings'     => FooterSetting::firstOrCreate(['id' => 1]),
            'capabilities' => Capability::orderBy('title')->get(),
        ]);
    }

    public function update(Request $r)
    {
        // Handle static page deletion
        if ($r->filled('delete_static_page')) {
            StaticPage::findOrFail($r->input('delete_static_page'))->delete();
            return back()->with('success', 'Static page deleted.');
        }

        $pages = ['attorneys', 'about', 'contact-us'];
        $links = ['blog', 'case-study', 'insights'];

        FooterSetting::updateOrCreate(['id' => 1], [
            'capability_ids' => $r->input('capability_ids', []),
            'page_links'     => array_values(array_intersect($pages, $r->input('page_links', []))),
            'footer_links'   => array_values(array_intersect($links, $r->input('footer_links', []))),
            'about_text'     => $r->input('about_text'),
            'copyright_text' => $r->input('copyright_text'),
            'facebook_url'   => $r->input('facebook_url'),
            'linkedin_url'   => $r->input('linkedin_url'),
            'twitter_url'    => $r->input('twitter_url'),
            'instagram_url'  => $r->input('instagram_url'),
        ]);

        return back()->with('success', 'Footer settings updated.');
    }
}

