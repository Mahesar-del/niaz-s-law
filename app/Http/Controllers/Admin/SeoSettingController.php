<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SeoSetting;
use Illuminate\Http\Request;

class SeoSettingController extends Controller
{
    // Define all manageable pages with their labels and default values
    public static array $pages = [
        'home'         => ['label' => 'Home Page',         'default_title' => 'Niaz Law P.C. | Expert Legal Counsel in Illinois'],
        'about'        => ['label' => 'About Us',          'default_title' => 'About Us - Niaz Law P.C.'],
        'attorneys'    => ['label' => 'Attorneys',         'default_title' => 'Our Attorneys - Niaz Law P.C.'],
        'capabilities' => ['label' => 'Capabilities',      'default_title' => 'Legal Capabilities - Niaz Law P.C.'],
        'contact'      => ['label' => 'Contact Us',        'default_title' => 'Contact Us - Niaz Law P.C.'],
        'blog'         => ['label' => 'Blog / Articles',   'default_title' => 'Articles & Perspectives - Niaz Law P.C.'],
        'case-study'   => ['label' => 'Case Studies',      'default_title' => 'Case Studies - Niaz Law P.C.'],
        'insights'     => ['label' => 'Insights',          'default_title' => 'Insights, News & Reports - Niaz Law P.C.'],
    ];

    public function edit()
    {
        $seoMap = SeoSetting::all()->keyBy('page');

        return view('admin.seo-settings', [
            'pages'  => self::$pages,
            'seoMap' => $seoMap,
        ]);
    }

    public function update(Request $request)
    {
        $r = $request->validate([
            'seo.*.meta_title'       => 'nullable|string|max:160',
            'seo.*.meta_description' => 'nullable|string|max:320',
            'seo.*.meta_keywords'    => 'nullable|string|max:500',
            'seo.*.meta_robots'      => 'nullable|string|max:100',
        ]);

        foreach ($request->input('seo', []) as $pageKey => $data) {
            if (!array_key_exists($pageKey, self::$pages)) continue;

            SeoSetting::updateOrCreate(
                ['page' => $pageKey],
                [
                    'meta_title'       => $data['meta_title']       ?? null,
                    'meta_description' => $data['meta_description'] ?? null,
                    'meta_keywords'    => $data['meta_keywords']    ?? null,
                    'meta_robots'      => $data['meta_robots']      ?? null,
                ]
            );
        }

        return back()->with('success', 'SEO settings updated successfully.');
    }
}
