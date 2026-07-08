<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Domain;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

abstract class Controller
{
     public $currentDomainId;
    public $defaultTheme;
    public $settings;
    public function __construct(Request $request)
    {
        $hostName = $request->getHost();
		$hostName = preg_replace('/^www\./i', '', $hostName);
        $domainId = Domain::where('domain', $hostName)->first()->id ?? 0;
        $this->currentDomainId = $domainId;
        $this->defaultTheme = Domain::where('domain', $hostName)->first()->default_theme ?? 'default';

        $data['categoryMenu'] = Category::where('domain_id', $domainId)->orderBy('id', 'asc')->get();
        $data['websiteSetting'] = Setting::where('domain_id', $domainId)->first();
        $this->settings = $data['websiteSetting'];
        View::share($data);
    }
}
